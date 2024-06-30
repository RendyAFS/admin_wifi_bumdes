@extends('layouts.app')

@section('content')
    <section id="Home">
        <div class="d-none d-md-flex justify-content-center align-items-center home">
            <div class="">
                <img src="{{ Vite::asset('public/images/assets/logo-iconnet-t.png') }}" alt="Logo" id="logo-iconnet">
            </div>
            <div class="mt-5">
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris eu semper nibh. Aenean eu dui
                    vulputate,
                    vehicula nunc eu, eleifend neque. Sed ac sagittis leo. Aenean arcu orci, fermentum nec commodo ut,
                    pharetra
                    ullamcorper felis. Vivamus id magna in urna laoreet efficitur. Nulla tristique auctor auctor. In
                    molestie
                    vel nunc finibus bibendum.
                </p>
                <div style="text-align: center">
                    <button class="btn btn-primary ">Langganan Sekarang</button>
                </div>
            </div>
        </div>
    </section>


    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <defs>
            <linearGradient id="gradient1" x1="0%" y1="0%" x2="100%" y2="0%">
                <stop offset="0%" style="stop-color:#192857;" />
                <stop offset="100%" style="stop-color:#0B8EAE;" />
            </linearGradient>
        </defs>
        <path fill="url(#gradient1)" fill-opacity="1"
            d="M0,96L60,122.7C120,149,240,203,360,224C480,245,600,235,720,208C840,181,960,139,1080,122.7C1200,107,1320,117,1380,122.7L1440,128L1440,320L1380,320C1320,320,1200,320,1080,320C960,320,840,320,720,320C600,320,480,320,360,320C240,320,120,320,60,320L0,320Z">
        </path>
    </svg>
    <section id="Layanan" class="gradient-bg">
        <div class="container">
            <h2 class="text-center p">Layanan</h2>
            <hr class="hr-light">
            <p class="text-center p">Sesuaikan Bandwidth Sesuai Kebutuhan Anda</p>
            <div class="row justify-content-center">
                <div class="card-bg row">
                    <div class="col-md-3">
                        <div class="card-bnwth">
                            <div class="card-body text-center">
                                <div class="bnwth">
                                    <h1 class="b">20</h1>
                                    <h6>Mbps</h6>
                                </div>
                                <h5>Fiber Home</h5>
                                <p>Up to <span style="color: #0B8EAE;">20 Mbps</span> Unlimited Quota Download / Upload</p>
                                <p><b>Gratis Biaya Pasang</b></p>
                                <button class="btn btn-primary">Hubungi Sekarang</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card-bnwth">
                            <div class="card-body text-center">
                                <div class="bnwth">
                                    <h1 class="b">35</h1>
                                    <h6>Mbps</h6>
                                </div>
                                <h5>Fiber Home</h5>
                                <p>Up to <span style="color: #0B8EAE;">35 Mbps</span> Unlimited Quota Download / Upload</p>
                                <p><b>Gratis Biaya Pasang</b></p>
                                <button class="btn btn-primary">Hubungi Sekarang</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card-bnwth">
                            <div class="card-body text-center">
                                <div class="bnwth">
                                    <h1 class="b">50</h1>
                                    <h6>Mbps</h6>
                                </div>
                                <h5>Fiber Home</h5>
                                <p>Up to <span style="color: #0B8EAE;">50 Mbps</span> Unlimited Quota Download / Upload</p>
                                <p><b>Gratis Biaya Pasang</b></p>
                                <button class="btn btn-primary">Hubungi Sekarang</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card-bnwth">
                            <div class="card-body text-center">
                                <div class="bnwth">
                                    <h1 class="b">100</h1>
                                    <h6>Mbps</h6>
                                </div>
                                <h5>Fiber Home</h5>
                                <p>Up to <span style="color: #0B8EAE;">100 Mbps</span> Unlimited Quota Download / Upload</p>
                                <p><b>Gratis Biaya Pasang</b></p>
                                <button class="btn btn-primary">Hubungi Sekarang</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <defs>
            <linearGradient id="gradient1" x1="0%" y1="0%" x2="100%" y2="0%">
                <stop offset="0%" style="stop-color:#192857;" />
                <stop offset="100%" style="stop-color:#0B8EAE;" />
            </linearGradient>
        </defs>
        <path fill="url(#gradient1)" fill-opacity="1"
            d="M0,96L80,90.7C160,85,320,75,480,96C640,117,800,171,960,170.7C1120,171,1280,117,1360,90.7L1440,64L1440,0L1360,0C1280,0,1120,0,960,0C800,0,640,0,480,0C320,0,160,0,80,0L0,0Z">
        </path>
    </svg>

    <section>
        <div id="Testimoni" class="container">
            <h2 class="text-center">Testimoni</h2>
            <hr class="hr-blue">
            <p class="text-center">Kata Mereka yang Sudah Memakai</p>
            <div class="row">
                <div class="card-group">
                    <div class="card">
                        <img src="{{ Vite::asset('public/images/assets/testi.jpg') }}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">JOSSS</h5>
                            <p class="card-text"> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris eu semper
                                nibh..</p>
                        </div>
                    </div>
                    <div class="card">
                        <img src="{{ Vite::asset('public/images/assets/testi.jpg') }}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">MANTAPP</h5>
                            <p class="card-text"> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris eu semper
                                nibh..</p>
                        </div>
                    </div>
                    <div class="card">
                        <img src="{{ Vite::asset('public/images/assets/testi.jpg') }}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">YOMANN</h5>
                            <p class="card-text"> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris eu semper
                                nibh..</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <defs>
            <linearGradient id="gradient1" x1="0%" y1="0%" x2="100%" y2="0%">
                <stop offset="0%" style="stop-color:#192857;" />
                <stop offset="100%" style="stop-color:#0B8EAE;" />
            </linearGradient>
        </defs>
        <path fill="url(#gradient1)" fill-opacity="1"
            d="M0,96L60,122.7C120,149,240,203,360,224C480,245,600,235,720,208C840,181,960,139,1080,122.7C1200,107,1320,117,1380,122.7L1440,128L1440,320L1380,320C1320,320,1200,320,1080,320C960,320,840,320,720,320C600,320,480,320,360,320C240,320,120,320,60,320L0,320Z">
        </path>
    </svg>
    <section id="Pelayanan" class="gradient-bg">
        <div class="container">
            <h2 class="text-center p">Pelayanan</h2>
            <hr class="hr-light">
            <p class="text-center p">Dokumentasi layanan yang diberikan</p>
            <div class="row justify-content-center">
                <div class="card-plynn row">

                </div>
            </div>
        </div>
    </section>
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <defs>
            <linearGradient id="gradient1" x1="0%" y1="0%" x2="100%" y2="0%">
                <stop offset="0%" style="stop-color:#192857;" />
                <stop offset="100%" style="stop-color:#0B8EAE;" />
            </linearGradient>
        </defs>
        <path fill="url(#gradient1)" fill-opacity="1"
            d="M0,96L80,90.7C160,85,320,75,480,96C640,117,800,171,960,170.7C1120,171,1280,117,1360,90.7L1440,64L1440,0L1360,0C1280,0,1120,0,960,0C800,0,640,0,480,0C320,0,160,0,80,0L0,0Z">
        </path>
    </svg>
@endsection
