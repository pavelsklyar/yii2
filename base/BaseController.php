<?php


namespace app\base;


use yii\web\Controller;

class BaseController extends Controller
{
    public function beforeAction($action)
    {
        $session = \Yii::$app->session;

        if (!$session->get('auth'))
            $this->redirect('/', 301);

        if ($session->has('current_page')) {
            $session->addFlash('previous_page', $session->get('current_page'));
            $session->addFlash('current_page', \Yii::$app->request->resolve()[0]);
        }
        else {
            $session->addFlash('previous_page', '');
            $session->addFlash('current_page', \Yii::$app->request->resolve()[0]);
        }

        return parent::beforeAction($action);
    }

}