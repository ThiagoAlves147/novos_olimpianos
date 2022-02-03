<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <script src="https://kit.fontawesome.com/f5c5b70e3a.js" crossorigin="anonymous"></script>
    <title>NORPG</title>
</head>
<body class="home">
    <header class="cabecalho">
        <div class="logo">
            <img src="/img/logo1.png" alt="Logo" width="190px"/>
        </div>

        <div class="navbar">
            <a href="{{route('index')}}" class="navbarL">Home</a>
            <a href="" class="navbarL">Ficha</a>
            <a href="" class="navbarL">Arquivos</a>
            <a href="{{route('wiki.wikis')}}" class="navbarL">Wiki</a>
            <a href="" class="navbarL">Loja</a>
           <!-- <i class="fas fa-bars"></i> -->
        </div>

        <div class="iconLogin">
            <i class="far fa-user-circle fa-2x" data-bs-toggle="modal" data-bs-target="#exampleModal"></i>
        </div>
    </header>

    <section class="content">
            @yield('conteudo')
    </section>

    <footer>
        <div class="rodape">
            NovosOlimpianos@2022/aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa
        </div>
    </footer>

    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h3 class="modal-title" id="exampleModalLabel">LOGIN</h3>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                
                <div class="modal-body">
                    <form action="../ver/verificarAdicionar.php" method="POST">
                        <div class="form-floating mb-3">
                            <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com" name="email">
                            <label for="floatingInput">E-mail</label>
                        </div>
                        <div class="form-floating">
                            <input type="password" class="form-control" id="floatingPassword" placeholder="Senha">
                            <label for="floatingPassword">Senha</label>
                        </div>
                </div>

                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary">Enviar</button>
                    </div>

                    </form>
            </div>
         </div>
    </div>
    <script src="{{ asset('js/funcoes.js')}}"></script>
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>