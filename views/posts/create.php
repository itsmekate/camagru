 <style type="text/css">
        body{ font: 14px sans-serif; }
        .wrapper{ width: 350px; padding: 20px; }
</style>
<!--     <div class="wrapper">
        <h2>Add Post</h2>
        <p>Please fill in to create post.</p>
        <form action="" method="post">
            <div class="form-group">
                <label>Comment</label>
                <input type="text" name="comment" class="form-control <?php echo (!empty($comment_err)) ? 'is-invalid' : ''; ?>"> 
                 value="<?php echo $username; ?>" 
                <div class="invalid-feedback">
                  <?php echo $comment_err; ?>
                </div>
            </div>
            <div class="form-group">
                <label>Image</label>
                <input type="test" name="image" class="form-control <?php echo (!empty($password_err)) ? 'is-invalid' : ''; ?>">
                  <input type="file" name="image" class=""> 
                 <div class="invalid-feedback">
                   <?php echo $image_err; ?>
                </div>
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-primary" value="Add">
            </div>
           
        </form> 
    </div>  -->
    <video id="video" width="640" height="480" autoplay></video>
            <button id="snap">Snap Photo</button>
            <canvas id="canvas" width="640" height="480"></canvas>
            <!-- <p name="imageUrl" id="img"></p> -->

    <script type="text/javascript">
        
        var video = document.getElementById('video');
        
        if(navigator.mediaDevices && navigator.mediaDevices.getUserMedia) {
            navigator.mediaDevices.getUserMedia({ video: true }).then(function(stream) {
                video.srcObject = stream;
                video.play();
            });
        }

        // Elements for taking the snapshot
        var canvas = document.getElementById('canvas');
        var context = canvas.getContext('2d');
        var video = document.getElementById('video');
        var imgUrl = document.getElementById('img');
        
        // Trigger photo take
        document.getElementById("snap").addEventListener("click", function() {
            context.drawImage(video, 0, 0, 640, 480);
            // imgUrl.value = canvas.toDataURL();
            // console.log(canvas.toDataURL());
        });
        

    </script>
