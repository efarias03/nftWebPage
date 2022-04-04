<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name='viewport' content="width=device-width initial-scale=1">
    <title>NFT Marketplace</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="style/style.css">
    <link rel="shortcut icon" href="style/images/Ethereum-icon-purple_2 1.svg">

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@700&display=swap');

        body {
            display: grid;
            place-items: center;
            height: 100vh;
        }

        img {
            position: relative;
            width: 15rem;
            transform: scale(40px);
            transition: 1s;
        }

        .message-to-user {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            gap: 6rem;
            text-align: center;
        }

        .message-to-user span {
            font-family: 'Poppins';
            font-style: normal;
            font-weight: 700;
            font-size: 50px;
        }
    </style>
</head>



<body>

    <header>
        <nav class="navbar fixed-top navbar-expand-lg navbar-dark">
            <div class="container-fluid">
                <div class="logo">
                    <a class="navbar-brand" href="#"><img class="navbar-logo"
                            src="style/images/Ethereum-icon-purple_2 1.svg" alt="Logotipo: OceanNFT">OceanNFT</a>
                </div>
                <button class="navbar-toggler" type="button" data-toggle="collapse"
                    data-target="#conteudoNavbarSuportado" aria-controls="conteudoNavbarSuportado" aria-expanded="false"
                    aria-label="Alterna navegação">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="container-fluid collapse navbar-collapse justify-content-between align-self-start"
                    id="conteudoNavbarSuportado">
                    <div class="container-fluid justify-content-center">
                        <ul class="navbar-nav justify-content-between col-6">
                            <li class="nav-item col-1">
                                <a class="nav-link" href="#">Market <span class="sr-only">(página atual)</span></a>
                            </li>
                            <li class="nav-item col-1">
                                <a class="nav-link" href="#">Features</a>
                            </li>
                            <li class="nav-item col-1">
                                <a class="nav-link" href="#">Community</a>
                            </li>
                        </ul>
                    </div>
                    <div class="nav-icons nav-item">
                        <a href="#" class="shopping-cart">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z" />
                            </svg></a>
                        <a href="#" class="profile">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M5.121 17.804A13.937 13.937 0 0112 16c2.5 0 4.847.655 6.879 1.804M15 10a3 3 0 11-6 0 3 3 0 016 0zm6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        </nav>
    </header>
    <main>
        <div class="message-to-user">
            <img src="style/images/black-hole.png" alt="Black Hole Drawn">
            <span> Oh no Human ! this Page isn't ready.<br>I'm sorry, come back later Please :(</span>
        </div>
    </main>








    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
        integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
        integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
        crossorigin="anonymous"></script>
    <script src="main/main.js"></script>
</body>

</html>
