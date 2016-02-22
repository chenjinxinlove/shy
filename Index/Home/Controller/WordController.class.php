<?php
namespace Home\Controller;
use Think\Controller;
class WordController extends Controller {
    public function words(){
    	$slide = M('silde');
        $where['type'] = '3';
        $list1 = $slide -> where($where) -> select();
            // p($list);die;
        $this -> assign('list1' , $list1);
        $this ->display();
    }
    public function newwords(){
        $slide = M('silde');
        $where['type'] = '2';
        $where1['type'] = '4';
        $list1 = $slide -> where($where) -> select();
        $list2 = $slide -> where($where1) -> select();
        // p($list1);
        // p($list2);die;
        $this -> assign('list1' , $list1);
        $this -> assign('list2' , $list2);

        $this ->display();
    }
}