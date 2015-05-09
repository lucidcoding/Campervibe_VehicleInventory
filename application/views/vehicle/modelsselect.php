<select id="modelId" name="modelId" class="form-control">
    <?php foreach ($viewModel->models as $model) { 
        echo "<option value=\"$model->value\" >$model->text</option>";
    } ?>
</select>