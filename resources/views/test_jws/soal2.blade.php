@extends('layouts.app')

@section('content')

  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-8">
        <div class="card">
          <div class="card-header">Bubble Sort</div>
            <div class="card-body">
              <form style="margin-bottom:20px" action="/soal2" method="get">
                <div class="form-group">
                  <input class="form-control" type="text" name="sort_query[]" value="{{ old('sort_query[]') }}">
                </div>
                <div class="form-group">
                  <input class="form-control" type="text" name="sort_query[]" value="{{ old('sort_query[]') }}">
                </div>
                <div class="form-group">
                  <input class="form-control" type="text" name="sort_query[]" value="{{ old('sort_query[]') }}">
                </div>
                <div class="form-group">
                  <input class="form-control" type="text" name="sort_query[]" value="{{ old('sort_query[]') }}">
                </div>
                <button class="btn btn-outline-primary" name="sort" value="1" type="submit">Sort Ascending</button>
                <button class="btn btn-outline-primary" name="sort" value="2" type="submit">Sort Descending</button>
              </form>

              @if (!empty($arr_len))
                <h2>
                  @for ($i=0; $i < $arr_len; $i++)
                    {{ $sort_query[$i] }}
                  @endfor
                </h2>
              @endif
          </div>
        </div>
      </div>
    </div>
  </div>

@endsection
