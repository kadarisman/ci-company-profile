<!-- Footer -->
<footer class="bg6 text-left text-lg-start text-white">
    <!-- Grid container -->
    <div class="container p-4">
        <!--Grid row-->
        <div class="row">
            <!--Grid column-->
            <div class="col-lg-6 col-sm-6 mb-4 mb-md-0">
                <h5 class="alike">Tentang</h5>

                <ul>
                    <li>
                        <a href="<?= base_url('blog/Blog/Auriga') ?>" class="text-white">Tentang Auriga</a>
                    </li>
                    <li>
                        <a href="<?= base_url('blog/Blog/Auriga') ?>" class="text-white">Hukum lingkungan</a>
                    </li>
                    <li>
                        <a href="<?= base_url('blog/Blog/Auriga') ?>" class="text-white">Elearning</a>
                    </li>
                </ul>
            </div>
            <!--Grid column-->

            <!--Grid column-->
            <div class="col-lg-6 col-sm-6 mb-md-0">
                <h5 class="alike">Forum</h5>

                <ul>
                    <li>
                        <a href="<?= base_url('blog/Blog/Auriga') ?>" class="text-white">Japri tenaga ahli</a>
                    </li>
                    <li>
                        <a href="<?= base_url('blog/Blog/Auriga') ?>" class="text-white">Diskusi di forum</a>
                    </li>
                </ul>
            </div>
            <!--Grid column-->

        </div>
        <!--Grid row-->
    </div>
    <!-- Grid container -->

    <!-- Copyright -->
    <div class="text-center p-3 border border-success" style="background-color: rgba(0, 0, 0, 0.2)">
        © 2021 -
        <script>
        document.write(new Date().getFullYear())
        </script> Copyright :
        <a class="text-white" href="<?= base_url('blog/Blog') ?>"> AGENT</a>
    </div>
    <!-- Copyright -->
</footer> <!-- Footer -->
<!-- Optional JavaScript; choose one of the two! -->

<!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
    integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
</script>

<script src="<?= base_url('assets/') ?>js/bootstrap.bundle.min.js"></script>
<script src="<?= base_url('assets/') ?>js/jquery.min.js"></script>

<!-- Option 2: Separate Popper and Bootstrap JS -->
<!--
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
    -->
</body>

</html>
<script>
$(document).ready(function() {
    window.setTimeout(function() {
        $("#msg").fadeTo(200, 0).slideUp(200, function() {
            $(this).remove();
        });
    }, 3000);
})
</script>