<script>
var msg = "<?php echo Session::get('msg'); ?>"
$(window).on('load', function()
{
    iziToast.success({
        message: msg,
        position: 'topRight'
    });
});
</script><?php /**PATH /customers/f/2/a/homchf.one/httpd.www/resources/views/layouts/msg.blade.php ENDPATH**/ ?>