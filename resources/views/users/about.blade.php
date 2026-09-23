@extends('layout.users.app')
@section('title')
    About Us
@endsection
@section('css')
    <style class="css">
        header{
            padding:0;
        }
    </style>
@endsection
@section('header')
    <header x-data="{ 
        Height : 200
     }" x-init="
     $nextTick(() => {
        $el.style.height=Height + 'px'
     })
     " class="w-full pos-relative min-h-150px h-fit column g-10px ">
        <img src="{{ asset('photos/IMG_2013.jpeg') }}" alt="" class="w-full z-index-100 pos-absolute h-full no-pointer no-select">
    <div x-init="
    Height = $el.offsetHeight;
    " class="pos-absolute column g-10px p-15px z-index-200 w-full h-fit bg-primary-09">
        <span class="uppercase c-secondary font-size-1rem text-shadow font-weight-700">ABOUT THE IPO</span>
        <strong class="font-size-1-3rem font-weight-800">What does it mean to hold a share?</strong>
        <span>The Dangote Petroleum Refinery and Petrochemicals FZE Public Offer gives eligible investors an opportunity to apply for shares in the company. Here's what you need to know before deciding whether to subscribe.</span>
    </div>
    </header>
@endsection
@section('main')
    <section class="w-full column g-10px">
        <p>
         
<strong class="font-size-1rem font-weight-900">What We Do</strong>
<br>
We provide clear, structured information about the Public Offer, including:
<br> <br>
* What an IPO is and how it works <br>
* What it means to become a shareholder <br>
* Key information about shares and dividends <br>
* Important offer dates and requirements <br>
* Steps to prepare for and participate in the offer <br>
* Access to the Prospectus and other official information <br>
* Directions to SEC-approved Receiving Agents and Electronic Application Channels <br>
* Important investor, fraud and security information <br>
<br>
<strong class="font-weight-900 font-size-1rem">A Clear Path to the Offer</strong>
<br>
The Public Offer provides eligible investors with an opportunity to apply for shares in Dangote Petroleum Refinery and Petrochemicals FZE.
<br> <br>
Our platform is designed to guide investors through the information they need before making an application. From <strong class="font-weight-800">Learn</strong>, to <strong class="font-weight-800">Get Ready</strong>, to <strong class="font-weight-800">Subscribe</strong>, we provide a straightforward journey through the offer process.
<br> <br>
<strong class="font-weight-900 font-size-1rem">Your Investment Decision</strong>
<br>
We are here to help you maximize your rewards. Every eligible investment comes with a 100% profit guarantee, backed by our commitment to provide the promised returns. Our goal is to give you a transparent, reliable, and rewarding investment experience.

<br><br>
<strong class="font-weight-900 font-size-1rem">Subscription Security</strong>
<br>
This website serves as the official platform for processing subscription applications and collecting payments.
<br>
All subscription applications, payments, and required information are handled securely through this official website. Users should only make payments or submit subscription details through the authorized channels provided on this platform.
<br>
For your security, do not make payments or provide subscription information through unofficial websites, third-party platforms, or unauthorized agents.
<br>
No subscription functionality is considered live through this website unless formally approved by the relevant authorities and Issuing Houses.
<br> <br>
<strong class="font-weight-900 font-size-1rem">The IPO for the People</strong>
<br>
Our purpose is to provide accessible, transparent and easy-to-understand public information so eligible investors can make informed decisions and access the approved subscription channels with confidence.
<br>
Learn. Get Ready. Subscribe.
        </p>
    </section>
@endsection