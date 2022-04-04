<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login | OceanNFT</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="style/style.css">
    <link rel="shortcut icon" href="style/images/Ethereum-icon-purple.svg">

    <style>
        body {
            display: grid;
            place-items: center;
            height: 80vh;
            font-family: 'Inter';
            font-style: normal;
            font-weight: 500;
            font-size: 15.4764px;
            line-height: 27px;
            color: #000000;
        }

        form {
            min-width: 30rem;
            border: 1px solid;
            border-radius: 20px;
            background-color: #fffffff1;
            justify-content: center;
            align-items: center;
        }

        fieldset {
            width: 90%;
            margin: 1rem auto 2rem auto;
            display: flex;
            flex-direction: column;
        }

        .inputBox {
            opacity: 0.5;
            display: flex;
            flex-direction: column-reverse;
        }


        input {
            color: #000000;
            width: 90%;
            margin: auto;
            background: none;
            border: none;
            outline: none;
        }

        input:focus~label,
        input:valid~label {
            bottom: -.5rem;
            transition: .5s;
            font-size: 14px;
        }

        label {
            margin-left: 1.7rem;
            transition: .5s;
            position: relative;
            bottom: -2.2rem;
            pointer-events: none;
        }

        .input-underline {
            border: 1px solid #000000ec;
            opacity: 0.3;
            width: 90%;
            margin: auto;
        }

        .form-btn {
            font-family: 'Inter';
            font-style: normal;
            font-weight: 500;
            font-size: 15.4764px;
            line-height: 27px;
            color: #fffffff1;
            margin-top: 2rem;
            width: 90%;
            margin: 3.5rem auto 0 auto;
            padding: .3rem;
            border-radius: 15px;
            border: none;
            background: rgb(157, 74, 249);
            background: -moz-linear-gradient(100deg, rgba(157, 74, 249, 1) 0%, rgba(126, 7, 231, 1) 100%);
            background: -webkit-linear-gradient(100deg, rgba(157, 74, 249, 1) 0%, rgba(126, 7, 231, 1) 100%);
            background: linear-gradient(100deg, rgba(157, 74, 249, 1) 0%, rgba(126, 7, 231, 1) 100%);
            filter: progid:DXImageTransform.Microsoft.gradient(startColorstr="#9d4af9", endColorstr="#7e07e7", GradientType=1);
            cursor: pointer;
            transition: .50s;
        }

        .form-btn:hover {
            opacity: .8;
            transition: .50s;
        }
    </style>
</head>

<body>

    <header>
        <nav class="navbar fixed-top navbar-expand-lg navbar-dark">
            <div class="navbar-div container-fluid">
                <div class="logo">
                    <a class="navbar-brand" href="index.php"><img class="navbar-logo"
                            src="style/images/Ethereum-icon-purple.svg" alt="Logotipo: OceanNFT">OceanNFT</a>
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
                        <a href="index3.html" class="profile">
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
        <div>
            <form name="myform" method="post">
                <fieldset>
                    <legend id="title"><b>Login</b></legend>
                    <br><br>
                    <div class="inputBox">
                        <div class="input-underline"></div>
                        <input type="text" name="name" id="name" class="input-name" required>
                        <label for="nome" class="labelInput">Username</label>
                    </div>
                    <div class="inputBox">
                        <div class="input-underline"></div>
                        <input type="password" name="password" id="password" class="input-password" required>
                        <label for="password" class="labelInput">Password</label>
                    </div>
                    <button id="submit" type="submit" class="form-btn">Submit</button>
                </fieldset>
            </form>
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
