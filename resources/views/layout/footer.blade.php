


<style>

  :root{
  --bg: #F5EFE2;
  --bg-alt: #EBDFC7;
  --surface: #FFFCF6;
  --ink: #2B231C;
  --ink-soft: #5B4E3F;
  --brick: #A8462B;
  --brick-dark: #7E3320;
  --ochre: #C08A2E;
  --clay: #E7C39A;
  --green: #4B6350;
  --line: rgba(43,35,28,0.14);
  --radius: 6px;
  --shadow: 0 10px 30px rgba(43,35,28,0.08);
  --container: 1140px;
}

footer.site-footer{ background: #0d1b2a; color:#D8CDB9; padding: 60px 0 28px; }
footer .container{ display:grid; grid-template-columns: 1.3fr repeat(2, 1fr); gap: 40px; }
footer h4{ color:#F5EFE2; font-size:.85rem; letter-spacing:.08em; text-transform:uppercase; font-family:'Work Sans',sans-serif; font-weight:700; margin-bottom: 1em;}
footer a{ color:#D8CDB9; }
footer a:hover{ color:#fff; }
footer .flist{ display:flex; flex-direction:column; gap:10px; font-size:.92rem; }
.foot-bottom{ margin-top: 44px; padding-top: 22px; border-top:1px solid rgba(255,255,255,0.12); font-size:.8rem; color:#A99B84; display:flex; justify-content:space-between; flex-wrap:wrap; gap:10px;}

/* ---------- contact ---------- */
.contact-grid{ display:grid; grid-template-columns: 1fr 1fr; gap: 40px; align-items:start;}
.contact-card{ background: #0d1b2a; border:1px solid var(--line); border-radius: var(--radius); padding: 30px; }
.contact-card .row{ display:flex; gap:14px; padding: 14px 0; border-bottom:1px dashed var(--line); }
.contact-card .row:last-child{ border-bottom:none; }
form.contact-form{ display:grid; gap: 14px; }
form.contact-form input, form.contact-form textarea{
  width:100%; padding: 13px 14px; border:1px solid var(--line); border-radius: 4px;
  font-family:'Work Sans',sans-serif; font-size:.95rem; background:var(--surface); color:var(--ink);
}
form.contact-form label{ font-size:.82rem; font-weight:600; color: var(--ink-soft); display:block; margin-bottom:5px; }

.section--dark{
    background:#0d1b2a;
    color:white;
}

/* ---------- responsive ---------- */
/* ---------- page interne (filiale) ---------- */

</style>
<section class="section section--dark" id="contact">
  <div class="container">
    <p class="eyebrow" style="color:var(--ochre)">Contact</p>
    <h2>Un projet en tête ? Parlons-en.</h2>
    <div class="contact-grid">
      <div class="contact-card" style="background:rgba(255,255,255,0.04); border-color:rgba(255,255,255,0.14);">
        <div class="row"><strong>Adresse</strong><span>Baco-djicoroni golf , rue:782 , porte:2108</span></div>
        <div class="row"><strong>Téléphone</strong><span>+223 60 55 55 89 /+223 75 44 71 13</span></div>
        <div class="row"><strong>E-mail</strong><span>diabossgroupe@gmail.com</span></div>
      </div>
<form class="contact-form" action="{{ route('envoyer.email') }}" method="POST">
    @csrf

    <div>
        <label for="nom">Nom complet</label>
        <input
            type="text"
            id="nom"
            name="nom"
            placeholder="Votre nom"
            required
        >
    </div>

    <div>
        <label for="email">E-mail</label>
        <input
            type="email"
            id="email"
            name="email"
            placeholder="vous@exemple.com"
            required
        >
    </div>

    <div>
        <label for="message">Votre projet</label>
        <textarea
            id="message"
            name="message"
            rows="4"
            placeholder="Parlez-nous de votre projet..."
            required
        ></textarea>
    </div>

    <button type="submit" class="btn btn--brick">
        Envoyer le message
    </button>
</form>
    </div>
  </div>
</section>

<footer class="site-footer">
  <div class="container">
    <div>
      <a href="/" class="brand" style="color:#F5EFE2;">
        {{-- <span class="mark"><span></span><span></span><span></span></span> --}}
        <span>Diaboss Groupe</span>
      </a>
      <p style="margin-top:14px; max-width:32ch;">Sept entreprises, une seule chaîne de valeur : de la terre au toit.</p>
    </div>
    <div>
      <h4>Nos filiales</h4>
      <div class="flist">
        <a href="/djawo">Diaboss &amp; Djawo</a>
        <a href="/construction">Diaboss Construction</a>
        <a href="/bamdepot">Diaboss &amp; Bam Dépôt</a>
        <a href="/mddesign">MD2 Design</a>
        <a href="/byimmo">Djawo Immo</a>
        <a href="/batijob">Batijob</a>
        <a href="/mhmmateriaux">MHM Matériaux</a>
      </div>
    </div>
    <div>
      <h4>Groupe</h4>
      <div class="flist">
        <a href="/">Le groupe</a>
        <a href="/#filiales">Nos filiales</a>
        <a href="#contact">Contact</a>
      </div>
    </div>
  </div>
  <div class="container foot-bottom">
    <span>© <span data-year></span> Diaboss Groupe. Tous droits réservés.</span>
    <span>Site multi-pages — 7 filiales</span>
  </div>
</footer>

<script>
    var form = document.querySelector('.contact-form');

if (form) {
    form.addEventListener('submit', function (e) {
        e.preventDefault();

        // Vider le formulaire
        form.reset();

        // Afficher une boîte de dialogue
        alert("✅ Votre message a bien été envoyé. Nous vous répondrons dans les plus brefs délais.");

        // Modifier le bouton
        var btn = form.querySelector('button[type="submit"]');
        if (btn) {
            btn.textContent = 'Message envoyé ✓';
            btn.disabled = true;
        }
    });
}

</script>

{{-- <footer id="footer" class="footer accent-background">


    <div class="container footer-top">
      <div class="row gy-4">
        <div class="col-lg-4 col-md-6 footer-about">
          <a href="https://bootstrapmade.com/content/demo/LuxEstate/index.html" class="logo d-flex align-items-center">
            <span class="sitename">LuxEstate</span>
          </a>
          <div class="footer-contact pt-3">
            <p>A108 Adam Street</p>
            <p>New York, NY 535022</p>
            <p class="mt-3"><strong>Phone:</strong> <span>+1 5589 55488 55</span></p>
            <p><strong>Email:</strong> <span><a href="https://bootstrapmade.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="aac3c4ccc5eacfd2cbc7dac6cf84c9c5c7">[email&#160;protected]</a></span></p>
          </div>
          <div class="social-links d-flex mt-4">
            <a href="#"><i class="bi bi-twitter-x"></i></a>
            <a href="#"><i class="bi bi-facebook"></i></a>
            <a href="#"><i class="bi bi-instagram"></i></a>
            <a href="#"><i class="bi bi-linkedin"></i></a>
          </div>
        </div>
        

        <div class="col-lg-2 col-md-3 footer-links">
          <h4>Useful Links</h4>
          <ul>
            <li><a href="#">Home</a></li>
            <li><a href="#">About us</a></li>
            <li><a href="#">Services</a></li>
            <li><a href="#">Terms of service</a></li>
            <li><a href="#">Privacy policy</a></li>
          </ul>
        </div>

        <div class="col-lg-2 col-md-3 footer-links">
          <h4>Our Services</h4>
          <ul>
            <li><a href="#">Web Design</a></li>
            <li><a href="#">Web Development</a></li>
            <li><a href="#">Product Management</a></li>
            <li><a href="#">Marketing</a></li>
            <li><a href="#">Graphic Design</a></li>
          </ul>
        </div>

        <div class="col-lg-2 col-md-3 footer-links">
          <h4>Hic solutasetp</h4>
          <ul>
            <li><a href="#">Molestiae accusamus iure</a></li>
            <li><a href="#">Excepturi dignissimos</a></li>
            <li><a href="#">Suscipit distinctio</a></li>
            <li><a href="#">Dilecta</a></li>
            <li><a href="#">Sit quas consectetur</a></li>
          </ul>
        </div>

        <div class="col-lg-2 col-md-3 footer-links">
          <h4>Nobis illum</h4>
          <ul>
            <li><a href="#">Ipsam</a></li>
            <li><a href="#">Laudantium dolorum</a></li>
            <li><a href="#">Dinera</a></li>
            <li><a href="#">Trodelas</a></li>
            <li><a href="#">Flexo</a></li>
          </ul>
        </div>

      </div>
    </div>

    <div class="container copyright text-center mt-4">
      <p>© <span>Copyright</span> <strong class="px-1 sitename">LuxEstate</strong> <span>All Rights Reserved</span></p>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you've purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: [buy-url] -->
        Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
      </div>
    </div>

  </footer> --}}