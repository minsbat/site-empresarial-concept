<?php
$name = $_POST['name'];
$price = $_POST['price'];
$stock = $_POST['stock'];
$qnt = $_POST['qnt'];

$imgName = basename($_FILES['image']['name']);
$path = "DB/" . $imgName;

if (!is_dir("DB")) {
    mkdir("DB");
}

if (move_uploaded_file($_FILES['image']['tmp_name'], $path)) {
    if (!file_exists("DB/products.txt")) {
        fopen("DB/products.txt", "w");
    }
    $line = "$name|$price|$stock|$qnt|../script/$path\n";
    file_put_contents("DB/products.txt", $line, FILE_APPEND);
    echo "<script>alert('Produto adicionado com sucesso, redirecionando para o catálogo...')
window.location.href = '../pages/productPage.php'
</script>";

} else {
    echo "<script>alert('Falha ao adicionar imagem, tente novamente, redirecionando para o catálogo...');
window.location.href = '../pages/productPage.php'</script>";

}
