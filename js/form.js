$("#main-form").submit(function(event) {

   /* stop form from submitting normally */
   event.preventDefault();
   /* get some values from elements on the page: */
   var $form = $( this ),
       $submit = $form.find( 'input[type="submit"]' ),
       name_value = $form.find( 'input[name="name"]' ).val(),
       email_value = $form.find( 'input[name="email"]' ).val(),
       phone_value = $form.find( 'input[name="phone"]' ).val(),
       location_value = $form.find( 'input[name="location"]' ).val(),
       message_value = $form.find( 'textarea[name="message"]' ).val(),

       url = $form.attr('action');

   /* Send the data using post */

   var posting = $.post( url, { 
                     name: name_value,
                     email: email_value,
                     phone: phone_value,
                     location: location_value,
                     message : message_value
                 });

   posting.done(function(data)

   {

       /* Put the results in a div */

       $( "#form-end" ).html(data);
       $("#form-end").show();

       /* Change the button text. */
       $submit.val('¡Listo! Su mensaje ha sido enviado.');  

       /* Disable the button. */
       $submit.attr("disabled", true);

   });

});