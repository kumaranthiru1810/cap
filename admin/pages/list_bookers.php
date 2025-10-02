<?php
include('./includes/topbar.php');
?>


<div class="container" id="table_container" style="overflow-x: scroll;">
    <h2>BOOKERS</h2>
    <table class="table" id="table">
        <thead>
            <tr>
                <th scope="col" style="border-right: 1px solid #dee2e6;">#</th>
                <th scope="col" style="border-right: 1px solid #dee2e6;">User Name</th>
                <th scope="col" style="border-right: 1px solid #dee2e6;">User Email</th>
                <th scope="col" style="border-right: 1px solid #dee2e6;">No of Passengers</th>
                <th scope="col" style="border-right: 1px solid #dee2e6;">Phone Number</th>
                <th scope="col" style="border-right: 1px solid #dee2e6;">Pickup Address</th>
                <th scope="col" style="border-right: 1px solid #dee2e6;">Drop Address</th>
                <th scope="col" style="border-right: 1px solid #dee2e6;">Date</th>
                <th scope="col" style="border-right: 1px solid #dee2e6;">Time</th>
                <th scope="col" style="border-right: 1px solid #dee2e6;">Car Type</th>
                <th scope="col" style="border-right: 1px solid #dee2e6;">Car Model</th>
                <th scope="col" style="border-right: 1px solid #dee2e6;">Service Type</th>
                <th scope="col" style="border-right: 1px solid #dee2e6;">Status</th>
                <th scope="col" style="border-right: 1px solid #dee2e6;">Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $i = 1;
            $result = mysqli_query($connect, "select * from bookers");
            while ($data = mysqli_fetch_assoc($result)) {
            ?>
                <tr>
                    <td style="border-right: 1px solid #dee2e6;"><?php echo $i++; ?></td>
                    <td style="border-right: 1px solid #dee2e6;"><?php echo $data['username'] ?></td>
                    <td style="border-right: 1px solid #dee2e6;"><?php echo $data['useremail'] ?></td>
                    <td style="border-right: 1px solid #dee2e6;"><?php echo $data['passengers'] ?></td>
                    <td style="border-right: 1px solid #dee2e6;"><?php echo $data['phone'] ?></td>
                    <td style="border-right: 1px solid #dee2e6;"><?php echo $data['pickupaddress'] ?></td>
                    <td style="border-right: 1px solid #dee2e6;"><?php echo $data['dropaddress'] ?></td>
                    <td style="border-right: 1px solid #dee2e6;"><?php echo $data['date'] ?></td>
                    <td style="border-right: 1px solid #dee2e6;"><?php echo $data['time'] ?></td>
                    <td style="border-right: 1px solid #dee2e6;"><?php echo $data['cartype'] ?></td>
                    <td style="border-right: 1px solid #dee2e6;"><?php echo $data['carmodel'] ?></td>
                    <td style="border-right: 1px solid #dee2e6;"><?php echo $data['servicetype'] ?></td>
                    <td><span class="p-2 rounded-lg text-white <?php echo $data['status']=='registered' ? 'bg-success' : 'bg-danger' ?>"><?php echo $data['status'] ?></span></td>
                    <td style="border-right: 1px solid #dee2e6;">
                        <!-- <img style="cursor: pointer;" onclick="edit_cabs(<?php echo $data['id'] ?>)" src="./icons/edit.svg" width="30" alt=""> -->
                        <a href="update_bookers.php?id=<?php echo $data['id'] ?>"><img src="./icons/edit.svg" alt="" width="30"></a>
                        <a href="delete_bookers.php?id=<?php echo $data['id'] ?>" onclick="return confirm('Are you sure to delete a User?');"><img style="cursor: pointer;" src="./icons/delete.svg" width="30" alt=""></a>
                    </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</div>

<?php
include('./includes/footer.php');
?>