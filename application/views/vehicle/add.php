<h3>Add Vehicle to Inventory</h3>
<form id="form" method="POST" action="/vehicle/create" novalidate="novalidate">
    <div class="form-group">
        <label for="name" class="control-label col-sm-3">Name</label>
        <div class="col-sm-6">
            <input id="name" name="name" type="text" class="form-control">
        </div>
    </div>
    <div class="form-group">
        <label for="year" class="control-label col-sm-3">Year</label>
        <div class="col-sm-6">
            <input id="year" name="year" type="text" class="form-control">
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
            var isvalidate = $("#form").valid();
            
            if(isvalidate)
            {
                e.preventDefault();
                //alert(getvalues("form"));
            }
        });
    });
</script>
<script src="/application/scripts/vehicle/add.js" type="application/javascript" />