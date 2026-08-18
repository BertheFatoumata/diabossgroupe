@extends('layout.main')

@section('content')
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&family=Playfair+Display:wght@500;600;700&display=swap"
        rel="stylesheet">


    <style>
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



        /* ===========================
           GLOBAL
        =========================== */


        body {

            background: var(--bg);

        }


        .md-container {

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



        .md-section {

            padding: 90px 0;

        }



        /* ===========================
           HERO
        =========================== */


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




        .md-hero h1 {


            font-size:

                clamp(3rem, 7vw, 5rem);


            line-height: 1.05;


            margin: 0;


        }



        .md-hero h1 span {


            color: #b58a32;;


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



        /* ===========================
           GALERIE
        =========================== */


        .gallery-slider img {


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



        /* Responsive */


        @media(max-width:768px) {


            .md-hero {


                min-height: 450px;


            }



            .md-hero h1 {


                font-size: 2.8rem;


            }



            .gallery-slider img {


                height: 350px;


            }


        }
    </style>





    <!-- ===========================
             HERO MD2 DESIGN
        =========================== -->


    <section class="md-hero">


        <div class="md-hero-content">


            <span class="md-tag">

                DESIGN • AMÉNAGEMENT • SUR MESURE

            </span>



            <h1>

                MD2

                <br>

                <span>

                    DESIGN

                </span>


            </h1>




            <p>

                L'art de transformer les espaces grâce
                à une conception élégante, fonctionnelle
                et entièrement personnalisée.

            </p>


        </div>


    </section>







    <!-- ===========================
             GALERIE MD2 DESIGN
        =========================== -->


    <section class="md-section">


        <div class="md-container">


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


                        <!-- IMAGE 1 : Aménagement intérieur -->

                        <div class="swiper-slide">

                            <a href="#"
                                data-gallery="md2-gallery">

                                <img src="{{('md3.jpg')}}"
                                    alt="Aménagement intérieur MD2 Design" class="img-fluid">

                            </a>

                        </div>



                        <!-- IMAGE 2 : Menuiserie aluminium -->

                        <div class="swiper-slide">

                            <a href="#"
                                class="glightbox" data-gallery="md2-gallery">

                                <img src="{{('md2.jpg')}}"
                                    alt="Menuiserie aluminium" class="img-fluid">

                            </a>

                        </div>




                        <!-- IMAGE 3 : Fenêtres aluminium design -->

                        <div class="swiper-slide">

                            <a href="#" class="glightbox"
                                data-gallery="md2-gallery">

                                <img src="{{('md1.jpg')}}"
                                    alt="Baies vitrées et design intérieur" class="img-fluid">

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
             DESCRIPTION MD2 DESIGN
        ================================ -->


    <section class="md-section" style="background:#FFFCF6;">


        <div class="md-container">


            <div class="intro-box">


                <span class="md-tag">

                    À PROPOS DE MD2 DESIGN

                </span>



                <h2>

                    L'élégance du sur-mesure
                    au service des espaces.

                </h2>




                <p>

                    MD2 Design est la filiale du groupe Diaboss spécialisée
                    dans la conception, la fabrication et la mise en œuvre
                    de solutions d'aménagement intérieur.

                    <br><br>

                    Grâce à son expertise en menuiserie aluminium, bois,
                    métallique et PVC, MD2 Design accompagne les projets
                    résidentiels, professionnels et immobiliers en apportant
                    des solutions à la fois esthétiques, durables et adaptées
                    aux besoins de chaque client.

                    <br><br>

                    De l'étude du projet jusqu'à l'installation finale,
                    notre équipe transforme chaque espace en un lieu
                    unique, fonctionnel et harmonieux.

                </p>


            </div>


        </div>


    </section>







    <!-- ===============================
             EXPERTISES MD2 DESIGN
        ================================ -->


    <section class="md-section">


        <div class="md-container">



            <div class="section-header">


                <span class="md-tag">

                    NOS EXPERTISES

                </span>




                <h2>

                    Un savoir-faire complet,
                    pensé dans chaque détail.

                </h2>



                <p>

                    Des solutions personnalisées pour créer
                    des espaces modernes et durables.

                </p>



            </div>







            <div class="expertise-grid">





                <div class="expertise-card">


                    <div class="card-number">

                        01

                    </div>


                    <h3>

                        Menuiserie aluminium & PVC

                    </h3>


                    <p>

                        Conception et installation de fenêtres,
                        portes, baies vitrées et solutions d'ouverture
                        modernes adaptées aux exigences architecturales.

                    </p>


                </div>







                <div class="expertise-card">


                    <div class="card-number">

                        02

                    </div>


                    <h3>

                        Menuiserie bois & métallique

                    </h3>


                    <p>

                        Création d'ouvrages personnalisés alliant
                        solidité, précision et esthétique pour donner
                        une identité unique aux espaces.

                    </p>


                </div>







                <div class="expertise-card">


                    <div class="card-number">

                        03

                    </div>


                    <h3>

                        Aménagement intérieur

                    </h3>


                    <p>

                        Optimisation et transformation des espaces :
                        bureaux, logements, commerces et projets
                        immobiliers sur mesure.

                    </p>


                </div>







                <div class="expertise-card">


                    <div class="card-number">

                        04

                    </div>


                    <h3>

                        Mobilier sur mesure

                    </h3>


                    <p>

                        Fabrication de meubles personnalisés :
                        cuisines, dressings, rangements et créations
                        adaptées à chaque environnement.

                    </p>


                </div>




            </div>




        </div>


    </section>







    <style>
        .intro-box {


            max-width: 950px;


            margin: auto;


            text-align: center;


        }



        .intro-box h2 {


            font-size: 3.2rem;


            margin: 30px 0;


        }



        .section-header {


            text-align: center;


            margin-bottom: 60px;


        }



        .section-header h2 {


            font-size: 3.2rem;


            margin: 25px 0;


        }



        .expertise-grid {


            display: grid;


            grid-template-columns:

                repeat(2, 1fr);


            gap: 35px;


        }





        .expertise-card {


            background: var(--surface);


            padding: 45px;


            border-radius: 25px;


            border: 1px solid var(--border);


            box-shadow:

                0 15px 40px rgba(43, 35, 28, .07);


            position: relative;


            transition: .35s;


        }



        .expertise-card:hover {


            transform: translateY(-10px);


            box-shadow:

                0 25px 60px rgba(43, 35, 28, .15);


        }



        .card-number {


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



        .expertise-card h3 {


            font-size: 1.9rem;


            color: var(--brick);


            margin-bottom: 20px;


        }



        .expertise-card p {


            font-size: 1.05rem;


        }




        @media(max-width:768px) {


            .intro-box h2,
            .section-header h2 {


                font-size: 2.2rem;


            }



            .expertise-grid {


                grid-template-columns: 1fr;


            }



            .expertise-card {


                padding: 30px;


            }


        }
    </style>

    <!-- ===============================
             MD2 DESIGN DANS LE GROUPE
        ================================ -->


    <section class="md-section" style="background:#F5EFE2;">


        <div class="md-container">


            <div class="group-box">



                <span class="md-tag">

                     MD2 Design

                </span>




                <h2>

                    Une expertise intégrée
                    au cœur d'un groupe multidisciplinaire.

                </h2>




                <p>

                    MD2 Design s'inscrit dans l'écosystème du groupe Diaboss,
                    où chaque filiale apporte son expertise pour accompagner
                    les projets de construction, d'aménagement et de valorisation
                    immobilière.

                    <br><br>

                    Cette complémentarité permet au groupe de proposer une
                    approche globale : de la conception architecturale aux
                    finitions intérieures, en passant par les matériaux et
                    l'accompagnement des professionnels.

                </p>


            </div>


        </div>


    </section>









    <!-- ===============================
             VISION MD2 DESIGN
        ================================ -->


    <section class="md-section">


        <div class="md-container">


            <div class="vision">



                <span class="md-tag">

                    NOTRE VISION

                </span>



                <h2>

                    Créer des espaces qui
                    inspirent et durent.

                </h2>




                <p>

                    Chez MD2 Design, chaque projet est une recherche
                    d'équilibre entre beauté, fonctionnalité et qualité.

                    <br><br>

                    Nous croyons que chaque espace possède un potentiel
                    unique. Notre mission est de révéler cette identité
                    grâce à des solutions personnalisées et un savoir-faire
                    maîtrisé.

                </p>



            </div>


        </div>


    </section>








    <style>
        .group-box {


            background: var(--surface);


            padding: 75px;


            border-radius: 30px;


            text-align: center;


            box-shadow:

                0 25px 60px rgba(43, 35, 28, .10);


        }



        .group-box h2 {


            font-size: 3.2rem;


            max-width: 900px;


            margin: 30px auto;


        }



        .group-box p {


            max-width: 900px;


            margin: auto;


        }



        .divider {


            height: 1px;


            background: var(--border);


            max-width: 700px;


            margin: 55px auto;


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


            text-decoration: none;


            font-family: "Inter";


            font-weight: 600;


            color: var(--text);


            background: #E7C39A;


            padding: 15px 30px;


            border-radius: 50px;


            transition: .3s;


        }



        .filiale-links a:hover {


            background: var(--brick);


            color: white;


            transform: translateY(-5px);


        }





        .vision {


            max-width: 950px;


            margin: auto;


            text-align: center;


        }



        .vision h2 {


            font-size: 3.4rem;


            margin: 30px 0;


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


                font-size: 2.3rem;


            }



            .filiale-links a {


                width: 100%;


            }


        }
    </style>





    <!-- ===============================
             FIN PAGE MD2 DESIGN
        ================================ -->
@endsection
