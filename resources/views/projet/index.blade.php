@extends('layout.main')

@section('content')
    <style>
        /* =========================================================
           DIABOSS GROUPE — PROJETS
           Premium Editorial / Real Estate Style
           ========================================================= */

        :root {
            --dg-navy: #1E3A5F;
            --dg-navy-dark: #142942;
            --dg-navy-soft: #2E4E78;
            --dg-gold: #C9982F;
            --dg-gold-light: #E9C878;

            --dg-bg: #F7F4EC;
            --dg-bg-alt: #EFE8D6;
            --dg-white: #FFFFFF;

            --dg-ink: #1E2126;
            --dg-muted: #656A72;
            --dg-line: rgba(30, 58, 95, .13);

            --dg-radius: 18px;
            --dg-shadow: 0 18px 45px rgba(20, 41, 66, .10);
            --dg-shadow-lg: 0 28px 75px rgba(20, 41, 66, .17);

            --dg-container: 1240px;
        }

        /* =========================================================
           GLOBAL
           ========================================================= */

        .dg-projects-page {
            background: var(--dg-bg);
            color: var(--dg-ink);
            font-family: "Lato", Arial, sans-serif;
            overflow: hidden;
        }

        .dg-projects-page h1,
        .dg-projects-page h2,
        .dg-projects-page h3,
        .dg-projects-page h4,
        .dg-projects-page h5 {
            font-family: "Playfair Display", Georgia, serif;
        }

        .dg-projects-container {
            width: min(100%, var(--dg-container));
            margin: 0 auto;
            padding-left: 32px;
            padding-right: 32px;
        }

        /* =========================================================
           HERO
           ========================================================= */

        .dg-projects-hero {
            position: relative;
            min-height: 620px;
            display: flex;
            align-items: center;
            overflow: hidden;


        }

        .dg-projects-hero::before {
            content: "";
            position: absolute;
            inset: 0;



            pointer-events: none;
        }

        .dg-projects-hero::after {
            content: "";
            position: absolute;
            inset: 0;

            radial-gradient(circle at 80% 25%, rgba(201, 152, 47, .12), transparent 34%),
            linear-gradient(135deg, #f8f5ee 0%, #f1ede3 58%, #e9e1d1 100%);
            radial-gradient(circle at 80% 25%, rgba(201, 152, 47, .12), transparent 34%),
            linear-gradient(135deg, #f8f5ee 0%, #f1ede3 58%, #e9e1d1 100%);

            pointer-events: none;
        }

        .dg-projects-hero-content {
            position: relative;
            z-index: 2;

            width: 100%;
            display: grid;
            grid-template-columns: minmax(0, 1fr) 360px;
            align-items: center;
            gap: 90px;

            padding-top: 90px;
            padding-bottom: 90px;
        }

        .dg-projects-hero-copy {
            max-width: 760px;
        }

        .dg-projects-hero-label {
            display: inline-flex;
            align-items: center;
            gap: 12px;

            margin-bottom: 28px;

            color: var(--dg-gold-light);
            font-size: .82rem;
            font-weight: 700;
            letter-spacing: .18em;
            text-transform: uppercase;
        }

        .dg-projects-hero-label::before {
            content: "";
            width: 42px;
            height: 2px;
            background: var(--dg-gold);
        }

        .dg-projects-hero h1 {
            margin: 0 0 28px;

            color: #fff;

            font-size: clamp(4rem, 7vw, 6.7rem);
            line-height: .96;
            font-weight: 500;
            letter-spacing: -.045em;
        }

        .dg-projects-hero h1 span {
            color: var(--dg-gold-light);
            font-style: italic;
        }

        .dg-projects-hero-description {
            max-width: 650px;

            color: rgba(255, 255, 255, .78);

            font-size: 1.18rem;
            line-height: 1.85;
            font-weight: 400;
        }

        /* =========================================================
           LOGO DIABOSS GROUPE
           ========================================================= */

        .dg-projects-hero-logo {
            position: relative;
            z-index: 3;

            display: flex;
            align-items: center;
            justify-content: center;

            min-height: 310px;

            padding: 55px 40px;

            background: rgba(255, 255, 255, .055);
            border: 1px solid rgba(255, 255, 255, .16);
            border-radius: 26px;

            backdrop-filter: blur(12px);
            -webkit-backdrop-filter: blur(12px);

            box-shadow:
                0 30px 80px rgba(0, 0, 0, .18),
                inset 0 1px 0 rgba(255, 255, 255, .08);
        }

        .dg-projects-hero-logo::before {
            content: "";
            position: absolute;
            inset: 14px;

            border: 1px solid rgba(201, 152, 47, .28);
            border-radius: 18px;

            pointer-events: none;
        }

        .dg-projects-hero-logo img {
            position: relative;
            z-index: 2;

            width: 235px;
            max-width: 100%;
            height: auto;

            object-fit: contain;

            filter:
                brightness(0) invert(1);

            opacity: .96;

            transition: .35s ease;
        }

        .dg-projects-hero-logo:hover img {
            transform: scale(1.035);
        }

        .dg-projects-hero-logo-caption {
            position: absolute;
            bottom: 22px;
            left: 0;
            right: 0;

            text-align: center;

            color: var(--dg-gold-light);

            font-size: .7rem;
            font-weight: 700;
            letter-spacing: .2em;
            text-transform: uppercase;
        }

        /* =========================================================
           INTRODUCTION
           ========================================================= */

        .dg-projects-intro {
            padding: 125px 0 115px;
            background: var(--dg-bg);
        }

        .dg-projects-intro-grid {
            display: grid;
            grid-template-columns: 170px minmax(0, 780px);
            gap: 85px;
            justify-content: center;
        }

        .dg-projects-intro-number {
            color: var(--dg-gold);

            font-family: "Playfair Display", Georgia, serif;
            font-size: 1.3rem;
            font-weight: 600;

            padding-top: 12px;

            border-top: 1px solid var(--dg-gold);
        }

        .dg-projects-intro-label,
        .dg-projects-label {
            display: flex;
            align-items: center;
            gap: 12px;

            color: var(--dg-gold);

            font-size: .78rem;
            font-weight: 700;
            letter-spacing: .16em;
            text-transform: uppercase;

            margin-bottom: 22px;
        }

        .dg-projects-intro-label::before,
        .dg-projects-label::before {
            content: "";
            width: 34px;
            height: 1px;
            background: var(--dg-gold);
        }

        .dg-projects-intro h2 {
            margin: 0 0 30px;

            color: var(--dg-navy-dark);

            font-size: clamp(2.8rem, 5vw, 4.4rem);
            line-height: 1.05;
            font-weight: 500;
            letter-spacing: -.035em;
        }

        .dg-projects-intro h2 em {
            color: var(--dg-gold);
            font-style: italic;
        }

        .dg-projects-intro p {
            max-width: 720px;

            color: var(--dg-muted);

            font-size: 1.08rem;
            line-height: 1.9;

            margin-bottom: 20px;
        }

        /* =========================================================
           PROJECTS
           ========================================================= */

        .dg-project {
            padding: 110px 0;
            border-top: 1px solid var(--dg-line);
        }

        .dg-project:nth-of-type(even) {
            background: #FBF9F3;
        }

        .dg-project-header {
            display: flex;
            justify-content: space-between;
            align-items: flex-end;
            gap: 40px;

            margin-bottom: 55px;
        }

        .dg-project-category {
            color: var(--dg-gold);

            font-size: .76rem;
            font-weight: 700;
            letter-spacing: .15em;
            text-transform: uppercase;

            margin-bottom: 16px;
        }

        .dg-project-header h2 {
            margin: 0;

            color: var(--dg-navy-dark);

            font-size: clamp(3rem, 5vw, 5rem);
            line-height: .98;
            font-weight: 500;
            letter-spacing: -.04em;
        }

        .dg-project-header h2 span {
            color: var(--dg-gold);
            font-style: italic;
        }

        .dg-project-location {
            min-width: 180px;
            padding-left: 25px;

            border-left: 1px solid var(--dg-gold);
        }

        .dg-project-location span {
            display: block;

            color: var(--dg-muted);

            font-size: .7rem;
            font-weight: 700;
            letter-spacing: .12em;
            text-transform: uppercase;

            margin-bottom: 8px;
        }

        .dg-project-location strong {
            color: var(--dg-navy-dark);

            font-family: "Playfair Display", Georgia, serif;
            font-size: 1.1rem;
            font-weight: 600;
        }

        /* =========================================================
           PROJECT GALLERY
           ========================================================= */

        .dg-project-main {
            display: grid;
            grid-template-columns: minmax(0, 1.65fr) minmax(270px, .65fr);
            gap: 20px;

            margin-bottom: 55px;
        }

        .dg-project-side {
            display: grid;
            grid-template-rows: repeat(2, 1fr);
            gap: 20px;
        }

        .dg-project-image-large,
        .dg-project-image-small {
            position: relative;
            overflow: hidden;

            background: #ddd;

            border-radius: var(--dg-radius);
            box-shadow: var(--dg-shadow);
        }

        .dg-project-image-large {
            min-height: 620px;
        }

        .dg-project-image-small {
            min-height: 300px;
        }

        .dg-project-image-large::after,
        .dg-project-image-small::after {
            content: "";

            position: absolute;
            inset: 0;

            background: linear-gradient(to top,
                    rgba(20, 41, 66, .20),
                    transparent 45%);

            pointer-events: none;
        }

        .dg-project-image-large img,
        .dg-project-image-small img {
            width: 100%;
            height: 100%;

            display: block;

            object-fit: cover;

            transition:
                transform .7s cubic-bezier(.2, .65, .25, 1);
        }

        .dg-project-image-large:hover img,
        .dg-project-image-small:hover img {
            transform: scale(1.045);
        }

        /* =========================================================
           INFORMATION
           ========================================================= */

        .dg-project-information {
            display: grid;
            grid-template-columns: minmax(0, 1fr) minmax(360px, .8fr);
            gap: 90px;

            align-items: start;
        }

        .dg-project-description h3 {
            color: var(--dg-navy-dark);

            font-size: 2rem;
            line-height: 1.2;
            font-weight: 500;

            margin: 0 0 22px;
        }

        .dg-project-description p {
            color: var(--dg-muted);

            font-size: 1.03rem;
            line-height: 1.85;

            margin: 0 0 18px;
        }

        .dg-project-features {
            display: grid;
            grid-template-columns: repeat(2, 1fr);

            border-top: 1px solid var(--dg-line);
        }

        .dg-project-feature {
            padding: 22px 15px 22px 0;

            border-bottom: 1px solid var(--dg-line);
        }

        .dg-project-feature:nth-child(odd) {
            border-right: 1px solid var(--dg-line);
            padding-right: 22px;
        }

        .dg-project-feature:nth-child(even) {
            padding-left: 22px;
        }

        .dg-project-feature span {
            display: block;

            color: var(--dg-muted);

            font-size: .7rem;
            font-weight: 700;
            letter-spacing: .1em;
            text-transform: uppercase;

            margin-bottom: 7px;
        }

        .dg-project-feature strong {
            color: var(--dg-navy-dark);

            font-family: "Playfair Display", Georgia, serif;

            font-size: 1.1rem;
            font-weight: 600;
        }

        /* =========================================================
           VISION
           ========================================================= */

        .dg-project-vision {
            padding: 150px 0;

            background:
                radial-gradient(700px 400px at 80% 20%,
                    rgba(201, 152, 47, .22),
                    transparent 65%),
                linear-gradient(145deg,
                    var(--dg-navy-dark),
                    var(--dg-navy));

            color: #fff;
        }

        .dg-project-vision-inner {
            max-width: 850px;
            margin: 0 auto;

            text-align: center;
        }

        .dg-project-vision-label {
            color: var(--dg-gold-light);

            font-size: .78rem;
            font-weight: 700;
            letter-spacing: .18em;
            text-transform: uppercase;

            margin-bottom: 25px;
        }

        .dg-project-vision h2 {
            margin: 0 0 25px;

            color: #fff;

            font-size: clamp(3rem, 5vw, 5rem);
            line-height: 1.05;
            font-weight: 500;
            letter-spacing: -.04em;
        }

        .dg-project-vision h2 em {
            color: var(--dg-gold-light);
        }

        .dg-project-vision p {
            max-width: 650px;
            margin: auto;

            color: rgba(255, 255, 255, .72);

            font-size: 1.12rem;
            line-height: 1.8;
        }

        /* =========================================================
           CTA
           ========================================================= */

        .dg-project-cta {
            padding: 110px 0;
            background: var(--dg-bg);
        }

        .dg-project-cta-box {
            position: relative;
            overflow: hidden;

            padding: 90px 60px;

            text-align: center;

            border-radius: 28px;

            background:
                radial-gradient(600px 300px at 90% 0%,
                    rgba(201, 152, 47, .24),
                    transparent 65%),
                linear-gradient(145deg,
                    var(--dg-navy-dark),
                    var(--dg-navy));

            box-shadow: var(--dg-shadow-lg);
        }

        .dg-project-cta-box::before {
            content: "";

            position: absolute;
            inset: 16px;

            border: 1px solid rgba(255, 255, 255, .10);
            border-radius: 20px;

            pointer-events: none;
        }

        .dg-project-cta-box .dg-projects-label {
            justify-content: center;

            position: relative;
            z-index: 2;
        }

        .dg-project-cta-box .dg-projects-label::before {
            display: none;
        }

        .dg-project-cta-box h2 {
            position: relative;
            z-index: 2;

            max-width: 800px;
            margin: 0 auto 22px;

            color: #fff;

            font-size: clamp(2.8rem, 5vw, 4.5rem);
            line-height: 1.05;
            font-weight: 500;
            letter-spacing: -.035em;
        }

        .dg-project-cta-box h2 span {
            color: var(--dg-gold-light);
            font-style: italic;
        }

        .dg-project-cta-box p {
            position: relative;
            z-index: 2;

            max-width: 650px;
            margin: 0 auto 35px;

            color: rgba(255, 255, 255, .72);

            font-size: 1.08rem;
            line-height: 1.8;
        }

        .dg-project-cta-btn {
            position: relative;
            z-index: 2;

            display: inline-flex;
            align-items: center;
            gap: 14px;

            padding: 15px 28px;

            color: var(--dg-navy-dark);
            background: var(--dg-gold);

            border-radius: 10px;

            font-size: .9rem;
            font-weight: 700;

            text-decoration: none;

            transition: .3s ease;
        }

        .dg-project-cta-btn:hover {
            background: var(--dg-gold-light);
            color: var(--dg-navy-dark);
            transform: translateY(-3px);
            box-shadow: 0 14px 30px rgba(201, 152, 47, .25);
        }

        /* =========================================================
           RESPONSIVE
           ========================================================= */

        @media (max-width: 992px) {

            .dg-projects-hero-content {
                grid-template-columns: 1fr;
                gap: 55px;
            }

            .dg-projects-hero-logo {
                width: 100%;
                max-width: 420px;
                margin: 0 auto;
            }

            .dg-project-information {
                grid-template-columns: 1fr;
                gap: 55px;
            }

            .dg-project-main {
                grid-template-columns: 1fr;
            }

            .dg-project-side {
                grid-template-columns: repeat(2, 1fr);
                grid-template-rows: 1fr;
            }

            .dg-project-image-large {
                min-height: 500px;
            }

            .dg-project-image-small {
                min-height: 280px;
            }
        }

        @media (max-width: 768px) {

            .dg-projects-container {
                padding-left: 22px;
                padding-right: 22px;
            }

            .dg-projects-hero {
                min-height: auto;
            }

            .dg-projects-hero-content {
                padding-top: 75px;
                padding-bottom: 75px;
            }

            .dg-projects-hero h1 {
                font-size: clamp(3.3rem, 14vw, 5rem);
            }

            .dg-projects-hero-description {
                font-size: 1rem;
            }

            .dg-projects-intro {
                padding: 85px 0;
            }

            .dg-projects-intro-grid {
                grid-template-columns: 1fr;
                gap: 30px;
            }

            .dg-projects-intro-number {
                max-width: 50px;
            }

            .dg-project {
                padding: 80px 0;
            }

            .dg-project-header {
                display: block;
                margin-bottom: 40px;
            }

            .dg-project-location {
                margin-top: 25px;
            }

            .dg-project-main {
                gap: 14px;
            }

            .dg-project-side {
                gap: 14px;
            }

            .dg-project-image-large {
                min-height: 380px;
            }

            .dg-project-image-small {
                min-height: 220px;
            }

            .dg-project-information {
                gap: 45px;
            }

            .dg-project-features {
                grid-template-columns: 1fr 1fr;
            }

            .dg-project-vision {
                padding: 100px 0;
            }

            .dg-project-cta {
                padding: 75px 0;
            }

            .dg-project-cta-box {
                padding: 70px 25px;
            }
        }

        @media (max-width: 520px) {

            .dg-projects-hero-logo {
                min-height: 260px;
                padding: 40px 25px;
            }

            .dg-projects-hero-logo img {
                width: 190px;
            }

            .dg-project-side {
                grid-template-columns: 1fr;
            }

            .dg-project-image-small {
                min-height: 260px;
            }

            .dg-project-features {
                grid-template-columns: 1fr;
            }

            .dg-project-feature:nth-child(odd) {
                border-right: none;
                padding-right: 15px;
            }

            .dg-project-feature:nth-child(even) {
                padding-left: 0;
            }
        }
    </style>

    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('css/filiale.css') }}" rel="stylesheet">

    <div class="dg-projects-page">




        <section class="dg-projects-hero">

            <div class="dg-projects-container">

                <div class="dg-projects-hero-content">

                    {{-- TEXTE --}}
                    <div class="dg-projects-hero-copy">

                        <div class="dg-projects-hero-label">
                            Diaboss Groupe · Immobilier
                        </div>

                        <h1>
                            Des projets.<br>
                            <span>Une vision.</span>
                        </h1>

                        <p class="dg-projects-hero-description">
                            Découvrez les projets immobiliers qui traduisent
                            notre ambition de créer des espaces durables,
                            accessibles et pensés pour les générations futures.
                        </p>

                    </div>


                    {{-- CADRE LOGO --}}
                    <div class="dg-projects-hero-logo">

                        <div class="dg-projects-hero-logo-frame">

                            <img src="{{ asset('logo.png') }}" alt="DIABOSS GROUPE">

                        </div>

                        <div class="dg-projects-hero-logo-caption">
                            DIABOSS GROUPE
                        </div>

                    </div>

                </div>

            </div>

        </section>


        <style>
            /* =========================================================
               HERO PROJETS
            ========================================================= */

            .dg-projects-hero {
                position: relative;
                overflow: hidden;
                background:  radial-gradient(circle at 80% 25%, rgba(201, 152, 47, .12),
                 transparent 34%), linear-gradient(135deg, #f8f5ee 0%, #f1ede3 58%, #e9e1d1 100%);
                color: #fff;
            }


            /* Légère texture très discrète */

            .dg-projects-hero::after {
                content: "";

                position: absolute;
                inset: 0;

                background:
                    linear-gradient(120deg,
                        transparent 0%,
                        rgba(255, 255, 255, .025) 50%,
                        transparent 100%);

                pointer-events: none;
            }


            .dg-projects-hero .dg-projects-container {
                position: relative;
                z-index: 2;

                width: min(100%, 1180px);
                margin: 0 auto;
                padding: 0 2rem;
            }


            /* =========================================================
               CONTENU
            ========================================================= */

            .dg-projects-hero-content {

                display: grid;

                grid-template-columns:
                    minmax(0, 1fr) 390px;

                align-items: center;

                gap: 6rem;
            }


            /* =========================================================
               TEXTE
            ========================================================= */

            .dg-projects-hero-copy {
                max-width: 720px;
            }


            .dg-projects-hero-label {

                display: inline-flex;
                align-items: center;
                gap: .65rem;

                margin-bottom: 1.7rem;
            color: #1e3a5f;

                font-family: "Lato", Arial, sans-serif;

                font-size: .78rem;
                font-weight: 700;

                letter-spacing: .16em;
                text-transform: uppercase;
            }


            .dg-projects-hero-label::before {

                content: "";

                width: 34px;
                height: 1px;

                background: #c9982f;
            }


            .dg-projects-hero-copy h1 {

                margin: 0 0 1.5rem;

                color: #0d1b2a;

                font-family:
                    "Playfair Display",
                    Georgia,
                    serif;

                font-size: clamp(3.4rem,
                        6vw,
                        5.7rem);

                font-weight: 500;

                line-height: .98;

                letter-spacing: -.035em;
            }


            .dg-projects-hero-copy h1 span {

                color: #b58a32;

                font-style: italic;
            }


            .dg-projects-hero-description {

                max-width: 610px;

                margin: 0;

                color: rgb(52 48 48 / 78%);


                font-family:
                    "Lato",
                    Arial,
                    sans-serif;

                font-size: 1.12rem;

                line-height: 1.85;
            }


            /* =========================================================
               LOGO À DROITE
            ========================================================= */

            .dg-projects-hero-logo {

                display: flex;

                flex-direction: column;

                align-items: center;

                justify-content: center;

                text-align: center;
            }


            .dg-projects-hero-logo-frame {

                width: 330px;
                height: 330px;

                display: flex;

                align-items: center;
                justify-content: center;

                padding: 3.2rem;

                border: 1px solid rgba(231, 200, 120, .42);

                background:
                    linear-gradient(145deg,
                        rgba(255, 255, 255, .085),
                        rgba(255, 255, 255, .025));

                box-shadow:
                    0 25px 60px rgba(5, 18, 32, .25);

                position: relative;
            }


            /* Petit détail architectural dans les coins */

            .dg-projects-hero-logo-frame::before,
            .dg-projects-hero-logo-frame::after {

                content: "";

                position: absolute;

                width: 24px;
                height: 24px;

                border-color: #c9982f;
            }


            .dg-projects-hero-logo-frame::before {

                top: -1px;
                left: -1px;

                border-top: 2px solid;
                border-left: 2px solid;
            }


            .dg-projects-hero-logo-frame::after {

                right: -1px;
                bottom: -1px;

                border-right: 2px solid;
                border-bottom: 2px solid;
            }


            .dg-projects-hero-logo-frame img {

                width: 100%;
                max-width: 230px;

                height: auto;

                display: block;

                object-fit: contain;

                filter:
                    drop-shadow(0 10px 20px rgba(0, 0, 0, .15));
            }


            .dg-projects-hero-logo-caption {

                margin-top: 1.25rem;

                color: #e7c878;

                font-family:
                    "Lato",
                    Arial,
                    sans-serif;

                font-size: .72rem;

                font-weight: 700;

                letter-spacing: .22em;

                text-transform: uppercase;
            }


            /* =========================================================
               RESPONSIVE
            ========================================================= */

            @media (max-width: 900px) {

                .dg-projects-hero {

                    padding: 5rem 0;
                }

                .dg-projects-hero-content {

                    grid-template-columns: 1fr;

                    gap: 3.5rem;
                }

                .dg-projects-hero-copy {

                    text-align: center;
                    margin: 0 auto;
                }

                .dg-projects-hero-label {

                    justify-content: center;
                }

                .dg-projects-hero-description {

                    margin: 0 auto;
                }

                .dg-projects-hero-logo {

                    margin: 0 auto;
                }
            }


            @media (max-width: 576px) {

                .dg-projects-hero {

                    padding: 4rem 0;
                }

                .dg-projects-hero .dg-projects-container {

                    padding: 0 1.25rem;
                }

                .dg-projects-hero-copy h1 {

                    font-size: 3.2rem;
                }

                .dg-projects-hero-description {

                    font-size: 1rem;
                }

                .dg-projects-hero-logo-frame {

                    width: 260px;
                    height: 260px;

                    padding: 2.4rem;
                }
            }
        </style>




        {{-- =========================================================
         INTRODUCTION
         ========================================================= --}}

        <section class="dg-projects-intro">

            <div class="dg-projects-container">

                <div class="dg-projects-intro-grid">

                    <div>

                        <div class="dg-projects-intro-number">
                            01
                        </div>

                    </div>

                    <div>

                        <div class="dg-projects-intro-label">
                            Notre vision immobilière
                        </div>

                        <h2>
                            Construire plus qu'un logement.<br>
                            <em>Créer un lieu de vie.</em>
                        </h2>

                        <p>
                            À travers ses différents programmes, DIABOSS
                            développe une nouvelle manière de penser
                            l'habitat et l'aménagement urbain.
                        </p>

                        <p>
                            Nos projets associent réflexion architecturale,
                            qualité constructive, solutions adaptées au
                            contexte local et volonté de créer des espaces
                            capables de répondre aux besoins réels des
                            familles, des professionnels et des investisseurs.
                        </p>

                    </div>

                </div>

            </div>

        </section>


        {{-- =========================================================
         PROJET 01 — CITE SOUNDİATA
         ========================================================= --}}

        <section class="dg-project" id="soundiata">

            <div class="dg-projects-container">

                <div class="dg-project-header">

                    <div>

                        <div class="dg-project-category">
                            Projet résidentiel · 01
                        </div>

                        <h2>
                            Cité <span>Soundiata</span>
                        </h2>

                    </div>

                    <div class="dg-project-location">

                        <span>
                            Localisation
                        </span>

                        <strong>
                            Kabé · Bamako
                        </strong>

                    </div>

                </div>


                <div class="dg-project-main">

                    <div class="dg-project-image-large">

                        <img src="{{ asset('/soundiata3D-3.png') }}" alt="Cité Soundiata - DIABOSS">

                    </div>


                    <div class="dg-project-side">

                        <div class="dg-project-image-small">

                            <img src="{{ asset('/soundiata3D-2.png') }}" alt="Cité Soundiata - Habitat">

                        </div>

                        <div class="dg-project-image-small">

                            <img src="{{ asset('/salon.jpg') }}" alt="Cité Soundiata - Maison">

                        </div>

                    </div>

                </div>


                <div class="dg-project-information">

                    <div class="dg-project-description">

                        <h3>
                            Un habitat pensé autrement.
                        </h3>

                        <p>
                            Située à Kabé, à Bamako, Cité Soundiata est
                            un projet résidentiel conçu autour d'une vision
                            moderne, écologique et durable de l'habitat.
                        </p>

                        <p>
                            Le projet intègre des solutions adaptées au
                            contexte local, notamment l'utilisation de
                            briques de terre comprimée, l'énergie solaire
                            et des solutions permettant de mieux maîtriser
                            les ressources.
                        </p>

                        <p>
                            L'objectif est de proposer des logements
                            confortables et fonctionnels dans un environnement
                            pensé pour offrir une véritable qualité de vie.
                        </p>

                    </div>


                    <div class="dg-project-features">

                        <div class="dg-project-feature">
                            <span>Superficie</span>
                            <strong>5 hectares</strong>
                        </div>

                        <div class="dg-project-feature">
                            <span>Typologie</span>
                            <strong>T3 · T4 · T5</strong>
                        </div>

                        <div class="dg-project-feature">
                            <span>Construction</span>
                            <strong>BTC</strong>
                        </div>

                        <div class="dg-project-feature">
                            <span>Approche</span>
                            <strong>Éco-responsable</strong>
                        </div>

                    </div>

                </div>

            </div>

        </section>


        {{-- =========================================================
         PROJET 02 — SOGOLON KONDE
         ========================================================= --}}

        <section class="dg-project" id="sogolon">

            <div class="dg-projects-container">

                <div class="dg-project-header">

                    <div>

                        <div class="dg-project-category">
                            Développement immobilier · 02
                        </div>

                        <h2>
                            Sogolon <span>Kondé</span>
                        </h2>

                    </div>

                    <div class="dg-project-location">

                        <span>
                            Localisation
                        </span>

                        <strong>
                            Banankoro · Mali
                        </strong>

                    </div>

                </div>


                <div class="dg-project-main">

                    <div class="dg-project-side">

                        <div class="dg-project-image-small">

                            <img src="{{ asset('/villa.png') }}" alt="Sogolon Kondé - Lotissement">

                        </div>

                        <div class="dg-project-image-small">

                            <img src="{{ asset('/soundiata3D-1.jpg') }}" alt="Sogolon Kondé - Projet immobilier">

                        </div>

                    </div>


                    <div class="dg-project-image-large">

                        <img src="{{ asset('/sogolon3D-1.jpg') }}" alt="Sogolon Kondé - DIABOSS">

                    </div>

                </div>


                <div class="dg-project-information">

                    <div class="dg-project-features">

                        <div class="dg-project-feature">
                            <span>Localisation</span>
                            <strong>Banankoro</strong>
                        </div>

                        <div class="dg-project-feature">
                            <span>Lots</span>
                            <strong>130 lots</strong>
                        </div>

                        <div class="dg-project-feature">
                            <span>Public</span>
                            <strong>Particuliers</strong>
                        </div>

                        <div class="dg-project-feature">
                            <span>Cible</span>
                            <strong>Diaspora</strong>
                        </div>

                    </div>


                    <div class="dg-project-description">

                        <h3>
                            Un territoire à construire.
                        </h3>

                        <p>
                            Sogolon Kondé s'inscrit dans une démarche de
                            développement immobilier destinée à accompagner
                            la croissance des besoins en logements et en foncier.
                        </p>

                        <p>
                            Le projet propose un cadre structuré permettant
                            aux familles, professionnels et membres de la
                            diaspora de construire leur avenir dans un
                            environnement pensé pour évoluer avec le temps.
                        </p>

                    </div>

                </div>

            </div>

        </section>


        {{-- =========================================================
         PROJET 03 — SAMORY TOURE
         ========================================================= --}}

        <section class="dg-project" id="samory">

            <div class="dg-projects-container">

                <div class="dg-project-header">

                    <div>

                        <div class="dg-project-category">
                            Programme immobilier · 03
                        </div>

                        <h2>
                            Samory <span>Touré</span>
                        </h2>

                    </div>

                    <div class="dg-project-location">

                        <span>
                            Localisation
                        </span>

                        <strong>
                            Guinée
                        </strong>

                    </div>

                </div>


                <div class="dg-project-main">

                    <div class="dg-project-image-large">

                        <img src="{{ asset('/soundiata.png') }}" alt="Projet Samory Touré">

                    </div>


                    <div class="dg-project-side">

                        <div class="dg-project-image-small">

                            <img src="{{ asset('/soundiata3D-4.png') }}" alt="Samory Touré - Architecture">

                        </div>

                        <div class="dg-project-image-small">

                            <img src="{{ asset('/soundiata3D-5.png') }}" alt="Samory Touré - Habitat">

                        </div>

                    </div>

                </div>


                <div class="dg-project-information">

                    <div class="dg-project-description">

                        <h3>
                            Une nouvelle vision de l'habitat.
                        </h3>

                        <p>
                            Le projet Samory Touré traduit la volonté de
                            DIABOSS de développer des solutions immobilières
                            au-delà des frontières maliennes.
                        </p>

                        <p>
                            Pensé comme un projet résidentiel à dimension
                            moderne, il s'inscrit dans une démarche de
                            création de logements adaptés aux nouvelles
                            attentes des habitants.
                        </p>

                    </div>


                    <div class="dg-project-features">

                        <div class="dg-project-feature">
                            <span>Pays</span>
                            <strong>Guinée</strong>
                        </div>

                        <div class="dg-project-feature">
                            <span>Nature</span>
                            <strong>Résidentiel</strong>
                        </div>

                        <div class="dg-project-feature">
                            <span>Vision</span>
                            <strong>Moderne</strong>
                        </div>

                        <div class="dg-project-feature">
                            <span>Groupe</span>
                            <strong>DIABOSS</strong>
                        </div>

                    </div>

                </div>

            </div>

        </section>


        {{-- =========================================================
         PROJET 04 — CITE DES ARMEES
         ========================================================= --}}

        <section class="dg-project">

            <div class="dg-projects-container">

                <div class="dg-project-header">

                    <div>

                        <div class="dg-project-category">
                            Projet résidentiel · 04
                        </div>

                        <h2>
                            Cité des <span>Armées</span>
                        </h2>

                    </div>

                    <div class="dg-project-location">

                        <span>
                            Projet
                        </span>

                        <strong>
                            DIABOSS GROUPE
                        </strong>

                    </div>

                </div>


                <div class="dg-project-main">

                    <div class="dg-project-image-large">

                        <img src="{{ asset('/sogolon3D-1.jpg') }}" alt="Cité des Armées">

                    </div>


                    <div class="dg-project-side">

                        <div class="dg-project-image-small">

                            <img src="{{ asset('/soundiata3D-1.jpg') }}" alt="Cité des Armées - Résidence">

                        </div>

                        <div class="dg-project-image-small">

                            <img src="{{ asset('/villa.png') }}" alt="Cité des Armées - Habitat">

                        </div>

                    </div>

                </div>


                <div class="dg-project-information">

                    <div class="dg-project-description">

                        <h3>
                            Un projet tourné vers l'avenir.
                        </h3>

                        <p>
                            La Cité des Armées fait partie des projets
                            immobiliers développés dans la vision globale
                            de DIABOSS GROUPE.
                        </p>

                        <p>
                            Elle illustre notre volonté de proposer des
                            espaces résidentiels structurés, fonctionnels
                            et adaptés aux besoins de leurs futurs occupants.
                        </p>

                    </div>


                    <div class="dg-project-features">

                        <div class="dg-project-feature">
                            <span>Type</span>
                            <strong>Résidentiel</strong>
                        </div>

                        <div class="dg-project-feature">
                            <span>Approche</span>
                            <strong>Habitat</strong>
                        </div>

                        <div class="dg-project-feature">
                            <span>Conception</span>
                            <strong>Moderne</strong>
                        </div>

                        <div class="dg-project-feature">
                            <span>Groupe</span>
                            <strong>DIABOSS</strong>
                        </div>

                    </div>

                </div>

            </div>

        </section>


        {{-- =========================================================
         VISION
         ========================================================= --}}

        <section class="dg-project-vision">

            <div class="dg-projects-container">

                <div class="dg-project-vision-inner">

                    <div class="dg-project-vision-label">
                        Notre ambition
                    </div>

                    <h2>
                        Des projets qui créent
                        <em>de la valeur.</em>
                    </h2>

                    <p>
                        Chaque projet est pensé comme une réponse aux
                        besoins d'aujourd'hui, mais aussi comme un
                        investissement pour demain.
                    </p>

                </div>

            </div>

        </section>


        {{-- =========================================================
         CTA
         ========================================================= --}}

        <section class="dg-project-cta">

            <div class="dg-projects-container">

                <div class="dg-project-cta-box">

                    <div class="dg-projects-label">
                        Votre projet
                    </div>

                    <h2>
                        Et si votre projet
                        devenait <span>notre prochaine réalisation ?</span>
                    </h2>

                    <p>
                        Parlons ensemble de votre besoin immobilier,
                        constructif ou d'aménagement.
                    </p>

                    <a href="{{ url('#contact') }}" class="dg-project-cta-btn">
                        Parlons de votre projet
                        →
                    </a>

                </div>

            </div>

        </section>

    </div>
@endsection
