<script>

    /*Atualizar Tabela*/
    $('.navBarActions').on('click', '#<?php echo APP::$strModulePage; ?>btnTableReload', function (e) {
        e.preventDefault();
        dataTablesReload(<?php echo APP::$strModulePage; ?>Table);
    });

    /**
     *	Filtro da Tabela
     *	Ao sair do campo faz a busca via AJAX
     */
    $('.<?php echo APP::$strModulePage; ?>datatablesColumnFilter').on('blur', function (e) {
        var data = $(this);
        var value = data.val();
        var column = data.attr('data-column');

        /*
         *	Fun��o para buscar por coluna
         *	params (table, valor, coluna)
         */
        dataTablesFilterByColumn(<?php echo APP::$strModulePage; ?>Table, value, data.attr('data-column'));
    });

    /**
     *	Bot�o para selecionar a linha
     */
    $('#<?php echo APP::$strModulePage; ?>datatables tbody').on('click', 'tr', function () {
        dataTablesSelectRow(this);
    });

    /**
     *	Controlador do Modal confirmFormDelete
     *	Ao fechar a janela, limpa o BODY
     */
    $('#<?php echo APP::$strModulePage; ?>confirmFormDelete').on('hidden.bs.modal', function (e) {
        $('#<?php echo APP::$strModulePage; ?>confirmFormDelete div.modal-body').html('');
    });
</script>