@extends('layouts.admin_app')
@section('title',"Category Create")
@section("content")
<div class="container">
    <br> <br>
    
    
    <div class="row justify-content-md-center">
    
        <h3>Under Developing !!! Please Be Patience</h3>

    </div>


    <br> <hr>

</div>
@if (session()->has('success'))
    <script>
        Swal.fire(
    '',
    '  {{ session()->get('success') }}',
    'success'
    )
    </script>
@endif


@endsection