// Faz uma requisição para o PHP
fetch("dados.php")

    // Converte a resposta para JSON
    .then(response => response.json())

    // Recebe os jogos
    .then(jogos => {

        // Seleciona a área onde os cards serão adicionados
        const container = document.getElementById("cards-container");

        // Percorre todos os jogos
        jogos.forEach(jogo => {

            // Cria o HTML do card
            container.innerHTML += `

            <div class="card">

                <img src="${jogo.imagem}">

                <div class="conteudo">

                    <div class="topo-card">

                        <h2>${jogo.nome}</h2>

                        <span>${jogo.ano}</span>

                    </div>

                    <p>
                        ${jogo.descricao}
                    </p>

                    <div class="info">
                        <strong>Gênero:</strong>
                        ${jogo.genero}
                    </div>

                    <div class="info">
                        <strong>Empresa:</strong>
                        ${jogo.empresa}
                    </div>

                    <div class="info nota">
                        ⭐ ${jogo.nota}
                    </div>

                </div>

            </div>

            `;
        });

    })

    // Caso aconteça algum erro
    .catch(error => {

        console.log("Erro ao carregar os jogos");

    });