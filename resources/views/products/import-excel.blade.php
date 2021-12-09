@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Importar productos</div>

                <div class="card-body">
                    @if (session('errors'))
                    <div class="alert alert-success" role="alert">
                        {{ session('errors') }}
                    </div>
                    @endif

                    <form action="{{route('products.store')}}" method="POST" enctype="multipart/form-data">
                        @csrf

                        <input type="file" name="import_file" />

                        <button class="btn btn-primary" type="submit">Importar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
