@extends('layout.master')


@section('container')
<section>
  <div class="row">
    <div class="col-xs-12 col-sm-8 col-md-6 col-lg-6 col-sm-offset-2 col-md-offset-3 col-lg-offset-3">
      <form action="{{ route('signInForm') }}" method="POST" role="form">
        <legend>SingIn: {{ $page }}</legend>

        <input type="hidden" name="signInName" id="sigInName" class="form-control" value="{{ $page }}">

        <div class="form-group {{ $errors->has('signInPass') ? 'has-error' : '' }}">
          <input type="password" class="form-control" id="signInPass" placeholder="********" name="signInPass" autofocus>
        </div>

        <input type="hidden" name="_token" id="input_token" class="form-control" value="{{ Session::token() }}">

        <button type="submit" class="btn btn-primary form-control">Ok</button>
      </form>
    </div>
  </div>
</section>
@stop