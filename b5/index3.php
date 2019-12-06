<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport"
	      content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Ajax - Jquery</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <div class="row mt-3">
            <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="ten ca sy" id="js-keyword">
                    <div class="input-group-append">
                        <button id="js-seacrh" class="btn btn-primary">Search</button>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="row mt-2">
            <div class="col-12">
                <div style="display: none !important;" id="loading" class="d-flex justify-content-center">
                    <div class="spinner-border" role="status">
                        <span class="sr-only">Loading...</span>
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12" id="js-result"></div>
        </div>
    </div>
    <script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
    <script type="text/javascript">
        $(function () {
           $('#js-seacrh').click(function () {
               let name = $('#js-keyword').val().trim();
               if(name.length > 0){
                    // goi ajax
                   $.ajax({
                       url: "server/ajax.php",
                       type: "post",
                       data: { nameSingle: name },
                       beforeSend: function () {
                           // truoc khi nhan dc du lieu ve - thi chung ta lam gi do
                           // bao hieu nguoi vui long doi ket qua tra ve
                           // hien thi show loading
                           $('#loading').show();
                       },
                       success: function (result) {
                           // an loading data
                           $('#loading').attr('style', 'display: none !important');
                           
                           // cho doi ket qua tu phia server tra
                           // du lieu tra ve thong qua tham so trong function (result)
                           result = $.trim(result);
                           if(result === 'blank'){
                               alert('Vui long nhap du lieu');
                           } else {
                               // hien thi ket qua len giao dien
                               $('#js-result').html(result);
                           }
                       }
                   });
               } else {
                   alert('Vui long nhap du lieu');
               }
           });
        });
    </script>
</body>
</html>

