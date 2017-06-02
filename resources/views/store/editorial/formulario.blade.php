@extends('store.editorial.template')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-11 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Agregar libro</div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{ route('add-libro') }} " enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <div class="form-group-row col-md-6">
                            <div class="form-group{{ $errors->has('titulo') ? ' has-error' : '' }} ">
                                <label for="titulo" class="col-md-4 control-label">Titulo</label>

                                <div class="col-md-8">
                                    <input id="titulo" type="text" class="form-control" name="titulo" value="{{ old('titulo') }}" required autofocus>

                                    @if ($errors->has('titulo'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('titulo') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
</div>   <div class="form-group-row col-md-6 col-md-offset">
                     
                            <div class="form-group{{ $errors->has('autor') ? ' has-error' : '' }} ">
                                <label for="autor" class="col-md-4 control-label">Autor</label>

                                <div class="col-md-8">
                                    <input id="autor" type="text" class="form-control" name="autor" required>

                                    @if ($errors->has('autor'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('autor') }}</strong>
                                        </span>
                                    @endif
                                </div>
                             </div>
                     </div>   
                        <div class="form-group-row col-md-6">
                            <div class="form-group{{ $errors->has('genero') ? ' has-error' : '' }} ">
                                <label for="genero" class="col-md-4 control-label">Genero</label>

                                <div class="col-md-8">
                                    <input id="genero" type="text" class="form-control" name="genero" value="{{ old('genero') }}" required autofocus>

                                    @if ($errors->has('genero'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('genero') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
</div>   <div class="form-group-row col-md-6 col-md-offset">
                     
     
                     </div>   

  <div class="form-group-row col-md-6 col-md-offset">
                     
                            <div class="form-group{{ $errors->has('precio') ? ' has-error' : '' }} ">
                                <label for="precio" class="col-md-4 control-label">precio</label>

                                <div class="col-md-8">
                                    <input id="precio" type="text" class="form-control" name="precio" required >

                                    @if ($errors->has('precio'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('precio') }}</strong>
                                        </span>
                                    @endif
                                </div>
                             </div>
                     </div>   

  <div class="form-group-row col-md-11">
              <div class="form-group ">
                                <label for="reseña" class="col-md-4 control-label">Reseña</label>

                                <div class="col-md-8">
                                    <textarea id="reseña" type="text" class="form-control" name="reseña" rows="4" required >
                                </textarea>
                                 @if ($errors->has('reseña'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('reseña') }}</strong>
                                        </span>
                                    @endif
                                </div>
                             </div>
</div>

  <div class="form-group-row col-md-6">

                         <div class="form-group ">
                      <input id="archivo" name="archivo" type="file" class="filestyle" data-input="false">
                            </div>
              <div class="form-group">
                      <input type="file" id="image" name="image" class="filestyle" data-buttonText="Find file">
                            </div>
</div>  
  <div class="form-group-row col-md-6">
              <div class="form-group{{ $errors->has('precio') ? ' has-error' : '' }} ">
                                <label for="reseña" class="col-md-4 control-label">Reseña</label>

                                <div class="col-md-6">
                                    <textarea id="show" type="text" class="form-control" name="reseña" required >
                                </textarea>
                                </div>
                             </div>
</div>
  <div class="form-group-row col-md-2 ">
              <div class="form-group ">
                                <div class="col-md-6">
                                    <button  type="submit" class="btn btn-primary">Agregar
                                </button>
                                </div>
                             </div>
                             </div>
  <div class="form-group-row col-md-2">
              <div class="form-group">
                                <div class="col-md-6">
                                    <a href="{{route('inicio-edi')}}" class="btn btn-danger">Cancelar</a>
                                </div>
                             </div>
</div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
