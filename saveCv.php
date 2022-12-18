<?php
if (isset($_POST["CV"])) {
    $CV = $_POST["CV"];
} else {
    header("location:index.php");
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
</head>
<script>
    window.onload = function() {
        saveCv(`<?php echo $CV ?>`,'MyCv','txt');
        this.window.close();
    };
    function saveCv(data,filename, type)
    {
        var file = new Blob([data], {
            type: type
        });
        if (window.navigator.msSaveOrOpenBlob) // IE10+
            window.navigator.msSaveOrOpenBlob(file, filename);
        else { // Others
            var a = document.createElement("a"),
                url = URL.createObjectURL(file);
            a.href = url;
            a.download = filename;
            document.body.appendChild(a);
            a.click();
            setTimeout(function() {
                document.body.removeChild(a);
                window.URL.revokeObjectURL(url);
            }, 0);
        }
    };
</script>

<body class="">

</body>

</html>