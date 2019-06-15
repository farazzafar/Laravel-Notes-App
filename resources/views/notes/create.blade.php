@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading" ><h4>Create a new Note</h4></div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    
                    <form method="POST" action="/notes">
                          {{ csrf_field() }}
                          
                          <div class="form-group">
                            <label for="title">Title:</label>
                            <input type="text" class="form-control" name="title" id="title" required>
                          </div>
                          
                          <div class="form-group">
                            <label for="body">Body:</label>
                            <input type="text" class="form-control" name="body" id="body" required value="{{ old('body') }}">
                          </div>
                          
                          <div class="form-group">
                            <button type="submit" class="btn btn-primary">Create!</button>
                          </div>
                        
                        </form>    
                

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
