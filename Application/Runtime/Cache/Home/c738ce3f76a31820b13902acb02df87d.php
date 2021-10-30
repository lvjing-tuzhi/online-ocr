<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<meta name="renderer" content="webkit|ie-comp|ie-stand">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no" />
<meta http-equiv="Cache-Control" content="no-siteapp" />
<link rel="Shortcut Icon" href="../../../../Public/favicon.ico" />
<link href="../../../../Public/static/h-ui/css/H-ui.min.css" rel="stylesheet" type="text/css" />
<link href="../../../../Public//static/h-ui.admin/css/H-ui.login.css" rel="stylesheet" type="text/css" />
<link href="../../../../Public//static/h-ui.admin/css/style.css" rel="stylesheet" type="text/css" />
<link href="../../../../Public//lib/Hui-iconfont/1.0.8/iconfont.css" rel="stylesheet" type="text/css" />
<title>在线ocr后台管理系统</title>
<meta name="keywords" content="H-ui.admin v3.1,H-ui网站后台模版,后台模版下载,后台管理系统模版,HTML后台模版下载">
<meta name="description" content="H-ui.admin v3.1，是一款由国人开发的轻量级扁平化网站后台模板，完全免费开源的网站后台管理系统模版，适合中小型CMS后台系统。">
</head>
<body>
<input type="hidden" id="TenantId" name="TenantId" value="" />
<div class="header"></div>
<div class="loginWraper">
  <div id="loginform" class="loginBox">
    <!-- <form class="form form-horizontal" action="/Home/Admin/login" method="post"> -->
      <div class="row cl">
        <label class="form-label col-xs-3"><i class="Hui-iconfont">&#xe60d;</i></label>
        <div class="formControls col-xs-8">
          <input id="name" name="" type="text" placeholder="账户" class="input-text size-L">
        </div>
      </div>
      <div class="row cl">
        <label class="form-label col-xs-3"><i class="Hui-iconfont">&#xe60e;</i></label>
        <div class="formControls col-xs-8">
          <input id="password" name="" type="password" placeholder="密码" class="input-text size-L">
        </div>
      </div>
      <div class="row cl">
        <div class="formControls col-xs-8 col-xs-offset-3">
          <button type="submit" class="btn btn-success radius size-L">&nbsp;登&nbsp;&nbsp;&nbsp;&nbsp;录&nbsp;</button>
        </div>
      </div>
    <!-- </form> -->
  </div>
</div>
<div class="footer">吕竟的毕业设计</div>
<script src="https://cdn.staticfile.org/jquery/1.10.2/jquery.min.js"></script>
<script>
	$(".btn").click(function(){
		var name = $("#name").val();
		var password = $("#password").val();
		$.ajax({
			type: "POST",
			url: "/Home/Admin/loginAjax",
			data: "name="+name+"&password="+password,
			success: function(msg){
			 if(msg != 0){
				 alert("登录成功");
				 window.location.replace("/Home/Admin/index");	
			 }else{
				 alert("登录失败");
			 }
		}
		});
	});
</script>