 <?php
 /*Формуємо масив з вибірковими сертифікатами*/
 $stack = array();
 for($i=1;$i<7;$i++)
 {	$sel=get_post_custom_values('select_'.$i.'v', $post->ID)[0]."<br>";
	array_push($stack, $sel);
 }
 $sel_v3= count($stack); /*підраховуємо кількість елементів в цьому масиві*/

 
            // Предметы специальности: (украинский), второй обязательный:
            $select1Ob = get_post_custom_values('select_ukm', $post->ID)[0];
			 $select2Ob = get_post_custom_values('select_ob', $post->ID)[0];
            // третий: один из двух на выбор
          /*  $select1v = get_post_custom_values('select_1v', $post->ID)[0];
            $select2v = get_post_custom_values('select_2v', $post->ID)[0];
			 $select3v = get_post_custom_values('select_3v', $post->ID)[0];
            $select4v = get_post_custom_values('select_4v', $post->ID)[0];
			 $select5v = get_post_custom_values('select_5v', $post->ID)[0];
            $select6v = get_post_custom_values('select_6v', $post->ID)[0];*/
			 $video = substr(get_post_custom_values('video', $post->ID)[0],17);
			 
            // Получаем op (особлива підтримка) предмета (true|false).
            $op = get_post_custom_values('op', $post->ID)[0];
			// Получаем np (особлива підтримка) предмета (true|false).
            $np = get_post_custom_values('np', $post->ID)[0];
			$op1 = get_post_custom_values('op1', $post->ID)[0];
			if ($np=="on"): $text="<p class='cmpscr__label'><span style='color:maroon; font-weight:700'>Небюджетна конкурсна пропозиція</span> – вступники рекомендуються до зарахування тільки на місця за кошти фізичних та/або юридичних осіб</p> ";	endif;	
            ?>

            <script type="text/javascript">
                // Перемещаем данные из php в js. Для этого создаем условно
                // приватные глобальные js переменные, которые затем могут
                // использоваться в скрипте формы в *.js файле. 
                var __competitionScore__op__ = <?= $op ? 'true' : 'false' ?>;
				 var __competitionScore__op1__ = <?= $op1 ? 'true' : 'false' ?>;
				var __competitionScore__np__ = <?= $np ? 'true' : 'false' ?>;
            </script>
					<h3 class="cmpscr__title" style="padding-left:0">Обчислити Конкурсний бал</h3>
                <div class="cmpscr__field">
				<p class="cmpscr__label cmpscr__label--title">Зазначте у відповідних полях отримані бали зовнішнього незалежного оцінювання з конкурсних предметів</p>
							<div class="table-row">
								<div class="div___back">
								<span class="cmpscr__label_big">Перший конкурсний предмет <br>(обов'язковий)</span>
									<p class="cmpscr__two-column" >
									<span class="cmpscr__label" ><span id="cmpscr-p1-title"> <?$short = get_post_custom_values ('select_ukm', $post->ID ) ;?>	
						<?if (!empty($short[0])): echo $short[0];else:echo"Конкурсна пропозиція не обрана"; endif;?></span></span>
									<span tooltip="Введіть отримані Вами бали сертифікату з конкурсного предмету" flow="down"><input id="cmpscr-p1" type="text" class="cmpscr__input"  ></span>
									</p>
									 <div id="cmpscr-err-p1" class="cmpscr__label cmpscr__error" style="display:none">
										Поле повинно містити ціле число від 100 до 200.
										</div>
								</div>
								<div class="">
						<span class="plus">+</span>
						</div>
								<div class="div___back">
								<span class="cmpscr__label_big">Другий конкурсний предмет<br> (обов'язковий)</span>
											 <p class="cmpscr__two-column">
										<span class="cmpscr__label" >
											<span id="cmpscr-p2-title"> <?$short1 = get_post_custom_values ('select_ob', $post->ID ) ;?>	
						<?if (!empty($short1[0])): echo $short1[0]; else:echo"Конкурсна пропозиція не обрана"; endif;?></span>
										</span>
										<span tooltip="Введіть отримані Вами бали сертифікату з конкурсного предмету" flow="down"><input id="cmpscr-p2" type="text" class="cmpscr__input" ></span>
									</p>
									<div id="cmpscr-err-p2" class="cmpscr__label cmpscr__error" style="display:none">
										Поле повинно містити ціле число від 100 до 200.
									</div>
								</div>
								<div class="">
						<span class="plus">+</span>
						</div>
								<div class="div___back">
								<span class="cmpscr__label_big">Третій конкурсний предмет <br>(на вибір)</span>
										<p class="cmpscr__two-column">
										<span class="cmpscr__label" >
										<span id="cmpscr-p3-title">
										<? if($sel_v3==0): echo"Конкурсна пропозиція не обрана"; else: //echo"sel_v3:".$sel_v3;
										natsort($stack);

 while (list($key, $val) = each($stack)) {
    echo  "<span style='display:inline-block; margin-right:5px'>".$val."&nbsp;</span>";
} 
										endif;
 
										?>				
										</span>
										<span tooltip="Введіть отримані Вами бали сертифікату з конкурсного предмету" flow="down"><input id="cmpscr-p3" type="text" class="cmpscr__input"  ></span>
									</p>
									<div id="cmpscr-err-p3" class="cmpscr__label cmpscr__error" style="display:none">
										Поле повинно містити ціле число від 100 до 200.
									</div>								
								</div>					
							</div>     
							</div>
														<div class="table-row stro4ka2" >
									<div class="div___back">
									<span class="cmpscr__label_big">Середній бал атестату</span>
									 <p class="cmpscr__field" tooltip="Введіть значення середнього балу атестату у 12 бальній шкалі" flow="down">
											<span class="cmpscr__label cmpscr__label--title"></span>
											<input id="cmpscr-a" type="text" class="cmpscr__input" >
										</p>
										<div id="cmpscr-err-a" class="cmpscr__label cmpscr__error" style="display:none">
											Поле повинно містити число від 1 до 12.
										</div>
												  
									</div>									
									<div class="div___back">
												<span class="cmpscr__label_big">Сільський коефіцієнт</span>	 
										 <p class="cmpscr__field">
										<label>
											<!--<span class="cmpscr__label cmpscr__label--title"></span>-->
											<input id="cmpscr-sk" class="cmpscr__checkbox" type="checkbox" tooltip="Відмічається за наявності Довідки про проживання більше 2 років та закінчення закладу освіти в сільській місцевості" flow="down" style="margin: 0 auto;">
										</label>	</p>
									</div>
							</div>	               
							<p class="cmpscr__field">
								<label>
									<span class="cmpscr__label cmpscr__label--title">Визначте пріоритетність заяви за обраною конкурсною пропозицією</span>
									<select id="cmpscr-gk" class="cmpscr__select cmpscr__select--branch">										
										<option value="1">1</option>
										<option value="2">2</option>
										<option value="3">3</option>
										<option value="4">4</option>
										<option value="5">5</option>
										<option value="6">6</option>
										<option value="7">7</option>
										<option value="0">0 - на контракт</option>
									</select>
								</label>
							</p>              
						<div class="table-row" style="margin:20px 0">
							<button id="cmpscr-btn" class="btn cmpscr__button">Обчислити</button>
							<span id="cmpscr-res" class="cmpscr__result" style="display:none">Ваш коефіцієнт: 0</span>
						</div>
            			
			<p class="cmpscr__label "> Вагові коефіцієнти у формулі обчислення конкурсного балу відповідно до <a href="https://donntu.edu.ua/abit/normativna-baza-abiturient#pp"> Правил прийому до ДВНЗ "ДонНТУ" у 2022 році</a></p>
							