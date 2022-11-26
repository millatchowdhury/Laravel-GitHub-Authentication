@extends('Layout.app')
@section('content')
<div class="container">
    <div class="row d-flex justify-content-center">
        <div class="col-xl-8">
            <div class="card">
                <div class="card-body">
                    <img src="{{Session::get('img')}}" style="object-fit: cover; width:110px; height:180px; border-radius:10px;" alt="" class="w-25">
                    <table class="table mt-4 table-borderd">
                        <tr>
                            <td>User ID</td>
                            <td>{{Session::get('userId')}}</td>
                        </tr>
                        <tr>
                            <td>Nick Name</td>
                            <td>{{Session::get('nickName')}}</td>
                        </tr>
                        <tr>
                            <td>Name</td>
                            <td>{{Session::get('name')}}</td>
                        </tr>
                        <tr>
                            <td>Email</td>
                            <td>{{Session::get('email')}}</td>
                        </tr>
                        <tr>
                            <td>Token</td>
                            <td>{{Session::get('token')}}</td>
                        </tr>
                    </table>
                    <a href="/Logout" class="btn btn-primary text-white">Logout</a>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
