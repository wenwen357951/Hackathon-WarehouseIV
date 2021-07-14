<div class="container-fluid vh-100" style="background: url({{asset('assets/image/food.jpeg')}}) center center no-repeat; background-size: cover;">
    <div class="row vh-100 justify-content-center align-items-center">
        <div class="col-8 p-5" style="background: rgba(0,0,0,0.35)">
            <h1 class="title display-3 text-white">
                資助食物
            </h1>
            <p class="text fs-4 text-white">
                歡迎你來到這神聖的地方。
                看來你希望能從飲食方面做改善，我們也會尋找與您目標一致人進行飲食方面的
                資助，現在你所做的這個決定將會是我們邁向目標的一大步，聯合國機構世界糧
                食計畫署也指出每年有上億的人處於挨餓，別猶豫了，快來吧！
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
                        資助貧困
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>