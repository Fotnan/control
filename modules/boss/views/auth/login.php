<?php
	use yii\helpers\Html;
	use yii\widgets\ActiveForm;
?>
<div class="login-box">
	<div class="card">
		<div class="card-body login-card-body">
			<p class="login-box-msg">Войти в административную часть</p>
			<?php $form = ActiveForm::begin(); ?>
			<?= $form->field($model, 'username', ['template' => "<div class='form-group has-feedback'> {input} <span class=\"fas fa-user\"></span><div>{error}</div></div>",])->textInput(['placeholder' => 'Имя пользователя']) ?>
			<?= $form->field($model, 'password', ['template' => "<div class='form-group has-feedback'> {input} <span class=\"fas fa-lock\"></span><div>{error}</div></div>",])->passwordInput(['placeholder' => 'Пароль']) ?>
			<div class="row">
				<div class="col-8">
					<div class="icheck-primary">
						<?= $form->field($model, 'rememberMe')->checkbox([
							'template' => "{label} {input}"
						]) ?>
					</div>
				</div>
				<div class="col-4">
					<?= Html::submitButton('Войти', ['class' => 'btn btn-primary btn-block', 'name' => 'login-button']) ?>
				</div>
			</div>
			<?php ActiveForm::end(); ?>
			
        </div>
    </div>
<div class="login-box">

