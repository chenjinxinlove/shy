<?php

/**
 * 单页管理
 */

namespace Home\Controller;
use Think\Controller;

/**
* 
*/
class ContentController extends CommonController
{
	
	public function index () 
	{
		$this -> display();
	}

	//修改控制
	public function alert ()
	{




		
		$type = I('get.type','','htmlspecialchars');
		$content = 	M('content') -> where(array('type' => $type)) -> select();	
		// p($content);die;
		$this ->assign('content' , $content);
		$this ->display();
	
		
	}
		
	//保存修改
	public function alertSave () 
	{
		if (!$_POST) {
			$this->error('页面不存在');
		}
		$type = I('post.type','','htmlspecialchars');
		$content = 	I('post.content','','htmlspecialchars');
		$data['content'] = $content;
		$data['time'] = time();
		M('content') -> where(array('type' => $type)) ->save($data);
		$this->success('修改成功');
	}


}






?>