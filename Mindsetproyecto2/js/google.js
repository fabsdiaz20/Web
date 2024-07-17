function handleCredentialResponse(response) {
  // Envía el token ID al servidor
  fetch('/auth/google', {
    method: 'POST',
    headers: {
      'Content-Type': 'application/json',
    },
    body: JSON.stringify({token: response.credential})
  })
  .then(response => response.json())
  .then(data => {
    // Maneja la respuesta del servidor
  });
}