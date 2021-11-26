@extends('templates.template')

@section('content')
    <div class="col-8 m-auto">
        <table class="table">
            <thead>
              <tr>
                <th scope="col">ID</th>
                <th scope="col">Serviço</th>
                <th scope="col">Prazo</th>
                <th scope="col">Valor</th>
                <th scope="col">Cliente</th>
                <th scope="col">Freelancer</th>
              </tr>
            </thead>
            <tbody>

                @foreach($trabalhos as $freela)
                @php
                  $user = $freela->find($freela->id)->relUsers
                @endphp
                <tr>
                    <th scope="row">{{$freela -> id}}</th>
                    <td>{{$freela -> servico}}</td>
                    <td>{{$freela -> prazo}}</td>
                    <td>{{$freela -> valor}}</td>
                    <td>{{$freela -> cliente}}</td>
                    <td>{{$user -> name}}</td>
                    <td>
                      <a href="{{route('freela.edit', $freela->id)}}">
                        <button type="button" class="btn btn-primary">Editar</button>
                      </a>
                    </td>
                    <td>
                    <form action="{{route('freela.destroy', $freela->id)}}" method="POST">
                      @csrf
                      @method('DELETE')
                      <button type="submit" class="btn btn-danger">Excluir</button>
                    </form>
                  </td>
                </tr>  
                @endforeach

            </tbody>
          </table>
    </div>
@endsection