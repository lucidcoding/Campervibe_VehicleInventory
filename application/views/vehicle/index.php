<h1>List of Vehicles</h1>
<table class="table">
    <thead style="background-color: #ddd; font-weight: bold;">
    <tr>
        <td>Name</td>
        <td>Make</td>
        <td>Model</td>
        <td>Year</td>
        <td>Description</td>
        <td></td>
    </tr>
    </thead>
    <tbody>
    <?php foreach ($viewModel as $vehicle) { ?>
        <tr>
            <td><?php if (isset($vehicle->name)) echo $vehicle->name; ?></td>
            <td><?php if (isset($vehicle->makeName)) echo $vehicle->makeName; ?></td>
            <td><?php if (isset($vehicle->modelName)) echo $vehicle->modelName; ?></td>
            <td><?php if (isset($vehicle->year)) echo $vehicle->year; ?></td>
            <td><?php if (isset($vehicle->description)) echo $vehicle->description; ?></td>
            <td><?php if (isset($vehicle->id)) echo $vehicle->id; ?></td>
        </tr>
    <?php } ?>
    </tbody>  
</table>