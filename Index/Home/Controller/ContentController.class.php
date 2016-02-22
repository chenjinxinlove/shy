<?php
namespace Home\Controller;
use Think\Controller;
class ContentController extends Controller {
    public function contactUs ()
    {
    	$where['id'] = '1';
        $content = M('content') -> where($where) -> select();
        // p($content);die;
        $this -> assign('content' , $content);
        $this ->display();
    }

    public function HcImpressionYZ ()
    {
    	$where['id'] = '2';
        $content = M('content') -> where($where) -> select();
        // p($content);die;
        $this -> assign('content' , $content);
        $this ->display();
    }

    public function shuyaunintro ()
    {
    	$where['id'] = '3';
        $content = M('content') -> where($where) -> select();
        // p($content);die;
        $this -> assign('content' , $content);
        $this ->display();
    }
    public function huiyuanintro ()
    {
    	$where['id'] = '4';
        $content = M('content') -> where($where) -> select();
        // p($content);die;
        $this -> assign('content' , $content);
        $this ->display();
    }
}