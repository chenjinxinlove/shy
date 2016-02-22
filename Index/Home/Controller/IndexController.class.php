<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){
        $db = M('news');
        $count = $db -> where('status=1')->count();
        $Page       = new \Think\Page($count,5);// 实例化分页类 传入总记录数和每页显示的记录数(25)
        $show       = $Page->show();// 分页显示输出
        // 进行分页数据查询 注意limit方法的参数要使用Page类的属性
        $list = $db->where('status=1')->order('time')->limit($Page->firstRow.','.$Page->listRows)->select();
        $this->assign('list',$list);// 赋值数据集
        $this->assign('page',$show);// 赋值分页输出

        //首页幻灯片的模板输出
         $slide = M('silde');
         $where['type'] = '1';
         $list1 = $slide -> where($where) -> select();
            // p($list);die;
         $this -> assign('list1' , $list1);
        $this ->display();
    }
}