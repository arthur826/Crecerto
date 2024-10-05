document.addEventListener("DOMContentLoaded", function() {
    const GrupoDeCategorias = document.getElementById("seletorCategoria");
    const itemCategoria = GrupoDeCategorias.querySelectorAll("li");
    const InformacoesInternaBlog = document.querySelectorAll(".lista-posts .post-noticia")

    InformacoesInternaBlog.forEach(function(infosBlog) {
        const nameCategory = infosBlog.getElementsByClassName(".category-post")

        for (let i = 0; i < itemCategoria.length; i++) {
            itemCategoria[i].addEventListener("click", function() {
                const valorCat = itemCategoria[i].textContent;
                if(valorCat === nameCategory) {
                    infosBlog.style.display="block";
                } else {
                    infosBlog.style.display="none";
                }
            })

        }
    })
})