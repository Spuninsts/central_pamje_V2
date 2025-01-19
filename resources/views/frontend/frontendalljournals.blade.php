<!doctype html>
<html lang="en">
        <!---head codes for css, bootstrap-->
        @include('frontend.partials.frontendhead')
    <body>
        <!---header code -->
        @include('frontend.partials.frontendheader')

     <!---main body-->

    <main>

    <div class="container-fluid cen-page-header">
      <div class="container">
        <div class="row" >
          <div class="page-header">
            <h1>Journal</h1>
          </div>
        </div>
      </div>
    </div>

    <div class="container-fluid">
      <div class="container">
      <div class="row my-3">
        <span><a href="#" class="cen-breadcrumbs"> Home</a> »
                <a href="#" class="cen-breadcrumbs">Journals</a> »
                <a href="/journals/alphabet?val=all" class="cen-breadcrumbs">By Alphabetical</a></span>
      </div>
      </div>
    </div>

    <div class="container-fluid">
      <div class="container">
        <div class="row my-5">

            <!-- Alphabetical list -->
            @include('frontend.partials.frontendalphabet')
            <!-- Always loads journal item that starts with A-->
            @if (empty($ArticleData) || count($ArticleData) == 0)
            <p>No Data on this section.</p>
            @else
                @foreach( $ArticleData as $key => $item)
                    <div class="journal-item">
                    <div class="row my-4">
                            <h2>{{ $item->full_title }} | {{ $item->short_title }}</h2>
                    </div>

                    <div class="row  my-4">
                        <div class="col-sm-2 ">
                            <a href="/journals/data?val={{$item->journal_mid}}"><img src="{{ (!empty($item->photo)) ? url('upload/admin_images/'.$item->photo) : url('upload/admin_images/placeholder.jpg') }}"  alt="{{ $item->short_title }}"  class="w-100 h-100"></a>
                        </div>
                        <div class="col-sm-10" >
                        <p>
                        <span class="p-bold"> Website: </span>
                        <a href="{{ $item->link }}" target="_blank">{{ $item->link }}</a>
                        </p>
                        <p><span class="p-bold">Primary Contact:</span> {{ $item->article_contact }}</p>
                        <p> <span class="p-bold"> Contact Number:</span> {{ $item->contact_number }} </p>
                        <p><span class="p-bold">Email:</span> {{ $item->email }}</p>
                        <p><a href="/journals/data?val={{$item->journal_mid}}" >View more Information</a></p>
                        </div>
                    </div>
                    <hr>
                    </div>
                @endforeach
            @endif
            <!-- journal item 1-->


        </div>
      </div>
    </div>


    </main>

        <!--footer-->
        @include('frontend.partials.frontendfooter')

  </body>
</html>
