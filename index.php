<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>

    <!-- external css link-->
    <link rel="stylesheet" href="style.css" type="text/css">

    <!-- bootstrap link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

    <!-- fonts link -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Comfortaa&family=Sirin+Stencil&display=swap" rel="stylesheet">

     <!-- jquery -->
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
     <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
</head>

<!-- --------------------------------------------javascript-------------------------------------- -->
<script>
    $(document).ready(function(){
        $("#tsf").show(2000);
        $("#buttons").fadeIn(2000);
        $("#mainBox").show(500);
        $("#copyright").fadeIn(5000);
    });
</script>

<!-- --------------------------------------------body-------------------------------------------- -->
<body style="font-family: 'Comfortaa', cursive;background-color: #0d0a0b;
background-image: linear-gradient(315deg, #0d0a0b 0%, #009fc2 74%);background-attachment: fixed;
    background-repeat: no-repeat;">

<header>    
    <div class="container-fluid">
        <div class="row m-3  p-2 d-flex align-items-center justify-content-center ">

            <div class="col-sm-8" >
                <h2 id="tsf" class="headingFont" style="color: white;display: none;">TSF Bank</h2>
            </div>

            <div id="buttons" class="col-sm-4 p-2 d-flex justify-content-center" style="display: none;" >

                <button onclick="location.href= 'index.php' " class="btn mx-3 btn-outline-light active" style="font-size:15px;">Home</button>
                <button onclick="location.href= 'allcustomer.php'" class="btn mx-3 btn-outline-light" style="font-size:15px;">All Customer</button>
                <button onclick="location.href= 'transactions.php' " class="btn mx-3 btn-outline-light" style="font-size:15px;">Transactions</button>
                
            </div>
        </div>
    </div>
</header>

<div class="container p-0" id="mainBox" style="display:none;">
    <div class="d-flex justify-content-center rounded " style="background-color:#FFEEEE;box-shadow: 0 8px 8px 0 rgba(0, 0, 0, 0.2), 0 20px 20px 0 rgba(0, 0, 0, 0.2);">

        <table class=" w-100">
            <tr>
                <td>
                    <div style="text-align:center;margin:30px;">
                        <h3 id= "bbs" class="headingFont d-inline " style="color: blue;">Basic Banking Sytem</h3>
                    </div>
                </td>
            </tr>
            <tr>
                <td>
                    <div class="leftDiv">
                        <h3 style="color:green;font-weight:bold;font-family: 'Comfortaa',cursive;">Welcome to TSF Bank</h3>
                        <h6 style="color:black;font-family: 'Comfortaa', cursive;margin-bottom:30px;">Your kind of people… your kind of bank.</h6><br>
                        
                        <h5 class="heading2">A bank is a place that will</h5><br>
                        <h5 class="heading2">lend you money if you can</h5><br>
                        <h5 class="heading2">prove that you don't need it.</h5><br>

                        <h4 style="color:green;font-weight:bold;font-family: 'Comfortaa',cursive;margin-top:50px;">Explore our site</h4>
                        
                        <div class="d-flex flex-row bg-light rounded" style="padding:5px;box-shadow: 0 8px 8px 0 rgba(0, 0, 0, 0.2), 0 20px 20px 0 rgba(0, 0, 0, 0.2);">
                            <button onclick="location.href= 'allcustomer.php' " class="btnGrow" >All Customer</button>
                            <button onclick="location.href= 'transactions.php' " class="btnGrow" style="font-size:20px;font-family: 'Comfortaa',cursive;">Transactions</button>
                        </div>

                    </div>

                    <div class="rightDiv">
                        <img src="images/background3.jpg" alt="something went wrong" width="100%" height="700px">
                    </div>
                </td>
            </tr>
        </table>

        </div>
    </div>
</div>

<!-- footer -->
<footer class="footer mt-5 py-1 bg-light border-top" id="copyright" style="display:none;">
    <div class="container-fluid row">
        <div class="col-lg-12 col-12 text-center">
            <span class="text-muted">Copyrights &copy;2020-21. All Rights Resevered by TSF Bank</span><br/>
            <span class="text-muted">Created by <span style="color: black;font-weight: bold;">Dipesh Vaghela</span></span>
        </div>
    </div>
</footer>

</body>
</html>