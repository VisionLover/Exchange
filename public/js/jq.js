$('#exampleModal').on('show.bs.modal', function (event) {
    var button = $(event.relatedTarget); // Button that triggered the modal
    var recipient = button.data('whatever') // Extract info from data-* attributes
    // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
    // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
    var modal = $(this)
    modal.find('.modal-title').text('New message to ' + recipient)
    modal.find('#recipient-name1').val(recipient)

});
$('#exampleModal1').on('show.bs.modal', function (event) {
    var button = $(event.relatedTarget); // Button that triggered the modal
    var recipient = button.data('whatever') // Extract info from data-* attributes
    // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
    // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
    var modal = $(this)
    modal.find('.modal-title').text('New message to ' + recipient)
    modal.find('#recipient-name1').val(recipient)

});
$('#exampleModal2').on('show.bs.modal', function (event) {
    var button = $(event.relatedTarget); // Button that triggered the modal
    var recipient = button.data('whatever') // Extract info from data-* attributes
    // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
    // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
    var modal = $(this)
    modal.find('.modal-title').text('New message to ' + recipient)
    modal.find('#recipient-name10').val(recipient)

});

$(document).ready(function() {

DecoupledEditor
    .create( document.querySelector( '#editor' ) )
    .then( editor => {
        const toolbarContainer = document.querySelector( '#toolbar-container' );

        toolbarContainer.appendChild( editor.ui.view.toolbar.element );
    } )
    .catch( error => {
        console.error( error );
    } );
});

$(window).on('load', function(){

    // Select and loop the container element of the elements you want to equalise
    $('.product_column5').each(function(){
        // Cache the highest
        var highestBox = 0;
        // Select and loop the elements you want to equalise
        $('.single_product', this).each(function(){
            // If this box is higher than the cached highest then store it
            if($(this).height() > highestBox) {
                highestBox = $(this).height();
            }
        });
        // Set the height of all those children to whichever was highest
        $('.single_product',this).height(highestBox);
    });

    $('.product_column5').each(function(){
        // Cache the highest
        var highestBox = 0;
        // Select and loop the elements you want to equalise
        $('.pname', this).each(function(){
            // If this box is higher than the cached highest then store it
            if($(this).height() > highestBox) {
                highestBox = $(this).height();
            }
        });
        // Set the height of all those children to whichever was highest
        $('.pname',this).height(highestBox);
    });

});



