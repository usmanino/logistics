<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <?php 
  date_default_timezone_set("Asia/Manila");
  
  ob_start();
  $title = isset($_GET['page']) ? ucwords(str_replace("_", ' ', $_GET['page'])) : "Home";
  $title = str_replace("Persons Companies","Persons/Companies",$title);
  ?>
  <title><?php echo $title ?> | <?php echo $_SESSION['system']['name'] ?></title>
  <?php ob_end_flush() ?>
    <link rel="stylesheet" type="text/css" href="css/index.css">
    <link rel="icon" type="image/png" href="boot/images/icons/icon.ico"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <style>
        body{
            background-color: grey;
        }
    .loader {
        width: 40px;
        height: 40px;
        position: absolute;
        top: 50%;
        left: 50%;
        margin-top: 40px;
        margin-left: -13px;
        border-radius: 60px;
        animation: loader 0.8s linear infinite;
      -webkit-animation: loader 0.8s linear infinite;
      z-index: 100;
    }

    @keyframes loader {
        0% {
            -webkit-transform: rotate(0deg);
            transform: rotate(0deg);
            border: 4px solid #f44336;
            border-left-color: transparent;
        }
        50% {
            -webkit-transform: rotate(180deg);
            transform: rotate(180deg);
            border: 4px solid #673ab7;
            border-left-color: transparent;
        }
        100% {
            -webkit-transform: rotate(360deg);
            transform: rotate(360deg);
            border: 4px solid #f44336;
            border-left-color: transparent;
        }
    }

    @-webkit-keyframes loader {
        0% {
            -webkit-transform: rotate(0deg);
            border: 4px solid #f44336;
            border-left-color: transparent;
        }
        50% {
            -webkit-transform: rotate(180deg);
            border: 4px solid #673ab7;
            border-left-color: transparent;
        }
        100% {
            -webkit-transform: rotate(360deg);
            border: 4px solid #f44336;
            border-left-color: transparent;
        }
    }
    </style>
</head>
<body>

    <div class="card" style="width: 30rem;" id="bwd_container">
        <div class="container" >
            <center><p class="" style="font-size: 20px;font-weight: bolder;">Design and implementation of a logistics system</p></center>
            <center><img src="img/logo.png" style="width: 150px;" class="card-img-top" alt="..."></center>
              <div class="card-body">
                <p class="card-text" style="text-align: center;font-weight: bold; color:red;">
                    By
                </p>
                <p class="card-text" style="text-align: center;font-weight: bold; color:green; text-transform: uppercase;">
                    Nwobodo Ikenna &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 18/1204 <br>
                    Ojeh Anwuli Anthony&nbsp;&nbsp;18/1441 <br>
                    
                </p>
              </div>
        </div>
        <div class="loader" style="display: block;"></div>
 
</div>




<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>

<script type="text/javascript">
    window.addEventListener('load', function(){
        setTimeout(function(){
            window.location.href = "login.php";
        }, 5000);
    });
</script>
</body>
</html>