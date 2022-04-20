<?php
$settings = getSettings($this->session->userdata['employee_id']);
// print_r($settings);
$stData = json_decode(json_decode(json_encode($settings[0]['config_settings'])), true);
$theme = !isset($stData['theme']) ? 'theme02' : $stData['theme'];
$lang = isset($stData['site_lang']) ? $stData['site_lang'] : 'vietnam';
?>
<!-- <div style=""> -->
<nav class="" id="top-header">
    <div class="container-default" id="header-main">
        <!-- <ul class="nav navbar-nav">
                <li>
                    <a class="" href="<?php echo base_url(); ?>home">
                        <img class="logo-default" src="<?php echo base_url(); ?>assets/images/logo/logo_tredia.png" alt="not found!">
                        <img src="<?php echo base_url(); ?>assets/images/logo/logo_cbsystemvn.png" alt="not found!">
                    </a>
                </li>
                <li style="padding-left:500px;color:white;"><h3>Title</h3></li>
            </ul> -->
        <div class="nav-profile">
            <img data-src="<?=$this->session->userdata['user_file']?>" class="lazyload" alt="Avatar"/>
            <span>
                <?php

                echo $this->session->userdata['employee_name'];
                ?>
            </span>


        </div>
        <div class="change-theme">
            <div class="btn-change-theme" id="myBtn">

                <span>Theme</span> <i class="fa fa-tint"></i>
            </div>

            <!-- The Modal -->
            <?php $this->load->view('layouts/theme_modal'); ?>
        </div>
        <div class="change-language">

            <div class="select-language" onclick="changeLangugeToggle();">
                <img src="<?php echo base_url() ?>assets/images/flag/<?php echo $lang; ?>.svg">

            </div>
            <div id="popuper" class="popuper">
                <ul>
                    <li>
                        <a href="<?php echo base_url(); ?>language/switchLang?lang=vietnam&id=<?php echo $this->session->userdata['employee_id'] ?>">Tiếng việt</a>
                    </li>
                    <li>
                        <a href="<?php echo base_url(); ?>language/switchLang?lang=english&id=<?php echo $this->session->userdata['employee_id'] ?>">English</a>
                    </li>
                    <li>
                        <a href="<?php echo base_url(); ?>language/switchLang?lang=japanese&id=<?php echo $this->session->userdata['employee_id'] ?>">日本語</a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="nav-logout">

            <a href="<?php echo base_url(); ?>login/logOut">
                <div class="logout-btn" id="profile-default">
                    <i class="fa fa-sign-out"></i> <?php echo $this->lang->line('log_out'); ?>
                </div>
            </a>
        </div>
    </div>
</nav>


<script>
    $(document).ready(function() {
        var currentTheme = <?php echo $theme; ?>.id;
        //start load theme
        var io = currentTheme;
        var modal = document.getElementById('myModal');
        var btn = document.getElementById("myBtn");
        var span = document.getElementsByClassName("close")[0];
        //check localsession
        if (currentTheme != '') {
            //if localsession exists active value
            $('#' + currentTheme).addClass('active');
        }
        btn.onclick = function() {
            modal.style.display = "block";
        }
        span.onclick = function() {
            modal.style.display = "none";
        }
        window.onclick = function(event) {
            if (event.target == modal) {
                closeModel();
            }
        }
        $('.theme-item').click(function() {
            $('.theme-item.active').removeClass("active");
            $(this).addClass("active");
            //load themee
            $('link[href*="/' + io + '/"]').each(function() {
                this.href = this.href.replace(io, $('.theme-item.active').attr('id'));
            });

            io = this.id;
        });
        // Click button save
        $('#btn_theme').click(function(event) {
            event.preventDefault();
            updateTheme($('.theme-item.active').attr('id'));

        });

        function updateTheme(themeId) {
            // location.reload();
            modal.style.display = "none";
            // save theme to database
            var formData = new FormData();
            var settingsData = <?php echo json_encode($stData); ?> ?? {};

            settingsData.theme = themeId;
            formData.append('<?php echo $this->security->get_csrf_token_name(); ?>', '<?php echo $this->security->get_csrf_hash(); ?>');
            formData.append('id', '<?php echo $this->session->userdata['employee_id'] ?>');
            formData.append('data', JSON.stringify(settingsData));
            $.ajax({
                url: "<?php echo base_url() ?>setting/savesettings",
                method: "post",
                dataType: 'text',
                data: formData,
                contentType: false,
                processData: false,
                success: function(response) {
                    console.log(response);
                    currentTheme = io;
                },
                error: function(jqXHR, textStatus, errorThrown) {
                    console.log(errorThrown);
                }
            });
        }
        $('#close').click(function(event) {
            closeModel();
        });

        function closeModel() {
            modal.style.display = "none";

            //remove images
            $('.theme-item.active').removeClass("active");
            $('#' + currentTheme).addClass('active');
            // return default
            if (io != currentTheme) {
                $('link[href*="/' + io + '/"]').each(function() {
                    this.href = this.href.replace(io, currentTheme);
                });
                io = currentTheme;
            }
        }

    });
</script>