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
		<div class="row">
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
	</div>
</body>
</html>