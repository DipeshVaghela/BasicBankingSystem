<?php 
    $connect = new mysqli('localhost','id16533463_dipeshvaghela','2A9#M2y^*~Gk}HV(','id16533463_database1') or die(mysqli_error($connect));
    $cus_id = $_POST['cus_id'];
    $query = "SELECT * FROM customer WHERE cus_id != ".$cus_id;
    $result = mysqli_query($connect,$query);
?>
    
<div class="d-flex flex-row justify-content-between">
  <div ><h3 class="heading1 text-center d-inline" style="color: white;">To Customer</h3></div>
  <div"><button class="btn btn-outline-light d-inline" onclick="backToAllCustomer()"><span class="align-middle text-info"><i class="material-icons text-light" style="font-size:20px;text-shadow:1px 1px 2px #000000; margin: 5px;">arrow_back</i></span></button></div>
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
            <th class="w-10"></th>
        </tr>

        <?php foreach($result as $row)
        {
        echo '<tr class="table-light my-auto" style="vertical-align: middle;">';
        echo '<td class="w-10" >';  echo $row['cus_id']; echo '</td>';
        echo '<td class="w-10" >';  echo $row['cus_name']; echo '</td>';
        echo '<td class="w-10" >';  echo $row['cus_bank']; echo '</td>';
        echo '<td class="w-10" >';  echo $row['cus_branch']; echo '</td>';
        echo '<td class="w-10" >';  echo $row['cus_acc_num']; echo '</td>';
        echo '<td class="w-10" >';  echo $row['cus_ifsc_code']; echo '</td>';
        echo '<td class="w-10" >';  echo $row['cus_curr_bal']; echo ' &#x20B9;</td>';
        echo '<td class="w-10" >';  echo $row['cus_con_no']; echo '</td>';
        echo '<td class="w-10" >';  echo $row['cus_email']; echo '</td>';
        echo '<td class="w-10"><button onclick="transferTo('; 
        echo $row['cus_id'];
        echo ')" class="btn btn-success w-100 text-light">Select</button></td></tr>';
        }
       ?>
    </table>
