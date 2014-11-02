<?php
/**
 * 项目:php
 * 文件：IndexController.php
 * User: Administrator whp0011@163.com
 * Date: 14-10-18 下午10:33
 */
class IndexController extends Controller{

    public function actionIndex(){
//        echo "hello";
        $this->renderPartial("/default/index");
    }
} 