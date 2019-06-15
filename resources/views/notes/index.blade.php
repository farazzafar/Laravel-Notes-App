@extends('layouts.app')



@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading" align="center">

                    <h2>All Notes <a href="/notes/create"><img src="https://image.flaticon.com/icons/svg/61/61456.svg" width="35" height="35" align="right"></a></h2>

                </div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    
                    @foreach($notes as $note)

                    	<div class="album-text-muted">
                    		<div class="container">	
                    			<div class="card-columns">
                    				<div class="card" style="width: 270px;margin: 5px" >
                    				  <div class="card-body">
                    				    <h2 class="card-title">{{ $note->title }}</h2>
                    				    <p class="card-text">{{ $note->body }}</p>
                    				    <a href="/notes/{{ $note->id }}" class="btn btn-primary">View</a>
                    				  </div>
                    				</div>
                    			</div>	
                    		</div>
                    	</div>

                    @endforeach


                </div>
            </div>
        </div>
    </div>
</div>
@endsection


