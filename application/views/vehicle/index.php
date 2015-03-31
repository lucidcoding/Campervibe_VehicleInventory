<h3>List of songs (data from first model)</h3>
<table>
    <thead style="background-color: #ddd; font-weight: bold;">
    <tr>
        <td>Id</td>
        <td>Name</td>
        <td>Model</td>
        <td>Model</td>
        <td>Year</td>
        <td>Description</td>
    </tr>
    </thead>
    <tbody>
    <?php foreach ($viewModel as $vehicle) { ?>
        <tr>
            <td><?php if (isset($vehicle->id)) echo $vehicle->id; ?></td>
            <td><?php if (isset($vehicle->name)) echo $vehicle->name; ?></td>
            <td><?php if (isset($vehicle->makeName)) echo $vehicle->makeName; ?></td>
            <td><?php if (isset($vehicle->modelName)) echo $vehicle->modelName; ?></td>
            <td><?php if (isset($vehicle->year)) echo $vehicle->year; ?></td>
            <td><?php if (isset($vehicle->description)) echo $vehicle->description; ?></td>
        </tr>
    <?php } ?>
    </tbody>  
</table>