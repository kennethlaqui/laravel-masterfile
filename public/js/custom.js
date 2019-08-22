
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


    var payr_dir = $('#payr_dir').DataTable({
        orderCellsTop: true,
        fixedHeader: true,
        select:         true,
        deferRender:    true,
        scrollY:        200,
        scrollX:        true,
        scrollCollapse: true,
        scroller:       true,

    });

    var payr_dtl = $('#payr_dtl').DataTable({
        orderCellsTop: true,
        fixedHeader: true,
        select:         true,
        deferRender:    true,
        scrollY:        200,
        scrollX:        true,
        scrollCollapse: true,
        scroller:       true,

    });

    $('#payr_dir tbody').on( 'click', 'tr', function () {
        var cntrl_no = payr_dir.row( this ).data()[0];
        $.ajax({
        url: 'sss/{id}',
        type: 'GET',
        data: { id: cntrl_no },
        dataType: 'json',
        success: function(response)
        {
            console.log(response);
            var event_data = '';
            $.each( function(index, value){
                alert( index + ": " + value );
                // event_data += '<tr>';
                // event_data += '<td>'+value.cntrl_no+'</td>';
                // event_data += '<td>'+value.appl_prd+'</td>';
                // event_data += '</tr>';
            });
            $("#payr_dtl").append(event_data);
            console.log(event_data);
        }
    });
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


