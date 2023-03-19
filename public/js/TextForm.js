function mostrar(valor){
    document.getElementById("resultado").innerHTML=valor;
}
function mostrarNumero(valor){
    document.getElementById("resultadoNumero").innerHTML=valor;
}
////////////////////////Funcion select////////////////

const aulas = document.querySelector('#aulas');
    aulas.addEventListener('change', () => {
        let valorOption = aulas.value;

        var optionSelect = aulas.options[aulas.selectedIndex];
        document.getElementById("resultadoAula").innerHTML = optionSelect.text;
    });

function mostrarTelefono(valor){
    document.getElementById("resultadoTelefono").innerHTML=valor;
}
function mostrarUA(valor){
    document.getElementById("resultadoUA").innerHTML=valor;
}
function mostrarProfesor(valor){
    document.getElementById("resultadoProfesor").innerHTML=valor;
}
////////////////////////Funcion select////////////////

const licenciaturas = document.querySelector('#licenciaturas');
licenciaturas.addEventListener('change', () => {
        let valorOption = licenciaturas.value;

        var optionSelect = licenciaturas.options[licenciaturas.selectedIndex];
        document.getElementById("resultadoLicenciatura").innerHTML = optionSelect.text;
    });
////////////////////////Funcion select////////////////

const insumos = document.querySelector('#insumos');
insumos.addEventListener('change', () => {
        let valorOption = insumos.value;

        var optionSelect = insumos.options[insumos.selectedIndex];
        document.getElementById("resultadoInsumos").innerHTML = optionSelect.text;
    });
////////////////////////Funcion select////////////////

const id_numero = document.querySelector('#id_numero');
id_numero.addEventListener('change', () => {
        let valorOption = id_numero.value;
        console.log(valorOption);
        
        var optionSelect = id_numero.options[id_numero.selectedIndex];
        document.getElementById("resultadoNumeros").innerHTML = optionSelect.text;
    });
function mostrarFS(valor){
    document.getElementById("resultadoFS").innerHTML=valor;
}
function mostrarFE(valor){
    document.getElementById("resultadoFE").innerHTML=valor;
}