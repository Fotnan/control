<?php
	namespace app\modules\boss\controllers;
	
	use app\models\LoginForm;
	use Yii;
	
	class AuthController extends AppAdminConroller
	{
		public $layout = 'auth';
		
		public function actionLogin()
		{
			if (!Yii::$app->user->isGuest) {
				return $this->redirect('/boss');
// return $this->goHome();
			}
			$model = new LoginForm();
			if ($model->load(Yii::$app->request->post()) && $model->login()) {
				return $this->redirect('/boss');
// return $this->goBack();
			}
			$model->password = '';
			return $this->render('login', [
				'model' => $model,
			]);
		}
		public function actionLogout()
		{
			Yii::$app->user->logout();
			return $this->redirect('/boss');
			//return $this->goHome();
		}
	}