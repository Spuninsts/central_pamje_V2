// this just adds new item on the select

$(document).ready(function() {
    // When the Add button is clicked
    $('#addNewItem').click(function() {
        var newItem = $('#newItemInput').val();  // Get the value of the new item

        if (newItem) {
            // Add the new item as an option to the select
            $('#dynamicSelect').append('<option value="' + newItem + '">' + newItem + '</option>');

            // Automatically select the newly added item
            $('#dynamicSelect').val(newItem);

            // Clear the input field
            $('#newItemInput').val('');
        }
    });
});
