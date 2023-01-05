<?php
namespace greeneye\adminlte;

use yii\web\AssetBundle;

/**
 * Asset Bundle of the Toast widget. Registers required CSS and JS files.
 */
class AlertAsset extends \yii\web\AssetBundle
{

    /**
     * @inheritdoc
     */
    public $depends = [
        'yii\web\JqueryAsset',
    ];


    public $sourcePath = '@vendor/greeneye/adminlte';

    public $css = [
        'plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css',
        'plugins/summernote/summernote-bs4.css'

    ];

    public $js = [
        'plugins/sweetalert2/sweetalert2.min.js',
        'plugins/summernote/summernote-bs4.min.js',
        'dist/js/demo.js',


    ];

    public function init()
    {
        parent::init();
    }












}