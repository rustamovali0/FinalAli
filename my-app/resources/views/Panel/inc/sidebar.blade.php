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
                    <li class="nav-item"> <a class="nav-link" href="{{route('slider.index')}}">Slider Listesi</a></li>
                    <li class="nav-item"> <a class="nav-link" href="{{route('slider.create')}}">Slider Ekle</a></li>
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
                    <li class="nav-item"> <a class="nav-link" href="{{ route('products.index') }}">Mehsullar</a></li>
                    <li class="nav-item"> <a class="nav-link" href="{{ route('products.create') }}">Mehsul elave et</a></li>
                </ul>
            </div>
        </li>

        <li class="nav-item">
            <a class="nav-link" href="{{route('setting.index')}}">
                <i class="icon-settings menu-icon"></i>
                <span class="menu-title">Sayt ayarları</span>
            </a>
        </li>


        <li class="nav-item">
            <a class="nav-link" href="{{route('contact.index')}}">
                <i class="icon-envelope menu-icon"></i>
                <span class="menu-title">Biziml</span>
            </a>
        </li>
    </ul>
</nav>
