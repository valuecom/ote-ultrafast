<?php

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OTE Ultrafast</title>
    <link rel="icon" type="image/x-icon" href="./images/favicon.ico">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/extra.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script src="./js/bootstrap.bundle.min.js"></script>
    <script src="./js/script.js"></script>
</head>

<body>

    <?php include "./header.php" ?>

    <main>
        <section class="main-content" >
            <div class="container">
                <div class="row justify-content-center py-5">
                    <div class="col-10 py-5">
                        <h1 class="text-center mt-1 mb-4" >Νομοί & Ευρυζωνικότητα</h1>
                        <p class="text-center" >Εισάγετε διεύθυνση, περιοχή ή Τ.Κ. για να δείτε αν έχει ολοκληρωθεί η κατασκευή της υποδομής στην περιοχή σας</p>
                        <div class="row justify-content-center"  >
                            <input class="map-serach-field" type="text" />
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="main-map" >
            <div id="map"></div>
        </section>
        <section class="search-results" >
            <div class="container pb-5">
                <div class="row justify-content-center py-5 ">
                    <div class="col-12 pb-5">
                        <div class="row pb-5" >
                            <div class="search-area" >
                                <span>1GB</span>
                                <span>Ν. Ηράκλειο <br/> ΑΤΤΙΚΗ</span>
                            </div>
                        </div>
                        <div class="row" >
                            <div class="col-5">
                                <div class="results-left-box">
                                    <p>Η κατασκευή του δικτύου οπτικής Ίνας στην περιοχή έχει ολοκληρωθεί</p>
                                </div>
                            </div>
                            <div class="col-1"></div>
                            <div class="col-6">
                                <div class="results-right-box">
                                    <h2>Οφέλη του UFBB</h2>
                                    <ul>
                                        <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit</li>
                                        <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit</li>
                                        <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit</li>
                                        <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit</li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </section>
    </main>

    <?php include "./footer.php" ?>


 
    <script src="./js/map-styles.js"></script>
    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDlOIG0H9wZ4uj9eIG8KqcNWJn0MP7_Z1k&callback=initMap"></script>
    <script>
        function initMap() {
            map = new google.maps.Map(document.getElementById('map'), {
                    zoom: 8,
                    center: {lat: 39.0742, lng: 21.8243},
                    styles: stylesArray
            });
        }
    </script>

</body>

</html>