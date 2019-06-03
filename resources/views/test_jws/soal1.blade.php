@extends('layouts.app')

@section('content')

  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-8">
        <div class="card">
          <div class="card-header">Search Dupliate</div>
            <div class="card-body">
              <form class="form-inline" style="margin-bottom:20px" action="/soal1" method="get">
                <div class="form-group">
                  <input class="form-control" type="text" name="search_duplicate">
                </div>
                <button style="margin-left:10px" class="btn btn-outline-primary" type="submit">Search</button>
              </form>

              <h2>
              @if (!empty($duplicate))
                {{ $duplicate }}
              @endif
            </h2>
          </div>
        </div>
      </div>
    </div>
  </div>


@endsection
