@extends('layout.users.app')
@section('title')
    Profile
@endsection
@section('css')
    <style class="css">
        main{
            padding:0;
        }
    </style>
@endsection
@section('main')
    <section class="w-full g-10px column">
     
        {{-- new div --}}
        <section class="section pc-x-padding p-15px column g-10px body">
          <div class="w-full column bg-primary br-10px p-1px">
            <div class="row align-center space-between w-full  primary-text p-5px p-x-15px">
                <span>
                {{ substr(Auth::guard('users')->user()->email,0,2)."****@".explode('@',Auth::guard('users')->user()->email)[1] }}

                </span>
                <span>{{ Auth::guard('users')->user()->uniqid }}</span>
            </div>
              <div class="w-full row br-top-right-15px br-top-left-15px br-bottom-right-10px br-bottom-left-10px align-center bg-light box-shadow p-20 g-10">
                <div class="w-full text-center align-center bg-rgt-005 p-10px br-5px column g-10">
                <strong class="font-1 font-weight-900 ws-nowrap overflow-hidden text-overflow-ellipsis">{{ $CurrencyHelper::format(Auth::guard('users')->user()->main_balance,'NGN',$display_currency) }}</strong>
                <span class="opacity-07">Withdrawal balance</span>
                <button onclick="Redirect('{{ url('users/withdraw') }}')" class="bg-secondary w-full secondary-text border-none no-select pointer p-5px br-5px">Withdraw</button>
            </div>
                   <div class="w-full text-center align-center bg-rgt-005 p-10px br-5px column g-10">
                <strong class="font-1 font-weight-900 ws-nowrap overflow-hidden text-overflow-ellipsis">{{ $CurrencyHelper::format(Auth::guard('users')->user()->deposit_balance,'NGN',$display_currency) }}</strong>
                <span class="opacity-07">Deposit balance</span>
                <button onclick="Redirect('{{ url('users/recharge') }}')" class="bg-primary w-full primary-text border-none no-select pointer p-5px br-5px">Recharge</button>
                </div>
            </div>
          </div>

           {{-- content --}}
           <div class="contents box-shadow bg-light column br-10px p-15px w-full">
                {{-- new link pc-pointer no-select --}}
                <div onclick="Redirect('{{ url('users/bank') }}')" class="link pc-pointer no-select p-10px border-bottom-width-1px border-bottom-style-solid border-bottom-color-rgt-01 w-full row space-between align-center g-10">
                    <i>
<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24">
  <title>piggy-bank</title>
  <g fill="currentColor"><path d="M17 22V18.5V19" stroke="currentColor" stroke-width="2" stroke-linecap="square" fill="none"></path> <path d="M7 10.01V10" stroke="currentColor" stroke-width="2" stroke-linecap="square" fill="none"></path> <path d="M12 8H15" stroke="currentColor" stroke-width="2" stroke-miterlimit="10" stroke-linecap="square" fill="none"></path> <path d="M9 22V18.7577C7.17531 18.225 5.5 16.5 5 14.4973L2 13V8.09467L6 6.46664V2.5C7.43764 1.78118 9.27279 2.19602 9.9798 4L14.5 4C18.6421 4 22 7.35786 22 11.5C22 15.6421 18.6421 19 14.5 19H13" stroke="currentColor" stroke-width="2" stroke-linecap="square" fill="none"></path></g>
</svg>

                    </i>
                    <span class="block m-right-auto">Bank Account</span>
                    <i>
                        <svg viewBox="0 0 24 24" fill="CurrentColor" xmlns="http://www.w3.org/2000/svg" height="20" width="20"><path d="M13.1717 12.0007L8.22192 7.05093L9.63614 5.63672L16.0001 12.0007L9.63614 18.3646L8.22192 16.9504L13.1717 12.0007Z"></path></svg>

                    </i>
                </div>
                 {{-- new link pc-pointer no-select --}}
                <div onclick="Redirect('{{ url('users/salary') }}')" class="link pc-pointer no-select p-10px border-bottom-width-1px border-bottom-style-solid border-bottom-color-rgt-01 w-full row space-between align-center g-10">
                    <i>
<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 32 32">
  <g fill="currentColor" stroke-linejoin="miter" stroke-linecap="butt">
    <rect x="3" y="3" width="26" height="26" rx="3" ry="3" fill="none" stroke="currentColor" stroke-linecap="square" stroke-miterlimit="10" stroke-width="2"></rect>
    <path d="m16,23v-8.5c0-.828-.672-1.5-1.5-1.5h-1.5" fill="none" stroke="currentColor" stroke-linecap="square" stroke-miterlimit="10" stroke-width="2"></path>
    <circle cx="16" cy="8.5" r=".5" fill="currentColor" stroke="currentColor" stroke-linecap="square" stroke-miterlimit="10" stroke-width="2"></circle>
  </g>
</svg>

                    </i>
                    <span class="block m-right-auto">About Us</span>
                    <i>
                        <svg viewBox="0 0 24 24" fill="CurrentColor" xmlns="http://www.w3.org/2000/svg" height="20" width="20"><path d="M13.1717 12.0007L8.22192 7.05093L9.63614 5.63672L16.0001 12.0007L9.63614 18.3646L8.22192 16.9504L13.1717 12.0007Z"></path></svg>

                    </i>
                </div>
                 {{-- new link pc-pointer no-select --}}
                <div onclick="Redirect('{{ url('users/transactions') }}')" class="link pc-pointer no-select p-10px border-bottom-width-1px border-bottom-style-solid border-bottom-color-rgt-005 w-full row space-between align-center g-10">
                    <i>
<svg viewBox="0 0 24 24" fill="CurrentColor" xmlns="http://www.w3.org/2000/svg" height="20" width="20"><path d="M12 2C17.5228 2 22 6.47715 22 12C22 17.5228 17.5228 22 12 22C6.47715 22 2 17.5228 2 12H4C4 16.4183 7.58172 20 12 20C16.4183 20 20 16.4183 20 12C20 7.58172 16.4183 4 12 4C9.25022 4 6.82447 5.38734 5.38451 7.50024L8 7.5V9.5H2V3.5H4L3.99989 5.99918C5.82434 3.57075 8.72873 2 12 2ZM13 7L12.9998 11.585L16.2426 14.8284L14.8284 16.2426L10.9998 12.413L11 7H13Z"></path></svg>

                    </i>
                    <span class="block m-right-auto">Transaction History</span>
                    <i>
                        <svg viewBox="0 0 24 24" fill="CurrentColor" xmlns="http://www.w3.org/2000/svg" height="20" width="20"><path d="M13.1717 12.0007L8.22192 7.05093L9.63614 5.63672L16.0001 12.0007L9.63614 18.3646L8.22192 16.9504L13.1717 12.0007Z"></path></svg>

                    </i>
                </div>

                  {{-- new link pc-pointer no-select --}}
                <div onclick="Redirect('{{ url('users/products/active') }}')" class="link pc-pointer no-select p-10px border-bottom-width-1px border-bottom-style-solid border-bottom-color-rgt-005 w-full row space-between align-center g-10">
                    <i>
<svg viewBox="0 0 24 24" fill="CurrentColor" xmlns="http://www.w3.org/2000/svg" height="20" width="20"><path d="M10.0544 2.0941C11.1756 1.13856 12.8248 1.13855 13.9461 2.09411L15.2941 3.24286C15.4542 3.37935 15.6533 3.46182 15.8631 3.47856L17.6286 3.61945C19.0971 3.73663 20.2633 4.9028 20.3805 6.37131L20.5214 8.13679C20.5381 8.34654 20.6205 8.54568 20.757 8.70585L21.9058 10.0539C22.8614 11.1751 22.8614 12.8243 21.9058 13.9456L20.757 15.2935C20.6206 15.4537 20.538 15.6529 20.5213 15.8627L20.3805 17.6281C20.2633 19.0967 19.0971 20.2628 17.6286 20.3799L15.8631 20.5208C15.6533 20.5376 15.4542 20.6201 15.2941 20.7566L13.9461 21.9053C12.8248 22.8609 11.1756 22.8608 10.0543 21.9053L8.70631 20.7566C8.54615 20.6201 8.34705 20.5376 8.1373 20.5209L6.37184 20.3799C4.9033 20.2627 3.73716 19.0966 3.61997 17.6281L3.47906 15.8627C3.46232 15.6529 3.37983 15.4538 3.24336 15.2936L2.0946 13.9455C1.13905 12.8243 1.13904 11.1752 2.09458 10.0539L3.24334 8.70589C3.37983 8.54573 3.46234 8.34654 3.47907 8.13678L3.61996 6.3713C3.73714 4.90278 4.90327 3.73665 6.3718 3.61946L8.13729 3.47857C8.34705 3.46183 8.54619 3.37935 8.70636 3.24286L10.0544 2.0941ZM12.6488 3.61632C12.2751 3.29782 11.7253 3.29781 11.3516 3.61632L10.0036 4.76509C9.5231 5.17456 8.92568 5.42201 8.29637 5.47223L6.5309 5.61312C6.04139 5.65219 5.65268 6.04089 5.61362 6.53041L5.47272 8.29593C5.4225 8.92521 5.17505 9.52259 4.76559 10.0031L3.61683 11.3511C3.29832 11.7248 3.29831 12.2746 3.61683 12.6483L4.76559 13.9963C5.17506 14.4768 5.4225 15.0743 5.47275 15.7035L5.61363 17.469C5.65268 17.9585 6.04139 18.3473 6.53092 18.3863L8.29636 18.5272C8.92563 18.5774 9.5231 18.8249 10.0036 19.2344L11.3516 20.3831C11.7254 20.7016 12.2751 20.7016 12.6488 20.3831L13.9969 19.2343C14.4773 18.8249 15.0747 18.5774 15.704 18.5272L17.4695 18.3863C17.959 18.3472 18.3478 17.9585 18.3868 17.469L18.5277 15.7035C18.5779 15.0742 18.8253 14.4768 19.2349 13.9964L20.3836 12.6483C20.7022 12.2746 20.7021 11.7249 20.3836 11.3511L19.2348 10.0031C18.8253 9.52259 18.5779 8.92519 18.5277 8.2959L18.3868 6.53041C18.3478 6.0409 17.959 5.65219 17.4695 5.61312L15.704 5.47224C15.0748 5.42203 14.4773 5.17455 13.9968 4.76508L12.6488 3.61632ZM14.8284 7.75718L16.2426 9.1714L9.17154 16.2425L7.75733 14.8282L14.8284 7.75718ZM10.2322 10.232C9.64641 10.8178 8.69667 10.8178 8.11088 10.232C7.52509 9.6463 7.52509 8.69652 8.11088 8.11073C8.69667 7.52494 9.64641 7.52494 10.2322 8.11073C10.818 8.69652 10.818 9.6463 10.2322 10.232ZM13.7677 15.8889C14.3535 16.4747 15.3032 16.4747 15.889 15.8889C16.4748 15.3031 16.4748 14.3534 15.889 13.7676C15.3032 13.1818 14.3535 13.1818 13.7677 13.7676C13.1819 14.3534 13.1819 15.3031 13.7677 15.8889Z"></path></svg>

                    </i>
                    <span class="block m-right-auto">My Shares</span>
                    <i>
                        <svg viewBox="0 0 24 24" fill="CurrentColor" xmlns="http://www.w3.org/2000/svg" height="20" width="20"><path d="M13.1717 12.0007L8.22192 7.05093L9.63614 5.63672L16.0001 12.0007L9.63614 18.3646L8.22192 16.9504L13.1717 12.0007Z"></path></svg>

                    </i>
                </div>

                 

                 {{-- new link pc-pointer no-select --}}
                <div onclick="Redirect('{{ url('users/invite') }}')" class="link pc-pointer no-select p-10px border-bottom-width-1px border-bottom-style-solid border-bottom-color-rgt-01 w-full row space-between align-center g-10">
                    <i>
<svg viewBox="0 0 24 24" fill="CurrentColor" xmlns="http://www.w3.org/2000/svg" height="20" width="20"><path d="M13.1202 17.0228L8.92129 14.7324C8.19135 15.5125 7.15261 16 6 16C3.79086 16 2 14.2091 2 12C2 9.79086 3.79086 8 6 8C7.15255 8 8.19125 8.48746 8.92118 9.26746L13.1202 6.97713C13.0417 6.66441 13 6.33707 13 6C13 3.79086 14.7909 2 17 2C19.2091 2 21 3.79086 21 6C21 8.20914 19.2091 10 17 10C15.8474 10 14.8087 9.51251 14.0787 8.73246L9.87977 11.0228C9.9583 11.3355 10 11.6629 10 12C10 12.3371 9.95831 12.6644 9.87981 12.9771L14.0788 15.2675C14.8087 14.4875 15.8474 14 17 14C19.2091 14 21 15.7909 21 18C21 20.2091 19.2091 22 17 22C14.7909 22 13 20.2091 13 18C13 17.6629 13.0417 17.3355 13.1202 17.0228ZM6 14C7.10457 14 8 13.1046 8 12C8 10.8954 7.10457 10 6 10C4.89543 10 4 10.8954 4 12C4 13.1046 4.89543 14 6 14ZM17 8C18.1046 8 19 7.10457 19 6C19 4.89543 18.1046 4 17 4C15.8954 4 15 4.89543 15 6C15 7.10457 15.8954 8 17 8ZM17 20C18.1046 20 19 19.1046 19 18C19 16.8954 18.1046 16 17 16C15.8954 16 15 16.8954 15 18C15 19.1046 15.8954 20 17 20Z"></path></svg>


                    </i>
                    <span class="block m-right-auto">Invite</span>
                    <i>
                        <svg viewBox="0 0 24 24" fill="CurrentColor" xmlns="http://www.w3.org/2000/svg" height="20" width="20"><path d="M13.1717 12.0007L8.22192 7.05093L9.63614 5.63672L16.0001 12.0007L9.63614 18.3646L8.22192 16.9504L13.1717 12.0007Z"></path></svg>

                    </i>
                </div>

                {{-- new link pc-pointer no-select --}}
                <div onclick="Redirect('{{ url('users/referrals') }}')" class="link pc-pointer no-select p-10px border-bottom-width-1px border-bottom-style-solid border-bottom-color-rgt-01 w-full row space-between align-center g-10">
                    <i>
<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20">
  <title>users</title>
  <g fill="currentColor">
    <circle cx="6.5" cy="8.5" r="2.5" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></circle>
    <circle cx="13.5" cy="5.5" r="2.5" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></circle>
    <path d="m10.875,11.845c.739-.532,1.645-.845,2.625-.845,1.959,0,3.626,1.252,4.244,3" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></path>
    <path d="m2.256,17c.618-1.748,2.285-3,4.244-3s3.626,1.252,4.244,3" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></path>
  </g>
</svg>

                    </i>
                    <span class="block m-right-auto">My Referrals</span>
                    <i>
                        <svg viewBox="0 0 24 24" fill="CurrentColor" xmlns="http://www.w3.org/2000/svg" height="20" width="20"><path d="M13.1717 12.0007L8.22192 7.05093L9.63614 5.63672L16.0001 12.0007L9.63614 18.3646L8.22192 16.9504L13.1717 12.0007Z"></path></svg>

                    </i>
                </div>
               

                 {{-- new link pc-pointer no-select --}}
                <div onclick="Redirect('{{ url('users/password/update') }}')" class="link pc-pointer no-select p-10px border-bottom-width-1px border-bottom-style-solid border-bottom-color-rgt-01 w-full row space-between align-center g-10">
                    <i>
<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 18 18">
  <title>lock</title>
  <g fill="currentColor">
    <path d="M5.75,8.25v-3.25c0-1.795,1.455-3.25,3.25-3.25h0c1.795,0,3.25,1.455,3.25,3.25v3.25" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"></path>
    <line x1="9" y1="11.75" x2="9" y2="12.75" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"></line>
    <rect x="3.25" y="8.25" width="11.5" height="8" rx="2" ry="2" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"></rect>
  </g>
</svg>

                    </i>
                    <span class="block m-right-auto">Update Password</span>
                    <i>
                        <svg viewBox="0 0 24 24" fill="CurrentColor" xmlns="http://www.w3.org/2000/svg" height="20" width="20"><path d="M13.1717 12.0007L8.22192 7.05093L9.63614 5.63672L16.0001 12.0007L9.63614 18.3646L8.22192 16.9504L13.1717 12.0007Z"></path></svg>

                    </i>
                </div>
                 {{-- new link pc-pointer no-select --}}
                <div onclick="window.location.href='{{ url('users/logout') }}'" class="link pc-pointer no-select p-10px w-full row space-between align-center g-10">
                    <i>
<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 18 18">
  <title>arrow-door-out-3</title>
  <g fill="currentColor">
    <path d="M11.75,5.75V3.25c0-.552-.448-1-1-1H4.25c-.552,0-1,.448-1,1V14.75c0,.552,.448,1,1,1h6.5c.552,0,1-.448,1-1v-2.5" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"></path>
    <polyline points="14.5 6.25 17.25 9 14.5 11.75" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"></polyline>
    <line x1="17.25" y1="9" x2="11.25" y2="9" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"></line>
    <path d="M3.457,2.648l3.321,2.059c.294,.182,.473,.504,.473,.85v6.887c0,.346-.179,.667-.473,.85l-3.322,2.06" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"></path>
  </g>
</svg>

                    </i>
                    <span class="block m-right-auto">Logout</span>
                    <i>
                        <svg viewBox="0 0 24 24" fill="CurrentColor" xmlns="http://www.w3.org/2000/svg" height="20" width="20"><path d="M13.1717 12.0007L8.22192 7.05093L9.63614 5.63672L16.0001 12.0007L9.63614 18.3646L8.22192 16.9504L13.1717 12.0007Z"></path></svg>

                    </i>
                </div>
           </div>
        </section>
    </section>
@endsection