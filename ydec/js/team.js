function getmemberdata(i) {

    if (i === 1) {
        var matrik = $('#matriks1').val();
        var name = getname(matrik);
        $('#name1').val(name);
        var faculty = getfaculty(matrik);
        $('#faculty1').val(faculty);
    } else if (i === 2) {
        var matrik = $('#matriks2').val();
        var name = getname(matrik);
        $('#name2').val(name);
        var faculty = getfaculty(matrik);
        $('#faculty2').val(faculty);
    } else if (i === 3) {
        var matrik = $('#matriks3').val();
        var name = getname(matrik);
        $('#name3').val(name);
        var faculty = getfaculty(matrik);
        $('#faculty3').val(faculty);
    } else if (i === 4) {
        var matrik = $('#matriks4').val();
        var name = getname(matrik);
        $('#name4').val(name);
        var faculty = getfaculty(matrik);
        $('#faculty4').val(faculty);
    }

}

function getname(j) {
    var matrik = j;
    var data = matrik;

    $.ajax({
        type: "POST",
        url: "getmemberdata.php",
        data: data,
        success: function(result) {
            var name = result;
        },
        dataType: dataType
    });

    return name;
}

function getfaculty(h) {
    var matrik = h;
    var data = matrik;

    $.ajax({
        type: "POST",
        url: "getmemberdata.php",
        data: data,
        success: function(result) {
            var faculty = result;
        },
        dataType: dataType
    });

    return faculty;
}

function saveteam() {

}