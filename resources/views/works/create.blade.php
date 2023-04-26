
@extends('layouts.app')

@section('content')
    <div class="container py-5">
        <h1>New Work</h1>
    </div>
    <div class="container">
        <form action="{{ route('works.store') }}" method="POST">
            @csrf
            <div class="mb-3">
              <label for="name" class="form-label">Title</label>
              <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" value="{{ old('name') }}" id="name" aria-describedby="nameHelp">
              {{-- errore name --}}
              @error('name')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
              @enderror
            </div>
            <div class="mb-3">
              <label for="description" class="form-label">Contenuto</label>
              <textarea name="description" class="form-control @error('description') is-invalid @enderror" id="description">{{ old('description') }}</textarea>
              @error('description')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
        
            <button type="submit" class="btn btn-primary">Create</button>
          </form>
    </div>
@endsection