<?php $view->extend('View/layout.php') ?>

<?php $view['slots']->start('content') ?>
    <header>
        <h1>Create subscriber</h1>
    </header>
    <form method="<?php echo $form->vars['method'] ?>">
        <input name="<?php echo $form['_token']->vars['full_name'] ?>" type="hidden" value="<?php echo $form['_token']->vars['value'] ?>" />
        <?php if (count($form->vars['errors']) > 0): ?>
            <ul>
                <?php foreach ($form->vars['errors'] as $error): ?>
                    <li><?php echo $error->getMessage() ?></li>
                <?php endforeach; ?>
            </ul>
        <?php endif; ?>
        <div>
            <?php $field = $form['name'] ?>
            <label for="<?php echo $field->vars['id'] ?>"><?php echo $field->vars['label'] ?></label>
            <input id="<?php echo $field->vars['id'] ?>" name="<?php echo $field->vars['full_name'] ?>" type="text" value="<?php echo $field->vars['value'] ?>" />
        </div>
        <div>
            <?php $field = $form['email'] ?>
            <label for="<?php echo $field->vars['id'] ?>"><?php echo $field->vars['label'] ?></label>
            <input id="<?php echo $field->vars['id'] ?>" name="<?php echo $field->vars['full_name'] ?>" type="email" value="<?php echo $field->vars['value'] ?>" />
        </div>
        <div>
            <button type="submit">Save</button>
        </div>
    </form>
<?php $view['slots']->stop() ?>
