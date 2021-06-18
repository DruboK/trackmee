
@extends('Layout.frontend')
@section('title')
Home
@endsection
@section('content')

<div class="container">

    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>

    <br>
    <br>
    <br>
    <center>
        <h1 style="color: black; font-size: 52px;" class="">Track<span style="color: red">Mee!</span></h1>
        <hr style="width: 245px; color: black;border-top: 1px solid #000;" style="text-align: center;">
        <h5 style="color: black;" class="text-uppercase">
            An Online Resource Mangement System
        </h5>
    </center>
    <br>
    <br>
    <center><button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#LoginModal" style="background-color: #00bcd4; border-color: #009933;width: 30%"> <span style="margin-right: 2px" class="fa fa-user-circle"> </span> Login </button></center>
    <br>
    <br>
    <center><button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#GModal2" style="background-color:  #00bcd4; border-color:  #009933;width: 30%"><span style="margin-right: 4px" class="fa fa-user"> </span>Guest</button></center>
    <br>
    <br>
    <br>
    <br>
    @if(session('error')!=null)
    <div class="alert alert-danger">
        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
        <strong>
            Failed!
        </strong>
        {{session('error')}}
    </div>
    @endif
    <div class="container" style="width: 50px">
        <div id="LoginModal" class="modal fade" role="dialog">
            <div class="modal-dialog modal-lg">


                <div class="modal-content">
                    <div class="modal-header" style="background-color: #00bcd4">
                        <button type="button" class="close" data-dismiss="modal" >&times;</button>
                        <center><h4 class="modal-title" style="background-color: #00bcd4"><span class="fa fa-user-circle"></span>  Login</h4></center>
                    </div>
                    <div class="modal-body modal-lg" style="height: 200px;color: black;">

                        <div id="error" class=" alert-danger" hidden >
                            
                             <strong>
                                 <p id="errMsg"><span class="glyphicon glyphicon-warning-sign"></span> </p>
                            </strong>
                            
                        </div>
                        <form method="post" id="loginForm" >
                          {{csrf_field()}}

                            <div class="form-group">
                                <label for="username" class="control-label">Username <span class="mark" style="color: red;">*</span></label>
                                <input type="text" class="form-control" name="username" id="username" required>
                            </div>


                            <div class="form-group">
                                <label for="pwd" class="control-label">Password <span class="mark" style="color: red;">*</span></label>
                                <input type="password" class="form-control" name="password" id="password" required>
                            </div>
                            <div class="form-group" style="float: right;">
                                <button   id="btnLogin"     onclick="Login()"   style="background-color: #f00;color: #fff" class="btn btn-danger">Login</button>
                            </div>

                        </form>


                    </div>
                    <div class="modal-footer" style="background-color: #fff">

                    </div>
                </div>

            </div>
        </div>

    </div>
</div>

@endsection

