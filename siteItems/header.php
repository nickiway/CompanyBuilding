<header>
    <link rel="stylesheet" href="../Bootstrap/css/fontawesome.min.css">
    <!-- <div>
        <form  method = "get" class = "search">
            <input id="autoComplete" type="search" placeholder="Поиск..." dir="ltr" spellcheck=false autocorrect="off" autocomplete="off" autocapitalize="off"  name = "Search" maxlength="2048" tabindex="1">
            <input type="submit" value="Search">
        </form>
        <button onclick = "window.location.href = 'index.php'" class = "search__cancel-button font-bold" style = "display:><?php echo $cancelButton; ?>">Clear All</button>
    </div>
    <img src="../icons/Корзина.png" height="31" alt="" onclick ="openCart();">
    <span id = "cartResult">0</span>
    <button onclick = "clearCart()">Clear Cart</button> -->
    <nav>
        <div class="extra-info">
            <div class="contacts">
                <div>
                    +38 (050) 205 4564
                </div>
                <div>
                    tchaban.aleksandr4002@gmail.com
                </div>
            </div>
            <div class="networks">
                <div><i class="fab fa-telegram-plane"></i></div>
                <div><i class="fab fa-viber"></i></div>
                <div><i class="fab fa-google"></i></div>
            </div>
        </div>
        <div class="main-menu">
            <a href="../index.php"><img src="../icons/Logo_1.png" alt=""></a>
            <div class="toCenter row_gap">
                <ul class="menu">
                    <li><a href="../index.php">Каталог</a></li>
                    <li><a href="../aboutUs.php">О компании</a></li>
                    <li><a href="../Delivery.php">Доставка и оплата</a></li>
                    <li><a href="../Contacts.php">Контакты</a></li>
                </ul>
                <div class="magnifier">
                    <form method = get class = "display-flex">
                        <input type="text" class="search" autocomplete = "off" name = "Search" placeholder="Поиск..." >
                        <input hidden type="submit" id = "search-button">
                        <label  for = "search-button" class="btnSearch">
                            <i class="fas fa-search"></i>
                        </label>
                    </form>
                    <div class="login">
                        <i class="fas fa-user-circle"></i>
                    </div>
                    <div class="cart">
                        <i class="fas fa-shopping-bag"></i>
                    </div>
                </div>
            </div>
        </div>
    </nav>
</header>
<script src="JavaScript/cart.js"></script>