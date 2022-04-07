<?
/* Регистрируем Специальности и таксономию для них
-----------------------------------------------*/
function wpt_register_calc_style() {

	 
	  wp_register_style( 'calc', get_template_directory_uri() . '/calc.css' );
    wp_enqueue_style( 'calc' );

}
add_action( 'wp_enqueue_scripts', 'wpt_register_calc_style' );


/* Регистрируем Специальности и таксономию для них
-----------------------------------------------*/
add_action('init', 'specialty');
function specialty()
{
    $labels = array(
        'name' => 'Специальности',
        'singular_name' => 'специальность',
        'add_new' => 'Добавить специальность',
        'add_new_item' => 'Добавить новую специальность',
        'edit_item' => 'Редактировать специальность',
        'new_item' => 'Новая специальность',
        'view_item' => 'Посмотреть специальность',
        'search_items' => 'Найти специальность',
        'not_found' =>  'специальностей не найдено',
        'not_found_in_trash' => 'В корзине специальностей не найдено',
        'parent_item_colon' => '',
        'menu_name' => 'Специальности'
    );

    $args = array(
        'labels' => $labels,
        'public' => true,
        'publicly_queryable' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'query_var' => true,
        'rewrite' => true,
        'capability_type' => 'post',
        'has_archive' => true,
        'hierarchical' => false,
        'menu_position' => 5,
        'supports' => array('title', 'editor', 'thumbnail', 'comments'),
		 'taxonomies' => array('post_tag'),
        'taxonomies' => array('accessories')
    );
    register_post_type('specialty', $args);
}

function post_tag_for_spec(){
	unregister_taxonomy_for_object_type( 'pidrozdil', 'specialty');
} 
add_action( 'init', 'post_tag_for_spec' );

// Создаем новую таксономию для специальностей
add_action('init', 'create_galuz_taxonomies', 0);

function create_galuz_taxonomies()
{
    $labels = array(
        'name' => _x('галузь специальностей', 'taxonomy general name'),
        'singular_name' => _x('галузь специальности', 'taxonomy singular name'),
        'search_items' =>  __('Найти галузь специальностей'),
        'all_items' => __('Все галузь специальностей'),
        'parent_item' => __('Родительская галузь специальности'),
        'parent_item_colon' => __('Родительская галузь'),
        'edit_item' => __('Родительская галузь'),
        'update_item' => __('Обновить галузь'),
        'add_new_item' => __('Добавить новую галузь'),
        'new_item_name' => __('Название новой галузь специальностей'),
        'menu_name' => __('галузь специальностей'),
    );

    register_taxonomy('galuz', array('specialty'), array(
        'hierarchical' => true,
        'labels' => $labels,
        'show_ui' => true,
        'query_var' => true,
        'rewrite' => array('slug' => 'galuz'),
    ));
}

// Создаем новую таксономию для специальностей
add_action('init', 'create_specialty_taxonomies', 0);

function create_specialty_taxonomies()
{
    $labels = array(
        'name' => _x('Категории специальностей', 'taxonomy general name'),
        'singular_name' => _x('Категория специальности', 'taxonomy singular name'),
        'search_items' =>  __('Найти категорию специальностей'),
        'all_items' => __('Все категории специальностей'),
        'parent_item' => __('Родительская категория специальности'),
        'parent_item_colon' => __('Родительская категория'),
        'edit_item' => __('Родительская категория'),
        'update_item' => __('Обновить катгорию'),
        'add_new_item' => __('Добавить новую катгорию'),
        'new_item_name' => __('Название новой категории специальностей'),
        'menu_name' => __('Категории специальностей'),
    );

    register_taxonomy('accessories', array('specialty'), array(
        'hierarchical' => true,
        'labels' => $labels,
        'show_ui' => true,
        'query_var' => true,
        'rewrite' => array('slug' => 'accessories'),
    ));
	$labels = array(
        'name' => _x('Структурное подразделение', 'taxonomy general name'),
        'singular_name' => _x('Структурное подразделение', 'taxonomy singular name'),
        'search_items' =>  __('Найти Структурное подразделение'),
        'all_items' => __('Все Структурные подразделения'),
        'parent_item' => __('Родитель Структурное подразделение'),
        'parent_item_colon' => __('Родительская категория СП'),
        'edit_item' => __('Родитель СП'),
        'update_item' => __('Обновить  СП'),
        'add_new_item' => __('Добавить новое СП'),
        'new_item_name' => __('Название нового СП специальностей'),
        'menu_name' => __('Структурное подразделение'),
    );

    register_taxonomy('struct_spec', array('specialty'), array(
        'hierarchical' => true,
        'labels' => $labels,
        'show_ui' => true,
        'query_var' => true,
        'rewrite' => array('slug' => 'struct_spec'),
    ));
}


function specialty_meta_box()
{
    add_meta_box(
        'specialty_meta_box', // Идентификатор(id)
        'ЗНО', // Заголовок области с мета-полями(title)
        'show_my_specialty_metabox', // Вызов(callback)
        'specialty', // Где будет отображаться наше поле, в нашем случае в разделе 
        'normal',
        'high'
    );
    add_meta_box(
        'wiki_meta_box', // Идентификатор(id)
        'Опис wiki', // Заголовок области с мета-полями(title)
        'show_op_wiki', // Вызов(callback)
        'specialty', // Где будет отображаться наше поле, в нашем случае в разделе 
        'normal',
        'high'
    );

	
	remove_meta_box( 'expirationdatediv', 'specialty', 'side' );

}


/*факультет*/
$op_struct=array(
array(
	'name'        => 'Пользователи',
	'id'          => 'user',
	'type'        => 'user',
	'field_type'  => 'checkbox',
	'inline'      => true,
)
	);
	
	
	function show_op_struct()
{
    global $op_struct; // Обозначим наш массив с полями глобальным
    //print_r($specialty_meta_fields);
    global $post;  // Глобальный $post для получения id создаваемого/редактируемого поста
    // Выводим скрытый input, для верификации. Безопасность прежде всего!
    echo '<input type="hidden" name="custom_meta_box_nonce" value="' . wp_create_nonce(basename(__FILE__)) . '" />';

    // Начинаем выводить таблицу с полями через цикл
    echo '<table class="form-table">';
    foreach ($op_wiki as $field) {
        // Получаем значение если оно есть для этого поля
        $meta = get_post_meta($post->ID, $field['id'], true);
        // Начинаем выводить таблицу
        echo '
        <tr>
            <th><label for="' . $field['id'] . '">' . $field['label'] . '</label></th>
            <td>';
        switch ($field['type']) {
                //checkbox
            case 'checkbox':
                echo '
            <input type="checkbox" name="' . $field['id'] . '" id="' . $field['id'] . '" ', $meta ? ' checked="checked"' : '', '/>
            <label for="' . $field['id'] . '">' . $field['desc'] . '</label>';
                echo $meta;
                break;

                // Текстовое поле
            case 'text':
                echo '
            <input type="text" name="' . $field['id'] . '" id="' . $field['id'] . '" value="' . $meta . '" size="30" />
            <br /><span class="description">' . $field['desc'] . '</span>';
                break;
		}
		 echo '</td></tr>';
}
echo '</table>';
	
}
/********************************/


add_action('add_meta_boxes', 'specialty_meta_box'); // Запускаем функцию  

$predmeti=array(  // Параметры, всплывающие данные
            'all' => $arrayName = array('label' => 'все', 'value' => '0'),
			 'geography' => array(
                'label' => 'Географія',  // Название поля
                'value' => 'Географія'  // Значение
            ),
            'mathematics' => array(
                'label' => 'Математика',  // Название поля
                'value' => 'Математика'  // Значение
            ),
            'chemistry' => array(
                'label' => 'Хімія',  // Название поля
                'value' => 'Хімія'  // Значение
            ),
			 'physics' => array(
                'label' => 'Фізика',  // Название поля
                'value' => 'Фізика'  // Значение
            ),
           
            'biology' => array(
                'label' => 'Біологія',  // Название поля
                'value' => 'Біологія'  // Значение
            ),
			 'history' => array(
                'label' => 'Історія України',  // Название поля
                'value' => 'Історія України'  // Значение
            ),
			  'foreignLanguage' => array(
                'label' => 'Іноземна мова<sup>**</sup>',  // Название поля
                'value' => 'Іноземна мова'  // Значение
            )           
        );
		
		$vtor_ob_pr=array(
            'all' => $arrayName = array('label' => 'все', 'value' => '0'),
            // Параметры, всплывающие данные
            'mathematics' => array(
                'label' => 'Математика',  // Название поля
                'value' => 'Математика'  // Значение
            ),

            'history' => array(
                'label' => 'Історія України',  // Название поля
                'value' => 'Історія України'  // Значение
            ),
            'biology' => array(
                'label' => 'Біологія',  // Название поля
                'value' => 'Біологія'  // Значение
            ),
            'geography' => array(
                'label' => 'Географія',  // Название поля
                'value' => 'Географія'  // Значение
            ),
            'foreignLanguage' => array(
                'label' => 'Іноземна мова<sup>**</sup>',  // Название поля
                'value' => 'Іноземна мова'  // Значение
            ),
            'physics' => array(
                'label' => 'Фізика',  // Название поля
                'value' => 'Фізика'  // Значение
            )
        );
		$perv_ob_pr=array(
		 'ukr' => array(
                'label' => 'Українська мова',  // Название поля
                'value' => 'Українська мова'  // Значение
            ),

            'ukr_lit' => array(
                'label' => 'Українська мова та література',  // Название поля
                'value' => 'Українська мова та література'  // Значение
            )
		
		);
		
$op_wiki=array(
array(
        'label' => 'ОП на wiki ПЗСО',
        'desc'  => '',
        'id'    => 'op_pzso', // даем идентификатор.
        'type'  => 'text'  // Указываем тип поля.
    ),

	   array(
        'label' => 'ОП на wiki магістр',
        'desc'  => '',
        'id'    => 'op_mag', // даем идентификатор.
        'type'  => 'text'  // Указываем тип поля.
    )
	);
	
	
	function show_op_wiki()
{
    global $op_wiki; // Обозначим наш массив с полями глобальным
    //print_r($specialty_meta_fields);
    global $post;  // Глобальный $post для получения id создаваемого/редактируемого поста
    // Выводим скрытый input, для верификации. Безопасность прежде всего!
    echo '<input type="hidden" name="custom_meta_box_nonce" value="' . wp_create_nonce(basename(__FILE__)) . '" />';

    // Начинаем выводить таблицу с полями через цикл
    echo '<table class="form-table">';
    foreach ($op_wiki as $field) {
        // Получаем значение если оно есть для этого поля
        $meta = get_post_meta($post->ID, $field['id'], true);
        // Начинаем выводить таблицу
        echo '
        <tr>
            <th><label for="' . $field['id'] . '">' . $field['label'] . '</label></th>
            <td>';
        switch ($field['type']) {
                //checkbox
            case 'checkbox':
                echo '
            <input type="checkbox" name="' . $field['id'] . '" id="' . $field['id'] . '" ', $meta ? ' checked="checked"' : '', '/>
            <label for="' . $field['id'] . '">' . $field['desc'] . '</label>';
                echo $meta;
                break;

                // Текстовое поле
            case 'text':
                echo '
            <input type="text" name="' . $field['id'] . '" id="' . $field['id'] . '" value="' . $meta . '" size="30" />
            <br /><span class="description">' . $field['desc'] . '</span>';
                break;
		}
		 echo '</td></tr>';
}
echo '</table>';
	
}
function save_op_wiki($post_id)
{
    global $op_wiki;  // Массив с нашими полями


    // проверяем наш проверочный код
    if (!wp_verify_nonce($_POST['custom_meta_box_nonce'], basename(__FILE__)))
        return $post_id;
    // Проверяем авто-сохранение
    if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE)
        return $post_id;
    // Проверяем права доступа  
    if ('specialty' == $_POST['post_type']) {
        if (!current_user_can('edit_page', $post_id))
            return $post_id;
    } elseif (!current_user_can('edit_post', $post_id)) {
        return $post_id;
    }

    // Если все отлично, прогоняем массив через foreach
    foreach ($op_wiki as $field) {
        $old = get_post_meta($post_id, $field['id'], true); // Получаем старые данные (если они есть), для сверки
        $new = $_POST[$field['id']];

        if ($new && $new != $old) {  // Если данные новые
            update_post_meta($post_id, $field['id'], $new); // Обновляем данные
        } elseif ('' == $new && $old) {
            delete_post_meta($post_id, $field['id'], $old); // Если данных нету, удаляем мету.
        }
    } // end foreach  
}
add_action('save_post', 'save_op_wiki');
	

$specialty_meta_fields = array(
 array(
        'label' => 'Бакалавр',
        'desc'  => 'Бакалавр',
        'id'    => 'bak', // даем идентификатор.
        'type' => 'checkbox'  // Указываем тип поля.		
    ),

    array(
        'label' => 'Особлива підтримка',
        'desc'  => 'Особлива підтримка',
        'id'    => 'op', // даем идентификатор.
        'type' => 'checkbox'  // Указываем тип поля.		
    ),
	 array(
        'label' => 'Особлива підтримка1',
        'desc'  => 'Особлива підтримка1',
        'id'    => 'op1', // даем идентификатор.
        'type' => 'checkbox'  // Указываем тип поля.		
    ),
	
    array(
        'label' => 'Небюджетна пропозиція',
        'desc'  => 'Небюджетна пропозиція',
        'id'    => 'np', // даем идентификатор.
        'type' => 'checkbox'  // Указываем тип поля.		
    ),

    array(
        'label' => 'Ссылка на файл',
        'desc'  => '',
        'id'    => 'order', // даем идентификатор.
        'type'  => 'file'  // Указываем тип поля.
    ),
    array(
        'label' => 'Ссылка на видео',
        'desc'  => '',
        'id'    => 'video', // даем идентификатор.
        'type'  => 'text'  // Указываем тип поля.
    ),
	    
	 array(
        'label' => 'Первый обязательный',
        'desc'  => 'Выберите тип.',
        'id'    => 'select_ukm',
        'type'  => 'select',
        'options' => $perv_ob_pr
    ),
    array(
        'label' => 'Второй обязательный',
        'desc'  => 'Выберите тип.',
        'id'    => 'select_ob',
        'type'  => 'select',
        'options' => $vtor_ob_pr
    ),
	

    array(
        'label' => 'Первый на выбор',
        'desc'  => 'Выберите тип.',
        'id'    => 'select_1v',
        'type'  => 'select',
        'options' => $predmeti
    ),
    array(
        'label' => 'Второй на выбор',
        'desc'  => 'Выберите тип.',
        'id'    => 'select_2v',
        'type'  => 'select',
        'options' => $predmeti
    ),
	  array(
        'label' => 'Третий на выбор',
        'desc'  => 'Выберите тип.',
        'id'    => 'select_3v',
        'type'  => 'select',
        'options' => $predmeti
    ),
	  array(
        'label' => 'Четвертій на выбор',
        'desc'  => 'Выберите тип.',
        'id'    => 'select_4v',
        'type'  => 'select',
        'options' => $predmeti
    ),
	array(
        'label' => 'Пятий на выбор',
        'desc'  => 'Выберите тип.',
        'id'    => 'select_5v',
        'type'  => 'select',
        'options' => $predmeti
    ),
	array(
        'label' => 'Шостий на выбор',
        'desc'  => 'Выберите тип.',
        'id'    => 'select_6v',
        'type'  => 'select',
        'options' => $predmeti
    )
);

function show_my_specialty_metabox()
{
    global $specialty_meta_fields; // Обозначим наш массив с полями глобальным
    //print_r($specialty_meta_fields);
    global $post;  // Глобальный $post для получения id создаваемого/редактируемого поста
    // Выводим скрытый input, для верификации. Безопасность прежде всего!
    echo '<input type="hidden" name="custom_meta_box_nonce" value="' . wp_create_nonce(basename(__FILE__)) . '" />';

    // Начинаем выводить таблицу с полями через цикл
    echo '<table class="form-table">';
    foreach ($specialty_meta_fields as $field) {
        // Получаем значение если оно есть для этого поля
        $meta = get_post_meta($post->ID, $field['id'], true);
        // Начинаем выводить таблицу
        echo '
        <tr>
            <th><label for="' . $field['id'] . '">' . $field['label'] . '</label></th>
            <td>';
        switch ($field['type']) {
                //checkbox
            case 'checkbox':
                echo '
            <input type="checkbox" name="' . $field['id'] . '" id="' . $field['id'] . '" ', $meta ? ' checked="checked"' : '', '/>
            <label for="' . $field['id'] . '">' . $field['desc'] . '</label>';
                echo $meta;
                break;

                // Текстовое поле
            case 'text':
                echo '
            <input type="text" name="' . $field['id'] . '" id="' . $field['id'] . '" value="' . $meta . '" size="30" />
            <br /><span class="description">' . $field['desc'] . '</span>';
                break;

                // Список
            case 'select':
                echo '<select name="' . $field['id'] . '" id="' . $field['id'] . '">';
                foreach ($field['options'] as $option) {
                    echo '<option', $meta == $option['value'] ? ' selected="selected"' : '', ' value="' . $option['value'] . '">' . $option['label'] . '</option>';
                }
                echo '
            </select>
            <br /><span class="description">' . $field['desc'] . '</span>';
                break;

            case 'file': { ?>
                <!-- Файл, подключенный из медиа -->
                <div>
                    <a style="display:<?= $meta ? 'inline' : 'none' ?>" href="<?= $meta ?>" class="custom_file_prev"><?= $meta ?></a>
                    <button style="display:block;margin:5px 0" class="custom_upload_file_button button">Выберите файл</button>
                    <input type="hidden" name="<?= $field['id'] ?>" id="<?= $field['id'] ?>" value="<?= $meta ?>" />
                    <a style="display:<?= $meta ? 'inline' : 'none' ?>" href="#" class="custom_clear_file_button">Убрать файл</a>
                    <br clear="all" /><span class="description"><?= $field['desc'] ?></span>
                </div>

                <script type="text/javascript">
                    jQuery(function($) {
                        /*
                         * Select/Upload image(s) event
                         */
                        $('body').on('click', '.custom_upload_file_button', function(e) {
                            e.preventDefault();

                            var button = $(this),
                                custom_uploader = wp.media({
                                    title: 'Додати файл',
                                    library: {
                                        //type: 'pdf'
                                    },
                                    button: {
                                        text: 'Вибрати' // button label text
                                    },
                                    multiple: false // for multiple image selection set to true
                                }).on('select', function() { // it also has "open" and "close" events 
                                    var attachment = custom_uploader.state().get('selection').first().toJSON();
                                    $(button).prev().attr('href', attachment.url).html(attachment.url).show();
                                    $(button).next().val(attachment.url);
                                    $(button).next().next().show();
                                })
                                .open();
                        });

                        $('body').on('click', '.custom_clear_file_button', function(e) {
                            e.preventDefault();
                            $(this).prev().prev().prev().hide();
                            $(this).prev().val('');
                            $(this).hide();
                        });
                    });
                </script>

                <?php break;
            }
    }
    echo '</td></tr>';
}
echo '</table>';
}
function save_my_red_meta_fields1($post_id)
{
    global $specialty_meta_fields;  // Массив с нашими полями


    // проверяем наш проверочный код
    if (!wp_verify_nonce($_POST['custom_meta_box_nonce'], basename(__FILE__)))
        return $post_id;
    // Проверяем авто-сохранение
    if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE)
        return $post_id;
    // Проверяем права доступа  
    if ('specialty' == $_POST['post_type']) {
        if (!current_user_can('edit_page', $post_id))
            return $post_id;
    } elseif (!current_user_can('edit_post', $post_id)) {
        return $post_id;
    }

    // Если все отлично, прогоняем массив через foreach
    foreach ($specialty_meta_fields as $field) {
        $old = get_post_meta($post_id, $field['id'], true); // Получаем старые данные (если они есть), для сверки
        $new = $_POST[$field['id']];

        if ($new && $new != $old) {  // Если данные новые
            update_post_meta($post_id, $field['id'], $new); // Обновляем данные
        } elseif ('' == $new && $old) {
            delete_post_meta($post_id, $field['id'], $old); // Если данных нету, удаляем мету.
        }
    } // end foreach  
}
add_action('save_post', 'save_my_red_meta_fields1');
