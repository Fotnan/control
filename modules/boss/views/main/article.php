<?php
	$this->title='Тексты сайта';
	$this->params['breadcrumbs'][] = $this->title;
?>
<div class="row">
	<div class="col-lg-3 col-6">
		<!-- small card -->
		<div class="small-box bg-success">
			<div class="inner">
				<h3>Все статьи сайта</h3>
				
				<p><?= $article ?> статей</p>
			</div>
			<div class="icon">
				<i class="ion ion-stats-bars"></i>
			</div>
			<a href="<?= \yii\helpers\Url::to('/boss/article/index') ?>" class="small-box-footer">
				Подробнее <i class="fas fa-arrow-circle-right"></i>
			</a>
		</div>
		
        <div class="small-box bg-success">
            <div class="inner">
                <h3>Главная страница</h3>

                <p><?= $main ?> статьи</p>
            </div>
            <div class="icon">
                <i class="ion ion-stats-bars"></i>
            </div>
            <a href="<?= \yii\helpers\Url::to('/boss/article_first/index') ?>" class="small-box-footer">
                Подробнее <i class="fas fa-arrow-circle-right"></i>
            </a>
        </div>
        
        <div class="small-box bg-success">
            <div class="inner">
                <h3>Частный клиент</h3>

                <p><?= $privet ?> статьи</p>
            </div>
            <div class="icon">
                <i class="ion ion-stats-bars"></i>
            </div>
            <a href="<?= \yii\helpers\Url::to('/boss/article_privet/index') ?>" class="small-box-footer">
                Подробнее <i class="fas fa-arrow-circle-right"></i>
            </a>
        </div>
        
	</div>
    
    <div class="col-lg-3 col-6">
		<!-- small card -->
		<div class="small-box bg-success">
			<div class="inner">
				<h3>Бизнес клиент</h3>
				
				<p><?= $business ?> статей</p>
			</div>
			<div class="icon">
				<i class="ion ion-stats-bars"></i>
			</div>
			<a href="<?= \yii\helpers\Url::to('/boss/article_business/index') ?>" class="small-box-footer">
				Подробнее <i class="fas fa-arrow-circle-right"></i>
			</a>
		</div>
		
        <div class="small-box bg-success">
            <div class="inner">
                <h3>Технический</h3>

                <p><?= $tech ?> статьи</p>
            </div>
            <div class="icon">
                <i class="ion ion-stats-bars"></i>
            </div>
            <a href="<?= \yii\helpers\Url::to('/boss/article_tech/index') ?>" class="small-box-footer">
                Подробнее <i class="fas fa-arrow-circle-right"></i>
            </a>
        </div>
        
        <div class="small-box bg-success">
            <div class="inner">
                <h3>Инфо</h3>

                <p><?= $info ?> статьи</p>
            </div>
            <div class="icon">
                <i class="ion ion-stats-bars"></i>
            </div>
            <a href="<?= \yii\helpers\Url::to('/boss/article_info/index') ?>" class="small-box-footer">
                Подробнее <i class="fas fa-arrow-circle-right"></i>
            </a>
        </div>
        
	</div>

    <div class="col-lg-3 col-6">
        <!-- small card -->
        <div class="small-box bg-success">
            <div class="inner">
                <h3>Виды услуг</h3>
                <p></p>
            </div>
            <div class="icon">
                <i class="ion ion-stats-bars"></i>
            </div>
            <a href="<?= \yii\helpers\Url::to('/boss/tab/index') ?>" class="small-box-footer">
                Подробнее <i class="fas fa-arrow-circle-right"></i>
            </a>
        </div>

        <div class="small-box bg-success">
            <div class="inner">
                <h3>Калькулятор</h3>
                <p></p>
            </div>
            <div class="icon">
                <i class="ion ion-stats-bars"></i>
            </div>
            <a href="<?= \yii\helpers\Url::to('/boss/price/index') ?>" class="small-box-footer">
                Подробнее <i class="fas fa-arrow-circle-right"></i>
            </a>
        </div>

<!--        <div class="small-box bg-success">-->
<!--            <div class="inner">-->
<!--                <h3>Наши реквизиты</h3>-->
<!---->
<!--                <p></p>-->
<!--            </div>-->
<!--            <div class="icon">-->
<!--                <i class="ion ion-stats-bars"></i>-->
<!--            </div>-->
<!--            <a href="--><?//= \yii\helpers\Url::to('/boss/ourcontakt/index') ?><!--" class="small-box-footer">-->
<!--                Подробнее <i class="fas fa-arrow-circle-right"></i>-->
<!--            </a>-->
<!--        </div>-->

    </div>

</div>
