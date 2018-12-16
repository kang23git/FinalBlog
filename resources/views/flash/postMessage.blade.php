@if (Session::has('success'))

    <div class="aler alert-success" role="alert">
        <strong>Success:</strong> {{Session::get('success')}}
    </div>

@endif