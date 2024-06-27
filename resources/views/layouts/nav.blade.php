<nav class="navbar navbar-expand-lg fixed-top" color-on-scroll="0">
    <div class="container">
        <div class="navbar-translate">
            <a class="navbar-brand" href="{{ route('frontend.landing') }}" rel="tooltip" title="Coded by Creative Tim"
                data-placement="bottom" target="_blank">
                موقع لعرض الفيديوهات
            </a>
            <button class="navbar-toggler navbar-toggler" type="button" data-toggle="collapse"
                data-target="#navigation" aria-controls="navigation-index" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-bar bar1"></span>
                <span class="navbar-toggler-bar bar2"></span>
                <span class="navbar-toggler-bar bar3"></span>
            </button>
        </div>
        <div class="collapse navbar-collapse justify-content-end" id="navigation">
            <ul class="navbar-nav">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink"
                        data-toggle="dropdown">
                        <p>التصنيفات</p>
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        @foreach ($categories as $category)
                            <a class="dropdown-item" href="{{ route('frontend.categories', $category) }}">
                                {{ $category->name }}
                            </a>
                        @endforeach
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink"
                        data-toggle="dropdown">
                        <p>المهارات</p>
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        @foreach ($skills as $skill)
                            <a class="dropdown-item" href="{{ route('frontend.skills', $skill) }}">
                                {{ $skill->name }}
                            </a>
                        @endforeach
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" rel="tooltip" data-placement="bottom" href="{{ route('login') }}"
                        target="_blank">
                        <p>تسجيل الدخول</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" rel="tooltip" data-placement="bottom" href="{{ route('logout') }}"
                        target="_blank">
                        <p>تسجيل خروج</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" rel="tooltip" data-placement="bottom" href="{{ route('login') }}"
                        target="_blank">
                        <p>إنشاء حساب جديد</p>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>
