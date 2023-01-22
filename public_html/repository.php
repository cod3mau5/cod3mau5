<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Our Works</title>

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
            background:#12181b;
        }

        .cards {
            display: flex;
            flex-direction: column;
        }

        .grid__container {
            display: flex;
            flex-direction: column;
            padding: 1rem 1.8rem 4rem 1.6rem;
            background: #12181b;
            background-image: url('/img/LogoCompleto.png');
            background-position: center;
            background-repeat: repeat;
            background-size: 50px;
            position: relative;
            height:100%;
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

        .grid__title span{
            padding: 1.5rem 2.5rem;
            background-color: rgba(254, 209, 54, 0.77);
            text-shadow: 2px 2px 5px rgba(21, 255, 36, 1);
            border-radius: 10px;
            width: 40%;
            margin: 0 auto;
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
            font-size: 1.6rem;
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
        .w-100{
            max-width:100%;
        }
    </style>
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
            <h3 class="grid__item-category">e-commerce for fishing reservation</h3>
        </div>
        <!-- Grid item END -->

        <!-- Grid item START -->
        <div class="grid__item">
        <h2 class="grid__item-title">Cabo Wedding Films</h2>
            <p class="grid__item-excerpt">
                <img src="/img/caboweddingfilms.png" class="w-100">
            </p>
            <h3 class="grid__item-category">e-commerce for fishing reservation</h3>
            <p class="grid__item-excerpt"></p>
        </div>
        <!-- Grid item END -->

        <!-- Grid item START -->
        <div class="grid__item">
            <h2 class="grid__item-title">Best Tours Cabo</h2>
            <p class="grid__item-excerpt">
                <img src="/img/Best-Tours-Cabo.png" class="w-100">
            </p>
            <h3 class="grid__item-category">e-commerce for fishing reservation</h3>
            <p class="grid__item-excerpt"></p>
        </div>
        <!-- Grid item END -->

        <!-- Grid item START -->
        <div class="grid__item">
            <h2 class="grid__item-title">Punta Azul</h2>
            <p class="grid__item-excerpt">
                <img src="/img/puntazul.png" class="w-100">
            </p>
            <h3 class="grid__item-category">e-commerce for fishing reservation</h3>
            <p class="grid__item-excerpt"></p>
        </div>
        <!-- Grid item END -->

        <!-- Grid item START -->
        <div class="grid__item">
            <h2 class="grid__item-title">Tequisquiapan</h2>
            <p class="grid__item-excerpt">
                <img src="/img/tequisquiapan.png" class="w-100">
            </p>
            <h3 class="grid__item-category">e-commerce for fishing reservation</h3>
            <p class="grid__item-excerpt"></p>
        </div>
        <!-- Grid item END -->

        <!-- Grid item START -->
        <div class="grid__item">
            <h2 class="grid__item-title">Dra. Laura Báez</h2>
            <p class="grid__item-excerpt">
                <img src="/img/dralaura.png" class="w-100">
            </p>
            <h3 class="grid__item-category">e-commerce for fishing reservation</h3>
            <p class="grid__item-excerpt"></p>
        </div>
        <!-- Grid item END -->

        <!-- Grid item START -->
        <div class="grid__item">
            <h2 class="grid__item-title">Turiscabos</h2>
            <p class="grid__item-excerpt">
                <img src="/img/turiscabos.png" class="w-100">
            </p>
            <h3 class="grid__item-category">e-commerce for fishing reservation</h3>
            <p class="grid__item-excerpt"></p>
        </div>
        <!-- Grid item END -->

        <!-- Grid item START -->
        <div class="grid__item">
            <h2 class="grid__item-title">Mahi Fishing Charters</h2>
            <p class="grid__item-excerpt">
                <img src="/img/mahifishing.png" class="w-100">
            </p>
            <h3 class="grid__item-category">e-commerce for fishing reservation</h3>
        </div>
        <!-- Grid item END -->

        <!-- Grid item START -->
        <div class="grid__item">
            <h2 class="grid__item-title">Polaris Refrigeracion</h2>
            <p class="grid__item-excerpt">
                <img src="/img/polaris.png" class="w-100">
            </p>
            <h3 class="grid__item-category">e-commerce for fishing reservation</h3>
            <p class="grid__item-excerpt"></p>
        </div>
        <!-- Grid item END -->

    </div>
    </section>
</body>
</html>