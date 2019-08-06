<<<<<<< HEAD
$('#empl_tbl').DataTable({
    "scrollY": 200,
    "scrollX": true
});


$('#birthday').datepicker({
    uiLibrary: 'bootstrap4'
});

$('#sp_b_day').datepicker({
    uiLibrary: 'bootstrap4'
});

$('#dte_hire').datepicker({
    uiLibrary: 'bootstrap4'
});

$('#dte_rglr').datepicker({
    uiLibrary: 'bootstrap4'
});

$('#dte_eoc_').datepicker({
    uiLibrary: 'bootstrap4'
});

$('#dte_rsgn').datepicker({
    uiLibrary: 'bootstrap4'
});
=======
function gf_build_gender(tbl_name,col_numb){
    // -- build gender
    var dw1 = document.getElementById(tbl_name);
    var row = dw1.rows.length;
    if (dw1 != null){
        for (var i = 1; i<row; i++){
            var col = dw1.rows[i].cells;
            var sex_____ = col[col_numb].innerText;
            switch(sex_____){
                case 'M':
                    col[col_numb].innerHTML = 'Male';
                    break;
                case 'F':
                    col[col_numb].innerHTML = "Female";
                    break;
            }
        }
    }
}

gf_build_gender('empl_tbl',9);

function gf_build_workstat(tbl_name,col_numb){
    // -- build gender
    var dw1 = document.getElementById(tbl_name);
    var row = dw1.rows.length;
    if (dw1 != null){
        for (var i = 1; i<row; i++){
            var col = dw1.rows[i].cells;
            var workstat = col[col_numb].innerText;
            switch(workstat){
                case 'A':
                    col[col_numb].innerHTML = 'Active';
                    break;
                case 'R':
                    col[col_numb].innerHTML = 'Resigned';
                    break;
                case 'E':
                    col[col_numb].innerHTML = 'End Of Contract'
            }
        }
    }
}
gf_build_workstat('empl_tbl',10);

// $('empl_tbl').on('scroll', function () {
//     $("#"+this.id+" > *").width($(this).width() + $(this).scrollLeft());
// });
>>>>>>> 1ec2c393cf0cd750ea01967aef284f34d4a369c6
