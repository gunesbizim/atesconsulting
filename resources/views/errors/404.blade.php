@extends('layouts.master',[
    'title' => 'Ateş Consulting',
    'metadesc' => 'Meta Açıklama'
])


@section('content')

<section id="page">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 offset-lg-3">
                <img src="{{ asset('assets/frontend/img/404.svg') }}" alt="" class="img-fluid image404">
                <h1 class="pageTitle">
                    SORRY, THIS PAGE <br>DOES NOT EXIST!
                </h1>
                <p class="pageText">
                    The link might be corrupted, or the page may <br>have been removed.
                </p>
                <a href="/" class="btn btnAtesAlt">Home Page</a>
            </div>
        </div>
    </div>
</section>


@endsection
