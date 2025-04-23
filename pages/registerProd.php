<!DOCTYPE html>
<html lang="pt-br">
<head>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Noto+Sans:ital,wght@0,100..900;1,100..900&display=swap');
    </style>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.playarena.me/FontAwesome/css/all.css">
    <link rel="shortcut icon" href="../img/favicon.ico" type="image/x-icon">
    <title>Coca-Cola: A porta da felicidade</title>
</head>
<body>
<nav class="navBar" id="navBar">
    <a role="button" href="" class="navImage"><img class="navImage" src="../img/R.png" alt="">  </a>
    <div class="buttonsNavDiv" id="mobilenav">
        <a role="button" href="../index.html" class="menuLink">Início</a>
        <a role="button" href="productPage.php" class="menuLink">Produtos</a>
        <a role="button" href="news.html" class="menuLink">Novidades</a>
        <a role="button" href="about.html" class="menuLink">Sobre</a>
        <a role="button" href="contact.html" class="menuLink">Contato</a>
        <button class="respButtons" id="mobileX" onclick="closeMobileMenu()">
            <i class="fa-solid fa-x"></i>
        </button>
        <hr class="hrNavMob" style="width: 100%; height: 2px; border-radius: 5px; outline: none; background-color: black;">
        <div class="navmobFooterDiv">
            <img class="navmobFooter" src="../img/cocacompany.png" alt="The Coca Cola Company Logo" >
        </div>
    </div>
    <button class="respButtons" id="mobilenavbtn" onclick="toggleMobileMenu()">
        <i class="fa fa-bars"></i>
    </button>
</nav>
    <div class="formContainer">
        <h1>Registrar Produto</h1>
        <form action="../script/products.php" method="POST" enctype="multipart/form-data" autocomplete="off">
            <label for="name">Nome do Produto:</label>
            <input type="text" id="name" name="name" placeholder="Nome do produto" required><br>

            <label for="stock">Estoque:</label>
            <input type="number" id="stock" name="stock" placeholder="Estoque do produto" required><br>

                <label for="price">Preço:</label>
                <input type="number" id="price" name="price" step="0.01" placeholder="Preço" required><br>

                <label for="qnt">Conteúdo:</label>
                <input type="text" id="qnt" name="qnt" placeholder="Conteúdo do produto" required><br>

            <label for="image">Imagem:</label>
            <input type="file" id="image" name="image" accept="image/png" required><br>

            <button type="submit">Registrar Produto</button>
        </form>
    </div>
<footer>
    <img class="footerIMG" src="../img/cocacompany.png" alt="">
    <hr style="color: white; width: 80%;">
    <h2>Volte sempre para abrir a porta da felicidade. A Coca-Cola agradece!</h2>
    <hr style="color: white; width: 80%;">
    <div class="footerBtns">
        <a class="ftrBTN" href="#">Política de privacidade</a>
        <a class="ftrBTN" href="contact.html">Viu algo errado? Contate-nos</a>
        <a class="ftrBTN"href="about.html">Conheça mais sobre a empresa</a>
    </div>
</footer>
<script src="../script/app.js"></script>
</body>
</html>