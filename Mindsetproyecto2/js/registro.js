function vnombre() {
            const nombre = document.getElementById('inombre').value;
            const vnom = document.getElementById('vnom');
            if (nombre.length < 3) {
                vnom.textContent = 'El nombre debe tener al menos 3 caracteres.';
            } else {
                vnom.textContent = '';
            }
        }

        function vapellido() {
            const apellido = document.getElementById('iapellido').value;
            const vapell = document.getElementById('vapell');
            if (apellido.length < 3) {
                vapell.textContent = 'El apellido debe tener al menos 3 caracteres.';
            } else {
                vapell.textContent = '';
            }
        }

        function vfecha() {
            const fecha = document.getElementById('fecha').value;
            const vfec = document.getElementById('vfec');
            if (!fecha) {
                vfec.textContent = 'Por favor ingrese una fecha válida.';
            } else {
                vfec.textContent = '';
            }
        }

        function vgenero() {
            const masculino = document.getElementById('masculino').checked;
            const femenino = document.getElementById('femenino').checked;
            const vgend = document.getElementById('vgend');
            if (!masculino && !femenino) {
                vgend.textContent = 'Por favor seleccione un género.';
            } else {
                vgend.textContent = '';
            }
        }

        function vcorreo() {
            const correo = document.getElementById('icorreo').value;
            const vcorr = document.getElementById('vcorr');
            const regex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            if (!regex.test(correo)) {
                vcorr.textContent = 'Por favor ingrese un correo electrónico válido.';
            } else {
                vcorr.textContent = '';
            }
        }

        function vcontra() {
            const contra = document.getElementById('ipass').value;
            const vcont = document.getElementById('vcont');
            if (contra.length < 6) {
                vcont.textContent = 'La contraseña debe tener al menos 6 caracteres.';
            } else {
                vcont.textContent = '';
            }
        }

        function validarFormulario() {
            vnombre();
            vapellido();
            vfecha();
            vgenero();
            vcorreo();
            vcontra();

            const validationTexts = document.querySelectorAll('.ValidationText');
            for (let text of validationTexts) {
                if (text.textContent !== '') {
                    return false;
                }
            }
            return true;
        }