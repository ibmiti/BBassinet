@extends('layouts.primary')

@section('title', 'Create Article')

@section('content')

    <div class="row">
        <div class="col-sm-12">
            <h1>Create Article</h1>

            <form method="POST" action="{{ route('store_article') }}">
            @csrf
            <div class="row">
                <label for="name" class="control-label">Article Title</label>
                <input type="text" name="name" class="form-control form-control-lg" placeholder="Something Spookey scary or exciting">
            </div>

            <div class="row mt-3">
                <label for="excerpt" class="control-label">Task Excerpt</label>
                <input type="textarea" name="excerpt" class="form-control form-control-lg mt-3" placeholder="A short snippet from the article">
            </div>

            <div class="row mt-3">
                <label for="excerpt" class="control-label">Body</label>
                <input type="textarea" name="body" class="form-control form-control-lg mt-3" placeholder="The entire sha-bang">
            </div>

                <div class="row justify-content-center mt-3">
                    <div class="col-sm-6">
                        <button class="btn btn-block btn-success" type="submit">Create Article</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection