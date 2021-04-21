<?php
	$this->title='Задания техническому отделу';
	$this->params['breadcrumbs'][] = $this->title;
?>
<div class="row">
    <div class="col-lg-3 col-6">
        <!-- small card -->
        <div class="small-box bg-success">
            <div class="inner">
                <h3><?= $bulk; ?></h3>

                <p>Всего заданий выполнено</p>
            </div>
            <div class="icon">
                <i class="ion ion-stats-bars"></i>
            </div>
            <a href="<?= \yii\helpers\Url::to('/boss/task/index') ?>" class="small-box-footer">
                Подробнее <i class="fas fa-arrow-circle-right"></i>
            </a>
        </div>
    </div>
    <div class="col-lg-3 col-6">
        <!-- small card -->
        <div class="small-box bg-danger">
            <div class="inner">
                <h3><?= $notmake ?></h3>

                <p>Невыполненные задания</p>
            </div>
            <div class="icon">
                <i class="fas fa-chart-pie"></i>
            </div>
            <a href="<?= \yii\helpers\Url::to('/boss/task/index') ?>" class="small-box-footer">
                Подробнее <i class="fas fa-arrow-circle-right"></i>
            </a>
        </div>
    </div>
    <div class="col-lg-3 col-6">
        <!-- small card -->
        <div class="small-box bg-success">
            <div class="inner">
                <h3>fsdfsdfds</h3>

                <p>Все вызовы техника</p>
            </div>
            <div class="icon">
                <i class="fas fa-chart-pie"></i>
            </div>
            <a href="<?= \yii\helpers\Url::to('/boss/techcall/index') ?>" class="small-box-footer">
                Подробнее <i class="fas fa-arrow-circle-right"></i>
            </a>
        </div>
    </div>
    <div class="col-lg-3 col-6">
        <!-- small card -->
        <div class="small-box bg-danger">
            <div class="inner">
                <h3>dfdsdsds</h3>

                <p>Необработанные вызовы техника</p>
            </div>
            <div class="icon">
                <i class="fas fa-chart-pie"></i>
            </div>
            <a href="<?= \yii\helpers\Url::to('/boss/notech/index') ?>" class="small-box-footer">
                Подробнее <i class="fas fa-arrow-circle-right"></i>
            </a>
        </div>
    </div>
    <div class="col-3 d-flex flex-column">
    <div class="col">
        <div class="info-box">
            <span class="info-box-icon bg-warning"><i class="far fa-copy"></i></span>
            <div class="info-box-content">
                <span class="info-box-text">Отправлено предложений</span>
                <span class="info-box-number">dfdddsfs</span>
            </div>
        </div>
    </div>
    <div class="col">
        <div class="info-box">
            <span class="info-box-icon bg-warning"><i class="fas fa-phone-volume"></i></span>

            <div class="info-box-content">
                <span class="info-box-text">Звонков клиентам</span>
                <span class="info-box-number">dfsdsfdsf</span>
            </div>
            <!-- /.info-box-content -->
        </div>
        <!-- /.info-box -->
    </div>
    <div class="col">
        <div class="info-box">
            <span class="info-box-icon bg-warning"><i class="fas fa-tools"></i></span>

            <div class="info-box-content">
                <span class="info-box-text">Установлено оборудование</span>
                <span class="info-box-number">dfddd</span>
            </div>
            <!-- /.info-box-content -->
        </div>
        <!-- /.info-box -->
    </div>
</div>
</div>
    <div class="row">
        <div class="col-3 d-flex flex-column">
           <div class="col">
                <div class="info-box shadow-none">
                    <span class="info-box-icon bg-info"><i class="far fa-times-circle"></i></span>
                    <div class="info-box-content">
                        <span class="info-box-text">Запросы без калькулятора</span>
                        <span class="info-box-number">dfddd</span>
                    </div>
                </div>
           </div>
     
        <div class="col">
                <div class="info-box shadow-none">
                    <span class="info-box-icon bg-info"><i class="fas fa-calculator"></i></span>
                    <div class="info-box-content">
                        <span class="info-box-text">Запросы c калькулятора</span>
                        <span class="info-box-number">dfgddd</span>
                    </div>
                </div>
        </div>
    </div>
        <div class="col-md-3 col-sm-6 col-12">
            <div class="info-box bg-success">
                <span class="info-box-icon"><i class="far fa-thumbs-up"></i></span>

                <div class="info-box-content">
                    <span class="info-box-text">Число установок к запросам</span>
                    <span class="info-box-number"><?= Yii::$app->formatter->asPercent(10/100) ?></span>

                </div>
                <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
        </div>
