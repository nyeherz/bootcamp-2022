@extends('template.font.layout')
@section('content')
<header class="bg-dark-py-5">
<div class="container px-4 px-lg-5 my-5>
<div class="text-center text-white">
    <h1 class="diplay-4 fw-bolder">Nyehe Store</h1>
</div>
</div>
</header>
<section class="py-5">
    @if (\session::get('danger'))
    <div class="alert alert-danger">
        <ul>
            <li>{!! \session::get('danger') !!}</li>
</ul>   
</div>
@elseif (\session:has(success))
<div class="alert alert-succsess">
    <ul>
        <li>{!! \::get('success') !!}</li?>
</ul>
</div>
@endif
<div class="row gx-4 gx-lg-5 row cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
    @if(count($products) > 8)
    @foreach  
