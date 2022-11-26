@extends('Layout.app')
@section('title', 'GitHub Logint')

@section('content')



<div class="container">
    <div class="row d-flex justify-content-center">
        <div class="col-xl-4">
            <div class="card">
                <div class="card-body">
                    <h4>User Login</h4> <hr>
                    <a href="/callGitHub" class="btn btn-primary text-white btn-block btn-social btn-microsoft" href="">
                        <span class="fa-brands fa-github"></span>Sign In With GitHub
                    </a>
                    <a href="/callGitHub" class="btn btn-primary text-white btn-block btn-social btn-microsoft" href="">
                        <span class="fa-brands fa-github"></span>Sign Up With GitHub
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>







@endsection
