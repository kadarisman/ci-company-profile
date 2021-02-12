<link rel="stylesheet" href="<?= base_url('assets/') ?>css/loginStyle.css">
<div class="wrapper fadeInDown">
    <div id="formContent">
        <!-- Tabs Titles -->

        <!-- Icon -->
        <div class="fadeIn first">
            <img src="<?= base_url('assets/') ?>img/logo0.png" id="icon" alt="User Icon" class="mb-2" />
        </div>

        <!-- Login Form -->
        <form>
            <input type="text" id="login" class="fadeIn second" name="username" placeholder="username">
            <input type="password" id="password" class="fadeIn third" name="passord" placeholder="password"
                id="password">
            <br>
            <input type="checkbox" class="fadeIn three" id="chekPassword">
            <label class="form-check-label" for="exampleCheck1">Show Password</label>
            <br>
            <input type="submit" class="fadeIn fourth" value="Log In">
            <br>
            <a href="<?= base_url('auth/Auth/Registrasi') ?>">Daftar </a>|
            <a href="<?= base_url('blog/Blog') ?>"> Beranda</a>
        </form>


        <!-- Remind Passowrd -->
        <!-- <div id="formFooter">
            <a class="underlineHover" href="#">Forgot Password?</a>
        </div> -->

    </div>
</div>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
    integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
</script>

<script src="<?= base_url('assets/') ?>js/bootstrap.bundle.min.js"></script>
<script>
$(document).ready(function() {
    $('#chekPassword').click(function() {
        if ($(this).is(':checked')) {
            $('#password').attr('type', 'text');
        } else {
            $('#password').attr('type', 'password');
        }
    })
})
</script>