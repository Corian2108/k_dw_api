var grupo = 1
const nombrePlatillos = [
    ['Churrasco parrillero', 'Desayuno continental', 'Mariscos a la plancha'],
    ['Encebollado', 'Filete a la parrilla', 'Guiso de Pollo']
]
const precioPlatillos = [
    ['$5.50', '$2.50', '$8.00'],
    ['$3.00', '$10.00', '$4.00']
]

function animar(id) {
    setInterval(() => {
        if (id === 3) {
            id = 1
            let input = document.getElementById(id)
            input.checked = true
            cambiarNombreYPrecio(id)
        } else {
            id++
            let input = document.getElementById(id)
            input.checked = true
            cambiarNombreYPrecio(id)
        }
    }, 5000)
}

function cambiarNombreYPrecio(index) {
    --index
    let nombrePlatillo = document.getElementById('nombrePlatillo')
    let precioPlatillo = document.getElementById('precio')
    if (grupo === 1) {
        nombrePlatillo.innerHTML = nombrePlatillos[0][index]
        precioPlatillo.innerHTML = precioPlatillos[0][index]
    } else {
        nombrePlatillo.innerHTML = nombrePlatillos[1][index]
        precioPlatillo.innerHTML = precioPlatillos[1][index]
    }
}

function cambiarPlatillos() {
    let ruta = '../img/Platillos/'
    let img1 = document.getElementById('img1')
    let img2 = document.getElementById('img2')
    let img3 = document.getElementById('img3')
    let label1 = document.getElementById('label1')
    let label2 = document.getElementById('label2')
    let label3 = document.getElementById('label3')
    let id1 = 1
    let id2 = 2
    let id3 = 3

    setInterval(() => {
        if (grupo === 2) {
            //resetea cada id
            id1 = 1
            id2 = 2
            id3 = 3
                //resetea imagen
            img1.src = ruta + id1 + '.png'
            img2.src = ruta + id2 + '.png'
            img3.src = ruta + id3 + '.png'
            label1.src = ruta + id1 + '.png'
            label2.src = ruta + id2 + '.png'
            label3.src = ruta + id3 + '.png'
            grupo = 1
            cambiarNombreYPrecio(1);
        } else {
            //Suma 3 a cada id
            id1 += 3
            id2 += 3
            id3 += 3
                //cambia imagen
            img1.src = ruta + id1 + '.png'
            img2.src = ruta + id2 + '.png'
            img3.src = ruta + id3 + '.png'
            label1.src = ruta + id1 + '.png'
            label2.src = ruta + id2 + '.png'
            label3.src = ruta + id3 + '.png'
            grupo++
            cambiarNombreYPrecio(1);
        }
    }, 30000)
}

animar(1);
cambiarPlatillos();