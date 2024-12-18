<div class="popup" data-popup="task-info-1">
    <div class="popup-backdrop"></div>
    <form action="{{ route('update_post') }}" method="POST">
        @csrf
        @method('PATCH')
        <div class="popup-content">
            <div class="popup-close"></div>

            <div class="popup-title">
                <h3>Update post</h3>
            </div>

            <input type="hidden" name="userId" value="{{ \App\Services\PostService::USER_ID }}">
            <input class="postId" type="hidden" name="id">
            <div class="popup-group show">
                <div class="popup-section">
                    <h4 class="popup-section__title">Title</h4>
                    <input id="postTitle" class="input input-search" type="text" name="title" placeholder="Title">
                </div>

                <div class="popup-section">
                    <h4 class="popup-section__title">Body</h4>
                    <input id="postBody" class="input input-search" type="text" name="body" placeholder="Body">
                </div>
            </div>

            <div class="popup-bottom">
                <button type="submit" class="btn btn-save">Update Post</button>
                <a href="#" class="btn btn-red" data-popup-open="delete"><i class="icon delete"></i>Destroy</a>
            </div>
        </div>
    </form>
</div>

<div class="popup popup-delete" data-popup="delete">
    <form action="{{ route('delete_post') }}" method="POST">
        @csrf
        @method('DELETE')
        <input class="postId" type="hidden" name="id">
        <div class="popup-backdrop"></div>
        <div class="popup-content">
            <div class="popup-close"></div>
            <h3>Delete post</h3>
            <p>This action cannot be undone, you will need to add it again</p>
            <div class="btn-row">
                <button type="button" class="btn-sm btn-delete-no">No</button>
                <button type="submit" class="btn-sm btn-delete-yes">Yes</button>
            </div>
        </div>
    </form>
</div>
