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
    echo "<script>alert('Product added successfully!');</script>";
    echo "<h1>Seu novo produto foi adicionado, redirecionando para a página de produtos...</h1>";

} else {
    echo "<script>alert('Failed to upload image.');</script>";
}
echo "<script>
setTimeout(`window.location.href = '../pages/productPage.php'`, 4000);
</script>";
