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
                        <button type='button' class='close' data-dismiss='modal' aria-label='Close'><span
                                    aria-hidden='true'>&times;</span></button>
                        <h4 class='modal-title'>Корзина</h4>
                    </div>
                    <div class='modal-body'>
                        <span></span>
                        <h5>Возможно, к пледу Вы еще хотите добавить:</h5>

                        <div class='lazy'>
                            <div class='gray-bg'>
                                <figure>
                                    <img data-lazy='' alt=''/>
                                    <figcaption>
                                        <div class='caption-content'>
                                            <p></p>
                                            <small><em></em></small>
                                        </div>
                                    </figcaption>
                                    <a href='#0' alt='' value='' class='addopttobasket cta  all-caps'>заказать</a>
                                    <p class='not-in-stock' style='position: relative; top: -25%;'>Нет в наличии</p>
                                </figure>
                            </div>
                        </div>

                    </div>
                    <!--echo "<div><img class='slopt' data-lazy='" .$knstr['photopled']. "' width='200px'> ";-->
                    <div class='modal-footer' style='
   height: 50px;'>
                        <button type='button' class='btn btn-default left-but' data-dismiss='modal'>Вернуться к
                            покупкам
                        </button>
                        <button type='button' class='btn btn-default right-but'><a href={{url('basket')}} style='color:#333'>Перейти в корзину</a>
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.modal -->
        <div class='row'>
            <div class='col-lg-8 col-lg-offset-2 col-md-8 col-md-offset-2 col-sm-8 col-sm-offset-2 col-xs-8 col-xs-offset-2 centered'>
                <p class='section-title'>А вот и несколько примеров:</p>
            </div>
        </div>
    </div>
    <div class='container-full'>
        <div class='row'>
            <a href='#0' id='mobile-portfolio-filter' class='mobile-filter-select visible-xs'><h4 class='all-caps'>Выбрать категорию<span class='fa fa-ellipsis-h'></span></h4></a>
            <ul class='portfolio-filter'>
                <li class='current all'><a href='#0'>Все</a></li>
                <li class='onetone'><a href='#0'>Однотонные</a></li>
                <li class='pictures'><a href='#0'>С рисунком</a></li>
                <li class='konstruktor'><a href='#0'>Конструкторы</a></li>
                <li class='instock'><a href='#0'>В наличии</a></li>
            </ul>

            <ul class='portfolio-list' id='portfolio_grid'>
                <li data-type='' data-id='port-'>
                    <figure><img src='' alt=''/>";
                        <figcaption>
                            <div class='caption-content'><p></p>
                                <small><em></em></small>
                            </div>
                            <a href='#0' alt='' value='' class='addtobasket cta cta-stroke all-caps'>заказать</a>
                            <p class='not-in-stock' style='position: relative; top: -25%;'>Нет в наличии</p>
                        </figcaption>
                    </figure>
                </li>
            </ul>
        </div>
    </div>
</section>