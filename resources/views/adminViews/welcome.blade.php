<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/styleWelcome.css')}}">
    <title>Home</title>
</head>
<body>
    <header>
        <ul class="nav justify-content-end">
            <li>
                @if (Route::has('login'))
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Acessar Carteira</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                @endif
            </li>
        </ul>
    </header>
    <section class="textoPrincipal">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h1>my Pet</h1>
                    <img src="{{('assets/img/patarosa2.png')}}" alt="">
                </div>
            </div>
        </div>
    </section>
    <section id="inforbody">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 text-center">
                    <svg xmlns="http://www.w3.org/2000/svg" width="60" height="60" fill="currentColor" class="bi bi-chat-square-dots-fill icon" viewBox="0 0 16 16" id="icon">
                        <path d="M0 2a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2h-2.5a1 1 0 0 0-.8.4l-1.9 2.533a1 1 0 0 1-1.6 0L5.3 12.4a1 1 0 0 0-.8-.4H2a2 2 0 0 1-2-2V2zm5 4a1 1 0 1 0-2 0 1 1 0 0 0 2 0zm4 0a1 1 0 1 0-2 0 1 1 0 0 0 2 0zm3 1a1 1 0 1 0 0-2 1 1 0 0 0 0 2z"/>
                    </svg><br>
                    <p class="text">
                        Olá me chamo fred, hoje tenho 6 anos, sou muito bricalhão e muito peralta au au! sou muito apegado aos meus donos e fico furioso quando 
                        eles não me dão atenção, faço qualquer coisa para chamar a atenção deles, até ja fiz pi pi. 
                    </p>
                </div>
                <div class="col-lg-4 text-center">
                <svg xmlns="http://www.w3.org/2000/svg" width="60" height="60" fill="currentColor" class="bi bi-palette-fill icon" viewBox="0 0 16 16" id="icon">
                    <path d="M12.433 10.07C14.133 10.585 16 11.15 16 8a8 8 0 1 0-8 8c1.996 0 1.826-1.504 1.649-3.08-.124-1.101-.252-2.237.351-2.92.465-.527 1.42-.237 2.433.07zM8 5a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm4.5 3a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zM5 6.5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm.5 6.5a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3z"/>
                </svg><br>
                    <p class="text">
                        Sou da raça poodle. De acordo com a Federação Cinológica Internacional essa raça é oriunda da 
                        França, por ter sido reivindicada, porém ela já era há muito tempo criada em países da Europa 
                        Central como a Alemanha. Originalmente, era utilizado como cão de caça. 
                    </p>
                </div>
                <div class="col-lg-4 text-center">
                    <svg xmlns="http://www.w3.org/2000/svg" width="60" height="60" fill="currentColor" class="bi bi-geo-alt-fill" viewBox="0 0 16 16" id="icon">
                        <path d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10zm0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6z"/>
                    </svg><br>
                    <p class="text"> 
                        Moro na rua Dr José Silva em São José de Ribamar - MA, no bairro Moropoia, fica pertinho do parque da cidade, o numero da casa
                        é 65c. ha!! também tem o numero (98) 98106 -1009 caso queira entrar em contato. 
                    </p>
                </div>
            </div>
        </div>
    </section>
    <footer class="footer">
        <div class="row">
            <div class="col-sm-12 text-center">
                <p>2ps.com</p>
            </div>
        </div>
    </footer>
            
    <script src="{{asset('assets/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('assets/js/script.js')}}"></script>
</body>
</html>