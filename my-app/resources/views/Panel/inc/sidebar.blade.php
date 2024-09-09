<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <ul class="nav">
        <!-- Dashboard Linki -->
        <li class="nav-item">
            <a class="nav-link" href="index.html">
                <i class="icon-grid menu-icon"></i>
                <span class="menu-title">Dashboard</span>
            </a>
        </li>

        <!-- Slider Menü -->
        <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
                <i class="icon-layout menu-icon"></i>
                <span class="menu-title">Slider</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-basic">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> <a class="nav-link" href="{{route('slider.index')}}">Slider Listesi</a></li>
                    <li class="nav-item"> <a class="nav-link" href="{{route('slider.create')}}">Slider Ekle</a></li>
                </ul>
            </div>
        </li>

        <!-- Ürünler Menü -->
        <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#product-menu" aria-expanded="false" aria-controls="product-menu">
                <i class="icon-box menu-icon"></i>
                <span class="menu-title">Ürünler</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="product-menu">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> <a class="nav-link" href="{{ route('panel.products.index') }}">Ürün Listesi</a></li>
                    <li class="nav-item"> <a class="nav-link" href="{{ route('panel.products.create') }}">Ürün Ekle</a></li>
                </ul>
            </div>
        </li>

        <!-- Ayarlar Linki -->
        <li class="nav-item">
            <a class="nav-link" href="{{route('setting.index')}}">
                <i class="icon-settings menu-icon"></i>
                <span class="menu-title">Site Ayarları</span>
            </a>
        </li>

        <!-- İletişim Formu Linki -->
        <li class="nav-item">
            <a class="nav-link" href="{{route('contact.index')}}">
                <i class="icon-envelope menu-icon"></i>
                <span class="menu-title">İletişim Formu</span>
            </a>
        </li>
    </ul>
</nav>
