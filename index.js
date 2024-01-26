// Função para adicionar a máscara de telefone
function formatarTelefone() {
    const inputTelefone = document.getElementById('telefone');
    let valor = inputTelefone.value.replace(/\D/g, ''); // Remove todos os caracteres não numéricos

    if (valor.length > 0) {
        // Adiciona a máscara
        valor = '(' + valor.substring(0, 2) + ') ' + valor.substring(2, 7) + '-' + valor.substring(7, 11);
    }

    inputTelefone.value = valor;
}

// Adiciona um listener para o evento de input
document.getElementById('telefone').addEventListener('input', formatarTelefone);

// Função para preencher automaticamente os campos Nome e Telefone com parâmetros da URL
function preencherCamposDaURL() {
    const urlParams = new URLSearchParams(window.location.search);
    const nomeParam = urlParams.get('nome');
    const telefoneParam = urlParams.get('telefone');

    if (nomeParam && telefoneParam) {
        document.getElementById('nome').value = nomeParam;
        document.getElementById('telefone').value = telefoneParam;
    }

    formatarTelefone();
}

// Chama a função ao carregar a página
window.onload = preencherCamposDaURL;