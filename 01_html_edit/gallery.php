

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
                 

                    <div id="gallery">
                        <?php  for($i=1;$i<=18;$i++){?>
                        <a href="images/gallery/<?php echo $i?>.jpg" rel="shadowbox[1]"><img src="images/gallery/<?php echo $i?>.jpg" alt="salon img01" title="salon img01" /></a>
                        <?php } ?>
                       
                    </div>  
                </div>
            </div>
