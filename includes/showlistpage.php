<style type="text/css">
	.sn{width: 10%;}
	.title, .short{width: 40%}
	.sn, .title, .short{float: left;}
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
	                	<div class="title">Title</div>
	                	<div class="short">Short Description</div>
	                	<div style="clear: both"></div>
	                </h2>
	            </header>
	            <ul class="style1">
	                <?php
					$pagename = "index.php?linkId=". $pageId ."&";
					$sql = "SELECT * FROM groups WHERE parentId = '$pageId' ORDER BY weight DESC";
					$newsql = $sql;
					$limit = LISTING_LIMIT;

					//get alias name
					$alias=$groups->getById($pageId);
					$aliasGet=$conn->fetchArray($alias);

					include("includes/pagination.php");
					$return = Pagination($sql, "", $limit, $aliasGet['urlname']);
					$arr = explode(" -- ", $return);
					$start = $arr[0];
					$pagelist = $arr[1];
					$count = $arr[2];
					$newsql .= " LIMIT $start, $limit";
					$result = mysql_query($newsql); $cnt++;
					while ($listRow = $conn->fetchArray($result))
					{?>
		                <li>
		                    <div class="sn"><?php echo $cnt++;?></div>
		                    <div class="title">
		                    	<a href="<?php if($lan=='en') echo 'en/'; echo $listRow['urlname']; ?>">
		                    		<?php if($lan=='en') echo $listRow['nameen']; echo $listRow['name']; ?>
		                    	</a>
		                    </div>
		                    <div class="short"><?php if($lan=='en') echo $listRow['shortcontentsen']; echo $listRow['shortcontents']; ?></div>
		                    <div style="clear: both;"></div>
		                </li>
	         		<?php }?>
	            </ul>
	        </section>
	    <?php }?>
    </div>
</div>