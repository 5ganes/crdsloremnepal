<!DOCTYPE HTML>
<html>
    <head>
        <title>
            <?php
                if($action==0)
                {
                    if (!empty($query)) {
                        $pageRow = $groups->getByURLName($query);
                        if ($pageRow) {
                            $pageName = $pageRow['name'];
                            $pageNameEn = $pageRow['nameen'];       
                        }
                    }
                }
            ?>
            <?php if($lan=='en'){
                echo 'Community Rural Development Society-Nepal - ';
                if($pageNameEn!=""){ echo $pageNameEn;}else if(isset($_GET['action'])){ echo $_GET['action'];}else{ echo "Home";}
            }
            else{
                echo 'Community Rural Development Society-Nepal - ';
                if($pageName!=""){ echo $pageName;}else if(isset($_GET['action'])){ echo $_GET['action'];}else{ echo "गृहपृष्ठ";}
            }?>
        </title>
        <meta http-equiv="content-type" content="text/html; charset=utf-8" />
        <meta name="description" content="" />
        <meta name="keywords" content="" />
        <link href='http://fonts.googleapis.com/css?family=Roboto+Condensed:700italic,400,300,700' rel='stylesheet' type='text/css'>
        <!--[if lte IE 8]><script src="js/html5shiv.js"></script><![endif]-->
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
        <script src="js/skel.min.js"></script>
        <script src="js/skel-panels.min.js"></script>
        <script src="js/init.js"></script>
        <noscript>
            <link rel="stylesheet" href="css/skel-noscript.css" />
            <link rel="stylesheet" href="css/style.css" />
            <link rel="stylesheet" href="css/style-desktop.css" />
        </noscript>
        <!--[if lte IE 8]><link rel="stylesheet" href="css/ie/v8.css" /><![endif]-->
        <!--[if lte IE 9]><link rel="stylesheet" href="css/ie/v9.css" /><![endif]-->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

        <link rel="stylesheet" href="css/responsiveslides.css">
        <!-- <script src="http://ajax.googleapis.com/ajax/libs/jquery/3.0.0/jquery.min.js"></script> -->
        <script src="js/responsiveslides.min.js"></script>
        <script type="text/javascript" src="slider/slider.js"></script>

        <link rel="stylesheet" href="galleryslider/slider.css">
        <script type="text/javascript" src="galleryslider/slider.js"></script>        

    </head>
    <body class="left-sidebar">

    <div class="top-bar"></div>
    <?php require 'template/header_include.php'; ?>