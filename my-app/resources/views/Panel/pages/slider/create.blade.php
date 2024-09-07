@extends('Panel.layouts.app')
@section('content')
<div class="row">
    <div class="col-12 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title">Slider elave et</h4>
            @if ($errors)
            @foreach ($errors->all() as $error)
            @if (session()->get('success'))
            <div class="alert alert-danger">
                {{$error}}
            </div>
            @endif

            @endforeach

            @endif
            @if (session()->get('success'))
            <div class="alert alert-success">
                {{session()->get('success')}}
            </div>

            @endif
            <form action="{{route('slider.store')}}" class="forms-sample" method="POST" enctype="multipart/form-data">
              @csrf
              <div class="form-group">
                <label for="name">Slider basliq</label>
                <input type="text" class="form-control" id="name" name="name" placeholder="Slider basliq">
              </div>
              <div class="form-group">
                <label for="content">Content</label>
                <textarea class="form-control" id="content" name="content" placeholder="Slider content"></textarea>
              </div>
              <div class="form-group">
                <label for="link">Slider link</label>
                <input type="text" class="form-control" id="link" name="link" placeholder="Slider linki">
              </div>

              <div class="form-group">
                <label>Sekil elave et</label>
                <input type="file" name="image" class="file-upload-default">
                <div class="input-group col-xs-12">
                  <input type="text" class="form-control file-upload-info" disabled placeholder="Upload Image">
                  <span class="input-group-append">
                    <button class="file-upload-browse btn btn-primary" type="button">Upload</button>
                  </span>
                </div>
              </div>

              <div class="form-group">
                <label for="status"></label>
                <select name="status" id="" class="form-control">
                  <option value="0">Deaktiv</option>
                  <option value="1" selected>Aktiv</option>
                </select>
              </div>

              <button type="submit" class="btn btn-primary mr-2">Submit</button>
              <button class="btn btn-light">Cancel</button>
            </form>
          </div>
        </div>
      </div>

</div>

@endsection
