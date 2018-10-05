<div class="groupcontent">
  <div class="content">
    <h2>Coupons</h2>
    <div class="section mcb-section" style="padding-top:80px; padding-bottom:20px; background-color:" data-parallax="3d">
      <div class="section_wrapper mcb-section-inner">
        <div class="wrap mcb-wrap one  valign-top clearfix" style="background-color: white;">
          <div id="hac-sdk" sdkid="{{ $place['ip_license'] }}" sandbox="true"></div>
          <book-appointment width="100%" height="400" filter-bydays="30"></book-appointment>
          <script type="text/javascript">
          ( function(d, s, id) {
              var js,
                obj = d.getElementsByTagName(s)[0];
              if (d.getElementById(id))
                return;
              js = d.createElement(s);
              js.id = id;
              js.src = "{{$urlPos}}";
              obj.parentNode.insertBefore(js, obj);
            }(document, 'script', 'dtisdk')); 
          </script>
        </div>
      </div>
    </div>
  </div>
</div>