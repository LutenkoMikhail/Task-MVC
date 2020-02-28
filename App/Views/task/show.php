<?php \Core\View::render('parts/header.php', ['title' => 'Task show.']); ?>

<div class="jumbotron">
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
            <a href="/" class="btn btn-primary">Back</a>

        </div>
    </div>
</div>

<?php \Core\View::render('parts/footer.php'); ?>

