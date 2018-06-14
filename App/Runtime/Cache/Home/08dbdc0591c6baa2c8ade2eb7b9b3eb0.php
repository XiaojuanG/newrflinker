<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>

	<head>
		<meta charset="utf-8" />
		<!-- 优先使用 IE 最新版本和 Chrome -->
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
		<!-- 为移动设备添加 viewport -->
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" />
		<!--忽略页面中的数字识别为电话，忽略email识别-->
		<meta name="format-detection" content="telphone=no, email=no" />
		<title>公共下载</title>
		
		<link rel="stylesheet" type="text/css" href="/new/Public/qiantai/css/bootstrap.css" />
		<link rel="stylesheet" type="text/css" href="/new/Public/qiantai/css/reset.css">
		<link rel="stylesheet" type="text/css" href="/new/Public/qiantai/css/header_nav.css" />
		<link rel="stylesheet" type="text/css" href="/new/Public/qiantai/css/base.css" />
		<link rel="stylesheet" type="text/css" href="/new/Public/qiantai/css/commonDownload.css">
		<link rel="stylesheet" type="text/css" href="/new/Public/qiantai/css/index.css" />
		<!-- <link rel="stylesheet" type="text/css" href="css/commonDownload.css"> -->
		<!-- 联系我们 -->
		<link rel="stylesheet" type="text/css" href="/new/Public/qiantai/css/contact_us.css">
		<!--[if lt IE 9]>
			<script type="text/javascript" src="js/html5shiv.min.js"></script>
			<script type="text/javascript" src="js/respond.min.js"></script>
	    <![endif]-->
		<link rel="stylesheet" type="text/css" href="/new/Public/qiantai/css/media.css" />
		<!-- new css by wys -->
		<link rel="stylesheet" type="text/css" href="/new/Public/qiantai/css/new.css" />
		<!-- ios下头部固定方案防止头部随着页面上拉滚动 -->
		<link rel="stylesheet" type="text/css" href="/new/Public/qiantai/css/headerstyle.css">
		<!-- 搜索预览插件样式-->
		<link rel="stylesheet" type="text/css" href="/new/Public/qiantai/css/search_demo.css">
		<style type="text/css" media="screen">
			@media screen and (max-width: 750px){
				.navbar-default {
				    background: #bdbdbd;

				}
				
			}
		</style>
	</head>

	<body>
		<main class="max-width-index">
			
			<!--加载头部-->
			<main class="max-width-index">  <!--导航-->  <nav class="navbar navbar-default navbar-fixed-top top-box">    <div class="container">      <div class="navbar-header">        <button type="button" class="navbar-toggle collapsed">          <span class="sr-only">Toggle navigation</span>          <span class="icon-bar"></span>          <span class="icon-bar"></span>          <span class="icon-bar"></span>        </button>        <a class="navbar-brand" href="index.html">          <img src="/new/Public/qiantai/img/login.png">        </a>      </div>	     <script>		  window.__arr__=<?php echo ($new_live); ?>;		  window.__arr2__=<?php echo ($new_live_all); ?>;	  </script>		      <div class="form-group form-group-mobile visible-xs">						<input type="text" id="mobilearrcity" class="form-control" style="font-size:13px;" placeholder="<?php echo (L("head_search_select")); ?>">						<div id='mobilesuggest' class="mobileac_results"></div>	  </div>      <div class="collapse navbar-collapse" >        <ul class="nav navbar-nav navbar-left top-nav">          <li  id="nav_toggle"  style="line-height: 60px;width: 140px;text-align: center;margin-right: 10px">            <a href="<?php echo U('?lang=ch-cn');?>" class=" nav_toggle <?php echo (L("languagesclicks")); ?>" style="display: inline;float: left;">中文</a>|            <a href="<?php echo U('?lang=en-us');?>" class="nav_toggle <?php echo (L("languagesclick")); ?>" style="display: inline;float: right;">EN</a>          </li>          <li <?php if($style_change == Index): ?>class="active"<?php endif; ?>>            <a href="<?php echo U('Index/Index');?>" class="China">              <?php echo (L("head_index")); ?>              <span class="sr-only">(current)</span>            </a>          </li>          <li class="dropdown ">            <a class="dropdown-toggle China hidden-xs" data-toggle="dropdown" href="Case.html"><?php echo (L("title_Product")); ?></a>            <ul class="dropdown-menu" id="dropdown">              <li><a href="<?php echo U('Rflinker/Index');?>">Rflinker</a></li>              <li><a href="<?php echo U('Feig/Index');?>">Feig</a></li>            </ul>          </li>          <li class="visible-xs China"><a href="<?php echo U('Rflinker/Index');?>">Rflinker</a></li>          <li class="visible-xs China"><a href="<?php echo U('Feig/Index');?>">Feig</a></li>          <li <?php if($style_change == Vocationlist): ?>class="active"<?php endif; ?>>            <a class="China" href="<?php echo U('Vocationlist/Index');?>"><?php echo (L("head_Industry")); ?></a>          </li>          <li <?php if($style_change == Codeinput): ?>class="active"<?php endif; ?>>            <a class="China" href="<?php echo U('Codeinput/Index');?>"><?php echo (L("head_support")); ?></a>          </li>          <li <?php if($style_change == Aboutus): ?>class="active"<?php endif; ?>>            <a class="China" href="<?php echo U('Aboutus/Index');?>"><?php echo (L("head_about")); ?></a>          </li>        </ul>  		<ul class="nav navbar-nav navbar-right top-nav" style="width: 300px;">														<li class="search_c hidden-sm hidden-xs">								<a href="#"><?php echo (L("head_search")); ?> <i class="glyphicon glyphicon-search"></i></a>							</li>							<form class="hidden-sm hidden-xs">								<input style="font-size:13px;" placeholder="<?php echo (L("head_search_select")); ?>" type="text" name="arrcity" id="arrcity" class="form-control search"/>								<div id='suggest' class="ac_results"></div>							</form>														 														  		</ul>																      </div>      <!-- /.navbar-collapse -->    </div>    <!-- /.container -->  </nav>  <!--/ 导航-->

			<div class="scrollable" id="scrollable">
				<!--轮播图-->
				<div id="carousel-example-generic" class="carousel slide banner" data-ride="carousel">
					
					<!-- 图片区域 -->
					<div class="carousel-inner" role="listbox">
						<div class="item active">
							<img src="/new/Public/qiantai/img/banner1.jpg" alt="">
							
						</div>
						
					</div>

				
				</div>
				<!--vip下载-->
				<div class="news col-xs-12" style="background-color: #eee;padding-top:15px;">
					<div class="container">
						<!-- 模态框（Modal） -->
						<div class="modal fade " id="myModal" tabindex="-1" data-backdrop="static" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
							<div class="modal-dialog" data-keyboard="false">
								<div class="modal-content">
									<div class="modal-header">
										<button type="button" class="close" data-dismiss="modal" 
												aria-hidden="true">×
										</button>
									
										<h4 class="modal-title" id="myModalLabel" style="text-align: center;">
											 <?php echo (L("supportservicesdemo_downvipyzm")); ?> 
										</h4>
									</div>
									<div class="modal-body">
										<form class="">
											<div class="form-group">
											    <input type="text" class="form-control vipname" placeholder="<?php echo (L("supportservicesdemo_yzm")); ?>" data-foolish-msg="<?php echo (L("supportservicesdemo_isyzm")); ?>">
											</div>
											<!-- <div class="form-group">
											    <input type="password" class="form-control vippwd" placeholder="<?php echo (L("supportser_pwd")); ?>" data-foolish-msg="<?php echo (L("supportser_ispwd")); ?>">
											</div> -->
											<div class="form-group" >
												<a href="#" type="button" style="text-align:center; display:block;background-color: #fafafa;border: 1px solid #dfdfdf; padding: 5px;color: #000; width: 100px;height: 30px;margin:0 auto;  " class="vipbutton" ><?php echo (L("supportser_sub")); ?></a>

											</div>
											
										</form>
									</div>
								</div>
							</div>
						</div>
						<div class="row news-content" style="padding-top:25px;">
							<div class="common-title">
								<h2>—— <?php echo (L("supportservices_down")); ?> ——</h2>						
							</div>
							<div class="col-xs-12">
								
								<ul class="font-ul-vip col-xs-12" >
								<?php if(is_array($supports)): $i = 0; $__LIST__ = $supports;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$val): $mod = ($i % 2 );++$i;?><a href="/new/Public/Uploads/<?php echo ($val['file']); ?>" target="view_window"><li class="col-md-4 col-xs-12"><?php echo ($val['stname']); ?><i class="iconfont">&#xe615;</i></a></li><?php endforeach; endif; else: echo "" ;endif; ?>
								</ul>
							</div>
							
						</div>
					</div>
				</div>
				<!--加载底部-->
				<!--联系我们-->				<div class="contact-us col-xs-12" style="background:#fff;">					<div class="container">						<div class="row">							<div class="common-title">								<h2>—— <?php echo (L("index_FormTitle")); ?>  ——</h2>							</div>							<div class="col-lg-6 col-md-6">								<p class="font-title"><?php echo (L("index_PleseEmail")); ?></p>								<div>									<form class="">										<div class="form-group">										    <select class="form-control matter" placeholder="<?php echo (L("index_PleseQuestion")); ?>" data-foolish-msg="<?php echo (L("index_PleseQuestion")); ?>">										       <option value=""><?php echo (L("index_PleseQuestion")); ?></option>												<option value="1"><?php echo (L("index_FormProblemyi")); ?></option>												<option value="2"><?php echo (L("index_FormProblemer")); ?></option>										    </select>										</div>										<div class="row form-group">										  <div class="col-lg-3 col-md-3">										  	<label class="sr-only" for="name">name</label>										  	<input type="text" class="form-control username" id="name" placeholder="<?php echo (L("index_FormName")); ?>" data-foolish-msg="<?php echo (L("index_FormIsName")); ?>">										  </div>										  <div class="col-lg-3 col-md-3">										    <label class="sr-only" for="phone">phone</label>										  	<input type="text" class="form-control userphone" id="phone" placeholder="<?php echo (L("index_FormTel")); ?>" data-foolish-msg="<?php echo (L("index_FormIsTel")); ?>">										  </div>										  <div class="col-lg-6 col-md-6">										    <label class="sr-only" for="InputEmail">Email address</label>										  	<input type="email" class="form-control useremail" id="InputEmail" placeholder="<?php echo (L("index_FormEmail")); ?>" data-foolish-msg="<?php echo (L("index_FormIsEmail")); ?>">										  </div>										</div>										<div class="form-group">											<textarea class="form-control matterconter" rows="10" placeholder="<?php echo (L("index_FormContent")); ?>" data-foolish-msg="<?php echo (L("index_FormContent")); ?>"></textarea>										</div>										<button type="button" class="font-index-btn matter-button">提交</button>																			  									</form>								</div>							</div>							<div class="col-lg-6 qr-code" >								<p class="font-title"><?php echo (L("index_Saoma")); ?></p>																<div>									 <img src="/new/Public/qiantai/img/qr-code.png" >								</div>								<div>									  <p class="font-phone"><?php echo (L("index_FormTel")); ?>:</p>									  <p class="phone-num">139-1899-9394</p>									  <p class="font-phone"><?php echo (L("index_Address")); ?>:</p>									  <p class="font-address"><?php echo (L("bottom_address")); ?></p>									  <p class="font-phone"><?php echo (L("emailname")); ?>:</p>									  <p class="font-address">13918999394@163.com</p>								</div>							</div>							</div>										</div>				</div>				<footer class="col-xs-12">					<div class="footer">						<div class="font-footer"><?php echo (L("ICPname")); ?></div>					</div>				</footer>			</div>				</main>		        <script type="text/javascript" src="/new/Public/qiantai/js/jquery.js"></script>		<script type="text/javascript" src="/new/Public/qiantai/js/bootstrap.js"></script>		<script type="text/javascript" src="/new/Public/qiantai/search_demo/jquery.min.js"></script>				<script type="text/javascript" src="/new/Public/qiantai/js/nav.js"></script>		<!-- ios下头部固定方案防止头部随着页面上拉滚动 -->		<script type="text/javascript" src="/new/Public/qiantai/iostopfixed/scrollfix.js"></script>				<script src="/new/Public/qiantai/js/main.js"></script><!--		<script src="http://cdn.static.runoob.com/libs/jquery/2.1.1/jquery.min.js"></script>		<script src="http://cdn.static.runoob.com/libs/bootstrap/3.3.7/js/bootstrap.min.js">-->				</script>		<!-- 搜索预览插件 -->		<script type="text/javascript" src="/new/Public/qiantai/search_demo/aircity.js"></script>					<script src="/new/Public/qiantai/layer/mobile/layer.js"></script>		<script type="text/javascript" src="/new/Public/qiantai/js/connectUs.js"></script>						<script>		$(function() {	function checkMobile(mobile){	    if((/^1[3|4|5|6|7|8]\d{9}$/.test(mobile))){	        return true;	    }else{	        return false;	    }	}	function isEmail(str){	    if ((/^([a-zA-Z0-9_-])+@([a-zA-Z0-9_-])+(.[a-zA-Z0-9_-])+/.test(str))){	        return true;	    }else{	        return false;	    }	}	// 联系我们	$('.matter-button').on('click', function() {		         	var requestData = {    		matter:$('.matter').val(),    		username:$('.username').val(),    		userphone:$('.userphone').val(),    		useremail:$('.useremail').val(),    		matterconter:$('.matterconter').val()		}    	var valid = true;        if(valid && requestData.matter == ''){            valid = false;            var tips = $(".matter").attr("data-foolish-msg");            $(".matter").focus();        }        if(valid && requestData.username.length <= 0){            valid = false;            var tips = $(".username").attr("data-foolish-msg");            $(".username").focus();        }        if(valid && !checkMobile(requestData.userphone)){            var tips = $(".userphone").attr("data-foolish-msg");            $(".userphone").focus();            valid = false;		}        if(valid && !isEmail(requestData.useremail)){            var tips = $(".useremail").attr("data-foolish-msg");            $(".useremail").focus();            valid = false;        }        if(valid && requestData.matterconter.length <= 0){            valid = false;            var tips = $(".matterconter").attr("data-foolish-msg");            $(".matterconter").focus();        }						//问题		var SelectType = requestData.matter;		//提问姓名		var UserName = requestData.username;		//提问电话		var UserTel = requestData.userphone;		//提问邮箱		var UserMail = requestData.useremail;		//提问内容		var TextSay = requestData.matterconter;		        if(valid){                    $.ajax({							type:"POST",							url:"<?php echo U('Index/email');?>",							dataType: "json",							data:{"SelectType":SelectType,"UserName":UserName,"UserTel":UserTel,"UserMail":UserMail,"TextSay":TextSay},							success: function(data){                                 if(data == 1){							   									       layer.open({											  content: '<?php echo (L("index_Formtijiaotrue")); ?>'												,skin: 'msg'												,time: 2 //2秒后自动关闭											});					 								 }										}			                     });        }else{            layer.open({                  content: tips                  ,skin: 'msg'                  ,time: 2 //2秒后自动关闭                });        }	});	    	})		</script>
				
	</body>
</html>