<!-- Header -->
    <div id="header" style="padding-bottom: 0%;">
        
        <!-- Logo -->
            <div id="logo">
                <a href="#"><img style="width: 100px;" src="images/logo.jpg"></a>
            </div>
            <div  id="title">
                <?php if($lan=='en'){?>
                    <!-- <h3>Government of Nepal</h3> -->
                    <h2>Community Rural Development Society-Nepal</h2>
                    <h3>(CRDS - Nepal)</h3>
                <?php }
                else{?>
                    <!-- <h3>नेपाल सरकार</h3> -->
                    <!-- <h2>सामुदायिक ग्रामीण विकास समाज-नेपाल</h2>
                    <h3>(सी. डी. आर. यस. - नेपाल)</h3> -->

                    <!-- <h3>Government of Nepal</h3> -->
                    <h2>Community Rural Development Society-Nepal</h2>
                    <h3>(CRDS - Nepal)</h3>
                <?php }?>
            </div>
            <div class="flag">
                <img style="width: 62px" src="./images/flag.gif">
            </div>
            <div style="clear: both;"></div>
        
    </div>
<!-- Header -->
<!-- Header -->
    <div id="header" style="background: none;">
        <div class="container" style="background: none;">
            <!-- Nav -->
                <nav id="nav">
                    <ul>
                        <?php createMenu(0, 'Header', $lan); ?>
                        <div style="clear: both;"></div>
                    </ul>
                </nav>

        </div>
    </div>
<!-- Header -->
<!-- /BannerPic -->
<?php if(!isset($_GET['action']) and $pageLinkType==''){?>
    <div class="slider-div">
        <div>
            <ul class="rslides" id="slider2" style="margin-bottom: 0.5%">
                <?php
                    $slider = $groups->getByParentId(SLIDER);
                    while($sliderGet = $conn->fetchArray($slider)){?>
                        <li><img alt="<?php echo $sliderGet['image'];?>" src="<?php echo  CMS_GROUPS_DIR.$sliderGet['image'];?>"></li>
                    <?php }
                ?>
            </ul>
        </div>
    </div>
<?php }?>
<!-- /Banner -->

<!-- Main -->
    <div id="page">
            
        <!-- Main -->
        <div id="main" class="container">
            <div class="row">