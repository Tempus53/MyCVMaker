<nav class="navbar sticky-top navbar-expand-lg navbar-dark bg-indigo shadow">
    <div class="container">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="/CV/<?=strtolower($_SESSION["currentLang"])?>">CV <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/CV/support"><?=$_SESSION["support"]?></a>
                </li>
            </ul>
            <ul class="navbar-nav mr-2 align-items-center">
                <li class="nav-item mr-2">
                    <div class="row justify-content-end mx-3">
                        <div class="col-md-4 px-3 py-2">
                            <div class="text-light">
                            <?=$_SESSION["theme"]?>
                            </div>
                        </div>
                        <div class="col-md-8 px-3 py-2">
                            <input type="color" id="themeColor1" name="theme1" onchange="changeThemeColor('themeColor1');">
                            <input type="color" id="themeColor2" name="theme2" onchange="changeThemeColor('themeColor2');">
                        </div>
                    </div>
                </li>
                <li class="nav-item mr-2">
                    <div class="form-group">
                        <input id="postInput" name="CV" type="hidden">
                        <button" class="bg-success btn text-center text-light mt-3" onclick="saveCvButton();"><i class="fas fa-save"> <?=$_SESSION["saveBtn"]?></i></button>
                    </div>
                </li>
                <li class="nav-item mr-2">
                    <div class="" id="loadCvID">
                        <input type="file" accept="text/plain" onchange="importCv(event)" class="text-light">
                    </div>
                </li>
                <li class="nav-item mr-2">
                    <div class="" id="previewID">
                        <button class="bg-warning btn text-center text-indigo" onclick="preview(1);"><i class="fas fa-eye"> <?=$_SESSION["previewBtn"]?></i></button>
                    </div>
                </li>
                <li class="nav-item mr-2">
                    <div class="">
                        <button type="submit" class="bg-warning btn text-center text-indigo"><i class="fas fa-download"> <?=$_SESSION["downloadBtn"]?></i></button>
                    </div>
                </li>
                <li class="nav-item mr-2">
                    <div class="" id="">
                        <a href="/CV/<?=strtolower($_SESSION["lang"])?>" class="bg-info btn btn-sm text-center text-light"><i class="fas fa-globe"></i> <?=$_SESSION["lang"]?></a>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</nav>