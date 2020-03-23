@extends('layouts.app')

@section('content')
<div class="container">
   <form action="/p" enctype="multipart/form-data" method="post">
   @csrf
   <div class="row">
    <div class="col-8 offset-2">
  <div class="row">
    <h1>Add New Post</h1>
    </div>
    <div class="form-group row">
    <label for="caption" class="col-md-4 col-form-label">Post Caption</label>

                                
            <input id="caption" 
            type="text" 
            class="form-control @error('caption') is-invalid @enderror" 
            name="caption"
            value="{{ old('caption') }}"
            autocomplete="caption" autofocus>

            @error('caption')
            <span class="invalid-feedback" role="alert">
            <strong>{{ $errors->first('caption')}}</strong>
            <span>          
            @enderror
                                
    </div>
            <div class="row">
            <label for="image" class="col-md-4 col-form-label">Post Image</label>
             <input type="file" class="form-control-file" id="image" name="image" accept="image/*"> 
            
            @error('image')
            <!-- <span class="invalid-feedback" role="alert"> -->
            <strong>{{ $errors->first('image')}}</strong>
            
            @enderror
            </div>

            <div class="row pt-4">
            <button class="btn btn-primary">Add New Post</button>
            
            </div>

    </div>
        
    </div>
   
   </form>
    <!-- <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                </div>
            </div>
        </div>
    </div> -->
</div>
@endsection
