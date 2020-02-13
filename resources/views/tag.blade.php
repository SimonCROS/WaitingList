@extends('layouts.app')

@section('content')
<div class="container">
    <div>
        <h1>Tags</h1>
        <form method="POST" action="/tag">
            @csrf

            <input id="name" type="text" value="{{ old('name') }}" class="form-control @error('name') is-invalid @enderror" name="name" required autocomplete="name" placeholder="Titre name">
            @error('name')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
            
            <input id="color" type="color" value="{{ old('color') }}" class="form-control @error('color') is-invalid @enderror" name="color" required>
            @error('color')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
            

            <button type="submit" class="btn btn-primary">
                Create
            </button>

        </form>
        
        <ul>
            @foreach ($tags as $tag)
<<<<<<< HEAD
                <li>
                    <p class="tags">{{ $tag->name }}</p>
                    <div style="display:none">
                        <form action="/ttt">
                            <input type="text" value="{{ $tag->name }}">
                            <button type="submit">ok</button>
                        </form>
                        <form action="/ttt">
=======
                <li style="color: {{$tag->color}}">
                    <p class="tags" style="color: {{ $tag->color }}">{{ $tag->name }}</p>
                    <div style="display:none">
                        <form action="/tag/{{ $tag->id }}" method="post">
                            @csrf
                            @method('PUT')
                            <input id="{{ $tag->name }}" type="text" value="{{ $tag->name }}" class="form-control @error('name') is-invalid @enderror" name="{{ $tag->name }}" required autocomplete="name">

                            <input id="{{ $tag->color }}" type="color" value="{{ old('color') ? old('color') : $tag->color }}" class="form-control @error('color') is-invalid @enderror" name="{{ $tag->color }}" required>

                            <button type="submit">ok</button>
                        </form>
                        <form action="/tag/{{ $tag->id }}" method="post">
                            @csrf
                            @method('DELETE')
>>>>>>> d2e64801f1d669ff98670240043724d052918987
                            <button type="submit">delete</button>
                        </form>
                    </div>
                    
                </li>
            @endforeach
        </ul>
    </div>
</div>
@endsection
