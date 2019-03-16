@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">User Profile</div>

                <div class="description">
                    
                
                <ul>
                    <div class="" style="height:80px;width:80px;background-color:red;">
                    

                </div>
                <li>{{ Auth::user()->name }}</li>
                <li>{{ Auth::user()->email }}</li>
                <li></li>
                <li></li>
                </ul>
    

                </div>

               
            </div>
        </div>
    </div>
</div>
@endsection
