 <style type="text/css">
        body{ font: 14px sans-serif; }
        .wrapper{ width: 350px; padding: 20px; }
</style>
<body>
    <div class="wrapper">
        <h2>Add Post</h2>
        <p>Please fill in to create post.</p>
        <form action="" method="post">
            <div class="form-group">
                <label>Comment</label>
                <input type="text" name="comment" class="form-control <?php echo (!empty($comment_err)) ? 'is-invalid' : ''; ?>"> <!-- value="<?php echo $username; ?>" -->
                <div class="invalid-feedback">
                  <?php echo $comment_err; ?>
                </div>
            </div>
            <div class="form-group">
                <label>Image</label>
                <input type="test" name="image" class="form-control <?php echo (!empty($password_err)) ? 'is-invalid' : ''; ?>">
                <!-- <input type="file" name="image" class=""> -->
                 <div class="invalid-feedback">
                  <?php echo $image_err; ?>
                </div>
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-primary" value="Add">
            </div>
        </form>
    </div>
</body>
</html>
