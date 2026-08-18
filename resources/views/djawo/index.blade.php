@extends('layout.main')

@section('content')
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&family=Playfair+Display:wght@600;700;800&display=swap"
        rel="stylesheet">


    <style>
        /* =================================================
       DIABOSS & DJAWO
       STYLE PREMIUM TYPE M2 DESIGN
    ================================================= */


        :root {

            --navy: #1E3A5F;
            --navy-dark: #142942;
            --navy-soft: #2E4E78;

            --gold: #C9982F;
            --gold-light: #E9C878;

            --cream: #F7F4EC;
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





        /* ==============================
    GLOBAL
    ============================== */


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



        h1,
        h2,
        h3,
        h4 {


            font-family: "Playfair Display", serif;

            color: var(--navy-dark);

        }



        p {


            font-size: 1.12rem;

            line-height: 1.9;

            color: var(--text-soft);


        }



        .section {


            padding: 90px 0;


        }





        /* ==============================
    LABEL SECTION
    ============================== */


        .section-label {


            display: inline-flex;

            align-items: center;

            gap: 12px;

            color: var(--gold);

            font-size: .85rem;

            font-weight: 800;

            letter-spacing: .15em;

            text-transform: uppercase;

            margin-bottom: 20px;


        }



        .section-label::before {


            content: "";

            width: 35px;

            height: 2px;

            background: var(--gold);


        }







        /* ==============================
     HERO
    ============================== */


        .dj-hero {


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




        .dj-hero::after {


            content: "";


            position: absolute;


            inset: 0;


            background:


                repeating-linear-gradient(45deg,
                    rgba(255, 255, 255, .04) 0 2px,
                    transparent 2px 25px);


        }





        .dj-hero-inner {


            position: relative;


            z-index: 2;


            display: grid;


            grid-template-columns: 1.2fr .8fr;


            align-items: center;


            gap: 70px;


        }




        .dj-eyebrow {


            display: inline-flex;


            padding: 12px 28px;


            border-radius: 50px;


            background: rgba(201, 152, 47, .18);


            border: 1px solid rgba(201, 152, 47, .4);


            color: var(--gold-light);


            font-size: .85rem;


            font-weight: 700;


            letter-spacing: .12em;


            text-transform: uppercase;


            margin-bottom: 25px;


        }





        .dj-hero h1 {


            font-size:

                clamp(3rem, 6vw, 5rem);


            color: white;


            line-height: 1.05;


            margin-bottom: 25px;


        }



        .dj-hero h1 span {


            color: var(--gold-light);


        }




        .dj-hero p {


            color: rgba(255, 255, 255, .82);


            max-width: 650px;


            font-size: 1.25rem;


            margin-bottom: 35px;


        }




        .dj-btn {


            display: inline-flex;


            padding: 16px 35px;


            border-radius: 12px;


            background: var(--gold);


            color: var(--navy-dark);


            text-decoration: none;


            font-weight: 800;


            transition: .3s;


        }



        .dj-btn:hover {


            background: var(--gold-light);


            transform: translateY(-4px);


        }




        /* LOGO */


        .dj-logo-box {


            background: rgba(255, 255, 255, .08);


            border: 1px solid rgba(255, 255, 255, .15);


            padding: 45px;


            border-radius: 30px;


            text-align: center;


            backdrop-filter: blur(10px);


        }





        .dj-logo-box img {


            width: 230px;


            max-width: 100%;


            margin-bottom: 25px;


        }





        .dj-logo-box span {


            color: var(--gold-light);


            font-size: .9rem;


            font-weight: 700;


            letter-spacing: .12em;


            text-transform: uppercase;


        }




        @media(max-width:900px) {


            .dj-hero-inner {


                grid-template-columns: 1fr;


                text-align: center;


            }



            .dj-hero p {


                margin-left: auto;

                margin-right: auto;


            }


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

         .md-tag {


            display: inline-block;


            padding: 12px 32px;


            background:#1e3a5f;


            color: white;


            border-radius: 50px;


            font-family: "Inter";


            font-size: .85rem;


            font-weight: 700;


            letter-spacing: .15em;


            margin-bottom: 30px;


        }

        
    </style>





    <!-- ==============================
     HERO
    ============================== -->



       <section class="md-hero">


        <div class="md-hero-content">


            <span class="md-tag">

               Immobilier • Développement

            </span>



            <h1>

               DIABOSS

                <br>

                <span>

                    &amp; DJAWO

                </span>


            </h1>




            <p>

               Promotion immobilière et développement résidentiel :
                    nous créons des espaces modernes, durables et adaptés
                    aux besoins des familles, investisseurs et entreprises.

            </p>


        </div>


    </section>
    <!-- ==============================
     GALERIE
    ============================== -->


    <section id="details" class="section gallery-section">


        <div class="container">



            <div class="gallery-box swiper init-swiper">


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

                        <img src="{{('D1.jpeg')}}">

                    </div>




                    <div class="swiper-slide">

                        <img src="{{('D2.jpeg')}}">

                    </div>




                    <div class="swiper-slide">

                        <img src="{{('D3.jpeg')}}">

                    </div>




                    <div class="swiper-slide">

                        <img src="D4.jpeg">

                    </div>



                </div>



                <div class="swiper-button-prev"></div>

                <div class="swiper-button-next"></div>

                <div class="swiper-pagination"></div>



            </div>


        </div>


    </section>






    <style>
        .gallery-box {


            border-radius: 30px;


            overflow: hidden;


            border: 8px solid white;


            box-shadow:

                0 30px 70px rgba(20, 41, 66, .18);


        }



        .gallery-box img {


            width: 100%;


            height: 620px;


            object-fit: cover;


        }



        .swiper-button-next,
        .swiper-button-prev {


            width: 48px !important;


            height: 48px !important;


            background: rgba(20, 41, 66, .75);


            border-radius: 50%;


            color: white !important;


        }



        .swiper-button-next::after,
        .swiper-button-prev::after {


            font-size: 16px !important;


        }



        .swiper-pagination-bullet-active {


            background: var(--gold) !important;


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








    <!-- ==============================
     PRESENTATION
    ============================== -->


    <section class="section">


        <div class="container">



            <div class="content-center">



               <span class="cx-tag" style="color:white;background:#1e3a5f;">

                    À PROPOS DE DIABOSS & DJAWO

                </span>





                <h2>

                    Créer des espaces de vie
                    pensés pour durer

                </h2>



                <p>

                    DIABOSS & DJAWO accompagne le développement
                    immobilier à travers des projets modernes,
                    fonctionnels et adaptés aux réalités locales.


                </p>



                <p>

                    Notre approche repose sur une maîtrise complète
                    du processus immobilier : analyse du terrain,
                    développement, coordination et accompagnement
                    jusqu'à la livraison.

                </p>



            </div>


        </div>


    </section>







    <style>
        .content-center {


            max-width: 900px;


            margin: auto;


            text-align: center;


        }



        .content-center h2 {


            font-size: 3rem;


            margin-bottom: 25px;


        }



        .content-center p {


            font-size: 1.15rem;


        }



        @media(max-width:768px) {


            .content-center h2 {


                font-size: 2.2rem;


            }



            .gallery-box img {


                height: 350px;


            }


        }
    </style>









    <!-- ==============================
     EXPERTISES
    ============================== -->


    <section class="section expertise-section">


        <div class="container">



            <div class="content-center">


               <span class="cx-tag" style="color:white;background:#1e3a5f;">

                    NOS EXPERTISES

                </span>



                <h2>

                    Une expertise immobilière
                    au service de vos projets

                </h2>



                <p>

                    De l'étude initiale jusqu'à la réalisation,
                    nous accompagnons chaque étape avec rigueur
                    et professionnalisme.

                </p>



            </div>






            <div class="expertise-grid">





                <div class="expertise-card">


                    <div class="card-number">

                        01

                    </div>


                    <h3>

                        Étude & développement

                    </h3>


                    <p>

                        Analyse des terrains, faisabilité et préparation
                        des programmes immobiliers adaptés.

                    </p>


                </div>







                <div class="expertise-card">


                    <div class="card-number">

                        02

                    </div>


                    <h3>

                        Promotion immobilière

                    </h3>


                    <p>

                        Création de résidences et projets immobiliers
                        modernes répondant aux besoins des clients.

                    </p>


                </div>







                <div class="expertise-card">


                    <div class="card-number">

                        03

                    </div>


                    <h3>

                        Coordination des projets

                    </h3>


                    <p>

                        Suivi des différentes étapes pour garantir
                        qualité, organisation et respect des objectifs.

                    </p>


                </div>





                <div class="expertise-card">


                    <div class="card-number">

                        04

                    </div>


                    <h3>

                        Accompagnement client

                    </h3>


                    <p>

                        Un suivi personnalisé jusqu'à la livraison
                        et la remise des clés.

                    </p>


                </div>



            </div>


        </div>


    </section>








    <style>
        .expertise-grid {


            display: grid;


            grid-template-columns: repeat(2, 1fr);


            gap: 30px;


            margin-top: 60px;


        }




        .expertise-card {


            background: white;


            padding: 45px;


            border-radius: 25px;


            border: 1px solid var(--border);


            box-shadow: var(--shadow);


            position: relative;


            transition: .35s;


        }




        .expertise-card:hover {


            transform: translateY(-8px);


            box-shadow: var(--shadow-hover);


            border-color: var(--gold);


        }




        .card-number {


            position: absolute;


            right: 30px;


            top: 15px;


            font-family: "Playfair Display";


            font-size: 4rem;


            font-weight: 800;


            color: rgba(201, 152, 47, .18);


        }




        .expertise-card h3 {


            color: var(--navy);


            font-size: 1.7rem;


            margin-bottom: 15px;


        }



        .expertise-card p {


            font-size: 1rem;


        }




        @media(max-width:768px) {


            .expertise-grid {


                grid-template-columns: 1fr;


            }


        }
    </style>

    <!-- ==============================
     POURQUOI NOUS CHOISIR
    ============================== -->


    <section class="section">


        <div class="container">


            <div class="content-center">


                <span class="cx-tag" style="color:white;background:#1e3a5f;">

                    NOS ENGAGEMENTS

                </span>


                <h2>

                    Pourquoi choisir DIABOSS & DJAWO ?

                </h2>



                <p>

                    Une expertise immobilière intégrée,
                    une vision durable et un accompagnement
                    adapté à chaque projet.

                </p>


            </div>





            <div class="advantages-grid">



                <div class="advantage-card">


                    <div class="advantage-icon">

                        01

                    </div>


                    <h3>

                        Expertise immobilière

                    </h3>


                    <p>

                        Une maîtrise complète du développement
                        et de la promotion immobilière.

                    </p>


                </div>





                <div class="advantage-card">


                    <div class="advantage-icon">

                        02

                    </div>


                    <h3>

                        Solutions adaptées

                    </h3>


                    <p>

                        Des projets conçus selon les besoins
                        des familles, investisseurs et entreprises.

                    </p>


                </div>





                <div class="advantage-card">


                    <div class="advantage-icon">

                        03

                    </div>


                    <h3>

                        Accompagnement personnalisé

                    </h3>


                    <p>

                        Un suivi professionnel à chaque étape
                        du projet immobilier.

                    </p>


                </div>





                <div class="advantage-card">


                    <div class="advantage-icon">

                        04

                    </div>


                    <h3>

                        Vision durable

                    </h3>


                    <p>

                        Des espaces modernes pensés pour
                        valoriser le patrimoine de demain.

                    </p>


                </div>



            </div>



        </div>


    </section>







    <style>
        .advantages-grid {


            display: grid;


            grid-template-columns: repeat(2, 1fr);


            gap: 30px;


            margin-top: 60px;


        }




        .advantage-card {


            background: white;


            padding: 40px;


            border-radius: 25px;


            border: 1px solid var(--border);


            box-shadow: var(--shadow);


            transition: .35s;


        }



        .advantage-card:hover {


            transform: translateY(-8px);


            box-shadow: var(--shadow-hover);


        }




        .advantage-icon {


            width: 60px;


            height: 60px;


            border-radius: 50%;


            display: flex;


            align-items: center;


            justify-content: center;


            background: var(--navy-dark);


            color: var(--gold-light);


            font-weight: 800;


            margin-bottom: 25px;


        }




        .advantage-card h3 {


            font-size: 1.6rem;


            margin-bottom: 15px;


        }



        .advantage-card p {


            font-size: 1rem;


        }
    </style>








    <!-- ==============================
     FORCE DU GROUPE
    ============================== -->


    <section class="section group-section">


        <div class="container">


            <div class="group-box">


<span class="cx-tag" style="color:white;background:#1e3a5f;">

                    DIABOSS &amp; DJAWO

                </span>


                <h2>

                    Une force collective
                    pour des projets maîtrisés

                </h2>



                <p>

                    DIABOSS & DJAWO bénéficie de l'expertise
                    d'un groupe réunissant plusieurs métiers
                    complémentaires autour de l'immobilier,
                    la construction et les matériaux.

                </p>

     </h3>


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


            margin: 25px auto;


        }



        .group-box h3 {


            font-size: 1.8rem;


            margin-top: 40px;


        }



        .group-line {


            height: 1px;


            background: var(--border);


            max-width: 700px;


            margin: 45px auto;


        }



        .siblings {


            display: flex;


            justify-content: center;


            flex-wrap: wrap;


            gap: 15px;


            margin-top: 30px;


        }



        .siblings a {


            padding: 14px 30px;


            background: var(--cream);


            border-radius: 40px;


            color: var(--navy-dark);


            font-weight: 700;


            text-decoration: none;


            transition: .3s;


        }



        .siblings a:hover {


            background: var(--navy-dark);


            color: white;


        }
    </style>








    <!-- ==============================
     CTA FINAL
    ============================== -->


    <section class="section">


        <div class="container">


            <div class="cta-box">



                <h2>

                    Un projet immobilier en tête ?

                </h2>



                <p>

                    Parlons de votre vision et construisons
                    ensemble une solution adaptée.

                </p>




                <a href="#contact">

                    Contactez-nous

                </a>




            </div>


        </div>


    </section>









    <style>
        .cta-box {


            position: relative;


            overflow: hidden;


            background:


                linear-gradient(135deg,
                    var(--navy-dark),
                    var(--navy));



            padding: 70px 40px;


            border-radius: 30px;


            text-align: center;


        }



        .cta-box h2 {


            color: white;


            font-size: 3rem;


            margin-bottom: 20px;


        }



        .cta-box p {


            color: rgba(255, 255, 255, .8);


            max-width: 700px;


            margin: 0 auto 35px;


        }



        .cta-box a {


            display: inline-flex;


            padding: 16px 40px;


            background: var(--gold);


            color: var(--navy-dark);


            border-radius: 12px;


            font-weight: 800;


            text-decoration: none;


        }



        .cta-box a:hover {


            background: var(--gold-light);


        }



        @media(max-width:768px) {


            .advantages-grid {


                grid-template-columns: 1fr;


            }



            .group-box {


                padding: 35px 20px;


            }



            .group-box h2,
            .cta-box h2 {


                font-size: 2.2rem;


            }



            .cta-box {


                padding: 45px 20px;


            }



        }
    </style>
@endsection
