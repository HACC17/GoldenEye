@extends ('layouts.master')

<!-- Main jumbotron for a primary marketing message or call to action -->
<div class="jumbotron">
    <div class="container">
        <h1 class="display-4">GoldenEye</h1>
        <p>The easy to use app that allows easy accessibilty for our local laws, the Hawaii Revised Statutes </p>
        <p><a class="btn btn-primary btn-lg" href="https://github.com/HACC17/GoldenEye" role="button">GitHub Repo <i
                        class="fa fa-github-square"></i></a></p>
    </div>
</div>

@section ('content')

    <div id="app">
        <ais-index
                app-id="latency"
                api-key="3d9875e51fbd20c7754e65422f7ce5e1"
                index-name="bestbuy"
        >
            <ais-search-box></ais-search-box>
            <ais-results>
                <template scope="{ result }">
                    <h2>
                        <ais-highlight :result="result" attribute-name="name"></ais-highlight>
                    </h2>
                </template>
            </ais-results>
        </ais-index>
    </div>
    ------
    Home Page Stuff Here
    -------

@endsection