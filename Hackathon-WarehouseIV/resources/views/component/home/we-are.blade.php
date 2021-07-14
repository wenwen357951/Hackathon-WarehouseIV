<style>
    .item .img-fluid{
        opacity: 0.8;
    }
    .whoami h1{
        text-decoration: rosybrown wavy underline;
        padding: 10px 0px 30px 0px;
        font-weight:bold;
        font-size: 70px;
    }
    .whoamitxt {
        width: 100%;
        height: 300px;
        padding-left: 100px;
    }
    .triangle{
        width: 0;
        height: 0;
        border-top: 170px solid rosybrown;
        border-right: 170px solid transparent;
    }
</style>

<div class="whoami mt-5">
    <div class="container-fluid">
        <div class="row">
            <div class="col-6 col-md-5" >
                <div class="triangle"></div>
                <div class="whoamitxt">
                    <div class="item">
                        <h1>WHO WE ARE<br></h1>
                        <h4>Ｈｉ！我們是四號倉庫<br>致力於消除世界上任何形式的貧窮的非營利組織
                            <br>期望攜手社會課界一同認識並開始落實聯合國永續發展目標
                            <br>本組織創立於2021年。
                        </h4>
                    </div>
                </div>
            </div>
            <div class="col-6 col-md-5">
                <div class="item">
                    <img src="{{asset('assets/image/WhoWeAre.jpg')}}" class="img-fluid">
                </div>
            </div>
        </div>
    </div>
</div>
