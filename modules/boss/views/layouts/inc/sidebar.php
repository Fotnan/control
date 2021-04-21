<aside class="main-sidebar sidebar-dark-primary elevation-4">
	<!-- Brand Logo -->
	<a href="<?= Yii::$app->homeUrl ?>" class="brand-link" target="_blank">
		<img src="/web/img/logo.png" alt="Caesar logo" class="brand-image img-circle elevation-3" style="opacity: .8">
		<span class="brand-text font-weight-light">Перейти к сайту</span>
	</a>
	
	<!-- Sidebar -->
	<div class="sidebar">
		<!-- Sidebar user panel (optional) -->
		<div class="user-panel mt-3 pb-3 mb-3 d-flex">
			<div class="image">
				<img src="/web/adminlte/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
			</div>
			<div class="info">
				<a href="#" class="d-block"><?= Yii::$app->user->identity->username ?></a>
				<div">
				<a href="<?= \yii\helpers\Url::to(['auth/logout']) ?>" class="btn btn-default btn-flat">Разлогиниться</a>
			</div>
		</div>
	</div>
 
	
	<!-- Sidebar Menu -->
	<nav class="mt-2">
		<ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
			<!-- Add icons to the links using the .nav-icon class
				 with font-awesome or any other icon font library -->
            <li class="nav-item">
                <a href="<?= \yii\helpers\Url::to('/boss/main/index') ?>" class="nav-link active">
                    <i class="nav-icon fas fa-th"></i>
                    <p>
                        Задания техотделу
                    </p>
                </a>
            </li>


		</ul>

	</nav>
 
	<!-- /.sidebar-menu -->
	</div>
	<!-- /.sidebar -->
</aside>
