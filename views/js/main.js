
$(document).ready(function() {
	$(".fancybox-thumb").fancybox({
		prevEffect	: 'none',
		nextEffect	: 'none',
		helpers	: {
			title	: {
				type: 'outside'
			},
			thumbs	: {
				width	: 50,
				height	: 50
			}
		}
	});
	
	$(".various").fancybox({
		maxWidth	: 800,
		maxHeight	: 600,
		fitToView	: false,
		width		: '70%',
		height		: '70%',
		autoSize	: false,
		closeClick	: false,
		openEffect	: 'none',
		closeEffect	: 'none'
	});

});




$(function () {
                $('#datetimepicker2').datetimepicker({
                    language: 'es'
                });
            });
			
			
			 $(function () {
                $('#datetimepicker').datetimepicker({
                    language: 'es'
                });
            });
			
			
			
			
			
	  $(document).ready(function() {
    $('.registro').bootstrapValidator({
        message: 'This value is not valid',
        feedbackIcons: {
            valid: 'glyphicon glyphicon-ok',
            invalid: 'glyphicon glyphicon-remove',
            validating: 'glyphicon glyphicon-refresh'
        },
        fields: {
            nombreasa: {
                message: 'El nombre no es valido',
                validators: {
                    notEmpty: {
                        message: 'Se requiere este campo'
                    },
                    
                    regexp: {
                       regexp: /[a-zA-ZñÑ\s]{2,50}/,
                        message: 'Solo letras de A-Z y a-z'
                    }
                }
            },
			
			resumen: {
                message: 'El nombre no es valido',
                validators: {
                    notEmpty: {
                        message: 'Se requiere este campo'
                    },
                    
                    regexp: {
                       regexp: /[a-zA-ZñÑ\s]{2,1000}/,
                        message: 'Solo letras de A-Z y a-z'
                    }
                }
            },
			
			
			abstrac: {
                message: 'El nombre no es valido',
                validators: {
                    notEmpty: {
                        message: 'Se requiere este campo'
                    },
                    
                    regexp: {
                       regexp: /[a-zA-ZñÑ\s]{2,1000}/,
                        message: 'Solo letras de A-Z y a-z'
                    }
                }
            },
			
			introduccion: {
                message: 'El nombre no es valido',
                validators: {
                    notEmpty: {
                        message: 'Se requiere este campo'
                    },
                    
                    regexp: {
                       regexp: /[a-zA-ZñÑ\s]{2,1000}/,
                        message: 'Solo letras de A-Z y a-z'
                    }
                }
            },
			
			metodologia: {
                message: 'El nombre no es valido',
                validators: {
                    notEmpty: {
                        message: 'Se requiere este campo'
                    },
                    
                    regexp: {
                       regexp: /[a-zA-ZñÑ\s]{2,1000}/,
                        message: 'Solo letras de A-Z y a-z'
                    }
                }
            },
			
			contenido: {
                message: 'El nombre no es valido',
                validators: {
                    notEmpty: {
                        message: 'Se requiere este campo'
                    },
                    
                    regexp: {
                       regexp: /[a-zA-ZñÑ\s]{2,1000}/,
                        message: 'Solo letras de A-Z y a-z'
                    }
                }
            },
			
			introduccion: {
                message: 'El nombre no es valido',
                validators: {
                    notEmpty: {
                        message: 'Se requiere este campo'
                    },
                    
                    regexp: {
                       regexp: /[a-zA-ZñÑ\s]{2,1000}/,
                        message: 'Solo letras de A-Z y a-z'
                    }
                }
            },
			conclusiones: {
                message: 'El nombre no es valido',
                validators: {
                    notEmpty: {
                        message: 'Se requiere este campo'
                    },
                    
                    regexp: {
                       regexp: /[a-zA-ZñÑ\s]{2,1000}/,
                        message: 'Solo letras de A-Z y a-z'
                    }
                }
            },
			
			agradecimientos: {
                message: 'El nombre no es valido',
                validators: {
                    notEmpty: {
                        message: 'Se requiere este campo'
                    },
                    
                    regexp: {
                       regexp: /[a-zA-ZñÑ\s]{2,1000}/,
                        message: 'Solo letras de A-Z y a-z'
                    }
                }
            },
			
			referencias: {
                message: 'El nombre no es valido',
                validators: {
                    notEmpty: {
                        message: 'Se requiere este campo'
                    },
                    
                    regexp: {
                       regexp: /[a-zA-ZñÑ\s]{2,1000}/,
                        message: 'Solo letras de A-Z y a-z'
                    }
                }
            },
			apellidos: {
                message: 'El apellido no es valido',
                validators: {
                    notEmpty: {
                        message: 'Se requiere este el apellido'
                    },
                    
                    regexp: {
                        regexp: /[a-zA-ZñÑ\s]{2,50}/,
                        message: 'Solo letras de A-Z y a-z'
                    }
                }
            },
			
			
			
			
			volumen: {
                message: 'The volumen is not valid',
                validators: {
                    notEmpty: {
                        message: 'Se requiere este campo'
                    },
                    
                    regexp: {
                        regexp: /[0-9]{1,9}(\.[0-9]{0,2})?$/,
                        message: 'Solo numeros'
                    }
                }
            },
			
			numero: {
                message: 'The volumen is not valid',
                validators: {
                    notEmpty: {
                        message: 'Se requiere este campo'
                    },
                    
                    regexp: {
                        regexp: /[0-9]{1,9}(\.[0-9]{0,2})?$/,
                        message: 'Solo numeros'
                    }
                }
            },
			
			clave: {
                message: 'The volumen is not valid',
                validators: {
                    notEmpty: {
                        message: 'Se requiere este campo'
                    },
                    
                    regexp: {
                        regexp: /[0-9]{1,9}(\.[0-9]{0,2})?$/,
                        message: 'Solo numeros'
                    }
                }
            },
			
		id_status: {
                message: 'The volumen is not valid',
                validators: {
                    notEmpty: {
                        message: 'Se requiere este campo'
                    },
                    
                    regexp: {
                        regexp: /[0-9]{1,9}(\.[0-9]{0,2})?$/,
                        message: 'Solo numeros'
                    }
                }
            },
			
			
			titulo: {
                message: 'The username is not valid',
                validators: {
                    notEmpty: {
                        message: 'Se requiere este campo'
                    },
                    
                    regexp: {
                        regexp: /[a-zA-ZñÑ\s]{2,50}/,
                        message: 'Solo letras de A-Z y a-z'
                    }
                }
            },
			
			subtitulo: {
                message: 'The username is not valid',
                validators: {
                    notEmpty: {
                        message: 'Se requiere este campo'
                    },
                    
                    regexp: {
                        regexp: /[a-zA-ZñÑ\s]{2,50}/,
                        message: 'Solo letras de A-Z y a-z'
                    }
                }
            },
			
			directorio: {
                message: 'The username is not valid',
                validators: {
                    notEmpty: {
                        message: 'Se requiere este campo'
                    },
                    
                    regexp: {
                        regexp: /[a-zA-ZñÑ\s]{2,50}/,
                        message: 'Solo letras de A-Z y a-z'
                    }
                }
            },
			
			editorial: {
                message: 'The username is not valid',
                validators: {
                    notEmpty: {
                        message: 'Se requiere este campo'
                    },
                    
                    regexp: {
                        regexp: /[a-zA-ZñÑ\s]{2,50}/,
                        message: 'Solo letras de A-Z y a-z'
                    }
                }
            },
			
			status: {
                message: 'The username is not valid',
                validators: {
                    notEmpty: {
                        message: 'Se requiere este campo'
                    },
                    
                    regexp: {
                        regexp: /[a-zA-ZñÑ\s]{2,50}/,
                        message: 'Solo letras de A-Z y a-z'
                    }
                }
            },
			
			portada: {
                message: 'The username is not valid',
                validators: {
                    notEmpty: {
                        message: 'Se requiere este campo'
                    },
                    
                    
                }
            },
			archivo: {
                message: 'The username is not valid',
                validators: {
                    notEmpty: {
                        message: 'Se requiere este campo'
                    },
                    
                    
                }
            },
			
			fecha: {
                message: 'The username is not valid',
                validators: {
                    notEmpty: {
                        message: 'Se requiere este campo'
                    },
                    
                    
                }
            },
			
			fecha_creacion: {
                message: 'The username is not valid',
                validators: {
                    notEmpty: {
                        message: 'Se requiere este campo'
                    },
                    
                    
                }
            },
			
			
			
			email: {
                message: 'The email is not valid',
                validators: {
                    notEmpty: {
                        message: 'Se requiere este campo'
                    },
                    
                    regexp: {
                        regexp: /^([a-zA-Z0-9])+([a-zA-Z0-9\._-])*@([a-zA-Z0-9_-])+([a-zA-Z0-9\._-]+)+$/,
                        message: 'se requieres un correo valido por ejemplo a@hotmail.com'
                    }
                }
            }
			
			
			
            
			
			
			
			
        }
    });
});

$('.textarea').wysihtml5();
$(prettyPrint);

