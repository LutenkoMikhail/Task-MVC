<?php \Core\View::render('parts/header.php', ['title' => 'Edit Task.']); ?>

<div class="jumbotron">
    <div class="container">
        <row class="col-sm-12">
            <h3 class="display-4">Edit Task Form </h3>
            <p><strong>User : <?php echo $data['user_name'] ?></strong></p>
            <p><strong>Email : <?php echo $data['email'] ?></strong></p>

        </row>
        <div class="row">
            <div class="div col-sm-8 align-content-center align-self-center">
                <form method="POST" action="update">
                    <div class="form-group">
                        <label for="task">Task</label>
                        <input type="text" class="form-control" id="task" name="task"
                               pattern="[A-Za-zА-Яа-яЁё0-9]{10,255}"
                               value="<?php echo !empty($data['task']) ? $data['task'] : '' ?>">
                        <?php if (!empty($task_error)): ?>
                            <div class="alert alert-danger" role="alert">
                                <?php echo $task_error; ?>
                                <?php unset($task_error); ?>
                            </div>
                        <?php endif; ?>

                        Task edit :<?php
                        if ($data['is_edit'] === null) {
                            echo 'No.';
                        } else {
                            echo 'Yes.';
                        }
                        if ($data['is_task'] !== null) {
                            echo '<hr>';
                            echo 'Task edited by administrator.';
                        }

                        ?>
                        <hr>
                        <button type="submit" class="btn btn-primary">Save Task.</button>
                    </div>
                </form>
            </div>
        </div>
    </div> <!-- /container -->
</div>

<?php \Core\View::render('parts/footer.php'); ?>

