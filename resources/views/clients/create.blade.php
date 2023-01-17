@extends('base')
@section('main')
<div class="row">
    <div class="col-sm-8 offset-sm-2">
        <h3 class="">Agregar nuevo cliente</h3>
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
            <form method="post" action="{{ route('clients.store') }}">
                @csrf
                <div class="form-group">
                    <label for="name">Nombre</label>
                    <input type="text" class="form-control" name="name" />
                </div>

                <div class="form-group">
                    <label for="first_name">Apellido Paterno</label>
                    <input type="text" class="form-control" name="first_name" />
                </div>

                <div class="form-group">
                    <label for="last_name">Apellido Materno</label>
                    <input type="text" class="form-control" name="last_name" />
                </div>

                <div class="form-group">
                    <label for="rfc">RFC</label>
                    <input type="text" class="form-control" name="rfc" />
                </div>

                <div class="form-group">
                    <label for="addrees">Domicilio</label>
                    <input type="text" class="form-control" name="addrees" />
                </div>

                
                <button type="submit" class="btn btn-primary">Agregar producto</button>
            </form>
        </div>
    </div>
</div>
@endsection