@extends('layouts.master')
@section('header-title', 'Bancos de Leite')

@section('content')
<div class="col-md-12">
    <!-- general form elements -->
    <div class="card card-primary">
        <div class="card-header" style="background: #ff6347;">
            <h3 class="card-title" style="text-transform: uppercase; font-size: 19px; margin-bottom: 0px;  font-style: italic;">Formulário</h3>
        </div>
        <!-- /.card-header -->
        @if ($errors->any())
            <div class="alert alert-danger">
                <strong>Whoops!</strong> There were some problems with your input.<br><br>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form action="{{ route('milkbanks.update',$milkbank->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <div class="card-body">
                <div class="form-group">
                    <label for="title"><strong>Nome *</strong></label>
                    <input type="text" class="form-control" value="{{ $milkbank->name }}" id="name" name="name" required>
                </div>
                <div class="form-group">
                    <label for="title"><strong>Imagem *</strong></label>
                    <input type="file" accept="image/png, image/jpg, image/jpeg" class="form-control" id="photo" name="photo" required>
                </div>
                <img src="{{asset('storage/'.$milkbank->photo) }}" alt="Girl in a jacket" width="500" height="600">

                <div class="form-group">
                    <label for="title"><strong>CEP *</strong></label>
                    <input type="text" class="form-control" value="{{ $milkbank->cep }}" id="cep" name="cep" required>
                </div>
                <div class="form-group">
                    <label for="title"><strong>Endereço *</strong></label>
                    <input type="text" class="form-control" value="{{ $milkbank->address }}" id="address" name="address" required>
                </div>
                <div class="form-group">
                    <label for="title"><strong>Numero *</strong></label>
                    <input type="text" class="form-control" value="{{ $milkbank->number }}" id="number" name="number" required>
                </div>
                <div class="form-group">
                    <label for="title"><strong>Complemento *</strong></label>
                    <input type="text" class="form-control" value="{{ $milkbank->complement }}" id="complement" name="complement" required>
                </div>
                <div class="form-group">
                    <label for="title"><strong>Contato *</strong></label>
                    <input type="text" class="form-control" value="{{ $milkbank->contact }}" id="contact" name="contact" required>
                </div>
            </div>
            <!-- /.card-body -->

            <div class="card-footer">
                <button type="submit" class="btn btn-primary">Salvar</button>
            </div>
        </form>
    </div>
    <!-- /.card -->
</div>
<script src="//cdn.ckeditor.com/4.14.0/standard/ckeditor.js"></script>
<script>
    CKEDITOR.replace('description');
</script>
@endsection
