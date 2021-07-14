<style>

    .food {
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

    .container .total-amount{
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

<div class="food">
    <div class="container-fluid">
        <div class="background-box">
            <img src="./image/food.jpeg" alt="">
            <div class="img-mask"></div>
            <div class="container">
                <div class="title fs-1">Food</div>
                <div class="text fs-4">
                    歡迎你來到這神聖的地方。
                    看來你希望能從飲食方面做改善，我們也會尋找與您目標一致人進行飲食方面的資助，現在你所做的這個決定將會是我們邁向目標的一大步，聯合國機構世界糧食計畫署也指出每年有上億的人處於挨餓，別猶豫了，快來吧！
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
