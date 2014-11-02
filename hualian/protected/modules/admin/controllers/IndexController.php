<?php
/**
 * 项目:php
 * 文件：IndexController.php
 * User: Administrator whp0011@163.com
 * Date: 14-10-25 下午11:04
 */
class IndexController extends AdminController{
    public function actionIndex(){
        $this->render('index');
    }
} 