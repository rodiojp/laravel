 function CreateValidators() {

     $.validator.setDefaults({
         debug: true,
         validClass: "",
         errorClass: "invalid-feedback",
     });

     var elementErrorClass = "is-invalid";
     var elementValidClass = "is-valid";
     $form.validate({
         rules: {
             title: {
                 required: true,
             },
             name: {
                 required: true,
                 minlength: 1,
                 maxlength: 10,
                 //  required: function(element) {
                 //      var name_val = $.trim($("#name").val());
                 //      return name_val == "";
                 //  }
             },
             lastName: {
                 required: true,
                 minlength: 1,
                 maxlength: 15,
             },
             address: {
                 required: true,
                 minlength: 1,
                 maxlength: 25,
             },
             zipCode: {
                 required: true,
                 minlength: 1,
                 maxlength: 7,
             },
             city: {
                 required: true,
                 minlength: 1,
                 maxlength: 15,
             },
             state: {
                 required: true,
                 minlength: 1,
                 maxlength: 15,
             },
             email: {
                 email: true,
                 required: true,
                 minlength: 1,
                 maxlength: 25,
             }

         },
         messages: {
             //  name: {
             //      required: "The Name is required"
             //  }
             //  email: {
             //      email: "Please enter your email",
             //      //  required: "*"
             //  }
         },

         highlight: function(element, errorClass, validClass) {
             $(element).addClass(elementErrorClass).removeClass(elementValidClass);
         },

         unhighlight: function(element, errorClass, validClass) {
             $(element).removeClass(elementErrorClass).addClass(elementValidClass);
         },

         errorElement: "span"
     });
 }

 console.log(document.getElementById("name").value);
 console.log($('#name').val());


 var $form = $("#formContent");

 $("#btnSave").click(function(event) {
         if ($form.valid())
         //  event.preventDefault();
             $form.submit();
     })
     //  validator.resetForm();

 $(document).ready(function() {
     CreateValidators();
 });