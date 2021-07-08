@extends('layouts.master')
@section('header-title', 'Links Úteis')

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
        <form action="{{ route('links.update',$link->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="card-body">
                <div class="form-group">
                    <label for="title"><strong>Título *</strong></label>
                    <input type="text"  class="form-control" value="{{ $link->title }}" id="title" name="title" required>
                </div>
                <div class="form-group">
                    <label for="link"><strong>Link *</strong></label>
                    <input type="text" class="form-control" value="{{ $link->link }}" id="link" name="link" required>
                </div>
                <div class="form-group">
                    <label for="ckeditor">Descrição *</label>
                    <textarea class="form-control" value="{{ $link->description }}" id="description" name="description"></textarea>
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
