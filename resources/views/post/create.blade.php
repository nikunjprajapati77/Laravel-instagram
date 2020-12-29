@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 offset-2">

            <form action="/p" enctype="multipart/form-data" method="post">
                @csrf
                <div class="form-group row">
                    <label for="caption" class="col-md-4 col-form-label text-md-right">Caption</label>

                    <div class="col-md-6">
                        <input id="caption" type="text" class="form-control @error('caption') is-invalid @enderror" name="caption" value="{{ old('caption') }}" required autocomplete="caption" autofocus>

                        @error('caption')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>

                <div class="form-group row">
                    <label for="image" class="col-md-4 col-form-label text-md-right">Image</label>

                    <div class="col-md-6">
                        <input id="image" type="file" class="form-control-file" name="image">

                        @error('image')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>

                <div class="form-group row">
                    <div class="col-md-6 offset-4">
                        <button type="submit" class="btn btn-primary">Add New Post</button>
                    </div>
                </div>
            </form>

        </div>
    </div>
</div>
@endsection
