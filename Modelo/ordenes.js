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