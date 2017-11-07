<section id='portfolio' class='gray-bg'>
    <div id='modsect' class='hidden'>
        <div class='modsect'>
            <div class='mds'>
                <img src='images/icon.png'>
            </div>
        </div>
    </div>
    <div class='container'>
        <div class='modal fade' id='basketmodal' tabindex='-1' role='dialog'>
            <div class='modal-dialog'>
                <div class='modal-content'>
                    <div class='modal-header'>
                        <button type='button' class='close' data-dismiss='modal' aria-label='Close'><span        aria-hidden='true'>&times;</span></button>
                        <h4 class='modal-title'>Корзина</h4>
                    </div>
                    <div class='modal-body'>
                        <span></span>
                        <h5>Возможно, к пледу Вы еще хотите добавить:</h5>

                        <div class='lazy'>
{{--                            @foreach()--}}

<!--                            --><?php
//                            do{
//                                echo "<div class='gray-bg'><figure> <img data-lazy='" . $knstr['photopled'] . "' alt='" . $knstr['namepled'] . "'/>";
//                                echo "<figcaption><div class='caption-content'>";
//                                echo "<p>" . $knstr['namepled'] . "</p>";
//                                echo "<small><em>" . $knstr['price'] . "  руб.</em></small></div></figcaption>";
//                                if ($knstr['instock'] == 'instock') {
//                                    echo "<a href='#0' alt='".$knstr['namepled']."' value='" . $knstr['id_pled'] . "' class='addopttobasket cta  all-caps'>заказать</a>";
//                                } else {
//                                    echo "<p class='not-in-stock' style=\"position: relative; top: -25%;\">Нет в наличии</p>";
//                                }
//                                echo "</figure>";
//
//                                echo "</div>";
//                            } while ($knstr = mysqli_fetch_array($knstroption));
//                            //
//                            ?>
                        </div>

                    </div>
                    <!---->

                    <!--echo "<div><img class='slopt' data-lazy='" .$knstr['photopled']. "' width='200px'> ";-->
                    <div class="modal-footer" style="
   height: 50px;
">
                        <button type="button" class="btn btn-default left-but" data-dismiss="modal">Вернуться к
                            покупкам
                        </button>
                        <button type="button" class="btn btn-default right-but"><a href='basket.php' style="
color: #333;
">Перейти в корзину</a></button>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.modal -->
        <div class="row">

            <div
                    class="col-lg-8 col-lg-offset-2 col-md-8 col-md-offset-2 col-sm-8 col-sm-offset-2 col-xs-8 col-xs-offset-2 centered">
                <p class="section-title">А вот и несколько примеров:</p>
            </div>
        </div>
    </div>
    <div class="container-full">
        <div class="row">
            <a href="#0" id="mobile-portfolio-filter" class="mobile-filter-select visible-xs"><h4
                        class="all-caps">Выбрать категорию<span class="fa fa-ellipsis-h"></span></h4></a>
            <ul class="portfolio-filter">
                <li class="current all"><a href="#0">Все</a></li>
                <li class="onetone"><a href="#0">Однотонные</a></li>
                <li class="pictures"><a href="#0">С рисунком</a></li>
                <li class="konstruktor"><a href="#0">Конструкторы</a></li>
                <li class="instock"><a href="#0">В наличии</a></li>
            </ul>

            <ul class="portfolio-list" id="portfolio_grid">
<!--                --><?php
//                do {
//                    echo "<li data-type='" . $catalogdblist['typepled'] . " " . $catalogdblist['instock'] . "' data-id='port-" . $catalogdblist['id_pled'] . "'>";
//                    echo "<figure> <img src='" . $catalogdblist['photopled'] . "' alt='" . $catalogdblist['namepled'] . "'/>";
//                    echo "<figcaption><div class='caption-content'>";
//                    echo "<p>" . $catalogdblist['namepled'] . "</p>";
//                    echo "<small><em>" . $catalogdblist['price'] . "  руб.</em></small>";
//                    echo "</div>";
//                    if ($catalogdblist['instock'] == 'instock') {
//                        echo "<a href='#0' alt='" . $catalogdblist['namepled'] . "' value='" . $catalogdblist['id_pled'] . "' class='addtobasket cta cta-stroke all-caps'>заказать</a>";
//                    } else {
//                        echo "<p class='not-in-stock' style=\"position: relative; top: -25%;\">Нет в наличии</p>";
//                    }
//                    echo "</figure></li>";
//
//                } while ($catalogdblist = mysqli_fetch_array($catal));
//                ?>
            </ul>
        </div>
    </div>
</section>