@extends('layout.main')

@section('content')
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&family=Playfair+Display:wght@600;700;800&display=swap"
        rel="stylesheet">


    <style>
        /* =================================================
       DIABOSS & BAM DEPOT
       PREMIUM STYLE - M2 DESIGN FAMILY
    ================================================= */


        :root {

            --navy: #1E3A5F;
            --navy-dark: #142942;
            --navy-soft: #2E4E78;


            --gold: #C9982F;
            --gold-light: #E9C878;


            --earth: #A85A32;
            --earth-light: #D89B70;


            --cream: #F7F4EC;
            --cream-dark: #EFE8D6;


            --white: #FFFCF6;


            --text: #263238;
            --text-soft: #667085;


            --border: rgba(30, 58, 95, .12);



            --shadow:
                0 20px 50px rgba(20, 41, 66, .12);



            --shadow-hover:
                0 30px 70px rgba(20, 41, 66, .18);



            --radius: 22px;


            --container: 1200px;

        }






        /* ==========================
     GLOBAL
    ========================== */


        body {

            background: var(--cream);

            font-family: "Inter", sans-serif;

            color: var(--text);

        }



        .container {

            width: min(100%, var(--container));

            margin: auto;

            padding: 0 25px;

        }



        .section {

            padding: 90px 0;

        }




        h1,
        h2,
        h3,
        h4 {


            font-family: "Playfair Display", serif;

            color: var(--navy-dark);


        }



        p {

            color: var(--text-soft);

            font-size: 1.12rem;

            line-height: 1.9;

        }





        /* ==========================
     HERO BAM
    ========================== */


        .bam-hero {


            position: relative;


            padding: 100px 0;


            background:


                radial-gradient(700px 400px at 85% -10%,
                    rgba(201, 152, 47, .35),
                    transparent 60%),



                linear-gradient(135deg,
                    var(--navy-dark),
                    var(--navy),
                    var(--navy-soft));


            overflow: hidden;


        }



        .bam-hero::after {


            content: "";


            position: absolute;


            inset: 0;


            background:


                repeating-linear-gradient(45deg,
                    rgba(255, 255, 255, .04) 0 2px,
                    transparent 2px 25px);


        }



        .bam-hero-inner {


            position: relative;


            z-index: 2;


            display: grid;


            grid-template-columns: 1.2fr .8fr;


            align-items: center;


            gap: 70px;


        }




        .bam-hero-text {


            max-width: 650px;


        }




        .bam-eyebrow {


            display: inline-flex;


            padding: 12px 28px;


            border-radius: 50px;


            background:


                rgba(168, 90, 50, .25);



            border:

                1px solid rgba(216, 155, 112, .45);



            color: var(--gold-light);



            font-size: .85rem;


            font-weight: 800;


            letter-spacing: .12em;


            text-transform: uppercase;


            margin-bottom: 25px;


        }




        .bam-hero h1 {


            font-size:

                clamp(3rem, 6vw, 4.8rem);


            color: white;


            line-height: 1.05;


            margin-bottom: 25px;


        }




        .bam-hero h1 span {


            color: var(--gold-light);


        }




        .bam-hero p {


            color: rgba(255, 255, 255, .82);


            max-width: 650px;


            font-size: 1.25rem;


            margin-bottom: 35px;


        }





        .bam-btn {


            display: inline-flex;


            padding: 16px 35px;


            background: var(--gold);


            color: var(--navy-dark);


            border-radius: 12px;


            font-weight: 800;


            text-decoration: none;


            transition: .3s;


        }



        .bam-btn:hover {


            background: var(--gold-light);


            transform: translateY(-4px);


        }







        /* LOGO BOX */


        .bam-logo-box {


            background:

                rgba(255, 255, 255, .08);



            border:

                1px solid rgba(255, 255, 255, .15);



            padding: 45px;


            border-radius: 30px;


            text-align: center;


            backdrop-filter: blur(10px);


        }




        .bam-logo-box img {


            width: 230px;


            max-width: 100%;


            margin-bottom: 25px;


        }





        .bam-logo-box span {


            display: block;


            color: var(--gold-light);


            font-size: .85rem;


            font-weight: 700;


            letter-spacing: .12em;


            text-transform: uppercase;


        }






        /* ==========================
     TRUST STRIP
    ========================== */


        .trust-strip {


            background: white;


            border-bottom: 1px solid var(--border);


        }



        .trust-strip-inner {


            display: flex;


            justify-content: center;


            gap: 40px;


            padding: 25px 0;


            flex-wrap: wrap;


        }



        .trust-item {


            font-weight: 700;


            color: var(--navy-dark);


        }





        @media(max-width:900px) {


            .bam-hero-inner {


                grid-template-columns: 1fr;


                text-align: center;


            }



            .bam-hero p {


                margin-left: auto;

                margin-right: auto;


            }



        }


        @media(max-width:768px) {


            .bam-hero {


                padding: 70px 0;


            }



            .bam-hero h1 {


                font-size: 2.7rem;


            }



            .bam-logo-box {


                padding: 30px;


            }



            .trust-strip-inner {


                gap: 15px;


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
radial-gradient(circle at 80% 25%, rgba(201, 152, 47, .12),
 transparent 34%), linear-gradient(135deg, #f8f5ee 0%, #f1ede3 58%, #e9e1d1 100%);


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
     HERO
    ========================== -->


       <section class="md-hero">


        <div class="md-hero-content">


            <span class="md-tag">

                Matériaux • Production 

            </span>



            <h1>

                DIABOSS

                <br>

                <span>

                    &amp; BAM DÉPÔT

                </span>


            </h1>




            <p>

               
                    Production de matériaux de construction,
                    fabrication de briques de terre compressée
                    et solutions adaptées aux besoins des chantiers.

            </p>


        </div>


    </section>





    <!-- ==========================
     TRUST
    ========================== -->


    <div class="trust-strip">


        <div class="container trust-strip-inner">


            <div class="trust-item">

                Briques BTC

            </div>



            <div class="trust-item">

                Matériaux BTP

            </div>




            <div class="trust-item">

                Production locale

            </div>




            <div class="trust-item">

                Solutions chantier

            </div>



        </div>


    </div>

    <!-- ==========================
         DETAILS BAM DEPOT
    ========================== -->


    <section id="bam-details" class="section">


        <div class="container">


            <!-- GALERIE -->


            <div class="listing-gallery">


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

                            <img src="{{('B1.jpeg')}}">

                        </div>



                        <div class="swiper-slide">

                            <img src="{{('B2.jpeg')}}">

                        </div>




                        <div class="swiper-slide">

                            <img src="{{('B3.webp')}}">

                        </div>



                        <div class="swiper-slide">

                            <img src="{{('B4.jpeg')}}">

                        </div>



                    </div>




                    <div class="swiper-button-prev"></div>

                    <div class="swiper-button-next"></div>

                    <div class="swiper-pagination"></div>



                </div>


            </div>





        </div>


    </section>





    <style>
        /* ==========================
       GALERIE
        ========================== */


        .listing-gallery {


            margin-top: -40px;


            position: relative;


            z-index: 5;


        }




        .gallery-slider {


            overflow: hidden;


            border-radius: 25px;


            background: white;


            padding: 8px;


            box-shadow: var(--shadow);


        }



        .gallery-slider img {


            width: 100%;


            height: 560px;


            object-fit: cover;


            border-radius: 18px;


        }




        .swiper-button-next,
        .swiper-button-prev {


            width: 50px !important;

            height: 50px !important;


            background: rgba(20, 41, 66, .75);


            border-radius: 50%;


            color: white !important;


        }



        .swiper-button-next::after,
        .swiper-button-prev::after {


            font-size: 18px !important;


        }



        .swiper-pagination-bullet-active {


            background: var(--gold) !important;


        }






        /* ==========================
     PRESENTATION
    ========================== */


        .presentation {


            text-align: center;


            max-width: 900px;


            margin: auto;


        }




        .section-label {


            display: inline-flex;


            align-items: center;


            gap: 12px;


            font-size: .85rem;


            font-weight: 800;


            letter-spacing: .12em;


            text-transform: uppercase;


            color: var(--earth);



            margin-bottom: 20px;


        }



        .section-label::before {


            content: "";


            width: 35px;


            height: 2px;


            background: var(--gold);


        }




        .presentation h2 {


            font-size: 3.2rem;


            margin-bottom: 30px;


        }




        .presentation p {


            font-size: 1.18rem;


        }






        /* ==========================
         APPROCHE
       ========================== */



        .approach-grid {


            display: grid;


            grid-template-columns: repeat(3, 1fr);


            gap: 30px;


            margin-top: 60px;


        }




        .approach-card {


            background: white;


            border-radius: 25px;


            padding: 40px;


            border: 1px solid var(--border);


            box-shadow: 0 10px 30px rgba(20, 41, 66, .06);


            transition: .35s;


        }




        .approach-card:hover {


            transform: translateY(-10px);


            box-shadow: var(--shadow-hover);


        }




        .approach-number {


            font-family: "Playfair Display";


            font-size: 3rem;


            font-weight: 800;


            color: rgba(168, 90, 50, .20);


            margin-bottom: 20px;


        }




        .approach-card h3 {


            font-size: 1.6rem;


            margin-bottom: 15px;


            color: var(--navy-dark);


        }




        .approach-card p {


            font-size: 1rem;


        }





        @media(max-width:900px) {


            .approach-grid {


                grid-template-columns: 1fr;


            }



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
    </style>






    <!-- ==========================
     PRESENTATION SECTION
    ========================== -->


    <section class="section">


        <div class="container">


            <div class="presentation">



               

<span class="cx-tag" style="color:white;background:#1e3a5f;">

                    À PROPOS 

                </span>


                <h2>

                    Des matériaux locaux pour construire durablement

                </h2>




                <p>

                    DIABOSS & BAM DÉPÔT accompagne les projets
                    de construction grâce à une production locale
                    de matériaux fiables et adaptés aux réalités
                    du terrain.

                </p>



                <p>

                    Notre mission est de faciliter l'accès aux matériaux
                    de qualité tout en participant au développement
                    d'une construction plus responsable en Afrique.

                </p>



            </div>




        </div>


    </section>






    <!-- ==========================
     APPROCHE SECTION
    ========================== -->


    <section class="section" style="background:#EFE8D6;">



        <div class="container">



            <div class="presentation">


               <span class="cx-tag" style="color:white;background:#1e3a5f;">

                    NOTRE MÉTHODE

                </span>



                <h2>

                    Une production maîtrisée à chaque étape

                </h2>



            </div>





            <div class="approach-grid">





                <div class="approach-card">


                    <div class="approach-number">

                        01

                    </div>


                    <h3>

                        Production contrôlée

                    </h3>



                    <p>

                        Fabrication de matériaux selon
                        des exigences de qualité et de résistance.

                    </p>



                </div>







                <div class="approach-card">


                    <div class="approach-number">

                        02

                    </div>


                    <h3>

                        Solutions adaptées

                    </h3>



                    <p>

                        Des produits pensés pour répondre
                        aux besoins réels des chantiers.

                    </p>



                </div>







                <div class="approach-card">


                    <div class="approach-number">

                        03

                    </div>


                    <h3>

                        Accompagnement chantier

                    </h3>



                    <p>

                        Une disponibilité permettant
                        de soutenir efficacement les projets.

                    </p>



                </div>






            </div>



        </div>


    </section>

    <!-- ==========================
     SERVICES
    ========================== -->


    <section class="section">


        <div class="container">



            <div class="presentation">


               
                <span class="cx-tag" style="color:white;background:#1e3a5f;">

                    NOS ENGAGEMENTS

                </span>




                <h2>

                    Les solutions proposées par BAM DÉPÔT

                </h2>




                <p>

                    Des solutions complètes pour accompagner
                    les professionnels du bâtiment et les projets
                    du Groupe Diaboss.

                </p>


            </div>







            <div class="services-grid">





                <div class="service-card">


                    <div class="service-icon">

                        🧱

                    </div>



                    <h3>

                        Fabrication BTC

                    </h3>



                    <p>

                        Production de briques de terre compressée,
                        une solution écologique, résistante et adaptée
                        aux constructions modernes.

                    </p>


                </div>








                <div class="service-card">


                    <div class="service-icon">

                        🏗️

                    </div>



                    <h3>

                        Parpaings & blocs

                    </h3>



                    <p>

                        Fabrication de matériaux solides
                        destinés aux différents travaux
                        de construction.

                    </p>


                </div>








                <div class="service-card">


                    <div class="service-icon">

                        ⚙️

                    </div>



                    <h3>

                        Fourniture matériaux

                    </h3>



                    <p>

                        Mise à disposition de matériaux essentiels :
                        ciment, fer, agrégats et fournitures chantier.

                    </p>


                </div>








                <div class="service-card">


                    <div class="service-icon">

                        🚜

                    </div>



                    <h3>

                        Location matériel

                    </h3>



                    <p>

                        Des équipements disponibles pour
                        faciliter la réalisation des travaux.

                    </p>


                </div>






            </div>



        </div>


    </section>







    <style>
        /* ==========================
       SERVICES CARDS
       ========================== */


        .services-grid {


            display: grid;


            grid-template-columns: repeat(2, 1fr);


            gap: 30px;


            margin-top: 60px;


        }




        .service-card {


            background: white;


            padding: 40px;


            border-radius: 25px;


            border: 1px solid var(--border);


            box-shadow: 0 12px 35px rgba(20, 41, 66, .07);


            transition: .35s;


        }




        .service-card:hover {


            transform: translateY(-8px);


            box-shadow: var(--shadow-hover);


            border-color: var(--gold);


        }





        .service-icon {


            width: 70px;


            height: 70px;


            display: flex;


            align-items: center;


            justify-content: center;


            border-radius: 20px;


            background: var(--cream-dark);


            font-size: 2rem;


            margin-bottom: 25px;


        }




        .service-card h3 {


            font-size: 1.7rem;


            margin-bottom: 15px;


        }



        .service-card p {


            font-size: 1.05rem;


        }





        @media(max-width:768px) {


            .services-grid {


                grid-template-columns: 1fr;


            }


        }
    </style>








    <!-- ==========================
     GROUPE DIABOSS
    ========================== -->


    <section class="section" style="background:#F7F4EC;">



        <div class="container">



            <div class="group-box">



                <span class="section-label">

                    DIABOSS &amp; BAM DEPOT

                </span>




                <h2>

                    Une expertise connectée
                    pour des projets maîtrisés

                </h2>




                <p>

                    DIABOSS & BAM DÉPÔT s'appuie sur
                    les différentes filiales du Groupe Diaboss
                    pour proposer une chaîne complète
                    dans le secteur du bâtiment.

                </p>



            </div>



        </div>



    </section>







    <style>
        .group-box {


            background: white;


            padding: 70px;


            border-radius: 30px;


            text-align: center;


            box-shadow: var(--shadow);


        }



        .group-box h2 {


            font-size: 3rem;


            max-width: 850px;


            margin: 25px auto;


        }




        .group-box p {


            max-width: 850px;


            margin: auto;


        }





        .siblings {


            display: flex;


            justify-content: center;


            flex-wrap: wrap;


            gap: 15px;


            margin-top: 40px;


        }




        .siblings a {


            text-decoration: none;


            padding: 14px 30px;


            background: var(--cream-dark);


            border-radius: 40px;


            color: var(--navy-dark);


            font-weight: 700;


            transition: .3s;


        }




        .siblings a:hover {


            background: var(--navy-dark);


            color: white;


            transform: translateY(-4px);


        }




        @media(max-width:768px) {


            .group-box {


                padding: 35px 20px;


            }



            .group-box h2 {


                font-size: 2.2rem;


            }



        }
    </style>









    <!-- ==========================
     CTA FINAL
    ========================== -->


    <section class="section">



        <div class="container">



            <div class="bam-cta">



                <h2>

                    Besoin de matériaux pour votre projet ?

                </h2>




                <p>

                    Contactez DIABOSS & BAM DÉPÔT
                    pour vos besoins en matériaux
                    et solutions chantier.

                </p>




                <a href="#contact">

                    Contactez-nous

                </a>



            </div>



        </div>


    </section>







    <style>
        .bam-cta {


            background:


                linear-gradient(135deg,
                    var(--navy-dark),
                    var(--navy));



            padding: 70px 40px;


            border-radius: 30px;


            text-align: center;


            color: white;


        }



        .bam-cta h2 {


            color: white;


            font-size: 2.8rem;


            margin-bottom: 20px;


        }



        .bam-cta p {


            color: rgba(255, 255, 255, .75);


            margin-bottom: 35px;


        }



        .bam-cta a {


            display: inline-flex;


            padding: 16px 35px;


            background: var(--gold);


            color: var(--navy-dark);


            border-radius: 12px;


            font-weight: 800;


            text-decoration: none;


            transition: .3s;


        }




        .bam-cta a:hover {


            background: var(--gold-light);


            transform: translateY(-3px);


        }






        @media(max-width:768px) {


            .bam-cta {


                padding: 45px 20px;


            }



            .bam-cta h2 {


                font-size: 2rem;


            }



        }
    </style>
@endsection
