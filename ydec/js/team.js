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
    var matrikn = j;
    var name = "";
    $.ajax({
        type: 'POST',
        url: "../ajax/getmembername.php",
        data: { matrikn: matrikn },
        success: function(data) {
            alert(data);
            name = data;
        },
        dataType: "text",
        async: false
    });

    return name

}

function getfaculty(h) {
    var matrikf = h;
    var faculty = "";
    $.ajax({
        type: 'POST',
        url: "../ajax/getmemberfaculty.php",
        data: { matrikf: matrikf },
        success: function(data) {
            alert(data);
            faculty = data;
        },
        dataType: "text",
        async: false
    });

    return faculty;
}


function saveteam() {
    createteam();
    sendinvite();
}

function createteam() {
    var teamname = $('#team_name').val();
    var project = $('#project_name').val();
    
    $.ajax({
        type: 'POST',
        url: "../ajax/createteam.php",
        data: { teamname: teamname , project : project },
        
        error: function (data) {
            
            alert(" Can't do because: " + data);
        },
        success: function(data) {
            alert("team created"); 
        }
    });

}
