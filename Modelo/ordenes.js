class Ordenes {
    constructor(id_orden, detalle, mesa, estado, mesero) {
        this.id_orden = id_orden,
            //foreign key de la tabla detalle
            this.detalle = detalle,
            //foreign key de la tabla mesa
            this.mesa = mesa,
            //foreign key de la tabla estado
            this.estado = estado,
            //foreign key de la tabla mesero
            this.mesero = mesero
    }

    get() {
        //consulta la información a la base de datos
    }

    post() {
        //ingresa la información a la base de datos
    }

    update() {
        //actualiza la información de la base de datos
    }
}

//consultar si hay ordenes nuevas en lcalstorage cada 10s
var id = 1
var fecha = new Date()
var dia = fecha.getDate()
var mes = fecha.getMonth() + 1
var anio = fecha.getFullYear()

function consultar() {
    setInterval(() => {
        let ordenNueva = localStorage.getItem('orden' + id)
        if (ordenNueva) {
            //procesar la orden
            let ordenSeparada = ordenNueva.split(',');
            //pasar orden a dibujar
            dibujarOrden(ordenSeparada);
            //pasar a la siguiente orden
            id++
        }
    }, 0)
}

//dibujar ordenes en página
function dibujarOrden(orden) {
    let fechaCompleta = `${dia}/${mes}/${anio}`
    let fila = document.createElement('tr')
    let cuerpo = document.getElementById('cuerpo')
    orden.forEach(element => {
        let columna = document.createElement('td')
        let texto = document.createTextNode(element)
        columna.appendChild(texto)
        fila.appendChild(columna)
    });
    let columna = document.createElement('td')
    let fechaEscrita = document.createTextNode(fechaCompleta)
    columna.appendChild(fechaEscrita)
    fila.appendChild(columna)
    cuerpo.appendChild(fila)
    alettaOrdenNueva(orden)
}

//dar un alert
function alettaOrdenNueva(orden) {
    alert(`Hay una orden Nueva ${orden}`)
    localStorage.removeItem(`orden${id}`)
}

consultar()