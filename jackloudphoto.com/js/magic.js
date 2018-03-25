$(document).ready(function() {

    // process the form
    $('#ajaxContact').submit(function(event) {
        event.preventDefault();
        $('.form-group').removeClass('has-error'); // remove the error class if form is submitted again
        $('.help-block').remove(); // remove the error text
        $('.alert-success').remove(); // remove success message
        $('.alert-failure').remove(); // remove the error

        // get the data from the form
        var formData = {
            'txtFirstName'          : $('input[name=txtFirstName]').val(),
            'txtLastName'           : $('input[name=txtLastName]').val(),
            'txtEmail'              : $('input[name=txtEmail]').val(),
            'txtMessage'            : $('textarea[name=txtMessage]').val()
        };

        //process the form
        $.ajax({
            type            : 'POST', // define the type of HTTP method to use
            url             : 'main/process.php', // the url where we want to position
            data            : formData, // our data object
            dataType        : 'json', // what type of data to get back from the server
        })

            // using the done promise callback
            .done(function(data) {

                // log data to the console so we can see
                console.log(data);

                // handle errors and validation messages
                if ( ! data.success) {

                    if (data.errors) {
                      $('#inputClass').append('<p class="alert-failure wow fadeIn">Looks like there was an error. Make sure all fields are filled in.</p>');
                    }

                } else {
                    // ALL GOOD! just show the success message!
                    $('#inputClass').append('<p class="alert-success wow fadeIn">' + data.message + '</p>');
                    document.getElementById('ajaxContact').reset();

                }

            }); // end error handling

        // stop the form submitting the normal way and refreshing the page


    }); // end form submit

}); // document.ready function
