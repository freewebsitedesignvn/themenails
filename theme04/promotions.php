<style>
    .proimg img{width:100%;}
    .print{
        background: rgba(188,91,27,.7);color: white;padding: 10px 20px;border-radius: 15px;font-weight: bold;
    }
</style>
<div class="groupcontent groupcontent_pages">
    <div class="content">
      <h2>Promotions:</h2>
      <?php for($i=1;$i<=7;$i++){?>
        <div class="grouppro">
          <div class="proimg">
              <img alt="" src="images/promotions/<?php echo $i?>.jpg">
          </div>
          <center><a href="" target="_blank" class="print" >Print</a></center>
        </div>
      <?php } ?>
    </div>
  </div>

  <script type="text/javascript">
                $(document).ready(function() {
                    $(".promoimg").each(function(index, el) {
                        var link=$(this).children().attr('src');
                        console.log(link);
                        $(this).next().attr('onclick', "PrintImage('"+link+"'); return false;");
                        // $(this).next().attr('onclick', "PrintImage('http://via.placeholder.com/650x920?text=Promotions+650x920'); return false;");
                    });    
                });
                function ImagetoPrint(source) {
                    return "<html><head><script>function step1(){\n" +
                            "setTimeout('step2()', 10);}\n" +
                            "function step2(){window.print();window.close()}\n" +
                            "</scri" + "pt></head><body onload='step1()'>\n" +
                            "<img src='" + source + "' /></body></html>";
                }
                function PrintImage(source) {
                    Pagelink = "about:blank";
                    var pwa = window.open(Pagelink, "_new");
                    pwa.document.open();
                    pwa.document.write(ImagetoPrint(source));
                    pwa.document.close();
                }
            </script>