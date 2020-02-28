<?php

namespace Core;

use PDO;

abstract class Model
{
    protected $db = null;
    protected $tableName = '';
    protected $lastInsertId;
    protected $stmt;

    /**
     * Get last record id
     * @return mixed
     */
    public function getLastInsertId(): int
    {
        return $this->lastInsertId;
    }

    /**
     * Connect DataBase
     * @return PDO|null
     */
    public function getDB()
    {
        if ($this->db === null) {
            try {
                $this->db = new PDO(
                    "mysql:host=" . DB_HOST . ";dbname=" . DB_NAME,
                    DB_USER,
                    DB_PASSWORD,
                    $options = [
                        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
                        PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES " . CHARSET
                    ]
                );
            } catch (PDOException $e) {
                throw new Exception($e->getMessage());
            }
        }
        return $this->db;
    }

    /**
     * Query sql execution
     * @param string $sql
     * @param array $postData
     */
    protected function sql(string $sql, array $postData = [])
    {
        try {
            $this->stmt = $this->db->prepare($sql);
            if ($this->stmt !== false) {
                $this->stmt->execute($postData);
            }
        } catch (PDOException $e) {
            throw new Exception($e->getMessage());
        }
    }

}
