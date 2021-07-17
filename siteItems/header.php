<header>
    <div class="toCenter">
        <div class="container">
           <img  src="../icons/menu_burger.png" alt="Menu">
            <a href="../index.php"><div class="logo"></div></a>
            <div>
                <svg onclick ="openCart();" xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-cart4" viewBox="0 0 16 16">
                    <path d="M0 2.5A.5.5 0 0 1 .5 2H2a.5.5 0 0 1 .485.379L2.89 4H14.5a.5.5 0 0 1 .485.621l-1.5 6A.5.5 0 0 1 13 11H4a.5.5 0 0 1-.485-.379L1.61 3H.5a.5.5 0 0 1-.5-.5zM3.14 5l.5 2H5V5H3.14zM6 5v2h2V5H6zm3 0v2h2V5H9zm3 0v2h1.36l.5-2H12zm1.11 3H12v2h.61l.5-2zM11 8H9v2h2V8zM8 8H6v2h2V8zM5 8H3.89l.5 2H5V8zm0 5a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0zm9-1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0z"/>
                </svg>
                <span id = "cartResult">0</span>
                <button onclick = "clearCart()">Clear Cart</button>
                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
                    <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
                    <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>
                </svg>
            </div>
            <div>
                <form  method = "get" class = "search">
                <input id="autoComplete" type="search" dir="ltr" spellcheck=false autocorrect="off" autocomplete="off" autocapitalize="off"  name = "Search" maxlength="2048" tabindex="1">
                    <input type="submit" value="Search">
                </form>
                <button onclick = "window.location.href = 'index.php'" class = "search__cancel-button font-bold" style = "display:<?php echo $cancelButton; ?>">Clear All</button>
            </div>
        </div>
    </div>
    <div class="toCenter">
        <nav class = "toCenter menu__text container">
            <ul>
                <li onclick = "window.location.href ='../index.php'">Каталог</li>
                <li onclick = "window.location.href ='../aboutUs.php'">Про нас</li>
                <li onclick = "window.location.href ='1.php'">Каталог</li>
                <li onclick = "window.location.href ='1.php'">Каталог</li>
            </ul>
        </nav>
    </div>
</header>
<script src="JavaScript/cart.js"></script>
