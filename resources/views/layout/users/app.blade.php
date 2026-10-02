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
    function Redirect(url,element=false){
        if(element){
            element.classList.add('animate');

            element.addEventListener('animationend',()=>{
                element.classList.remove('animate');
            })
        }
       Vitecss.navigate(url);
    }
    window.addEventListener('load',()=>{
        document.body.style.paddingBottom=document.querySelector('footer').offsetHeight + 'px';
    })
  </script>
    <title>{{ config('app.name') }} • Users • @yield('title') </title>
    <style>
        main{
            background:var(--bg);
            border-radius:15px 15px 0 0;
            color:var(--text);
        }
        body{
            background:var(--primary);
            color:var(--primary-text);
            padding:1px;
        }
        header{
            padding:20px;
        }
        header.overlayed,.group.overlayed{
                transform:translateY(5px) scale(0.95);
        }
        header.overlayed{
            border-top-left-radius: 10px;
            border-top-right-radius: 10px;
        }
        .cont{
            border:1px solid var(--primary-05);
            border-radius:5px;
        }
        button.post{
            background:var(--primary);
        }
       
        @media(min-width:800px){
            footer,main,header{
                padding-left:15vw;
                padding-right:15vw;
            }
        }
       
    </style>

    {{-- yield css --}}
     @yield('css')
     {{-- stack css --}}
     @stack('css')
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
      
      @hasSection ('header')
          @yield('header')
      @else
    <header class="transition-all">

              <div class="row m-bottom-10px g-10px">
       <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 24 24">
  <g fill="none">
    <path fill-rule="evenodd" clip-rule="evenodd" d="M2 11C2 5.47723 6.47723 1 12 1C17.5228 1 22 5.47723 22 11C22 16.5228 17.5228 21 12 21C6.47723 21 2 16.5228 2 11Z" fill="url(#1752500502811-9294189_user_existing_0_t4csz04ye)" data-glass="origin" mask="url(#1752500502811-9294189_user_mask_s86i2afs5)"></path>
    <path fill-rule="evenodd" clip-rule="evenodd" d="M2 11C2 5.47723 6.47723 1 12 1C17.5228 1 22 5.47723 22 11C22 16.5228 17.5228 21 12 21C6.47723 21 2 16.5228 2 11Z" fill="url(#1752500502811-9294189_user_existing_0_t4csz04ye)" data-glass="clone" filter="url(#1752500502811-9294189_user_filter_nsyh9isk4)" clip-path="url(#1752500502811-9294189_user_clipPath_1jvvjoq1t)"></path>
    <path d="M12.4414 14C16.3397 14.0001 19.4999 17.1603 19.5 21.0586C19.5 22.1307 18.6307 23 17.5586 23H6.44141C5.36932 23 4.5 22.1307 4.5 21.0586C4.50012 17.1603 7.6603 14.0001 11.5586 14H12.4414ZM12 5C13.933 5 15.5 6.567 15.5 8.5C15.5 10.433 13.933 12 12 12C10.067 12 8.5 10.433 8.5 8.5C8.5 6.567 10.067 5 12 5Z" fill="url(#1752500502811-9294189_user_existing_1_bnqb6d6gm)" data-glass="blur"></path>
    <path d="M17.5586 22.25V23H6.44141V22.25H17.5586ZM18.75 21.0586C18.7499 17.5745 15.9255 14.7501 12.4414 14.75H11.5586C8.07451 14.7501 5.25012 17.5745 5.25 21.0586C5.25 21.7165 5.78354 22.25 6.44141 22.25V23L6.24316 22.9902C5.26408 22.891 4.5 22.0638 4.5 21.0586C4.50012 17.1603 7.6603 14.0001 11.5586 14H12.4414L12.8047 14.0088C16.5342 14.198 19.4999 17.2821 19.5 21.0586C19.5 22.1307 18.6307 23 17.5586 23V22.25C18.2165 22.25 18.75 21.7165 18.75 21.0586Z" fill="url(#1752500502811-9294189_user_existing_2_duz35xtpd)"></path>
    <path d="M14.75 8.5C14.75 6.98122 13.5188 5.75 12 5.75C10.4812 5.75 9.25 6.98122 9.25 8.5C9.25 10.0188 10.4812 11.25 12 11.25V12C10.067 12 8.5 10.433 8.5 8.5C8.5 6.567 10.067 5 12 5C13.933 5 15.5 6.567 15.5 8.5C15.5 10.433 13.933 12 12 12V11.25C13.5188 11.25 14.75 10.0188 14.75 8.5Z" fill="url(#1752500502811-9294189_user_existing_3_x5xjz4yjs)"></path>
    <defs>
      <linearGradient id="1752500502811-9294189_user_existing_0_t4csz04ye" x1="12" y1="1" x2="12" y2="21" gradientUnits="userSpaceOnUse">
        <stop stop-color="#575757"></stop>
        <stop offset="1" stop-color="#151515"></stop>
      </linearGradient>
      <linearGradient id="1752500502811-9294189_user_existing_1_bnqb6d6gm" x1="12" y1="5" x2="12" y2="23" gradientUnits="userSpaceOnUse">
        <stop stop-color="#E3E3E599"></stop>
        <stop offset="1" stop-color="#BBBBC099"></stop>
      </linearGradient>
      <linearGradient id="1752500502811-9294189_user_existing_2_duz35xtpd" x1="12" y1="14" x2="12" y2="19.212" gradientUnits="userSpaceOnUse">
        <stop stop-color="#fff"></stop>
        <stop offset="1" stop-color="#fff" stop-opacity="0"></stop>
      </linearGradient>
      <linearGradient id="1752500502811-9294189_user_existing_3_x5xjz4yjs" x1="12" y1="5" x2="12" y2="9.054" gradientUnits="userSpaceOnUse">
        <stop stop-color="#fff"></stop>
        <stop offset="1" stop-color="#fff" stop-opacity="0"></stop>
      </linearGradient>
      <filter id="1752500502811-9294189_user_filter_nsyh9isk4" x="-100%" y="-100%" width="400%" height="400%" filterUnits="objectBoundingBox" primitiveUnits="userSpaceOnUse">
        <feGaussianBlur stdDeviation="2" x="0%" y="0%" width="100%" height="100%" in="SourceGraphic" edgeMode="none" result="blur"></feGaussianBlur>
      </filter>
      <clipPath id="1752500502811-9294189_user_clipPath_1jvvjoq1t">
        <path d="M12.4414 14C16.3397 14.0001 19.4999 17.1603 19.5 21.0586C19.5 22.1307 18.6307 23 17.5586 23H6.44141C5.36932 23 4.5 22.1307 4.5 21.0586C4.50012 17.1603 7.6603 14.0001 11.5586 14H12.4414ZM12 5C13.933 5 15.5 6.567 15.5 8.5C15.5 10.433 13.933 12 12 12C10.067 12 8.5 10.433 8.5 8.5C8.5 6.567 10.067 5 12 5Z" fill="url(#1752500502811-9294189_user_existing_1_bnqb6d6gm)"></path>
      </clipPath>
      <mask id="1752500502811-9294189_user_mask_s86i2afs5">
        <rect width="100%" height="100%" fill="#FFF"></rect>
        <path d="M12.4414 14C16.3397 14.0001 19.4999 17.1603 19.5 21.0586C19.5 22.1307 18.6307 23 17.5586 23H6.44141C5.36932 23 4.5 22.1307 4.5 21.0586C4.50012 17.1603 7.6603 14.0001 11.5586 14H12.4414ZM12 5C13.933 5 15.5 6.567 15.5 8.5C15.5 10.433 13.933 12 12 12C10.067 12 8.5 10.433 8.5 8.5C8.5 6.567 10.067 5 12 5Z" fill="#000"></path>
      </mask>
    </defs>
  </g>
</svg>
         <div class="column">
            <small class="opacity-07">Welcome Back</small>
            <strong class="font-size-1 font-weight-900">{{ Auth::guard('users')->user()->phone }}</strong>
        </div>
        {{-- currency toggle --}}
        <div x-data="{ 
            ShowToggle : false
         }" x-on:click="ShowToggle = !ShowToggle" class="w-fit c-text no-select pos-relative row align-center g-10px m-left-auto bg-light br-5px box-shadow p-10px">
        <div class="row align-center g-5px">
           <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 32 32">
  <g>
    <rect x="1" y="4" width="30" height="24" rx="4" ry="4" fill="#071b65"></rect>
    <path d="M5.101,4h-.101c-1.981,0-3.615,1.444-3.933,3.334L26.899,28h.101c1.981,0,3.615-1.444,3.933-3.334L5.101,4Z" fill="#fff"></path>
    <path d="M22.25,19h-2.5l9.934,7.947c.387-.353,.704-.777,.929-1.257l-8.363-6.691Z" fill="#b92932"></path>
    <path d="M1.387,6.309l8.363,6.691h2.5L2.316,5.053c-.387,.353-.704,.777-.929,1.257Z" fill="#b92932"></path>
    <path d="M5,28h.101L30.933,7.334c-.318-1.891-1.952-3.334-3.933-3.334h-.101L1.067,24.666c.318,1.891,1.952,3.334,3.933,3.334Z" fill="#fff"></path>
    <rect x="13" y="4" width="6" height="24" fill="#fff"></rect>
    <rect x="1" y="13" width="30" height="6" fill="#fff"></rect>
    <rect x="14" y="4" width="4" height="24" fill="#b92932"></rect>
    <rect x="14" y="1" width="4" height="30" transform="translate(32) rotate(90)" fill="#b92932"></rect>
    <path d="M28.222,4.21l-9.222,7.376v1.414h.75l9.943-7.94c-.419-.384-.918-.671-1.471-.85Z" fill="#b92932"></path>
    <path d="M2.328,26.957c.414,.374,.904,.656,1.447,.832l9.225-7.38v-1.408h-.75L2.328,26.957Z" fill="#b92932"></path>
    <path d="M27,4H5c-2.209,0-4,1.791-4,4V24c0,2.209,1.791,4,4,4H27c2.209,0,4-1.791,4-4V8c0-2.209-1.791-4-4-4Zm3,20c0,1.654-1.346,3-3,3H5c-1.654,0-3-1.346-3-3V8c0-1.654,1.346-3,3-3H27c1.654,0,3,1.346,3,3V24Z" opacity=".15"></path>
    <path d="M27,5H5c-1.657,0-3,1.343-3,3v1c0-1.657,1.343-3,3-3H27c1.657,0,3,1.343,3,3v-1c0-1.657-1.343-3-3-3Z" fill="#fff" opacity=".2"></path>
  </g>
</svg>  <span class="uppercase">ENGLISH</span>
        </div>
        <i>
            <svg viewBox="0 0 24 24" fill="CurrentColor" xmlns="http://www.w3.org/2000/svg" height="20" width="20"><path d="M11.9999 13.1714L16.9497 8.22168L18.3639 9.63589L11.9999 15.9999L5.63599 9.63589L7.0502 8.22168L11.9999 13.1714Z"></path></svg>

        </i>
        {{-- positioned div --}}
        <div x-transition:leave-start="height-leave" x-transition:leave-end="height-leave-end" x-transition:enter-start="height-enter" x-transition:enter-end="height-enter-end" x-show="ShowToggle" x-on:click.stop="" class="pos-absolute overflow-hidden box-shadow z-index-2000 top-full left-0 bg-light right-0 br-5px transition-all column">
            {{-- new --}}
            <div x-on:click="Vitecss.navigate('{{ url('users/about/us') }}')" x-on:touchstart="$el.classList.add('bg-rgt-003')" x-on:touchend="$el.classList.remove('bg-rgt-003')" class="row  pc-pointer p-10px align-center g-5px">
<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 32 32">
  <g fill="currentColor" stroke-linejoin="miter" stroke-linecap="butt">
    <rect x="3" y="3" width="26" height="26" rx="3" ry="3" fill="none" stroke="currentColor" stroke-linecap="square" stroke-miterlimit="10" stroke-width="2"></rect>
    <path d="m16,23v-8.5c0-.828-.672-1.5-1.5-1.5h-1.5" fill="none" stroke="currentColor" stroke-linecap="square" stroke-miterlimit="10" stroke-width="2"></path>
    <circle cx="16" cy="8.5" r=".5" fill="currentColor" stroke="currentColor" stroke-linecap="square" stroke-miterlimit="10" stroke-width="2"></circle>
  </g>
</svg>
            <span>About Us</span>
        </div>
         {{-- new --}}
            <div x-on:click="window.location.href='{{ url('users/logout') }}'" x-on:touchstart="$el.classList.add('bg-rgt-003')" x-on:touchend="$el.classList.remove('bg-rgt-003')" class="row pc-pointer p-10px align-center g-5px">
<svg viewBox="0 0 24 24" fill="CurrentColor" xmlns="http://www.w3.org/2000/svg" height="20" width="20"><path d="M12 22C6.47715 22 2 17.5228 2 12C2 6.47715 6.47715 2 12 2C15.2713 2 18.1757 3.57078 20.0002 5.99923L17.2909 5.99931C15.8807 4.75499 14.0285 4 12 4C7.58172 4 4 7.58172 4 12C4 16.4183 7.58172 20 12 20C14.029 20 15.8816 19.2446 17.2919 17.9998L20.0009 17.9998C18.1765 20.4288 15.2717 22 12 22ZM19 16V13H11V11H19V8L24 12L19 16Z"></path></svg>

            <span>Logout</span>
        </div>
        </div>
        </div>
       </div>
    </header>

      @endif
    <main>
        
        {{-- yield main --}}
        @yield('main')
    </main>
    <footer class="bg-primary no-select primary-text border-top-width-1px border-top-color-rgt-01 border-top-style-solid pos-fixed bottom-0 left-0 right-0 row g-10px align-center space-between">
        {{-- new nav link --}}
        <div onclick="Redirect('{{ url('users/dashboard') }}',this)" class="column pc-pointer p-10px p-y-5px align-center w-full {{ url()->current() == url('users/dashboard') ? 'bg-primary-dark' : '' }} g-2px">
            <span>
<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 12 12">
  <g fill="currentColor">
    <path d="m10.738,2.881L6.988.315c-.6-.41-1.376-.41-1.976,0L1.262,2.881s0,0,0,0c-.477.326-.762.866-.762,1.444v4.425c0,1.516,1.233,2.75,2.75,2.75h2v-2.75c0-.414.336-.75.75-.75s.75.336.75.75v2.75h2c1.517,0,2.75-1.234,2.75-2.75v-4.425c0-.578-.285-1.118-.762-1.444Z" stroke-width="0" fill="currentColor"></path>
  </g>
</svg>
            </span>
            <small>Home</small>
        </div>
          {{-- new nav link --}}
        <div onclick="Redirect('{{ url('users/products/active') }}',this)" class="column pc-pointer p-10px p-y-5px align-center w-full {{ url()->current() == url('users/products/active') ? 'bg-primary-dark' : '' }} g-2px">
            <span>

<svg viewBox="0 0 24 24" fill="CurrentColor" xmlns="http://www.w3.org/2000/svg" height="20" width="20"><path d="M13.9461 2.09411C12.8248 1.13855 11.1756 1.13856 10.0544 2.0941L8.70636 3.24286C8.54619 3.37935 8.34705 3.46183 8.13728 3.47857L6.3718 3.61946C4.90327 3.73665 3.73714 4.90278 3.61995 6.3713L3.47907 8.13678C3.46234 8.34654 3.37983 8.54573 3.24334 8.70589L2.09458 10.0539C1.13904 11.1752 1.13905 12.8243 2.0946 13.9455L3.24336 15.2936C3.37983 15.4538 3.46232 15.6529 3.47906 15.8627L3.61997 17.6281C3.73716 19.0966 4.9033 20.2627 6.37184 20.3799L8.13729 20.5209C8.34705 20.5376 8.54615 20.6201 8.70631 20.7566L10.0543 21.9053C11.1756 22.8608 12.8248 22.8609 13.9461 21.9053L15.2941 20.7566C15.4542 20.6201 15.6533 20.5376 15.8631 20.5208L17.6286 20.3799C19.0971 20.2628 20.2632 19.0967 20.3805 17.6281L20.5213 15.8627C20.538 15.6529 20.6206 15.4537 20.757 15.2935L21.9058 13.9456C22.8614 12.8243 22.8614 11.1751 21.9058 10.0539L20.757 8.70585C20.6205 8.54568 20.5381 8.34654 20.5214 8.13679L20.3805 6.37131C20.2633 4.9028 19.0971 3.73663 17.6286 3.61945L15.8631 3.47856C15.6533 3.46182 15.4542 3.37935 15.2941 3.24286L13.9461 2.09411ZM14.8284 7.75718L16.2426 9.1714L9.17151 16.2425L7.7573 14.8282L14.8284 7.75718ZM10.2322 10.232C9.64638 10.8178 8.69664 10.8178 8.11085 10.232C7.52506 9.6463 7.52506 8.69652 8.11085 8.11073C8.69664 7.52494 9.64638 7.52494 10.2322 8.11073C10.818 8.69652 10.818 9.6463 10.2322 10.232ZM13.7677 15.8889C13.1819 15.3031 13.1819 14.3534 13.7677 13.7676C14.3535 13.1818 15.3032 13.1818 15.889 13.7676C16.4748 14.3534 16.4748 15.3031 15.889 15.8889C15.3032 16.4747 14.3535 16.4747 13.7677 15.8889Z"></path></svg>

            </span>
            <small>Shares</small>
        </div>
         {{-- new nav link --}}
        <div onclick="Redirect('{{ url('users/recharge') }}',this)" class="column p-10px pc-pointer p-y-5px align-center w-full {{ url()->current() == url('users/recharge') ? 'bg-primary-dark' : '' }} g-2px">
            <span>
<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24">
  <g fill="currentColor">
    <path d="m12,1C5.935,1,1,5.935,1,12s4.935,11,11,11,11-4.935,11-11S18.065,1,12,1Zm5,12h-4v4h-2v-4h-4v-2h4v-4h2v4h4v2Z" stroke-width="0" fill="currentColor"></path>
  </g>
</svg>
         </span>
            <small>Deposit</small>
        </div>
          {{-- new nav link --}}
        <div onclick="Redirect('{{ url('users/invite') }}',this)" class="column align-center pc-pointer p-y-5px p-10px w-full {{ url()->current() == url('users/invite') ? 'bg-primary-dark' : '' }} g-2px">
            <span>
<svg viewBox="0 0 24 24" fill="CurrentColor" xmlns="http://www.w3.org/2000/svg" height="20" width="20"><path d="M13.5759 17.2714L8.46576 14.484C7.83312 15.112 6.96187 15.5 6 15.5C4.067 15.5 2.5 13.933 2.5 12C2.5 10.067 4.067 8.5 6 8.5C6.96181 8.5 7.83301 8.88796 8.46564 9.51593L13.5759 6.72855C13.5262 6.49354 13.5 6.24983 13.5 6C13.5 4.067 15.067 2.5 17 2.5C18.933 2.5 20.5 4.067 20.5 6C20.5 7.933 18.933 9.5 17 9.5C16.0381 9.5 15.1669 9.11201 14.5343 8.48399L9.42404 11.2713C9.47382 11.5064 9.5 11.7501 9.5 12C9.5 12.2498 9.47383 12.4935 9.42408 12.7285L14.5343 15.516C15.167 14.888 16.0382 14.5 17 14.5C18.933 14.5 20.5 16.067 20.5 18C20.5 19.933 18.933 21.5 17 21.5C15.067 21.5 13.5 19.933 13.5 18C13.5 17.7502 13.5262 17.5064 13.5759 17.2714Z"></path></svg>

            </span>
            <small>Invite</small>
        </div>
          {{-- new nav link --}}
        <div onclick="Redirect('{{ url('users/profile') }}',this)" class="column align-center pc-pointer p-y-5px p-10px w-full {{ url()->current() == url('users/profile') ? 'bg-primary-dark' : '' }} g-2px">
            <span>
<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20">
  <g fill="currentColor">
    <circle cx="10" cy="5.5" r="2.5" fill="currentColor" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></circle>
    <path d="m14.664,16.455c.947-.221,1.469-1.303.991-2.15-1.114-1.973-3.227-3.305-5.655-3.305s-4.541,1.332-5.655,3.305c-.478.847.044,1.929.991,2.15,3.11.727,6.219.727,9.329,0Z" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" fill="currentColor"></path>
  </g>
</svg>
</span>
            <small>Mine</small>
        </div>
    </footer>
  {{-- yield js --}}
    @yield('js')
    {{-- stack js --}}
    @stack('js')
    
</body>
</html>