<div class="3u">
    <section class="sidebar chief">
        <?php $chief = $groups->getByURLName(MSG_FROM_CHIEF); ?>
        <header>
            <h2><?php if($lan=='en') echo $chief['naneen']; else echo $chief['name'];?></h2>
        </header>
        <div>
            <img src="<?php echo CMS_GROUPS_DIR.$chief['image'];?>">
            <p>
                <?php echo $chief['shortcontents'];?><br>
                <a href="<?php echo $chief['urlname'];?>" style="float: right;" class="button">More</a>
                <div style="clear: both;"></div>
            </p>
        </div>
    </section>

    <section class="sidebar">
        <header>
            <h2><?php if($lan=='en') echo 'Navigation'; else echo 'Navigation';?></h2>
        </header>
        <ul class="style1">
            <?php createNavigation(0, NAVIGATION, $lan);?>
        </ul>
    </section>
    
    <section class="sidebar">
        <header>
            <?php $downloadTitle = $groups->getByURLName(DOWNLOAD); ?>
            <h2><?php if($lan == 'en') echo $downloadTitle['nameen']; else echo $downloadTitle['name']; ?></h2>
        </header>
        <ul class="style1">
            <?php
                $download = $groups->getByParentURLName(DOWNLOAD);
                while($downloadGet = $conn->fetchArray($download)){?>
                    <li>
                        <a target="_blank" href="<?php if($lan=='en') echo 'en/'; echo CMS_FILES_DIR.$downloadGet['contents'];?>">
                            <?php if($lan=='en') echo $downloadGet['nameen']; else echo $downloadGet['name'];?>
                        </a>
                    </li>
                <?php }
            ?>
        </ul>
    </section>

</div>