@extends('layout.main')

@section('content')
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&family=Playfair+Display:wght@500;600;700&display=swap"
        rel="stylesheet">


    <style>
        /* =====================================================
       MHM MATÉRIAUX - STYLE PREMIUM M2 DESIGN
    ===================================================== */


        :root {

            --bg: #F5EFE2;
            --bg-soft: #EBDFC7;
            --surface: #FFFCF6;

            --text: #2B231C;
            --text-soft: #625548;

            --brick: #A8462B;
            --brick-dark: #7E3320;

            --gold: #C08A2E;

            --border: rgba(43, 35, 28, .14);

            --shadow:
                0 20px 50px rgba(43, 35, 28, .10);

        }



        /* ==========================
    GLOBAL
    ========================== */


        body {

            background: var(--bg);

        }



        .mhm-container {

            width: min(1180px, 100%);

            margin: auto;

            padding: 0 25px;

        }



        h1,
        h2,
        h3 {

            font-family:
                "Playfair Display",
                serif;

            color: var(--text);

        }



        p {

            font-family:
                "Inter",
                sans-serif;

            color: var(--text-soft);

            line-height: 1.9;

            font-size: 1.12rem;

        }



        .mhm-section {

            padding: 90px 0;

        }




        /* =====================================================
     HERO
    ===================================================== */


        .mhm-hero {


            min-height: 560px;


            display: flex;

            align-items: center;

            justify-content: center;


            text-align: center;


            position: relative;

            overflow: hidden;



            background:

                linear-gradient(135deg,
                 #f6f0e3, #d5cecb);



        }



        .mhm-hero::before {


            content: "";


            position: absolute;


            width: 650px;

            height: 650px;


            background:

                rgba(168, 70, 43, .10);


            border-radius: 50%;


            right: -250px;

            top: -250px;


        }




        .mhm-hero-content {


            position: relative;

            z-index: 2;

        }




        .mhm-tag {


            display: inline-block;


            padding: 12px 32px;


            background: #182c43;


            color: white;


            border-radius: 50px;


            font-family: "Inter";


            font-size: .85rem;


            font-weight: 700;


            letter-spacing: .15em;


            margin-bottom: 30px;


            text-transform: uppercase;


        }





        .mhm-hero h1 {


            font-size:

                clamp(3rem, 7vw, 5rem);


            line-height: 1.05;


            margin: 0;


        }



        .mhm-hero h1 span {


            color: #b58a32;


        }



        .mhm-hero p {


            max-width: 750px;


            margin: 30px auto;


            font-size: 1.3rem;


        }




        .mhm-hero img {


            width: 300px;


            max-width: 80%;


            margin-top: 25px;


            filter:

                drop-shadow(0 15px 30px rgba(0, 0, 0, .18));


        }





   /* ==========================
        GALERIE
        ========================== */

         .cx-container {

            width: min(1180px, 100%);
            margin: auto;
            padding: 0 25px;

        }

        .gallery-section {

            padding: 80px 0;

        }



        .gallery-slider {


            overflow: hidden;

            border-radius: 30px;

            box-shadow: var(--shadow);

            border: 8px solid var(--surface);


        }



        .gallery-slider img {


            width: 100%;

            height: 600px;

            object-fit: cover;


        }



        .swiper-button-next,
        .swiper-button-prev {


            color: white !important;


            background:
                rgba(20, 41, 66, .7);


            width: 45px !important;

            height: 45px !important;

            border-radius: 50%;


        }



        .swiper-button-next::after,
        .swiper-button-prev::after {


            font-size: 18px !important;


        }



        .swiper-pagination-bullet-active {


            background: var(--gold) !important;


        }




        @media(max-width:768px) {


            .mhm-hero {


                min-height: 450px;


            }



            .mhm-hero h1 {


                font-size: 2.8rem;


            }



            .mhm-gallery img {


                height: 350px;


            }


        }
    </style>




    <!-- =====================================
     HERO MHM MATÉRIAUX
    ===================================== -->


    <section class="mhm-hero">


        <div class="mhm-hero-content">



            <span class="mhm-tag">

                MATÉRIAUX • FINITIONS • AMÉNAGEMENT

            </span>




            <h1>

                MHM

                <br>

                <span>
                    MATÉRIAUX
                </span>

            </h1>




            <p>

                Des solutions de matériaux et de finition
                pour accompagner chaque projet de construction,
                de rénovation et d'aménagement intérieur.

            </p>

        </div>


    </section>


 

      <section class="gallery-section">


        <div class="cx-container">


            <div class="gallery-slider swiper init-swiper">


                <script type="application/json" class="swiper-config">

                {
                "loop":true,
                "speed":700,

                "autoplay":{
                "delay":5000
                },

                "slidesPerView":1,


                        "pagination":{

                        "el":".swiper-pagination",
                        "type":"bullets",
                        "clickable":true

                        },


                        "navigation":{

                        "nextEl":".swiper-button-next",
                        "prevEl":".swiper-button-prev"

                        }

                        }

                        </script>


                <div class="swiper-wrapper">


                    <div class="swiper-slide">

                        <img src="{{ 'Mh4.avif' }}">

                    </div>


                    <div class="swiper-slide">

                        <img src="{{ 'Mh2.avif' }}">

                    </div>


                    <div class="swiper-slide">

                        <img src="{{ 'Mh3.avif' }}">

                    </div>


                </div>



                <div class="swiper-button-prev"></div>

                <div class="swiper-button-next"></div>

                <div class="swiper-pagination"></div>



            </div>


        </div>


    </section>

    

    <!-- =====================================
            DESCRIPTION MHM MATÉRIAUX
    ===================================== -->


    <section class="mhm-section" style="background:#FFFCF6;">


        <div class="mhm-container">


            <div class="mhm-intro-box">



                <span class="mhm-tag">

                    À PROPOS DE MHM MATÉRIAUX

                </span>




                <h2>

                    La qualité des matériaux
                    jusqu'aux dernières finitions.

                </h2>




                <p>

                    MHM Matériaux est la filiale du groupe Diaboss
                    spécialisée dans la fourniture de matériaux,
                    produits de finition et solutions d'aménagement
                    pour les projets résidentiels et professionnels.

                    <br><br>

                    Notre mission est d'accompagner chaque chantier
                    avec des produits fiables, esthétiques et adaptés
                    aux exigences de qualité du secteur du bâtiment.

                    <br><br>

                    Du carrelage aux équipements sanitaires,
                    en passant par la peinture et les accessoires,
                    MHM Matériaux apporte les solutions nécessaires
                    pour donner vie aux espaces imaginés.

                </p>



            </div>


        </div>


    </section>







    <!-- =====================================
            EXPERTISES MHM
    ===================================== -->


    <section class="mhm-section">


        <div class="mhm-container">



            <div class="mhm-section-header">



                <span class="mhm-tag">

                    NOS EXPERTISES

                </span>




                <h2>

                    Des solutions complètes
                    pour vos espaces.

                </h2>




                <p>

                    Une sélection de matériaux et de produits
                    pensés pour accompagner chaque étape
                    de vos projets.

                </p>



            </div>







            <div class="mhm-expertise-grid">





                <div class="mhm-expertise-card">


                    <div class="mhm-card-number">

                        01

                    </div>



                    <h3>

                        Carrelage & Revêtements

                    </h3>



                    <p>

                        Solutions pour sols et murs,
                        avec différents styles et finitions
                        adaptés aux espaces modernes.

                    </p>


                </div>








                <div class="mhm-expertise-card">


                    <div class="mhm-card-number">

                        02

                    </div>



                    <h3>

                        Peinture & Décoration

                    </h3>



                    <p>

                        Des peintures professionnelles
                        et décoratives pour valoriser
                        chaque intérieur.

                    </p>


                </div>








                <div class="mhm-expertise-card">


                    <div class="mhm-card-number">

                        03

                    </div>



                    <h3>

                        Sanitaires & Robinetterie

                    </h3>



                    <p>

                        Des équipements modernes
                        alliant confort, design
                        et durabilité.

                    </p>


                </div>








                <div class="mhm-expertise-card">


                    <div class="mhm-card-number">

                        04

                    </div>



                    <h3>

                        Accessoires de finition

                    </h3>



                    <p>

                        Des solutions complémentaires
                        pour finaliser vos projets
                        avec précision.

                    </p>


                </div>






            </div>



        </div>


    </section>








    <style>
        /* =====================================
       INTRO
    ===================================== */


        .mhm-intro-box {


            max-width: 950px;


            margin: auto;


            text-align: center;


        }



        .mhm-intro-box h2 {


            font-size: 3.2rem;


            margin: 30px 0;


        }



        .mhm-section-header {


            text-align: center;


            margin-bottom: 60px;


        }



        .mhm-section-header h2 {


            font-size: 3.2rem;


            margin: 25px 0;


        }




        /* =====================================
       EXPERTISE CARDS
    ===================================== */


        .mhm-expertise-grid {


            display: grid;


            grid-template-columns:

                repeat(2, 1fr);


            gap: 35px;


        }





        .mhm-expertise-card {


            background:

                var(--surface);


            padding: 45px;


            border-radius: 25px;


            border: 1px solid var(--border);


            box-shadow:

                0 15px 40px rgba(43, 35, 28, .07);


            position: relative;


            transition: .35s;


        }





        .mhm-expertise-card:hover {


            transform: translateY(-10px);


            box-shadow:

                0 25px 60px rgba(43, 35, 28, .15);


        }




        .mhm-card-number {


            position: absolute;


            right: 30px;


            top: 10px;


            font-family:

                "Playfair Display",
                serif;


            font-size: 5rem;


            font-weight: 700;


            color:

                rgba(168, 70, 43, .12);


        }





        .mhm-expertise-card h3 {


            font-size: 1.9rem;


            color: var(--brick);


            margin-bottom: 20px;


        }



        .mhm-expertise-card p {


            font-size: 1.05rem;


        }




        @media(max-width:768px) {


            .mhm-intro-box h2,

            .mhm-section-header h2 {


                font-size: 2.2rem;


            }



            .mhm-expertise-grid {


                grid-template-columns: 1fr;


            }



            .mhm-expertise-card {


                padding: 30px;


            }



        }
    </style>

    <!-- =====================================
            MHM DANS LE GROUPE DIABOSS
    ===================================== -->


    <section class="mhm-section" style="background:#F5EFE2;">


        <div class="mhm-container">


            <div class="mhm-group-box">



                <span class="mhm-tag">

                   MHM Matériauxs

                </span>




                <h2>

                    Une expertise intégrée
                    au service de projets complets.

                </h2>




                <p>

                    MHM Matériaux s'inscrit dans l'écosystème
                    du groupe Diaboss en apportant son savoir-faire
                    dans la fourniture de matériaux et les solutions
                    de finition.

                    <br><br>

                    Grâce à la complémentarité des différentes
                    filiales, le groupe accompagne ses clients
                    dans toutes les étapes d'un projet :
                    construction, matériaux, aménagement
                    et valorisation immobilière.

                </p>



            </div>



        </div>


    </section>









    <!-- =====================================
            VISION MHM
    ===================================== -->


    <section class="mhm-section">


        <div class="mhm-container">


            <div class="mhm-vision">





                <span class="mhm-tag">

                    NOTRE VISION

                </span>





                <h2>

                    Des matériaux qui donnent
                    vie aux espaces.

                </h2>






                <p>

                    Chez MHM Matériaux, chaque produit
                    est sélectionné avec exigence afin
                    d'offrir un équilibre entre qualité,
                    esthétique et durabilité.

                    <br><br>

                    Notre ambition est de devenir un partenaire
                    de référence pour les professionnels
                    et particuliers à la recherche de solutions
                    fiables pour leurs projets.

                </p>





            </div>


        </div>


    </section>








    <style>
        /* =====================================
    GROUP BOX
    ===================================== */


        .mhm-group-box {


            background:

                var(--surface);


            padding: 75px;


            border-radius: 30px;


            text-align: center;


            box-shadow:

                0 25px 60px rgba(43, 35, 28, .10);


        }



        .mhm-group-box h2 {


            font-size: 3.2rem;


            max-width: 900px;


            margin: 30px auto;


        }



        .mhm-group-box p {


            max-width: 900px;


            margin: auto;


        }




        .mhm-group-box h3 {


            font-size: 2rem;


            margin-bottom: 35px;


        }





        .mhm-divider {


            height: 1px;


            background: var(--border);


            max-width: 700px;


            margin: 55px auto;


        }





        /* =====================================
    FILIALES BUTTONS
    ===================================== */


        .mhm-filiale-links {


            display: flex;


            justify-content: center;


            flex-wrap: wrap;


            gap: 18px;


        }





        .mhm-filiale-links a {


            text-decoration: none;


            font-family: "Inter";


            font-weight: 600;


            color: var(--text);


            background: #E7C39A;


            padding: 15px 30px;


            border-radius: 50px;


            transition: .3s;


        }





        .mhm-filiale-links a:hover {


            background: var(--brick);


            color: white;


            transform: translateY(-5px);


        }





        /* =====================================
    VISION
    ===================================== */


        .mhm-vision {


            max-width: 950px;


            margin: auto;


            text-align: center;


        }




        .mhm-vision h2 {


            font-size: 3.4rem;


            margin: 30px 0;


        }



        .mhm-vision p {


            font-size: 1.25rem;


        }








        @media(max-width:768px) {



            .mhm-group-box {


                padding: 35px 20px;


            }





            .mhm-group-box h2,

            .mhm-vision h2 {


                font-size: 2.3rem;


            }





            .mhm-filiale-links a {


                width: 100%;


            }



        }
    </style>
@endsection
