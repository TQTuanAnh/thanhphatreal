<div id="myModal" class="modal" method="post">
    <div class="modal-content theme-modal">
        <form name="frmLogin" method="post" action="<?php echo base_url() ?>Home">
            <span id="close" class="close">&times;</span>
            <h2 class="theme_name">Chủ đề</h2>
            <div class="theme_group">
                <div class="formgroup">
                    <div class="list-theme">
                        <div class="theme-item" id="theme01"><img src="<?php echo base_url() ?>assets/images/background/background02s.jpg">
                            <span class="theme-des">
                                Cloud city
                            </span>
                        </div>
                        <div class="theme-item" id="theme02"><img src="<?php echo base_url() ?>assets/images/background/background02.jpg">
                            <span class="theme-des">
                                Ice river
                            </span>
                        </div>
                        <div class="theme-item" id="theme03"><img src="<?php echo base_url() ?>assets/images/background/background04.jpg">
                            <span class="theme-des">
                                White rose
                            </span>
                        </div>
                        <div class="theme-item" id="theme04"><img src="<?php echo base_url() ?>assets/images/background/background4.jpg">
                            <span class="theme-des">
                                Summer grass
                            </span>
                        </div>
                        <div class="theme-item" id="theme05"><img src="<?php echo base_url() ?>assets/images/background/background5.jpg">
                            <span class="theme-des">
                                Purple sunset
                            </span>
                        </div>
                        <div class="theme-item" id="theme06"><img src="<?php echo base_url() ?>assets/images/background/background6.jpg">
                            <span class="theme-des">
                                Blue sea
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer button_footer">
                <button id="btn_theme" type="button" class="btn btn-save"><?php echo $this->lang->line('btn_save'); ?></button>
            </div>
        </form>
    </div>
</div>