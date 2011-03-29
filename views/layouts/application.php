<!DOCTYPE html>

<html>
    <head>
        <meta charset="utf-8" />
        <title>Developer RD</title>
        <?php print add_css('master'); ?>
    </head>
    <body>
        <div id="wrap">
            <div id="main-content">
                <div id="header">
                    <h1><?php print anchor('Developers RD', ''); ?></h1>
                    <?php print anchor('Agregar nuevo trabajo', 'jobs/create', 'id="new-job"'); ?>
                </div>
                <div id="instructions">
                    <?php print $yield; ?>
                </div>
            </div>

        </div>
    <?php print mysql_db::$queries_count; ?>
    </body>
</html>

