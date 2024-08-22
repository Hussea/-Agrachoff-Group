<!DOCTYPE html>
<html lang="ar">
<head>
    <meta charset="UTF-8">
    <title>Яндекс Карты</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <script src="https://api-maps.yandex.ru/2.1/?lang=ar_AA" type="text/javascript"></script>
    <style>
        #map {
            width: 70%;
            height: 70vh;
        }
    </style>
</head>
<a class="btn btn-primary" href="index.php" role="button">обратно</a>
<body>
    <div id="map"></div>
    <script>
        ymaps.ready(init);

function init() {
    var map = new ymaps.Map("map", {
        center: [55.76, 37.64], 
        zoom: 10
    });

    map.events.add('click', function (e) {
        var coords = e.get('coords'); 
        getStreetName(coords);
    });
}

function getStreetName(coords) {
    var geocodeService = new ymaps.GeoObjectCollection();
    ymaps.geocode(coords).then(function (res) {
        var firstGeoObject = res.geoObjects.get(0);
        var address = firstGeoObject.getAddressLine();
        alert("координаты: " + coords + "\n улицы: " + address);
    });
}

    </script>
</body>
</html>
