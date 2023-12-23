<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:400,700">
    <title>User Registration</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>

</head>

<body>
    <div class="container mt-5">
        <div class="signup-form">
            <h2 class="text-center mb-4">Register</h2>
            <p class="hint-text text-center">Create your account. It's free and only takes a minute.</p>

            <?php echo form_open('Signup', ['name' => 'userregistration', 'autocomplete' => 'off']); ?>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <?php echo form_input(['name' => 'firstname', 'class' => 'form-control', 'value' => set_value('firstname'), 'placeholder' => 'Enter First Name']); ?>
                        <?php echo form_error('firstname', "<div style='color:red'>", "</div>"); ?>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <?php echo form_input(['name' => 'lastname', 'class' => 'form-control', 'value' => set_value('lastname'), 'placeholder' => 'Enter Last Name']); ?>
                        <?php echo form_error('lastname', "<div style='color:red'>", "</div>"); ?>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <?php echo form_input(['name' => 'emailid', 'class' => 'form-control', 'value' => set_value('emailid'), 'placeholder' => 'Enter your Email id']); ?>
                        <?php echo form_error('emailid', "<div style='color:red'>", "</div>"); ?>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <?php echo form_input(['name' => 'birthday', 'type' => 'date', 'class' => 'form-control', 'value' => set_value('birthday'), 'placeholder' => 'Enter your Birthday']); ?>
                        <?php echo form_error('birthday', "<div style='color:red'>", "</div>"); ?>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <?php echo form_password(['name' => 'password', 'class' => 'form-control', 'value' => set_value('password'), 'placeholder' => 'Password']); ?>
                        <?php echo form_error('password', "<div style='color:red'>", "</div>"); ?>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <?php echo form_password(['name' => 'confirmpassword', 'class' => 'form-control', 'value' => set_value('confirmpassword'), 'placeholder' => 'Confirm Password']); ?>
                        <?php echo form_error('confirmpassword', "<div style='color:red'>", "</div>"); ?>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <?php echo form_submit(['name' => 'insert', 'value' => 'Submit', 'class' => 'btn btn-success btn-lg btn-block']); ?>
                    </div>
                </div>
            </div>
            <?php echo form_close(); ?>
            <div class="text-center">Already have an account? <a href="<?php echo site_url('Signin'); ?>">Sign in</a></div>
        </div>
    </div>
</body>

</html>