<?php
include('./includes/topbar.php');
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $data = mysqli_fetch_assoc(mysqli_query($connect, "select * from gallery where id='$id'"));
}
?>

<div class="container">
    <h2>MANAGE GALLERY</h2>
    <div>
        <form id="add-gallery-form">
            <?php if (isset($_GET['id'])) { ?>
                <input type="hidden" name="id" id="id" value="<?php echo $_GET['id'] ?>">
            <?php }
            ?>

            <?php if (isset($data['photo'])) { ?>
                <img src="<?php echo $data['photo']; ?>" width="100"><br><br>
            <?php } ?>

            <div class="form-group">
                <label for="photo">Photo</label><br>
                <input type="file" name="photo" id="photo">
                <?php
                if (isset($data['photo'])) { ?>
                    <input type="hidden" name="existing_image" id="existing_image" value="<?php echo $data['photo'] ?>">
                <?php } ?>
            </div>
            <input type="submit" value="Save" class="btn btn-success">
        </form>
    </div>
</div>


<script>
    $(document).ready(function() {
        $('#add-gallery-form').on('submit', function(event) {
            event.preventDefault();

            var formData = new FormData(this);

            if ($('input[name="id"]').length > 0) {
                formData.append('action', 'edit-gallery');
            } else {
                formData.append('action', 'add-gallery');
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
                        window.location.href = 'list_gallery.php';
                    } else {
                        console.log("Photo insertion Failed...!");
                    }
                }
            })
        })
    })
</script>

<?php
include('./includes/footer.php');
?>