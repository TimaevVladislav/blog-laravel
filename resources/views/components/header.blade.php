
<header>
    <div id="cssmenu" class="align-center">
        <ul>
            <li class="active">
                <a href="/">
                    <span>Главная</span>
                </a>
            </li>
            <li>
                <a href="{{ route("gallery") }}">
                    <span>Галерея</span>
                </a>
            </li>
            <li>
                <a href="{{ route("blog") }}">
                    <span>Блог</span>
                </a>
            </li>
            <li>
                <a href="{{ route("single") }}">
                    <span>О нас</span>
                </a>
            </li>
            <li class="last">
                <a href="{{ route("contact") }}">
                    <span>Контакты</span>
                </a>
            </li>
        </ul>
    </div>
    <div id="owl-slide" class="owl-carousel">
        <div class="item">
            <img src="images/slide1.jpg" />
        </div>
        <div class="item">
            <img src="images/slide2.jpg" />
        </div>
        <div class="item">
            <img src="images/slide3.jpg" />

        </div>
    </div>
</header>

