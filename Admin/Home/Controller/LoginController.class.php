<?php 
/**
 * 登录控制器
 */

namespace Home\Controller;
use Think\Controller;

class LoginController extends Controller
{
	

	public function index () 
	{
		$user = M('user');
		// p($user);die;
		$this->display();
	}

	/**
	 * 	验证码
	 * @return [type] [description]
	 */
	public function verify () 
	{
		$Verify = new \Think\Verify();
		// 设置验证码字符为纯数字
		$Verify->codeSet = '0123456789'; 
		$Verify->length   = 4;
		$Verify->entry();
	}
	/**
	 * 处理登录表单
	 */
	public function Login () 
	{
		if (!IS_POST) {
			$this -> error('页面不存在');
		}
		// 提取表单内容
		$username = I('post.username','','htmlspecialchars');
		$password = I('post.password','','htmlspecialchars');
		$verify = I('post.verify','','htmlspecialchars');
		$checkbox = I('post.checkbox','','htmlspecialchars');
		$where['username'] = $username;
		$user = M('user') -> where($where) ->select();
		// echo 3;die;
		if (check_verify($verify) == 0) {
			echo '0';die;
		} 
		if (!($user[0]['username'] === $username || $user[0]['password'] === $password)) {
			
			echo '1';die;
		} 
		if ($user[0]['lock']) {
			
			echo '2';die;
		}
		//设置自动登录
		if ($checkbox) {
			$username = $user[0]['username'];
			$ip = get_client_ip();
			$value = $username . '|' .$ip;
			$value = encryption($value);
			@setcookie('auto', $value, C('AUTO_LOGIN_TIME'), '/');
		}
		// 把id写入session
		session_start('uid', $user[0]['id']);
		// echo $_SESSION['uid'];die;
		echo '3';
	}

}

?>