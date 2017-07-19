<?php $lan=$_GET['lan'];?>
<style type="text/css">
    .sn{width: 10%;}
    .file{width: 50%}
    .play{width: 40%}
    .sn, .file, .play{float: left;}
    .news ul li:hover{background: none;}
</style>
<div class="9u row">
    <div class="12u skel-cell-important">
        <section class="sidebar welcome">
            <header>
                <h2><?php if($lan=='en') echo 'Our Audio Programs'; else echo 'हाम्रा अडियोहरु';?></h2>
            </header>
            <article>
                <?php
                    $content=$groups->getById(AUDIO);
                    $contentGet=$conn->fetchArray($content);
                    if($lan!='en')
                       echo $contentGet['contents'];
                    else echo $contentGet['contentsen'];
                ?>
            </article>

            <section class="sidebar welcome news submenu">
                <header>
                    <h2>
                        <div class="sn">SN</div>
                        <div class="file">Audio File Name</div>
                        <div class="play">Play</div>
                        <div style="clear: both"></div>
                    </h2>
                </header>
                <ul class="style1">
                    <?php
                    $down=$groups->getByParentId(AUDIO); $count=1;
                    while($downRow=$conn->fetchArray($down)){?>
                        <li>
                            <div class="sn"><?php echo $count++; ?></div>
                            <div class="file"><?php if($lan=='en') echo $downRow['nameen']; else echo $downRow['name']; ?></div>
                            <div class="play">
                                <audio controls="">
                                    <source src="<?php echo CMS_FILES_DIR.$downRow['contents'];?>" type="audio/mp3">
                                    <source src="<?php echo CMS_FILES_DIR.$downRow['contents'];?>" type="audio/wma">
                                    <source src="<?php echo CMS_FILES_DIR.$downRow['contents'];?>" type="audio/wav">
                                </audio>
                            </div>
                            <div style="clear: both;"></div>
                        </li>
                    <?php }?>
                </ul>
            </section>
        </section>
    </div>
</div>