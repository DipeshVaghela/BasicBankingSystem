<?php 
error_reporting(E_ALL);
    $connect = new mysqli('localhost','id16533463_dipeshvaghela','2A9#M2y^*~Gk}HV(','id16533463_database1') or die(mysqli_error($connect));
  
    $sen_id = $_POST['sen_id'];
    $rev_id = $_POST['rev_id'];
    $amount = $_POST['amount'];
    
    $tran_id = time();
    
    $querySen = "SELECT * FROM customer WHERE cus_id = ".$sen_id;
    $resultSen = mysqli_query($connect,$querySen);
    
    $sen_name = "";
    $sen_bank = "";
    $sen_acc_num = "";
    $sen_curr_bal = "";
    
    foreach($resultSen as $row)
    {
        $sen_name = $row['cus_name'];
        $sen_bank = $row['cus_bank'];
        $sen_acc_num = $row['cus_acc_num'];
        $sen_curr_bal = $row['cus_curr_bal'];
    }
    
    $queryRev = "SELECT * FROM customer WHERE cus_id = ".$rev_id;
    $resultRev = mysqli_query($connect,$queryRev);
    
    $rev_name = "";
    $rev_bank = "";
    $rev_acc_num = "";
    $rev_curr_bal = "";
    
    foreach($resultRev as $row)
    {
        $rev_name = $row['cus_name'];
        $rev_bank = $row['cus_bank'];
        $rev_acc_num = $row['cus_acc_num'];
        $rev_curr_bal = $row['cus_curr_bal'];
    }
    
    $queryTran = "INSERT INTO transaction (tran_id,sen_name,sen_bank,sen_acc_num,rev_name,rev_bank,rev_acc_num,amount)
    VALUES ('$tran_id', '$sen_name', '$sen_bank', '$sen_acc_num', '$rev_name', '$rev_bank', '$rev_acc_num','$amount')";
    
    $connect->query($queryTran);
        
    $sen_new_bal = "";
    $sen_new_bal = $sen_curr_bal - $amount;
    
    $rev_new_bal = "";
    $rev_new_bal = $rev_curr_bal + $amount;
    
    $querySenUpdate =  "UPDATE customer SET cus_curr_bal = '$sen_new_bal' WHERE cus_id = ".$sen_id;
    $connect->query($querySenUpdate);
    
    $queryRevUpdate =  "UPDATE customer SET cus_curr_bal = '$rev_new_bal' WHERE cus_id = ".$rev_id;
    $connect->query($queryRevUpdate);
?>

<div id="tranferD" class="d-flex flex-column align-item-center mt-5" style="margin-bottom:200px;">
    <h2 class="headingFont text-center" style="color: white;">Transaction successful</h2>
    <h4 class="text-center mt-1 text-light mt-2 h5">Transaction ID : <span class="text-dark bg-light mx-2 p-1"><?php echo $tran_id; ?></span></h4>
    <h4 class="text-center mt-1 text-dark mt-3 mb-5" style="font-size:20px;">Please note your transaction id</h4>
    <button class="btn btn-outline-light text-center mx-auto mt-5 w-25" onclick="backToAllCustomer()">  Back to all customer</button>
    <button class="btn btn-outline-light text-center mx-auto my-3 w-25" onclick="location.href= 'transactions.php' ">Transaction History</button>
</div>
