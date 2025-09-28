<?php
header('Content-type:application/json');
include "../pages/includes/db.php";

$response = array();
if ($_SERVER['REQUEST_METHOD'] == "POST") {

    if ($_POST['action'] == 'add-category') {
        $db = mysqli_query($connect, "insert into category(category_name) values('$_POST[category]')");
        if ($db) {
            $response['success'] = "Category Added Successfully";
        } else {
            $response['failed'] = 'Category Insertion Fail...!';
        }

        echo json_encode($response);
    } elseif ($_POST['action'] == 'delete-category') {
        $id = $_POST['id'];

        $db = mysqli_query($connect, "delete from category where id='$id'");
        if ($db) {
            $response['success'] = "Category Deleted Successfully";
        } else {
            $response['failed'] = 'Category Deletion Failed...!';
        }

        echo json_encode($response);
    } else if ($_POST['action'] == 'add-cabs') {
        $car_name = $_POST['car_name'];
        $car_no = $_POST['car_no'];
        $category_id = $_POST['category'];
        $seats = $_POST['seats'];
        $price = $_POST['price'];
        $status = $_POST['status'];
        $targetFile = "../uploads/car.svg";

        if (isset($_FILES['image']['tmp_name']) && is_uploaded_file($_FILES['image']['tmp_name'])) {
            $target = '../uploads/';
            $file = $_FILES['image']['tmp_name'];
            $targetFile = $target . basename($_FILES['image']['name']);

            if (!move_uploaded_file($file, $targetFile)) {
                $response['failed'] = 'Fail...!';
                echo json_encode($response);
                exit;
            }
        }
        $result = mysqli_query($connect, "insert into cabs(car_name,car_number,category,seats,price,image,status) values('$car_name','$car_no','$category_id','$seats','$price','$targetFile','$status')");

        if ($result) {
            $response['success'] = 'Cab Added Successfully';
        } else {
            $response['failed'] = 'Cab Insertion Failed...!';
        }

        echo json_encode($response);
    } else if ($_POST['action'] == 'delete-cabs') {
        $id = $_POST['id'];

        $result = mysqli_query($connect, "delete from cabs where id='$id'");
        if ($result) {
            $response['success'] = 'Cab Deleted Successfully';
        } else {
            $response['failed'] = 'Cab Deletion Failed...!';
        }

        echo json_encode($response);
    } else if ($_POST['action'] == 'edit-cabs') {
        $id = $_POST['id'];

        $car_name = $_POST['car_name'];
        $car_no = $_POST['car_no'];
        $category_id = $_POST['category'];
        $seats = $_POST['seats'];
        $price = $_POST['price'];
        $status = $_POST['status'];
        $targetFile = $_POST['existing_image'];

        if (isset($_FILES['image']['tmp_name']) && is_uploaded_file($_FILES['image']['tmp_name'])) {
            $target = '../uploads/';
            $file = $_FILES['image']['tmp_name'];
            $targetFile = $target . basename($_FILES['image']['name']);

            if (!move_uploaded_file($file, $targetFile)) {
                $response['failed'] = 'Fail...!';
                echo json_encode($response);
                exit;
            }
        }
        $result = mysqli_query($connect, "update cabs set car_name = '$car_name', car_number = '$car_no',category = '$category_id',seats='$seats',price='$price',image='$targetFile',status='$status' where id = '$id'");

        if ($result) {
            $response['success'] = 'Cab Edited Successfully';
        } else {
            $response['failed'] = 'Fail...!';
        }

        echo json_encode($response);
    } else if ($_POST['action'] == 'add-driver') {
        $driver_name = $_POST['driver_name'];
        $mobile = $_POST['phone'];
        $address = $_POST['address'];
        $cab_id = $_POST['cab'];
        $status = $_POST['status'];
        $targetFile = '../uploads/proof/license.svg';

        if (isset($_FILES['license']['tmp_name']) && is_uploaded_file($_FILES['license']['tmp_name'])) {
            $target = '../uploads/proof/';
            $file = $_FILES['license']['tmp_name'];
            $targetFile = $target . basename($_FILES['license']['name']);

            if (!move_uploaded_file($file, $targetFile)) {
                $response['failed'] = 'Fail...!';
                echo json_encode($response);
                exit;
            }
        }

        $result = mysqli_query($connect, "insert into driver (name,phone,address,cab_id,license,status) values('$driver_name','$mobile','$address','$cab_id','$targetFile','$status')");

        if ($result) {
            $response['success'] = "Driver added Successfully";
        } else {
            $response['failed'] = 'Fail...!';
        }

        echo json_encode($response);
    } else if ($_POST['action'] == 'edit-driver') {
        $id = $_POST['id'];

        $driver_name = $_POST['driver_name'];
        $mobile = $_POST['phone'];
        $address = $_POST['address'];
        $cab_id = $_POST['cab'];
        $status = $_POST['status'];
        $targetFile = $_POST['existing_image'];

        if (isset($_FILES['license']['tmp_name']) && is_uploaded_file($_FILES['license']['tmp_name'])) {
            $target = '../uploads/proof/';
            $file = $_FILES['license']['tmp_name'];
            $targetFile = $target . basename($_FILES['license']['name']);

            if (!move_uploaded_file($file, $targetFile)) {
                $response['failed'] = 'Fail...!';
                echo json_encode($response);
                exit;
            }
        }

        $result = mysqli_query($connect, "update driver set name='$driver_name',phone='$mobile',address='$address',cab_id='$cab_id',license='$targetFile',status='$status' where id=$id");

        if ($result) {
            $response['success'] = "Driver Edited Successfully";
        } else {
            $response['failed'] = 'Fail...!';
        }

        echo json_encode($response);
    } else if ($_POST['action'] == 'delete-driver') {
        $id = $_POST['id'];

        $result = mysqli_query($connect, "delete from driver where id = '$id'");
        if ($result) {
            $response['success'] = 'Driver deleted successfully';
        } else {
            $response['failed'] = "Driver deletion Failed...!";
        }

        echo json_encode($response);
    } else if ($_POST['action'] == 'add-packages') {
        $insert = $_POST['category'];
        $db;
        switch ($insert) {
        case 'holiday':
            $db = "holiday";
            break;
        case 'spiritual':
            $db = "spiritual";
            break;
        default:
            $db = "packages";
            break;
        }
        $title = $_POST['title'];
        $content = $_POST['content'];
        $targetFile = '../../img/packages/bangalore.jpg';

        if (isset($_FILES['photo']['tmp_name']) && is_uploaded_file($_FILES['photo']['tmp_name'])) {
            $target = '../../img/packages/';
            $file = $_FILES['photo']['tmp_name'];
            $targetFile = $target . basename($_FILES['photo']['name']);

            if (!move_uploaded_file($file, $targetFile)) {
                $response['failed'] = 'Fail...!';
                echo json_encode($response);
                exit;
            }
        }

        $result = mysqli_query($connect, "insert into $db (photo,title,content) values('$targetFile','$title','$content')");

        if ($result) {
            $response['success'] = "Packages Added Successfully";
        } else {
            $response['failed'] = "Packages insertin Failed...!";
        }

        echo json_encode($response);
    } else if ($_POST['action'] == 'edit-packages') {
    $db = $_POST['db'];   // ✅ fix: use POST not GET
    $id = $_POST['id'];
    $title = $_POST['title'];
    $content = $_POST['content'];
    $targetFile = $_POST['existing_image'];

    if (isset($_FILES['photo']['tmp_name']) && is_uploaded_file($_FILES['photo']['tmp_name'])) {
        $target = '../../img/packages/';
        $file = $_FILES['photo']['tmp_name'];
        $targetFile = $target . basename($_FILES['photo']['name']);

        if (!move_uploaded_file($file, $targetFile)) {
            $response['failed'] = 'Fail...!';
            echo json_encode($response);
            exit;
        }
    }

    $result = mysqli_query(
        $connect,
        "UPDATE `$db` SET photo='" . mysqli_real_escape_string($connect, $targetFile) . 
        "', title='" . mysqli_real_escape_string($connect, $title) . 
        "', content='" . mysqli_real_escape_string($connect, $content) . 
        "' WHERE id='" . intval($id) . "'"
    );

    if ($result) {
        $response['success'] = "Packages Edited Successfully";
    } else {
        $response['failed'] = "Failed to edit....";
    }

    echo json_encode($response);


    } else if ($_POST['action'] == 'delete-packages') {
        $id = $_POST['id'];

        $result = mysqli_query($connect, "delete from package where id = '$id'");

        if ($result) {
            $response['success'] = "Packages Deleted Successfully";
        } else {
            $response['failed'] = "Failed to delete....";
        }

        echo json_encode($response);
    } else  if ($_POST['action'] == 'update-settings') {
        $id = $_POST['id'];

        $username = $_POST['username'];
        $email = $_POST['email'];
        $phone = $_POST['phone_number'];
        $address = $_POST['address'];
        $site_name = $_POST['site_name'];
        $location = $_POST['location'];
        $aboutus = $_POST['aboutus'];
        $logo = $_POST['existing_logo'];

        if (isset($_FILES['logo']['tmp_name']) && is_uploaded_file($_FILES['logo']['tmp_name'])) {
            $target = '../../img/logo/';
            $file = $_FILES['logo']['tmp_name'];
            $logo = $target . basename($_FILES['logo']['name']);

            if (!move_uploaded_file($file, $logo)) {
                $response['failed'] = 'Fail...!';
                echo json_encode($response);
                exit;
            }
        }

        $result = mysqli_query($connect, "update settings set username='$username',email='$email',phone='$phone',address='$address',site_name='$site_name',logo='$logo',location='$location',aboutus='$aboutus' where id ='$id'");

        if ($result) {
            $response['success'] = "Settings Updated Successfully";
        } else {
            $response['failed'] = "Failed to Update....";
        }
        echo json_encode($response);
    } else if ($_POST['action'] == 'add-services') {
        $title = $_POST['title'];
        $content = $_POST['content'];
        $targetFile = '../../img/services/tempo.jpg';

        if (isset($_FILES['photo']['tmp_name']) && is_uploaded_file($_FILES['photo']['tmp_name'])) {
            $target = '../../img/services/';
            $file = $_FILES['photo']['tmp_name'];
            $targetFile = $target . basename($_FILES['photo']['name']);

            if (!move_uploaded_file($file, $targetFile)) {
                $response['failed'] = 'Fail...!';
                echo json_encode($response);
                exit;
            }
        }

        $result = mysqli_query($connect, "insert into services (photo,title,content) values('$targetFile','$title','$content')");

        if ($result) {
            $response['success'] = "Services added Successfully";
        } else {
            $response['failed'] = 'Fail...!';
        }

        echo json_encode($response);
    } else if ($_POST['action'] == 'edit-services') {
        $id = $_POST['id'];
        $title = $_POST['title'];
        $content = $_POST['content'];
        $targetFile = $_POST['existing_image'];

        if (isset($_FILES['photo']['tmp_name']) && is_uploaded_file($_FILES['photo']['tmp_name'])) {
            $target = '../../img/services/';
            $file = $_FILES['photo']['tmp_name'];
            $targetFile = $target . basename($_FILES['photo']['name']);

            if (!move_uploaded_file($file, $targetFile)) {
                $response['failed'] = 'Fail...!';
                echo json_encode($response);
                exit;
            }
        }

        $result = mysqli_query($connect, "update services set photo='$targetFile',title='$title',content='$content' where id=$id");

        if ($result) {
            $response['success'] = "Services Edited Successfully";
        } else {
            $response['failed'] = 'Fail...!';
        }

        echo json_encode($response);
    } else if ($_POST['action'] == 'delete-services') {
        $id = $_POST['id'];

        $result = mysqli_query($connect, "delete from services where id = '$id'");
        if ($result) {
            $response['success'] = 'Services deleted successfully';
        } else {
            $response['failed'] = "Services deletion Failed...!";
        }

        echo json_encode($response);
    }
    
    // Gallery section

    else if ($_POST['action'] == 'add-gallery') {

        $targetFile = '../../img/gallery/gallery1.png';

        if (isset($_FILES['photo']['tmp_name']) && is_uploaded_file($_FILES['photo']['tmp_name'])) {
            $target = '../../img/gallery/';
            $file = $_FILES['photo']['tmp_name'];
            $targetFile = $target . basename($_FILES['photo']['name']);

            if (!move_uploaded_file($file, $targetFile)) {
                $response['failed'] = 'Fail...!';
                echo json_encode($response);
                exit;
            }
        }

        $result = mysqli_query($connect, "insert into gallery (photo) values('$targetFile')");

        if ($result) {
            $response['success'] = "Photo added Successfully";
        } else {
            $response['failed'] = 'Fail...!';
        }

        echo json_encode($response);
    } else if ($_POST['action'] == 'edit-gallery') {
        $id = $_POST['id'];
        $targetFile = $_POST['existing_image'];

        if (isset($_FILES['photo']['tmp_name']) && is_uploaded_file($_FILES['photo']['tmp_name'])) {
            $target = '../../img/gallery/';
            $file = $_FILES['photo']['tmp_name'];
            $targetFile = $target . basename($_FILES['photo']['name']);

            if (!move_uploaded_file($file, $targetFile)) {
                $response['failed'] = 'Fail...!';
                echo json_encode($response);
                exit;
            }
        }

        $result = mysqli_query($connect, "update gallery set photo='$targetFile' where id=$id");

        if ($result) {
            $response['success'] = "Photo Edited Successfully";
        } else {
            $response['failed'] = 'Fail...!';
        }

        echo json_encode($response);
    } else if ($_POST['action'] == 'delete-gallery') {
        $id = $_POST['id'];

        $result = mysqli_query($connect, "delete from gallery where id = '$id'");
        if ($result) {
            $response['success'] = 'Photo deleted successfully';
        } else {
            $response['failed'] = "Photo deletion Failed...!";
        }

        echo json_encode($response);
    }

    // holiday tour delete

    else if ($_POST['action'] == 'delete-holiday') {
        $id = $_POST['id'];

        $result = mysqli_query($connect, "delete from holiday where id = '$id'");

        if ($result) {
            $response['success'] = "Holiday tour Deleted Successfully";
        } else {
            $response['failed'] = "Failed to delete....";
        }

        echo json_encode($response);
    }

    // spiritual tour delete 

    else if ($_POST['action'] == 'delete-spiritual') {
        $id = $_POST['id'];

        $result = mysqli_query($connect, "delete from spiritual where id = '$id'");

        if ($result) {
            $response['success'] = "Spiritual tour Deleted Successfully";
        } else {
            $response['failed'] = "Failed to delete....";
        }

        echo json_encode($response);
    }
    else if ($_POST['action'] == 'add-traiff') {
        $name = $_POST['vehical_name'];
        $b_rate = $_POST['base_rate'];
        $per_km = $_POST['per_km'];
        $seats = $_POST['seats'];
        $passengers = $_POST['passengers'];
        

        $result = mysqli_query($connect, "insert into traiff (vehicle_name,base_rate,per_km_rate,seats,passengers) values('$name','$b_rate','$per_km','$seats','$passengers')");

        if ($result) {
            $response['success'] = "Traiff added Successfully";
        } else {
            $response['failed'] = 'Fail...!';
        }

        echo json_encode($response);
    } else if ($_POST['action'] == 'edit-traiff') {
        $id = $_POST['id'];
        $name = $_POST['vehical_name'];
        $b_rate = $_POST['base_rate'];
        $per_km = $_POST['per_km'];
        $seats = $_POST['seats'];
        $passengers = $_POST['passengers'];

        $result = mysqli_query($connect, "update traiff set vehicle_name='$name',base_rate='$b_rate',per_km_rate='$per_km',seats='$seats',passengers='$passengers' where id=$id");

        if ($result) {
            $response['success'] = "Traiff Edited Successfully";
        } else {
            $response['failed'] = 'Fail...!';
        }

        echo json_encode($response);
    }
    else if ($_POST['action'] == 'delete-traiff') {
        $id = $_POST['id'];

        $result = mysqli_query($connect, "delete from traiff where id = '$id'");

        if ($result) {
            $response['success'] = "Traiff Deleted Successfully";
        } else {
            $response['failed'] = "Failed to delete....";
        }

        echo json_encode($response);
    }
}
