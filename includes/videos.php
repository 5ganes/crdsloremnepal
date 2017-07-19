<?php $lan=$_GET['lan'];?>
<style type="text/css">
    .video-div ul{display: flex;flex-flow: row wrap;justify-content: space-between;}
    .video-div ul li{margin: 0% 0% 2% 0%;}
</style>
<div class="9u row">
    <div class="12u skel-cell-important">
        <section class="sidebar welcome">
            <header>
                <h2><?php if($lan=='en') echo 'Our Video Programs'; else echo 'हाम्रा भिडियोहरु';?></h2>
            </header>
            <article>
                <?php
                    $content=$groups->getById(VIDEO);
                    $contentGet=$conn->fetchArray($content);
                    if($lan!='en')
                       echo $contentGet['contents'];
                    else echo $contentGet['contentsen'];
                ?>
            </article>

            <section class="sidebar video-div">
                <ul>
                    <?php
                    $video = $groups->getByParentId(VIDEO);
                    while($videoGet = $conn->fetchArray($video)){?>
                        <li>
                            <p><iframe id="video" width="245" height="170" src="<?=$videoGet['contents'];?>" frameborder="1" allowfullscreen></iframe></p>
                            <h3><?php echo $videoGet['name'];?></h3>
                        </li>
                    <?php }?>
                </ul>
            </section>

        </section>
    </div>
</div>