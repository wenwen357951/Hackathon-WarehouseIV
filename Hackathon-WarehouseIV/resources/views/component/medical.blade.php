<style>

    .medical {
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

<div class="medical">
    <div class="container-fluid">
        <div class="background-box">
            <img src="./image/medical.jpg" alt="">
            <div class="img-mask"></div>
            <div class="container">
                <div class="title fs-1">Medical</div>
                <div class="text fs-4">
                    您知道嗎? 在目前大多數的國家不常見的疾病如瘧疾、霍亂由於當地衛生環境落後醫療防治資源不足，導致整個國家都有患病的風險，或是人民沒有機受良好的公共健康教育導致傳染病大量傳播!
                    這些缺乏醫療資源的國家急切的需要您的幫助!!
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
