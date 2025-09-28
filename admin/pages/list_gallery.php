<?php
include('./includes/topbar.php');
?>


<div class="container" id="table_container">
    <h2>GALLERY</h2>
    <table class="table" id="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Photo</th>
                <th scope="col">Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $i = 1;
            $result = mysqli_query($connect, "select * from gallery");
            while ($data = mysqli_fetch_assoc($result)) {
            ?>
                <tr>
                    <td><?php echo $i++; ?></td>
                    <td> <img src="<?php echo $data['photo'] ?>" alt="Error" style="width: 300px;" /></td>
                    <td>
                        <a href="add_gallery.php?id=<?php echo $data['id'] ?>"><img src="./icons/edit.svg" alt="" width="30"></a>
                        <img style="cursor: pointer;" onclick="delete_gallery(<?php echo $data['id'] ?>)" src="./icons/delete.svg" width="30" alt="">
                    </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</div>

<script>
    function delete_gallery(id) {
        if (confirm("Are you sure to delete the Photo?")) {
            var formData = new FormData();
            formData.append('action', 'delete-gallery');
            formData.append('id', id);

            $.ajax({
                url: '../ajax/ajaxhandler.php',
                type: 'POST',
                data: formData,
                dataType: 'json',
                contentType: false,
                processData: false,
                success: function(response) {
                    if (response.success) {
                        alert(response.success)

                        $('#table_container').load('list_gallery.php #table_container');
                    } else {
                        console.log("Error...");
                    }
                }
            })
        }
    }
</script>

<?php
include('./includes/footer.php');
?>