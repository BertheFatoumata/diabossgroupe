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
</style>
    
    <!-- End Top Bar -->

    <div></div>
    <div></div>
    <div></div>
    

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