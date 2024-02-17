document.getElementById("campo").addEventListener("keyup", getCodigos)

function getCodigos() {
    let inputCP = document.getElementById("campo").value
    let lista = document.getElementById("lista")


    if (inputCP.length > 0) {

        let url = "./inc/getCodigos.php";
        let formData = new FormData()
        formData.append("campo", inputCP)

        fetch(url, {
            method: "POST",
            body: formData,
            mode: "cors"

        }).then(response => response.json()).then(data => {
            lista.style.display = 'block'
            lista.innerHTML = data
        })
            .catch(err => console.log(err))
    } else {
        lista.style.display = 'none'
     }
}