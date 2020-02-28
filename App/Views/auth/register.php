<?php \Core\View::render('parts/header.php',['title'=>'User Registration!']); ?>

<div class="jumbotron">

    <div class="container">
        <div class="container py-5">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="text-center mb-5">Create An Account</h2>
                    <div class="row">
                        <div class="col-md-6 mx-auto">
                            <div class="card border-secondary">
                                <div class="card-header">
                                    <h5 class="mb-0 my-2">Sign Up</h5>
                                </div>
                                <div class="card-body">
                                    <form method="POST"  action="users/store" class="form" role="form" >
                                        <div class="form-group">
                                            <label for="inputFirstName">First Name</label>
                                            <input type="text" class="form-control" id="inputFirstName" name="textFirstName" placeholder="First Name" required
                                                   value="<?php echo !empty($data['firstName']) ? $data['firstName'] : '' ?>"
                                            >
                                            <?php if (!empty($firstNameError)): ?>
                                                <div class="alert alert-danger" role="alert">
                                                    <?php echo $firstNameError; ?>
                                                    <?php unset($firstNameError); ?>
                                                </div>
                                            <?php endif; ?>
                                        </div>
                                        <div class="form-group">
                                            <label for="inputLastName">Last Name</label>
                                            <input type="text" class="form-control" id="inputLastName" name="textLastName" placeholder="Last Name" required
                                                   value="<?php echo !empty($data['lastName']) ? $data['lastName'] : '' ?>">
                                            <?php if (!empty($lastNameError)): ?>
                                                <div class="alert alert-danger" role="alert">
                                                    <?php echo $lastNameError; ?>
                                                    <?php unset($lastNameError); ?>
                                                </div>
                                            <?php endif; ?>
                                        </div>
                                        <div class="form-group">
                                            <label for="inputBirthday">Birthday</label>
                                            <input type="date" class="form-control" id="inputBirthday" name="dateBirthday" placeholder="Birthday" required
                                                   value="<?php echo !empty($data['birthday']) ? $data['birthday'] : '' ?>">
                                            <?php if (!empty($birthdayError)): ?>
                                                <div class="alert alert-danger" role="alert">
                                                    <?php echo $birthdayError; ?>
                                                    <?php unset($birthdayError); ?>
                                                </div>
                                            <?php endif; ?>
                                        </div>

                                        <div class="form-group">
                                            <label for="inputEmail3">Email</label>
                                            <input type="email" class="form-control" id="inputEmail3" name="email" placeholder="email@gmail.com" required
                                                   value="<?php echo !empty($data['email']) ? $data['email'] : '' ?>">
                                            <?php if (!empty($emailError)): ?>
                                                <div class="alert alert-danger" role="alert">
                                                    <?php echo $emailError; ?>
                                                    <?php unset($emailError); ?>
                                                </div>
                                            <?php endif; ?>
                                        </div>
                                        <div class="form-group">
                                            <label for="inputPassword3">Password</label>
                                            <input type="password" class="form-control" id="inputPassword3" name="password" placeholder="password" title="At least 8 characters with letters and numbers" required="">
                                            <?php if (!empty($passwordError)): ?>
                                                <div class="alert alert-danger" role="alert">
                                                    <?php echo $passwordError; ?>
                                                    <?php unset($passwordError); ?>
                                                </div>
                                            <?php endif; ?>
                                        </div>
                                        <div class="form-group">
                                            <button type="submit" class="btn btn-success btn-lg float-right">Register User!</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--/row-->

                </div>
                <!--/col-->
            </div>
            <!--/row-->
        </div>
        <!--/container-->
    </div> <!-- /container -->

    <?php \Core\View::render('parts/footer.php'); ?>
