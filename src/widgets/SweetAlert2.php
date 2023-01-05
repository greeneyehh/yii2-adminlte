<?php
namespace greeneye\adminlte\widgets;
use Yii;
use yii\base\Widget;
use yii\helpers\ArrayHelper;


class SweetAlert2 extends Widget
{
    public $options = [];
    protected $alertTypes = [
        'info'    => 'info',
        'error'   => 'error',
        'success' => 'success',
        'warning' => 'warning'
    ];
    /**
     * {@inheritdoc}
     */
    public function run()
    {
        $session = Yii::$app->session;
        $flashes = $session->getAllFlashes();
        foreach ($flashes as $type => $flash) {
            if (!isset($this->alertTypes[$type])) {
                continue;
            }
            foreach ((array) $flash as $i => $message) {
                if(is_array($message)){
                    $heading = ArrayHelper::getValue($message, 'heading');
                    $text = ArrayHelper::getValue($message, 'text');
                }else{
                    $heading = null;
                    $text = $message;
                }
                echo SweetAlert2view::widget([
                    'options'   => $this->options,
                    'heading'   => $heading,
                    'text'      => $text,
                    'type'      => $type,
                ]);



            }
            $session->removeFlash($type);
        }
    }
}