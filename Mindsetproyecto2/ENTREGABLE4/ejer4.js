function multi(event) {
            const num1 = document.getElementById('num1').value;
            const num2 = document.getElementById('num2').value;
            const num3 = document.getElementById('num3').value;
            
            if (isNaN(num1) || isNaN(num2) || isNaN(num3) || num1 == "" || num2 == "" || num3 == "") {
                alert("Por favor, ingrese tres números enteros válidos.");
                event.preventDefault(); 
                   return false; 
            }
            return true;
        }