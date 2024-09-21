<div class="container my-5 ">
      <!-- First Row: Central Features -->
      <div class="row my-4 ">
        <div class="col d-flex justify-content-between align-items-center">
          <h2 class="cen-font-darkblue">Central Features</h2>
          <a href="#" class="btn btn-primary">View all</a>
        </div>
      </div>
      <!-- Second Row: Cards -->
      <div class="row row-cols-1 row-cols-md-4 g-4">

        @foreach( $ArticleData as $key => $item)
        <!-- Card 1 -->
        <div class="col">
          <div class="card rounded-0">
            <img class="card-img-top rounded-0" src="/upload/no_image.jpg" alt="{{ $item->short_title }}">
            <div class="card-body">
              <h5 class="card-title cen-font-darkblue">{{ $item->full_title }} | {{ $item->short_title }}</h5>
              <p class="card-text">{{ substr($item->about,0) }}</p>
              <p><a href="/journals/data?val={{$item->journal_mid}}" >View more Information</a></p>
            </div>
          </div>
        </div>
        @endforeach
        <!-- < !-- Card 2 -- >
        <div class="col">
          <div class="card rounded-0">
            <img class="card-img-top rounded-0" src="https://via.placeholder.com/268x161" alt="Card 2">
            <div class="card-body">
              <h5 class="card-title cen-font-darkblue">Card 2</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            </div>
          </div>
        </div>
        < !-- Card 3 -- >
        <div class="col">
          <div class="card rounded-0">
            <img class="card-img-top rounded-0" src="https://via.placeholder.com/268x161" alt="Card 3">
            <div class="card-body">
              <h5 class="card-title cen-font-darkblue">Card 3</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            </div>
          </div>
        </div>
        < -- Card 4 -- >
        <div class="col">
          <div class="card rounded-0">
            <img class="card-img-top rounded-0" src="https://via.placeholder.com/268x161" alt="Card 4">
            <div class="card-body">
              <h5 class="card-title cen-font-darkblue">Card 4</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            </div>
          </div>
        </div> -->
      </div>
    </div>
