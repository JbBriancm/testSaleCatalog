@extends('base')
@section('main')
<div class="row">
    <div class="col-sm-12">
        <h1 class="display-3">Ventas</h1>
        <div>
            <a href="{{ route('sales.create')}}" class="btn btn-primary mb-3">Crear Venta</a>

        </div>
        <table class="table table-striped">
            <thead>
                <tr>
                    <td>#</td>
                    <td>Fecha Venta</td>
                    <td>Producto</td>
                    <td>Cliente</td>
                    <td>Total</td>
                    <td>Tipo Venta</td>
                </tr>
            </thead>
            <tbody>
                @foreach($sales as $sale)

                <tr>
                    <td>{{$sale->id}} </td>
                    <td>{{$sale->created_at}} </td>
                    <td>{{$sale->products->name}}</td>
                    <td>{{$sale->clients->name}}</td>
                    <td>{{$sale->subtotal}}</td>
                    <td>{{$sale->sale_type == 1 ? 'Credito' : 'Contado'}}</td>
                   
                </tr>
                @endforeach
            </tbody>
        </table>
        <div>
        </div>
        @endsection