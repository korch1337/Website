<script type="text/javascript">
    function doAjax() {
    $.ajax({
    type: "GET",
    url: "176.9.35.68/streamtemple.php",
    data: {
        me: me
    },
    success: function (data) {
        alert(data);

    }
});
</script>
