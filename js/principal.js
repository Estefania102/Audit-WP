$(document).ready(function(){

// REGISTRO AUDITOR
$('#enviareaud').on('submit',function(e){
    e.preventDefault();
    var datos = $(this).serializeArray();
    $.ajax({
        type:$(this).attr('method'),
        data:datos,
        url:$(this).attr('action'),
        dataType:'json',
        success:function(data){
            var resultado=data;
            if(resultado.respuesta =='Correoexiste'){
              swal(
                'Correo existente',
                'Pruebe otro',
                'error'
              )
              
            }else if(resultado.respuesta=='exitoso'){
              swal(
                'Registro exitoso',
                '',
                'success'
            );setTimeout(function(){
              window.location.href='LoginAuditor.php';
              },2000)
                  }
             
        }
    })
});
  
// LOGIN AUDITOR
$('#envialoaud').on('submit',function(e){
  e.preventDefault();
  var datos = $(this).serializeArray();
  $.ajax({
      type:$(this).attr('method'),
      data:datos,
      url:$(this).attr('action'),
      dataType:'json',
      success:function(data){
          var resultado=data;
          if(resultado.respuesta =='exitoso'){
              swal(
                  'Ingreso exitoso',
                  'Bienvenido: '+resultado.usuario,
                  'success'
              )
              setTimeout(function(){
              window.location.href='../Auditor/AuditMenuPrincipal.php';
              },2000)
          }else{
              swal(
                  'Error de ingreso',
                  'Correo o contraseña inválida',
                  'error'
              )
          }
      }
  })
});

// LOGIN EMPRESA
$('#envialobu').on('submit',function(e){
e.preventDefault();
var datos = $(this).serializeArray();
$.ajax({
    type:$(this).attr('method'),
    data:datos,
    url:$(this).attr('action'),
    dataType:'json',
    success:function(data){
        var resultado=data;
        if(resultado.respuesta =='exitoso'){
            swal(
                'Ingreso exitoso',
                'Bienvenido: '+resultado.usuario,
                'success'
            )
            setTimeout(function(){
            window.location.href='../Empresa/MenuPrincipal.php';
            },2000)
        }else{
            swal(
                'Error de ingreso',
                'Correo o contraseña inválida',
                'error'
            )
        }
    }
})
});

//MENU PRINCIPAL AUDITOR

//Modal Agregar
$('.btnAgregar').click(function(){
  $.ajax({
    url: 'get_dataAdd.php',
    type:'post',
    success: function(response){
      $('.modal-body').html(response);
      $('#custModalEmpresa').modal('show');
    }
  })
});

// AGREGAR
$('#addempresa').on('submit',function(e){
  e.preventDefault();
  var datos =$(this).serializeArray();
  $.ajax({
    type:$(this).attr('method'),
    data :datos,
    url:$(this).attr('action'),
    dataType:'json',
    success: function(data){
      var resultado =data;
      if(resultado.respuesta == 'exitoso'){
          swal(
            'Correcto',
            'Empresa añadida',
            'success'
          )
          setTimeout(function(){
          // window.location.href = '../Auditor/AuditMenuPrincipal.php';
          location.reload();
          },2000)
      }else{
        swal(
          'Error',
          'Datos incompletos',
          'error'
        )
      }
    }
  })
});

//Modal Editar
$('.btnEditar').click(function(){
  var edit =$(this).data('id');
  $.ajax({
    url: 'get_dataedit.php',
    type:'post',
    data:{edit:edit},
    success: function(response){
      $('.modal-body').html(response);
      $('#custModalEmpresa').modal('show');
    }
  })
});

// MODIFICAR
$('#updateempresa').on('submit',function(e){
  e.preventDefault();
  var datos =$(this).serializeArray();
  $.ajax({
    type:$(this).attr('method'),
    data :datos,
    url:$(this).attr('action'),
    dataType:'json',
    success: function(data){
      var resultado =data;
      if(resultado.respuesta == "datos incorrectos"){
        swal(
          'Incorrecto',
          'Empresa no modificada',
          'error'
        )
      }
      else if(resultado.respuesta == "exito"){
        swal(
          'Correcto',
          'Empresa modificada',
          'success'
        )
        setTimeout(function(){
        // window.location.href = '../Auditor/AuditMenuPrincipal.php';
        location.reload();
        },2000)
      }
    }
  })
});

// Modal de borrar
$('#deletempresa').on('submit',function(e){
  e.preventDefault();
  var datos =$(this).serializeArray();
  $.ajax({
    type:$(this).attr('method'),
    data :datos,
    url:$(this).attr('action'),
    dataType:'json',
    success: function(data){
      var resultado =data;
      if(resultado.respuesta == 'exitoso'){
          swal(
            'Correcto',
            'Empresa eliminada',
            'success'
          )
          setTimeout(function(){
          // window.location.href = '../Auditor/AuditMenuPrincipal.php';
          location.reload();
          },2000)
      }else{
        swal(
          'Error',
          'No se pudo eliminar',
          'error'
        )
      }
    }
  })
});

//Borrar registro
$('.btnBorrar').on('click',function(e){
  e.preventDefault();
  var id = $(this).attr('data-id');
  var tipo = $(this).attr('data-tipo');
  swal({
  title:'¿Estás seguro?',
  text: "Una empresa se eliminará",
  icon : "warning",
  showCancelButton: true,
  confirmButtonColor : '#3085d6',
  cancelButtonColor : '#d33',
  confirmButtonText : 'Si, eliminar',
  cancelButtonText: 'Cancelar'
  }).then((result)=>{
    if(result.value){
      $.ajax({
        type:'post',
        data:{
          'id': id,
          'registroLista': 'eliminar'
        },
        url : '../controlador/OperacionLista'+tipo+'.php',
        success:function(data){
          var resultado=JSON.parse(data);
          if(resultado.respuesta=='exitoso'){
            swal(
              'Eliminado',
              'Empresa eliminada',
              'success' 
              )
              jQuery('[data-id="'+resultado.id_borrar+'"]').parents('tr').remove();
              setTimeout(function(){
              // window.location.href="../Auditor/AuditMenuPrincipal.php";
              location.reload();
              },2000)
          }
        }
      });
    }else{
      swal(
        'Acción cancelada',
        '',
        'warning'
      )
    }
    })
});

//APARTADO DE GUIA DE EVALUACIÓN

//Modal Agregar
$('.btnAgregarG').click(function(){
  var add =$(this).data('id');
  // var add=this.id;
  console.log(add);
  $.ajax({
    url: 'get_GuiadataAdd.php?add='+add,
    type:'post',
    data:{add:add},
    success: function(response){
      $('.modal-body').html(response);
      $('#custModalGuia').modal('show');
      // window.show.modal = '../Auditor/get_GuiadataAdd.php;
    }
  })
});

// AGREGAR
$('#addGuiaempresa').on('submit',function(e){
  e.preventDefault();
  var datos =$(this).serializeArray();
  $.ajax({
    type:$(this).attr('method'),
    data :datos,
    url:$(this).attr('action'),
    dataType:'json',
    success: function(data){      
      var resultado =data;
      if(resultado.respuesta == "exitoso"){
        console.log(data);
        console.log("paso exitoso");
          swal(
            'Correcto',
            'Referencia añadida',
            'success'
          )
          setTimeout(function(){
            location.reload();
          },2000)
      }else{
        console.log("no paso exitoso");
        swal(
          'Error',
          'Datos incompletos',
          'error'
        )
      }
    }
  })
});

//Modal Editar
$('.btnGuiaEditar').click(function(){
  var editGuia =$(this).data('id');
  $.ajax({
    url: 'get_Guiadataedit.php',
    type:'post',
    data:{editGuia:editGuia},
    success: function(response){
      $('.modal-body').html(response);
      $('#custModalGuia').modal('show');
    }
  })
});

// MODIFICAR
$('#updateGuiaempresa').on('submit',function(e){
  e.preventDefault();
  var datos =$(this).serializeArray();
  $.ajax({
    type:$(this).attr('method'),
    data :datos,
    url:$(this).attr('action'),
    dataType:'json',
    success: function(data){
      var resultado =data;
      if(resultado.respuesta == "datos incorrectos"){
        
        swal(
          'Incorrecto',
          'Referencia no modificada',
          'error'
        )
      }
      else {
        console.log(data);
        console.log("paso exitoso");
        swal(
          'Correcto',
          'Referencia modificada',
          'success'
        )
        setTimeout(function(){
          location.reload();       
        },2000)
      }
    }
  })
});

//Borrar registro
$('.btnBorrarGuia').on('click',function(e){
  e.preventDefault();
  var id = $(this).attr('data-id');
  var tipo = $(this).attr('data-tipo');
  swal({
  title:'¿Estás seguro?',
  text: "Una referencia se eliminará",
  icon : "warning",
  showCancelButton: true,
  confirmButtonColor : '#3085d6',
  cancelButtonColor : '#d33',
  confirmButtonText : 'Si, eliminar',
  cancelButtonText: 'Cancelar'
  }).then((result)=>{
    if(result.value){
      $.ajax({
        type:'post',
        data:{
          'id': id,
          'registroGuia': 'eliminar'
        },
        url : '../controlador/OperacionGuia'+tipo+'.php',
        success:function(data){
          var resultado=JSON.parse(data);
          if(resultado.respuesta=='exitoso'){
            swal(
              'Eliminado',
              'Referencia eliminada',
              'success' 
              )
              jQuery('[data-id="'+resultado.id_borrar+'"]').parents('tr').remove();
              setTimeout(function(){
              location.reload();             
              },2000)
          }
        }
      });
    }else{
      swal(
        'Acción cancelada',
        '',
        'warning'
      )
    }
    })
});

// Modal de borrar
$('#deletereferencia').on('submit',function(e){
  e.preventDefault();
  var datos =$(this).serializeArray();
  $.ajax({
    type:$(this).attr('method'),
    data :datos,
    url:$(this).attr('action'),
    dataType:'json',
    success: function(data){
      var resultado =data;
      if(resultado.respuesta == 'exitoso'){
          swal(
            'Correcto',
            'Referencia eliminada',
            'success'
          )
          setTimeout(function(){
          // window.location.href = '../Auditor/GuiaEvaluacion.php';
          location.reload();
          },2000)
      }else{
        swal(
          'Error',
          'No se pudo eliminar',
          'error'
        )
      }
    }
  })
});

//APARTADO DE INGRESO DE ELEMENTOS
//Modal Agregar
$('.btnAgregarElementos').click(function(){
  var add =$(this).data('id');
  $.ajax({
    url: 'get_ElementosdataAdd.php?add='+add,
    type:'post',
    data:{add:add},
    success: function(response){
      $('.modal-body').html(response);
      $('#custModalElementos').modal('show');
    }
  })
});

// AGREGAR
$('#addelementos').on('submit',function(e){
  e.preventDefault();
  var datos =$(this).serializeArray();
  $.ajax({
    type:$(this).attr('method'),
    data :datos,
    url:$(this).attr('action'),
    dataType:'json',
    success: function(data){
      var resultado =data;
      if(resultado.respuesta == 'Fecha pasada'){
        swal(
          'Fecha debe ser mayor',
          'Cambie de fecha',
          'error'
        )
        }else if(resultado.respuesta == 'exitoso'){
          swal(
            'Correcto',
            'Elemento añadido',
            'success'
          )
          setTimeout(function(){
          // window.location.href = '../Auditor/IngresoElementos.php';
          location.reload();
          },2000)
      }else{
        swal(
          'Error',
          'Datos incompletos',
          'error'
        )
      }
    }
  })
});

//Modal Editar
$('.btnEditarElementos').click(function(){
  var editElemento =$(this).data('id');
  $.ajax({
    url: 'get_Elementosdataedit.php',
    type:'post',
    data:{editElemento:editElemento},
    success: function(response){
      $('.modal-body').html(response);
      $('#custModalElementos').modal('show');
    }
  })
});

// MODIFICAR
$('#updateElemento').on('submit',function(e){
  e.preventDefault();
  var datos =$(this).serializeArray();
  $.ajax({
    type:$(this).attr('method'),
    data :datos,
    url:$(this).attr('action'),
    dataType:'json',
    success: function(data){
      var resultado =data;
      if(resultado.respuesta == 'Fecha pasada'){
        swal(
          'Fecha debe ser mayor',
          'Cambie de fecha',
          'error'
        )
        }else if(resultado.respuesta == "datos incorrectos"){
        swal(
          'Incorrecto',
          'Elemento no modificada',
          'error'
        )
      }
      else if(resultado.respuesta == "exito"){
        swal(
          'Correcto',
          'Elemento modificada',
          'success'
        )
        setTimeout(function(){
        // window.location.href = '../Auditor/IngresoElementos.php';
        location.reload();
        },2000)
      }
    }
  })
});

//Borrar registro
$('.btnBorrarElementos').on('click',function(e){
  e.preventDefault();
  var id = $(this).attr('data-id');
  var tipo = $(this).attr('data-tipo');
  swal({
  title:'¿Estás seguro?',
  text: "Un elemento se eliminará",
  icon :"warning",
  showCancelButton: true,
  confirmButtonColor : '#3085d6',
  cancelButtonColor : '#d33',
  confirmButtonText : 'Si, eliminar',
  cancelButtonText: 'Cancelar'
  }).then((result)=>{
    if(result.value){
      $.ajax({
        type:'post',
        data:{
          'id': id,
          'registroElemento': 'eliminar'
        },
        url : '../controlador/OperacionElemento'+tipo+'.php',
        success:function(data){
          var resultado=JSON.parse(data);
          if(resultado.respuesta=='exitoso'){
            swal(
              'Eliminado',
              'Elemento eliminado',
              'success' 
              )
              jQuery('[data-id="'+resultado.id_borrar+'"]').parents('tr').remove();
              setTimeout(function(){
              // window.location.href="../Auditor/IngresoElementos.php";
              location.reload();
              },2000)
          }
        }
      });
    }else{
      swal(
        'Acción cancelada',
        '',
        'warning'
      )
    }
    })
});

// Modal de borrar
$('#deleteElementos').on('submit',function(e){
  e.preventDefault();
  var datos =$(this).serializeArray();
  $.ajax({
    type:$(this).attr('method'),
    data :datos,
    url:$(this).attr('action'),
    dataType:'json',
    success: function(data){
      var resultado =data;
      if(resultado.respuesta == 'exitoso'){
          swal(
            'Correcto',
            'Referencia eliminada',
            'success'
          )
          setTimeout(function(){
          // window.location.href = '../Auditor/IngresoElementos.php';
          location.reload();
          },2000)
      }else{
        swal(
          'Error',
          'No se pudo eliminar',
          'error'
        )
      }
    }
  })
});

//Apartado de envio formulario

$('.btnEnvioFormulario').click(function(){
  var editGuia =$(this).data('id');
  $.ajax({
    url: 'get_RespuestadataAdd.php',
    type:'post',
    data:{editGuia:editGuia},
    success: function(response){
      $('.modal-body').html(response);
      $('#custModalEnvioFormulario').modal('show');
    }
  })
});

// $(".btnEnvioForm").click(function() {
//   var editGuia =$(this).data('id');
//   $('#correo').value('');
//   var correo = document.getElementById("#correo").value;
//   document.getElementById("correoe").innerHTML = correo; 
// });


//APARTADO DE CONCLUSIONES
//Modal Agregar
$('.btnAgregarComclusiones').click(function(){
  var add =$(this).data('id');
  $.ajax({
    url: 'get_ConclusiondataAdd.php?add='+add,
    type:'post',
    data:{add:add},
    success: function(response){
      $('.modal-body').html(response);
      $('#custModalConclusiones').modal('show');
    }
  })
});

// AGREGAR
$('#addconclusion').on('submit',function(e){
  e.preventDefault();
  var datos =$(this).serializeArray();
  $.ajax({
    type:$(this).attr('method'),
    data :datos,
    url:$(this).attr('action'),
    dataType:'json',
    success: function(data){
      var resultado =data;
      if(resultado.respuesta == 'exitoso'){
          swal(
            'Correcto',
            'Conclusion añadida',
            'success'
          )
          setTimeout(function(){
          // window.location.href = '../Auditor/IngresoElementos.php';
          location.reload();
          },2000)
      }else{
        swal(
          'Error',
          'Datos incompletos',
          'error'
        )
      }
    }
  })
});

//Modal Editar
$('.btnEditarConclusiones').click(function(){
  var editConclusion =$(this).data('id');
  $.ajax({
    url: 'get_Conclusiondataedit.php',
    type:'post',
    data:{editConclusion:editConclusion},
    success: function(response){
      $('.modal-body').html(response);
      $('#custModalConclusiones').modal('show');
    }
  })
});

// MODIFICAR
$('#updateConclusion').on('submit',function(e){
  e.preventDefault();
  var datos =$(this).serializeArray();
  $.ajax({
    type:$(this).attr('method'),
    data :datos,
    url:$(this).attr('action'),
    dataType:'json',
    success: function(data){
      var resultado =data;
      if(resultado.respuesta == "datos incorrectos"){
        swal(
          'Incorrecto',
          'Conclusión no modificada',
          'error'
        )
      }
      else if(resultado.respuesta == "exito"){
        swal(
          'Correcto',
          'Conclusión modificada',
          'success'
        )
        setTimeout(function(){
        // window.location.href = '../Auditor/IngresoElementos.php';
        location.reload();
        },2000)
      }
    }
  })
});

//Borrar registro
$('.btnBorrarConclusiones').on('click',function(e){
  e.preventDefault();
  var id = $(this).attr('data-id');
  var tipo = $(this).attr('data-tipo');
  swal({
  title:'¿Estás seguro?',
  text: "Un conclusión se eliminará",
  icon :"warning",
  showCancelButton: true,
  confirmButtonColor : '#3085d6',
  cancelButtonColor : '#d33',
  confirmButtonText : 'Si, eliminar',
  cancelButtonText: 'Cancelar'
  }).then((result)=>{
    if(result.value){
      $.ajax({
        type:'post',
        data:{
          'id': id,
          'registroConclusion': 'eliminar'
        },
        url : '../controlador/OperacionConclusion'+tipo+'.php',
        success:function(data){
          var resultado=JSON.parse(data);
          if(resultado.respuesta=='exitoso'){
            swal(
              'Eliminado',
              'Conclusión eliminada',
              'success' 
              )
              jQuery('[data-id="'+resultado.id_borrar+'"]').parents('tr').remove();
              setTimeout(function(){
              // window.location.href="../Auditor/IngresoElementos.php";
              location.reload();
              },2000)
          }
        }
      });
    }else{
      swal(
        'Acción cancelada',
        '',
        'warning'
      )
    }
    })
});

// Modal de borrar
$('#deleteConclusiones').on('submit',function(e){
  e.preventDefault();
  var datos =$(this).serializeArray();
  $.ajax({
    type:$(this).attr('method'),
    data :datos,
    url:$(this).attr('action'),
    dataType:'json',
    success: function(data){
      var resultado =data;
      if(resultado.respuesta == 'exitoso'){
          swal(
            'Correcto',
            'Conclusión eliminada',
            'success'
          )
          setTimeout(function(){
          // window.location.href = '../Auditor/IngresoElementos.php';
          location.reload();
          },2000)
      }else{
        swal(
          'Error',
          'No se pudo eliminar',
          'error'
        )
      }
    }
  })
});

//APARTADO DE RECOMENDACIONES

//Modal Agregar
$('.btnAgregarRecomendaciones').click(function(){
  var add =$(this).data('id');
  $.ajax({
    url: 'get_RecomendaciondataAdd.php?add='+add,
    type:'post',
    data:{add:add},
    success: function(response){
      $('.modal-body1').html(response);
      $('#custModalRecomendaciones').modal('show');
    }
  })
});

// AGREGAR
$('#addrecomendaciones').on('submit',function(e){
  e.preventDefault();
  var datos =$(this).serializeArray();
  $.ajax({
    type:$(this).attr('method'),
    data :datos,
    url:$(this).attr('action'),
    dataType:'json',
    success: function(data){
      var resultado =data;
      if(resultado.respuesta == 'exitoso'){
          swal(
            'Correcto',
            'Recomendación añadida',
            'success'
          )
          setTimeout(function(){
          // window.location.href = '../Auditor/IngresoElementos.php';
          location.reload();
          },2000)
      }else{
        swal(
          'Error',
          'Datos incompletos',
          'error'
        )
      }
    }
  })
});

//Modal Editar
$('.btnEditarRecomendaciones').click(function(){
  var editRecomendacion=$(this).data('id');
  $.ajax({
    url: 'get_Recomendaciondataedit.php',
    type:'post',
    data:{editRecomendacion:editRecomendacion},
    success: function(response){
      $('.modal-body1').html(response);
      $('#custModalRecomendaciones').modal('show');
    }
  })
});

// MODIFICAR
$('#updateRecomendacion').on('submit',function(e){
  e.preventDefault();
  var datos =$(this).serializeArray();
  $.ajax({
    type:$(this).attr('method'),
    data :datos,
    url:$(this).attr('action'),
    dataType:'json',
    success: function(data){
      console.log(data);
      var resultado =data;
      if(resultado.respuesta == "datos incorrectos"){
        swal(
          'Incorrecto',
          'Recomendación no modificada',
          'error'
        )
      }
      else if(resultado.respuesta == "exito"){
        swal(
          'Correcto',
          'Recomendación modificada',
          'success'
        )
        setTimeout(function(){
        // window.location.href = '../Auditor/IngresoElementos.php';
        location.reload();
        },2000)
      }
    }
  })
});

//Borrar registro
$('.btnBorrarRecomendaciones').on('click',function(e){
  e.preventDefault();
  var id = $(this).attr('data-id');
  var tipo = $(this).attr('data-tipo');
  swal({
  title:'¿Estás seguro?',
  text: "Una recomendación se eliminará",
  icon :"warning",
  showCancelButton: true,
  confirmButtonColor : '#3085d6',
  cancelButtonColor : '#d33',
  confirmButtonText : 'Si, eliminar',
  cancelButtonText: 'Cancelar'
  }).then((result)=>{
    if(result.value){
      $.ajax({
        type:'post',
        data:{
          'id': id,
          'registroRecomendacion': 'eliminar'
        },
        url : '../controlador/OperacionRecomendacion'+tipo+'.php',
        success:function(data){
          var resultado=JSON.parse(data);
          if(resultado.respuesta=='exitoso'){
            swal(
              'Eliminado',
              'Recomendación eliminada',
              'success' 
              )
              jQuery('[data-id="'+resultado.id_borrar+'"]').parents('tr').remove();
              setTimeout(function(){
              // window.location.href="../Auditor/IngresoElementos.php";
              location.reload();
              },2000)
          }
        }
      });
    }else{
      swal(
        'Acción cancelada',
        '',
        'warning'
      )
    }
    })
});

// Modal de borrar
$('#deleteConclusiones').on('submit',function(e){
  e.preventDefault();
  var datos =$(this).serializeArray();
  $.ajax({
    type:$(this).attr('method'),
    data :datos,
    url:$(this).attr('action'),
    dataType:'json',
    success: function(data){
      var resultado =data;
      if(resultado.respuesta == 'exitoso'){
          swal(
            'Correcto',
            'Recomendación eliminada',
            'success'
          )
          setTimeout(function(){
          // window.location.href = '../Auditor/IngresoElementos.php';
          location.reload();
          },2000)
      }else{
        swal(
          'Error',
          'No se pudo eliminar',
          'error'
        )
      }
    }
  })
});

});




