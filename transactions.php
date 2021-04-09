<? php
    $connect = new mysqli('localhost','id16533463_dipeshvaghela','2A9#M2y^*~Gk}HV(','id16533463_database1') or die(mysqli_error($connect));
?>
<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transaction History</title>

    <!-- external css link-->
    <link rel="stylesheet" href="style.css" type="text/css">

    <!-- bootstrap link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

    <!-- fonts link -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Comfortaa&family=Sirin+Stencil&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Cinzel|Fauna+One">

     <!-- jquery -->
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
     <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
</head>
<!-- --------------------------------------------body-------------------------------------------- -->
<body style="font-family: 'Comfortaa', cursive;background-color: #0d0a0b;
background-image: linear-gradient(315deg, #0d0a0b 0%, #009fc2 74%);background-attachment: fixed;
    background-repeat: no-repeat;">
<header>    
    <div class="container-fluid">
        <div class="row m-3  p-2 d-flex align-items-center justify-content-center ">

            <div class="col-sm-8" >
                <h2 id= "tsf" class="headingFont" style="color: white;display: none;">TSF Bank</h2>
            </div> 

            <div id="buttons" class="col-4 p-2 d-flex justify-content-center" style="display: none;" >

                <button onclick="location.href= 'index.php' " class="btn mx-3 btn-outline-light">Home</button>
                <button onclick="location.href= 'allcustomer.php' " class="btn mx-3 btn-outline-light">All Customer</button>
                <button onclick="location.href= 'transactions.php' " class="btn mx-3 btn-outline-light active">Transactions</button>

                <!-- <button class="btnstyle mx-3 text">Home</button>
                <button class="btnstyle mx-3">All Customer</button>
                <button class="btnstyle mx-3">Transations</button> -->
            </div>
        </div>
    </div>
</header>

<div class="container mt-4" id="allTransactions" style="display:none;margin-bottom:200px;">
    
</div>

<!-- footer -->
<footer class="footer mt-5 py-1 bg-light border-top" id="copyright" style="display:none">
    <div class="container-fluid row">
        <div class="col-lg-12 col-12 text-center">
            <span class="text-muted">Copyrights &copy;2020-21. All Rights Resevered by TSF Bank</span><br/>
            <span class="text-muted">Created by <span style="color: black;font-weight: bold;">Dipesh Vaghela</span></span>
        </div>
    </div>
</footer>

</body>

<!-- --------------------------------------------javascript-------------------------------------- -->
<script>
    $(document).ready(function(){
        $("#tsf").show(2000);
        $("#buttons").fadeIn(2000);
        
        $.ajax({
                url: 'getalltransactions.php',
                type: 'post',
                success: function(data) {
                    $('#allTransactions').html(data);
                    $("#allTransactions").slideDown(500);
                }
            });
        $("#copyright").fadeIn(3000);
    });
</script>
</html>