<div class="container-fluid vh-100" style="background: url(

@yield('image-uri.money')
@yield('image-uri.medical')
@yield('image-uri.food')
@yield('image-uri.build')

        ) center center no-repeat; background-size: cover;">
    <div class="row vh-100 justify-content-center align-items-center">
        <div class="col-8 p-5" style="background: rgba(0,0,0,0.35)">
            <h1 class="title display-3 text-white">
                @yield('subtitle.money')
                @yield('subtitle.medical')
                @yield('subtitle.food')
                @yield('subtitle.build')
            </h1>
            <p class="text fs-4 text-white">
                @yield('description.money')
                @yield('description.medical')
                @yield('description.food')
                @yield('description.build')
            </p>
            <strong class="total-amount fs-3 text-white">目前幕資額 : {%CURRENT_MONEY%}</strong>
            <div class="progress mt-1">
                <div class="progress-bar bg-success" role="progressbar" style="width: 75%" aria-valuenow="75"
                     aria-valuemin="0"
                     aria-valuemax="100">
                </div>
            </div>
            <div class="row w-100 justify-content-center mt-5">
                <div class="col-6 col-md-4">
                    <button type="button" class="btn btn-primary w-100 btn-lg">
                        @yield('button-name.money')
                        @yield('button-name.medical')
                        @yield('button-name.food')
                        @yield('button-name.build')
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>