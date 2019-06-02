@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Add new slide</div>

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
                                        <input name="img_link" type="text" placeholder="http://sitename/img.jpg" class="form-control" id="formGroupExampleInput" >
                                    </div>
                                    <div class="form-group">
                                        <label for="formGroupExampleInput2">Title</label>
                                        <input name="title" type="text" placeholder="title" class="form-control" id="formGroupExampleInput2" >
                                    </div>
                                    <div class="form-group">
                                        <label for="formGroupExampleInput2">Date</label>
                                        <input name="created_at" type="text" placeholder="2000-00-00 00:00:00" class="form-control" id="formGroupExampleInput2" >
                                    </div>
                                    
                                    <button type="submit" name="add" class="btn btn-primary">add</button>
                          
                            </form>            
                              



                </div>
            </div>
        </div>
    </div>
</div>
@endsection
