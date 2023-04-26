@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="d-flex align-items-center">
            <div class="me-auto">
                <h1>{{ $work->name }}</h1>
                <p>/{{ $work->slug }}</p>
            </div>

            <div class="d-flex">
                <a class="btn btn-sm btn-secondary" href="{{ route('works.edit',$work) }}">Edit</a>
                @if($work->trashed())
                    <form form action="{{ route('works.restore',$work) }}" method="POST">
                        @csrf
                        <input class="btn btn-sm btn-success" type="submit" value="Restore">
                    </form>
                @endif
            </div>
            
        </div>
    </div>
    <div class="container">
        <p>
            {{ $work->description }}
        </p>
    </div>
@endsection