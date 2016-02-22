<?php
namespace Home\Controller;
use Think\Controller;
class NewsController extends Controller {
     public function index ()
    {   

        $db = M('news');
        $count = $db -> where('status=1')->count();
        $Page       = new \Think\Page($count,10);// 实例化分页类 传入总记录数和每页显示的记录数(25)
        $show       = $Page->show();// 分页显示输出
        // 进行分页数据查询 注意limit方法的参数要使用Page类的属性
        $list = $db->where('status=1')->order('time')->limit($Page->firstRow.','.$Page->listRows)->select();
        $this->assign('list',$list);// 赋值数据集
        $this->assign('page',$show);// 赋值分页输出
        $this->display();
    }
    public function newsc () 
    {
        $id = I('get.id','','htmlspecialchars');
        $db = M('news');
        $where['id'] = $id;
        $list = $db -> where($where) ->find();
        $this ->assign('list' , $list );
        $this ->display();

    }
}