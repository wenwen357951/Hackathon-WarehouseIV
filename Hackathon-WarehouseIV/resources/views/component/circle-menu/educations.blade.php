<div class="container-fluid vh-100" style="background: url({{asset('assets/image/food.jpeg')}}) center center no-repeat; background-size: cover;">
    <div class="row vh-100 justify-content-center align-items-center">
        <div class="col-8 p-5" style="background: rgba(0,0,0,0.35)">
            <h1 class="title display-3 text-white">
                資助教育
            </h1>
            <p class="text fs-4 text-white">
                Hello，你知道嗎？全世界有多少孩童為了家計，迫使他們無法上學，無法擁有翻身的機會，教育是如此的重要，你會來到這想必你也非常清楚這件事，希望你能獻出一份愛心，點起一片希望的火苗。
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
                    <button id="circle-menu-exit" type="button" class="btn btn-secondary w-100 btn-lg">
                        回上一頁
                    </button>
                </div>
                <div class="col-6 col-md-4">
                    <button type="button" class="btn btn-primary w-100 btn-lg">
                        幫助脫貧
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>