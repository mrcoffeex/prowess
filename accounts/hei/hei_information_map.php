<?php
    require '../../config/includes.php';
    require '_session.php';

    $hei_id = clean_string($heiId);

    $long = getHeiLong($heiId);
    $lat = getHeiLat($heiId);

?>

<html>
  <head>
    <title>Marker Labels</title>
    <script src="https://polyfill.io/v3/polyfill.min.js?features=default"></script>

    <style>
        #map {
            height: 100%;
        }

        html,
        body {
            height: 100%;
            margin: 0;
            padding: 0;
        }
    </style>

  </head>
  <body>

    <div id="map"></div>

    <script
      src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDl37fY99htQLQOK1zIErOwsxMiTQ3AxmA&callback=initMap&v=weekly"
      defer
    ></script>

    <script>

        const labels = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
        let labelIndex = 0;

        function initMap() {

            var latitude = <?= $lat ?>;
            var longtitude = <?= $long ?>;

            const bangalore = { lat: latitude, lng: longtitude };
            const map = new google.maps.Map(document.getElementById("map"), {
                zoom: 19,
                center: bangalore,
                styles: [
                            {
                        featureType: "poi",
                        elementType: "labels",
                        stylers: [{ color: "#35373b" }],
                    },
                    {
                        featureType: "label",
                        elementType: "labels.icon",
                        stylers: [{ color: "#35373b" }],
                    },
                    {
                        featureType: "label",
                        elementType: "labels.text.fill",
                        stylers: [{ color: "#35373b" }], // Set the color you want for labels
                    },{
                        featureType: "label",
                        elementType: "labels.text.stroke",
                        stylers: [{ color: "#ffffff" }],
                    },
                ],
            });

            addMarker(bangalore, map);

            // console.log(latitude);
            // console.log(longtitude);
        }

        function addMarker(location, map) {
            new google.maps.Marker({
                position: location,
                label: labels[labelIndex++ % labels.length],
                map: map,
                icon: {
                    url: '../../assets/img/hei.png', // Provide the path to your custom marker image
                    scaledSize: new google.maps.Size(65, 65) // Set the size you want for the marker
                }
            });
        }

        window.initMap = initMap;

    </script>
  </body>
</html>

