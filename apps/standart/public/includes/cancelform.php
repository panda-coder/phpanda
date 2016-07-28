<script>
    /**
     *	Ação de cancelar as alterações do Formulário
     */
    $('#<?php echo APP::$strModulePage; ?>btnCancel').click(function(e){
        e.preventDefault();

        $.ajax({
            url: '?rt=<?php echo APP::$_strModulePage ?>&act=<?php echo APP::$_strModulePage; ?>FormCancel',
            type: 'GET',
            data: '',
            dataType: 'json',
            cache: false,
            beforeSend: function(){
                loadingMessage('show','#<?php echo APP::$strModulePage; ?>tab');
            },
            success: function(data){
                loadingMessage('hide','#<?php echo APP::$strModulePage; ?>tab');

                $('#<?php echo APP::$strModulePage; ?>validateError').html(data.content);
                $('#<?php echo APP::$strModulePage; ?>responseAjax').html(data.script);
            },
            error: function(erro){
                loadingMessage('hide','#<?php echo APP::$strModulePage; ?>tab');
            }
        });
    });
</script>