<div class="9u row">
    <div class="8u skel-cell-important">
        <!-- slider div -->
        <section class="sidebar welcome">
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
        </section>
        <!-- slider div ends -->

        <section class="sidebar welcome">
            <header>
                <?php $welcome = $groups->getByURLName(INTRODUCTION); ?>
                <h2><?php if($lan == 'en') echo $welcome['nameen']; else echo $welcome['name']; ?></h2>
            </header>
            <article>
                <?php echo $welcome['shortcontents'];?><br>
                <a href="<?php echo $welcome['urlname'] ?>" style="float: right;" class="button">More</a>
                <div style="clear: both;"></div>
            </article>
        </section>

        <section class="sidebar welcome news">
            <header>
                <?php $newsTitle = $groups->getByURLName(NEWS_NOTICE); ?>
                <h2><?php if($lan == 'en') echo $newsTitle['nameen']; else echo $newsTitle['name']; ?></h2>
            </header>
            <ul class="style1">
                <?php
                $news = $groups->getByParentURLName(NEWS_NOTICE, 'id', 'DESC', 5);
                while($newsGet = $conn->fetchArray($news)){?>
                    <li><a href="<?php echo $newsGet['urlname'];?>"><?php echo $newsGet['name'];?></a></li>
                <?php }?>
            </ul>
            <a href="<?php echo $newsTitle['urlname'] ?>" style="float: right;margin-top: 2%" class="button">More</a>
            <div style="clear: both;"></div>
        </section>

        <section class="sidebar welcome news donor">
            <header>
                <?php $donorTitle = $groups->getByURLName(DONORS); ?>
                <h2><?php if($lan == 'en') echo $donorTitle['nameen']; else echo $donorTitle['name']; ?></h2>
            </header>
            <ul class="style1">
                <?php
                $donor = $groups->getByParentURLName(DONORS, 'weight', 'ASC', 10);
                while($donorGet = $conn->fetchArray($donor)){?>
                    <li><a href="<?php echo $donorGet['urlname'];?>" target="_blank"><img title="<?php echo $donorGet['name'];?>" alt="<?php echo $donorGet['name'];?>" src="<?php echo CMS_GROUPS_DIR.$donorGet['image'];?>" width="60"></a></li>
                <?php }?>
            </ul>
        </section>
    </div>
 
    <div class="4u">
        <div class="links">
            <section class="sidebar">
                <?php $linkTitle = $groups->getByURLName(IMPORTANT_LINKS); ?>
                <header>
                    <h2><?php echo $linkTitle['name']; ?></h2>
                </header>
                <ul class="style1">
                    <?php
                    $link = $groups->getByParentURLName(IMPORTANT_LINKS);
                    while($linkGet = $conn->fetchArray($link)){?>
                        <li><a href="<?php echo $linkGet['urlname'];?>"><?php echo $linkGet['name'];?></a></li>
                    <?php }?>
                </ul>
            </section>
        </div>
        
        <div class="audio">
            <section class="sidebar">
                <div class="blockmenu">
                    <a href="our-audios">
                        <span class="block-icon"></span>
                        <div class="block-content">
                            <div class="block-content-title" style="font-size:18px">हाम्रो अडियो फाइलहरु</div>
                        </div>
                    </a>
                </div>
            </section>
        </div>

        <div class="audio">
            <section class="sidebar">
                <div class="blockmenu">
                    <a href="our-videos">
                        <span class="block-icon"></span>
                        <div class="block-content">
                            <div class="block-content-title" style="font-size:18px">हाम्रो भिडियो फाइलहरु</div>
                        </div>
                    </a>
                </div>
            </section>
        </div>

        <div class="audio">
            <section class="sidebar">
                <div class="blockmenu">
                    <a href="<?php echo JOBS; ?>">
                        <span class="block-icon" style="padding-top: 10px;"><img src="images/jobs.png"></span>
                        <div class="block-content">
                            <?php $job = $groups->getByURLName(JOBS);?>
                            <div class="block-content-title" style="font-size:18px">
                                <?php if($lan=='en') echo $job['nameen']; else echo $job['name']; ?>
                            </div>
                        </div>
                    </a>
                </div>
            </section>
        </div>

        <div class="audio">
            <section class="sidebar">
                <div class="blockmenu">
                    <a href="<?php echo SUPPORT; ?>">
                        <span class="block-icon" style="padding-top: 10px;"><img src="images/donate.png"></span>
                        <div class="block-content">
                            <?php $sup = $groups->getByURLName(SUPPORT);?>
                            <div class="block-content-title" style="font-size:18px">
                                <?php if($lan=='en') echo $sup['nameen']; else echo $sup['name']; ?>
                            </div>
                        </div>
                    </a>
                </div>
            </section>
        </div>

        <section class="sidebar chief" style="margin-top: 6%;padding: 0;">
            <iframe id="nciframe" src="http://www.ashesh.com.np/calendarlink/calendar.php?api=2762015092347" frameborder="0" scrolling="no" marginwidth="0" marginheight="0" style="border:none; overflow:hidden; width:100%; height:200px;" allowtransparency="true"></iframe>
        </section>
        
        <section class="sidebar chief" style="margin-top: 6%;">
            <?php $contact = $groups->getByURLName(CONTACT); ?>
            <header>
                <h2><?php if($lan=='en') echo $contact['naneen']; else echo $contact['name'];?></h2>
            </header>
            <div style="text-align: justify;">
                <?php echo $contact['shortcontents'];?><br>
                <a href="<?php echo $contact['urlname'];?>" style="float: right;" class="button">More</a>
                <div style="clear: both;"></div>
            </div>
        </section>

        <section class="sidebar chief" style="margin-top: 6%;">
            <header>
                <h2><?php if($lan=='en') echo 'Our Location'; else echo 'Our Location';?></h2>
            </header>
            <div style="text-align: justify;">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d208918.06012489155!2d80.42346547153714!3d29.90886540713312!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39a6b49dd44dd71d%3A0xda42e84582ba67e8!2sKhalanga!5e0!3m2!1sen!2snp!4v1500562457032" width="100%" height="200" frameborder="0" style="border:0" allowfullscreen></iframe>
            </div>
        </section>

    </div>
</div>