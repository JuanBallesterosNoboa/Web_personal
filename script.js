let valorAnterior = null;
let operador = null;
let nuevoNumero = false;

const pantalla = document.getElementById("pantalla");

function numero(valor) {
    if (pantalla.value === "Error" || nuevoNumero) {
        pantalla.value = "";
        nuevoNumero = false;
    }

    if (valor === ".") {
        if (pantalla.value.includes(".")) return;
        if (pantalla.value === "") {
            pantalla.value = "0";
        }
    }

    pantalla.value += valor;
}

function limpiar() {
    pantalla.value = "";
    valorAnterior = null;
    operador = null;
    nuevoNumero = false;
}

function borrar() {
    if (nuevoNumero) return;
    pantalla.value = pantalla.value.slice(0, -1);
}

function operacion(signo) {
    if (pantalla.value === "" ||
        pantalla.value === "Error") return;

    if (operador !== null && !nuevoNumero) {
        calcular();
        if (pantalla.value === "Error") return;
    }

    valorAnterior = Number(pantalla.value);
    operador = signo;
    nuevoNumero = true;
}

function calcular() {
    if (operador === null ||
        valorAnterior === null ||
        nuevoNumero ||
        pantalla.value === "") return;

    let valorActual = Number(pantalla.value);
    let resultado;

    switch (operador) {
        case "+":
            resultado = valorAnterior + valorActual;
            break;
        case "-":
            resultado = valorAnterior - valorActual;
            break;
        case "*":
            resultado = valorAnterior * valorActual;
            break;
        case "/":
            if (valorActual === 0) {
                pantalla.value = "Error";
                valorAnterior = null;
                operador = null;
                nuevoNumero = true;
                return;
            }
            resultado = valorAnterior / valorActual;
            break;
    }

    pantalla.value = Number(resultado.toPrecision(12));
    valorAnterior = null;
    operador = null;
    nuevoNumero = true;
}
