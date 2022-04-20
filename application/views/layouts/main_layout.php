<?php
// if (!isset($this->session->userdata['site_lang'])) {
//     $this->session->set_userdata('site_lang', 'vietnam');
// }
// if (isset($this->session->userdata['username'])) {
//     $username = ($this->session->userdata['username']);
// } else {
//     header("location:" . base_url() . "login");
// }
// if (!isset($user)) {
//     $user = $this->permission_support->get_user();
// }
// //settings theme and language
// $settings = getSettings($this->session->userdata['employee_id']);
// $stData = json_decode(json_decode(json_encode($settings[0]['config_settings'])), true);

// $theme = isset($stData['theme']) ? $stData['theme'] : 'theme02';
// $lang = isset($stData['site_lang']) ? $stData['site_lang'] : 'vietnam';
// // $is_leader = $this->permission_support->check_leader($user['employee_id']) && $user['super_admin'];
// // $lang = $this->session->userdata['site_lang'];
// $certification = [];
// $certification = $this->notification_model->getCertification(date('Y-m-01', strtotime('-1 month', strtotime(date('Y-m-d')))), $user['employee_id'])[0];
// $msg_certification = [];
// $msg_certification = $this->notification_model->getMsgCertification()[0];
// $msg_list = [];
// $msg_list = $this->notification_model->getMsgList(date('Y-m-d'));
// $msg_list_auto = [];
// $msg_list_auto = $this->notification_model->getMsgListAuto(date('Y-m-d'));
// $listWorkingday = [];
// if ($this->notification_model->getBusiness($user['employee_id'])) {
//     $check_business = 1; //ở nhật
// } else {
//     $check_business = 3; //ở việt nam
// }
// $listWorkingday = $this->notification_model->getworkingDay(['ym' => date('Y-m'), 'check_business' => $check_business]);
// $_msg = getMsg($certification, $msg_certification, $msg_list, $msg_list_auto, $listWorkingday, $lang, $user['group_id'], $user['employee_id']);

$version = '3.5';
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <link rel="shortcut icon" href="<?php echo base_url() ?>assets/images/logo/logo.png">

    <!-- Jquery -->
    <script src="<?php echo base_url() ?>assets/jquery/jquery-3.6.0.min.js?v=<?php echo $version; ?>"></script>

    <!-- JqueryUI -->
    <link rel='stylesheet' href='<?php echo base_url(); ?>assets/jquery/jquery-ui/jquery-ui.css?v=<?php echo $version; ?>'>
    <script src="<?php echo base_url() ?>assets/jquery/jquery-ui/jquery-ui.js?v=<?php echo $version; ?>"></script>
    <script src="<?php echo base_url() ?>assets/jquery/jquery-ui/jquery-ui.min.js?v=<?php echo $version; ?>"></script>
    <script src="<?php echo base_url() ?>assets/jquery/jquery-ui/external/jquery/jquery.js?v=<?php echo $version; ?>"></script>

    <!-- Bootstrap -->
    <link rel='stylesheet' href='<?php echo base_url(); ?>assets/bootstrap/css/bootstrap.css?v=<?php echo $version; ?>'>
    <link rel='stylesheet' href='<?php echo base_url(); ?>assets/bootstrap/css/bootstrap.min.css?v=<?php echo $version; ?>'>
    <script src="<?php echo base_url() ?>assets/bootstrap/js/bootstrap.js?v=<?php echo $version; ?>"></script>
    <script src="<?php echo base_url() ?>assets/bootstrap/js/bootstrap.min.js?v=<?php echo $version; ?>"></script>

    <!-- Snackbar -->
    <link rel='stylesheet' href='<?php echo base_url(); ?>assets/css/snackbar.css?v=<?php echo $version; ?>'>
    <script src="<?php echo base_url() ?>assets/js/snackbar.js?v=<?php echo $version; ?>"></script>

    <!-- js detail page -->
    <link rel='stylesheet' href='<?php echo base_url(); ?>assets/css/style.css?v=<?php echo $version; ?>'>
    <link rel='stylesheet' href='<?php echo base_url(); ?>assets/css/menu/menu.css?v=<?php echo $version; ?>'>
    <link rel='stylesheet' href='<?php echo base_url(); ?>assets/css/main-layout.css?v=<?php echo $version; ?>'>
    <link rel='stylesheet' href='<?php echo base_url(); ?>assets/css/google-icon.css?v=<?php echo $version; ?>'>
    <script src="<?php echo base_url() ?>assets/js/employee.js"></script>
    
    <script>
      var base_url = "<?php echo base_url(); ?>";
    </script>
</head>

<body class="bg">

    <!-- MENU -->
    <?php $this->load->view('layouts/menu'); ?>

    <!-- CONTENT -->
    <div id="main">
        <!-- HEADER -->
        <i id="btn-main-menu" class="material-icons" onclick="menuToggle();">menu</i>
        <?php
            $this->load->view($content);
        ?>
    </div>

    <!-- to show message, notification -->
    <div id="snackbar"></div>

    <script>
    </script>
</body>

</html>