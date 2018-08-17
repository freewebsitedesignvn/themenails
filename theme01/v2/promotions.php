
            <div class="groupcontent">
                <div class="content">
                    <h2>Promotions</h2>

                    
                    <div class="grouppromo">
                        <div class="promoimg"><img src="http://via.placeholder.com/650x920?text=Promotions+650x920" alt="promotions11"/></div>
                        <a href="" target="_blank" class="print" >Print</a>
                    </div> 
                    <div class="grouppromo">
                        <div class="promoimg"><img src="./images/promotions/promotion11.jpg" alt="promotions11"/></div>
                        <a href="promotion/promotions11.html" target="_blank" class="print">Print</a>
                    </div> 
                    <div class="grouppromo">
                        <div class="promoimg"><img src="./images/promotions/promotion9.jpg" alt="promotions9"/></div>
                        <a href="promotion/promotions9.html" target="_blank" class="print">Print</a>
                    </div>

                    <div class="grouppromo">
                        <div class="promoimg"><img src="./images/promotions/promotion8.jpg" alt="promotions6"/></div>
                        <a href="promotion/promotions8.html" target="_blank" class="print">Print</a>
                    </div> 
                    
                    <div class="grouppromo">
                        <div class="promoimg"><img src="./images/promotions/promotion6.jpg" alt="promotions6"/></div>
                        <a href="promotion/promotions6.html" target="_blank" class="print">Print</a>
                    </div> 

                    <div class="grouppromo">
                        <div class="promoimg"><img src="./images/promotions/promotion5.jpg" alt="promotions5"/></div>
                        <a href="promotion/promotions5.html" target="_blank" class="print">Print</a>
                    </div> 

                     <div class="grouppromo">
                        <div class="promoimg"><img src="./images/promotions/promotion7.jpg" alt="promotions7"/></div>
                        <a href="promotion/promotions7.html" target="_blank" class="print">Print</a>
                    </div> 

                    <div class="grouppromo">
                        <div class="promoimg"><img src="./images/promotions/promotion4.jpg" alt="promotions1"/></div>
                        <a href="promotion/promotions4.html" target="_blank" class="print">Print</a>
                    </div> 
                    <div class="grouppromo">
                        <div class="promoimg"><img src="./images/promotions/promotion3.jpg" alt="promotions1"/></div>
                        <a href="promotion/promotions3.html" target="_blank" class="print">Print</a>
                    </div> 
                    <div class="grouppromo">
                        <div class="promoimg"><img src="./images/promotions/promotion2.jpg" alt="promotions1"/></div>
                        <a href="promotion/promotions2.html" target="_blank" class="print">Print</a>
                    </div> 
                    <div class="grouppromo">
                        <div class="promoimg"><img src="./images/promotions/promotion1.jpg" alt="promotions1"/></div>
                        <a href="promotion/promotions1.html" target="_blank" class="print">Print</a>
                    </div> 
                   <!-- 
                    <div class="grouppromo">
                        <ul class="homeul">
                            <li>NO automatic withdrawal</li>
                            <li>NO membership required</li>
                            <li>Use any time that is convenient for you</li>
                            <li>All services provided by our friendly licensed professionals</li>
                        </ul>
                        Experience a pleasant, relaxing and comfortable environment.
                        <br/><br/>
                        Whether it is full body massage performed by our licensed massage therapist.  A manicure and pedicure done by our licensed providers or even a facial done by our licensed esthetician.
                        <br/><br/>
                        Facials and manicure/pedicure are available to be done in private relaxing rooms
                        <br/><br/>
                        Please see Front Desk to purchase our Special Deal.
                    </div> -->
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