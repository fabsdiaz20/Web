function creartriangulo(){
    var a, b;
    a=parseInt(document.triangulo.tamaño.value);
    b=document.triangulo.caracter.value;
     if (!b) {
                alert('Por favor ingrese un carácter.');
                return;
            }

            if (isNaN(a) || a <= 0) {
                alert('Por favor ingrese un tamaño válido.');
                return;
            }
    let triangulo = '';

     for (let i = a; i > 0; i--) {
                let spaces = ' '.repeat(a - i); // Incrementa el número de espacios
                let chars = b.repeat(2 * i - 1); // Decrece el número de caracteres
                triangulo += spaces + chars.trim() + '\n';
            }
    document.getElementById('resultado').textContent = triangulo;
}

 function convertirABase10() {
            var base,num;
             base = document.Convertidor.base.value;
             num = document.Convertidor.numero.value;

           if (isNaN(base) || base < 2 || base> 10) {
                alert('La base debe ser un número entre 2 y 10.');
                return;
            }
            const regex = new RegExp(`^[0-${base-1}]+$`);
            if (!regex.test(num)) {
             alert(`El número ingresado no pertenece a la base ${base}.`);
             return;
             }
             const valorBase10 = parseInt(num, base);
document.getElementById('resultado1').innerHTML = `El valor en base 10 es: ${valorBase10}`;



}

function mostrarDescripcion() {
    document.getElementById('desc1').style.display = 'block';
}

function ocultarDescripcion() {
    document.getElementById('desc1').style.display = 'none';
}

function determinarDatos() {
    var numeroEmpleado = document.getElementById("numeroEmpleado").value;
    var estadoCivil = parseInt(numeroEmpleado.charAt(0));
    var edad = parseInt(numeroEmpleado.substr(1, 2));
    var sexo = (parseInt(numeroEmpleado.charAt(3)) % 2 === 0) ? "Femenino" : "Masculino";
    var estadoCivilTexto;
    switch (estadoCivil) {
        case 1:
            estadoCivilTexto = "Soltero";
            break;
        case 2:
            estadoCivilTexto = "Casado";
            break;
        case 3:
            estadoCivilTexto = "Viudo";
            break;
        case 4:
            estadoCivilTexto = "Divorciado";
            break;
        default:
            estadoCivilTexto = "Desconocido";
    }
    var resultado = "Estado Civil: " + estadoCivilTexto + "<br>" +
                    "Edad: " + edad + " años" + "<br>" +
                    "Sexo: " + sexo;
    document.getElementById("resultado5").innerHTML = resultado;
}

  function calcularsigno(event) {
            event.preventDefault();

            const dia = parseInt(document.getElementById('dia').value);
            const mes = parseInt(document.getElementById('mes').value);

            const signosZodiacales = [
                { signo: "Capricornio", img: "imagenes/capricornio.jpg " , inicio: [12, 22], fin: [1, 19], descripcion: "Estabilidad, seguridad y tranquilidad es lo que mejor define a un Capricornio ." },
                { signo: "Acuario", img: "imagenes/acuario.jpg", inicio: [1, 20], fin: [2, 18], descripcion: "Original y humanitario, independiente e intelectual." },
                { signo: "Piscis", img: "imagenes/piscis.jpg", inicio: [2, 19], fin: [3, 20], descripcion: "Son tranquilos, amables y pacientes. Los Piscis son sensibles a los sentimientos de los demás y responden con simpatía al tacto y al sufrimiento" },
                { signo: "Aries", img: "imagenes/aries.jpg", inicio: [3, 21], fin: [4, 19], descripcion: "Los Aries son personas llenas de energía y entusiasmo por la vida. Aventureros por naturaleza, les encantan los retos, la libertad y las nuevas ideas, por lo que nunca tienen miedo a los comienzos o nuevas etapas. " },
                { signo: "Tauro", img: "imagenes/tauro.jpeg", inicio: [4, 20], fin: [5, 20], descripcion: "Un Tauro es una persona que tiene una gran fuerza de voluntad, es práctico y decidido en la toma de decisiones. Suelen ser personas estables y conservadoras." },
                { signo: "Géminis", img: "imagenes/geminis.jpg", inicio: [5, 21], fin: [6, 20], descripcion: "Inteligencia y capacidad para aprender la tienen, aunque suelen aburrirse en el proceso de aprendizaje." },
                { signo: "Cáncer", img: "imagenes/cancer.jpg", inicio: [6, 21], fin: [7, 22], descripcion: "Les encanta ser extrovertidos, pero también tienen tendencia a retraerse. El hogar es lo más importante para ellos" },
                { signo: "Leo", img: "imagenes/leo.jpg", inicio: [7, 23], fin: [8, 22], descripcion: "Es el signo más dominante del Zodiaco. Es creativo y extrovertido. Tienen ambición, fuerza, valentía y seguridad " },
                { signo: "Virgo", img: "imagenes/virgo.jpg", inicio: [8, 23], fin: [9, 22], descripcion: "Los Virgo son observadores, pacientes y les cuesta hacer amigos por su carácter frío que muestran a veces. " },
                { signo: "Libra", img: "imagenes/libra.jpg", inicio: [9, 23], fin: [10, 22], descripcion: "Tienen encanto, elegancia, buen gusto y son amables y pacíficos" },
                { signo: "Escorpio", img: "imagenes/escorpio.jpg", inicio: [10, 23], fin: [11, 21], descripcion: "Tienen mucha fuerza de voluntad y muestran tenacidad , pero también les afecta al estado de ánimo las circunstancias que les rodean." },
                { signo: "Sagitario", img: "imagenes/sagitario.jpg", inicio: [11, 22], fin: [12, 21], descripcion: "Optimista y jovial, honesto y directo, intelectual y filosófico." }
            ];

            let signoZodiacal = '';

            for (let i = 0; i < signosZodiacales.length; i++) {
                const signo = signosZodiacales[i];
                const mesInicio = signo.inicio[0];
                const diaInicio = signo.inicio[1];
                const mesFin = signo.fin[0];
                const diaFin = signo.fin[1];

                if ((mes === mesInicio && dia >= diaInicio) || (mes === mesFin && dia <= diaFin) ||
                    (mes > mesInicio && mes < mesFin) || 
                    (mesInicio > mesFin && ((mes > mesInicio && mes <= 12) || (mes >= 1 && mes < mesFin)))) {
                    signoZodiacal = signo;
                    break;
                }
            }

            document.getElementById('resultado4').innerHTML = `
                <h2>${signoZodiacal.signo}</h2>
                <img src="${signoZodiacal.img}" alt="${signoZodiacal.signo}">
                <p>${signoZodiacal.descripcion}</p>
            `;
        }

