$.fn.dataTable.ext.buttons.alert = {
    className: 'buttons-alert',
 
    action: function ( e, dt, node, config ) {
        alert( this.text() );
    }
};
 
 
$(document).ready(function() {
    $('#example').DataTable( {
        dom: 'Bfrtip',
        buttons: [
            {
                extend: 'alert',
                text: 'Add Product'
            },
        ]
    } );
} );