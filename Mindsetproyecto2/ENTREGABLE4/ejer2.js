function tarjetapago() {
            let cantidad = document.pago.cantidad.value;
            let meses = document.pago.meses.value;

            let monto= cantidad*30;
         
        
            document.getElementById('resultado').textContent = "s/. " + monto;

}