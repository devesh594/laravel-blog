<!DOCTYPE html>

<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8" />
    <title>{{ $title ?? 'Laravel livewirw Web App' }}</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=5" />
    <meta name="description" content="This is meta description" />
    <meta name="author" content="Themefisher" />
    <link rel="shortcut icon" href="images/favicon.png" type="image/x-icon" />
    <link rel="icon" href="images/favicon.png" type="image/x-icon" />

    <!-- # Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Rubik:wght@400;500;700&display=swap" rel="stylesheet" />

    <!-- # CSS Plugins -->
    <link rel="stylesheet" href="{{ asset('/front/plugins/slick/slick.css') }}" />
    <link rel="stylesheet" href="{{ asset('/front/plugins/font-awesome/fontawesome.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('/front/plugins/font-awesome/brands.css') }}" />
    <link rel="stylesheet" href="{{ asset('/front/plugins/font-awesome/solid.css') }}" />

    <!-- # Main Style Sheet -->
    <link rel="stylesheet" href="{{ asset('/front/css/style.css') }}" />
    @livewireStyles
</head>

<body>
    <!-- navigation -->
    <header class="navigation bg-tertiary bg-light">
        <nav class="navbar navbar-expand-xl navbar-light text-center py-3 bg-light">
            <div class="container">
                <a class="navbar-brand" wire:navigate href="{{ route('home') }}">
                    <img loading="prelaod" decoding="async" class="img-fluid" width="160"
                        src="{{ asset('front/images/logo.png') }}" alt="Wallet" />
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav m-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link" wire:navigate href="{{ route('home') }}">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" wire:navigate href="{{ route('page', ['slug' => 'beauty']) }}">About
                                Us</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" wire:navigate href="{{ route('servicesPage') }}">Services</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" wire:navigate href="{{ route('teamPage') }}">Our Team</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" wire:navigate href="{{ route('blog') }}">Blog</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" wire:navigate href="{{ route('faqs') }} ">FAQ</a>
                        </li>
                    </ul>
                    <a href="{{ route('contact') }}" class="btn btn-outline-primary">Contact Us</a>
                    {{-- <a href="#" class="btn btn-outline-primary">Contact Us</a> --}}
                </div>
            </div>
        </nav>
    </header>
    <!-- /navigation -->

    {{-- <div class="modal applyLoanModal fade" id="applyLoan" tabindex="-1" aria-labelledby="applyLoanLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header border-bottom-0">
                    <h4 class="modal-title" id="exampleModalLabel">
                        How much do you need?
                    </h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="#!" method="post">
                        <div class="row">
                            <div class="col-lg-6 mb-4 pb-2">
                                <div class="form-group">
                                    <label for="loan_amount" class="form-label">Amount</label>
                                    <input type="number" class="form-control shadow-none" id="loan_amount"
                                        placeholder="ex: 25000" />
                                </div>
                            </div>
                            <div class="col-lg-6 mb-4 pb-2">
                                <div class="form-group">
                                    <label for="loan_how_long_for" class="form-label">How long for?</label>
                                    <input type="number" class="form-control shadow-none" id="loan_how_long_for"
                                        placeholder="ex: 12" />
                                </div>
                            </div>
                            <div class="col-lg-12 mb-4 pb-2">
                                <div class="form-group">
                                    <label for="loan_repayment" class="form-label">Repayment</label>
                                    <input type="number" class="form-control shadow-none" id="loan_repayment"
                                        disabled />
                                </div>
                            </div>
                            <div class="col-lg-6 mb-4 pb-2">
                                <div class="form-group">
                                    <label for="loan_full_name" class="form-label">Full Name</label>
                                    <input type="text" class="form-control shadow-none" id="loan_full_name" />
                                </div>
                            </div>
                            <div class="col-lg-6 mb-4 pb-2">
                                <div class="form-group">
                                    <label for="loan_email_address" class="form-label">Email address</label>
                                    <input type="email" class="form-control shadow-none" id="loan_email_address" />
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <button type="submit" class="btn btn-primary w-100">
                                    Get Your Loan Now
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div> --}}
    {{ $slot }}


    <footer class="section-sm bg-tertiary custom-footer">
        <div class="container">
            <div class="row">
                {{-- <div class="row justify-content-between">
                    <div class="col-lg-2 col-md-4 col-6 mb-4">
                        <div class="footer-widget">
                            <h5 class="mb-4 text-primary font-secondary">WEB APP</h5>
                            <div>
                                <p style="color: black; font-size: 18px;">Built with Laravel and Livewire, the app
                                    ensures
                                    smooth interaction, real-time feedback, and automated email delivery.</p>
                            </div>
                        </div>
                    </div>
                </div> --}}
                <div class="row justify-content-between">
                    <div class="col-lg-2 col-md-4 col-6 mb-4">
                        <div class="footer-widget">
                            <h5 class="mb-4 text-primary font-secondary">Service</h5>
                            <ul class="list-unstyled">
                                @foreach (getServices() as $service)
                                    <li class="mb-2">
                                        <a href="{{ route('servicePage', $service->id) }}"
                                            wire:navigate>{{ $service->title }}</a>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-4 col-6 mb-4">
                        <div class="footer-widget">
                            <h5 class="mb-4 text-primary font-secondary">Quick Links</h5>
                            <ul class="list-unstyled">
                                <li class="mb-2"><a href="{{ route('page', 'beauty') }}" wire:navigate>About
                                        Us</a></li>
                                <li class="mb-2"><a href="{{ route('contact') }}" wire:navigate>Contact Us</a>
                                </li>
                                <li class="mb-2"><a href="{{ route('blog') }}" wire:navigate>Blog</a></li>
                                <li class="mb-2"><a href="{{ route('teamPage') }}" wire:navigate>Team</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-4 col-6 mb-4">
                        <div class="footer-widget">
                            <h5 class="mb-4 text-primary font-secondary">Other Links</h5>
                            <ul class="list-unstyled">
                                <li class="list-inline-item me-4">
                                    <a class="text-black" href="{{ route('page', 'privacy') }}" wire:navigate>Privacy
                                        Policy</a>
                                </li>
                                <li class="list-inline-item me-4">
                                    <a class="text-black" href="{{ route('page', 'Terms') }}" wire:navigate>Terms
                                        &amp;
                                        Conditions</a>
                                </li>
                            </ul>
                            <div class="block">
                                <ul class="list-unstyled list-inline my-4 social-icons">
                                    <li class="list-inline-item me-3"><a title="Explorer Facebook Profile"
                                            class="text-black" href="https://facebook.com/"><i
                                                class="fab fa-facebook-f"></i></a>
                                    </li>
                                    <li class="list-inline-item me-3"><a title="Explorer Twitter Profile"
                                            class="text-black" href="https://twitter.com/"><i
                                                class="fab fa-twitter"></i></a>
                                    </li>
                                    <li class="list-inline-item me-3"><a title="Explorer Instagram Profile"
                                            class="text-black" href="https://instagram.com/"><i
                                                class="fab fa-instagram"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <hr color="black">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="footer-bottom text-center">
                            <p class="mb-0">&copy; {{ date('Y') }} <a href="{{ route('home') }}"
                                    wire:navigate>Wallet</a>
                                All rights reserved.</p>
                        </div>
                    </div>
                </div>
            </div>
    </footer>

    <!-- # JS Plugins -->
    <script src="{{ asset('/front/plugins/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('/front/plugins/bootstrap/bootstrap.min.js') }}"></script>


    <!-- Main Script -->
    <script src="{{ asset('/front/js/script.js') }}"></script>
    @livewireScripts
</body>

</html>