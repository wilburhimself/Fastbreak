<div class="category-block">
    <h3><?php print $object->name; ?></h3>
    <ul>
        <?php print partial_collection($object->jobs, 'jobs/item'); ?>
    </ul>
</div>
