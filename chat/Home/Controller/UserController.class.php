<?php 
namespace Home\Controller;
use Think\Controller;
class UserController extends Controller {
    public function index(){
    	$this->display('chat');
    }
    public function chat() {
        if (session('?username')) {
    	$username = session('username');
    	$Con = M('content');
    	$data['username'] = $username;
    	$content = I('post.content');
    	$data['content'] = $content;
    	$time = date("H:i:s",time());
    	$data['time'] = time();
    	if ($data['content']) {
    		$status = $Con->data($data)->add();
	    	if ($status) {
                // if (time() - $time < 24*60*60) {
                //     $time = $time=date("H:i:s",time());
                // }else {
                //     $time = $time=date("Y-m-d H:i:s",time());
                // }
            echo "<p>".$username."&nbsp;".$time."&nbsp;</p>
                 <span>".$content."</span>";
 			// var_dump($field[0]['id']);
 			// foreach ($field as $value) {
 			// 	echo "<p>".$value['username']."&nbsp;".$value['time']."&nbsp;<a id='delete' href='delete?id=".$value['id']."'>删除</a></p>
				// <span>".$value['content']."</span>";
 			// }
	    		
	    	}
	    }
    }else{
        echo "false";;
    }
}
    public function fresh() {
    	$Con = M('content');
    	$field = $Con->select();
		// var_dump($field[0]['id']);
		foreach ($field as $value) {
            $time = date("H:i:s",$value['time']);
			echo "<p>".$value['username']."&nbsp;".$time."&nbsp;<a id='delete' href='delete?id=".$value['id']."'>删除</a></p><span>".$value['content']."</span>";
		}
    }
    public function refresh() {
        $User = M('user');
        $field = $User->where('status=1')->select();
        // var_dump($field[0]['id']);
        foreach ($field as $value) {
            echo "<p><a href='info?id=".$value['user_name']."'>".$value['user_name']."</a></p>";
        }
    }
}