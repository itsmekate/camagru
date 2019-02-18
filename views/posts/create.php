<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <style type="text/css">
        body{ font: 14px sans-serif; }
        .wrapper{ width: 350px; padding: 20px; }
    </style>
</head>
<body>
    <div class="wrapper">
        <h2>Add Post</h2>
        <p>Please fill in to create post.</p>
        <form action="" method="post">
            <div class="form-group <?php echo (!empty($comment_err)) ? 'has-error' : ''; ?>">
                <label>Comment</label>
                <input type="text" name="comment" class="form-control"> <!-- value="<?php echo $username; ?>" -->
                <!-- <span class="help-block"><?php echo $comment_err; ?></span> -->
            </div>
            <div class="form-group <?php echo (!empty($password_err)) ? 'has-error' : ''; ?>">
                <label>Image</label>
                <input type="test" name="image" class="form-control">
                <!-- <input type="file" name="image" class=""> -->
                <!-- <span class="help-block"><?php echo $image_err; ?></span> -->
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-primary" value="Add">
            </div>
        </form>
    </div>
</body>
</html>
