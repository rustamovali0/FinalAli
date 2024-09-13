
<div class="footer-wrapper gray-bg">
    <div class="footer-area footer-padding">

    <section class="subscribe-area">
    <div class="container">
    <div class="row justify-content-between subscribe-padding">
    <div class="col-xxl-3 col-xl-3 col-lg-4">
    <div class="subscribe-caption">
    <h3>Subscribe Newsletter</h3>
    <p>Subscribe newsletter to get 5% on all products.</p>
    </div>
    </div>
    <div class="col-xxl-5 col-xl-6 col-lg-7 col-md-9">
    <div class="subscribe-caption">
    <form action="#">
    <input type="text" placeholder="Enter your email">
    <button class="subscribe-btn">Subscribe</button>
    </form>
    </div>
    </div>
    <div class="col-xxl-2 col-xl-2 col-lg-4">

    <div class="footer-social">
    <a href="https://bit.ly/sai4ull"><i class="fab fa-facebook"></i></a>
    <a href="#"><i class="fab fa-instagram"></i></a>
    <a href="#"><i class="fab fa-youtube"></i></a>
    </div>
    </div>
    </div>
    </div>
    </section>

    <div class="container">
    <div class="row justify-content-between">
    <div class="col-xl-3 col-lg-3 col-md-6 col-sm-8">
    <div class="single-footer-caption mb-50">
    <div class="single-footer-caption mb-20">

    <div class="footer-logo mb-35">
    <a href="index.html"><img src="assets/img/logo/logo2_footer.png" alt=""></a>
    </div>
    </div>
    </div>
    </div>
    <div class="col-xl-2 col-lg-2 col-md-4 col-sm-6">
    <div class="single-footer-caption mb-50">
    <div class="footer-tittle">
    <ul>
        <li><a href="#">{{ $setting['adres'] ?? 'Adres bilgisi bulunamadı' }}</a></li>
        <li><a href="#">{{ $setting['phone'] ?? 'Telefon bilgisi bulunamadı' }}</a></li>
        <li><a href="#">{{ $setting['email'] ?? 'Email bilgisi bulunamadı' }}</a></li>
    </ul>
    </div>
    </div>
    </div>
    <div class="col-xl-2 col-lg-2 col-md-4 col-sm-6">
    <div class="single-footer-caption mb-50">

    </div>
    </div>
    <div class="col-xl-2 col-lg-2 col-md-4 col-sm-6">

    </div>
    <div class="col-xl-2 col-lg-2 col-md-4 col-sm-6">
    <div class="single-footer-caption mb-50">
    <div class="footer-tittle">
        <div> @if(isset($setting['map']))
            <div> {{ $setting['map'] }} </div>
        @else
            <div> Map not available </div>
        @endif
        </div>


{{-- map gelmelidi --}}

    </div>
    </div>
    </div>
    </div>
    </div>
    </div>

    <div class="footer-bottom-area">
    <div class="container">
    <div class="footer-border">
    <div class="row">
    <div class="col-xl-12 ">
    <div class="footer-copy-right text-center">
    <p>Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart color-danger" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank" rel="nofollow noopener">Safarli Ali</a></p>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
