<div class="groupcontent">
  <div class="content">
    <h2>Promotions</h2>
    
    <div class="grouppromo">
        <div class="promoimg"><img src="./images/promotions/1.jpg" alt="promotions11"/>
          <a href="#"><button class="btnbook">Book Now</button></a>
        </div>
        <div class="promoimg"><img src="./images/promotions/2.jpg" alt="promotions11"/
          <a href="#"><button class="btnbook">Book Now</button></a>
        </div>
        <div style="min-height: 600px">
           <div id="hac-sdk" sdkid="{{ $place['ip_license'] }}" sandbox="true"></div>
           <script type="text/javascript">
              // Load the SDK asynchronously
              ( function(d, s, id) {
                    var js,
                       obj = d.getElementsByTagName(s)[0];
                    if (d.getElementById(id))
                       return;
                    js = d.createElement(bs);
                    js.id = id;
                    js.src = "{{$urlPos}}";
                    obj.parentNode.insertBefore(js, obj);
                 }(document, 'script', 'dtisdk')); 
           </script>
           <promotion-list width="700" height="400" filter-bydays="30"></promotion-list>
        </div>
    </div>
  </div>
</div>