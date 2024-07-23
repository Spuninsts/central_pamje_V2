<!doctype html>
<html lang="en">
        <!---head codes for css, bootstrap-->
        @include('frontend.partials.frontendhead')
    <body>
        <!---header code -->
        @include('frontend.partials.frontendheader')

     <!---main body-->

      <main>

        <!-- Journal dedicated page-->
    <div class="container py-5 ">
            <!-- First Row: Heading -->
            <div class="row my-4">
                <div class="col d-flex justify-content-between align-items-center">
                <h2 class="cen-font-darkblue">Journal page</h2>
                <a href="#" class="btn btn-primary">View all</a>
                </div>
            </div>

      <!-- Row with 3 Cards -->
      <div class="row">
        <div class="col-md-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">

                    @foreach($ArticleData as $key => $item)
                        <div class="mb-3">
                            <label class="form-label">Journal ID</label>
                            <p>{{ $item->journal_mid }} </p>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Journal Name</label>
                            <p>{{ $item->full_title }} </p>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Short Name</label>
                            <p>{{ $item->short_title }} </p>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Journal URL</label>
                            <p>{{ $item->link }} </p>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Joural email</label>
                            <p>{{ $item->email }} </p>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Organization</label>
                            <p>{{ $item->org_society }} </p>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">About this Journal</label>
                            <p>{{ $item->about }} </p>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Aims and Scopes</label>
                            <p>{{ $item->aims_scope }} </p>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Article Publication Policy</label>
                            <p>{{ $item->policy }} </p>
                        </div>
                        @endforeach
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">

                    <div class="row mb-3">
                            <div class="mb-3">
                                <label for="about" class="form-label">Meet the Team</label>
                            </div>

                            @foreach($TeamData as $key => $item)
                            <div class="mb-3">
                                <label for="aims_scope" class="form-label">Aims and scope</label>
                                <textarea class="form-control" name="aims_scope" rows="5" placeholder="max of 50 words"></textarea>
                            </div>

                            <div class="mb-3">
                                <label for="link" class="form-label">URL Link </label>
                                <input type="text" class="form-control" name="link" placeholder="http://">
                           </div>
                           <div class="mb-3">
                                <label for="policy" class="form-label">Article Publication Policy </label>
                                <input type="text" class="form-control" name="policy" placeholder="">
                           </div>

                           <div class="mb-3">
                                <label for="indexing" class="form-label">Indexing</label>
                                <textarea class="form-control" name="indexing" rows="5" placeholder=""></textarea>
                            </div>
                            <div class="mb-3">
                                <label for="publisher" class="form-label">Publisher</label>
                                <input type="text" class="form-control" name="publisher" placeholder="">
                           </div>
                        @endforeach
                    </div>
                </div> <!-- card body -->
             </div>
        </div>
    </div>

    </div>


    </main>

        <!--footer-->
        @include('frontend.partials.frontendfooter')

  </body>
</html>
