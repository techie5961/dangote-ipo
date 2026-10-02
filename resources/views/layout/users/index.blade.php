<!DOCTYPE html>
<html lang="en">
<head>
    {{-- include meta tags --}}
   @include('components.utilities',[
    'meta_tags' => true
   ])
{{-- include favicon --}}
@include('components.utilities',[
    'favicon' => true
])
{{-- include vite css --}}
@include('components.utilities',[
    'vite_css' => true
])
      @include('components.utilities',[
    'vite_js' => true
  ])
  <script>
  
  </script>
    <title>{{ config('app.name') }} • Users • @yield('title') </title>
    <style>
      main{
        padding:0;
      }
       
    </style>

</head>
<body>
    {{-- include action loader for post requests,get requests and spa loading --}}
    @include('components.utilities',[
        'action_loader' => true
    ])  
{{-- include general codes --}}
    @include('components.utilities',[
        'general_codes' => true
    ])
    <header class="bg-primary pos-sticky top-0 z-index-3000 primary-text row align-center space-between g-10px pc-x-padding p-15px">
        <img src="{{ asset('photos/IMG_2022.png') }}" alt="" class="h-50px no-select no-pointer">
       <button x-data="{  }" x-on:click="window.location.href='{{ url('login') }}'" class="no-select w-fit br-5px p-x-20px border-none h-40px row align-center justify-center g-5px bg-secondary secondary-text">
    LOGIN
   
</button>
    </header>
    <main>
       <section x-data="{  }" x-bind:style="window.innerWidth > 799 ? {
        'background-image' : `url('{{ asset('photos/IMG_2013.jpeg') }}')`
       } : {
        'background-image' : `url('{{ asset('photos/8B65EE54-CE21-4F22-B855-1F29D2F03DF2-compressed.jpeg') }}')`

       }" style="background-size:cover;" class="hero pos-relative">
       <div class="pos-relative column g-10px p-15px pc-x-padding primary-text bg-primary-09 w-full">
        <span class="font-weight-700 opacity-07 text-shadow font-size-1rem">DANGOTE PETROLEUM REFINERY AND PETROCHEMICAL FZE</span>
       <strong class="font-size-2-5rem font-weight-900">THE <span class="c-secondary">IPO</span> IS OPEN.</strong>
    <i class="font-size-1-3rem">The <span class="c-secondary">IPO</span> for the people</i>
    <span class="font-size-1-1rem font-weight-300 opacity-08">Apply to own shares in the Dangote Petroleum Refinery and Petrochemicals FZE Initial Public Offer of 4.1 Billion Ordinary Shares.</span>
    <strong style="color:aqua;" class="c-secondary-lighter font-size-1-2rem font-weight-800">Buy a Share.</strong>
<div class="w-full grid grid-2 g-10px br-10px p-15px border-width-1px border-style-solid border-color-rgb-01 bg-rgb-005">
<div class="column">
    <span class="opacity-05 font-size-06rem">SHARES STARTING FROM</span>
    <span class="font-weight-700 font-size-1rem">&#8358;5,250</span>
</div>
<div class="column">
    <span class="opacity-05 font-size-06rem">PROFIT RETURN</span>
    <span class="font-weight-700 font-size-1rem">100%</span>
</div>
<div class="column">
    <span class="opacity-05 font-size-06rem">STATUS</span>
    <span class="font-weight-700 font-size-1rem">Open</span>
</div>
<div class="column">
    <span class="opacity-05 font-size-06rem">CLOSES</span>
    <span class="font-weight-700 font-size-1rem">14 Oct 2026</span>
</div>
</div>
<button x-data="{  }" x-on:click="window.location.href='{{ url('register') }}'" class="no-select w-fit br-5px p-x-30px border-none h-50px row align-center justify-center g-5px bg-secondary secondary-text">
    GET STARTED
    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20">
  <g fill="currentColor">
    <line x1="3" y1="10" x2="17" y2="10" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></line>
    <polyline points="12 15 17 10 12 5" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></polyline>
  </g>
</svg>
</button>
<button x-data="{  }" x-on:click="window.location.href='{{ url('login') }}'" class="no-select w-fit br-5px p-x-30px border-width-1px border-style-solid border-color-rgb-05 h-50px row align-center justify-center g-5px bg-transparent c-rgb-08">
    LOG IN
    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20">
  <g fill="currentColor">
    <line x1="3" y1="10" x2="17" y2="10" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></line>
    <polyline points="12 15 17 10 12 5" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></polyline>
  </g>
</svg>
</button>
</div>
    </section>
    <section class="w-full border-top-width-4px border-top-style-solid border-top-color-secondary bg-primary primary-text p-15px pc-x-padding column g-10px">
        <div class="row w-full g-10px">
            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18">
  <g fill="currentColor">
    <path d="M9.305,1.848l5.25,1.68c.414,.133,.695,.518,.695,.952v6.52c0,3.03-4.684,4.748-5.942,5.155-.203,.066-.413,.066-.616,0-1.258-.407-5.942-2.125-5.942-5.155V4.48c0-.435,.281-.82,.695-.952l5.25-1.68c.198-.063,.411-.063,.61,0Z" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"></path>
    <polyline points="6.497 9.75 8.106 11.25 11.503 6.75" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"></polyline>
  </g>
</svg>
<strong class="font-size-1rem font-weight-800">STAY SAFE. USE ONLY OUR OFFICIAL WEBSITE.</strong>

        </div>
<span class="opacity-08 font-weight-300">Only use the official website to invest in the IPO. We will never ask for your PIN, password, or OTP.</span>
<button x-data="{  }" x-on:click="window.location.href='{{ url('login') }}'" class="no-select w-fit br-5px p-x-30px border-width-1px border-style-solid border-color-rgb-05 h-40px row align-center justify-center g-5px bg-transparent c-rgb-08">
    START INVESTING
    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20">
  <g fill="currentColor">
    <line x1="3" y1="10" x2="17" y2="10" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></line>
    <polyline points="12 15 17 10 12 5" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></polyline>
  </g>
</svg>
</button>
    </section>
    <section class="w-full g-10px p-15px pc-x-padding column">
        <div style="background-image:url('{{ asset('photos/IMG_2028-compressed.jpeg') }}');background-position:center;background-size:cover;" class="w-full bg-primary primary-text br-10px g-10px">
           <div class="column bg-primary-09 w-full br-inherit p-15px g-10px">
             <span class="opacity-07">DANGOTE PETROLEUM REFINERY AND PETROCHEMICALS FZE</span>
            <div class="w-full br-10px p-15px border-width-1px border-style-solid border-color-rgb-01 bg-rgb-005 column g-5px">
                <small class="opacity-05">MINIMUM SHARE</small>
                <span class="font-weight-800">&#8358;5,250</span>
            </div>
            <div class="w-full br-10px p-15px border-width-1px border-style-solid border-color-rgb-01 bg-rgb-005 column g-5px">
                <small class="opacity-05">RETURN</small>
                <span class="font-weight-800">100% Profit</span>
            </div>
            <div class="w-full br-10px p-15px border-width-1px border-style-solid border-color-rgb-01 bg-rgb-005 column g-5px">
                <small class="opacity-05">OFFER STATUS</small>
                <span class="font-weight-800">Open</span>
            </div>
            <div class="w-full br-10px p-15px border-width-1px border-style-solid border-color-rgb-01 bg-rgb-005 column g-5px">
                <small class="opacity-05">OFFER CLOSES</small>
                <span class="font-weight-800">13 October 2026</span>
            </div>
            <div class="row w-full space-between align-center g-10px">
               <strong style="color:aqua;" class="c-secondary-lighter font-size-1rem font-weight-800">Buy a Share.</strong>
               <button x-data="{  }" x-on:click="window.location.href='{{ url('register') }}'" class="no-select w-fit  font-size-08rem br-5px p-x-20px border-none h-50px row align-center justify-center g-5px bg-secondary secondary-text">
    GET STARTED
    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20">
  <g fill="currentColor">
    <line x1="3" y1="10" x2="17" y2="10" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></line>
    <polyline points="12 15 17 10 12 5" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></polyline>
  </g>
</svg>
</button>
            </div>
            <div style="border-color:var(--rgb-02)" class="hr" vitecss-type="solid"></div>
            <i class="opacity-07 font-weight-300">Please only use our official website to buy shares, our staffs would never ask you for your login details.</i>
           </div>
           
        </div>
        <strong class="font-size-1-5rem m-top-20px font-weight-900 c-primary">
            FROM KNOWING
THE REFINERY TO
APPLYING FOR SHARES.
        </strong>
        <div style="width:30%;" class="h-5px bg-secondary"></div>
        <span class="m-top-10px">
            The Dangote Petroleum Refinery and Petrochemicals FZE Public Offer gives eligible investors the opportunity to apply for shares in the company.

        </span>
        <span class="m-top-10px">
           If shares are allotted to you, you become a shareholder in the company.
        </span>
    </section>
    <div x-on:click="window.open('{{ $social_settings->whatsapp_community }}')" style="background:#4caf50;color:white;" class="h-50px w-50px pos-fixed bottom-40px right-20px z-index-3000 box-shadow circle column align-center justify-center">
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 32 32">
  <g fill="currentColor">
    <path d="M25.873,6.069c-2.619-2.623-6.103-4.067-9.814-4.069C8.411,2,2.186,8.224,2.184,15.874c-.001,2.446,.638,4.833,1.852,6.936l-1.969,7.19,7.355-1.929c2.026,1.106,4.308,1.688,6.63,1.689h.006c7.647,0,13.872-6.224,13.874-13.874,.001-3.708-1.44-7.193-4.06-9.815h0Zm-9.814,21.347h-.005c-2.069,0-4.099-.557-5.87-1.607l-.421-.25-4.365,1.145,1.165-4.256-.274-.436c-1.154-1.836-1.764-3.958-1.763-6.137,.003-6.358,5.176-11.531,11.537-11.531,3.08,.001,5.975,1.202,8.153,3.382,2.177,2.179,3.376,5.077,3.374,8.158-.003,6.359-5.176,11.532-11.532,11.532h0Zm6.325-8.636c-.347-.174-2.051-1.012-2.369-1.128-.318-.116-.549-.174-.78,.174-.231,.347-.895,1.128-1.098,1.359-.202,.232-.405,.26-.751,.086-.347-.174-1.464-.54-2.788-1.72-1.03-.919-1.726-2.054-1.929-2.402-.202-.347-.021-.535,.152-.707,.156-.156,.347-.405,.52-.607,.174-.202,.231-.347,.347-.578,.116-.232,.058-.434-.029-.607-.087-.174-.78-1.88-1.069-2.574-.281-.676-.567-.584-.78-.595-.202-.01-.433-.012-.665-.012s-.607,.086-.925,.434c-.318,.347-1.213,1.186-1.213,2.892s1.242,3.355,1.416,3.587c.174,.232,2.445,3.733,5.922,5.235,.827,.357,1.473,.571,1.977,.73,.83,.264,1.586,.227,2.183,.138,.666-.1,2.051-.839,2.34-1.649,.289-.81,.289-1.504,.202-1.649s-.318-.232-.665-.405h0Z" fill-rule="evenodd"></path>
  </g>
</svg>
        </div>
    </main>
    <footer class="w-full m-top-auto bg-primary primary-text pc-x-padding p-15px column g-10px">
        <strong class="font-weight-800 font-size-1-2rem">The <span class="c-secondary">IPO</span> for the People</strong>
    <p class="opacity-07">
        The official public information and routing site for the Dangote Petroleum Refinery and Petrochemicals FZE public offer. Subscriptions are processed exclusively by SEC approved Receiving Agents and Electronic Application Channels, not by this site.
</p>
<i class="opacity-05 font-weight-300">
    Please read the Prospectus and where in doubt, consult your Issuing House, Stockbrokers and Financial Advisers for guidance before subscribing.

</i>
<span class="font-weight-700 font-size-1rem opacity-07">SITE</span>
<a class="primary-text no-u" href="{{ url('register') }}">Get Started</a>
<a class="primary-text no-u" href="{{ url('login') }}">Login</a>
<div class="hr" style="border-color:var(--rgb-02)" vitecss-type="solid"></div>
<small class="opacity-07">
    This site provides public information and a routing journey only. Share subscriptions, KYC, payment, and allotment are owned and processed exclusively by SEC approved Receiving Agents and Electronic Application Channels, the Issuing Houses, Registrars, and CSCS. No subscription functionality is live until formally approved by the SEC and Issuing Houses.

</small>
<span class="font-weight-300 opacity-05">
    © 2026 The IPO for the People. All rights reserved.
</span>
<div class="row align-center g-10px w-full">
    <div class="bg-rgb-01 br-5px h-40px w-40px primary-text column align-center justify-center">
        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 32 32">
  <g fill="currentColor">
    <path d="M18.42,14.009L27.891,3h-2.244l-8.224,9.559L10.855,3H3.28l9.932,14.455L3.28,29h2.244l8.684-10.095,6.936,10.095h7.576l-10.301-14.991h0Zm-3.074,3.573l-1.006-1.439L6.333,4.69h3.447l6.462,9.243,1.006,1.439,8.4,12.015h-3.447l-6.854-9.804h0Z"></path>
  </g>
</svg>
    </div>
      <div class="bg-rgb-01 br-5px h-40px w-40px primary-text column align-center justify-center">
       <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 32 32">
  <g fill="currentColor">
    <path d="M10.202,2.098c-1.49,.07-2.507,.308-3.396,.657-.92,.359-1.7,.84-2.477,1.619-.776,.779-1.254,1.56-1.61,2.481-.345,.891-.578,1.909-.644,3.4-.066,1.49-.08,1.97-.073,5.771s.024,4.278,.096,5.772c.071,1.489,.308,2.506,.657,3.396,.359,.92,.84,1.7,1.619,2.477,.779,.776,1.559,1.253,2.483,1.61,.89,.344,1.909,.579,3.399,.644,1.49,.065,1.97,.08,5.771,.073,3.801-.007,4.279-.024,5.773-.095s2.505-.309,3.395-.657c.92-.36,1.701-.84,2.477-1.62s1.254-1.561,1.609-2.483c.345-.89,.579-1.909,.644-3.398,.065-1.494,.081-1.971,.073-5.773s-.024-4.278-.095-5.771-.308-2.507-.657-3.397c-.36-.92-.84-1.7-1.619-2.477s-1.561-1.254-2.483-1.609c-.891-.345-1.909-.58-3.399-.644s-1.97-.081-5.772-.074-4.278,.024-5.771,.096m.164,25.309c-1.365-.059-2.106-.286-2.6-.476-.654-.252-1.12-.557-1.612-1.044s-.795-.955-1.05-1.608c-.192-.494-.423-1.234-.487-2.599-.069-1.475-.084-1.918-.092-5.656s.006-4.18,.071-5.656c.058-1.364,.286-2.106,.476-2.6,.252-.655,.556-1.12,1.044-1.612s.955-.795,1.608-1.05c.493-.193,1.234-.422,2.598-.487,1.476-.07,1.919-.084,5.656-.092,3.737-.008,4.181,.006,5.658,.071,1.364,.059,2.106,.285,2.599,.476,.654,.252,1.12,.555,1.612,1.044s.795,.954,1.051,1.609c.193,.492,.422,1.232,.486,2.597,.07,1.476,.086,1.919,.093,5.656,.007,3.737-.006,4.181-.071,5.656-.06,1.365-.286,2.106-.476,2.601-.252,.654-.556,1.12-1.045,1.612s-.955,.795-1.608,1.05c-.493,.192-1.234,.422-2.597,.487-1.476,.069-1.919,.084-5.657,.092s-4.18-.007-5.656-.071M21.779,8.517c.002,.928,.755,1.679,1.683,1.677s1.679-.755,1.677-1.683c-.002-.928-.755-1.679-1.683-1.677,0,0,0,0,0,0-.928,.002-1.678,.755-1.677,1.683m-12.967,7.496c.008,3.97,3.232,7.182,7.202,7.174s7.183-3.232,7.176-7.202c-.008-3.97-3.233-7.183-7.203-7.175s-7.182,3.233-7.174,7.203m2.522-.005c-.005-2.577,2.08-4.671,4.658-4.676,2.577-.005,4.671,2.08,4.676,4.658,.005,2.577-2.08,4.671-4.658,4.676-2.577,.005-4.671-2.079-4.676-4.656h0"></path>
  </g>
</svg>
    </div>
     <div class="bg-rgb-01 br-5px h-40px w-40px primary-text column align-center justify-center">
      <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 32 32">
  <g fill="currentColor">
    <path d="M16,2c-7.732,0-14,6.268-14,14,0,6.566,4.52,12.075,10.618,13.588v-9.31h-2.887v-4.278h2.887v-1.843c0-4.765,2.156-6.974,6.835-6.974,.887,0,2.417,.174,3.043,.348v3.878c-.33-.035-.904-.052-1.617-.052-2.296,0-3.183,.87-3.183,3.13v1.513h4.573l-.786,4.278h-3.787v9.619c6.932-.837,12.304-6.74,12.304-13.897,0-7.732-6.268-14-14-14Z"></path>
  </g>
</svg>
    </div>
      <div class="bg-rgb-01 br-5px h-40px w-40px primary-text column align-center justify-center">
      <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 32 32">
  <g fill="currentColor">
    <path d="M24.562,7.613c-1.508-.983-2.597-2.557-2.936-4.391-.073-.396-.114-.804-.114-1.221h-4.814l-.008,19.292c-.081,2.16-1.859,3.894-4.039,3.894-.677,0-1.315-.169-1.877-.465-1.288-.678-2.169-2.028-2.169-3.582,0-2.231,1.815-4.047,4.046-4.047,.417,0,.816,.069,1.194,.187v-4.914c-.391-.053-.788-.087-1.194-.087-4.886,0-8.86,3.975-8.86,8.86,0,2.998,1.498,5.65,3.783,7.254,1.439,1.01,3.19,1.606,5.078,1.606,4.886,0,8.86-3.975,8.86-8.86V11.357c1.888,1.355,4.201,2.154,6.697,2.154v-4.814c-1.345,0-2.597-.4-3.647-1.085Z"></path>
  </g>
</svg>
    </div>
       <div class="bg-rgb-01 br-5px h-40px w-40px primary-text column align-center justify-center">
     <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 32 32">
  <g fill="currentColor">
    <path d="M16,2c-7.732,0-14,6.268-14,14s6.268,14,14,14,14-6.268,14-14S23.732,2,16,2Zm6.489,9.521c-.211,2.214-1.122,7.586-1.586,10.065-.196,1.049-.583,1.401-.957,1.435-.813,.075-1.43-.537-2.218-1.053-1.232-.808-1.928-1.311-3.124-2.099-1.382-.911-.486-1.412,.302-2.23,.206-.214,3.788-3.472,3.858-3.768,.009-.037,.017-.175-.065-.248-.082-.073-.203-.048-.29-.028-.124,.028-2.092,1.329-5.905,3.903-.559,.384-1.065,.571-1.518,.561-.5-.011-1.461-.283-2.176-.515-.877-.285-1.574-.436-1.513-.92,.032-.252,.379-.51,1.042-.773,4.081-1.778,6.803-2.95,8.164-3.517,3.888-1.617,4.696-1.898,5.222-1.907,.116-.002,.375,.027,.543,.163,.142,.115,.181,.27,.199,.379,.019,.109,.042,.357,.023,.551Z" fill-rule="evenodd"></path>
  </g>
</svg>
    </div>
     <div class="bg-rgb-01 br-5px h-40px w-40px primary-text column align-center justify-center">
     <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 32 32">
  <g fill="currentColor">
    <path d="M25.873,6.069c-2.619-2.623-6.103-4.067-9.814-4.069C8.411,2,2.186,8.224,2.184,15.874c-.001,2.446,.638,4.833,1.852,6.936l-1.969,7.19,7.355-1.929c2.026,1.106,4.308,1.688,6.63,1.689h.006c7.647,0,13.872-6.224,13.874-13.874,.001-3.708-1.44-7.193-4.06-9.815h0Zm-9.814,21.347h-.005c-2.069,0-4.099-.557-5.87-1.607l-.421-.25-4.365,1.145,1.165-4.256-.274-.436c-1.154-1.836-1.764-3.958-1.763-6.137,.003-6.358,5.176-11.531,11.537-11.531,3.08,.001,5.975,1.202,8.153,3.382,2.177,2.179,3.376,5.077,3.374,8.158-.003,6.359-5.176,11.532-11.532,11.532h0Zm6.325-8.636c-.347-.174-2.051-1.012-2.369-1.128-.318-.116-.549-.174-.78,.174-.231,.347-.895,1.128-1.098,1.359-.202,.232-.405,.26-.751,.086-.347-.174-1.464-.54-2.788-1.72-1.03-.919-1.726-2.054-1.929-2.402-.202-.347-.021-.535,.152-.707,.156-.156,.347-.405,.52-.607,.174-.202,.231-.347,.347-.578,.116-.232,.058-.434-.029-.607-.087-.174-.78-1.88-1.069-2.574-.281-.676-.567-.584-.78-.595-.202-.01-.433-.012-.665-.012s-.607,.086-.925,.434c-.318,.347-1.213,1.186-1.213,2.892s1.242,3.355,1.416,3.587c.174,.232,2.445,3.733,5.922,5.235,.827,.357,1.473,.571,1.977,.73,.83,.264,1.586,.227,2.183,.138,.666-.1,2.051-.839,2.34-1.649,.289-.81,.289-1.504,.202-1.649s-.318-.232-.665-.405h0Z" fill-rule="evenodd"></path>
  </g>
</svg>
    </div>
</div>
    </footer>
  
</body>
</html>