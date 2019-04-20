function abrirChat() {
    var cid = $("#chat_id").val();
    var cnm = $("#chat_nome").val();

    chat.setGroup(cid, cnm);

    $('.modal_bg').hide();
}

function fecharModal() {
    $('.modal_bg').hide();
}

$(function() {
    $(".add_tab").on("click", function() {
        var html = "<h4>Nova janela de Bate Papo</h4>";
        html += '<input type = "text" id = "chat_id" placeholder = "Digite o ID do CHAT:" /><br />';
        html += '<input type = "text" id = "chat_nome" placeholder = "Digite o nome do CHAT:" /><br /><br />';
        html += '<button onclick = "abrirChat()">Abrir</button><br /> <hr/>';
        html += '<button onclick = "fecharModal()">Fechar Janela</button>';
        
        $('.modal_area').html(html);
        $('.modal_bg').show();
        
        /**
            var chatId = window.prompt("Digite o ID do chat: ");
            var chatName = window.prompt("Qual sala que você irá entrar: ");
                chat.setGroup(chatId, chatName);
        */
    });
});