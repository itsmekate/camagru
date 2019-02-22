   <style type="text/css">
        body{ font: 14px sans-serif; }
        .wrapper{ width: 350px; padding: 20px;}
        .card-form {margin: 0 auto;}
    </style>
 <div class="card form-card register_form">
    <h2>Sign Up</h2>
    <p>Please fill this form to create an account.</p>
    <form action="" method="post">
        <div class="form-group">
            <label>Username</label>
            <input type="text" name="username" class="form-control <?php echo (!empty($username_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $username; ?>">
                <div class="invalid-feedback"><?php echo $username_err; ?></div>
        </div>
        <div class="form-group">
            <label>Email</label>
            <input type="text" name="email" class="form-control <?php echo (!empty($email_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $email; ?>">
                <!--  -->
            <div class="invalid-feedback"><?php echo $email_err; ?></div>
        </div>
            <div class="form-group">
            <label>Name</label>
            <input type="text" name="fname" class="form-control <?php echo (!empty($name_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $name; ?>">
                <!--  -->
            <div class="invalid-feedback"><?php echo $name_err; ?></div>
        </div>
         <div class="form-group">
            <label>Surname</label>
            <input type="text" name="surname" class="form-control <?php echo (!empty($surname_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $surname; ?>">
                <!--  -->
                <div class="invalid-feedback"><?php echo $surname_err; ?></div>
         </div>
        <div class="form-group">
            <label>Password</label>
            <input type="password" name="password" class="form-control <?php echo (!empty($password_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $password; ?>">
                <!--  -->
            <div class="invalid-feedback"><?php echo $password_err; ?></div>
        </div>
        <div class="form-group">
            <label>Confirm Password</label>
            <input type="password" name="confirm_password" class="form-control  <?php echo (!empty($confirm_password_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $confirm_password; ?>">
                <!--  -->
                <div class="invalid-feedback"><?php echo $confirm_password_err; ?></div>
        </div>
        <div class="form-group">
            <input type="submit" class="btn btn-primary" value="Submit">
            <input type="reset" class="btn btn-default" value="Reset">
        </div>
        <p>Already have an account? <a href="login">Login here</a>.</p>
    </form>
</div>