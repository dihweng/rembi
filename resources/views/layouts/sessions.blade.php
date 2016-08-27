@if (session('success'))
    <div class="alert alert-info">
        <span>This is a plain notification</span>
    </div>
@endif

@if (session('error'))
    <div class="alert alert-danger">
        <span>This is a plain notification</span>
    </div>
@endif
