<section class="mh-auto">
    <div class="heading">
        <div class="container px-0">
            <h5 class="font-weight-bold p-3">Locate Us</h5>
        </div>
    </div>
    <div class="container pt-4">
        <div class="row">
            <div class="col-12">
                <!--                    <div id="map" style="height: 300px; width: 300px"></div>-->
            </div>
            <div class="col-12"></div>
            <div class="col-12 text-center">
                <dl>
                    <dd>
                        Sant Longowal Instute of Engineering and Technology, Longowal, Sangrur, Punjab (INDIA) - 148 106
                    </dd>
                </dl>
                <hr style="max-width: 500px; background-color: #005cbf;">
                <dl>
                    <dd>
                        Though the weather in SLIET Longowal normally remains
                        pleasant at the end of the month of February
                    </dd>
                </dl>
            </div>
        </div>
    </div>
</section>

<script>
    // Initialize and add the map
    function initMap() {
        var uluru = {lat: -25.344, lng: 131.036};
        var map = new google.maps.Map(
            document.getElementById('map'), {zoom: 4, center: uluru});
        var marker = new google.maps.Marker({position: uluru, map: map});
    }
</script>
<script async defer
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDlKZOpoF-uITMiE2ZR3B-tPbD_K1qNq-0&callback=initMap">
</script>