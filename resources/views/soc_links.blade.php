@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Edit social links</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                   
                   
                     
                                    <form action="" method="post">
                                    @csrf
                                    <div class="form-group">
                                        <label for="formGroupExampleInput">Facebook:</label>
                                        <input name="fb" type="text" value="{{ $soc_links->fb }}" class="form-control" id="formGroupExampleInput" placeholder="Example input">
                                    </div>
                                    <div class="form-group">
                                        <label for="formGroupExampleInput2">Google+</label>
                                        <input name="google" type="text" value="{{ $soc_links->google }}" class="form-control" id="formGroupExampleInput2" placeholder="Another input">
                                    </div>
                                    <div class="form-group">
                                        <label for="formGroupExampleInput2">Twitter</label>
                                        <input name="twitter" type="text" value="{{ $soc_links->twitter }}" class="form-control" id="formGroupExampleInput2" placeholder="Another input">
                                    </div>
                                    
                                    <button type="submit" name="edit" class="btn btn-primary">save</button>
                                    </form>
                              



                </div>
            </div>
        </div>
    </div>
</div>

@endsection
