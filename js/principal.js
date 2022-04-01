$(document).ready(function(){
// REGISTRO 
$('#envia5').on('submit',function(e){
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
              window.location.href='Login.php';
              },2000)
                  }
             
        }
    })
  })
  
});