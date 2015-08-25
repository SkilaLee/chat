<?php 
namespace Home\Controller;
use Think\Controller;
class LoginController extends Controller {
    public function index() {
    	$this->display('login');
    }
    public function unlogin() {
    	$this->display('unlogin');
    }
    public function register() {
    	$this->display('register');
    }
    public function doLogin() {
    	$User = M('user');
    	$username = I('post.username');
    	$psw = I('post.password');
   		$password = md5($psw.'lzy');
    	$data['user_name'] = $username;
    	$data['user_psw'] = $password;
    	$name = $User->where($data)->select();
    	if ($name) {
    		session('username',$username);
            // $user_name['user_name'] = $username;
            // $da['status'] = 1;
            // $sta = $User->where($user_name)->save($da);   //一直有问题.....
            $sql = "UPDATE `user` SET `status` = 1 WHERE `user_name` = '".$username."'";
            $sta = $User->execute($sql);
            // var_dump($sta);
        	header('Location: '.VIEW.'/User/index');
    	}else{
    		echo "用户名或密码错误";
   			$this->display('login');
    	}
    }
    public function doRegister() {
    	$User = M('user');
    	$username = I('post.username');
    	$psw = I('post.password');
    	if ($username&&$psw) {
    		$password = md5($psw.'lzy');
	    	$data['user_name'] = $username;
	    	$name = $User->where($data)->select();
	    	if ($name) {
	    		echo '改用户名已被注册';
    			$this->display('register');
	    	}else{
                $data['user_psw'] = $password;
	    		// $data['status'] = 1;       //写入status不行.....写入id就可以...郁闷
	    		$add = $User->data($data)->add();
	    		if ($add) {
	    			session('username',$username); 
                    $sql = "UPDATE `user` SET `status` = 1 WHERE `user_name` = '".$username."'";
                    $sta = $User->execute($sql);
	    			echo "注册成功";   
                    // print_r($sta);                 
        			header('Location: '.VIEW.'/User/index');
	    		}
	    	}
    	}else{
    		echo "用户名或者密码不可为空!";
	    	$this->display('register');
    	}
    	
    }

    
    //登出
    public function outLogin() {
        $username = session('username');
        session('[destroy]');
        $User = M('user');
        // $data['user_name'] = $username;
        // $status['status'] = 0;
        // $User->where($data)->save($status);
        $sql = "UPDATE `user` SET `status` = 0 WHERE `user_name` = '".$username."'";
        $sta = $User->execute($sql);
        // var_dump($sta);
        header('Location: '.VIEW);
    }
}