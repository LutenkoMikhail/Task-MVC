<?php


namespace App\Model;

use Core\Model;
use PDO;

class Post extends Model
{
    protected $tableName = 'posts';

    /**
     * Post constructor.
     */
    public function __construct()
    {
        $this->getDB();
    }

    /**
     * Insert New Post
     * @param array $postData
     */
    public function insert(array $postData)
    {
        $sql = "INSERT INTO {$this->tableName} (title,content) VALUES (:title,:content)";
        $this->sql($sql, $postData);

        $this->lastInsertId = $this->db->lastInsertId();

        if ($_FILES[NAME_ARRAY_FOR_LOADSFILES]['error'] === 0) {
            $pathParts = pathinfo($_FILES[NAME_ARRAY_FOR_LOADSFILES]['name']);
            $fileNameMicroTime = $pathParts['filename']
                . microtime()
                . '.'
                . $pathParts['extension'];

            $sql = "UPDATE {$this->tableName} SET image_path="
                . "'"
                . RESOURCES_IMAGE_POSTS
                . $this->lastInsertId
                . "/"
                . $fileNameMicroTime
                . "'"
                . " WHERE id = {$this->lastInsertId};";
            $this->sql($sql);

            $dirNewPost = FULL_PATH_IMAGE_POSTS . $this->lastInsertId . DIRECTORY_SEPARATOR;
            if (!file_exists($dirNewPost)) {
                mkdir($dirNewPost);
            }
            addImageToPost($_FILES[NAME_ARRAY_FOR_LOADSFILES]['tmp_name'],
                $dirNewPost
                . $fileNameMicroTime);
        }
    }

    /**
     * Get a post by id
     * @param int $id
     * @return bool
     */
    public function getPostById(int $id)
    {
        $sql = "SELECT * FROM {$this->tableName} WHERE id ={$id}";
        $this->sql($sql);
        $post = $this->stmt->fetch(PDO::FETCH_ASSOC);
        return !empty($post) ? $post : false;
    }

    /**
     * Get all posts
     * @return bool
     */
    public function getAllPost()
    {
        $sql = "SELECT * FROM {$this->tableName}";
        $this->sql($sql);
        $posts = $this->stmt->fetchAll(PDO::FETCH_ASSOC);
        return !empty($posts) ? $posts : false;
    }

    /**
     * Update post
     * @param array $postData
     */
    public function updatePost(array $postData)
    {

        $image_path = "'test_path'";
        $dirPost = FULL_PATH_IMAGE_POSTS . $postData['id'] . DIRECTORY_SEPARATOR;

        if (!file_exists($dirPost)) {
            if ($_FILES[NAME_ARRAY_FOR_LOADSFILES]['error'] === 0) {
                mkdir($dirPost);
            }
        } else {
            deleteImagesInPost($dirPost);
        }
        if ($_FILES[NAME_ARRAY_FOR_LOADSFILES]['error'] === 0) {
            $pathParts = pathinfo($_FILES[NAME_ARRAY_FOR_LOADSFILES]['name']);
            $fileNameMicroTime = $pathParts['filename']
                . microtime()
                . '.'
                . $pathParts['extension'];


            updateImageToPost($_FILES[NAME_ARRAY_FOR_LOADSFILES]['tmp_name'],
                $dirPost
                . $fileNameMicroTime);

            $image_path = "'"
                . RESOURCES_IMAGE_POSTS
                . $postData['id']
                . "/"
                . $fileNameMicroTime
                . "'";
        }

        $updateAtToday = date("Y-m-d H:i:s");
        $sql = "UPDATE {$this->tableName} SET image_path={$image_path}"
            . ","
            . "title="
            . "'"
            . "{$postData['title']}"
            . "'"
            . ","
            . "content="
            . "'"
            . "{$postData['content']}"
            . "'"
            . ","
            ."update_at="
            . "'"
            .$updateAtToday
            . "'"
            . " WHERE id = {$postData['id']};";
        $this->sql($sql);
    }

    /**
     * Delete post
     * @param int $id
     */
    public function deletePost(int $id)
    {
        $post = $this->getPostById($id);

        $sql = "DELETE FROM {$this->tableName} WHERE id={$id}";
        $this->sql($sql);
        if ($post['image_path'] !== TEST_PATH) {
            $filePath = str_replace("/", "\\", PATH_POST_IMAGE . $post['image_path']);
            $filePath = pathinfo($filePath, PATHINFO_DIRNAME);
            deleteImagesInPost($filePath);
        }
    }
}
