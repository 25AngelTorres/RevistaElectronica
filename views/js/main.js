
$(document).ready(function() {

  /* Ocultar Formularios */
    $('#opc_inser_bd').hide();
    

/* Mostrar tablas a insertar */
    $('#btn_opc_inser_bd').click(
      function(){
        $('#opc_inser_bd').show('slow');
      }
    );
    
    $('#MostrarJugador').click(
      function(){
        $('#form_tipo_jugador').show('slow');
        $('#form_tipo_entrenador').hide();
      }
    );
    
    $('#MostrarEntrenador').click(
      function(){
        $('#form_tipo_entrenador').show('slow');  
        $('#form_tipo_jugador').hide();
      }
    );


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
		width		  : '70%',
		height		: '70%',
		autoSize	: false,
		closeClick	: false,
		openEffect	: 'none',
		closeEffect	: 'none'
	});

/* TeaxtArea*/
  $('#edit').editable({inlineMode: false, theme: 'dark'})
  $('#edit1').editable({inlineMode: false, theme: 'dark'})
  $('#edit2').editable({inlineMode: false, theme: 'dark'})
  $('#edit3').editable({inlineMode: false, theme: 'dark'})
  $('#directorio').editable({inlineMode: false, theme: 'dark'})
  $('#edit5').editable({inlineMode: false, theme: 'dark'})
  $('#edit6').editable({inlineMode: false, theme: 'dark'})


/*--Esto es para el validator*/
/* Bootstrapvalidator */
            $('#registerForm').bootstrapValidator({
              message: 'Este valor no es valido',
              feedbackIcons: {
                valid: 'glyphicon glyphicon-ok',
                invalid: 'glyphicon glyphicon-remove',
                validating: 'glyphicon glyphicon-refresh'
              },
              fields: {
                idcontinente: {
                  message: 'Continente no válido',
                  validators: {
                    notEmpty: {
                      message: 'Seleccione un continente, campo necesario'
                    }
                  }
                },
                titulo: {
                  message: 'El titulo no es valido',
                  validators: {
                    notEmpty: {
                      message: 'El titulo es requerido y no puede ser nulo'
                    },
                    stringLength: {
                      min: 1,
                      max: 30,
                      message: 'Debe ser mayor a 6 caracteres y menor a 30'
                    },
                    regexp: {
                      regexp: /^[a-zA-Z0-9 -]+$/,
                      message: 'El titulo solo acepta caracteres alfanumericos y guiones cortos'
                    }
                  }
                },
                subtitulo: {
                  message: 'El subtitulo no es valido',
                  validators: {
                    stringLength: {
                      min: 1,
                      max: 30,
                      message: 'Debe ser mayor a 6 caracteres y menor a 30'
                    },
                    regexp: {
                      regexp: /^[a-zA-Z0-9 -]+$/,
                      message: 'El subtitulo solo acepta caracteres alfanumericos y guiones cortos'
                    }
                  }
                },
                portada: {
                  message: 'Es necesario una portada',
                  validators:{
                    notEmpty:{
                      message:'Portada necesaria para continuar'
                    }
                  }
                },
                foto: {
                  message: 'Campo requerido para continuar',
                  validators:{
                    notEmpty:{
                      message:'Campo requerido para continuar'
                    }
                  }
                },
                fecha: {
                  message: 'La fecha no es valida',
                  validators:{
                    notEmpty:{
                      message:'Campo requerido para continuar'
                    }
                  }
                },
                numero: {
                  message: 'El formato de numero no es valido',
                  validators:{
                    notEmpty:{
                      message:'Campo requerido para continuar'
                    },
                    regexp:{
                      regexp: /^[0-9]+$/,
                      message: 'Formato de numero no valido'
                    }
                  }
                },
                clave: {
                  message: 'La clave no es valida',
                  validators: {
                    notEmpty: {
                      message: 'Campo requerido para continuar'
                    },
                    stringLength: {
                      min: 6,
                      max: 30,
                      message: 'Debe ser mayor a 6 caracteres y menor a 30'
                    },
                    regexp: {
                      regexp: /^[a-zA-Z0-9. -_]+$/,
                      message: 'Formato de clave no valido'
                    }
                  }
                },
                nombre: {
                  message: 'El nombre no es valido',
                  validators: {
                    notEmpty: {
                      message: 'Campo requerido para continuar'
                    },
                    stringLength: {
                      min: 1,
                      max: 500,
                      message: 'Debe ser mayor a 1 caracteres y menor a 500'
                    },
                    regexp: {
                      regexp: /^[a-zA-Z0-9_ -]+$/,
                      message: 'Formato de nombre no valido'
                    }
                  }
                },
                abreviatura: {
                  message: 'La abreviatura no es valido',
                  validators: {
                    notEmpty: {
                      message: 'Campo requerido para continuar'
                    },
                    stringLength: {
                      min: 1,
                      max: 5,
                      message: 'Debe ser mayor a 1 caracteres y menor a 5'
                    },
                    regexp: {
                      regexp: /^[a-zA-Z0-9_ -]+$/,
                      message: 'Formato de abreviatura no valido'
                    }
                  }
                },
                apellidos: {
                  message: 'El apellido no es valido',
                  validators: {
                    notEmpty: {
                      message: 'Campo requerido para continuar'
                    },
                    stringLength: {
                      min: 1,
                      max: 50,
                      message: 'Debe ser mayor a 1 caracteres y menor a 50'
                    },
                    regexp: {
                      regexp: /^[a-zA-Z0-9_ -]+$/,
                      message: 'Formato de apellido no valido'
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
                      },
              }
            });


/* Datetimepicker */
            $(function () {
                window.prettyPrint && prettyPrint();
                $('#dp1').datepicker({
                  format: 'yyyy-mm-dd'
                });
            });



});


			
/*			
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
			

			
        }
    });
});

*/