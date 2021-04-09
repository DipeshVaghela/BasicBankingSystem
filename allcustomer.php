<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All Customer</title>

    <!-- external css link-->
    <link rel="stylesheet" href="style.css" type="text/css">

    <!-- bootstrap link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

    <!-- fonts link -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Comfortaa&family=Sirin+Stencil&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Cinzel|Fauna+One">

    <!-- google icon link -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
</head>

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

                <button onclick="location.href= 'index.php' " class="btn mx-3 btn-outline-light" style="font-size:15px;">Home</button>
                <button onclick="location.href= 'allcustomer.php'" class="btn mx-3 btn-outline-light active" style="font-size:15px;">All Customer</button>
                <button onclick="location.href= 'transactions.php' " class="btn mx-3 btn-outline-light" style="font-size:15px;">Transactions</button>
                
            </div>
        </div>
    </div>
</header>

<div class="container my-3 " id="allCustomer" style="display:none;">
    
</div>

<div class="container my-3 " id="toCustomer" style="display:none;">
    
</div>


<div class="container my-3" id="transfer" style="display:none;">
    
</div>

<div class="container my-3" id="transferResult" style="display:none;">
    
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

    <!-- jquery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
    
    <!-- --------------------------------------------javascript-------------------------------------- -->
    <script>
        
        var sen_id,rev_id,amount,sen_curr_bal;
        $(document).ready(function(){
            $("#tsf").show(2000);
            $("#buttons").fadeIn(2000);
           
           
            $.ajax({
                url: 'getallcustomer.php',
                type: 'get',
                success: function(data) {
                    $('#allCustomer').html(data);
                    $("#allCustomer").slideDown(500);
                }
            });
            $("#copyright").fadeIn(5000);
           
        });
        
        function transferFrom(cus_id,cus_curr_bal)
        {   
            sen_id = cus_id;
            sen_curr_bal = cus_curr_bal;
             $.ajax({
                url: 'getnotallcustomer.php',
                type: 'post',
                data: {cus_id:cus_id},
                success: function(data) {
                    $('#toCustomer').html(data);
                    $("#allCustomer").hide(500);
                    $("#toCustomer").show(500);
                }
            });
        }
        
        function transferTo(customer_id)
        {   
            $('#copyright').hide(100);
            $("#toCustomer").hide(500);
            rev_id = customer_id;
            
            $.ajax({
                url: 'transferTo.php',
                type: 'post',
                data: {sen_id:sen_id,rev_id:rev_id},
                success: function(data) {
                     $('#transfer').html(data);
                     $('#transfer').show(500);
                }
            });
            
        }
        
        function transfer()
        {

            amount = document.getElementById("amount").value;
            // (amount == NaN || isNaN(document.getElementById("amount").value)
            if(amount=="" || amount==null || amount == 0)
            {
                document.getElementById("amount").focus();
                $('#errorCode1').fadeIn(1000);
                $('#errorCode1').fadeOut(1000);
                // return false;
            }
            else
            {
                if(amount<=sen_curr_bal)
                {
                    $.ajax(
                    {
                        url: 'transfer.php',
                        type: 'post',
                        data: {sen_id:sen_id,rev_id:rev_id,amount:amount},
                        success: function(data) 
                        {
                            $('#transferResult').html(data);
                            $('#transfer').hide(500);
                            $('#transferResult').show(500);
                            $('#copyright').fadeIn(2000);
                        }
                    });
                }
                else
                {
                    document.getElementById("amount").focus();
                     $('#errorCode2').fadeIn(1000);
                     $('#errorCode2').fadeOut(1000);
                }
            
            }
        }

        function backToAllCustomer()
        {
            $("#toCustomer").hide(500);
            $("#allCustomer").show(500);
            $("#transferResult").hide(500);
            $('#copyright').fadeIn(2000);
        }
        
        function backToCustomer()
        {
            $("#transfer").hide(500);
            $("#toCustomer").show(500);
            $('#copyright').fadeIn(2000);
        }
        

        
    </script>
</html>