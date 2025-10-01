<?php
include('./includes/topbar.php');
include("./includes/db.php");

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $result = mysqli_query($connect, "SELECT * FROM user WHERE id='$id' LIMIT 1");
    $data = mysqli_fetch_assoc($result);
}
?>

<div class="container">
    <h2>USERS</h2>
    <div>
        <form id="add-users-form" enctype="multipart/form-data" method="POST">
            <?php if (isset($data['id'])) { ?>
                <input type="hidden" name="id" value="<?php echo $data['id']; ?>">
            <?php } ?>

            <div class="form-group">
                <label for="username" class="font-style-bold">User Name</label>
                <input type="text" name="username" id="username" class="form-control" placeholder="Enter User Name" value="<?php echo isset($data['fullname']) ? $data['fullname'] : ''; ?>">
            </div>

            <div class="form-group">
                <label for="useremail" class="font-style-bold">User Email</label>
                <input type="email" name="useremail" id="useremail" class="form-control" placeholder="Enter User Email" value="<?php echo isset($data['email']) ? $data['email'] : ''; ?>">
            </div>

            <div class="form-group">
                <label for="userpassword" class="font-style-bold">User Password</label>
                <input type="password" name="userpassword" id="userpassword" class="form-control" placeholder="Enter User Password" value="<?php echo isset($data['password']) ? $data['password'] : ''; ?>">
            </div>

            <input type="submit" value="Save" name="submit" class="btn btn-success">
        </form>
    </div>
</div>

<?php
    if(isset($_POST['submit'])){
        $name = mysqli_real_escape_string($connect , $_POST["username"]);
        $email = mysqli_real_escape_string($connect , $_POST["useremail"]);
        $password = password_hash($_POST["password"], PASSWORD_DEFAULT); // Encrypt Password

        $res = mysqli_query($connect , "UPDATE user SET fullname='$name', email='$email', password='$password'");
        if($res){
            echo"<script>alert('Updated Users Successfully');
                         window.location.href = 'list_users.php';   
            </script>";
        }
    }
?>