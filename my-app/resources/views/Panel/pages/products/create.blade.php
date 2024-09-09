@extends('Panel.layout')

@section('content')
<div class="container">
    <h1>Yeni Ürün Ekle</h1>
    <form action="{{ route('panel.products.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="name">Ad</label>
            <input type="text" name="name" id="name" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="slug">Slug</label>
            <input type="text" name="slug" id="slug" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="image">Resim</label>
            <input type="file" name="image" id="image" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="category_id">Kategori</label>
            <select name="category_id" id="category_id" class="form-control" required>
                <!-- Burada kategorileri listeleyin -->
            </select>
        </div>
        <div class="form-group">
            <label for="price">Fiyat</label>
            <input type="number" name="price" id="price" class="form-control" step="0.01" required>
        </div>
        <div class="form-group">
            <label for="color">Renk</label>
            <input type="text" name="color" id="color" class="form-control">
        </div>
        <div class="form-group">
            <label for="qty">Miktar</label>
            <input type="number" name="qty" id="qty" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="status">Durum</label>
            <select name="status" id="status" class="form-control" required>
                <option value="0">Pasif</option>
                <option value="1">Aktif</option>
            </select>
        </div>
        <div class="form-group">
            <label for="suitability">Uygunluk</label>
            <input type="text" name="suitability" id="suitability" class="form-control">
        </div>
        <div class="form-group">
            <label for="content">İçerik</label>
            <textarea name="content" id="content" class="form-control"></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Ekle</button>
    </form>
</div>
@endsection
