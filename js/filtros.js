/*Filtro Filiais*/

document.addEventListener("DOMContentLoaded", function() {
    const listaTopoRS = document.getElementById("seletorCidade-RS")
    const listaTopoPA = document.getElementById("seletorCidade-PA")
    const listaTopoSC = document.getElementById("seletorCidade-SC")

    const seletorEstado = document.getElementById("meuSeletorEstado")
    const nameState = document.querySelectorAll(".topo .cidades")
    const listaItensRS = listaTopoRS.querySelectorAll("li");
    const listaItensPA = listaTopoPA.querySelectorAll("li");
    const listaItensSC = listaTopoSC.querySelectorAll("li");
    const infosCidade = document.querySelectorAll(".infos .filiais .infos-cidade")

    seletorEstado.addEventListener("change", function() {
        const estado = seletorEstado.options[seletorEstado.selectedIndex].text;

        nameState.forEach(function(nomeRegiao) {
            const nomeDoEstado = nomeRegiao.querySelector("h5").textContent;

            if(estado === nomeDoEstado || estado === "Todos") {
                nomeRegiao.style.display = "block";
            } else {
                nomeRegiao.style.display = "none";
            }
        })
    })

    /*SELETOR DE CIDADES DO RIO GRANDE DO SUL*/
        infosCidade.forEach(function(infosFilial) {
            const cidadeFilial = infosFilial.querySelector("h3").textContent.trim();

            for (let i = 0; i < listaItensRS.length; i++) {
                listaItensRS[i].addEventListener("click", function() {
                    const valor = listaItensRS[i].textContent.trim();
                    if(valor === cidadeFilial) {
                        infosFilial.style.display="block";
                    } else {
                        infosFilial.style.display="none";
                    }
                });
            }
        })
    /*////*/

    /*SELETOR DE CIDADES DO PARANÁ*/
        infosCidade.forEach(function(infosFilial) {
            const cidadeFilial = infosFilial.querySelector("h3").textContent;

            for (let i = 0; i < listaItensPA.length; i++) {
                listaItensPA[i].addEventListener("click", function() {
                    const valor = listaItensPA[i].textContent;
                    if(valor === cidadeFilial) {
                        infosFilial.style.display="block";
                    } else {
                        infosFilial.style.display="none";
                    }
                });
            }
        })
    /*////*/

    /*SELETOR DE CIDADES DO SANTA CATARINA*/
        infosCidade.forEach(function(infosFilial) {
            const cidadeFilial = infosFilial.querySelector("h3").textContent;

            for (let i = 0; i < listaItensSC.length; i++) {
                listaItensSC[i].addEventListener("click", function() {
                    const valor = listaItensSC[i].textContent;
                    if(valor === cidadeFilial) {
                        infosFilial.style.display="block";
                    } else {
                        infosFilial.style.display="none";
                    }
                });
            }
        })
    /*////*/
})

const btnCidades = document.querySelectorAll(".btn-cidades");

function clickBtn() {

    btnCidades.forEach(btn => btn.classList.remove("active"));

    
    this.classList.add("active");
}

btnCidades.forEach((btn) => {
    btn.addEventListener("click", clickBtn);
});


/***********/

const btnFiltro = document.querySelectorAll(".btn-filtro");

function clickBtn2() {

    btnFiltro.forEach(btn => btn.classList.remove("active-filtro"));

    
    this.classList.add("active-filtro");
}

btnFiltro.forEach((btn) => {
    btn.addEventListener("click", clickBtn2);
});

/*****/

const btnPlayVideo = document.querySelectorAll(".btn-play-video");
const modalInicialHistorias = document.getElementById("modanicialHistorias");
const videoClikadoContainer = document.querySelector(".video-clikado");
const videoClikado = document.getElementById("videoClikado");

btnPlayVideo.forEach(function(btn) {
    btn.addEventListener("click", function() {
        // Obter o iframe da LI clicada
        const iframe = btn.closest("li").querySelector(".video .iframe-video");

        // Mover o iframe para a videoClikadoContainer
        videoClikadoContainer.innerHTML = "";
        videoClikadoContainer.appendChild(iframe.cloneNode(true));

        modalInicialHistorias.style.opacity = "1";
        modalInicialHistorias.style.zIndex = "3000";
        document.body.style.overflow = 'hidden';
    });
});

videoClikado.addEventListener("click", function() {
    // Esconder o modal
    modalInicialHistorias.style.opacity = "0";
    modalInicialHistorias.style.zIndex = "0";
    topTextoHistorias.style.zIndex="2000";
    document.body.style.overflow = 'auto';

    // Limpar a videoClikadoContainer ao fechar o modal
    videoClikadoContainer.innerHTML = "";
});





/***********/
/*document.addEventListener("DOMContentLoaded", function() {
    const searchInput = document.getElementById("search-input");
    const searchButton = document.getElementById("search-button");
    const searchResults = document.getElementById("search-results");
    const msgResultado = document.getElementById("results");


    function setupSearch() {
        searchButton.addEventListener("click", function() {
            const query = normalizeString(searchInput.value).trim();
            searchResults.innerHTML = "";
            let resultados = false;
    
            if (query === "") {
                return;
            }
    
            document.querySelectorAll(".lista-posts li").forEach(function(postLi) {
                const postTitle = postLi.querySelector(".title-post");
                const categoryPost = postLi.querySelector(".category-post");
    
                if (postTitle && categoryPost) {
                    const titleText = normalizeString(postTitle.textContent);
                    const categoryText = normalizeString(categoryPost.textContent);
    
                    if (titleText.includes(query) || categoryText.includes(query)) {
                        postLi.style.display = "block";
                        resultados = true;
                        contarPosts();
                    } else {
                        postLi.style.display = "none";
                    }
                }
            });
    
            updateNoResultsMessage(resultados);
        });
    }
    // Função para remover acentos e converter para minúsculas
    function normalizeString(str) {
        return str.toLowerCase().normalize("NFD").replace(/[\u0300-\u036f]/g, "");
    }

    function updateNoResultsMessage(resultados) {
        const existingError = document.getElementById("noResultsMessage");

        if (!resultados && !existingError) {
            const noResults = document.createElement("li");
            noResults.textContent = "Nenhum resultado encontrado :(";
            noResults.style.fontSize = "22px";
            noResults.id = "noResultsMessage";
            msgResultado.style.width = "100%";
            msgResultado.style.display = "flex";
            msgResultado.style.justifyContent = "center";
            msgResultado.style.marginTop = "8rem";
            msgResultado.appendChild(noResults);
        } else if (existingError) {
            msgResultado.style.display = resultados ? "none" : "block";
            if (resultados) {
                existingError.remove(); // Remove o elemento noResultsMessage
            }
        }
    }


    function removeErrorMessage() {
        const existingError = document.getElementById("results");
        if (existingError) {
            existingError.style.display = "none"; // Alterado aqui
        }
    }

    function contarPosts() {
        const lis = document.querySelectorAll("li.post-noticia[style='display: block;']");
        document.getElementById("resultado").textContent = lis.length;
    }

    setupSearch();
    
    contarPosts(); // Conta os posts ao carregar a página
});*/




