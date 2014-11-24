@extends('layouts.layouts')

@section('content')
 <div class="span12 subscribe">
                    <form class="form-inline" role="form">
                      <div class="form-group">
                        <div class="input-group">
                          <label class="sr-only" for="exampleInputEmail2">Email address</label>
                          <input type="email" class="form-control" id="exampleInputEmail2" placeholder="Enter email">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="sr-only" for="exampleInputPassword2">Password</label>
                        <input type="password" class="form-control" id="exampleInputPassword2" placeholder="Password">
                      </div>
                      <button type="submit" class="btn btn-default">Login</button>
                    </form>
                </div>
@stop
