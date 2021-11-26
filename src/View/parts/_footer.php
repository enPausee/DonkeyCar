<?php

use App\Service\Tools;
?>
<footer class="fixed-bottom navbar navbar-expand-lg navbar-dark ">

    <ul class="navbar me-auto mb-2 mb-lg-0 container">
        <li class="nav-item <?=Tools::setActive("/");?>">
            <a href="/">Home</a>
        </li>
        <li class="nav-item <?=Tools::setActive("footer/faq");?>">
            <a href="/footer/faq">Consultez la F.A.Q</a>
        </li>
        <li class="nav-item <?=Tools::setActive("footer/cgv");?>">
            <a href="/footer/cgv">Consultez les C.G.V</a>
        </li>
        <li class="nav-item <?=Tools::setActive("footer/contact");?>">
            <a href="/footer/contact">Nous contactez</a>
        </li>
    </ul>

</footer>