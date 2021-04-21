<?php
	
	
	namespace app\modules\boss\controllers;

    use app\modules\boss\models\Task;
    use Yii;

	use app\modules\boss\models\Article;

	use PHPUnit\Framework\Constraint\IsNull;
	
	class MainController extends AppAdminConroller
	{

		public function actionIndex()
		{
		    $bulk=Task::find()->where(['Datamake'=>!null])->count();
		    $notmake=Task::find()->where(['Datamake'=>null])->count();
			/*$nocalc= Request::find()->Where(['wire'=> null]) ->count();
			$calc= Request::find()->andWhere(['wire'=>[1, 2,3]])->count();
			$install= Request::find()->Where(['install'=> 1]) ->count();
			$phone= Request::find()->Where(['phone'=> 1]) ->count();
			$offer= Request::find()->Where(['offer'=> 1]) ->count();
			$request= Request::find()->count();
			$answer = Request::find()->andWhere(['offer'=> 0 , 'phone'=> 0 ,'install'=> 0])->count();
			$techcall = Techcall::find()->count();
			$notech = Techcall::find()->where(['perform'=>0])->count();*/
			
			return $this->render('index',compact('bulk', 'notmake'));
		}
		public function actionArticle()
		{
			$article = Article::find()->count();
			$main = Article::find()->where(['part_id'=>1])->count();
			$privet = Article::find()->where(['part_id'=>2])->count();
			$business = Article::find()->where(['part_id'=>3])->count();
			$tech = Article::find()->where(['part_id'=>4])->count();
			$info = Article::find()->where(['part_id'=>5])->count();
			
			return $this->render('article', compact('article', 'main', 'privet', 'business', 'tech', 'info'));
		}
	}