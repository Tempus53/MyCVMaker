<?php
if (isset($_SESSION["currentLang"])) {
    if ($_SESSION["currentLang"] == "EN") {
        $header = "You can support us by donating.";
        $address = "Wallet Address";
    } else {
        $header = "Bağış yaparak bizlere destek olabilirsiniz.";
        $address = "Cüzdan Adresi";
    }
}
else{
    header("location: /CV/");
}
?>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <script src="https://kit.fontawesome.com/0366f96474.js" crossorigin="anonymous"></script>
    <link href="style/style.css" rel="stylesheet">
    <link href="style/anims.css" rel="stylesheet">
    <link href="style/defaults.css" rel="stylesheet">
    <link rel="alternate" href="localhost/CV/en" hreflang="en" />
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.22/pdfmake.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/0.4.1/html2canvas.min.js"></script>
    <script src="script.js"></script>
</head>

<body class="bg-dark">
    <?php
    include "navbar.php";
    ?>
    <div class="container bg-light pt-5" style="height:84vh;">
        <div class="row">
            <div class="px-5">
                <h1>
                    <?= $header ?>
                </h1>
            </div>
        </div>
        <div class="mt-3 row p-5">
            <div class="col-md-3">
                <img src="style/img/wallet.png" class="img-fluid" style="height:12rem;">
            </div>
            <div class="col-md-9 align-self-center">
                <div class="row">
                    <h6><?= $address ?></h6>
                </div>
                <div class="row align-items-center">
                    <div id="walletCode" class="hover-scale">
                        1JUtBrny5Anfgm1CyLABZSmuhPWLotcLKR <i class="fas fa-copy ml-3"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php include "footer.php"; ?>
</body>

</html>