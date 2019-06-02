@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Edit slide</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                   
                   
                     
                                    <form action="" method="post">
                                    @csrf
                                    <div class="form-group">
                                        <label for="formGroupExampleInput">Image url:</label>
                                        <input name="img_link" type="text" value="{{ $slide->img_link }}" class="form-control" id="formGroupExampleInput" placeholder="Example input">
                                    </div>
                                    <div class="form-group">
                                        <label for="formGroupExampleInput2">Title</label>
                                        <input name="title" type="text" value="{{ $slide->title }}" class="form-control" id="formGroupExampleInput2" placeholder="Another input">
                                    </div>
                                    <div class="form-group">
                                        <label for="formGroupExampleInput2">Date</label>
                                        <input name="created_at" type="text" value="{{ $slide->created_at }}" class="form-control" id="formGroupExampleInput2" placeholder="Another input">
                                    </div>
                                    
                                    <button type="submit" name="edit" class="btn btn-primary">save</button>
                                    <button type="submit" name="delete" class="btn btn-danger">delete</button>
                                    </form>
                              



                </div>
            </div>
        </div>
    </div>
</div>

@endsection
