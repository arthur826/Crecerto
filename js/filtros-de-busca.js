

/*const GrupoDeCategorias = document.getElementById("seletorCategoria");
const itemCategoria = GrupoDeCategorias.querySelectorAll("li");

function filtrarPosts(valorCat) {
    const InformacoesInternaBlog = document.querySelectorAll(".lista-posts .post-noticia");

    InformacoesInternaBlog.forEach(function (infosBlog) {
        const nameCategory = infosBlog.querySelector(".category-post").textContent.trim();

        if (valorCat === nameCategory) {
            infosBlog.style.display = "block";
        } else {
            infosBlog.style.display = "none";
        }
    });
}

itemCategoria.forEach(function (botaoCategoria) {
    botaoCategoria.addEventListener("click", function () {
        const valorCat = botaoCategoria.textContent.trim();
        filtrarPosts(valorCat);
    });
});

// Adicione esse trecho para lidar com a carga dinâmica de posts
document.addEventListener("almComplete", function () {
    // Reaplica o filtro aos novos posts carregados
    const botoesNovos = document.querySelectorAll("#seletorCategoria li");
    botoesNovos.forEach(function (botaoCategoria) {
        botaoCategoria.addEventListener("click", function () {
            const valorCat = botaoCategoria.textContent.trim();
            filtrarPosts(valorCat);
        });
    });
});*/
