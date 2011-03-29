<div class="job-display job" id="job-<?php print $job->id; ?>">
    <div class="job-links links">
        <?php print anchor('&larr; Volver a todos los trabajos', '', 'class="back"'); ?>
<?php print anchor('Todos los trabajos de '.$job->category->name.' &rarr;', 'categories/show/'.$job->category->id, 'class="next"'); ?>
    </div>
    <h1><?php print $job->title; ?></h1>
    <small>Publicado el <?php print timeformat('day', $job->created_at); ?></small>
    <div id="job-header">
        <div class="job-info">
            <strong><?php print $job->company; ?></strong><br />
            Ubicación: <?php print $job->location; ?><br />
            <a href="<?php print $job->company_url; ?>"><?php print $job->company_url; ?></a>
        </div>
    </div>

    <div id="job-decription"><?php print nl2br($job->description); ?></div>
    <div id="job-apply"><?php print nl2br($job->apply); ?></div>

</div>
