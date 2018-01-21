<?php define('URL','http://localhost/veterinaria/'); ?>
<!DOCTYPE html>
<html>
<head>
    <title></title>
    <meta property="og:url" content="">
    <meta property="og:site_name" content="">
    <meta property="og:image" content="" />
    <meta property="og:image:width" content="361"/>
    <meta property="og:image:height" content="481"/>
    <meta property="og:description" content="" />
    <meta property="og:title" content=""/>
    <meta property="fb:app_id" content=""/>
    <meta name="robots" content="index,follow,all">
    <meta itemprop="name" content=""/>
    <meta itemprop="description" content=""/>
    <meta itemprop="image" content=""/>
    <meta name="twitter:title" content=""/>
    <meta name="twitter:url" content=""/>
    <meta name="twitter:description" content=""/>
    <meta name="twitter:image" content=""/>
    <meta name="twitter:card" content=""/>
    <link rel="canonical" href="<?php echo URL; ?>"/>
    <link rel="publisher" href=""/>
    <meta name="google-site-verification" content="" />
    <meta name=description content=""/>
    <meta name=keywords content=""/>
    <meta name=author content=""/>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name=viewport content="width=device-width, user-scalable=no, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0"/>
    <meta http-equiv=X-UA-Compatible content="IE=edge"/>
    <meta name=_token content=Te7lQoeEF7eaowdtlBDjNqqPcgJxBbbfIb7BCowQ />
    <link rel="icon" href="" type="image/x-icon" sizes="32x32">
    <link rel="shortcut icon" href="" type="image/x-icon" sizes="32x32">
    <link rel="stylesheet" type="text/css" href="<?php echo URL; ?>public/css/animate.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo URL; ?>public/css/font-awesome.min.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo URL; ?>public/css/bootstrap-datetimepicker.min.css">
    <script type="text/javascript" src="<?php echo URL; ?>public/js/moment.min.js"></script>

    <link rel="stylesheet" href="<?php echo URL; ?>public/css/datepicker.min.css" type="text/css" />
    <link rel="stylesheet" href="<?php echo URL; ?>public/css/bootstrap.min.css" type="text/css" />
    <script src="<?php echo URL; ?>public/js/mootools-yui-compressed.js"></script>
    <script src="<?php echo URL; ?>public/js/jquery-1.11.0.min.js" type="text/javascript"></script>
    <script src="<?php echo URL; ?>public/js/bootstrap-datepicker.min.js" type="text/javascript"></script>
    <script src="<?php echo URL; ?>public/js/bootstrap.min.js" type="text/javascript"></script>
    <script src="<?php echo URL; ?>public/js/moment.min.js" type="text/javascript"></script>
    <script src="<?php echo URL; ?>public/js/bootstrap-datetimepicker.min.js" type="text/javascript"></script>
    <script src="<?php echo URL; ?>public/js/en-gb.js" type="text/javascript"></script>
    <link href="<?php echo URL; ?>public/css/slick.min.css" rel="stylesheet" />
    <link href="<?php echo URL; ?>public/css/slick-theme.min.css" rel="stylesheet" />

    <link rel="stylesheet" type="text/css" href="<?php echo URL; ?>public/css/defaults.css">
    <link rel="stylesheet" type="text/css" href="<?php echo URL; ?>public/css/style.css">
    <link rel="stylesheet" type="text/css" href="<?php echo URL; ?>public/css/fonts.css">
</head>
</script>
<body>
<script>
(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.10&appId=<?php echo '5483216843164131'; ?>";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));
</script>
<div id="fb-root"></div>
<header class="main-header">
    <div class="container">
        <div class="head-menu">
            <div class="logo"><a href="<?php echo URL; ?>"><img src="<?php echo URL; ?>public/img/logo.png"></a>
            </div>
            <div class="header-right">
                <div class="head-bar">
                    <button id="head-bar-menu">=</button>
                    <div class="search">
                        <i class="fa fa-search"></i>
                    </div>
                    <div class="languages">
                        <ul>
                            <li><a href="" class="active">GEO</a></li>
                            <li><a href="" class="">ENG</a></li>
                            <li><a href="" class="">RUS</a></li>
                        </ul>
                    </div>
                </div>
                <button id="bar-menu"><span></span><span></span><span></span></button>
                <ul class="menu-bar"><button id="bar-menu-close" class="fa fa-close"></button>
                    <li><a href="./">მთავარი</a></li>
                    <li><a href="news.php">სიახლეები</a><div class="menu-tgl"><i class="fa fa-chevron-left"></i></div>
                        <ul>
                            <li><a href="kakheti.php">კახეთი</a></li>
                            <li><a href="sqartli.php">შიდა ქართლი</a></li>
                            <li><a href="qqartli.php">ქვემო ქართლი</a></li>
                            <li><a href="svaneti.php">სამეგრელო-ზ. სვანეთი</a></li>
                            <li><a href="imereti.php">იმერეთი</a></li>
                            <li><a href="adjara.php">აჭარა</a></li>
                            <li><a href="mcxeta.php">მცხეთა-მთიანეთი</a></li>
                            <li><a href="guria.php">გურია</a></li>
                            <li><a href="tbilisi.php">თბილისი</a></li>
                        </ul>
                    </li>
                    <li><a href="regions.php">რეგიონები</a></li>
                    <li><a href="center.php">მართვის ცენტრი</a></li>
                    <li><a href="interactive.php">ინტერაქტივი</a></li>
                    <li><a href="contact.php">კონტაქტი</a></li>
                </ul>
            </div>
        </div>
    </div>
</header>

<style type="text/css">
    .force-flex{
        display: flex !important;
    }
    .search-toggle img{
        cursor: pointer;
    }
    .block{
        display: block;
    }
    .force-block{
        display: block !important;
    }
    .slideAllLeft{
        right: -400px !important;
    }
    @-webkit-keyframes slideAllLeft{0%{-webkit-transform:translate3d(-100%,0,0);transform:translate3d(-100%,0,0);visibility:visible}to{-webkit-transform:translateZ(0);transform:translateZ(0)}}@keyframes slideAllLeft{0%{-webkit-transform:translate3d(-100%,0,0);transform:translate3d(-100%,0,0);visibility:visible}to{-webkit-transform:translateZ(0);transform:translateZ(0)}}.slideAllLeft{-webkit-animation-name:slideAllLeft;animation-name:slideAllLeft}
</style>
<script type="text/javascript">
$(document).ready(function(){
    $('.search-toggle img').click(function(){
        $('#search-form').toggleClass('force-flex');
        $('.search').toggleClass('open');
    });
    $('#bar-menu').click(function(){
        if($(this).hasClass('active')){
            $(this).removeClass('active');
            $('.menu-bar').removeClass('animated slideInRight').addClass('animated slideAllLeft').delay(300).queue(function(next){
                $('.menu-bar').removeClass('force-block animated slideAllLeft');
                next();
            });
        }else{
            $('.menu-bar').addClass('force-block animated slideInRight');
            $(this).addClass('active');
        }
    });

    $('.menu-bar li .menu-tgl').click(function(){
        if($(this).hasClass('rotate')){
            $(this).parents('li').children('div').removeClass('rotate');
            $(this).removeClass('rotate');
        }else{
            $('.menu-bar li .menu-tgl').removeClass('rotate');
            $(this).toggleClass('rotate');
        }
    });
    $('#head-bar-menu').click(function(){
        $('.head-bar-left').addClass('open animated slideInDown');
    });
    $('.head-bar-left .fa-close').click(function(){
        $('.head-bar-left').removeClass('open');
    });
    $('.search-wrapper i.fa-close').click(function(){
        $('.search-wrapper').removeClass('force-block animated fadeIn');
    });
    $('.main-header .head-bar .search .fa-search').click(function(){
        $('.search-wrapper').addClass('force-block animated fadeIn');
    });
    $('#search').on('keyup',function(){
        if($(this).val().length>1){
            searchWord=$(this).val();
            $.ajax({
                url:"<?php echo URL; ?>json/search",
                type:"POST",
                data:{
                    searchWord: searchWord,
                    language: '<?php echo 'ge'; ?>'
                },
                cache: false,
                beforeSend: function(){},
                complete:function(){},
                success:function(data){
                    if(data.length>0){
                        $('.search-value').addClass('force-block');
                        data=JSON.parse(data);
                        $('.search-value').html(data);
                    }else{
                        $('.search-value').removeClass('force-block');
                        $('.search-value').html('');
                    }
                }
            });
        }else{
            $('.search-value').removeClass('force-block');            
        }
    });
    $('.fa-wrap').click(function(){
        $(this).toggleClass('r-90');
    });
});
</script>