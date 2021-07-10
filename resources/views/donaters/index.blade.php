@extends('layouts.master')
@section('header-title', 'Doadoras')

@section('content')
    <div class="card-body" style="background: #fff;">
        <table class="table table-striped">
            <thead>
            <tr>
                <th style="width: 10px">#</th>
                <th>Nome</th>
                <th>Contato</th>
                <th>Endereço</th>
                <th>Criado Em</th>
            </tr>
            </thead>
            <tbody>
            @foreach($donaters as $key => $donator)
                <tr>
                    <td>{{ $donator->id }}</td>
                    <td>{{ $donator->name }} {{ $donator->second_name }}</td>
                    <td>{{ $donator->contact }}</td>
                    <td>{{ $donator->address }} - {{ $donator->number }} - {{ $donator->cep }}</td>
                    <td>{{ date_format($donator->created_at, 'd-m-Y') }}</td>

                </tr>
            @endforeach
            </tbody>
        </table>
    </div>

@endsection
