﻿<?php
/**
 * Template Name: page-cr
 */
get_header();
wp_head(); ?>
<div class="content_page">
    <div class="special-list">
        <div class="row">
            <div class="special-list__item col-xs-12 col-sm-6 col-md-3">
                <div class="special-list__inner"><a aria-label="Кредиты по сниженным ставкам" href=""
                                                    class="special-list__item pseudolink"><img alt="" aria-hidden="true"
                                                                                               src="<? echo get_template_directory_uri() . '/assets/front/css/kredit_theme/' ?>img/banki_kredity.svg"
                                                                                               class="special-list__icon"><span
                                class="special-list__title">Банки и кредиты - выбрать лучшие предложения банков.</span>
                        <span class="special-list__description">Выбери свой банковский кредит</span><span
                                class="special-list__description"> </span> <span
                                class="kit-button kit-button_color_green kit-button_size_m special-list__btn--text special-list__link"> <span
                                    class="kit-button__text">Подобрать кредит</span> </span> <span
                                class="special-list__btn--icon"> </span></a></div>
            </div>
            <div class="special-list__item col-xs-12 col-sm-6 col-md-3">
                <div class="special-list__inner"><a aria-label="Кредиты по сниженным ставкам" href=""
                                                    class="special-list__item pseudolink"><img alt="" aria-hidden="true"
                                                                                               src="<? echo get_template_directory_uri() . '/assets/front/css/kredit_theme/' ?>img/content4.svg"
                                                                                               class="special-list__icon"><span
                                class="special-list__title">Кредиты онлайн</span> <span
                                class="special-list__description">Сравнить предложения банков на кредиты онлайн, оформить заявку на получение кредита</span><span
                                class="special-list__description"> </span> <span
                                class="kit-button kit-button_color_green kit-button_size_m special-list__btn--text special-list__link"> <span
                                    class="kit-button__text">Подобрать кредит</span> </span> <span
                                class="special-list__btn--icon"> </span></a></div>
            </div>
            <div class="special-list__item col-xs-12 col-sm-6 col-md-3">
                <div class="special-list__inner"><a aria-label="Кредиты по сниженным ставкам" href=""
                                                    class="special-list__item pseudolink"><img alt="" aria-hidden="true"
                                                                                               src="<? echo get_template_directory_uri() . '/assets/front/css/kredit_theme/' ?>img/kredity_online.svg"
                                                                                               class="special-list__icon"><span
                                class="special-list__title">Кредитные карты</span> <span
                                class="special-list__description">Сравнить и выбрать кредитные карты с подходящими условиями для вас</span><span
                                class="special-list__description"> </span> <span
                                class="kit-button kit-button_color_green kit-button_size_m special-list__btn--text special-list__link"> <span
                                    class="kit-button__text">Узнать больше</span> </span> <span
                                class="special-list__btn--icon"> </span></a></div>
            </div>
            <div class="special-list__item col-xs-12 col-sm-6 col-md-3">
                <div class="special-list__inner"><a aria-label="Кредиты по сниженным ставкам" href=""
                                                    class="special-list__item pseudolink"><img alt="" aria-hidden="true"
                                                                                               src="<? echo get_template_directory_uri() . '/assets/front/css/kredit_theme/' ?>img/vklady.svg"
                                                                                               class="special-list__icon"><span
                                class="special-list__title">Вклады</span> <span class="special-list__description">Банковские вклады с повышенными ставками</span><span
                                class="special-list__description"> </span> <span
                                class="kit-button kit-button_color_green kit-button_size_m special-list__btn--text special-list__link"> <span
                                    class="kit-button__text">Узнать больше</span> </span> <span
                                class="special-list__btn--icon"> </span></a></div>
            </div>
        </div>
    </div>
    <div data-reactid="151" style="margin-bottom:120px"><!-- react-empty: 152 -->
        <section class="_2rXEs aqIhJ calculator-list-theme__wrapper">
            <div class="_20jzZ">
                <div class="_3n9UL calculator-list-theme__image-container"></div>
            </div>
            <div class="_1zQdT BXky6">
                <div class="_2BsQ1">
                    <div data-reactid="158">
                        <div class="_2fyyM _1MiQb mjrcK _1Ow3t _3UTzX"><? wp_title(''); ?><!--</h1>--><span
                                    class="_1jaU-"><span
                                        class="calculator-list-theme__header-region-name"></span></span></div>
                    </div>
                    <div class="_30VPM">
                        <div class="WXTuD _Szkx fx">
                            <div class="_3SAiO _1wJD0 calculator-list-theme__label">Выберите сумму кредита</div>
                            <div class="" data-test="ui-group">
                                <div class="_2J6fq">
                                    <div class="_1Mbqb _2futP _2mpBR fx" data-test="ui-slider-input">
                                        <div class="_3_n91 AePXT _1fswf" data-test="ui-slider-input-input"><input
                                                    id="price" class="_2ARmF _2qJ6u _3uy56 _3I6R2" name="price"
                                                    value="500000" onkeypress="price_change()"
                                                    style="width:100%;"><input id="oldprice"
                                                                               class="_2ARmF _2qJ6u _16cFN"
                                                                               name="oldprice" type="hidden"><input
                                                    id="oldprice1" class="form-control" name="oldprice1" type="hidden">
                                            <div id="slider-range"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="WXTuD WXTuD-fx">
                                <div class="_3SAiO _1wJD0 calculator-list-theme__label fx">Валюта</div>
                                <div data-test="ui-select" class="_129hA _129hA-fx">
                                    <div class="_3_n91 _1e74P _1fswf" data-test="ui-select-input">
                                        <div class="_1DCZo">
                                            <div data-test="ui-select" class="_129hA _2futP _1iN3s">
                                                <div class="_3_n91 _1e74P _1fswf" data-test="ui-select-input">
                                                    <div class="_1DCZo"><input id="cur_currency" type="text" readonly=""
                                                                               autocomplete="off" autocorrect="off"
                                                                               autocapitalize="off" spellcheck="off"
                                                                               class="_2ARmF _2qJ6u _16cFN "
                                                                               role="input"
                                                                               value="&#8381;" onclick="select_cur();">
                                                        <div class="_2k11- _2V6_I _3E_jV SVDVr _2Z7K9"
                                                             data-test="ui-select-input-icon">
                                                            <svg class="SdEDi" data-reactid="189">
                                                                <use xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                     xlink:href="#arrow-down-thin"
                                                                     data-reactid="190"></use>
                                                            </svg>
                                                        </div>
                                                    </div>
                                                </div>
                                                <ul id="currency" class=" _2cR3J" data-test="ui-select-values">
                                                    <li value="RUB" class="_3NNjg" data-test="ui-menu-item"
                                                        onclick="select_currency('&#8381;')"><i class="fa fa-rub"
                                                                                                aria-hidden="true"></i>
                                                    </li>
                                                    <li value="USD" class="_3NNjg" data-test="ui-menu-item"
                                                        onclick="select_currency('&#36;')"><i class="fa fa-usd"
                                                                                              aria-hidden="true"></i>
                                                    </li>
                                                    <li value="EUR" class="_3NNjg" data-test="ui-menu-item"
                                                        onclick="select_currency('&euro;')"><i class="fa fa-eur"
                                                                                               aria-hidden="true"></i>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="WXTuD">
                            <div class="_3SAiO _1wJD0 calculator-list-theme__label fx"> Срок</div>
                            <div data-test="ui-select" class="_129hA _129hA-fx">
                                <div class="_3_n91 _1e74P _1fswf" data-test="ui-select-input">
                                    <div class="_1DCZo"><input id="cur_period" type="text" readonly=""
                                                               autocomplete="off" autocorrect="off" autocapitalize="off"
                                                               spellcheck="off" class="_2ARmF _2qJ6u _16cFN"
                                                               role="input" value="3 года" onclick="select_period();">
                                        <div class="_2k11- _2V6_I _3E_jV SVDVr _2Z7K9" data-test="ui-select-input-icon">
                                            <svg class="SdEDi">
                                                <use xmlns:xlink="http://www.w3.org/1999/xlink"
                                                     xlink:href="#arrow-down-thin"></use>
                                            </svg>
                                        </div>
                                    </div>
                                </div>
                                <ul id="period" class="_3IKDE _2cR3J" data-test="ui-select-values">
                                    <li value="P1M" label="1 месяц" class="_3NNjg" data-test="ui-menu-item"
                                        data-reactid="205" onclick="select_period_srok('1 месяц')">1 месяц
                                    </li>
                                    <li value="P3M" label="3 месяца" class="_3NNjg " data-test="ui-menu-item"
                                        onclick="select_period_srok('3 месяца')">3 месяца
                                    </li>
                                    <li value="P6M" label="6 мес¤цев" class="_3NNjg" data-test="ui-menu-item"
                                        onclick="select_period_srok('6 месяцев')">6 месяцев
                                    </li>
                                    <li value="P9M" label="9 месяцев" class="_3NNjg" data-test="ui-menu-item"
                                        onclick="select_period_srok('9 месяцев')">9 месяцев
                                    </li>
                                    <li value="P1Y" label="1 год" class="_3NNjg" data-test="ui-menu-item"
                                        onclick="select_period_srok('1 год')">1 год
                                    </li>
                                    <li value="P2Y" label="2 года" class="_3NNjg" data-test="ui-menu-item"
                                        onclick="select_period_srok('2 года')">2 года
                                    </li>
                                    <li value="P3Y" label="3 года" class="_3NNjg" data-test="ui-menu-item"
                                        onclick="select_period_srok('3 года')">3 года
                                    </li>
                                    <li value="P4Y" label="4 года" class="_3NNjg" data-test="ui-menu-item"
                                        onclick="select_period_srok('4 года')">4 года
                                    </li>
                                    <li value="P5Y" label="5 лет" class="_3NNjg" data-test="ui-menu-item"
                                        data-reactid="213" onclick="select_period_srok('5 лет')">5 лет
                                    </li>
                                    <li value="P6Y" label="6 лет" class="_3NNjg" data-test="ui-menu-item"
                                        data-reactid="214" onclick="select_period_srok('6 лет')">6 лет
                                    </li>
                                    <li value="P7Y" label="7 лет" class="_3NNjg" data-test="ui-menu-item"
                                        onclick="select_period_srok('7 лет')">7 лет
                                    </li>
                                    <li value="P8Y" label="8 лет" class="_3NNjg" data-test="ui-menu-item"
                                        onclick="select_period_srok('8 лет')">8 лет
                                    </li>
                                    <li value="P9Y" label="9 лет" class="_3NNjg" data-test="ui-menu-item"
                                        onclick="select_period_srok('9 лет')">9 лет
                                    </li>
                                    <li value="P10Y" label="10 лет" class="_3NNjg" data-test="ui-menu-item"
                                        onclick="select_period_srok('10 лет')">10 лет
                                    </li>
                                    <li value="P15Y" label="15 лет" class="_3NNjg" data-test="ui-menu-item"
                                        onclick="select_period_srok('15 лет')">15 лет
                                    </li>
                                    <li value="P20Y" label="20 лет" class="_3NNjg" data-test="ui-menu-item"
                                        onclick="select_period_srok('20 лет')">20 лет
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="WXTuD _129hA-fx1" data-reactid="221">
                            <button onclick="show_dop()"
                                    class="_2sdWW calculator-list-theme__button-conditions _1VABv _3zDyU _3x77s"
                                    type="button" data-test="ui-button" data-reactid="222">+ Еще условия
                            </button>
                        </div>
                        <div class="WXTuD _1mLgv _129hA-fx1" data-reactid="223">
                            <button href="#table-fx"
                                    class="_2sdWW calculator-list-theme__button-selection RaZ2S _3zDyU _3x77s"
                                    type="button" data-test="ui-button" data-reactid="224"><span class="zTFG-"
                                                                                                 data-reactid="225">Подобрать</span><span
                                        class="-I2py" data-reactid="226"><svg class="_2MAZT" data-reactid="227"><use
                                                xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#arrow-down-thin"
                                                data-reactid="228"></use></svg></span></button>
                        </div>
                    </div>
                    <div style="margin:30px; display: none;"><a class="dop_" onclick="show_dop()"> Дополнительные
                            условия <i
                                    class="fa fa-angle-down"></i></a></div>
        </section>
        <div data-reactid="270" id="sort-params">
            <div style="padding-bottom: 0;" data-reactid="271"></div>
            <div class="_3ThEC _7ol--" style="transform: translateZ(0px);" data-reactid="272">
                <div class="_1Xn7Q" data-reactid="273">
                    <span class="" data-reactid="274"><!-- react-text: 275 -->Сортировка:<!-- /react-text --></span>
                </div>
                <div class="_1Xn7Q" data-cust-att="sort-parameter" data-reactid="276" data-type="rate">
                    <span class="_2BeSz" data-reactid="277" data-cust-att="sort-parameter" data-type="rate"><!-- react-text: 278 -->Ставка&nbsp;<!-- /react-text -->
                        <svg data-cust-att="sort-parameter" data-type="rate" width="16" height="16" viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg"><path
                                    d="M1395 736q0 13-10 23l-466 466q-10 10-23 10t-23-10l-466-466q-10-10-10-23t10-23l50-50q10-10 23-10t23 10l393 393 393-393q10-10 23-10t23 10l50 50q10 10 10 23z"/></svg>
                    </span>
                </div>
                <div class="_1Xn7Q" data-cust-att="sort-parameter" data-reactid="281" data-type="pay">
                    <span class="_2BeSz" data-reactid="282" data-cust-att="sort-parameter" data-type="pay"><!-- react-text: 283 -->Платеж&nbsp;
                        <!-- /react-text --><svg data-cust-att="sort-parameter" data-type="pay" width="16" height="16" viewBox="0 0 1792 1792"
                                                 xmlns="http://www.w3.org/2000/svg"><path
                                    d="M1395 736q0 13-10 23l-466 466q-10 10-23 10t-23-10l-466-466q-10-10-10-23t10-23l50-50q10-10 23-10t23 10l393 393 393-393q10-10 23-10t23 10l50 50q10 10 10 23z"/></svg>
                    </span>
                </div>
                <div class="_1Xn7Q h1KaH" data-cust-att="sort-parameter" data-reactid="286" data-type="overpay">
                    <span class="_2BeSz" data-reactid="287" data-cust-att="sort-parameter" data-type="overpay"><!-- react-text: 288 -->Переплата&nbsp;
                        <!-- /react-text --><svg data-cust-att="sort-parameter" data-type="overpay" width="16" height="16" viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg"><path
                                    d="M1395 736q0 13-10 23l-466 466q-10 10-23 10t-23-10l-466-466q-10-10-10-23t10-23l50-50q10-10 23-10t23 10l393 393 393-393q10-10 23-10t23 10l50 50q10 10 10 23z"/></svg>
                        </span>
                </div>
            </div>
        </div>
        <div style="border-bottom:1px solid #fff6f6" id="table-fx">
            <div class="navbar-component" data-current="1">
                <div class="navbar area">
                    <nav role="navigation" id="navigation" class="list"><a href="javascript:void(0);"
                                                                           class="item -link -active"
                                                                           onclick="toggle_menu('1');Get_PotrKr()">Популярные</a>
                        <a href="javascript:void(0);" class="item -link" onclick="toggle_menu('2');Get_PotrKr()">Все
                            банки</a>                 <!-- <span class="item"><i class="fa fa-search"></i></span> -->
                    </nav>
                </div>
            </div>
        </div>
        <input id="id_theme" name="id_theme" type="hidden" value="<? echo get_template_directory_uri() ?>">
        <div id="list_bank"></div>
        <a href="#" id="loadMore">Загрузить больше предложений&nbsp;<svg data-cust-att="sort-parameter" data-type="rate" width="16" height="16" viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg"><path d="M1395 736q0 13-10 23l-466 466q-10 10-23 10t-23-10l-466-466q-10-10-10-23t10-23l50-50q10-10 23-10t23 10l393 393 393-393q10-10 23-10t23 10l50 50q10 10 10 23z"></path></svg></a>
    </div>
    <div class="va_block">
        <div id="va-accordion" class="va-container">
            <div class="u90Ld aqIhJ _1CT2O">
                <div class="va-slice va-slice-1"><h2 class="va-title" style="margin-top:0.85em">Руководство заемщика от
                        сервиса «Банки кредиты онлайн»</h2>
                    <div class="va-content" id="va-1"><p>
                        <h3>Что вам нужно сделать, чтобы получить кредит?</h3>

                        В последние годы подход банков к выдаче кредитов на любые цели сильно изменился. Это
                        способствовало как более высокая осведомленность потребителей, так и изменения, внесенные
                        банками. Потребительский кредит стал услугой с минимальными формальностями, с доступом к деньгам
                        даже за один день.

                        В настоящее время почти все процедуры, связанные с предоставлением кредита, были упрощены, и
                        банки выдают кредитное решение через несколько минут после подачи заявки.

                        Однако, прежде чем зачисленные средства появятся на вашем счете, вы должны заполнить заявку на
                        кредит онлайн и предоставить банку подтверждение о наличии доходов. Некоторые банки с недавнего
                        времени не требую справку о доходах при выдаче кредита. Многие банки требуют от заемщиков другие
                        условия, в том числе личный счет в банке или страхование займов.

                        Банки, прежде чем предоставлять кредиты онлайн, проверят вашу кредитоспособность и историю всех
                        финансовых обязательств в Бюро кредитной информации.

                        <h3>Кредит онлайн через Интернет</h3>
                        Стоит ли использовать онлайн-банкинг?
                        Доступ к личным деньгам через систему онлайн-банкинга уже не удивляет. Популярность
                        онлайн-сервисов заставила банки сделать больше продуктов доступными таким образом. Для
                        учреждений это возможность расширить круг своей деятельности, а также оптимизировать расходы на
                        традиционное банковское обслуживание.

                        Клиент, решивший подать онлайн заявку на кредит, может рассчитывать на более лояльные условия от
                        банка, так как для банка этот кредит будет стоить дешевле. Основным преимуществом кредитов,
                        предлагаемых в через интернете, является возможность экономии. Заемщик очень часто имеет
                        возможность снизить стоимость своих обязательств посредством онлайн-банкинга. Дополнительным
                        преимуществом является экономия времени и доступ к сервису в любом месте и в любое время. Кроме
                        того, приложение, позволяет обойти часть формальностей, и решение о предоставлении кредита
                        предоставляется гораздо быстрее.

                        <h3>Заполните заявку на кредит</h3>
                        Как правильно заполнить форму?
                        Для того, чтобы банк связался с вами в кратчайшие сроки и предоставил вам условия денежного
                        кредита, заявка, которую вы предоставляете, должна быть заполнена без ошибок. Так что стоит
                        помнить? Прежде всего, не бойтесь давать свои реальные данные. Приложение должным образом
                        защищено, и информация, которая будет содержаться в нем, не будет использоваться для иных целей,
                        кроме контакта с банком.

                        Чтобы заполнить форму, просто используйте основную информацию, найденную на удостоверении
                        личности. Банк требует, чтобы вы указали свое имя, дату рождения и номер ИНН, кроме того, вы
                        должны заполнить разделы, в которых вам будет предложено ввести город, в котором вы проживаете,
                        сумму займа, на который вы подаете заявку, и номер телефона.

                        <h3>Конечная стоимость кредита</h3>
                        Какова фактическая стоимость кредита?

                        Фактическая годовая процентная ставка позволяет вам легко понять общую стоимость денежного
                        кредита. Банк обязан предоставить вам информацию о его конечной стоимости, но следует помнить,
                        что большинство учреждений предоставляют эти данные только по прямому запросу клиента.

                        Перед подписанием договора заемщик должен внимательно прочитать условия, и узнать конечную сумму
                        которую он заплатит. Благодаря этому вы сможете спланировать свой бюджет, зная, насколько высок
                        ежемесячный платеж по вашему обязательству.

                        Конечная стоимость кредита состоит из:

                        номинальная процентная ставка
                        комиссия
                        сбор за подготовку
                        страхование кредитов
                        Если вы хотите узнать общую стоимость денежного кредита, вы также должны учитывать
                        дополнительные сборы, связанные с другими продуктами. Если банк требует, чтобы у вас была
                        активная личная учетная запись — проверьте, не платите ли вы за нее.

                        <h3>Период кредитования</h3>
                        Как планировать погашение кредита?

                        Не только процентная ставка по долгу влияет на ваш комфорт в течение срока действия договора.
                        Помните, что при принятии решения о кредите, вы должны рассчитать время, за которое вы сможете
                        его погасить. И подумать об этом, прежде чем подавать заявку на получение кредита. Выберите
                        вариант, который вам больше подходит, и вам будет легче погасить кредит, даже легче чем вы
                        думаете.

                        Длительный период кредитования позволяет гибко отрегулировать погашение обязательства,
                        минимизируя ежемесячные взносы. Однако вы должны помнить, что чем дольше период, за который вы
                        возвращаете деньги банку, тем выше комиссия за услугу, которую вы будете платить. Тем не менее,
                        это решение, которое будет интересовать людей, которые хотят увеличить свою кредитоспособность
                        через более низкую сумму.

                        Более короткий срок погашения, несмотря на более высокие взносы, экономит ваши финансы. Чем
                        быстрее вы урегулируете свой долг, тем меньше заплатите комиссионных. Однако, чтобы позволить
                        вам быстро погасить кредит, вы должны иметь достаточно высокую кредитоспособность.

                        <h3>Равные или уменьшающиеся взносы</h3>
                        Как настроить взносы на свои возможности?

                        Подавляющее большинство кредитов предоставляется по умолчанию равными платежами. Клиенты редко
                        интересуются возможностью изменить этот вариант, хотя это возможно. Что стоит знать о различиях
                        в погашении этих платежей? Во-первых, равные взносы гораздо полезнее для людей, которые не
                        уверены, что они получат правильную кредитоспособность, чтобы получить разрешение на
                        предоставление кредита. Ежемесячные взносы в случае равных платежей остаются неизменными на
                        протяжении всего периода действия договора. Так что, легко точно прогнозировать и планировать
                        домашний бюджет.

                        Кредиты с уменьшающимися взносами, как их название говорит о снижении ставок, и что с каждым
                        платежом они становится меньше. Это означает, что первые платежи будут выше чем последующие, и
                        получение одобрения кредита будет более сложным, потому что требуется более высокий кредитный
                        рейтинг. Однако это отличное решение, если вы планируете быстрее оплачивать свой долг.

                        <h3>Досрочное погашение</h3>
                        Выгодно ли погасить задолженность досрочно?

                        Ваше финансовое положение позволяет вам вернуть кредит ранее? Вы можете уменьшить общую
                        стоимость кредита таким образом, и не будете платить проценты за переплаченный период. Однако не
                        всегда выгодно платить деньги до установленного в графике срока.

                        Банки, ожидающие возможных потерь, часто используют дополнительную комиссию, которая часто
                        превышает оставшиеся платежи, которые должны выплачиваться.

                        Однако на рынке есть предложения по кредитам наличными, которые не предусматривают
                        дополнительных сборов. Если вы не знаете, как выглядят условия в этом отношении, помимо
                        тщательного ознакомления с контрактом, вы можете развеять сомнения, поговорив с консультантом
                        банка.

                        <h3>Банк или кредитная компания</h3>
                        В чем разница между займом и кредитом банка?

                        Кредит наличными в любых целях, предоставляемых в банке, часто связан с услугами, предлагаемыми
                        кредитными организациями. В дополнение к возможности использования любых полученных денег и
                        быстрого доступа к наличным деньгам эти продукты отличаются практически всем.

                        Не банковский кредит предназначен для лица, которое по разным причинам не может получить
                        одобрение кредита у банка. Минимальные формальности также означают увеличение финансового риска
                        для кредитной компании. Это связано со значительным сокращением максимальной суммы
                        ответственности и более коротким периодом погашения. Кроме того, большинство кредитов, в отличие
                        от стандартных кредитов наличными, требуют погашения еженедельно, а не ежемесячных платежей. Не
                        банковские кредиты также имеют гораздо более высокие издержки, что связано с множеством
                        дополнительных сборов.

                        <h3>Кредитное соглашение</h3>
                        На что обратить внимание при подписании кредитного соглашения?

                        Прежде чем подписывать контракт, тщательно проанализируйте все его условия. Подписание
                        подготовленных документов означает, что вы согласны со всеми его предположениями. Многие
                        подписывают контракт с банком, не читая его. Получается что, позже клиенты часто не понимают
                        много условий банка.

                        Если у вас есть какие-либо сомнения относительно критериев получения и уплаты обязательства,
                        спросите сотрудников банка без каких-либо сомнений. Их обязанность заключается в том, чтобы
                        прояснить условия, которые недвусмысленно прописаны в договоре для вас.

                        В частности, договор стоит проверить даже несколько раз. Прежде всего, внимательно просмотрите
                        финансовые условия. Помимо процентной ставки, проверьте также дополнительные сборы, в том числе
                        связанные с досрочным погашением кредита или стоимостью, по которой лица опаздывающие с оплатой
                        взноса, подвергаются штрафным санкциям.

                        <h3>Проблемы с погашением</h3>
                        Что делать в сложной финансовой ситуации?

                        Вы обязаны погасить кредит, но у вас проблемы с бюджетом, и вы не знаете, как справиться с такой
                        ситуацией? Сообщите банку, в котором вы погашаете долг. Учреждение, безусловно, будет открыто
                        для возможности помочь вам. Чаще всего предлагается продлить срок погашения, благодаря которому
                        вы сократите свои ежемесячные расходы, также можно приостановить погашение или воспользоваться
                        кредитными каникулами.

                        Если, с другой стороны, у вас есть более одного долга, и общая сумма платежей превышает ваши
                        финансовые возможности, вы можете решить консолидировать свои ссуды.

                        Помните, что вам необходимо предпринять соответствующие шаги, прежде чем вы перестанете
                        регулярно погашать кредит в соответствии с графиком.

                        <h3>Высокая кредитоспособность</h3>
                        Как повысить кредитоспособность?

                        При подаче заявки на получение кредита вы должны иметь достаточную кредитоспособность. Ваш доход
                        должен гарантировать, что вы сможете погасить свой долг, чтобы у банка не было слишком большого
                        риска.

                        Если у вас есть кредитная карта, откажитесь от нее. Даже если вы не используете ее, она снижает
                        ваши возможности, поскольку это еще одно обязательство для банка, например, кредит или другой
                        кредит.

                        Вы должны заплатить несколько платежей за другое обязательство? Прежде чем подать заявку на
                        следующий долг, оплатите его. Прежде всего, избегайте ситуаций, в которых вы опаздываете с
                        ежемесячным взносом.

                        Вы также можете получить более высокий кредитный рейтинг, подав заявку на ссуду на более крупные
                        суммы. Чем дольше срок погашения, тем ниже ежемесячная плата. Поэтому это один из самых простых
                        способов избежать отказа банка.

                        <h3>Бюро кредитных историй</h3>
                        Позаботьтесь о своей кредитной истории.

                        Бюро кредитной информации собирает сообщения о погашенных долгах, а также те, которые не были
                        урегулированы. Это означает, что вы можете увеличить свой авторитет и потерять его. Используйте
                        БКИ для создания хорошей кредитной истории, благодаря этому, получить выгодный кредит будет
                        намного проще.

                        Люди, которые раньше не использовали кредиты, могут подумать о том, чтобы взять небольшой
                        кредит, который легко заплатить, чтобы повысить свой рейтинг. Хорошим решением является также
                        покупка небольшого оборудования в рассрочку и своевременное его погашение.</p></div>
                </div>
                <div class="va-slice va-slice-1"><h3 class="va-title" style="margin-top:0.85em">Ставки по
                        потребительским кредитам</h3>
                    <div class="va-content" id="va-2"><p>Текст</p></div>
                </div>
                <div class="va-slice va-slice-1"><h3 class="va-title" style="margin-top:0.85em">Выгодные потребительские
                        кредиты</h3>
                    <div class="va-content" id="va-3"><p>Текст</p></div>
                </div>
            </div>
        </div>
    </div>
</div></div></div>
<?php get_footer(); ?>
<div class="_2Jclz _2fZko _1odi0 _3m0xh" id="overlay" style="display:none;">
    <div class="ud9DQ _21AWC _2t8V0"></div>
    <div class="_2TVkK  _3BjeW _3dfdz _2Muap">
        <section class="_2tiCJ">
            <div>
                <div class="_20lkO">
                    <div class="_282xc">
                        <div class="_321bS">
                            <div class="_1FhHf"><i class="fa fa-times-circle-o" aria-hidden="true"
                                                   style="font-size:40px" onclick="close_dop()"></i></div>
                            <div class="_1bMAp">
                                <div class="_1-qkH">
                                    <div class="_261bl">
                                        <div class="smgEc _1MiQb">Все условия</div>
                                        <div class="_3W8tQ">
                                            <div class="_1rc8I" data-test="ui-group">
                                                <div class="_2xdGi _1wJD0">Выберите сумму кредита</div>
                                                <div class="_2J6fq">
                                                    <div class="_1Mbqb _2futP TNUZk" data-test="ui-slider-input">
                                                        <div class="_3_n91 AePXT _1fswf"
                                                             data-test="ui-slider-input-input">
                                                            <div class="_1DCZo"><input id="price_dop"
                                                                                       class="_2ARmF _2qJ6u _3uy56 _3I6R2"
                                                                                       name="price_dop"
                                                                                       onkeypress="price_change_dop()">
                                                                <div id="slider-range_dop"></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="_1rc8I " data-test="ui-group">
                                                <div class="_2xdGi _1wJD0">Валюта</div>
                                                <div class="_2J6fq">
                                                    <div class="_1Mbqb _2futP TNUZk" data-test="ui-slider-input">
                                                        <div class="_3_n91 AePXT _1fswf"
                                                             data-test="ui-slider-input-input">
                                                            <div class="_1DCZo"><input id="cur_currency_dop" type="text"
                                                                                       readonly="" autocomplete="off"
                                                                                       autocorrect="off"
                                                                                       autocapitalize="off"
                                                                                       spellcheck="off"
                                                                                       class="_2ARmF _2qJ6u _16cFN "
                                                                                       value="&#8381;"
                                                                                       onclick="select_cur_dop();">
                                                                <ul id="currency_dop" class=" _2cR3J"
                                                                    data-test="ui-select-values">
                                                                    <li value="RUB" class="_3NNjg"
                                                                        data-test="ui-menu-item"
                                                                        onclick="select_currency_dop('&#8381;')"><i
                                                                                class="fa fa-rub"
                                                                                aria-hidden="true"></i></li>
                                                                    <li value="USD" class="_3NNjg"
                                                                        data-test="ui-menu-item"
                                                                        onclick="select_currency_dop('&#36;')"><i
                                                                                class="fa fa-usd"
                                                                                aria-hidden="true"></i></li>
                                                                    <li value="EUR" class="_3NNjg"
                                                                        data-test="ui-menu-item"
                                                                        onclick="select_currency_dop('&euro;')"><i
                                                                                class="fa fa-eur"
                                                                                aria-hidden="true"></i></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="_1rc8I " data-test="ui-group">
                                                <div class="_2xdGi _1wJD0"> Срок</div>
                                                <div class="_2J6fq">
                                                    <div class="_1Mbqb _2futP TNUZk" data-test="ui-slider-input">
                                                        <div class="_3_n91 AePXT _1fswf"
                                                             data-test="ui-slider-input-input">
                                                            <div class="_1DCZo"><input id="cur_period_dop" type="text"
                                                                                       readonly="" autocomplete="off"
                                                                                       autocorrect="off"
                                                                                       autocapitalize="off"
                                                                                       spellcheck="off"
                                                                                       class="_2ARmF _2qJ6u"
                                                                                       role="input" value="3 года"
                                                                                       onclick="select_period_dop();">
                                                                <ul id="period_dop" class="_3IKDE _2cR3J"
                                                                    data-test="ui-select-values">
                                                                    <li value="P1M" label="1 месяц" class="_3NNjg"
                                                                        data-test="ui-menu-item" data-reactid="205"
                                                                        onclick="select_period_srok_dop('1 месяц')">1
                                                                        месяц
                                                                    </li>
                                                                    <li value="P3M" label="3 месяца" class="_3NNjg "
                                                                        data-test="ui-menu-item"
                                                                        onclick="select_period_srok_dop('3 месяца')">3
                                                                        месяца
                                                                    </li>
                                                                    <li value="P6M" label="6 мес¤цев" class="_3NNjg"
                                                                        data-test="ui-menu-item"
                                                                        onclick="select_period_srok_dop('6 месяцев')">6
                                                                        месяцев
                                                                    </li>
                                                                    <li value="P9M" label="9 месяцев" class="_3NNjg"
                                                                        data-test="ui-menu-item"
                                                                        onclick="select_period_srok_dop('9 месяцев')">9
                                                                        месяцев
                                                                    </li>
                                                                    <li value="P1Y" label="1 год" class="_3NNjg"
                                                                        data-test="ui-menu-item"
                                                                        onclick="select_period_srok_dop('1 год')">1 год
                                                                    </li>
                                                                    <li value="P2Y" label="2 года" class="_3NNjg"
                                                                        data-test="ui-menu-item"
                                                                        onclick="select_period_srok_dop('2 года')">2
                                                                        года
                                                                    </li>
                                                                    <li value="P3Y" label="3 года" class="_3NNjg"
                                                                        data-test="ui-menu-item"
                                                                        onclick="select_period_srok_dop('3 года')">3
                                                                        года
                                                                    </li>
                                                                    <li value="P4Y" label="4 года" class="_3NNjg"
                                                                        data-test="ui-menu-item"
                                                                        onclick="select_period_srok_dop('4 года')">4
                                                                        года
                                                                    </li>
                                                                    <li value="P5Y" label="5 лет" class="_3NNjg"
                                                                        data-test="ui-menu-item" data-reactid="213"
                                                                        onclick="select_period_srok_dop('5 лет')">5 лет
                                                                    </li>
                                                                    <li value="P6Y" label="6 лет" class="_3NNjg"
                                                                        data-test="ui-menu-item" data-reactid="214"
                                                                        onclick="select_period_srok_dop('6 лет')">6 лет
                                                                    </li>
                                                                    <li value="P7Y" label="7 лет" class="_3NNjg"
                                                                        data-test="ui-menu-item"
                                                                        onclick="select_period_srok_dop('7 лет')">7 лет
                                                                    </li>
                                                                    <li value="P8Y" label="8 лет" class="_3NNjg"
                                                                        data-test="ui-menu-item"
                                                                        onclick="select_period_srok('8 лет')">8 лет
                                                                    </li>
                                                                    <li value="P9Y" label="9 лет" class="_3NNjg"
                                                                        data-test="ui-menu-item"
                                                                        onclick="select_period_srok_dop('9 лет')">9 лет
                                                                    </li>
                                                                    <li value="P10Y" label="10 лет" class="_3NNjg"
                                                                        data-test="ui-menu-item"
                                                                        onclick="select_period_srok_dop('10 лет')">10
                                                                        лет
                                                                    </li>
                                                                    <li value="P15Y" label="15 лет" class="_3NNjg"
                                                                        data-test="ui-menu-item"
                                                                        onclick="select_period_srok_dop('15 лет')">15
                                                                        лет
                                                                    </li>
                                                                    <li value="P20Y" label="20 лет" class="_3NNjg"
                                                                        data-test="ui-menu-item"
                                                                        onclick="select_period_srok_dop('20 лет')">20
                                                                        лет
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="_1rc8I " data-test="ui-group">
                                                <div class="_2xdGi _1wJD0">Ваш город</div>
                                                <div class="_2J6fq">
                                                    <div class="_1Mbqb _2futP TNUZk" data-test="ui-slider-input">
                                                        <div class="_3_n91 AePXT _1fswf"
                                                             data-test="ui-slider-input-input">
                                                            <div class="_1DCZo"><input id="cur_city_dop" type="text"
                                                                                       class="_2ARmF _2qJ6u" value=""
                                                                                       onchange="change_city();Get_PotrKr();">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="_1rc8I " data-test="ui-group">
                                                <div data-test="ui-select" class="_129hA">
                                                    <div class="_2xdGi _1wJD0">Цель</div>
                                                    <div class="_2J6fq">
                                                        <div class="_1Mbqb _2futP TNUZk" data-test="ui-slider-input">
                                                            <div class="_3_n91 AePXT _1fswf"
                                                                 data-test="ui-slider-input-input">
                                                                <div class="_1DCZo"><input id="cur_target" type="text"
                                                                                           readonly=""
                                                                                           class="_2ARmF _2qJ6u _16cFN"
                                                                                           value="Любая"
                                                                                           onclick="select_cur_target();">
                                                                    <ul id="target" class=" _2cR3J"
                                                                        data-test="ui-select-values">
                                                                        <li value="Любая" class="_3NNjg"
                                                                            data-test="ui-menu-item"
                                                                            onclick="select_target('Любая')">Любая
                                                                        </li>
                                                                        <li value="Рефинансирование" class="_3NNjg"
                                                                            data-test="ui-menu-item"
                                                                            onclick="select_target('Рефинансирование')">
                                                                            Рефинансирование
                                                                        </li>
                                                                        <li value="Ремонт" class="_3NNjg"
                                                                            data-test="ui-menu-item"
                                                                            onclick="select_target('Ремонт')">Ремонт
                                                                        </li>
                                                                        <li value="Обучение" class="_3NNjg"
                                                                            data-test="ui-menu-item"
                                                                            onclick="select_target('Обучение')">Обучение
                                                                        </li>
                                                                        </li>
                                                                        <li value="Развитие личного подсобного хозяйства"
                                                                            class="_3NNjg" data-test="ui-menu-item"
                                                                            onclick="select_target('Развитие личного подсобного хозяйства')">
                                                                            Развитие личного подсобного хозяйства
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="_1rc8I">
                                                <div data-test="ui-select" class="_129hA">
                                                    <div class="_3_n91 _1e74P _1fswf" data-test="ui-select-input"><label
                                                                class="_3CBLq _1wJD0">Залог</label>
                                                        <div class="_1DCZo "><input id="zalog_cur" type="text"
                                                                                    readonly="" autocomplete="off"
                                                                                    autocorrect="off"
                                                                                    autocapitalize="off"
                                                                                    spellcheck="off"
                                                                                    class="_2ARmF _2qJ6u _16cFN"
                                                                                    role="input" value="Неважно"
                                                                                    onclick="zalog_select()">
                                                            <div class="_2k11- _2V6_I _3E_jV SVDVr _2Z7K9"
                                                                 data-test="ui-select-input-icon">
                                                                <svg class="SdEDi">
                                                                    <use xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                         xlink:href="#arrow-down-thin"></use>
                                                                </svg>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <ul id="zalog" class="_3IKDE _2cR3J" data-test="ui-select-values">
                                                        <li value="Неважно" label="Неважно" class="_3NNjg _3R8Y8 _2Karn"
                                                            data-test="ui-menu-item" onclick="select_zalog('Неважно')">
                                                            Неважно
                                                        </li>
                                                        <li value="Без залога" label="Без залога" class="_3NNjg _3R8Y8"
                                                            data-test="ui-menu-item"
                                                            onclick="select_zalog('Без залога')">Без залога
                                                        </li>
                                                        <li value="Залог имеющейся недвижимости"
                                                            label="Залог имеющейся недвижимости" class="_3NNjg _3R8Y8"
                                                            data-test="ui-menu-item"
                                                            onclick="select_zalog('Залог имеющейся недвижимости')">Залог
                                                            имеющейся недвижимости
                                                        </li>
                                                        <li value="Залог имеющегося ТС" label="Залог имеющегося ТС"
                                                            class="_3NNjg _3R8Y8" data-test="ui-menu-item"
                                                            onclick="select_zalog('Залог имеющегося ТС')">Залог
                                                            имеющегося ТС
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="_1rc8I">
                                                <div data-test="ui-select" class="_129hA">
                                                    <div class="_3_n91 _1e74P _1fswf" data-test="ui-select-input"><label
                                                                class="_3CBLq _1wJD0">Поручительство</label>
                                                        <div class="_1DCZo "><input id="cur_poruch" type="text"
                                                                                    readonly="" autocomplete="off"
                                                                                    autocorrect="off"
                                                                                    autocapitalize="off"
                                                                                    spellcheck="off"
                                                                                    class="_2ARmF _2qJ6u _16cFN"
                                                                                    role="input" value="Неважно"
                                                                                    onclick="select_cur_poruch();">
                                                            <div class="_2k11- _2V6_I _3E_jV SVDVr _2Z7K9"
                                                                 data-test="ui-select-input-icon">
                                                                <svg class="SdEDi">
                                                                    <use xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                         xlink:href="#arrow-down-thin"></use>
                                                                </svg>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <ul id="poruch" class="_3IKDE _2cR3J" data-test="ui-select-values">
                                                        <li value="Неважно" label="Неважно" class="_3NNjg _3R8Y8 _2Karn"
                                                            data-test="ui-menu-item" onclick="select_poruch('Неважно')">
                                                            Неважно
                                                        </li>
                                                        <li value="Без поручителей" label="Без поручителей"
                                                            class="_3NNjg _3R8Y8" data-test="ui-menu-item"
                                                            onclick="select_poruch('Без поручителей')">Без поручителей
                                                        </li>
                                                        <li value="Требуется поручитель" label="Требуется поручитель"
                                                            class="_3NNjg _3R8Y8" data-test="ui-menu-item"
                                                            onclick="select_poruch('Требуется поручитель')">Требуется
                                                            поручитель
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="_1rc8I">
                                                <div data-test="ui-select" class="_129hA">
                                                    <div class="_3_n91 _1e74P _1fswf" data-test="ui-select-input"><label
                                                                class="_3CBLq _1wJD0">Подтверждение дохода</label>
                                                        <div class="_1DCZo "><input id="cur_podtv_dohod" type="text"
                                                                                    readonly="" autocomplete="off"
                                                                                    autocorrect="off"
                                                                                    autocapitalize="off"
                                                                                    spellcheck="off"
                                                                                    class="_2ARmF _2qJ6u _16cFN"
                                                                                    role="input" value="Любое"
                                                                                    onclick="select_cur_podtv_dohod();">
                                                            <div class="_2k11- _2V6_I _3E_jV SVDVr _2Z7K9"
                                                                 data-test="ui-select-input-icon">
                                                                <svg class="SdEDi">
                                                                    <use xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                         xlink:href="#arrow-down-thin"></use>
                                                                </svg>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <ul id="podtv_dohod" class="_3IKDE _2cR3J"
                                                        data-test="ui-select-values">
                                                        <li value="Любое" label="Любое" class="_3NNjg _3R8Y8 _2Karn"
                                                            data-test="ui-menu-item"
                                                            onclick="select_podtv_dohod('Любое')">Любое
                                                        </li>
                                                        <li value="Без справок о доходах" label="Без справок о доходах"
                                                            class="_3NNjg _3R8Y8" data-test="ui-menu-item"
                                                            onclick="select_podtv_dohod('Без справок о доходах')">Без
                                                            справок о доходах
                                                        </li>
                                                        <li value="Справка в свободной форме"
                                                            label="Справка в свободной форме" class="_3NNjg _3R8Y8"
                                                            data-test="ui-menu-item"
                                                            onclick="select_podtv_dohod('Справка в свободной форме')">
                                                            Справка в свободной форме
                                                        </li>
                                                        <li value="Справка по форме банка"
                                                            label="Справка по форме банка" class="_3NNjg _3R8Y8"
                                                            data-test="ui-menu-item"
                                                            onclick="select_podtv_dohod('Справка по форме банка')">
                                                            Справка по форме банка
                                                        </li>
                                                        <li value="Справка 2-НДФЛ" label="Справка 2-НДФЛ"
                                                            class="_3NNjg _3R8Y8" data-test="ui-menu-item"
                                                            onclick="select_podtv_dohod('Справка 2-НДФЛ')">Справка
                                                            2-НДФЛ
                                                        </li>
                                                        <li value="Справка 3-НДФЛ" label="Справка 3-НДФЛ"
                                                            class="_3NNjg _3R8Y8" data-test="ui-menu-item"
                                                            onclick="select_podtv_dohod('Справка 3-НДФЛ')">Справка
                                                            3-НДФЛ
                                                        </li>
                                                        <li value="Справка из ПФР" label="Справка из ПФР"
                                                            class="_3NNjg _3R8Y8" data-test="ui-menu-item"
                                                            onclick="select_podtv_dohod('Справка из ПФР')">Справка из
                                                            ПФР
                                                        </li>
                                                        <li value="Выписка по счету" label="Выписка по счету"
                                                            class="_3NNjg _3R8Y8" data-test="ui-menu-item"
                                                            onclick="select_podtv_dohod('Выписка по счету')">Выписка по
                                                            счету
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="_1rc8I">
                                                <div data-test="ui-select" class="_129hA">
                                                    <div class="_3_n91 _1e74P _1fswf" data-test="ui-select-input"><label
                                                                class="_3CBLq _1wJD0">Форма выдачи</label>
                                                        <div class="_1DCZo "><input id="cur_form_vidach" type="text"
                                                                                    readonly="" autocomplete="off"
                                                                                    autocorrect="off"
                                                                                    autocapitalize="off"
                                                                                    spellcheck="off"
                                                                                    class="_2ARmF _2qJ6u _16cFN"
                                                                                    role="input" value="Любая"
                                                                                    onclick="select_cur_form_vidach()">
                                                            <div class="_2k11- _2V6_I _3E_jV SVDVr _2Z7K9"
                                                                 data-test="ui-select-input-icon">
                                                                <svg class="SdEDi">
                                                                    <use xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                         xlink:href="#arrow-down-thin"></use>
                                                                </svg>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <ul id="form_vidach" class="_3IKDE _2cR3J"
                                                        data-test="ui-select-values">
                                                        <li value="Любая" label="Любая" class="_3NNjg _3R8Y8 _2Karn"
                                                            data-test="ui-menu-item"
                                                            onclick="select_form_vidach('Любая')">Любая
                                                        </li>
                                                        <li value="Наличными" label="Наличными" class="_3NNjg _3R8Y8"
                                                            data-test="ui-menu-item"
                                                            onclick="select_form_vidach('Наличными')">Наличными
                                                        </li>
                                                        <li value="На карту" label="На карту" class="_3NNjg _3R8Y8"
                                                            data-test="ui-menu-item"
                                                            onclick="select_form_vidach('На карту')">На карту
                                                        </li>
                                                        <li value="На счет" label="На счет" class="_3NNjg _3R8Y8"
                                                            data-test="ui-menu-item"
                                                            onclick="select_form_vidach('На счет')">На счет
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="_1rc8I">
                                                <div data-test="ui-select" class="_129hA">
                                                    <div class="_3_n91 _1e74P _1fswf" data-test="ui-select-input"><label
                                                                class="_3CBLq _1wJD0">Срок рассмотрения</label>
                                                        <div class="_1DCZo "><input id="cur_srok_rasm" type="text"
                                                                                    readonly="" autocomplete="off"
                                                                                    autocorrect="off"
                                                                                    autocapitalize="off"
                                                                                    spellcheck="off"
                                                                                    class="_2ARmF _2qJ6u _16cFN"
                                                                                    role="input" value="Неважен"
                                                                                    onclick="select_cur_srok_rasm()">
                                                            <div class="_2k11- _2V6_I _3E_jV SVDVr _2Z7K9"
                                                                 data-test="ui-select-input-icon">
                                                                <svg class="SdEDi">
                                                                    <use xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                         xlink:href="#arrow-down-thin"></use>
                                                                </svg>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <ul id="srok_rasm" class="_3IKDE _2cR3J"
                                                        data-test="ui-select-values">
                                                        <li value="Неважен" label="Неважен" class="_3NNjg _3R8Y8 _2Karn"
                                                            data-test="ui-menu-item"
                                                            onclick="select_srok_rasm('Неважен')">Неважен
                                                        </li>
                                                        <li value="За 1 час" label="За 1 час" class="_3NNjg _3R8Y8"
                                                            data-test="ui-menu-item"
                                                            onclick="select_srok_rasm('За 1 час')">За 1 час
                                                        </li>
                                                        <li value="В течение 1 дня" label="В течение 1 дня"
                                                            class="_3NNjg _3R8Y8" data-test="ui-menu-item"
                                                            onclick="select_srok_rasm('В течение 1 дня')">В течение 1
                                                            дня
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="_1rc8I _1pC8g"><label id="label_strahov" class="_271MP"
                                                                              data-test="ui-checkbox"><input
                                                            id="strahov" type="checkbox" class="_13ChN"
                                                            onclick="select_strahov();"><span class="zDjae">Личное страхование заёмщика</span></label>
                                            </div>
                                        </div>
                                        <div class="_3W8tQ">
                                            <div class="_1rc8I">
                                                <div data-test="ui-select" class="_129hA">
                                                    <div class="_3_n91 _1e74P _1fswf" data-test="ui-select-input"><label
                                                                class="_3CBLq _1wJD0">Регистрация</label>
                                                        <div class="_1DCZo "><input id="cur_registr" type="text"
                                                                                    readonly="" autocomplete="off"
                                                                                    autocorrect="off"
                                                                                    autocapitalize="off"
                                                                                    spellcheck="off"
                                                                                    class="_2ARmF _2qJ6u _16cFN"
                                                                                    role="input" value="Не важно"
                                                                                    onclick="select_registr()">
                                                            <div class="_2k11- _2V6_I _3E_jV SVDVr _2Z7K9"
                                                                 data-test="ui-select-input-icon">
                                                                <svg class="SdEDi">
                                                                    <use xmlns:xlink="http://www.w3.org/1999/xlНе важноink"
                                                                         xlink:href="#arrow-down-thin"></use>
                                                                </svg>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <ul id="registr" class="_3IKDE _2cR3J" data-test="ui-select-values">
                                                        <li value="Не важно" label="Не важно"
                                                            class="_3NNjg _3R8Y8 _2Karn" data-test="ui-menu-item"
                                                            onclick="select_cur_registr('Не важно')">Не важно
                                                        </li>
                                                        <li value="Временная" label="Временная" class="_3NNjg _3R8Y8"
                                                            data-test="ui-menu-item"
                                                            onclick="select_cur_registr('Временная')">Временная
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="_1rc8I">
                                                <div class="_3_n91 _1fswf" data-test="ui-input"><label
                                                            class="_3CBLq _1wJD0">Возраст заемщика</label>
                                                    <div class="_1DCZo"><input id="cur_age" type="text"
                                                                               autocomplete="off" autocorrect="off"
                                                                               autocapitalize="off" spellcheck="off"
                                                                               class="_2ARmF _2qJ6u" role="input"
                                                                               value="" onchange="Get_PotrKr()"></div>
                                                </div>
                                            </div>
                                            <div class="_1rc8I">
                                                <div data-test="ui-select" class="_129hA">
                                                    <div class="_3_n91 _1e74P _1fswf" data-test="ui-select-input"><label
                                                                class="_3CBLq _1wJD0">Категория заёмщика</label>
                                                        <div class="_1DCZo "><input id="cur_category" type="text"
                                                                                    readonly="" autocomplete="off"
                                                                                    autocorrect="off"
                                                                                    autocapitalize="off"
                                                                                    spellcheck="off"
                                                                                    class="_2ARmF _2qJ6u _16cFN"
                                                                                    role="input" value="Неважно"
                                                                                    onclick="select_category()">
                                                            <div class="_2k11- _2V6_I _3E_jV SVDVr _2Z7K9"
                                                                 data-test="ui-select-input-icon">
                                                                <svg class="SdEDi">
                                                                    <use xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                         xlink:href="#arrow-down-thin"></use>
                                                                </svg>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <ul id="category" class="_3IKDE _2cR3J"
                                                        data-test="ui-select-values">
                                                        <li value="Неважно" label="Неважно" class="_3NNjg _3R8Y8 _2Karn"
                                                            data-test="ui-menu-item"
                                                            onclick="select_cur_category('Неважно')">Неважно
                                                        </li>
                                                        <li value="Бюджетные" label="Бюджетные" class="_3NNjg _3R8Y8"
                                                            data-test="ui-menu-item"
                                                            onclick="select_cur_category('Бюджетные')">Бюджетные
                                                        </li>
                                                        <li value="Предприниматели" label="Предприниматели"
                                                            class="_3NNjg _3R8Y8" data-test="ui-menu-item"
                                                            onclick="select_cur_category('Предприниматели')">
                                                            Предприниматели
                                                        </li>
                                                        <li value="Зарплатные клиенты" label="Зарплатные клиенты"
                                                            class="_3NNjg _3R8Y8" data-test="ui-menu-item"
                                                            onclick="select_cur_category('Зарплатные клиенты')">
                                                            Зарплатные клиенты
                                                        </li>
                                                        <li value="Клиенты банка" label="Клиенты банка"
                                                            class="_3NNjg _3R8Y8" data-test="ui-menu-item"
                                                            onclick="select_cur_category('Клиенты банка')">Клиенты банка
                                                        </li>
                                                        <li value="Особая категория" label="Особая категория"
                                                            class="_3NNjg _3R8Y8" data-test="ui-menu-item"
                                                            onclick="select_cur_category('Особая категория')">Особая
                                                            категория
                                                        </li>
                                                        <li value="Пенсионеры" label="Пенсионеры" class="_3NNjg _3R8Y8"
                                                            data-test="ui-menu-item"
                                                            onclick="select_cur_category('Пенсионеры')">Пенсионеры
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="_1rc8I">
                                                <div data-test="ui-select" class="_129hA">
                                                    <div class="_3_n91 _1e74P _1fswf" data-test="ui-select-input"><label
                                                                class="_3CBLq _1wJD0">Общий трудовой стаж</label>
                                                        <div class="_1DCZo "><input id="cur_stag" type="text"
                                                                                    readonly="" autocomplete="off"
                                                                                    autocorrect="off"
                                                                                    autocapitalize="off"
                                                                                    spellcheck="off"
                                                                                    class="_2ARmF _2qJ6u _16cFN"
                                                                                    role="input" value="Неважен"
                                                                                    onclick="select_stag()">
                                                            <div class="_2k11- _2V6_I _3E_jV SVDVr _2Z7K9"
                                                                 data-test="ui-select-input-icon">
                                                                <svg class="SdEDi">
                                                                    <use xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                         xlink:href="#arrow-down-thin"></use>
                                                                </svg>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <ul id="stag" class="_3IKDE _2cR3J" data-test="ui-select-values">
                                                        <li value="Неважен" label="Неважен" class="_3NNjg _3R8Y8 _2Karn"
                                                            data-test="ui-menu-item"
                                                            onclick="select_cur_stag('Неважен')">Неважен
                                                        </li>
                                                        <li value="Менее 1 года" label="Менее 1 года"
                                                            class="_3NNjg _3R8Y8" data-test="ui-menu-item"
                                                            onclick="select_cur_stag('Менее 1 года')">Менее 1 года
                                                        </li>
                                                        <li value="1 год и более" label="1 год и более"
                                                            class="_3NNjg _3R8Y8" data-test="ui-menu-item"
                                                            onclick="select_cur_stag('1 год и более')">1 год и более
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="_1rc8I">
                                                <div data-test="ui-select" class="_129hA">
                                                    <div class="_3_n91 _1e74P _1fswf" data-test="ui-select-input"><label
                                                                class="_3CBLq _1wJD0">Стаж на последнем месте</label>
                                                        <div class="_1DCZo "><input id="cur_stag_last" type="text"
                                                                                    readonly="" autocomplete="off"
                                                                                    autocorrect="off"
                                                                                    autocapitalize="off"
                                                                                    spellcheck="off"
                                                                                    class="_2ARmF _2qJ6u _16cFN"
                                                                                    role="input" value="Неважен"
                                                                                    onclick="select_stag_last()">
                                                            <div class="_2k11- _2V6_I _3E_jV SVDVr _2Z7K9"
                                                                 data-test="ui-select-input-icon">
                                                                <svg class="SdEDi">
                                                                    <use xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                         xlink:href="#arrow-down-thin"></use>
                                                                </svg>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <ul id="stag_last" class="_3IKDE _2cR3J"
                                                        data-test="ui-select-values">
                                                        <li value="Неважен" label="Неважен" class="_3NNjg _3R8Y8 _2Karn"
                                                            data-test="ui-menu-item"
                                                            onclick="select_cur_stag_last('Неважен')">Неважен
                                                        </li>
                                                        <li value="Менее 3 месяцев" label="Менее 3 месяцев"
                                                            class="_3NNjg _3R8Y8" data-test="ui-menu-item"
                                                            onclick="select_cur_stag_last('Менее 3 месяцев')">Менее 3
                                                            месяцев
                                                        </li>
                                                        <li value="От 3 до 6 месяцев" label="От 3 до 6 месяцев"
                                                            class="_3NNjg _3R8Y8" data-test="ui-menu-item"
                                                            onclick="select_cur_stag_last('От 3 до 6 месяцев')">От 3 до
                                                            6 месяцев
                                                        </li>
                                                        <li value="Более 6 месяцев" label="Более 6 месяцев"
                                                            class="_3NNjg _3R8Y8" data-test="ui-menu-item"
                                                            onclick="select_cur_stag_last('Более 6 месяцев')">Более 6
                                                            месяцев
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="_1rc8I _1pC8g"><label id="label_gr" class="_271MP"
                                                                              data-test="ui-checkbox"><input id="cur_gr"
                                                                                                             type="checkbox"
                                                                                                             class="_13ChN"
                                                                                                             value="0"
                                                                                                             readonly=""
                                                                                                             onclick="select_gr()"><span
                                                            class="zDjae">Не являюсь гражданином РФ</span></label></div>
                                        </div>
                                    </div>
                                    <div id="footer_dop_cr" class="zPvOY">
                                        <button class="_2sdWW _2OZ3R RaZ2S _3zDyU _3x77s" type="button"
                                                data-test="ui-button">Найдено 32 кредита
                                        </button>
                                        <button class="_2sdWW _2OZ3R _1VABv _3zDyU _3x77s _3Ldwp" type="button">Сбросить
                                            фильтры
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        </section>
    </div>
</div>
<script>
    jQuery(document).ready(function () {
        jQuery("._129hA-fx1").on("click", "button", function (event) {
            event.preventDefault();
            var id = jQuery(this).attr('href'),
                top = jQuery(id).offset().top;
            jQuery('body,html').animate({scrollTop: top}, 500);
        });
    });
</script>
<script src="<?= get_template_directory_uri(); ?>/assets/front/css/kredit_theme/js/table-sort-and-load-more-credits.js"></script>
<script>$(function () {
        $("#slider-range").slider({
            range: true,
            min: 1,
            max: 1500,
            values: [1, 500],
            step: 1,
            slide: function (event, ui) {
                $("#price").val(ui.values[1] * 1000);
                $("#slider-range_dop").slider("option", "values", [1, ui.values[1] * 1000]);
                document.getElementById('price_dop').value = ui.values[1] * 1000;
                Get_PotrKr();
            }
        });
        $("#price").val($("#slider-range").slider("values", 1) * 1000);
    });    </script>
<script>$(function () {
        $("#slider-range_dop").slider({
            range: true,
            min: 1,
            max: 1500,
            values: [1, 1500],
            step: 1,
            slide: function (event, ui) {
                $("#price_dop").val(ui.values[1] * 1000);
                $("#slider-range").slider("option", "values", [1, ui.values[1] * 1000]);
                document.getElementById('price').value = ui.values[1] * 1000;
                Get_PotrKr();
            }
        });
        $("#price_dop").val($("#slider-range_dop").slider("values", 1) * 1000);
    });    </script>
<script>        function show_dop() {
        $('#overlay').show();
    }
    function close_dop() {
        $('#overlay').hide();
    }
    function clear_dop() {
        $("#slider-range_dop").slider("option", "values", [1, 102]); //changeFX was 500
        $("#price_dop").val(100000); //changeFX was 500
        $("#slider-range").slider("option", "values", [1, 102]); //changeFX was 500
        $("#price").val(100000); //changeFX was 500
        $("#cur_period").val('3 года');
        $("#cur_period_dop").val('3 года');
        $("#cur_city_dop").val('');
        $("#zalog_cur").val('Неважно');
        $("#cur_target").val('Любая');
        $("#cur_poruch").val('Неважно');
        $("#cur_podtv_dohod").val('Любое');
        $("#cur_form_vidach").val('Любая');
        $("#cur_srok_rasm").val('Неважен');
        $("#cur_registr").val('Не важно');
        $("#cur_category").val('Неважно');
        $("#cur_stag").val('Неважен');
        $("#cur_stag_last").val('Неважен');
        select_currency("₽");
        Get_PotrKr();
    }            </script>
<script type="text/javascript">            $(function () {
        l1 = document.getElementById('va-1').innerHTML.length;
        l2 = document.getElementById('va-2').innerHTML.length;
        l3 = document.getElementById('va-3').innerHTML.length;
        maxl = l1;
        if (l2 > l1) maxl = l2;
        if (l3 > l2) maxl = l3;

        if (document.body.clientWidth < 768) {
            k = 54;
            v = 25;
            vh = 100;

        }
        else {
            k = 116;
            v = 30;
            vh = 160;

        }
        $('#va-accordion').vaccordion({
            visibleSlices: 5,
            accordionH: vh + (maxl / k) * 30,
            expandedHeight: maxl,
            expandedHeight1: vh + (l1 / k) * v,
            expandedHeight2: vh + (l2 / k) * v,
            expandedHeight3: vh + (l3 / k) * v,

            animOpacity: 1,
            contentAnimSpeed: 2000,
            lengthSlide: maxl / k
        });
    });        </script>
<script> function select_cur_dop() {
        if ($("#currency_dop").css('visibility') == 'hidden') {
            $("#currency_dop").css({'visibility': 'visible', 'overflow-x': 'visible', 'overflow-y': 'visible'});
        } else {
            $("#currency_dop").css({'visibility': 'hidden', 'overflow-x': 'hidden', 'overflow-y': 'hidden'});
        }
    } </script>
<script>function select_cur() {
        if ($("#currency").css('visibility') == 'hidden') {
            $("#currency").css({'visibility': 'visible', 'overflow-x': 'visible', 'overflow-y': 'visible'});
        } else {
            $("#currency").css({'visibility': 'hidden', 'overflow-x': 'hidden', 'overflow-y': 'hidden'});
        }
    } </script>
<script>function select_cur_target() {
        if ($("#target").css('visibility') == 'hidden') {
            $("#target").css({'visibility': 'visible', 'overflow-x': 'visible', 'overflow-y': 'visible'});
        } else {
            $("#target").css({'visibility': 'hidden', 'overflow-x': 'hidden', 'overflow-y': 'hidden'});
        }
    }</script>
<script>function select_cur_poruch() {
        if ($("#poruch").css('visibility') == 'hidden') {
            $("#poruch").css({'visibility': 'visible', 'overflow-x': 'visible', 'overflow-y': 'visible'});
        } else {
            $("#poruch").css({'visibility': 'hidden', 'overflow-x': 'hidden', 'overflow-y': 'hidden'});
        }
    }</script>
<script>function select_cur_form_vidach() {
        if ($("#form_vidach").css('visibility') == 'hidden') {
            $("#form_vidach").css({'visibility': 'visible', 'overflow-x': 'visible', 'overflow-y': 'visible'});
        } else {
            $("#form_vidach").css({'visibility': 'hidden', 'overflow-x': 'hidden', 'overflow-y': 'hidden'});
        }
    }</script>
<script>function select_cur_srok_rasm() {
        if ($("#srok_rasm").css('visibility') == 'hidden') {
            $("#srok_rasm").css({'visibility': 'visible', 'overflow-x': 'visible', 'overflow-y': 'visible'});
        } else {
            $("#srok_rasm").css({'visibility': 'hidden', 'overflow-x': 'hidden', 'overflow-y': 'hidden'});
        }
    }</script>
<script>function select_cur_podtv_dohod() {
        if ($("#podtv_dohod").css('visibility') == 'hidden') {
            $("#podtv_dohod").css({'visibility': 'visible', 'overflow-x': 'visible', 'overflow-y': 'visible'});
        } else {
            $("#podtv_dohod").css({'visibility': 'hidden', 'overflow-x': 'hidden', 'overflow-y': 'hidden'});
        }
    }</script>
<script>function select_category() {
        if ($("#category").css('visibility') == 'hidden') {
            $("#category").css({'visibility': 'visible', 'overflow-x': 'visible', 'overflow-y': 'visible'});
        } else {
            $("#category").css({'visibility': 'hidden', 'overflow-x': 'hidden', 'overflow-y': 'hidden'});
        }
    }</script>
<script>function select_stag() {
        if ($("#stag").css('visibility') == 'hidden') {
            $("#stag").css({'visibility': 'visible', 'overflow-x': 'visible', 'overflow-y': 'visible'});
        } else {
            $("#stag").css({'visibility': 'hidden', 'overflow-x': 'hidden', 'overflow-y': 'hidden'});
        }
    }</script>
<script>function select_stag_last() {
        if ($("#stag_last").css('visibility') == 'hidden') {
            $("#stag_last").css({'visibility': 'visible', 'overflow-x': 'visible', 'overflow-y': 'visible'});
        } else {
            $("#stag_last").css({'visibility': 'hidden', 'overflow-x': 'hidden', 'overflow-y': 'hidden'});
        }
    }</script>
<script>function select_registr() {
        if ($("#registr").css('visibility') == 'hidden') {
            $("#registr").css({'visibility': 'visible', 'overflow-x': 'visible', 'overflow-y': 'visible'});
        } else {
            $("#registr").css({'visibility': 'hidden', 'overflow-x': 'hidden', 'overflow-y': 'hidden'});
        }
    }</script>
<script>function select_period() {
        if ($("#period").css('visibility') == 'hidden') {
            $("#period").css({'visibility': 'visible', 'overflow-x': 'visible', 'overflow-y': 'visible'});
        } else {
            $("#period").css({'visibility': 'hidden', 'overflow-x': 'hidden', 'overflow-y': 'hidden'});
        }
    }</script>
<script>function select_period_dop() {
        if ($("#period_dop").css('visibility') == 'hidden') {
            $("#period_dop").css({'visibility': 'visible', 'overflow-x': 'visible', 'overflow-y': 'visible'});
        } else {
            $("#period_dop").css({'visibility': 'hidden', 'overflow-x': 'hidden', 'overflow-y': 'hidden'});
        }
    }</script>
<script>function zalog_select() {
        if ($("#zalog").css('visibility') == 'hidden') {
            $("#zalog").css({'visibility': 'visible', 'overflow-x': 'visible', 'overflow-y': 'visible'});
        } else {
            $("#zalog").css({'visibility': 'hidden', 'overflow-x': 'hidden', 'overflow-y': 'hidden'});
        }
    }</script>
<script>function price_change_dop() {
        a = document.getElementById('price_dop').value;
        if (a >= 10000 && a <= 15000000) {
            $("#slider-range_dop").slider("option", "values", [1, a / 10000]);
            $("#slider-range").slider("option", "values", [1, a / 10000]);
            Get_PotrKr();
        }
    }</script>
<script>function price_change() {
        a = document.getElementById('price').value;
        if (a >= 10000 && a <= 15000000) {
            $("#slider-range").slider("option", "values", [1, a / 10000]);
            $("#slider-range_dop").slider("option", "values", [1, a / 10000]);
            Get_PotrKr();
        }
    }</script>
<script>function select_currency(a) {
        $("#cur_currency").val(a);
        $("#cur_currency_dop").val(a);
        $("#currency").css({'visibility': 'hidden', 'overflow-x': 'hidden', 'overflow-y': 'hidden'});
        Get_PotrKr();
    }
    function select_currency_dop(a) {
        $("#cur_currency_dop").val(a);
        $("#cur_currency").val(a);
        $("#currency_dop").css({'visibility': 'hidden', 'overflow-x': 'hidden', 'overflow-y': 'hidden'});
        Get_PotrKr();
    }
    function select_poruch(a) {
        $("#cur_poruch").val(a);
        $("#poruch").css({'visibility': 'hidden', 'overflow-x': 'hidden', 'overflow-y': 'hidden'});
        Get_PotrKr();
    }
    function select_podtv_dohod(a) {
        $("#cur_podtv_dohod").val(a);
        $("#podtv_dohod").css({'visibility': 'hidden', 'overflow-x': 'hidden', 'overflow-y': 'hidden'});
        Get_PotrKr();
    }
    function select_form_vidach(a) {
        $("#cur_form_vidach").val(a);
        $("#form_vidach").css({'visibility': 'hidden', 'overflow-x': 'hidden', 'overflow-y': 'hidden'});
        Get_PotrKr();
    }
    function select_srok_rasm(a) {
        $("#cur_srok_rasm").val(a);
        $("#srok_rasm").css({'visibility': 'hidden', 'overflow-x': 'hidden', 'overflow-y': 'hidden'});
        Get_PotrKr();
    }
    function select_cur_registr(a) {
        $("#cur_registr").val(a);
        $("#registr").css({'visibility': 'hidden', 'overflow-x': 'hidden', 'overflow-y': 'hidden'});
        Get_PotrKr();
    }
    function select_cur_category(a) {
        $("#cur_category").val(a);
        $("#category").css({'visibility': 'hidden', 'overflow-x': 'hidden', 'overflow-y': 'hidden'});
        Get_PotrKr();
    }
    function select_cur_stag(a) {
        $("#cur_stag").val(a);
        $("#stag").css({'visibility': 'hidden', 'overflow-x': 'hidden', 'overflow-y': 'hidden'});
        Get_PotrKr();
    }
    function select_cur_stag_last(a) {
        $("#cur_stag_last").val(a);
        $("#stag_last").css({'visibility': 'hidden', 'overflow-x': 'hidden', 'overflow-y': 'hidden'});
        Get_PotrKr();
    }</script>
<script>function select_zalog(a) {
        $("#zalog_cur").val(a);
        $("#zalog").css({'visibility': 'hidden', 'overflow-x': 'hidden', 'overflow-y': 'hidden'});
        Get_PotrKr();
    }</script>
<script>function select_target(a) {
        $("#cur_target").val(a);
        $("#target").css({'visibility': 'hidden', 'overflow-x': 'hidden', 'overflow-y': 'hidden'});
        Get_PotrKr();
    }</script>
<script>function select_period_srok(a) {
        $("#cur_period").val(a);
        $("#cur_period_dop").val(a);
        $("#period").css({'visibility': 'hidden', 'overflow-x': 'hidden', 'overflow-y': 'hidden'});
        Get_PotrKr();
    }</script>
<script>function select_period_srok_dop(a) {
        $("#cur_period_dop").val(a);
        $("#cur_period").val(a);
        $("#period_dop").css({'visibility': 'hidden', 'overflow-x': 'hidden', 'overflow-y': 'hidden'});
        Get_PotrKr();
    }</script>
<script>function toggle_menu(i) {
        el = document.getElementsByClassName('-link');
        $(".-link").removeClass("-active");
        $('#navigation').attr('data-current', i);
        /*el[i].addClass('-active');*/
    }</script>
<script>function select_strahov() {
        var c = document.querySelector('#strahov');
        if (c.checked) {
            $("#label_strahov").addClass('_3QFEG');
        } else {
            $("#label_strahov").removeClass('_3QFEG');
        }
        Get_PotrKr();
    }
    function select_gr() {
        var gr = document.querySelector('#cur_gr');
        if (gr.checked) {
            $("#label_gr").addClass('_3QFEG');
        } else {
            $("#label_gr").removeClass('_3QFEG');
        }
        Get_PotrKr();
    }</script>
<script>function Get_PotrKr() {
        $.ajax({
            url: "https://xn-----6kccbugwdmdcrtidm5a5byn.xn--p1ai/wp-content/themes/customizr/select_potr_kr.php",
            type: "POST",
            error: function (response) {
                $(".status").html(response.status + "<br>" + response.msg);
                console.log("Ошибка");
            },
            success: function (response) {
                res = jQuery.parseJSON(response);

                if ($('#navigation').attr('data-current', '1')) {
                    res.sort(function (a, b) {
                        return a.rating < b.rating;
                    });
                    res.sort();
                    console.log(res);
                }
                else {
                    res.sort(function (a, b) {
                        return a.name > b.name;
                    });
                    res.sort();
                    console.log(res);
                }
                var data = {"bank_offers": res};
                console.log(data);
                change(data);
                console.log("Успешно загрузили данные");
            },
        });
    }
    Get_PotrKr();</script>