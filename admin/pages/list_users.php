<?php
include('./includes/topbar.php');
include("./includes/db.php");
?>

<div class="container" id="table_container">
    <h2>USERS</h2>
    <table class="table" id="table">
        <thead>
            <tr>
                <th scope="col" style="border-right: 1px solid #dee2e6;">#</th>
                <th scope="col" style="border-right: 1px solid #dee2e6;">User Name</th>
                <th scope="col" style="border-right: 1px solid #dee2e6;">User Email</th>
                <!-- <th scope="col" style="border-right: 1px solid #dee2e6;">User Password</th> -->
                <th scope="col" style="border-right: 1px solid #dee2e6;">Status</th>
                <th scope="col" style="border-right: 1px solid #dee2e6;">Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $i = 1;
            $result = mysqli_query($connect, "select * from user");
            while ($data = mysqli_fetch_assoc($result)) {
            ?>
                <tr>
                    <td style="border-right: 1px solid #dee2e6;"><?php echo $i++; ?></td>
                    <td style="border-right: 1px solid #dee2e6;"><?php echo $data['fullname'] ?></td>
                    <td style="border-right: 1px solid #dee2e6;"><?php echo $data['email'] ?></td>
                    <!-- <td style="border-right: 1px solid #dee2e6;"><?php echo $data['password'] ?></td> -->
                    <td><span class="p-2 rounded-lg text-white <?php echo $data['status']=='registered' ? 'bg-success' : 'bg-danger' ?>"><?php echo $data['status'] ?></span></td>
                    <td style="border-right: 1px solid #dee2e6;">
                        <!-- <img style="cursor: pointer;" onclick="edit_cabs(<?php echo $data['id'] ?>)" src="./icons/edit.svg" width="30" alt=""> -->
                        <a href="add_users.php?id=<?php echo $data['id'] ?>"><img src="./icons/edit.svg" alt="" width="30"></a>
                        <a href="delete_users.php?id=<?php echo $data['id'] ?>" onclick="return confirm('Are you sure to delete a User?');"><img style="cursor: pointer;" src="./icons/delete.svg" width="30" alt=""></a>
                    </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</div>




<?php
include('./includes/footer.php');
?>