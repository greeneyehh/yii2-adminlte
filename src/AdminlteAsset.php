<?php

namespace greeneye\adminlte;

class AdminlteAsset extends \yii\web\AssetBundle
{
    /**
     * Bundle with Dependent Source Package
     */
    public $sourcePath = '@vendor/greeneye/adminlte';

    public $css = [
        'plugins/fontawesome-free/css/all.min.css',
        'plugins/datatables-bs4/css/dataTables.bootstrap4.css',
        'plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css',
        'dist/css/adminlte.min.css',
        'plugins/summernote/summernote-bs4.css',
         'plugins/select2/css/select2.min.css',

    ];

    public $js = [
        'plugins/bootstrap/js/bootstrap.bundle.min.js',
      // 'plugins/jquery/jquery.min.js',
        'plugins/datatables/jquery.dataTables.js',
        'plugins/datatables-bs4/js/dataTables.bootstrap4.js',
        'dist/js/adminlte.min.js',
        'plugins/sweetalert2/sweetalert2.min.js',
        'plugins/summernote/summernote-bs4.min.js ',
        'plugins/flot/jquery.flot.js',
        'plugins/flot-old/jquery.flot.resize.min.js',
        'plugins/flot-old/jquery.flot.pie.min.js',
        'plugins/moment/moment.min.js',
        'plugins/daterangepicker/daterangepicker.js',
        'plugins/select2/js/select2.full.min.js',
        'plugins/chart.js/Chart.min.js',
        'dist/js/demo.js',

    ];



    /**
     * @package yidas/yii2-fontawesome
     * @see     https://github.com/yidas/yii2-fontawesome
     */
    public $depends = [
        'yii\web\YiiAsset',
        //  'yii\bootstrap\BootstrapAsset',
    //    'yii\bootstrap\BootstrapPluginAsset',
    ];

    /**
     * @var string|bool Choose skin color, eg. `'skin-blue'` or set `false` to disable skin loading
     * @see https://almsaeedstudio.com/themes/AdminLTE/documentation/index.html#layout
     */
    public $skin = '_all-skins';

    /**
     * @inherit
     */
    public function init()
    {
        // Append skin color file if specified
       /* if ($this->skin) {
            if (('_all-skins' !== $this->skin) && (strpos($this->skin, 'skin-') !== 0)) {
                throw new Exception('Invalid AdminLTE skin specified');
            }
            $this->css[] = sprintf('css/skins/%s.min.css', $this->skin);
        }
*/
        parent::init();
    }
}