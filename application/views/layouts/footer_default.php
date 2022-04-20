
<div class="footer" style="z-index: 5;">
    <h6 style="color:white;padding-top:3px;font-weight:normal;">CUBE SYSTEM VIETNAM CO.,LTD. © 2017</h6>
</div>

<script>
    $('.flexdatalist').flexdatalist({
        minLength: 0,
        searchContain: true,
        valueProperty: 'value',
        //textProperty: 'label',
        searchIn: ['value', 'label'],
        visibleProperties: ['value', 'label'],
        redoSearchOnFocus: false,
        normalizeString: function (string) {
            return latinize(string);
        }
    });
</script>