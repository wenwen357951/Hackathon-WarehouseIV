<div class="container-fluid vh-100" style="background: url({{asset('assets/image/build.jpg')}}) center center no-repeat; background-size: cover;">
    <div class="row vh-100 justify-content-center align-items-center">
        <div class="col-8 p-5" style="background: rgba(0,0,0,0.35)">
            <h1 class="title display-3 text-white">
                資助建設
            </h1>
            <p class="text fs-4 text-white">
                沒辦法想像你家沒有水龍頭吧？要一口乾淨的水
                是那麼的困難，更難想像水這麼基本的東西都要走離家5公里的路才能取得吧？
                請你要知道你很幸福！也請記得這份幸福的背後有著一群還是如此困苦的人，歡
                迎你捐出一份愛心，讓我們利用這筆捐款改善他們的公共建設，共建一個美好的
                傢園！
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