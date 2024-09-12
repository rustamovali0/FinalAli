<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <ul class="nav">


        <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
                <i class="icon-layout menu-icon"></i>
                <span class="menu-title">Slayd</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-basic">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> <a class="nav-link" href="{{route('slider.index')}}">Slayd Siyahısı</a></li>
                    <li class="nav-item"> <a class="nav-link" href="{{route('slider.create')}}">Slayd Əlavə et</a></li>
                </ul>
            </div>
        </li>

        <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#product-menu" aria-expanded="false" aria-controls="product-menu">
                <i class="icon-box menu-icon"></i>
                <span class="menu-title">Məhsullar</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="product-menu">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> <a class="nav-link" href="{{ route('products.index') }}">Mehsulların siyahısı</a></li>
                    <li class="nav-item"> <a class="nav-link" href="{{ route('products.create') }}">Mehsul elave et</a></li>
                </ul>
            </div>
        </li>

        <li class="nav-item">
            <a class="nav-link" href="{{route('setting.index')}}">
                <i class="icon-settings menu-icon"></i>
                <span class="menu-title">Sayt parametrləri</span>
            </a>
        </li>

        <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#service-menu" aria-expanded="false" aria-controls="service-menu">
                <i class="icon-star menu-icon"></i>
                <span class="menu-title">Xidmətlər</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="service-menu">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> <a class="nav-link" href="{{ route('services.index') }}">Xidmətlər Siyahısı</a></li>
                    <li class="nav-item"> <a class="nav-link" href="{{ route('services.create') }}">Xidmət Əlavə et</a></li>
                </ul>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#blog-menu" aria-expanded="false" aria-controls="blog-menu">
                <i class="icon-pencil menu-icon"></i>
                <span class="menu-title">Blog</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="blog-menu">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> <a class="nav-link" href="{{ route('blogs.index') }}">Blog Siyahısı</a></li>
                    <li class="nav-item"> <a class="nav-link" href="{{ route('blogs.create') }}">Blog Əlavə</a></li>
                </ul>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{route('contact.index')}}">
                <i class="icon-envelope menu-icon"></i>
                <span class="menu-title">Bizimle elaqe</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#about-menu" aria-expanded="false" aria-controls="about-menu">
                <i class="icon-info menu-icon"></i>
                <span class="menu-title">Hakkımızda</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="about-menu">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> <a class="nav-link" href="{{ route('about.index') }}">Hakkımızda Siyahısı</a></li>
                    <li class="nav-item"> <a class="nav-link" href="{{ route('about.create') }}">Hakkımızda Əlavə et</a></li>
                </ul>
            </div>
        </li>
    </ul>
</nav>
