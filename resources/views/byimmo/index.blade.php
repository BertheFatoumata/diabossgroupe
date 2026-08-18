@extends('layout.main')

@section('content')
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600&family=Playfair+Display:wght@500;600;700&display=swap"
        rel="stylesheet">


    <style>
        :root {

            --beige: #F5EFE2;
            --beige-dark: #E8D7B8;

            --white: #FFFCF6;

            --brown: #2B231C;
            --brown-soft: #625548;

            --brick: #A8462B;
            --brick-dark: #7E3320;

            --gold: #C08A2E;

            --border: rgba(43, 35, 28, .12);

            --shadow:
                0 20px 45px rgba(43, 35, 28, .12);

        }



        /* ===============================
       GLOBAL
    ================================ */


        body {

            background: var(--beige);

        }


        .dj-container {


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


            color: var(--brown);


        }


        p {


            font-family:
                "Inter",
                sans-serif;


            color: var(--brown-soft);


            font-size: 1.15rem;


            line-height: 1.9;


        }




        /* ===============================
     HERO
    ================================ */


        .dj-hero {


            min-height: 520px;


            display: flex;


            justify-content: center;


            align-items: center;


            text-align: center;


            padding: 70px 20px;


            background:


                linear-gradient(135deg,
                   #f6f0e3, #d5cecb);


            position: relative;


            overflow: hidden;


        }




        .dj-hero:before {


            content: "";


            position: absolute;


            width: 650px;


            height: 650px;


            border-radius: 50%;


            background: rgba(168, 70, 43, .08);


            top: -300px;


            right: -250px;


        }




        .dj-hero-content {


            position: relative;

            z-index: 2;


        }



        .dj-label {


            display: inline-block;


            padding: 10px 28px;


            background: #1e3a5f;


            color: white;


            border-radius: 50px;


            font-family: "Inter";


            font-size: .9rem;


            font-weight: 600;


            letter-spacing: .12em;


            margin-bottom: 25px;


        }




        .dj-hero h1 {


            font-size:
                clamp(3rem, 6vw, 4.5rem);


            line-height: 1.05;


            letter-spacing: .05em;


            margin: 0;


        }



        .dj-hero h1 span {


            color: #b58a32;


        }



        .dj-hero p {


            max-width: 700px;


            margin: 25px auto;


            font-size: 1.25rem;


        }



        .dj-hero img {


            width: 270px;


            margin-top: 25px;


            filter:
                drop-shadow(0 15px 25px rgba(0, 0, 0, .18));


        }





        /* ===============================
     GALERIE
    ================================ */


        .property-section {


            padding: 80px 0;


        }



        .gallery-slider img {


            width: 100%;


            height: 600px;


            object-fit: cover;


            border-radius: 20px;


        }



        .swiper-button-next,
        .swiper-button-prev {


            color: var(--brick);


        }



        .swiper-pagination-bullet-active {


            background: var(--brick);


        }




        /* ===============================
     RESPONSIVE
    ================================ */


        @media(max-width:768px) {


            .dj-hero h1 {

                font-size: 2.5rem;

            }


            .gallery-slider img {

                height: 350px;

            }


        }
    </style>





    <!-- ===============================
     HERO DJAWO IMMO
    ================================ -->


    <section class="dj-hero">


        <div class="dj-hero-content">



            <span class="dj-label">

                IMMOBILIER & DEVELOPPEMENT

            </span>



            <h1>

                DJAWO IMMO

                <br>

                <span>
                    BY DIABOSS
                </span>


            </h1>



            <p>

                Créer, valoriser et accompagner
                vos projets immobiliers avec expertise.

            </p>




        </div>


    </section>







    <!-- ===============================
     GALERIE
    ================================ -->



    <section class="property-section">


        <div class="dj-container">



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

                            <a href="#" class="glightbox"
                                data-gallery="djawo">

                                <img src="{{('immo1.webp')}}"
                                    alt="Projet immobilier">

                            </a>

                        </div>




                        <div class="swiper-slide">

                            <a href="#" class="glightbox"
                                data-gallery="djawo">


                                <img src="{{('immo3.webp')}}"
                                    alt="Résidence moderne">


                            </a>

                        </div>




                        <div class="swiper-slide">

                            <a href="#" class="glightbox"
                                data-gallery="djawo">


                                <img src="{{('immo2.jpeg')}}"
                                    alt="Architecture immobilière">


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

    <!-- ===============================
         DESCRIPTION DJAWO IMMO
    ================================ -->


    <section class="property-section" style="background:#FFFCF6;">


        <div class="dj-container">



            <div style="text-align:center;max-width:850px;margin:auto;">


                <span class="dj-label">
                    NOTRE IDENTITÉ
                </span>



                <h2 style="font-size:3rem;margin-top:25px;">

                    L'immobilier pensé autrement.

                </h2>



                <p>

                    Djawo Immo By Diaboss accompagne les particuliers,
                    investisseurs et porteurs de projets dans la réalisation
                    de leurs ambitions immobilières.

                    <br><br>

                    Notre approche repose sur une vision moderne de
                    l'immobilier : créer des espaces adaptés aux besoins
                    d'aujourd'hui tout en valorisant durablement le patrimoine
                    de demain.

                </p>


            </div>


        </div>


    </section>







    <!-- ===============================
     MISSIONS
    ================================ -->


    <section class="property-section">


        <div class="dj-container">


            <div style="text-align:center;margin-bottom:60px;">


                <span class="dj-label">

                    NOS EXPERTISES

                </span>



                <h2 style="font-size:3rem;margin-top:20px;">

                    Nos métiers au service de vos projets

                </h2>



                <p>

                    Une expertise complète pour accompagner chaque étape
                    d'un projet immobilier.

                </p>



            </div>





            <div class="dj-services">





                <div class="dj-card">


                    <div class="number">

                        01

                    </div>


                    <h3>

                        Promotion immobilière

                    </h3>


                    <p>

                        Conception et accompagnement de projets immobiliers
                        pensés pour répondre aux besoins des familles,
                        des entreprises et des investisseurs.

                    </p>


                </div>





                <div class="dj-card">


                    <div class="number">

                        02

                    </div>


                    <h3>

                        Vente & acquisition

                    </h3>


                    <p>

                        Mise en relation, conseil et accompagnement
                        dans l'achat ou la vente de biens immobiliers
                        avec une approche transparente.

                    </p>


                </div>







                <div class="dj-card">


                    <div class="number">

                        03

                    </div>


                    <h3>

                        Investissement immobilier

                    </h3>


                    <p>

                        Identification d'opportunités immobilières,
                        conseil stratégique et accompagnement
                        des investisseurs.

                    </p>


                </div>







                <div class="dj-card">


                    <div class="number">

                        04

                    </div>


                    <h3>

                        Gestion et valorisation

                    </h3>


                    <p>

                        Solutions adaptées pour optimiser la valeur,
                        la gestion et la rentabilité des biens immobiliers.

                    </p>


                </div>





            </div>


        </div>


    </section>







    <style>
        .dj-services {


            display: grid;


            grid-template-columns:
                repeat(2, 1fr);


            gap: 30px;


        }




        .dj-card {


            background: #FFFCF6;


            border: 1px solid var(--border);


            padding: 40px;


            border-radius: 20px;


            position: relative;


            transition: .35s ease;


            box-shadow:
                0 10px 30px rgba(43, 35, 28, .05);


        }




        .dj-card:hover {


            transform: translateY(-8px);


            box-shadow:
                0 20px 45px rgba(43, 35, 28, .15);


        }




        .dj-card .number {


            font-family:
                "Playfair Display",
                serif;


            font-size: 3.5rem;


            color: rgba(168, 70, 43, .18);


            font-weight: 700;


            position: absolute;


            right: 25px;


            top: 15px;


        }



        .dj-card h3 {


            font-size: 1.8rem;


            margin-bottom: 20px;


            color: var(--brick);


        }



        .dj-card p {


            font-size: 1.05rem;


        }



        @media(max-width:768px) {


            .dj-services {


                grid-template-columns: 1fr;


            }



            .dj-card {


                padding: 30px;


            }
        }

        
    </style>

    <!-- ===============================
         FORCE DU GROUPE DIABOSS
    ================================ -->


    <section class="property-section" style="background:#F5EFE2;">


        <div class="dj-container">


            <div class="group-box">



                <span class="dj-label">

                    Djawo Immo By Diaboss

                </span>




                <h2>

                    Une force collective,
                    un accompagnement complet.

                </h2>




                <p>

                    Djawo Immo By Diaboss bénéficie de l'expertise
                    d'un groupe intégré réunissant plusieurs métiers
                    complémentaires de l'immobilier et de la construction.

                    <br><br>

                    De la conception à la réalisation, en passant par
                    les matériaux, les finitions et l'aménagement,
                    chaque filiale apporte son savoir-faire pour offrir
                    des projets maîtrisés de bout en bout.

                </p>


            </div>


        </div>


    </section>






    <!-- ===============================
         VISION
    ================================ -->


    <section class="property-section">


        <div class="dj-container">


            <div class="vision">



                <h2>

                    Construire aujourd'hui
                    les espaces de demain.

                </h2>



                <p>

                    Notre ambition est de participer au développement
                    immobilier durable en Afrique en proposant des
                    solutions accessibles, modernes et adaptées aux
                    réalités locales.

                </p>



            </div>


        </div>


    </section>








    <style>
        .group-box {


            background: #FFFCF6;


            padding: 70px;


            border-radius: 25px;


            box-shadow:
                0 20px 50px rgba(43, 35, 28, .10);


            text-align: center;


        }



        .group-box h2 {


            font-size: 3rem;


            margin: 25px auto;


            max-width: 850px;


        }



        .group-box p {


            max-width: 850px;


            margin: auto;


        }




        .group-line {


            height: 1px;


            background: var(--border);


            margin: 50px auto;


            max-width: 700px;


        }




        .group-box h3 {


            font-size: 2rem;


            margin-bottom: 35px;


        }



        .siblings {


            display: flex;


            justify-content: center;


            flex-wrap: wrap;


            gap: 18px;


        }



        .siblings a {


            text-decoration: none;


            font-family: "Inter";


            font-weight: 600;


            color: var(--brown);


            background: #E7C39A;


            padding: 14px 28px;


            border-radius: 40px;


            transition: .3s;


        }



        .siblings a:hover {


            background: var(--brick);


            color: white;


            transform: translateY(-3px);


        }




        .vision {


            text-align: center;


            max-width: 900px;


            margin: auto;


        }



        .vision h2 {


            font-size: 3.2rem;


        }



        .vision p {


            font-size: 1.25rem;


        }




        @media(max-width:768px) {


            .group-box {


                padding: 35px 20px;


            }



            .group-box h2,
            .vision h2 {


                font-size: 2.2rem;


            }


        }
    </style>
@endsection
