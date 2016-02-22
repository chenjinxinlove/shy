<?php
namespace Home\Controller;
use Think\Controller;

class UserController extends CommonController {
    public function index ()
    {   

        $db = M('user');
        $count = $db ->count();
        $Page       = new \Think\Page($count,10);// 实例化分页类 传入总记录数和每页显示的记录数(25)
        $show       = $Page->show();// 分页显示输出
        // 进行分页数据查询 注意limit方法的参数要使用Page类的属性
        $list = $db->order('time')->limit($Page->firstRow.','.$Page->listRows)->select();
        $this->assign('list',$list);// 赋值数据集
        $this->assign('page',$show);// 赋值分页输出
        $this->display();
    }
   //删除操作
   //
   public function userdel ()
   {
        if (!IS_AJAX) 
        {
            echo '操作失败';    
        } 
        else 
        {
            $id = I('post.id','','htmlspecialchars');
            if (M('user') -> delete($id)) 
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
   public function userclose ()
   {
        if (!IS_AJAX) 
        {
            echo '操作失败';    
        } 
        else 
        {
            $id = I('post.id','','htmlspecialchars');
            

            
            $where['id'] = $id;
            $lock = M('user') -> where($where) -> select();
            if ($lock = '1') {
              $lock = '0';
            }else{
               $lock = '1';
            }
            $data['lock'] = $lock;
            if (M('user') -> where($where) -> save($data));
            {
                $this->success('修改成功');
            }

            $this->success('修改失败');
        
        }
   } 
   //增加用户
   public function adduser () 
   {
        $this -> display();
        // if (!IS_POST) {
        //     $this -> error('页面不存在');
        // }
        // $title = I('post.title','','htmlspecialchars');
        // $content = I('post.content','','htmlspecialchars');
        // $data['time'] = time();
        // $data['intro'] = $title;
        // $data['content'] = $content;
        // if (M('user') -> add($data)) {
        //     $this -> success ('新增成功！');
        // }
        // $this -> error ('新增失败！');
   }

   //修改用户
   public function alert ()
   {
        $id = I('get.id','','htmlspecialchars');
        $content =  M('user') -> where(array('id' => $id)) -> select();  
        // p($content);die;
        $this->assign('id' ,$id);
        $this ->assign('content' , $content);
        $this -> display();
   }
   //保存修改新闻
   
   public function alertuser ()
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
        if (M('user') -> where($where) ->save($data)) {
            $this -> success ('修改成功！');
        }
        $this -> error ('修改失败失败！');
   } 



}