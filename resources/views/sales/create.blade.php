@extends('base')
@section('main')
<div class="row">
    <div class="col-sm-8 offset-sm-2">
        <h3 class="">Crear venta</h3>
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
            <form method="post" action="{{ route('sales.store') }}">
                @csrf

                <div class="form-group">
                    <label for="name">Producto</label>
                    <select class="form-select form-control" aria-label="Default select example" name="product_id">
                            <option selected>Selecciona un producto</option>
                            @foreach($products as $product){
                                <option value="{{$product->id}}">{{$product->name}}</option>
                            }
                            @endforeach
                    </select>
                </div>

                <div class="form-group">
                    <label for="name">Clientes</label>
                    <select class="form-select form-control" aria-label="Default select example" name="client_id">
                            <option selected>Selecciona un cliente</option>
                            @foreach($clients as $client){
                                <option value="{{$client->id}}">{{$client->name}}</option>
                            }
                            @endforeach
                    </select>
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
                    <label for="name">Tipo Venta</label>
                    <select class="form-select form-control" aria-label="Default select example" name="sale_type">
                            <option selected>Selecciona un cliente</option>
                            <option value="1">Credito</option>
                            <option value="2">Contado</option>
                    </select>
                </div>

        
                
                <button type="submit" class="btn btn-primary">Crear venta</button>
            </form>
        </div>
    </div>
</div>
@endsection