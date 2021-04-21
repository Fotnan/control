<?php


namespace app\assets;


use yii\web\AssetBundle;

class AuthAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
	    'web/adminlte/plugins/fontawesome-free/css/all.min.css',
	    'web/adminlte/plugins/icheck-bootstrap/icheck-bootstrap.min.css',
	    'web/adminlte/dist/css/adminlte.min.css',
	    '//fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback',
    ];
    public $js = [
		'web/adminlte/plugins/bootstrap/js/bootstrap.bundle.min.js',
	    'web/adminlte/dist/js/adminlte.min.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
    ];
}