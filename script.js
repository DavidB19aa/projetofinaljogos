/* 
   ESTUDANTE: DAVID BARBOSA DA SILVA
   MATRÍCULA: 202304324468
*/

document.addEventListener('DOMContentLoaded', () => { 
    const projetoForm = document.querySelector('.projeto-form');
    const mensagemModal = document.getElementById('mensagemModal');
    const mensagemTexto = document.getElementById('mensagemTexto');
    const closeModal = document.getElementById('closeModal');

    function exibirMensagemModal(texto) {
        mensagemTexto.textContent = texto;
        mensagemModal.style.display = 'block';
    }

    closeModal.addEventListener('click', () => {
        mensagemModal.style.display = 'none';
    });

    window.addEventListener('click', (event) => {
        if (event.target === mensagemModal) {
            mensagemModal.style.display = 'none';
        }
    });

    projetoForm.addEventListener('submit', (e) => {
        e.preventDefault(); 

        const campos = ['nome_usuario', 'nome_projeto', 'telefone', 'email', 'descricao'];

        for (const campo of campos) {
            const campoElemento = document.getElementById(campo);
            if (!campoElemento.value.trim()) {
                campoElemento.focus();
                exibirMensagemModal("Por favor, preencha todos os campos.");
                return;
            }
        }

        exibirMensagemModal("Projeto enviado com sucesso!");
        projetoForm.submit();
    });
});
