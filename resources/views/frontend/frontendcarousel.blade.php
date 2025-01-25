<div id="carouselExampleCaptions" class="carousel carousel-dark slide" data-bs-ride="carousel" data-bs-interval="3000">
        <div class="carousel-indicators">
              <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
              <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
              <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
              <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="3" aria-label="Slide 4"></button>
        </div>
        <div class="carousel-inner">

        @php $carousel_no = 1 @endphp
        @foreach($BannerData as $bd)
                @if($carousel_no == 1)
                    <div class="carousel-item active">
                @else
                            <div class="carousel-item ">
                @endif

                        <img src="{{ url('upload/admin_images/'.$bd->banner_image_path) }}" class="img-fluid" alt="carousel {{$carousel_no}}" style="max-height: 60vh;">

                    <div class="carousel-caption text-center">
                        <div class="mt-sm-5 py-3">
                            <h2 class="text-white display-4 m-4 cen-hero-title">
                                <span class="cen-bg-darkblue-opacity p-2 "> {{$bd->banner_title}} </span></h2>
                            <p class="text-white m-4 cen-hero-blurb">
                  <span class="cen-bg-darkblue-opacity p-2"> {{$bd->banner_description}}
                  </span>
                            </p>

                        </div>
                        <div class="button">
                            <a href="{{$bd->banner_url}}" class="btn btn-primary cen-btn-darkblue py-2 px-3" role="button">Learn more</a>
                        </div>
                    </div>
                </div>
        @php $carousel_no +=1 @endphp
        @endforeach

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
</div>
