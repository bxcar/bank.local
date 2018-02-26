// jQuery( document ).ready(function() {
    function sort_data(cart, key) {

        //cart.sort(function(a, b) { return a.name > b.name; }); cart.sort();


        return cart;
    }
    function change(cart) {
        console.log("Показываем таблицу");

        var sum_credit = $("#price").val();
        var srok_credit = $("#cur_period").val();

        var sc = 0;

        switch (srok_credit) {
            case '1 месяц':
                sc = 30;
                term = 1;
                break;
            case '3 месяц':
                sc = 90;
                term = 3;
                break;
            case '6 месяц':
                sc = 180;
                term = 6;
                break;

            case '9 месяц':
                sc = 270;
                term = 9;
                break;
            case '1 год':
                sc = 372;
                term = 12;
                break;
            case '2 года':
                sc = 744;
                term = 24;
                break;
            case '3 года':
                sc = 1116;
                term = 36;
                break;
            case '4 года':
                sc = 1488;
                term = 48;
                break;
            case '5 лет':
                sc = 1860;
                term = 60;
                break;
            case '6 лет':
                sc = 2232;
                term = 72;
                break;
            case '7 лет':
                sc = 2604;
                term = 84;
                break;
            case '8 лет':
                sc = 3000;
                term = 96;
                break;
            case '9 лет':
                sc = 3348;
                term = 108;
                break;
            case '10 лет':
                term = 120;
                sc = 3720;
                break;
            case '15 лет':
                sc = 5580;
                term = 180;
                break;
            case '20 лет':
                sc = 7440;
                term = 240;
                break;

        }

        var c = document.querySelector('#strahov');
        var g = document.querySelector('#cur_gr');
        path_theme = document.getElementById('id_theme').value;
        currency_credit = document.getElementById('cur_currency').value;
        cur_target = document.getElementById('cur_target').value;
        cur_slpr = document.getElementById('zalog_cur').value;
        cur_guarantee = document.getElementById('cur_poruch').value;
        cur_spravka = document.getElementById('cur_podtv_dohod').value;
        cur_form_vidach = document.getElementById('cur_form_vidach').value;
        cur_srok_rasm = document.getElementById('cur_srok_rasm').value;

        cur_registr = document.getElementById('cur_registr').value;
        cur_agestart = document.getElementById('cur_age').value;
        cur_category = document.getElementById('cur_category').value;
        cur_stag = document.getElementById('cur_stag').value;
        cur_stag_last = document.getElementById('cur_stag_last').value;

        cur_city = document.getElementById('cur_city_dop').value;


        r = ['₽', '$', '€'];
        v = 0;

        switch (currency_credit) {
            case r[0]:
                v = 0;
                break;
            case r[1]:
                v = 1;
                break;
            case r[2]:
                v = 2;
                break;

        }

        var l = cart.bank_offers.length;

        var table = "<ul class='' >";
        var kol = 0;
        for (i = 0; i <= l - 1; i++) {

            var min_sum = Number(cart.bank_offers[i].offers[0].amount.min);
            var max_sum = Number(cart.bank_offers[i].offers[0].amount.max);
            var min_per = Number(cart.bank_offers[i].offers[0].term.min);
            var max_per = Number(cart.bank_offers[i].offers[0].term.max);
            var rate = Number(cart.bank_offers[i].rate);
            var rating = Number(cart.bank_offers[i].rating);

            var cu_ = Number(cart.bank_offers[i].cu);
            var target_ = cart.bank_offers[i].target;
            var slpr_ = cart.bank_offers[i].slpr;
            var guarantee_ = cart.bank_offers[i].guarantee;
            var spravka_ = cart.bank_offers[i].spravka;
            var form_vidach_ = cart.bank_offers[i].form_vidach;
            var srok_rasm_ = cart.bank_offers[i].srok_rasm;
            var city_ = cart.bank_offers[i].city;
            var strahov_ = cart.bank_offers[i].strahov;
            var registr_ = cart.bank_offers[i].registr;
            var agestart_ = Number(cart.bank_offers[i].agestart);
            var category_ = cart.bank_offers[i].category;
            var stag_ = cart.bank_offers[i].stag;
            var stag_last_ = cart.bank_offers[i].stag_last;
            var strahov_ = cart.bank_offers[i].strahov;
            var gr_ = cart.bank_offers[i].gr;


            console.log(target_);

            str_v = "Р";
            if (cu_ == 0) {

                str_v = "Р";

            }
            else if (cu_ == 1) {

                str_v = "$";

            }
            else if (cu_ == 2) {
                str_v = "€";

            }
            else
                str_v = "Р";


            logo = cart.bank_offers[i].logo;
            title = cart.bank_offers[i].title;
            alt = cart.bank_offers[i].alt;
            name = cart.bank_offers[i].name;
            str = "Данные в базе:  " + "Валюта: " + cu_ + " Цель: " + target_ + " Поручительство: " + guarantee_ + " Регистрация: " + registr_ + " Залог: " + slpr_ + " Подтверждение дохода: " + spravka_ + " Форма выдачи: " + form_vidach_ + "Срок рассмотрения: " + srok_rasm_ + " Категория: " + category_ + " Стаж: " + stag_ + "Стаж на последнем: " + stag_last_;


            str1 = "Данные поиска:  " + "Валюта: " + v + " Цель: " + cur_target + " Поручительство: " + cur_guarantee + " Регистрация: " + cur_registr + " Залог: " + cur_slpr + " Подтверждение дохода: " + cur_spravka + " Форма выдачи: " + cur_form_vidach + "Срок рассмотрения: " + cur_srok_rasm + " Категория: " + cur_category + " Стаж: " + cur_stag + "Стаж на последнем: " + cur_stag_last;


            if (strahov_)
                h = true;
            else
                h = false;

            if (gr_)
                j = true;
            else
                j = false;


            console.log(str);
            console.log(str1);
            console.log(title);
            console.log(alt);

            if (min_sum <= sum_credit && max_sum >= sum_credit && min_per <= sc && max_per >= sc && cu_ == v && (agestart_ <= cur_agestart ) && (cur_target == target_ || cur_target == 'Любая' || cur_target == '')
                && (cur_slpr == slpr_ || cur_slpr == 'Неважно' ) && (cur_guarantee == guarantee_ || cur_guarantee == 'Неважно' ) && (cur_spravka == spravka_ || cur_spravka == 'Любое' ) && (cur_form_vidach == form_vidach_ || cur_form_vidach == 'Любая' ) && (cur_srok_rasm == srok_rasm_ || cur_srok_rasm == 'Неважен' ) && (cur_registr == registr_ || cur_registr == 'Не важно' ) && (cur_category == category_ || cur_category == 'Неважно' ) && (cur_stag == stag_ || cur_stag == 'Неважен' ) && (cur_stag_last == stag_last_ || cur_stag_last == 'Неважен' ) && (c.checked == h) && (g.checked == j) && (cur_city == city_ || cur_city == "")) {
                kol += 1;
                var p = rate / 1200;//сотая доля годового процента по кредиту

                var a = p * Math.pow((1 + p), term) / (Math.pow((1 + p), term) - 1); //высчитываем коэффициент
                a = (Math.ceil(a * 10000)) / 10000; //округляем полученное значение

                var month_p = a * sum_credit;
                var total_p = term * month_p;
                var over_p = total_p - sum_credit;


                month_p = Math.ceil(month_p);
                over_p = -Math.ceil(over_p);


                str = cart.bank_offers[i].logo + " выдаст " + sum_credit + " сумму кредита c процентной ставкой " + rate;

                console.log(str);

                table = table + "<li class='_1EEzS' data-rate='" + rate + "' data-pay='" + month_p + "' data-overpay='" + over_p + "'><div class='TJbldd'><div class='_2FLAd' >" +
                    "<div class='wqub- aqIhJ _3vjgr'><div class='_2Owx8 _18vXl' >" +
                    "<div class='OjtGY'><div class='ma2lQ _2I_mJ' ><div class='_34wto' >" +
                    "<div class='_3a6CO _2VQfE _21AWC _2t8V0 _1aKxh'> " +
                    "<img class='G-yzO _3UTBm' src='" + logo +
                    "' title='" +

                    title
                    + "' alt='" +

                    alt
                    + "' >" +
                    "<div class='rating hidden-xs'><div class='vote-wrap'><div class='vote-hover' style='width:" +

                    rating * 16

                    + "px'><div class='vote-block'><div class='vote-stars' style='width:" +

                    rating * 16

                    + "px'></div><div class='vote-active' ></div></div></div><div class='vote-result'></div></div></div> </div>" +
                    "<br></div></div></div></div><div class='_2Owx8 _18vXl JlrsH _1yNBU'><div class='OjtGY sgnWK'>" +
                    "<div class='ma2lQ _2I_mJ'>" +
                    "<div class='TJbCk uaHd9 _3YiJZ _1IV07' style='width:300px;'>" +
                    name +


                    "</div> <div class='OjtGY sgnWK'><div class='ma2lQ _2I_mJ'>" +
                    "<div class='TJbCk _11Oua _3YiJZ _1IV07 hidden-xs'>от <span class='_2BVob'>" +
                    rate +
                    "% </span> </div><div class='_1pSh9 hidden-xs'>Ставка в год</div></div></div></div>" +
                    "</div></div><div class='_2Owx8 _18vXl'><div class='OjtGY sgnWK'><div class='ma2lQ _2I_mJ'>" +
                    "<div class='TJbCk _11Oua _3YiJZ _1IV07 hidden-xs'  style='margin-top:30px;'>" +
                    month_p +


                    "<span class='currency-symbol'> " +
                    str_v
                    + " /мес.</span></div><div class='_1pSh9' style='/*margin-bottom:-110px;*/'>" +
                    "Платеж</div></div></div></div><div class='_2Owx8 _18vXl'><div class='OjtGY sgnWK'>" +
                    "<div class='ma2lQ _2I_mJ'><div class='TJbCk _11Oua _3YiJZ _1IV07'  style='margin-top:30px;'>" +
                    over_p +

                    "<span class='currency-symbol'></span></div><div class='_1pSh9'  style='/*margin-bottom:-110px;*/'>" +
                    "Переплата</div></div></div></div><div class='_2Owx8 _18vXl _30A4I'><div class='OjtGY' >" +
                    "<div class='ma2lQ _37Nkr' ><div ><div class='_3ktnw _36BEl' ><a style='display:none;' target='_blank' >" +
                    "Сравнить</a></div><a target='_blank' class='_2sdWW _1AAND RaZ2S _3x77s'  data-test='ui-button' >" +
                    "<span class='' >Перейти</span></a></div></div></div></div></div></div></div><div class='_3ZJAJ'><div class='_20fBJ'><div class='_1Nnoa _1wJD0'>Ставка</div><div class='mvsgY _3YiJZ _1IV07'>от" + rate
                    + "%</div></div><div class='_20fBJ'><div class='_1Nnoa _1wJD0'>Платеж</div><div class='mvsgY _3YiJZ _1IV07'>" + month_p +
                    "<span class='currency-symbol'>" + str_v + "</span>/мес</div></div></div><div class='_3ZJAJ'><div class='_20fBJ'><div class='_2fowT _36BEl I8VA_' data-test='n=show-group'><span class='zlZmW'>Сравнить</span><svg class='_2HEu9'><use xmlns:xlink='http://www.w3.org/1999/xlink' xlink:href='#arrow-down-thin'></use></svg></div></div><div class='_20fBJ'><div><a target='_blank' class='_2sdWW _1AAND RaZ2S _3x77s' href='' data-test='ui-button'><span class=''>Перейти</span></a></div></div></div></li>";

            }
        }
        table = table + "</ul>";
        footer_dop = "<button class='_2sdWW _2OZ3R RaZ2S _3zDyU _3x77s' type='button' data-test='ui-button' onclick='close_dop()'>Найдено " + kol + " </button><button  class='_2sdWW _2OZ3R _1VABv _3zDyU _3x77s' type='button' data-test='ui-button' onclick='clear_dop()'>Сбросить фильтры</button>";
        document.getElementById("list_bank").innerHTML = table;
        document.getElementById("footer_dop_cr").innerHTML = footer_dop
    }
// });
