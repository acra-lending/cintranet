@if(count($errors) > 0)
    @foreach($errors->all() as $error)
        <div class="alert alert-light bg-danger">
            {{ $error }}
        </div>
    @endforeach
@endif

@if(session('success'))
    <div class="alert alert-success bg-teal">
        {{ session('success') }}
    </div>
@endif

@if(session('error'))
    <div class="alert alert-light bg-danger">
        {{ session('error') }}
    </div>
@endif