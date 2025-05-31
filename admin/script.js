function fetchData() {
    // Get the value from the input box
    var inputData = $("#inputData").val();

    // Send an AJAX request to fetch data from the server
    $.ajax({
        type: "POST",
        url: "fetch_data.php",
        data: { inputData: inputData },
        success: function(response) {
            // Parse the JSON response
            var data = JSON.parse(response);

            // Populate the select tag with the fetched data
            var select = $("#resultSelect");
            select.empty();

            if (data.length > 0) {
                // Add options to the select tag
                for (let i = 0; i < data.length; i++) {
                    let option = $("<option>").text( data[i].sub_catagory_name);
                    select.append(option);
                }
            } else {
                // Display a message if no results found
                let option = $("<option>").text("Select Catagory.");
                select.append(option);
            }
        },
        error: function() {
            alert("Error fetching data");
        }
    });
}
