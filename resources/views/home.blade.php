@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <a href="/home/new" class="btn btn-success">add new slide</a>


                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                   
                   
                               @foreach ($slides as $slide)
                                    <center>
                                        <div class="card bg-dark text-white">
                                        <img src="{{ $slide->img_link }}" class="card-img" alt="...">
                                        <div class="card-img-overlay">
                                            <h5 class="card-title">{{ $slide->title }}</h5>
                                            <p class="card-text">{{ $slide->created_at }}</p>
                                        </div>
                                        </div>
                                        <a href="/home/{{ $slide->id }}" class="btn btn-danger">edit</a><br><br>
                                        
                                    </center>     
                               @endforeach



                </div>
            </div>
        </div>
    </div>
</div>
@endsection
