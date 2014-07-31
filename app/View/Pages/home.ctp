
<script>
    var site_url = '<?php echo $this->base; ?>';
    $(document).ready(function() {
        $.ajax({
            url: site_url + '/states.json',
            dataType: 'json',
            success: function(data) {
                var html = [];
                html += "<ul>";
                $.each(data.states, function(i, val) {
                    html += "<li>" + val.State.name + "</li>";
                });
                html += "</ul>";
                $('#outputRest').append(html);
            }
        });
        $.ajax({
            url: site_url + '/states/data.json',
            dataType: 'json',
            success: function(data) {
                var html = [];
                html += "<ul>";
                $.each(data, function(i, val) {
                    html += "<li>" + val.nama_negeri + "</li>";
                });
                html += "</ul>";
                $('#outputCust').append(html);                
            }
        });
        $.ajax({
            url: site_url + '/states/data.json',
            dataType: 'json',
            success: function(data) {
                var appenddata = [];
                $.each(data, function(i, val) {
                    appenddata += "<option value ='" + val.id_negeri + "'>" + val.nama_negeri + "</option>";
                });
                $('#negeri').append(appenddata);
            }

        });
    });

</script>
<div id="outputRest"><h1> REST </h1>  </div>  
<div id="outputCust"><h1> Custom JSON </h1></div>
<div id="outputDrop"><h1> Custom JSON to Dropdown </h1>    
    <?php echo $this->Form->input('negeri', array('type' => 'select', 'empty' => 'Pilih Negeri', 'label' => false)) ?>
</div>