<!DOCTYPE html>
<html>
<!--
	Projekat kupujemProdajem (PIA 2020)
	-->
<head>
    <title>KP-Početna</title>
    <meta name="author" content="Ђорђе Гачић, Вељко Максимовић" />
    <meta charset="utf-8" />
    <meta name="description" content="HTML/CSS/Bootstrap/JavaScript/jQuery/mySQL/PHP project." />
    <meta name="keywords" content="pia, web programming, html, css, bootstrap, javascript, jquery, PHP, mySQL" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script> 
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="kp.css">
    <script src="kp.js"></script>
</head>
<body>
    <?php include("loadDatabase.php");?>
    <ul class="topnav">
        <li><a onclick="loadHome()" style="padding: 0;"><img id="logo" src="images/logoo.jpg" alt="pageLogo"></a></li>
        <li><a class="searchButton"><i class="fa fa-fw fa-search"></i>Pretraga</a></li>
        <li class="right"><a onclick="loadSignUpForm()"><i class="fa fa-fw fa-user"></i>Registracija</a></li>
        <li class="right"><a onclick="loadLogInForm()"><i class="fa fa-fw fa-user"></i>Prijava</a></li>
    </ul>

    <div id="searchPanel">
        <div class="searchTitle">
            <form action="#">
                <input id="yourTitleToSearch" type="text" placeholder="Pretraži po nazivu..." name="search">
                <button type="button" class="submitSearch" onclick="searchByTitleHome()">Pretraži</button>
            </form>
        </div>
        <div class="searchCategory">
            <div class="dropdown">
                <button class="btn dropdown-toggle" type="button" data-toggle="dropdown" style="background-color: #ccc; border: none;">Kategorije
                    <span class="caret"></span>
                </button>
                <div class="dropdown-menu">
                    <div class="categories" style="display: flex;">
                        <div id="col" style="margin: 5px 15px 5px 15px;">
                        <a href="#" onclick="loadHome()">SVE</a><br>
                        <a href="#" onclick="searchByCategoryHome('Alati i oruđa')">Alati i oruđa</a><br>
                        <a href="#" onclick="searchByCategoryHome('Antikviteti')">Antikviteti</a><br>
                        <a href="#" onclick="searchByCategoryHome('Audio uređaji')">Audio uređaji</a><br>
                        <a href="#" onclick="searchByCategoryHome('Automobili i oprema')">Automobili i oprema</a><br>
                        <a href="#" onclick="searchByCategoryHome('Bebi oprema i stvari')">Bebi oprema i stvari</a><br>
                        <a href="#" onclick="searchByCategoryHome('Bela tehnika i kucni aparati')">Bela tehnika i kucni aparati</a><br>
                        <a href="#" onclick="searchByCategoryHome('Bicikli i oprema')">Bicikli i oprema</a><br>
                        <a href="#" onclick="searchByCategoryHome('Časopisi i stripovi')">Časopisi i stripovi</a><br>
                        <a href="#" onclick="searchByCategoryHome('Cveće')">Cveće</a><br>
                        <a href="#" onclick="searchByCategoryHome('Domaća hrana')">Domaća hrana</a><br>
                        <a href="#" onclick="searchByCategoryHome('Domaće životinje')">Domaće životinje</a><br>
                        <a href="#" onclick="searchByCategoryHome('Dvorište i bašta')">Dvorište i bašta</a><br>
                        <a href="#" onclick="searchByCategoryHome('Elektronika i komponente')">Elektronika i komponente</a><br>
                        <a href="#" onclick="searchByCategoryHome('Firme')">Firme</a><br>
                        <a href="#" onclick="searchByCategoryHome('Foto')">Foto</a><br>
                        <a href="#" onclick="searchByCategoryHome('Građevinarstvo')">Građevinarstvo</a><br>
                        <a href="#" onclick="searchByCategoryHome('Igračke i igre')">Igračke i igre</a><br>
                        </div>
                        <div id="col" style="margin: 5px 10px 5px 10px;">
                        <a href="#" onclick="searchByCategoryHome('Industrijska oprema')">Industrijska oprema</a><br>
                        <a href="#" onclick="searchByCategoryHome('Kamioni')">Kamioni</a><br>
                        <a href="#" onclick="searchByCategoryHome('Knjige')">Knjige</a><br>
                        <a href="#" onclick="searchByCategoryHome('Kolekcionarstvo')">Kolekcionarstvo</a><br>
                        <a href="#" onclick="searchByCategoryHome('Konzole i igrice')">Konzole i igrice</a><br>
                        <a href="#" onclick="searchByCategoryHome('Kozmetika')">Kozmetika</a><br>
                        <a href="#" onclick="searchByCategoryHome('Kućni ljubimci')">Kućni ljubimci</a><br>
                        <a href="#" onclick="searchByCategoryHome('Kupatilo i oprema')">Kupatilo i oprema</a><br>
                        <a href="#" onclick="searchByCategoryHome('Lov i ribolov')">Lov i ribolov</a><br>
                        <a href="#" onclick="searchByCategoryHome('Mobilni telefoni i oprema')">Mobilni telefoni i oprema</a><br>
                        <a href="#" onclick="searchByCategoryHome('Motocikli i oprema')">Motocikli i oprema</a><br>
                        <a href="#" onclick="searchByCategoryHome('Muzika i instrumenti')">Muzika i instrumenti</a><br>
                        <a href="#" onclick="searchByCategoryHome('Nakit, satovi i dragocenosti')">Nakit, satovi i dragocenosti</a><br>
                        <a href="#" onclick="searchByCategoryHome('Nameštaj')">Nameštaj</a><br>
                        <a href="#" onclick="searchByCategoryHome('Nega lica i tela')">Nega lica i tela</a><br>
                        <a href="#" onclick="searchByCategoryHome('Nekretnine')">Nekretnine</a><br>
                        <a href="#" onclick="searchByCategoryHome('Obuća')">Obuća</a><br>
                        </div>    
                        <div id="col" style="margin: 5px 10px 5px 10px;">
                        <a href="#" onclick="searchByCategoryHome('Odeća')">Odeća</a><br>
                        <a href="#" onclick="searchByCategoryHome('Odmor')">Odmor</a><br>
                        <a href="#" onclick="searchByCategoryHome('Oprema za poslovanje')">Oprema za poslovanje</a><br>
                        <a href="#" onclick="searchByCategoryHome('Oprema u zdravstvu')">Oprema u zdravstvu</a><br>
                        <a href="#" onclick="searchByCategoryHome('Plovni objekti')">Plovni objekti</a><br>
                        <a href="#" onclick="searchByCategoryHome('Poljoprivreda')">Poljoprivreda</a><br>
                        <a href="#" onclick="searchByCategoryHome('Računari i oprema')">Računari i oprema</a><br>
                        <a href="#" onclick="searchByCategoryHome('Sport i razonoda')">Sport i razonoda</a><br>
                        <a href="#" onclick="searchByCategoryHome('Školski pribor i udžbenici')">Školski pribor i udžbenici</a><br>
                        <a href="#" onclick="searchByCategoryHome('Torbe, novčanici i asesoari')">Torbe, novčanici i asesoari</a><br>
                        <a href="#" onclick="searchByCategoryHome('TV i video uređaji')">TV i video uređaji</a><br>
                        <a href="#" onclick="searchByCategoryHome('Ugostiteljstvo i oprema')">Ugostiteljstvo i oprema</a><br>
                        <a href="#" onclick="searchByCategoryHome('Umetnička dela')">Umetnička dela</a><br>
                        <a href="#" onclick="searchByCategoryHome('Uređenje kuće')">Uređenje kuće</a><br>
                        <a href="#" onclick="searchByCategoryHome('OSTALO')">OSTALO</a><br>
                        </div>           
                    </div>
                </div>
            </div>
        </div>
        <div class="searchPrice">
            <form action="#">
                <span style="font-size: 15px; color: black;">Cena(EUR):<span>
                <input id="priceFrom" type="text" placeholder="od" name="search" style="width: 50px;">
                <span style="font-size: 15px; color: black;"> - <span>
                <input id="priceTo" type="text" placeholder="do" name="search" style="width: 50px;">
                <button type="button" class="submitSearch" onclick="searchByPriceHome()">Pretraži</button>
            </form>
        </div>
    </div>



    <div id="allProducts" class="container-fluid"><br>
    <div class="products">
            <?php
            $servername = "localhost";
            $username = "root";
            $password = "password";
            $dBase = "KP";

            $connectForProducts = new mysqli($servername, $username, $password, $dBase);
            if ($connectForProducts->connect_error) {
                die("Connection failed: " . $connectForProducts->connect_error);
              }

            $fromProductsSelected = "SELECT idP, idS, titleP, priceP, categoryP, locationP, quantityP, deliveryTypeP, aboutP FROM allProductsKP";
            $resultProductsSelection = $connectForProducts->query($fromProductsSelected);
            $productsAll = "";
            $elementIdNum = 1;
            while($rowProducts = $resultProductsSelection->fetch_assoc()) {
                $currentSellerId = $rowProducts["idS"];
                $currentProductId = $rowProducts["idP"];
                $fromImagesSelected = "SELECT idProductIm, imagePathIm FROM allImagesP WHERE idProductIm=$currentProductId";
                $resultImagesSelection = $connectForProducts->query($fromImagesSelected);
                $toGetFirst = 0;
                $homeImagePath = "";
                while($rowImages = $resultImagesSelection->fetch_assoc()){
                    if ($toGetFirst == 0){
                        $homeImagePath = $rowImages["imagePathIm"];
                    }
                    $toGetFirst++;
                }
                $customer = "customer";
                $idPr = $rowProducts["idP"];
                $productsAll .= '<div class="product" id="product'.$elementIdNum.'"><a class="link-product" id="'.$rowProducts["idP"].'" onclick="loadProductPageOrdinary('.$idPr.')">
                <img src="'.$homeImagePath.'" alt="productPicture">
                     <div class="describe-product">
                         <div class="describeTitle" id="describeTitle"><span id="ProductTitle'.$elementIdNum.'">'.$rowProducts["titleP"].'</span></div>
                         <div class="describePrice">'.$rowProducts["priceP"].'&euro;</div>
                     </div>
                     </a>
                </div>';
                $elementIdNum++;
            }
            echo $productsAll;
            $connectForProducts->close();
            ?>
        </div>
    </div> 


 
</body>
</html>