<script>
var msg = "<?php echo Session::get('msg'); ?>"
$(window).on('load', function()
{
    iziToast.success({
        message: msg,
        position: 'topRight'
    });
});
</script><?php /**PATH /home3/homsrvse/public_html/homchf/resources/views/layouts/msg.blade.php ENDPATH**/ ?>