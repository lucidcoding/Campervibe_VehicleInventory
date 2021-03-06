<h1>Add Vehicle to Inventory</h1>
<form id="form" method="POST" action="/vehicle/addPost" novalidate="novalidate" class="form-horizontal">
    <div class="form-group">
        <label for="name" class="control-label col-sm-3 col-md-3">Name</label>
        <div class="col-sm-6 col-md-6">
            <input id="name" name="name" type="text" class="form-control"/>
        </div>
    </div>
    <div class="form-group">
        <label for="make" class="control-label col-sm-3 col-md-3">Make</label>
        <div class="col-sm-6 col-md-6">
            <select id="makeId" name="makeId" class="form-control">
                <?php foreach ($viewModel->makes as $make) { 
                    echo "<option value=\"$make->value\" >$make->text</option>";
                } ?>
            </select>
        </div>
    </div>
    <div class="form-group">
        <label for="model" class="control-label col-sm-3 col-md-3">Model</label>
        <div id="modelsSelectDiv" class="col-sm-6 col-md-6">
            <?php require 'application/views/vehicle/modelsselect.php';  ?>
        </div>
    </div>
    <div class="form-group">
        <label for="year" class="control-label col-sm-3 col-md-3">Year</label>
        <div class="col-sm-6 col-md-6">
            <input id="year" name="year" type="text" class="form-control">
        </div>
    </div>
    <div class="form-group">
        <label for="description" class="control-label col-sm-3 col-md-3">Description</label>
        <div class="col-sm-6 col-md-6">
            <input id="description" name="description" type="text" class="form-control">
        </div>
    </div>
    <div class="form-group">
        <div class="col-sm-offset-3 col-sm-9">
            <input id="submit" class="btn btn-success" type="submit" value="Add"/>
            <a href="/Vehicle/Index" class="btn btn-primary">Cancel</a>
        </div>
    </div>
</form>
<script type="application/javascript">
    $(document).ready(function () {
        
        $("#makeId").change(function(event){
            $.ajax({
                url: "/vehicle/getModelsSelect",
                data: "makeId=" + $(this).val(),
                type: "GET",
                success: function (result) {
                    $("#modelsSelectDiv").html(result);
                },
                error: function (jqXhr, textStatus, errorThrown) {
                    alert('error: ' + jqXhr + ', ' + textStatus + ', ' + errorThrown);
                }
            });
        });
        
        $("#form").validate({
            rules: {
                name: {
                    required: true
                },
                year: {
                    required: true,
                    number: true
                }
            },
            messages: {
                name: {
                    required: "Name is required"
                },
                year: { 
                    required: "Year is required",
                    number: "Year must be a number"
                }
            }
        });
        
        $("#form").on('submit', function(e){
            var isValid = $("#form").valid();
        });
    });
</script>
<script src="/application/scripts/vehicle/add.js" type="application/javascript" />