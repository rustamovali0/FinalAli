@extends('Panel.layouts.app')
@section('content')
    <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Footer text</h4>
                    <p class="card-description">
                        <a href="{{ route('setting.create') }}" class="btn btn-primary">Yarat</a>
                    </p>

                    @if (session()->get('success'))
                        <div class="alert alert-success">
                            {{ session()->get('success') }}
                        </div>
                    @endif

                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Key</th>
                                    <th>Value</th>
                                    <th>Fəaliyyətlər</th>
                                </tr>
                            </thead>
                            <tbody>
                                @if (!empty($settings) && $settings->count() > 0)
                                    @foreach ($settings as $setting)
                                        <tr>


                                            <td>{{ $setting->name }}</td>
                                            <td>{{ $setting->data ?? '' }}</td>
                                            <td>{{ $setting->set_type }}</td>
                                            <td class="d-flex">
                                                <a href="{{ route('setting.edit', $setting->id) }}"
                                                    class="btn btn-primary mr-2">Redaktə</a>
                                            </td>
                                            <form action="{{route('setting.destroy',$setting->id)}}" method="POST">
                                                @csrf
                                                @method("DELETE")
                                                <td><button type="submit" href="{{route('setting.edit',$setting->id)}}" class="btn btn-danger">Sil</button></td>
                                            </form>

                                        </tr>
                                    @endforeach
                                @endif


                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

    @endsection
