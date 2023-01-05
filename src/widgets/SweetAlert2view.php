<?php


namespace greeneye\adminlte\widgets;
use yii\base\Widget;
use yii\helpers\Json;
use greeneye\adminlte\AdminlteAsset;

class SweetAlert2view extends Widget
{
    public $options = [];
    public $heading;
    public $text;
    public $type;
    public function init()
    {
        parent::init();

        $this->options['type'] = $this->type;
        $this->options['title'] = $this->text;

    }

    public function run()
    {
        $view = $this->getView();
        AdminlteAsset::register($this->view);
        $options = Json::encode($this->options);
        $view->registerJs("$(function() {
        const Toast =Swal.mixin({
      toast: true,
      position: 'top-end',
      showConfirmButton: false,
      timer: 3000
    });
    Toast.fire(".$options.");}
    );");
    }
}