<?php \Core\View::render('parts/header.php', ['title' => 'User Login!']); ?>

<div class="jumbotron">


    <div class="container">
        <div class="container py-5">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="text-center mb-5">Login</h2>
                    <div class="row">
                        <div class="col-md-6 mx-auto">
                            <div class="card border-secondary">

                                <div class="card-body">
                                    <form method="POST" action="/auth" class="form" role="form">
                                        <div class="form-group">
                                            <label for="inputFirstName"> Name</label>
                                            <input type="text" class="form-control" id="inputFirstName"
                                                   name="textFirstName" placeholder="Name" required
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
                                            <label for="inputPassword3">Password</label>
                                            <input type="password" class="form-control" id="inputPassword3"
                                                   name="password" placeholder="Password"
                                                   title="At least 8 characters with letters and numbers" required="">
                                            <?php if (!empty($passwordError)): ?>
                                                <div class="alert alert-danger" role="alert">
                                                    <?php echo $passwordError; ?>
                                                    <?php unset($passwordError); ?>
                                                </div>
                                            <?php endif; ?>
                                        </div>
                                        <div class="form-group">
                                            <button type="submit" class="btn btn-success btn-lg float-right">Login
                                            </button>
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
