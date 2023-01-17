@extends('base')
@section('main')
<div class="row">
    <div class="col-sm-8 offset-sm-2">
        <h3 class="">Agregar nuevo producto</h3>
        <div>
            @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div><br />
            @endif
            <form method="post" action="{{ route('products.store') }}">
                @csrf
                <div class="form-group">
                    <label for="name">Nombre</label>
                    <input type="text" class="form-control" name="name" />
                </div>

                <div class="form-group">
                    <label for="price">Precio</label>
                    <input type="text" class="form-control" name="price" />
                </div>

                <div class="form-group">
                    <label for="amount">Cantidad</label>
                    <input type="text" class="form-control" name="amount" />
                </div>

                <div class="form-group">
                    <label for="code">Codigo</label>
                    <input type="text" class="form-control" name="code" />
                </div>
                
                <button type="submit" class="btn btn-primary">Agregar producto</button>
            </form>
        </div>
    </div>
</div>
@endsection