<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport"
	      content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Date php - birthday</title>
	<link type="text/css" rel="stylesheet" href="css/bootstrap.min.css">

</head>
<body>
    <?php
        $state = $_GET['state'] ?? '';
        $date = $_GET['date'] ?? '';
        $day = $_GET['day'] ?? '';
    ?>
    <div class="container">
        <div class="row">
            <div class="col-12 col-sm-12 col-md-6 offset-md-3 col-lg-6 offset-lg-3 col-xl-6 offset-xl-3">
                <h1 class="text-center my-3">Kiem tra thoi gian sinh nhat</h1>
                <form class="border p-3" action="server/birthday.php" method="post">
                    <div class="form-group">
                        <label for="birthday">nhap ngay sinh nhat</label>
                        <input type="date" id="birthday" name="birthday" class="form-control" value="<?php echo $date; ?>">
                    </div>
                    <button class="btn btn-primary" name="btnCheck" type="submit">Kiem tra</button>
                </form>
                
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-sm-12 col-md-6 offset-md-3 col-lg-6 offset-lg-3 col-xl-6 offset-xl-3">
                <?php if($state === 'fail'): ?>
                    <h3 class="text-center my-3 text-danger">Vui long nhap ngay sinh nhat</h3>
                <?php endif; ?>
                
                <?php if($state === 'happy'): ?>
                    <h3 class="text-center my-3 text-success">Happy birthday to you !</h3>
                <?php endif; ?>
                
                <?php if($state === 'wait'): ?>
                    <h3 class="text-center my-3 text-primary">
                        Con <span class="text-danger"><?php echo $day; ?></span> ngay nua toi sinh nhat ban !
                    </h3>
                <?php endif; ?>
            </div>
        </div>
    </div>
</body>
</html>
