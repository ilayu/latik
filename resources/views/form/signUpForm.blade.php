@extends('layout.master')


@section('container')
<section>
  <div class="row">
    <div class="col-xs-12 col-sm-8 col-md-6 col-lg-6 col-sm-offset-2 col-md-offset-3 col-lg-offset-3">
      <form action="{{ route('signUpForm') }}" method="POST" role="form">
        <legend>SingUp</legend>

        <div class="form-group {{ $errors->has('signUpName') ? 'has-error' : '' }}">
          <input type="text" class="form-control" id="signUpName" value="{{ $page }}" name="signUpName">
        </div>
        <div class="form-group {{ $errors->has('signUpEmail') ? 'has-error' : '' }}">
          <input type="text" class="form-control" id="signUpEmail" placeholder="page@example.net" name="signUpEmail">
        </div>
        <div class="form-group {{ $errors->has('signUpPass') ? 'has-error' : '' }}">
          <input type="password" class="form-control" id="signUpPass" placeholder="********" name="signUpPass" autofocus>
        </div>

        <input type="hidden" name="_token" id="input_token" class="form-control" value="{{ Session::token() }}">

        <button type="submit" class="btn btn-primary form-control">Ok</button>
      </form>
    </div>
  </div>
</section>
@stop