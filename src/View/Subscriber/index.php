<?php $view->extend('View/layout.php') ?>

<?php $view['slots']->start('content') ?>
    <header>
        <h1>Subscribers</h1>
        <div>
            <a href="<?php echo $router->generate('subscriber_create') ?>">Create new subscriber</a>
        </div>
        <table>
            <thead>
                <tr>Name</tr>
                <tr>Email</tr>
            </thead>
            <tbody>
                <?php if (count($subscribers) > 0): ?>
                    <?php foreach ($subscribers as $subscriber): ?>
                        <tr>
                            <td><?php echo $view->escape($subscriber->getName()) ?></td>
                            <td><?php echo $view->escape($subscriber->getEmail()) ?></td>
                        </tr>
                    <?php endforeach ?>
                <?php else: ?>
                    <tr>
                        <td colspan="100%">
                            <em>No results found</em>
                        </td>
                    </tr>
                <?php endif; ?>
            </tbody>
        </table>
</header>
<?php $view['slots']->stop() ?>
