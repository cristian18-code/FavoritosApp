<div class="form-group">
    <label for="titulo">Titulo</label>
    <input id="titulo" class="form-control @error('titulo') is-invalid @enderror" value="{{ old('titulo', isset($favorite) ? $favorite->titulo : '') }}" type="text" name="titulo">
</div>
@error('titulo')
<div class="alert alert-danger mt-2">
    <ul class="m-0">
        @foreach($errors->get('titulo') as $error)
            <li> {{ $error }} </li>
        @endforeach
    </ul>        
</div>
@enderror
<div class="form-group">
    <label for="url">URL</label>
    <p><small>(Por favor insertar la url completa, en lo posible copiarla desde un navegador)</small></p>
    <input id="url" class="@error('url') is-invalid @enderror form-control" value="{{ old('url', isset($favorite) ? $favorite->url : '') }}" type="text" name="url">
</div>
@error('url')
<div class="alert alert-danger mt-2">
    <ul class="m-0">
        @foreach($errors->get('url') as $error)
            <li> {{ $error }} </li>
        @endforeach
    </ul>        
</div>
@enderror
<div class="form-group">
    <label for="tema">Tema</label>
    <textarea name="tema" id="tema" class="@error('tema') is-invalid @enderror form-control">{{ old('tema', isset($favorite) ? $favorite->tema : '') }}</textarea>
</div>
@error('tema')
<div class="alert alert-danger mt-2">
    <ul class="m-0">
        @foreach($errors->get('tema') as $error)
            <li> {{ $error }} </li>
        @endforeach
    </ul>        
</div>
@enderror