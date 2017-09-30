$(document).ready(function() {

    // Process the form once submitted
    $('#contest').submit(function(event) {
        event.preventDefault(); // prevent the default form behavior of reloading the page
        $('.alert-success').remove(); // remove the success or error message if they are there
        $('.alert-failure').remove();

        // get the data from the form
        var formData = {
            'contestEmail'          : $('input[name=contestEmail]').val(),
        };

        //process the form
        $.ajax({
            type            : 'POST', // define the type of HTTP method to use
            url             : 'main/contest.php', // the url where we want to position
            data            : formData, // our data object
            dataType        : 'json', // what type of data to get back from the server
        })

            // using the done promise callback
            .done(function(data) {
                // log data to the console so we can see
                console.log(data);

                // handle errors and validation messages
                if ( ! data.success) {

                    if (data.errors.contestEmail) {
                      $('#contest').append('<p class="alert-failure wow fadeIn">Form can\'t be empty</p>');
                    }

                } else {
                    // ALL GOOD! just show the success message!
                    $('#contest').append('<p class="alert-success wow fadeIn">' + data.message + '</p>');
                    document.getElementById("contest").reset();
                    // alert success to user
                    //alert('success');
                }

            }); // end error handling

        // stop the form submitting the normal way and refreshing the page


    }); // end form submit

}); // document.ready function
