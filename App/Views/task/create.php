<?php \Core\View::render('parts/header.php', ['title' => 'Create task.']); ?>

    <div class="jumbotron">

    <div class="container">
        <div class="row">
            <div class="div col-sm-8 align-content-center align-self-center">
                <h1 class="display-4">Create Task Form </h1>
                <form method="POST" action="store">
                    <div class="form-group">
                        <label for="userName">user name</label>
                        <input type="text" class="form-control" id="userName" name="userName" placeholder="user name"
                               pattern="[A-Za-zА-Яа-яЁё0-9]{2,50}" required value="<?php echo !empty($data['userName']) ? $data['userName'] : '' ?>">
                        <?php if (!empty($userNameError)): ?>
                            <div class="alert alert-danger" role="alert">
                                <?php echo $userNameError; ?>
                                <?php unset($userNameError); ?>
                            </div>
                        <?php endif; ?>
                    </div>
                    <div class="form-group">
                        <label for="email">email</label>
                        <input type="text" class="form-control" id="email" name="email" placeholder="email"
                               pattern="^(?:[a-z0-9]+(?:[-_.]?[a-z0-9]+)?@[a-z0-9_.-]+(?:\.?[a-z0-9]+)?\.[a-z]{2,5})$"
                               required value="<?php echo !empty($data['email']) ? $data['email'] : '' ?>">
                        <?php if (!empty($emailError)): ?>
                            <div class="alert alert-danger" role="alert">
                                <?php echo $emailError; ?>
                                <?php unset($emailError); ?>
                            </div>
                        <?php endif; ?>
                    </div>

                    <div class="form-group">
                        <label for="task">task</label>
                        <input type="text" class="form-control" id="task" name="task" placeholder="task"
                               pattern="[A-Za-zА-Яа-яЁё0-9]{10,255}"
                               required value="<?php echo !empty($data['task']) ? $data['task'] : '' ?>">
                        <?php if (!empty($taskError)): ?>
                            <div class="alert alert-danger" role="alert">
                                <?php echo $taskError; ?>
                                <?php unset($taskError); ?>
                            </div>
                        <?php endif; ?>
                    </div>



<!--                    <div class="form-group">-->
<!--                        <label for="task">task</label>-->
<!--                        <textarea name="task" id="task" class="form-control" cols="30" rows="10" maxlength="65000"-->
<!--                                  pattern="[A-Za-zА-Яа-яЁё0-9]{10,255}" required>--><?php //echo !empty($data['task']) ? $data['task'] : '' ?><!--</textarea>-->
<!--                        <div class="input-group mb-3">-->
<!--                        </div>-->
<!--                    </div>-->
                    <button type="submit" class="btn btn-primary">Creat Task.</button>
                </form>
            </div>
        </div>
    </div> <!-- /container -->

<?php \Core\View::render('parts/footer.php'); ?>