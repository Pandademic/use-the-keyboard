<head>
    <meta charset="utf-8">
    <title>{{ $meta_title ?? 'Keyboard shortcuts for Mac apps, Windows programs, and websites' }} &rarr; UseTheKeyboard</title>

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="{{ $meta_description ?? '' }}">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="HandheldFriendly" content="True">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta property="og:locale" content="en_US" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="{{ $meta_title ?? 'Keyboard shortcuts for Mac apps, Windows programs, and websites' }}" />
    <meta property="og:description" content="{{ $meta_description ?? '' }}" />
    <meta property="og:url" content="https://usethekeyboard.com/{{ $slug === '/' ? '' : $slug }}" />
    <meta property="og:site_name" content="UseTheKeyboard" />
    <meta property="og:image" content="https://usethekeyboard.com/assets/img/undraw-taking-notes-square.png" />

    <meta name="twitter:card" content="summary" />
    <meta name="twitter:description" content="{{ $meta_description ?? '' }}" />
    <meta name="twitter:title" content="{{ $meta_title ?? 'Keyboard shortcuts for Mac apps, Windows programs, and websites' }}" />
    <meta name="twitter:site" content="@aschmelyun" />
    <meta name="twitter:image" content="https://usethekeyboard.com/assets/img/undraw-taking-notes-square.png" />

    <link rel="apple-touch-icon" sizes="180x180" href="/assets/img/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/assets/img/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/assets/img/favicon-16x16.png">
    <meta name="theme-color" content="#b53471">

    <link rel="stylesheet" type="text/css" href="{{ $mix['/assets/css/app.css']  }}">
    <link
        rel="preload"
        href="https://fonts.googleapis.com/css?family=Nunito:700|Open+Sans:400,600,700&display=swap"
        as="style"
        onload="this.onload=null;this.rel='stylesheet'"
    />
    <noscript>
        <link
            href="https://fonts.googleapis.com/css?family=Nunito:700|Open+Sans:400,600,700&display=swap"
            rel="stylesheet"
            type="text/css"
        />
    </noscript>

    <script defer src="{{ $mix['/assets/js/app.js'] }}"></script>
</head>
