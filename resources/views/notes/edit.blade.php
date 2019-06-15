@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading" >

                  <h4>Edit Note</h4>

                    


                </div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif


                    {!! Form::model(
                        $note,
                        ['action' => ['NoteController@update', $note->id],
                         'method' => 'put'
                        ]) 
                    !!}
                        
                        <div class="form-group">

                            {!! Form::label('title', 'Title')!!}

                            {!! 
                                Form::text(
                                'title', 
                                null,
                                ['class' => 'form-control'])
                            !!}
                           
                        </div>

                        <div class="form-group">

                            {!! Form::label('body', 'Body')!!}

                            {!! 
                                Form::text(
                                'body', 
                                null,
                                ['class' => 'form-control'])
                            !!}
                            
                        </div>

                        <div class="form-group">

                        <button type="submit" class="btn btn-primary">Update
                        </button>

                        </div>  


                        {!! Form::close() !!}


                        {!! Form::model(
                          $note,
                          ['action' => ['NoteController@destroy', $note->id],
                          'method'  => 'delete'
                          ]) 
                        !!} 

                        <div class="form-group">

                            <button type="delete" class="btn btn-danger">Delete</button>

                        </div>

                        {!! Form::close() !!}  
                

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
