<?php
namespace Home\Controller;
use Think\Controller;

class NewsController extends CommonController {
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
   //删除操作
   //
   public function newsdel ()
   {
        if (!IS_AJAX) 
        {
            echo '操作失败';    
        } 
        else 
        {
            $id = I('post.id','','htmlspecialchars');
            if (M('news') -> delete($id)) 
            {
                $this->success('删除成功');
            }
            else
            {
                 $this->success('删除失败');
            }
        }
   } 
   //关闭操作
   //
   public function newsclose ()
   {
        if (!IS_AJAX) 
        {
            echo '操作失败';    
        } 
        else 
        {
            $id = I('post.id','','htmlspecialchars');
            $data['status'] = '0';
            $where['id'] = $id;
            if (M('news') -> where($where) -> save($data));
            {
                $this->success('删除成功');
            }

            $this->success('删除失败');
        
        }
   } 
   //增加新闻
   public function addNews () 
   {
        if (!IS_POST) {
            $this -> error('页面不存在');
        }
        $title = I('post.title','','htmlspecialchars');
        $content = I('post.content','','htmlspecialchars');
        $data['time'] = time();
        $data['intro'] = $title;
        $data['content'] = $content;
        if (M('news') -> add($data)) {
            $this -> success ('新增成功！');
        }
        $this -> error ('新增失败！');
   }

   //修改新闻
   public function alert () 
   {
        $id = I('get.id','','htmlspecialchars');
        $content =  M('news') -> where(array('id' => $id)) -> select();  
        // p($content);die;
        $this->assign('id' ,$id);
        $this ->assign('content' , $content);
        $this -> display();
   }
   //保存修改新闻
   
   public function alertNews ()
   {
        if (!IS_POST) {
            $this -> error('页面不存在');
        }
        $title = I('post.title','','htmlspecialchars');
        $content = I('post.content','','htmlspecialchars');
        $id = I('post.id','','htmlspecialchars');
        $data['time'] = time();
        $data['intro'] = $title;
        $data['content'] = $content;
        $where['id'] = $id;
        if (M('news') -> where($where) ->save($data)) {
            $this -> success ('修改成功！');
        }
        $this -> error ('修改失败失败！');
   } 



}