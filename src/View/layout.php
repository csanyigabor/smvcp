<!DOCTYPE html>
<html>
    <head>
        <meta charset=utf-8 />
        <title><?php $view['slots']->output('title', 'Simple MVC Project') ?></title>
    </head>
    <body>
        <section id="content">
            <?php $view['slots']->output('content') ?>
        </section>
    </body>
</html>
