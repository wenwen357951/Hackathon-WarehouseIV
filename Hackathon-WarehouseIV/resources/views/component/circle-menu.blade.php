<style>
    .cir-menu-item:hover {
        box-shadow: 10px 10px 1px black;
    }
</style>
<div class="circle-menu circle-unselect display-1">
    <div class="cir-menu-lg-ball bg-warning shadow-lg">
        <div class="d-flex h-100 justify-content-center align-items-center m-0 fw-bold text-white">
            <h1 class="display-3">消除貧窮</h1>
        </div>
    </div>
    <div id="teach" class="cir-menu-item cir-menu-sm-ball bg-success shadow">
        <div class="cir-menu-page" style="width: 100%; height: 100%; overflow: hidden;">
            <div class="icon-wrapper d-flex flex-column h-100 w-100 justify-content-center align-items-center">
                <img class="cir-menu-icon w-50 h-50 text-center" src="{{asset('assets/image/school.svg')}}" alt="Icon">
            </div>
            <div class="page">
                @include('component.circle-menu.educations')
            </div>
        </div>
    </div>
    <div id="money" class="cir-menu-item cir-menu-sm-ball bg-success shadow">
        <div class="cir-menu-page" style="width: 100%; height: 100%; overflow: hidden;">
            <div class="icon-wrapper d-flex flex-column h-100 w-100 justify-content-center align-items-center">
                <img class="cir-menu-icon w-50 h-50 text-center" src="{{asset('assets/image/coins.svg')}}" alt="Icon">
            </div>
            <div class="page">
                @include('component.circle-menu.money')
            </div>
        </div>
    </div>
    <div id="build" class="cir-menu-item cir-menu-sm-ball bg-success shadow">
        <div class="cir-menu-page" style="width: 100%; height: 100%; overflow: hidden;">
            <div class="icon-wrapper d-flex flex-column h-100 w-100 justify-content-center align-items-center">
                <img class="cir-menu-icon w-50 h-50 text-center" src="{{asset('assets/image/tools.svg')}}" alt="Icon">
            </div>
            <div class="page">
                @include('component.circle-menu.build')
            </div>
        </div>
    </div>
    <div id="medical" class="cir-menu-item cir-menu-sm-ball bg-success shadow">
        <div class="cir-menu-page" style="width: 100%; height: 100%; overflow: hidden;">
            <div class="icon-wrapper d-flex flex-column h-100 w-100 justify-content-center align-items-center">
                <img class="cir-menu-icon w-50 h-50 text-center" src="{{asset('assets/image/hand-holding-medical.svg')}}" alt="Icon">
            </div>
            <div class="page">
                @include('component.circle-menu.medical')
            </div>
        </div>
    </div>
    <div id="food" class="cir-menu-item cir-menu-sm-ball bg-success shadow" style="position: absolute;">
        <div class="cir-menu-page" style="width: 100%; height: 100%; overflow: hidden; position: absolute;">
            <div class="icon-wrapper d-flex flex-column h-100 w-100 justify-content-center align-items-center">
                <img class="cir-menu-icon w-50 h-50 text-center" src="{{asset('assets/image/drumstick-bite.svg')}}" alt="Icon">
            </div>
            <div class="page">
                @include('component.circle-menu.food')
            </div>
        </div>
    </div>
</div>