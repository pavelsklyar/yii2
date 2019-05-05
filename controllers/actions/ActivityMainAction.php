<?php


namespace app\controllers\actions;


use yii\base\Action;

class ActivityMainAction extends Action
{
    public function run()
    {
        return $this->controller->render('main');
    }
}