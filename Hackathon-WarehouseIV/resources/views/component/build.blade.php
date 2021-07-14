<style>

    .build {
        position: relative;
    }

    .background-box {
        position: fixed;
        left: 0;
        right: 0;
        top: 0;
        bottom: 0;

    }

    .background-box img {
        position: absolute;
        min-height: 100%;
        width: 100%;
        /*z-index: 1;*/
    }

    .background-box .img-mask {
        position: absolute;
        content: " ";
        background: black;
        width: 100%;
        height: 100%;
        opacity: 40%;
        /*z-index:500;*/
    }

    .background-box .container {
        border: 1px #1c1b1d solid;
        position: absolute;
        padding: 3% 5% 1% 5%;
        width: 100%;
        height: 80%;
        background: rgba(255, 255, 255, 0.8);
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        border-radius: 20px;
    }

    .container .title {
        margin-bottom: 10px;
        font-weight: 500;
    }

    .container .text {
        line-height: 50px;
    }

    .container .total-amount {
        font-weight: 700;
        margin-top: 21%;
    }

    .container .progress {
        margin-top: 4%;
    }

    .container button {
        position: absolute;
        margin-top: 5%;
        left: 50%;
        transform: translatex(-50%);
    }

    .container .progress {
        height: 25px;
    }


</style>

<div class="build">
    <div class="container-fluid">
        <div class="background-box">
            <img src="./image/build.jpg" alt="">
            <div class="img-mask"></div>
            <div class="container">
                <div class="title fs-1">Build</div>
                <div class="text fs-4">
                    沒辦法想像你家沒有水龍頭吧？要一口乾淨的水是那麼的困難，更難想像水這麼基本的東西都要走離家5公里的路才能取得吧？請你要知道你很幸福！也請記得這份幸福的背後有著一群還是如此困苦的人，歡迎你捐出一份愛心，讓我們利用這筆捐款改善他們的公共建設，共建一個美好的傢園！
                </div>
                <div class="total-amount fs-3">
                    目前幕資額 : $ 99,999,999
                </div>

                <div class="progress">
                    <div class="progress-bar" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0"
                         aria-valuemax="100"></div>
                </div>

                <button type="button" class="btn btn-secondary btn-lg ">JOIN US</button>


            </div>
        </div>
    </div>
</div>
