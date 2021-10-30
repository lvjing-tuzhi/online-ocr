<?php
namespace Home\Controller;
use Think\Controller;
class AdminController extends Controller {
	public function login(){
		$this->display();
	}
	public function loginAjax(){
		$m = M("admin");
		$username = I("name");
		$password = I("password");
		$x = $m->where("username='%s' and password='%s'",$username,md5($password))->select();
		session('isLogin','1');
		echo count($x);
	}
	public function index(){
		$this->display();
	}
	public function welcome(){
		$this->display();
	}
	public function pageManage(){
		$m = M("user");
		$list = $m->select();
		$this->assign("list",$list);
		$this->display();
	}
	public function myShow(){
		$m = M("user");
		$vip = I("show");
		$username = I("username");
		$data["username"] = $username;
		$data["vip"] = $vip;
		$x = $m->save($data);
		echo $username."ok";
	}
	public function pageDel(){
		$m = M("user");
		$username = I("username");
		$x = $m->delete($username);
		echo count($x);
	}
	public function addUser(){
		$m = M("user");
		if(I("get.type") != "0"){
			$username = I("username");
			$list = $m->where("username='%s'",$username)->select();
			$this->assign("list",$list[0]);
			$this->assign("display","none");
		}
		if(IS_POST){
			$username = I("username");
			$password = md5(I("password"));
			$test = I("test");
			$vip = I("vip");
			$data["username"] = $username;
			$data["test"] = $test;
			$data["vip"] = $vip;
			if(I("id") == "0"){
				$data["password"] = $password;
				$x = $m->add($data);
			}else{
				$x = $m->save($data);
			}
			if($x != 0){
				echo "成功";
			}else{
				echo "失败";
			}
		}
		$this->display();
	}
}