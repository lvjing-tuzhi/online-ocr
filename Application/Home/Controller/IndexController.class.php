<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
	public function login(){
		$this->display();
	}
	public function index(){
		$this->display();
	}
	public function addAjax(){
		$user = M("user");
		$us = I("us");
		$pw = I("pw");
		$addType = I("addType");
		if($addType == "注册"){
			$data["username"] = $us;
			$data["password"] = md5($pw);
			$data["test"] = "2";
			$data["vip"] = "0";
			$is = $user->where("username='%s'",$us)->select();
			if($is[0]["username"] == ""){
				$x = $user->add($data);
				echo "1";
			}else{
				echo "0";
			}
		}else{
			$x = $user->where("username='%s' and password='%s'",$us,md5($pw))->select();
			$data["username"] = substr($x[0]["username"],0,2);
			$data["user"] = $x[0]["username"];
			if(count($x) != 0){
				echo json_encode($data);
			}else{
				echo "0";
			}
			 
		}
		
	}
	public function h5(){
	    $this->display();
	}

}