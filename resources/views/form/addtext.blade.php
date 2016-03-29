<form action="{{ url($p->name . '/add/text') }}" method="POST" role="form">
  <div class="panel panel-default">
    <input type="hidden" name="_token" id="input_token" class="form-control" value="{{ Session::token() }}">
    <div class="form-group {{ $errors->has('text') ? 'has-error' : '' }}">
      <textarea name="text" id="inputText" class="form-control" autofocus rows="3"></textarea>
    </div>
    <div class="panel-footer">
      <div class="row">
        <div class="col-xs-9 col-sm-9 col-md-10 col-lg-10"></div>
        <button type="submit" class="btn btn-primary col-xs-3 col-sm-3 col-md-2 col-lg-2">Add</button>
      </div>
    </div>
  </div>
</form>