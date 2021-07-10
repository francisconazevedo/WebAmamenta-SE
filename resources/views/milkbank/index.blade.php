@extends('layouts.master')
@section('header-title', 'Banco de leite')

@section('content')
    <a class="btn btn-primary content animate__animated animate__flipInX" href="{{ route('milkbanks.create') }}" style=" margin: 15px; float: right;  background: #ff6347; border-color: #ff6347;">
        <i class="fas fa-plus" aria-hidden="true"></i> Cadastrar
    </a>
    @if(Session::has('flash_message'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ Session::get('flash_message') }}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @endif
    <div class="card-body" style="background: #fff;">
        <table class="table table-striped">
            <thead>
            <tr>
                <th style="width: 10px">#</th>
                <th>Nome</th>
                <th>CEP</th>
                <th>Contato</th>
                <th>Criado Em</th>
                <th style="width: 40px">Ações</th>
            </tr>
            </thead>
            <tbody>
            @foreach($milkbanks as $key => $milkbank)
                <tr>
                    <td>{{ $milkbank->id }}</td>
                    <td>{{ $milkbank->name }}</td>
                    <td>{{ $milkbank->cep }}</td>
                    <td>{{ $milkbank->contact }}</td>
                    <td>{{ date_format($milkbank->created_at, 'd-m-Y') }}</td>
                    <td style="display: flex">
                        <a class="btn btn-sm btn-warning mr-1" style="background: #fff48c; border-color: #fff48c"
                           href="{{ route('milkbanks.edit', $milkbank->id) }}">
                            <i class="far fa-edit" aria-hidden="true"></i>
                        </a>
                        <form action="{{ route('milkbanks.destroy',$milkbank->id) }}" method="POST">
                            @csrf
                            @method('DELETE')

                            <button type="submit" ata-confirm="Tem certeza?" style="background: #ff6561; border-color: #ff6561"
                                    class="btn btn-sm btn-danger" rel="nofollow"
                                    data-method="delete" >
                                <i class="far fa-trash-alt" aria-hidden="true"></i>
                            </button>
                        </form>


                        <!-- Remover -->



                        <!-- / Remover -->
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>

@endsection
