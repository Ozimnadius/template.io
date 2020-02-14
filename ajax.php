<?php
header('Content-Type: application/json');

$data = $_POST;
$action = $data['action'];
switch ($action) {
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
            'html' => getCallbackSubmitkForm()
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
    case 'city':
        echo json_encode(array(
            'status' => true,
            'html' => getCityForm()
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

function getCallbackSubmitkForm()
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
                <div class="city__cities-title">Например:</div><a class="city__item" href="">Москва</a><a class="city__item" href="">Санкт-Петербург</a><a class="city__item" href="">Москва</a><a class="city__item" href="">Санкт-Петербург</a><a class="city__item" href="">Москва</a><a class="city__item" href="">Санкт-Петербург</a><a class="city__item" href="">Москва</a><a class="city__item" href="">Санкт-Петербург</a><a class="city__item" href="">Москва</a><a class="city__item" href="">Санкт-Петербург</a><a class="city__item" href="">Москва</a><a class="city__item" href="">Санкт-Петербург</a><a class="city__item" href="">Москва</a><a class="city__item" href="">Санкт-Петербург</a><a class="city__item" href="">Москва</a><a class="city__item" href="">Санкт-Петербург</a><a class="city__item" href="">Москва</a><a class="city__item" href="">Санкт-Петербург</a><a class="city__item" href="">Москва</a><a class="city__item" href="">Санкт-Петербург</a><a class="city__item" href="">Москва</a><a class="city__item" href="">Санкт-Петербург</a><a class="city__item" href="">Москва</a><a class="city__item" href="">Санкт-Петербург</a><a class="city__item" href="">Москва</a><a class="city__item" href="">Санкт-Петербург</a><a class="city__item" href="">Москва</a><a class="city__item" href="">Санкт-Петербург</a><a class="city__item" href="">Москва</a><a class="city__item" href="">Санкт-Петербург</a><a class="city__item" href="">Москва</a><a class="city__item" href="">Санкт-Петербург</a><a class="city__item" href="">Москва</a><a class="city__item" href="">Санкт-Петербург</a><a class="city__item" href="">Москва</a><a class="city__item" href="">Санкт-Петербург</a>
            </div>
        </div>
    </div>
    <?
    $html = ob_get_contents();
    ob_end_clean();
    return $html;
}

?>