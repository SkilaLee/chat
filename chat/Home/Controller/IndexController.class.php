<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){
    	if (session('username')) {
        header('Location: '.VIEW.'/User/index');
    	}else{
        header('Location: '.VIEW.'/Login/unlogin');
    	}
  
    }
}