<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no" >
		<title></title>
		<script src="https://cdn.staticfile.org/jquery/1.10.2/jquery.min.js"></script>
		<script src="../../../../Public/dist/js/swiper.min.js"></script>
		<link rel="stylesheet" type="text/css" href="../../../../Public/dist/css/swiper.min.css"/>
		<link rel="shortcut icon" href="../../../../Public/img/兔子ico.png" type="image/x-icon"/>
		<style>
			*{margin:0px;padding:0px;font-family:"microsoft yahei";}
			li{list-style: none;}
			img{border:0px}
			a{text-decoration: none;color: #333333;}
			body{overflow-y: auto;}
			input{border: 0px;}
			
			#login,#id,#lx,#vip{position: fixed;background-color: #000000;background-color: rgba(0,0,0,.5);z-index: 999;left: 0;top: 0;right: 0;bottom: 0;display: none;}
			#login .reFrame{width: 498px;height: 596px;margin: 80px auto;background: url(../../../../Public/img/login-bg.png) no-repeat;position: relative;}
			.cancle{width: 38px;height: 27px;position: absolute;top:0;right: 62px;cursor: pointer;}
			.us{border-bottom:1px solid #ccc;width: 340px;height: 44px;margin-top: 132px;margin-left: 80px;font-size: 18px;}
			.pw{border-bottom:1px solid #ccc;width: 340px;height: 44px;margin-top: 20px;margin-left: 80px;font-size: 18px;}
			input:placeholder{color:red;}
			.reFrame .loginBtn{
				cursor:pointer;
				width: 340px;
				height: 50px;
				background-color:#19b4fe;
				color: #fff;
				border-radius: 4px;
				text-align: center;
				line-height: 50px;
				margin:40px auto;
			}
			#vip .vipFrame{width: 400px;margin:94px auto;height: 549px;position: relative;}
			#vip img{width: 400px;}
			#vip .vipFrame .cancle{right: 0px;text-align: center;color: #FFFFFF;font-weight: 600;line-height: 27px;}
			#lx .lxFrame{width: 400px;margin:94px auto;height: 549px;position: relative;}
			#lx img{width: 368px;}
			#lx .lxFrame .cancle{right: 0px;text-align: center;color: #FFFFFF;font-weight: 600;line-height: 27px;}
			#newElement{width: 114px;height: 30px;color:#fff;text-align: left;text-indent: 8px;line-height: 30px;border-bottom:1px solid #FFF;overflow: hidden;text-overflow: ellipsis;white-space: nowrap;}
			#newElement:hover{background-color: #F44336;}
			#top{height:80px;}
			.topFrame{height: 80px;width: 1128px;margin: auto;display: flex;justify-content: space-between;}
			.topLeft{height: 80px;width: 214px;background: url(../../../../Public/img/兔子.png) no-repeat left center;background-size: 70px 70px;font-size: 18px;line-height: 80px;text-indent: 84px;font-weight: 500;}
			.topRight{height: 80px;width: 322px;display: flex;justify-content: space-between;position: relative;}
			.topRight .login{background: url(../../../../Public/img/登录.png) center 10px no-repeat;background-size: 36px 36px;text-align: center;height: 80px;width: 54px;display: inline-block;line-height: 124px;}
			.topRight .sulogin{background: url(../../../../Public/img/用户头像.png) center 10px no-repeat;background-size: 36px 36px;text-align: center;height: 80px;width: 54px;display: inline-block;line-height: 124px;display: none;}
			.topRight .suloginFrame{
				width: 44px;
				height: 52px;
				position: absolute;
				top:78px;
				left: 8px;
				background-color: #19b4fe;
				display: none;
			}
			.suloginFrame p{color:white;border-bottom:1px solid white;padding: 2px;text-align: center;}
			.suloginFrame p:hover{background-color:#F44336;cursor: pointer;}
			.topRight .register{background: url(../../../../Public/img/用户注册.png) center 12px no-repeat;background-size: 30px 30px;text-align: center;height: 80px;width: 54px;display: inline-block;line-height: 124px;}
			.topRight .vip{background: url(../../../../Public/img/VIP.png) center 10px no-repeat;background-size: 30px 30px;text-align: center;height: 80px;width: 54px;display: inline-block;line-height: 124px;}
			.topRight .lx{background: url(../../../../Public/img/联系.png) center 10px no-repeat;background-size: 30px 30px;text-align: center;height: 80px;width: 86px;display: inline-block;line-height: 124px;}
			#main{height: 714px;background:url(../../../../Public/img/bg1.jpg);border:1px solid #eff4fb;}
			/* 主页开始 */
			.mainTop{width:1196px;height: 448px;margin: auto;display: block;}
			.mainTopLift{width: 554px;height: 446px;float: left;}
			.mainTopRight{width: 554px;height: 446px;float: right;}
			.mainTopRight img{display: block;width: 554px;margin: 86px auto;}
			.mainTopLift li{margin-top:26px;color:#5F7DAF;margin-left: 40px;}
			.mainTopLift .title{font-size: 32px;color:#010101;margin-top: 46px;position: relative;}
			@-webkit-keyframes myfirst{
				100%{
					background-position: -400% 0;
				}
			}
			.mainTopLift .btn{
				cursor: pointer;
				animation:myfirst 8s;
				animation-iteration-count:infinite;
				background: linear-gradient(90deg, #03a9f4, #f441a5, #ffeb3b, #03a9f4);
				background-size: 400%;
				margin-top:20px;
				text-align:center;
				line-height:66px;
				font-size:18px;
				color:white;
				width: 258px;
				height: 66px;
				display: inline-block;
				border-radius: 14px;
			}

			.mainTopLift li .total{color:#F9B307;font-size: 14px;margin-left: 30px;}
			.intro{font-size: 13px;margin-top: 10px;}
			.mainTopLift .title .qipao{width: 66px;height: 42px;background: url(../../../../Public/img/气泡c.png) left top no-repeat;background-size: 66px 42px;display: inline-block;color:#fff;line-height: 38px;font-size: 14px;text-align: center;position: absolute;top:-28px;right: 96px;}
			/* 主页结束 */
			/* 图片文字开始 */
			.trfwz{width:882px;height: 448px;margin: auto;background-color: #fff;margin-top: 64px;display: none;}
			.trfwz ul{border-bottom:1px solid #ccc;height: 44px;width:882px;display: flex;justify-content: space-between;}
			.trfwz ul li{text-align: center;width: 100%;height: 43px;line-height: 43px;cursor: pointer;}
			.trfwz ul li.sy{background: url(../../../../Public/img/首页.png) no-repeat 24px center;}
			.show{border-bottom:3px solid #19b4fe;color:#19b4fe;}
			.trfwz .contain{border-bottom:1px solid #ccc;width: 882px;height:340px;display: flex;}
			.trfwz .contain .con{width: 582px;height:340px;border-right:1px solid #ccc;}
			.trfwz .contain .con .ocrPhoto{width: 500px;height: 300px;margin: 48px auto;}
			.trfwz .contain .con .ocrPhoto .photo{margin:20px auto;display:block;width: 140px;height: 140px;}
			.trfwz .contain .con .ocrPhoto h2{text-align: center;font-weight: normal;margin:6px 0px;}
			.trfwz .contain .con .ocrPhoto h4{text-align: center;font-weight: normal;}
			.trfwz .contain .result{width: 300px;height: 340px;}
			.trfwz .contain .result .title{width: 300px;height:38px;border-bottom:1px solid #D3DFF2;line-height: 38px;text-indent: 10px;}
			.trfwz .contain .result .sbresult{width: 280px;height: 280px;margin:10px auto;display: block;border:0}
			/* 图片文字结束 */
			.trfwz .trfButton{width: 643px;height: 60px;margin: auto;display: flex;justify-content: space-between;align-items: center;}
			.trfwz .trfButton div{
				cursor:pointer;
				width: 114px;
				height: 46px;
				background-color:#19b4fe;
				color: #fff;position: relative;
				border-radius: 4px;
				text-align: center;
				line-height: 46px;
			}
			.trfwz .trfButton .download{
				cursor:pointer;width: 114px;
				height: 46px;
				background-color:#19b4fe;
				color: #fff;
				position: relative;
				border-radius: 4px;
				text-align: center;
				line-height: 46px;
			}
			.trfwz .trfButton .add .file{position: absolute;top:10px;left: 0px;opacity: 0;width: 114px;}
			.trfwz .trfButton .histort{position: relative;}
			.trfwz .trfButton .histort .top5{
				opcity:0.9s;
				width: 114px;
				height: 186px;
				position: absolute;
				bottom: 46px;
				left: 0;
				overflow: hidden;
				display: none;
			}
			.mainButton{width: 1124px;height: 120px;margin: auto;margin-top: 48px;display: flex;justify-content: space-between;align-items: center;font-size: 18px;}
			.mainButton li{width: 200px;height: 98px;text-align: center;line-height: 166px;-webkit-transition:margin-top 0.3s;}
			.mainButton li.wz{background: url(../../../../Public/img/图片.png) no-repeat center 10px;background-size: 50px 38px;}
			.mainButton li.bg{background: url(../../../../Public/img/表格.png) no-repeat center 10px;background-size: 50px 38px;}
			.mainButton li.sx{background: url(../../../../Public/img/手写.png) no-repeat center 10px;background-size: 44px 44px;}
			.mainButton li.zj{background: url(../../../../Public/img/证件.png) no-repeat center 10px;background-size: 50px 38px;}
			.mainButton li.sz{background: url(../../../../Public/img/数字.png) no-repeat center 10px;background-size: 50px 38px;}
			.mainButton li.fkb{background: url(../../../../Public/img/居民户口本.png) no-repeat center 10px;background-size: 50px 38px;}
			.mainButton li.yhk{background: url(../../../../Public/img/银行卡.png) no-repeat center 10px;background-size: 50px 38px;}
			.mainButton li.vin{background: url(../../../../Public/img/VIN.png) no-repeat center 10px;background-size: 50px 38px;}
			.mainButton li.yyzz{background: url(../../../../Public/img/营业执照.png) no-repeat center 10px;background-size: 50px 38px;}
			.mainButton li.cp{background: url(../../../../Public/img/车牌.png) no-repeat center 10px;background-size: 50px 38px;}
			.mainButton li.jsz{background: url(../../../../Public/img/驾驶证.png) no-repeat center 10px;background-size: 50px 38px;}
			
			.mainButton .swiper-wrapper li:hover{margin-top: -8px;}
			#foot{height: 312px;background-color: #373737;}
			#foot h4{width: 1200px;height: 100px;color: #fefefe;font-size: 24px;font-weight: normal;text-align: center;margin: auto;line-height: 100px;}
			#foot .inf{width: 1200px;height: 122px;display: flex;justify-content: space-between;margin:40px auto;}
			#foot .inf li{width: 90px;height: 120px;font-size: 16px;color: #ccc;line-height: 200px;text-align: center;}
			#foot .inf li.jd{background: url(../../../../Public/img/电脑b.png) no-repeat left top;background-size: 90px 94px;}
			#foot .inf li.xl{background: url(../../../../Public/img/效率.png) no-repeat 2px 2px;background-size: 84px 84px;}
			#foot .inf li.zq{background: url(../../../../Public/img/准确.png) no-repeat 6px 2px;background-size: 84px 84px;}
			#foot .inf li.aq{background: url(../../../../Public/img/安全.png) no-repeat 2px 2px;background-size: 84px 84px;}
			.name{height: 54px;background: #181818;color:#ccc;text-align: center;font-size: 16px;line-height: 54px;}
			/* 响应式
			 */
			@media screen and (max-width:540px) {
				.topFrame{
					width: 100%;
				}
				.topLeft{
					overflow: hidden;
					width: 50px;
					background-size: 50px 50px;
				}
				#main,mainTop,mainTopLift{
					/*overflow: hidden;*/
					width: 100% !important;
				}
				#main{
					height: 675px;
					overflow: hidden;
				}
				.mainTopLift li{
					width: 66% !important;
					margin-left: 0;
					text-align: center;
				}
				.qipao{
					display: none !important;
				}
				.total{
					display: none !important;
				}
				.btn{
				}
				.mainTopRight{
					display: none;
				}
				.swiper-container{
					width: 100% !important;
					height: 56px;
					margin-top: 56px;
				}
				.swiper-container li a{
					display: none;
				}
				#foot{
					display: none;
				}
				/*登录*/
				.reFrame{
					width: 100% !important;
					height: 100% !important;
					background: url(../../../../Public/img/login-bg-mini.png) no-repeat center 30px !important;
				}
				.us,.pw,.loginBtn{
					width: 76% !important;
					margin-left: 45px !important;
				}
				.us{
					margin-top: 90px;
				}
				.loginBtn{
					margin-top: 20px !important;
				}
				#login{
					width: 100%;
					height: 100%;
				}
				.cancle{
					top: 20px;
					right: 56px;
					width: 100%;
					color: red !important;
				}
				/*识别功能主体*/
				.trfwz{
					width: 100%;
				}
				.sx,.zj,.sz,.fk{
					display: none;
				}
				.trfwzTop{
					width: 100% !important;
				}
				.contain{
					width: 100% !important;
				}
				.con{
					width: 100% !important;
				}
				.ocrPhoto{
					width: 100% !important;
					margin: auto !important;
				}
				.result{
					width: 100%;
				}
				.result .title,.sbresult{
					width: 100% !important;
				}
				.clear{
					display: none;
				}
				.trfButton{
					width: 100% !important;
				}
				.add,.histort,.orc,.download{
					width: 78px !important;
				}
			}
			/*@media screen and (max-width:540px) {*/
			/*	#top .topFrame{width: 540px;height: 80px;}*/
			/*	#top .topFrame .topLeft{display: none;}*/
			/*	.mainTop .mainTopRight{display: none;}*/
			/*	#main{width: 540px;height: 600px;}*/
			/*	#main .mainButton{width: 540px;}*/
			/*	.mainTop .mainTopLift .title{font-size: 24px;}*/
			/*	.mainTop .mainTopLift li{width: 248px;}*/
			/*	.mainTop .mainTopLift li .qipao{display: none;}*/
			/*	.mainTop .mainTopLift li .total{display: block;margin:14px auto;}*/
			/*	#foot{display: none;}*/
			/*	#main .trfwz{margin-top: 8px;width: 540px;}*/
			/*	#main .trfwz .contain{width: 540px;display: block;margin:0px;height: 266px;}*/
			/*	#main .trfwz .trfwzTop{display: none;}*/
			/*	.trfwz{height: 356px;}*/
			/*	.trfwz .contain .con .ocrPhoto{width: 540px;border:1px solid white}*/
			/*	.trfwz .contain .con{width: 540px;height: 348px;}*/
			/*	.clear{display: none;}*/
			/*	.histort{display: none;	}*/
			/*	.trfwz .trfButton{width: 540px;}*/
			/*	.download{display: none;}*/
			/*	.trfwz .contain .con .ocrPhoto .photo{margin-top:40px}*/
			/*	.mainButton{display: none;}*/
			/*	.trfwz .contain .result{width: 540px;}*/
			/*}*/
			/*@media screen and (max-width:420px) {*/
			/*	#top .topFrame{width: 420px;height: 80px;}*/
			/*	#top .topFrame .topLeft{display: none;}*/
			/*	.mainTop .mainTopRight{display: none;}*/
			/*	#main{width: 420px;height: 600px;}*/
			/*	#main .mainButton{width: 420px;}*/
			/*	.mainTop .mainTopLift .title{font-size: 24px;}*/
			/*	.mainTop .mainTopLift li{width: 248px;}*/
			/*	.mainTop .mainTopLift li .qipao{display: none;}*/
			/*	.mainTop .mainTopLift li .total{display: block;margin:14px auto;}*/
			/*	#foot{display: none;}*/
			/*	#main .trfwz{margin-top: 8px;width: 420px;}*/
			/*	#main .trfwz .contain{width: 420px;display: block;margin:0px;height: 266px;}*/
			/*	#main .trfwz .trfwzTop{display: none;}*/
			/*	.trfwz{height: 356px;}*/
			/*	.trfwz .contain .con .ocrPhoto{width: 420px;border:1px solid white}*/
			/*	.trfwz .contain .con{width: 420px;height: 348px;}*/
			/*	.clear{display: none;}*/
			/*	.trfwz .trfButton{width: 420px;}*/
			/*	.download{display: none;}*/
			/*	.trfwz .contain .con .ocrPhoto .photo{margin-top:40px}*/
			/*	.mainButton{display: none;}*/
			/*	.trfwz .contain .result{width: 420px;}*/
			/*}*/
			/*@media screen and (max-width:375px) {*/
			/*	#top .topFrame{width: 375px;height: 80px;}*/
			/*	#top .topFrame .topLeft{display: none;}*/
			/*	.mainTop .mainTopRight{display: none;}*/
			/*	#main{width: 375px;height: 600px;}*/
			/*	#main .mainButton{width: 375px;}*/
			/*	.mainTop .mainTopLift .title{font-size: 24px;}*/
			/*	.mainTop .mainTopLift li{width: 248px;}*/
			/*	.mainTop .mainTopLift li .qipao{display: none;}*/
			/*	.mainTop .mainTopLift li .total{display: block;margin:14px auto;}*/
			/*	#foot{display: none;}*/
			/*	#main .trfwz{margin-top: 8px;width: 320px;}*/
			/*	#main .trfwz .contain{width: 375px;display: block;margin:0px;height: 266px;}*/
			/*	#main .trfwz .trfwzTop{display: none;}*/
			/*	.trfwz{height: 375px;}*/
			/*	.trfwz .contain .con .ocrPhoto{width: 375px;border:1px solid white}*/
			/*	.trfwz .contain .con{width: 375px;height: 348px;}*/
			/*	.clear{display: none;}*/
			/*	.trfwz .trfButton{width: 375px;}*/
			/*	.download{display: none;}*/
			/*	.trfwz .contain .con .ocrPhoto .photo{margin-top:40px}*/
			/*	.mainButton{display: none;}*/
			/*	.trfwz .contain .result{width: 375px;}*/
			/*}*/
			/*@media screen and (max-width:320px) {*/
			/*	#top .topFrame{width: 320px;height: 80px;}*/
			/*	#top .topFrame .topLeft{display: none;}*/
			/*	.mainTop .mainTopRight{display: none;}*/
			/*	#main{width: 320px;height: 600px;}*/
			/*	#main .mainButton{width: 320px;}*/
			/*	.mainTop .mainTopLift .title{font-size: 24px;}*/
			/*	.mainTop .mainTopLift li{width: 248px;}*/
			/*	.mainTop .mainTopLift li .qipao{display: none;}*/
			/*	.mainTop .mainTopLift li .total{display: block;margin:14px auto;}*/
			/*	#foot{display: none;}*/
			/*	#main .trfwz{margin-top: 8px;width: 320px;}*/
			/*	#main .trfwz .contain{width: 320px;display: block;margin:0px;height: 266px;}*/
			/*	#main .trfwz .trfwzTop{display: none;}*/
			/*	.trfwz{height: 320px;}*/
			/*	.trfwz .contain .con .ocrPhoto{width: 320px;border:1px solid white}*/
			/*	.trfwz .contain .con{width: 320px;height: 348px;}*/
			/*	.clear{display: none;}*/
			/*	.trfwz .trfButton{width: 320px;}*/
			/*	.download{display: none;}*/
			/*	.trfwz .contain .con .ocrPhoto .photo{margin-top:40px}*/
			/*	.mainButton{display: none;}*/
			/*	.trfwz .contain .result{width: 320px;}*/
			/*}*/
		</style>
	</head>
	<body>
		<!-- 遮罩 -->
		<div id="login">
			<div class="reFrame">
				<span class="cancle" onclick="cancle('#login')"></span>
				<input type="text" required="required" class="us" placeholder="请输入用户名">
				<input type="password" required class="pw"/ placeholder="请输入密码">
				<div class="loginBtn">登录</div>
			</div>
		</div>
		<!-- 遮罩 -->
		<div id="vip">
			<div class="vipFrame">
				<img src="../../../../Public/img/微信支付.png"/>
				<span class="cancle" onclick="cancle('#vip')">X</span>
			</div>
		</div>
		<!-- 遮罩 -->
		<div id="lx">
			<div class="lxFrame">
				<img src="../../../../Public/img/联系作者.png" />
				<span class="cancle" onclick="cancle('#lx')">X</span>
			</div>
		</div>
		<!-- 顶部 -->
		<div id="top">
			<div class="topFrame">
				<div class="topLeft">兔子OCR识别</div>
				<div class="topRight">
					<a href="#" class="login">登录</a>
					<a href="#" class="sulogin"></a>
					<a href="#" class="register">注册</a>
					<a href="#" class="vip" class="vip">VIP</a>
					<a href="#" class="lx">联系作者</a>
					<div class="suloginFrame">
						<p class="change">重登</p>
						<p class="exit">退出</p>
					</div>
				</div>
			</div>
		</div>
		<div id="main">
			<!-- 主页开始 -->
			<div class="mainTop">
				<ul class="mainTopLift">
					<li class="title">兔子OCR文字识别软件<span class="qipao">免费试用</span></li>
					<li>图片转文字 | 图片转表格<br/><br/>高效易用、识别率高、支持批量操作、安全可靠的图片转文字软件</li>
					<li><a class="btn">在线使用</a><span class="total">已有60868人使用</span></li>
					<li class="intro">更新时间：2020-11-26&nbsp;&nbsp;&nbsp;版本号：1.0.1<br/><br/>适合系统：Windows与OS<br/><br/>注册新用户可免费使用2次</li>
				</ul>
				<div class="mainTopRight">
					<img src="../../../../Public/img/演示视频.gif" />
				</div>
			</div>
			<!-- 主页结束-->
			<!-- 图片转文字开始 -->
			<div class="trfwz">
				<ul class="trfwzTop">
					<li class="sy">首页</li>
					<li class="wz show" id="WZ">图片转文字</li>
					<li class="bg" id="BG">图片转表格</li>
					<li class="sx" id="SX">手写图片转文字</li>
					<li class="zj" id="ZJ">证件文字提取</li>
					<li class="sz" id="SZ">数字识别</li>
					<li class="fk" id="FK">户口本识别</li>
				</ul>
				<div class="contain">
					<div class="con">
						<div class="ocrPhoto">
							<img src="../../../../Public/img/图片识别.png" class="photo"/>
							<h2>单张图片识别</h2>
							<h4>点击添加文件或拖拽文件到此处</h4>
						</div>
					</div>
					<div class="result">
						<p class="title">识别结果：</p>
						<textarea class="sbresult">
						</textarea>
					</div>
				</div>
				<div class="trfButton">
					<div class="add">添加文件<input type="file" class="file"/></div>
					<div href="#" class="clear">清空文件</div>
					
					<div class="histort">
						<span class="title">历史记录</span>
						<div class="top5">
							
						</div>
					</div>
					<div class="orc">开始识别</div>
					<a class="download" href="">下载本地</a>
				</div>
			</div>
<!--			h5界面占位-->
			<div class="h5Temp"></div>
			<!-- 图片转换结束 -->
			<ul class="mainButton swiper-container">
				<div class="swiper-wrapper">
					<li class="fkb swiper-slide"><a href="#">户口本识别</a></li>
					<li class="yhk swiper-slide"><a href="#">银行卡识别</a></li>
					<li class="jsz swiper-slide"><a href="#">驾驶证识别</a></li>
					<li class="cp swiper-slide"><a href="#">车牌识别</a></li>
					<li class="yyzz swiper-slide"><a href="#">营业执照识别</a></li>
					<li class="vin swiper-slide"><a href="#">VIN码识别</a></li>
					<li class="wz swiper-slide"><a href="#">图片转文字</a></li>
					<li class="bg swiper-slide"><a href="#">图片转表格</a></li>
					<li class="sx swiper-slide"><a href="#">手写图转文字</a></li>
					<li class="zj swiper-slide"><a href="#">证件文字提取</a></li>
					<li class="sz swiper-slide"><a href="#">数字识别</a></li>
				</div>
			</ul>
		</div>
		<div id="foot">
			<h4>节约您宝贵的时间</h4>
			<ul class="inf">
				<li class="jd">简单易用</li>
				<li class="xl">效率办公</li>
				<li class="zq">准确无误</li>
				<li class="aq">安全放心</li>
			</ul>
		</div>
		<div class="name">18计算机应用技术吕竟毕业设计</div>
	</body>
	<script>
		// file:图片文件 img:图片 path:file标签上传的图片路径 name:图片名称 base:图片的base64
		var file, img,path,name,base;
		// ocrType:ajax传给后台要识别的类型
		var ocrType = "WZ";
		// number:第几天历史记录
		var number = 1;
		//判断是注册还是登陆
		var addType = "登录";
		// 初始化方法
		window.onload = function(){
			//只保留前六条历史记录
			var arrBase = new Array();
			var arrName = new Array();
			arrBase = localStorage.getItem("base").split(",");
			arrName = localStorage.getItem("name").split(",");
			number = 1;
			if(arrBase.length>7){
				localStorage.setItem("path","");
				localStorage.setItem("base","");
				localStorage.setItem("name","");
				for(var i = 5; i >= 0; i--){
					localStorage.setItem("base",arrBase[i]+","+localStorage.getItem("base"));
					localStorage.setItem("name",arrName[i]+","+localStorage.getItem("name"));
				}
			}
			//添加前六条历史记录
			for(var i = 0; i < arrBase.length-1; i++){
				var newElement = $("<div id='newElement' onclick="+"newElement("+"'"+arrBase[i]+"'"+")"+">"+number+++"."+arrName[i]+"</div>");
				$(".top5").append(newElement);
				
			}
			//判断用户有没有登录
			if(localStorage.getItem("user") != null){
				$(".sulogin").text(localStorage.getItem("username"));
				$(".login").css("display","none");
				$(".sulogin").css("display","block")
			}
		}
		// 历史记录展开收缩
		$(".histort .title").click(function(){
		    $(".top5").slideToggle("slow");
		  });
		// 导航栏样式,并且给ocrType赋值类型
		$(".trfwz ul li").click(function(){
			ocrType = $(this).attr("id");
			$(this).siblings().removeClass("show");
			$(this).addClass("show");
		});
		// 首页
		$(".trfwz ul .sy").click(function(){
			$(".mainTop").css("display","block");
			$(".trfwz").css("display","none");
		});
		// 主页开始试用按钮
		$(".btn").click(function(){
			$(".mainTop").css("display","none");
			$(".trfwz").css("display","block");
			$(".trfwz ul li").removeClass("show");
			$(".trfwz ul .wz").addClass("show");
			ocrType = "WZ";
		});
		// 清空文件按钮
		$(".clear").click(function(){
			file = "";
			img = "";
			$(".ocrPhoto h2").css("display","block");
			$(".ocrPhoto h4").css("display","block");
			$('.photo').attr('src', "../../../../Public/img/图片识别.png");
			$(".photo").css("width","128px");
			$(".photo").css("height","128px");
		});
		// 下载按钮
		$(".download").click(function(){
			if(ocrType == "BG"){
				alert("开始下载");
			}else{
				var str = $(".sbresult").html();
				var textName = prompt("请输入文件名");
				createTxt(textName,str);
			}
		});
		//下载到本地
		function createTxt(filename, text) {
			var element = document.createElement('a');
			element.setAttribute('href', 'data:text/plain;charset=utf-8,' + text);
			element.setAttribute('download', filename);
			// element.style.display = 'none';
			document.body.appendChild(element);
			element.click();
			// document.body.removeChild(element);
			}

		// 添加文件事件
		$('.file').change(function(e) {
		        var _URL = window.URL || window.webkitURL;
		        if ((file = this.files[0])) {
					var reader=new	FileReader();
					reader.readAsDataURL(file);
		            img = new Image();
					name = this.files[0].name;
		            img.onload = function() {
						$(".ocrPhoto h2").css("display","none");
						$(".ocrPhoto h4").css("display","none");
						$('.photo').attr('src', this.src);
						if(document.body.clientWidth<=540){
							$(".photo").css("width","140px");
							$(".photo").css("height","140px");
						}else{
							$(".photo").css("width","389px");
							$(".photo").css("height","240px");
						}

						var result = reader.result;
						var began = result.indexOf(",");
						base = result.slice(began+1);
						localStorage.setItem("base",base+","+localStorage.getItem("base"));
						localStorage.setItem("name",name+","+localStorage.getItem("name"));
						var arrBase = new Array();
						var arrName = new Array();
						arrBase = localStorage.getItem("base").split(",");
						arrName = localStorage.getItem("name").split(",");
						$(".top5").text("");
						number = 1;
						for(var i = 0; i < arrBase.length-1; i++){
							var newElement = $("<div id='newElement' onclick="+"newElement("+"'"+arrBase[i]+"'"+")"+">"+number+++"."+arrName[i]+"</div>");
							$(".top5").append(newElement);
						}
		            };
		            img.src = _URL.createObjectURL(file);
		        }
		    })
		// 历史记录里面的内容事件
		function newElement(tempbase){
			base = tempbase;
			$('.photo').attr('src', "data:image/jpeg;base64,"+base);
			if(document.body.clientWidth<=540){
				$(".photo").css("width","140px");
				$(".photo").css("height","140px");
			}else{
				$(".photo").css("width","389px");
				$(".photo").css("height","240px");
			}
			$(".ocrPhoto h2").css("display","none");
			$(".ocrPhoto h4").css("display","none");
			$(".top5").slideToggle("slow");
		}
		// ocr识别ajax
		$(".orc").click(function(){
			alert("开始识别");
			$.ajax({
			type: "POST",
			url: "/Home/Ocr/ocr"+ocrType,
			data: "base="+encodeURIComponent(base)+"&user="+localStorage.getItem("user"),
			success: function(msg){
				if(msg == "请登录"){
					alert("请先登录,才能使用");
				}else if(msg == "你的试用次数已用完"){
					alert("你的试用次数已用完");
				}else if(msg.trim() != 0){
					alert("识别成功");
					$(".sbresult").html(msg);
					if(ocrType == "BG"){
						$(".download").attr("href",msg);
					}
				}else{
					alert("识别失败");
				}
			}
			});
			
		});
		// 注册登录ajax
		$(".loginBtn").click(function(){
			var us = $(".us").val();
			var pw = $(".pw").val();
			$.ajax({
				type: "POST",
				url: "/Home/Index/addAjax",
				data: "us="+us+"&pw="+pw+"&addType="+addType,
				dataType: 'json', 
				success: function(msg){
				 if(addType == "注册"){
					 if(msg != 0){
						 alert("注册成功，请重新登录");
						 $("#login").css("display","none");
						 $("body").css("overflow-y","auto");
					 }else{
						 alert("注册失败，用户名可能重复");
					 }
				 }else{
					 if(msg != 0){
						 alert("登录成功");
						 $("#login").css("display","none");
						 $("body").css("overflow-y","auto");
						 localStorage.setItem("username",msg.username);
						 localStorage.setItem("user",msg.user);
						 $(".us").val("");
						 $(".pw").val("");
						 $(".sulogin").text(msg.username);
						 $(".login").css("display","none");
						 $(".sulogin").css("display","block")
					 }else{
						 alert("登录失败，账号或密码错误");
					 }
				 }
				}
			});
		});
		// 用户选项下滑
		$(".sulogin").click(function(){
			$(".suloginFrame").slideToggle("slow");
		});
		// 退出
		$(".exit").click(function(){
				localStorage.removeItem("user");
				localStorage.removeItem("username");
				$(".sulogin").css("display","none");
				$(".login").css("display","block");
				$(".sulogin").css("display","none");
			    $(".suloginFrame").slideToggle("slow");
		});
		// 重登
		$(".change").click(function(){
			$("#login").css("display","block");
			$("body").css("overflow-y","hidden");
			addType = "登录";
			$(".loginBtn").text(addType);
			$(".suloginFrame").slideToggle("slow");
		});
		//注册
		$(".register").click(function(){
			$("#login").css("display","block");
			$("body").css("overflow-y","hidden");
			addType = "注册";
			$(".loginBtn").text(addType);
		});
		// 登录
		$(".login").click(function(){
			$("#login").css("display","block");
			$("body").css("overflow-y","hidden");
			addType = "登录";
			$(".loginBtn").text(addType);
		});
		//VIP
		$(".vip").click(function(){
			$("#vip").css("display","block");
			$("body").css("overflow-y","hidden");
		});
		// 联系作者
		$(".lx").click(function(){
			$("#lx").css("display","block");
			$("body").css("overflow-y","hidden");
		});
		// cancle
		function cancle(str){
			$(str).css("display","none");
			$("body").css("overflow-y","auto");
		}
	</script>
	<!-- 拖拽 -->
	<script>

		var box=document.querySelector(".contain");
		var base = "";
		box.ondragover=function(e){
			var e=e||window.event;
			e.preventDefault()
		}
		box.ondrop=function(e){
			e.preventDefault();
			var file=e.dataTransfer.files[0];
			var reader=new	FileReader();
			reader.readAsDataURL(file);
			reader.onload=function(){
				var result = this.result;
				var began = result.indexOf(",");
				base = result.slice(began+1);
				$(".ocrPhoto h2").css("display","none");
				$(".ocrPhoto h4").css("display","none");
				$('.photo').attr('src', "data:image/jpeg;base64,"+base);
				$(".photo").css("width","389px");
				$(".photo").css("height","240px");
				localStorage.setItem("base",base+","+localStorage.getItem("base"));
				localStorage.setItem("name",file.name+","+localStorage.getItem("name"));
				var arrPath = new Array();
				var arrBase = new Array();
				var arrName = new Array();
				arrBase = localStorage.getItem("base").split(",");
				arrName = localStorage.getItem("name").split(",");
				$(".top5").text("");
				number = 1;
				for(var i = 0; i < arrBase.length-1; i++){
					var newElement = $("<div id='newElement' onclick="+"newElement("+"'"+arrBase[i]+"'"+")"+">"+number+++"."+arrName[i]+"</div>");
					$(".top5").append(newElement);
				}
			}
		}
	</script>
	<!-- swiper -->
	<script>        
	  var mySwiper = new Swiper ('.swiper-container', {
	    direction: 'horizontal', // 垂直切换选项
	    loop: true, // 循环模式选项
	    autoplay: {
	        delay: 1500,
	        stopOnLastSlide: false,
	        disableOnInteraction: true,
	        },
		slidesPerView:5,
		
	  })   
		   //鼠标覆盖停止自动切换
		   mySwiper.el.onmouseover = function(){
		     mySwiper.autoplay.stop();
		   }
		   
		   //鼠标离开开始自动切换
		   mySwiper.el.onmouseout = function(){
		     mySwiper.autoplay.start();
		   }
	  </script>
</html>