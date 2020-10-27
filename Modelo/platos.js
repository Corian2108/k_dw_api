class Platos {
    constructor(id_plato, nombre_plato, precio, cantidad, ) {
        this.id_plato = id_plato,
            this.nombre_plato = nombre_plato,
            this.precio = precio,
            this.cantidad = cantidad
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

    checar() {
        //Checando input 1 para prevenir bug
        const input1 = document.getElementById('1')
        input1.checked = true
    }
}

var antiBug = new Platos()
antiBug.checar()