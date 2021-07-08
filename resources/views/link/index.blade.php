@extends('layouts.master')
@section('header-title', 'Links Úteis')

@section('content')
    <a class="btn btn-primary content animate__animated animate__flipInX" href="{{ route('links.create') }}" style=" margin: 15px; float: right;  background: #ff6347; border-color: #ff6347;">
        <i class="fas fa-plus" aria-hidden="true"></i> Cadastrar
    </a>
    @if(Session::has('flash_message'))
        <div class="alert alert-success alert-dismissible fade show">
            {{ Session::get('flash_message') }}
        </div>
    @endif
    <div class="card-body" style="background: #fff;">
        <table class="table table-striped">
            <thead>
            <tr>
                <th style="width: 10px">#</th>
                <th>Título</th>
                <th>Link</th>
                <th style="width: 40px">Ações</th>
            </tr>
            </thead>
            <tbody>
            @foreach($links as $key => $link)
                <tr>
                    <td>{{ $link->id }}</td>
                    <td>{{ $link->title }}</td>
                    <td>{{ $link->link }}</td>
                    <td style="display: flex">
                        <a class="btn btn-sm btn-warning mr-1" style="background: #fff48c; border-color: #fff48c"
                           href="{{ route('links.edit', $link->id) }}">
                            <i class="far fa-edit" aria-hidden="true"></i>
                        </a>
                        <form action="{{ route('links.destroy',$link->id) }}" method="POST">
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
