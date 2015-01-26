<script type="text/javascript">
    function doAjax() {
        $.ajax({
            url: "some-json-data.js",
            context: document.body,
            success: function(responseText) {
                var json = eval("(" + responseText + ")");
            }
        });
    };
</script>
