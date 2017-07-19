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
    </div>
</div>