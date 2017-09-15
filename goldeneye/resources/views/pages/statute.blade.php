@extends ('layouts.master')
<!-- Main jumbotron for a primary marketing message or call to action -->
<div class="jumbotron">
    <div class="container">
        <h1 class="display-4">Statutes</h1>
    </div>
</div>
@section ('content')

        <!-- Example row of columns -->
        <div class="row">
            <div class="col-md-4">
                @foreach ($statutes as $statute)

                    <div class="blog-post">
                        <h2 class="blog-post-title">

                                {{$statute->title}}

                        </h2>

                        <h3>
                            {{$statute->subtitle}}
                        </h3>



                    </div><!-- /.blog-post -->

                @endforeach
            </div>

        </div>

        <hr>




@endsection