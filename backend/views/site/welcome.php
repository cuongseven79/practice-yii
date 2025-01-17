<?php
use yii\helpers\Html;
?>
<?= Html::tag('h2','Please enter your name and email. Thanks ',['class'=>'text'])?>


<?= Html::beginForm(['site/welcome'], 'post') ?>
<?= Html::input('text', 'fullName', '', ['placeholder' => 'Enter username']) ?>
<?= Html::input('text', 'email', '', ['placeholder' => 'Enter email']) ?>
<?= Html::submitButton('Submit', ['class' => 'btn btn-primary']) ?>
<?= Html::endForm() ?>

<?= Html::tag('p', '' . Html::encode($message), ['class' => 'text']) ?>
