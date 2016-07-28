<script>
    /**
     *	Ação de apagar o registro
     */
    $('.navBarActions').on('click', '#<?php echo APP::$strModulePage; ?>btnDelete', function (e) {
        e.preventDefault();

        var data = dataTablesGetSelectesId(<?php echo APP::$strModulePage; ?>Table);
        if (data.length == 0) {
            alertModal('#<?php echo APP::$strModulePage; ?>alertModal', 'Alerta', 'Selecione um registro antes de clicar no botão apagar.!', ['<button type="button" class="btn btn-primary" data-dismiss="modal">Ok</button>']);
        } else {
            /**
             *	Pega os registros selecionados
             */
            var reg = dataTablesGetSelectesData(<?php echo APP::$strModulePage; ?>Table);
            var msg = '<strong>' + reg.length + '</strong> registro(s) selecionado(s).<br>Apagar registro(s) ? <br><br>';

            $.each(reg, function (index, value) {
                msg += ' - ' + value[1] + ' - ' + value[2].substr(0, 100) + '... <br>';
            });

            /**
             *	Atualiza o Body do Modal
             */
            $('#<?php echo APP::$strModulePage; ?>confirmFormDelete div.modal-body').html(msg);

            $('#<?php echo APP::$strModulePage; ?>confirmFormDelete').off('click')
                .modal({backdrop: 'static', keyboard: false})
                .on('click', '#<?php echo APP::$strModulePage; ?>sendFormDelete', function (e) {
                    $.ajax({
                        url: '?rt=<?php echo APP::$csStrModulePage; ?>&act=<?php echo APP::$_strModulePage; ?>FormDelete',
                        type: 'GET',
                        data: {'<?php echo APP::$oView->getData('primaryKey') ?>': data},
                        dataType: 'json',
                        cache: false,
                        beforeSend: function () {
                            loadingMessage('show', '#<?php echo APP::$strModulePage; ?>tab');
                        },
                        success: function (data) {
                            loadingMessage('hide', '#<?php echo APP::$strModulePage; ?>tab');

                            $('#<?php echo APP::$strModulePage; ?>validateError').html(data.content);
                            $('#<?php echo APP::$strModulePage; ?>responseAjax').html(data.script);
                        },
                        error: function (erro) {
                            loadingMessage('hide', '#<?php echo APP::$strModulePage; ?>tab');
                        }
                    });
                });
            } //fecha else

    });
</script>