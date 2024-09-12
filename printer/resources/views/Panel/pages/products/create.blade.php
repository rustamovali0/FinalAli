@extends('Panel.layouts.app')

@section('content')
<div class="container">
    <h1>Yeni Ürün Ekle</h1>
    <form action="{{ route('products.store') }}" method="POST" enctype="multipart/form-data">
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
            <label for="image">Şəkil</label>
            <input type="file" name="image" id="image" class="form-control" required>
        </div>
        {{-- <div class="form-group">
            <label for="category_id">Kategori</label>
            <select name="category_id" id="category_id" class="form-control" required>
            </select>
        </div> --}}
        <div class="form-group">
            <label for="price">Qiymət</label>
            <input type="number" name="price" id="price" class="form-control" step="0.01" required>
        </div>
        <div class="form-group">
            <label for="color">Rəng</label>
            <input type="text" name="color" id="color" class="form-control">
        </div>
        <div class="form-group">
            <label for="qty">Sayı</label>
            <input type="number" name="qty" id="qty" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="status">Status</label>
            <select name="status" id="status" class="form-control" required>
                <option value="0">Deaktiv</option>
                <option value="1">Aktiv</option>
            </select>
        </div>
        {{-- <div class="form-group">
            <label for="suitability">Uygunluq</label>
            <input type="text" name="suitability" id="suitability" class="form-control">
        </div> --}}
        <div class="form-group">
            <label for="content">Açıqlama</label>
            <textarea name="content" id="content" class="form-control"></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Əlavə et</button>
    </form>
</div>
@endsection
