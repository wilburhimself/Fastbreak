<!DOCTYPE html>

<html>
    <head>
        <meta charset="utf-8" />
        <title>Fastbreak | Welcome Aboard</title>
        <?php print add_css('master'); ?>
    </head>
    <body>
        <div id="wrap">

            <div id="main-content">
                <div id="header">
                    <h1><?php print anchor('Trabajos de tecnología', ''); ?></h1>
                    <p>Your Fastbreak application is running.</p>
                </div>
                <div id="instructions">
                    <?php print $yield; ?>
                </div>
            </div>

        </div>
    <?php print mysql_db::$queries_count; ?>
    </body>
</html>

