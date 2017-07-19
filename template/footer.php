</div>
            </div>
            <!-- Main -->

        </div>
    <!-- /Main -->

    <!-- Footer -->
        <div id="footer">
            <div class="container">
                <div class="row">
                    <div class="12u">
                        <section>
                            <h2>Quick Links</h2>
                            <?php
                            $link = $groups->getByParentURLName(FOOTER_LINKS);
                            while($linkGet = $conn->fetchArray($link)){?>
                                <a href="<?php echo $linkGet['urlname'];?>" class="button"><?php echo $linkGet['name'];?></a>
                            <?php }?>
                        </section>
                    </div>
                </div>
            </div>
        </div>
    <!-- /Footer -->

    <!-- Featured -->
        <div id="featured">
            <div class="container">
                <div class="row">
                    <section class="4u">
                        <div class="box galleryslider">
                            <div class="image-slider-wrapper">
                                <ul id="image_slider">
                                    <?php
                                    $gal = $groups->getByParentURLName(FOOTER_GALLERY);
                                    while($galGet = $conn->fetchArray($gal)){?>
                                        <li><img src="<?php echo CMS_GROUPS_DIR.$galGet['image'];?>"></li>
                                    <?php }?>
                                </ul>           
                                <div class="pager">
                                </div>
                            </div>
                        </div>
                    </section>
                    <section class="4u">
                        <div class="box">
                            <?php $video = $groups->getByURLName(FOOTER_VIDEO);?>
                            <iframe src="<?php echo $video['contents'];?>" width="100%" height="215" allowfullscreen = true></iframe>
                        </div>
                    </section>
                    <section class="4u">
                        <div class="box">
                            <iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2Fcrdsnepaldarchula%2F&tabs=timeline&width=280&height=240&small_header=false&adapt_container_width=true&hide_cover=true&show_facepile=true&appId" width="280" height="240" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true"></iframe>
                        </div>
                    </section>
                </div>
                <div class="divider"></div>
            </div>
        </div>
    <!-- /Featured -->

    <!-- Footer -->
        <!-- <div id="footer">
            <div class="container">
                <div class="row">
                    <div class="12u">
                    <section>
                            <h2>Suscribe</h2>
                            <a href="#" class="fa fa-facebook"></a>
                            <a href="#" class="fa fa-twitter"></a>
                            <a href="#" class="fa fa-google"></a>
                            <a href="#" class="fa fa-linkedin"></a>
                            <a href="#" class="fa fa-youtube"></a>
                            <a href="#" class="fa fa-instagram"></a>
                            <a href="#" class="fa fa-pinterest"></a>
                            <a href="#" class="fa fa-snapchat-ghost"></a>
                            <a href="#" class="fa fa-skype"></a>
                            <a href="#" class="fa fa-android"></a>
                            <a href="#" class="fa fa-dribbble"></a>
                            <a href="#" class="fa fa-vimeo"></a>
                            <a href="#" class="fa fa-tumblr"></a>
                            <a href="#" class="fa fa-vine"></a>
                            <a href="#" class="fa fa-foursquare"></a>
                            <a href="#" class="fa fa-stumbleupon"></a>
                            <a href="#" class="fa fa-flickr"></a>
                            <a href="#" class="fa fa-yahoo"></a>
                            <a href="#" class="fa fa-reddit"></a>
                            <a href="#" class="fa fa-rss"></a>
                        </section>
                        </div>
                </div>
            </div>
        </div> -->
    <!-- /Footer -->

    <!-- Copyright -->
        <div id="copyright" class="container">
            © <?php echo date("Y") ?> Community Rural Development Society-Nepal. All rights reserved.<br>
            Design and Development : <a href="http://krishighar.com/">Team Krishighar</a>
        </div>
    <!-- Copyright ends -->
    </body>
</html>