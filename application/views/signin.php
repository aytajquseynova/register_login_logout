<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:400,700">
    <title>User Signin</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</head>

<body>
    <div class="container mt-5">
        <div class="signup-form">
            <h2 class="text-center">Sign in</h2>
            <p class="hint-text text-center">Sign in to start your session</p>

            <?php echo form_open('Signin', ['name' => 'userregistration', 'autocomplete' => 'off']); ?>

            <div class="form-group">
                <!-- Error message -->
                <?php if ($this->session->flashdata('error')) { ?>
                    <p style="color:red"><?php echo $this->session->flashdata('error'); ?></p>
                <?php } ?>

                <?php echo form_input(['name' => 'emailid', 'class' => 'form-control', 'value' => set_value('emailid'), 'placeholder' => 'Enter your Email id']); ?>
                <?php echo form_error('emailid', "<div style='color:red'>", "</div>"); ?>
            </div>

            <div class="form-group ">
                <?php echo form_password(['name' => 'password', 'class' => 'form-control', 'value' => set_value('password'), 'placeholder' => 'Password']); ?>
                <?php echo form_error('password', "<div style='color:red'>", "</div>"); ?>
            </div>

            <div class="form-group">
                <?php echo form_submit(['name' => 'insert', 'value' => 'Submit', 'class' => 'btn btn-success btn-lg btn-block']); ?>
            </div>

            <?php echo form_close(); ?>
            <div class="text-center">Not Registered Yet? <a href="<?php echo site_url('Signup'); ?>">Sign up here</a></div>
        </div>
    </div>

</body>

</html>