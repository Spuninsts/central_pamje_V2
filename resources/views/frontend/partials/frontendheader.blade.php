<header class="pt-3 ">
        <div class="container d-flex flex-wrap align-self-center mb-1 w-100">
          <a href="#" class="d-flex align-items-center mb-3 mb-lg-0 me-lg-auto link-body-emphasis text-decoration-none">
            <img src="{{ asset('frontend/img/central-logo.svg') }}" alt="Central Logo" width="150" height="150">
          </a>


          <form method="GET" action="{{ route('main.search') }}" class="col-12 col-lg-auto mb-3 mb-lg-0 align-self-end " >
            <input type="search" class="form-control mb-2" placeholder="Search..." id="query"  name="query" aria-label="Search">
          </form>

          <ul class="nav align-self-end mb-2">
          <li class="nav-item mx-1">
            <a href="/login" ><button type="button" class="btn btn-primary ">
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-in-right" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M6 3.5a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 .5.5v9a.5.5 0 0 1-.5.5h-8a.5.5 0 0 1-.5-.5v-2a.5.5 0 0 0-1 0v2A1.5 1.5 0 0 0 6.5 14h8a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2h-8A1.5 1.5 0 0 0 5 3.5v2a.5.5 0 0 0 1 0z"/>
                <path fill-rule="evenodd" d="M11.854 8.354a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5H1.5a.5.5 0 0 0 0 1h8.793l-2.147 2.146a.5.5 0 0 0 .708.708z"/>
              </svg>
              &nbsp;
              Log in</button>
            </a></li>
            <li class="nav-item mx-1">
            <a href="/register" >
                <button type="button" class="btn btn-primary ">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-fill" viewBox="0 0 16 16">
                    <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6"/>
                    </svg>
              &nbsp;
              Register</button>
            </a>
            </li>
          </ul>

        </div>



    <!-- Navigation Container -->
    <nav class="navbar navbar-expand-lg cen-bg-darkblue">
      <div class="container">

        <!-- Toggler Button for Medium and Below -->
        <button class="navbar-toggler  " type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon  "></span>
        </button>
        <!-- Navigation Links -->
        <div class="collapse navbar-collapse cen-bg-darkblue " id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item px-3">
              <a class="nav-link text-white" href="/">HOME</a>
            </li>
            <li class="nav-item px-3">
              <a class="nav-link text-white" href="/aboutus">ABOUT US</a>
            </li>
              <li class="nav-item px-3">
                  <a class="nav-link text-white" href="/teamcentral">TEAM-CENTRAL</a>
              </li>
              <li class="nav-item px-3">
                  <a class="nav-link text-white" href="/sponsor">SPONSOR</a>
              </li>
            <li class="nav-item px-3">
              <a class="nav-link text-white" href="http://www.pamje.org/">PAMJE</a>
            </li>
            <li class="nav-item px-3 mobile-left-align">
              <div class="dropdown">
                <a class="btn btn-secondary dropdown-toggle nav-link text-white" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">JOURNALS</a>

                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="/journals/alphabet?val=all">Alphabetical</a></li>
                  {{--<li><a class="dropdown-item" href="/journals/category?va=all">By Category</a></li>--}}


                </ul>
            </div>
            </li>
            <li class="nav-item px-3 mobile-left-align">
              <div class="dropdown">
                <a class="btn btn-secondary dropdown-toggle nav-link text-white" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                 RESOURCES
                </a>

                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="/resources/editors">For Editors</a></li>
                  <li><a class="dropdown-item" href="/resources/researchers">For Researchers</a></li>
                  <li><a class="dropdown-item" href="/resources/authors">For Authors</a></li>
                  <li><a class="dropdown-item" href="/resources/reviewers">For Peer Reviewers</a></li>

                </ul>
              </div>

            </li>
            <li class="nav-item px-3">
              <a class="nav-link text-white " href="/newsannouncements">NEWS AND ANNOUNCEMENT</a>
            </li>

            <!-- Peer reviewer should be hidden -- >

            <li class="nav-item px-3">
              <a class="nav-link text-white " href="#">PEER REVIEWERS</a>
            </li>

             < !-- Peer reviewer should be hidden -->

            <li class="nav-item px-3">
              <a class="nav-link text-white " href="/contactus">CONTACT US</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
</header>
