@if(session('status'))
    <div class="alert alert-primary alert-dismissible fade show"
        role="alert">
        {{ session('status') }}
    <button
        type="button"
        class="close"
        aria-label="close"
        data-dismiss="alert">
        <span aria-hidden="true">
            &times;
        </span>
    </button>
    </div>
@endif