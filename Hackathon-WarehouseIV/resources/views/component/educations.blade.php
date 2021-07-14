<style>

    .food {
        position: relative;
    }
    .img-box{
        position: fixed;
        left: 0;
        right: 0;
        top: 0;
        bottom: 0;

    }
    .img-box img{
        position: absolute;
        min-height: 100%;
        width: 100%;
        /*z-index: 1;*/
    }

    .img-box .img-mask{
        position: absolute;
        content: " ";
        background: black;
        width: 100%;
        height: 100%;
        opacity: 40%;
        /*z-index:500;*/
    }
    .container{
        position: absolute;
        padding: 1% 3% 1% 3%;
        width: 100%;
        height: 80%;
        background: rgba(255,255,255,0.8);
        top:50%;
        left: 50%;
        transform: translate(-50%, -50%);
        border-radius: 20px;
    }

    #button{
        left: 50%;
        transform: translatex(-50%);
        left: 50%;
        transform: translatex(-50%);
    }

</style>

<body>
<meta charset="utf-8">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

<div class="food">
    <div class="container-fluid">
        <div class="img-box">
            <img src="./img/education.jpg" alt="">
            <div class="img-mask"></div>
            <div class="container">
                <h3>教育</h3>
                <p>Hello，你知道嗎？全世界有多少孩童為了家計，迫使他們無法上學，無法擁有翻身的機會，教育是如此的重要，你會來到這想必你也非常清楚這件事，希望你能獻出一份愛心，點起一片希望的火苗。
                </p>
                <div class="progress">
                    <div class="progress-bar" role="progressbar" style="width: 75%;" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">75%</div>
                </div>

                <div id="button" class="position-absolute bottom-50 end-10">
                    <button type="button" class="btn btn-primary position-relative">
                        立即資助
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
