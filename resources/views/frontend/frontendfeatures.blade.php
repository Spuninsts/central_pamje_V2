<div class="container my-5 ">
      <!-- First Row: Central Features -->
      <div class="row my-4 ">
        <div class="col d-flex justify-content-between align-items-center">
          <h2 class="cen-font-darkblue">Central Features</h2>
          <a href="http://central.pamje.org/journals/alphabet?val=all" class="btn btn-primary">View all</a>
        </div>
      </div>
      <!-- Second Row: Cards -->
      <div class="row row-cols-1 row-cols-md-4 g-4">

        @foreach( $ArticleData as $key => $item)
        <!-- Card 1 -->
        <div class="col">
          <div class="card rounded-0" >
              <a href="/journals/data?val={{$item->journal_mid}}" >
                  <img class="card-img-top rounded-0" src="/upload/admin_images/{{ $item->photo }}" alt="{{ $item->short_title }}" class="w-100">
              </a>
            <div class="card-body">
              <h5 class="card-title cen-font-darkblue"><a href="/journals/data?val={{$item->journal_mid}}" class="text-decoration-none cen-link-hover-blue">{{ $item->full_title }} | {{ $item->short_title }}
              </a></h5>
              <p class="card-text">{{ substr($item->about,0) }}</p>
              <p><a href="/journals/data?val={{$item->journal_mid}}" class="text-decoration-none cen-link-hover-blue">View more Information</a></p>
            </div>
          </div>
        </div>
        @endforeach

      </div>
    </div>
