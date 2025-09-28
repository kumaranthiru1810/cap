<?php
include('./includes/topbar.php');
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $data = mysqli_fetch_assoc(mysqli_query($connect, "SELECT * FROM traiff WHERE id='$id'"));
}
?>

<div class="container">
    <h2>MANAGE Traiff</h2>
    <div>
        <form id="add-traiff-form">
            <?php if (isset($_GET['id'])) { ?>
                <input type="hidden" name="id" id="id" value="<?php echo $_GET['id'] ?>">
            <?php } ?>

            <div class="form-group">
                <label for="vehical_name">Vehicle Name</label>
                <input class="form-control" type="text" name="vehical_name" id="vehicle_name" placeholder="Vehicle Name" 
                       value="<?php echo isset($data['vehicle_name']) ? $data['vehicle_name'] : '' ?>">
            </div>

            <div class="form-group">
                <label for="base_rate">Base Rate (₹)</label>
                <input class="form-control" type="text" name="base_rate" id="base_rate" placeholder="Base Rate" 
                       value="<?php echo isset($data['base_rate']) ? $data['base_rate'] : '' ?>">
            </div>

            <div class="form-group">
                <label for="per_km">Rate Per Km (₹)</label>
                <input class="form-control" type="text" name="per_km" id="per_km" placeholder="Rate Per Km" 
                       value="<?php echo isset($data['per_km_rate']) ? $data['per_km_rate'] : '' ?>">
            </div>

            <div class="form-group">
                <label for="seats">Seats</label>
                <input class="form-control" type="number" name="seats" id="seats" placeholder="Seats" 
                       value="<?php echo isset($data['seats']) ? $data['seats'] : '' ?>">
            </div>

            <div class="form-group">
                <label for="passengers">Passengers</label>
                <input class="form-control" type="number" name="passengers" id="passengers" placeholder="Passengers" 
                       value="<?php echo isset($data['passengers']) ? $data['passengers'] : '' ?>">
            </div>

            <input type="submit" value="Save" class="btn btn-success">
        </form>
    </div>
</div>

<script>
    $(document).ready(function() {
        $('#add-traiff-form').on('submit', function(event) {
            event.preventDefault();

            var formData = new FormData(this);

            if ($('input[name="id"]').length > 0) {
                formData.append('action', 'edit-traiff');
            } else {
                formData.append('action', 'add-traiff');
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
                        window.location.href = 'list_traiff.php';
                    } else {
                        console.log("Traiff insertion Failed...!");
                    }
                }
            });
        });
    });
</script>

<?php
include('./includes/footer.php');
?>
