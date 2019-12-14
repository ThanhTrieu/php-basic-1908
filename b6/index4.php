<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Upload file</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
</head>
<body>
	<div class="container">
        <?php
          $state = $_GET['state'] ?? '';
          $file = $_GET['file'] ?? '';
          $strFile = $_GET['files'] ?? '';
          $arrFile = explode(',', $strFile);
          
          define('IMAGE_PATH', 'uploads/images/');
        ?>
        
        <?php if($state === 'ok') : ?>
        <div class="row my-5">
            <div class="col-12 col-sm-12 col-md-6 offset-md-3 col-lg-6 offset-lg-3 col-xl-6 offset-xl-3">
                <img src="<?php echo IMAGE_PATH . $file; ?>" class="img-fluid">
            </div>
        </div>

        <div class="row my-5">
            <div class="col-12 col-sm-12 col-md-6 offset-md-3 col-lg-6 offset-lg-3 col-xl-6 offset-xl-3">
                <?php foreach ($arrFile as $img): ?>
                    <img src="<?php echo IMAGE_PATH . $img; ?>" alt="" class="img-fluid">
                <?php endforeach; ?>
            </div>
        </div>
        <?php endif; ?>
        
        <h2>Single upload file</h2>
		<div class="row mb-5">
			<div class="col-12 col-sm-12 col-md-6 offset-md-3 col-lg-6 offset-lg-3 col-xl-6 offset-xl-3">
			    <form class="border p-3 mt-3" action="server/upload.php" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="file"> Moi chon file</label>
                        <input type="file" name="file" id="file">
                    </div>
                    <button type="submit" class="btn btn-primary" name="btnUpload">Upload File</button>
                </form>
			</div>
		</div>
  
        
        <h2>Multil upload file</h2>
        <form action="server/multi-upload.php" method="post" enctype="multipart/form-data">
            <div class="form-group">
                <label for="multiFile"> Moi chon file</label>
                <input type="file" name="multiFile[]" id="multiFile" multiple>
            </div>
            <button type="submit" class="btn btn-primary" name="upload">Upload File</button>
        </form>
  
	</div>
</body>
</html>