@if (session('status'))
    <div class="alert alert-primary alert-dismissible fade show" role="alert">
        {{ session('status') }}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
@endif

git config --global user.email "you@example.com"
git config --global user.name "Your Name"