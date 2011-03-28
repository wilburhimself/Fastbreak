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
                    <h1>Trabajos de tecnología</h1>
                    <p>Your Fastbreak application is running.</p>
                </div>
                <div id="instructions">
                    <?php print $yield; ?>
                </div>
            </div>

            <div id="sidebar">
                <h3>Categorias de trabajos</h3>
                <ul>
                    <?php
                        $cat = new Category;
                        $list = $cat->get_non_empty();
                    ?>
                    <?php print partial_collection($list, 'categories/menu_item'); ?>
                </ul>

                <h3>Browse the documentation</h3>
                <ul>
                    <li><a href="#">Fastbreak Documentation</a></li>
                    <li><a href="#">Fastbreak API</a></li>
                    <li><a href="#">PHP Documentation</a></li>

                </ul>
            </div>

        </div>
    <?php print mysql_db::$queries_count; ?>
    </body>
</html>

