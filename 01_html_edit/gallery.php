

    <!--Shadow box-->
        <link rel="stylesheet" type="text/css" href="shadowbox/shadowbox.css"/>
        <script type="text/javascript" src="shadowbox/shadowbox.js"></script>
        <script type="text/javascript">
            Shadowbox.init({
                handleOversize: "drag",
                modal: true,
                continuous: true,
                counterType: "skip",
		        handleOversize: "resize",
            });
        </script>
    <!--Shadow box-->
  

            <div class="groupcontent">
                <div class="content">
                    <h2>Gallery</h2>
                    <!-- <div class="groupgallerytitle">
                        <a href="#manicure" class="gallerytitle">Manicure</a>
                        <a href="#eyelash-extension" class="gallerytitle">Eyelash Extension (Before &amp; After)</a>
                        <a href="#hair-section" class="gallerytitle">Hair Section</a>
                        <a href="#Pedicure" class="gallerytitle">Pedicure</a>
                        <a href="#make-up" class="gallerytitle">Make Up (Before &amp; After)</a>
                    </div> -->

                    <div id="gallery">
                        <?php  for($i=1;$i<=18;$i++){?>
                        <a href="images/gallery/<?php echo $i?>.jpg" rel="shadowbox[1]"><img src="images/gallery/<?php echo $i?>.jpg" alt="salon img01" title="salon img01" /></a>
                        <?php } ?>
<!--                         
                        <a href="http://via.placeholder.com/600x400?text=Gallery+600x400" rel="shadowbox[1]"><img src="http://via.placeholder.com/282x172?text=Gallery+600x400" alt="salon img01" title="salon img01" /></a>
                        <a href="images/gallery/salon/01.jpg" rel="shadowbox[1]"><img src="images/thumb/salon/01.jpg" alt="salon img01" title="salon img01" /></a>
                        <a href="images/gallery/salon/02.jpg" rel="shadowbox[1]"><img src="images/thumb/salon/02.jpg" alt="salon img02" title="salon img02" /></a>
                        <a href="images/gallery/salon/03.jpg" rel="shadowbox[1]"><img src="images/thumb/salon/03.jpg" alt="salon img03" title="salon img03" /></a>
                        <a href="images/gallery/salon/04.jpg" rel="shadowbox[1]"><img src="images/thumb/salon/04.jpg" alt="salon img04" title="salon img04" /></a>
                        <a href="images/gallery/salon/05.jpg" rel="shadowbox[1]"><img src="images/thumb/salon/05.jpg" alt="salon img05" title="salon img05" /></a>
                        <a href="images/gallery/salon/06.jpg" rel="shadowbox[1]"><img src="images/thumb/salon/06.jpg" alt="salon img06" title="salon img06" /></a>
                        <a href="images/gallery/salon/07.jpg" rel="shadowbox[1]"><img src="images/thumb/salon/07.jpg" alt="salon img07" title="salon img07" /></a>
                        <a href="images/gallery/salon/08.jpg" rel="shadowbox[1]"><img src="images/thumb/salon/08.jpg" alt="salon img08" title="salon img08" /></a>
                        <a href="images/gallery/salon/09.jpg" rel="shadowbox[1]"><img src="images/thumb/salon/09.jpg" alt="salon img09" title="salon img09" /></a>
                        <a href="images/gallery/salon/10.jpg" rel="shadowbox[1]"><img src="images/thumb/salon/10.jpg" alt="salon img10" title="salon img10" /></a>
                        <a href="images/gallery/salon/11.jpg" rel="shadowbox[1]"><img src="images/thumb/salon/11.jpg" alt="salon img11" title="salon img11" /></a>
                        <a href="images/gallery/salon/12.jpg" rel="shadowbox[1]"><img src="images/thumb/salon/12.jpg" alt="salon img12" title="salon img12" /></a>
                        <a href="images/gallery/salon/13.jpg" rel="shadowbox[1]"><img src="images/thumb/salon/13.jpg" alt="salon img13" title="salon img13" /></a>
                        <a href="images/gallery/salon/14.jpg" rel="shadowbox[1]"><img src="images/thumb/salon/14.jpg" alt="salon img14" title="salon img14" /></a>
                        <a href="images/gallery/salon/15.jpg" rel="shadowbox[1]"><img src="images/thumb/salon/15.jpg" alt="salon img15" title="salon img15" /></a>
                        <a href="images/gallery/salon/16.jpg" rel="shadowbox[1]"><img src="images/thumb/salon/16.jpg" alt="salon img16" title="salon img16" /></a>
                        <a href="images/gallery/salon/17.jpg" rel="shadowbox[1]"><img src="images/thumb/salon/17.jpg" alt="salon img17" title="salon img17" /></a>
                        <a href="images/gallery/salon/18.jpg" rel="shadowbox[1]"><img src="images/thumb/salon/18.jpg" alt="salon img18" title="salon img18" /></a>
                        <a href="images/gallery/salon/19.jpg" rel="shadowbox[1]"><img src="images/thumb/salon/19.jpg" alt="salon img19" title="salon img19" /></a>                        
                        <a href="images/gallery/salon/21.jpg" rel="shadowbox[1]"><img src="images/thumb/salon/21.jpg" alt="salon img21" title="salon img21" /></a>
                        <a href="images/gallery/salon/22.jpg" rel="shadowbox[1]"><img src="images/thumb/salon/22.jpg" alt="salon img22" title="salon img22" /></a>
                        <a href="images/gallery/salon/23.jpg" rel="shadowbox[1]"><img src="images/thumb/salon/23.jpg" alt="salon img23" title="salon img23" /></a>
                        <a href="images/gallery/salon/24.jpg" rel="shadowbox[1]"><img src="images/thumb/salon/24.jpg" alt="salon img24" title="salon img24" /></a>
                        <a href="images/gallery/salon/25.jpg" rel="shadowbox[1]"><img src="images/thumb/salon/25.jpg" alt="salon img25" title="salon img25" /></a>
                        <a href="images/gallery/salon/26.jpg" rel="shadowbox[1]"><img src="images/thumb/salon/26.jpg" alt="salon img26" title="salon img26" /></a>
                        <a href="images/gallery/salon/27.jpg" rel="shadowbox[1]"><img src="images/thumb/salon/27.jpg" alt="salon img27" title="salon img27" /></a>
                        <a href="images/gallery/salon/28.jpg" rel="shadowbox[1]"><img src="images/thumb/salon/28.jpg" alt="salon img28" title="salon img28" /></a>
                        <a href="images/gallery/salon/29.jpg" rel="shadowbox[1]"><img src="images/thumb/salon/29.jpg" alt="salon img29" title="salon img29" /></a>
                        <a href="images/gallery/salon/30.jpg" rel="shadowbox[1]"><img src="images/thumb/salon/30.jpg" alt="salon img30" title="salon img30" /></a>
                        <a href="images/gallery/salon/31.jpg" rel="shadowbox[1]"><img src="images/thumb/salon/31.jpg" alt="salon img31" title="salon img31" /></a>
                        <a href="images/gallery/salon/32.jpg" rel="shadowbox[1]"><img src="images/thumb/salon/32.jpg" alt="salon img32" title="salon img32" /></a>
                        <a href="images/gallery/salon/33.jpg" rel="shadowbox[1]"><img src="images/thumb/salon/33.jpg" alt="salon img33" title="salon img33" /></a>
                        <a href="images/gallery/salon/34.jpg" rel="shadowbox[1]"><img src="images/thumb/salon/34.jpg" alt="salon img34" title="salon img34" /></a>
                        <a href="images/gallery/salon/35.jpg" rel="shadowbox[1]"><img src="images/thumb/salon/35.jpg" alt="salon img35" title="salon img35" /></a>
                        <a href="images/gallery/salon/36.jpg" rel="shadowbox[1]"><img src="images/thumb/salon/36.jpg" alt="salon img36" title="salon img36" /></a>
                        <a href="images/gallery/salon/37.jpg" rel="shadowbox[1]"><img src="images/thumb/salon/37.jpg" alt="salon img37" title="salon img37" /></a>
                        <a href="images/gallery/salon/38.jpg" rel="shadowbox[1]"><img src="images/thumb/salon/38.jpg" alt="salon img38" title="salon img38" /></a>
                        <a href="images/gallery/salon/39.jpg" rel="shadowbox[1]"><img src="images/thumb/salon/39.jpg" alt="salon img39" title="salon img39" /></a>
                        <a href="images/gallery/salon/40.jpg" rel="shadowbox[1]"><img src="images/thumb/salon/40.jpg" alt="salon img40" title="salon img40" /></a>
                        <a href="images/gallery/salon/41.jpg" rel="shadowbox[1]"><img src="images/thumb/salon/41.jpg" alt="salon img41" title="salon img41" /></a>
                        <a href="images/gallery/salon/42.jpg" rel="shadowbox[1]"><img src="images/thumb/salon/42.jpg" alt="salon img42" title="salon img42" /></a>
                        <a href="images/gallery/salon/43.jpg" rel="shadowbox[1]"><img src="images/thumb/salon/43.jpg" alt="salon img43" title="salon img43" /></a>
                        <a href="images/gallery/salon/44.jpg" rel="shadowbox[1]"><img src="images/thumb/salon/44.jpg" alt="salon img44" title="salon img44" /></a>
                        <a href="images/gallery/salon/45.jpg" rel="shadowbox[1]"><img src="images/thumb/salon/45.jpg" alt="salon img45" title="salon img45" /></a>            
                         -->
                        <!-- <a name="manicure"></a>
                        <div class="gallerytitle2">Manicure</div>

                        <div class="video_gallery"><iframe src="https://www.youtube.com/embed/grgTRosQPJk" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe></div>
                        <div class="video_gallery"><iframe src="https://www.youtube.com/embed/Ju3j6uw6rmo" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe></div>
                        <div class="video_gallery"><iframe src="https://www.youtube.com/embed/grgTRosQPJk" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe></div>
                        <div class="video_gallery"><iframe src="https://www.youtube.com/embed/DI9MhxeEOlI" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe></div>


                        <a href="images/gallery/manicure/165.jpg" rel="shadowbox[1]"><img src="images/thumb/manicure/165.jpg" alt="img165" title="img165" /></a>
                        <a href="images/gallery/manicure/166.jpg" rel="shadowbox[1]"><img src="images/thumb/manicure/166.jpg" alt="img166" title="img166" /></a>
                        <a href="images/gallery/manicure/167.jpg" rel="shadowbox[1]"><img src="images/thumb/manicure/167.jpg" alt="img167" title="img167" /></a>
                        <a href="images/gallery/manicure/168.jpg" rel="shadowbox[1]"><img src="images/thumb/manicure/168.jpg" alt="img168" title="img168" /></a>
                        <a href="images/gallery/manicure/169.jpg" rel="shadowbox[1]"><img src="images/thumb/manicure/169.jpg" alt="img169" title="img169" /></a>
                        <a href="images/gallery/manicure/170.jpg" rel="shadowbox[1]"><img src="images/thumb/manicure/170.jpg" alt="img170" title="img170" /></a>
                        <a href="images/gallery/manicure/171.jpg" rel="shadowbox[1]"><img src="images/thumb/manicure/171.jpg" alt="img171" title="img171" /></a>
                        <a href="images/gallery/manicure/172.jpg" rel="shadowbox[1]"><img src="images/thumb/manicure/172.jpg" alt="img172" title="img172" /></a>
                        <a href="images/gallery/manicure/173.jpg" rel="shadowbox[1]"><img src="images/thumb/manicure/173.jpg" alt="img173" title="img173" /></a>
                        <a href="images/gallery/manicure/174.jpg" rel="shadowbox[1]"><img src="images/thumb/manicure/174.jpg" alt="img174" title="img174" /></a>
                        <a href="images/gallery/manicure/175.jpg" rel="shadowbox[1]"><img src="images/thumb/manicure/175.jpg" alt="img175" title="img175" /></a>
                        <a href="images/gallery/manicure/177.jpg" rel="shadowbox[1]"><img src="images/thumb/manicure/177.jpg" alt="img177" title="img177" /></a>
                        <a href="images/gallery/manicure/178.jpg" rel="shadowbox[1]"><img src="images/thumb/manicure/178.jpg" alt="img178" title="img178" /></a>
                        <a href="images/gallery/manicure/179.jpg" rel="shadowbox[1]"><img src="images/thumb/manicure/179.jpg" alt="img179" title="img179" /></a>
                        <a href="images/gallery/manicure/180.jpg" rel="shadowbox[1]"><img src="images/thumb/manicure/180.jpg" alt="img180" title="img180" /></a>
                        <a href="images/gallery/manicure/181.jpg" rel="shadowbox[1]"><img src="images/thumb/manicure/181.jpg" alt="img181" title="img181" /></a>
                        <a href="images/gallery/manicure/182.jpg" rel="shadowbox[1]"><img src="images/thumb/manicure/182.jpg" alt="img182" title="img182" /></a>
                        <a href="images/gallery/manicure/183.jpg" rel="shadowbox[1]"><img src="images/thumb/manicure/183.jpg" alt="img183" title="img183" /></a>
                        <a href="images/gallery/manicure/184.jpg" rel="shadowbox[1]"><img src="images/thumb/manicure/184.jpg" alt="img184" title="img184" /></a>

                        <a href="images/gallery/manicure/151.jpg" rel="shadowbox[1]"><img src="images/thumb/manicure/151.jpg" alt="img151" title="img151" /></a>
                        <a href="images/gallery/manicure/152.jpg" rel="shadowbox[1]"><img src="images/thumb/manicure/152.jpg" alt="img152" title="img152" /></a>
                        <a href="images/gallery/manicure/153.jpg" rel="shadowbox[1]"><img src="images/thumb/manicure/153.jpg" alt="img153" title="img153" /></a>
                        <a href="images/gallery/manicure/154.jpg" rel="shadowbox[1]"><img src="images/thumb/manicure/154.jpg" alt="img154" title="img154" /></a>
                        <a href="images/gallery/manicure/155.jpg" rel="shadowbox[1]"><img src="images/thumb/manicure/155.jpg" alt="img155" title="img155" /></a>

                        <a href="images/gallery/manicure/143.jpg" rel="shadowbox[1]"><img src="images/thumb/manicure/143.jpg" alt="img143" title="img143" /></a>
                        <a href="images/gallery/manicure/144.jpg" rel="shadowbox[1]"><img src="images/thumb/manicure/144.jpg" alt="img144" title="img144" /></a>
                        <a href="images/gallery/manicure/145.jpg" rel="shadowbox[1]"><img src="images/thumb/manicure/145.jpg" alt="img145" title="img145" /></a>
                        <a href="images/gallery/manicure/146.jpg" rel="shadowbox[1]"><img src="images/thumb/manicure/146.jpg" alt="img146" title="img146" /></a>
                        <a href="images/gallery/manicure/147.jpg" rel="shadowbox[1]"><img src="images/thumb/manicure/147.jpg" alt="img147" title="img147" /></a>
                        <a href="images/gallery/manicure/148.jpg" rel="shadowbox[1]"><img src="images/thumb/manicure/148.jpg" alt="img148" title="img148" /></a>
                        <a href="images/gallery/manicure/149.jpg" rel="shadowbox[1]"><img src="images/thumb/manicure/149.jpg" alt="img149" title="img149" /></a>
                        <a href="images/gallery/manicure/150.jpg" rel="shadowbox[1]"><img src="images/thumb/manicure/150.jpg" alt="img150" title="img150" /></a>

						<a href="images/gallery/manicure/136.jpg" rel="shadowbox[1]"><img src="images/thumb/manicure/136.jpg" alt="img136" title="img136" /></a>
						<a href="images/gallery/manicure/137.jpg" rel="shadowbox[1]"><img src="images/thumb/manicure/137.jpg" alt="img137" title="img137" /></a>
						<a href="images/gallery/manicure/138.jpg" rel="shadowbox[1]"><img src="images/thumb/manicure/138.jpg" alt="img138" title="img138" /></a>
						<a href="images/gallery/manicure/139.jpg" rel="shadowbox[1]"><img src="images/thumb/manicure/139.jpg" alt="img139" title="img139" /></a>
                        <a href="images/gallery/manicure/140.jpg" rel="shadowbox[1]"><img src="images/thumb/manicure/140.jpg" alt="img140" title="img140" /></a>
                        <a href="images/gallery/manicure/141.jpg" rel="shadowbox[1]"><img src="images/thumb/manicure/141.jpg" alt="img141" title="img141" /></a>
                        <a href="images/gallery/manicure/142.jpg" rel="shadowbox[1]"><img src="images/thumb/manicure/142.jpg" alt="img142" title="img142" /></a>
						
						
                        <a href="images/gallery/manicure/135.jpg" rel="shadowbox[1]"><img src="images/thumb/manicure/135.jpg" alt="img135" title="img135" /></a>
                        <a href="images/gallery/manicure/1.jpg" rel="shadowbox[1]"><img src="images/thumb/manicure/1.jpg" alt="img1" title="img1" /></a>
                        <a href="images/gallery/manicure/2.jpg" rel="shadowbox[1]"><img src="images/thumb/manicure/2.jpg" alt="img2" title="img2" /></a>
                        <a href="images/gallery/manicure/3.jpg" rel="shadowbox[1]"><img src="images/thumb/manicure/3.jpg" alt="img3" title="img3" /></a>
                        <a href="images/gallery/manicure/4.jpg" rel="shadowbox[1]"><img src="images/thumb/manicure/4.jpg" alt="img4" title="img4" /></a>
                        <a href="images/gallery/manicure/5.jpg" rel="shadowbox[1]"><img src="images/thumb/manicure/5.jpg" alt="img5" title="img5" /></a>
                        <a href="images/gallery/manicure/6.jpg" rel="shadowbox[1]"><img src="images/thumb/manicure/6.jpg" alt="img6" title="img6" /></a>
                        <a href="images/gallery/manicure/7.jpg" rel="shadowbox[1]"><img src="images/thumb/manicure/7.jpg" alt="img7" title="img7" /></a>
                        <a href="images/gallery/manicure/8.jpg" rel="shadowbox[1]"><img src="images/thumb/manicure/8.jpg" alt="img8" title="img8" /></a>
                        <a href="images/gallery/manicure/9.jpg" rel="shadowbox[1]"><img src="images/thumb/manicure/9.jpg" alt="img9" title="img9" /></a>
                        <a href="images/gallery/manicure/10.jpg" rel="shadowbox[1]"><img src="images/thumb/manicure/10.jpg" alt="img10" title="img10" /></a>
                        <a href="images/gallery/manicure/11.jpg" rel="shadowbox[1]"><img src="images/thumb/manicure/11.jpg" alt="img11" title="img11" /></a>
                        <a href="images/gallery/manicure/12.jpg" rel="shadowbox[1]"><img src="images/thumb/manicure/12.jpg" alt="img12" title="img12" /></a>
                        <a href="images/gallery/manicure/13.jpg" rel="shadowbox[1]"><img src="images/thumb/manicure/13.jpg" alt="img13" title="img13" /></a>
                        <a href="images/gallery/manicure/14.jpg" rel="shadowbox[1]"><img src="images/thumb/manicure/14.jpg" alt="img14" title="img14" /></a>
                        <a href="images/gallery/manicure/15.jpg" rel="shadowbox[1]"><img src="images/thumb/manicure/15.jpg" alt="img15" title="img15" /></a>
                        <a href="images/gallery/manicure/16.jpg" rel="shadowbox[1]"><img src="images/thumb/manicure/16.jpg" alt="img16" title="img16" /></a>
                        <a href="images/gallery/manicure/17.jpg" rel="shadowbox[1]"><img src="images/thumb/manicure/17.jpg" alt="img17" title="img17" /></a>
                        <a href="images/gallery/manicure/18.jpg" rel="shadowbox[1]"><img src="images/thumb/manicure/18.jpg" alt="img18" title="img18" /></a>
                        <a href="images/gallery/manicure/19.jpg" rel="shadowbox[1]"><img src="images/thumb/manicure/19.jpg" alt="img19" title="img19" /></a>
                        <a href="images/gallery/manicure/20.jpg" rel="shadowbox[1]"><img src="images/thumb/manicure/20.jpg" alt="img20" title="img20" /></a>
                        <a href="images/gallery/manicure/21.jpg" rel="shadowbox[1]"><img src="images/thumb/manicure/21.jpg" alt="img21" title="img21" /></a>
                        <a href="images/gallery/manicure/22.jpg" rel="shadowbox[1]"><img src="images/thumb/manicure/22.jpg" alt="img22" title="img22" /></a>
                        <a href="images/gallery/manicure/23.jpg" rel="shadowbox[1]"><img src="images/thumb/manicure/23.jpg" alt="img23" title="img23" /></a>
                        <a href="images/gallery/manicure/24.jpg" rel="shadowbox[1]"><img src="images/thumb/manicure/24.jpg" alt="img24" title="img24" /></a>
                        <a href="images/gallery/manicure/25.jpg" rel="shadowbox[1]"><img src="images/thumb/manicure/25.jpg" alt="img25" title="img25" /></a>
                        <a href="images/gallery/manicure/26.jpg" rel="shadowbox[1]"><img src="images/thumb/manicure/26.jpg" alt="img26" title="img26" /></a>
                        <a href="images/gallery/manicure/27.jpg" rel="shadowbox[1]"><img src="images/thumb/manicure/27.jpg" alt="img27" title="img27" /></a>
                        <a href="images/gallery/manicure/28.jpg" rel="shadowbox[1]"><img src="images/thumb/manicure/28.jpg" alt="img28" title="img28" /></a>
                        <a href="images/gallery/manicure/29.jpg" rel="shadowbox[1]"><img src="images/thumb/manicure/29.jpg" alt="img29" title="img29" /></a>
                        <a href="images/gallery/manicure/30.jpg" rel="shadowbox[1]"><img src="images/thumb/manicure/30.jpg" alt="img30" title="img30" /></a>
                        <a href="images/gallery/manicure/31.jpg" rel="shadowbox[1]"><img src="images/thumb/manicure/31.jpg" alt="img31" title="img31" /></a>
                        <a href="images/gallery/manicure/32.jpg" rel="shadowbox[1]"><img src="images/thumb/manicure/32.jpg" alt="img32" title="img32" /></a>
                        <a href="images/gallery/manicure/33.jpg" rel="shadowbox[1]"><img src="images/thumb/manicure/33.jpg" alt="img33" title="img33" /></a>
                        <a href="images/gallery/manicure/34.jpg" rel="shadowbox[1]"><img src="images/thumb/manicure/34.jpg" alt="img34" title="img34" /></a>
                        <a href="images/gallery/manicure/35.jpg" rel="shadowbox[1]"><img src="images/thumb/manicure/35.jpg" alt="img35" title="img35" /></a>
                        <a href="images/gallery/manicure/36.jpg" rel="shadowbox[1]"><img src="images/thumb/manicure/36.jpg" alt="img36" title="img36" /></a>
                        <a href="images/gallery/manicure/37.jpg" rel="shadowbox[1]"><img src="images/thumb/manicure/37.jpg" alt="img37" title="img37" /></a>
                        <a href="images/gallery/manicure/38.jpg" rel="shadowbox[1]"><img src="images/thumb/manicure/38.jpg" alt="img38" title="img38" /></a>
                        <a href="images/gallery/manicure/39.jpg" rel="shadowbox[1]"><img src="images/thumb/manicure/39.jpg" alt="img39" title="img39" /></a>
                        <a href="images/gallery/manicure/40.jpg" rel="shadowbox[1]"><img src="images/thumb/manicure/40.jpg" alt="img40" title="img40" /></a>
                        <a href="images/gallery/manicure/41.jpg" rel="shadowbox[1]"><img src="images/thumb/manicure/41.jpg" alt="img41" title="img41" /></a>
                        <a href="images/gallery/manicure/42.jpg" rel="shadowbox[1]"><img src="images/thumb/manicure/42.jpg" alt="img42" title="img42" /></a>
                        <a href="images/gallery/manicure/43.jpg" rel="shadowbox[1]"><img src="images/thumb/manicure/43.jpg" alt="img43" title="img43" /></a>
                        <a href="images/gallery/manicure/44.jpg" rel="shadowbox[1]"><img src="images/thumb/manicure/44.jpg" alt="img44" title="img44" /></a>
                        <a href="images/gallery/manicure/45.jpg" rel="shadowbox[1]"><img src="images/thumb/manicure/45.jpg" alt="img45" title="img45" /></a>
                        <a href="images/gallery/manicure/46.jpg" rel="shadowbox[1]"><img src="images/thumb/manicure/46.jpg" alt="img46" title="img46" /></a>
                        <a href="images/gallery/manicure/47.jpg" rel="shadowbox[1]"><img src="images/thumb/manicure/47.jpg" alt="img47" title="img47" /></a>
                        <a href="images/gallery/manicure/48.jpg" rel="shadowbox[1]"><img src="images/thumb/manicure/48.jpg" alt="img48" title="img48" /></a>
                        <a href="images/gallery/manicure/49.jpg" rel="shadowbox[1]"><img src="images/thumb/manicure/49.jpg" alt="img49" title="img49" /></a>
                        <a href="images/gallery/manicure/50.jpg" rel="shadowbox[1]"><img src="images/thumb/manicure/50.jpg" alt="img50" title="img50" /></a>
                        <a href="images/gallery/manicure/51.jpg" rel="shadowbox[1]"><img src="images/thumb/manicure/51.jpg" alt="img51" title="img51" /></a>
                        <a href="images/gallery/manicure/52.jpg" rel="shadowbox[1]"><img src="images/thumb/manicure/52.jpg" alt="img52" title="img52" /></a>
                        <a href="images/gallery/manicure/53.jpg" rel="shadowbox[1]"><img src="images/thumb/manicure/53.jpg" alt="img53" title="img53" /></a>
                        <a href="images/gallery/manicure/54.jpg" rel="shadowbox[1]"><img src="images/thumb/manicure/54.jpg" alt="img54" title="img54" /></a>
                        <a href="images/gallery/manicure/55.jpg" rel="shadowbox[1]"><img src="images/thumb/manicure/55.jpg" alt="img55" title="img55" /></a>
                        <a href="images/gallery/manicure/56.jpg" rel="shadowbox[1]"><img src="images/thumb/manicure/56.jpg" alt="img56" title="img56" /></a>
                        <a href="images/gallery/manicure/57.jpg" rel="shadowbox[1]"><img src="images/thumb/manicure/57.jpg" alt="img57" title="img57" /></a>
                        <a href="images/gallery/manicure/58.jpg" rel="shadowbox[1]"><img src="images/thumb/manicure/58.jpg" alt="img58" title="img58" /></a>
                        <a href="images/gallery/manicure/59.jpg" rel="shadowbox[1]"><img src="images/thumb/manicure/59.jpg" alt="img59" title="img59" /></a>
                        <a href="images/gallery/manicure/60.jpg" rel="shadowbox[1]"><img src="images/thumb/manicure/60.jpg" alt="img60" title="img60" /></a>
                        <a href="images/gallery/manicure/61.jpg" rel="shadowbox[1]"><img src="images/thumb/manicure/61.jpg" alt="img61" title="img61" /></a>
                        <a href="images/gallery/manicure/62.jpg" rel="shadowbox[1]"><img src="images/thumb/manicure/62.jpg" alt="img62" title="img62" /></a>
                        <a href="images/gallery/manicure/63.jpg" rel="shadowbox[1]"><img src="images/thumb/manicure/63.jpg" alt="img63" title="img63" /></a>
                        <a href="images/gallery/manicure/64.jpg" rel="shadowbox[1]"><img src="images/thumb/manicure/64.jpg" alt="img64" title="img64" /></a>
                        <a href="images/gallery/manicure/65.jpg" rel="shadowbox[1]"><img src="images/thumb/manicure/65.jpg" alt="img65" title="img65" /></a>
                        <a href="images/gallery/manicure/66.jpg" rel="shadowbox[1]"><img src="images/thumb/manicure/66.jpg" alt="img66" title="img66" /></a>
                        <a href="images/gallery/manicure/67.jpg" rel="shadowbox[1]"><img src="images/thumb/manicure/67.jpg" alt="img67" title="img67" /></a>
                        <a href="images/gallery/manicure/68.jpg" rel="shadowbox[1]"><img src="images/thumb/manicure/68.jpg" alt="img68" title="img68" /></a>
                        <a href="images/gallery/manicure/69.jpg" rel="shadowbox[1]"><img src="images/thumb/manicure/69.jpg" alt="img69" title="img69" /></a>
                        <a href="images/gallery/manicure/70.jpg" rel="shadowbox[1]"><img src="images/thumb/manicure/70.jpg" alt="img70" title="img70" /></a>
                        <a href="images/gallery/manicure/71.jpg" rel="shadowbox[1]"><img src="images/thumb/manicure/71.jpg" alt="img71" title="img71" /></a>
                        <a href="images/gallery/manicure/72.jpg" rel="shadowbox[1]"><img src="images/thumb/manicure/72.jpg" alt="img72" title="img72" /></a>
                        <a href="images/gallery/manicure/73.jpg" rel="shadowbox[1]"><img src="images/thumb/manicure/73.jpg" alt="img73" title="img73" /></a>
                        <a href="images/gallery/manicure/74.jpg" rel="shadowbox[1]"><img src="images/thumb/manicure/74.jpg" alt="img74" title="img74" /></a>
                        <a href="images/gallery/manicure/75.jpg" rel="shadowbox[1]"><img src="images/thumb/manicure/75.jpg" alt="img75" title="img75" /></a>
                        <a href="images/gallery/manicure/76.jpg" rel="shadowbox[1]"><img src="images/thumb/manicure/76.jpg" alt="img76" title="img76" /></a>
                        <a href="images/gallery/manicure/77.jpg" rel="shadowbox[1]"><img src="images/thumb/manicure/77.jpg" alt="img77" title="img77" /></a>
                        <a href="images/gallery/manicure/78.jpg" rel="shadowbox[1]"><img src="images/thumb/manicure/78.jpg" alt="img78" title="img78" /></a>
                        <a href="images/gallery/manicure/79.jpg" rel="shadowbox[1]"><img src="images/thumb/manicure/79.jpg" alt="img79" title="img79" /></a>
                        <a href="images/gallery/manicure/80.jpg" rel="shadowbox[1]"><img src="images/thumb/manicure/80.jpg" alt="img80" title="img80" /></a>
                        <a href="images/gallery/manicure/81.jpg" rel="shadowbox[1]"><img src="images/thumb/manicure/81.jpg" alt="img81" title="img81" /></a>
                        <a href="images/gallery/manicure/82.jpg" rel="shadowbox[1]"><img src="images/thumb/manicure/82.jpg" alt="img82" title="img82" /></a>
                        <a href="images/gallery/manicure/83.jpg" rel="shadowbox[1]"><img src="images/thumb/manicure/83.jpg" alt="img83" title="img83" /></a>
                        <a href="images/gallery/manicure/84.jpg" rel="shadowbox[1]"><img src="images/thumb/manicure/84.jpg" alt="img84" title="img84" /></a>
                        <a href="images/gallery/manicure/85.jpg" rel="shadowbox[1]"><img src="images/thumb/manicure/85.jpg" alt="img85" title="img85" /></a>
                        <a href="images/gallery/manicure/86.jpg" rel="shadowbox[1]"><img src="images/thumb/manicure/86.jpg" alt="img86" title="img86" /></a>
                        <a href="images/gallery/manicure/87.jpg" rel="shadowbox[1]"><img src="images/thumb/manicure/87.jpg" alt="img87" title="img87" /></a>
                        <a href="images/gallery/manicure/88.jpg" rel="shadowbox[1]"><img src="images/thumb/manicure/88.jpg" alt="img88" title="img88" /></a>
                        <a href="images/gallery/manicure/89.jpg" rel="shadowbox[1]"><img src="images/thumb/manicure/89.jpg" alt="img89" title="img89" /></a>
                        <a href="images/gallery/manicure/90.jpg" rel="shadowbox[1]"><img src="images/thumb/manicure/90.jpg" alt="img90" title="img90" /></a>
                        <a href="images/gallery/manicure/91.jpg" rel="shadowbox[1]"><img src="images/thumb/manicure/91.jpg" alt="img91" title="img91" /></a>
                        <a href="images/gallery/manicure/92.jpg" rel="shadowbox[1]"><img src="images/thumb/manicure/92.jpg" alt="img92" title="img92" /></a>
                        <a href="images/gallery/manicure/93.jpg" rel="shadowbox[1]"><img src="images/thumb/manicure/93.jpg" alt="img93" title="img93" /></a>
                        <a href="images/gallery/manicure/94.jpg" rel="shadowbox[1]"><img src="images/thumb/manicure/94.jpg" alt="img94" title="img94" /></a>
                        <a href="images/gallery/manicure/95.jpg" rel="shadowbox[1]"><img src="images/thumb/manicure/95.jpg" alt="img95" title="img95" /></a>
                        <a href="images/gallery/manicure/96.jpg" rel="shadowbox[1]"><img src="images/thumb/manicure/96.jpg" alt="img96" title="img96" /></a>
                        <a href="images/gallery/manicure/97.jpg" rel="shadowbox[1]"><img src="images/thumb/manicure/97.jpg" alt="img97" title="img97" /></a>
                        <a href="images/gallery/manicure/98.jpg" rel="shadowbox[1]"><img src="images/thumb/manicure/98.jpg" alt="img98" title="img98" /></a>
                        <a href="images/gallery/manicure/99.jpg" rel="shadowbox[1]"><img src="images/thumb/manicure/99.jpg" alt="img99" title="img99" /></a>
                        <a href="images/gallery/manicure/100.jpg" rel="shadowbox[1]"><img src="images/thumb/manicure/100.jpg" alt="img100" title="img100" /></a>
                        <a href="images/gallery/manicure/101.jpg" rel="shadowbox[1]"><img src="images/thumb/manicure/101.jpg" alt="img101" title="img101" /></a>
                        <a href="images/gallery/manicure/102.jpg" rel="shadowbox[1]"><img src="images/thumb/manicure/102.jpg" alt="img102" title="img102" /></a>
                        <a href="images/gallery/manicure/103.jpg" rel="shadowbox[1]"><img src="images/thumb/manicure/103.jpg" alt="img103" title="img103" /></a>
                        <a href="images/gallery/manicure/104.jpg" rel="shadowbox[1]"><img src="images/thumb/manicure/104.jpg" alt="img104" title="img104" /></a>
                        <a href="images/gallery/manicure/105.jpg" rel="shadowbox[1]"><img src="images/thumb/manicure/105.jpg" alt="img105" title="img105" /></a>
                        <a href="images/gallery/manicure/106.jpg" rel="shadowbox[1]"><img src="images/thumb/manicure/106.jpg" alt="img106" title="img106" /></a>
                        <a href="images/gallery/manicure/107.jpg" rel="shadowbox[1]"><img src="images/thumb/manicure/107.jpg" alt="img107" title="img107" /></a>
                        <a href="images/gallery/manicure/108.jpg" rel="shadowbox[1]"><img src="images/thumb/manicure/108.jpg" alt="img108" title="img108" /></a>
                        <a href="images/gallery/manicure/109.jpg" rel="shadowbox[1]"><img src="images/thumb/manicure/109.jpg" alt="img109" title="img109" /></a>
                        <a href="images/gallery/manicure/110.jpg" rel="shadowbox[1]"><img src="images/thumb/manicure/110.jpg" alt="img110" title="img110" /></a>
                        <a href="images/gallery/manicure/111.jpg" rel="shadowbox[1]"><img src="images/thumb/manicure/111.jpg" alt="img111" title="img111" /></a>
                        <a href="images/gallery/manicure/112.jpg" rel="shadowbox[1]"><img src="images/thumb/manicure/112.jpg" alt="img112" title="img112" /></a>
                        <a href="images/gallery/manicure/113.jpg" rel="shadowbox[1]"><img src="images/thumb/manicure/113.jpg" alt="img113" title="img113" /></a>
                        <a href="images/gallery/manicure/114.jpg" rel="shadowbox[1]"><img src="images/thumb/manicure/114.jpg" alt="img114" title="img114" /></a>
                        <a href="images/gallery/manicure/115.jpg" rel="shadowbox[1]"><img src="images/thumb/manicure/115.jpg" alt="img115" title="img115" /></a>
                        <a href="images/gallery/manicure/116.jpg" rel="shadowbox[1]"><img src="images/thumb/manicure/116.jpg" alt="img116" title="img116" /></a>
                        <a href="images/gallery/manicure/117.jpg" rel="shadowbox[1]"><img src="images/thumb/manicure/117.jpg" alt="img117" title="img117" /></a>
                        <a href="images/gallery/manicure/118.jpg" rel="shadowbox[1]"><img src="images/thumb/manicure/118.jpg" alt="img118" title="img118" /></a>
                        <a href="images/gallery/manicure/119.jpg" rel="shadowbox[1]"><img src="images/thumb/manicure/119.jpg" alt="img119" title="img119" /></a>
                        <a href="images/gallery/manicure/120.jpg" rel="shadowbox[1]"><img src="images/thumb/manicure/120.jpg" alt="img120" title="img120" /></a>
                        <a href="images/gallery/manicure/121.jpg" rel="shadowbox[1]"><img src="images/thumb/manicure/121.jpg" alt="img121" title="img121" /></a>
                        <a href="images/gallery/manicure/122.jpg" rel="shadowbox[1]"><img src="images/thumb/manicure/122.jpg" alt="img122" title="img122" /></a>
                        <a href="images/gallery/manicure/123.jpg" rel="shadowbox[1]"><img src="images/thumb/manicure/123.jpg" alt="img123" title="img123" /></a>
                        <a href="images/gallery/manicure/124.jpg" rel="shadowbox[1]"><img src="images/thumb/manicure/124.jpg" alt="img124" title="img124" /></a>
                        <a href="images/gallery/manicure/125.jpg" rel="shadowbox[1]"><img src="images/thumb/manicure/125.jpg" alt="img125" title="img125" /></a>
                        <a href="images/gallery/manicure/126.jpg" rel="shadowbox[1]"><img src="images/thumb/manicure/126.jpg" alt="img126" title="img126" /></a>
                        <a href="images/gallery/manicure/127.jpg" rel="shadowbox[1]"><img src="images/thumb/manicure/127.jpg" alt="img127" title="img127" /></a>
                        <a href="images/gallery/manicure/128.jpg" rel="shadowbox[1]"><img src="images/thumb/manicure/128.jpg" alt="img128" title="img128" /></a>
                        <a href="images/gallery/manicure/129.jpg" rel="shadowbox[1]"><img src="images/thumb/manicure/129.jpg" alt="img129" title="img129" /></a>
                        <a href="images/gallery/manicure/130.jpg" rel="shadowbox[1]"><img src="images/thumb/manicure/130.jpg" alt="img130" title="img130" /></a>
                        <a href="images/gallery/manicure/131.jpg" rel="shadowbox[1]"><img src="images/thumb/manicure/131.jpg" alt="img131" title="img131" /></a>
                        <a href="images/gallery/manicure/132.jpg" rel="shadowbox[1]"><img src="images/thumb/manicure/132.jpg" alt="img132" title="img132" /></a>
                        <a href="images/gallery/manicure/133.jpg" rel="shadowbox[1]"><img src="images/thumb/manicure/133.jpg" alt="img133" title="img133" /></a>
                        <a href="images/gallery/manicure/134.jpg" rel="shadowbox[1]"><img src="images/thumb/manicure/134.jpg" alt="img134" title="img134" /></a>
                        <a href="images/gallery/manicure/156.jpg" rel="shadowbox[1]"><img src="images/thumb/manicure/156.jpg" alt="img125" title="img156" /></a>
                        <a href="images/gallery/manicure/157.jpg" rel="shadowbox[1]"><img src="images/thumb/manicure/157.jpg" alt="img126" title="img157" /></a>
                        <a href="images/gallery/manicure/158.jpg" rel="shadowbox[1]"><img src="images/thumb/manicure/158.jpg" alt="img127" title="img158" /></a>
                        <a href="images/gallery/manicure/159.jpg" rel="shadowbox[1]"><img src="images/thumb/manicure/159.jpg" alt="img128" title="img159" /></a>
                        <a href="images/gallery/manicure/160.jpg" rel="shadowbox[1]"><img src="images/thumb/manicure/160.jpg" alt="img129" title="img160" /></a>
                        <a href="images/gallery/manicure/161.jpg" rel="shadowbox[1]"><img src="images/thumb/manicure/161.jpg" alt="img130" title="img161" /></a>
                        <a href="images/gallery/manicure/162.jpg" rel="shadowbox[1]"><img src="images/thumb/manicure/162.jpg" alt="img131" title="img162" /></a>
                        <a href="images/gallery/manicure/163.jpg" rel="shadowbox[1]"><img src="images/thumb/manicure/163.jpg" alt="img132" title="img163" /></a>
                        <a href="images/gallery/manicure/164.jpg" rel="shadowbox[1]"><img src="images/thumb/manicure/164.jpg" alt="img133" title="img164" /></a>

                        <a name="eyelash-extension"></a>
                        <div class="gallerytitle2">Eyelash Extension (Before &amp; After)</div>
                        <a href="images/gallery/eyelash_extension/45.jpg" rel="shadowbox[1]"><img src="images/thumb/eyelash_extension/45.jpg" alt="img45" title="img45" /></a>
                        <a href="images/gallery/eyelash_extension/44.jpg" rel="shadowbox[1]"><img src="images/thumb/eyelash_extension/44.jpg" alt="img44" title="img44" /></a>
                        <a href="images/gallery/eyelash_extension/43.jpg" rel="shadowbox[1]"><img src="images/thumb/eyelash_extension/43.jpg" alt="img43" title="img43" /></a>
                        <a href="images/gallery/eyelash_extension/21.jpg" rel="shadowbox[1]"><img src="images/thumb/eyelash_extension/21.jpg" alt="img21" title="img21" /></a>
                        <a href="images/gallery/eyelash_extension/20.jpg" rel="shadowbox[1]"><img src="images/thumb/eyelash_extension/20.jpg" alt="img20" title="img20" /></a>
                        <a href="images/gallery/eyelash_extension/09.jpg" rel="shadowbox[1]"><img src="images/thumb/eyelash_extension/09.jpg" alt="img09" title="img09" /></a>
                        <a href="images/gallery/eyelash_extension/08.jpg" rel="shadowbox[1]"><img src="images/thumb/eyelash_extension/08.jpg" alt="img08" title="img08" /></a>
                        <a href="images/gallery/eyelash_extension/07.jpg" rel="shadowbox[1]"><img src="images/thumb/eyelash_extension/07.jpg" alt="img07" title="img07" /></a>
                        <a href="images/gallery/eyelash_extension/06.jpg" rel="shadowbox[1]"><img src="images/thumb/eyelash_extension/06.jpg" alt="img06" title="img06" /></a>
                        <a href="images/gallery/eyelash_extension/05.jpg" rel="shadowbox[1]"><img src="images/thumb/eyelash_extension/05.jpg" alt="img05" title="img05" /></a>
                        <a href="images/gallery/eyelash_extension/04.jpg" rel="shadowbox[1]"><img src="images/thumb/eyelash_extension/04.jpg" alt="img04" title="img04" /></a>
                        <a href="images/gallery/eyelash_extension/03.jpg" rel="shadowbox[1]"><img src="images/thumb/eyelash_extension/03.jpg" alt="img03" title="img03" /></a>
                        <a href="images/gallery/eyelash_extension/02.jpg" rel="shadowbox[1]"><img src="images/thumb/eyelash_extension/02.jpg" alt="img02" title="img02" /></a>
                        <a href="images/gallery/eyelash_extension/01.jpg" rel="shadowbox[1]"><img src="images/thumb/eyelash_extension/01.jpg" alt="img01" title="img01" /></a>
                        <a href="images/gallery/eyelash_extension/1.jpg" rel="shadowbox[1]"><img src="images/thumb/eyelash_extension/1.jpg" alt="img1" title="img1" /></a>
                        <a href="images/gallery/eyelash_extension/2.jpg" rel="shadowbox[1]"><img src="images/thumb/eyelash_extension/2.jpg" alt="img2" title="img2" /></a>
                        <a href="images/gallery/eyelash_extension/3.jpg" rel="shadowbox[1]"><img src="images/thumb/eyelash_extension/3.jpg" alt="img3" title="img3" /></a>
                        <a href="images/gallery/eyelash_extension/4.jpg" rel="shadowbox[1]"><img src="images/thumb/eyelash_extension/4.jpg" alt="img4" title="img4" /></a>
                        <a href="images/gallery/eyelash_extension/5.jpg" rel="shadowbox[1]"><img src="images/thumb/eyelash_extension/5.jpg" alt="img5" title="img5" /></a>
                        <a href="images/gallery/eyelash_extension/6.jpg" rel="shadowbox[1]"><img src="images/thumb/eyelash_extension/6.jpg" alt="img6" title="img6" /></a>
                        <a href="images/gallery/eyelash_extension/7.jpg" rel="shadowbox[1]"><img src="images/thumb/eyelash_extension/7.jpg" alt="img7" title="img7" /></a>
                        <a href="images/gallery/eyelash_extension/8.jpg" rel="shadowbox[1]"><img src="images/thumb/eyelash_extension/8.jpg" alt="img8" title="img8" /></a>
                        <a href="images/gallery/eyelash_extension/9.jpg" rel="shadowbox[1]"><img src="images/thumb/eyelash_extension/9.jpg" alt="img9" title="img9" /></a>
                        <a href="images/gallery/eyelash_extension/10.jpg" rel="shadowbox[1]"><img src="images/thumb/eyelash_extension/10.jpg" alt="img10" title="img10" /></a>
                        <a href="images/gallery/eyelash_extension/11.jpg" rel="shadowbox[1]"><img src="images/thumb/eyelash_extension/11.jpg" alt="img11" title="img11" /></a>
                        <a href="images/gallery/eyelash_extension/12.jpg" rel="shadowbox[1]"><img src="images/thumb/eyelash_extension/12.jpg" alt="img12" title="img12" /></a>
                        <a href="images/gallery/eyelash_extension/13.jpg" rel="shadowbox[1]"><img src="images/thumb/eyelash_extension/13.jpg" alt="img13" title="img13" /></a>
                        <a href="images/gallery/eyelash_extension/14.jpg" rel="shadowbox[1]"><img src="images/thumb/eyelash_extension/14.jpg" alt="img14" title="img14" /></a>
                        <a href="images/gallery/eyelash_extension/15.jpg" rel="shadowbox[1]"><img src="images/thumb/eyelash_extension/15.jpg" alt="img15" title="img15" /></a>
                        <a href="images/gallery/eyelash_extension/16.jpg" rel="shadowbox[1]"><img src="images/thumb/eyelash_extension/16.jpg" alt="img16" title="img16" /></a>
                        <a href="images/gallery/eyelash_extension/17.jpg" rel="shadowbox[1]"><img src="images/thumb/eyelash_extension/17.jpg" alt="img17" title="img17" /></a>
                        <a href="images/gallery/eyelash_extension/18.jpg" rel="shadowbox[1]"><img src="images/thumb/eyelash_extension/18.jpg" alt="img18" title="img18" /></a>
                        <a href="images/gallery/eyelash_extension/19.jpg" rel="shadowbox[1]"><img src="images/thumb/eyelash_extension/19.jpg" alt="img19" title="img19" /></a>
                        <a href="images/gallery/eyelash_extension/37.jpg" rel="shadowbox[1]"><img src="images/thumb/eyelash_extension/37.jpg" alt="img37" title="img37" /></a>
                        <a href="images/gallery/eyelash_extension/23.jpg" rel="shadowbox[1]"><img src="images/thumb/eyelash_extension/23.jpg" alt="img23" title="img23" /></a>
                        <a href="images/gallery/eyelash_extension/24.jpg" rel="shadowbox[1]"><img src="images/thumb/eyelash_extension/24.jpg" alt="img24" title="img24" /></a>
                        <a href="images/gallery/eyelash_extension/22.jpg" rel="shadowbox[1]"><img src="images/thumb/eyelash_extension/22.jpg" alt="img22" title="img22" /></a>
                        <a href="images/gallery/eyelash_extension/31.jpg" rel="shadowbox[1]"><img src="images/thumb/eyelash_extension/31.jpg" alt="img31" title="img31" /></a>
                        <a href="images/gallery/eyelash_extension/32.jpg" rel="shadowbox[1]"><img src="images/thumb/eyelash_extension/32.jpg" alt="img32" title="img32" /></a>
                        <a href="images/gallery/eyelash_extension/33.jpg" rel="shadowbox[1]"><img src="images/thumb/eyelash_extension/33.jpg" alt="img33" title="img33" /></a>
                        <a href="images/gallery/eyelash_extension/34.jpg" rel="shadowbox[1]"><img src="images/thumb/eyelash_extension/34.jpg" alt="img34" title="img34" /></a>
                        <a href="images/gallery/eyelash_extension/35.jpg" rel="shadowbox[1]"><img src="images/thumb/eyelash_extension/35.jpg" alt="img35" title="img35" /></a>
                        <a href="images/gallery/eyelash_extension/36.jpg" rel="shadowbox[1]"><img src="images/thumb/eyelash_extension/36.jpg" alt="img36" title="img36" /></a>
                        <a href="images/gallery/eyelash_extension/38.jpg" rel="shadowbox[1]"><img src="images/thumb/eyelash_extension/38.jpg" alt="img38" title="img38" /></a>
                        <a href="images/gallery/eyelash_extension/39.jpg" rel="shadowbox[1]"><img src="images/thumb/eyelash_extension/39.jpg" alt="img39" title="img39" /></a>

                        <a href="images/gallery/eyelash_extension/25.jpg" rel="shadowbox[1]"><img src="images/thumb/eyelash_extension/25.jpg" alt="img25" title="img25" /></a>
                        <a href="images/gallery/eyelash_extension/26.jpg" rel="shadowbox[1]"><img src="images/thumb/eyelash_extension/26.jpg" alt="img26" title="img26" /></a>
                        <a href="images/gallery/eyelash_extension/27.jpg" rel="shadowbox[1]"><img src="images/thumb/eyelash_extension/27.jpg" alt="img27" title="img27" /></a>
                        <a href="images/gallery/eyelash_extension/28.jpg" rel="shadowbox[1]"><img src="images/thumb/eyelash_extension/28.jpg" alt="img28" title="img28" /></a>
                        <a href="images/gallery/eyelash_extension/29.jpg" rel="shadowbox[1]"><img src="images/thumb/eyelash_extension/29.jpg" alt="img29" title="img29" /></a>
                        <a href="images/gallery/eyelash_extension/30.jpg" rel="shadowbox[1]"><img src="images/thumb/eyelash_extension/30.jpg" alt="img30" title="img30" /></a>
                        <a href="images/gallery/eyelash_extension/40.jpg" rel="shadowbox[1]"><img src="images/thumb/eyelash_extension/40.jpg" alt="img40" title="img40" /></a>
                        <a href="images/gallery/eyelash_extension/41.jpg" rel="shadowbox[1]"><img src="images/thumb/eyelash_extension/41.jpg" alt="img41" title="img41" /></a>
                        <a href="images/gallery/eyelash_extension/42.jpg" rel="shadowbox[1]"><img src="images/thumb/eyelash_extension/42.jpg" alt="img42" title="img42" /></a>
						<a href="images/gallery/eyelash_extension/46.jpg" rel="shadowbox[1]"><img src="images/thumb/eyelash_extension/46.jpg" alt="img43" title="img46" /></a>

                        <a href="images/gallery/eyelash_extension/47.jpg" rel="shadowbox[1]"><img src="images/thumb/eyelash_extension/47.jpg" alt="img47" title="img47" /></a>
                        <a href="images/gallery/eyelash_extension/48.jpg" rel="shadowbox[1]"><img src="images/thumb/eyelash_extension/48.jpg" alt="img48" title="img48" /></a>
                        <a href="images/gallery/eyelash_extension/49.jpg" rel="shadowbox[1]"><img src="images/thumb/eyelash_extension/49.jpg" alt="img49" title="img49" /></a>
                        <a href="images/gallery/eyelash_extension/50.jpg" rel="shadowbox[1]"><img src="images/thumb/eyelash_extension/50.jpg" alt="img50" title="img50" /></a>
                        <a href="images/gallery/eyelash_extension/51.jpg" rel="shadowbox[1]"><img src="images/thumb/eyelash_extension/51.jpg" alt="img51" title="img51" /></a>
                        <a href="images/gallery/eyelash_extension/52.jpg" rel="shadowbox[1]"><img src="images/thumb/eyelash_extension/52.jpg" alt="img52" title="img52" /></a>
                        <a href="images/gallery/eyelash_extension/53.jpg" rel="shadowbox[1]"><img src="images/thumb/eyelash_extension/53.jpg" alt="img53" title="img53" /></a>

                        <div class="gallerytitle2">Eye Lash Extension By Julie</div>
						<a href="images/gallery/eyelash_extension/eye_lash_extension_by_julie/8.jpg" rel="shadowbox[1]"><img src="images/thumb/eyelash_extension/eye_lash_extension_by_julie/8a.jpg" alt="img8" title="img8" /></a>
						<a href="images/gallery/eyelash_extension/eye_lash_extension_by_julie/7.jpg" rel="shadowbox[1]"><img src="images/thumb/eyelash_extension/eye_lash_extension_by_julie/7a.jpg" alt="img7" title="img7" /></a>
						<a href="images/gallery/eyelash_extension/eye_lash_extension_by_julie/6.jpg" rel="shadowbox[1]"><img src="images/thumb/eyelash_extension/eye_lash_extension_by_julie/6a.jpg" alt="img6" title="img6" /></a>
                        <a href="images/gallery/eyelash_extension/eye_lash_extension_by_julie/5.jpg" rel="shadowbox[1]"><img src="images/thumb/eyelash_extension/eye_lash_extension_by_julie/5a.jpg" alt="img5" title="img5" /></a>
                        <a href="images/gallery/eyelash_extension/eye_lash_extension_by_julie/4.jpg" rel="shadowbox[1]"><img src="images/thumb/eyelash_extension/eye_lash_extension_by_julie/4a.jpg" alt="img4" title="img4" /></a>
                        <a href="images/gallery/eyelash_extension/eye_lash_extension_by_julie/3.jpg" rel="shadowbox[1]"><img src="images/thumb/eyelash_extension/eye_lash_extension_by_julie/3a.jpg" alt="img3" title="img3" /></a>
                        <a href="images/gallery/eyelash_extension/eye_lash_extension_by_julie/2.jpg" rel="shadowbox[1]"><img src="images/thumb/eyelash_extension/eye_lash_extension_by_julie/2a.jpg" alt="img2" title="img2" /></a>
                        <a href="images/gallery/eyelash_extension/eye_lash_extension_by_julie/1.jpg" rel="shadowbox[1]"><img src="images/thumb/eyelash_extension/eye_lash_extension_by_julie/1a.jpg" alt="img1" title="img1" /></a>

                        <div class="gallerytitle2">Eye Lash Extension Kind Of 60</div>
                        <a href="images/gallery/eyelash_extension/eye_lash_extension_kind_of_60/4.jpg" rel="shadowbox[1]"><img src="images/thumb/eyelash_extension/eye_lash_extension_kind_of_60/4a.jpg" alt="img4" title="img4" /></a>
                        <a href="images/gallery/eyelash_extension/eye_lash_extension_kind_of_60/3.jpg" rel="shadowbox[1]"><img src="images/thumb/eyelash_extension/eye_lash_extension_kind_of_60/3a.jpg" alt="img3" title="img3" /></a>
                        <a href="images/gallery/eyelash_extension/eye_lash_extension_kind_of_60/2.jpg" rel="shadowbox[1]"><img src="images/thumb/eyelash_extension/eye_lash_extension_kind_of_60/2a.jpg" alt="img2" title="img2" /></a>
                        <a href="images/gallery/eyelash_extension/eye_lash_extension_kind_of_60/1.jpg" rel="shadowbox[1]"><img src="images/thumb/eyelash_extension/eye_lash_extension_kind_of_60/1a.jpg" alt="img1" title="img1" /></a>

                        <div class="gallerytitle2">Eye Lash Extension Kind of 90</div>
                        <a href="images/gallery/eyelash_extension/eye_lash_extension_kind_of_90/1.jpg" rel="shadowbox[1]"><img src="images/thumb/eyelash_extension/eye_lash_extension_kind_of_90/1.jpg" alt="img1" title="img1" /></a>
                        <a href="images/gallery/eyelash_extension/eye_lash_extension_kind_of_90/2.jpg" rel="shadowbox[1]"><img src="images/thumb/eyelash_extension/eye_lash_extension_kind_of_90/2.jpg" alt="img2" title="img2" /></a>
                        <a href="images/gallery/eyelash_extension/eye_lash_extension_kind_of_90/3.jpg" rel="shadowbox[1]"><img src="images/thumb/eyelash_extension/eye_lash_extension_kind_of_90/3.jpg" alt="img3" title="img3" /></a>
                        <a href="images/gallery/eyelash_extension/eye_lash_extension_kind_of_90/4.jpg" rel="shadowbox[1]"><img src="images/thumb/eyelash_extension/eye_lash_extension_kind_of_90/4.jpg" alt="img4" title="img4" /></a>
                        <a href="images/gallery/eyelash_extension/eye_lash_extension_kind_of_90/5.jpg" rel="shadowbox[1]"><img src="images/thumb/eyelash_extension/eye_lash_extension_kind_of_90/5.jpg" alt="img5" title="img5" /></a>

                        <a name="hair-section"></a>
                        <div class="gallerytitle2">Hair Section</div>
                        <a href="images/gallery/hair_section/01.jpg" rel="shadowbox[1]"><img src="images/thumb/hair_section/01.jpg" alt="img01" title="img01" /></a>
                        <a href="images/gallery/hair_section/1.jpg" rel="shadowbox[1]"><img src="images/thumb/hair_section/1.jpg" alt="img1" title="img1" /></a>
                        <a href="images/gallery/hair_section/2.jpg" rel="shadowbox[1]"><img src="images/thumb/hair_section/2.jpg" alt="img2" title="img2" /></a>
                        <a href="images/gallery/hair_section/3.jpg" rel="shadowbox[1]"><img src="images/thumb/hair_section/3.jpg" alt="img3" title="img3" /></a>
                        <a href="images/gallery/hair_section/4.jpg" rel="shadowbox[1]"><img src="images/thumb/hair_section/4.jpg" alt="img4" title="img4" /></a>
                        <a href="images/gallery/hair_section/5.jpg" rel="shadowbox[1]"><img src="images/thumb/hair_section/5.jpg" alt="img5" title="img5" /></a>
                        <a href="images/gallery/hair_section/6.jpg" rel="shadowbox[1]"><img src="images/thumb/hair_section/6.jpg" alt="img6" title="img6" /></a>
                        <a href="images/gallery/hair_section/7.jpg" rel="shadowbox[1]"><img src="images/thumb/hair_section/7.jpg" alt="img7" title="img7" /></a>
                        <a href="images/gallery/hair_section/8.jpg" rel="shadowbox[1]"><img src="images/thumb/hair_section/8.jpg" alt="img8" title="img8" /></a>
                        <a href="images/gallery/hair_section/9.jpg" rel="shadowbox[1]"><img src="images/thumb/hair_section/9.jpg" alt="img9" title="img9" /></a>
                        <a href="images/gallery/hair_section/10.jpg" rel="shadowbox[1]"><img src="images/thumb/hair_section/10.jpg" alt="img10" title="img10" /></a>
                        <a href="images/gallery/hair_section/11.jpg" rel="shadowbox[1]"><img src="images/thumb/hair_section/11.jpg" alt="img11" title="img11" /></a>
                        <a href="images/gallery/hair_section/12.jpg" rel="shadowbox[1]"><img src="images/thumb/hair_section/12.jpg" alt="img12" title="img12" /></a>
                        <a href="images/gallery/hair_section/13.jpg" rel="shadowbox[1]"><img src="images/thumb/hair_section/13.jpg" alt="img13" title="img13" /></a>
                        <a href="images/gallery/hair_section/14.jpg" rel="shadowbox[1]"><img src="images/thumb/hair_section/14.jpg" alt="img14" title="img14" /></a>
                        <a href="images/gallery/hair_section/15.jpg" rel="shadowbox[1]"><img src="images/thumb/hair_section/15.jpg" alt="img15" title="img15" /></a>
                        <a href="images/gallery/hair_section/16.jpg" rel="shadowbox[1]"><img src="images/thumb/hair_section/16.jpg" alt="img16" title="img16" /></a>
                        <a href="images/gallery/hair_section/17.jpg" rel="shadowbox[1]"><img src="images/thumb/hair_section/17.jpg" alt="img17" title="img17" /></a>
                        <a href="images/gallery/hair_section/18.jpg" rel="shadowbox[1]"><img src="images/thumb/hair_section/18.jpg" alt="img18" title="img18" /></a>
                        <a href="images/gallery/hair_section/19.jpg" rel="shadowbox[1]"><img src="images/thumb/hair_section/19.jpg" alt="img19" title="img19" /></a>
                        <a href="images/gallery/hair_section/20.jpg" rel="shadowbox[1]"><img src="images/thumb/hair_section/20.jpg" alt="img20" title="img20" /></a>
                        <a href="images/gallery/hair_section/21.jpg" rel="shadowbox[1]"><img src="images/thumb/hair_section/21.jpg" alt="img21" title="img21" /></a>
                        <a href="images/gallery/hair_section/22.jpg" rel="shadowbox[1]"><img src="images/thumb/hair_section/22.jpg" alt="img22" title="img22" /></a>
                        <a href="images/gallery/hair_section/23.jpg" rel="shadowbox[1]"><img src="images/thumb/hair_section/23.jpg" alt="img23" title="img23" /></a>
                        <a href="images/gallery/hair_section/24.jpg" rel="shadowbox[1]"><img src="images/thumb/hair_section/24.jpg" alt="img24" title="img24" /></a>
                        <a href="images/gallery/hair_section/25.jpg" rel="shadowbox[1]"><img src="images/thumb/hair_section/25.jpg" alt="img25" title="img25" /></a>
                        <a href="images/gallery/hair_section/26.jpg" rel="shadowbox[1]"><img src="images/thumb/hair_section/26.jpg" alt="img26" title="img26" /></a>
                        <a href="images/gallery/hair_section/27.jpg" rel="shadowbox[1]"><img src="images/thumb/hair_section/27.jpg" alt="img27" title="img27" /></a>
                        <a href="images/gallery/hair_section/28.jpg" rel="shadowbox[1]"><img src="images/thumb/hair_section/28.jpg" alt="img28" title="img28" /></a>
                        <a href="images/gallery/hair_section/29.jpg" rel="shadowbox[1]"><img src="images/thumb/hair_section/29.jpg" alt="img29" title="img29" /></a>
                        <a href="images/gallery/hair_section/30.jpg" rel="shadowbox[1]"><img src="images/thumb/hair_section/30.jpg" alt="img30" title="img30" /></a>
                        <a href="images/gallery/hair_section/31.jpg" rel="shadowbox[1]"><img src="images/thumb/hair_section/31.jpg" alt="img21" title="img31" /></a>
                        <a href="images/gallery/hair_section/32.jpg" rel="shadowbox[1]"><img src="images/thumb/hair_section/32.jpg" alt="img22" title="img32" /></a>

                        <a name="Pedicure"></a>
                        <div class="gallerytitle2">Pedicure</div>
                        <a href="images/gallery/pedicure/1.jpg" rel="shadowbox[1]"><img src="images/thumb/pedicure/1a.jpg" alt="img1" title="img1" /></a>
                        <a href="images/gallery/pedicure/2.jpg" rel="shadowbox[1]"><img src="images/thumb/pedicure/2a.jpg" alt="img2" title="img2" /></a>
                        <a href="images/gallery/pedicure/3.jpg" rel="shadowbox[1]"><img src="images/thumb/pedicure/3a.jpg" alt="img3" title="img3" /></a>
                        <a href="images/gallery/pedicure/4.jpg" rel="shadowbox[1]"><img src="images/thumb/pedicure/4a.jpg" alt="img4" title="img4" /></a>
                        <a href="images/gallery/pedicure/5.jpg" rel="shadowbox[1]"><img src="images/thumb/pedicure/5a.jpg" alt="img5" title="img5" /></a>
                        <a href="images/gallery/pedicure/6.jpg" rel="shadowbox[1]"><img src="images/thumb/pedicure/6a.jpg" alt="img6" title="img6" /></a>
                        <a href="images/gallery/pedicure/7.jpg" rel="shadowbox[1]"><img src="images/thumb/pedicure/7a.jpg" alt="img7" title="img7" /></a>
                        <a href="images/gallery/pedicure/8.jpg" rel="shadowbox[1]"><img src="images/thumb/pedicure/8a.jpg" alt="img8" title="img8" /></a>
                        <a href="images/gallery/pedicure/9.jpg" rel="shadowbox[1]"><img src="images/thumb/pedicure/9a.jpg" alt="img9" title="img9" /></a>
                        <a href="images/gallery/pedicure/10.jpg" rel="shadowbox[1]"><img src="images/thumb/pedicure/10a.jpg" alt="img10" title="img10" /></a>
                        <a href="images/gallery/pedicure/11.jpg" rel="shadowbox[1]"><img src="images/thumb/pedicure/11a.jpg" alt="img11" title="img11" /></a>
                        <a href="images/gallery/pedicure/12.jpg" rel="shadowbox[1]"><img src="images/thumb/pedicure/12a.jpg" alt="img12" title="img12" /></a>
                        <a href="images/gallery/pedicure/13.jpg" rel="shadowbox[1]"><img src="images/thumb/pedicure/13a.jpg" alt="img13" title="img13" /></a>
                        <a href="images/gallery/pedicure/14.jpg" rel="shadowbox[1]"><img src="images/thumb/pedicure/14a.jpg" alt="img14" title="img14" /></a>
                        <a href="images/gallery/pedicure/15.jpg" rel="shadowbox[1]"><img src="images/thumb/pedicure/15a.jpg" alt="img15" title="img15" /></a>

                        <div class="gallerytitle2">Pink &amp; White Nails by Julie</div>
                        <a href="images/gallery/pink_white/1.jpg" rel="shadowbox[1]"><img src="images/thumb/pink_white/1.jpg" alt="img1" title="img1" /></a>
                        <a href="images/gallery/pink_white/2.jpg" rel="shadowbox[1]"><img src="images/thumb/pink_white/2.jpg" alt="img2" title="img2" /></a>
                        <a href="images/gallery/pink_white/3.jpg" rel="shadowbox[1]"><img src="images/thumb/pink_white/3.jpg" alt="img3" title="img3" /></a>    
                                            
                        <div class="gallerytitle2">Vip Signature Pedicure</div>
                        <a href="images/gallery/pedicure/Vip_Signature_Pedicure/1.jpg" rel="shadowbox[1]"><img src="images/thumb/pedicure/Vip_Signature_Pedicure/1a.jpg" alt="img1" title="img1" /></a>
                        <a href="images/gallery/pedicure/Vip_Signature_Pedicure/2.jpg" rel="shadowbox[1]"><img src="images/thumb/pedicure/Vip_Signature_Pedicure/2a.jpg" alt="img2" title="img2" /></a>
                        <a href="images/gallery/pedicure/Vip_Signature_Pedicure/3.jpg" rel="shadowbox[1]"><img src="images/thumb/pedicure/Vip_Signature_Pedicure/3a.jpg" alt="img3" title="img3" /></a>
                        
                        <a name="make-up"></a>
                        <div class="gallerytitle2">Make Up (Before &amp; After)</div>
                        <a href="images/gallery/make_up/17.jpg" rel="shadowbox[1]"><img src="images/thumb/make_up/17.jpg" alt="img17" title="img17" /></a>
                        <a href="images/gallery/make_up/16.jpg" rel="shadowbox[1]"><img src="images/thumb/make_up/16.jpg" alt="img16" title="img16" /></a>
                        <a href="images/gallery/make_up/15.jpg" rel="shadowbox[1]"><img src="images/thumb/make_up/15.jpg" alt="img15" title="img15" /></a>
                        <a href="images/gallery/make_up/14.jpg" rel="shadowbox[1]"><img src="images/thumb/make_up/14.jpg" alt="img14" title="img14" /></a>
                        <a href="images/gallery/make_up/10.jpg" rel="shadowbox[1]"><img src="images/thumb/make_up/10.jpg" alt="img10" title="img10" /></a>
                        <a href="images/gallery/make_up/11.jpg" rel="shadowbox[1]"><img src="images/thumb/make_up/11.jpg" alt="img11" title="img11" /></a>
                        <a href="images/gallery/make_up/12.jpg" rel="shadowbox[1]"><img src="images/thumb/make_up/12.jpg" alt="img12" title="img12" /></a>
                        <a href="images/gallery/make_up/13.jpg" rel="shadowbox[1]"><img src="images/thumb/make_up/13.jpg" alt="img13" title="img13" /></a>
                        <a href="images/gallery/make_up/1.jpg" rel="shadowbox[1]"><img src="images/thumb/make_up/1.jpg" alt="img1" title="img1" /></a>
                        <a href="images/gallery/make_up/2.jpg" rel="shadowbox[1]"><img src="images/thumb/make_up/2.jpg" alt="img2" title="img2" /></a>
                        <a href="images/gallery/make_up/3.jpg" rel="shadowbox[1]"><img src="images/thumb/make_up/3.jpg" alt="img3" title="img3" /></a>
                        <a href="images/gallery/make_up/4.jpg" rel="shadowbox[1]"><img src="images/thumb/make_up/4.jpg" alt="img4" title="img4" /></a>
                        <a href="images/gallery/make_up/5.jpg" rel="shadowbox[1]"><img src="images/thumb/make_up/5.jpg" alt="img5" title="img5" /></a>
                        <a href="images/gallery/make_up/6.jpg" rel="shadowbox[1]"><img src="images/thumb/make_up/6.jpg" alt="img6" title="img6" /></a>
                        <a href="images/gallery/make_up/7.jpg" rel="shadowbox[1]"><img src="images/thumb/make_up/7.jpg" alt="img7" title="img7" /></a>
                        <a href="images/gallery/make_up/8.jpg" rel="shadowbox[1]"><img src="images/thumb/make_up/8.jpg" alt="img8" title="img8" /></a>
                        <a href="images/gallery/make_up/9.jpg" rel="shadowbox[1]"><img src="images/thumb/make_up/9.jpg" alt="img9" title="img9" /></a>
                        
                        <a href="images/gallery/make_up/28.jpg" rel="shadowbox[1]"><img src="images/thumb/make_up/28.jpg" alt="img28" title="img28" /></a>
                        <a href="images/gallery/make_up/29.jpg" rel="shadowbox[1]"><img src="images/thumb/make_up/29.jpg" alt="img29" title="img29" /></a>
                        <a href="images/gallery/make_up/30.jpg" rel="shadowbox[1]"><img src="images/thumb/make_up/30.jpg" alt="img30" title="img30" /></a>
                        <a href="images/gallery/make_up/31.jpg" rel="shadowbox[1]"><img src="images/thumb/make_up/31.jpg" alt="img31" title="img31" /></a>

                        <div class="gallerytitle2">Eyeliner permanent make up by Julie </div>
                        <a href="images/gallery/55.jpg" rel="shadowbox[1]"><img src="images/thumb/55.jpg" alt="img55" title="img55" /></a>
                        <a href="images/gallery/56.jpg" rel="shadowbox[1]"><img src="images/thumb/56.jpg" alt="img56" title="img56" /></a>
                        <a href="images/gallery/57.jpg" rel="shadowbox[1]"><img src="images/thumb/57.jpg" alt="img57" title="img57" /></a>
                        <a href="images/gallery/58.jpg" rel="shadowbox[1]"><img src="images/thumb/58.jpg" alt="img58" title="img58" /></a>
                        <a href="images/gallery/59.jpg" rel="shadowbox[1]"><img src="images/thumb/59.jpg" alt="img59" title="img59" /></a>
                        <a href="images/gallery/60.jpg" rel="shadowbox[1]"><img src="images/thumb/60.jpg" alt="img60" title="img60" /></a>
                        <a href="images/gallery/61.jpg" rel="shadowbox[1]"><img src="images/thumb/61.jpg" alt="img61" title="img61" /></a>
                        
                         <div class="gallerytitle2"> Before and after done eyeliner permanent make up by Julie </div>
                        <a href="images\gallery\Before_and_after\photo_1.jpg" rel="shadowbox[1]"><img src="images/thumb/Before_and_after/photo_1.jpg" alt="img55" title="img55" /></a>
                        <a href="images\gallery\Before_and_after\photo_2.jpg" rel="shadowbox[1]"><img src="images/thumb/Before_and_after/photo_2.jpg" alt="img56" title="img56" /></a>
                        <a href="images\gallery\Before_and_after\photo_3.jpg" rel="shadowbox[1]"><img src="images/thumb/Before_and_after/photo_3.jpg" alt="img56" title="img56" /></a>

                        <div class="gallerytitle2">Eyebrow permanent make up</div>
                        <a href="images/gallery/eyebrow/1.jpg" rel="shadowbox[1]"><img src="images/thumb/eyebrow/1.jpg" alt="img1" title="img1" /></a>
                        <a href="images/gallery/eyebrow/2.jpg" rel="shadowbox[1]"><img src="images/thumb/eyebrow/2.jpg" alt="img2" title="img2" /></a>
                        <a href="images/gallery/eyebrow/6.jpg" rel="shadowbox[1]"><img src="images/thumb/eyebrow/6.jpg" alt="img6" title="img6" /></a>
                        <a href="images/gallery/eyebrow/7.jpg" rel="shadowbox[1]"><img src="images/thumb/eyebrow/7.jpg" alt="img7" title="img7" /></a>
                        <a href="images/gallery/eyebrow/8.jpg" rel="shadowbox[1]"><img src="images/thumb/eyebrow/8.jpg" alt="img8" title="img8" /></a>
                        <a href="images/gallery/eyebrow/9.jpg" rel="shadowbox[1]"><img src="images/thumb/eyebrow/9.jpg" alt="img9" title="img9" /></a>
                        <a href="images/gallery/eyebrow/11.jpg" rel="shadowbox[1]"><img src="images/thumb/eyebrow/11.jpg" alt="img11" title="img11" /></a>
                        <a href="images/gallery/eyebrow/12.jpg" rel="shadowbox[1]"><img src="images/thumb/eyebrow/12.jpg" alt="img12" title="img12" /></a>
                        <a href="images/gallery/eyebrow/13.jpg" rel="shadowbox[1]"><img src="images/thumb/eyebrow/13.jpg" alt="img13" title="img13" /></a>
                        <a href="images/gallery/eyebrow/14.jpg" rel="shadowbox[1]"><img src="images/thumb/eyebrow/14.jpg" alt="img14" title="img14" /></a>
                        <a href="images/gallery/eyebrow/15.jpg" rel="shadowbox[1]"><img src="images/thumb/eyebrow/15.jpg" alt="img15" title="img15" /></a>
                        <a href="images/gallery/eyebrow/16.jpg" rel="shadowbox[1]"><img src="images/thumb/eyebrow/16.jpg" alt="img16" title="img16" /></a>
                        <a href="images/gallery/eyebrow/17.jpg" rel="shadowbox[1]"><img src="images/thumb/eyebrow/17.jpg" alt="img17" title="img17" /></a>
                        <a href="images/gallery/eyebrow/18.jpg" rel="shadowbox[1]"><img src="images/thumb/eyebrow/18.jpg" alt="img18" title="img18" /></a>
                        <a href="images/gallery/eyebrow/19.jpg" rel="shadowbox[1]"><img src="images/thumb/eyebrow/19.jpg" alt="img19" title="img19" /></a>
                        <a href="images/gallery/eyebrow/20.jpg" rel="shadowbox[1]"><img src="images/thumb/eyebrow/20.jpg" alt="img20" title="img20" /></a>
                        <a href="images/gallery/eyebrow/21.jpg" rel="shadowbox[1]"><img src="images/thumb/eyebrow/21.jpg" alt="img21" title="img21" /></a>
                        <a href="images/gallery/eyebrow/22.jpg" rel="shadowbox[1]"><img src="images/thumb/eyebrow/22.jpg" alt="img22" title="img22" /></a>
                        <a href="images/gallery/eyebrow/23.jpg" rel="shadowbox[1]"><img src="images/thumb/eyebrow/23.jpg" alt="img23" title="img23" /></a>

                        <div class="gallerytitle2">Eyebrow permanent make up (Before &amp; after)</div>
                        <a href="images/gallery/Before_and_after/1.jpg" rel="shadowbox[1]"><img src="images/thumb/Before_and_after/1.jpg" alt="img1" title="img1" /></a>
                        <a href="images/gallery/Before_and_after/2.jpg" rel="shadowbox[1]"><img src="images/thumb/Before_and_after/2.jpg" alt="img2" title="img2" /></a>
                        <a href="images/gallery/Before_and_after/3.jpg" rel="shadowbox[1]"><img src="images/thumb/Before_and_after/3.jpg" alt="img3" title="img3" /></a>
                        <a href="images/gallery/Before_and_after/5.jpg" rel="shadowbox[1]"><img src="images/thumb/Before_and_after/5.jpg" alt="img5" title="img5" /></a>
                        <a href="images/gallery/Before_and_after/6.jpg" rel="shadowbox[1]"><img src="images/thumb/Before_and_after/6.jpg" alt="img6" title="img6" /></a>
                        <a href="images/gallery/Before_and_after/7.jpg" rel="shadowbox[1]"><img src="images/thumb/Before_and_after/7.jpg" alt="img7" title="img7" /></a>
                        <a href="images/gallery/Before_and_after/8.jpg" rel="shadowbox[1]"><img src="images/thumb/Before_and_after/8.jpg" alt="img8" title="img8" /></a>
                        <a href="images/gallery/Before_and_after/9.jpg" rel="shadowbox[1]"><img src="images/thumb/Before_and_after/9.jpg" alt="img9" title="img9" /></a>
                        <a href="images/gallery/Before_and_after/10.jpg" rel="shadowbox[1]"><img src="images/thumb/Before_and_after/10.jpg" alt="img10" title="img10" /></a>
                        <a href="images/gallery/Before_and_after/11.jpg" rel="shadowbox[1]"><img src="images/thumb/Before_and_after/11.jpg" alt="img11" title="img11" /></a>
                        <a href="images/gallery/Before_and_after/12.jpg" rel="shadowbox[1]"><img src="images/thumb/Before_and_after/12.jpg" alt="img12" title="img12" /></a>
                        <a href="images/gallery/make_up/23.jpg" rel="shadowbox[1]"><img src="images/thumb/make_up/23.jpg" alt="img23" title="img23" /></a>
                        <a href="images/gallery/make_up/24.jpg" rel="shadowbox[1]"><img src="images/thumb/make_up/24.jpg" alt="img24" title="img24" /></a>
                        <a href="images/gallery/make_up/21.jpg" rel="shadowbox[1]"><img src="images/thumb/make_up/21.jpg" alt="img21" title="img21" /></a>
                        <a href="images/gallery/make_up/18.jpg" rel="shadowbox[1]"><img src="images/thumb/make_up/18.jpg" alt="img18" title="img18" /></a>
                        <a href="images/gallery/make_up/20.jpg" rel="shadowbox[1]"><img src="images/thumb/make_up/20.jpg" alt="img20" title="img20" /></a>
                        <a href="images/gallery/make_up/22.jpg" rel="shadowbox[1]"><img src="images/thumb/make_up/22.jpg" alt="img22" title="img22" /></a>
                        <a href="images/gallery/make_up/19.jpg" rel="shadowbox[1]"><img src="images/thumb/make_up/19.jpg" alt="img19" title="img19" /></a>
                        
                        <div class="gallerytitle2"> Permanent For Lip Color </div>
                        <a href="images/gallery/lip/01.jpg" rel="shadowbox[1]"><img src="images/thumb/lip/01.jpg" alt="lip img01" title="lip img01" /></a>
                        <a href="images/gallery/lip/02.jpg" rel="shadowbox[1]"><img src="images/thumb/lip/02.jpg" alt="lip img02" title="lip img02" /></a>
                        <a href="images/gallery/lip/03.jpg" rel="shadowbox[1]"><img src="images/thumb/lip/03.jpg" alt="lip img03" title="lip img03" /></a>
                        <a href="images/gallery/lip/04.jpg" rel="shadowbox[1]"><img src="images/thumb/lip/04.jpg" alt="lip img04" title="lip img04" /></a>
                        <a href="images/gallery/lip/05.jpg" rel="shadowbox[1]"><img src="images/thumb/lip/05.jpg" alt="lip img03" title="lip img05" /></a>
                        <a href="images/gallery/lip/06.jpg" rel="shadowbox[1]"><img src="images/thumb/lip/06.jpg" alt="lip img04" title="lip img06" /></a>

                        <div class="gallerytitle2"> Microdebrasion Super Hydrade</div>
						<a href="images\gallery\microdebrasion_super_hydrade\7.jpg" rel="shadowbox[1]"><img src="images/thumb/microdebrasion_super_hydrade/7.jpg" alt="img7" title="img7" /></a>
						<a href="images\gallery\microdebrasion_super_hydrade\8.jpg" rel="shadowbox[1]"><img src="images/thumb/microdebrasion_super_hydrade/8.jpg" alt="img8" title="img8" /></a>
						<a href="images\gallery\microdebrasion_super_hydrade\9.jpg" rel="shadowbox[1]"><img src="images/thumb/microdebrasion_super_hydrade/9.jpg" alt="img9" title="img9" /></a>
						<a href="images\gallery\microdebrasion_super_hydrade\10.jpg" rel="shadowbox[1]"><img src="images/thumb/microdebrasion_super_hydrade/10.jpg" alt="img10" title="img10" /></a>
						
                        <a href="images\gallery\microdebrasion_super_hydrade\5.jpg" rel="shadowbox[1]"><img src="images/thumb/microdebrasion_super_hydrade/5.jpg" alt="img5" title="img5" /></a>
                        <a href="images\gallery\microdebrasion_super_hydrade\6.jpg" rel="shadowbox[1]"><img src="images/thumb/microdebrasion_super_hydrade/6.jpg" alt="img6" title="img6" /></a>
                        <a href="images\gallery\microdebrasion_super_hydrade\1.jpg" rel="shadowbox[1]"><img src="images/thumb/microdebrasion_super_hydrade/1.jpg" alt="img1" title="img1" /></a>
                        <a href="images\gallery\microdebrasion_super_hydrade\2.jpg" rel="shadowbox[1]"><img src="images/thumb/microdebrasion_super_hydrade/2.jpg" alt="img2" title="img2" /></a>
                        <a href="images\gallery\microdebrasion_super_hydrade\3.jpg" rel="shadowbox[1]"><img src="images/thumb/microdebrasion_super_hydrade/3.jpg" alt="img3" title="img3" /></a>
                        <a href="images\gallery\microdebrasion_super_hydrade\4.jpg" rel="shadowbox[1]"><img src="images/thumb/microdebrasion_super_hydrade/4.jpg" alt="img4" title="img4" /></a>

                        <a href="images\gallery\microdebrasion_super_hydrade\11.jpg" rel="shadowbox[1]"><img src="images/thumb/microdebrasion_super_hydrade/11.jpg" alt="img11" title="img11" /></a>
						<a href="images\gallery\microdebrasion_super_hydrade\12.jpg" rel="shadowbox[1]"><img src="images/thumb/microdebrasion_super_hydrade/12.jpg" alt="img12" title="img12" /></a>
						<a href="images\gallery\microdebrasion_super_hydrade\13.jpg" rel="shadowbox[1]"><img src="images/thumb/microdebrasion_super_hydrade/13.jpg" alt="img13" title="img13" /></a>
						<a href="images\gallery\microdebrasion_super_hydrade\14.jpg" rel="shadowbox[1]"><img src="images/thumb/microdebrasion_super_hydrade/14.jpg" alt="img14" title="img14" /></a>
                        <a href="images\gallery\microdebrasion_super_hydrade\15.jpg" rel="shadowbox[1]"><img src="images/thumb/microdebrasion_super_hydrade/15.jpg" alt="img15" title="img15" /></a>
						<a href="images\gallery\microdebrasion_super_hydrade\16.jpg" rel="shadowbox[1]"><img src="images/thumb/microdebrasion_super_hydrade/16.jpg" alt="img16" title="img16" /></a>
						<a href="images\gallery\microdebrasion_super_hydrade\17.jpg" rel="shadowbox[1]"><img src="images/thumb/microdebrasion_super_hydrade/17.jpg" alt="img17" title="img17" /></a>
						<a href="images\gallery\microdebrasion_super_hydrade\18.jpg" rel="shadowbox[1]"><img src="images/thumb/microdebrasion_super_hydrade/18.jpg" alt="img18" title="img18" /></a>

                        <div class="gallerytitle2">Facelifting treatment</div>
                        <a href="images\gallery\facial\1.jpg" rel="shadowbox[1]"><img src="images/thumb/facial/1.jpg" alt="img1" title="img1" /></a>
						<a href="images\gallery\facial\2.jpg" rel="shadowbox[1]"><img src="images/thumb/facial/2.jpg" alt="img2" title="img2" /></a>
						<a href="images\gallery\facial\3.jpg" rel="shadowbox[1]"><img src="images/thumb/facial/3.jpg" alt="img3" title="img3" /></a>
						<a href="images\gallery\facial\4.jpg" rel="shadowbox[1]"><img src="images/thumb/facial/4.jpg" alt="img4" title="img4" /></a>

                        <div class="gallerytitle2">Tinting Waxing Eyebrow</div>
                        <a href="images\gallery\waxing\1.jpg" rel="shadowbox[1]"><img src="images/thumb/waxing/1.jpg" alt="img1" title="img1" /></a>
                        
 -->                        
                    </div>  
                </div>
            </div>
