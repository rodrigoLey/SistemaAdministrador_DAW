@extends('layouts.app')

@section('content')
<div class="container">

@if(Session::has('mensaje'))
{{ Session::get('mensaje') }}

@endif

<a href="{{ url('pedido/create') }}" class="btn btn-success" > Registrar nuevo pedido</a>
<br/>
<br/>
<table class="table table-light">
    <thead class="thead-light">
        <tr>
            <th>#</th>
            <th>Id_Productos</th>
            <th>Cantidad</th>
            <th>Precio_Unitario</th>
            <th>Precio_Total</th>
            <th>Status</th>

        </tr>
    </thead>
    <tbody>
        @foreach( $pedidos as $pedido )
        <tr>
            <td>{{ $pedido->id }}</td>

            <td>{{ $pedido->id_productos }}</td>
            <td>{{ $pedido->cantidad }}</td>
            <td>{{ $pedido->precio_unitario }}</td>
            <td>{{ $pedido->precio_total }}</td>
            <td>{{ $pedido->status }}</td>

            <td>
            
            <a href="{{ url('/pedido/'.$pedido->id.'/edit') }}" class="btn btn-warning" >
                    Editar
            </a>
             | 

            <form action="{{ url('/pedido/'.$pedido->id ) }}" class="d-inline" method="post" >
            @csrf 
            {{ method_field('DELETE') }}
            <input class="btn btn-danger" type="submit" onclick="return confirm('¿Deseas borrar este pedido?')" 
            value="Borrar">

            </form>

            </td>
        </tr>
        @endforeach
    </tbody>
</table>
</div>
@endsection