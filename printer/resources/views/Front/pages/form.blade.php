@extends('Front.layout.layout')

@section('content')
<div class="order-form" style="margin-left: 20px; margin-right: 20px; display: flex;">
    <div style="flex: 1;">
        <h2>Contact</h2>
        <h2>Sipariş Formu</h2>
        <form action="{{ route('contact.form') }}" method="post">
             @csrf
            <div class="form-group">
                <label for="name">Ad Soyad</label>
                <input type="text" class="form-control" id="name" name="name" required>
            </div>
            <div class="form-group">
                <label for="email">E-mail</label>
                <input type="email" class="form-control" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="number">number</label>
                <input type="tel" class="form-control" id="number" name="number" required>
            </div>
            <div class="form-group">
                <label for="subject">Sifaris</label>
                <input type="text" class="form-control" id="subject" name="subject" required>
            </div>

            <div class="form-group">
                <label for="message">message</label>
                <textarea class="form-control" id="message" name="message" rows="4" required></textarea>
            </div>
            <div class="form-group form-check">
                <input type="checkbox" class="form-check-input" id="terms" name="terms" required>
                <label class="form-check-label" for="terms">Terms and Conditions</label>
            </div>
            <button type="submit" class="btn">Sifaris et</button>
        </form>
    </div>
    <div style="width: 100px; height: 100px; background-color: blue; margin-left: 20px;"></div>
</div>
@endsection
