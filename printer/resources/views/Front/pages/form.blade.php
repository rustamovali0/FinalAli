@extends('Front.layout.layout')

@section('content')
<div class="order-form" style="margin-left: 20px; margin-right: 20px; display: flex;">
    <div style="flex: 1;" style="margin: 2rem">
        <h2  style="margin: 2rem; color:blue;">Sifariş üçün formu doldurun:</h2>
        <form action="{{ route('contact.form') }}" method="post">
             @csrf
            <div class="form-group">
                <label for="name">Ad_Soyad</label>
                <input type="text" class="form-control" id="name" name="name" required>
            </div>
            <div class="form-group">
                <label for="email">E-mail</label>
                <input type="email" class="form-control" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="number">Telefon nömrəsi</label>
                <input type="tel" class="form-control" id="number" name="number" required>
            </div>
            <div class="form-group">
                <label for="subject">Sifariş haqqında məlumat</label>
                <input type="text" class="form-control" id="subject" name="subject" required>
            </div>

            <div class="form-group">
                <label for="message">Mesaj</label>
                <textarea class="form-control" id="message" name="message" rows="4" required></textarea>
            </div>
            <div class="form-group form-check">
                <input type="checkbox" class="form-check-input" id="terms" name="terms" required>
                <label class="form-check-label" for="terms">Terms and Conditions</label>
            </div>
            <button type="submit" class="btn" style="margin-bottom: 2rem; background-color:blue;">Sifariş et</button>
        </form>
    </div>
    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12153.98203027313!2d49.8393488!3d40.3978725!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40307d7b10b31bbf%3A0xb8a84dda46c78a5!2sADAS%2F%20Azerbaijan%20Digital%20Arts%20School!5e0!3m2!1saz!2saz!4v1726233522410!5m2!1saz!2saz" width="400" height="500" style="border:0; margin-top:7rem; margin:2rem;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe></div>
@endsection
