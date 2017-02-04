<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <title>Rent</title>
    <script src="js/app.min.js"></script>
    <link rel="stylesheet" href="css/pt-sans/css/pt-sans.css">

    <link href="css/simple-line-icons/css/simple-line-icons.css" rel='stylesheet' type='text/css'>
    <link href="css/bootstrap/css/bootstrap.css" rel="stylesheet">
    <link href="css/app.css" rel="stylesheet">
    <link rel="stylesheet" href="css/bootstrap-select.css">
</head>
<body>
    <div class="container">
        <header class="header">
            <div class="row">
                <div class="col-lg-2 col-md-2 col-sm-3">
                    <a href="/" title="На главную"><img src="images/logo.png" alt="Logo"></a>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-4 header__contacts">
                    <ul class="list-inline list-inline--vertical-divider">
                        <li>support@renta.com</li><li>8 800 455-33-21</li>
                    </ul>
                </div>
                <div class="col-lg-5 col-md-4 col-sm-4 header__menu">
                    <ul class="list-inline">
                        <li><a href="">+ Разместить объявление</a></li>
                        <li><a href="">Купить</a></li>
                        <li><a href="">FAQ</a></li>
                    </ul>
                </div>
                <div class="clearfix visible-sm-block"></div>
                <div class="col-lg-2 col-md-3 col-sm-12 header__my-profile">
                    <a href="#" class="btn btn-primary btn-block btn-xs header__my-profile-link">
                        <div class="header__my-profile-link-user-bg"><i class="slicon slicon-male-user header__my-profile-link-user"></i></div>
                        Мой профиль
                        <i class="online-indicator online-indicator--red"></i>
                    </a>
                </div>
            </div>
        </header>

        <div class="row navigation">
            <hr/>

            <nav class="col-lg-10 col-md-12 navigation__nav">
                <ul class="list-inline navigation__nav-list">
                    <li><a href="">Главная</a></li>
                    <li><a href="">Вторичное жильё</a></li>
                    <li><a href="">Новостройки</a></li>
                    <li><a href="">Аренда жилья</a></li>
                    <li><a href="">Коммерческая недвижимость</a></li>
                    <li><a href="">Правила размещения</a></li>
                </ul>
            </nav>
            <div class="clearfix visible-md-block"></div>
            <div class="col-lg-2 col-md-12 form-group navigation__search-input">
                <form action="/" method="post">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Поиск"/>
                        <span class="input-group-addon">
                            <i class="slicon slicon-magnifier"></i>
                        </span>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div class="container">

        <div class="row main-offers">
            <div class="col-lg-9 main-offers__big-offer">
                <div class="offer offer--big">
                    <div class="caption">
                        <div class="row-tmp clearfix">
                            <div class="col-lg-9 row-tmp__type-metro">
                                3-комнатная квартира, м. Проспект Вернадского (20 мин пешком)
                            </div>
                            <div class="col-lg-3 text-right">
                                <span class="row-tmp__price text-right">
                                    85 000 000 &#8381;
                                </span>
                            </div>
                        </div>

                        <div class="col-lg-12 row-address clearfix">
                            Москва, район Проспект Вернадского, ул. Удальцова, 85А
                        </div>

                        <div class="row-more-manage clearfix">
                            <div class="col-lg-2 row-more-manage-more">
                                <a href="" class="white">Подробнее</a>
                            </div>
                            <div class="col-lg-2 col-lg-offset-8 row-more-manage-manage">
                                <div class="text-right">
                                    <ul class="list-inline">
                                        <li><a href="" class="white"><i class="slicon slicon-star"></i></a></li>
                                        <li><a href="" class="white row-more-manage-manage-share"><i class="slicon slicon-logout"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <img src="storage/images/rent_big.jpg" class="img-responsive" alt="">
                </div>
            </div>

            <div class="col-lg-3 main-offers__small_offers">
                    <? include('_offer_small.html') ?>
                    <? include('_offer_small.html') ?>
                    <? include('_offer_small.html') ?>
            </div>
        </div>

        <!--    НАСТРОЙКА ПОИСКА ПРЕДЛОЖЕНИЙ -->
        <div class="form-search-offer">
            <div class="row">
                <div class="col-lg-5">
                    <div class="btn-group">
                        <button class="btn btn-primary">Квартира</button>
                        <button class="btn btn-default">Дом, коттедж</button>
                        <button class="btn btn-default">Нежилое помещение</button>
                    </div>
                </div>

                <div class="col-lg-1 col-lg-offset-1 form-search-offer__offer-price text-right">
                    <span>Цена</span>
                </div>
                <div class="col-lg-2 form-search-offer__offer-input-from">
                    <input type="text" class="form-control form-search-offer__offer-input" placeholder="От"/>
                </div>
                <div class="col-lg-2 form-search-offer__offer-input-to">
                    <input type="text" class="form-control form-search-offer__offer-input" placeholder="До"/>
                </div>
                <div class="col-lg-1 text-center form-search-offer__offer-price-setup">
                    <select class="selectpicker dropdown-flat" data-style="btn-link" data-width="fit" data-align="center">
                        <option>&#8381;</option>
                        <option>$</option>
                    </select>

                    <span class="text">за</span>

                    <select class="selectpicker dropdown-flat" data-style="btn-link" data-width="36px" data-align="center">
                        <option>всё</option>
                        <option>ничего</option>
                    </select>
                </div>

            </div>

            <div class="row">
                <div class="col-lg-4 col-lg-offset-2 form-search-offer__text-count-room">
                    <span>Количество комнат в квартире</span>
                </div>
                <div class="clearfix visible-lg-block"></div>
                <div class="col-lg-8">
                    <div class="btn-group">
                        <button class="btn btn-primary">Комната</button>
                        <button class="btn btn-default">Студия</button>
                        <button class="btn btn-default">1</button>
                        <button class="btn btn-primary">2</button>
                        <button class="btn btn-default">3</button>
                        <button class="btn btn-primary">4</button>
                        <button class="btn btn-default">5</button>
                        <button class="btn btn-default">6+</button>
                        <button class="btn btn-default">Своб. планир.</button>
                        <button class="btn btn-default">Доля</button>
                    </div>
                </div>
                <div class="col-lg-3 col-lg-offset-1 form-search-offer__submit">
                    <button class="btn btn-primary btn-block btn-md btn-icon" type="submit"><i class="slicon slicon-magnifier"></i> Найти квартиры</button>
                </div>
            </div>

        </div>

        <div class="row custom-search-params custom-search-params--main">
            <hr/>

            <div class="col-lg-4 custom-search-params__description">
                <h5 class="custom-search-params__header">Описание</h5>
                <textarea class="form-control custom-search-params__description-textarea" rows="11"></textarea>
            </div>
            <div class="col-lg-3 custom-search-params__house-type">
                <h5 class="custom-search-params__header">Тип дома</h5>
                <div class="checkbox">
                    <input id="type-house-cb-1" type="checkbox" checked>
                    <label for="type-house-cb-1">
                        панельный дом
                    </label>
                </div>

                <div class="checkbox">
                    <input id="type-house-cb-2" type="checkbox">
                    <label for="type-house-cb-2">
                        сталинка
                    </label>
                </div>

                <div class="checkbox">
                    <input id="type-house-cb-3" type="checkbox">
                    <label for="type-house-cb-3">
                        щитовой
                    </label>
                </div>

                <div class="checkbox">
                    <input id="type-house-cb-4" type="checkbox">
                    <label for="type-house-cb-4">
                        кирпичный
                    </label>
                </div>

                <div class="checkbox">
                    <input id="type-house-cb-5" type="checkbox">
                    <label for="type-house-cb-5">
                        монолитный
                    </label>
                </div>

                <div class="checkbox">
                    <input id="type-house-cb-6" type="checkbox">
                    <label for="type-house-cb-6">
                        кирпично-монолитный
                    </label>
                </div>

                <div class="checkbox">
                    <input id="type-house-cb-7" type="checkbox">
                    <label for="type-house-cb-7">
                        блочный
                    </label>
                </div>

                <div class="checkbox">
                    <input id="type-house-cb-8" type="checkbox">
                    <label for="type-house-cb-8">
                        деревянный
                    </label>
                </div>

            </div>

            <div class="col-lg-3 custom-search-params__size-floor">
                <h5 class="custom-search-params__header">Метраж</h5>

                <div class="form-horizontal">
                    <div class="form-group">
                        <label for="csp-size-i1" class="col-lg-4 control-label">кухня</label>
                        <div class="col-lg-8">
                            <input type="text" class="form-control" id="csp-size-i1" placeholder="">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="csp-size-i2" class="col-lg-4 control-label">жилая</label>
                        <div class="col-lg-8">
                            <input type="text" class="form-control" id="csp-size-i2" placeholder="">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="csp-size-i3" class="col-lg-4 control-label">общая</label>
                        <div class="col-lg-8">
                            <input type="text" class="form-control" id="csp-size-i3" placeholder="">
                        </div>
                    </div>
                </div>

                <h5 class="custom-search-params__header custom-search-params__header-floor">Этажность</h5>

                <div class="form-horizontal">
                    <div class="form-group">
                        <label for="csp-floor-i1" class="col-lg-4 control-label">этаж</label>
                        <div class="col-lg-8">
                            <input type="text" class="form-control" id="csp-floor-i1" placeholder="">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="csp-floor-i2" class="col-lg-4 control-label">в доме</label>
                        <div class="col-lg-8">
                            <input type="text" class="form-control" id="csp-floor-i2" placeholder="">
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-2 custom-search-params__additional">
                <h5 class="custom-search-params__header">Дополнительно</h5>

                <div class="checkbox">
                    <input id="csp-additional-cb-1" type="checkbox" checked>
                    <label for="csp-additional-cb-1">
                        балкон
                    </label>
                </div>
                <div class="checkbox">
                    <input id="csp-additional-cb-2" type="checkbox" checked>
                    <label for="csp-additional-cb-2">
                        возможна ипотека
                    </label>
                </div>

                <h5 class="custom-search-params__additional-title">Лифтов</h5>
                <div class="btn-group">
                    <button class="btn btn-default">1</button>
                    <button class="btn btn-primary">2</button>
                    <button class="btn btn-default">3</button>
                </div>

                <h5 class="custom-search-params__additional-title">Санузел</h5>
                <div class="btn-group">
                    <button class="btn btn-primary">1</button>
                    <button class="btn btn-default">2</button>
                    <button class="btn btn-default">3</button>
                </div>
            </div>
        </div>
    </div>


    <div class="yet-offers">
        <div class="container">
            <div class="row yet-offers__header">
                <div class="col-lg-12">
                    Ещё предложения
                </div>
            </div>
            <div class="row yet-offers__offers">
                <!-- offers -->
                <div class="col col-lg-3 col-md-4 col-xs-6">
                    <? include('_offer_small.html') ?>
                </div>
                <div class="col col-lg-3 col-md-4 col-xs-6">
                    <? include('_offer_small.html') ?>
                </div>
                <div class="col col-lg-3 col-md-4 col-xs-6">
                    <? include('_offer_small.html') ?>
                </div>
                <div class="col col-lg-3 col-md-4 col-xs-6">
                    <? include('_offer_small.html') ?>
                </div>

                <div class="col col-lg-3 col-md-4 col-xs-6">
                    <? include('_offer_small.html') ?>
                </div>
                <div class="col col-lg-3 col-md-4 col-xs-6">
                    <? include('_offer_small.html') ?>
                </div>
                <div class="col col-lg-3 col-md-4 col-xs-6">
                    <? include('_offer_small.html') ?>
                </div>
                <div class="col col-lg-3 col-md-4 col-xs-6">
                    <? include('_offer_small.html') ?>
                </div>

                <div class="col col-lg-3 col-md-4 col-xs-6">
                    <? include('_offer_small.html') ?>
                </div>
                <div class="col col-lg-3 col-md-4 col-xs-6">
                    <? include('_offer_small.html') ?>
                </div>
                <div class="col col-lg-3 col-md-4 col-xs-6">
                    <? include('_offer_small.html') ?>
                </div>
                <div class="col col-lg-3 col-md-4 col-xs-6">
                    <? include('_offer_small.html') ?>
                </div>
            </div>
            <div class="row yet-offers__buttons">
                <div class="col-lg-4 col-lg-offset-4 yet-offers__buttons-load">
                    <button class="btn btn-primary btn-block btn-lg btn-icon"><i class="slicon slicon-refresh"></i> Загрузить больше предложений</button>
                </div>
            </div>
        </div>
    </div>


    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-2 visible-lg-block">
                    <img src="images/logo_small.png" alt="Logo">
                </div>
                <div class="col-lg-10 col-md-12">
                    <nav class="text-right footer__nav">
                        <ul class="list-inline navigation__nav-list">
                            <li><a href="">Главная</a></li>
                            <li><a href="">Вторичное жильё</a></li>
                            <li><a href="">Новостройки</a></li>
                            <li><a href="">Аренда жилья</a></li>
                            <li><a href="">Коммерческая недвижимость</a></li>
                            <li><a href="">Правила размещения</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
            <div class="row footer__info">
                <div class="col-lg-3 footer__info-copyright">
                    <span>&copy;2016, все права защищены</span>
                </div>
                <div class="col-lg-9">
                    <ul class="list-inline list-inline--vertical-divider text-right">
                        <li>support@renta</li><li>8 800 455-33-21</li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
</body>
</html>