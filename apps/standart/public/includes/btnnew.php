<script>
    $('.navBarActions').on('click', '#<?php echo APP::$strModulePage; ?>btnNew', function (e) {
    e.preventDefault();
    $(this).tooltip('hide');


    $.ajax({
        url: '?rt=<?php echo APP::$csStrModulePage; ?>&act=<?php echo APP::$_strModulePage; ?>Form',
        type: 'GET',
        data: {},
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
        } else {
        $('#<?php echo APP::$strModulePage; ?>body_content').html(data.content);
        }
        },
        error: function (erro) {
        loadingMessage('hide', '#<?php echo APP::$strModulePage; ?>tab')
        }
    });

    });
</script>