<div class="job item" id="job-<?php print $object->id; ?>">
    <h3><?php print $object->title; ?></h3>
    <div class="description"><?php print $object->description; ?></div>
    <?php print $object->category->name; ?>
    <?php print anchor('Editar', 'jobs/edit/'.$object->id); ?> | <?php print anchor('borrar', 'jobs/delete/'.$object->id); ?>
</div>