@extends('layout.main')
@section('content')
     <!-- Hero Section -->
     <div class="page-title accent-background">
      <div class="breadcrumbs">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#"><i class="bi bi-house"></i> Home</a></li>
            <li class="breadcrumb-item"><a href="#">Category</a></li>
            <li class="breadcrumb-item active current">Property Details</li>
          </ol>
        </nav>
      </div>

      <div class="title-wrapper">
        <h1>Diaboss Construction </h1>
<p>Votre partenaire de confiance pour tous vos projets de construction. De la conception à la réalisation, DIABOSS CONSTRUCTION bâtit des infrastructures durables avec professionnalisme, innovation et excellence.</p>
      </div>
    </div><!-- End Page Title -->

    <!-- Property Details Section -->
    <section id="property-details" class="property-details section">

      <div class="container">

        <div class="row gy-4">

          <!-- Left Column: Gallery + Tabs -->
          <div class="col-lg-7">

            <!-- Property Gallery Slider -->
            <div class="listing-gallery">
              <div class="gallery-slider swiper init-swiper">
                <script data-cfasync="false" src="https://bootstrapmade.com/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script type="application/json" class="swiper-config">
                  {
                    "loop": true,
                    "speed": 600,
                    "autoplay": {
                      "delay": 5000
                    },
                    "slidesPerView": 1,
                    "pagination": {
                      "el": ".swiper-pagination",
                      "type": "bullets",
                      "clickable": true
                    },
                    "navigation": {
                      "nextEl": ".swiper-button-next",
                      "prevEl": ".swiper-button-prev"
                    }
                  }
                </script>
                <div class="swiper-wrapper">
                  <div class="swiper-slide">
                    <a href="https://bootstrapmade.com/content/demo/LuxEstate/assets/img/real-estate/property-exterior-7.webp" class="glightbox" data-gallery="listing-gallery">
                      <img src="https://bootstrapmade.com/content/demo/LuxEstate/assets/img/real-estate/property-exterior-7.webp" alt="Property Front" class="img-fluid" loading="lazy">
                    </a>
                  </div>
                  <div class="swiper-slide">
                    <a href="https://bootstrapmade.com/content/demo/LuxEstate/assets/img/real-estate/property-interior-2.webp" class="glightbox" data-gallery="listing-gallery">
                      <img src="https://bootstrapmade.com/content/demo/LuxEstate/assets/img/real-estate/property-interior-2.webp" alt="Main Living Area" class="img-fluid" loading="lazy">
                    </a>
                  </div>
                  <div class="swiper-slide">
                    <a href="https://bootstrapmade.com/content/demo/LuxEstate/assets/img/real-estate/property-interior-4.webp" class="glightbox" data-gallery="listing-gallery">
                      <img src="https://bootstrapmade.com/content/demo/LuxEstate/assets/img/real-estate/property-interior-4.webp" alt="Modern Kitchen" class="img-fluid" loading="lazy">
                    </a>
                  </div>
                  <div class="swiper-slide">
                    <a href="https://bootstrapmade.com/content/demo/LuxEstate/assets/img/real-estate/property-interior-6.webp" class="glightbox" data-gallery="listing-gallery">
                      <img src="https://bootstrapmade.com/content/demo/LuxEstate/assets/img/real-estate/property-interior-6.webp" alt="Primary Suite" class="img-fluid" loading="lazy">
                    </a>
                  </div>
                  <div class="swiper-slide">
                    <a href="https://bootstrapmade.com/content/demo/LuxEstate/assets/img/real-estate/property-exterior-8.webp" class="glightbox" data-gallery="listing-gallery">
                      <img src="https://bootstrapmade.com/content/demo/LuxEstate/assets/img/real-estate/property-exterior-8.webp" alt="Rear Patio" class="img-fluid" loading="lazy">
                    </a>
                  </div>
                  <div class="swiper-slide">
                    <a href="https://bootstrapmade.com/content/demo/LuxEstate/assets/img/real-estate/property-interior-8.webp" class="glightbox" data-gallery="listing-gallery">
                      <img src="https://bootstrapmade.com/content/demo/LuxEstate/assets/img/real-estate/property-interior-8.webp" alt="Study Room" class="img-fluid" loading="lazy">
                    </a>
                  </div>
                </div>
                <div class="swiper-button-prev"></div>
                <div class="swiper-button-next"></div>
                <div class="swiper-pagination"></div>
              </div>
            </div><!-- End Property Gallery Slider -->

            <!-- Property Quick Stats Bar -->
            <div class="quick-stats">
              <div class="stat-badge">
                <i class="bi bi-house"></i>
                <span>4 Beds</span>
              </div>
              <div class="stat-badge">
                <i class="bi bi-droplet"></i>
                <span>3 Baths</span>
              </div>
              <div class="stat-badge">
                <i class="bi bi-rulers"></i>
                <span>2,650 Sq Ft</span>
              </div>
              <div class="stat-badge">
                <i class="bi bi-car-front"></i>
                <span>2 Garage</span>
              </div>
              <div class="stat-badge">
                <i class="bi bi-calendar"></i>
                <span>Built 2020</span>
              </div>
            </div><!-- End Quick Stats -->

            <!-- Tabbed Content -->
            <div class="listing-tabs">
              <ul class="nav nav-tabs" role="tablist">
                <li class="nav-item" role="presentation">
                  <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#property-details-tab-overview" type="button" role="tab" aria-selected="true">Overview</button>
                </li>
                <li class="nav-item" role="presentation">
                  <button class="nav-link" data-bs-toggle="tab" data-bs-target="#property-details-tab-amenities" type="button" role="tab" aria-selected="false">Amenities</button>
                </li>
                <li class="nav-item" role="presentation">
                  <button class="nav-link" data-bs-toggle="tab" data-bs-target="#property-details-tab-location" type="button" role="tab" aria-selected="false">Location</button>
                </li>
              </ul>

              <div class="tab-content">

                <!-- Overview Tab -->
                <div class="tab-pane fade show active" id="property-details-tab-overview" role="tabpanel">
                  <div class="tab-inner">
                    <h3>DIABOSS CONSTRUCTION</h3>
                    <p> Est la filiale opérationnelle spécialisée dans la réalisation des travaux de construction et de travaux publics. Elle prend en charge la construction d’habitations, les aménagements extérieurs ainsi que les travaux de gros œuvre et de second œuvre.
Forte de son expertise technique, DIABOSS CONSTRUCTION se positionne comme un acteur de référence de la construction durable, garantissant qualité d’exécution, respect des normes et maîtrise des délais.</p>
                  </div>
                </div><!-- End Overview Tab -->

                <!-- Amenities Tab -->
                <div class="tab-pane fade" id="property-details-tab-amenities" role="tabpanel">
                  <div class="tab-inner">
                    <div class="row">
                      <div class="col-md-6">
                        <h4>Indoor Highlights</h4>
                        <ul class="amenity-list">
                          <li><i class="bi bi-check2"></i> Engineered Wood Flooring</li>
                          <li><i class="bi bi-check2"></i> Renovated Kitchen</li>
                          <li><i class="bi bi-check2"></i> Spacious Walk-in Closets</li>
                          <li><i class="bi bi-check2"></i> Smart Climate Control</li>
                          <li><i class="bi bi-check2"></i> Gas Fireplace</li>
                          <li><i class="bi bi-check2"></i> Vaulted Ceilings</li>
                        </ul>
                      </div>
                      <div class="col-md-6">
                        <h4>Outdoor Highlights</h4>
                        <ul class="amenity-list">
                          <li><i class="bi bi-check2"></i> Double Car Garage</li>
                          <li><i class="bi bi-check2"></i> Heated Pool</li>
                          <li><i class="bi bi-check2"></i> Landscaped Garden</li>
                          <li><i class="bi bi-check2"></i> Covered Deck</li>
                          <li><i class="bi bi-check2"></i> Home Security System</li>
                          <li><i class="bi bi-check2"></i> Irrigation System</li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div><!-- End Amenities Tab -->

                <!-- Location Tab -->
                <div class="tab-pane fade" id="property-details-tab-location" role="tabpanel">
                  <div class="tab-inner">
                    <div class="map-wrapper">
                      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2965.0824050173574!2d-87.63000000000002!3d41.88844360000001!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x880e2c3cd0f4cbed%3A0xafe0a6ad09c0c000!2sChicago%2C%20IL%2C%20USA!5e0!3m2!1sen!2sus!4v1234567890123" width="100%" height="350" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                    </div>
                    <div class="neighborhood-info">
                      <h4>Area Overview</h4>
                      <p>Nestled within a vibrant urban corridor, this residence provides seamless connectivity to premier retail destinations, acclaimed restaurants, and cultural attractions. Major transit lines and expressways are within a short walk.</p>
                    </div>
                  </div>
                </div><!-- End Location Tab -->

              </div>
            </div><!-- End Tabbed Content -->

          </div>

          <!-- Right Column: Sidebar -->
          <div class="col-lg-5">

            <div class="sidebar-card sticky-top">

              <!-- Price & Status -->
              <div class="listing-header">
                <div class="listing-price">$925,000</div>
                <span class="status-badge">Available</span>
              </div>

              <div class="listing-address">
                <i class="bi bi-geo-alt"></i>
                <div>
                  <span class="street">5678 Oakwood Drive</span>
                  <span class="city">Denver, CO 80202</span>
                </div>
              </div>

              <div class="divider"></div>

              <!-- Property Key Details -->
              <div class="key-details">
                <div class="detail-row">
                  <span class="detail-label">Property Type</span>
                  <span class="detail-value">Single Family</span>
                </div>
                <div class="detail-row">
                  <span class="detail-label">Lot Size</span>
                  <span class="detail-value">0.30 Acres</span>
                </div>
                <div class="detail-row">
                  <span class="detail-label">Year Built</span>
                  <span class="detail-value">2020</span>
                </div>
                <div class="detail-row">
                  <span class="detail-label">HOA Fees</span>
                  <span class="detail-value">$120/mo</span>
                </div>
              </div>

              <div class="divider"></div>

              <!-- Agent Card -->
              <div class="agent-card">
                <img src="{{asset('Mathia.png')}}" alt="Mark Reynolds" class="img-fluid agent-photo">
                <div class="agent-meta">
                  <h4>Mathia Diallo</h4>
                  <span class="agent-role">PDG Diaboss construction</span>
                  <div class="agent-contact-links">
                    <a href="tel:+15557890123"><i class="bi bi-telephone"></i> +1 (555) 789-0123</a>
                    <a href="mailto:diabossconstruction@gmail.com"><i class="bi bi-envelope"></i> <span>diabossconstruction@gmail.com</span></a>

                  </div>
                </div>
              </div><!-- End Agent Card -->

              <div class="divider"></div>

              <!-- Inquiry Form -->
              <div class="inquiry-form">
                <h4>Request a Visit</h4>
                <form action="https://bootstrapmade.com/content/demo/LuxEstate/forms/contact.php" method="post" class="php-email-form">
                  <div class="form-field">
                    <label for="inquiry-name">Full Name</label>
                    <input type="text" name="name" id="inquiry-name" class="form-control" placeholder="Enter your name" required="" autocomplete="name">
                  </div>
                  <div class="form-field">
                    <label for="inquiry-email">Email Address</label>
                    <input type="email" name="email" id="inquiry-email" class="form-control" placeholder="you@example.com" required="" autocomplete="email">
                  </div>
                  <div class="form-field">
                    <label for="inquiry-phone">Phone Number</label>
                    <input type="tel" name="phone" id="inquiry-phone" class="form-control" placeholder="+1 (555) 000-0000" autocomplete="tel">
                  </div>
                  <div class="form-field">
                    <label for="inquiry-message">Your Message</label>
                    <textarea name="message" id="inquiry-message" class="form-control" rows="3" placeholder="I'd like to schedule a viewing..."></textarea>
                  </div>
                  <div class="loading">Loading</div>
                  <div class="error-message"></div>
                  <div class="sent-message">Your message has been sent. Thank you!</div>
                  <button type="submit" class="btn submit-btn">Send Inquiry</button>
                </form>
              </div><!-- End Inquiry Form -->

              <div class="divider"></div>

              <!-- Share Links -->
              <div class="share-row">
                <span class="share-label">Share Listing</span>
                <div class="share-icons">
                  <a href="#" aria-label="Share on Facebook"><i class="bi bi-facebook"></i></a>
                  <a href="#" aria-label="Share on Twitter"><i class="bi bi-twitter-x"></i></a>
                  <a href="#" aria-label="Share on WhatsApp"><i class="bi bi-whatsapp"></i></a>
                  <a href="#" aria-label="Send via Email"><i class="bi bi-envelope"></i></a>
                  <a href="#" aria-label="Print Listing"><i class="bi bi-printer"></i></a>
                </div>
              </div><!-- End Share Links -->

            </div><!-- End Sidebar Card -->

          </div>

        </div>

      </div>

    </section><!-- /Property Details Section -->


    
@endsection