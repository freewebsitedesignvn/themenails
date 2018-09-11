

    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?v=3.exp"></script>
    <script type="text/javascript">
        function initialize() {
            var bryantPark = new google.maps.LatLng(38.4717301, -77.4114607);
            var panoramaOptions = {
                position: bryantPark,
                pov: {
                    heading: 180,
                    pitch: 0
                },
                zoom: 1
            };
            var myPano = new google.maps.StreetViewPanorama(
      document.getElementById('map-canvas'),
      panoramaOptions);
            myPano.setVisible(true);
        }

        google.maps.event.addDomListener(window, 'load', initialize);

    </script>


            <div class="groupcontent">
                <div class="content">
                    <h2>Location</h2>
                    <div class="groupcontact">
                        <strong>Adress:</strong>123 ABC Street, VA 123 
                        <br/>
                        <strong>Phone:</strong> (123) 456 - 7890
                        <br/>
                        <strong>Fax:</strong> (123) 456 - 7890
                        <br/>
                        <strong>E-mail:</strong> <a href="mailto:abc@gmail.com">abc@gmail.com</a>
                    </div>
                    <div class="maps">
                        <div class="streetviewtitle">Location:</div>
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2345.8770519046416!2d-117.95378818968437!3d33.745904118688756!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80dd27be9256e4fb%3A0xaa6fa85e0281e6d6!2s10161+Bolsa+Ave+%23207A%2C+Westminster%2C+CA+92683!5e0!3m2!1svi!2s!4v1535436330992" width="100%" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>
                    </div> 
                    <!-- <div class="streetview">
                        <div class="streetviewtitle">Street View:</div>
                        <div id="map-canvas" style="height: 600px; width: 100%"></div>
                    </div> -->

                </div>
            </div>
