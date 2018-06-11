Custom = {
    init: function() {
        // clean modal on hidden
        $('body').on('hidden.bs.modal', '.modal', function () {
            $(this).removeData('bs.modal');
        });

        Custom.submitSSH();
        Custom.askDelete();
        Custom.sendFormCrypt();
        Custom.sendFormDecrypt();
    },

    submitSSH: function() {
        $('body').on('submit', '#form-ssh', function(e) {
            e.preventDefault();
           
            $.post($(this).attr('action'), $(this).serialize(), function(ret) {
                $('#result-ssh').html('<pre>' + ret + '</pre>');
                $('#Ssh_command').focus();
            });
        });
    },

    askDelete: function() {
        $('body').on('click', '.ask-delete', function(e) {
            e.preventDefault();
            
            var ask = 'Deseja exlcuir o dispositivo ' + $(this).attr('title') + ' ?';
            var href = $(this).attr('href');
            var parent = $(this).closest('tr');

            swal({
                title: 'Tem certeza?',
                text: ask,
                icon: "warning",
                buttons: true,
                dangerMode: true,

            })
            .then((willDelete) => {
                if (willDelete) {
                    $.ajax({
                        url: href,
                        type: 'POST',
                        dataType: 'json',
                        success: function(data) {
                            if(data.success == true) {
                                parent.remove();
                                swal("Dispositivo removido com sucesso.", {icon: "success"});                                
                            }
                        }
                    });
                }
            });
        })
    },

    sendFormCrypt: function() {
        $('body').on('submit', '#form-crypt', function(e) {
            e.preventDefault();

            $.post($(this).attr('action'), $(this).serialize(), function (json) {
                var html = '<div class="col-sm-12 row">';
                html+= '<div>';
                html+= '<p>Criptografia AES256</p>';
                html+= '<pre>'+ json.crypt_AES256 +'</pre>';
                html+= '<div>';
                html+= '<p>Criptografia de César</p>';
                html+= '<pre>'+ json.crypt_Cesar +'</pre>';
                html+= '<div>';
                html+= '</div>';
                $('#Crypt_result').html(html);
            }, 'json');
        });
    },

    sendFormDecrypt: function() {
        $('body').on('submit', '#form-decrypt', function (e) {
            e.preventDefault();

            $.post($(this).attr('action'), $(this).serialize(), function (json) {
                var html = '<div class="col-sm-12 row">';
                html += '<div>'
                html += '<p>Texto descriptografado com: ' + json.type + '</p>';
                html += '<pre> ' + json.decrypt + ' </pre>';
                html += '</div>';
                $('#Decrypt_result').html(html);
            }, 'json');
        });
    }
}

$('document').ready(function() {
    Custom.init();
});