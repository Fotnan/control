<?php
	use app\assets\AuthAsset;
	use yii\helpers\Html;
	
	AuthAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
	<base href="/adminlte/">
	<meta charset="<?= Yii::$app->charset ?>">
	<?php $this->registerCsrfMetaTags() ?>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
	<title><?= Html::encode($this->title) ?></title>
	<?php $this->head() ?>
</head>
<body class="hold-transition login-page">
<?php $this->beginBody() ?>
<?//= \Yii::$app->getSecurity()->generatePasswordHash('makeit@') ?>
<?= $content ?>

<!-- /.login-box -->

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>


