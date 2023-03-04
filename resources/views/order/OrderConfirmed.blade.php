@extends('layouts.body')
@section('content')
    <!-- order complete -->
    <div class="cart_area section_padding_b">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="row">
                        <div class="col-lg-8 mx-auto">
                            <div class="order_complete">
                                {{-- <div class="complete_icon">
                                    <img loading="lazy" src="assets/images/complete.png" alt="success">
                                </div> --}}
                                <div class="order_complete_content">
                                    <h4>Comanda Ta A fost Finalizata Cu Success!</h4>
                                    <p>Vă mulțumim pentru comanda dumneavoastră! Comanda dumneavoastră este în curs de procesare și va fi finalizată în 3-6 ore. Veți primi o confirmare prin e-mail când comanda dvs. este finalizată.</p>
                                    <div class="order_complete_btn">
                                        <a href="/" class="default_btn rounded">CONTINUA CUMPARATURILE</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
