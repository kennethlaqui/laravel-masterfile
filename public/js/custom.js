
$(document).ready(function() {
    // Setup - add a text input to each footer cell
    $('#empl_tbl thead tr').clone(true).appendTo( '#empl_tbl thead' );
    $('#empl_tbl thead tr:eq(1) th').each( function (i) {
        var title = $(this).text();
        $(this).html( '<input type="text" placeholder="Search '+title+'" />' );

        $( 'input', this ).on( 'keyup change', function () {
            if ( table.column(i).search() !== this.value ) {
                table
                    .column(i)
                    .search( this.value )
                    .draw();
            }
        } );
    } );

    var table = $('#empl_tbl').DataTable( {

        orderCellsTop: true,
        fixedHeader: true,
        select:         true,
        deferRender:    true,
        scrollY:        200,
        scrollX:        true,
        scrollCollapse: true,
        scroller:       true,
        dom: 'Bfrtip',
        buttons: [
            'copy', 'csv', 'excel', 'pdf', 'print'
        ]
        // responsive: true,
        // lengthChange: false,
        // buttons: [ 'copy', 'excel, ', 'pdf', 'colvis', 'print' ]

    } );
    // table.buttons().container()
    //     .appendTo( '.col-md-6:eq(0)' );
} );

// function checkBox(){

//     var bio_reqd = document.getElementsByClassName('bio_reqd');

//     if(bio_reqd[0].checked){
//         var T = document.getElementsByClassName('bio_reqd').value = 'T';
//         alert(T);
//     }
//     if(!bio_reqd[0].checked){
//         var F = document.getElementsByClassName('bio_reqd').value = 'F';
//         alert(F);
//     }

// }

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


