function validarFormulario(event) {
            const cantidad = document.getElementById('cantidad').value;
          if (isNaN(cantidad) || cantidad <= 0) {
                alert("Por favor, ingrese un número válido mayor que 0.");
                  event.preventDefault(); 
                   return false; 
            }
            return true;
}