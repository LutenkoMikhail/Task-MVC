<?php \Core\View::render('parts/header.php', ['title' => 'Tasks.']); ?>

<div class="jumbotron">
    <div class="container">
        <?php if ($paginator !== false) : ?>
            <div class="row">
                <div class="col-sm-3">
                    <?php foreach ($paginator as $task): ?>
                        <div class="card" style="width: 18rem;">
                            <div class="card-body">
                                User name: <?php echo $task['user_name']; ?>
                                <hr>
                                Email: <?php echo $task['email']; ?>
                                <hr>
                                Task: <?php echo $task['task']; ?>
                                <hr>
                                Date: <?php echo $task['created_at']; ?>
                                <hr>
                                Task edit :<?php
                                if ($task['is_edit'] === null) {
                                    echo 'No.';
                                } else {
                                    echo 'Yes.';
                                }
                                if ($task['is_task'] !== null) {
                                    echo '<hr>';
                                    echo 'Task edited by administrator.';
                                }

                                ?>
                                <hr>
                                <a href="/task/<?php echo $task['id']; ?>" class="btn btn-primary">Show</a>
                                <?php if (!empty($_SESSION["is_auth"])) { ?>
                                    <a href="/task/<?php echo $task['id']; ?>/edit" class="btn btn-success">Edit</a>
                                    <?php  if ($task['is_task'] === null) {  ?>
                                    <a href="/task/<?php echo $task['id']; ?>/complited" class="btn btn-danger">Task complited</a>
                                    <?php  }?>
                                   
                                <?php } ?>
                            </div>
                        </div>
                    <?php endforeach; ?>

                    <?php
                    echo $paginator;
                    ?>

                </div>
            </div>
        <?php else: ?>
            <h1>
                No tasks!
            </h1>
        <?php endif; ?>
    </div>
</div>
<?php \Core\View::render('parts/footer.php'); ?>

