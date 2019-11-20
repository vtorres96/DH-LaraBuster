@extends('layouts.app')

@section('title', 'Blockbuster - Gêneros')

@section('content')
    <h1>Modificando Gêneros</h1>

    <form method="POST" action="/generos/modificar/{{$genero->id}}">
        @csrf
        {{ method_field('PUT') }}

        <div class="form-group col-md-6 col-sm-12">
            <label for="descricao">Descrição</label>
            <input type="text" name="descricao" value="{{ $genero->descricao }}" class="form-control{{$errors->has('descricao') ? ' is-invalid':''}}" id="descricao">
            <div class="invalid-feedback">{{ $errors->first('descricao') }}</div>
        </div>

        <div class="form-group col-md-2">
            <button type="submit" class="form-control btn btn-primary">Enviar</button>
        </div>
    </form>
@endsection
