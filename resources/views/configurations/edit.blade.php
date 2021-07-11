@extends('layouts.master')
@section('header-title', 'Configuração')

@section('content')
    <div class="col-md-12">
        @if(Session::has('flash_message'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ Session::get('flash_message') }}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
    @endif
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
            <form action="{{ route('configurations.update',$conf->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <div class="card-body">
                    <div class="form-group">
                        <label for="title"><strong>Nome *</strong></label>
                        <input type="text" class="form-control" value="{{ $conf->application_name }}" id="application_name" name="application_name" required>
                        </div>
                    <div class="form-group">
                        <label for="title"><strong>Logo *</strong></label>
                        <input type="file"  accept="image/png, image/jpg, image/jpeg" class="form-control" name="logo_name" required>
                    </div>
                    <div class="form-group">
                        <label for="title"><strong>Como doar *</strong></label>
                        <textarea class="form-control" id="howtodonate" name="howtodonate" required>{{ $conf->howtodonate }}</textarea>
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
        CKEDITOR.replace('howtodonate');
    </script>
@endsection
