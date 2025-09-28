<?php
include('./includes/topbar.php');
?>


<div class="container" id="table_container">
    <h2>COMMON</h2>
    <table class="table" id="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Photos</th>
                <th scope="col">Title</th>
                <th scope="col">Content</th>
                <th scope="col">Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $i = 1;
            $result = mysqli_query($connect, "select * from packages");
            while ($data = mysqli_fetch_assoc($result)) {
            ?>
                <tr>
                    <td><?php echo $i++; ?></td>
                    <td><img src="<?php echo $data['photo'] ?>" alt="Error" style='width:150px' /></td>
                    <td><?php echo $data['title'] ?></td>
                    <td><?php echo $data['content'] ?></td>
                    <td>
                        <a href="add_packages.php?id=<?php echo $data['id'] ?>&db=packages"><img src="./icons/edit.svg" alt="" width="30"></a>
                        <img style="cursor: pointer;" onclick="delete_packages(<?php echo $data['id'] ?>)" src="./icons/delete.svg" width="30" alt="">
                    </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</div>

<script>
    function delete_packages(id) {
        if (confirm("Are you sure to delete the Package?")) {
            var formData = new FormData();
            formData.append('action', 'delete-packages');
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

                        $('#table_container').load('list_packages.php #table_container');
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