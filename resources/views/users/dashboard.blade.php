@extends('layout.users.app')
@section('title')
    Dashboard
@endsection
@section('css')
    <style class="css">
            .nav-links{
            user-select:none;
            -webkit-user-select:none;
            }
            .nav-links > div{
            display:flex;
            flex-direction: column;
            align-items:center;
            justify-content:center;
            width:100%;
            gap:5px;
            text-align: center;
            cursor: pointer;
            font-weight:600;
            }
            .nav-links .icon{
            width:50px;
            aspect-ratio:1;
            flex-shrink: 0;
            border-radius:50%;
            display:flex;
            align-items: center;
            justify-content: center;
            }
            .quick-actions{
            width:100%;
            padding:10px;
            border-radius:5px;
            display: flex;
            flex-direction: column;
            gap:10px;
            position: relative;
            overflow:hidden;


            }
            .quick-actions::after{
            content:'';
            position: absolute;
            bottom:0;
            right:0;
            width:50%;
            background:rgba(255,255,255,0.1);
            z-index:10;

            }
            .quick-actions > div{
            position: relative;
            z-index:100;

            }
            .package-card{
            width: 100%;
            border-radius:10px;
            overflow:hidden;
            background:var(--bg-light);
            padding:10px;


            }
            .package-card .img{
            /* max-height: 200px; */
            overflow:hidden;
            position: relative;
            border-radius:10px;
            height:100%;
            background-size:cover;
            background-position: center;
            padding-top:50%;
            }
            .package-card .img > div{
            position: relative;
            z-index:100;
            color:white;
            }
            .package-card .img::after{
            content:'';
            position: absolute;
            bottom:0;
            left:0;
            right:0;
            background:linear-gradient(to top,var(--bg-light) 0%,rgba(var(--bg-light-rgb),0.8) 65%,rgba(var(--bg-light-rgb),0.1) 100%);
            overflow:hidden;
            height:100%;
            z-index:10;
            width:100%;

            }
            .welcome-message{
            position:fixed;
            inset:0;
            background:rgba(0,0,0,0.2);
            z-index:4000;
            backdrop-filter: blur(10px);
            -webkit-backdrop-filter: blur(10px);
            padding:20px;
            display: flex;
            align-items:center;
            justify-content: center;
            flex-direction: column;
            display:none;
            }
            .welcome-message.active{
            display:flex;
            }

            .welcome-message  .child{
            width:100%;
            max-width:500px;
            background:var(--bg);
            padding:20px;
            border-radius:5px;
            max-height:70%;
            display:flex;
            flex-direction:column;
            gap:10px;
            }
            .welcome-message  .child.active{
            animation:bounceInDown 2s ease forwards;
            }
            .welcome-message  .child.inactive{
            animation:zoomInDown 2s ease reverse forwards;
            }



            body:has(.welcome-message.active){
            overflow: hidden;
            }

            div.banner{
            width:100%;
            position:relative;



            }
           .glitch-button,
           .glitch-button::after {
            padding: 16px 20px;
            font-size: 0.8rem;
            background: linear-gradient(45deg, transparent 5%, var(--secondary) 5%);
            border: 0;
            color: #fff;
            letter-spacing: 3px;
            line-height: 1;
            box-shadow: 6px 0px 0px var(--primary-light);
            outline: transparent;
            position: relative;
            width:100%;
            }

           .glitch-button::after {
            --slice-0: inset(50% 50% 50% 50%);
            --slice-1: inset(80% -6px 0 0);
            --slice-2: inset(50% -6px 30% 0);
            --slice-3: inset(10% -6px 85% 0);
            --slice-4: inset(40% -6px 43% 0);
            --slice-5: inset(80% -6px 5% 0);
            content: "HOVER ME";
            display: block;
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: linear-gradient(45deg, transparent 3%, var(--primary-light) 3%, var(--primary-light) 5%, var(--secondary) 5%);
            text-shadow: -3px -3px 0px var(--secondary), 3px 3px 0px var(--primary-light);
            clip-path: var(--slice-0);
            }

           .glitch-button:hover::after {
            animation: 1s glitch;
            animation-timing-function: steps(2, end);
            }

            @keyframes glitch {
            0% {
            clip-path: var(--slice-1);
            transform: translate(-20px, -10px);
            }

            10% {
            clip-path: var(--slice-3);
            transform: translate(10px, 10px);
            }

            20% {
            clip-path: var(--slice-1);
            transform: translate(-10px, 10px);
            }

            30% {
            clip-path: var(--slice-3);
            transform: translate(0px, 5px);
            }

            40% {
            clip-path: var(--slice-2);
            transform: translate(-5px, 0px);
            }

            50% {
            clip-path: var(--slice-3);
            transform: translate(5px, 0px);
            }

            60% {
            clip-path: var(--slice-4);
            transform: translate(5px, 10px);
            }

            70% {
            clip-path: var(--slice-2);
            transform: translate(-10px, 10px);
            }

            80% {
            clip-path: var(--slice-5);
            transform: translate(20px, -10px);
            }

            90% {
            clip-path: var(--slice-1);
            transform: translate(-10px, 0px);
            }

            100% {
            clip-path: var(--slice-1);
            transform: translate(0);
            }
            }


            /* media query for pc */
            @media(min-width:800px){
            img[alt=Banner]{
            max-height:150px;
            max-width:500px;
            margin:auto;
            }
            .quick-actions{
            max-width:70%;

            }
            }
           

            button.action-button {
  border-radius: .25rem;
  text-transform: uppercase;
  font-style: normal;
  font-weight: 400;
  padding-left: 20px;
  padding-right: 20px;
  -webkit-clip-path: polygon(0 0,0 0,100% 0,100% 0,100% calc(100% - 15px),calc(100% - 15px) 100%,15px 100%,0 100%);
  clip-path: polygon(0 0,0 0,100% 0,100% 0,100% calc(100% - 15px),calc(100% - 15px) 100%,15px 100%,0 100%);
  height: 40px;
  font-size: 0.7rem;
  line-height: 14px;
  transition: .2s .1s;
  background-image: linear-gradient(90deg,var(--primary-text),var(--primary-text));
  color:var(--primary);
  border: 0 solid;
  overflow: hidden;
  white-space: nowrap;
}

button.action-button:hover {
  cursor: pointer;
  transition: all .3s ease-in;
  padding-right:25px;
  padding-left: 25px;
}
          
    </style>
@endsection
@section('main')

    <section x-data="{ 
        Overlay : false,
        Package : {
            ID : '',
            Name : '',
        },
         Populate : false
     }" x-init="
    //  document.body.classList.add('overflow-hidden');
     $watch('Overlay', (value) => {
        if(value){
            document.body.classList.add('overflow-hidden');
        }else{
            document.body.classList.remove('overflow-hidden');


        }
     });
     $watch('Populate', (value) => {
        if(value){
            document.body.classList.add('overflow-hidden')
        }else{
            document.body.classList.remove('overflow-hidden')

        }
     })
     " class="w-full column">
     {{-- modal --}}
     <section x-show="Populate" x-transition:leave-start="fade-leave" x-transition:leave-end="fade-leave-end" x-on:click="
     Populate = false;
     " class="pos-fixed transition-all p-20px column align-center justify-center inset-0 bg-black-transparent z-index-3000 backdrop-blur-5px">
        <div x-on:click.stop="" style="max-width:500px;max-height:90%;" class="w-full overflow-hidden h-fit bg br-10px column align-center">
            {{-- head --}}
            <div class="p-20px w-full column g-10px align-center">
               <div x-on:click="Populate = false;" class="h-30px pc-pointer m-left-auto perfect-square circle bg-rgt-01 column align-center justify-center">
                <svg viewBox="0 0 24 24" fill="CurrentColor" xmlns="http://www.w3.org/2000/svg" height="20" width="20"><path d="M11.9997 10.5865L16.9495 5.63672L18.3637 7.05093L13.4139 12.0007L18.3637 16.9504L16.9495 18.3646L11.9997 13.4149L7.04996 18.3646L5.63574 16.9504L10.5855 12.0007L5.63574 7.05093L7.04996 5.63672L11.9997 10.5865Z"></path></svg>

               </div>
            <img src="{{ asset(config('settings.logo')) }}" alt="" class="h-100px">
                <strong class="font-size-1 text-center font-weight-900">✨Welcome to {{ config('app.name') }} official platform✨</strong>

            </div>
            {{-- body --}}
            <div class="w-full overflow-auto border-top-width-1px border-top-style-solid border-top-color-rgt-01 border-bottom-width-1px border-bottom-style-solid border-bottom-color-rgt-01 bg-rgt-003 p-20px column g-10px">
            {{-- new --}}
            <div class="font-weight-800">💵 Welcome Bonus: {{ $CurrencyHelper::format($finance_settings->welcome_bonus,'NGN',$display_currency) }}</div>
            <div class="font-weight-800">🎁 Daily Gift code: up to {{ $CurrencyHelper::format(1000,'NGN',$display_currency) }}</div>
            <div class="font-weight-800">🔥 Referral Bonus: up to {{ $CurrencyHelper::format(1000000,'NGN',$display_currency) }}</div>
            <div class="font-weight-800">🔥 Earn up to {{ number_format($referral_settings->level_1) }}% commission through referral program</div>
            <div class="font-weight-800">🔥 The more members in your team, the higher your earnings! the larger your team size, the greater the rewards!</div>
            </div>
            <div class="w-full pos-sticky bottom-0 column p-20px g-10px">
                <button x-on:click="window.open('{{ $social_settings->telegram_community }}')" class="btn-telegram p-10px br-10px">Join Telegram</button>
                <button x-on:click="window.open('{{ $social_settings->whatsapp_community }}')" class="btn-whatsapp p-10px br-10px">Join Whatsapp</button>
            </div>

        </div>
     </section>
     {{-- main section --}}
       <section x-ref="Group" class="w-full g-10px column transition-all group">
    
        <div x-data="{ 
            HideBalance : $persist(false).as('dashboard-balance')
          }" style="background:linear-gradient(to bottom right,var(--primary),var(--primary-light));color:var(--primary-text)" class="w-full p-bottom-2px g-10px br-10px column p-20px">
            {{-- new row --}}
            <div class="w-full row align-center g-10px space-between">
                <span class="opacity-08">AVAILABLE BALANCE</span>
                <span x-on:click="Vitecss.navigate('{{ url('users/transactions') }}')" class="font-size-07 pc-pointer row no-select align-center opacity-08">
                    Transaction History
                    <svg viewBox="0 0 24 24" fill="CurrentColor" xmlns="http://www.w3.org/2000/svg" height="14" width="14"><path d="M16.1716 10.9999L10.8076 5.63589L12.2218 4.22168L20 11.9999L12.2218 19.778L10.8076 18.3638L16.1716 12.9999H4V10.9999H16.1716Z"></path></svg>

                </span>
            </div>
            {{-- new row --}}
            <div class="w-full row align-center g-10px space-between">
              <div class="row align-center g-10px">
                   <strong x-show="!HideBalance" class="font-size-1-3 font-weight-900">
            {{ $total_balance }}
        </strong>
<strong x-show="HideBalance" class="font-size-1 font-weight-900">****</strong>
<i class="opacity-07 pc-pointer" x-on:click="HideBalance = !HideBalance">
<svg x-show="!HideBalance" viewBox="0 0 24 24" fill="CurrentColor" xmlns="http://www.w3.org/2000/svg" height="16" width="16"><path d="M12.0003 3C17.3924 3 21.8784 6.87976 22.8189 12C21.8784 17.1202 17.3924 21 12.0003 21C6.60812 21 2.12215 17.1202 1.18164 12C2.12215 6.87976 6.60812 3 12.0003 3ZM12.0003 19C16.2359 19 19.8603 16.052 20.7777 12C19.8603 7.94803 16.2359 5 12.0003 5C7.7646 5 4.14022 7.94803 3.22278 12C4.14022 16.052 7.7646 19 12.0003 19ZM12.0003 16.5C9.51498 16.5 7.50026 14.4853 7.50026 12C7.50026 9.51472 9.51498 7.5 12.0003 7.5C14.4855 7.5 16.5003 9.51472 16.5003 12C16.5003 14.4853 14.4855 16.5 12.0003 16.5ZM12.0003 14.5C13.381 14.5 14.5003 13.3807 14.5003 12C14.5003 10.6193 13.381 9.5 12.0003 9.5C10.6196 9.5 9.50026 10.6193 9.50026 12C9.50026 13.3807 10.6196 14.5 12.0003 14.5Z"></path></svg>
<svg x-show="HideBalance" viewBox="0 0 24 24" fill="CurrentColor" xmlns="http://www.w3.org/2000/svg" height="16" width="16"><path d="M9.34268 18.7819L7.41083 18.2642L8.1983 15.3254C7.00919 14.8874 5.91661 14.2498 4.96116 13.4534L2.80783 15.6067L1.39362 14.1925L3.54695 12.0392C2.35581 10.6103 1.52014 8.87466 1.17578 6.96818L3.14386 6.61035C3.90289 10.8126 7.57931 14.0001 12.0002 14.0001C16.4211 14.0001 20.0976 10.8126 20.8566 6.61035L22.8247 6.96818C22.4803 8.87466 21.6446 10.6103 20.4535 12.0392L22.6068 14.1925L21.1926 15.6067L19.0393 13.4534C18.0838 14.2498 16.9912 14.8874 15.8021 15.3254L16.5896 18.2642L14.6578 18.7819L13.87 15.8418C13.2623 15.9459 12.6376 16.0001 12.0002 16.0001C11.3629 16.0001 10.7381 15.9459 10.1305 15.8418L9.34268 18.7819Z"></path></svg>

            </i>
              </div>
              {{-- btn --}}
            <button style="background: var(--secondary);color:var(--secondary-text)" x-on:click="Vitecss.navigate('{{ url('users/recharge') }}')" class="action-button">
                 DEPOSIT
            </button>
            </div>
            {{-- new row --}}
            <div class="w-full p-20px column g-5px br-top-right-10px br-top-left-10px bg-secondary secondary-text">
                {{-- new row --}}
                 {{-- new row --}}
            <div class="row w-full align-center space-between g-10px">
                <span class="opacity-07 font-size-07 font-weight-800 uppercase text-shadow">Deposit</span>
<strong x-show="!HideBalance" class="font-weight-900">{{ $deposit_balance }}</strong>
<strong x-show="HideBalance" class="font-weight-900">****</strong>
            </div>
             {{-- new row --}}
            <div class="row w-full align-center space-between g-10px">
                <span class="opacity-07 font-size-07 font-weight-800 uppercase text-shadow">Withdrawal</span>
<strong x-show="!HideBalance" class="font-weight-900">{{ $main_balance }}</strong>
<strong x-show="HideBalance" class="font-weight-900">****</strong>
            </div>
            </div>
        </div>

       


        {{-- quick links --}}
        <div x-data="{  }" class="w-full bg-light p-15px br-10px row align-center g-10px">
          {{-- new column --}}
          <div x-on:click="Vitecss.navigate('{{ url('users/about/us') }}')" class="column g-5px w-full align-center pc-pointer">
               <div style="background:linear-gradient(to bottom right,var(--primary),var(--primary-light));color:white;" class="column box-shadow w-50px perfect-square br-10px bg-rgt-005 align-center justify-center">
<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 32 32">
  <g fill="currentColor">
    <path d="m26,2H6c-2.206,0-4,1.794-4,4v20c0,2.206,1.794,4,4,4h20c2.206,0,4-1.794,4-4V6c0-2.206-1.794-4-4-4Zm-9,22h-2v-9.5c0-.276-.225-.5-.5-.5h-2.5v-2h2.5c1.379,0,2.5,1.122,2.5,2.5v9.5Zm-1-14c-.827,0-1.5-.673-1.5-1.5s.673-1.5,1.5-1.5,1.5.673,1.5,1.5-.673,1.5-1.5,1.5Z" stroke-width="0" fill="currentColor"></path>
  </g>
</svg>

</div>
            <span class="font-weight-700 font-size-07">About Us</span>
          </div>
           {{-- new column --}}
          <div x-on:click="Vitecss.navigate('{{ url('users/withdraw') }}')" class="column g-5px w-full align-center pc-pointer">
             <div style="background:linear-gradient(to bottom right,var(--primary),var(--primary-light));color:white;" class="column box-shadow w-50px perfect-square br-10px bg-rgt-005 align-center justify-center">
<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 18 18">
  <g fill="currentColor"><path fill-rule="evenodd" clip-rule="evenodd" d="M11.8952 2.61429C12.0034 2.59589 12.1118 2.65071 12.1612 2.74939L11.8952 2.61429ZM11.8952 2.61429L5.33339 3.73425C5.33332 3.73426 5.33345 3.73424 5.33339 3.73425C3.98557 3.96477 3 5.13263 3 6.49998C3 6.91419 2.66421 7.24998 2.25 7.24998C1.83579 7.24998 1.5 6.91419 1.5 6.49998C1.5 4.40139 3.01253 2.60926 5.08061 2.2557L11.6428 1.13567C12.4025 1.00613 13.1582 1.38928 13.5028 2.07857C13.6881 2.44905 13.5379 2.89956 13.1674 3.0848C12.7969 3.27004 12.3464 3.11987 12.1612 2.74939" fill="currentColor"></path> <path d="M16.5 11.5H14C13.172 11.5 12.5 10.828 12.5 10C12.5 9.172 13.172 8.5 14 8.5H16.5C17.052 8.5 17.5 8.948 17.5 9.5V10.5C17.5 11.052 17.052 11.5 16.5 11.5Z" fill="currentColor"></path> <path d="M16.5 13H14C12.3436 13 11 11.6564 11 10C11 8.34357 12.3436 7 14 7H16.5V6.75C16.5 5.233 15.267 4 13.75 4H4.25C2.733 4 1.5 5.233 1.5 6.75V13.25C1.5 14.767 2.733 16 4.25 16H13.75C15.267 16 16.5 14.767 16.5 13.25V13Z" fill="currentColor"></path></g>
</svg>

            </div>
            <span class="font-weight-700 font-size-07">Withdraw</span>
          </div>
           {{-- new column --}}
          <div x-on:click="Vitecss.navigate('{{ url('users/transactions') }}')" class="column g-5px w-full align-center pc-pointer">
             <div style="background:linear-gradient(to bottom right,var(--primary),var(--primary-light));color:white;" class="column box-shadow w-50px perfect-square br-10px bg-rgt-005 align-center justify-center">
<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20">
  <g fill="currentColor">
    <polygon points="4.367 3.044 3.771 6.798 7.516 6.145 4.367 3.044" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" fill="currentColor"></polygon>
    <polyline points="10 7 10 10 12 12" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></polyline>
    <path d="m5,5.101c1.271-1.297,3.041-2.101,5-2.101,3.866,0,7,3.134,7,7s-3.134,7-7,7c-3.526,0-6.444-2.608-6.929-6" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></path>
  </g>
</svg>
            </div>
            <span class="font-weight-700 font-size-07">Records</span>
          </div>
          {{-- new column --}}
          <div x-on:click="Vitecss.navigate('{{ url('users/referrals') }}')" class="column g-5px w-full align-center pc-pointer">
             <div style="background:linear-gradient(to bottom right,var(--primary),var(--primary-light));color:white;" class="column box-shadow w-50px perfect-square br-10px bg-rgt-005 align-center justify-center">
<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 18 18">
  <g fill="currentColor"><path fill-rule="evenodd" clip-rule="evenodd" d="M0.554137 13.5756C1.34525 11.476 3.36866 9.97803 5.74997 9.97803C8.13128 9.97803 10.1547 11.476 10.9458 13.5756C11.3059 14.5316 10.7272 15.5154 9.84596 15.8103C8.82613 16.1509 7.42657 16.477 5.75097 16.477C4.0754 16.477 2.67527 16.1511 1.65458 15.8105C0.771586 15.5163 0.194851 14.5312 0.554137 13.5756Z" fill="currentColor"></path> <path d="M12.5523 13.9774C13.9847 13.9162 15.1901 13.6251 16.096 13.3225C16.9772 13.0276 17.5559 12.0438 17.1958 11.0878C16.4047 8.98817 14.3813 7.49023 12 7.49023C10.5581 7.49023 9.24737 8.03945 8.26202 8.9389C10.147 9.65833 11.6398 11.1634 12.3495 13.0469C12.4675 13.3603 12.5329 13.6726 12.5523 13.9774Z" fill="currentColor"></path> <path d="M5.75 8.50049C6.99267 8.50049 8 7.49361 8 6.25049C8 5.00736 6.99267 4.00049 5.75 4.00049C4.50733 4.00049 3.5 5.00736 3.5 6.25049C3.5 7.49361 4.50733 8.50049 5.75 8.50049Z" fill="currentColor"></path> <path d="M12 6.00049C13.2427 6.00049 14.25 4.99361 14.25 3.75049C14.25 2.50736 13.2427 1.50049 12 1.50049C10.7573 1.50049 9.75 2.50736 9.75 3.75049C9.75 4.99361 10.7573 6.00049 12 6.00049Z" fill="currentColor"></path></g>
</svg>


            </div>
            <span class="font-weight-700 font-size-07">Referrals</span>
          </div>
            
        </div>
      

        {{-- group --}}
        <section x-data="{ 
            Products : $persist('savings')
         }" class="w-full column g-10">
     
     
         
            <div class="column w-full no-select align-center w-full g-5px">
              <div class="row w-full align-center justify-center g-5px">
                <div class="column w-50 g-5px">
                    <div style="transform:rotate(180deg);clip-path:polygon(0 0,100% 50%,0 100%);border-radius:1000px;" class="w-full h-5px bg-primary"></div>
                    <div style="transform:rotate(180deg);clip-path:polygon(0 0,100% 50%,0 100%);border-radius:1000px;" class="w-semi-full m-left-auto h-5px bg-primary"></div>
                
                </div>
            <div style="width:100% !important;" class="p-5px row w-full align-center font-weight-900 br-1000px border-width-1px border-style-solid border-color-secondary">
               <div x-bind:style="Products == 'vip' ? {
                'background' : 'var(--primary)',
                'color' : 'var(--primary-text)'
               } : {}" x-on:click="Products = 'vip'" class="w-full font-size-07rem ws-nowrap br-inherit p-10px h-full row align-center justify-center">
                DAILY SHARES
               </div>
               <div  x-bind:style="Products == 'savings' ? {
                'background' : 'var(--primary)',
                'color' : 'var(--primary-text)'
               } : {}" x-on:click="Products = 'savings'" class="w-full font-size-07rem ws-nowrap br-inherit p-10px h-full row align-center justify-center">
                FIXED SHARES
               </div>
            </div>
             <div class="column w-50 g-5px">
                    <div style="clip-path:polygon(0 0,100% 50%,0 100%);border-radius:1000px;" class="w-full h-5px bg-primary"></div>
                    <div style="clip-path:polygon(0 0,100% 50%,0 100%);border-radius:1000px;" class="w-semi-full m-right-auto h-5px bg-primary"></div>
                
                </div>
              </div>
            <small>CHOOSE A SHARE THAT SUITES YOUR GOALS</small>
              
            </div>
        @if (!$packages->isEmpty())
            {{-- ========== VIP PRODUCTS ========== --}}
        <div x-show="Products == 'vip'" class="grid pc-grid-2 g-20 w-full">
         @foreach ($packages as $data)
          <div style="overflow-x: hidden" class="w-full p-1px bg-primary h-fit column box-shadow br-10px">
            {{-- new row --}}
            <div class="row w-full p-5px g-10px p-x-15px pos-relative primary-text align-center">
                <img src="{{ asset('packages/IMG_2002.jpeg') }}" alt="" class="h-full no-select no-pointer h-40px w-40px">
                <strong x-bind:style="{
                    'margin-left' : `${$el.closest('div').querySelector('.icon').offsetWidth + 10}px`
                }" class="font-weight-900 font-size-1rem uppercase">{{ $data->name }}</strong>
            </div>
            {{-- new row --}}
            <div class="bg-light br-top-right-15px br-top-left-15px br-bottom-right-10px br-bottom-left-10px p-15px ">
              
                {{-- new --}}
                <div class="column flex-auto overflow-hidden g-10px">
                    <div class="row align-center g-10 space-between w-full">
                    <strong class="font-weight-800 uppercase">Duration</strong>
                    <div class="p-5 p-x-10px bg-primary-light primary-text font-size-05 br-5 no-select font-weight-900">{{ number_format($data->validity) }} days</div>
                    </div>
                    {{-- new row --}}
                    <div class="row w-full align-center g-10px space-between">
                        <span class="opacity-08">Investment</span>
                        <strong class="font-weight-900 w-fit text-overflow-ellipsis c-primary-darker font-size-1">{{ $CurrencyHelper::format($data->cost,'NGN',Auth::guard('users')->user()->display_currency,0) }}</strong>
                    </div>
                    {{-- new row --}}
                    <div class="row w-full align-center g-10px space-between">
                        <span class="opacity-08">Daily Income</span>
                        <strong class="font-weight-900 w-fit text-overflow-ellipsis c-primary-darker font-size-1">{{ $CurrencyHelper::format($data->earning,'NGN',Auth::guard('users')->user()->display_currency,0) }}</strong>
                    </div>
                       {{-- new row --}}
                    <div class="row w-full align-center g-10px space-between">
                        <span class="opacity-08">Total Income</span>
                        <strong class="font-weight-900 w-fit text-overflow-ellipsis c-primary-darker font-size-1">{{ $CurrencyHelper::format($data->earning * $data->validity,'NGN',Auth::guard('users')->user()->display_currency,0) }}</strong>
                    </div>
                    <div style="border-color:var(--primary)" class="hr" vitecss-type="dashed"></div>
                    <small class="text-align-center c-primary font-weight-900">Profit drops everyday</small>
                   
                  
                    @if ($data->coming_soon == 'true')
                      <div class="w-full filter-grayscale-100 uppercase font-weight-900 br-10px h-40px  bg-primary primary-text row align-center justify-center no-select no-pointer">
                        Coming Soon
                    </div>  
                    @else
                          <div x-on:click="
                    Overlay = true;
                    Package.ID = '{{ $data->id }}';
                    Package.Name='{{ $data->name }}';
                    " class="p-10 br-5px h-50px p-x-10px font-weight-900 uppercase bg-primary primary-text row align-center justify-center bg-primary no-select pointer">
                    BUY SHARE
                    </div>
                    @endif
                </div>
            </div>
           
          </div>
        @endforeach
       </div>


        @endif
         @if (!$savings->isEmpty())
            {{-- ========== SAVINGS PRODUCTS ========== --}}
        <div x-show="Products == 'savings'" class="grid pc-grid-2 g-20 w-full">
         @foreach ($savings as $data)
          <div style="overflow-x: hidden" class="w-full p-1px bg-primary h-fit column box-shadow br-10px">
            {{-- new row --}}
            <div class="row w-full p-5px g-10px p-x-15px pos-relative primary-text align-center">
                <img src="{{ asset('packages/IMG_2003.jpeg') }}" alt="" class="h-full no-select no-pointer h-40px w-40px">
                <strong x-bind:style="{
                    'margin-left' : `${$el.closest('div').querySelector('.icon').offsetWidth + 10}px`
                }" class="font-weight-900 font-size-1rem uppercase">{{ $data->name }}</strong>
            </div>
            {{-- new row --}}
            <div class="bg-light br-top-right-15px br-top-left-15px br-bottom-right-10px br-bottom-left-10px p-15px ">
              
                {{-- new --}}
                <div class="column flex-auto overflow-hidden g-10px">
                    <div class="row align-center g-10 space-between w-full">
                    <strong class="font-weight-800 uppercase">Duration</strong>
                    <div class="p-5 p-x-10px bg-primary-light primary-text font-size-05 br-5 no-select font-weight-900">{{ number_format($data->validity) }} days</div>
                    </div>
                    {{-- new row --}}
                    <div class="row w-full align-center g-10px space-between">
                        <span class="opacity-08">Investment</span>
                        <strong class="font-weight-900 w-fit text-overflow-ellipsis c-primary-darker font-size-1">{{ $CurrencyHelper::format($data->cost,'NGN',Auth::guard('users')->user()->display_currency,0) }}</strong>
                    </div>
                    {{-- new row --}}
                     <div class="row w-full align-center g-10px space-between">
                        <span class="opacity-08">Return</span>
                        <strong class="font-weight-900 w-fit text-overflow-ellipsis c-primary-darker font-size-1">{{ $CurrencyHelper::format($data->earning * $data->validity,'NGN',Auth::guard('users')->user()->display_currency,0) }}</strong>
                    </div>
                    <div style="border-color:var(--primary)" class="hr" vitecss-type="dashed"></div>
                    <small class="text-align-center c-primary font-weight-900">Capital + Profit returned after {{ number_format($data->validity) }} days</small>
                   
                    @if ($data->coming_soon == 'true')
                      <div class="w-full filter-grayscale-100 uppercase font-weight-900 br-10px h-40px  bg-primary primary-text row align-center justify-center no-select no-pointer">
                        Coming Soon
                    </div>  
                    @else
                      
                     <div x-on:click="
                    Overlay = true;
                    Package.ID = '{{ $data->id }}';
                    Package.Name='{{ $data->name }}';
                    " class="p-10 br-5px h-50px p-x-10px font-weight-900 uppercase bg-primary primary-text row align-center justify-center bg-primary no-select pointer">
                    BUY SHARE
                    </div>
                    @endif
                </div>
            </div>
           
          </div>
        @endforeach
       </div>


        @endif

        </section>
       </section>
     
        
       
       {{-- support links --}}
       <div x-bind:style="{
        'bottom' : `${document.querySelector('footer').offsetHeight + 10}px`
       }" class="pos-fixed column g-10px align-center right-10px bottom-20px">
        <div x-on:click="window.open('{{ $social_settings->whatsapp_community }}')" style="background:#4caf50;color:white;" class="h-50px w-50px box-shadow circle column align-center justify-center">
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 32 32">
  <g fill="currentColor">
    <path d="M25.873,6.069c-2.619-2.623-6.103-4.067-9.814-4.069C8.411,2,2.186,8.224,2.184,15.874c-.001,2.446,.638,4.833,1.852,6.936l-1.969,7.19,7.355-1.929c2.026,1.106,4.308,1.688,6.63,1.689h.006c7.647,0,13.872-6.224,13.874-13.874,.001-3.708-1.44-7.193-4.06-9.815h0Zm-9.814,21.347h-.005c-2.069,0-4.099-.557-5.87-1.607l-.421-.25-4.365,1.145,1.165-4.256-.274-.436c-1.154-1.836-1.764-3.958-1.763-6.137,.003-6.358,5.176-11.531,11.537-11.531,3.08,.001,5.975,1.202,8.153,3.382,2.177,2.179,3.376,5.077,3.374,8.158-.003,6.359-5.176,11.532-11.532,11.532h0Zm6.325-8.636c-.347-.174-2.051-1.012-2.369-1.128-.318-.116-.549-.174-.78,.174-.231,.347-.895,1.128-1.098,1.359-.202,.232-.405,.26-.751,.086-.347-.174-1.464-.54-2.788-1.72-1.03-.919-1.726-2.054-1.929-2.402-.202-.347-.021-.535,.152-.707,.156-.156,.347-.405,.52-.607,.174-.202,.231-.347,.347-.578,.116-.232,.058-.434-.029-.607-.087-.174-.78-1.88-1.069-2.574-.281-.676-.567-.584-.78-.595-.202-.01-.433-.012-.665-.012s-.607,.086-.925,.434c-.318,.347-1.213,1.186-1.213,2.892s1.242,3.355,1.416,3.587c.174,.232,2.445,3.733,5.922,5.235,.827,.357,1.473,.571,1.977,.73,.83,.264,1.586,.227,2.183,.138,.666-.1,2.051-.839,2.34-1.649,.289-.81,.289-1.504,.202-1.649s-.318-.232-.665-.405h0Z" fill-rule="evenodd"></path>
  </g>
</svg>
        </div>
         <div x-on:click="window.open('{{ $social_settings->telegram_community }}')" class="h-50px bg-telegram c-white w-50px box-shadow circle column align-center justify-center">
<svg viewBox="0 0 24 24" fill="CurrentColor" xmlns="http://www.w3.org/2000/svg" height="20" width="20"><path d="M17.0943 7.14643C17.6874 6.93123 17.9818 6.85378 18.1449 6.82608C18.1461 6.87823 18.1449 6.92051 18.1422 6.94825C17.9096 9.39217 16.8906 15.4048 16.3672 18.2026C16.2447 18.8578 16.1507 19.1697 15.5179 18.798C15.1014 18.5532 14.7245 18.2452 14.3207 17.9805C12.9961 17.1121 11.1 15.8189 11.2557 15.8967C9.95162 15.0373 10.4975 14.5111 11.2255 13.8093C11.3434 13.6957 11.466 13.5775 11.5863 13.4525C11.64 13.3967 11.9027 13.1524 12.2731 12.8081C13.4612 11.7035 15.7571 9.56903 15.8151 9.32202C15.8246 9.2815 15.8334 9.13045 15.7436 9.05068C15.6539 8.97092 15.5215 8.9982 15.4259 9.01989C15.2904 9.05064 13.1326 10.4769 8.95243 13.2986C8.33994 13.7192 7.78517 13.9242 7.28811 13.9134L7.29256 13.9156C6.63781 13.6847 5.9849 13.4859 5.32855 13.286C4.89736 13.1546 4.46469 13.0228 4.02904 12.8812C3.92249 12.8466 3.81853 12.8137 3.72083 12.783C8.24781 10.8109 11.263 9.51243 12.7739 8.884C14.9684 7.97124 16.2701 7.44551 17.0943 7.14643ZM19.5169 5.21806C19.2635 5.01244 18.985 4.91807 18.7915 4.87185C18.5917 4.82412 18.4018 4.80876 18.2578 4.8113C17.7814 4.81969 17.2697 4.95518 16.4121 5.26637C15.5373 5.58382 14.193 6.12763 12.0058 7.03736C10.4638 7.67874 7.39388 9.00115 2.80365 11.001C2.40046 11.1622 2.03086 11.3451 1.73884 11.5619C1.46919 11.7622 1.09173 12.1205 1.02268 12.6714C0.970519 13.0874 1.09182 13.4714 1.33782 13.7738C1.55198 14.037 1.82635 14.1969 2.03529 14.2981C2.34545 14.4483 2.76276 14.5791 3.12952 14.6941C3.70264 14.8737 4.27444 15.0572 4.84879 15.233C6.62691 15.7773 8.09066 16.2253 9.7012 17.2866C10.8825 18.0651 12.041 18.8775 13.2243 19.6531C13.6559 19.936 14.0593 20.2607 14.5049 20.5224C14.9916 20.8084 15.6104 21.0692 16.3636 20.9998C17.5019 20.8951 18.0941 19.8479 18.3331 18.5703C18.8552 15.7796 19.8909 9.68351 20.1332 7.13774C20.1648 6.80544 20.1278 6.433 20.097 6.25318C20.0653 6.068 19.9684 5.58448 19.5169 5.21806Z"></path></svg>          
        </div>
         <div style="background: rgb(108,92,230)" x-on:click="window.open('{{ $social_settings->customer_support }}')" class="h-50px bg-blueviolet primary-text w-50px box-shadow circle column align-center justify-center">
<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 18 18">
  <g fill="currentColor">
    <path d="M13,13.25l-.342,1.447c-.208,.909-1.017,1.553-1.949,1.553h-1.959" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"></path>
    <path d="M3.75,7.353l-1.123,.567c-.813,.411-1.246,1.319-1.053,2.209l.335,1.545c.199,.92,1.013,1.576,1.955,1.576h1.137s-1.084-5-1.084-5c-.099-.403-.166-.817-.166-1.25,0-2.899,2.351-5.25,5.25-5.25s5.25,2.351,5.25,5.25c0,.433-.067,.847-.166,1.25l-1.084,5h1.137c.941,0,1.755-.656,1.955-1.576l.335-1.545c.193-.89-.24-1.799-1.053-2.209l-1.123-.567" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"></path>
  </g>
</svg>        </div>
       </div>

{{-- confirm --}}
<section x-data="{ 
    Submitting : false
 }" x-show="Overlay" x-transition:enter-start="fade-enter" x-transition:enter-end="fade-enter-end" x-transition:leave-start="fade-leave" x-transition:leave-end="fade-leave-end" class="pos-fixed transition-all column backdrop-blur-2px align-center justify-end inset-0 bg-black-transparent z-index-4000">
<div x-on:click.outside="Overlay = false;" x-show="!Submitting" class="w-full column g-10px bg-light">
    <div class="w-full p-15px column align-center g-10px">
        <span>Confirm to Invest in</span>
        <strong class="font-weight-900 font-size-1rem" x-text="Package.Name"></strong>
    </div>
    <div class="w-full row align-center">
        <div style="background:green;" class="p-15px p-x-30px ws-nowrap font-weight-900 row c-white align-center justify-center">
            Cancel
        </div>
         <div x-on:click="
    Submitting = true;
     $el.classList.add('disabled');
     SendPostRequest('{{ url('users/post/purchase/package/process') }}',{
        'id' : Package.ID,
        '_token' : '{{ @csrf_token() }}'
     },function(response,error){
        let data=JSON.parse(response);
        CreateNotify(data.status,data.message);
        Submitting = false;
        $el.classList.remove('disabled');
      if(data.status == 'success'){
        Overlay = false;
        Vitecss.navigate('{{ url('users/products/active') }}')
      }
      if(data.mode == 'insufficient'){
      Overlay = false;

        Vitecss.navigate('{{ url('users/recharge') }}')
      }

     })
         " style="background:#4caf50;" class="p-15px p-x-30px ws-nowrap font-weight-900 c-white w-full row align-center justify-center">
            Confirm
        </div>
    </div>
</div>
<div x-show="Submitting" style="background:#4caf50;" class="w-full font-size-1rem g-10px font-weight-900 c-white p-15px p-x-30px row align-center justify-center">
<?xml version="1.0" encoding="utf-8"?><svg height="20" width="20" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 2400 2400" xml:space="preserve"><g stroke-width="200" stroke-linecap="round" stroke="currentColor" fill="none" id="spinner"><line x1="1200" y1="600" x2="1200" y2="100"/><line opacity="0.5" x1="1200" y1="2300" x2="1200" y2="1800"/><line opacity="0.917" x1="900" y1="680.4" x2="650" y2="247.4"/><line opacity="0.417" x1="1750" y1="2152.6" x2="1500" y2="1719.6"/><line opacity="0.833" x1="680.4" y1="900" x2="247.4" y2="650"/><line opacity="0.333" x1="2152.6" y1="1750" x2="1719.6" y2="1500"/><line opacity="0.75" x1="600" y1="1200" x2="100" y2="1200"/><line opacity="0.25" x1="2300" y1="1200" x2="1800" y2="1200"/><line opacity="0.667" x1="680.4" y1="1500" x2="247.4" y2="1750"/><line opacity="0.167" x1="2152.6" y1="650" x2="1719.6" y2="900"/><line opacity="0.583" x1="900" y1="1719.6" x2="650" y2="2152.6"/><line opacity="0.083" x1="1750" y1="247.4" x2="1500" y2="680.4"/><animateTransform attributeName="transform" attributeType="XML" type="rotate" keyTimes="0;0.08333;0.16667;0.25;0.33333;0.41667;0.5;0.58333;0.66667;0.75;0.83333;0.91667" values="0 1199 1199;30 1199 1199;60 1199 1199;90 1199 1199;120 1199 1199;150 1199 1199;180 1199 1199;210 1199 1199;240 1199 1199;270 1199 1199;300 1199 1199;330 1199 1199" dur="0.83333s" begin="0s" repeatCount="indefinite" calcMode="discrete"/></g></svg>

    Purchasing
</div>
</section>


     
    </section>


@endsection
