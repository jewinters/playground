<? $this->load->view('layout/header'); ?>
<div id="spells">
    <meta charset="utf-8" />
        <title>Get Reverse IP</title>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
        <form>
            <select class="col-6" id="classes">
                <? foreach($classes as $class) { ?>
                <option value="<?= $class->name; ?>"><?= $class->name; ?></option>
                <? } ?>
            </select>
        </form>
    <div id="spell_list"></div>
</div>
<script>
    $(document).ready(function() {
        $('#classes').change(function(){
            $.ajax({
                type: "GET",
                url: "get_spell_list",
                data: 'class=' + $('#classes').val(),
                success: function(msg){
                    $('#spell_list').html(msg);
                }
            });
        });
    });
</script>
<? $this->load->view('layout/footer'); ?>
