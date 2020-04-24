<footer>
    <div class="footer-content">
        <div class="footer-col-1">
            <div class="footer-title">
                <div class="logo"><b>А<span>на</span>на<span>с</span></b></div>
                <div class="title__forname">Shopsharing</div>
            </div>
            <div class="footer-subtitle">
                <div class="subtitle__name">г. Красноярск</div>
                <div class="subtitle__forname">ул. Пушкина 322</div>
            </div>
        </div>
        <div class="footer-col-2">
            <div class="footer-menu">
                <a href="/" class="footer-menu__item">Главная</a>
                <a href="/catalog/" class="footer-menu__item">Каталог</a>
            </div>
            <div class="footer-menu">
                <a href="/ticket/" class="footer-menu__item">Купить абоменент</a>
                <a href="/contacts/" class="footer-menu__item">Контакты</a>
            </div>
        </div>
        <div class="footer-col-3">
            <a href="https://www.instagram.com/ananas_krsk/" class="social__item">
                <i class="fab fa-instagram"></i>&nbsp;Instagram
            </a>
            <a href="https://vk.com/ananas_krsk" class="social__item">
                <i class="fab fa-vk"></i>&nbsp;ВКонтакте
            </a>
        </div>
    </div>
</footer>
<a class="button__up"></a>
</body>
<script src="/app/template/js/wow.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/snap.svg/0.5.1/snap.svg-min.js"></script>
<script src="\app\template\js\jquery.js"></script>
<script src="/app/template/js/main.js"></script>
<script>
    $(document).ready(function(){
        $(".add-to-cart").click(function () {
            var id = $(this).attr("data-id");
            $.post("/cart/addAjax/"+id, {}, function (data) {
                $("#cart-count").html(data);
            });
            return false;
        });
    });
</script>
<script>
    $(document).ready(function(){
        $(".add-to-like").click(function () {
            var id = $(this).attr("data-id");
            $.post("/like/addAjax/"+id, {}, function (data) {
                $("#like-count").html(data);
            });
            return false;
        });
    });
</script>

</html>