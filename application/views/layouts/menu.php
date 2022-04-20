<!-- MENU -->
<?php
// if (isset($this->session->userdata['username'])) {
//     $username = ($this->session->userdata['username']);
//     $user = $this->permission_support->get_user();
// }
// $is_admin = $this->permission_support->is_admin() && $user['super_admin'];
?>
<link rel='stylesheet' href='<?php echo base_url(); ?>assets/css/menu/menu.css'>
<div id="menu">
    <div class="nav-side-menu">
        <div class="brand">
            <a class="" href="<?php echo base_url(); ?>home">
                <img src="<?php echo base_url(); ?>assets/images/logo/logo_01.png" alt="not found!">
            </a>
        </div>
        <i class="fa fa-bars fa-2x toggle-btn" data-toggle="collapse" data-target="#menu-content"></i>
        <div class="menu-list">
            <ul id="menu-content" class="menu-content collapse in">
                <li>
                    <a href="<?php echo base_url() ?>home">
                        <i class="menu-icon material-icons">home</i><?php echo $this->lang->line('home');?>
                    </a>
                </li>
                <li>
                    <a href="<?php echo base_url() ?>introduce">
                        <i class="menu-icon material-icons">dashboard</i><?php echo $this->lang->line('introduce');?>
                    </a>
                </li>
                <li>
                    <a href="<?php echo base_url() ?>project">
                        <i class="menu-icon material-icons">view_list</i><?php echo $this->lang->line('project');?>
                    </a>
                </li>
                <li>
                    <a href="<?php echo base_url() ?>house-sale">
                        <i class="menu-icon material-icons">account_balance</i><?php echo $this->lang->line('house_for_sale');?>
                    </a>
                </li>
                <li>
                    <a href="<?php echo base_url() ?>land-sale">
                        <i class="menu-icon material-icons">view_quilt</i><?php echo $this->lang->line('land_sale');?>
                    </a>
                </li>
                <li>
                    <a href="<?php echo base_url() ?>house-rent">
                        <i class="menu-icon material-icons">store</i><?php echo $this->lang->line('house_for_rent');?>
                    </a>
                </li>
                <li>
                    <a href="<?php echo base_url() ?>contact">
                        <i class="menu-icon material-icons">perm_contact_calendar</i><?php echo $this->lang->line('contact');?>
                    </a>
                </li>
                <li>
                    <div data-toggle="collapse" data-target="#hr">
                        <a href="#">
                            <i class="menu-icon material-icons">settings</i>
                            <?php echo $this->lang->line('manage'); ?>
                            <span data-toggle="collapse" data-target="#hr" class="glyphicon glyphicon-menu-down arrows"></span>
                        </a>
                    </div>
                    <ul class="sub-menu collapse" id="hr">
                        <li>
                            <span class="glyphicon glyphicon-menu-right child-glyphicon"></span>
                            <a href="<?php echo base_url(); ?>employee"><?php echo $this->lang->line('employee'); ?></a>
                        </li>
                        <li>
                            <span class="glyphicon glyphicon-menu-right child-glyphicon"></span>
                            <a href="<?php echo base_url(); ?>product"><?php echo $this->lang->line('product'); ?></a>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
        <div class="nav-side-bottom">
            <div>
                <h6>©2022 Tuan Anh SYSTEM<br>VIETNAM Co., LTD.</h6>
            </div>
        </div>
    </div>
</div>

<script src="<?php echo base_url() ?>assets/js/menuToggle.js">
</script>

<script>
    var curent_url = window.location.href;
    $(`#menu li a[href='${curent_url}']`).closest('ul').addClass('collapse in');
    $(`#menu li a[href='${curent_url}']`).closest('li').addClass('menu_active');
</script>