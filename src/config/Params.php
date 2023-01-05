<?php

namespace greeneye\adminlte\config;
use greeneye\adminlte\models\Setting;
use Yii;
use yii\base\Component;
use yii\base\InvalidConfigException;

class params extends Component
{


    function run() {
    }

    public function init()
    {
        parent::init();

    }
    public function loadall() {

        $query = Setting::find()->where(['id' => '1'])->one();

        return $query;
    }

}
