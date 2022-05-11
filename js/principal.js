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
              window.location.href='../Auditor/MenuPrincipal.php';
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

// REGISTRO EMPRESA
$('#enviarebu').on('submit',function(e){
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
            window.location.href='LoginEmpresa.php';
            },2000)
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







});