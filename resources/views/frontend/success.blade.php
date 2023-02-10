@extends('layouts.master',[
    'title' => 'Ateş Consulting',
    'metadesc' => 'Meta Açıklama'
])


@section('content')

<section id="page">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 offset-lg-3">
                <img src="{{ asset('assets/frontend/img/success.svg') }}" alt="" class="img-fluid successImage">
                <h1 class="pageTitle">SUCCESS</h1>
                <p class="pageText">
                     Your request has been received. <br>We will get back to you as soon as possible!
                </p>
                <a href="/" class="btn btnAtesAlt">Home Page</a>
            </div>
        </div>
    </div>
</section>


@endsection
