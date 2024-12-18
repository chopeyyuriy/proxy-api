<div class="popup" data-popup="new-task">
    <div class="popup-backdrop"></div>
    <form action="{{ route('create_post') }}" method="POST">
        @csrf
        @method('PUT')
        <div class="popup-content">
            <div class="popup-close"></div>

            <div class="popup-title">
                <h3>Create new post</h3>
            </div>

            <input type="hidden" name="userId" value="{{ \App\Services\PostService::USER_ID }}">
            <div class="popup-group show">
                <div class="popup-section">
                    <h4 class="popup-section__title">Title</h4>
                    <input class="input input-search" type="text" name="title" placeholder="Title">
                </div>

                <div class="popup-section">
                    <h4 class="popup-section__title">Body</h4>
                    <input class="input input-search" type="text" name="body" placeholder="Body">
                </div>
            </div>

            <div class="popup-bottom">
                <button type="submit" class="btn btn-save">Create Post</button>
            </div>
        </div>
    </form>
</div>


