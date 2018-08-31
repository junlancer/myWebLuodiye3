<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width"/>
				<title>期货专业指导软件</title>
<meta name="keywords" content="期货专业指导软件" />
<meta name="description" content="" />
		<link rel="stylesheet" type="text/css" href="/myWebLuodiye3/Public/Home/default/muban/css/style.css"/>
		<link rel="stylesheet" type="text/css" href="/myWebLuodiye3/Public/Home/default/muban/css/smohan.min.css"/>
	</head>
	<body>
		<div class="container">
			<div class="topbar">
				<div class="wraper">
					<a href="/myWebLuodiye3/Public/Home/default/Index_index.html" class="logo"></a>
					<div class="nav">
						<ul class="parent">
							<li class="current"><a href="http://www.17sucai.com/">首页</a><span class="lines"></span></li>
							<li><a href="http://www.17sucai.com/">开户咨询</a><span class="lines"></span></li>
							<li><a href="http://www.17sucai.com/">核心业务</a><span class="lines"></span></li>
							<li><a href="http://www.17sucai.com/">公司信息</a><span class="lines"></span></li>
							<li><a href="http://www.17sucai.com/">联系我们</a><span class="lines"></span></li>
						</ul>
					</div>
				</div>
			</div>
			<div class="banner">
				<div class="wrap">

				</div>
			</div>
			<div class="main1"></div>
			<div class="main2"></div>
			<div class="main3"></div>
			<div class="main4"></div>
			<div class="main5">
				<div class="wrap">
					<ul>
						<li>
							<img src="/myWebLuodiye3/Public/Home/default/muban/img/li-img_01.jpg"/>
							<div class="textDiv">
								<span>投资课堂</span>一手掌握
								<p>免费学习投资技巧，第一时间<br />掌握投资资讯，让您从新手晋升到专家</p>
							</div>
						</li>
						<li>
							<img src="/myWebLuodiye3/Public/Home/default/muban/img/li-img_02.jpg"/>
							<div class="textDiv">
								<span>顾问平台</span>实时播报
								<p>专业投资分析师与您交流<br />在线解盘，实时行情播报</p>
							</div>
						</li>
						<li>
							<img src="/myWebLuodiye3/Public/Home/default/muban/img/li-img_03.jpg"/>
							<div class="textDiv">
								24小时<span>贴心服务</span>
								<p>随时操盘提示，24小时一对<br />客服，随时为您解答</p>
							</div>
						</li>
						<li>
							<img src="/myWebLuodiye3/Public/Home/default/muban/img/li-img_04.jpg"/>
							<div class="textDiv">
								网页手机端<span>无缝操作</span>
								<p>无论是网页版还是移动端，<br />都做到最及时的更新，<br />让您随时随地，把握先机</p>
							</div>
						</li>
					</ul>
				</div>
			</div>
			
			<div class="footer">
				官方认证查询<img src="/myWebLuodiye3/Public/Home/default/muban/img/rz-img.png" alt="" />官方认证查询
				<br/>陕西卓创信息科技有限公司
			</div>
		</div>
		<div>
	        <a href="tencent://message/?uin=3003227820&Site=www.shxx678.com&Menu=yes" class="kef_k"><span><img class="kefu" src="/myWebLuodiye3/Public/Home/default/muban/img/kefu.png" alt=""></span>客服</a>
	        <p  id="back-to-top"><a href="#top"><span></span></a></p>
	    </div> 
		<!--弹窗-->
		<div id="pop">
			<div id="bg"></div> 
		 	<div id="show"> 
		 		<!--登录后-->
		 		<div class="LoginAfter">
		 			<span class="title">立即下载<a href="###" class="close">×</a></span>
		 			<form method='post' id="form_do" name="form_do" action="/myWebLuodiye3/index.php?s=/Guestbook/add.html">
		 			<div class="inputDiv">
		 				<span class="fl">姓名：</span>
		 				<input type="text" name="username" class="fl"  placeholder="请输入姓名" id="username" maxlength="10" />
		 			</div>
		 			<div class="inputDiv">
		 				<span class="fl">手机号码：</span>
		 				<input type="text" name="tel" class="fl"  placeholder="请输入手机号码" id="tel" maxlength="11" />
		 			</div>
		 			<div class="inputDiv yzmDiv">
		 				<span class="fl">验证码：</span>
		 				<input type="text"  name="verify_code" id="verify_code"  placeholder="请输入验证码" class="fl"/>
		 				<button type="button" name="get_code" id="get_code" class="getYzm">获取验证码</button>
		 			</div>
		 			<div class="btnDiv">
		 				<div class="closeBtnDiv">
		 					<button type="submit" id="submit" class="closeBtn">立即下载</button>
		 					
		 				</div>
		 			</div>


		 			  </form>
		 		</div>
			</div>
		</div>
	</body>
    <script src="/myWebLuodiye3/Public/Home/default/muban/js/jquery-1.11.3.min.js" type="text/javascript" charset="utf-8"></script>
    <script type="text/javascript">
    	$(function(){
	        //当滚动条的位置处于距顶部100像素以下时，跳转链接出现，否则消失
	        $(function () {
	            $(window).scroll(function(){
	                if ($(window).scrollTop()>0){
	                    $("#back-to-top").fadeIn(1500);
	                }
	                // else
	                // {
	                //     $("#back-to-top").fadeOut(1500);
	                // }
	            });
	 
	            //当点击跳转链接后，回到页面顶部位置
	 
	            $("#back-to-top").click(function(){
	                $('body,html').animate({scrollTop:0},1000);
	                return false;
	            });
	        });
	   });
    	//弹窗
       $(".downloadBtn a").click(function(){
       		$("body").css("overflow","hidden");
		    document.getElementById("pop").style.display ="block";  
		    document.getElementById("bg").style.display ="block";  
		    document.getElementById("show").style.display ="block"; 
			$("#bg").css("height",$(document).height());
			$("#pop").css("height",$(document).height());
			$("#bg").css("width",$(document).width());
			$("#pop").css("width",$(document).width());
       })
       $("#pop .closeBtn").click(function(){
			$("body").css("overflow","auto");
		    document.getElementById("pop").style.display ="none";  
		    document.getElementById("bg").style.display ="none";  
		    document.getElementById("show").style.display ="none"; 
       })
       $(".close").click(function(){
			$("body").css("overflow","auto");
		    document.getElementById("pop").style.display ="none";  
		    document.getElementById("bg").style.display ="none";  
		    document.getElementById("show").style.display ="none"; 
       })

    </script>



        <script type="text/javascript">
    	 //弹窗
   
             var countdown = 10; 
       $("#get_code").click(function(){
       		 var tel         =   $("#tel").val().trim();
	        if(tel == ''){
	            alert($("#tel").attr("placeholder"));
	            return false;
	        }

	        var phoneReg = /(^1[3|4|5|7|8]\d{9}$)/;
	            if (!phoneReg.test(tel)) {
	                alert('请输入有效的手机号！');
	                return false;
	            }
       		$.ajax({
	             type: "GET",
	             url: "<?php echo U('get_code_ajax');?>",
	             data: {mobile:tel},
	             dataType: "json",
	             success: function(data){
	                        // alert(data.code);
	                        if(data.code == '0000'){
	                        	alert(data.errmsg);

	                        	settime($("#get_code"));
	                        
	                        }else{
	                        	alert(data.errmsg);
	                        }
	                      }
	         });

       		
       });
 
		function settime(obj) { //发送验证码倒计时
		
		    if (countdown == 0) { 
		        obj.attr('disabled',false); 
		        //obj.removeattr("disabled"); 
		        obj.val("点击获取");
		        countdown = 10; 
		        return;
		    } else { 
		        obj.attr('disabled',true);
		        obj.val("重新获取(" + countdown + ")");
		        countdown--; 
		    } 
		    setTimeout(function() { 
		    settime(obj) }
		    ,1000);
		}

		$("#form_do").submit(function(){

			var username    =   $("#username").val().trim();
	        if(username == ''){
	            alert($("#username").attr("placeholder"));
	            return false;
	        }
	       
	        var tel         =   $("#tel").val().trim();
	        if(tel == ''){
	            alert($("#tel").attr("placeholder"));
	            return false;
	        }

	        var phoneReg = /(^1[3|4|5|7|8]\d{9}$)/;
	            if (!phoneReg.test(tel)) {
	                alert('请输入有效的手机号！');
	                return false;
	            }

	        var verify_code         =   $("#verify_code").val().trim();
	        if(verify_code == ''){
	            alert($("#verify_code").attr("placeholder"));
	            return false;
	        }


		});
    </script>
</html>
<!--请将以下码嵌入到您网页源代码的最后面，通常是</body></HTML>之后,这样在服务器升级维护的时候也不会影响您的网页打开呈现速度。-->
<script language="javascript" src="http://awt.zoosnet.net/JS/LsJS.aspx?siteid=AWT76789186&float=1&lng=cn"></script>