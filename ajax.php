<?php
header('Content-Type: application/json');

$data = $_POST;
$action = $data['action'];
switch ($action) {
    case 'cart':
        echo json_encode(array(
            'status' => true,
            'html' => getCartForm()
        ));
        exit();
        break;
    case 'favorite':
        echo json_encode(array(
            'status' => true,
            'html' => getFavoriteForm()
        ));
        exit();
        break;
    case 'callback':
        echo json_encode(array(
            'status' => true,
            'html' => getCallbackForm()
        ));
        exit();
        break;
    case 'callbackSubmit':
        echo json_encode(array(
            'status' => true,
            'html' => getCallbackSubmitForm()
        ));
        exit();
        break;
    case 'question':
        echo json_encode(array(
            'status' => true,
            'html' => getQuestionForm()
        ));
        exit();
        break;
    case 'questionSubmit':
        echo json_encode(array(
            'status' => true,
            'html' => getQuestionSubmitForm()
        ));
        exit();
        break;
    case 'review':
        echo json_encode(array(
            'status' => true,
            'html' => getReviewForm()
        ));
        exit();
        break;
    case 'reviewSubmit':
        echo json_encode(array(
            'status' => true,
            'html' => getReviewSubmitForm()
        ));
        exit();
        break;
    case 'reviewProduct':
        echo json_encode(array(
            'status' => true,
            'html' => getReviewProductForm()
        ));
        exit();
        break;
    case 'city':
        echo json_encode(array(
            'status' => true,
            'html' => getCityForm()
        ));
        exit();
        break;
    case 'search':
        echo json_encode(array(
            'status' => true,
            'html' => getSearchResult()
        ));
        exit();
        break;
    default:
        echo json_encode(array(
            'status' => false,
        ));
        exit();
        break;
}

function getCartForm()
{
    ob_start();
    ?>
    <form class="cart">
        <div class="cart__top popup__top">
            <div class="cart__title popup__title">Корзина</div>
            <button class="cart__close popup__close jsFormClose" type="button">
                <svg class="popup__close-svg">
                    <use xlink:href="/images/icons/sprite.svg#close"></use>
                </svg>
            </button>
        </div>
        <div class="cart__middle popup__middle">
            <div class="cart__list">
                <div class="citem">
                    <div class="citem__top"><a class="citem__img" href="product.html"><span class="citem__img-wrap"><img class="citem__img-img"
                                                                                           src="images/content/catalog/2.png"
                                                                                           alt="lorem"/></span></a></div>
                    <div class="citem__bottom">
                        <div class="citem__content">
                            <div class="citem__avaible">
                                <div class="citem__avaible__round"></div>
                                <div class="citem__avaible__txt">В наличии</div>
                            </div>
                            <div class="citem__prices"><span class="item__price price">7 000 РУБ.</span><span
                                        class="item__priceold priceold">65 000 руб.</span></div>
                            <a class="citem__title" href="product.html">Аккумуляторный шуруповёрт ANGLE EXACT 30 без
                                аккум. и ЗУ Bosch Professional 0602490671...</a>
                        </div>
                        <div class="citem__calc">
                            <div class="citem__count count jsCartCount">
                                <button class="citem__count-minus count__minus count__btn" type="button">-</button>
                                <input class="citem__count-input count__input" type="number" min="1" value="1" step="1"
                                       max="999">
                                <button class="citem__count-plus count__plus count__btn" type="button">+</button>
                            </div>
                            <div class="citem__total">7 000 РУБ.</div>
                        </div>
                        <div class="citem__btns">
                            <button class="citem__btn jsCompare" type="button">
                                <svg class="citem__btn-svg citem__btn-svg_compare">
                                    <use xlink:href="/images/icons/sprite.svg#compare"></use>
                                </svg>
                            </button>
                            <button class="citem__btn jsFavorite active" type="button">
                                <svg class="citem__btn-svg citem__btn-svg_heart">
                                    <use xlink:href="/images/icons/sprite.svg#heart"></use>
                                </svg>
                            </button>
                            <button class="citem__del" type="button">
                                <svg class="citem__del-svg">
                                    <use xlink:href="/images/icons/sprite.svg#close"></use>
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="citem">
                    <div class="citem__top"><a class="citem__img" href="product.html"><span class="citem__img-wrap"><img class="citem__img-img"
                                                                                           src="images/content/catalog/2.png"
                                                                                           alt="lorem"/></span></a></div>
                    <div class="citem__bottom">
                        <div class="citem__content">
                            <div class="citem__avaible">
                                <div class="citem__avaible__round"></div>
                                <div class="citem__avaible__txt">В наличии</div>
                            </div>
                            <div class="citem__prices"><span class="item__price price">7 000 РУБ.</span><span
                                        class="item__priceold priceold">65 000 руб.</span></div>
                            <a class="citem__title" href="product.html">Аккумуляторный шуруповёрт ANGLE EXACT 30 без
                                аккум. и ЗУ Bosch Professional 0602490671...</a>
                        </div>
                        <div class="citem__calc">
                            <div class="citem__count count jsCartCount">
                                <button class="citem__count-minus count__minus count__btn" type="button">-</button>
                                <input class="citem__count-input count__input" type="number" min="1" value="1" step="1"
                                       max="999">
                                <button class="citem__count-plus count__plus count__btn" type="button">+</button>
                            </div>
                            <div class="citem__total">7 000 РУБ.</div>
                        </div>
                        <div class="citem__btns">
                            <button class="citem__btn jsCompare" type="button">
                                <svg class="citem__btn-svg citem__btn-svg_compare">
                                    <use xlink:href="/images/icons/sprite.svg#compare"></use>
                                </svg>
                            </button>
                            <button class="citem__btn jsFavorite active" type="button">
                                <svg class="citem__btn-svg citem__btn-svg_heart">
                                    <use xlink:href="/images/icons/sprite.svg#heart"></use>
                                </svg>
                            </button>
                            <button class="citem__del" type="button">
                                <svg class="citem__del-svg">
                                    <use xlink:href="/images/icons/sprite.svg#close"></use>
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="citem">
                    <div class="citem__top"><a class="citem__img" href="product.html"><span class="citem__img-wrap"><img class="citem__img-img"
                                                                                           src="images/content/catalog/2.png"
                                                                                           alt="lorem"/></span></a></div>
                    <div class="citem__bottom">
                        <div class="citem__content">
                            <div class="citem__avaible">
                                <div class="citem__avaible__round"></div>
                                <div class="citem__avaible__txt">В наличии</div>
                            </div>
                            <div class="citem__prices"><span class="item__price price">7 000 РУБ.</span><span
                                        class="item__priceold priceold">65 000 руб.</span></div>
                            <a class="citem__title" href="product.html">Аккумуляторный шуруповёрт ANGLE EXACT 30 без
                                аккум. и ЗУ Bosch Professional 0602490671...</a>
                        </div>
                        <div class="citem__calc">
                            <div class="citem__count count jsCartCount">
                                <button class="citem__count-minus count__minus count__btn" type="button">-</button>
                                <input class="citem__count-input count__input" type="number" min="1" value="1" step="1"
                                       max="999">
                                <button class="citem__count-plus count__plus count__btn" type="button">+</button>
                            </div>
                            <div class="citem__total">7 000 РУБ.</div>
                        </div>
                        <div class="citem__btns">
                            <button class="citem__btn jsCompare" type="button">
                                <svg class="citem__btn-svg citem__btn-svg_compare">
                                    <use xlink:href="/images/icons/sprite.svg#compare"></use>
                                </svg>
                            </button>
                            <button class="citem__btn jsFavorite active" type="button">
                                <svg class="citem__btn-svg citem__btn-svg_heart">
                                    <use xlink:href="/images/icons/sprite.svg#heart"></use>
                                </svg>
                            </button>
                            <button class="citem__del" type="button">
                                <svg class="citem__del-svg">
                                    <use xlink:href="/images/icons/sprite.svg#close"></use>
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="citem">
                    <div class="citem__top"><a class="citem__img" href="product.html"><span class="citem__img-wrap"><img class="citem__img-img"
                                                                                           src="images/content/catalog/2.png"
                                                                                           alt="lorem"/></span></a></div>
                    <div class="citem__bottom">
                        <div class="citem__content">
                            <div class="citem__avaible">
                                <div class="citem__avaible__round"></div>
                                <div class="citem__avaible__txt">В наличии</div>
                            </div>
                            <div class="citem__prices"><span class="item__price price">7 000 РУБ.</span><span
                                        class="item__priceold priceold">65 000 руб.</span></div>
                            <a class="citem__title" href="product.html">Аккумуляторный шуруповёрт ANGLE EXACT 30 без
                                аккум. и ЗУ Bosch Professional 0602490671...</a>
                        </div>
                        <div class="citem__calc">
                            <div class="citem__count count jsCartCount">
                                <button class="citem__count-minus count__minus count__btn" type="button">-</button>
                                <input class="citem__count-input count__input" type="number" min="1" value="1" step="1"
                                       max="999">
                                <button class="citem__count-plus count__plus count__btn" type="button">+</button>
                            </div>
                            <div class="citem__total">7 000 РУБ.</div>
                        </div>
                        <div class="citem__btns">
                            <button class="citem__btn jsCompare" type="button">
                                <svg class="citem__btn-svg citem__btn-svg_compare">
                                    <use xlink:href="/images/icons/sprite.svg#compare"></use>
                                </svg>
                            </button>
                            <button class="citem__btn jsFavorite active" type="button">
                                <svg class="citem__btn-svg citem__btn-svg_heart">
                                    <use xlink:href="/images/icons/sprite.svg#heart"></use>
                                </svg>
                            </button>
                            <button class="citem__del" type="button">
                                <svg class="citem__del-svg">
                                    <use xlink:href="/images/icons/sprite.svg#close"></use>
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="citem">
                    <div class="citem__top"><a class="citem__img" href="product.html"><span class="citem__img-wrap"><img class="citem__img-img"
                                                                                           src="images/content/catalog/2.png"
                                                                                           alt="lorem"/></span></a></div>
                    <div class="citem__bottom">
                        <div class="citem__content">
                            <div class="citem__avaible">
                                <div class="citem__avaible__round"></div>
                                <div class="citem__avaible__txt">В наличии</div>
                            </div>
                            <div class="citem__prices"><span class="item__price price">7 000 РУБ.</span><span
                                        class="item__priceold priceold">65 000 руб.</span></div>
                            <a class="citem__title" href="product.html">Аккумуляторный шуруповёрт ANGLE EXACT 30 без
                                аккум. и ЗУ Bosch Professional 0602490671...</a>
                        </div>
                        <div class="citem__calc">
                            <div class="citem__count count jsCartCount">
                                <button class="citem__count-minus count__minus count__btn" type="button">-</button>
                                <input class="citem__count-input count__input" type="number" min="1" value="1" step="1"
                                       max="999">
                                <button class="citem__count-plus count__plus count__btn" type="button">+</button>
                            </div>
                            <div class="citem__total">7 000 РУБ.</div>
                        </div>
                        <div class="citem__btns">
                            <button class="citem__btn jsCompare" type="button">
                                <svg class="citem__btn-svg citem__btn-svg_compare">
                                    <use xlink:href="/images/icons/sprite.svg#compare"></use>
                                </svg>
                            </button>
                            <button class="citem__btn jsFavorite active" type="button">
                                <svg class="citem__btn-svg citem__btn-svg_heart">
                                    <use xlink:href="/images/icons/sprite.svg#heart"></use>
                                </svg>
                            </button>
                            <button class="citem__del" type="button">
                                <svg class="citem__del-svg">
                                    <use xlink:href="/images/icons/sprite.svg#close"></use>
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="citem">
                    <div class="citem__top"><a class="citem__img" href="product.html"><span class="citem__img-wrap"><img class="citem__img-img"
                                                                                           src="images/content/catalog/2.png"
                                                                                           alt="lorem"/></span></a></div>
                    <div class="citem__bottom">
                        <div class="citem__content">
                            <div class="citem__avaible">
                                <div class="citem__avaible__round"></div>
                                <div class="citem__avaible__txt">В наличии</div>
                            </div>
                            <div class="citem__prices"><span class="item__price price">7 000 РУБ.</span><span
                                        class="item__priceold priceold">65 000 руб.</span></div>
                            <a class="citem__title" href="product.html">Аккумуляторный шуруповёрт ANGLE EXACT 30 без
                                аккум. и ЗУ Bosch Professional 0602490671...</a>
                        </div>
                        <div class="citem__calc">
                            <div class="citem__count count jsCartCount">
                                <button class="citem__count-minus count__minus count__btn" type="button">-</button>
                                <input class="citem__count-input count__input" type="number" min="1" value="1" step="1"
                                       max="999">
                                <button class="citem__count-plus count__plus count__btn" type="button">+</button>
                            </div>
                            <div class="citem__total">7 000 РУБ.</div>
                        </div>
                        <div class="citem__btns">
                            <button class="citem__btn jsCompare" type="button">
                                <svg class="citem__btn-svg citem__btn-svg_compare">
                                    <use xlink:href="/images/icons/sprite.svg#compare"></use>
                                </svg>
                            </button>
                            <button class="citem__btn jsFavorite active" type="button">
                                <svg class="citem__btn-svg citem__btn-svg_heart">
                                    <use xlink:href="/images/icons/sprite.svg#heart"></use>
                                </svg>
                            </button>
                            <button class="citem__del" type="button">
                                <svg class="citem__del-svg">
                                    <use xlink:href="/images/icons/sprite.svg#close"></use>
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="citem">
                    <div class="citem__top"><a class="citem__img" href="product.html"><span class="citem__img-wrap"><img class="citem__img-img"
                                                                                           src="images/content/catalog/2.png"
                                                                                           alt="lorem"/></span></a></div>
                    <div class="citem__bottom">
                        <div class="citem__content">
                            <div class="citem__avaible">
                                <div class="citem__avaible__round"></div>
                                <div class="citem__avaible__txt">В наличии</div>
                            </div>
                            <div class="citem__prices"><span class="item__price price">7 000 РУБ.</span><span
                                        class="item__priceold priceold">65 000 руб.</span></div>
                            <a class="citem__title" href="product.html">Аккумуляторный шуруповёрт ANGLE EXACT 30 без
                                аккум. и ЗУ Bosch Professional 0602490671...</a>
                        </div>
                        <div class="citem__calc">
                            <div class="citem__count count jsCartCount">
                                <button class="citem__count-minus count__minus count__btn" type="button">-</button>
                                <input class="citem__count-input count__input" type="number" min="1" value="1" step="1"
                                       max="999">
                                <button class="citem__count-plus count__plus count__btn" type="button">+</button>
                            </div>
                            <div class="citem__total">7 000 РУБ.</div>
                        </div>
                        <div class="citem__btns">
                            <button class="citem__btn jsCompare" type="button">
                                <svg class="citem__btn-svg citem__btn-svg_compare">
                                    <use xlink:href="/images/icons/sprite.svg#compare"></use>
                                </svg>
                            </button>
                            <button class="citem__btn jsFavorite active" type="button">
                                <svg class="citem__btn-svg citem__btn-svg_heart">
                                    <use xlink:href="/images/icons/sprite.svg#heart"></use>
                                </svg>
                            </button>
                            <button class="citem__del" type="button">
                                <svg class="citem__del-svg">
                                    <use xlink:href="/images/icons/sprite.svg#close"></use>
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="citem">
                    <div class="citem__top"><a class="citem__img" href="product.html"><span class="citem__img-wrap"><img class="citem__img-img"
                                                                                           src="images/content/catalog/2.png"
                                                                                           alt="lorem"/></span></a></div>
                    <div class="citem__bottom">
                        <div class="citem__content">
                            <div class="citem__avaible">
                                <div class="citem__avaible__round"></div>
                                <div class="citem__avaible__txt">В наличии</div>
                            </div>
                            <div class="citem__prices"><span class="item__price price">7 000 РУБ.</span><span
                                        class="item__priceold priceold">65 000 руб.</span></div>
                            <a class="citem__title" href="product.html">Аккумуляторный шуруповёрт ANGLE EXACT 30 без
                                аккум. и ЗУ Bosch Professional 0602490671...</a>
                        </div>
                        <div class="citem__calc">
                            <div class="citem__count count jsCartCount">
                                <button class="citem__count-minus count__minus count__btn" type="button">-</button>
                                <input class="citem__count-input count__input" type="number" min="1" value="1" step="1"
                                       max="999">
                                <button class="citem__count-plus count__plus count__btn" type="button">+</button>
                            </div>
                            <div class="citem__total">7 000 РУБ.</div>
                        </div>
                        <div class="citem__btns">
                            <button class="citem__btn jsCompare" type="button">
                                <svg class="citem__btn-svg citem__btn-svg_compare">
                                    <use xlink:href="/images/icons/sprite.svg#compare"></use>
                                </svg>
                            </button>
                            <button class="citem__btn jsFavorite active" type="button">
                                <svg class="citem__btn-svg citem__btn-svg_heart">
                                    <use xlink:href="/images/icons/sprite.svg#heart"></use>
                                </svg>
                            </button>
                            <button class="citem__del" type="button">
                                <svg class="citem__del-svg">
                                    <use xlink:href="/images/icons/sprite.svg#close"></use>
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="cart__total">
                <div class="cart__total-left">
                    <button class="cart__clear" type="button"><span class="cart__clear-img">
                      <svg class="cart__clear-svg">
                        <use xlink:href="/images/icons/sprite.svg#close"></use>
                      </svg></span><span class="cart__clear-txt">очистить корзину</span></button>
                </div>
                <div class="cart__total-right">
                    <div class="cart__total-txt">Итого:</div>
                    <div class="cart__total-val">7 000 руб.</div>
                </div>
            </div>
        </div>
        <div class="cart__bottom popup__bottom">
            <div class="cart__btns">
                <div class="cart__btn">
                    <button class="cart__one btn3 cart__btn-btn" type="button">
                        <svg class="btn3__svg">
                            <use xlink:href="/images/icons/sprite.svg#one"></use>
                        </svg>
                        <span class="btn3__txt">Купить в 1 клик</span>
                    </button>
                    <div class="cart__btn-txt">Вам потребуется указатьтолько имя и номер телефона</div>
                </div>
                <div class="cart__btn">
                    <a href="basket.html" class="cart__buy btn cart__btn-btn"><span
                                class="btn__txt">Перейти в корзину</span></a>
                    <div class="cart__btn-txt">Полноценное оформление заказа</div>
                </div>
            </div>
        </div>
    </form>
    <?
    $html = ob_get_contents();
    ob_end_clean();
    return $html;
}

function getFavoriteForm()
{
    ob_start();
    ?>
    <form class="cart">
        <div class="cart__top popup__top">
            <div class="cart__title popup__title">Избранное</div>
            <button class="cart__close popup__close jsFormClose" type="button">
                <svg class="popup__close-svg">
                    <use xlink:href="/images/icons/sprite.svg#close"></use>
                </svg>
            </button>
        </div>
        <div class="cart__middle popup__middle">
            <div class="cart__list">
                <div class="citem">
                    <div class="citem__top"><a class="citem__img" href="product.html"><span class="citem__img-wrap"><img class="citem__img-img"
                                                                                           src="images/content/catalog/2.png"
                                                                                           alt="lorem"/></span></a></div>
                    <div class="citem__bottom">
                        <div class="citem__content">
                            <div class="citem__avaible">
                                <div class="citem__avaible__round"></div>
                                <div class="citem__avaible__txt">В наличии</div>
                            </div>
                            <div class="citem__prices"><span class="item__price price">7 000 РУБ.</span><span
                                        class="item__priceold priceold">65 000 руб.</span></div>
                            <a class="citem__title" href="product.html">Аккумуляторный шуруповёрт ANGLE EXACT 30 без
                                аккум. и ЗУ Bosch Professional 0602490671...</a>
                        </div>
                        <div class="citem__btns">
                            <button class="citem__btn jsCompare active" type="button">
                                <svg class="citem__btn-svg citem__btn-svg_compare">
                                    <use xlink:href="/images/icons/sprite.svg#compare"></use>
                                </svg>
                            </button>
                            <button class="citem__btn jsBuy" type="button">
                                <svg class="citem__btn-svg citem__btn-svg_cart">
                                    <use xlink:href="/images/icons/sprite.svg#cart"></use>
                                </svg>
                            </button>
                            <button class="citem__del" type="button">
                                <svg class="citem__del-svg">
                                    <use xlink:href="/images/icons/sprite.svg#close"></use>
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="citem">
                    <div class="citem__top"><a class="citem__img" href="product.html"><span class="citem__img-wrap"><img class="citem__img-img"
                                                                                           src="images/content/catalog/2.png"
                                                                                           alt="lorem"/></span></a></div>
                    <div class="citem__bottom">
                        <div class="citem__content">
                            <div class="citem__avaible">
                                <div class="citem__avaible__round"></div>
                                <div class="citem__avaible__txt">В наличии</div>
                            </div>
                            <div class="citem__prices"><span class="item__price price">7 000 РУБ.</span><span
                                        class="item__priceold priceold">65 000 руб.</span></div>
                            <a class="citem__title" href="product.html">Аккумуляторный шуруповёрт ANGLE EXACT 30 без
                                аккум. и ЗУ Bosch Professional 0602490671...</a>
                        </div>
                        <div class="citem__btns">
                            <button class="citem__btn jsCompare active" type="button">
                                <svg class="citem__btn-svg citem__btn-svg_compare">
                                    <use xlink:href="/images/icons/sprite.svg#compare"></use>
                                </svg>
                            </button>
                            <button class="citem__btn jsBuy" type="button">
                                <svg class="citem__btn-svg citem__btn-svg_cart">
                                    <use xlink:href="/images/icons/sprite.svg#cart"></use>
                                </svg>
                            </button>
                            <button class="citem__del" type="button">
                                <svg class="citem__del-svg">
                                    <use xlink:href="/images/icons/sprite.svg#close"></use>
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="citem">
                    <div class="citem__top"><a class="citem__img" href="product.html"><span class="citem__img-wrap"><img class="citem__img-img"
                                                                                           src="images/content/catalog/2.png"
                                                                                           alt="lorem"/></span></a></div>
                    <div class="citem__bottom">
                        <div class="citem__content">
                            <div class="citem__avaible">
                                <div class="citem__avaible__round"></div>
                                <div class="citem__avaible__txt">В наличии</div>
                            </div>
                            <div class="citem__prices"><span class="item__price price">7 000 РУБ.</span><span
                                        class="item__priceold priceold">65 000 руб.</span></div>
                            <a class="citem__title" href="product.html">Аккумуляторный шуруповёрт ANGLE EXACT 30 без
                                аккум. и ЗУ Bosch Professional 0602490671...</a>
                        </div>
                        <div class="citem__btns">
                            <button class="citem__btn jsCompare active" type="button">
                                <svg class="citem__btn-svg citem__btn-svg_compare">
                                    <use xlink:href="/images/icons/sprite.svg#compare"></use>
                                </svg>
                            </button>
                            <button class="citem__btn jsBuy" type="button">
                                <svg class="citem__btn-svg citem__btn-svg_cart">
                                    <use xlink:href="/images/icons/sprite.svg#cart"></use>
                                </svg>
                            </button>
                            <button class="citem__del" type="button">
                                <svg class="citem__del-svg">
                                    <use xlink:href="/images/icons/sprite.svg#close"></use>
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="citem">
                    <div class="citem__top"><a class="citem__img" href="product.html"><span class="citem__img-wrap"><img class="citem__img-img"
                                                                                           src="images/content/catalog/2.png"
                                                                                           alt="lorem"/></span></a></div>
                    <div class="citem__bottom">
                        <div class="citem__content">
                            <div class="citem__avaible">
                                <div class="citem__avaible__round"></div>
                                <div class="citem__avaible__txt">В наличии</div>
                            </div>
                            <div class="citem__prices"><span class="item__price price">7 000 РУБ.</span><span
                                        class="item__priceold priceold">65 000 руб.</span></div>
                            <a class="citem__title" href="product.html">Аккумуляторный шуруповёрт ANGLE EXACT 30 без
                                аккум. и ЗУ Bosch Professional 0602490671...</a>
                        </div>
                        <div class="citem__btns">
                            <button class="citem__btn jsCompare active" type="button">
                                <svg class="citem__btn-svg citem__btn-svg_compare">
                                    <use xlink:href="/images/icons/sprite.svg#compare"></use>
                                </svg>
                            </button>
                            <button class="citem__btn jsBuy" type="button">
                                <svg class="citem__btn-svg citem__btn-svg_cart">
                                    <use xlink:href="/images/icons/sprite.svg#cart"></use>
                                </svg>
                            </button>
                            <button class="citem__del" type="button">
                                <svg class="citem__del-svg">
                                    <use xlink:href="/images/icons/sprite.svg#close"></use>
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="citem">
                    <div class="citem__top"><a class="citem__img" href="product.html"><span class="citem__img-wrap"><img class="citem__img-img"
                                                                                           src="images/content/catalog/2.png"
                                                                                           alt="lorem"/></span></a></div>
                    <div class="citem__bottom">
                        <div class="citem__content">
                            <div class="citem__avaible">
                                <div class="citem__avaible__round"></div>
                                <div class="citem__avaible__txt">В наличии</div>
                            </div>
                            <div class="citem__prices"><span class="item__price price">7 000 РУБ.</span><span
                                        class="item__priceold priceold">65 000 руб.</span></div>
                            <a class="citem__title" href="product.html">Аккумуляторный шуруповёрт ANGLE EXACT 30 без
                                аккум. и ЗУ Bosch Professional 0602490671...</a>
                        </div>
                        <div class="citem__btns">
                            <button class="citem__btn jsCompare active" type="button">
                                <svg class="citem__btn-svg citem__btn-svg_compare">
                                    <use xlink:href="/images/icons/sprite.svg#compare"></use>
                                </svg>
                            </button>
                            <button class="citem__btn jsBuy" type="button">
                                <svg class="citem__btn-svg citem__btn-svg_cart">
                                    <use xlink:href="/images/icons/sprite.svg#cart"></use>
                                </svg>
                            </button>
                            <button class="citem__del" type="button">
                                <svg class="citem__del-svg">
                                    <use xlink:href="/images/icons/sprite.svg#close"></use>
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="citem">
                    <div class="citem__top"><a class="citem__img" href="product.html"><span class="citem__img-wrap"><img class="citem__img-img"
                                                                                           src="images/content/catalog/2.png"
                                                                                           alt="lorem"/></span></a></div>
                    <div class="citem__bottom">
                        <div class="citem__content">
                            <div class="citem__avaible">
                                <div class="citem__avaible__round"></div>
                                <div class="citem__avaible__txt">В наличии</div>
                            </div>
                            <div class="citem__prices"><span class="item__price price">7 000 РУБ.</span><span
                                        class="item__priceold priceold">65 000 руб.</span></div>
                            <a class="citem__title" href="product.html">Аккумуляторный шуруповёрт ANGLE EXACT 30 без
                                аккум. и ЗУ Bosch Professional 0602490671...</a>
                        </div>
                        <div class="citem__btns">
                            <button class="citem__btn jsCompare active" type="button">
                                <svg class="citem__btn-svg citem__btn-svg_compare">
                                    <use xlink:href="/images/icons/sprite.svg#compare"></use>
                                </svg>
                            </button>
                            <button class="citem__btn jsBuy" type="button">
                                <svg class="citem__btn-svg citem__btn-svg_cart">
                                    <use xlink:href="/images/icons/sprite.svg#cart"></use>
                                </svg>
                            </button>
                            <button class="citem__del" type="button">
                                <svg class="citem__del-svg">
                                    <use xlink:href="/images/icons/sprite.svg#close"></use>
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="citem">
                    <div class="citem__top"><a class="citem__img" href="product.html"><span class="citem__img-wrap"><img class="citem__img-img"
                                                                                           src="images/content/catalog/2.png"
                                                                                           alt="lorem"/></span></a></div>
                    <div class="citem__bottom">
                        <div class="citem__content">
                            <div class="citem__avaible">
                                <div class="citem__avaible__round"></div>
                                <div class="citem__avaible__txt">В наличии</div>
                            </div>
                            <div class="citem__prices"><span class="item__price price">7 000 РУБ.</span><span
                                        class="item__priceold priceold">65 000 руб.</span></div>
                            <a class="citem__title" href="product.html">Аккумуляторный шуруповёрт ANGLE EXACT 30 без
                                аккум. и ЗУ Bosch Professional 0602490671...</a>
                        </div>
                        <div class="citem__btns">
                            <button class="citem__btn jsCompare active" type="button">
                                <svg class="citem__btn-svg citem__btn-svg_compare">
                                    <use xlink:href="/images/icons/sprite.svg#compare"></use>
                                </svg>
                            </button>
                            <button class="citem__btn jsBuy" type="button">
                                <svg class="citem__btn-svg citem__btn-svg_cart">
                                    <use xlink:href="/images/icons/sprite.svg#cart"></use>
                                </svg>
                            </button>
                            <button class="citem__del" type="button">
                                <svg class="citem__del-svg">
                                    <use xlink:href="/images/icons/sprite.svg#close"></use>
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="citem">
                    <div class="citem__top"><a class="citem__img" href="product.html"><span class="citem__img-wrap"><img class="citem__img-img"
                                                                                           src="images/content/catalog/2.png"
                                                                                           alt="lorem"/></span></a></div>
                    <div class="citem__bottom">
                        <div class="citem__content">
                            <div class="citem__avaible">
                                <div class="citem__avaible__round"></div>
                                <div class="citem__avaible__txt">В наличии</div>
                            </div>
                            <div class="citem__prices"><span class="item__price price">7 000 РУБ.</span><span
                                        class="item__priceold priceold">65 000 руб.</span></div>
                            <a class="citem__title" href="product.html">Аккумуляторный шуруповёрт ANGLE EXACT 30 без
                                аккум. и ЗУ Bosch Professional 0602490671...</a>
                        </div>
                        <div class="citem__btns">
                            <button class="citem__btn jsCompare active" type="button">
                                <svg class="citem__btn-svg citem__btn-svg_compare">
                                    <use xlink:href="/images/icons/sprite.svg#compare"></use>
                                </svg>
                            </button>
                            <button class="citem__btn jsBuy" type="button">
                                <svg class="citem__btn-svg citem__btn-svg_cart">
                                    <use xlink:href="/images/icons/sprite.svg#cart"></use>
                                </svg>
                            </button>
                            <button class="citem__del" type="button">
                                <svg class="citem__del-svg">
                                    <use xlink:href="/images/icons/sprite.svg#close"></use>
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="cart__bottom popup__bottom">
            <div class="cart__btns">
                <div class="cart__btn"><a class="cart__buy btn cart__btn-btn" href="compare.html"><span
                                class="btn__txt">Перейти в избранное</span></a></div>
            </div>
        </div>
    </form>
    <?
    $html = ob_get_contents();
    ob_end_clean();
    return $html;
}

function getCallbackForm()
{
    ob_start();
    ?>
    <div class="popup__top">
        <div class="popup__title">Заказать звонок</div>
        <div class="popup__subtitle">Укажите ваше имя и контактный номер и наши специалисты позвонят Вам</div>
        <button class="popup__close jsFormClose" type="button">
            <svg class="popup__close-svg">
                <use xlink:href="/images/icons/sprite.svg#close"></use>
            </svg>
        </button>
    </div>
    <div class="popup__middle">
        <form class="popup__form" action="ajax.php" method="post">
            <div class="popup__fields">
                <div class="popup__field">
                    <input class="popup__input" type="text" name="name" data-rule-required="true"
                           data-msg-required="Введите Имя">
                    <div class="popup__placeholder">Ваще имя<i>*</i></div>
                </div>
                <div class="popup__field">
                    <input class="popup__input" type="tel" name="tel" data-rule-required="true"
                           data-msg-required="Введите телефон" data-msg-tel="Введите ваш телефон">
                    <div class="popup__placeholder">Телефон<i>*</i></div>
                </div>
            </div>
            <div class="popup__policy">Заполняя данную форму Вы соглашаетесь с<br><a href="policy.html">Политикой
                    обработки персональных данных</a></div>
            <button class="btn popup__submit" type="submit">Отправить</button>
            <input type="hidden" name="action" value="callbackSubmit">
        </form>
    </div>
    <?
    $html = ob_get_contents();
    ob_end_clean();
    return $html;
}

function getCallbackSubmitForm()
{
    ob_start();
    ?>
    <div class="popup__top">
        <button class="popup__close jsFormClose" type="button">
            <svg class="popup__close-svg">
                <use xlink:href="/images/icons/sprite.svg#close"></use>
            </svg>
        </button>
    </div>
    <div class="popup__success">
        <div class="psuccess">
            <div class="psuccess__img">
                <svg class="psuccess__svg">
                    <use xlink:href="/images/icons/sprite.svg#chech-round"></use>
                </svg>
            </div>
            <div class="psuccess__title">
                Спасибо!
            </div>
            <div class="psuccess__txt">
                Ваша заявка принята в работу.
                <br>
                Ожидайте звонка.
            </div>
            <button type="button" class="psuccess__close jsFormClose btn">
                Закрыть
            </button>
        </div>
    </div>
    <?
    $html = ob_get_contents();
    ob_end_clean();
    return $html;
}

function getQuestionForm()
{
    ob_start();
    ?>
    <div class="popup__top">
        <div class="popup__title">Задать вопрос</div>
        <div class="popup__subtitle">Менеджеры компании с радостью ответят на ваши вопросы и произведут расчет стоимости
            услуг и подготовят индивидуальное коммерческое предложение.
        </div>
        <button class="popup__close jsFormClose" type="button">
            <svg class="popup__close-svg">
                <use xlink:href="/images/icons/sprite.svg#close"></use>
            </svg>
        </button>
    </div>
    <div class="popup__middle">
        <form class="popup__form" action="ajax.php" method="post">
            <div class="popup__fields">
                <div class="popup__field">
                    <input class="popup__input" type="text" name="name" data-rule-required="true"
                           data-msg-required="Введите Имя">
                    <div class="popup__placeholder">Ваще имя<i>*</i></div>
                </div>
                <div class="popup__field">
                    <input class="popup__input" type="tel" name="tel" data-rule-required="true"
                           data-msg-required="Введите телефон" data-msg-tel="Введите ваш телефон">
                    <div class="popup__placeholder">Телефон<i>*</i></div>
                </div>
                <div class="popup__field">
                    <input class="popup__input" type="email" name="email">
                    <div class="popup__placeholder">E-mail</div>
                </div>
                <div class="popup__field">
                    <input class="popup__input" type="text" name="message" data-rule-required="true"
                           data-msg-required="Введите вопрос">
                    <div class="popup__placeholder">Cообщение<i>*</i></div>
                </div>

            </div>
            <div class="popup__policy">Заполняя данную форму Вы соглашаетесь с<br><a href="policy.html">Политикой
                    обработки персональных данных</a></div>
            <button class="btn popup__submit" type="submit">Отправить</button>
            <input type="hidden" name="action" value="questionSubmit">
        </form>
    </div>
    <?
    $html = ob_get_contents();
    ob_end_clean();
    return $html;
}

function getQuestionSubmitForm()
{
    ob_start();
    ?>
    <div class="popup__top">
        <button class="popup__close jsFormClose" type="button">
            <svg class="popup__close-svg">
                <use xlink:href="/images/icons/sprite.svg#close"></use>
            </svg>
        </button>
    </div>
    <div class="popup__success">
        <div class="psuccess">
            <div class="psuccess__img">
                <svg class="psuccess__svg">
                    <use xlink:href="/images/icons/sprite.svg#chech-round"></use>
                </svg>
            </div>
            <div class="psuccess__title">
                Спасибо!
            </div>
            <div class="psuccess__txt">
                Ваше сообщение отправлено!
            </div>
            <button type="button" class="psuccess__close jsFormClose btn">
                Закрыть
            </button>
        </div>
    </div>
    <?
    $html = ob_get_contents();
    ob_end_clean();
    return $html;
}

function getReviewForm()
{
    ob_start();
    ?>
    <div class="popup__top">
        <div class="popup__title">Оставить свой отзыв</div>
        <button class="popup__close jsFormClose" type="button">
            <svg class="popup__close-svg">
                <use xlink:href="/images/icons/sprite.svg#close"></use>
            </svg>
        </button>
    </div>
    <div class="popup__middle">
        <form class="popup__form" action="ajax.php" method="post" enctype="multipart/form-data">
            <div class="popup__fields">
                <div class="popup__field">
                    <input class="popup__input" type="text" name="name" data-rule-required="true"
                           data-msg-required="Введите Имя">
                    <div class="popup__placeholder">Ваще имя<i>*</i></div>
                </div>
                <div class="popup__field popup__field_m30">
                    <input class="popup__input" type="text" name="prof">
                    <div class="popup__placeholder">Должность</div>
                </div>
                <div class="popup__field popup__field_m30">
                    <div class="popup__label">Ваше фото</div>
                    <label class="file">
                        <input class="file__input" type="file" name="userPhoto"><span class="file__fake">
                      <svg class="file__svg">
                        <use xlink:href="/images/icons/sprite.svg#staple"></use>
                      </svg><span class="file__title">Прикрепить</span>
                      <button class="file__del" type="button">
                        <svg class="file__del-svg">
                          <use xlink:href="/images/icons/sprite.svg#close"></use>
                        </svg>
                      </button></span>
                    </label>
                </div>
                <div class="popup__field">
                    <div class="popup__label">Отзыв<i>*</i></div>
                    <textarea class="popup__area" name="message" data-rule-required="true"
                              data-msg-required="Добавьте отзыв"></textarea>
                </div>
            </div>
            <div class="popup__rating">
                <div class="rating2">
                    <div class="rating2__wrapper">
                        <input class="rating2__input" type="radio" name="rating" value="Отлично" id="rating-5">
                        <label class="rating2__star" for="rating-5" data-rate="Отлично">
                            <svg class="rating2__star-svg">
                                <use xlink:href="/images/icons/sprite.svg#star"></use>
                            </svg>
                        </label>
                        <input class="rating2__input" type="radio" name="rating" value="Хорошо" id="rating-4">
                        <label class="rating2__star" for="rating-4" data-rate="Хорошо">
                            <svg class="rating2__star-svg">
                                <use xlink:href="/images/icons/sprite.svg#star"></use>
                            </svg>
                        </label>
                        <input class="rating2__input" type="radio" name="rating" value="Нормально" id="rating-3">
                        <label class="rating2__star" for="rating-3" data-rate="Нормально">
                            <svg class="rating2__star-svg">
                                <use xlink:href="/images/icons/sprite.svg#star"></use>
                            </svg>
                        </label>
                        <input class="rating2__input" type="radio" name="rating" value="Плохо" id="rating-2">
                        <label class="rating2__star" for="rating-2" data-rate="Плохо">
                            <svg class="rating2__star-svg">
                                <use xlink:href="/images/icons/sprite.svg#star"></use>
                            </svg>
                        </label>
                        <input class="rating2__input" type="radio" name="rating" value="Очень плохо" id="rating-1">
                        <label class="rating2__star" for="rating-1" data-rate="Очень плохо">
                            <svg class="rating2__star-svg">
                                <use xlink:href="/images/icons/sprite.svg#star"></use>
                            </svg>
                        </label>
                    </div>
                    <div class="rating2__txt">Без оценки</div>
                </div>
            </div>
            <div class="popup__policy">Заполняя данную форму Вы соглашаетесь с<br><a href="policy.html">Политикой
                    обработки персональных данных</a></div>
            <button class="btn popup__submit" type="submit">Отправить</button>
            <input type="hidden" name="action" value="reviewSubmit">
        </form>
    </div>
    <?
    $html = ob_get_contents();
    ob_end_clean();
    return $html;
}

function getReviewSubmitForm()
{
    ob_start();
    ?>
    <div class="popup__top">
        <button class="popup__close jsFormClose" type="button">
            <svg class="popup__close-svg">
                <use xlink:href="/images/icons/sprite.svg#close"></use>
            </svg>
        </button>
    </div>
    <div class="popup__success">
        <div class="psuccess">
            <div class="psuccess__img">
                <svg class="psuccess__svg">
                    <use xlink:href="/images/icons/sprite.svg#chech-round"></use>
                </svg>
            </div>
            <div class="psuccess__title">
                Спасибо!
            </div>
            <div class="psuccess__txt">
                Ваш отзыв появится на сайте сразу
                <br>
                после модерации.
            </div>
            <button type="button" class="psuccess__close jsFormClose btn">
                Закрыть
            </button>
        </div>
    </div>
    <?
    $html = ob_get_contents();
    ob_end_clean();
    return $html;
}

function getReviewProductForm()
{
    ob_start();
    ?>
    <div class="popup__top">
        <div class="popup__title">Оставить свой отзыв</div>
        <button class="popup__close jsFormClose" type="button">
            <svg class="popup__close-svg">
                <use xlink:href="/images/icons/sprite.svg#close"></use>
            </svg>
        </button>
    </div>
    <div class="popup__middle">
        <form class="popup__form" action="ajax.php" method="post" enctype="multipart/form-data">
            <div class="popup__fields">
                <div class="popup__field">
                    <input class="popup__input" type="text" name="name" data-rule-required="true"
                           data-msg-required="Введите Имя">
                    <div class="popup__placeholder">Ваще имя<i>*</i></div>
                </div>
                <div class="popup__field popup__field_m30">
                    <input class="popup__input" type="text" name="prof">
                    <div class="popup__placeholder">Должность</div>
                </div>
                <div class="popup__field popup__field_m30">
                    <div class="popup__link">
                        <span class="popup__link-label">Товар: </span>
                        <a href="product.html" class="popup__link-link">Аккумуляторный шуруповёрт ANGLE EXACT 30 без аккум. и ЗУ Bosch Professional 0602490671</a>
                    </div>
                </div>

                <div class="popup__field popup__field_m30">
                    <div class="popup__label">Ваше фото</div>
                    <label class="file">
                        <input class="file__input" type="file" name="userPhoto"><span class="file__fake">
                      <svg class="file__svg">
                        <use xlink:href="/images/icons/sprite.svg#staple"></use>
                      </svg><span class="file__title">Прикрепить</span>
                      <button class="file__del" type="button">
                        <svg class="file__del-svg">
                          <use xlink:href="/images/icons/sprite.svg#close"></use>
                        </svg>
                      </button></span>
                    </label>
                </div>
                <div class="popup__field">
                    <div class="popup__label">Отзыв<i>*</i></div>
                    <textarea class="popup__area" name="message" data-rule-required="true"
                              data-msg-required="Добавьте отзыв"></textarea>
                </div>
            </div>
            <div class="popup__rating">
                <div class="rating2">
                    <div class="rating2__wrapper">
                        <input class="rating2__input" type="radio" name="rating" value="Отлично" id="rating-5">
                        <label class="rating2__star" for="rating-5" data-rate="Отлично">
                            <svg class="rating2__star-svg">
                                <use xlink:href="/images/icons/sprite.svg#star"></use>
                            </svg>
                        </label>
                        <input class="rating2__input" type="radio" name="rating" value="Хорошо" id="rating-4">
                        <label class="rating2__star" for="rating-4" data-rate="Хорошо">
                            <svg class="rating2__star-svg">
                                <use xlink:href="/images/icons/sprite.svg#star"></use>
                            </svg>
                        </label>
                        <input class="rating2__input" type="radio" name="rating" value="Нормально" id="rating-3">
                        <label class="rating2__star" for="rating-3" data-rate="Нормально">
                            <svg class="rating2__star-svg">
                                <use xlink:href="/images/icons/sprite.svg#star"></use>
                            </svg>
                        </label>
                        <input class="rating2__input" type="radio" name="rating" value="Плохо" id="rating-2">
                        <label class="rating2__star" for="rating-2" data-rate="Плохо">
                            <svg class="rating2__star-svg">
                                <use xlink:href="/images/icons/sprite.svg#star"></use>
                            </svg>
                        </label>
                        <input class="rating2__input" type="radio" name="rating" value="Очень плохо" id="rating-1">
                        <label class="rating2__star" for="rating-1" data-rate="Очень плохо">
                            <svg class="rating2__star-svg">
                                <use xlink:href="/images/icons/sprite.svg#star"></use>
                            </svg>
                        </label>
                    </div>
                    <div class="rating2__txt">Без оценки</div>
                </div>
            </div>
            <div class="popup__policy">Заполняя данную форму Вы соглашаетесь с<br><a href="policy.html">Политикой
                    обработки персональных данных</a></div>
            <button class="btn popup__submit" type="submit">Отправить</button>
            <input type="hidden" name="action" value="reviewSubmit">
        </form>
    </div>
    <?
    $html = ob_get_contents();
    ob_end_clean();
    return $html;
}

function getCityForm()
{
    ob_start();
    ?>
    <div class="popup__top">
        <div class="popup__title">Выбор города</div>
        <button class="popup__close" type="button">
            <svg class="popup__close-svg">
                <use xlink:href="/images/icons/sprite.svg#close"></use>
            </svg>
        </button>
    </div>
    <div class="popup__middle">
        <div class="city">
            <div class="city__field">
                <input class="city__search" type="search" name="city" placeholder="Введите название города">
                <svg class="city__svg">
                    <use xlink:href="/images/icons/sprite.svg#magnifier"></use>
                </svg>
            </div>
            <div class="city__cities">
                <div class="city__cities-title">Например:</div>
                <a class="city__item" href="">Москва</a><a class="city__item" href="">Санкт-Петербург</a><a
                        class="city__item" href="">Москва</a><a class="city__item" href="">Санкт-Петербург</a><a
                        class="city__item" href="">Москва</a><a class="city__item" href="">Санкт-Петербург</a><a
                        class="city__item" href="">Москва</a><a class="city__item" href="">Санкт-Петербург</a><a
                        class="city__item" href="">Москва</a><a class="city__item" href="">Санкт-Петербург</a><a
                        class="city__item" href="">Москва</a><a class="city__item" href="">Санкт-Петербург</a><a
                        class="city__item" href="">Москва</a><a class="city__item" href="">Санкт-Петербург</a><a
                        class="city__item" href="">Москва</a><a class="city__item" href="">Санкт-Петербург</a><a
                        class="city__item" href="">Москва</a><a class="city__item" href="">Санкт-Петербург</a><a
                        class="city__item" href="">Москва</a><a class="city__item" href="">Санкт-Петербург</a><a
                        class="city__item" href="">Москва</a><a class="city__item" href="">Санкт-Петербург</a><a
                        class="city__item" href="">Москва</a><a class="city__item" href="">Санкт-Петербург</a><a
                        class="city__item" href="">Москва</a><a class="city__item" href="">Санкт-Петербург</a><a
                        class="city__item" href="">Москва</a><a class="city__item" href="">Санкт-Петербург</a><a
                        class="city__item" href="">Москва</a><a class="city__item" href="">Санкт-Петербург</a><a
                        class="city__item" href="">Москва</a><a class="city__item" href="">Санкт-Петербург</a><a
                        class="city__item" href="">Москва</a><a class="city__item" href="">Санкт-Петербург</a><a
                        class="city__item" href="">Москва</a><a class="city__item" href="">Санкт-Петербург</a>
            </div>
        </div>
    </div>
    <?
    $html = ob_get_contents();
    ob_end_clean();
    return $html;
}

function getSearchResult()
{
    ob_start();
    ?>
    <table class="hsearch__table">
        <tbody>
        <tr>
            <td class="hsearch__left">
                <div class="hsearch__title">Товары</div>
            </td>
            <td class="hsearch__right">
                <div class="hsearch__list"><a class="hsearch__item" href="product.html"><b>Шурупов</b>ерт interscope</a><a
                            class="hsearch__item" href="product.html"><b>Шурупов</b>ерты</a><a class="hsearch__item"
                                                                                               href="product.html"><b>Шурупов</b>ерты
                        Bosh</a><a class="hsearch__item" href="product.html"><b>Шурупов</b>ерты Зубр</a><a
                            class="hsearch__item" href="product.html">Аккумуляторный&nbsp;<b>шурупов</b>ёрт ANGLE EXACT
                        30 без аккум. и ЗУ Bosch...</a></div>
            </td>
        </tr>
        <tr>
            <td class="hsearch__left">
                <div class="hsearch__title">Услуги</div>
            </td>
            <td class="hsearch__right">
                <div class="hsearch__list"><a class="hsearch__item" href="service.html"><b>Шурупов</b>ерт interscope</a><a
                            class="hsearch__item" href="service.html"><b>Шурупов</b>ерты</a><a class="hsearch__item"
                                                                                               href="service.html"><b>Шурупов</b>ерты
                        Bosh</a><a class="hsearch__item" href="service.html"><b>Шурупов</b>ерты Зубр</a></div>
            </td>
        </tr>
        </tbody>
    </table>
    <?
    $html = ob_get_contents();
    ob_end_clean();
    return $html;
}

?>