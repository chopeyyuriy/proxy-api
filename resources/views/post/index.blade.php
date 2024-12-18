@extends('layouts.main')
@section('main_content')
    <div class="main-content">
        <div class="main-top">
            <h2 class="main-title">Posts</h2>
            <form action="#" class="main-search">
                <input type="text" placeholder="Search">
                <button></button>
            </form>
            <button class="btn btn-add" data-popup-open="new-task">New post</button>
        </div>

        <div class="scroller">
            <table class="table">
                <colgroup>
                    <col style="--lg: 210px;">
                    <col style="--lg: 210px;">
                    <col style="--lg: 210px;">
                    <col style="--lg: 210px;">
                    <col style="width: 56px;">
                </colgroup>
                <thead>
                <tr>
                    <th class="sort">Id</th>
                    <th class="sort">Title</th>
                    <th class="sort">Body</th>
                    <th class="sort">Some</th>
                    <th></th>
                </tr>
                </thead>
                <tbody>
                @foreach($posts as $post)
                    <tr>
                        <td><span class="table-query"><p>{{ $post['id'] }}</p></span></td>
                        <td>{{ $post['title'] }}</td>
                        <td>{{ $post['body'] }}</td>
                        <td><span class="table-view-arrow" data-popup-open="task-info-1"></span></td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
        <div class="table-bottom">
            <ul class="table-pagination">
                <li class="active"><a href="#">1</a></li>
                <li><a href="#">2</a></li>
                <li><a href="#">3</a></li>
                <li><a href="#">4</a></li>
                <li><a href="#">5</a></li>
                <li><a href="#">6</a></li>
                <li><a href="#">7</a></li>
            </ul>
            <div class="table-total">All lines: <span>120</span></div>
        </div>


    </div>
@endsection
