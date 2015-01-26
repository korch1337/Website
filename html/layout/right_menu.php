<script type="text/javascript">
    function doAjax() {
        $.ajax({
    type: "GET",
    url: "streamtemple.php",
    data: {
        me: me
    },
    success: function (data) {
        alert(data);

    }
        });
    };
</script>
