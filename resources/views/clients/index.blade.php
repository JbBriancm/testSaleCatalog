@extends('base')
@section('main')
<div class="row">
    <div class="col-sm-12">
        <h1 class="display-3">Clientes</h1>
        <div>
            <a  href="{{ route('clients.create')}}" class="btn btn-primary mb-3" >Agregar cliente</a>
        </div>
        <table class="table table-striped">
            <thead>
                <tr>
                    <td>#</td>
                    <td>Nombre</td>
                    <td>RFC</td>
                    <td>Domicilio</td>
                    
                </tr>
            </thead>
            <tbody>
               @foreach($clients as $client)
                <tr>
                    <td>{{$client->id}}</td>
                    <td>{{$client->name .' '.$client->first_name . ' '.$client->last_name}} </td>
                    <td>{{$client->rfc}} </td>
                    <td>{{$client->addrees}} </td>
                    <td>
                        <a href="{{ route('clients.edit',$client->id)}}" class="btn btn-primary">Edit</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        <div>
        </div>
        @endsection