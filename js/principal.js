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
      $('#custModalAgregar').modal('show');
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
            window.location.href = '../Auditor/AuditMenuPrincipal.php';
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
      $('#custModalEditar').modal('show');
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
          'Empresa modificada',
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
          window.location.href = '../Auditor/AuditMenuPrincipal.php';
        },2000)
      }
    }
  })
});

// Modal de borrar
$('#deletehorario').on('submit',function(e){
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
            window.location.href = '../Auditor/AuditMenuPrincipal.php';
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
          'registro': 'eliminar'
        },
        url : '../controlador/Operacion'+tipo+'.php',
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
              window.location.href="../Auditor/AuditMenuPrincipal.php";
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
  $.ajax({
    url: 'get_GuiadataAdd.php',
    type:'post',
    success: function(response){
      $('.modal-body').html(response);
      $('#custModalAgregarGuia').modal('show');
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
      if(resultado.respuesta == 'exitoso'){
          swal(
            'Correcto',
            'Referencia añadida',
            'success'
          )
          setTimeout(function(){
            window.location.href = '../Auditor/GuiaEvaluacion.php';
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









});




