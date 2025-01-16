<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="style.css">
    <script src="script.js"></script>
    <meta charset="UTF-8">
    <title>Hava Durumu</title>
</head>
<body>
    <div class="overlay" id="overlayid">
    </div>
    <div class="ustbar">
        
        <a id="home" class="active1" href="index.php">
            <svg fill="currentcolor" xmlns="http://www.w3.org/2000/svg" id="Layer_1" data-name="Layer 1" viewBox="0 0 24 24" width="16" height="16"><path d="M13.892,24c-1.96,0-3.837-.008-4.491-.026a3.749,3.749,0,0,1-.834-.121,3.5,3.5,0,0,1-.449-6.588,6.366,6.366,0,0,1,.057-2.732,6,6,0,0,1,11.368-.855c.136.326.763.469.763.469h0a5.014,5.014,0,0,1,3.559,6,4.951,4.951,0,0,1-3.7,3.7,5.283,5.283,0,0,1-1.064.131C18.229,23.99,16.013,24,13.892,24ZM8.987,9.755a7.93,7.93,0,0,1,7.178-1.476,1.928,1.928,0,0,0,1.493-.21L20.105,6.64A1,1,0,1,0,19,4.972l-2.641,1.75c-.554.281-.843-.442-1.27-.717l1.843-3.146a1,1,0,0,0-1.727-1.011L13.384,4.963A6.137,6.137,0,0,0,12,4.577V1a1,1,0,0,0-2,0V4.58a6.5,6.5,0,0,0-1.326.363L6.831,1.834A1,1,0,0,0,5.11,2.854L6.944,5.947a6.718,6.718,0,0,0-.951.934l-3.1-1.814a1,1,0,1,0-1.01,1.725L4.962,8.6A6.206,6.206,0,0,0,4.575,10H1a1,1,0,0,0,0,2H4.576a6.425,6.425,0,0,0,.2.882.5.5,0,0,1-.3.54L1.768,15.034a1,1,0,0,0,1.023,1.719l2.59-1.513a1.739,1.739,0,0,0,.83-1.094A7.981,7.981,0,0,1,8.987,9.755Z"/></svg>
            Hava Durumu</a>
        <input type="search" id="aramakutusu" onkeydown="aramaYapma(this)" placeholder="Aramak için yazın..">
        <button type="button" id="aramabuton" onclick="aramaYapma(this)">
            <svg width="25px" height="25px" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg" fill="none">
                <path fill="#e4e4e4" fill-rule="evenodd" d="M4 9a5 5 0 1110 0A5 5 0 014 9zm5-7a7 7 0 104.2 12.6.999.999 0 00.093.107l3 3a1 1 0 001.414-1.414l-3-3a.999.999 0 00-.107-.093A7 7 0 009 2z"/>
            </svg>
        </button>
        <a id="about" href="about.php">
            <svg fill="currentcolor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="16" height="16"><path d="M12,24A12,12,0,1,0,0,12,12.013,12.013,0,0,0,12,24ZM12,5a1.5,1.5,0,1,1-1.5,1.5A1.5,1.5,0,0,1,12,5Zm-1,5h1a2,2,0,0,1,2,2v6a1,1,0,0,1-2,0V12H11a1,1,0,0,1,0-2Z"/></svg>
        </a>
    </div>
    <div class="altbar">
        <div class="solbar">
            <div id="solbar-image">

            </div>
            <div>
                <span id="solbar-sehir">--------</span>
            </div>
            <div>
                <span id="solbar-derece">--°C</span>
            </div>
            <div>
                <span id="solbar-havadurumu">--------------</span>
            </div>
            <div id="solbar-airpressure-all">
                <div id="solbar-airpressure-img">
                    <img src="icons/air-pressure.png">
                </div>
                <span id="solbar-airpressure-txt">
                    Hava Basıncı
                </span>
                <span id="solbar-airpressure-value">

                </span>

            </div>
            <div id="solbar-hissicak-all">
                <div id="solbar-hissicak-img">
                    <img src="icons/thermometer.png">
                </div>
                <span id="solbar-hissicak-txt">
                    Hissedilen<br>
                    Sıcaklık
                </span>
                <span id="solbar-hissicak-value">

                </span>
            </div>
            <div id="solbar-nem-all">
                <div id="solbar-nem-img">
                    <img src="icons/humidity.png">
                </div>
                <span id="solbar-nem-txt">
                    Bağıl Nem
                </span>
                <span id="solbar-nem-value">

                </span>
            </div>
            <div id="solbar-uv-all">
                <div id="solbar-uv-img">
                    <img src="icons/uv.png">
                </div>
                <span id="solbar-uv-txt">
                    UV Seviyesi/<br>
                    Endeksi
                </span>
                <span id="solbar-uv-value">

                </span>

            </div>
            <div id="solbar-vis-all">
                <div id="solbar-vis-img">
                    <img src="icons/visibility.png">
                </div>
                <span id="solbar-vis-txt">
                    Görüş Mesafesi
                </span>
                <span id="solbar-vis-value">

                </span>
            </div>
            <div id="solbar-wind-all">
                <div id="solbar-wind-img">
                    <img src="icons/windspeed.png">
                </div>
                <span id="solbar-wind-txt">
                    Rüzgar Hızı
                </span>
                <span id="solbar-wind-value">

                </span>
            </div>
            <div id="solbar-winddir-all">
                <div id="solbar-winddir-img">
                    <img src="icons/compass.png">
                </div>
                <span id="solbar-winddir-txt">
                    Rüzgar Yönü
                </span>
                <span id="solbar-winddir-value">

                </span>
            </div>
        </div>
        <div class="sagbar" id="sb">
        </div>
        <?php
        if(array_key_exists("sb-remove-button", $_POST)){
            $json = file_get_contents("favoriler.json");
            $json_data = json_decode($json, true);
            $json_data = array_merge(array_diff($json_data, array($_POST["sb-remove-button"])));
            $json_final = json_encode($json_data, JSON_UNESCAPED_UNICODE);
            file_put_contents("favoriler.json", $json_final);
            unset($_POST["sb-remove-button"]);
        }

        if(array_key_exists("sb-add-button", $_POST)){
            $json = file_get_contents("favoriler.json");
            $json_data = json_decode($json, true);
            $json_data = array_merge($json_data, array($_POST["sb-add-button"]));
            $json_final = json_encode($json_data, JSON_UNESCAPED_UNICODE);
            file_put_contents("favoriler.json", $json_final);
            unset($_POST["sb-add-button"]);
        }
        ?>

    </div>
</body>
</html>