<div class="scroller">
    <table class="table">
        <colgroup>
            <col style="--lg: 210px;">
            <col style="--lg: 210px;">
            <col style="--lg: 210px;">
            <col style="width: 56px;">
        </colgroup>
        <thead>
        <tr>
            <th class="sort" data-column="id" data-direction="{{ $sort_column === 'id' && $sort_direction === 'asc' ? 'desc' : 'asc' }}">
                Id {!! $sort_column === 'id' ? ($sort_direction === 'asc' ? '↑' : '↓') : '' !!}
            </th>
            <th class="sort" data-column="title" data-direction="{{ $sort_column === 'title' && $sort_direction === 'asc' ? 'desc' : 'asc' }}">
                Title {!! $sort_column === 'title' ? ($sort_direction === 'asc' ? '↑' : '↓') : '' !!}
            </th>
            <th class="sort" data-column="body" data-direction="{{ $sort_column === 'body' && $sort_direction === 'asc' ? 'desc' : 'asc' }}">
                Body {!! $sort_column === 'body' ? ($sort_direction === 'asc' ? '↑' : '↓') : '' !!}
            </th>
            <th></th>
        </tr>
        </thead>
        <tbody>
        @forelse($posts as $post)
            <tr>
                <td><span class="table-query"><p>{{ $post['id'] }}</p></span></td>
                <td>{{ $post['title'] }}</td>
                <td>{{ $post['body'] }}</td>
                <td><span class="table-view-arrow" data-popup-open="task-info-1"></span></td>
            </tr>
        @empty
            <tr>
                <td colspan="4">No posts available</td>
            </tr>
        @endforelse
        </tbody>
    </table>
</div>

<div class="table-bottom">
    <ul class="table-pagination">
        @for ($i = 1; $i <= $total_pages; $i++)
            <li class="{{ $i == $current_page ? 'active' : '' }}">
                <a href="#" class="pagination-link" data-page="{{ $i }}">{{ $i }}</a>
            </li>
        @endfor
    </ul>
    <div class="table-total">All lines: <span>{{ $total_records }}</span></div>
</div>
