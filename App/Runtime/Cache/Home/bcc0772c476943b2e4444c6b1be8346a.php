<?php if (!defined('THINK_PATH')) exit();?>﻿<!DOCTYPE html>
<html>

	<head>
		<meta charset="utf-8" />
		<!-- 优先使用 IE 最新版本和 Chrome -->
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
		<!-- 为移动设备添加 viewport -->
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" />
		<!--忽略页面中的数字识别为电话，忽略email识别-->
		<meta name="format-detection" content="telphone=no, email=no" />
		<title>产品</title>
		<link rel="stylesheet" type="text/css" href="/newrflinker/Public/qiantai/css/bootstrap.css" />
		<link rel="stylesheet" type="text/css" href="/newrflinker/Public/qiantai/css/reset.css">
		<link rel="stylesheet" type="text/css" href="/newrflinker/Public/qiantai/css/header_nav.css" />
		<link rel="stylesheet" type="text/css" href="/newrflinker/Public/qiantai/css/base.css" />
		<link rel="stylesheet" type="text/css" href="/newrflinker/Public/qiantai/css/index.css" />
		<!-- 联系我们 -->
		<link rel="stylesheet" type="text/css" href="/newrflinker/Public/qiantai/css/contact_us.css">
		<!--[if lt IE 9]>
			<script type="text/javascript" src="js/html5shiv.min.js"></script>
			<script type="text/javascript" src="js/respond.min.js"></script>
	    <![endif]-->
		<link rel="stylesheet" type="text/css" href="/newrflinker/Public/qiantai/css/media.css" />
		<!-- new css by wys -->
		<link rel="stylesheet" type="text/css" href="/newrflinker/Public/qiantai/css/new.css" />
		<!-- ios下头部固定方案防止头部随着页面上拉滚动 -->
		<link rel="stylesheet" type="text/css" href="/newrflinker/Public/qiantai/css/headerstyle.css">
		<!-- 搜索预览插件样式-->
		<link rel="stylesheet" type="text/css" href="/newrflinker/Public/qiantai/css/search_demo.css">
		<link rel="stylesheet" type="text/css" href="/newrflinker/Public/qiantai/css/Case.css">
		<link rel="stylesheet" type="text/css" href="/newrflinker/Public/qiantai/css/iconfont.css">
		<link rel="stylesheet" type="text/css" href="/newrflinker/Public/qiantai/swiper/swiper.min.css">
		<style type="text/css">
			@media screen and (max-width: 768px){
				.navbar-default {
				    background: #bdbdbd;

				}
				/*#carousel-example-generic{
					margin-top:85px;
				}*/

			
			}
			
			.swiper-container-horizontal>.swiper-pagination-bullets, .swiper-pagination-custom, .swiper-pagination-fraction{
			    bottom:0px;
			}
			.uhf-wrapper .uhf-item{
				display: inline-block;
				width: 100%;
			}
		</style>
	</head>

	<body>
		<main class="max-width-index">
	       <main class="max-width-index">
    <!--导航-->
    <nav class="navbar navbar-default navbar-fixed-top top-box">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button> <a class="navbar-brand" href="<?php echo U('Index/Index');?>">          <img src="/newrflinker/Public/qiantai/img/login.png">        </a> </div>
            <script>
            window.__arr__ = <?php echo ($new_live); ?>;
            window.__arr2__ = <?php echo ($new_live_all); ?>;
            </script>
            <div class="form-group form-group-mobile visible-xs">
                <input type="text" id="mobilearrcity" class="form-control" style="font-size:13px;" placeholder="<?php echo (L("head_search_select")); ?>">
                <div id='mobilesuggest' class="mobileac_results"></div>
            </div>
            <div class="collapse navbar-collapse">
                <ul class="nav navbar-nav navbar-left top-nav">
                    <li id="nav_toggle" style="line-height: 60px;width: 140px;text-align: center;margin-right: 10px"> <a href="<?php echo U('');?>?lang=ch-cn<?php echo ($commom_field); ?>" class=" nav_toggle <?php echo (L("languagesclicks")); ?>" style="display: inline;float: left;">中文</a>| <a href="<?php echo U('');?>?lang=en-us<?php echo ($commom_field); ?>" class="nav_toggle <?php echo (L("languagesclick")); ?>" style="display: inline;float: right;">EN</a> </li>
                    <li <?php if($style_change == Index): ?>class="active"<?php endif; ?>> <a href="<?php echo U('Index/Index');?>" class="China">              <?php echo (L("head_index")); ?>              <span class="sr-only">(current)</span>            </a> </li>
                    <li class="dropdown "> <a class="dropdown-toggle China hidden-xs" data-toggle="dropdown" href="<?php echo U('Rflinker/Index');?>"><?php echo (L("title_Product")); ?></a>
                        <ul class="dropdown-menu" id="dropdown">
                            <li><a class="nav-dropdown-menu-li" href="<?php echo U('Rflinker/Index');?>">Rflinker</a></li>
                            <li><a class="nav-dropdown-menu-li" href="<?php echo U('Feig/Index');?>">Feig</a></li>
                        </ul>
                    </li>
                    <li class="visible-xs China"><a href="<?php echo U('Rflinker/Index');?>">Rflinker</a></li>
                    <li class="visible-xs China"><a href="<?php echo U('Feig/Index');?>">Feig</a></li>
                    <li <?php if($style_change == Vocationlist): ?>class="active"<?php endif; ?>> <a class="China" href="<?php echo U('Vocationlist/Index');?>"><?php echo (L("head_Industry")); ?></a> </li>
                    <li <?php if($style_change == Codeinput): ?>class="active"<?php endif; ?>> <a class="China" href="<?php echo U('Codeinput/Index');?>"><?php echo (L("head_support")); ?></a> </li>
                    <li <?php if($style_change == Aboutus): ?>class="active"<?php endif; ?>> <a class="China" href="<?php echo U('Aboutus/Index');?>"><?php echo (L("head_about")); ?></a> </li>
                </ul>
                <ul class="nav navbar-nav navbar-right top-nav" style="width: 300px;">
                    <li class="search_c hidden-sm hidden-xs"> <a href="#"><?php echo (L("head_search")); ?> <i class="glyphicon glyphicon-search"></i></a> </li>
                    <form class="hidden-sm hidden-xs">
                        <input style="font-size:13px;" placeholder="<?php echo (L("head_search_select")); ?>" type="text" name="arrcity" id="arrcity" class="form-control search" />
                        <div id='suggest' class="ac_results"></div>
                    </form>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>
    <!--/ 导航-->

			<!-- ios头部固定框 -->
			<div class="scrollable" id="scrollable">
			

				<!--产品展示-->		
				<div class=" news_content uhf-wrapper">
			        <div class="col-sx-12 classification container">
			            
						 <?php if(is_array($hztype_arr)): $i = 0; $__LIST__ = $hztype_arr;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><div class="col-md-4 col-xs-12">
									<span class="uhf-item"> <?php echo ($vo['hz']['hzname']); ?> <i class=" icon iconfont icon-jiantou"></i></span>
									<ul class="list-unstyled ">
										<?php if(is_array($vo['type'])): $i = 0; $__LIST__ = $vo['type'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$voer): $mod = ($i % 2 );++$i;?><li><a href="<?php echo U('Feighztype/index');?>?typeid=<?php echo ($voer['id']); ?>&fid=<?php echo ($voer['hzid']); ?>" id="<?php echo ($voer['id']); ?>"><?php echo ($voer['fgtypename']); ?></a></li><?php endforeach; endif; else: echo "" ;endif; ?>
									</ul>
								</div><?php endforeach; endif; else: echo "" ;endif; ?>
						
			        </div>
			    </div>
				<!--产品展示结束-->
			
			
			
			
	     <div class="details container" style="margin:auto;margin-left:0;margin-right:0;padding:0;">
          
		  
		    
					<div class="panel-group" id="accordion">
					<?php if(is_array($hztypes_arr)): $j = 0; $__LIST__ = $hztypes_arr;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($j % 2 );++$j;?><div class="panel panel-default">
							<div class="panel-heading">
								<h4 class="panel-title text-center">
									<a data-toggle="collapse" data-parent="#accordion" 
									   href="#<?php echo (str_replace(' ','',$vo['type']['fgtypename'])); ?>">
										 <?php echo ($vo['type']['fgtypename']); ?> 
									</a>
								</h4>
							</div>
							<div id="<?php echo (str_replace(' ','',$vo['type']['fgtypename'])); ?>" class="panel-collapse collapse <?php if($typeid == $vo['type']['id']): ?>in<?php endif; ?>">
								<div class="row">
									<div class="col-md-10 col-xs-12 col-sm-12">FEIG- Handheld Leser sind kabelgebunden sowie mit Bluetooth- oder Ethernet-Schnittstellen erhältlich. Haupteinsatzfelder sind Inventuren in verschiedenen Bereichen wie Bibliotheken, Handel oder Logistik.</div>
								</div>
									<div class="product-banner swiper-container">
												<div class="swiper-wrapper">
												    
													<?php if(is_array($vo['pt'])): $i = 0; $__LIST__ = $vo['pt'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$pt): $mod = ($i % 2 );++$i;?><div class="swiper-slide">
															<a href="projectDeta.html">
																<div class="product-img">
																	<a target="_top" href="<?php echo U('Productdetails/index');?>?type=1&&id=<?php echo ($pt['id']); ?>"><img src="/newrflinker<?php echo ($pt['ftimg']); ?>" alt="product"/></a>
																</div>
															</a>
															<a href="projectDeta.html">
																<div class="product-text">
																	<a target="_top" href="<?php echo U('Productdetails/index');?>?type=1&&id=<?php echo ($pt['id']); ?>"><span><?php echo ($pt['ftname']); ?><i class="icon iconfont icon-fanhuiyou""></i></span></a>
																	<div><?php echo ($pt['ftitle']); ?></div>
																</div> 
															</a>   
														</div><?php endforeach; endif; else: echo "" ;endif; ?>
																										
												</div>
											<!-- 分页器 -->
												<div class="swiper-pagination"></div>
												<div class="swiper-button-prev"></div>
												<div class="swiper-button-next"></div>
									</div>
							</div>
						</div><?php endforeach; endif; else: echo "" ;endif; ?>
					</div>
					
		    			
					
					
					
					
							

		</div>
				<!--产品折叠div结束-->


			<!--联系我们-->
				<div class="contact-us col-xs-12" style="background:#fff;">
					<div class="container">
						<div class="row">
							<div class="common-title">
								<h2>—— <?php echo (L("index_FormTitle")); ?>  ——</h2>
							</div>
							<div class="col-lg-6 col-md-6">
								<p class="font-title"><?php echo (L("index_PleseEmail")); ?></p>
								<div>
									<form class="">
										<div class="form-group">
										    <select class="form-control matter" placeholder="<?php echo (L("index_PleseQuestion")); ?>" data-foolish-msg="<?php echo (L("index_PleseQuestion")); ?>">
										       <option value=""><?php echo (L("index_PleseQuestion")); ?></option>
												<option value="1"><?php echo (L("index_FormProblemyi")); ?></option>
												<option value="2"><?php echo (L("index_FormProblemer")); ?></option>
										    </select>
										</div>
										<div class="row form-group">
										  <div class="col-lg-3 col-md-3">
										  	<label class="sr-only" for="name">name</label>
										  	<input type="text" class="form-control username" id="name" placeholder="<?php echo (L("index_FormName")); ?>" data-foolish-msg="<?php echo (L("index_FormIsName")); ?>">
										  </div>
										  <div class="col-lg-3 col-md-3">
										    <label class="sr-only" for="phone">phone</label>
										  	<input type="text" class="form-control userphone" id="phone" placeholder="<?php echo (L("index_FormTel")); ?>" data-foolish-msg="<?php echo (L("index_FormIsTel")); ?>">
										  </div>
										  <div class="col-lg-6 col-md-6">
										    <label class="sr-only" for="InputEmail">Email address</label>
										  	<input type="email" class="form-control useremail" id="InputEmail" placeholder="<?php echo (L("index_FormEmail")); ?>" data-foolish-msg="<?php echo (L("index_FormIsEmail")); ?>">
										  </div>
										</div>
										<div class="form-group">
											<textarea class="form-control matterconter" rows="10" placeholder="<?php echo (L("index_FormContent")); ?>" data-foolish-msg="<?php echo (L("index_FormContent")); ?>"></textarea>
										</div>
										<button type="button" class="font-index-btn matter-button"><?php echo (L("index_FormSubmit")); ?></button>
										
									  
									</form>
								</div>
							</div>
							<div class="col-lg-6 qr-code" >
								<p class="font-title"><?php echo (L("index_Saoma")); ?></p>
								
								<div>
									 <img src="/newrflinker/Public/qiantai/img/qr-code.png" >
								</div>
								<div>
									  <p class="font-phone"><?php echo (L("index_FormTel")); ?>:</p>
									  <p class="phone-num">139-1899-9394</p>
									  <p class="font-phone"><?php echo (L("index_Address")); ?>:</p>
									  <p class="font-address"><?php echo (L("bottom_address")); ?></p>
									  <p class="font-phone"><?php echo (L("emailname")); ?>:</p>
									  <p class="font-address">13918999394@163.com</p>
								</div>
							</div>	
						</div>
					
					</div>
				</div>
				<footer class="col-xs-12">
					<div class="footer">
						<div class="font-footer"><?php echo (L("ICPname")); ?></div>
					</div>
				</footer>

			</div>			
	</main>
	
	
<script type="text/javascript" src="/newrflinker/Public/qiantai/js/jquery.js"></script>
		<script type="text/javascript" src="/newrflinker/Public/qiantai/search_demo/jquery.min.js"></script>
		<script type="text/javascript" src="/newrflinker/Public/qiantai/js/bootstrap.js"></script>
		<script type="text/javascript" src="/newrflinker/Public/qiantai/swiper/swiper.min.js"></script>
		
		<script type="text/javascript" src="/newrflinker/Public/qiantai/js/nav.js"></script>
		<!-- ios下头部固定方案防止头部随着页面上拉滚动 -->
		<script type="text/javascript" src="/newrflinker/Public/qiantai/iostopfixed/scrollfix.js"></script>
		<!-- 搜索预览插件 -->
		<script type="text/javascript" src="/newrflinker/Public/qiantai/search_demo/aircity.js"></script>
		<script src="/newrflinker/Public/qiantai/js/main.js"></script>
		<script src="/newrflinker/Public/qiantai/layer/mobile/layer.js"></script>
		<script type="text/javascript" src="/newrflinker/Public/qiantai/js/connectUs.js"></script>
		 <script type="text/javascript">
    	//点击显示/隐藏
	    	(function(){
	    		$(".classification span").click(function(){
	    			$(".classification ul").toggle(100);
	    		});
	    	})();

    	// 轮播
	        var swiper = new Swiper('.swiper-container', {   
	          loop : false,                     
	            slidesPerView:3,
	            spaceBetween:10,
	            breakpoints:{
	            	1400: {
			          slidesPerView: 4,
			          spaceBetween: 10,
			        },
	                1024: {
			          slidesPerView: 3,
			          spaceBetween: 10,
			        },
			        700: {
			          slidesPerView: 2,
			          spaceBetween: 20,
			        },
			        480: {
			          slidesPerView: 1,
			          spaceBetween: 10,
			        }

	            },
	            observer:true,
	            observeParents:true,
	            navigation: {
	                nextEl: '.swiper-button-next',
	                prevEl: '.swiper-button-prev',
	              },
	            
	            pagination: {
	                el: '.swiper-pagination',
	                type:'bullets',
	                clickable :true,
	            },	      
			});
  </script>
  <script>
$(function() {
    function checkUserName(username){
        if ((/^[\u4E00-\u9FA5A-Za-z]+$/.test(username))) {
            return true;
        }else{
            return false;
        }
    }
    function checkMobile(mobile) { 
    	if ((/^1[3|4|5|6|7|8]\d{9}$/.test(mobile))) { return true; } else { return false; } }
	function isEmail(str) { 
		if ((/^\w+([-+.]\w+)*@\w+([-.]\w+)*\.\w+([-.]\w+)*$/.test(str))) { return true; } else { return false; } } 
	// 联系我们
    $('.matter-button').on('click', function() {
    	var requestData = {
    	    matter:$('.matter').val(),
    	    username:$('.username').val(),
    	    userphone:$('.userphone').val(),
    	    useremail:$('.useremail').val(),
    	    matterconter:$('.matterconter').val()
    	} 
    	var valid = true;       
    	if(valid && requestData.matter == ''){ 
    	    valid = false; 
    	    var tips = $(".matter").attr("data-foolish-msg");            
    	    $(".matter").focus();
    	    }        
    	    if(valid && !checkUserName(requestData.username) ){ valid=false; var tips=$ ( ".username").attr( "data-foolish-msg"); $( ".username").focus(); } 
    	    if(valid && !checkMobile(requestData.userphone)){ var tips=$ ( ".userphone").attr( "data-foolish-msg"); $( ".userphone").focus(); valid=false; } 
    	    if(valid && !isEmail(requestData.useremail)){ var tips=$ ( ".useremail").attr( "data-foolish-msg"); $( ".useremail").focus(); valid=false; } 
    	    if(valid && requestData.matterconter.length <=0 ){ valid=false; var tips=$ ( ".matterconter").attr( "data-foolish-msg"); $( ".matterconter").focus(); }					
    	    	//问题		
            	var SelectType = requestData.matter;		//提问姓名		
            	var UserName = requestData.username;		//提问电话		
            	var UserTel = requestData.userphone;		//提问邮箱		
            	var UserMail = requestData.useremail;		//提问内容		
            	var TextSay = requestData.matterconter;		        
            	if(valid){                    
            		$.ajax({							
            			type:"POST",							
            			url:"<?php echo U('Index/email');?>",							
            			dataType: "json",							
            			data:{"SelectType":SelectType,"UserName":UserName,"UserTel":UserTel,"UserMail":UserMail,"TextSay":TextSay},							
            			success: function(data){                                 
            				if(data.code == 1){							   									       layer.open({											  
            			content: '<?php echo (L("index_Formtijiaotrue")); ?>'
            			,skin: 'msg'												
            			,time: 2 //2秒后自动关闭	
            			});
                                window.location.href=window.location.href;
            			}										
            			}			                     
            			});        
            			}else{            
            			layer.open({                  
            			content: tips                  
            			,skin: 'msg'                  
            			,time: 2 //2秒后自动关闭
            		});        
            		}	
            	});	    	
})
</script>
			
			

		
		
	</body>
</html>