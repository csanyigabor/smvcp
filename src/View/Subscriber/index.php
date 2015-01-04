<?php $view->extend('View/layout.php') ?>

<?php $view['slots']->start('content') ?>
    <header>
        <h1>Subscribers</h1>
        <div>
            <a href="<?php echo $router->generate('subscriber_create') ?>">Create new subscriber</a>
        </div>
    </header>
<?php $view['slots']->stop() ?>
