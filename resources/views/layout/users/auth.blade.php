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
{{-- yield css --}}
     @yield('css')
    <title>{{ config('app.name') }} > Users > @yield('title') </title>
    <style>
        body{
            background:var(--bg)
        }
        main{
            display:flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            background:transparent;
            padding:20px !important;
        }
        form{
           position:relative;
            padding:0px;
            border-radius:10px;
            background:var(--bg-light);
            padding:20px;
        }

        form > div{
          position:relative;
          z-index:100;
        }
        .cont{
            background:var(--bg-light);
            border:1px solid var(--primary-03);
            border-radius:5px;
        }
        button.post{
            background:var(--primary);
            color:var(--primary-text);
        }
    </style>
</head>
<body class="column g-20px">
    {{-- include action loader for post requests,get requests and spa loading --}}
    @include('components.utilities',[
        'action_loader' => true
    ])  
{{-- include general codes --}}
    @include('components.utilities',[
        'general_codes' => true
    ])
    <header class="w-full pos-relative h-150px">
        <img src="{{ asset('photos/IMG_2013.jpeg') }}" alt="" class="w-full max-h-full z-index-100 no-pointer no-select pos-absolute inset-0">
    <div class="pos-absolute column primary-text justify-center align-center text-align-center g-10px z-index-200 inset-0 bg-primary-09">
       
    </div>

    </div>
    </header>
   
    <main>
        {{-- yield main --}}
        @yield('main')
    </main>
    <footer>

    </footer>
  @include('components.utilities',[
    'vite_js' => true
  ])
  {{-- yield js --}}
    @yield('js')
</body>
</html>