function index() {
    let select = document.getElementById('forma').value;
    let error = document.getElementById('error');
    let selectClase = document.getElementById('forma'); 
    error.innerHTML = "";

    if (select === "") {
        error.innerHTML = "Selecciona una figura"; 
        selectClase.classList.add('invalido-select');
        return false;
    } else {
        selectClase.classList.remove('invalido-select'); 
        error.innerHTML = ""; 
        return true; 
    }
}

function redonda() {
    let radio = document.getElementById('radio').value;
    let error = document.getElementById('error');
    let input = document.getElementById('radio'); 
    error.innerHTML = "";
    if (radio === "") {
        error.innerHTML = "El campo del radio no puede estar vacio";
        input.classList.add('invalido-select');
        return false; 
    } 
    radio = parseFloat(radio);
    if (isNaN(radio) || radio <= 0) {
        error.innerHTML = "Tiene que ser un numero valido mayor que cero";
        input.classList.add('invalido-select');
        return false; 
    }
    input.classList.remove('invalido-select');
    error.innerHTML = "";
    return true; 
}
function cuadrado() {
    let lado1 = document.getElementById('lado1').value;
    let error = document.getElementById('error');
    let input = document.getElementById('lado1'); 
    error.innerHTML = "";
    if (lado1 === "") {
        error.innerHTML = "El campo del lado no puede estar vacío";
        input.classList.add('invalido-select');
        return false; 
    } 
    lado1 = parseFloat(lado1);
    if (isNaN(lado1) || lado1 <= 0) {
        error.innerHTML = "Tiene que ser un numero valido mayor que cero";
        input.classList.add('invalido-select');
        return false; 
    }
    input.classList.remove('invalido-select');
    error.innerHTML = "";
    return true; 
}
function rectangulo() {
    let lado1 = document.getElementById('lado1').value;
    let lado2 = document.getElementById('lado2').value;
    let error1 = document.getElementById('error1');
    let error2 = document.getElementById('error2');
    let input = document.getElementById('lado1');
    let input2 = document.getElementById('lado2');
    error1.innerHTML = "";
    error2.innerHTML = "";
    if (lado1 === "" || lado2 === "") {
        if (lado1 === "") {
            error1.innerHTML = "El campo del Lado 1 no puede estar vacío";
            input.classList.add('invalido-select');
        } else {
            error1.innerHTML = "";
            input.classList.remove('invalido-select');
        }
        if (lado2 === "") {
            error2.innerHTML = "El campo del Lado 2 no puede estar vacío";
            input2.classList.add('invalido-select');
        } else {
            error2.innerHTML = "";
            input2.classList.remove('invalido-select');
        }
        return false;
    }
    lado1 = parseFloat(lado1);
    lado2 = parseFloat(lado2);
    if (isNaN(lado1) || lado1 <= 0 || isNaN(lado2) || lado2 <= 0) {
        if (isNaN(lado1) || lado1 <= 0) {
            error1.innerHTML = "Lado 1 debe ser un número válido mayor que cero";
            input.classList.add('invalido-select');
        } else {
            error1.innerHTML = "";
            input.classList.remove('invalido-select');
        }
        if (isNaN(lado2) || lado2 <= 0) {
            error2.innerHTML = "Lado 2 debe ser un número válido mayor que cero";
            input2.classList.add('invalido-select');
        } else {
            error2.innerHTML = "";
            input2.classList.remove('invalido-select');
        }
        return false;
    }
    input.classList.remove('invalido-select');
    input2.classList.remove('invalido-select');
    error1.innerHTML = "";
    error2.innerHTML = "";
    return true;
}
function triangulo() {
    let base = document.getElementById('lado1').value;
    let altura = document.getElementById('lado2').value;
    let errorBase = document.getElementById('errorBase');
    let errorAltura = document.getElementById('errorAltura');
    let inputBase = document.getElementById('lado1');
    let inputAltura = document.getElementById('lado2');
    errorBase.innerHTML = "";
    errorAltura.innerHTML = "";

    if (base === "" || altura === "") {
        if (base === "") {
            errorBase.innerHTML = "El campo Base no puede estar vacío";
            inputBase.classList.add('invalido-select');
        } else {
            errorBase.innerHTML = "";
            inputBase.classList.remove('invalido-select');
        }

        if (altura === "") {
            errorAltura.innerHTML = "El campo Altura no puede estar vacío";
            inputAltura.classList.add('invalido-select');
        } else {
            errorAltura.innerHTML = "";
            inputAltura.classList.remove('invalido-select');
        }

        return false;
    }

    base = parseFloat(base);
    altura = parseFloat(altura);

    if (isNaN(base) || base <= 0 || isNaN(altura) || altura <= 0) {
        if (isNaN(base) || base <= 0) {
            errorBase.innerHTML = "La base debe ser un número válido mayor que cero";
            inputBase.classList.add('invalido-select');
        } else {
            errorBase.innerHTML = "";
            inputBase.classList.remove('invalido-select');
        }

        if (isNaN(altura) || altura <= 0) {
            errorAltura.innerHTML = "La altura debe ser un número válido mayor que cero";
            inputAltura.classList.add('invalido-select');
        } else {
            errorAltura.innerHTML = "";
            inputAltura.classList.remove('invalido-select');
        }

        return false;
    }

    inputBase.classList.remove('invalido-select');
    inputAltura.classList.remove('invalido-select');
    errorBase.innerHTML = "";
    errorAltura.innerHTML = "";
    return true;
}