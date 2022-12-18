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
    <div id="CV" class="container bg-light mt-5">
        <div class="row">
            <div id="abstract" class="col-md-4 p-5 bg-themeColor1" style="background-color:indigo;">
                <div class="row">
                    <img id="img_user" class="img m-auto" style="border-radius:50%; width:10rem !important; height:10rem !important; object-fit: cover;" src="" alt="">
                </div>
                <div class="row preview mt-3 mx-auto">
                    <input type="file" id="userPhoto" name="photo" accept="image/png, image/jpeg, image/jpg" class="text-themeColor2 font-weight-bold" onchange="loadFile(event);">
                </div>
                <div class="mt-1 mb-3">
                    <div class="mt-2">
                        <textarea id="user_name" spellcheck="false" class="textArea text-themeColor2 h4 text-center w-100" rows="1">Muhammet Aykan</textarea>
                    </div>

                    <div class="mt-2">
                        <textarea spellcheck="false" class="textArea text-light h6 text-center w-100" rows="1">Bilişim Sistemleri Mühendisliği</textarea spellcheck="false" >
                    </div>
                    <div class="mt-2">
                        <textarea spellcheck="false"  class="textArea text-floralwhite text-center w-100" rows="1">4. Sınıf</textarea spellcheck="false" >
                    </div>
                </div>
                <div class="row mt-4 text-center">
                    <div class="m-auto">
                        <textarea spellcheck="false"  class="textArea text-themeColor2 h5 text-center w-100" rows="1">İletişim Bilgileri</textarea spellcheck="false" >
                        <div class="underLine bg-themeColor2" style="width:4vh;"></div>
                    </div>
                    <div class="col-12">
                        <ul id="communicationList" class="p-0" style="list-style-type:none;">
                            <li class="">
                                <input class="inputArea text-themeColor2 text-center mt-3" value="Cep">
                                <div class="mt-2 text-light">
                                    <textarea spellcheck="false"  class="textArea text-light text-center w-100" rows="1">532 655 9380</textarea spellcheck="false" >
                                </div>
                            </li>
                            <li class="">
                                <input class="inputArea text-themeColor2 text-center mt-3" value="E-Posta">
                                <div class="mt-2 text-light">
                                    <textarea spellcheck="false"  class="textArea text-light text-center w-100" rows="1">m.aykan053@gmail.com</textarea spellcheck="false" >
                                </div>
                            </li>
                            <li class="">
                                <input class="inputArea text-themeColor2 text-center mt-3" value="Adres">
                                <div class="mt-2 text-light">
                                    <textarea spellcheck="false"  class="textArea text-light text-center w-100">Atatürk Caddesi Bahçeler Sokak Yavuz Apt No 9 Daire 5 Maltepe / İstanbul</textarea spellcheck="false" >
                                </div>
                            </li>
                        </ul>
                        <div class="mt-3 preview">
                            <button class="btn btn-success" onclick="addRow('communicationList');">Ekle</button>
                            <button class="btn btn-danger" onclick="deleteListRow('communicationList',2);">Sil</button>
                        </div>
                    </div>
                </div>
                <div class="row mt-4 text-center">
                    <div class="m-auto">
                        <textarea spellcheck="false"  class="textArea text-themeColor2 h5 text-center w-100" rows="1">Kişisel Bilgiler</textarea spellcheck="false" >
                        <div class="underLine bg-themeColor2" style="width:4vh;"></div>
                    </div>
                    <div class="col-12">
                        <ul id="personalList" class="p-0" style="list-style-type:none;">
                            <li class="">
                                <input class="inputArea text-themeColor2 text-center mt-3" value="Doğum Tarihi">
                                <div class="mt-2 text-light">
                                    <textarea spellcheck="false"  class="textArea text-light text-center w-100" rows="1">12.01.1998</textarea spellcheck="false" >
                                </div>
                            </li>
                            <li class="">
                                <input class="inputArea text-themeColor2 text-center mt-3" value="Doğum Yeri">
                                <div class="mt-2 text-light">
                                    <textarea spellcheck="false"  class="textArea text-light text-center w-100" rows="1">İstanbul</textarea spellcheck="false" >
                                </div>
                            </li>
                        </ul>
                        <div class="mt-3 preview">
                            <button class="btn btn-success" onclick="addRow('personalList');">Ekle</button>
                            <button class="btn btn-danger" onclick="deleteListRow('personalList',1);">Sil</button>
                        </div>
                    </div>
                </div>
                <div class="row mt-4 text-center">
                    <div class="m-auto">
                        <textarea spellcheck="false"  class="textArea text-themeColor2 h5 text-center w-100" rows="1">Yabancı Dil</textarea spellcheck="false" >
                        <div class="underLine bg-themeColor2" style="width:4vh;"></div>
                    </div>
                    <div class="col-12">
                        <ul id="languageList" class="p-0 m-4" style="list-style-type:none;">
                            <li>
                                <div class="row">
                                    <div class="col-md-7">
                                        <input class="inputArea text-right text-light w-100" value="İngilizce">
                                    </div>
                                    <div class="col-md-5">
                                        <input class="inputArea font-weight-bold text-light w-100" value="B2">
                                    </div>
                                </div>
                            </li>
                        </ul>
                        <div class="mt-3 preview">
                            <button class="btn btn-success" onclick="addRow('languageList');">Ekle</button>
                            <button class="btn btn-danger" onclick="deleteListRow('languageList',1);">Sil</button>
                        </div>
                    </div>
                </div>
                    <div class="row mt-5 text-center">
                        <div class="m-auto">
                            <textarea spellcheck="false"  class="textArea text-themeColor2 h5 text-center w-100" rows="1">Yetkinlikler</textarea spellcheck="false" >
                            <div class="underLine bg-themeColor2" style="width:4vh;"></div>
                        </div>
                        <div class="col-12">
                            <div id="skills" class="row p-2 justify-content-center">
                                <div id="s1" class="p-2 mr-2 mt-2 bg-themeColor2 text-dark font-weight-bold rounded" style="max-width: 10vh;">
                                    Unity
                                </div>
                                <div id="s2" class="p-2 mr-2 mt-2 bg-themeColor2 text-dark font-weight-bold rounded">
                                    C#
                                </div>
                                <div id="s3" class="p-2 mr-2 mt-2 bg-themeColor2 text-dark font-weight-bold rounded">
                                    Web Developer
                                </div>
                                <div id="s4" class="p-2 mr-2 mt-2 bg-themeColor2 text-dark font-weight-bold rounded">
                                    HTML
                                </div>
                                <div id="s5" class="p-2 mr-2 mt-2 bg-themeColor2 text-dark font-weight-bold rounded">
                                    CSS
                                </div>
                                <div id="s6" class="p-2 mr-2 mt-2 bg-themeColor2 text-dark font-weight-bold rounded">
                                    JavaScript
                                </div>
                                <div id="s7" class="p-2 mr-2 mt-2 bg-themeColor2 text-dark font-weight-bold rounded">
                                    Python
                                </div>
                                <div id="s8" class="p-2 mr-2 mt-2 bg-themeColor2 text-dark font-weight-bold rounded">
                                    JAVA
                                </div>
                            </div>
                            <div class="mt-1 p-1 preview">
                                <div class="row w-100 justify-content-center">
                                    <input id="addSkillInput" type="text" class="form-control text-center bg-themeColor2 font-weight-bold" style="width:12vh;" placeholder="Dark Arts">
                                    <button class="btn btn-success ml-1" onclick="addSkill('skills');">Ekle</button>
                                    <button class="btn btn-danger ml-2" onclick="removeSkill('skills');">
                                        Sil
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-5 justify-content-center">
                        <small class="text-floralwhite p-2">
                            Designed By | Muhammet AYKAN
                        </small>
                    </div>
            </div>
            <div class="col-md-1"></div>
            <div class="col-md-7 align-self-center">
                <div class="row mt-5">
                    <div class="col-md-6 p-0">
                        <div class="h5 p-2 border-l text-themeColor1">
                            <i class="fas fa-graduation-cap"></i>
                            <input class="inputArea h5 text-themeColor1" value="Eğitim">
                        </div>
                    </div>
                    <div class="col-md-1">
                    </div>
                    <div class="col-md-5 d-flex justify-content-end">
                        <div class="align-self-center preview">
                            <button class="btn bg-indigo text-light" onclick="addRow('educationList');">Satır Ekle</button>
                            <button class="btn btn-danger btn-sml" onclick="deleteListRow('educationList',1);">Sil</button>
                        </div>
                    </div>
                    <div class="col-12">
                        <ul id="educationList" class="p-0" style="list-style-type:none;">
                            <li>
                                <div class="row">
                                    <div class="col-md-3">
                                        <div class="mt-2">
                                            <input class="inputArea text-secondary text-right w-100" value="2017 - 2020">
                                        </div>
                                    </div>
                                    <div class="col-md-1">
                                        <div class="verticalLine h-100 bg-themeColor2"></div>
                                    </div>
                                    <div class="col-md-8">
                                        <div class="mt-2">
                                            <textarea spellcheck="false"  class="textArea w-100">Kocaeli Üniversitesi Teknoloji Fakültesi Bilişim Sistemleri Mühendisliği</textarea spellcheck="false" >
                                        </div>
                                        <div class="mt-2">
                                            <input class="inputArea font-weight-bold" value="3.10">
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="row mt-5">
                    <div class="col-md-6 p-0">
                        <div class="h5 p-2 border-l text-themeColor1">
                            <i class="fas fa-briefcase"></i>
                            <input class="inputArea h5 text-themeColor1" value="Burslar ve Projeler">
                        </div>
                    </div>
                    <div class="col-md-1">
                    </div>
                    <div class="col-md-5 d-flex justify-content-end">
                        <div class="align-self-center preview">
                            <button class="btn bg-indigo text-light" onclick="addRow('projectsList');">Satır Ekle</button>
                            <button class="btn btn-danger btn-sml" onclick="deleteListRow('projectsList',1);">Sil</button>
                        </div>
                    </div>
                    <div class="col-12">
                        <ul id="projectsList" class="p-0" style="list-style-type:none;">
                            <li>
                                <div class="row">
                                    <div class="col-md-3">
                                        <div class="mt-2">
                                            <textarea spellcheck="false"  class="textArea text-secondary w-100" rows="1">2018 - Mobil Oyun</textarea spellcheck="false" >
                                        </div>
                                    </div>
                                    <div class="col-md-1">
                                        <div class="verticalLine h-100 bg-themeColor2"></div>
                                    </div>
                                    <div class="col-md-8">
                                        <div class="mt-2">
                                            <textarea spellcheck="false"  class="textArea w-100" rows="1">Sky Jump</textarea spellcheck="false" >
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="row">
                                    <div class="col-md-3">
                                        <div class="mt-2">
                                            <textarea spellcheck="false"  class="textArea text-secondary w-100" rows="1">2020 - Erasmus+</textarea spellcheck="false" >
                                        </div>
                                    </div>
                                    <div class="col-md-1">
                                        <div class="verticalLine h-100 bg-themeColor2"></div>
                                    </div>
                                    <div class="col-md-8">
                                        <div class="mt-2">
                                            <textarea spellcheck="false"  class="textArea w-100" rows="1">Marijampoles Kolegija - Litvanya</textarea spellcheck="false" >
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="row mt-5">
                    <div class="col-md-6 p-0">
                        <div class="h5 p-2 border-l text-themeColor1">
                            <i class="fas fa-address-card"></i>
                            <input class="inputArea h5 text-themeColor1" value="Staj ve İş Deneyimleri">
                        </div>
                    </div>
                    <div class="col-md-1">
                    </div>
                    <div class="col-md-5 d-flex justify-content-end">
                        <div class="align-self-center preview">
                            <button class="btn bg-indigo text-light" onclick="addRow('expList');">Satır Ekle</button>
                            <button class="btn btn-danger btn-sml" onclick="deleteListRow('expList',1);">Sil</button>
                        </div>
                    </div>
                    <div class="col-12">
                        <ul id="expList" class="p-0" style="list-style-type:none;">
                            <li>
                                <div class="row">
                                    <div class="col-md-3">
                                        <div class="mt-2">
                                            <textarea spellcheck="false"  class="textArea text-secondary w-100" rows="2">Haziran 2019 - Ağustos 2019</textarea spellcheck="false" >
                                        </div>
                                    </div>
                                    <div class="col-md-1">
                                        <div class="verticalLine h-100 bg-themeColor2"></div>
                                    </div>
                                    <div class="col-md-8">
                                        <div class="mt-2">
                                            <textarea spellcheck="false"  class="textArea font-weight-bold w-100" rows="1">Nebula Bilişim Sis.San.ve Tic.Ltd.Şti.</textarea spellcheck="false" >
                                        </div>
                                        <div class="mt-2">
                                            <textarea spellcheck="false"  class="textArea w-100" rows="1">Yazılım Geliştirme - Stajyer</textarea spellcheck="false" >
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="row mt-5 justify-content-center">
                    <div class="m-auto">
                        <textarea spellcheck="false"  class="textArea text-themeColor1 h5 text-center w-100" rows="1">Yetkinlikler</textarea spellcheck="false" >
                        <div class="underLine bg-themeColor1" style="width:4vh;"></div>
                    </div>
                    <div class="col-12 mt-3">
                        <div id="AllSkills" class="row justify-content-center">
                            <div id="A1" class="text-center m-1" style="width:22vh;">
                                <textarea spellcheck="false"  class="textArea h6 text-center w-100" rows="1">Web Geliştirme</textarea spellcheck="false" >
                                <div class="underLine bg-themeColor2 mb-1" style="width:4vh;"></div>
                                <ul id="A1-List" class="p-0" style="list-style-type:none;">
                                    <li>
                                        <div class="row justify-content-center">
                                            <div class="col-md-6">
                                                <textarea spellcheck="false"  class="textArea text-secondary text-right w-100" rows="1" spellcheck="false">Html</textarea spellcheck="false" >
                                            </div>
                                            <div class="col-md-6 d-flex align-items-center skillColHover">
                                                <div id="A1-L1" class="skillLevel bg-success rounded" style="width:100%"></div>
                                                <input id="A1-L1-S" class="skillRangeInput" type="range" onchange="setSkillLevel('A1-L1');">
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                                <div class="mt-4 w-100 justify-content-center preview">
                                    <button class="btn btn-success" onclick="area_addSkill('A1');"><i class="fas fa-plus-circle"></i></button>
                                    <button class="btn btn-danger" onclick="area_removeSkill('A1');"><i class="fas fa-minus-circle"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="mt-3 preview">
                        <button class="btn btn-warning" onclick="removeSkillArea('AllSkills','A')">Alanı Sil</button>
                        <button class="btn bg-indigo text-light" onclick="addSkillArea('AllSkills','A');">Alan Ekle</button>
                    </div>
                </div>
                <div class="row mt-5 justify-content-center">
                    <div class="m-auto">
                        <textarea spellcheck="false"  class="textArea text-themeColor1 h5 text-center w-100" rows="1">İlgi Alanları - Hobiler</textarea spellcheck="false" >
                        <div class="underLine bg-themeColor1" style="width:4vh;"></div>
                    </div>
                    <div class="col-12 mt-3">
                        <div id="Hobbies" class="row p-2 justify-content-center">
                            <div id="B1" class="text-center m-1" style="width:20vh;">
                                <textarea spellcheck="false"  class="textArea h6 text-center w-100" rows="1">Kitap Okumak</textarea spellcheck="false" >
                                <div class="underLine bg-themeColor2 mb-1" style="width:4vh;"></div>
                                <ul id="B1-List" class="p-0" style="list-style-type:none;">
                                    <li>
                                        <div class="row justify-content-center">
                                            <textarea spellcheck="false"  class="textArea text-secondary text-center w-100" rows="1">Fantastik Edebiyat</textarea spellcheck="false" >
                                        </div>
                                    </li>
                                    <li>
                                        <div class="row justify-content-center">
                                            <textarea spellcheck="false"  spellcheck="false" class="textArea text-secondary text-center w-100" rows="1">Dünya Klasikleri</textarea spellcheck="false" >
                                        </div>
                                    </li>
                                </ul>
                                <div class="mt-4 w-100 justify-content-center preview">
                                    <button class="btn btn-success" onclick="addRow('B1-List');"><i class="fas fa-plus-circle"></i></button>
                                    <button class="btn btn-danger" onclick="deleteListRow('B1-List',1);"><i class="fas fa-minus-circle"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="mt-3 preview">
                        <button class="btn btn-warning" onclick="removeSkillArea('Hobbies','B');">Alanı Sil</button>
                        <button class="btn bg-indigo  text-light" onclick="addHobbiesArea('Hobbies','B');">Alan Ekle</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php include "footer.php"; ?>
</body>

</html>