const formulario = document.getElementById('enviarebu');
const inputs = document.querySelectorAll('#enviarebu input');

const expresiones = {
    nombre: /^[a-zA-ZÀ-ÿ\s]{1,40}$/, // Letras y espacios, pueden llevar acentos.
    direccion: /^[a-zA-ZÀ-ÿ0-9_.\s]{1,100}$/, // Letras y espacios, pueden llevar acentos.
    celular: /^\d{9,9}$/, // 9 numeros.
    correo: /^[a-zA-Z0-9_.+-]+@[a-zA-Z0-9-]+\.[a-zA-Z0-9-.]+$/,
	password: /^(?=\w*\d)(?=\w*[A-Z])(?=\w*[a-z])\S{6,20}$/ // 6 digitos
}
const campos = { 
    nombre:false,
    direccion:false,
    celular: false,
    correo: false,
    password: false
  
}

const validarFormulario = (e) => {
    switch(e.target.name){
        
        case "nombre":
            validarCampo(expresiones.nombre,e.target,'nombre');
        break;
        case "direccion":
            validarCampo(expresiones.direccion,e.target,'direccion');
        break;
        case "celular":
            validarCampo(expresiones.celular,e.target,'celular');
        break;
        case "correo":
          validarCampo(expresiones.correo,e.target,'correo');
        break;
        case "pas":
          validarCampo(expresiones.password,e.target,'pas');
        break;
        
    }
}

const validarCampo = (expresion,input,campo) => {
    if(expresion.test(input.value)){
        document.getElementById(`grupo-${campo}`).classList.remove('formulario-grupo-incorrecto');
        document.getElementById(`grupo-${campo}`).classList.add('formulario-grupo-correcto');
        document.querySelector(`#grupo-${campo} i`).classList.add('fa-check-circle');
        document.querySelector(`#grupo-${campo} i`).classList.remove('fa-times-circle');
        document.querySelector(`#grupo-${campo} .formulario-input-error`).classList.remove('formulario-input-error-activo')
        campos[campo] = true;
    } else {
        document.getElementById(`grupo-${campo}`).classList.add('formulario-grupo-incorrecto');
        document.getElementById(`grupo-${campo}`).classList.remove('formulario-grupo-correcto');
        document.querySelector(`#grupo-${campo} i`).classList.add('fa-times-circle');
        document.querySelector(`#grupo-${campo} i`).classList.remove('fa-check-circle');
        document.querySelector(`#grupo-${campo} .formulario-input-error`).classList.add('formulario-input-error-activo')
        campos[campo] = false;
    }
}

inputs.forEach((input) =>{
    input.addEventListener('keyup', validarFormulario);
    input.addEventListener('blur', validarFormulario);
});