document.getElementById('custom-google-button').addEventListener('click', function() {
  gapi.auth2.getAuthInstance().signIn();
});


function onSignIn(googleUser) {
  var profile = googleUser.getBasicProfile();
  console.log('ID: ' + profile.getId()); // Do not send to your backend! Use an ID token instead.
  console.log('Name: ' + profile.getName());
  console.log('Image URL: ' + profile.getImageUrl());
  console.log('Email: ' + profile.getEmail()); // This is null if the 'email' scope is not present.

  // Redirige al usuario a la página de perfil
  window.location.href = './perfil.html'; // Cambia 'perfil.html' por la URL de tu página de perfil.

  // Muestra una alerta de inicio de sesión exitoso
  alert('¡Inicio de sesión exitoso! Bienvenido, ' + profile.getName());
}

  function signOut() {
    var auth2 = gapi.auth2.getAuthInstance();
    auth2.signOut().then(function () {
      console.log('User signed out.');
    });
  }
