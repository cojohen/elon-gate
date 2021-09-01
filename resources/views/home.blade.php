<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Elon Gate: The world's premier Elon Musk quote library </title>
    <link 
        rel="stylesheet"
        href="{{ asset('css/app.css') }}"
    />
    <link 
        rel="apple-touch-icon" 
        sizes="180x180" 
        href="{{ asset('images/apple-touch-icon.png') }}"
    />
    <link 
        rel="icon" 
        type="image/png" 
        sizes="32x32" 
        href="{{ asset('images/favicon-32x32.png') }}"
    />
    <link 
        rel="icon" 
        type="image/png" 
        sizes="16x16" 
        href="{{ asset('images/favicon-16x16.png') }}"
    />
    <link 
        rel="manifest" 
        href="{{ asset('site.webmanifest') }}"
    />

</head>
<body>
    <header>

    </header>
    <main>
        <div class="quoteTile">
            <img 
                src="{{ asset('images/android-chrome-192x192.png') }}"
                alt="Elon Musk's Face"
            />
            <p>
                {{ $quote }}
            </p>
            
            <sub>
                -Elon Musk
            </sub>
        </div>
    </main>
</body>
</html>