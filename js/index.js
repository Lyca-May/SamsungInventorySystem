// $(document).ready(function() {
// 	//Only needed for the filename of export files.
// 	//Normally set in the title tag of your page.
// 	document.title='DataTable Excel';
// 	// DataTable initialisation
// 	$('#example').DataTable(
// 		{
// 			"dom": '<"dt-buttons"Bf><"clear">lirtp',
// 			"paging": true,
// 			"autoWidth": true,
// 			"buttons": [
// 					{
//             extend: 'excelHtml5',
//             text: 'Excel',
//             customize: function( xlsx ) {
//               var source = xlsx.xl['workbook.xml'].getElementsByTagName('sheet')[0];
//               source.setAttribute('name','New Name');
// 						}
// 					}
// 			]
// 		}
// 	);
// });    


  
/* Initialization of datatable */
$(document).ready(function() {
    $('#tableID').DataTable({ });
});

// $(document).ready(function() {
// 	//Only needed for the filename of export files.
// 	//Normally set in the title tag of your page.
// 	document.title='DataTable Excel';
// 	// DataTable initialisation
// 	$('#example').DataTable(
// 		{
// 			"dom": '<"dt-buttons"Bf><"clear">lirtp',
// 			"paging": true,
// 			"autoWidth": true,
// 			"buttons": [
// 					{
//             extend: 'excelHtml5',
//             text: 'Excel',
//             customize: function( xlsx ) {
//               var source = xlsx.xl['workbook.xml'].getElementsByTagName('sheet')[0];
//               source.setAttribute('name','New Name');
// 						}
// 					}
// 			]
// 		}
// 	);
// });    


  
/* Initialization of datatable */
$(document).ready(function() {
    $('#tableID3').DataTable({});
    $('#tableID1').DataTable({});
    $('#tableID2').DataTable({});
});



/* Modal */

let $modal = $("#myModal");
let $modalContent = $("#modalContent");

$modal.draggable({
    handle: ".modal-header",
});

$modal.resizable();

$modal.on("show.bs.modal", function () {
    // Get the content from the hidden div and display it in the modal
    $modal.find(".modal-body").html($modalContent.html());
});

$modal.on("hide.bs.modal", function () {
    // Clear the modal content when it's closed
    $modal.find(".modal-body").empty();
});

