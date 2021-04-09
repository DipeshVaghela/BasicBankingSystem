<?php 
    $connect = new mysqli('localhost','id16533463_dipeshvaghela','2A9#M2y^*~Gk}HV(','id16533463_database1') or die(mysqli_error($connect));
    $query = "SELECT * FROM customer";
    $result = mysqli_query($connect,$query);
    
    $sen_id = $_POST['sen_id'];
    $rev_id = $_POST['rev_id'];
    
    $querySen = "SELECT * FROM customer WHERE cus_id = ".$sen_id;
    $resultSen = mysqli_query($connect,$querySen);
    
    $queryRev = "SELECT * FROM customer WHERE cus_id = ".$rev_id;
    $resultRev = mysqli_query($connect,$queryRev);
    
?>

<div class="d-flex flex-row justify-content-between">
  <div ><h3 class="heading1 text-center d-inline" style="color: white;">Transfer</h3></div>
  <div"><button class="btn btn-outline-light d-inline" onclick="backToCustomer()"><span class="align-middle text-info"><i class="material-icons text-light" style="font-size:18px;text-shadow:1px 1px 2px #000000; margin: 5px;">arrow_back</i></span></button></div>
</div>  

<table class="table w-100 mt-3" style="box-shadow: 0 8px 8px 0 rgba(0, 0, 0, 0.2), 0 20px 20px 0 rgba(0, 0, 0, 0.2);">
    <tr class="table-dark align-item-center">
        <th class="w-10" >Id</th>
        <th class="w-10" >Name</th>
        <th class="w-10" >Bank</th>
        <th class="w-10">Branch</th>
        <th class="w-10">A/c No</th>
        <th class="w-10">IFSC Code</th>
        <th class="w-20">Current Balance</th>
        <th class="w-10">Contact No</th>
        <th class="w-10">E-mail</th>
    </tr>
    
    <tr class="bg-transparent align-item-center">
        <td class="w-100" colspan="9"><h3 class="heading1 d-inline text-light" >From</h3></td>
    </tr>
    
    <?php foreach($resultSen as $row)
    {
        echo '<tr class="table-danger my-auto" style="vertical-align: middle;">';
        echo '<td class="w-10" >';  echo $row['cus_id']; echo '</td>';
        echo '<td class="w-10" >';  echo $row['cus_name']; echo '</td>';
        echo '<td class="w-10" >';  echo $row['cus_bank']; echo '</td>';
        echo '<td class="w-10" >';  echo $row['cus_branch']; echo '</td>';
        echo '<td class="w-10" >';  echo $row['cus_acc_num']; echo '</td>';
        echo '<td class="w-10" >';  echo $row['cus_ifsc_code']; echo '</td>';
        echo '<td class="w-10" >';  echo $row['cus_curr_bal']; echo '  &#x20B9;</td>';
        echo '<td class="w-10" >';  echo $row['cus_con_no']; echo '</td>';
        echo '<td class="w-10" >';  echo $row['cus_email']; echo '</td></tr>';
    }
   ?>
   
    <tr class="bg-transparent align-item-center" >
    <td class="w-100" colspan="9"><h3 class="heading1 d-inline text-light" >To</h3></td>
    </tr>
  
    <?php foreach($resultRev as $row)
    {
        echo '<tr class="table-success my-auto" style="vertical-align: middle;">';
        echo '<td class="w-10" >';  echo $row['cus_id']; echo '</td>';
        echo '<td class="w-10" >';  echo $row['cus_name']; echo '</td>';
        echo '<td class="w-10" >';  echo $row['cus_bank']; echo '</td>';
        echo '<td class="w-10" >';  echo $row['cus_branch']; echo '</td>';
        echo '<td class="w-10" >';  echo $row['cus_acc_num']; echo '</td>';
        echo '<td class="w-10" >';  echo $row['cus_ifsc_code']; echo '</td>';
        echo '<td class="w-10" >';  echo $row['cus_curr_bal']; echo ' &#x20B9;</td>';
        echo '<td class="w-10" >';  echo $row['cus_con_no']; echo '</td>';
        echo '<td class="w-10" >';  echo $row['cus_email']; echo '</td></tr>';
    }
   ?>
   
</table>
    
<div class="container" style="margin-top:100px;margin-bottom:150px;">

    <div class="d-flex flex-column justify-content-center rounded bg-light p-3  w-50 mx-auto" style="box-shadow: 0 8px 8px 0 rgba(0, 0, 0, 0.2), 0 20px 20px 0 rgba(0, 0, 0, 0.2);">

        <div class="w-100 d-flex flex-row justify-content-center my-3">
            <input type="number" min="0.00" max="1000000.00" step="0.01"  name="amount" id="amount" class="form-control w-50 d-inline mx-3" placeholder="Enter amount"/>
            <button type="button" onClick="transfer()" class="btn btn-success w-20 text-light d-inline mx-3">Transfer<span class="align-middle"><i class="material-icons" style="font-size:18px;color:white;text-shadow:2px 2px 4px #000000; margin: 5px;">send</i></span></button>
        </div>
        
    </div>

    <div class="container d-flex flex-row justify-content-center" style="margin-top:30px;">
            <span id ="errorCode1" class="text-center text-light bg-danger  p-2" style="display:none;">Enter Valid Amount</span>
            <span id ="errorCode2" class="text-center text-light bg-danger  p-2" style="display:none;">Insufficient balance in sender account</span>
    </div>
    
</div>