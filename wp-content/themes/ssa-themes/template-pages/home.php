<?php 
	get_header( ) 
?>

<?php 
    /* 
        Template Name: Home Page
    */
?>
		<main class="wrapper">
			<img src="<?php ssa_images('Exclusion.png'); ?>" alt="" class="back1 wow animate__animated animate__fadeIn">
			<img src="<?php ssa_images__img('Intersection9.png') ?>" alt="" class="back2 wow animate__animated animate__fadeIn">
			<img src="<?php ssa_images__img('Group293.png') ?>" alt="" class="back3 wow animate__animated animate__fadeIn">
			<img src="<?php ssa_images__img('Group511.png') ?>" alt="" class="back4 wow animate__animated animate__fadeIn">
			<img src="<?php ssa_images__img('Intersection10.png') ?>" alt="" class="back5 wow animate__animated animate__fadeIn">
			<img src="<?php ssa_images__img('Ellipse410.png') ?>" alt="" class="back6 wow animate__animated animate__fadeIn">
			<img src="<?php ssa_images__img('ttttttttttt.png') ?>" alt="" class="back7 wow animate__animated animate__fadeIn">
			<!-- banner -->
			<div class="banner">
				<div class="banner-block">
					<p>
						В нашей студии для достижения наибольшего эффекта в снижении излишнего веса применяется уникальное сочетание широко известных практик. 
					</p>
					<div>
					<button type="button" class="btn-blue center" data-bs-toggle="modal" data-bs-target="#form1">
						Забронировать
					</button>
					<div class="modal fade" id="form1" tabindex="-1" aria-labelledby="form1Label" aria-hidden="true">
						<div class="modal-dialog">
							<div class="modal-content">
								<div class="modal-header">
									<h5 class="modal-title" id="form1Label">Забронировать</h5>
									<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
								</div>
								<div class="modal-body">
								<p class="modal-body-p">
										График приема: <br>
										<strong>Женщины: ПН, СР, ПТ</strong> <br>
										<strong>Мужчины: ВТ, ЧТ, СБ</strong>
									</p>
								<div>
									<?php echo do_shortcode( '[ameliabooking]' ); ?>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				</div>
				<div>
					<img src="<?php ssa_images('banner.png') ?>" alt="">
				</div>
			</div>
			<hr>
			<div class="indication wow animate__animated animate__fadeInLeft" id="противопоказания">
				<div class="swiper indication-swiper">
					<div class="swiper-wrapper">
						<div class="swiper-slide">
							<h2 class="title-h2">Противопоказания</h2>
							<p>
								Прежде всего надо сказать, что противопоказаниями к использованию предлагаемой программы являются обычные причины, такие как:
							</p>
							<div class="indication-ul">
								<ul class="push">
									<li>
										острые инфекционные заболевания; 
									</li>
									<li>
										злокачественные опухоли, гнойные заболевания;
									</li>
									<li>
										наличие кардиостимулятора, металлических имплантов в теле;
									</li>
									<li>
										новообразования в молочных железах, мастопатия;
									</li>
									<li>
										беременность;
									</li>
								</ul>
								<ul class="push">
									<li>
										эпилепсия; 
									</li>
									<li>
										психические расстройства;
									</li>
									<li>
										туберкулез почек или легких в активной фазе;
									</li>
									<li>
										желчнокаменная болезнь; 
									</li>
									<li>
										печеночная, почечная недостаточность;
									</li>
									<li>
										индивидуальная непереносимость данных процедур.
									</li>
								</ul>
							</div>
						</div>
						<!-- 2 -->
						<div class="swiper-slide">
							<h2 class="title-h2">Показания</h2>
							<p>
								А в каком же случае вы обратились как раз по адресу? И так если вас беспокоит:
							</p>
							<ul class="push">
								<li>
									наличие целлюлита и избыточной массы тела;
								</li>
								<li>
									вялые мышцы, которые лишены тонуса и делают фигуру «рыхлой»;
								</li>
								<li>
									необходимость улучшения контуров отдельных частей тела, например, ягодиц, живота, наличие мышечных зажимов;
								</li>
								<li>
									необходимость улучшения внешнего вида кожи, ее тонуса, общего состояния;
								</li>
								<li>
									для похудения с целью преодоления эффекта «плато», из-за которого не получается снизить вес с помощью прежнего режима питания, физических нагрузок;
								</li>
								<li>
									устранение отечности мягких тканей;; 
								</li>
							</ul>
						</div>
					</div>
					<div class="swiper-button-next"></div>
					<div class="swiper-button-prev"></div>
					<div class="swiper-scrollbar"></div>
				</div>
			</div>
			<div class="steps wow animate__animated animate__fadeInRight" id="этапы">
				<h2 class="title-h2">Этапы</h2>
				<ul class="nav nav-tabs" id="steps-tab" role="tablist">
					<li class="nav-item" role="presentation">
						<a class="nav-link active" id="first-tab" data-toggle="tab" href="#first" role="tab" aria-controls="first" aria-selected="true">Первый</a>
					</li>
					<li class="nav-item" role="presentation">
						<a class="nav-link" id="second-tab" data-toggle="tab" href="#second" role="tab" aria-controls="second" aria-selected="false">Второй</a>
					</li>
					<li class="nav-item" role="presentation">
						<a class="nav-link" id="third-tab" data-toggle="tab" href="#third" role="tab" aria-controls="third" aria-selected="false">Третий</a>
					</li>
					<li class="nav-item" role="presentation">
						<a class="nav-link" id="fourth-tab" data-toggle="tab" href="#fourth" role="tab" aria-controls="fourth" aria-selected="true">Четвертый</a>
					</li>
				</ul>
				<div class="tab-content" id="myTabContent">
					<div class="tab-pane fade show active" id="first" role="tabpanel" aria-labelledby="first-tab">
						<p>
							Аппаратный  анализ структуры вашего тела, определение уровня излишнего веса либо степени ожирения. Подбор принципов питания.
						</p>
					</div>
					<div class="tab-pane fade" id="second" role="tabpanel" aria-labelledby="second-tab">
						<div class="swiper StepsTab">
							<div class="swiper-wrapper">
								<div class="swiper-slide">
									<div>
										<p class="bold center">
											Электромиостимуляция и прессотерапия
										</p>
									</div>
								</div>
								<div class="swiper-slide">
									<div>
										<p>
											Электромиостимуляция. Суть методики заключается в использовании импульсов тока, которые способствуют сокращению мышечных волокон, что приводит к повышению тонуса мышц, кожи.  
											Для похудения и избавления от признаков целлюлита мы применяем ее   в составе комплексной программы. Миостимуляция даёт умеренный опосредованный липолиз, некоторый лимфодренаж. 
											Это во многом вспомогательная процедура. Но именно она позволяет утилизировать в мышечной работе те опасные продукты расщепления жиров, которые образуются при липолизе. 
											Каким образом происходит утилизация? Через движение! Именно в «топке» работающей мышцы сгорают свободные триглицериды и дальнейшая физическая нагрузка дает совсем новый эффект.
										</p>									
									</div>
								</div>
								<div class="swiper-slide">
									<p>
										Для электромиостимуляции применяется специальный прибор, вырабатывающий импульсы определенной силы, которые передаются на электроды. 
										Последние устанавливаются на коже так, чтобы ток передавался на нужную мышечную группу. 
										Такой способ, кроме выполнения своей основной задачи – подготовки жировых клеток к следующему этапу применяемой программы, аэробной тренировке, 
										может заставить работать даже те группы мышц, которые сложно прокачать при помощи физических упражнений. Очень важно, что начинается воздействие на ту часть жировых клеток, 
										где в силу долгого периода их накопления сокращается сеть кровеносных сосудов.
									</p>	
								</div>
								<div class="swiper-slide">
									<div>
										<p>
											В результате этого происходит ускорение обмена веществ, а организм легче и быстрее начинает освобождаться от продуктов обмена, т.е. шлаков.
										</p>
										<p>
											Аппаратная миостимуляция эффективна тем, что помогает подготовить даже очень слабые и «обленившиеся» мышечные группы и жировые клетки к дальнейшей нагрузке.
										</p>
										<p>
											Профессиональные аппараты, используемые нами дают возможность одновременно стимулировать сразу несколько участков тела.  
										</p>									
									</div>
								</div>
								<div class="swiper-slide">
									<p>
										В процессе воздействия электротоком все мышцы, включая мышечные стенки сосудов, сфинктеры кишечника и мочевого пузыря, начинают активно функционировать. За счет этого улучшается состояние и активизируется работа мышечных групп со сниженным тонусом.
										Отмечается увеличение энергетического обмена в тканях в 10 раз. За счет напряженной работы мышечных групп наблюдается повышение температуры тела в тех зонах, на которые наложены электроды.
									</p>	
								</div>
								<div class="swiper-slide slide-container">
									<p>Профессиональный аппарат для миостимуляции</p>	
									<div class="slide-flex">
										<img src="<?php ssa_images('mios1.png') ?>" alt="" class="slide-flex-img">
										<img src="<?php ssa_images('mios2.png') ?>" alt="" class="slide-flex-img">
									</div>
								</div>
								<div class="swiper-slide">
									<div>
										<p>
										<span class="bold">Прессотерапия -</span> лучший метод избавления от целлюлита и отечности.  Воздействие довольно простое для понимания: аппарат выдает порции сжатого воздуха, раздувая манжету, которая сдавливает обрабатываемые участки на теле. 
											В результате этого оказывается опосредованное влияние на внутренние жидкости нашего организма – если говорить конкретно, на кровь и лимфу. Вследствие таких воздействий кровь течет по сосудам быстрее, поэтому клетки получают питательные вещества раньше, чем обычно. 
											Следовательно, ускоряется метаболизм. Регулировка объемов воздуха для прессотерапии производится с помощью компьютера.
										</p>
									</div>
								</div>
								<div class="swiper-slide">
									<p  class="bold">
										Как проводят прессотерапию?
									</p>
								</div>
								<div class="swiper-slide">
									<div>
										<p>
											Данное мероприятие имеет свои особенности проведения. Сначала клиенту следует надеть особый костюм. Затем нужно лечь на кушетку – позаботьтесь о том, чтобы вам было удобно. Надетые манжеты связаны с аппаратом через воздухопроводы, в которых постоянно чередуются низкое и высокое давления.
										</p>
									</div>
								</div>
								<div class="swiper-slide">
									<div>
										<p>
											Вакуумный и компрессионный режимы постоянно сменяют друг друга. Интервал чередуется от тридцати секунд до двух минут. При снижении давления в «одеянии» происходит расширение сосудов. Кровь обогащает и кожу, и подкожную жировую клетчатку, и мышечную ткань и в результате:
										</p>
									</div>
								</div>
								<div class="swiper-slide">
									<div>
										<ul class="push">
											<li>
												обмен веществ становится быстрее;
											</li>
											<li>
												баланс воды приходит в норму;
											</li>
											<li>
												расширяются сосуды;
											</li>
											<li>
												сосудистые стенки тонизируются, становятся эластичнее;
											</li>
											<li>
												ноги перестают быть «тяжелыми»;
											</li>
											<li>
												кожа на бедрах и ягодицах разглаживается;
											</li>
											<li>
												исчезают отеки;
											</li>
											<li>
												мышцы расслабляются;
											</li>
											<li>
												общее состояние кожных покровов улучшается.
											</li>
										</ul>
									</div>
								</div>
								<div class="swiper-slide slide-container">
									<p>Прибор для коррекции фигуры с тремя функциями:</p>	
									<div class="slide-flex">
										<img src="<?php ssa_images('press.png') ?>" alt=""  class="slide-flex-img">
									</div>
								</div>
							</div>
							<div class="swiper-pagination"></div>
							<div class="swiper-button-prev arrow-top"><i class="fas fa-arrow-up"></i></div>
							<div class="swiper-button-next arrow-bottom"><i class="fas fa-arrow-down"></i></div>
						</div>
					</div>
					<div class="tab-pane fade" id="third" role="tabpanel" aria-labelledby="third-tab">
						<div class="swiper StepsTab">
							<div class="swiper-wrapper">
								<div class="swiper-slide">
									<p>
									<span class="bold">Аэробная нагрузка -</span> это физическая работа при которой выработка энергии происходит за счет окислительных процессов к клетках в присутствии кислорода. 
										При этом благодаря подготовке на первом этапе и при дефиците гликогена печени достигаемом благодаря рекомендуемой нами низкоуглеводной диете, 
										с первых же минут тренировки организм переходит на сжигание жиров. Это будет нагрузка средней и низкой интенсивности. 
									</p>	
								</div>
								<div class="swiper-slide">
									<div>
										<p>
											Кроме основной цели вы получите и солидный бонус:
										</p>
										<ul class="push">
											<li>
												Повышение общей выносливости
											</li>
											<li>
												Повышение тонуса организма
											</li>
											<li>
												Улучшение работы сердечно-сосудистой и дыхательной систем 
											</li>
											<li>
												Укрепление сердечной мышцы
											</li>
											<li>
												Понижение пульса в покое и снижение артериального давления
											</li>
											<li>
												Улучшение сна
											</li>
										</ul>
									</div>
								</div>
								<div class="swiper-slide slide-container">
									<p>
										В нашей студии мы порекомендуем вам в зависимости от вашего текущего физического состояния аэробную тренировку на следующих тренажерах.
									</p>	
									<div class="slide-flex slide-flex-cont">
										<div class="slide-flex__div">
											<img src="<?php ssa_images('velo.png') ?>" alt="" class="slide-flex__img">
											Беговая электрическая дорожка для профессионального использования
										</div>
										<div class="slide-flex__div">
											<img src="<?php ssa_images('ellip.png') ?>" alt="" class="slide-flex__img">
											Эллиптический тренажер для профессионального использования
										</div>
										<div class="slide-flex__div">
											<img src="<?php ssa_images('vertic-velo.png') ?>" alt="" class="slide-flex__img">
											Велотренажер вертикальный для профессионального использования
										</div>
										<div class="slide-flex__div">
											<img src="<?php ssa_images('goriz-velo.png') ?>" alt="" class="slide-flex__img">
											Горизонтальный велотренажер для профессионального использования
										</div>
									</div>
								</div>
								<div class="swiper-slide">
									<div>
										<p>
											Главный критерий таких тренировок – это реакция вашего организма на нагрузку, отражающая через частоту сердечных сокращений. 
											Наши специалисты определят ваши пульсовые зоны и проследят, чтобы нагрузка была достаточной для достижения цели – улучшения вашего здоровья 
											и сжигания жира и в то же время была безопасна исходя из сегодняшних ваших возможностей. Вам не придется перенапрягаться, все будет легко и комфортно, занятия проводятся на пульсе порядка 120 ударов в минуту.
										</p>
									</div>
								</div>
								<div class="swiper-slide">
									<p>
										Время второго этапа 40 минут, после чего вы переходите на заключительный этап нашей программы.
									</p>
								</div>
							</div>
							<div class="swiper-button-prev arrow-top"><i class="fas fa-arrow-up"></i></div>
							<div class="swiper-button-next arrow-bottom"><i class="fas fa-arrow-down"></i></div>
							<div class="swiper-pagination"></div>
						</div>
					</div>
					<div class="tab-pane fade show" id="fourth" role="tabpanel" aria-labelledby="fourth-tab">
						<div class="swiper StepsTab">
							<div class="swiper-wrapper">
								<div class="swiper-slide">
									<p>
									<span class="bold">Виброплатформа – </span>это тренажер в виде компактной платформы для ног, которая с помощью вибрации 
										создает определенную частоту колебаний и воздействует на мышечные волокна путем стимуляции их сокращения, увеличивая энергозатраты. 
										Основная задача этого этапа – это лимфодренаж продуктов разложения жировых клеток, произошедший на первых двух этапах программы, но кроме этого организм получает отличную тренировку которая
									</p>	
								</div>
								<div class="swiper-slide">
									<div>
										<ul class="push">
											<li>
												эффективно помогает избавиться от целлюлита;
											</li>
											<li>
												корректирует проблемные зоны и всю фигуру;
											</li>
											<li>
												обогащает ткани кислородом и тем самым способствует улучшению цвета лица;
											</li>
											<li>
												увеличивает выработку коллагена для красоты и упругости кожи;
											</li>
											<li>
												улучшает микроциркуляцию крови;
											</li>
											<li>
												оказывает антистрессовое действие, улучшает сон;
											</li>
											<li>
												улучшает пространственное и временное восприятие. 
											</li>
										</ul>
									</div>
								</div>
								<div class="swiper-slide">
									<div>
										<ul class="push">
											<li>
												Тренировка на тренажере оказывает интенсивное лечебное действие на организм:
											</li>
											<li>
												предупреждает развитие остеопороза;
											</li>
											<li>
												улучшает эластичность тканей;
											</li>
											<li>
												предупреждает хроническую венозную недостаточность, мышечную атрофию и паралич;
											</li>
											<li>
												стимулирует очищение организма, за счет ускорения обмена веществ;
											</li>
											<li>
												способствует физической реабилитации после перенесенных травм. 
											</li>
										</ul>
									</div>
								</div>
								<div class="swiper-slide slide-container">
									<p>Виброплатформа</p>	
									<div class="slide-flex">
										<img src="<?php ssa_images('vibro.png') ?>" alt=""  class="slide-vibro">
									</div>
								</div>
							</div>
							<div class="swiper-button-prev arrow-top"><i class="fas fa-arrow-up"></i></div>
							<div class="swiper-button-next arrow-bottom"><i class="fas fa-arrow-down"></i></div>
							<div class="swiper-pagination"></div>
						</div>
					</div>
				</div>
			</div>
			<hr>
			<div class="equipment wow animate__animated animate__fadeInLeft" id="оборудования">
				<h2 class="title-h2">
					Оборудования
				</h2>
				<ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
					<li class="nav-item" role="presentation">
						<a class="nav-link active" id="equipment1" data-toggle="pill" href="#pills-equipment1" role="tab" aria-controls="pills-equipment1" aria-selected="true">Миостимуляция </a>
					</li>
					<li class="nav-item" role="presentation">
						<a class="nav-link" id="equipment2" data-toggle="pill" href="#pills-equipment2" role="tab" aria-controls="pills-equipment2" aria-selected="false">Прессотерапия</a>
					</li>
					<li class="nav-item" role="presentation">
						<a class="nav-link" id="equipment3" data-toggle="pill" href="#pills-equipment3" role="tab" aria-controls="pills-equipment3" aria-selected="false">Аэробная нагрузка</a>
					</li>
					<li class="nav-item" role="presentation">
						<a class="nav-link" id="equipment4" data-toggle="pill" href="#pills-equipment4" role="tab" aria-controls="pills-equipment4" aria-selected="false">Виброплатформа </a>
					</li>
				</ul>
				<div class="tab-content">
					<div class="tab-pane fade show active" id="pills-equipment1" role="tabpanel" aria-labelledby="equipment1">
						<div class="miostimulation">
							<div class="miostimulation-block">
								<div>
									<img src="<?php ssa_images('mios1.png') ?>" alt="" height="200" width="200">
								</div>
								<div>
									<p class="equipment-p">
										Появляется возможность сжечь жир в проблемных зонах и вы готовы это сделать на следующем этапе программы									
									</p>
								</div>
							</div>
							<div class="miostimulation-block">
								<div>
									<p class="equipment-p">
										Миостимуляция – это своеобразная принудительная гимнастика для мышц.
										Это приводит к улучшению общего состояния тканей, усилению их питания.										
									</p>
								</div>
								<div>
									<img src="<?php ssa_images('mios2.png') ?>" alt="" height="200" width="200">
								</div>
							</div>
						</div>
					</div>
					<div class="tab-pane fade" id="pills-equipment2" role="tabpanel" aria-labelledby="equipment2">
						<div class="press">
							<div class="press-block">
								<p class="bold equipment-p">
									Прибор для коррекции фигуры с тремя функциями:
								</p>
								<ul class="push">
									<li>
										прессотерапия
									</li>
									<li>
										инфракрасное воздействие
									</li>
									<li>
										EMS терапия
									</li>
									<li>
										LED монитор
									</li>
								</ul>
								<p class="equipment-p">
									Данный прибор, который сочетает в себе функцию коррекции фигуры, снижения избыточного давления в тканях и детоксикации.
								</p>
							</div>
							<div class="press-block">
								<img src="<?php ssa_images('press.png') ?>" alt="" height="280" width="350">
							</div>
						</div>
					</div>
					<div class="tab-pane fade" id="pills-equipment3" role="tabpanel" aria-labelledby="equipment3">
						<div>
							<div>
								<div class="row">
									<div class="col-3 col-3-border">
										<div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
											<a class="nav-link active" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true"> 
												<div class="border-blue">
												Беговая электрическая дорожка
												</div> 
											</a>
											<a class="nav-link" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="false">
												<div class="border-blue">
													Эллиптический тренажер
												</div>
											</a>
											<a class="nav-link" id="v-pills-messages-tab" data-toggle="pill" href="#v-pills-messages" role="tab" aria-controls="v-pills-messages" aria-selected="false">
												<div class="border-blue">
													Велотренажер вертикальный
												</div>
											</a>
											<a class="nav-link" id="v-pills-settings-tab" data-toggle="pill" href="#v-pills-settings" role="tab" aria-controls="v-pills-settings" aria-selected="false">
												<div class="border-blue">
													Горизонтальный велотренажер
												</div>
											</a>
										</div>
									</div>
									<div class="col-9">
										<div class="tab-content" id="v-pills-tabContent">
											<div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
												<div class="equipments-container">
													<div>
														<p class="equipment-p">
															Беговая электрическая дорожка для профессионального использования. Оснащена автоматической системой смазки. 
															Цифровая система передачи, обеспечивающая стабильность и безопастность  движения.
														</p>	
														<p class="equipment-p">
															Максимальная  скорость движения бегового полотна: 20 км/ч.
														</p>		
														<p class="equipment-p">
															Регулировка угла наклона: от -3% до +15%.
														</p>
														<p class="equipment-p">
															9 встроенных программ тренировок, 3 пульсо зависимые  программы.
														</p>							
														<p class="equipment-p">
															Показания: текущая скорость, расход калорий, пройденная дистанция, угол наклона.
														</p>	
														<p class="equipment-p">
															Измерение пульса:  кардио датчик встроенный в поручни. 
															Имеется возможность подключения беспроводного датчика. Система амортизации. Удобства: подставка для книг, подставка для напитков.
														</p>	
														<p class="equipment-p">
															Макс. вес пользователя: 200кг
														</p>
													</div>
													<div>
														<img src="<?php ssa_images('velo.png') ?>" alt="" height="400" width="300">
													</div>
												</div>
											</div>
											<div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
												<div class="equipments-container">
													<div>
														<p class="equipment-p">
															20 уровней нагрузки от 42 до 250 ватт.встроенные  тренировочные программы. Показания компьютера - нагрузка,скорость, 
															расход калорий,пульс,дистанция. 
														</p>
														<p class="equipment-p">
															Максимальный вес пользователя до 160 кг.
														</p>
													</div>
													<div>
														<img src="<?php ssa_images('ellip.png') ?>" alt="" height="400" width="300">
													</div>
												</div>
											</div>
											<div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">
												<div class="equipments-container">
													<div>
														<p class="equipment-p">
															20 уровней нагрузки до 350 ватт. 11 встроенных тренировочных программ из них 3 пульсозависимые. Показания компьютера-нагрузка,скорость, 
															расход калорий, пульс,дистанция, отображение рельефа местности.   
														</p>
														<p class="equipment-p">
															Максимальный вес пользователя до 160 кг.
														</p>
														<p class="equipment-p">
															Вес тренажера 70 кг.
														</p>
													</div>
													<div>
														<img src="<?php ssa_images('vertic-velo.png') ?>" alt="" height="400" width="300">
													</div>
												</div>
											</div>
											<div class="tab-pane fade" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab">
												<div class="equipments-container">
													<div>
														<p class="equipment-p">
															<span class="bold">Нагрузка альтернатор(генератор переменного тока), независимый от источника питания</span> 
															32 уровня нагрузки.
															Показания компьютера-нагрузка,скорость, расход калорий, пульс, дистанция,12 встроенных тренировочных программ. 
														</p>
														<p class="equipment-p">
															Максимальный вес пользователя  до 180 кг.
														</p>
													</div>
													<div>
														<img src="<?php ssa_images('goriz-velo.png') ?>" alt="" height="400" width="300">
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="tab-pane fade" id="pills-equipment4" role="tabpanel" aria-labelledby="equipment4">
						<div class="vibro">
							<div class="vibro-block">
								<p class="equipment-p">
									Виброплатформа.
									Обеспечивает высочайший уровень комфорта во время тренировок. Есть специальные ручки - отличная опора во время использования.  						
								</p>
								<p class="equipment-p">
									Максимальный вес пользователя: 200 кг.
								</p>
								<p class="equipment-p">
									Частоту вибрации можно регулировать. Чем она выше, тем более высоких результатов удастся добиться. Работа осуществляется практически без шума.
								</p>
								<p class="equipment-p">
									На платформе использовано антискользящее покрытие.  Имеется система охлаждения двигателя. При необходимости можно отрегулировать амплитуду колебаний
								</p>
							</div>
							<div class="vibro-block">
								<img src="<?php ssa_images('vibro.png') ?>" alt="" height="400" width="300">
							</div>
						</div>
					</div>
				</div>		
				<!-- modal form -->
				<div>
					<button type="button" class="btn-blue center" data-bs-toggle="modal" data-bs-target="#form2">
						Забронировать
					</button>
					<div class="modal fade" id="form2" tabindex="-1" aria-labelledby="form2Label" aria-hidden="true">
						<div class="modal-dialog">
							<div class="modal-content">
								<div class="modal-header">
									<h5 class="modal-title" id="form2Label">Забронировать</h5>
									<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
								</div>
								<div class="modal-body">
															<p class="modal-body-p">
										График приема: <br>
										<strong>Женщины: ПН, СР, ПТ</strong> <br>
										<strong>Мужчины: ВТ, ЧТ, СБ</strong>
									</p>
								<div>
									<?php echo do_shortcode( '[ameliabooking]' ); ?>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>		
			</div>
			<hr>
			<div class="page-form wow animate__animated animate__fadeInRight" id="записаться">
				<!-- <div>
					<form class="form-signin">       
						<h2 class="form-signin-heading">Записаться</h2>
						<input type="text" class="form-style" name="username" placeholder="ФИО" required>
						<input type="number" class="form-style" name="" placeholder="Номер телефона" required>  
						<input type="text" class="form-style" name="" placeholder="Выберите доктора" required> 
						<input type="text" class="form-style" name="" placeholder="Выберите дату" required> 
						<button class="btn-lg btn-blue btn-block" type="submit">Забронировать</button>   
					</form>
				</div> -->
				<div>
					<p class="modal-body-p">
										График приема: <br>
										<strong>Женщины: ПН, СР, ПТ</strong> <br>
										<strong>Мужчины: ВТ, ЧТ, СБ</strong>
									</p>
					
                <?php echo do_shortcode( '[ameliabooking]' ); ?>
				</div>
				<div>
					<p class="form-signin-p">
						Ждем вас и верим, что сможем вам помочь!
					</p>
				</div>
			</div>
		</main>

		<?php 
		get_footer( ) 
		?>