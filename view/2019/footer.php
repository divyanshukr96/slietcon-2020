<?php
/**
 * Created by PhpStorm.
 * User: DIVYANSHU
 * Date: 07-11-2018
 * Time: 02:58
 */
?>


<footer class="shadow position-sticky">
    <div class="footer_panel text-center">
        Copyright &copy <?= date("Y") ?> <?= $TITLE ?>. Design & Developed by
        <a href="http://cs.sliet.ac.in/"><span class="d-none">Divaynshu</span> CSE Dept., SLIET</a>
        <div class="text-muted">Browser Compatibility: Google Chrome</div>
    </div>
</footer>

</div>
<!-- /#page-content-wrapper -->

</section>


<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
        integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
        crossorigin="anonymous"></script>
<script src="../assets/js/function.js"></script>
<script>
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
        $(".navbar.fixed-top").toggleClass("side-control")
    });
</script>
</body>
</html>
