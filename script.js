window.onload = function () {
    document.getElementById("themeColor1").value = "#4b0082";
    document.getElementById("themeColor2").value = "#ffc107";
};
$(() => {
    $(document).on('change','textarea', function (e) {
        this.innerHTML = e.target.value;
    });
    $(document).on('change','input', function (e) {
        $(this).attr({
            value: e.target.value
        });
    });

})
function addListRow(whichList) {
    $("#" + whichList).append('<li class=""> <div class="row"><div class="col-md-3"><div class="mt-2 text-secondary text-right"><input class="inputArea text-secondary text-right w-100" value="1998 - 2005"></div></div><div class="col-md-1"><div class="verticalLine h-100 bg-themeColor2"></div></div><div class="col-md-8"><div class="mt-2"><textarea spellcheck="false"  class="textArea w-100" rows="1">Örn: Hogwarts Cadılık ve Büyücülük Okulu</textarea spellcheck="false" ></div></div></div></li>');
}

function addCommunicationRow(whichList) {
    $("#" + whichList).append('<li class=""><input class="inputArea text-themeColor2 text-center mt-3" value="Örn: Başlık"><div class="mt-2 text-light"><textarea spellcheck="false"  class="textArea text-light text-center w-100" row="1">Örn: Bağıran Baraka / Hogsmade</textarea spellcheck="false" ></div></li>');
}

function deleteListRow(whichList, howMany) {
    var length = document.getElementById(whichList).children.length;
    if (length > howMany) {
        var list = document.getElementById(whichList);
        list.removeChild(list.lastChild);
    }
}

function addSkill(which) {
    var skill = $("#addSkillInput").val();
    var where = document.getElementById(which).childElementCount;
    $("#" + which).append('<div id="s' + (where + 1) + '" class="p-2 mr-2 mt-2 bg-themeColor2 text-dark font-weight-bold rounded">' + skill + '</div>');
    changeThemeColor('themeColor2');
}

function removeSkill(which) {
    var which = document.getElementById(which).childElementCount;
    $("#s" + which).remove();
}

function addRow(which) {
    var list = document.getElementById(which);
    $("#" + which).append("<li>" + list.childNodes[1].innerHTML + "</li>");

}

function setSkillLevel(str) {
    document.getElementById(str).style.width = $("#" + str + "-S").val() + "%";
}

function area_addSkill(whichArea) {
    var length = document.getElementById(whichArea + "-List").children.length + 1;
    $("#" + whichArea + "-List").append('<li><div class="row justify-content-center"><div class="col-md-6"><textarea spellcheck="false"  class="textArea text-secondary text-right w-100" rows="1">Html</textarea spellcheck="false" ></div><div class="col-md-6 d-flex align-items-center skillColHover"><div id="' + whichArea + '-L' + length + '" class="skillLevel bg-success rounded" style="width:100%"></div><input id="' + whichArea + '-L' + length + '-S" class="skillRangeInput" type="range" onchange="setSkillLevel(`' + whichArea + '-L' + length + '`);"></div></div></li>');
}

function area_removeSkill(whichArea) {
    var list = document.getElementById(whichArea + "-List");
    list.removeChild(list.lastChild);
}

function addSkillArea(whichArea, areaID) {
    var int = document.getElementById(whichArea).childElementCount + 1;
    areaID = areaID + "" + int;
    $("#" + whichArea).append('<div id="' + areaID + '" class="text-center m-1" style="width:22vh;"><textarea spellcheck="false"  class="textArea h6 text-center w-100" rows="1">Web Geliştirme</textarea spellcheck="false" ><div class="underLine bg-themeColor2 mb-1" style="width:4vh;"></div><ul id="' + areaID + '-List" class="p-0" style="list-style-type:none;"><li><div class="row justify-content-center"><div class="col-md-6"><textarea spellcheck="false"  class="textArea text-secondary text-right w-100" rows="1">Html</textarea spellcheck="false" ></div><div class="col-md-6 d-flex align-items-center skillColHover"><div id="' + areaID + '-L1" class="skillLevel bg-success rounded" style="width:100%"></div><input id="' + areaID + '-L1-S" class="skillRangeInput" type="range" onchange="setSkillLevel(`' + areaID + '-L1`);"></div></div></li></ul><div class="mt-4 w-100 justify-content-center preview"><button class="btn btn-success" onclick="area_addSkill(`' + areaID + '`);"><i class="fas fa-plus-circle"></i></button><button class="btn btn-danger ml-1" onclick="area_removeSkill(`' + areaID + '`);"><i class="fas fa-minus-circle"></i></button></div></div>');
    changeThemeColor('themeColor2');
}

function removeSkillArea(whichArea, areaID) {
    var int = document.getElementById(whichArea).childElementCount;
    areaID = areaID + "" + int;
    $("#" + areaID).remove();
}

function addHobbiesArea(whichArea, areaID) {
    var int = document.getElementById(whichArea).childElementCount + 1;
    areaID = areaID + "" + int;
    $("#" + whichArea).append('<div id="' + areaID + '" class="text-center m-1" style="width:20vh;"><textarea spellcheck="false"  class="textArea h6 text-center w-100" rows="1">Kitap Okumak</textarea spellcheck="false" ><div class="underLine bg-themeColor2 mb-1" style="width:4vh;"></div><ul id="' + areaID + '-List" class="p-0" style="list-style-type:none;"><li><div class="row justify-content-center"><textarea spellcheck="false"  class="textArea text-secondary text-center w-100" rows="1" spellcheck="false">Fantastik Edebiyat</textarea spellcheck="false" ></div></li><li><div class="row justify-content-center"><textarea spellcheck="false"  class="textArea text-secondary text-center w-100" rows="1" spellcheck="false">Dünya Klasikleri</textarea spellcheck="false" ></div></li></ul><div class="mt-4 w-100 justify-content-center preview"><button class="btn btn-success" onclick="addRow(`' + areaID + '-List`);"><i class="fas fa-plus-circle"></i></button><button class="btn btn-danger ml-1" onclick="deleteListRow(`' + areaID + '-List`,1);"><i class="fas fa-minus-circle"></i></button></div></div>');
    changeThemeColor('themeColor2');
}

function preview(int) {
    var div = $("#previewID");
    if (int == 0) {
        $(".preview").show();
        div.html(' <button class="bg-warning btn text-center text-indigo" onclick="preview(1);"><i class="fas fa-eye"> Önizleme</i></button>');
    } else {
        $(".preview").hide();
        div.html(' <button class="bg-warning btn text-center text-indigo" onclick="preview(0);"><i class="fas fa-pencil-alt"> Düzenle</i></button>');
    }
}
var loadFile = function (event) {
    var img = document.getElementById('img_user');
    img.src = URL.createObjectURL(event.target.files[0]);
    img.onload = function () {
        URL.revokeObjectURL(img.src) // free memory
    }
};
function exportPage() {
    preview(1);
    var cv = document.getElementById("CV").innerHTML;
    var input = document.getElementById("postInput");
    input.value = cv;
}
function changeThemeColor(theme) {
    var color = $("#" + theme).val();
    $(".bg-" + theme).css("background-color", color);
    $(".text-" + theme).css("color", color);
}
var importCv = function (event) {
    preview(1);
    var input = event.target;
    var reader = new FileReader();
    reader.onload = function () {
        var text = reader.result;
        var html = document.getElementById('CV');
        html.innerHTML = text;
        let themeColor1 = $("#abstract").css("background-color");
        let themeColor2 = $("#user_name").css("color");
        alert("Color1: " + themeColor1 + "\n" + "Color2: " + themeColor2);
        var c1 = getRGB(themeColor1);
        var c2 = getRGB(themeColor2);
        document.getElementById("themeColor1").value = ConvertRGBtoHex(parseInt(c1[0]),parseInt(c1[1]),parseInt(c1[2]))
        document.getElementById("themeColor2").value = ConvertRGBtoHex(parseInt(c2[0]),parseInt(c2[1]),parseInt(c2[2]));
    };
    reader.readAsText(input.files[0]);
};
function getRGB(color){
    let x = color.substring(
        color.indexOf("(") + 1, 
        color.lastIndexOf(")")
    );
    return x.split(","); 
}
function saveCvButton() {
    preview(1);
    var cv = document.getElementById("CV").innerHTML;
    saveCv(cv, $("#user_name").val(), "txt");
}
function saveCv(data, filename, type) {
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
        setTimeout(function () {
            document.body.removeChild(a);
            window.URL.revokeObjectURL(url);
        }, 0);
    }
};
function ColorToHex(color) {
    var hexadecimal = color.toString(16);
    return hexadecimal.length == 1 ? "0" + hexadecimal : hexadecimal;
  }
  
  function ConvertRGBtoHex(red, green, blue) {
    return "#" + ColorToHex(red) + ColorToHex(green) + ColorToHex(blue);
  }

