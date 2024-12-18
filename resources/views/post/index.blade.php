@extends('layouts.main')
@section('main_content')
    <div class="main-content">
        <div class="main-top">
            <h2 class="main-title">Posts</h2>
            <form id="search-form" action="#" class="main-search">
                <input type="text" id="search-input" placeholder="Search">
                <button type="submit"></button>
            </form>
            <button class="btn btn-add" data-popup-open="new-task">New post</button>
        </div>

        <div id="table-container">
            @include('post.partials.table')
        </div>
    </div>
    @include('post.modals.create_post')
@endsection
