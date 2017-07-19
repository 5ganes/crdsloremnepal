<style type="text/css">
	.sn{width: 10%;}
	.sub, .varlinks{width: 90%}
	.file{width: 70%}
	.download{width: 20%}
	.sn, .sub, .file, .download, .varlinks{float: left;}
</style>
<div class="9u row">
    <div class="12u skel-cell-important">
        <section class="sidebar welcome">
            <header>
                <h2><?php if($lan!='en') echo $pageName; else echo $pageNameEn;?></h2>
            </header>
            <article>
                <?php
                    $content=$groups->getById($pageId);
                    $contentGet=$conn->fetchArray($content);
                    if($lan!='en')
                       echo $contentGet['contents'];
                    else echo $contentGet['contentsen'];
                ?>
            </article>
        </section>

        <?php
		$sub=$groups->getByParentId($pageId);
		if($conn->numRows($sub)>0)
		{?>
	        <section class="sidebar welcome news submenu">
	            <header>
	                <?php $newsTitle = $groups->getByURLName(NEWS_NOTICE); ?>
	                <h2>
	                	<div class="sn">SN</div>
	                	<?php $submenu=$conn->fetchArray($sub);
	                	if($submenu['linkType']=='Normal Group' or $submenu['linkType']=='Contents Page' or $submenu['linkType']=='List'){?>
			                <div class="sub">Submenu</div>
	                	<?php }
	                	else if($submenu['linkType']=='File'){?>
			                <div class="file">Filename</div>
			                <div class="download">Download</div>
	                	<?php }
	                	else if($submenu['linkType']=='Link'){?>
			                <div class="varlinks">Various Links</div>
	                	<?php }?>
	                	<div style="clear: both"></div>
	                </h2>
	            </header>
	            <ul class="style1">
	                <?php 
	            	$down=$groups->getByParentId($pageId);
					if($submenu['linkType']=='Normal Group' or $submenu['linkType']=='Contents Page' or $submenu['linkType']=='List'){
						$count=1;
						while($downRow=$conn->fetchArray($down))
						{?>
			                <li>
			                    <div class="sn"><?php echo $count++;?></div>
			                    <div class="sub"><a href="<?php if($lan=='en') echo 'en/'; echo $downRow['urlname'];?>"><?php if($lan=='en') echo $downRow['nameen']; echo $downRow['name'];?></a></div>
			                    <div style="clear: both;"></div>
			                </li>
		            	<?php }
		            }
		            else if($submenu['linkType']=='File'){
		            	$count=1;
						while($downRow=$conn->fetchArray($down))
						{?>
							<li>
			                    <div class="sn"><?php echo $count++;?></div>
			                    <div class="file"><? if($lan=='en') echo $downRow['nameen']; else echo $downRow['name']; ?></div>
			                    <div class="download">
			                    	<a class="btn btn-success" download="" href="<?=CMS_FILES_DIR.$downRow['contents'];?>">
			                    		<i class="fa fa-download"></i> Download
			                    	</a>
			                    </div>
			                    <div style="clear: both;"></div>
			                </li>
						<?php }
					}
					else if($submenu['linkType']=='Link'){
						$count=1;
						while($downRow=$conn->fetchArray($down))
						{?>
							<li>
			                    <div class="sn"><?php echo $count++;?></div>
			                    <div class="varlinks"><a href="<?=$downRow['contents'];?>"><? if($lan=='en') echo $downRow['nameen']; else echo $downRow['name']; ?></a></div>
			                    <div style="clear: both;"></div>
			                </li>
						<?php }
					}?>
	            </ul>
	        </section>
	    <?php }?>
    </div>
</div>