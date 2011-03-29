<li class="job item" id="job-<?php print $object->id; ?>">
    <a href="<?php print base_url('jobs/show/'.$object->id); ?>" class="job-link">
        <span class="location"><?php print $object->location; ?></span>
        <span class="title"><?php print $object->title; ?></span> en
        <span class="company"><?php print $object->company; ?></span>
        <span class="posted-in"><?php print timeformat('day', $object->created_at); ?></span>
    </a>
    <?php print anchor('Editar', 'jobs/edit/'.$object->id); ?> | <?php print anchor('borrar', 'jobs/delete/'.$object->id); ?>
</li>