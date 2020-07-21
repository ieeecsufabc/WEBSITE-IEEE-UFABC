const voltarTopo = document.querySelector('[data-js="voltarTopo"]')

    const subirFunction = () => {
        document.body.scrollTop = 0
        document.documentElement.scrollTop = 0
    }

    /*const showFunction = () => {
        if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
            voltarTopo.style.opacity = 100
        } 
        else {
            voltarTopo.style.opacity = 0
        }
    }*/
    if (document.readyState){
        //window.onscroll = showFunction
        voltarTopo.onclick = subirFunction
    }