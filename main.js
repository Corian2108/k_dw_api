var ordenId = 0

function ordenar() {
    let platillo = document.getElementById('nombrePlatillo').innerHTML
    let precio = document.getElementById('precio').innerHTML
    let precioDecimal = parseFloat(precio.slice(1, -1))
    let mesa = prompt('Ingrese su número de mesa')
    let cantidad = prompt('¿Cuantos platos va a ordenar?')

    if (parseInt(cantidad) > 1) {
        let total = precioDecimal * parseInt(cantidad)
            ++ordenId
        localStorage.setItem(`orden${ordenId}`, `${ordenId},${mesa},${platillo},${cantidad},${precio},${total}`)
        alert(` Sus platillos ${platillo}, para la mesa ${mesa} estarán listos en breve, el valor de su factura es $${total}.`)
    } else {
        ++ordenId
        localStorage.setItem(`orden${ordenId}`, `${ordenId},${mesa},${platillo},1,${precio},${precio}`)
        alert(` Su platillo ${platillo}, con precio ${precio}, para la mesa ${mesa} estará listo en breve.`)
    }

}