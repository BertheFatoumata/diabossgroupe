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

 /* =====================================================
   HEADER DIABOSS GROUPE — RESPONSIVE FINAL
   ===================================================== */

/* ---------- DESKTOP ---------- */

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

.social-links {
    display: flex;
    align-items: center;
    gap: 12px;
}

.social-links a {
    color: white;
    text-decoration: none;
}


/* =====================================================
   TABLETTES
   ===================================================== */

@media (max-width: 991px) {

    .branding .container {
        gap: 15px;
    }

    .branding .logo {
        gap: 8px;
        min-width: 0;
    }

    .branding .logo img {
        width: 45px;
        flex-shrink: 0;
    }

    .branding .sitename {
        font-size: 20px;
        white-space: nowrap;
    }

}


/* =====================================================
   TÉLÉPHONES
   On garde uniquement :
   LOGO + DIABOSS GROUPE + MENU
   ===================================================== */

@media (max-width: 767px) {

    /* --- On cache complètement la topbar --- */

    .header-contact-bar {
        display: none !important;
    }

    .topbar {
        display: none !important;
    }

    /* --- Branding principal --- */

    .branding {
        padding: 8px 0;
        min-height: 60px;
    }

    .branding .container {
        width: 100%;
        padding-left: 12px;
        padding-right: 12px;

        display: flex;
        align-items: center;
        justify-content: space-between;

        gap: 8px;
    }

    /* --- Logo + titre --- */

    .branding .logo {
        display: flex;
        align-items: center;

        min-width: 0;
        max-width: calc(100% - 55px);

        gap: 7px;
    }

    .branding .logo img {
        width: 40px;
        height: auto;
        flex-shrink: 0;
    }

    .branding .sitename {
        margin: 0;
        padding: 0;

        font-size: clamp(15px, 5vw, 19px);
        line-height: 1.1;

        white-space: nowrap;
        overflow: hidden;
        text-overflow: ellipsis;
    }

    /* --- Menu hamburger --- */

    .branding .navmenu {
        flex-shrink: 0;
        margin-left: auto;
    }

    .branding .mobile-nav-toggle {
        display: block;

        font-size: 30px;
        line-height: 1;

        margin: 0;
        padding: 4px;

        color: white;
        cursor: pointer;
    }

}


/* =====================================================
   TRÈS PETITS TÉLÉPHONES
   ===================================================== */

@media (max-width: 400px) {

    .branding {
        min-height: 56px;
        padding: 6px 0;
    }

    .branding .container {
        padding-left: 10px;
        padding-right: 10px;
        gap: 5px;
    }

    .branding .logo {
        gap: 5px;
        max-width: calc(100% - 50px);
    }

    .branding .logo img {
        width: 34px;
    }

    .branding .sitename {
        font-size: 15px;
    }

    .branding .mobile-nav-toggle {
        font-size: 27px;
    }

}


/* =====================================================
   TOUT PETIT ÉCRAN
   Exemple : anciens petits Android / iPhone SE
   ===================================================== */

@media (max-width: 340px) {

    .branding .logo img {
        width: 30px;
    }

    .branding .sitename {
        font-size: 14px;
    }

    .branding .mobile-nav-toggle {
        font-size: 25px;
    }

}

</style>
    
    <!-- End Top Bar -->

    
    <samp><div></div></samp>
       <!-- Ligne de séparation -->



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