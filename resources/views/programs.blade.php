<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>MyAnthems | Programs</title>
        <link rel="stylesheet" href="{{ asset('css/style.css') }}">
        <link rel="stylesheet" href="{{ asset('css/style1.css') }}">

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
        <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400..900;1,400..900&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200..700&display=swap" rel="stylesheet">

        <!-- Styles / Scripts -->
        @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
            @vite(['resources/css/app.css', 'resources/js/app.js'])
        @else
            <style>
                /* ! tailwindcss v3.4.1 | MIT License | https://tailwindcss.com */*,::after,::before{box-sizing:border-box;border-width:0;border-style:solid;border-color:#e5e7eb}::after,::before{--tw-content:''}:host,html{line-height:1.5;-webkit-text-size-adjust:100%;-moz-tab-size:4;tab-size:4;font-family:Figtree, ui-sans-serif, system-ui, sans-serif, Apple Color Emoji, Segoe UI Emoji, Segoe UI Symbol, Noto Color Emoji;font-feature-settings:normal;font-variation-settings:normal;-webkit-tap-highlight-color:transparent}body{margin:0;line-height:inherit}hr{height:0;color:inherit;border-top-width:1px}abbr:where([title]){-webkit-text-decoration:underline dotted;text-decoration:underline dotted}h1,h2,h3,h4,h5,h6{font-size:inherit;font-weight:inherit}a{color:inherit;text-decoration:inherit}b,strong{font-weight:bolder}code,kbd,pre,samp{font-family:ui-monospace, SFMono-Regular, Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace;font-feature-settings:normal;font-variation-settings:normal;font-size:1em}small{font-size:80%}sub,sup{font-size:75%;line-height:0;position:relative;vertical-align:baseline}sub{bottom:-.25em}sup{top:-.5em}table{text-indent:0;border-color:inherit;border-collapse:collapse}button,input,optgroup,select,textarea{font-family:inherit;font-feature-settings:inherit;font-variation-settings:inherit;font-size:100%;font-weight:inherit;line-height:inherit;color:inherit;margin:0;padding:0}button,select{text-transform:none}[type=button],[type=reset],[type=submit],button{-webkit-appearance:button;background-color:transparent;background-image:none}:-moz-focusring{outline:auto}:-moz-ui-invalid{box-shadow:none}progress{vertical-align:baseline}::-webkit-inner-spin-button,::-webkit-outer-spin-button{height:auto}[type=search]{-webkit-appearance:textfield;outline-offset:-2px}::-webkit-search-decoration{-webkit-appearance:none}::-webkit-file-upload-button{-webkit-appearance:button;font:inherit}summary{display:list-item}blockquote,dd,dl,figure,h1,h2,h3,h4,h5,h6,hr,p,pre{margin:0}fieldset{margin:0;padding:0}legend{padding:0}menu,ol,ul{list-style:none;margin:0;padding:0}dialog{padding:0}textarea{resize:vertical}input::placeholder,textarea::placeholder{opacity:1;color:#9ca3af}[role=button],button{cursor:pointer}:disabled{cursor:default}audio,canvas,embed,iframe,img,object,svg,video{display:block;vertical-align:middle}img,video{max-width:100%;height:auto}[hidden]{display:none}*, ::before, ::after{--tw-border-spacing-x:0;--tw-border-spacing-y:0;--tw-translate-x:0;--tw-translate-y:0;--tw-rotate:0;--tw-skew-x:0;--tw-skew-y:0;--tw-scale-x:1;--tw-scale-y:1;--tw-pan-x: ;--tw-pan-y: ;--tw-pinch-zoom: ;--tw-scroll-snap-strictness:proximity;--tw-gradient-from-position: ;--tw-gradient-via-position: ;--tw-gradient-to-position: ;--tw-ordinal: ;--tw-slashed-zero: ;--tw-numeric-figure: ;--tw-numeric-spacing: ;--tw-numeric-fraction: ;--tw-ring-inset: ;--tw-ring-offset-width:0px;--tw-ring-offset-color:#fff;--tw-ring-color:rgb(59 130 246 / 0.5);--tw-ring-offset-shadow:0 0 #0000;--tw-ring-shadow:0 0 #0000;--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;--tw-blur: ;--tw-brightness: ;--tw-contrast: ;--tw-grayscale: ;--tw-hue-rotate: ;--tw-invert: ;--tw-saturate: ;--tw-sepia: ;--tw-drop-shadow: ;--tw-backdrop-blur: ;--tw-backdrop-brightness: ;--tw-backdrop-contrast: ;--tw-backdrop-grayscale: ;--tw-backdrop-hue-rotate: ;--tw-backdrop-invert: ;--tw-backdrop-opacity: ;--tw-backdrop-saturate: ;--tw-backdrop-sepia: }::backdrop{--tw-border-spacing-x:0;--tw-border-spacing-y:0;--tw-translate-x:0;--tw-translate-y:0;--tw-rotate:0;--tw-skew-x:0;--tw-skew-y:0;--tw-scale-x:1;--tw-scale-y:1;--tw-pan-x: ;--tw-pan-y: ;--tw-pinch-zoom: ;--tw-scroll-snap-strictness:proximity;--tw-gradient-from-position: ;--tw-gradient-via-position: ;--tw-gradient-to-position: ;--tw-ordinal: ;--tw-slashed-zero: ;--tw-numeric-figure: ;--tw-numeric-spacing: ;--tw-numeric-fraction: ;--tw-ring-inset: ;--tw-ring-offset-width:0px;--tw-ring-offset-color:#fff;--tw-ring-color:rgb(59 130 246 / 0.5);--tw-ring-offset-shadow:0 0 #0000;--tw-ring-shadow:0 0 #0000;--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;--tw-blur: ;--tw-brightness: ;--tw-contrast: ;--tw-grayscale: ;--tw-hue-rotate: ;--tw-invert: ;--tw-saturate: ;--tw-sepia: ;--tw-drop-shadow: ;--tw-backdrop-blur: ;--tw-backdrop-brightness: ;--tw-backdrop-contrast: ;--tw-backdrop-grayscale: ;--tw-backdrop-hue-rotate: ;--tw-backdrop-invert: ;--tw-backdrop-opacity: ;--tw-backdrop-saturate: ;--tw-backdrop-sepia: }.absolute{position:absolute}.relative{position:relative}.-left-20{left:-5rem}.top-0{top:0px}.-bottom-16{bottom:-4rem}.-left-16{left:-4rem}.-mx-3{margin-left:-0.75rem;margin-right:-0.75rem}.mt-4{margin-top:1rem}.mt-6{margin-top:1.5rem}.flex{display:flex}.grid{display:grid}.hidden{display:none}.aspect-video{aspect-ratio:16 / 9}.size-12{width:3rem;height:3rem}.size-5{width:1.25rem;height:1.25rem}.size-6{width:1.5rem;height:1.5rem}.h-12{height:3rem}.h-40{height:10rem}.h-full{height:100%}.min-h-screen{min-height:100vh}.w-full{width:100%}.w-\[calc\(100\%\+8rem\)\]{width:calc(100% + 8rem)}.w-auto{width:auto}.max-w-\[877px\]{max-width:877px}.max-w-2xl{max-width:42rem}.flex-1{flex:1 1 0%}.shrink-0{flex-shrink:0}.grid-cols-2{grid-template-columns:repeat(2, minmax(0, 1fr))}.flex-col{flex-direction:column}.items-start{align-items:flex-start}.items-center{align-items:center}.items-stretch{align-items:stretch}.justify-end{justify-content:flex-end}.justify-center{justify-content:center}.gap-2{gap:0.5rem}.gap-4{gap:1rem}.gap-6{gap:1.5rem}.self-center{align-self:center}.overflow-hidden{overflow:hidden}.rounded-\[10px\]{border-radius:10px}.rounded-full{border-radius:9999px}.rounded-lg{border-radius:0.5rem}.rounded-md{border-radius:0.375rem}.rounded-sm{border-radius:0.125rem}.bg-\[\#FF2D20\]\/10{background-color:rgb(255 45 32 / 0.1)}.bg-white{--tw-bg-opacity:1;background-color:rgb(255 255 255 / var(--tw-bg-opacity))}.bg-gradient-to-b{background-image:linear-gradient(to bottom, var(--tw-gradient-stops))}.from-transparent{--tw-gradient-from:transparent var(--tw-gradient-from-position);--tw-gradient-to:rgb(0 0 0 / 0) var(--tw-gradient-to-position);--tw-gradient-stops:var(--tw-gradient-from), var(--tw-gradient-to)}.via-white{--tw-gradient-to:rgb(255 255 255 / 0)  var(--tw-gradient-to-position);--tw-gradient-stops:var(--tw-gradient-from), #fff var(--tw-gradient-via-position), var(--tw-gradient-to)}.to-white{--tw-gradient-to:#fff var(--tw-gradient-to-position)}.stroke-\[\#FF2D20\]{stroke:#FF2D20}.object-cover{object-fit:cover}.object-top{object-position:top}.p-6{padding:1.5rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.py-10{padding-top:2.5rem;padding-bottom:2.5rem}.px-3{padding-left:0.75rem;padding-right:0.75rem}.py-16{padding-top:4rem;padding-bottom:4rem}.py-2{padding-top:0.5rem;padding-bottom:0.5rem}.pt-3{padding-top:0.75rem}.text-center{text-align:center}.font-sans{font-family:Figtree, ui-sans-serif, system-ui, sans-serif, Apple Color Emoji, Segoe UI Emoji, Segoe UI Symbol, Noto Color Emoji}.text-sm{font-size:0.875rem;line-height:1.25rem}.text-sm\/relaxed{font-size:0.875rem;line-height:1.625}.text-xl{font-size:1.25rem;line-height:1.75rem}.font-semibold{font-weight:600}.text-black{--tw-text-opacity:1;color:rgb(0 0 0 / var(--tw-text-opacity))}.text-white{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.underline{-webkit-text-decoration-line:underline;text-decoration-line:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.shadow-\[0px_14px_34px_0px_rgba\(0\2c 0\2c 0\2c 0\.08\)\]{--tw-shadow:0px 14px 34px 0px rgba(0,0,0,0.08);--tw-shadow-colored:0px 14px 34px 0px var(--tw-shadow-color);box-shadow:var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow)}.ring-1{--tw-ring-offset-shadow:var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color);--tw-ring-shadow:var(--tw-ring-inset) 0 0 0 calc(1px + var(--tw-ring-offset-width)) var(--tw-ring-color);box-shadow:var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow, 0 0 #0000)}.ring-transparent{--tw-ring-color:transparent}.ring-white\/\[0\.05\]{--tw-ring-color:rgb(255 255 255 / 0.05)}.drop-shadow-\[0px_4px_34px_rgba\(0\2c 0\2c 0\2c 0\.06\)\]{--tw-drop-shadow:drop-shadow(0px 4px 34px rgba(0,0,0,0.06));filter:var(--tw-blur) var(--tw-brightness) var(--tw-contrast) var(--tw-grayscale) var(--tw-hue-rotate) var(--tw-invert) var(--tw-saturate) var(--tw-sepia) var(--tw-drop-shadow)}.drop-shadow-\[0px_4px_34px_rgba\(0\2c 0\2c 0\2c 0\.25\)\]{--tw-drop-shadow:drop-shadow(0px 4px 34px rgba(0,0,0,0.25));filter:var(--tw-blur) var(--tw-brightness) var(--tw-contrast) var(--tw-grayscale) var(--tw-hue-rotate) var(--tw-invert) var(--tw-saturate) var(--tw-sepia) var(--tw-drop-shadow)}.transition{transition-property:color, background-color, border-color, fill, stroke, opacity, box-shadow, transform, filter, -webkit-text-decoration-color, -webkit-backdrop-filter;transition-property:color, background-color, border-color, text-decoration-color, fill, stroke, opacity, box-shadow, transform, filter, backdrop-filter;transition-property:color, background-color, border-color, text-decoration-color, fill, stroke, opacity, box-shadow, transform, filter, backdrop-filter, -webkit-text-decoration-color, -webkit-backdrop-filter;transition-timing-function:cubic-bezier(0.4, 0, 0.2, 1);transition-duration:150ms}.duration-300{transition-duration:300ms}.selection\:bg-\[\#FF2D20\] *::selection{--tw-bg-opacity:1;background-color:rgb(255 45 32 / var(--tw-bg-opacity))}.selection\:text-white *::selection{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.selection\:bg-\[\#FF2D20\]::selection{--tw-bg-opacity:1;background-color:rgb(255 45 32 / var(--tw-bg-opacity))}.selection\:text-white::selection{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.hover\:text-black:hover{--tw-text-opacity:1;color:rgb(0 0 0 / var(--tw-text-opacity))}.hover\:text-black\/70:hover{color:rgb(0 0 0 / 0.7)}.hover\:ring-black\/20:hover{--tw-ring-color:rgb(0 0 0 / 0.2)}.focus\:outline-none:focus{outline:2px solid transparent;outline-offset:2px}.focus-visible\:ring-1:focus-visible{--tw-ring-offset-shadow:var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color);--tw-ring-shadow:var(--tw-ring-inset) 0 0 0 calc(1px + var(--tw-ring-offset-width)) var(--tw-ring-color);box-shadow:var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow, 0 0 #0000)}.focus-visible\:ring-\[\#FF2D20\]:focus-visible{--tw-ring-opacity:1;--tw-ring-color:rgb(255 45 32 / var(--tw-ring-opacity))}@media (min-width: 640px){.sm\:size-16{width:4rem;height:4rem}.sm\:size-6{width:1.5rem;height:1.5rem}.sm\:pt-5{padding-top:1.25rem}}@media (min-width: 768px){.md\:row-span-3{grid-row:span 3 / span 3}}@media (min-width: 1024px){.lg\:col-start-2{grid-column-start:2}.lg\:h-16{height:4rem}.lg\:max-w-7xl{max-width:80rem}.lg\:grid-cols-3{grid-template-columns:repeat(3, minmax(0, 1fr))}.lg\:grid-cols-2{grid-template-columns:repeat(2, minmax(0, 1fr))}.lg\:flex-col{flex-direction:column}.lg\:items-end{align-items:flex-end}.lg\:justify-center{justify-content:center}.lg\:gap-8{gap:2rem}.lg\:p-10{padding:2.5rem}.lg\:pb-10{padding-bottom:2.5rem}.lg\:pt-0{padding-top:0px}.lg\:text-\[\#FF2D20\]{--tw-text-opacity:1;color:rgb(255 45 32 / var(--tw-text-opacity))}}@media (prefers-color-scheme: dark){.dark\:block{display:block}.dark\:hidden{display:none}.dark\:bg-black{--tw-bg-opacity:1;background-color:rgb(0 0 0 / var(--tw-bg-opacity))}.dark\:bg-zinc-900{--tw-bg-opacity:1;background-color:rgb(24 24 27 / var(--tw-bg-opacity))}.dark\:via-zinc-900{--tw-gradient-to:rgb(24 24 27 / 0)  var(--tw-gradient-to-position);--tw-gradient-stops:var(--tw-gradient-from), #18181b var(--tw-gradient-via-position), var(--tw-gradient-to)}.dark\:to-zinc-900{--tw-gradient-to:#18181b var(--tw-gradient-to-position)}.dark\:text-white\/50{color:rgb(255 255 255 / 0.5)}.dark\:text-white{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.dark\:text-white\/70{color:rgb(255 255 255 / 0.7)}.dark\:ring-zinc-800{--tw-ring-opacity:1;--tw-ring-color:rgb(39 39 42 / var(--tw-ring-opacity))}.dark\:hover\:text-white:hover{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.dark\:hover\:text-white\/70:hover{color:rgb(255 255 255 / 0.7)}.dark\:hover\:text-white\/80:hover{color:rgb(255 255 255 / 0.8)}.dark\:hover\:ring-zinc-700:hover{--tw-ring-opacity:1;--tw-ring-color:rgb(63 63 70 / var(--tw-ring-opacity))}.dark\:focus-visible\:ring-\[\#FF2D20\]:focus-visible{--tw-ring-opacity:1;--tw-ring-color:rgb(255 45 32 / var(--tw-ring-opacity))}.dark\:focus-visible\:ring-white:focus-visible{--tw-ring-opacity:1;--tw-ring-color:rgb(255 255 255 / var(--tw-ring-opacity))}}
            </style>
        @endif
    </head>
    <body class="font-sans antialiased dark:bg-black dark:text-white/50">
    
    <main>
    <nav class="navbar navbar-expand-lg bg-light" data-bs-theme="primary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#"></a>
    <a href="/"><img src="{{ asset('css/logo4.png') }}" alt="Card Image" style="height: 50px;"></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="/">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/about">About Us</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="/programs">Programs</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/dreamform">Dream Form</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/pilot2k23">Gallery</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/contactus">Contact Us</a>
        </li>
      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>
        <header>
            <!-- <h1>Our Programs</h1> -->
        </header>
        <div>
        <style>
    body {
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 0;
      background-color: #f4f4f9;
    }

    .container1 {
      display: grid;
      grid-template-columns: repeat(4, 1fr); /* 4 cards per row */
      gap: 20px;
      padding: 20px;
      max-width: 1200px;
      margin: 0 auto;
    }

    .card {
      background: white;
      border-radius: 10px;
      box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
      overflow: hidden;
      transition: transform 0.3s ease, box-shadow 0.3s ease;
      
    }

    .card:hover {
      transform: translateY(-5px);
      box-shadow: 0 8px 15px rgba(0, 0, 0, 0.2);
    }

    .card img {
      width: 100%;
      height: 150px;
      object-fit: cover;
    }

    .card .content {
      padding: 15px;
    }

    .card h3 {
      margin: 0 0 10px;
      font-size: 1.2em;
      color: #333;
    }

    .card p {
      font-size: 0.95em;
      color: #555;
      line-height: 1.6;
      word-wrap: break-word;
    }

    @media (max-width: 1024px) {
      .container1 {
        grid-template-columns: repeat(3, 1fr); /* 3 cards per row for medium screens */
      }
    }

    @media (max-width: 768px) {
      .container1 {
        grid-template-columns: repeat(2, 1fr); /* 2 cards per row for smaller screens */
      }
    }

    @media (max-width: 480px) {
      .container1 {
        grid-template-columns: 1fr; /* 1 card per row for very small screens */
      }
    }
  </style>
</head>
<body>
  <div class="container1">
    <!-- Add 12 cards for the 4x3 grid -->
    <div class="card">
      <img src="{{ asset('css/dreamcatchers.jpg') }}" alt="Card Image">
      <div class="content">
        <h3 class="title">MENTAL WELL-BEING INITIATIVES</h3>
        <p>WORKSHOPS AND COUNSELING SESSIONS TO ADDRESS STRESS, ANXIETY, AND DEPRESSION. IMPACT: REDUCED ACADEMIC PRESSURE AND IMPROVED EMOTIONAL RESILIENCE.</p>
      </div>
    </div>
    <div class="card">
    <img src="{{ asset('css/happiness.jpg') }}" alt="Card Image">
      <div class="content">
        <h3 class="title">FUTURE-READY SKILLS DEVELOPMENT</h3>
        <p>CODING, ROBOTICS, AND AI TRAINING PROGRAMS TO PREPARE STUDENTS FOR EMERGING CAREERS.</p>
        <p>IMPACT: YOUTH EMPOWERED WITH SKILLS FOR FUTURE JOBS AND INDUSTRIES.</p>
      </div>
    </div>
    <div class="card"> 
      <img src="{{ asset('css/tech.jpg') }}" alt="Card Image">
      <div class="content">
        <h3 class="title"> ARTISTIC TALENT DEVELOPMENT</h3>
        <p>MENTORSHIP AND NATIONAL PLATFORMS FOR MUSIC, DANCE, DRAMA, AND STORYTELLING.</p>
        <p>IMPACT: PRESERVATION AND PROMOTION OF CULTURAL HERITAGE THROUGH YOUTH CREATIVITY.</p>
      </div>
    </div>
    <div class="card">
    <img src="{{ asset('css/world.jpg') }}" alt="Card Image">
      <div class="content">
        <h3 class="title">SPORTS EXCELLENCE PROGRAMS</h3>
        <p>CAMPS AND COMPETITIONS TO IDENTIFY AND NURTURE YOUNG ATHLETES.</p>
        <p>IMPACT: ENHANCED PHYSICAL HEALTH AND DISCIPLINE AMONG STUDENTS.</p>
      </div>
    </div>
    <!-- Duplicate cards to make up the grid -->
    <div class="card">
    <img src="{{ asset('css/sports.jpg') }}" alt="Card Image">
      <div class="content">
        <h3 class="title">CLIMATE CHANGE AWARENESS</h3>
        <p>ECO-FRIENDLY PROJECTS AND SUSTAINABILITY WORKSHOPS FOR YOUTH LEADERS.
        <p>IMPACT: INCREASED ENVIRONMENTAL RESPONSIBILITY AND ACTIONABLE CHANGE.</p>
      </div>
    </div>
    <div class="card">
    <img src="{{ asset('css/lifehacks.jpg') }}" alt="Card Image">
      <div class="content">
        <h3 class="title">TECHNOLOGY INTEGRATION FOR LEARNING</h3>
        <p>INTERACTIVE SESSIONS ON HOW AI AND DIGITAL TOOLS ENHANCE LEARNING AND CREATIVITY.</p>
        <p>IMPACT: IMPROVED LEARNING OUTCOMES AND DIGITAL LITERACY.</p>
      </div>
    </div>
    <div class="card">
    <img src="{{ asset('css/ecokids.jpg') }}" alt="Card Image">
      <div class="content">
        <h3 class="title">RURAL AND URBAN TALENT BRIDGING</h3>
        <p>PARTNERSHIPS TO UPLIFT RURAL STUDENTS AND PROVIDE ACCESS TO MODERN RESOURCES.</p>
        <p>IMPACT: EQUAL OPPORTUNITIES FOR GROWTH AND DEVELOPMENT ACROSS REGIONS.</p>
      </div>
    </div>
    <div class="card">
    <img src="{{ asset('css/story.jpg') }}" alt="Card Image">
      <div class="content">
        <h3 class="title">CULTURAL PRESERVATION</h3>
        <p>SHOWCASING REGIONAL ART, FOLKLORE, AND TRADITIONS THROUGH STUDENT-LED INITIATIVES.</p>
        <p>IMPACT:REVIVAL OF INDIA’S DIVERSE ARTISTIC HERITAGE.</p>
      </div>
    </div>
    <div class="card">
    <img src="{{ asset('css/passion.jpg') }}" alt="Card Image">
      <div class="content">
        <h3 class="title">HAPPINESS INDEX ENHANCEMENT</h3>
        <p>MINDFULNESS PRACTICES, GRATITUDE EXERCISES, AND FUN EVENTS TO BOOST HAPPINESS.</p>
        <p>IMPACT: HAPPIER CAMPUSES WITH IMPROVED STUDENT- TEACHER RELATIONSHIPS.</p>
      </div>
    </div>
    <div class="card">
    <img src="{{ asset('css/chronicles.jpg') }}" alt="Card Image">
      <div class="content">
        <h3 class="title">HOLISTIC SKILL BUILDING</h3>
        <p>LIFE SKILLS TRAINING COVERING TEAMWORK, CRITICAL THINKING, AND TIME MANAGEMENT.</p>
        <p>IMPACT: BETTER-PREPARED YOUTH FOR PERSONAL AND PROFESSIONAL SUCCESS.</p>
      </div>
    </div>
    <div class="card">
    <img src="{{ asset('css/mentalhealth.jpg') }}" alt="Card Image">
      <div class="content">
        <h3 class="title">ENTREPRENEURSHIP FOR YOUTH</h3>
        <p>WORKSHOPS ON INNOVATION, BUSINESS, AND PROBLEM-SOLVING.</p>
        <p>IMPACT: EMPOWERED YOUTH WITH ENTREPRENEURIAL MINDSETS AND OPPORTUNITIES.</p>
      </div>
    </div>
    <div class="card">
    <img src="{{ asset('css/culturalroots.jpg') }}" alt="Card Image">
      <div class="content">
        <h3 class="title">BIODIVERSITY AND CONSERVATION EDUCATION</h3>
        <p>TREE PLANTATIONS, CLEAN-UPS, AND NATURE PROJECTS LED BY STUDENTS.</p>
        <p>IMPACT: A GENERATION COMMITTED TO PROTECTING THE PLANET’S BIODIVERSITY.</p>
      </div>
    </div>
  </div>
        </div>
    </main>
   <!-- Footer -->
  <footer
  class="text-center text-lg-start text-white"
  style="background-color: #1c2331"
  >
  <!-- Section: Social media -->
  <section
  class="d-flex justify-content-between p-4"
  style="background-color: #6351ce"
  >
    <!-- Left -->
    <div class="me-5">
      <span>Connect with us on :</span>
    </div>
    <!-- Left -->

    <!-- Right -->
     <div>
      <a href="" class="text-white me-4">
          
          <a href="https://www.instagram.com/myanthem_foundation?utm_source=qr&igsh=aTVvNzc2bnFxZGt3" class="text-white me-4">
        <i class="fab fa-instagram"></i>
      </a>
      <a href="https://www.linkedin.com/company/105364814/admin/page-posts/published/" class="text-white me-4">
        <i class="fab fa-linkedin"></i>
      </a>
       <a href="https://x.com/MyAnthems1" class="text-white me-4">
      <i class="fab fa-twitter"></i>
      </a>
      <a href="https://g.co/kgs/k7xaqFg" class="text-white me-4">
        <i class="fab fa-google"></i>
      </a>
        <i class="fab fa-facebook-f"></i>
      </a>
      <!-- <a href="" class="text-white me-4">
        <i class="fab fa-github"></i>
      </a> -->
    </div>
    <!-- Right -->
  </section>
  <!-- Section: Social media -->

  <!-- Section: Links  -->
  <section class="">
    <div class="container text-center text-md-start mt-5">
      <!-- Grid row -->
      <div class="row mt-3">
        <!-- Grid column -->
        <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
          <!-- Content -->
          <h6 class="text-uppercase fw-bold">My Anthems</h6>
          <hr
              class="mb-4 mt-0 d-inline-block mx-auto"
              style="width: 60px; background-color: #7c4dff; height: 2px"
              />
          <p>
          MyAnthem Foundation is devoted to nurture the natural talents of the students especially from small cities and villages. Students mental & physical health while empowering their hobbies, hidden talents, passion & artistic abilities. Overall transforming their dreams into meaningful realities.
          </p>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
          <!-- Links -->
          <h6 class="text-uppercase fw-bold">Explore</h6>
          <hr
              class="mb-4 mt-0 d-inline-block mx-auto"
              style="width: 60px; background-color: #7c4dff; height: 2px"
              />
          <p>
            <a href="/" class="text-white">Home</a>
          </p>
          <p>
            <a href="/about" class="text-white">About Us</a>
          </p>
          <p>
            <a href="/programs" class="text-white">Programs</a>
          </p>
          <p>
            <a href="/dreamform" class="text-white">DreamForm</a>
          </p>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
          <!-- Links -->
          <!-- <h6 class="text-uppercase fw-bold">Useful links</h6> -->
          <!-- <hr
              class="mb-4 mt-0 d-inline-block mx-auto"
              style="width: 60px; background-color: #7c4dff; height: 2px"
              /> -->
              <br>
              <br>
          <p>
            <a href="/pilot2k23" class="text-white">Gallery</a>
          </p>
          <p>
            <a href="contactus" class="text-white">Contact Us</a>
          </p>
          <p>
            <!-- <a href="#!" class="text-white">Shipping Rates</a> -->
          </p>
          <p>
            <!-- <a href="#!" class="text-white">Help</a> -->
          </p>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
          <!-- Links -->
          <h6 class="text-uppercase fw-bold">Contact</h6>
          <hr
              class="mb-4 mt-0 d-inline-block mx-auto"
              style="width: 60px; background-color: #7c4dff; height: 2px"
              />
          <p><i class="fas fa-home mr-3"></i> Singh Bhavan, Sangam Vihar Colony, Lodhan - Chandmari,
          Varanasi, Uttar Pradesh, 221003.</p>
          <p><i class="fas fa-envelope mr-3"></i>anthem.anurag@gmail.com</p>
          <p><i class="fas fa-phone mr-3"></i>+91 9555501690</p>
          <p><i class="fas fa-print mr-3"></i>+91 9602704181</p>
        </div>
        <!-- Grid column -->
      </div>
      <!-- Grid row -->
    </div>
  </section>
  <!-- Section: Links  -->

  <!-- Copyright -->
  <div
       class="text-center p-3"
       style="background-color: rgba(0, 0, 0, 0.2)"
       >
    © 2023 Copyright: MyAnthem Foundation
    <a class="text-white" href=""
       ></a
      >
  </div>
  <!-- Copyright -->
</footer>
<!-- Footer -->

<!-- End of .container -->
  <!-- Footer -->
<!-- End of .container -->
    </body>
</html>
