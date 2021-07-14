<nav class="navbar navbar-expand-md navbar-light bg-light shadow w-100">
    <div class="container-lg">
        <a class="navbar-brand" href="{{ route('home') }}">
            <div class="logo-wrapper">
                <img src="{{asset('assets/logo/logo.png')}}" alt="好棒棒資助平台_logo">
                <span class="ms-2 display-5">好棒棒資助平台</span>
            </div>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarMenu"
                aria-controls="navbarMenu" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarMenu">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link <?php if ($_SERVER['REQUEST_URI'] == '/')
                        echo 'active" aria-current="page'?>" href="{{ route('home') }}">我們是誰?</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?php if ($_SERVER['REQUEST_URI'] == '/help')
                        echo 'active" aria-current="page'?>" href="{{ route('help') }}">資助貧困</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?php if ($_SERVER['REQUEST_URI'] == '/intent')
                        echo 'active" aria-current="page'?>" href="{{ route('intent') }}">組織使命</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?php if ($_SERVER['REQUEST_URI'] == '/contact')
                        echo 'active" aria-current="page'?>" href="{{ route('contact') }}">加入我們</a>
                </li>
            </ul>
        </div>
    </div>
</nav>