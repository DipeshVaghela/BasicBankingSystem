<?php 
    $connect = new mysqli('localhost','id16533463_dipeshvaghela','2A9#M2y^*~Gk}HV(','id16533463_database1') or die(mysqli_error($connect));
    $query = "SELECT * FROM customer";
    $result = mysqli_query($connect,$query);
?>
    

<h3 class="heading1 mb-2 text-left" style="color: white;">All Customer</h3>

    <table class="table w-100 mt-4" style="box-shadow: 0 8px 8px 0 rgba(0, 0, 0, 0.2), 0 20px 20px 0 rgba(0, 0, 0, 0.2);">
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
        echo '<td class="w-10"><button onclick="transferFrom('; 
        echo $row['cus_id']; echo " ,";
        echo $row['cus_curr_bal'];
        echo ')" class="btn btn-primary w-100 text-light">Transfer<span class="align-middle"><i class="material-icons" style="font-size:18px;color:white;text-shadow:1px 1px 2px #000000; margin-left: 10px;">send</i></span></button></td></tr>';
        }
       ?>
    </table>
