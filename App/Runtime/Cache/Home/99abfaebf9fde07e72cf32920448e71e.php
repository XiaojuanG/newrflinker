<?php if (!defined('THINK_PATH')) exit();?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Swiper</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">

    <!-- Link Swiper's CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/3.4.2/css/swiper.css">
    <link rel="stylesheet" href="/rflinker/Public/qiantai/css/new.css">

    <!-- Demo styles -->
    <style>
    html, body {
        position: relative;
        height: 100%;
    }
    body {
/*        background: #eee;*/
        font-family: Helvetica Neue, Helvetica, Arial, sans-serif;
        font-size: 14px;
        color:#000;
        margin: 0;
        padding: 0;
    }
    .swiper-container {
        width: 100%;
        height: 100%;
    }
    .swiper-slide {
        font-size: 18px;
        background: #fff;

        /* Center slide text vertically */
        display: -webkit-box;
        display: -ms-flexbox;
        display: -webkit-flex;
        display: flex;
        -webkit-box-pack: center;
        -ms-flex-pack: center;
        -webkit-justify-content: center;
        justify-content: center;
        -webkit-box-align: center;
        -ms-flex-align: center;
        -webkit-align-items: center;
        align-items: center;
    }
    </style>
</head>
<body>

    <!-- Swiper -->
    <div class="swiper-container">
	
        <div class="swiper-wrapper">
				   <?php if(is_array($hztypept)): $i = 0; $__LIST__ = $hztypept;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$voer): $mod = ($i % 2 );++$i;?><div class="swiper-slide">
							<div class="item">
								<div class="product-image">
									<a target="_top" href="<?php echo U('Productdetails/index');?>?type=2&&id=<?php echo ($voer['id']); ?>"><img width="400" height="320" src="/rflinker<?php echo ($voer['rrimg']); ?>" class="img-responsive"></a>
								</div>
								<div class="product-info">
									<div class="product-identifier"><a target="_top" href="<?php echo U('Productdetails/index');?>?type=1&&id=<?php echo ($voer['id']); ?>"><?php echo ($voer['rrname']); ?></a></div>
									<div class="product-name"><?php echo ($voer['rrtitle']); ?></div>
								</div>
							</div>
						</div><?php endforeach; endif; else: echo "" ;endif; ?>
        </div>
		
	
        <!-- Add Pagination -->
        <div class="swiper-pagination"></div>
        <!-- Add Navigation -->
        <div class="swiper-button-prev"></div>
        <div class="swiper-button-next"></div>
    </div>

    <!--swiper-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/3.4.2/js/swiper.js"></script>

    <!-- Initialize Swiper -->
    <script>
    var swiper = new Swiper('.swiper-container', {
        pagination: '.swiper-pagination',
        paginationClickable: true,
        nextButton: '.swiper-button-next',
        prevButton: '.swiper-button-prev',
        slidesPerView:4,
        spaceBetween: 50,
        breakpoints: {
            1024: {
                slidesPerView: 4,
                spaceBetween: 40
            },
            768: {
                slidesPerView: 1,
                spaceBetween: 30
            },
            640: {
                slidesPerView: 1,
                spaceBetween: 20
            },
            320: {
                slidesPerView: 1,
                spaceBetween: 10
            }
        }
    });
    </script>
</body>
</html>