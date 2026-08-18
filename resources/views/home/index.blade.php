@extends('layout.main')

@section('content')
    <style>
        /* =========================================================
                                   DIABOSS GROUPE — LUXURY / ARCHITECTURAL HOMEPAGE
                                   ========================================================= */

        :root {
            --dg-night: #0B1D2A;
            --dg-night-2: #132C3D;
            --dg-ivory: #F7F4EC;
            --dg-paper: #FCFBF8;
            --dg-white: #FFFFFF;

            --dg-gold: #C9A45C;
            --dg-gold-light: #E4CF9A;

            --dg-text: #1B2832;
            --dg-muted: #71808A;
            --dg-line: rgba(11, 29, 42, .12);

            --dg-serif: "Playfair Display", Georgia, serif;
            --dg-sans: "Lato", Arial, sans-serif;

            --navy: #102A43;
            --navy-deep: #071A2B;
            --navy-soft: #1E466A;

            --gold: #C89B3C;
            --gold-light: #E5C77A;
            --gold-dark: #9B7627;

            --cream: #F7F4EC;
            --white: #FFFFFF;
            --ink: #182533;
            --muted: #6B7785;
            --border: rgba(16, 42, 67, .12);

            --shadow-sm: 0 10px 30px rgba(7, 26, 43, .08);
            --shadow-lg: 0 30px 80px rgba(7, 26, 43, .16);

            --radius: 22px;
        }


        /* =========================================================
                                   RESET
                                   ========================================================= */

        *,
        *::before,
        *::after {
            box-sizing: border-box;
        }

        html {
            scroll-behavior: smooth;
        }

        body {
            margin: 0;
            background: var(--dg-paper);
            color: var(--dg-text);
            font-family: var(--dg-sans);
        }

        img {
            display: block;
            max-width: 100%;
        }

        a {
            text-decoration: none;
            color: inherit;
        }


        /* =========================================================
                                   GLOBAL
                                   ========================================================= */

        .dg-container {
            width: min(1180px, calc(100% - 40px));
            margin: auto;
        }

        .dg-section {
            padding: 110px 0;
        }

        .dg-eyebrow {
            display: inline-flex;
            align-items: center;
            gap: 12px;
            color: var(--gold-dark);
            text-transform: uppercase;
            letter-spacing: 3px;
            font-size: 12px;
            font-weight: 800;
            margin-bottom: 18px;
        }

        .dg-eyebrow::before {
            content: "";
            width: 38px;
            height: 1px;
            background: var(--gold);
        }

        .dg-title {
            margin: 0;
            color: var(--navy);
            font-family: "Playfair Display", serif;
            font-size: clamp(38px, 5vw, 64px);
            line-height: 1.05;
            font-weight: 600;
        }

        .dg-title span {
            color: var(--gold);
        }

        .dg-description {
            color: var(--muted);
            font-size: 17px;
            line-height: 1.85;
            max-width: 650px;
        }

        .dg-btn {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            gap: 12px;
            min-height: 54px;
            padding: 0 28px;
            border-radius: 999px;
            font-size: 14px;
            font-weight: 800;
            transition: .35s ease;
        }

        .dg-btn-gold {
            background: var(--gold);
            color: white;
            box-shadow: 0 12px 30px rgba(200, 155, 60, .28);
        }

        .dg-btn-gold:hover {
            background: var(--gold-dark);
            transform: translateY(-3px);
            box-shadow: 0 18px 35px rgba(200, 155, 60, .34);
        }

        .dg-btn-outline {
            border: 1px solid rgba(255, 255, 255, .45);
            color: white;
            backdrop-filter: blur(8px);
        }

        .dg-btn-outline:hover {
            background: white;
            color: var(--navy);
            transform: translateY(-3px);
        }




        .dg-luxury-container {
            width: min(1240px, calc(100% - 48px));
            margin: auto;
        }

        .dg-luxury-section {
            padding: 125px 0;
        }

        .dg-luxury-label {
            display: flex;
            align-items: center;
            gap: 14px;

            color: var(--dg-gold);
            font-size: 10px;
            font-weight: 800;
            letter-spacing: 3px;
            text-transform: uppercase;
        }

        .dg-luxury-label::before {
            content: "";
            width: 35px;
            height: 1px;
            background: var(--dg-gold);
        }

        .dg-luxury-title {
            margin: 18px 0 0;

            font-family: var(--dg-serif);
            font-size: clamp(42px, 5vw, 70px);
            line-height: 1.04;
            font-weight: 500;
            letter-spacing: -1.5px;

            color: var(--dg-night);
        }

        .dg-luxury-title em {
            color: var(--dg-gold);
            font-style: normal;
        }

        .dg-luxury-text {
            color: var(--dg-muted);
            font-size: 16px;
            line-height: 1.9;
        }

        .dg-luxury-btn {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            gap: 16px;

            min-height: 52px;
            padding: 0 25px;

            border: 1px solid var(--dg-gold);
            color: var(--dg-night);

            font-size: 11px;
            font-weight: 800;
            letter-spacing: 1.5px;
            text-transform: uppercase;

            transition: .35s ease;
        }

        .dg-luxury-btn:hover {
            background: var(--dg-gold);
            color: white;
        }

        .dg-luxury-btn-dark {
            border-color: var(--dg-gold);
            background: var(--dg-gold);
            color: white;
        }

        .dg-luxury-btn-dark:hover {
            background: transparent;
            color: var(--dg-gold);
        }



        /* =========================================================
                                   HERO
                                   ========================================================= */

        .dg-luxury-hero {
            position: relative;
            min-height: 92vh;

            display: flex;
            align-items: flex-end;

            overflow: hidden;

            background:
                linear-gradient(90deg,
                    rgba(5, 18, 27, .88) 0%,
                    rgba(5, 18, 27, .48) 48%,
                    rgba(5, 18, 27, .12) 100%),
                url("{{ asset('images/home/diaboss-hero.jpg') }}") center center / cover no-repeat;
        }

        .dg-luxury-hero::after {
            content: "";

            position: absolute;
            inset: auto 0 0;

            height: 180px;

            background: linear-gradient(to bottom,
                    transparent,
                    rgba(5, 18, 27, .7));
        }

        .dg-luxury-hero-content {
            position: relative;
            z-index: 2;

            padding: 0 0 105px;

            max-width: 850px;
        }

        .dg-luxury-hero-kicker {
            margin-bottom: 28px;

            color: var(--dg-gold-light);

            font-size: 11px;
            font-weight: 800;
            letter-spacing: 4px;
            text-transform: uppercase;
        }

        .dg-luxury-hero h1 {
            margin: 0;

            color: white;

            font-family: var(--dg-serif);
            font-size: clamp(58px, 8vw, 110px);
            line-height: .92;
            font-weight: 500;
            letter-spacing: -4px;
        }

        .dg-luxury-hero h1 span {
            color: var(--dg-gold-light);
        }

        .dg-luxury-hero-description {
            max-width: 610px;

            margin: 32px 0;

            color: rgba(255, 255, 255, .76);

            font-size: 17px;
            line-height: 1.85;
        }

        .dg-luxury-hero-actions {
            display: flex;
            gap: 12px;
            flex-wrap: wrap;
        }

        .dg-luxury-hero .dg-luxury-btn {
            color: white;
            border-color: rgba(255, 255, 255, .45);
        }

        .dg-luxury-hero .dg-luxury-btn:hover {
            border-color: var(--dg-gold);
            color: white;
            background: var(--dg-gold);
        }

        .dg-luxury-hero .dg-luxury-btn-dark {
            border-color: var(--dg-gold);
        }


        /* =========================================================
                                   INTRO
                                   ========================================================= */

        .dg-luxury-intro {
            background: var(--dg-paper);
        }

        .dg-luxury-intro-grid {
            display: grid;
            grid-template-columns: .9fr 1.1fr;
            gap: 100px;
            align-items: center;
        }

        .dg-luxury-image-frame {
            position: relative;
        }

        .dg-luxury-image {
            height: 650px;
            overflow: hidden;
        }

        .dg-luxury-image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .dg-luxury-image-frame::before {
            content: "";

            position: absolute;

            width: 100%;
            height: 100%;

            border: 1px solid var(--dg-gold);

            top: 22px;
            left: 22px;

            pointer-events: none;
        }

        .dg-luxury-year {
            position: absolute;

            bottom: -30px;
            right: -30px;

            width: 155px;
            height: 155px;

            display: flex;
            align-items: center;
            justify-content: center;

            text-align: center;

            background: var(--dg-night);
            color: white;

            font-family: var(--dg-serif);
            font-size: 22px;

            border-radius: 50%;
        }

        .dg-luxury-intro-content {
            padding-right: 30px;
        }

        .dg-luxury-intro-content .dg-luxury-text {
            max-width: 650px;
            margin: 25px 0;
        }

        .dg-luxury-points {
            margin: 35px 0;

            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 18px;
        }

        .dg-luxury-point {
            padding-top: 18px;

            border-top: 1px solid var(--dg-line);
        }

        .dg-luxury-point strong {
            display: block;

            margin-bottom: 7px;

            color: var(--dg-night);

            font-family: var(--dg-serif);
            font-size: 20px;
        }

        .dg-luxury-point span {
            color: var(--dg-muted);
            font-size: 13px;
        }


        /* =========================================================
                                   NUMBERS
                                   ========================================================= */

        .dg-luxury-numbers {
            background: var(--dg-night);
            color: white;

            padding: 70px 0;
        }

        .dg-luxury-numbers-grid {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
        }

        .dg-luxury-number {
            text-align: center;

            padding: 15px 30px;

            border-right: 1px solid rgba(255, 255, 255, .12);
        }

        .dg-luxury-number:last-child {
            border-right: 0;
        }

        .dg-luxury-number strong {
            display: block;

            color: var(--dg-gold-light);

            font-family: var(--dg-serif);
            font-size: 52px;
            font-weight: 500;
        }

        .dg-luxury-number span {
            color: rgba(255, 255, 255, .58);

            font-size: 10px;
            letter-spacing: 2px;
            text-transform: uppercase;
        }


        /* =========================================================
                                   ECOSYSTEM
                                   ========================================================= */

        .dg-luxury-ecosystem {
            background: var(--dg-ivory);
        }

        .dg-luxury-heading-row {
            display: flex;
            justify-content: space-between;
            align-items: flex-end;

            gap: 50px;

            margin-bottom: 65px;
        }

        .dg-luxury-heading-row>div:last-child {
            max-width: 470px;
        }

        .dg-luxury-heading-row .dg-luxury-text {
            margin: 0;
        }


        /* =========================================================
                                   FILIALES
                                   ========================================================= */

        .dg-luxury-filiales {
            display: grid;

            grid-template-columns:
                repeat(12, 1fr);

            gap: 20px;
        }

        .dg-luxury-filiale {
            position: relative;

            min-height: 440px;

            overflow: hidden;

            background: var(--dg-night);
        }

        .dg-luxury-filiale:nth-child(1),
        .dg-luxury-filiale:nth-child(4) {
            grid-column: span 7;
        }

        .dg-luxury-filiale:nth-child(2),
        .dg-luxury-filiale:nth-child(3),
        .dg-luxury-filiale:nth-child(5),
        .dg-luxury-filiale:nth-child(6) {
            grid-column: span 5;
        }

        .dg-luxury-filiale:nth-child(7) {
            grid-column: span 12;
            min-height: 520px;
        }

        .dg-luxury-filiale img {
            position: absolute;
            inset: 0;

            width: 100%;
            height: 100%;

            object-fit: cover;

            transition: transform .8s ease;
        }

        .dg-luxury-filiale:hover img {
            transform: scale(1.06);
        }

        .dg-luxury-filiale::after {
            content: "";

            position: absolute;
            inset: 0;

            background: linear-gradient(to top,
                    rgba(5, 18, 27, .94),
                    rgba(5, 18, 27, .08) 70%);
        }

        .dg-luxury-filiale-content {
            position: absolute;

            z-index: 2;

            left: 32px;
            right: 32px;
            bottom: 30px;
        }

        .dg-luxury-filiale-index {
            margin-bottom: 8px;

            color: var(--dg-gold-light);

            font-size: 10px;
            font-weight: 800;
            letter-spacing: 3px;
        }

        .dg-luxury-filiale h3 {
            margin: 0 0 8px;

            color: white;

            font-family: var(--dg-serif);
            font-size: 34px;
            font-weight: 500;
        }

        .dg-luxury-filiale p {
            max-width: 550px;

            margin: 0;

            color: rgba(255, 255, 255, .66);

            font-size: 13px;
            line-height: 1.7;
        }

        .dg-luxury-filiale-link {
            display: inline-flex;

            margin-top: 18px;

            color: var(--dg-gold-light);

            font-size: 10px;
            font-weight: 800;
            letter-spacing: 2px;
            text-transform: uppercase;
        }


        /* =========================================================
                                   M2 DESIGN FEATURE
                                   ========================================================= */

        .dg-m2 {
            position: relative;

            background: var(--dg-night);

            color: white;

            overflow: hidden;
        }

        .dg-m2::before {
            content: "M2";

            position: absolute;

            right: -30px;
            top: -90px;

            color: rgba(255, 255, 255, .025);

            font-family: var(--dg-serif);
            font-size: 380px;
            line-height: 1;
        }

        .dg-m2-grid {
            position: relative;
            z-index: 2;

            display: grid;
            grid-template-columns: 1fr 1fr;

            gap: 90px;

            align-items: center;
        }

        .dg-m2-image {
            height: 650px;
            overflow: hidden;
        }

        .dg-m2-image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .dg-m2-content .dg-luxury-label {
            color: var(--dg-gold-light);
        }

        .dg-m2-content h2 {
            margin: 18px 0;

            color: white;

            font-family: var(--dg-serif);
            font-size: clamp(46px, 5vw, 72px);
            line-height: 1;
            font-weight: 500;
        }

        .dg-m2-content h2 span {
            color: var(--dg-gold-light);
        }

        .dg-m2-content p {
            max-width: 570px;

            color: rgba(255, 255, 255, .62);

            font-size: 16px;
            line-height: 1.9;
        }

        .dg-m2-signature {
            margin: 35px 0;

            padding-left: 20px;

            border-left: 1px solid var(--dg-gold);
        }

        .dg-m2-signature strong {
            display: block;

            margin-bottom: 5px;

            color: white;

            font-family: var(--dg-serif);
            font-size: 21px;
            font-weight: 500;
        }

        .dg-m2-signature span {
            color: var(--dg-gold-light);

            font-size: 10px;
            letter-spacing: 2px;
            text-transform: uppercase;
        }


        /* =========================================================
                                   PROJECTS
                                   ========================================================= */

        .dg-luxury-projects {
            background: var(--dg-paper);
        }

        .dg-project-showcase {
            display: grid;

            grid-template-columns: 1.35fr .65fr;

            gap: 20px;
        }

        .dg-project-large,
        .dg-project-small {
            position: relative;

            overflow: hidden;

            background: var(--dg-night);
        }

        .dg-project-large {
            min-height: 650px;
        }

        .dg-project-side {
            display: grid;
            gap: 20px;
        }

        .dg-project-small {
            min-height: 315px;
        }

        .dg-project-large img,
        .dg-project-small img {
            position: absolute;
            inset: 0;

            width: 100%;
            height: 100%;

            object-fit: cover;

            transition: transform .8s ease;
        }

        .dg-project-large:hover img,
        .dg-project-small:hover img {
            transform: scale(1.06);
        }

        .dg-project-large::after,
        .dg-project-small::after {
            content: "";

            position: absolute;
            inset: 0;

            background: linear-gradient(to top,
                    rgba(5, 18, 27, .94),
                    transparent 65%);
        }

        .dg-project-content {
            position: absolute;

            z-index: 2;

            left: 30px;
            right: 30px;
            bottom: 28px;
        }

        .dg-project-content small {
            color: var(--dg-gold-light);

            font-size: 9px;
            font-weight: 800;
            letter-spacing: 2px;
            text-transform: uppercase;
        }

        .dg-project-content h3 {
            margin: 7px 0;

            color: white;

            font-family: var(--dg-serif);
            font-size: 34px;
            font-weight: 500;
        }

        .dg-project-small .dg-project-content h3 {
            font-size: 25px;
        }


        /* =========================================================
                                   VALUES
                                   ========================================================= */

        .dg-luxury-values {
            background: var(--dg-ivory);
        }

        .dg-luxury-values-grid {
            display: grid;

            grid-template-columns: repeat(3, 1fr);

            gap: 20px;

            margin-top: 60px;
        }

        .dg-luxury-value {
            padding: 45px 35px;

            background: white;

            border-top: 2px solid var(--dg-gold);

            transition: .35s ease;
        }

        .dg-luxury-value:hover {
            transform: translateY(-7px);
        }

        .dg-luxury-value-number {
            color: var(--dg-gold);

            font-family: var(--dg-serif);
            font-size: 36px;
        }

        .dg-luxury-value h3 {
            margin: 18px 0 12px;

            color: var(--dg-night);

            font-family: var(--dg-serif);
            font-size: 25px;
            font-weight: 500;
        }

        .dg-luxury-value p {
            margin: 0;

            color: var(--dg-muted);

            font-size: 13px;
            line-height: 1.8;
        }


        /* =========================================================
                           WHY DIABOSS
                           ========================================================= */

        .dg-why {
            background: var(--navy-deep);
            color: white;
            position: relative;
            overflow: hidden;
        }

        .dg-why::before {
            content: "";
            position: absolute;
            width: 600px;
            height: 600px;
            border-radius: 50%;
            border: 1px solid rgba(200, 155, 60, .15);
            right: -250px;
            top: -250px;
        }

        .dg-why-grid {
            position: relative;
            z-index: 2;
            display: grid;
            grid-template-columns: .85fr 1.15fr;
            gap: 90px;
            align-items: center;
        }

        .dg-why .dg-title {
            color: white;
        }

        .dg-why .dg-description {
            color: rgba(255, 255, 255, .65);
        }

        .dg-why-list {
            display: grid;
            gap: 18px;
        }



        .dg-why-item {
            display: grid;
            grid-template-columns: 55px 1fr;
            gap: 18px;
            padding: 24px;
            border: 1px solid rgba(255, 255, 255, .1);
            border-radius: 18px;
            background: rgba(255, 255, 255, .035);
            backdrop-filter: blur(8px);
        }

        .dg-why-number {
            width: 45px;
            height: 45px;
            border-radius: 50%;
            display: grid;
            place-items: center;
            border: 1px solid rgba(200, 155, 60, .5);
            color: var(--gold-light);
            font-size: 12px;
            font-weight: 900;
        }

        .dg-why-item h3 {
            margin: 0 0 7px;
            font-size: 17px;
            color: var(--gold);
        }

        .dg-why-item p {
            margin: 0;
            color: rgba(255, 255, 255, .58);
            font-size: 13px;
            line-height: 1.6;
        }




        /* =========================================================
                                   CTA
                                   ========================================================= */

        .dg-luxury-cta {
            padding: 120px 0;

            background: var(--dg-paper);
        }

        .dg-luxury-cta-box {
            position: relative;

            padding: 100px 50px;

            text-align: center;

            overflow: hidden;

            background:
                linear-gradient(rgba(8, 26, 39, .9),
                    rgba(8, 26, 39, .9)),
                url("{{ asset('images/home/diaboss-cta.jpg') }}") center / cover;
        }

        .dg-luxury-cta-box::before,
        .dg-luxury-cta-box::after {
            content: "";

            position: absolute;

            width: 280px;
            height: 280px;

            border: 1px solid rgba(201, 164, 92, .2);

            border-radius: 50%;
        }

        .dg-luxury-cta-box::before {
            left: -130px;
            top: -130px;
        }

        .dg-luxury-cta-box::after {
            right: -130px;
            bottom: -130px;
        }

        .dg-luxury-cta-content {
            position: relative;
            z-index: 2;
        }

        .dg-luxury-cta .dg-luxury-label {
            justify-content: center;
            color: var(--dg-gold-light);
        }

        .dg-luxury-cta .dg-luxury-label::before {
            display: none;
        }

        .dg-luxury-cta h2 {
            max-width: 850px;

            margin: 20px auto;

            color: white;

            font-family: var(--dg-serif);
            font-size: clamp(43px, 5vw, 70px);
            line-height: 1;
            font-weight: 500;
        }

        .dg-luxury-cta h2 span {
            color: var(--dg-gold-light);
        }

        .dg-luxury-cta p {
            max-width: 650px;

            margin: 0 auto 30px;

            color: rgba(255, 255, 255, .63);

            line-height: 1.8;
        }


        /* =========================================================
                                   RESPONSIVE
                                   ========================================================= */

        @media (max-width: 1000px) {

            .dg-luxury-intro-grid,
            .dg-m2-grid {
                grid-template-columns: 1fr;
                gap: 65px;
            }

            .dg-why-grid {
                grid-template-columns: 1fr;
                gap: 55px;
            }

            .dg-luxury-filiale:nth-child(n) {
                grid-column: span 6;
            }

            .dg-luxury-filiale:nth-child(7) {
                grid-column: span 12;
            }

            .dg-project-showcase {
                grid-template-columns: 1fr;
            }

            .dg-project-side {
                grid-template-columns: 1fr 1fr;
            }

            .dg-luxury-values-grid {
                grid-template-columns: 1fr 1fr;
            }

            .dg-m2-image {
                height: 500px;
            }
        }


        @media (max-width: 700px) {

            .dg-luxury-container {
                width: min(100% - 28px, 1240px);
            }

            .dg-luxury-section {
                padding: 80px 0;
            }

            .dg-luxury-hero {
                min-height: 760px;
            }

            .dg-luxury-hero-content {
                padding-bottom: 80px;
            }

            .dg-luxury-hero h1 {
                font-size: 57px;
                letter-spacing: -2px;
            }

            .dg-luxury-hero-actions {
                flex-direction: column;
                align-items: stretch;
            }

            .dg-luxury-hero-actions .dg-luxury-btn {
                width: 100%;
            }

            .dg-luxury-heading-row {
                display: block;
                margin-bottom: 40px;
            }

            .dg-luxury-heading-row>div:last-child {
                margin-top: 20px;
            }

            .dg-luxury-image {
                height: 430px;
            }

            .dg-luxury-image-frame::before {
                top: 12px;
                left: 12px;
            }

            .dg-luxury-year {
                right: 10px;
                bottom: -25px;
            }

            .dg-luxury-points {
                grid-template-columns: 1fr;
            }

            .dg-luxury-numbers-grid {
                grid-template-columns: 1fr 1fr;
            }

            .dg-luxury-number {
                padding: 25px 10px;

                border-bottom: 1px solid rgba(255, 255, 255, .12);
            }

            .dg-luxury-number:nth-child(2) {
                border-right: 0;
            }

            .dg-luxury-number strong {
                font-size: 40px;
            }

            .dg-luxury-filiales {
                display: grid;
                grid-template-columns: 1fr;
            }

            .dg-luxury-filiale:nth-child(n) {
                grid-column: span 1;
                min-height: 390px;
            }

            .dg-luxury-filiale:nth-child(7) {
                min-height: 430px;
            }

            .dg-project-side {
                grid-template-columns: 1fr;
            }

            .dg-project-large {
                min-height: 450px;
            }

            .dg-project-small {
                min-height: 300px;
            }

            .dg-luxury-values-grid {
                grid-template-columns: 1fr;
            }


            .dg-luxury-cta-box {
                padding: 75px 25px;
            }

            .dg-container {
                width: min(100% - 28px, 1180px);
            }

            .dg-section {
                padding: 75px 0;
            }

            .dg-section-header {
                display: block;
            }

            .dg-section-header .dg-description {
                margin-top: 20px;
            }


            .dg-why-item {
                grid-template-columns: 45px 1fr;
            }

        }

        @media (max-width: 450px) {


            .dg-btn {
                width: 100%;
            }


        }


        @media (max-width: 430px) {

            .dg-luxury-hero h1 {
                font-size: 48px;
            }

            .dg-luxury-numbers-grid {
                grid-template-columns: 1fr;
            }

            .dg-luxury-number {
                border-right: 0;
            }
        }


        /* =========================================================
       CARROUSEL — DIABOSS LUXURY INTRO
       ========================================================= */

        .dg-luxury-image-frame {
            position: relative;
            min-width: 0;
        }

        .dg-luxury-carousel {
            position: relative;

            width: 100%;
            height: 620px;

            overflow: hidden;

            background: #101f2a;
        }


        /* SLIDES */

        .dg-luxury-slide {
            position: absolute;
            inset: 0;

            opacity: 0;

            visibility: hidden;

            transform: scale(1.035);

            transition:
                opacity .8s ease,
                transform 1.2s ease,
                visibility .8s ease;
        }

        .dg-luxury-slide.active {
            opacity: 1;

            visibility: visible;

            transform: scale(1);
        }

        .dg-luxury-slide img {
            width: 100%;
            height: 100%;

            display: block;

            object-fit: cover;
        }


        /* VOILE */

        .dg-luxury-slide::after {
            content: "";

            position: absolute;
            inset: 0;

            background:
                linear-gradient(to top,
                    rgba(5, 18, 27, .82),
                    rgba(5, 18, 27, .05) 65%);
        }


        /* TEXTE SUR IMAGE */

        .dg-luxury-slide-caption {
            position: absolute;

            z-index: 3;

            left: 35px;
            bottom: 75px;

            color: white;
        }

        .dg-luxury-slide-caption span {
            display: block;

            margin-bottom: 8px;

            color: #dfc78f;

            font-size: 10px;
            font-weight: 700;

            letter-spacing: 3px;
        }

        .dg-luxury-slide-caption strong {
            display: block;

            margin-bottom: 5px;

            font-family: "Playfair Display", Georgia, serif;

            font-size: 35px;
            font-weight: 500;
        }

        .dg-luxury-slide-caption small {
            display: block;

            color: rgba(255, 255, 255, .68);

            font-size: 12px;
            letter-spacing: .5px;
        }


        /* FLÈCHES */

        .dg-luxury-arrow {
            position: absolute;

            z-index: 5;

            top: 50%;

            width: 48px;
            height: 48px;

            display: flex;
            align-items: center;
            justify-content: center;

            transform: translateY(-50%);

            border: 1px solid rgba(255, 255, 255, .45);

            background: rgba(5, 18, 27, .25);

            color: white;

            font-size: 18px;

            cursor: pointer;

            transition: .3s ease;

            backdrop-filter: blur(6px);
        }

        .dg-luxury-arrow:hover {
            background: #c8a15a;

            border-color: #c8a15a;

            color: white;
        }

        .dg-luxury-prev {
            left: 20px;
        }

        .dg-luxury-next {
            right: 20px;
        }


        /* DOTS */

        .dg-luxury-dots {
            position: absolute;

            z-index: 5;

            right: 32px;
            bottom: 32px;

            display: flex;

            gap: 8px;
        }

        .dg-luxury-dot {
            width: 24px;
            height: 2px;

            padding: 0;

            border: 0;

            background: rgba(255, 255, 255, .4);

            cursor: pointer;

            transition: .35s ease;
        }

        .dg-luxury-dot.active {
            width: 45px;

            background: #dfc78f;
        }


        /* BADGE */

        .dg-luxury-year {
            position: absolute;

            z-index: 10;

            right: -28px;
            bottom: 35px;

            width: 145px;
            height: 145px;

            display: flex;
            align-items: center;
            justify-content: center;

            text-align: center;

            border-radius: 50%;

            background: #0a1c29;

            color: #fff;

            font-family: "Playfair Display", Georgia, serif;

            font-size: 20px;

            line-height: 1.15;

            box-shadow: 0 15px 40px rgba(0, 0, 0, .18);
        }


        /* =========================================================
       MOBILE
       ========================================================= */

        @media (max-width: 900px) {

            .dg-luxury-carousel {
                height: 540px;
            }

            .dg-luxury-year {
                right: 15px;
                bottom: 25px;

                width: 120px;
                height: 120px;

                font-size: 17px;
            }
        }


        @media (max-width: 600px) {

            .dg-luxury-carousel {
                height: 430px;
            }

            .dg-luxury-slide-caption {
                left: 22px;
                bottom: 65px;
            }

            .dg-luxury-slide-caption strong {
                font-size: 27px;
            }

            .dg-luxury-slide-caption small {
                font-size: 11px;
            }

            .dg-luxury-arrow {
                width: 40px;
                height: 40px;
            }

            .dg-luxury-prev {
                left: 12px;
            }

            .dg-luxury-next {
                right: 12px;
            }

            .dg-luxury-dots {
                right: 20px;
                bottom: 22px;
            }

            .dg-luxury-year {
                width: 92px;
                height: 92px;

                right: 10px;
                bottom: 15px;

                font-size: 14px;
            }
        }
    </style>

    <!-- =========================================================
                                     HERO
                                     ========================================================= -->


    {{-- =========================================================
   HERO LUXURY — DIABOSS GROUPE
   ========================================================= --}}

    <section class="dg-luxury-hero">

        <div class="dg-luxury-container">

            <div class="dg-luxury-hero-content">

                {{-- TEXTE --}}
                <div class="dg-luxury-hero-copy">

                    <div class="dg-luxury-hero-kicker">
                        DIABOSS GROUPE — IMMOBILIER · CONSTRUCTION · DESIGN
                    </div>

                    <h1>
                        Imaginer.<br>
                        <span>Construire.</span><br>
                        Transformer.
                    </h1>

                    <p class="dg-luxury-hero-description">
                        Un groupe intégré qui réunit immobilier, construction,
                        matériaux et design pour donner vie à des projets
                        pensés pour durer.
                    </p>

                    <div class="dg-luxury-hero-actions">

                        <a href="#filiales" class="dg-luxury-btn dg-luxury-btn-dark">
                            Explorer le groupe
                            →
                        </a>

                        <a href="{{ url('/#contact') }}" class="dg-luxury-btn">
                            Parlons de votre projet
                        </a>

                    </div>

                </div>



                {{-- LOGO DIABOSS GROUPE --}}
                <div class="dg-luxury-hero-logo" style="">

                    <div class="dg-luxury-logo-frame">

                        <div class="dg-luxury-logo-inner">

                            <div class="dg-luxury-logo-line"></div>

                            <img src="{{ asset('logo.png') }}" alt="DIABOSS GROUPE">

                            <div class="dg-luxury-logo-name">
                                DIABOSS GROUPE
                            </div>

                            <div class="dg-luxury-logo-subtitle">
                                IMMOBILIER · CONSTRUCTION · DESIGN
                            </div>

                        </div>

                    </div>

                </div>

            </div>



        </div>

    </section>


    <style>
        /* =========================================================
       HERO
    ========================================================= */

        .dg-luxury-hero {
            position: relative;
            overflow: hidden;

            background:
                radial-gradient(circle at 80% 25%,
                    rgba(201, 152, 47, .12),
                    transparent 34%),
                linear-gradient(135deg,
                    #f8f5ee 0%,
                    #f1ede3 58%,
                    #e9e1d1 100%);

            border-bottom: 1px solid rgba(30, 58, 95, .10);
        }


        /* =========================================================
       CONTAINER
    ========================================================= */

        .dg-luxury-container {

            width: min(100%, 1220px);

            margin: 0 auto;

            padding: 0 42px;
        }


        /* =========================================================
       CONTENT
    ========================================================= */

        .dg-luxury-hero-content {

            min-height: 650px;

            display: flex;

            grid-template-columns:
                minmax(0, 1.15fr) minmax(330px, .85fr);

            align-items: center;

            gap: 6rem;

            padding: 85px 0;

            justify-content: space-between;


        }


        /* =========================================================
       COPY
    ========================================================= */

        .dg-luxury-hero-copy {
            max-width: 700px;
        }


        /* =========================================================
       KICKER
    ========================================================= */

        .dg-luxury-hero-kicker {

            display: flex;

            align-items: center;

            gap: 12px;

            margin-bottom: 28px;

            font-family: "Montserrat", sans-serif;

            font-size: 10px;

            font-weight: 700;

            letter-spacing: .20em;

            color: #1e3a5f;
        }

        .dg-luxury-hero-kicker::before {

            content: "";

            width: 38px;

            height: 1px;

            background: #c9982f;
        }


        /* =========================================================
       TITRE
    ========================================================= */

        .dg-luxury-hero-content h1 {

            margin: 0;

            font-family:
                "Cormorant Garamond",
                Georgia,
                serif;

            font-size: clamp(4.2rem,
                    7vw,
                    6.7rem);

            line-height: .88;

            font-weight: 500;

            letter-spacing: -.035em;

            color: #182c43;
        }


        .dg-luxury-hero-content h1 span {

            color: #b58a32;

            font-style: italic;

            font-weight: 400;
        }


        /* =========================================================
       DESCRIPTION
    ========================================================= */

        .dg-luxury-hero-description {

            max-width: 590px;

            margin: 35px 0 0;

            font-family:
                "Montserrat",
                Arial,
                sans-serif;

            font-size: 15px;

            line-height: 1.9;

            color: #5d6268;
        }


        /* =========================================================
       BUTTONS
    ========================================================= */

        .dg-luxury-hero-actions {

            display: flex;

            flex-wrap: wrap;

            gap: 14px;

            margin-top: 34px;
        }


        .dg-luxury-btn {

            display: inline-flex;

            align-items: center;

            justify-content: center;

            gap: 10px;

            padding: 14px 23px;

            border: 1px solid rgba(30, 58, 95, .20);

            color: #1e3a5f;

            background: transparent;

            text-decoration: none;

            font-family:
                "Montserrat",
                Arial,
                sans-serif;

            font-size: 11px;

            font-weight: 600;

            letter-spacing: .06em;

            transition: .25s ease;
        }


        .dg-luxury-btn-dark {

            background: #1e3a5f;

            color: #fff;

            border-color: #1e3a5f;
        }


        .dg-luxury-btn:hover {

            transform: translateY(-2px);

            border-color: #c9982f;

            color: #1e3a5f;
        }


        .dg-luxury-btn-dark:hover {

            background: #162c46;

            color: #fff;
        }


        /* =========================================================
       LOGO
    ========================================================= */

        .dg-luxury-hero-logo {

            display: flex;

            align-items: var(--white);

            justify-content: center;
            margin-left: auto;
            transform: translateX(30px);

        }


        .dg-luxury-logo-frame {

            position: relative;

            width: 360px;

            height: 360px;

            padding: 20px;

            background:
                rgba(255, 255, 255, .65);

            border:
                1px solid rgba(30, 58, 95, .18);

            box-shadow:
                0 25px 60px rgba(30, 58, 95, .12);

            box-sizing: border-box;
        }


        /* cadre intérieur */

        .dg-luxury-logo-inner {

            width: 100%;

            height: 100%;

            display: flex;

            flex-direction: column;

            align-items: center;

            justify-content: center;

            text-align: center;

            position: relative;

            border:
                1px solid rgba(201, 152, 47, .45);

            background:
                linear-gradient(145deg,
                    rgba(255, 255, 255, .92),
                    rgba(248, 245, 238, .82));

            box-sizing: border-box;

            padding: 35px 25px;
        }


        /* coins dorés */

        .dg-luxury-logo-inner::before,
        .dg-luxury-logo-inner::after {

            content: "";

            position: absolute;

            width: 25px;

            height: 25px;

            border-color: #c9982f;
        }


        .dg-luxury-logo-inner::before {

            top: -1px;

            left: -1px;

            border-top: 2px solid #c9982f;

            border-left: 2px solid #c9982f;
        }


        .dg-luxury-logo-inner::after {

            right: -1px;

            bottom: -1px;

            border-right: 2px solid #c9982f;

            border-bottom: 2px solid #c9982f;
        }


        /* ligne */

        .dg-luxury-logo-line {

            width: 42px;

            height: 2px;

            background: #c9982f;

            margin-bottom: 25px;
        }


        /* logo */

        .dg-luxury-logo-inner img {

            width: 190px;

            max-width: 78%;

            height: auto;

            display: block;

            object-fit: contain;

            margin-bottom: 23px;
        }


        /* nom */

        .dg-luxury-logo-name {

            font-family:
                "Cormorant Garamond",
                Georgia,
                serif;

            font-size: 27px;

            font-weight: 600;

            letter-spacing: .13em;

            color: #1e3a5f;

            line-height: 1;
        }


        /* sous-titre */

        .dg-luxury-logo-subtitle {

            margin-top: 11px;

            max-width: 250px;

            font-family:
                "Montserrat",
                Arial,
                sans-serif;

            font-size: 8px;

            font-weight: 600;

            line-height: 1.5;

            letter-spacing: .16em;

            color: #9a7935;
        }


        /* =========================================================
       RESPONSIVE
    ========================================================= */

        @media (max-width: 1000px) {

            .dg-luxury-hero-content {

                grid-template-columns: 1fr;

                gap: 55px;

                padding: 75px 0;
            }

            .dg-luxury-hero-copy {

                max-width: 800px;
            }

            .dg-luxury-hero-logo {

                justify-content: flex-start;
            }
        }


        @media (max-width: 640px) {

            .dg-luxury-container {

                padding: 0 22px;
            }

            .dg-luxury-hero-content {

                min-height: auto;

                padding: 60px 0;
            }

            .dg-luxury-hero-content h1 {

                font-size: 4rem;
            }

            .dg-luxury-hero-description {

                font-size: 14px;
            }

            .dg-luxury-hero-actions {

                flex-direction: column;

                align-items: stretch;
            }

            .dg-luxury-btn {

                width: 100%;
            }

            .dg-luxury-logo-frame {

                width: 290px;

                height: 290px;

                padding: 16px;
            }

            .dg-luxury-logo-inner img {

                width: 155px;
            }

            .dg-luxury-logo-name {

                font-size: 22px;
            }
        }
    </style>



    <!-- =========================================================
                                     INTRO
                                     ========================================================= -->

    <section class="dg-luxury-section dg-luxury-intro">

        <div class="dg-luxury-container">

            <div class="dg-luxury-intro-grid">

                <!-- =========================================
                     CARROUSEL
                     ========================================= -->

                <div class="dg-luxury-image-frame">

                    <div class="dg-luxury-carousel">

                        <!-- SLIDE 01 -->
                        <div class="dg-luxury-slide active">

                            <img src="{{ asset('carrousel1.avif') }}" 
                                alt="Architecture contemporaine">

                            <div class="dg-luxury-slide-caption">
                                <span>01</span>
                                <strong>Architecture</strong>
                                <small>
                                    Imaginer les espaces de demain
                                </small>
                            </div>

                        </div>


                        <!-- SLIDE 02 -->
                        <div class="dg-luxury-slide">

                            <img src="{{ asset('carrousel2.avif') }}" 
                                alt="Construction et chantier">

                            <div class="dg-luxury-slide-caption">
                                <span>02</span>
                                <strong>Construction</strong>
                                <small>
                                    Donner vie aux projets
                                </small>
                            </div>

                        </div>


                        <!-- SLIDE 03 -->
                        <div class="dg-luxury-slide">

                            <img src="{{ asset('carrousel3.avif') }}" 
                                alt="Architecture intérieure moderne">

                            <div class="dg-luxury-slide-caption">
                                <span>03</span>
                                <strong>Design</strong>
                                <small>
                                    Créer des espaces qui ont du sens
                                </small>
                            </div>

                        </div>


                        <!-- SLIDE 04 -->
                        <div class="dg-luxury-slide">

                            <img src="{{ asset('carrousel4.avif') }}" 
                                alt="Design intérieur et habitat">

                            <div class="dg-luxury-slide-caption">
                                <span>04</span>
                                <strong>Habitat</strong>
                                <small>
                                    Transformer les espaces de vie
                                </small>
                            </div>

                        </div>


                        <!-- FLÈCHES -->

                        <button type="button" class="dg-luxury-arrow dg-luxury-prev" aria-label="Image précédente">
                            ←
                        </button>

                        <button type="button" class="dg-luxury-arrow dg-luxury-next" aria-label="Image suivante">
                            →
                        </button>


                        <!-- INDICATEURS -->

                        <div class="dg-luxury-dots">

                            <button type="button" class="dg-luxury-dot active" data-slide="0">
                            </button>

                            <button type="button" class="dg-luxury-dot" data-slide="1">
                            </button>

                            <button type="button" class="dg-luxury-dot" data-slide="2">
                            </button>

                            <button type="button" class="dg-luxury-dot" data-slide="3">
                            </button>

                        </div>

                    </div>


                    <!-- BADGE -->

                    <div class="dg-luxury-year">
                        Une<br>
                        même<br>
                        vision
                    </div>

                </div>


                <!-- =========================================
                     TEXTE
                     ========================================= -->

                <div class="dg-luxury-intro-content">

                    <div class="dg-luxury-label">
                        Le groupe
                    </div>

                    <h2 class="dg-luxury-title">
                        Une vision globale.<br>
                        <em>Des expertises réunies.</em>
                    </h2>

                    <p class="dg-luxury-text">
                        DIABOSS GROUPE rassemble un ensemble de métiers
                        complémentaires autour d'une ambition commune :
                        concevoir et développer des solutions immobilières
                        et constructives adaptées aux besoins d'aujourd'hui
                        et de demain.
                    </p>

                    <p class="dg-luxury-text">
                        De la conception au design, des matériaux à la
                        construction et jusqu'à l'immobilier, notre
                        écosystème permet d'aborder chaque projet avec
                        une vision plus cohérente et plus complète.
                    </p>


                    <div class="dg-luxury-points">

                        <div class="dg-luxury-point">

                            <strong>
                                Une approche intégrée
                            </strong>

                            <span>
                                Des métiers complémentaires au sein
                                d'un même groupe.
                            </span>

                        </div>


                        <div class="dg-luxury-point">

                            <strong>
                                Une vision durable
                            </strong>

                            <span>
                                Des projets pensés pour créer de la
                                valeur dans le temps.
                            </span>

                        </div>


                        <div class="dg-luxury-point">

                            <strong>
                                Une exigence de qualité
                            </strong>

                            <span>
                                Des solutions adaptées aux réalités
                                de chaque projet.
                            </span>

                        </div>


                        <div class="dg-luxury-point">

                            <strong>
                                Une identité forte
                            </strong>

                            <span>
                                Architecture, design et savoir-faire réunis.
                            </span>

                        </div>

                    </div>


                    <a href="#about" class="dg-luxury-btn">

                        <span>
                            Découvrir DIABOSS
                        </span>

                        <span>
                            →
                        </span>

                    </a>



                </div>

            </div>

        </div>

    </section>

    <!-- =========================================================
                                     CHIFFRES
                                     ========================================================= -->

    <section class="dg-luxury-numbers" id="about">

        ```
        <div class="dg-luxury-container">

            <div class="dg-luxury-numbers-grid">

                <div class="dg-luxury-number">
                    <strong>07</strong>
                    <span>Filiales & expertises</span>
                </div>

                <div class="dg-luxury-number">
                    <strong>360°</strong>
                    <span>Approche intégrée</span>
                </div>

                <div class="dg-luxury-number">
                    <strong>01</strong>
                    <span>Vision commune</span>
                </div>

                <div class="dg-luxury-number">
                    <strong>∞</strong>
                    <span>Possibilités</span>
                </div>

            </div>

        </div>
        ```

    </section>

    <!-- =========================================================
                                     FILIALES
                                     ========================================================= -->

    <section class="dg-luxury-section dg-luxury-ecosystem" id="filiales">

        ```
        <div class="dg-luxury-container">

            <div class="dg-luxury-heading-row">

                <div>

                    <div class="dg-luxury-label">
                        Notre écosystème
                    </div>

                    <h2 class="dg-luxury-title">
                        Sept expertises.<br>
                        <em>Un seul groupe.</em>
                    </h2>

                </div>

                <div>

                    <p class="dg-luxury-text">
                        Chaque filiale possède son savoir-faire,
                        son identité et son rôle dans l'écosystème
                        DIABOSS GROUPE.
                    </p>

                </div>

            </div>


            <div class="dg-luxury-filiales">


                <!-- DIABOSS & DJAWO -->

                <a href="{{ url('/djawo') }}" class="dg-luxury-filiale">

                    <img src="{{asset('D1.jpeg')}}">

                    <div class="dg-luxury-filiale-content">

                        <div class="dg-luxury-filiale-index">
                            01 — PROMOTION IMMOBILIÈRE
                        </div>

                        <h3>DIABOSS & DJAWO</h3>

                        <p>
                            Développement et promotion de projets
                            immobiliers pensés autour du confort,
                            de la qualité et de l'avenir.
                        </p>

                        <span class="dg-luxury-filiale-link">
                            Découvrir la filiale →
                        </span>

                    </div>

                </a>


                <!-- DIABOSS CONSTRUCTION -->

                <a href="{{ url('/construction') }}" class="dg-luxury-filiale">


                    <img
                        src="{{asset('Co1.webp')}}">
                    <div class="dg-luxury-filiale-content">

                        <div class="dg-luxury-filiale-index">
                            02 — CONSTRUCTION
                        </div>

                        <h3>DIABOSS Construction</h3>

                        <p>
                            Construction et réalisation de projets
                            avec une attention particulière portée
                            à la qualité d'exécution.
                        </p>

                        <span class="dg-luxury-filiale-link">
                            Découvrir la filiale →
                        </span>

                    </div>

                </a>


                <!-- BAM DEPOT -->

                <a href="{{ url('bamdepot') }}" class="dg-luxury-filiale">

                    <img src="{{asset('B1.jpeg')}}"
                        alt="Matériaux de construction">
                    <div class="dg-luxury-filiale-content">

                        <div class="dg-luxury-filiale-index">
                            03 — MATÉRIAUX
                        </div>

                        <h3>DIABOSS & BAM DÉPÔT</h3>

                        <p>
                            Production et distribution de solutions
                            et matériaux destinés au secteur de la construction.
                        </p>

                        <span class="dg-luxury-filiale-link">
                            Découvrir la filiale →
                        </span>

                    </div>

                </a>


                <!-- MHM -->

                <a href="{{ url('/mhmmateriaux') }}" class="dg-luxury-filiale">

                    <img src="{{('Mh4.avif')}}"
                        alt="Finition intérieure MHM Matériaux" class="mhm-gallery img-fluid">
                    <div class="dg-luxury-filiale-content">

                        <div class="dg-luxury-filiale-index">
                            04 — MATÉRIAUX & FINITIONS
                        </div>

                        <h3>MHM Matériaux</h3>

                        <p>
                            Matériaux, équipements et solutions
                            pour accompagner les dernières étapes
                            de vos projets.
                        </p>

                        <span class="dg-luxury-filiale-link">
                            Découvrir la filiale →
                        </span>

                    </div>

                </a>


                <!-- DJAWO IMMO -->

                <a href="{{ url('/byimmo') }}" class="dg-luxury-filiale">

                    <img src="{{('D1.jpeg')}}">
                    <div class="dg-luxury-filiale-content">

                        <div class="dg-luxury-filiale-index">
                            05 — IMMOBILIER
                        </div>

                        <h3>DJAWO IMMO</h3>

                        <p>
                            Des solutions immobilières pensées pour
                            accompagner particuliers, professionnels
                            et investisseurs.
                        </p>

                        <span class="dg-luxury-filiale-link">
                            Découvrir la filiale →
                        </span>

                    </div>

                </a>


                <!-- BATIJOB -->

                <a href="{{ url('/batijob') }}" class="dg-luxury-filiale">

                    <img src="{{('Bat1.jpeg')}}">
                    <div class="dg-luxury-filiale-content">

                        <div class="dg-luxury-filiale-index">
                            06 — SERVICES
                        </div>

                        <h3>BATIJOB</h3>

                        <p>
                            Des services et solutions dédiés
                            aux professionnels du bâtiment.
                        </p>

                        <span class="dg-luxury-filiale-link">
                            Découvrir la filiale →
                        </span>

                    </div>

                </a>


                <!-- M2 DESIGN -->

                <a href="{{ url('/mddesign') }}" class="dg-luxury-filiale">

                    <img src="{{('M2.jpeg')}}">
                   <div class="dg-luxury-filiale-content">
                        <div class="dg-luxury-filiale-index">
                            07 — DESIGN & ARCHITECTURE
                        </div>

                        <h3>M2 Design</h3>

                        <p>
                            Architecture intérieure, design, esthétique
                            et conception d'espaces pour donner une identité
                            forte à chaque réalisation.
                        </p>

                        <span class="dg-luxury-filiale-link">
                            Découvrir M2 Design →
                        </span>

                    </div>

                </a>

            </div>

        </div>
        ```

    </section>

    <!-- =========================================================
                                     M2 DESIGN FEATURE
                                     ========================================================= -->



    <!-- =========================================================
                                     PROJETS
                                     ========================================================= -->

    <section class="dg-luxury-section dg-luxury-projects">


        <div class="dg-luxury-container">

            <div class="dg-luxury-heading-row">

                <div>

                    <div class="dg-luxury-label">
                        Projets
                    </div>

                    <h2 class="dg-luxury-title">
                        Donner forme<br>
                        <em>aux ambitions.</em>
                    </h2>

                </div>

                <div>

                    <p class="dg-luxury-text">
                        Des projets résidentiels et immobiliers qui
                        traduisent notre volonté de construire des
                        espaces utiles, élégants et durables.
                    </p>

                    <a href="{{ url('/projet') }}" class="dg-luxury-btn" style="margin-top:20px;">
                        Tous les projets →
                    </a>

                </div>

            </div>


            <div class="dg-project-showcase">

                <!-- =========================================
             CITÉ SOUND IATA — GRAND PROJET
             ========================================= -->

                <a href="{{ url('/projet/#soundiata') }}" class="dg-project-large">

                    <img src="{{ asset('soundiata3D-1.jpg') }}" alt="Cité Soundiata">

                    <div class="dg-project-content">

                        <small>
                            Projet résidentiel
                        </small>

                        <h3>
                            Cité Soundiata
                        </h3>

                    </div>

                </a>


                <!-- =========================================
             AUTRES PROJETS
             ========================================= -->

                <div class="dg-project-side">

                    <a href="{{ url('/projet/#sogolon') }}" class="dg-project-small">

                        <img src="{{ asset('sogolon3D-1.jpg') }}" alt="Sogolon Kondé">

                        <div class="dg-project-content">

                            <small>
                                Développement immobilier
                            </small>

                            <h3>
                                Sogolon Kondé
                            </h3>

                        </div>

                    </a>


                    <a href="{{ url('/projet/#samory') }}" class="dg-project-small">

                        <img src="{{ asset('sogolon3D.jpg') }}" alt="Samory Touré">

                        <div class="dg-project-content">

                            <small>
                                Projet immobilier
                            </small>

                            <h3>
                                Samory Touré
                            </h3>

                        </div>

                    </a>

                </div>

            </div>

        </div>
        ```

    </section>

    <!-- =========================================================
                                     VALEURS
                                     ========================================================= -->

    <section class="dg-luxury-section dg-luxury-values">

        ```
        <div class="dg-luxury-container">

            <div class="dg-luxury-heading-row">

                <div>

                    <div class="dg-luxury-label">
                        Notre philosophie
                    </div>

                    <h2 class="dg-luxury-title">
                        Ce qui guide<br>
                        <em>notre travail.</em>
                    </h2>

                </div>

            </div>


            <div class="dg-luxury-values-grid">


                <div class="dg-luxury-value">

                    <div class="dg-luxury-value-number">
                        01
                    </div>

                    <h3>
                        Excellence
                    </h3>

                    <p>
                        Nous recherchons la qualité dans chaque
                        détail, de la conception à la réalisation.
                    </p>

                </div>


                <div class="dg-luxury-value">

                    <div class="dg-luxury-value-number">
                        02
                    </div>

                    <h3>
                        Innovation
                    </h3>

                    <p>
                        Nous explorons de nouvelles façons de penser
                        l'habitat, les espaces et la construction.
                    </p>

                </div>


                <div class="dg-luxury-value">

                    <div class="dg-luxury-value-number">
                        03
                    </div>

                    <h3>
                        Durabilité
                    </h3>

                    <p>
                        Nous souhaitons créer des projets capables
                        de répondre aux besoins d'aujourd'hui
                        tout en préparant demain.
                    </p>

                </div>


            </div>

        </div>
        ```

    </section>

    <!-- =========================================================
                                     CTA
                                     ========================================================= -->


    <section class="dg-section dg-why">

        <div class="dg-container">

            <div class="dg-why-grid">

                <div>

                    <div class="dg-eyebrow">
                        Notre différence
                    </div>

                    <h2 class="dg-title">
                        Plus qu'un groupe,
                        <span>un partenaire.</span>
                    </h2>

                    <p class="dg-description">
                        Notre force réside dans la complémentarité
                        de nos métiers et notre capacité à accompagner
                        un projet dans sa globalité.
                    </p>

                    <a href="{{ url('/#contact') }}" class="dg-btn dg-btn-gold">
                        Parlons de votre projet
                        →
                    </a>

                </div>


                <div class="dg-why-list">

                    <div class="dg-why-item">

                        <div class="dg-why-number">01</div>

                        <div>
                            <h3>Une vision intégrée</h3>

                            <p>
                                Plusieurs expertises réunies pour
                                simplifier la réalisation des projets.
                            </p>
                        </div>

                    </div>


                    <div class="dg-why-item">

                        <div class="dg-why-number">02</div>

                        <div>
                            <h3>Une expertise complémentaire</h3>

                            <p>
                                Immobilier, construction, matériaux
                                et services réunis au sein du même écosystème.
                            </p>
                        </div>

                    </div>


                    <div class="dg-why-item">

                        <div class="dg-why-number">03</div>

                        <div>
                            <h3>Une ambition durable</h3>

                            <p>
                                Développer des solutions adaptées
                                aux besoins actuels et futurs.
                            </p>
                        </div>

                    </div>


                    <div class="dg-why-item">

                        <div class="dg-why-number">04</div>

                        <div>
                            <h3>Un accompagnement de proximité</h3>

                            <p>
                                Être présent aux côtés de nos clients
                                à chaque étape de leurs projets.
                            </p>
                        </div>

                    </div>

                </div>

            </div>

        </div>

    </section>




    <section class="dg-luxury-cta">

        ```
        <div class="dg-luxury-container">

            <div class="dg-luxury-cta-box">

                <div class="dg-luxury-cta-content">

                    <div class="dg-luxury-label">
                        Votre projet
                    </div>

                    <h2>
                        Et si votre prochaine idée
                        devenait <span>une réalité ?</span>
                    </h2>

                    <p>
                        Immobilier, construction, design ou matériaux :
                        notre écosystème est conçu pour vous accompagner
                        à chaque étape.
                    </p>

                    <a href="{{ url('/#contact') }}" class="dg-luxury-btn dg-luxury-btn-dark">
                        Parlons de votre projet
                        →
                    </a>

                </div>

            </div>

        </div>
        ```

    </section>

    <script>
        document.addEventListener('DOMContentLoaded', function() {

            const carousel = document.querySelector('.dg-luxury-carousel');

            if (!carousel) return;

            const slides = carousel.querySelectorAll('.dg-luxury-slide');
            const dots = carousel.querySelectorAll('.dg-luxury-dot');

            const prev = carousel.querySelector('.dg-luxury-prev');
            const next = carousel.querySelector('.dg-luxury-next');

            let current = 0;
            let autoplay;


            function showSlide(index) {

                if (index < 0) {
                    index = slides.length - 1;
                }

                if (index >= slides.length) {
                    index = 0;
                }

                slides.forEach((slide, i) => {
                    slide.classList.toggle('active', i === index);
                });

                dots.forEach((dot, i) => {
                    dot.classList.toggle('active', i === index);
                });

                current = index;
            }


            function nextSlide() {
                showSlide(current + 1);
            }


            function previousSlide() {
                showSlide(current - 1);
            }


            function startAutoplay() {

                clearInterval(autoplay);

                autoplay = setInterval(() => {
                    nextSlide();
                }, 5500);

            }


            next.addEventListener('click', function() {
                nextSlide();
                startAutoplay();
            });


            prev.addEventListener('click', function() {
                previousSlide();
                startAutoplay();
            });


            dots.forEach((dot, index) => {

                dot.addEventListener('click', function() {

                    showSlide(index);

                    startAutoplay();

                });

            });


            /* Pause lorsque la souris est dessus */

            carousel.addEventListener('mouseenter', function() {
                clearInterval(autoplay);
            });


            carousel.addEventListener('mouseleave', function() {
                startAutoplay();
            });


            /* Démarrage */

            showSlide(0);

            startAutoplay();

        });
    </script>
@endsection
