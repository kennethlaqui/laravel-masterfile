
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




    // var payr_dir = $('#payr_dir').DataTable({
    //     orderCellsTop: true,
    //     fixedHeader: true,
    //     select:         true,
    //     deferRender:    true,
    //     scrollY:        200,
    //     scrollX:        true,
    //     scrollCollapse: true,
    //     scroller:       true,

    // });

    // var payr_dtl = $('#payr_dtl').DataTable({
    //     "language": {
    //         "emptyTable": "",
    //         "sZeroRecords": ""
    //       }
    //     // orderCellsTop: true,
    //     // fixedHeader: true,
    //     // select:         true,
    //     // deferRender:    true,
    //     // scrollY:        200,
    //     // scrollX:        true,
    //     // scrollCollapse: true,
    //     // scroller:       true,

//     // });
//     // $('#payr_dir tbody').on( 'click', 'tr', function ( event ) {
//     $('#payr_dirx tbody').on( 'click', 'tr', function(event) {
//             var appl_prd = payr_dir.row( this ).data()[0];
//             event.preventDefault();
//             $.ajax({
//                 url: 'sss/{appl_prd}',
//                 method: 'GET',
//                 data: { appl_prd: appl_prd },
//                 // data: { appl_prd: $('#payr_dir').serialize('appl_prd') },
//                 dataType: "json",
//                 success:function(data){
//                     // console.log(data);
//                 //    $json = JSON.parse(data)
//                     // var stringified = JSON.stringify(data);
//                     // var parsedObj = JSON.parse(stringified);
//                     console.log(data);

//                     $('#payr_dtlx').DataTable( {
//                         "processing": true,
//                         "serverSide": true,
//                         "dataSrc": "",
//                         "ajax": data,
//                         "columns" : [
//                             { "data" : "cntrl_no" },
//                             { "data" : "appl_prd" }
//                         ]
//                     } );
//                     // $.each(data, function (index, value){
//                     //     console.log(value);
//                     //     var html = '<tr>';
//                     //     html += '<td>'+value.cntrl_no+'</td>';
//                     //     html += '<td>'+value.appl_prd+'</td>';
//                     //     $('#table_data').prepend(html);
//                     // });

//                 }

//             });
//             // var url = $(this).attr('href');
//             // $('div#container').load(url);

//             // console.log(url);
//             // Load the content from the link's href attribute
//             // jQuery('#payr_dir').load(href);
//             // // Avoid the link click from loading a new page
//             // event.preventDefault();
//             // console.log(href);
//     //     var cntrl_no = payr_dir.row( this ).data()[0];
//     //     console.log(cntrl_no);
//     //     $.ajax({
//     //     url: 'sss/{id}',
//     //     type: 'GET',
//     //     data: { id: cntrl_no },
//     //     success: function(response)
//     //     {

//     //         $('#payr_dtl').html(response);

//     //     }
//     // });
// } );

} );


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


