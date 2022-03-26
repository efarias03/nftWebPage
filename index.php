<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name='viewport' content="width=device-width initial-scale=1">
    <title>NFT Marketplace</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>

    <header>
        <nav class="navbar fixed-top navbar-expand-lg navbar-dark">
            <div class="container-fluid">
                <div class="logo">
                    <a class="navbar-brand" href="#"><img class="navbar-logo" src="Ethereum-icon-purple_2 1.svg"
                            alt="Logotipo: OceanNFT">OceanNFT</a>
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
        <section class="main-content container-fluid row col-12 ">
            <div class="main-content-text justify-content-between col-12 col-sm-8 col-md-8 col-lg-6">
                <div class="title col-sm">
                    <h1>Discover, collect, and sell <strong>Timeless</strong> NFTs</h1>
                </div>

                <div class="subtitle col-sm">
                    <p>The world’s first and largest digital marketplace for crypto collectibles and non- fungible
                        tokens
                        (NFTs). </p>
                </div>

                <div class="home-buttons col-sm">
                    <button class="explore-button" type="button">Explore</button>
                    <a class="create-nfts" href="#">Create NFT's</a>
                </div>

                <div class="statistic col-sm">
                    <ul class="statistic-text">
                        <li class="statistic-text-item">
                            <div class="statistic-text-span">
                                <span>35M+</span>
                                <span>Artwork</span>
                            </div>
                        </li>
                        <li class="statistic-text-item">
                            <div class="statistic-text-span">
                                <span>18M+</span>
                                <span>Auctions</span>
                            </div>
                        </li>
                        <li class="statistic-text-item">
                            <div class="statistic-text-span">
                                <span>500k+</span>
                                <span>Artists</span>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="nft-card col-12 col-xs-2 col-sm-8 col-md-8 col-lg-4 justify-content-center">
                <div class="card-image-div">
                    <img class="card-image" src="Group_1877-removebg-preview.png" alt="Imagem de capa do card">
                </div>

                <div class="card-body-content container">
                    <div class="card-body-content-left col-6 container">
                        <div class="card-presentation">
                            <span class="nft-card-title">3D Abstract Hand</span>
                            <span>Nome do Usuario</span>
                        </div>
                        <div class="card-price">
                            <span><b>Reserve Price</b></span>
                            <span><img src="Ethereum-icon-white_2 1.svg">ETH 9.0 (<b>$20.000</b>)</span>
                        </div>
                    </div>
                    <div class="card-body-content-right col-6 container">
                        <div class="card-auction container-fluid justify-content-center col">
                            <div class="auction-announce col-12">
                                <span><b>Auction Ends in:</b></span>
                            </div>
                            <ul class="ul-auction">
                                <li class="li-auction">
                                    <div class="span-auction-text">
                                        <span class="card-auction-text-span">18</span>
                                        <span class="card-auction-text-span"><b>Hours</b></span>
                                    </div>
                                </li>
                                <li>
                                    <div class="span-auction-text">
                                        <span class="card-auction-text-span">20</span>
                                        <span class="card-auction-text-span"><b>Minutes</b></span>
                                    </div>
                                </li>
                                <li>
                                    <div class="span-auction-text">
                                        <span class="card-auction-text-span">10</span>
                                        <span class="card-auction-text-span"><b>Seconds</b></span>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="card-bid-button col-12">
                            <button class="bid-button" type="button">Place Bid</button>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>



    <div>
        <footer>

        </footer>
    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
        integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
        integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
        crossorigin="anonymous"></script>
    <script src="main/main.js">

    </script>

</body>

</html>
