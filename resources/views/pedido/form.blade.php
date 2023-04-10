
<h1> {{ $modo }} Pedido </h1>

<div class="form-group">
<label for="Id_Productos"> Id_Productos: </label>
<input type="number" class="form-control" name="Id_Productos" value="{{ isset($pedido->id_productos)?$pedido->id_productos:'' }}" id="Id_Productos" >
<br>
</div>

<div class="form-group">
<label for="Cantidad"> Cantidad: </label>
<input type="number" class="form-control" name="Cantidad" value="{{ isset($pedido->cantidad)?$pedido->cantidad:'' }}" id="Cantidad" >
<br>
</div>

<div class="form-group">
<label for="Status"> Status: </label>
<input type="text" class="form-control" name="Status" value="{{ isset($pedido->status)?$pedido->status:'' }}" id="Status" >
<br>
</div>

<input class="btn btn-success" type="submit" value="{{ $modo }} datos">

<a class="btn btn-primary" href="{{ url('pedido/') }}"> Regresar</a>

<br>