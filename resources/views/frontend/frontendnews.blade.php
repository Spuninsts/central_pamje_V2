<div class="container py-5 ">
      <!-- First Row: Heading -->
      <div class="row my-4">
        <div class="col d-flex justify-content-between align-items-center">
          <h2 class="cen-font-darkblue">News and Announcement</h2>
          <a href="/newsannouncements" class="btn btn-primary">View all</a>
        </div>
      </div>

      <!-- Row with 3 Cards -->
      <div class="row">

            <!-- First Card -->
          @foreach( $NewsAnnounceData as $key => $item)
            <div class="col-12 col-md-4 d-flex justify-content-center mb-3 ">
              <div class="card bg-light rounded-0 " style="width: 25rem;">
                <img src="/upload/admin_images/{{ $item->page_image_path }}" class="card-img-top rounded-0" alt="{{ $item->page_title }}">
                <div class="card-body">
                  <h5 class="card-title cen-font-darkblue">{{ $item->page_title }}</h5>
                </div>
              </div>
            </div>
          @endforeach
            <!-- Second Card -- >
            <div class="col-12 col-md-4 d-flex justify-content-center mb-3">
              <div class="card bg-light rounded-0">
                <img src="https://picsum.photos/350/200" class="card-img-top rounded-0" alt="Placeholder Image">
                <div class="card-body">
                  <h5 class="card-title cen-font-darkblue">Card 2 Title</h5>
                </div>
              </div>
            </div> -->
            <!-- Third Card -- >
            <div class="col-12 col-md-4 d-flex justify-content-center mb-3">
              <div class="card bg-light rounded-0">
                <img src="https://picsum.photos/350/200" class="card-img-top rounded-0" alt="Placeholder Image">
                <div class="card-body">
                  <h5 class="card-title cen-font-darkblue">Card 3 Title</h5>
                </div>
              </div>
            </div> -->

      </div>
    </div>
