@extends('layouts.master')
@section('header-title', 'Mitos ou Verdades')

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
        <form action="{{ route('mythsortruths.update',$mythOrTruth->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <div class="card-body">
                <input type="hidden" value="{{ $mythOrTruth->id }}" class="form-control" id="id" name="id">

                <div class="form-group">
                    <label for="title"><strong>Pergunta *</strong></label>
                    <input type="text" value="{{ $mythOrTruth->assumption }}" class="form-control" id="assumption" name="assumption" required>
                </div>
                <div class="form-group">
                    <label for="title"><strong>Verdadeiro ou Falso *</strong></label>
                    <select class="form-control" name="response_bool">
                        <option value="1" @if($mythOrTruth->response_bool == 1) selected @endif >Verdadeiro</option>
                        <option value="0" @if($mythOrTruth->response_bool == 0) selected @endif >Falso</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="title"><strong>Resposta *</strong></label>
                    <textarea class="form-control" id="response" name="response">{{ $mythOrTruth->response }}</textarea>
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
    CKEDITOR.replace('response');
</script>
@endsection
