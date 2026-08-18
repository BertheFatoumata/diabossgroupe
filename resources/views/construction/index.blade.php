@extends('layout.main')

@section('content')
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&family=Playfair+Display:wght@500;600;700&display=swap"
        rel="stylesheet">


    <style>
        /* ==================================
           DIABOSS CONSTRUCTION
           STYLE PREMIUM GROUPE
        ================================== */

        :root {

            --bg: #F5EFE2;
            --bg-soft: #EBDFC7;
            --surface: #FFFCF6;

            --text: #2B231C;
            --text-soft: #625548;

            --navy: #1E3A5F;
            --navy-dark: #142942;

            --gold: #C9982F;
            --gold-light: #E9C878;

            --border: rgba(30, 58, 95, .15);

            --shadow:
                0 20px 50px rgba(20, 41, 66, .12);

        }


        /* ==========================
        GLOBAL
        ========================== */


        body {

            background: var(--bg);
            font-family: "Inter", sans-serif;

        }


        h1,
        h2,
        h3,
        h4,
        h5 {

            font-family: "Playfair Display", serif;
            color: var(--text);

        }


        p {

            font-size: 1.12rem;
            line-height: 1.9;
            color: var(--text-soft);

        }



        .cx-container {

            width: min(1180px, 100%);
            margin: auto;
            padding: 0 25px;

        }



        .cx-section {

            padding: 90px 0;

        }



        /* ==========================
        HERO
        ========================== */


        .cx-hero {


            min-height: 600px;

            display: flex;
            align-items: center;
            justify-content: center;

            text-align: center;

            position: relative;
            overflow: hidden;


            background:

                linear-gradient(135deg,
                    var(--navy-dark),
                    var(--navy));


        }



        .cx-hero::before {


            content: "";

            position: absolute;

            width: 650px;
            height: 650px;

            background:
                rgba(201, 152, 47, .18);

            border-radius: 50%;

            right: -250px;
            top: -250px;


        }




        .cx-hero-content {

            position: relative;
            z-index: 2;

            max-width: 900px;

        }



        .cx-tag {


            display: inline-block;

            padding: 12px 35px;

            border-radius: 50px;

            background:
                rgba(201, 152, 47, .20);


            border: 1px solid rgba(233, 200, 120, .5);


            color: var(--gold-light);

            font-size: .85rem;

            font-weight: 700;

            letter-spacing: .15em;

            margin-bottom: 35px;


        }




        .cx-hero h1 {


            font-size:
                clamp(3rem, 7vw, 5rem);


            line-height: 1.05;

            color: white;

            margin: 0;


        }




        .cx-hero h1 span {

            color: var(--gold-light);

        }



        .cx-hero p {


            max-width: 800px;

            margin: 35px auto;

            color:
                rgba(255, 255, 255, .8);

            font-size: 1.3rem;


        }



        .cx-logo {


            width: 220px;

            max-width: 70%;

            margin-top: 25px;


            filter:
                drop-shadow(0 15px 30px rgba(0, 0, 0, .3));

        }




        /* ==========================
        TRUST
        ========================== */


        .trust-strip {

            background: white;

            border-bottom:
                1px solid var(--border);


        }


        .trust-container {


            display: flex;

            justify-content: center;

            flex-wrap: wrap;

            gap: 25px 50px;

            padding: 30px 20px;


        }


        .trust-item {


            font-weight: 600;

            color: var(--navy-dark);

            font-size: 1rem;


        }




        /* ==========================
        GALERIE
        ========================== */


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



        /* ==========================
        MOBILE
        ========================== */


        @media(max-width:768px) {


            .cx-hero {

                min-height: 450px;

            }


            .cx-hero h1 {

                font-size: 2.8rem;

            }


            .cx-hero p {

                font-size: 1.05rem;

            }



            .gallery-slider img {

                height: 350px;

            }


        }

        .md-tag {


            display: inline-block;


            padding: 12px 32px;


            background: #1e3a5f;


            color: white;


            border-radius: 50px;


            font-family: "Inter";


            font-size: .85rem;


            font-weight: 700;


            letter-spacing: .15em;


            margin-bottom: 30px;


        }


        .md-hero {


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



        .md-hero:before {


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



        .md-hero-content {


            position: relative;

            z-index: 2;


        }


        .md-hero h1 {


            font-size:

                clamp(3rem, 7vw, 5rem);


            line-height: 1.05;


            margin: 0;


        }



        .md-hero h1 span {


            color: #b58a32;


        }




        .md-hero p {


            max-width: 750px;


            margin: 30px auto;


            font-size: 1.3rem;


        }



        .md-hero img {


            width: 300px;


            max-width: 80%;


            margin-top: 25px;


            filter:

                drop-shadow(0 15px 30px rgba(0, 0, 0, .18));


        }
    </style>



    <!-- ==========================
        HERO DIABOSS CONSTRUCTION
        ========================== -->


    <section class="md-hero">


        <div class="md-hero-content">


            <span class="md-tag">

                FILIALE DU GROUPE DIABOSS • BTP & INFRASTRUCTURES


            </span>



            <h1>

                DIABOSS

                <br>

                <span>

                    CONSTRUCTION

                </span>


            </h1>




            <p>

                Des ouvrages solides et durables,
                du gros œuvre aux travaux publics,
                avec une expertise adaptée aux réalités
                du Mali.

            </p>


        </div>


    </section>



    <!-- ==========================
        TRUST STRIP
        ========================== -->


    <section class="trust-strip">


        <div class="trust-container">


            <div class="trust-item">
                🏗️ Expertise BTP reconnue
            </div>


            <div class="trust-item">
                👷 Équipe qualifiée
            </div>


            <div class="trust-item">
                📅 Respect des délais
            </div>


            <div class="trust-item">
                🌱 Solutions durables
            </div>


        </div>


    </section>





    <!-- ==========================
        GALERIE
        ========================== -->


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

                        <img src="{{ 'C01.avif' }}">

                    </div>


                    <div class="swiper-slide">

                        <img src="{{ 'C02.avif' }}">

                    </div>


                    <div class="swiper-slide">

                        <img src="{{ 'C03.avif' }}">

                    </div>


                </div>



                <div class="swiper-button-prev"></div>

                <div class="swiper-button-next"></div>

                <div class="swiper-pagination"></div>



            </div>


        </div>


    </section>

    <!-- ===============================
             PRESENTATION DIABOSS CONSTRUCTION
        ================================ -->


    <section class="cx-section" style="background:#FFFCF6;">


        <div class="cx-container">


            <div class="intro-box">


                <span class="cx-tag" style="color:white;background:#1e3a5f;">

                    À PROPOS DE DIABOSS CONSTRUCTION
                </span>




                <h2>

                    Construire avec expertise,
                    rigueur et engagement.

                </h2>




                <p>

                    Diaboss Construction est la filiale du groupe Diaboss
                    spécialisée dans les travaux de construction,
                    le gros œuvre, les infrastructures et le suivi de chantier.

                    <br><br>

                    Notre mission est d'accompagner les projets immobiliers
                    et professionnels en proposant des solutions fiables,
                    durables et adaptées aux réalités du terrain.

                    <br><br>

                    Grâce à une équipe qualifiée et une organisation rigoureuse,
                    nous réalisons des ouvrages respectant les exigences
                    de qualité, de sécurité et de performance.

                </p>



            </div>


        </div>


    </section>





    <!-- ===============================
             NOTRE APPROCHE
        ================================ -->


    <section class="cx-section">


        <div class="cx-container">



            <div class="section-header">


                <span class="cx-tag" style="color:white;background:#1e3a5f;">

                    NOTRE MÉTHODE

                </span>




                <h2>

                    Une approche maîtrisée
                    à chaque étape du projet.

                </h2>



                <p>

                    De l'étude initiale jusqu'à la livraison,
                    chaque étape est suivie avec précision.

                </p>



            </div>





            <div class="approach-grid">



                <div class="approach-card">


                    <div class="number">

                        01

                    </div>


                    <h3>

                        Étude des besoins

                    </h3>


                    <p>

                        Analyse du projet, du terrain et des contraintes
                        techniques afin de proposer une solution adaptée.

                    </p>


                </div>






                <div class="approach-card">


                    <div class="number">

                        02

                    </div>


                    <h3>

                        Planification & exécution

                    </h3>


                    <p>

                        Organisation du chantier, coordination des équipes
                        et suivi permanent pour garantir qualité et délais.

                    </p>


                </div>






                <div class="approach-card">


                    <div class="number">

                        03

                    </div>


                    <h3>

                        Livraison

                    </h3>


                    <p>

                        Remise d'ouvrages solides, fonctionnels et conformes
                        aux attentes de nos clients.

                    </p>


                </div>



            </div>


        </div>


    </section>






    <!-- ===============================
             POURQUOI NOUS CHOISIR
        ================================ -->


    <section class="cx-section" style="background:#F5EFE2;">



        <div class="cx-container">



            <div class="section-header">


                <span class="cx-tag" style="color:white;background:#1e3a5f;">

                    NOS ENGAGEMENTS

                </span>



                <h2>

                    Pourquoi choisir
                    Diaboss Construction ?

                </h2>


            </div>





            <div class="advantages-grid">





                <div class="advantage-card">


                    <div class="adv-icon">

                        🏗️

                    </div>


                    <h3>

                        Expertise locale et professionnelle

                    </h3>


                    <p>

                        Une maîtrise des métiers du bâtiment
                        adaptée aux besoins des projets au Mali.

                    </p>


                </div>








                <div class="advantage-card">


                    <div class="adv-icon">

                        👷

                    </div>


                    <h3>

                        Équipe qualifiée et engagée

                    </h3>


                    <p>

                        Des professionnels mobilisés pour garantir
                        la qualité et la réussite des ouvrages.

                    </p>


                </div>







                <div class="advantage-card">


                    <div class="adv-icon">

                        📅

                    </div>


                    <h3>

                        Respect des délais

                    </h3>


                    <p>

                        Une organisation efficace permettant
                        un meilleur suivi des travaux.

                    </p>


                </div>







                <div class="advantage-card">


                    <div class="adv-icon">

                        🌱

                    </div>


                    <h3>

                        Solutions adaptées et durables

                    </h3>


                    <p>

                        Des réalisations pensées pour répondre
                        aux contraintes techniques et environnementales.

                    </p>


                </div>




            </div>


        </div>


    </section>






    <style>
        /* ===============================
           PRESENTATION
        ================================ */


        .intro-box {


            max-width: 950px;

            margin: auto;

            text-align: center;


        }



        .intro-box h2 {


            font-size: 3.2rem;

            margin: 35px 0;


        }




        .section-header {


            text-align: center;

            margin-bottom: 60px;


        }



        .section-header h2 {


            font-size: 3.2rem;

            margin: 30px 0;


        }



        .section-header p {


            max-width: 700px;

            margin: auto;


        }



        /* ===============================
           APPROCHE
        ================================ */


        .approach-grid {


            display: grid;

            grid-template-columns: repeat(3, 1fr);

            gap: 35px;


        }



        .approach-card {


            background: #FFFCF6;

            padding: 45px;

            border-radius: 25px;

            border: 1px solid rgba(30, 58, 95, .12);

            box-shadow:

                0 15px 40px rgba(20, 41, 66, .08);


            transition: .3s;


        }


        .approach-card:hover {


            transform: translateY(-8px);

            box-shadow:

                0 25px 60px rgba(20, 41, 66, .15);


        }



        .number {


            font-family: "Playfair Display";

            font-size: 4rem;

            font-weight: 700;

            color: rgba(30, 58, 95, .12);


        }



        .approach-card h3 {


            color: #1E3A5F;

            font-size: 1.8rem;

            margin-bottom: 20px;


        }




        /* ===============================
           AVANTAGES
        ================================ */



        .advantages-grid {


            display: grid;

            grid-template-columns: repeat(2, 1fr);

            gap: 35px;


        }



        .advantage-card {


            background: #FFFCF6;

            padding: 45px;

            border-radius: 25px;

            box-shadow:

                0 15px 40px rgba(20, 41, 66, .08);

            border: 1px solid rgba(30, 58, 95, .12);

            transition: .3s;


        }




        .advantage-card:hover {


            transform: translateY(-10px);


        }



        .adv-icon {


            font-size: 2.5rem;

            margin-bottom: 20px;


        }



        .advantage-card h3 {


            color: #1E3A5F;

            font-size: 1.7rem;


        }




        @media(max-width:768px) {


            .intro-box h2,
            .section-header h2 {


                font-size: 2.3rem;


            }



            .approach-grid,
            .advantages-grid {


                grid-template-columns: 1fr;


            }



            .approach-card,
            .advantage-card {


                padding: 30px;


            }



        }
    </style>

    <!-- ===============================
             SERVICES DIABOSS CONSTRUCTION
        ================================ -->


    <section class="cx-section">


        <div class="cx-container">



            <div class="section-header">


                <span class="cx-tag" style="color:white;background:#1e3a5f;">

                    NOTRE SAVOIR-FAIRE

                </span>



                <h2>

                    Des solutions complètes
                    pour vos projets.

                </h2>



                <p>

                    Du gros œuvre aux infrastructures,
                    Diaboss Construction accompagne chaque étape
                    de vos réalisations.

                </p>



            </div>





            <div class="services-grid">



                <div class="service-card">


                    <div class="service-number">

                        01

                    </div>


                    <h3>

                        Gros œuvre

                    </h3>


                    <p>

                        Fondations, structures, maçonnerie
                        et élévation des bâtiments.

                    </p>


                </div>






                <div class="service-card">


                    <div class="service-number">

                        02

                    </div>


                    <h3>

                        Travaux publics

                    </h3>


                    <p>

                        Voiries, réseaux divers et ouvrages
                        d'infrastructure.

                    </p>


                </div>






                <div class="service-card">


                    <div class="service-number">

                        03

                    </div>


                    <h3>

                        Réalisation d'infrastructures

                    </h3>


                    <p>

                        Aménagement de sites et équipements
                        pour projets publics et privés.

                    </p>


                </div>






                <div class="service-card">


                    <div class="service-number">

                        04

                    </div>


                    <h3>

                        Suivi de chantier

                    </h3>


                    <p>

                        Coordination technique et contrôle
                        de la qualité jusqu'à la livraison.

                    </p>


                </div>



            </div>


        </div>


    </section>






    <!-- ===============================
             GROUPE DIABOSS
        ================================ -->


    <section class="cx-section" style="background:#F5EFE2;">



        <div class="cx-container">


            <div class="group-box">



                <span class="cx-tag" style="color:white;background:#1e3a5f;">

                    DIABOSS CONSTRUCTION

                </span>




                <h2>

                    Une expertise globale
                    au service de vos projets.

                </h2>




                <p>

                    Diaboss Construction évolue au sein du groupe Diaboss,
                    un écosystème regroupant plusieurs expertises :
                    construction, immobilier, matériaux, emploi et solutions
                    d'accompagnement.

                    <br><br>

                    Cette complémentarité permet au groupe d'offrir
                    une approche complète pour accompagner les projets,
                    de la réalisation aux finitions.

                </p>



            </div>


        </div>


    </section>







    <!-- ===============================
             VISION
        ================================ -->


    <section class="cx-section">


        <div class="cx-container">


            <div class="vision-box">


                <span class="cx-tag" style="color:white;background:#1e3a5f;">

                    NOTRE VISION

                </span>



                <h2>

                    Construire aujourd'hui
                    les ouvrages de demain.

                </h2>



                <p>

                    Chez Diaboss Construction, chaque projet représente
                    un engagement envers la qualité, la durabilité
                    et la satisfaction de nos clients.

                    <br><br>

                    Notre ambition est de participer au développement
                    d'infrastructures modernes et adaptées aux besoins
                    des générations futures.

                </p>



            </div>


        </div>


    </section>








    <!-- ===============================
             CTA FINAL
        ================================ -->


    <section class="cx-section">


        <div class="cx-container">


            <div class="cta-box">



                <h2>

                    Un projet de construction en tête ?

                </h2>




                <p>

                    Parlons de vos besoins et construisons
                    ensemble une solution adaptée.

                </p>




                <a href="#contact">

                    Contactez-nous

                </a>



            </div>


        </div>


    </section>









    <style>
        /* ===============================
         SERVICES
        ================================ */


        .services-grid {


            display: grid;

            grid-template-columns: repeat(2, 1fr);

            gap: 35px;


        }



        .service-card {


            background: #FFFCF6;

            padding: 45px;

            border-radius: 25px;

            border: 1px solid rgba(30, 58, 95, .12);

            box-shadow:

                0 15px 40px rgba(20, 41, 66, .08);

            transition: .3s;


        }



        .service-card:hover {


            transform: translateY(-8px);


        }



        .service-number {


            font-family: "Playfair Display";

            font-size: 4rem;

            color: rgba(30, 58, 95, .15);


        }



        .service-card h3 {


            font-size: 1.8rem;

            color: #1E3A5F;


        }




        /* ===============================
         GROUP
        ================================ */


        .group-box {


            background: #FFFCF6;

            padding: 75px;

            border-radius: 30px;

            text-align: center;

            box-shadow:

                0 25px 60px rgba(20, 41, 66, .10);


        }



        .group-box h2 {


            font-size: 3.2rem;

            margin: 35px 0;


        }



        .group-box p {


            max-width: 900px;

            margin: auto;


        }



        .divider {


            height: 1px;

            background: rgba(30, 58, 95, .15);

            margin: 55px auto;

            max-width: 700px;


        }



        .group-box h3 {


            font-size: 2rem;

            margin-bottom: 35px;


        }



        .filiale-links {


            display: flex;

            justify-content: center;

            flex-wrap: wrap;

            gap: 18px;


        }



        .filiale-links a {


            background: #E7C39A;

            padding: 15px 30px;

            border-radius: 50px;

            text-decoration: none;

            font-weight: 700;

            color: #142942;

            transition: .3s;


        }



        .filiale-links a:hover {


            background: #1E3A5F;

            color: white;


        }





        /* ===============================
         VISION
        ================================ */



        .vision-box {


            max-width: 950px;

            margin: auto;

            text-align: center;


        }



        .vision-box h2 {


            font-size: 3.4rem;

            margin: 35px 0;


        }



        .vision-box p {


            font-size: 1.25rem;


        }





        /* ===============================
         CTA
        ================================ */



        .cta-box {


            background:

                linear-gradient(135deg,
                    #142942,
                    #1E3A5F);


            padding: 70px 40px;

            border-radius: 30px;

            text-align: center;


        }



        .cta-box h2 {


            color: white;

            font-size: 3rem;


        }



        .cta-box p {


            color: rgba(255, 255, 255, .8);

            font-size: 1.2rem;


        }



        .cta-box a {


            display: inline-block;

            margin-top: 25px;

            padding: 16px 40px;

            background: #C9982F;

            color: #142942;

            border-radius: 50px;

            font-weight: 700;

            text-decoration: none;


        }




        @media(max-width:768px) {


            .services-grid {

                grid-template-columns: 1fr;

            }



            .group-box {

                padding: 35px 20px;

            }



            .group-box h2,
            .vision-box h2,
            .cta-box h2 {

                font-size: 2.3rem;

            }



            .filiale-links a {

                width: 100%;

            }



        }
    </style>
@endsection
