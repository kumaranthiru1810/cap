<?php
include('./includes/topbar.php');
$count = 0;
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $db = $_GET['db'];
    $count++;
    $data = mysqli_fetch_assoc(mysqli_query($connect, "select * from $db where id='$id'"));
}
?>

<div class="container">
    <h1>PACKAGES</h1>

    <form id="add-packages-form">
        <?php if (isset($_GET['id'])) { ?>
            <input type="hidden" name="id" value="<?php echo $_GET['id'] ?>">
        <?php } ?>

        <?php if (isset($_GET['db'])) { ?>
            <input type="hidden" name="db" value="<?php echo $_GET['db'] ?>">
        <?php } ?>

        <div class="form-group">
            <label for="title">Package Name</label>
            <input type="text" name="title" id="title" class="form-control" placeholder="Package Name" value="<?php echo isset($data['title']) ? $data['title'] : '' ?>">
        </div>
        <div class="form-group">
            <label for="content">Content</label>
            <textarea class="form-control" name="content" id="content" placeholder="Packages Content" rows="4"><?php echo isset($data['content']) ? $data['content'] : '' ?></textarea>
        </div>


        <?php if (isset($data['photo'])) { ?>
            <img src="<?php echo $data['photo']; ?>" width="100"><br><br>
        <?php } ?>

        <div class="form-group">
            <label for="photo">Photo</label><br>
            <input type="file" name="photo" id="">
            <?php
            if (isset($data['photo'])) { ?>
                <input type="hidden" name="existing_image" id="existing_image" value="<?php echo $data['photo'] ?>">
            <?php } ?>
        </div>
        <?php if ($count == 0) { ?>
            <div class="form-group">
                <select name="category" id="category">
                    <option value="" disabled selected>Select Categories</option>
                    <option value="packages">common</option>
                    <option value="holiday">Holiday Tour</option>
                    <option value="spiritual">Spiritual Tour</option>
                </select>
            </div>
        <?php } ?>
        <input type="submit" value="Save" name="save" class="btn btn-success">
    </form>
</div>

<script>
    $(document).ready(function() {
        $('#add-packages-form').on('submit', function(event) {
            event.preventDefault();

            var formData = new FormData(this);
            let redirectPage = "list_packages.php"; // default redirect

            if ($('input[name="id"]').length > 0) {
                // Editing existing
                formData.append('action', 'edit-packages');
                redirectPage = "list_" + $('input[name="db"]').val() + ".php";
            } else {
                // Adding new
                formData.append('action', 'add-packages');
                let category = $('#category').val();
                if (category) {
                    redirectPage = "list_" + category + ".php";
                }
            }

            $.ajax({
                url: '../ajax/ajaxhandler.php',
                type: 'POST',
                data: formData,
                dataType: 'json',
                contentType: false,
                processData: false,
                success: function(response) {
                    if (response.success) {
                        alert(response.success);
                        window.location.href = redirectPage;
                    } else {
                        console.log("Failed...");
                    }
                }
            })
        })
    })
</script>

<?php
include('./includes/footer.php');
?>