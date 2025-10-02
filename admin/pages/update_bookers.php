<?php
include('./includes/topbar.php');

include("./includes/db.php");

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $result = mysqli_query($connect, "SELECT * FROM bookers WHERE id='$id'");
    $data = mysqli_fetch_assoc($result);
}
?>


<div class="container">
    <h2>USERS</h2>
    <div>
        <form id="add-cabs-form" enctype="multipart/form-data" method="POST">
            <div class="form-group">
                <label for="uname" class="font-style-bold">User Name</label>
                <input type="text" name="uname" id="uname" class="form-control" value="<?php echo $data['username'] ; ?>">
            </div>

            <div class="form-group">
                <label for="uemail" class="font-style-bold">User Email</label>
                <input type="text" name="uemail" id="uemail" class="form-control" value="<?php echo $data['useremail'] ;?>">
            </div>

            <div class="form-group">
                <label for="passengers" class="font-style-bold">No of Passengers</label>
                <input type="text" name="passengers" id="passengers" class="form-control" value="<?php echo $data['passengers'] ;?>">
            </div>

            <div class="form-group">
                <label for="phone" class="font-style-bold">Phone Number</label>
                <input type="text" name="phone" id="phone" class="form-control" value="<?php echo $data['phone'] ;?>">
            </div>

            <div class="form-group">
                <label for="pickupaddress" class="font-style-bold">Pickup Address</label>
                <input type="text" name="pickupaddress" id="pickupaddress" class="form-control" value="<?php echo $data['pickupaddress'] ;?>">
            </div>

            <div class="form-group">
                <label for="dropaddress" class="font-style-bold">Drop Address</label>
                <input type="text" name="dropaddress" id="dropaddress" class="form-control" value="<?php echo $data['dropaddress'] ;?>">
            </div>

            <div class="form-group">
                <label for="date" class="font-style-bold">Date</label>
                <input type="text" name="date" id="date" class="form-control" value="<?php echo $data['date'] ;?>">
            </div>

            <div class="form-group">
                <label for="time" class="font-style-bold">Time</label>
                <input type="text" name="time" id="time" class="form-control" value="<?php echo $data['time'] ;?>">
            </div>

            <div class="form-group">
                <label for="cartype" class="font-style-bold">Car Type</label>
                <input type="text" name="cartype" id="cartype" class="form-control" value="<?php echo $data['cartype'] ;?>">
            </div>

            <div class="form-group">
                <label for="carmodel" class="font-style-bold">Car Model</label>
                <input type="text" name="carmodel" id="carmodel" class="form-control" value="<?php echo $data['carmodel'] ;?>">
            </div>

            <div class="form-group">
                <label for="servivetype" class="font-style-bold">Service Type</label>
                <input type="text" name="servicetype" id="servicetype" class="form-control" value="<?php echo $data['servicetype'] ;?>">
            </div>

    

            <div class="form-group">
                <label for="status" class="font-style-bold">Status</label>
                <select name="status" id="status" class="form-control">
                    <option value="<?php echo $data['status']; ?>"><?php echo $data['status'] ?></option>
                    <option value="registered">Registered</option>
                    <option value="completed">Completed</option>
                </select>
            </div>

            <input type="submit" value="Save" class="btn btn-success" name="update">
        </form>
    </div>
</div>

<?php
    if(isset($_POST['update'])){
        $uname = mysqli_real_escape_string($connect , $_POST['uname']);
        $uemail = mysqli_real_escape_string($connect , $_POST['uemail']);
        $passengers = mysqli_real_escape_string($connect , $_POST['passengers']);
        $phone = mysqli_real_escape_string($connect , $_POST['phone']);
        $pickupaddress = mysqli_real_escape_string($connect , $_POST['pickupaddress']);
        $dropaddress = mysqli_real_escape_string($connect , $_POST['dropaddress']);
        $date = mysqli_real_escape_string($connect , $_POST['date']);
        $time = mysqli_real_escape_string($connect , $_POST['time']);
        $cartype =  mysqli_real_escape_string($connect , $_POST['cartype']);
        $carmodel = mysqli_real_escape_string($connect , $_POST['carmodel']);
        $servicetype = mysqli_real_escape_string($connect , $_POST['servicetype']);
        $status = mysqli_real_escape_string($connect , $_POST['status']);

        $res = mysqli_query($connect , "UPDATE bookers SET username = '$uname' , useremail = '$uemail' , passengers = '$passengers' , phone = '$phone' , pickupaddress = '$pickupaddress' , dropaddress = '$dropaddress' , date = '$date' , time = '$time' , cartype = '$cartype' , carmodel = '$carmodel' , servicetype = '$servicetype' , status = '$status' WHERE id='$id'");
        if($res){
            echo "<script>alert('updated Successfully');
                    window.location.href = 'list_bookers.php';
            </script>";
        }
    }
?>