<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/login/login.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js"></script>
<script src="<?php echo base_url() ?>assets/jquery/jquery-3.6.0.min.js"></script>
<div class="wrapper bg-white">
    <div class="h2 text-center">Creativity</div>
    <div class="h4 text-muted text-center pt-2">Enter your login details</div>
    <form class="pt-3">
        <div class="form-group py-2">
            <div class="input-field"> <span class="far fa-user p-2"></span> <input type="text" placeholder="Username or Email Address" required class=""> </div>
        </div>
        <div class="form-group py-1 pb-2">
            <!-- <div class="input-field"> 
                <span class="fas fa-lock p-2"></span> 
                <input type="password" placeholder="Enter your Password" required class="input-password"> 
                <button class="btn bg-white text-muted" onclick="myFunction()"> 
                    <span class="far fa-eye-slash"></span> 
                </button> 
            </div> -->
            <div class="input-field">
                <span class="fas fa-lock p-2"></span> 
                <input id="password-field" type="password" name="password" placeholder="Enter your Password" required>
                <span toggle="#password-field" class="far fa-eye-slash toggle-password"></span>
            </div>
        </div>
        <div class="d-flex align-items-start">
            <div class="remember"> <label class="option text-muted"> Remember me <input type="radio" name="radio"> <span class="checkmark"></span> </label> </div>
            <div class="ml-auto"> <a href="#" id="forgot">Forgot Password?</a> </div>
        </div> <button class="btn btn-block text-center my-3">Log in</button>
        <div class="text-center pt-3 text-muted">Not a member? <a href="#">Sign up</a></div>
    </form>
</div>
<script>
    $(".toggle-password").click(function() {

    $(this).toggleClass("fa-eye fa-eye-slash");
        var input = $($(this).attr("toggle"));
        if (input.attr("type") == "password") {
        input.attr("type", "text");
        } else {
        input.attr("type", "password");
        }
    });
</script>