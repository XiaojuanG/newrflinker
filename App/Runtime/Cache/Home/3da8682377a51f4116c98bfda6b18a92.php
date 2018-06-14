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
    <title><?php echo (L("title_Index")); ?></title>
    <link rel="stylesheet" type="text/css" href="/rflinker/Public/qiantai/css/bootstrap.css" />
    <link rel="stylesheet" type="text/css" href="/rflinker/Public/qiantai/css/reset.css">
    <link rel="stylesheet" type="text/css" href="/rflinker/Public/qiantai/css/header_nav.css" />
    <link rel="stylesheet" type="text/css" href="/rflinker/Public/qiantai/css/base.css" />
    <link rel="stylesheet" type="text/css" href="/rflinker/Public/qiantai/css/index.css" />
    <!-- 联系我们 -->
    <link rel="stylesheet" type="text/css" href="/rflinker/Public/qiantai/css/contact_us.css">
    <!--[if lt IE 9]>			<script type="text/javascript" src="/rflinker/Public/qiantai/js/html5shiv.min.js"></script>			<script type="text/javascript" src="/rflinker/Public/qiantai/js/respond.min.js"></script>	    <![endif]-->
    <link rel="stylesheet" type="text/css" href="/rflinker/Public/qiantai/css/media.css" />
    <!-- new css by wys -->
    <link rel="stylesheet" type="text/css" href="/rflinker/Public/qiantai/css/new.css" />
    <!-- ios下头部固定方案防止头部随着页面上拉滚动 -->
    <link rel="stylesheet" type="text/css" href="/rflinker/Public/qiantai/css/headerstyle.css">
    <!-- 搜索预览插件样式-->
    <link rel="stylesheet" type="text/css" href="/rflinker/Public/qiantai/css/search_demo.css">
    <style type="text/css">
    .descript{
      overflow: hidden;
      text-overflow: ellipsis;
      white-space: nowrap;
    }
    </style> 
</head>

<body>
    <main class="max-width-index">
        <!--加载头部-->
        <main class="max-width-index">
    <!--导航-->
    <nav class="navbar navbar-default navbar-fixed-top top-box">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button> <a class="navbar-brand" href="<?php echo U('Index/Index');?>">          <img src="/rflinker/Public/qiantai/img/login.png">        </a> </div>
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
            <!--轮播图-->
            <div id="carousel-example-generic" class="carousel slide banner" data-ride="carousel">
                <!-- 圆点 -->
                <ol class="carousel-indicators">
                    <?php if(is_array($img)): $j = 0; $__LIST__ = $img;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$val): $mod = ($j % 2 );++$j;?><li data-target="#carousel-example-generic" data-slide-to="<?php echo ($j-1); ?>" class="<?php if($j == 1): ?>active<?php else: endif; ?>"></li><?php endforeach; endif; else: echo "" ;endif; ?>
                </ol>
                <!-- 图片区域 -->
                <div class="carousel-inner" role="listbox">
                    <?php if(is_array($img)): $j = 0; $__LIST__ = $img;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$val): $mod = ($j % 2 );++$j; if($j == 1): ?><div class="item active">
                                <?php else: ?>
                                <div class="item"><?php endif; ?> <img src="/rflinker<?php echo ($val['flashviewpc']); ?>" alt="">
                        <div class="banner-text">
                            <p><?php echo ($val['name']); ?><span><?php echo ($val['title']); ?></span> </p> <a href="<?php echo ($val['fwlink']); ?>" type="button" class="font-btn-a"><?php echo (L("Buy_Now")); ?></a> </div>
                        </div><?php endforeach; endif; else: echo "" ;endif; ?>
                    </div>
                    <!-- 左右控制箭头 --><a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">						<span class="glyphicon glyphicon-chevron-left " aria-hidden="true"></span>						<span class="sr-only">Previous</span>					</a> <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">						<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>						<span class="sr-only">Next</span>					</a> </div>
                <!--产品展示-->
                <div class="news">
                    <div class="container">
                        <div class="row news-content">
                            <div class="common-title">
                                <h2>——<?php echo (L("index_Recommend")); ?>——</h2> </div>
                            <?php if(is_array($felghzs)): $i = 0; $__LIST__ = $felghzs;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$val): $mod = ($i % 2 );++$i;?><div class="col-lg-4 col-md-4 col-sm-4">
                                    <div class="thumbnail"> <a href="<?php echo U('Feighztype/Index');?>?typeid=<?php echo ($val['typeid']); ?>&fid=<?php echo ($val['id']); ?>">												<img src="/rflinker<?php echo ($val['fghzimg']); ?>" alt="" class="img-responsive">												<p class="font-p-lf"><?php echo ($val['fghz']); ?><span class="font-span"><?php echo ($val['fghztitle']); ?></span></p>											</a> </div>
                                </div><?php endforeach; endif; else: echo "" ;endif; ?>
                        </div>
                    </div>
                </div>
                <!--行业应用-->
                <div class="product">
                    <div class="container">
                        <div class="row pro-content">
                            <div class="common-title">
                                <h2>——<?php echo (L("index_Industry")); ?>——</h2> </div>
                            <?php if(is_array($iyimg)): $i = 0; $__LIST__ = $iyimg;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><div class="col-lg-3 col-md-3 col-sm-4 ">
                                    <div class="thumbnail"> <a href="<?php echo U('Vocationlistmain/index');?>?id=<?php echo ($vo['id']); ?>">										   <img src="/rflinker<?php echo ($vo['imgiy']); ?>" alt="" class="img-responsive" />										</a>
                                        <div class="caption hidden-xs">
                                            <h3 style="margin-top:10px"><a style="color:black" href="<?php echo U('Vocationlistmain/index');?>?id=<?php echo ($vo['id']); ?>"><?php echo ($vo['nameiy']); ?></a></h3>
                                            <p class="descript"> <?php echo ($vo['title']); ?></p>
                                            <div class="trade" style="border-top: 1px solid #eee;">
                                                <p><a href=""></a></p>
                                            </div>
                                        </div>
                                    </div>
                                </div><?php endforeach; endif; else: echo "" ;endif; ?>
                        </div>
                    </div>
                </div>
                <!--加载底部-->
                <!--联系我们-->
<div class="contact-us col-xs-12" style="background:#fff;">
    <div class="container">
        <div class="row">
            <div class="common-title">
                <h2>—— <?php echo (L("index_FormTitle")); ?>  ——</h2> </div>
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
                                <input type="text" class="form-control username" id="name" placeholder="<?php echo (L("index_FormName")); ?>" data-foolish-msg="<?php echo (L("index_FormIsName")); ?>"> </div>
                            <div class="col-lg-3 col-md-3">
                                <label class="sr-only" for="phone">phone</label>
                                <input type="text" class="form-control userphone" id="phone" placeholder="<?php echo (L("index_FormTel")); ?>" data-foolish-msg="<?php echo (L("index_FormIsTel")); ?>"> </div>
                            <div class="col-lg-6 col-md-6">
                                <label class="sr-only" for="InputEmail">Email address</label>
                                <input type="email" class="form-control useremail" id="InputEmail" placeholder="<?php echo (L("index_FormEmail")); ?>" data-foolish-msg="<?php echo (L("index_FormIsEmail")); ?>"> </div>
                        </div>
                        <div class="form-group">
                            <textarea class="form-control matterconter" rows="10" placeholder="<?php echo (L("index_FormContent")); ?>" data-foolish-msg="<?php echo (L("index_FormContent")); ?>"></textarea>
                        </div>
                        <button type="button" class="font-index-btn matter-button"><?php echo (L("index_FormSubmit")); ?></button>
                    </form>
                </div>
            </div>
            <div class="col-lg-6 qr-code">
                <p class="font-title"><?php echo (L("index_Saoma")); ?></p>
                <div> <img src="/rflinker/Public/qiantai/img/qr-code.png"> </div>
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
<script type="text/javascript" src="/rflinker/Public/qiantai/js/jquery.js"></script>
<script type="text/javascript" src="/rflinker/Public/qiantai/js/bootstrap.js"></script>
<script type="text/javascript" src="/rflinker/Public/qiantai/search_demo/jquery.min.js"></script>
<script type="text/javascript" src="/rflinker/Public/qiantai/js/nav.js"></script>
<!-- ios下头部固定方案防止头部随着页面上拉滚动 -->
<script type="text/javascript" src="/rflinker/Public/qiantai/iostopfixed/scrollfix.js"></script>
<script src="/rflinker/Public/qiantai/js/main.js"></script>
<!--		<script src="http://cdn.static.runoob.com/libs/jquery/2.1.1/jquery.min.js"></script>		<script src="http://cdn.static.runoob.com/libs/bootstrap/3.3.7/js/bootstrap.min.js">--></script>
<!-- 搜索预览插件 -->
<script type="text/javascript" src="/rflinker/Public/qiantai/search_demo/aircity.js"></script>
<script src="/rflinker/Public/qiantai/layer/mobile/layer.js"></script>
<script type="text/javascript" src="/rflinker/Public/qiantai/js/connectUs.js"></script>
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
            				if(data.code == 1){							   									       
                                layer.open({											  
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
</script> </body>

</html>