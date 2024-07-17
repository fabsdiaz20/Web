function reclamar(event) {
    let dni = document.getElementById('dni').value;
    let nombre = document.getElementById('nombre').value;
    let apellidos = document.getElementById('apellidos').value;
    let correo = document.getElementById('correo').value;
    let telefono = document.getElementById('telefono').value;
    let reclamo = document.getElementById('reclamo').value;
            if (nombre == "" || correo == "" || reclamo == "" ||  telefono=="" ) {
                alert("Todos los campos son obligatorios");
                event.preventDefault(); 
                   return false; 
            }
            var correoRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            if (!correoRegex.test(correo)) {
                alert("Por favor, ingrese un correo electrónico válido");
                event.preventDefault(); 
                   return false; 
            }

    alert("Solicitud registrada ");
    return true;
}

