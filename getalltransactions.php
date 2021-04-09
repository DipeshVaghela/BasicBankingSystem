<?php 
    $connect = new mysqli('localhost','id16533463_dipeshvaghela','2A9#M2y^*~Gk}HV(','id16533463_database1') or die(mysqli_error($connect));
    $query = "SELECT * FROM transaction  ORDER BY tran_id DESC";
    $result = mysqli_query($connect,$query);
?>
    

<h3 class="heading1 text-left" style="color: white;">Transactions History</h3>

    <table class="table w-100 mt-4 mb-5 table-bordered"  style="font-size:15px;box-shadow: 0 8px 8px 0 rgba(0, 0, 0, 0.2), 0 20px 20px 0 rgba(0, 0, 0, 0.2);"">
        <tr class="table-dark align-item-center">
            <th class="w-10" >Tran ID</th>
            <th class="w-10" >Sender Name</th>
            <th class="w-10" >Sender Bank</th>
            <th class="w-10">Sender A/c No</th>
            <th class="w-10" >Receiver Name</th>
            <th class="w-10" >Receiver Bank</th>
            <th class="w-10">Receiver A/c No</th>
            <th class="w-10">Amount</th>
            <th class="w-10">Time</th>
        </tr>

        <?php foreach($result as $row)
        {
        echo '<tr class="table-light my-auto" style="vertical-align: middle;">';
        echo '<td class="w-10" >';  echo $row['tran_id']; echo '</td>';
        echo '<td class="w-10" >';  echo $row['sen_name']; echo '</td>';
        echo '<td class="w-10" >';  echo $row['sen_bank']; echo '</td>';
        echo '<td class="w-10" >';  echo $row['sen_acc_num']; echo '</td>';
        echo '<td class="w-10" >';  echo $row['rev_name']; echo '</td>';
        echo '<td class="w-10" >';  echo $row['rev_bank']; echo '</td>';
        echo '<td class="w-10" >';  echo $row['rev_acc_num']; echo '</td>';
        echo '<td class="w-10" >';  echo $row['amount']; echo ' &#x20B9;</td>';
        echo '<td class="w-10" >';  echo $row['time_stamp']; echo '</td>';
        }
       ?>
    </table>
