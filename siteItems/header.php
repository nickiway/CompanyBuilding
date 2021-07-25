<header>
    <link rel="stylesheet" href="../Bootstrap/css/fontawesome.min.css">
    <div class="toCenter">
        <div class="container">
            <a href="../index.php"><div class="logo"></div></a>
        </div>
    </div>
    <div class="toCenter">
        <nav class = "menu">
            <div id="menu_btn">
                <i class="fas fa-2x fa-bars" style="color: #fff"></i><br>
                <span class="text">Меню</span>
            </div>
<!--            <div>-->
<!--                <form  method = "get" class = "search">-->
<!--                    <input id="autoComplete" type="search" placeholder="Поиск..." dir="ltr" spellcheck=false autocorrect="off" autocomplete="off" autocapitalize="off"  name = "Search" maxlength="2048" tabindex="1">-->
<!--                    <input type="submit" value="Search">-->
<!--                </form>-->
<!--                <button onclick = "window.location.href = 'index.php'" class = "search__cancel-button font-bold" style = "display:--><?php //echo $cancelButton; ?><!--">Clear All</button>-->
<!--            </div>-->
            <div class="searcher">
                <input type="text" autocomplete="off" placeholder="Поиск..." id="search">
                <div class="magnifier"><i class="fas fa-MyX fa-reverse fa-search" style="color:#fff"></i></div>
            </div>
            <div class="cont_log_bask">
                <div>
                    <img src="../icons/Корзина.png" height="31" alt="" onclick ="openCart();">
                    <span id = "cartResult">0</span>
<!--                    <button onclick = "clearCart()">Clear Cart</button>-->
                    <br>
                    <span class="text">Корзина</span>
                </div>
                <div>
                    <img src="../icons/Login.png" width="32" alt=""><br>
                    <span class="text">Войти</span>
                </div>
            </div>
        </nav>
    </div>
</header>
<script src="JavaScript/cart.js"></script>
