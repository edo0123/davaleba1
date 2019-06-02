@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Services</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                   
                   
                     
                           აქ იგივე იქნება რაც სლაიდებში, მარტო თარიღი არექნება მითითებული.           
                              



                </div>
            </div>
        </div>
    </div>
</div>
@endsection
