<?php
include('./includes/topbar.php');
?>


<div class="container" id="table_container">
    <h2>TRAIFF</h2>
    <table class="table" id="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Title</th>
                <th scope="col">Base rate</th>
                <th scope="col">Per km</th>
                <th scope="col">Seats</th>
                <th scope="col">Passengers</th>
                <th scope="col">Actions</th>
                
            </tr>
        </thead>
        <tbody>
            <?php
            $i = 1;
            $result = mysqli_query($connect, "select * from traiff");
            while ($data = mysqli_fetch_assoc($result)) {
            ?>
                <tr>
                    <td><?php echo $i++; ?></td>
                    <td><?php echo $data['vehicle_name'] ?></td>
                    <td><?php echo $data['base_rate'] ?></td>
                    <td><?php echo $data['per_km_rate'] ?></td>
                    <td><?php echo $data['seats'] ?></td>
                    <td><?php echo $data['passengers'] ?></td>
                    <td>
                        <a href="add_traiff.php?id=<?php echo $data['id'] ?>"><img src="./icons/edit.svg" alt="" width="30"></a>
                        <img style="cursor: pointer;" onclick="delete_traiff(<?php echo $data['id'] ?>)" src="./icons/delete.svg" width="30" alt="">
                    </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</div>

<script>
    function delete_traiff(id) {
        if (confirm("Are you sure to delete the Traiff?")) {
            var formData = new FormData();
            formData.append('action', 'delete-traiff');
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

                        $('#table_container').load('list_traiff.php #table_container');
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