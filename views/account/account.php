   <style type="text/css">
        body{ font: 14px sans-serif; }
        .wrapper{ width: 350px; padding: 20px;}
        .card-form {margin: 0 auto;}
    </style>
<div class="card form-card">
    <div class="wrapper">
        <h2>Account information</h2>
        <form action="" method="post">
            <div class="form-group">
                <label>Username: <?php echo $username; ?></label>
                <p>To change the username enter new:</p>
                <input type="text" name="username" class="form-control <?php echo (!empty($username_err)) ? 'is-invalid' : ''; ?>" value="">
                 <div class="invalid-feedback"><?php echo $username_err; ?></div>
            </div>
            <div class="form-group">
                <label>Email:  <?php echo $email; ?></label>
                 <p>To change the email enter new:</p>
                <input type="text" name="email" class="form-control <?php echo (!empty($email_err)) ? 'is-invalid' : ''; ?>" value="">
                <div class="invalid-feedback"><?php echo $email_err; ?></div>
            </div>
             <div class="form-group">
                <label>Name: <?php echo $name; ?></label>
                 <p>To change the name enter new:</p>
                <input type="text" name="fname" class="form-control <?php echo (!empty($name_err)) ? 'is-invalid' : ''; ?>" value="">
                <div class="invalid-feedback"><?php echo $name_err; ?></div>
            </div>
             <div class="form-group">
                <label>Surname:  <?php echo $surname; ?></label>
                 <p>To change the surname enter new:</p>
                <input type="text" name="surname" class="form-control <?php echo (!empty($surname_err)) ? 'is-invalid' : ''; ?>" value="">
                 <div class="invalid-feedback"><?php echo $surname_err; ?></div>
            </div>
            <div class="form-group">
                <label>Password</label>
                 <p>To change the password enter new:</p>
                <input type="password" name="password" class="form-control <?php echo (!empty($password_err)) ? 'is-invalid' : ''; ?>" value="">
                <div class="invalid-feedback"><?php echo $password_err; ?></div>
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-primary" value="Submit changes">
            </div>
        </form>
    </div>
</div>