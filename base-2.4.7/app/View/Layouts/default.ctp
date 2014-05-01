<!DOCTYPE html>
<html>
<head>
	<?php echo $this->Html->charset(); ?>

    <?php echo $this->Html->charset(); ?>

    <!-- bootstrap css -->

    <?php echo $this->Html->css('//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css'); ?>
    <?php echo $this->Html->css('//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap-theme.min.css'); ?>

    <?php echo $this->Html->css('fixe-bootstrap'); ?>

    <?php echo $this->fetch('css'); ?>
    <?php echo $this->Html->script('//cdnjs.cloudflare.com/ajax/libs/jquery/2.0.2/jquery.min.js'); ?>

    <?php echo $this->Html->script('plugins/jquery.cookie'); ?>

    <?php echo $this->Html->script("//cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"); ?>

    <?php echo $this->Html->meta('icon'); ?>

    <title>
        <?php echo $title_for_layout; ?>
    </title>
</head>
<body>

        <div id="app-container" class="container">

            <div class="row">
                <div class="col-xs-12 layout">
                    <?php echo $this->fetch('navbar'); ?>
                    <h1>Title</h1>
                </div>
            </div>

            <?php echo $this->Session->flash(); ?>

            <?php echo $this->fetch('content'); ?>

            <div id="footer">

            </div>
        </div>

	<?php echo $this->element('sql_dump'); ?>
</body>
</html>
