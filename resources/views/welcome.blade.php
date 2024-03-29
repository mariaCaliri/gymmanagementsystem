<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>GymManagementSystem</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@1,300;1,500;1,900&display=swap"
          rel="stylesheet">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600&display=swap" rel="stylesheet">

    <!--Font awesome-->
    <link rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"
          integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A=="
          crossorigin="anonymous" referrerpolicy="no-referrer"/>
    <!-- Styles -->
    <style>
        body {
            font-family: 'Roboto', sans-serif;
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-weight: normal;
            font-size: 15px;
            letter-spacing: 1.5px;
            color: #888;
            line-height: 30px;
        }

        .container {
            margin-right: auto;
            margin-left: auto;
        }


        @media (min-width: 992px) {
            .container {
                width: 970px;
            }
        }

        @media (min-width: 768px) {
            .container {
                width: 750px;
            }
        }

        .grid-container {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
        }

        @media only screen and (min-width: 240px) and (max-width: 480px) {
            .grid-container {
                display: grid;
                grid-template-columns: 1fr;
            }
        }

        .wrapper {
            display: grid;
            grid-template-columns: 1fr 2fr 1fr;
            justify-items: end;
        }

        .mobile-container {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
        }

        /* header */
        .header-top {
            background: #2c2c2c none repeat scroll 0 0;
            width: 100%;
        }

        @media only screen and (min-width: 240px) and (max-width: 480px) {
            .header-top {
                text-align: center;
            }
        }

        .header-top-left ul li a {
            color: #717171;
            display: inline-block;
            font-size: 18px;
        }

        .header-top-left ul li {
            display: inline-block;
            margin-right: 21px;
        }

        ul {
            list-style: none outside;
            padding: 0;
            margin: 0;
        }

        li {
            line-height: 18px;
            margin-bottom: 0px;
        }

        .sticky {
            position: fixed;
            top: 0;
            width: 100%;
        }

        .fa-brands::before {
            display: inline-block;
            text-rendering: auto;
            -webkit-font-smoothing: antialiased;
        }

        .Pinterest-P::before {
            content: ' \f231';
        }

        .fa-youtube::before {
            content: "\f16a";
        }

        .fa-twitter:before {
            content: "\f099";
        }

        .header-top-right {
            text-align: right;
        }

        @media only screen and (min-width: 240px) and (max-width: 480px) {
            .header-top-right {
                text-align: center;
            !important;
            }
        }

        .single-htr {
            display: inline-block;
            margin-left: 18px;
            position: relative;
            color: white;
            text-decoration: none;
        }

        .single-htr:hover {
            text-decoration: underline;
        }

        .menu {
            background: #1a1a1a none repeat scroll 0 0;
            padding: 12px 0;
        }

        @media only screen and (min-width: 240px) and (max-width: 480px) {
            .menu {
                display: none;
            }
        }

        .menu ul li {
            display: inline-block;
            margin-right: 4px;
            position: relative;
        }

        .menu ul li a {
            color: #f2f2f2;
            display: inline-block;
            font-family: "Open Sans", sans-serif;
            padding: 10px;
        }

        .mobile-menu {
            display: none;
            background: #262626;
        }

        @media only screen and (min-width: 240px) and (max-width: 480px) {
            .mobile-menu {
                display: block;
            }
        }

        #icon-menu {
            cursor: pointer;
            color: #fff;
            text-decoration: none;
        }

        /* hero section */

        .hero-section {
            background: rgba(0, 0, 0, 0) url("{{ asset('img/fitness_model_big.jpg') }}") no-repeat fixed left top / cover;
            height: 603px;
            position: relative;
        }

        @media only screen and (min-width: 240px) and (max-width: 480px) {
            .hero-section {
                background-image: url("{{ asset('img/fitness_model_small.jpg') }}");
                height: 450px;
                background-position: 50% 0;
                background-size: cover;
                background-attachment: scroll;
                background-repeat: no-repeat;
            }
        }

        @media (min-width: 481px) and (max-width: 1024px) {
            .hero-section {
                background-image: url("{{ asset('img/fitness_model_big.jpg') }}");
            }
        }


        .hero-content {
            padding-top: 188px;
            text-align: center;
        }

        .main_title {
            font-family: 'Montserrat', sans-serif;
            color: #fff;
            font-weight: 400;
            font-size: 40px;
            margin-bottom: 6px;
            letter-spacing: 0;
            text-transform: capitalize;
            text-align: center;
        }

        .text {
            color: #fff;
            font-size: 16px;
            line-height: 20px;
            margin-bottom: 27px;
            font-family: 'Montserrat', sans-serif;
            text-align: center;
        }

        #button {
            background: #f13b3e none repeat scroll 0 0;
            border-radius: 25px;
            display: inline-block;
            line-height: 50px;
            padding: 0 25px;
            text-transform: uppercase;
        }

        #subscribe {
            text-decoration: none;
            color: #fff;
            font-family: 'Montserrat', sans-serif;
            font-size: 12px;
            letter-spacing: 0;
            font-weight: bold;
        }

        #button:hover {
            transform: scale(1.3, 1.3);
            -webkit-transform: scale(1.3, 1.3);
            -moz-transform: scale(1.3, 1.3);
            font-weight: bold;
        }

        #navbar a:hover {
            text-decoration: underline;
        }

        /* service area */

        .service-area {
            margin-top: 50px;
        }

        .top-service {
            background: #fff none repeat scroll 0 0;
            box-shadow: 9px 8px 15px -1px rgb(0 0 0 / 25%);
            margin-top: -53px;
            display: grid;
            grid-template-columns: repeat(4, 1fr)

        }

        @media only screen and (min-width: 240px) and (max-width: 480px) {
            .top-service {
                display: none;
            }
        }

        .box {

            width: 150px;
            height: 150px;
            cursor: pointer;
            transition: all 0.3s ease 0s;
        }

        .box:hover {
            background-color: #f13b3e;
            width: 200px;
            height: 200px;
            border-radius: 40px;
        }

        .box-text:hover {
            color: white;
        }

        .top-banner-area {
            background: #f5f5f5 none repeat scroll 0 0;
            padding: 0 0 75px;
            margin-top: 50px;
        }

        .top-banner-left {
            background: #fff url("{{ asset('img/fitness.jpg') }}") no-repeat scroll 92% 0 / contain;
            box-shadow: 7px 7px 5px -5px rgb(0 0 0 / 25%);
            padding: 37px 200px 64px 31px;
            height: 290px;
            margin-right: 5px;
        }

        tbl-h3 {
            color: #6b6560;
            font-size: 42px;
            line-height: 36px;
            margin-bottom: 5px;
        }

        .tbl-h2 {
            color: #f13b3e;
        }

        .top-banner-right {
            background: #fff url("{{ asset('img/bannerleft.jpg') }}") no-repeat scroll 8% 0 / contain;
            box-shadow: 7px 7px 5px -5px rgb(0 0 0 / 25%);
            padding: 25px 30px 25px 200px;
            width: 200px;
            height: 280px;
        }

        tbr-h2, .tbr-h2 span {
            color: #6b6560;
            font-family: "Montserrat", sans-serif;
            font-weight: 700;
            line-height: 34px;
            margin-bottom: 21px;
        }

        .tbr-h2 span {
            color: #ff3b3e;
            font-size: 30px;
        }

        .tbr-p {
            color: #6b6560;
            font-size: 18px;
            line-height: 26px;
            margin-bottom: 24px;
        }

        .tbr-p-phone {
            color: #333333;
            font-weight: 600;
        }

        .second-section {
            background: rgba(0, 0, 0, 0) url("{{ asset('img/model2.jpg') }}") no-repeat fixed left top / cover;
            padding: 157px 0 135px;
        }

        .content {
            display: grid;
            grid-template-columns: repeat(1, 1fr);
        }

        /* expert area */

        .expert-team-area {
            background: #f4f4f4 none repeat scroll 0 0;
            padding: 63px 0 70px;
        }

        .grid-second-container {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 10px;
        }

        @media only screen and (min-width: 240px) and (max-width: 480px) {
            .grid-second-container {
                grid-template-columns: repeat(1, 1fr);
            }
        }
        .row {
            margin-right: -15px;
            margin-left: -15px;
        }
        .expert-team-head {
            margin-bottom: 61px;
            text-align: center;
        }
        .section-title-p {
            color: #525252;
            font-weight: 600;
            letter-spacing: 4px;
            margin-bottom: 5px;
        }
        h2 {
            font-size: 36px;
            line-height: 42px;
            margin-bottom: 0px;
            letter-spacing: 0;
        }
        .single-expert {
            overflow: hidden;
            position: relative;
        }
        .grid-third-container{
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 10px;
        }
        @media only screen and (min-width: 240px) and (max-width: 480px) {
            .grid-third-container {
                grid-template-columns: repeat(1, 1fr);
            }
        }
        .pricing-details {
            margin-bottom: 47px;
        }
        .single-pricing {
            box-shadow: 0 2px 24px 0 rgb(144 144 144 / 20%);
            text-align: center;
        }
        .pricing-head {
            background: #f7f7f7 none repeat scroll 0 0;
            padding: 31px 0 28px;
            position: relative;
        }
        .pricing-head .pricing-price {
            color: #303030;
            font-family: "Open Sans", sans-serif;
            font-size: 38px;
            line-height: 42px;
            margin-bottom: 9px;
        }

        .pricing-head .pricing-price span {
            font-size: 16px;
            font-weight: 600;
            line-height: 20px;
        }
        .pricing-head .pricing-name {
            color: #303030;
            font-family: "Open Sans", sans-serif;
            font-size: 18px;
            font-weight: 300;
            line-height: 22px;
        }
        .pricing-head::after {
            background: #eb3a3d none repeat scroll 0 0;
            bottom: 0;
            content: "";
            height: 3px;
            left: 0;
            margin: auto;
            position: absolute;
            right: 0;
            width: 34px;
        }
        .pricing-body {
            padding: 26px 30px 9px;
            background: white;
        }
        .single-pricing-details span {
            color: #676767;
            display: block;
            font-size: 10px;
            letter-spacing: 0;
            line-height: 12px;
            text-transform: uppercase;
        }
        .buy-now{
            background: #e53c35 none repeat scroll 0 0;
            border-radius: 25px;
            color: #fff;
            display: inline-block;
            font-weight: 700;
            margin-bottom: 6px;
            padding: 5px 42px;
            margin-top: 50px;
            cursor: pointer;
        }




    </style>


</head>
<body>
<div>
    <!--start header-->
    <header>
        <div class="header-top">
            <div class="container">
                <div class="grid-container ">
                    <div class=" header-top-left">
                        <ul>
                            <li><a  href="#"><i class="fa-brands fa-pinterest"></i></a></li>
                            <li><a href="#"> <i class="fa-brands fa-youtube"></i></a></li>
                            <li><a href="#"> <i class="fa-brands fa-twitter"></i></a></li>
                        </ul>
                    </div>
                    <div class="header-top-right">
                        @if (Route::has('login'))
                            <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                                @auth
                                    <a href="{{ url('/dashboard') }}"
                                       class=" single-htr text-sm text-gray-700 dark:text-gray-500 underline">Dashboard</a>
                                @else
                                    <a href="{{ route('login') }}" class=" single-htr text-slate-50">Log
                                        in</a>

                                    @if (Route::has('register'))
                                        <a href="{{ route('register') }}" class="single-htr text-slate-50">Register</a>
                                    @endif
                                @endauth
                            </div>
                        @endif
                    </div>
                </div>
            </div>
            <div class="mobile-menu">
                <div class="container">
                    <div class="mobile-container">
                        <div>MENU</div>
                        <div id="icon-menu"><i class="fa-solid fa-bars"></i></div>
                    </div>
                </div>
            </div>
            <div id="navbar" class="menu">
                <div class="container">
                    <div class="wrapper">
                        <div>
                            <img src="img/logo.png">
                        </div>
                        <div>
                            <nav>
                                <ul>
                                    <li><a>Lorem</a></li>
                                    <li><a>Lorem</a></li>
                                    <li><a>Lorem</a></li>
                                    <li><a>Lorem</a></li>

                                </ul>
                            </nav>
                        </div>
                        <div>
                            <button>Search</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!--main content-->

    <div class="hero-section">
        <div class="container">
            <div class="grid-rows-1">
                <div class="columns-12">
                    <div class="hero-content">
                        <h1 class="main_title">La tua gym app </h1>
                        <p class="text">Maximum Results in Minimum Time, no matter your location </p>
                        <button id="button"><a id="subscribe" href="#">Scegli il programma </a></button>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <!--service area-->
    <div class="service-area">
        <div class="container">
            <div class="top-service">
                <div class="box">
                    Risultati reali
                </div>
                <div class="box">
                    <span class="box-text">Risultati reali </span>
                </div>
                <div class="box">
                    <span class="box-text">Risultati reali </span>
                </div>
                <div class="box">
                    <span class="box-text">Risultati reali </span>
                </div>
            </div>
        </div>

    </div>

    <div class="top-banner-area">
        <div class="container">
            <div class="grid-container">
                <div class="top-banner-left">
                    <div class="top-banner-content">
                        <h3 class="tbl-h3">Iscriviti ora</h3>
                        <h2 class="tbl-h2">GRATIS! </h2>
                    </div>
                </div>
                <div class="top-banner-right">
                    <div class="top-banner-content">
                        <h2 class="tbr-h2">
                            Allenamenti
                            <span>Personalizzati</span>
                        </h2>
                        <p class="tbr-p"> Vienici a trovare o chiamaci al numero
                            <span class="tbr-p-phone">568-898-977</span></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--second section-->
    <div class="second-section">
        <div class="container">

        </div>

    </div>
    <div class="expert-team-area">
        <div class="container">
            <div class="row">
                    <div class="content">
                        <div class="expert-team-head">
                            <p class="section-title-p">Il nostro team</p>
                            <h2>Incontra i <span style="font-weight: bold;color: #1a1a1a">nostri esperti</span></h2>
                        </div>
                    </div>
            </div>
            <div class="grid-second-container">
                <div class="single-expert"><img src="img/expert1.jpg" alt=""> </div>
                <div class="single-expert"><img src="img/expert2.jpg" alt=""> </div>
                <div class="single-expert"><img src="img/expert3.jpg" alt=""> </div>
                <div class="single-expert"><img src="img/expert4.jpg" alt=""> </div>
            </div>
        </div>
    </div>
    <!--pricing area-->
    <div class="plan-area">
        <div class="container">
            <div class="row">
                <div class="content">
                    <div class="expert-team-head">
                        <p class="section-title-p">I nostri piani</p>
                        <h2>I nostri <span style="font-weight: bold;color: #1a1a1a">migliori abbonamenti</span></h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="grid-third-container">
                    <div class="single-pricing">
                        <div class="pricing-head">
                            <h2 class="pricing-price"><span>£</span> 349</h2>
                            <h4 class="pricing-name">BRONZE</h4>
                        </div>
                        <div class="pricing-body">
                            <div class="single-pricing-details">
                                <i class="fa-solid fa-dumbbell"></i>
                                <span>Accesso sala pesi 7 giorni su 7</span>
                            </div>
                            <div class="single-pricing-details">
                                <i class="fa-regular fa-user"></i>
                                <span>Contatto diretto con l' istruttore</span>
                            </div>
                            <div class="single-pricing-details">
                                <i class="fa-regular fa-calendar-check"></i>
                                <span>Accesso ad 1 programma a scelta</span>
                            </div>
                            <div class="single-pricing-details">
                                <i class="fa-regular fa-address-card"></i>
                                <span>Creazione account personale</span>
                            </div>
                            <a class="buy-now">acquista ora</a>
                        </div>
                    </div>

                    <div class="single-pricing">
                        <div class="pricing-head">
                            <h2 class="pricing-price"><span>£</span> 599</h2>
                            <h4 class="pricing-name">SILVER</h4>
                        </div>
                        <div class="pricing-body">
                            <div class="single-pricing-details">
                                <i class="fa-solid fa-dumbbell"></i>
                                <span>Accesso sala pesi 7 giorni su 7</span>
                            </div>
                            <div class="single-pricing-details">
                                <i class="fa-regular fa-user"></i>
                                <span>Contatto diretto con l' istruttore</span>
                            </div>
                            <div class="single-pricing-details">
                                <i class="fa-regular fa-calendar-check"></i>
                                <span>Accesso a tutti i corsi standard</span>
                            </div>
                            <div class="single-pricing-details">
                                <i class="fa-regular fa-address-card"></i>
                                <span>Creazione account personale</span>
                            </div>

                            <a class="buy-now">acquista ora</a>
                        </div>
                    </div>
                    <div class="single-pricing">
                        <div class="pricing-head">
                            <h2 class="pricing-price"><span>£</span> 999</h2>
                            <h4 class="pricing-name">GOLD</h4>
                        </div>
                        <div class="pricing-body">
                            <div class="single-pricing-details">
                                <i class="fa-solid fa-dumbbell"></i>
                                <span>Accesso sala pesi 7 giorni su 7</span>
                            </div>
                            <div class="single-pricing-details">
                                <i class="fa-regular fa-user"></i>
                                <span>Contatto diretto con l' istruttore</span>
                            </div>
                            <div class="single-pricing-details">
                                <i class="fa-regular fa-calendar-check"></i>
                                <span>Accesso illimitato </span>
                            </div>
                            <div class="single-pricing-details">
                                <i class="fa-regular fa-address-card"></i>
                                <span>Creazione account personale</span>
                            </div>
                            <a class="buy-now">acquista ora</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
<script>
    window.onscroll = function () {
        myFunction()
    };

    var navbar = document.getElementById("navbar");
    var sticky = navbar.offsetTop;

    function myFunction() {
        if (window.pageYOffset >= sticky) {
            navbar.classList.add("sticky")
        } else {
            navbar.classList.remove("sticky");
        }
    }
</script>
</body>
</html>
