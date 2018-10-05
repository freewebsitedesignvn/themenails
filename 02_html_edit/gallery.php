

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
     

        <div id="gallery"  class="gallerybox">
            <?php  for($i=1;$i<=18;$i++){?>
            <a href="https://cdn.dataeglobal.com/images/b2eb7349035754953b57a32e2841bda5/website/menu/15156075930-img_0592.jpg" rel="shadowbox[1]" >
                <img src="https://via.placeholder.com/600x400" alt="salon img01" title="salon img01"/>
            </a>
            <?php } ?>
           
        </div>  
    </div>
</div>
