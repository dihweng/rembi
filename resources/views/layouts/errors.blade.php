@if (count($errors) > 0)
    <ul>
        @foreach ($errors->all() as $error)
            <div class="alert alert-info">
                <span>{{$error}}</span>
            </div>
        @endforeach
    </ul>
@endif
