@extends('Panel.layouts.app')

@section('content')
<h1>Ürünü Düzenle</h1>

<form action="{{ route('products.update', $product->id) }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')

    <div class="form-group">
        <label for="name">Mehsulun Adı</label>
        <input type="text" name="name" class="form-control" value="{{ old('name', $product->name) }}" required>
    </div>

    <div class="form-group">
        <label for="slug">Slug</label>
        <input type="text" name="slug" class="form-control" value="{{ old('slug', $product->slug) }}" required>
    </div>

    <div class="form-group">
        <label for="image">Mehsulun sekili</label>
        <input type="file" name="image" class="form-control">
        <img src="{{ asset('storage/' . $product->image) }}" alt="{{ $product->name }}" width="100">
        <img style="width: 150px; height: 100px;" src="{{ asset('AdminPanel/img/products/' . ($product->image ?? 'ResimYok.jpg')) }}" alt="image"/>

    </div>

    <div class="form-group">
        <label for="price">Qiymeti</label>
        <input type="text" name="price" class="form-control" value="{{ old('price', $product->price) }}" required>
    </div>

    <div class="form-group">
        <label for="qty">Sayi</label>
        <input type="text" name="qty" class="form-control" value="{{ old('qty', $product->qty) }}" required>
    </div>

    <div class="form-group">
        <label for="status">Status</label>
        <select name="status" class="form-control" required>
            <option value="1" {{ $product->status == '1' ? 'selected' : '' }}>Aktiv</option>
            <option value="0" {{ $product->status == '0' ? 'selected' : '' }}>Deaktiv</option>
        </select>
    </div>

    <button type="submit" class="btn btn-primary">Deyisiklikleri yadda saxla</button>
</form>
@endsection
