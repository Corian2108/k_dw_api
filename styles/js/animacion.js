var movil = document.getElementById('movil')

function mover() {

    let movimiento = setInterval(frame, 10)
    let valorX = 0
    let valorY = -350

    function frame() {
        if (valorX === 750) {
            clearInterval(movimiento)
        } else {
            movil.style.left = valorX + 'px'
            movil.style.bottom = valorY + 'px'
            valorX++
            valorY = Math.sqrt((750 * valorX) - (valorX * valorX)) - 350
        }
    }
}

mover()