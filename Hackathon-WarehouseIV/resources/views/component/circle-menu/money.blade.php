<div class="container-fluid vh-100" style="background: url({{asset('assets/image/money.jpg')}}) center center no-repeat; background-size: cover;">
    <div class="row vh-100 justify-content-center align-items-center">
        <div class="col-8 p-5" style="background: rgba(0,0,0,0.35)">
            <h1 class="title display-3 text-white">
                Money
            </h1>
            <p class="text fs-4 text-white">
                Hi，歡迎你來到這裡，你希望能夠針對金錢上給予這些弱勢族群幫助吧！我們接收到你的想法
                了，你不需要有過多的猶豫，帶上你的親朋好友與我們一起點燃世界的希望，用愛撒播人間吧!
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
                        資助貧困
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>