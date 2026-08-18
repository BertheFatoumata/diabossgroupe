@extends('layout.main')

@section('content')
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&family=Playfair+Display:wght@500;600;700&display=swap"
        rel="stylesheet">


    <style>
        /* =====================================
                       BATIJOB - STYLE M2 DESIGN
                    ===================================== */


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



        /* =========================
                     GLOBAL
                    ========================= */


        body {

            background: var(--bg);

        }


        .bati-container {

            width: min(1180px, 100%);

            margin: auto;

            padding: 0 25px;

        }



        .bati-section {

            padding: 90px 0;

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

            font-size: 1.12rem;

            line-height: 1.9;

        }





        /* =========================
                     HERO BATIJOB
                    ========================= */


        .bati-hero {


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



        .bati-hero::before {


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





        .bati-hero-content {


            position: relative;

            z-index: 2;


        }



        .bati-tag {


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





        .bati-hero h1 {


            font-size:

                clamp(3rem, 7vw, 5rem);


            line-height: 1.05;


            margin: 0;


        }



        .bati-hero h1 span {


            color: #b58a32;


        }




        .bati-hero p {


            max-width: 750px;


            margin: 30px auto;


            font-size: 1.3rem;


        }




        .bati-logo {


            width: 280px;


            max-width: 80%;


            margin-top: 25px;


            filter:

                drop-shadow(0 15px 30px rgba(0, 0, 0, .18));


        }




        /* =========================
                     GALERIE
                    ========================= */


        .bati-gallery img {


            width: 100%;


            height: 600px;


            object-fit: cover;


            border-radius: 25px;


        }



        .swiper-button-next,
        .swiper-button-prev {


            color: var(--brick);


        }



        .swiper-pagination-bullet-active {


            background: var(--brick);


        }





        @media(max-width:768px) {


            .bati-hero {

                min-height: 450px;

            }



            .bati-hero h1 {

                font-size: 2.8rem;

            }



            .bati-gallery img {

                height: 350px;

            }


        }
    </style>



    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('css/filiale.css') }}" rel="stylesheet">





    <!-- =====================================
                     HERO BATIJOB
                    ===================================== -->


    <section class="bati-hero">


        <div class="bati-hero-content">



            <span class="bati-tag">

                RESSOURCES HUMAINES • BTP • EXPERTISE

            </span>




            <h1>

                BATI

                <br>

                <span>

                    JOB

                </span>


            </h1>




            <p>

                Le talent humain au cœur des grands projets
                du bâtiment.

            </p>


        </div>


    </section>






    <!-- =====================================
                     GALERIE BATIJOB
                    ===================================== -->


    <section class="bati-section">


        <div class="bati-container">


            <div class="listing-gallery">


                <div class="bati-gallery swiper init-swiper">


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



                        <!-- IMAGE 1 -->

                        <div class="swiper-slide">

                            <a href="#" class="glightbox"
                                data-gallery="batijob-gallery">


                                 <img src="#"
                                    alt="Equipe construction Batijob" class="img-fluid">

                            </a>

                        </div>




                        <!-- IMAGE 2 -->

                        <div class="swiper-slide">

                            <a href="#" class="glightbox"
                                data-gallery="batijob-gallery">


                                <img src="{{('Bati1.jpeg')}}"
                                    alt="Professionnels BTP sur chantier" class="img-fluid">


                            </a>

                        </div>




                        <!-- IMAGE 3 -->

                        <div class="swiper-slide">

                            <a href="#" class="glightbox"
                                data-gallery="batijob-gallery">


                                <img src="{{('ouvrier.jpg')}}"
                                    alt="Equipe professionnelle du bâtiment Batijob" class="img-fluid">
                                    

                            </a>

                        </div>



                    </div>



                    <div class="swiper-button-prev"></div>

                    <div class="swiper-button-next"></div>

                    <div class="swiper-pagination"></div>



                </div>


            </div>


        </div>


    </section>
    <!-- =====================================
                         DESCRIPTION BATIJOB
                    ===================================== -->


    <section class="bati-section" style="background:#FFFCF6;">


        <div class="bati-container">


            <div class="bati-intro-box">



                <span class="bati-tag">

                    À PROPOS DE BATIJOB

                </span>




                <h2>

                    L'humain au cœur
                    des métiers du bâtiment.

                </h2>




                <p>

                    Batijob est la filiale du groupe Diaboss spécialisée
                    dans l'accompagnement des ressources humaines du secteur
                    du bâtiment.

                    <br><br>

                    Notre mission est de connecter les entreprises,
                    les professionnels qualifiés et les projets nécessitant
                    des compétences adaptées aux réalités du terrain.

                    <br><br>

                    Grâce à son expertise dans le domaine du BTP,
                    Batijob contribue à renforcer les équipes,
                    optimiser les performances des chantiers et valoriser
                    les talents qui participent au développement immobilier.

                </p>



            </div>


        </div>


    </section>






    <!-- =====================================
                         EXPERTISES BATIJOB
                    ===================================== -->


    <section class="bati-section">


        <div class="bati-container">



            <div class="bati-header">



                <span class="bati-tag">

                    NOS EXPERTISES

                </span>




                <h2>

                    Une expertise humaine
                    au service des projets.

                </h2>



                <p>

                    Des solutions adaptées aux besoins
                    des entreprises et des professionnels
                    du secteur BTP.

                </p>



            </div>







            <div class="bati-expertise-grid">





                <div class="bati-card">



                    <div class="bati-number">

                        01

                    </div>



                    <h3>

                        Mise en relation BTP

                    </h3>



                    <p>

                        Connexion entre entreprises,
                        professionnels du bâtiment et porteurs
                        de projets selon les besoins spécifiques
                        des chantiers.

                    </p>


                </div>






                <div class="bati-card">



                    <div class="bati-number">

                        02

                    </div>



                    <h3>

                        Recrutement spécialisé

                    </h3>



                    <p>

                        Identification et sélection de profils
                        qualifiés : ouvriers, techniciens,
                        chefs de chantier et spécialistes du BTP.

                    </p>


                </div>







                <div class="bati-card">



                    <div class="bati-number">

                        03

                    </div>



                    <h3>

                        Gestion des compétences

                    </h3>



                    <p>

                        Accompagnement dans l'organisation
                        des équipes et affectation des talents
                        selon les différentes phases des projets.

                    </p>


                </div>







                <div class="bati-card">



                    <div class="bati-number">

                        04

                    </div>



                    <h3>

                        Accompagnement professionnel

                    </h3>



                    <p>

                        Suivi et organisation des ressources humaines
                        afin de garantir efficacité et performance
                        sur les opérations terrain.

                    </p>


                </div>




            </div>



        </div>


    </section>







    <style>
        /* =========================
                     INTRO BATIJOB
                    ========================= */


        .bati-intro-box {


            max-width: 950px;


            margin: auto;


            text-align: center;


        }



        .bati-intro-box h2 {


            font-size: 3.2rem;


            margin: 30px 0;


        }



        .bati-intro-box p {


            font-size: 1.2rem;


        }






        /* =========================
                     SECTION HEADER
                    ========================= */


        .bati-header {


            text-align: center;


            margin-bottom: 60px;


        }



        .bati-header h2 {


            font-size: 3.2rem;


            margin: 25px 0;


        }





        /* =========================
                     EXPERTISE CARDS
                    ========================= */


        .bati-expertise-grid {


            display: grid;


            grid-template-columns:

                repeat(2, 1fr);


            gap: 35px;


        }






        .bati-card {


            background: var(--surface);


            padding: 45px;


            border-radius: 25px;


            border: 1px solid var(--border);


            box-shadow:

                0 15px 40px rgba(43, 35, 28, .07);


            position: relative;


            transition: .35s;


        }





        .bati-card:hover {


            transform: translateY(-10px);


            box-shadow:

                0 25px 60px rgba(43, 35, 28, .15);


        }






        .bati-number {


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







        .bati-card h3 {


            font-size: 1.9rem;


            color: var(--brick);


            margin-bottom: 20px;


        }



        .bati-card p {


            font-size: 1.05rem;


        }





        @media(max-width:768px) {



            .bati-intro-box h2,
            .bati-header h2 {


                font-size: 2.2rem;


            }



            .bati-expertise-grid {


                grid-template-columns: 1fr;


            }



            .bati-card {


                padding: 30px;


            }


        }
    </style>

    <!-- =====================================
                         BATIJOB DANS LE GROUPE
                    ===================================== -->


    <section class="bati-section" style="background:#F5EFE2;">


        <div class="bati-container">



            <div class="bati-group-box">



                <span class="bati-tag">

                    BATIJOB

                </span>





                <h2>

                    Une expertise humaine intégrée
                    au cœur d'un groupe multidisciplinaire.

                </h2>





                <p>

                    Batijob s'inscrit dans l'écosystème du groupe Diaboss
                    en apportant une expertise essentielle :
                    la valorisation des compétences humaines.

                    <br><br>

                    En collaboration avec les différentes filiales,
                    Batijob accompagne les projets immobiliers en mettant
                    à disposition les talents nécessaires à chaque étape,
                    de la construction aux finitions.

                    <br><br>

                    Cette complémentarité permet au groupe Diaboss
                    de proposer une approche complète réunissant
                    construction, matériaux, immobilier et ressources humaines.

                </p>



            </div>



        </div>


    </section>







    <style>
        /* =========================
                     GROUPE BOX
                    ========================= */



        .bati-group-box {


            background: var(--surface);


            padding: 75px;


            border-radius: 30px;


            text-align: center;


            box-shadow:


                0 25px 60px rgba(43, 35, 28, .10);



        }





        .bati-group-box h2 {


            font-size: 3.2rem;


            max-width: 900px;


            margin: 30px auto;


        }





        .bati-group-box p {


            max-width: 900px;


            margin: auto;


        }





        .bati-divider {


            height: 1px;


            background: var(--border);


            max-width: 700px;


            margin: 55px auto;


        }




        .bati-group-box h3 {


            font-size: 2rem;


            margin-bottom: 35px;


        }





        .bati-filiales {


            display: flex;


            justify-content: center;


            flex-wrap: wrap;


            gap: 18px;


        }





        .bati-filiales a {


            text-decoration: none;


            font-family: "Inter";


            font-weight: 600;


            color: var(--text);



            background: #E7C39A;


            padding: 15px 30px;


            border-radius: 50px;


            transition: .3s;



        }




        .bati-filiales a:hover {


            background: var(--brick);


            color: white;


            transform: translateY(-5px);


        }





        @media(max-width:768px) {



            .bati-group-box {


                padding: 35px 20px;


            }




            .bati-group-box h2 {


                font-size: 2.3rem;


            }



            .bati-filiales a {


                width: 100%;


            }


        }
    </style>

    <!-- =====================================
                         VISION BATIJOB
                    ===================================== -->


    <section class="bati-section">


        <div class="bati-container">


            <div class="bati-vision">



                <span class="bati-tag">

                    NOTRE VISION

                </span>





                <h2>

                    Valoriser les talents
                    qui construisent l'avenir.

                </h2>





                <p>

                    Chez Batijob, chaque compétence représente
                    une force essentielle dans la réussite
                    des projets du bâtiment.

                    <br><br>

                    Notre ambition est de créer un lien durable
                    entre les professionnels du BTP et les entreprises
                    afin de contribuer à des réalisations plus efficaces,
                    plus humaines et plus ambitieuses.

                </p>




            </div>



        </div>


    </section>








    <!-- =====================================
                         CTA FINAL
                    ===================================== -->


    <section class="bati-cta">


        <div class="bati-container">



            <div class="bati-cta-box">





                <h2>

                    Les bonnes compétences
                    pour bâtir l'avenir.

                </h2>




                <p>

                    Avec Batijob, Diaboss Groupe met
                    l'expertise humaine au service
                    des grands projets immobiliers.

                </p>




                <a href="#contact">

                    Nous contacter

                </a>




            </div>



        </div>


    </section>








    <style>
        /* =========================
                     VISION
                    ========================= */


        .bati-vision {


            max-width: 950px;


            margin: auto;


            text-align: center;


        }



        .bati-vision h2 {


            font-size: 3.4rem;


            margin: 30px 0;


        }



        .bati-vision p {


            font-size: 1.25rem;


        }





        /* =========================
                     CTA
                    ========================= */


        .bati-cta {


            padding: 90px 0;


        }



        .bati-cta-box {


            background:#1e3a5f;



            padding: 70px 40px;


            border-radius: 30px;


            text-align: center;


            color: white;


            box-shadow:

                0 25px 60px rgba(43, 35, 28, .15);


        }





        .bati-cta-box h2 {


            font-size: 3rem;


            color: white;


            margin-bottom: 25px;


        }





        .bati-cta-box p {


            max-width: 700px;


            margin: 0 auto 40px;


            color: rgba(255, 255, 255, .85);


            font-size: 1.2rem;


        }




        .bati-cta-box a {


            display: inline-flex;


            padding: 16px 38px;


            background: #E7C39A;


            color: var(--brick-dark);


            border-radius: 50px;


            font-family: "Inter";


            font-weight: 700;


            text-decoration: none;


            transition: .3s;


        }




        .bati-cta-box a:hover {


            background: white;


            transform: translateY(-5px);


        }





        @media(max-width:768px) {



            .bati-vision h2,
            .bati-cta-box h2 {


                font-size: 2.3rem;


            }



            .bati-cta-box {


                padding: 45px 20px;


            }



        }
    </style>
@endsection
