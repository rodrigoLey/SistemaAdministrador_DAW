
<h1> {{ $modo }} Producto </h1>

<div class="form-group">

<label for="Nombre"> Nombre: </label>
<input type="text" class="form-control" name="Nombre" value="{{ isset($producto->Nombre)?$producto->Nombre:'' }}" id="Nombre" >
<br>
</div>

<div class="form-group">
<label for="Descripcion"> Descripcion: </label>
<input type="text" class="form-control" name="Descripcion" value="{{ isset($producto->Descripcion)?$producto->Descripcion:'' }}" id="Descripcion" >
<br>
</div>

<div class="form-group">
<label for="Precio"> Precio: </label>
<input type="number" class="form-control" name="Precio" value="{{ isset($producto->Precio)?$producto->Precio:'' }}" id="Precio" >
<br>
</div>

<div class="form-group">
<label for="Stock"> Stock: </label>
<input type="number" class="form-control" name="Stock" value="{{ isset($producto->Stock)?$producto->Stock:'' }}" id="Stock" >
<br>
</div>

<div class="form-group">
<label for="Foto"> Foto: </label>

@if(isset($producto->Foto))
<img class="img-thumbnail img-fluid" src="{{ asset('storage').'/'.$producto->Foto }}" width="100" alt="">
@endif
<input type="file" class="form-control" name="Foto" value="" id="Foto" >
<br>
</div>

<input class="btn btn-success" type="submit" value="{{ $modo }} datos">

<a class="btn btn-primary" href="{{ url('producto/') }}"> Regresar</a>

<br>