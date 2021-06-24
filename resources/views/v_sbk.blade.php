<?php
  header('X-Frame-Options: DENY'); //HTTP 1.1
?>
@extends('components/layout.layout')
@section('content')
<div class="h_aks1"></div>
<header class="position-relative">
    @include('components/presentational/menu',['listMenu'=>$listMenu])
</header>
<main>
    <section class="section__about-first">
        <iframe src="https://healthmall.medkomtek.net/products/category/suplemen-vitamin" width="300px" height="300px"></iframe>
    </section>  
</main>
@endsection

