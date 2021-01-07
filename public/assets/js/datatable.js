// Call the dataTables jQuery plugin
$(document).ready(function() {
    // $("#datatable").dataTable().fnDestroy();
    $('#datatable').DataTable({
        "scrollX": false,
        "language": {
            "url": "//cdn.datatables.net/plug-ins/1.10.21/i18n/French.json"
        }
    });
});