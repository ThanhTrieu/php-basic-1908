<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>App weather</title>
	<link type="text/css" rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-12 col-sm-12 col-md-6 offset-md-3 col-lg-6 offset-lg-3 col-xl-6 offset-xl-3">
                <h1 class="text-center my-3">App weather</h1>
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="name of city ..." id="nameCity">
                    <div class="input-group-append">
                        <button class="input-group-text btn btn-primary" id="btnSearch">Search</button>
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col" id="result"></div>
                </div>
            </div>
        </div>
    </div>

    <script src="js/jquery-3.4.1.min.js" type="text/javascript"></script>
    <script type="text/javascript">
        $(function () {
            $('#btnSearch').click(function () {
                let nameCity = $('#nameCity').val().trim();
                if(nameCity.length > 0){
                    $.ajax({
                        url: "server/weather.php",
                        type: "post",
                        data: {name: nameCity},
                        beforeSend: function () {
                            $('#btnSearch').text('Loading ...');
                        },
                        success:function (data) {
                            $('#btnSearch').text('Search');
                            $('#result').html(data);
                        }
                    });
                }
            });
        });
    </script>
</body>
</html>