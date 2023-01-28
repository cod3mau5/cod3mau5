<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Our Works</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Rajdhani:wght@300;400;500;700&display=swap" rel="stylesheet">
    <style>
        html {
            font-family: "Poppins", sans-serif;
            font-size: 62.5%;
            word-spacing: 0.1rem;
            -ms-text-size-adjust: 100%;
            -webkit-text-size-adjust: 100%;
            -moz-osx-font-smoothing: grayscale;
            -webkit-font-smoothing: antialiased;
            box-sizing: border-box;
        }

        *,
        *::before,
        *::after {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        body {
            color: #26282d;
            font-weight: 100;
            line-height: 2.5rem;
            background: #12181b;
        }

        .cards {
            display: flex;
            flex-direction: column;
            background: #12181b;
            background-image: url('/img/LogoCompleto.png');
            background-position: center;
            background-repeat: repeat;
            background-size: 50px;
        }

        .grid__container {
            display: flex;
            flex-direction: column;
            align-items: center;
            padding: 1rem 1.8rem 4rem 1.6rem;
            position: relative;
            height: 100%;
        }

        .grid__container_footer {
            width: 100%;
            height: 100%;
            background-image: url('/img/bg.webp');
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
            padding: 2.5rem 1.5rem;
            color:#fff;
        }

        .grid__container_footer .row {
            max-width: 80%;
            margin: 0 auto;
            margin-top: 2rem;
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            grid-gap: 2rem;
            place-items: center;
        }


        @media (max-width: 768px) {
            .grid__container_footer .row {
                max-width: 100%;
                grid-template-columns: repeat(1, 1fr);
            }

        }

        .grid__container_footer .footer_img{
            width: 66%;
            margin: 0 auto;
        }

        .grid__title {
            margin: 3rem 0 2rem 0;
            font-size: 3rem;
            color: white;
            text-align: center;
            display: flex;
            flex-direction: column;
            justify-content: center;
        }

        .grid__title span {
            padding: 1.5rem 2.5rem;
            background-color: rgba(254, 209, 54, 0.77);
            text-shadow: 2px 2px 5px rgba(21, 255, 36, 1);
            border-radius: 10px;
            width: 40%;
            margin: 0 auto;
        }
        @media (max-width:768px) {
            .grid__title span {
                width: 100%;
            }
        }

        .grid__item {
            margin: 2rem 0;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.38);
            background: #2a2e35;
            border-radius: 0.6rem;
            padding: 2.5rem;
        }

        .grid__item:hover {
            box-shadow: 0 10px 20px rgba(3, 27, 78, 0.1);
        }

        .grid__item-category {
            color: #99a1b3;
            text-transform: uppercase;
            font-weight: 300;
            letter-spacing: 0.2rem;
            word-break: break-word;
            height: 80px;
            margin: 20px 0px 5px 0px;
            font-size: 1.4rem;
            line-height: 1.3;
        }

        .grid__item-title {
            margin-top: 2rem;
            font-size: 2rem;
            font-weight: 600;
            color: #fff;
        }

        .grid__item-excerpt {
            margin-top: 1.5rem;
            font-size: 1.8rem;
            color: #b2becd;
            max-height: 277px;
            overflow-y: scroll;
        }

        .grid__item-button {
            background-color: #D80032;
            padding: .7rem 2rem;
            margin-top: -2px !important;
            float: right;
            text-decoration: none;
            color: #fff;
            font-weight: bolder;
            border-radius: 5px;
            font-size: 1.3rem;
        }

        @media (min-width: 768px) {
            .cards {
                height: auto;
                align-items: center;
            }

            .grid__container {
                display: grid;
                grid-template-columns: repeat(2, 1fr);
                grid-template-rows: repeat(2, minmax(10rem, auto));
                padding: 1rem 4rem 4rem 4rem;
                column-gap: 2rem;
            }

            .grid__title {
                margin-top: 3rem;
                grid-column: 1 / 3;
                font-size: 3rem;
            }
        }

        @media (min-width: 1200px) {
            .card {
                height: 100%;
            }

            .grid__container {
                grid-template-columns: repeat(4, 1fr);
                grid-template-rows: repeat(1, minmax(auto));
            }

            .grid__title {
                margin-top: 3rem;
                grid-column: 1 / 5;
                font-size: 3rem;
            }
        }

        .w-100 {
            max-width: 100%;
        }
        .col{
            padding: 0 2rem;
        }
        .col-info aside:last-of-type{
            margin-top: 1.5rem;
        }
        .col-info ul{
            padding: 0;
        }
        .col-info ul li i,.col-contact ul li{
            color: #fff;
        }
        .col-info ul li{
            list-style: none;
            text-decoration: none;
            display: inline;
            margin: .5rem 1rem;
            font-size: 1.2rem;
        }
        .col-info p{
            font-size: 1.2rem;
        }
        .col-info ul li i{
            font-size: 2.5rem;
        }
        .col-contact ul li{
            list-style: none;
            text-decoration: none;
            margin: .5rem 1rem;
            font-size: 1.2rem;
        }
        .col-contact ul li i{
            font-size: 2rem;
        }
        .widget-title{
            font-family: 'Rajdhani', sans-serif;
            text-transform: uppercase;
            font-size: 2rem;
        }
    </style>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <section class="cards">
        <div class="grid__container">
            <h1 class="grid__title"><span>SEE OUR WORKS</span></h1>

            <!-- Grid item START -->
            <div class="grid__item">
                <h2 class="grid__item-title">Cabo Drivers</h2>
                <p class="grid__item-excerpt">
                    <img src="/img/CABODRIVER.png" class="w-100">
                </p>
                <h3 class="grid__item-category">
                    reservation page for tourist transportation
                </h3>
                <a class="grid__item-button" href="https://www.cabodrivers.com/" target="_BLANK">view site</a>
            </div>
            <!-- Grid item END -->

            <!-- Grid item START -->
            <div class="grid__item">
                <h2 class="grid__item-title">Cabo Wedding Films</h2>
                <p class="grid__item-excerpt">
                    <img src="/img/caboweddingfilms.png" class="w-100">
                </p>
                <h3 class="grid__item-category">
                    page for videographers/photographers
                </h3>
                <a class="grid__item-button" href="https://caboweddingfilms.com/" target="_BLANK">view site</a>
            </div>
            <!-- Grid item END -->

            <!-- Grid item START -->
            <div class="grid__item">
                <h2 class="grid__item-title">Best Tours Cabo</h2>
                <p class="grid__item-excerpt">
                    <img src="/img/Best-Tours-Cabo.png" class="w-100">
                </p>
                <h3 class="grid__item-category">page for booking tours</h3>
                <a class="grid__item-button" href="https://besttourscabo.com/" target="_BLANK">view site</a>
            </div>
            <!-- Grid item END -->

            <!-- Grid item START -->
            <div class="grid__item">
                <h2 class="grid__item-title">Boats Baja</h2>
                <p class="grid__item-excerpt">
                    <img src="/img/boatsbaja2.png" class="w-100">
                </p>
                <h3 class="grid__item-category">Page for boats reservations</h3>
                <a class="grid__item-button" href="https://boatsbaja.com/" target="_BLANK">view site</a>
            </div>
            <!-- Grid item END -->

            <!-- Grid item START -->
            <div class="grid__item">
                <h2 class="grid__item-title">Punta Azul</h2>
                <p class="grid__item-excerpt">
                    <img src="/img/puntazul.png" class="w-100">
                </p>
                <h3 class="grid__item-category">reservation page for tourist transportation</h3>
                <a class="grid__item-button" href="https://www.puntazulcabotransportation.com/" target="_BLANK">view site</a>
            </div>
            <!-- Grid item END -->

            <!-- Grid item START -->
            <div class="grid__item">
                <h2 class="grid__item-title">Tequisquiapan</h2>
                <p class="grid__item-excerpt">
                    <img src="/img/tequisquiapan.png" class="w-100">
                </p>
                <h3 class="grid__item-category">page for booking hotels and tours</h3>
                <a class="grid__item-button" href="https://tequisquiapan.travel/" target="_BLANK">view site</a>
            </div>
            <!-- Grid item END -->

            <!-- Grid item START -->
            <div class="grid__item">
                <h2 class="grid__item-title">Dra. Laura Báez</h2>
                <p class="grid__item-excerpt">
                    <img src="/img/dralaura.png" class="w-100">
                </p>
                <h3 class="grid__item-category">informative page for a doctor</h3>
                <a class="grid__item-button" href="https://www.laurabaezmd.com/" target="_BLANK">view site</a>
            </div>
            <!-- Grid item END -->

            <!-- Grid item START -->
            <div class="grid__item">
                <h2 class="grid__item-title">Turiscabos</h2>
                <p class="grid__item-excerpt">
                    <img src="/img/turiscabos.png" class="w-100">
                </p>
                <h3 class="grid__item-category">reservation page for tourist transportation</h3>
                <a class="grid__item-button" href="https://turiscabos.com/reservaciones/views/index.php" target="_BLANK">view site</a>
            </div>
            <!-- Grid item END -->

            <!-- Grid item START -->
            <div class="grid__item">
                <h2 class="grid__item-title">Mahi Fishing Charters</h2>
                <p class="grid__item-excerpt">
                    <img src="/img/mahifishing.png" class="w-100">
                </p>
                <h3 class="grid__item-category">e-commerce for fishing reservation</h3>
                <a class="grid__item-button" href="https://mahifishingcharters.com/" target="_BLANK">view site</a>
            </div>
            <!-- Grid item END -->

            <!-- Grid item START -->
            <div class="grid__item">
                <h2 class="grid__item-title">Polaris Refrigeracion</h2>
                <p class="grid__item-excerpt">
                    <img src="/img/polaris.png" class="w-100">
                </p>
                <h3 class="grid__item-category">informative page for a refrigeration company</h3>
                <a class="grid__item-button" href="https://polarisrefrigeracion.com/" target="_BLANK">view site</a>
            </div>
            <!-- Grid item END -->

        </div>

        <div class="grid__container_footer">
            <div class="row">

                <div class="col col-info">
                    <aside id="text-2" class="widget widget_text">
                        <div class="textwidget">
                            <p>
                                <img decoding="async" 
                                        alt="" 
                                        data-src="/img/logo_footer.png" 
                                        class="footer_img" 
                                        src="/img/logo_footer.png"
                                        height="auto">
                                <noscript>
                                    <img decoding="async" 
                                        class="footer_img" 
                                        src="/img/logo_footer.png" 
                                        alt="" 
                                        height="auto"/>
                                </noscript>
                            </p>
                            <p>codemau5. Programming studio that offers services worldwide.</p>
                        </div>
                    </aside>
                    <aside id="ci-socials-2" class="widget widget_ci-socials">
                        <ul class="list-social-icons">
                            <li>
                                <a href="https://www.facebook.com/codemau5/" class="social-icon" target="_blank"><i class="fab fa-facebook"></i></a>
                            </li>
                            <li>
                                <a href="https://twitter.com/codemau5" class="social-icon" target="_blank"><i class="fab fa-twitter"></i></a>
                            </li>
                            <li>
                                <a href="https://www.tiktok.com/@codemau5" class="social-icon" target="_blank"><i class="fab fa-tiktok"></i></a>
                            </li>
                            <li>
                                <a href="https://t.me/cod3mau5" class="social-icon" target="_blank"><i class="fab fa-telegram"></i></a>
                            </li>
                        </ul>
                    </aside>
                </div>

                <div class="col col-contact">
                    <aside id="ci-contact-2" class="widget widget_ci-contact">
                        <h3 class="widget-title">Contact</h3>
                        <ul class="ci-contact-widget-items">
                            <li class="ci-contact-widget-item"><i class="fab fa-whatsapp"></i> +52 624 264 0804</li>
                            <li class="ci-contact-widget-item"><i class="fas fa-envelope"></i> info@codemau5.com</li>
                            <li class="ci-contact-widget-item">
                                <i class="fas fa-map-marker-alt"></i> 
                                Los mecanicos, Col. Lomas Altas, Cabo San Lucas, B.C.S., México C.P. 23472
                            </li>
                        </ul>
                    </aside>
                </div>

                <div class="col col-starofservice">
                    <div style="width:273px;height:153px;text-align:center;background-color:white;border-radius:5px;padding:10px;text-decoration:none;font-family:AxiformaBook, Helvetica, Arial, Sans-serif;display:block">
                        <a href="\\starofservice.com" target="_blank">
                            <img style="margin:0 auto;background-color:inherit" src="https://cdn-aurora.starofservice.com/static/media/logo.54acc468.svg" />
                        </a>
                        <div style="font-size:20px;letter-spacing:1.5px;color:hsl(192, 20%, 10%);overflow-wrap:break-word;background-color:inherit;width:100%;text-align:center;margin-top:10px;overflow:hidden;white-space:nowrap;text-overflow:ellipsis">
                            Codemau5
                        </div>
                        <div style="margin-top:10px;background-color:inherit" id="dynamic-part">
                            <div>
                                <div style="display:inline-block;margin:0 10px">
                                    <div style="display:inline-block"><img style="width:12px;height:12px;margin:0 2px" src="https://cdn-aurora.starofservice.com/static/media/star-filled.c3505e36.svg" /></div>
                                    <div style="display:inline-block"><img style="width:12px;height:12px;margin:0 2px" src="https://cdn-aurora.starofservice.com/static/media/star-filled.c3505e36.svg" /></div>
                                    <div style="display:inline-block"><img style="width:12px;height:12px;margin:0 2px" src="https://cdn-aurora.starofservice.com/static/media/star-filled.c3505e36.svg" /></div>
                                    <div style="display:inline-block"><img style="width:12px;height:12px;margin:0 2px" src="https://cdn-aurora.starofservice.com/static/media/star-filled.c3505e36.svg" /></div>
                                    <div style="display:inline-block"><img style="width:12px;height:12px;margin:0 2px" src="https://cdn-aurora.starofservice.com/static/media/star-empty.7c5cac56.svg" /></div>
                                </div><span style="color:hsl(0, 0%, 62%)">1 opiniones</span>
                            </div>
                        </div>
                        <div style="width:80%;border-top:1px solid hsl(0, 0%, 97%);margin-top:10px"></div>
                        <a style="display:inline-block;color:hsl(219, 93%, 63%);margin-top:10px;background-color:inherit" href="https://www.starofservice.mx/profesional/programacion-web/cabo-san-lucas/284629956/codemau5" target="_blank" rel="noopener noreferrer">StarOfService Top Pro 2023</a>
                    </div>
                </div>

            </div>
        </div>

    </section>

    <script src="https://www.starofservice.mx/widgets/scripts?id=d8e7c84e-706f-3ab8-8e27-46d54697f199&widget_type=reviews-widget&locale=es"></script>
</body>

</html>