@extends('layouts.app')
@section('content')
<!-- Background & Jumbotron  -->

<body background="/img/jumbotron.jpg" class="topbg-1">
    <div>
        <div>
            <div>
                <div class="container padding-center">
                    <h1 class="text-light des-align">Meet The Team</h1>
                    <br>
                    
                    <div class="features-wrap">
                        <div class="feature des-align">
                            <div class="feature-inner">
                                <img class="circle-avatar" src="{{ asset('/img/about/tio2.jpg') }}" alt="Avatar"
                                    style="width:200px;">
                                <br>
                                <br>
                                <h5 class="feature-title h3-mobile">Sulistio Sanjaya</h5>
                                <p class="text-sm">CEO & Founder</p>
                            </div>
                        </div>
                        <div class="feature des-align">
                            <div class="feature-inner">
                                <img class="circle-avatar" src="{{ asset('/img/about/tsaqif2.jpg') }}" alt="Avatar"
                                    style="width:200px">
                                <br>
                                <br>
                                <h5 class="feature-title h3-mobile">Tsaqif Aushaf F.</h5>
                                <p class="text-sm">Project Manager</p>
                            </div>
                        </div>
                        <div class="feature des-align">
                            <div class="feature-inner">
                                <img class="circle-avatar" src="{{ asset('/img/about/musa2.jpg') }}" alt="Avatar"
                                    style="width:200px">
                                <br>
                                <br>
                                <h5 class="feature-title h3-mobile">Musafak</h5>
                                <p class="text-sm">System Analys</p>
                            </div>
                        </div>
                        <div class="feature des-align">
                            <div class="feature-inner">
                                <img class="circle-avatar" src="{{ asset('/img/about/ifan.jpg') }}" alt="Avatar"
                                    style="width:200px">
                                <br>
                                <br>
                                <h5 class="feature-title h3-mobile">M. Ifan Rizky</h5>
                                <p class="text-sm">UI/UX Designer</p>
                            </div>
                        </div>
                        <div class="feature des-align">
                            <div class="feature-inner">
                                <img class="circle-avatar" src="{{ asset('/img/about/budiman.jpg') }}" alt="Avatar"
                                    style="width:200px">
                                <br>
                                <br>
                                <h5 class="feature-title h3-mobile">Arif Budiman</h5>
                                <p class="text-sm">Front-End Developer</p>
                            </div>
                        </div>
                        <div class="feature des-align">
                            <div class="feature-inner">
                                <img class="circle-avatar" src="{{ asset('/img/about/arul.jpg') }}" alt="Avatar"
                                    style="width:200px">
                                <br>
                                <br>
                                <h5 class="feature-title h3-mobile">Nashrul Saefullah</h5>
                                <p class="text-sm">Front-End Developer</p>
                            </div>
                        </div>
                        <div class="feature des-align">
                            <div class="feature-inner">
                                <img class="circle-avatar" src="{{ asset('/img/about/vyan.jpg') }}" alt="Avatar"
                                    style="width:200px">
                                <br>
                                <br>
                                <h5 class="feature-title h3-mobile">Vyan Insya N. M.</h5>
                                <p class="text-sm">Back-End Developer</p>
                            </div>
                        </div>
                        <div class="feature des-align">
                            <div class="feature-inner">
                                <img class="circle-avatar" src="{{ asset('/img/about/reza.jpg') }}" alt="Avatar"
                                    style="width:200px">
                                <br>
                                <br>
                                <h5 class="feature-title h3-mobile">M. Reza Rafli</h5>
                                <p class="text-sm">Back-End Developer</p>
                            </div>
                        </div>
                        <div class="feature des-align">
                            <div class="feature-inner">
                                <img class="circle-avatar" src="{{ asset('/img/about/fajar2.jpg') }}" alt="Avatar"
                                    style="width:200px">
                                <br>
                                <br>
                                <h5 class="feature-title h3-mobile">Nur Fajar Ismail</h5>
                                <p class="text-sm">Report & Documentation</p>
                            </div>
                        </div>
                        <div class="feature des-align">
                            <div class="feature-inner">
                                <img class="circle-avatar" src="{{ asset('/img/about/arya2.jpg') }}" alt="Avatar"
                                    style="width:200px">
                                <br>
                                <br>
                                <h5 class="feature-title h3-mobile">Abdul Eriawan N.</h5>
                                <p class="text-sm">Tester</p>
                            </div>
                        </div>
                        <div class="feature des-align">
                            <div class="feature-inner">
                                <img class="circle-avatar" src="{{ asset('/img/about/miftah.jpg') }}" alt="Avatar"
                                    style="width:200px">
                                <br>
                                <br>
                                <h5 class="feature-title h3-mobile">M. Miftah Jailani</h5>
                                <p class="text-sm">Tester</p>
                            </div>
                        </div>
                        <div class="feature des-align">
                            <div class="feature-inner">
                                <img class="circle-avatar" src="{{ asset('/img/about/Kemenparekraf.png') }}" alt="Avatar"
                                    style="width:200px">
                                <br>
                                <br>
                                <h5 class="feature-title h3-mobile">Kemenparekraf</h5>
                                <p class="text-sm">Business Partner</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
@endsection

<style>
    .circle-avatar {
        border-radius: 50%;
    }

    .feature {
        padding: 15px;
        width: 280px;
        max-width: 280px;
        flex-grow: 1;
    }

    .feature:hover{
        transform: scale(1.05);
        transition: transform .3s;
        animation: ease-in-out
    }

    .feature-inner {
        height: 100%;
        border-radius: 10px;
        padding: 40px 24px;
        box-shadow: 0 16px 48px black;
        background: white;

    }

    .des-align {
        text-align: center;
    }

    .features-wrap {
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
        margin-right: -12px;
        margin-left: -12px
    }

    .padding-center {
        padding-top: 120px;
    }
</style>