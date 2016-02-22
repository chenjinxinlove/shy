<?php
namespace Home\Controller;
use Think\Controller;

class IndexController extends CommonController {
    public function index ()
    {
       $this->display();
    }
    // 退出管理
    public function loginOut ()
    {
    	session_unset();
    	session_destroy();
    	redirect(U('Login/index'));
    }
    //个人设置
    public function profile () 
    {
        $this->display();
    }
}