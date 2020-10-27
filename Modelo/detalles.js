class Detalles {
    constructor(id_detalle, lista_platos, cantidad_platos, total) {
        this.id_detalle = id_detalle,
            //foreign key de tabla platos
            this.lista_platos = lista_platos,
            this.cantidad_platos = cantidad_platos,
            this.total = total
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