<div id="navbar">
            <a class="active" href="<?php echo site_url('welcome'); ?>">Acceuill</a>
            <a href="<?php echo site_url('produit'); ?>" >Produits</a>
            <a href="<?php echo site_url('personnel'); ?>" >Personnel</a>
            <a href="<?php echo site_url('auth'); ?>" >Users</a>
            <a class="droite" href="<?php echo site_url('auth/logout'); ?>">Logout</a>
        </div>
        <script>
        window.onscroll = function() {myFunction()};

        var navbar = document.getElementById("navbar");
        var sticky = navbar.offsetTop;

        function myFunction() {
        if (window.pageYOffset >= sticky) {
            navbar.classList.add("sticky")
        } else {
            navbar.classList.remove("sticky");
        }
        }
        </script>