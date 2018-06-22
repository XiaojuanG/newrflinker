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
    <title>产品详情</title>
    <link rel="stylesheet" type="text/css" href="/newrflinker/Public/qiantai/css/bootstrap.css" />
    <link rel="stylesheet" type="text/css" href="/newrflinker/Public/qiantai/css/reset.css">
    <link rel="stylesheet" type="text/css" href="/newrflinker/Public/qiantai/css/header_nav.css" />
    <link rel="stylesheet" type="text/css" href="/newrflinker/Public/qiantai/css/base.css" />
    <link rel="stylesheet" type="text/css" href="/newrflinker/Public/qiantai/css/index.css" />
    <!-- 联系我们 -->
    <link rel="stylesheet" type="text/css" href="/newrflinker/Public/qiantai/css/contact_us.css">
    <!-- 产品详情 -->
    <link rel="stylesheet" type="text/css" href="/newrflinker/Public/qiantai/css/productDeta.css">
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
    <style type="text/css">
    @media screen and (max-width: 768px) {
        .navbar-default {
            background: #bdbdbd;
        }
    }

    .lf-wrapper .lf-item {
        display: inline-block;
        width: 100%;
    }
    .description-headline:not(:first-child){
    	margin-top: 30px;
    }
    .component-items li{
    	line-height: 1.8;
    }
    </style>
</head>

<body>
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
    <div class="scrollable" id="scrollable">
        <!--产品展示-->
        <div class=" news_content lf-wrapper">
            <div class="col-sx-12 classification container">
                <?php if(is_array($hztype_arr)): $i = 0; $__LIST__ = $hztype_arr;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><div class="col-md-4 col-xs-12">
                        <span class="lf-item"> <?php echo ($vo['hz']['hzname']); ?> <i class="icon iconfont icon-jiantou"></i></span>
                        <ul class="list-unstyled">
                            <?php if(is_array($vo['type'])): $i = 0; $__LIST__ = $vo['type'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$voer): $mod = ($i % 2 );++$i;?><li><a href="<?php echo U('Feighztype/index');?>?typeid=<?php echo ($voer['id']); ?>&fid=<?php echo ($voer['hzid']); ?>"><?php echo ($voer['fgtypename']); ?></a></li><?php endforeach; endif; else: echo "" ;endif; ?>
                        </ul>
                    </div><?php endforeach; endif; else: echo "" ;endif; ?>
            </div>
        </div>
        <div class="news">
            <div class="class-case">
                <h2>STATIONÄRE LESER</h2>
            </div>
            <div class="container">
                <div class="row news-content">
                    <div class="col-lg-6 col-md-6 col-sm-6">
                        <div class="col-md-12">
                            <h2 class="fttitle"><?php echo ($felgxiangqing["fttitle"]); ?></h2>
                            <p class="ftname"><?php echo ($felgxiangqing["ftname"]); ?></p>
                        </div>
                        <div class="col-md-12">
                            <?php echo ($felgxiangqing["ftspec"]); ?>
                        </div>
                        <?php if(is_array($felgptdowns)): $i = 0; $__LIST__ = $felgptdowns;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><div class="col-md-12" style="margin:10px 0;">
                                <a href="/newrflinker/Public/Uploads/<?php echo ($vo['down']); ?>" target="view_window" style="display: inline-block;width:100%;word-break: break-all; ">
                                    <button style="display: inline-block;width:100%;" type="button" class="downloadbutton"><?php echo ($vo['downname']); ?><i class="icon iconfont icon-xiazai"></i></button>
                                </a>
                            </div><?php endforeach; endif; else: echo "" ;endif; ?>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6">
                        <div class="thumbnail">
                            <img src="/newrflinker<?php echo ($felgxiangqing["ftimg"]); ?>" alt="" style="border:none;">
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
    <script type="text/javascript" src="/newrflinker/Public/qiantai/search_demo/jquery.min.js"></script>
    <script type="text/javascript" src="/newrflinker/Public/qiantai/js/bootstrap.js"></script>
    <script type="text/javascript" src="/newrflinker/Public/qiantai/js/nav.js"></script>
    <!-- ios下头部固定方案防止头部随着页面上拉滚动 -->
    <script type="text/javascript" src="/newrflinker/Public/qiantai/iostopfixed/scrollfix.js"></script>
    <!-- 搜索预览插件 -->
    <script type="text/javascript" src="/newrflinker/Public/qiantai/search_demo/aircity.js"></script>
    <script src="js/main.js"></script>
    <script src="layer/mobile/layer.js"></script>
    <script type="text/javascript" src="/newrflinker/Public/qiantai/js/connectUs.js"></script>
    <script type="text/javascript">
    //点击显示/隐藏
    (function() {
        $(".classification span").click(function() {
            $(".classification ul").toggle(1000);
        });
    })();
    </script>
</body>

</html>