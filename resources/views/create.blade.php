@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Create vulnerability record') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                   	

                   	<form action="" method="post">
                   		@csrf

                   		<div class="row mb-3">
                            <label for="title" class="col-md-4 col-form-label text-md-end">{{ __('Title') }}</label>
                            <div class="col-md-6">
                                <input id="title" type="text" class="form-control" name="title" value="{{ old('title') }}" required autocomplete="title" autofocus>
                            </div>
                        </div>

                   		<div class="row mb-3">
                            <label for="description" class="col-md-4 col-form-label text-md-end">{{ __('Description') }}</label>
                            <div class="col-md-6">
                                <textarea id="description" class="form-control" name="description" value="{{ old('description') }}" required autocomplete="description" autofocus></textarea>
                            </div>
                        </div>

                   		<div class="row mb-3">
                            <label for="prevention" class="col-md-4 col-form-label text-md-end">{{ __('How to prevent?') }}</label>
                            <div class="col-md-6">
                                <textarea id="prevention" class="form-control" name="prevention" value="{{ old('prevention') }}" required autocomplete="prevention" autofocus></textarea>
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Add vulnerability') }}
                                </button>
                            </div>
                        </div>


                   	</form>
                   	
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
