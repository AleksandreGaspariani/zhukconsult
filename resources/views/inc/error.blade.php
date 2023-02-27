@if (session()->has('success'))
    <div class="alert alert-success d-flex justify-content-center">
        {{ session('success') }}
    </div>
@elseif(session()->has('error'))
    <div class="alert alert-danger d-flex justify-content-center">
        {{ session('error') }}
    </div>
@endif
