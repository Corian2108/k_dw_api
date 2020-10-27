class Meseros {
    constructor(id_mesero, nombre_mesero, apellido_mesero, operario, hash) {
        this.id_mesero = id_mesero,
            this.nombre_mesero = nombre_mesero,
            this.apellido_mesero = apellido_mesero,
            //representa el usuario del mesero
            this.operario = operario,
            //hash de la contraseña del mesero
            this.hash = hash
    }
    get() {
        //consulta la información de la base de datos
    }
    update() {
        //actualiza la información de la base de datos
    }
}