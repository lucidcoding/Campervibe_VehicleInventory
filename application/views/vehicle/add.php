<h3>Add Vehicle to Inventory</h3>
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
            <select id="make" name="make" class="form-control">
            </select>
        </div>
    </div>
    <div class="form-group">
        <label for="model" class="control-label col-sm-3 col-md-3">Model</label>
        <div class="col-sm-6 col-md-6">
            <select id="model" name="model" class="form-control">
            </select>
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
    <input id="submit" class="button" type="submit" value="Add"/>
</form>
<script type="application/javascript">
    $(document).ready(function () {
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