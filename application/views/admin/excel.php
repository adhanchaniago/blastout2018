<div class="col-md-12 col-sm-12 col-xs-12">
    <div class="x_panel">
        <div class="x_title">
            <h2>IMPORT DATA USER</h2>
            <div class="clearfix"></div>
        </div>
        <div class="x_content">
            <form action="
                <?php echo base_url();?>Skyelazt/uploadUser/" method="post" enctype="multipart/form-data">
                <input type="file" name="file" required="true" />
                <input type="submit" value="Upload file"/>
                <?php echo form_hidden($this->security->get_csrf_token_name(), $this->security->get_csrf_hash()); ?>
            </form>
        </div>
    </div>
    <div class="x_panel">
        <div class="x_title">
            <h2>IMPORT DATA KARTU</h2>
            <div class="clearfix"></div>
        </div>
        <div class="x_content">
            <form action="
                <?php echo base_url();?>Skyelazt/uploadKartu/" method="post" enctype="multipart/form-data">
                <input type="file" name="file" required="true" />
                <input type="submit" value="Upload file"/>
                <?php echo form_hidden($this->security->get_csrf_token_name(), $this->security->get_csrf_hash()); ?>
            </form>
        </div>
    </div>
    <div class="x_panel">
        <div class="x_title">
            <h2>IMPORT DATA HASIL</h2>
            <div class="clearfix"></div>
        </div>
        <div class="x_content">
            <form action="
                <?php echo base_url();?>Skyelazt/uploadHasil/" method="post" enctype="multipart/form-data">
                <input type="file" name="file" required="true" />
                <input type="submit" value="Upload file"/>
                <?php echo form_hidden($this->security->get_csrf_token_name(), $this->security->get_csrf_hash()); ?>
            </form>
        </div>
    </div>
    <div class="x_panel">
        <div class="x_title">
            <h2>EXPORT DAFTAR PESERTA</h2>
            <div class="clearfix"></div>
        </div>
        <div class="x_content">
            <a href="
                <?php echo base_url('C_excel/export_excel') ?>">Export ke Excel
            </a>
        </div>
    </div>
</div>
<script type="text/javascript">
    function cek1(val) {
        
    }
</script>
