<!DOCTYPE html>
<html>	
	<head>
		<title>Новини - SoftWars University</title>
		<meta charset="UTF-8" />
		<link type="text/css" rel="stylesheet" href="styles/styles.css">
		<link rel="shortcut icon" type="image/x-icon" href="images/logo-icon.ico"/>
	</head>
	<body>
		<div id="news">
			
			<div id="wrapper">
				<?php
		
					include("header.php");
		
				?>
				<h1>
					Новини
				</h1>
				<div id="content">
					<section>
					<script type="text/javascript">
						function toggle_visibility(id) {
						   var e = document.getElementById(id);
						   if(e.style.display == 'block')
							  e.style.display = 'none';
						   else
							  e.style.display = 'block';
						}
					</script>
						<article>
				            <header><a href="#">Грешните джедаи с големите мечове</a></header>
				            <div class="date">01/07/2014</div>
				            <div class="author">Публикувано от: Emo-Windu</div>
				            <img src="images/sloth_jedi.jpg" alt="sloth jedi"/>
				            <div class="text">
				            	Грешните джедаи с големите мечове на посещение в SoftWars Uni<br>
								<a href="#" onclick="toggle_visibility('show-08'); return false" class="read-more">[Прочети още...]</a>
							<div class="show-news" id="show-08">Вселенски известната група на надарените джедаи избра за начална точка на турнето си SoftWars Uni. Събитието е с технически-ориентиран характер, като са предвидени и интеракции с публиката. Осигурени са джедайски мечове със специален модул срещу Тъмната сила, който привлича елементарни частици от Космоса. Прототипи на ГОЛЕМИТЕ мечове ще се раздават на всички посетители. Очакват се задръствания по магистралата от Таренто, тъй като населяващите я ленивци са известни с привързаността си към Грешните джедаи с големите мечове и са предвидили 184 космически кораба да пътуват към нас.<br>
							</div>
				            </div>
				            <div class="tags"><span>Тагове:</span> softwars-university big lighsabers sloths</div>
				        </article>
						<article>
				            <header><a href="#">Senior джедаи разкриха тайните на SoftWars</a></header>
				            <div class="date">30/06/2014</div>
				            <div class="author">Публикувано от: Hriss-Offi</div>
				            <img src="images/epic-sun.jpg" alt="epic-high-sun-image"/>
				            <div class="text">
				            	Мощни джедаи разработиха клипче, показващо тайната история на университета<br>
								<a href="#" onclick="toggle_visibility('show-07'); return false" class="read-more">[Прочети още...]</a>
							<div class="show-news" id="show-07">Никой все още не се е замислял как е дошла идеята за нашия университет. Всичко е много просто... Или сложно? Преценете сами:<br>
							<video width="100%"" controls>
								<source src="http://softwarsuni.cloudvps.bg/resources/OpenCrawl-nosound.mp4" type="video/mp4">
								Браузърът ви не поддържа видео.
							</video>
							</div>
				            </div>
				            <div class="tags"><span>Тагове:</span> softwars-university epic high sun video</div>
				        </article>
						<article>
				            <header><a href="#">SoftWars Uni Wallpapers</a></header>
				            <div class="date">28/06/2014</div>
				            <div class="author">Публикувано от: Julieta-Amidala</div>
				            <img src="images/news1.jpg" alt="softwars_wallpapers"/>
				            <div class="text">
				            	Джедаи в SoftWars Uni разработиха wallpaper-и от най-високо ниво за увеличане на Силата.<br>
				            	<a href="resources/wallpaper-1920x1080.html" target="_blank">Download 1920x1080</a><br>
                                <a href="resources/wallpaper-1600x1050.html" target="_blank">Download 1600x1050</a><br>
                                <a href="resources/wallpaper-1440x900.html" target="_blank">Download 1440x900</a><br>
                                <a href="resources/wallpaper-1366x768.html" target="_blank">Download 1366x768</a><br>
                                <a href="resources/wallpaper-1024x768.html" target="_blank">Download 1024x768</a><br>
								<a href="#" onclick="toggle_visibility('show-06'); return false" class="read-more">[Прочети още...]</a>
							<div class="show-news" id="show-06">Преди време се разпространиха слухове, че джедаите от SoftWars работят върху нещо невиждано досега - специалните wallpaper-и за увеличаване на Силата. Вече всичко е реалност - въпросните картинки съчетават в себе си уменията на разработилите ги джедаи. Самата идея за изработка на подобно творение се зародила на една от Междугалактическите олимпиади и в последствие Мастърите решават да я направят реалност.</div>
				            </div>
				            <div class="tags"><span>Тагове:</span> softwars-university free wallpapers</div>
				        </article>
				        <article>
				            <header><a href="#">Нов учител в SoftWars - Оби-Уан-Евлоги</a></header>
				            <div class="date">27/06/2014</div>
				            <div class="author">Публикувано от: Han-Joro</div>
				            <img src="images/obi-wan-evlogi.jpg" alt="evlogi_teacher"/>
				            <div class="text">Оби-Уан: Почувстах голяма безредица в Силата, сякаш милиони гласове плачеха от ужас и изведнъж замлъкнаха.<br>
							<a href="#" onclick="toggle_visibility('show-05'); return false" class="read-more">[Прочети още...]</a>
							<div class="show-news" id="show-05">Оби-Уан-Евлоги работи като junior джедай на планета Abilitics. Скандалната новина заля Галактиката ни едва преди няколко часа, когато Оби-Уан сподели пред всички Мастъри, че иска да помага в развитието на младите джедаи, за да може да се преодолее влиянието на Тъмната сила. Повече за него можете да прочетете <a href="trainers.php" target="_blank">тук</a>.</div>
				            </div>
							<div class="tags"><span>Тагове:</span> softwars-university obi wan evlogi blue sword</div>

				        </article>
				        <article>
				            <header><a href="#">Специални униформи предпазват от радиация</a></header>
				            <div class="date">21/06/2014</div>
				            <div class="author">Публикувано от: Emo-Windu</div>
				            <img src="images/t-shirt-w.jpg" alt="softwars_uniforms" />
				            <div class="text">Джедай Мастерите на SoftWars Uni разработиха униформи от невиждан досега предпазващ материал.<br>
								<a href="resources/t-shirt-men.html" target="_blank">T-SHIRT MEN</a><br>
                                <a href="resources/t-shirt-women.html" target="_blank">T-SHIRT WOMEN</a><br>
								Можете да си изтеглите една от двете щампи:<br>
								<a href="images/keep-calm.png" target="_blank">Keep Calm</a><br>
								<a href="images/keep-calm2.png" target="_blank">Keep Calm Code Edition</a><br>
								<a href="#" onclick="toggle_visibility('show-04'); return false" class="read-more">[Прочети още...]</a>
							<div class="show-news" id="show-04">Съвсем нетрадиционните тениски ще се раздават на входа на SoftWars Uni. Очевидци твърдят, че одеждите светели в тъмното и с това допринасят за цялостния външнен вид на младшите джедаи. Цялата организация е дело на един от Мастърите, чието име той пожела да остане в тайна от съображения за сигурност. "Тъмната индийска сила избледнява все повече", твърдят някои от чакащите на опашката за униформи джедаи.</div>

								</div>
				            <div class="tags"><span>Тагове:</span> softwars-university radiation t-shirts</div>
				        </article>
				        <article>
				            <header><a href="#">Чисто нови коли за стипендиантите</a></header>
				            <div class="date">16/06/2014</div>
				            <div class="author">Публикувано от: Hriss-Offi</div>
				            <img src="images/BMW_X6_Heck.jpg" alt="bmw_x6" />
				            <div class="text">BMW M6 Grand Coupe. Powered by AC-Design.<br>
							<a href="#" onclick="toggle_visibility('show-03'); return false" class="read-more">[Прочети още...]</a>
							<div class="show-news" id="show-03">Стипентиантите на SoftWars University ще получат специални автомобили BMW M6 Grand Coupe. Целта е бъдещите джедаи да се мотивират да тренират силата си, чрез упражнение за изваждане на автомобила от дъното на блато. Ако стипендиантът успее да извади BMW-то, то остава за него!</div>

							</div>
				            <div class="tags"><span>Тагове:</span> softwars-university BMW tarataiki tarikati</div>
				        </article>
				        <article>
				            <header><a href="#">Реал Мадрид предизвиква отбора на SoftWars</a></header>
				            <div class="date">02/06/2014</div>
				            <div class="author">Публикувано от: Emo-WIndu</div>
				            <img src="images/playing-football-in-the-favela-30-150x150.jpg" alt="real_madrid_losers"/>
				            <div class="text">Отговори на анкетата за безполезността на висшата лига.<br>
							<a href="#" onclick="toggle_visibility('show-02'); return false" class="read-more">[Прочети още...]</a>
							<div class="show-news" id="show-02">Както много от вас знаят, футболът е нещо свещено в нашата Галактика. Той е една от многото специални сили на джедаите, и много малко раси се опитват да се подиграват с нея. Такава грешка направиха вчера от Реал Мадрид, като се осмелиха да предизвикват отбора на SoftWars Uni на (не)благотворителен мач, средствата от който щели да се използват за лазерна терапия на козината на Чубака. Чубака всъщност е изключително щастлив, че срещата не се състоя.<br>
							<img src="images/chubaka.jpg"/></div>

							</div>
				            <div class="tags"><span>Тагове:</span> softwars-university football real madrid major league</div>
				        </article>
				        <article>
				            <header><a href="#">July morning</a></header>
				            <div class="date">01/06/2014</div>
				            <div class="author">Публикувано от: Julieta-Amidala</div>
				            <img src="images/sun-24txty9.jpg" alt="neptun_sun"/>
				            <div class="text">Студенти от SoftWars Uni посрещат заедно Слънцето на Нептун.<br>
							<a href="#" onclick="toggle_visibility('show-01'); return false" class="read-more">[Прочети още...]</a>
							<div class="show-news" id="show-01">Слънцето и този век ще бъде посрещнато от джедаите в SoftWars Uni. Този път те избраха за своя дестинация планетата Нептун. По думите им, причината е в това, че там радиацията е доста по-силна от тази на останалите планети. Отивайки там, те ще тестват своите способности да забавят метаболизма си, за да избегнат негативните влияния на опасното явление. Всичко е в сигурни ръце, тъй като събитието е под ръководството на Мастър Наков, който преди две столетия предсказа, че Слънцето на този Джулай Морнинг ще бъде изключително подходящо за такъв тип експерименти. Да се помолим за джедаите!</div>

							</div>
				            <div class="tags"><span>Тагове:</span> softwars-university july morning</div>
				        </article>
				        <footer>
				            
				        </footer>
				    </section>
				</div>
				
			<?php
	
	        	include("footer.php");
	
	        ?>
			</div>
			
		</div>
	</body>
</html>