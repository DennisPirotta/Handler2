<!doctype html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/sass/404.scss'])
    <title>404</title>
    <script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
</head>
<body>
<div>
    <div class="text"><p>404</p></div>
    <div class="container">
        <!-- caveman left -->
        <div class="caveman">
            <div class="leg">
                <div class="foot"><div class="fingers"></div></div>
            </div>
            <div class="leg">
                <div class="foot"><div class="fingers"></div></div>
            </div>
            <div class="shape">
                <div class="circle"></div>
                <div class="circle"></div>
            </div>
            <div class="head">
                <div class="eye"><div class="nose"></div></div>
                <div class="mouth"></div>
            </div>
            <div class="arm-right"><div class="club"></div></div>
        </div>
        <!-- caveman right -->
        <div class="caveman">
            <div class="leg">
                <div class="foot"><div class="fingers"></div></div>
            </div>
            <div class="leg">
                <div class="foot"><div class="fingers"></div></div>
            </div>
            <div class="shape">
                <div class="circle"></div>
                <div class="circle"></div>
            </div>
            <div class="head">
                <div class="eye"><div class="nose"></div></div>
                <div class="mouth"></div>
            </div>
            <div class="arm-right"><div class="club"></div></div>
        </div>
    </div>
    <a href="{{ route('home') }}">
        <div id="link">
            <div style="flex: 100%;font-size: 2rem" id="linkText">La pagina che hai cercato non esiste</div>
            <div style="flex:100%; margin-top: 25px">Verrai reindirizzato alla home tra <span id="counter">5</span></div>
        </div>
    </a>
</div>
<script>
    $(()=>{
        let i = 4
        setInterval(()=>{
            $('#counter').text(i--)
            if (i < 0) window.location.href = '{{ route('home') }}'
        },1000)
    })
</script>
</body>
</html>
