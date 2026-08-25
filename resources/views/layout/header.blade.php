<header id="header" class="header sticky-top">

    <div class="topbar d-flex align-items-center dark-background"
     style="background: #0d1b2a">

    <div class="container header-contact-bar">

        <!-- Email + téléphone -->
        <div class="contact-info">

            <a href="mailto:diabossgroupe@gmail.com">
                <i class="bi bi-envelope"></i>
                <span>diabossgroupe@gmail.com</span>
            </a>

            <span class="phone-info">
                <i class="bi bi-phone"></i>
                <span>+223 60 55 55 89 / +223 75 44 71 13</span>
            </span>

        </div>

        <!-- Réseaux sociaux -->
        <samp>
        <div class="social-links">

            <a href="https://www.linkedin.com/in/diaboss-groupe-21010b382?utm_source=share_via&utm_content=profile&utm_medium=member_android"
               class="linkedin"
               target="_blank">
                <i class="bi bi-linkedin"></i>
            </a>

            <a href="https://www.facebook.com/TeamsDiaboss"
               class="facebook"
               target="_blank">
                <i class="bi bi-facebook"></i>
            </a>

            <a href="https://www.instagram.com/diabossgroupe?utm_source=qr&igsh=eW9vNnUwdWNsa3Z6"
               class="instagram"
               target="_blank">
                <i class="bi bi-instagram"></i>
            </a>

            <a href="https://vm.tiktok.com/ZS9kbxF7eMSNC-EYifW/"
               class="tiktok"
               target="_blank">
                <i class="bi bi-tiktok"></i>
            </a>

        </div>

        </samp>

    </div>

</div>


<style>

  /* ================================
   TOPBAR RESPONSIVE
================================ */

.header-contact-bar {
    display: flex;
    align-items: center;
    justify-content: space-between;
    gap: 20px;
}

.contact-info {
    display: flex;
    align-items: center;
    gap: 20px;
    flex-wrap: wrap;
}

.contact-info a,
.phone-info {
    display: flex;
    align-items: center;
    gap: 7px;
    color: white;
    text-decoration: none;
    font-size: 13px;
}

.contact-info i {
    font-size: 15px;
}

.social-links {
    display: flex;
    align-items: center;
    gap: 12px;
    flex-shrink: 0;
}

.social-links a {
    display: flex;
    align-items: center;
    justify-content: center;
    color: white;
    text-decoration: none;
}


/* ================================
   TABLETTE
================================ */

@media (max-width: 767px) {

    .header-contact-bar {
        flex-direction: column;
        justify-content: center;
        gap: 8px;
        padding: 8px 15px;
    }

    .contact-info {
        width: 100%;
        justify-content: center;
        gap: 5px 15px;
    }

    .contact-info a,
    .phone-info {
        font-size: 11px;
        justify-content: center;
        text-align: center;
    }

    .social-links {
        display: flex !important;
        justify-content: center;
        width: 100%;
        gap: 15px;
    }

}


/* ================================
   PETIT TELEPHONE
================================ */

@media (max-width: 400px) {

    .contact-info {
        flex-direction: column;
        gap: 4px;
    }

    .contact-info a,
    .phone-info {
        font-size: 10px;
    }

    .social-links {
        gap: 12px;
    }

}

.header-separator {
    height: 1px;
    width: 100%;
    background: linear-gradient(
        to right,
        transparent,
        rgba(201, 152, 47, 0.7),
        transparent
    );
}

  .branding {
    padding-top: 8px;
}

/* ================================
   RESPONSIVITÉ LOGO + NAVBAR
================================ */

.branding .container {
    gap: 30px;
}

.branding .logo {
    flex-shrink: 1;
    min-width: 0;
}

.branding .sitename {
    white-space: nowrap;
    margin-left: 10px;
}

.branding .navmenu {
    flex-shrink: 0;
}


/* ================================
   ÉCRANS INTERMÉDIAIRES
================================ */

@media (max-width: 1199px) {

    .branding .container {
        gap: 20px;
    }

    .branding .sitename {
        font-size: 21px;
    }

}


/* ================================
   TABLETTES / PETITS ÉCRANS
================================ */

@media (max-width: 991px) {

    .branding .container {
        gap: 15px;
    }

    .branding .logo img {
        width: 48px;
    }

    .branding .sitename {
        font-size: 19px;
        margin-left: 8px;
    }

}


/* ================================
   TÉLÉPHONE
================================ */

@media (max-width: 767px) {

    .branding .container {
        gap: 10px;
    }

    .branding .logo {
        max-width: calc(100% - 55px);
    }

    .branding .logo img {
        width: 42px;
    }

    .branding .sitename {
        font-size: 17px;
        white-space: nowrap;
        margin-left: 6px;
    }

   
    .header-contact-bar {
        padding-top: 6px;
        padding-bottom: 10px;
    }

    .social-links {
        margin-top: 2px;
        margin-bottom: 4px;
    }

    .header-separator {
        margin-top: 1px;
    }

}

/* =====================================================
   DIABOSS GROUPE — HEADER RESPONSIVE
   ===================================================== */

/* ---------- STRUCTURE DESKTOP ---------- */

.branding .container {
    display: flex;
    align-items: center;
    justify-content: space-between;
    gap: 40px;
    min-width: 0;
}

.branding .logo {
    display: flex;
    align-items: center;
    gap: 12px;
    min-width: 0;
    flex-shrink: 1;
}

.branding .logo img {
    width: 55px;
    height: auto;
    object-fit: contain;
    flex-shrink: 0;
}

.branding .sitename {
    color: white;
    margin: 0;
    font-size: 25px;
    line-height: 1.1;
    white-space: nowrap;
}

.branding .navmenu {
    flex-shrink: 0;
}


/* =====================================================
   GRAND ÉCRAN / PETIT DESKTOP
   ===================================================== */

@media (max-width: 1199px) {

    .branding .container {
        gap: 25px;
    }

    .branding .logo img {
        width: 50px;
    }

    .branding .sitename {
        font-size: 21px;
    }

}


/* =====================================================
   TABLETTE
   ===================================================== */

@media (max-width: 991px) {

    .branding .container {
        gap: 20px;
    }

    .branding .logo {
        gap: 8px;
    }

    .branding .logo img {
        width: 45px;
    }

    .branding .sitename {
        font-size: 19px;
    }

}


/* =====================================================
   MOBILE
   ===================================================== */

@media (max-width: 767px) {

    .branding {
        padding: 8px 0;
    }

    .branding .container {
        width: 100%;
        padding-left: 15px;
        padding-right: 15px;
        gap: 10px;
    }

    .branding .logo {
        max-width: calc(100% - 55px);
        gap: 7px;
    }

    .branding .logo img {
        width: 42px;
    }

    .branding .sitename {
        font-size: 17px;
        white-space: nowrap;
    }

    .branding .navmenu {
        flex-shrink: 0;
    }

    .branding .mobile-nav-toggle {
        font-size: 30px;
        margin-left: 5px;
    }

}


/* =====================================================
   TRÈS PETITS TÉLÉPHONES
   ===================================================== */

@media (max-width: 400px) {

    .branding .container {
        padding-left: 12px;
        padding-right: 12px;
    }

    .branding .logo {
        gap: 5px;
    }

    .branding .logo img {
        width: 37px;
    }

    .branding .sitename {
        font-size: 15px;
    }

    .branding .mobile-nav-toggle {
        font-size: 27px;
    }

}

/* Espace entre les réseaux sociaux et la ligne */
@media (max-width: 767px) {

    .header-contact-bar {
        padding-top: 6px;
        padding-bottom: 12px;
    }

    .social-links {
        margin-top: 3px;
        margin-bottom: 5px;
    }

    .header-separator {
        margin-top: 5px;
    }
}


</style>
    
    <!-- End Top Bar -->

    
    <samp><div></div></samp>
       <!-- Ligne de séparation -->
<div class="header-separator"></div>

<div class="branding d-flex align-items-center"
     style="background: #0d1b2a">
     <br>

<div class="branding d-flex align-items-center"
       style="background: #0d1b2a">

    

      <div class="container position-relative d-flex align-items-center justify-content-between">
        <a href="/" class="logo d-flex align-items-center">
          <!-- Uncomment the line below if you also wish to use an image logo -->
           <img src="{{asset('logo2.png')}}" alt=""> 
          <h1 class="sitename" style="color: white
          ">DIABOSS GROUPE</h1>
        </a>

        <nav id="navmenu" class="navmenu">
          <ul>
            <li><a href="/" class="active">Home</a></li>

            <li class="dropdown"><a href="#"><span>Nos filiales</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
              <ul>
                <li><a href="/construction">Diaboss construction</a></li>
                <li><a href="/djawo">Diaboss&Djawo</a></li>
                <li><a href="/bamdepot">Diaboss&Bam depôt</a></li>
                <li><a href="/mhmmateriaux">MHM Mariaux</a></li>
                <li><a href="/batijob">Batijob</a></li>
                <li><a href="/byimmo">Diaboss by immo</a></li>
                <li><a href="/mddesign">M2Design</a></li>
              </ul>
            </li>


            {{-- <li><a href="https://bootstrapmade.com/content/demo/LuxEstate/about.html">About</a></li> --}}
            {{-- <li><a href="https://bootstrapmade.com/content/demo/LuxEstate/properties.html">Properties</a></li>
            <li><a href="https://bootstrapmade.com/content/demo/LuxEstate/services.html">Services</a></li>
            <li><a href="https://bootstrapmade.com/content/demo/LuxEstate/agents.html">Agents</a></li>
            <li class="dropdown"><a href="#"><span>Dropdown</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
              <ul>
                <li><a href="#">Dropdown 1</a></li>
                <li class="dropdown"><a href="#"><span>Deep Dropdown</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
                  <ul>
                    <li><a href="#">Deep Dropdown 1</a></li>
                    <li><a href="#">Deep Dropdown 2</a></li>
                    <li><a href="#">Deep Dropdown 3</a></li>
                    <li><a href="#">Deep Dropdown 4</a></li>
                    <li><a href="#">Deep Dropdown 5</a></li>
                  </ul>
                </li>
                <li><a href="#">Dropdown 2</a></li>
                <li><a href="#">Dropdown 3</a></li>
                <li><a href="#">Dropdown 4</a></li>
              </ul>
            </li>
            <li><a href="https://bootstrapmade.com/content/demo/LuxEstate/contact.html">Contact</a></li> --}}
          </ul>
          <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
        </nav>

      </div>

    </div>

  </header>