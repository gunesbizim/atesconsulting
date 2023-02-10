@extends('layouts.master',[
    'title' => 'Ateş Consulting',
    'metadesc' => 'Meta Açıklama'
])


@section('content')

<section id="banner">
    <div class="container">
        <div class="row">
            <div class="col-lg-5 position-relative">
                <div class="verticalAlign">
                    <h1 id="bannerHeader">
                    Your Gateway <br> to <b>Europe</b>
                    </h1>
                    <p id="bannerText">
                        We are specialized in advising companies with expanding business operations, international transactions as well as localization and market entry objectives.
                    </p>
                </div>
            </div>
            <div class="col-lg-4 offset-lg-3">
                <form id="bannerForm" class="bannerForm contactform hideMobile ram-form needs-validation" novalidate action="{{route('contact.post')}}" method="post">
                    @csrf
                    <p class="text-center" id="formHeader">Contact Us</p>
                    <div class="mb-3">
                        <input type="text" class="form-control" name="namesurname" id="namesurname" onkeyup="this.setAttribute('value', this.value);" value="" required>
                        <label for="namesurname" class="form-label">Name Surname</label>
                        <div class="invalid-feedback">
                            Please enter your name and surname.
                        </div>
                    </div>
                    <div class="mb-3">
                        <input type="email" class="form-control" name="email" id="email" onkeyup="this.setAttribute('value', this.value);" value="" required>
                        <label for="email" class="form-label">E-Mail</label>
                        <div class="invalid-feedback">
                            Please enter a valid email address.
                        </div>
                    </div>
                    <div class="mb-3">
                        <input type="text" class="form-control" name="phone" id="phone" onkeyup="this.setAttribute('value', this.value);" value="" required>
                        <label for="phone" class="form-label">Phone number</label>
                        <div class="invalid-feedback">
                            Please enter your phone number.
                        </div>
                    </div>
                    <div class="mb-3">
                        <input type="text" class="form-control" name="message" id="message" onkeyup="this.setAttribute('value', this.value);" value="" >
                        <label for="message" class="form-label">Message</label>
                    </div>

                    <div class="mb-3 form-check">
                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                        <label class="form-check-label" for="exampleCheck1">I have read and agree with the personal data privacy policy.</label>
                        <div class="invalid-feedback">
                            Please accept the terms and conditions.
                        </div>
                    </div>
                    <a class="btn btnAtes contact-send-button" id="footerformsubmit">Send</a>
                    <div class="contact-form-error"></div>

                </form>
            </div>
        </div>
    </div>
</section>




<section class="sectionPadding150" id="oneStopShop">
    <div class="container">
        <h2 class="sectionHeader text-center">We are Your <span>“One-Stop-Shop”</span></h2>
        <p class="text-center">
            <button class="btn btnAtesCollapse" type="button" data-bs-toggle="collapse" data-bs-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
                DISCOVER
            </button>
        </p>
        <div class="collapse" id="collapseExample">
            <div class="card card-body">
                <ul class="row">
                    <li class="col-md-6">
                        Company Formation Services
                    </li>
                    <li class="col-md-6">
                        Market Penetration & Business Development
                    </li>
                    <li class="col-md-6">
                        Accountancy & Bookkeeping
                    </li>
                    <li class="col-md-6">
                        Advertisement & Digital Marketing
                    </li>
                    <li class="col-md-6">
                        Tax Optimization / Advisory
                    </li>
                    <li class="col-md-6">
                        Immigration and Payroll Services
                    </li>
                    <li class="col-md-6">
                        Financial Planning and Audit Services
                    </li>
                    <li class="col-md-6">
                        Relocation Support Services
                    </li>
                    <li class="col-md-6">
                        Key Account Management Services
                    </li>
                    <li class="col-md-6">
                        Applications Support Services <br><small>(Including Bank Account Opennings)</small>
                    </li>
                    <li class="col-md-6">
                        Project / Contract Management Services <br><small>(Including Drafting, Negotiations and Execution)</small>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>



<section id="whatHow">
    <div class="container-fluid">
        <div class="row ">
            <div class="col-lg-6 p-0 position-relative mobileBorder">
                <div class="centerAlign">
                    <h2 class="sectionHeader">What We Do?</h2>
                    <p>
                        We provide smart, swift, accurate and cost effective solutions.
                    </p>
                </div>
            </div>
            <div class="col-lg-6 p-0">
                <img class="img-fluid w-100" src="{{ asset('assets/frontend/img/whatwedo.png') }}" alt="What we do">
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6 p-0">
                <img class="img-fluid w-100" src="{{ asset('assets/frontend/img/howwedo.png') }}" alt="How we do it?">
            </div>
            <div class="col-lg-6 p-0 position-relative">
                <div class="centerAlign">
                    <h2 class="sectionHeader">How We Do It?</h2>
                    <p>
                        With the trust, ownership, practicality, and transperancy, as this gives us a better feeling and creates sustainable alliances.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>



<section class="sectionPadding150" id="references">
    <div class="container">
        <h2 class="sectionHeader text-center">Our <span>References</span></h2>
        <div class="owl-carousel owl-theme">
            <div class="item">
                <img class="img-fluid w-100" src="{{ asset('assets/frontend/img/ref/3k.png') }}" alt="">
            </div>
            <div class="item">
                <img class="img-fluid w-100" src="{{ asset('assets/frontend/img/ref/exagate.png') }}" alt="">
            </div>
            <div class="item">
                <img class="img-fluid w-100" src="{{ asset('assets/frontend/img/ref/instillo.png') }}" alt="">
            </div>
            <div class="item">
                <img class="img-fluid w-100" src="{{ asset('assets/frontend/img/ref/logsign.png') }}" alt="">
            </div>
            <div class="item">
                <img class="img-fluid w-100" src="{{ asset('assets/frontend/img/ref/merlicon.png') }}" alt="">
            </div>
            <div class="item">
                <img class="img-fluid w-100" src="{{ asset('assets/frontend/img/ref/namila.png') }}" alt="">
            </div>
            <div class="item">
                <img class="img-fluid w-100" src="{{ asset('assets/frontend/img/ref/onedio.png') }}" alt="">
            </div>
            <div class="item">
                <img class="img-fluid w-100" src="{{ asset('assets/frontend/img/ref/pirobotik.png') }}" alt="">
            </div>
            <div class="item">
                <img class="img-fluid w-100" src="{{ asset('assets/frontend/img/ref/smart.png') }}" alt="">
            </div>
            <div class="item">
                <img class="img-fluid w-100" src="{{ asset('assets/frontend/img/ref/vcount.png') }}" alt="">
            </div>
        </div>
    </div>
</section>



<section class="sectionPadingBottom150" id="contact">
    <div class="container">
        <h2 class="sectionHeader text-center">Contact <span>Us</span></h2>
        <p class="contactText text-center">
            Eindhoven & Rotterdam <br> +31 6 21466830 <br> info@atesconsulting.com
        </p>
        <div class="row">
            <div class="col-lg-6 offset-lg-3">
                <form id="footerForm" class="footerForm contactform ram-form needs-validation" novalidate action="{{route('contact.post')}}" method="post">
                    @csrf
                    <div class="mb-3">
                        <input type="text" class="form-control" name="namesurname" id="namesurname" placeholder="Name Surname" onkeyup="this.setAttribute('value', this.value);" value="" required>
                        <div class="invalid-feedback">
                            Please enter your name and surname.
                        </div>
                    </div>
                    <div class="mb-3">
                        <input type="email" class="form-control" name="email" id="email" placeholder="E-Mail" onkeyup="this.setAttribute('value', this.value);" value="" required>
                        <div class="invalid-feedback">
                            Please enter a valid email address.
                        </div>
                    </div>
                    <div class="mb-3">
                        <input type="text" class="form-control" name="phone" id="phone" placeholder="Phone" onkeyup="this.setAttribute('value', this.value);" value="" required>
                        <div class="invalid-feedback">
                            Please enter your phone number.
                        </div>
                    </div>
                    <div class="mb-3">
                        <textarea class="form-control" name="message" id="message" placeholder="Message" cols="30" rows="10" onkeyup="this.setAttribute('value', this.value);" value=""></textarea>
                    </div>

                    <div class="mb-3 form-check">
                        <input type="checkbox" class="form-check-input" id="exampleCheck2">
                        <label class="form-check-label" for="exampleCheck2">I have read and agree with the personal data privacy policy.</label>
                        <div class="invalid-feedback">
                            Please accept the terms and conditions.
                        </div>
                    </div>

                    <!-- <button type="submit" class="btn btnAtes" id="footerformsubmit">Send</button> -->
                    <a class="btn btnAtes contact-send-button" id="footerformsubmit">Send</a>
                    <div class="contact-form-error"></div>
                </form>
            </div>
        </div>
    </div>
</section>

@endsection
