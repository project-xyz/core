    $(document).ready(function(){

        $("#login").validate({

            errorClass: "my-error-class",
            validClass: "my-valid-class",

            rules:{
                email:{
                    required:true,
                    email: true
                },
                    passwd:{
                    required:true,
                    minlength: 8
                },

             },
        });

        $("#signup").validate({

                    errorClass: "my-error-class",
                    validClass: "my-valid-class",

                    rules:{
                        username:{
                            required:true,
                            minlength: 5,
                            maxlength: 15
                        },

                        email:{
                            required:true,
                            email: true
                        },
                            passwd2:{
                            required:true,
                            minlength: 8
                        },
                        conpasswd:{
                            required:true,
                            equalTo: "#passwd2"
                        }
                     },
                });










    });
