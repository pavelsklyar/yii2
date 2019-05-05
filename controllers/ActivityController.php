<?php

namespace app\controllers;

use app\base\BaseController;
use app\controllers\actions\ActivityCreateAction;
use app\controllers\actions\ActivityMainAction;

class ActivityController extends BaseController
{

    public function actions()
    {
        return [
            'main' => [
                'class' => ActivityMainAction::class
            ],
            'create' => [
                'class' => ActivityCreateAction::class
            ]
        ];
    }

    public function actionShow($id)
    {
        return $this->render('show', [
            'id' => $id
        ]);
    }
}