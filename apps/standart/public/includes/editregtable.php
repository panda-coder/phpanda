<script>
    /**
     *	Seleciona o registro e abre para Edição
     *	Necessario 2 cliques
     */
    $('#<?php echo APP::$strModulePage; ?>datatables tbody').on('dblclick', 'tr', function () {
        /**
         *	Pega o valor do registro
         */
        var data = dataTablesGetData(<?php echo APP::$strModulePage; ?>Table, this);
        if (data) {
            $.ajax({
                url: '?rt=<?php echo APP::$csStrModulePage; ?>&act=<?php echo APP::$_strModulePage; ?>Form',
                type: 'GET',
                data: {'<?php echo APP::$oView->getData('primaryKey') ?>': data},
                cache: false,
                dataType: 'json',
                beforeSend: function () {
                    loadingMessage('show', '#<?php echo APP::$strModulePage; ?>tab');
                },
                success: function (data) {
                    loadingMessage('hide', '#<?php echo APP::$strModulePage; ?>tab');

                    if (data.status == 0) {
                        $('#<?php echo APP::$strModulePage; ?>validateError').html(data.content);
                        $('#<?php echo APP::$strModulePage; ?>responseAjax').html(data.script);
                    } else{
                        $('#<?php echo APP::$strModulePage; ?>body_content').html(data.content);
                    }
                },
                error: function (erro) {
                    console.log("ajax error: ");
                    console.log(erro);
                    loadingMessage('hide', '#<?php echo APP::$strModulePage; ?>tab');
                }
            });
        }

    });
</script>