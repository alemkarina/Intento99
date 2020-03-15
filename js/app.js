$(document).ready(function() {

            $("#loginForm").bind("submit", function(){
                $.ajax({
                    type: $(this).attr("method"),
                    url:  $(this).attr("action"),
                    data: $(this).serialize(),
                    beforeSend:function(){
                        $("#loginForm buttom[type=submit]").html("Enviando...");
                        $("#loginForm buttom[type=submit]").attr("disabled", "disabled");
                    },
                    success:    function(response) {
                        if (response.estado == "true"){
                            $("body").overhang({
                                type: "success",
                                message: "Bienvenido, sesión iniciada!",
                                callback:function(){
                                    window.location.href = "admin.php";
                                }
                    
                        });
                        } else {
                            $("body").overhang({
                                type: "error",
                                message: "Usuario y/o Password incorrecto",
                            });
                        }
                        $("#loginForm buttom[type=submit]").html("Ingresar");
                        $("#loginForm buttom[type=submit]").removeAttr("disabled");
                },

                error: function() {
                    $("body").overhang({
                        type: "error",
                        message: "Usuario y/o Password incorrecto",
                    });
                    $("#loginForm buttom[type=submit]").html("Ingresar");
                    $("#loginForm buttom[type=submit]").removeAttr("disabled");
                }
                    })
                return false;
            });
        });
