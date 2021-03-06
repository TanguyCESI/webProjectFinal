$(document).ready(function () {

    /* Load the admin datatable that shows whose users participate to events*/

    /* Proceed to treatment when the user choose an option in the select list */
    $('#eventChoice').on('change', (function(e){

        /* Datatable parameters */
        var selectedOption = $(this).children('option:selected').val().split('t');
        var eventSelected = selectedOption[selectedOption.length-1];
        var route = $('meta[name="route-name"]').attr('content');

        /* Make the datatable appear */
        $('#usersParticipation').removeClass('d-none');


        /* Configure the datatable to display the correct users */
        $('#usersParticipation').DataTable( {
            destroy: true,
            "autoWidth": false,
            responsive: {
                details: {
                    display: $.fn.dataTable.Responsive.display.modal( {
                        header: function ( row ) {
                            var data = row.data();
                            return 'Details';
                        }
                    } ),
                    renderer: $.fn.dataTable.Responsive.renderer.tableAll( {
                        tableClass: 'table'
                    } )
                }
            },
            dom: 'Bfrtip',
            /* Export buttons */
            buttons: [
                'csvHtml5',
                'pdfHtml5',
            ],

            "ajax": {
                "type": "GET",
                "url": route,
                "data": {
                    "event_id": eventSelected
                }
            },
            "columns":[
                { "data": "event_id" },
                { "data": "event_name" },
                { "data": "user_id" },
                { "data": "user_first_name" },
                { "data": "user_last_name" },
            ],
        } );

    }))

});

