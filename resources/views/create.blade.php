@extends('templates.template')

@section('content')
    <div class="col-8 m-auto">

      @if(isset($freela))
        <form name="formEdit" id="formEdit" method="POST" action="{{url("freela/$freela->id")}}">
          @method('PUT')
      @else
        <form name="formCadastrar" id="formCadastrar" method="POST" action="{{url('freela')}}">
      @endif
      <form name="formCadastrar" id="formCadastrar" method="POST" action="{{url('freela')}}">
        @csrf
        <input class="form-control" type="text" name="servico" id="servico" placeholder="Serviço prestado" value="{{$freela->servico ?? ''}}"/><br/>
        <select class="form-control" name="id_usuario" id="id_usuario">
          <option value="{{$freela->relUsers->id ?? ''}}">{{$freela->relUsers->name ?? 'Selecione'}}</option>
            @foreach($usuarios as $usuario)
                <option value="{{$usuario->id}}">{{$usuario->name}}</option>
            @endforeach    
        </select><br/>
        <input class="form-control" type="text" name="cliente" id="cliente" placeholder="Nome do Cliente" value="{{$freela->cliente ?? ''}}"/><br/>
        <input class="form-control" type="text" name="prazo" id="prazo" placeholder="Prazo do serviço" value="{{$freela->prazo ?? ''}}"/><br/>
        <input class="form-control" type="text" name="valor" id="valor" placeholder="Valor do serviço" value="{{$freela->valor ?? ''}}"/><br/>
        <input class="btn btn-primary" type="submit"value="@if(isset($freela)) Editar @else Cadastrar @endif"/>
      </form>

    </div>
@endsection