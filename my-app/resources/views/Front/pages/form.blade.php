@extends('Front.layout.layout')

@section('content')
<div class="order-form">
    <h2>Sipariş Formu</h2>
    <form action="{{ route('contact.form') }}" method="post" >
        <div class="form-group">
            <label for="adSoyad">Ad Soyad</label>
            <input type="text" class="form-control" id="adSoyad" name="adSoyad" required>
        </div>
        <div class="form-group">
            <label for="email">E-mail</label>
            <input type="email" class="form-control" id="email" name="email" required>
        </div>
        <div class="form-group">
            <label for="telefon">Telefon Numarası</label>
            <input type="tel" class="form-control" id="telefon" name="telefon" required>
        </div>
        <div class="form-group">
            <label for="unvan">Unvan</label>
            <input type="text" class="form-control" id="unvan" name="unvan">
        </div>
        <div class="form-group">
            <label for="sehir">Şehir</label>
            <input type="text" class="form-control" id="sehir" name="sehir" required>
        </div>
        <div class="form-group">
            <label for="siparis">Sipariş</label>
            <input type="text" class="form-control" id="siparis" name="siparis" required>
        </div>
        <div class="form-group">
            <label for="ilaveText">İlave Notlar</label>
            <textarea class="form-control" id="ilaveText" name="ilaveText" rows="4"></textarea>
        </div>
        <div class="form-group form-check">
            <input type="checkbox" class="form-check-input" id="terms" name="terms" required>
            <label class="form-check-label" for="terms">Terms and Conditions</label>
        </div>
        <button type="submit" class="btn">Sipariş Et</button>
    </form>
</div>
@endsection
