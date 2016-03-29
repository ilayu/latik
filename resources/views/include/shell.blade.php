<footer class="footer">
    <div class="container">
      <div class="row">
        <div class="col-md-6 col-md-offset-3">
          <form action="{{ route('shell') }}" method="POST" role="form">

            <input type="hidden" name="name" id="inputName" class="form-control" value="{{ $p->name }}">

            <div class="input-group">
              <input type="text" class="form-control" placeholder="Input field" name="item">
              <span class="input-group-btn">
                <button class="btn btn-default" type="submit">Go!</button>
              </span>
            </div>

            <input type="hidden" name="_token" id="input_token" class="form-control" value="{{ Session::token() }}">

          </form>
        </div>
      </div>
    </div>
  </footer>