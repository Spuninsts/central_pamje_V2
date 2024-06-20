<div id="carouselExampleCaptions" class="carousel carousel-dark slide" data-bs-ride="carousel" data-bs-interval="3000">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="{{ asset('frontend/img/carousel-1.jpg') }}" class="d-block  custom-car-img-height-sm" alt="carousel 1">
            <div class="carousel-caption text-center">
              <div class="mt-sm-5 py-3">
                  <h2 class="text-white display-4 m-4 cen-hero-title">
                  <span class="cen-bg-darkblue-opacity p-2 "> First slide label </span></h2>
                  <p class="text-white m-4 cen-hero-blurb">
                  <span class="cen-bg-darkblue-opacity p-2"> FIRST CONTENT FEATURED
                  </span>
                  </p>

              </div>
              <div class="button">
                <a href="#" class="btn btn-primary cen-btn-darkblue py-2 px-3" role="button">Learn more</a>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <img src="{{ asset('frontend/img/carousel-3.jpg') }}" class="d-block custom-car-img-height-sm" alt="carousel 2">
            <div class="carousel-caption ">
              <div class="mt-sm-5 py-3">
                 <h2 class="text-white display-4 m-4 cen-hero-title">
                  <span class="cen-bg-darkblue-opacity p-2"> Second slide label </span></h2>
                  <p class="text-white m-4 cen-hero-blurb">
                  <span class="cen-bg-darkblue-opacity p-2"> SECOND CONTENT FEATURED
                  </span>
                  </p>
              </div>
              <div class="button">
                <a href="#" class="btn btn-primary cen-btn-darkblue py-2 px-3" role="button">Learn more</a>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <img src="{{ asset('frontend/img/carousel-1.jpg') }}" class="d-block custom-car-img-height-sm" alt="carousel 3">
            <div class="carousel-caption ">
              <div class="mt-sm-5 py-3">
                <h2 class="text-white display-4 m-4 cen-hero-title">
                  <span class="cen-bg-darkblue-opacity p-2"> Third slide label </span></h2>
                  <p class="text-white m-4 cen-hero-blurb">
                  <span class="cen-bg-darkblue-opacity p-2"> THIRD CONTENT FEATURED
                  </span>
                  </p>
              </div>
              <div class="button">
                <a href="#" class="btn btn-primary cen-btn-darkblue py-2 px-3" role="button">Learn more</a>
              </div>
            </div>
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
