<?php 
/*
Template Name: corporate-new
*/

get_header(); ?>

<style>
    /* Дополнительные стили для страницы нового отеля */
    .new-hotel-section {
        margin-bottom: 100px;
    }
    
    .new-hotel-title {
        margin: 0 0 30px 0;
        font-size: 2.5rem;
        font-weight: 700;
        color: #333;
    }
    
    /* Стили для секции "Вдохновляющее окружение" */
    .location-grid {
        display: grid;
        grid-template-columns: repeat(2, 1fr);
        gap: 30px;
        margin-top: 40px;
    }
    
    .location-item {
        display: flex;
        align-items: baseline;
        gap: 15px;
        padding: 20px;
        background: #f8f8f8;
        border-radius: 10px;
    }
    
    .location-time {
        font-size: 2.5rem;
        font-weight: 800;
        color: #fcaf17;
        line-height: 1;
        min-width: 100px;
    }
    
    .location-desc {
        font-size: 1.1rem;
        line-height: 1.4;
        color: #555;
    }
    
    .location-desc strong {
        color: #333;
        font-size: 1.2rem;
        display: block;
        margin-bottom: 5px;
    }
    
  
    
    /* Стили для номеров */
    .rooms-grid {
        display: flex;
        flex-direction: column;
        gap: 60px;
        margin-top: 40px;
    }
    
    .room-item {
        display: flex;
        flex-wrap: wrap;
        gap: 30px;
        background: #fff;
        border-radius: 15px;
        overflow: hidden;
        box-shadow: 0 5px 20px rgba(0,0,0,0.05);
		align-items: stretch;
    }
    
    .room-item:nth-child(even) {
        flex-direction: row-reverse;
    }
    
    .room-image {
        flex: 1;
        min-width: 300px;
        position: relative;
		display: flex;
    	flex-direction: column;
    }
    
    .room-image img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        display: block;
		flex: 1;
    }
    
    .room-badge {
        position: absolute;
        top: 20px;
        left: 20px;
        background: rgba(156, 179, 60, 1);
        color: white;
        padding: 10px 20px;
        border-radius: 5px;
        font-size: 1.1rem;
        font-weight: 500;
    }
    
    .room-content {
        flex: 1;
        padding: 0px 30px 0px 30px;
        display: flex;
        flex-direction: column;
        justify-content: center;
    }
    
    .room-content p {
        font-size: 1.1rem;
        line-height: 1.6;
        color: #555;
        margin-bottom: 30px;
    }
    
    .room-button {
        display: inline-block;
        padding: 15px 30px;
        background: none;
        color: #fcaf17;
        text-decoration: none;
        border-radius: 5px;
        font-weight: 500;
        transition: background 0.3s ease;
        align-self: flex-start;
        border: 2px solid #fcaf17;
        cursor: pointer;
    }
    
    .room-button:hover {
        background: #fcaf17;
		

		   color: white;
    }
    
    /* Карта */
    .map-container {
        margin: 100px 0;
        text-align: center;
    }
    
    .map-container iframe {
        width: 100%;
        max-width: 100%;
        border-radius: 10px;
    }
    
    @media (max-width: 768px) {
        .location-grid {
            grid-template-columns: 1fr;
        }
        
        .gallery-life__grid {
            grid-template-columns: 1fr;
        }
        
        .room-item {
            flex-direction: column !important;
        }
        
        .room-content {
            padding: 30px;
        }
        
        .modal-prev,
        .modal-next {
            width: 40px;
            height: 40px;
            font-size: 18px;
        }
    }
</style>

<main class="main">
    <?php
    while ( have_posts() ) : the_post();
        get_template_part( 'inc/page/content', 'header' );
        
        $show_hotels_list = get_post_meta($post->ID, 'show_hotels_list', true);
        $show_subscribtion_form = get_post_meta($post->ID, 'show_subscribtion_form', true);
    ?>
    
    <!-- Заголовок открытия -->
    <section style="margin-top:100px; text-align:center;">
        <h2 class="new-hotel-title">Сеть отелей для деловых поездок Station</h2>
    </section>

<!-- Видео и описание отеля -->
<section class="about new-hotel-section" id="about">
    <div class="container">
  
        <div class="flex flex--a-center flex--wrap">
            <div class="interior__big" style="width: 50%;">
                 <img src="/wp-content/uploads/s12-kv-b-sk.jpg" 
                     style="max-width: 100%; height: auto;" 
                     alt="Корпоративным клиентам">
            </div>
            
            <div class="container hotel-main-wrapper" style="text-align: justify; width: 50%">
<h3>Безупречный деловой имидж с отелями Station</h3>			  
                <p>Отели Station в центре Петербурга  - готовое решение для размещения ваших сотрудников, партнеров и делегаций. Расположенные на границе имперской архитектуры и деловой инфраструктуры города, наши отели 3* и 4* объединяют в себе атмосферу Северной столицы и эффективность современного корпоративного сервиса.</p><br><br>


<ul>
<li>Гибкая система тарифов — индивидуальные цены, условия бронирования и оплаты для каждого корпоративного клиента.</li>
<li>Корпоративная инфраструктура и услуги - трансфер, питание, конференц возможности, экспресс-офис в каждом отеле.</li>
<li>Личное сопровождение — закреплеленный за вашей компанией менеджер оперативно решит любые вопросы от заключения договора и бронирования до получения отчетных документов.</li>

<li>Экономия времени и ресурсов — все отели находятся в оптимальной доступности от центров деловой, культурной активности Петербурга и транспортных узлов.</ul>

            </div> 
            <div class="hotel-main-text-toggle" data-show="Читать далее" data-hide="Скрыть">Читать далее</div>
        </div>
	
		        <!-- Кнопка "Оставить заявку" -->
        <div style="display: flex; justify-content: center; margin-top: 50px;">
            <a href="/oteli-dlja-delovyh-poezdok/#get_offer" class="consult-button" style="background: #fcaf17; color: white; padding: 15px 50px; font-size: 1.1rem; font-weight: 500; border-radius: 5px; text-decoration: none; display: inline-block; transition: all 0.3s ease;"
               onmouseover="this.style.background='#9CB33C'; this.style.borderColor='#9CB33C'; this.style.transform='translateY(-2px)'; this.style.boxShadow='0 6px 15px rgba(196, 160, 121, 0.4)';"
               onmouseout="this.style.background='#fcaf17'; this.style.borderColor='#fcaf17'; this.style.transform='translateY(0)'; this.style.boxShadow='0 4px 10px rgba(196, 160, 121, 0.3)';">
                Хочу особые условия
            </a>
        </div>
	
	
    </div>
</section>
	
	
	<!-- Номера -->
<section class="new-hotel-section">
    <div class="container">
        <h2 class="new-hotel-title">Выберите отель в СПБ для деловой поездки</h2>
        <p style="font-size: 1.2rem; color: #555;">Стандартные номера и номера повышенного комфорта</p>
        
        <div class="rooms-grid">
            <!-- Номер 1 - Дизайн для жизни -->
            <div class="room-item">
                <div class="room-image" style="position: relative; height: 400px; flex-shrink: 0;">
                    <!-- Главное фото с Lightbox и ID -->
                    <a href="/wp-content/themes/stationhotels/img/rooms/s12/eclectic/001.webp" data-lightbox="design" data-title="Сервис без компромисов">
                        <img id="room1-main" src="/wp-content/themes/stationhotels/img/rooms/s12/eclectic/001.webp" alt="Сервис без компромисов" style="width: 100%; height: 400px; object-fit: cover; display: block;">
                    </a>
                    
                    <!-- Бейдж -->
                    <div class="room-badge">Сервис без компромиссов</div>
                    
                    <!-- Миниатюры для переключения -->
                    <div style="position: absolute; bottom: 20px; left: 20px; right: 20px; display: flex; gap: 10px; justify-content: center; background: rgba(0,0,0,0.5); padding: 10px; border-radius: 50px;">
                        <img src="/wp-content/themes/stationhotels/img/rooms/s12/eclectic/001.webp" alt="Фото 1" style="width: 60px; height: 60px; object-fit: cover; border-radius: 5px; cursor: pointer; border: 2px solid white;" onclick="changeRoomImage('room1-main', this.src, 'design', 0)">
                        <img src="/wp-content/themes/stationhotels/img/rooms/s12/eclectic/004.webp" alt="Фото 2" style="width: 60px; height: 60px; object-fit: cover; border-radius: 5px; cursor: pointer; border: 2px solid transparent;" onclick="changeRoomImage('room1-main', this.src, 'design', 1)">
                        <img src="/wp-content/themes/stationhotels/img/rooms/s12/eclectic/002.webp" alt="Фото 3" style="width: 60px; height: 60px; object-fit: cover; border-radius: 5px; cursor: pointer; border: 2px solid transparent;" onclick="changeRoomImage('room1-main', this.src, 'design', 2)">
                        <img src="/wp-content/themes/stationhotels/img/rooms/s12/modern/005.webp" alt="Фото 4" style="width: 60px; height: 60px; object-fit: cover; border-radius: 5px; cursor: pointer; border: 2px solid transparent;" onclick="changeRoomImage('room1-main', this.src, 'design', 3)">
                    </div>
                </div>

                <div class="room-content">
										<h3>
						<u><a href="/s12">Station Premier S12****"</a></u>
					</h3>
					<p><b>Санкт-Петербург, Столярный переулок, 10-12</b></p>
	                    <p style=text-align:justify;>4-звездочный отель на 54 номера, открылся в 2023 году.  
Лаконичный классический дизайн с тонкими акцентами. Удобное расположение  в 5 минутах от трёх станций метро делает быстрым и простым передвижение по городу  и в аэропорт.   
Безупречный сервис для деловых поездок: экспресс-офис, кофеварка и умная колонка в номере, тёплый пол, завтраки и ужины, включенные в тариф, а также оборудование для индивидуальных занятий спортом. Отличное решение для командировок, групп и конференций.</p>
					  						  
        <div style="display: flex; gap: 15px; margin-top: 10px;">
			         <a href="/oteli-dlja-delovyh-poezdok/#get_offer" style="flex: 1;"> 
                <button style="width: 100%; background: #9CB33C; color: white; padding: 15px 30px; font-size: 1rem; font-weight: 500; border-radius: 5px; text-decoration: none; display: inline-block; transition: all 0.3s ease; border: none; cursor: pointer;"
                        onmouseover="this.style.background='#fcaf17';"
                        onmouseout="this.style.background='#9CB33C';">Забронировать</button>
            </a>
            <a href="/s12" style="flex: 1;"> 
                <button class="room-button" style="width: 100%;">Узнать больше</button>
            </a>
        </div>
					
										               <a href="#" class="rooms-category-video video-trigger" data-video-src="/wp-content/themes/stationhotels/img/video/S12-2x.MP4" style="padding-top:20px;">
                  <img class="rooms-category-icon" src="/wp-content/themes/stationhotels/img/play.svg?v=936" alt="" loading="lazy">
                  <span>Смотреть видео. Номер Модерн</span>
               </a>

                </div>
            </div>
            
            <!-- Номер 2 - За гранью комфорта -->
            <div class="room-item">
                <div class="room-image" style="position: relative; height: 400px; flex-shrink: 0;">
                    <a href="/wp-content/themes/stationhotels/img/rooms/s10/mansard/1.webp" data-lightbox="comfort" data-title="Эстетика пространства">
                        <img id="room2-main" src="/wp-content/themes/stationhotels/img/rooms/s10/mansard/1.webp" alt="Эстетика пространства" style="width: 100%; height: 400px; object-fit: cover; display: block;">
                    </a>
                    <div class="room-badge">Эстетика пространства</div>
                    <div style="position: absolute; bottom: 20px; left: 20px; right: 20px; display: flex; gap: 10px; justify-content: center; background: rgba(0,0,0,0.5); padding: 10px; border-radius: 50px;">
                        <img src="/wp-content/themes/stationhotels/img/rooms/s10/mansard/1.webp" alt="Фото 1" style="width: 60px; height: 60px; object-fit: cover; border-radius: 5px; cursor: pointer; border: 2px solid white;" onclick="changeRoomImage('room2-main', this.src, 'comfort', 0)">
                        <img src="/wp-content/themes/stationhotels/img/rooms/s10/mansard/4.webp" alt="Фото 2" style="width: 60px; height: 60px; object-fit: cover; border-radius: 5px; cursor: pointer; border: 2px solid transparent;" onclick="changeRoomImage('room2-main', this.src, 'comfort', 1)">
                        <img src="/wp-content/themes/stationhotels/img/rooms/s10/mansard/6.webp" alt="Фото 3" style="width: 60px; height: 60px; object-fit: cover; border-radius: 5px; cursor: pointer; border: 2px solid transparent;" onclick="changeRoomImage('room2-main', this.src, 'comfort', 2)">
                        <img src="/wp-content/themes/stationhotels/img/rooms/s10/mansard/9.webp" alt="Фото 4" style="width: 60px; height: 60px; object-fit: cover; border-radius: 5px; cursor: pointer; border: 2px solid transparent;" onclick="changeRoomImage('room2-main', this.src, 'comfort', 3)">
                    </div>
                </div>
                <div class="room-content">
										<h3>
							<u><a href="/s10">Station Premier S10****"</a></u>
					</h3>
<p><b>Санкт-Петербург, Столярный переулок, 10-12</b></p>
                    <p style=text-align:justify;>4-звездочный отель в стиле Арт на 36 номеров.  Необычный авторский дизайн, уникальная архитектура и стеклянные потолки создают яркое впечатление у самых взыскательных гостей. Отель расположен во дворе, поэтому здесь тихо и спокойно. Номера с двумя отдельными спальнями - отличный выбор для деловых поездок вдвоём. Удобное расположение в 5 минутах от трёх станций метро, экспресс-офис, завтраки, ужины и оборудование для спорта сделают командировку эффективной и комфортной.
</p>
        <div style="display: flex; gap: 15px; margin-top: 10px;">
			         <a href="/oteli-dlja-delovyh-poezdok/#get_offer" style="flex: 1;"> 
                <button style="width: 100%; background: #9CB33C; color: white; padding: 15px 30px; font-size: 1rem; font-weight: 500; border-radius: 5px; text-decoration: none; display: inline-block; transition: all 0.3s ease; border: none; cursor: pointer;"
                        onmouseover="this.style.background='#fcaf17';"
                        onmouseout="this.style.background='#9CB33C';">Забронировать</button>
            </a>
            <a href="/s10" style="flex: 1;"> 
                <button class="room-button" style="width: 100%;">Узнать больше</button>
            </a>
        </div>
					
					
															<a href="#" class="rooms-category-video video-trigger" data-video-src="/wp-content/themes/stationhotels/img/video/S10SkyView-20mb.MP4" style="padding-top:20px";>
                  				<img class="rooms-category-icon" src="/wp-content/themes/stationhotels/img/play.svg?v=936" alt="" loading="lazy">
                  				<span>Смотреть видео. Номер с панормаными окнами</span>
               				</a>
                </div>
            </div>
            
            <!-- Номер 3 - Продуманность каждой детали -->
            <div class="room-item">
                <div class="room-image" style="position: relative; height: 400px; flex-shrink: 0;">
                    <a href="/wp-content/themes/stationhotels/img/rooms/l1/new/standart-plus/001.webp" data-lightbox="factura" data-title="Деловой стандарт">
                        <img id="room3-main" src="/wp-content/themes/stationhotels/img/rooms/l1/new/standart-plus/001.webp" alt="Деловой стандарт" style="width: 100%; height: 400px; object-fit: cover; display: block;">
                    </a>
                    <div class="room-badge">Деловой стандарт</div>
                    <div style="position: absolute; bottom: 20px; left: 20px; right: 20px; display: flex; gap: 10px; justify-content: center; background: rgba(0,0,0,0.5); padding: 10px; border-radius: 50px;">
                        <img src="/wp-content/themes/stationhotels/img/rooms/l1/new/standart-plus/001.webp" alt="Фото 1" style="width: 60px; height: 60px; object-fit: cover; border-radius: 5px; cursor: pointer; border: 2px solid white;" onclick="changeRoomImage('room3-main', this.src, 'factura', 0)">
                        <img src="/wp-content/themes/stationhotels/img/rooms/l1/new/standart-plus/002.webp" alt="Фото 2" style="width: 60px; height: 60px; object-fit: cover; border-radius: 5px; cursor: pointer; border: 2px solid transparent;" onclick="changeRoomImage('room3-main', this.src, 'factura', 1)">
                        <img src="/wp-content/themes/stationhotels/img/rooms/l1/new/standart-plus/005.webp" alt="Фото 3" style="width: 60px; height: 60px; object-fit: cover; border-radius: 5px; cursor: pointer; border: 2px solid transparent;" onclick="changeRoomImage('room3-main', this.src, 'factura', 2)">
                        <img src="/wp-content/themes/stationhotels/img/rooms/l1/new/standart-plus/011.webp" alt="Фото 4" style="width: 60px; height: 60px; object-fit: cover; border-radius: 5px; cursor: pointer; border: 2px solid transparent;" onclick="changeRoomImage('room3-main', this.src, 'factura', 3)">
                    </div>
                </div>
                <div class="room-content">
					<h3>
						<u><a href="/l1">Station L1***"</a></u>
					</h3>
					<p><b>Санкт-Петербург, Лиговский проспект, 1</b></p>
                    <p style=text-align:justify;>Современный 3-звездочный отель на 105 номеров для деловых поездок в Петербург. Удобно расположен рядом с Московским вокзалом и БКЗ Октябрьский. Яркие номера, продуманный сервис, завтрак  швеский стол, стабильный интернет  - оптимальный выбор для корпоративных клиентов, которым важны комфорт, вместимость и функциональность при оптимальном бюджете . В отеле есть конференц-зал, подходящий для делового общения и мероприятий.</p>
        <div style="display: flex; gap: 15px; margin-top: 10px;">
			         <a href="/oteli-dlja-delovyh-poezdok/#get_offer" style="flex: 1;"> 
                <button style="width: 100%; background: #9CB33C; color: white; padding: 15px 30px; font-size: 1rem; font-weight: 500; border-radius: 5px; text-decoration: none; display: inline-block; transition: all 0.3s ease; border: none; cursor: pointer;"
                        onmouseover="this.style.background='#fcaf17';"
                        onmouseout="this.style.background='#9CB33C';">Забронировать</button>
            </a>
            <a href="/l1" style="flex: 1;"> 
                <button class="room-button" style="width: 100%;">Узнать больше</button>
            </a>
        </div>
                </div>
            </div>
            
            <!-- Номер 4 - Свет и простор -->
            <div class="room-item">
                <div class="room-image" style="position: relative; height: 400px; flex-shrink: 0;">
                    <a href="/wp-content/themes/stationhotels/img/rooms/m19/new/standart/001.jpg" data-lightbox="panoram" data-title="Ритм города">
                        <img id="room4-main" src="/wp-content/themes/stationhotels/img/rooms/m19/new/standart/001.jpg" alt="Ритм города" style="width: 100%; height: 400px; object-fit: cover; display: block;">
                    </a>
                    <div class="room-badge">Ритм города</div>
                    <div style="position: absolute; bottom: 20px; left: 20px; right: 20px; display: flex; gap: 10px; justify-content: center; background: rgba(0,0,0,0.5); padding: 10px; border-radius: 50px;">
                        <img src="/wp-content/themes/stationhotels/img/rooms/m19/new/standart/001.jpg" alt="Фото 1" style="width: 60px; height: 60px; object-fit: cover; border-radius: 5px; cursor: pointer; border: 2px solid white;" onclick="changeRoomImage('room4-main', this.src, 'panoram', 0)">
                        <img src="/wp-content/themes/stationhotels/img/rooms/m19/new/standart/009.jpg" alt="Фото 2" style="width: 60px; height: 60px; object-fit: cover; border-radius: 5px; cursor: pointer; border: 2px solid transparent;" onclick="changeRoomImage('room4-main', this.src, 'panoram', 1)">
						                     <img src="/wp-content/themes/stationhotels/img/rooms/m19/new/standart/007.jpg" alt="Фото 3" style="width: 60px; height: 60px; object-fit: cover; border-radius: 5px; cursor: pointer; border: 2px solid transparent;" onclick="changeRoomImage('room4-main', this.src, 'panoram', 2)">
						                     <img src="/wp-content/themes/stationhotels/img/rooms/m19/standart-2/003.jpg" alt="Фото 4" style="width: 60px; height: 60px; object-fit: cover; border-radius: 5px; cursor: pointer; border: 2px solid transparent;" onclick="changeRoomImage('room4-main', this.src, 'panoram', 3)">
                    </div>
                </div>
                <div class="room-content">
					<h3>
						<u><a href="/m19">Station M19***"</a></u>
					</h3>
					<p><b>Санкт-Петербург, улица Марата, 19</b></p>
                    <p style=text-align:justify;>3-звездочный отель на 81 номер - удачный выбор для тех, кто ценит расположение в центре событий за разумный бюджет. Отель расположен всего в 5 минутах от Московского вокзала, а из окон открываются виды на исторический центр Петербурга. Гостей ждёт плотный завтрак без ограничений по времени — удобно для насыщенного дня и раннего выезда. Практичное решение для поездок, где важны и цена, и качество.</p>
        <div style="display: flex; gap: 15px; margin-top: 10px;">
			         <a href="/oteli-dlja-delovyh-poezdok/#get_offer" style="flex: 1;"> 
                <button style="width: 100%; background: #9CB33C; color: white; padding: 15px 30px; font-size: 1rem; font-weight: 500; border-radius: 5px; text-decoration: none; display: inline-block; transition: all 0.3s ease; border: none; cursor: pointer;"
                        onmouseover="this.style.background='#fcaf17';"
                        onmouseout="this.style.background='#9CB33C';">Забронировать</button>
            </a>
            <a href="/m19" style="flex: 1;"> 
                <button class="room-button" style="width: 100%;">Узнать больше</button>
            </a>
        </div>
					
					
					
					
					
                </div>
            </div>
            
            <!-- Номер 5 - Эстетика пространства -->
            <div class="room-item">
                <div class="room-image" style="position: relative; height: 400px; flex-shrink: 0;">
                    <a href="/wp-content/themes/stationhotels/img/rooms/n47/comfort/02.webp" data-lightbox="estetic" data-title="Петербургский стиль">
                        <img id="room5-main" src="/wp-content/themes/stationhotels/img/rooms/n47/comfort/02.webp" alt="Петербургский стиль" style="width: 100%; height: 400px; object-fit: cover; display: block;">
                    </a>
                    <div class="room-badge">Петербургский стиль</div>
                    <div style="position: absolute; bottom: 20px; left: 20px; right: 20px; display: flex; gap: 10px; justify-content: center; background: rgba(0,0,0,0.5); padding: 10px; border-radius: 50px;">
                        <img src="/wp-content/themes/stationhotels/img/rooms/n47/comfort/02.webp" alt="Фото 1" style="width: 60px; height: 60px; object-fit: cover; border-radius: 5px; cursor: pointer; border: 2px solid white;" onclick="changeRoomImage('room5-main', this.src, 'estetic', 0)">
                        <img src="/wp-content/themes/stationhotels/img/rooms/n47/comfort/03.webp" alt="Фото 2" style="width: 60px; height: 60px; object-fit: cover; border-radius: 5px; cursor: pointer; border: 2px solid transparent;" onclick="changeRoomImage('room5-main', this.src, 'estetic', 1)">
                        <img src="/wp-content/themes/stationhotels/img/rooms/n47/comfort/01.webp" alt="Фото 3" style="width: 60px; height: 60px; object-fit: cover; border-radius: 5px; cursor: pointer; border: 2px solid transparent;" onclick="changeRoomImage('room5-main', this.src, 'estetic', 2)">
                        <img src="/wp-content/themes/stationhotels/img/rooms/n47/comfort/05.webp" alt="Фото 4" style="width: 60px; height: 60px; object-fit: cover; border-radius: 5px; cursor: pointer; border: 2px solid transparent;" onclick="changeRoomImage('room5-main', this.src, 'estetic', 3)">
                    </div>
                </div>
                <div class="room-content">
					<h3>
						<u><a href="/n47">Station Premier N47****"</a></u>
					</h3>
					<p><b>Санкт-Петербург, Невский проспект, 47</b></p>
                    <p style=text-align:justify;>4-звездочный мини-отель на 8 номеров. Для тех, кто ценит атмосферу Петербурга и личное пространство. Отель находится на  Невском проспекте, всего в 1 км от Московского вокзала, при этом остаётся камерным и немноголюдным. Интерьеры в духе XIX века, тишина и уединение создают особое настроение. Завтрак весь день — просыпайтесь в своём ритме и начинайте день без спешки.
</p>
        <div style="display: flex; gap: 15px; margin-top: 10px;">
			         <a href="/oteli-dlja-delovyh-poezdok/#get_offer" style="flex: 1;"> 
                <button style="width: 100%; background: #9CB33C; color: white; padding: 15px 30px; font-size: 1rem; font-weight: 500; border-radius: 5px; text-decoration: none; display: inline-block; transition: all 0.3s ease; border: none; cursor: pointer;"
                        onmouseover="this.style.background='#fcaf17';"
                        onmouseout="this.style.background='#9CB33C';">Забронировать</button>
            </a>
            <a href="/n47" style="flex: 1;"> 
                <button class="room-button" style="width: 100%;">Узнать больше</button>
            </a>
        </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Галерея для корп  -->
<section class="new-hotel-section" id="gallery-life" style="margin-bottom:100px;">
    <div class="content">
        <div class="container font-light">
            <h2 style="margin:0;">Для корпоративных клиентов и бизнеса</h2>
        </div>
    </div>
    
    <div class="container" style="margin-top: 30px;">
        <!-- Контейнер с фотографиями -->
        <div style="position: relative;">
            <div id="simpleGallery" style="display: flex; gap: 20px; justify-content: center;">
                <!-- Фото 1 -->
                <div style="flex: 1; min-width: 0;">
                    <div style="text-align: center;">
                        <img src="/wp-content/uploads/BUSINESS-MEETING.jpg" alt="Центр для жизни" style="width: 100%; height: auto; aspect-ratio: 4/3; object-fit: cover; border-radius: 10px; cursor: default;">
                        <h3 style="margin: 15px 0 5px; color: #333; font-size: 1rem;">Индивидуальные тарифы</h3>
                    </div>
                </div>
                
                <!-- Фото 2 -->
                <div style="flex: 1; min-width: 0;">
                    <div style="text-align: center;">
                        <img src="/wp-content/uploads/image6.jpeg" alt="Апартаменты" style="width: 100%; height: auto; aspect-ratio: 4/3; object-fit: cover; border-radius: 10px; cursor: default;">
                        <h3 style="margin: 15px 0 5px; color: #333; font-size: 1rem;">Персональный менеджер</h3>
                    </div>
                </div>
                
                <!-- Фото 3 -->
                <div style="flex: 1; min-width: 0;">
                    <div style="text-align: center;">
                        <img src="/wp-content/uploads/edo.jpg" alt="Лаунж-зоны" style="width: 100%; height: auto; aspect-ratio: 4/3; object-fit: cover; border-radius: 10px; cursor: default;">
                        <h3 style="margin: 15px 0 5px; color: #333; font-size: 1rem;">ЭДО и закрывающие документы без задержек</h3>
                    </div>
                </div>
                
                <!-- Фото 4 -->
                <div style="flex: 1; min-width: 0;">
                    <div style="text-align: center;">
                        <img src="/wp-content/uploads/photo_2022-11-17_14-.webp" alt="Парковка" style="width: 100%; height: auto; aspect-ratio: 4/3; object-fit: cover; border-radius: 10px; cursor: default;">
                        <h3 style="margin: 15px 0 5px; color: #333; font-size: 1rem;">Участник госзакупок по 44-ФЗ</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Кнопка "Оставить заявку" -->
    <div style="display: flex; justify-content: center; margin-top: 50px;">
        <a href="/oteli-dlja-delovyh-poezdok/#get_offer" class="consult-button" style="background: none; color: #9CB33C; border: 2px solid #9CB33C; padding: 15px 50px; font-size: 1.1rem; font-weight: 500; border-radius: 5px; text-decoration: none; display: inline-block; transition: all 0.3s ease;"
           onmouseover="this.style.background='#9CB33C'; this.style.color='white'; this.style.borderColor='#9CB33C'; this.style.transform='translateY(-2px)'; this.style.boxShadow='0 6px 15px rgba(196, 160, 121, 0.4)';"
           onmouseout="this.style.background='none'; this.style.color='#9CB33C'; this.style.borderColor='2px solid #9CB33C'; this.style.transform='translateY(0)'; this.style.boxShadow='0 4px 10px rgba(196, 160, 121, 0.3)';">
            Получить корпоративное предложение
        </a>
    </div>
</section>

<!-- Галерея "Для продуктивной работы"  -->
<section class="new-hotel-section" id="gallery-work" style="margin-bottom:100px;">
    <div class="content">
        <div class="container font-light">
            <h2 style="margin:0;">Для продуктивной работы</h2>
        </div>
    </div>
    
    <div class="container" style="margin-top: 30px;">
        <!-- Стрелки навигации -->
        <div style="display: flex; justify-content: flex-end; margin-bottom: 20px;">
            <div style="display: flex; gap: 10px;">
                <button type="button" class="gallery-prev" data-gallery="work" style="background: #fcaf17; border: none; width: 40px; height: 40px; border-radius: 50%; cursor: pointer; display: flex; align-items: center; justify-content: center;">
                    <svg viewBox="0 0 26 18" width="20" height="14" fill="white">
                        <polygon points="22,2 10,9 22,16" transform="rotate(0 16,9)"/>
                    </svg>
                </button>
                <button type="button" class="gallery-next" data-gallery="work" style="background: #fcaf17; border: none; width: 40px; height: 40px; border-radius: 50%; cursor: pointer; display: flex; align-items: center; justify-content: center;">
                    <svg viewBox="0 0 26 18" width="20" height="14" fill="white">
                        <polygon points="4,2 16,9 4,16"/>
                    </svg>
                </button>
            </div>
        </div>
        
        <!-- Контейнер с фотографиями -->
        <div style="overflow: hidden; position: relative;">
            <div id="workGallery" class="gallery-container" style="display: flex; gap: 20px; transition: transform 0.3s ease;">
                <!-- Фото 1 -->
                <div style="flex: 0 0 calc(33.333% - 14px); min-width: 250px;">
                    <div style="text-align: center;">
                        <img src="/wp-content/uploads/Depositphotos_196057186_xl-2015-scaled.jpg" alt="СПА" style="width: 100%; height: 350px; object-fit: cover; border-radius: 10px; cursor: default;">
                        <h3 style="margin: 15px 0 5px; color: #333;">Рядом с метро и транспортными узлами</h3>
                    </div>
                </div>
                
                <!-- Фото 2 -->
                <div style="flex: 0 0 calc(33.333% - 14px); min-width: 250px;">
                    <div style="text-align: center;">
                        <img src="/wp-content/uploads/Depositphotos_212247066_ds-scaled.jpg" alt="Бассейн" style="width: 100%; height: 350px; object-fit: cover; border-radius: 10px; cursor: default;">
                        <h3 style="margin: 15px 0 5px; color: #333;">Рядом с центрами деловой активности</h3>
                    </div>
                </div>
                
                <!-- Фото 3 -->
                <div style="flex: 0 0 calc(33.333% - 14px); min-width: 250px;">
                    <div style="text-align: center;">
                        <img src="/wp-content/uploads/Depositphotos_178383954_xl-2015-scaled.jpg" alt="Фитнес" style="width: 100%; height: 350px; object-fit: cover; border-radius: 10px; cursor: default;">
                        <h3 style="margin: 15px 0 5px; color: #333;">Заезд 24\7</h3>
                    </div>
                </div>
                
                <!-- Фото 4 -->
                <div style="flex: 0 0 calc(33.333% - 14px); min-width: 250px;">
                    <div style="text-align: center;">
                        <img src="/wp-content/uploads/IMG_6295-HDR-scaled.jpg" alt="Арт" style="width: 100%; height: 350px; object-fit: cover; border-radius: 10px; cursor: default;">
                        <h3 style="margin: 15px 0 5px; color: #333;">Рабочее место в номере</h3>
                    </div>
                </div>
                
                <!-- Фото 5 -->
                <div style="flex: 0 0 calc(33.333% - 14px); min-width: 250px;">
                    <div style="text-align: center;">
                        <img src="/wp-content/uploads/Depositphotos_325537664_xl-2015-1-scaled.jpg" alt="Кинозал" style="width: 100%; height: 350px; object-fit: cover; border-radius: 10px; cursor: default;">
                        <h3 style="margin: 15px 0 5px; color: #333;">Скоростной wifi</h3>
                    </div>
                </div>
                
                <!-- Фото 6 -->
                <div style="flex: 0 0 calc(33.333% - 14px); min-width: 250px;">
                    <div style="text-align: center;">
                        <img src="/wp-content/uploads/new01-scaled.jpg" alt="Энотека" style="width: 100%; height: 350px; object-fit: cover; border-radius: 10px; cursor: default;">
                        <h3 style="margin: 15px 0 5px; color: #333;">Конференц-залы и оборудование</h3>
                    </div>
                </div>
                
                <!-- Фото 7 -->
                <div style="flex: 0 0 calc(33.333% - 14px); min-width: 250px;">
                    <div style="text-align: center;">
                        <img src="/wp-content/uploads/1553925.jpg" alt="Рестораны" style="width: 100%; height: 350px; object-fit: cover; border-radius: 10px; cursor: default;">
                        <h3 style="margin: 15px 0 5px; color: #333;">Экспресс-офис круглосуточно</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
    
    
<!-- Галерея "Для вкуса и настроения"  -->
<section class="new-hotel-section" id="gallery-taste" style="margin-bottom:100px;">
    <div class="content">
        <div class="container font-light">
            <h2 style="margin:0;">Для вкуса и настроения</h2>
        </div>
    </div>
    
    <div class="container" style="margin-top: 30px;">
        <!-- Стрелки навигации -->
        <div style="display: flex; justify-content: flex-end; margin-bottom: 20px;">
            <div style="display: flex; gap: 10px;">
                <button type="button" class="gallery-prev" data-gallery="taste" style="background: #fcaf17; border: none; width: 40px; height: 40px; border-radius: 50%; cursor: pointer; display: flex; align-items: center; justify-content: center;">
                    <svg viewBox="0 0 26 18" width="20" height="14" fill="white">
                        <polygon points="22,2 10,9 22,16" transform="rotate(0 16,9)"/>
                    </svg>
                </button>
                <button type="button" class="gallery-next" data-gallery="taste" style="background: #fcaf17; border: none; width: 40px; height: 40px; border-radius: 50%; cursor: pointer; display: flex; align-items: center; justify-content: center;">
                    <svg viewBox="0 0 26 18" width="20" height="14" fill="white">
                        <polygon points="4,2 16,9 4,16"/>
                    </svg>
                </button>
            </div>
        </div>
        
        <!-- Контейнер с фотографиями -->
        <div style="overflow: hidden; position: relative;">
            <div id="tasteGallery" class="gallery-container" style="display: flex; gap: 20px; transition: transform 0.3s ease;">
                <!-- Фото 1 -->
                <div style="flex: 0 0 calc(33.333% - 14px); min-width: 250px;">
                    <div style="text-align: center;">
                        <img src="/wp-content/uploads/638900094694975377-d93bb639-e6a3-4f47-b45c-1fd4b2db23e4.jpeg" alt="СПА" style="width: 100%; height: 350px; object-fit: cover; border-radius: 10px; cursor: default;">
                        <h3 style="margin: 15px 0 5px; color: #333;">Завтраки в соответствии с деловым расписанием</h3>
                    </div>
                </div>
                
                <!-- Фото 2 -->
                <div style="flex: 0 0 calc(33.333% - 14px); min-width: 250px;">
                    <div style="text-align: center;">
                        <img src="/wp-content/uploads/salad-3798301_1280.jpg" alt="Бассейн" style="width: 100%; height: 350px; object-fit: cover; border-radius: 10px; cursor: default;">
                        <h3 style="margin: 15px 0 5px; color: #333;">Обеды и ужины включены в тариф</h3>
                    </div>
                </div>
                
                <!-- Фото 3 -->
                <div style="flex: 0 0 calc(33.333% - 14px); min-width: 250px;">
                    <div style="text-align: center;">
                        <img src="/wp-content/uploads/011.jpg" alt="Фитнес" style="width: 100%; height: 350px; object-fit: cover; border-radius: 10px; cursor: default;">
                        <h3 style="margin: 15px 0 5px; color: #333;">Бесплатный чай и кофе круглосуточно</h3>
                    </div>
                </div>
                
                <!-- Фото 4 -->
                <div style="flex: 0 0 calc(33.333% - 14px); min-width: 250px;">
                    <div style="text-align: center;">
                        <img src="/wp-content/uploads/SHEV2062.jpg" alt="Арт" style="width: 100%; height: 350px; object-fit: cover; border-radius: 10px; cursor: default;">
                        <h3 style="margin: 15px 0 5px; color: #333;">Кофе брейки и банкеты</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>    
</section>
    
<!-- Галерея "Для отдыха и комфорта"  -->
<section class="new-hotel-section" id="gallery-comfort" style="margin-bottom:100px;">
    <div class="content">
        <div class="container font-light">
            <h2 style="margin:0;">Для отдыха и комфорта</h2>
        </div>
    </div>
    
    <div class="container" style="margin-top: 30px;">
        <!-- Стрелки навигации -->
        <div style="display: flex; justify-content: flex-end; margin-bottom: 20px;">
            <div style="display: flex; gap: 10px;">
                <button type="button" class="gallery-prev" data-gallery="comfort" style="background: #fcaf17; border: none; width: 40px; height: 40px; border-radius: 50%; cursor: pointer; display: flex; align-items: center; justify-content: center;">
                    <svg viewBox="0 0 26 18" width="20" height="14" fill="white">
                        <polygon points="22,2 10,9 22,16" transform="rotate(0 16,9)"/>
                    </svg>
                </button>
                <button type="button" class="gallery-next" data-gallery="comfort" style="background: #fcaf17; border: none; width: 40px; height: 40px; border-radius: 50%; cursor: pointer; display: flex; align-items: center; justify-content: center;">
                    <svg viewBox="0 0 26 18" width="20" height="14" fill="white">
                        <polygon points="4,2 16,9 4,16"/>
                    </svg>
                </button>
            </div>
        </div>
        
        <!-- Контейнер с фотографиями -->
        <div style="overflow: hidden; position: relative;">
            <div id="comfortGallery" class="gallery-container" style="display: flex; gap: 20px; transition: transform 0.3s ease;">
                <!-- Фото 1 -->
                <div style="flex: 0 0 calc(33.333% - 14px); min-width: 250px;">
                    <div style="text-align: center;">
                        <img src="/wp-content/uploads/Depositphotos_202564754_xl-2015-1-1.jpg" alt="СПА" style="width: 100%; height: 350px; object-fit: cover; border-radius: 10px; cursor: default;">
                        <h3 style="margin: 15px 0 5px; color: #333;">Трансфер в\из отеля</h3>
                    </div>
                </div>
                
                <!-- Фото 2 -->
                <div style="flex: 0 0 calc(33.333% - 14px); min-width: 250px;">
                    <div style="text-align: center;">
                        <img src="/wp-content/uploads/Depositphotos_186665866_xl-2015-scaled.jpg" alt="Бассейн" style="width: 100%; height: 350px; object-fit: cover; border-radius: 10px; cursor: default;">
                        <h3 style="margin: 15px 0 5px; color: #333;">Шторы блэкаут</h3>
                    </div>
                </div>
                
                <!-- Фото 3 -->
                <div style="flex: 0 0 calc(33.333% - 14px); min-width: 250px;">
                    <div style="text-align: center;">
                        <img src="/wp-content/uploads/IMG_1533-HDR-scaled.jpg" alt="Фитнес" style="width: 100%; height: 350px; object-fit: cover; border-radius: 10px; cursor: default;">
                        <h3 style="margin: 15px 0 5px; color: #333;">Оборудование для фитнеса и йоги</h3>
                    </div>
                </div>
                
                <!-- Фото 4 -->
                <div style="flex: 0 0 calc(33.333% - 14px); min-width: 250px;">
                    <div style="text-align: center;">
                        <img src="/wp-content/uploads/Depositphotos_186664332_xl-2015-scaled.jpg" alt="Арт" style="width: 100%; height: 350px; object-fit: cover; border-radius: 10px; cursor: default;">
                        <h3 style="margin: 15px 0 5px; color: #333;">Стирка и химчистка</h3>
                    </div>
                </div>
                
                <!-- Фото 5 -->
                <div style="flex: 0 0 calc(33.333% - 14px); min-width: 250px;">
                    <div style="text-align: center;">
                        <img src="/wp-content/uploads/river.jpg" alt="Кинозал" style="width: 100%; height: 350px; object-fit: cover; border-radius: 10px; cursor: default;">
                        <h3 style="margin: 15px 0 5px; color: #333;">Экскурсии</h3>
                    </div>
                </div>
                
                <!-- Фото 6 -->
                <div style="flex: 0 0 calc(33.333% - 14px); min-width: 250px;">
                    <div style="text-align: center;">
                        <img src="/wp-content/uploads/rawImage.jpg" alt="Энотека" style="width: 100%; height: 350px; object-fit: cover; border-radius: 10px; cursor: default;">
                        <h3 style="margin: 15px 0 5px; color: #333;">Удобства для домашних питомцев</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<script>
// Единый скрипт для всех галерей
document.addEventListener('DOMContentLoaded', function() {
    // Хранилище состояний для каждой галереи
    const galleries = {};
    
    // Инициализация всех галерей
    function initGallery(galleryId) {
        const gallery = document.getElementById(galleryId);
        if (!gallery) return;
        
        const parent = gallery.parentElement.parentElement;
        const prevBtn = parent.querySelector('.gallery-prev[data-gallery="' + galleryId.replace('Gallery', '') + '"]');
        const nextBtn = parent.querySelector('.gallery-next[data-gallery="' + galleryId.replace('Gallery', '') + '"]');
        
        if (!prevBtn || !nextBtn) return;
        
        // Сохраняем состояние галереи
        galleries[galleryId] = {
            element: gallery,
            prevBtn: prevBtn,
            nextBtn: nextBtn,
            scrollPosition: 0,
            itemWidth: 0,
            maxScroll: 0
        };
        
        updateGalleryDimensions(galleryId);
        updateGalleryButtons(galleryId);
        
        // Добавляем обработчики событий
        prevBtn.addEventListener('click', () => scrollGallery(galleryId, 'prev'));
        nextBtn.addEventListener('click', () => scrollGallery(galleryId, 'next'));
    }
    
    // Обновление размеров галереи
    function updateGalleryDimensions(galleryId) {
        const gallery = galleries[galleryId];
        if (!gallery || !gallery.element) return;
        
        const firstItem = gallery.element.querySelector('div');
        gallery.itemWidth = (firstItem?.offsetWidth || 270) + 20;
        gallery.maxScroll = -(gallery.element.scrollWidth - gallery.element.parentElement.offsetWidth);
        
        // Корректируем позицию, если она выходит за пределы
        if (gallery.scrollPosition < gallery.maxScroll) {
            gallery.scrollPosition = gallery.maxScroll;
            gallery.element.style.transform = `translateX(${gallery.scrollPosition}px)`;
        }
        
        updateGalleryButtons(galleryId);
    }
    
    // Обновление состояния кнопок
    function updateGalleryButtons(galleryId) {
        const gallery = galleries[galleryId];
        if (!gallery) return;
        
        if (gallery.scrollPosition >= 0) {
            gallery.prevBtn.style.opacity = '0.3';
            gallery.prevBtn.style.pointerEvents = 'none';
        } else {
            gallery.prevBtn.style.opacity = '1';
            gallery.prevBtn.style.pointerEvents = 'auto';
        }
        
        if (gallery.scrollPosition <= gallery.maxScroll) {
            gallery.nextBtn.style.opacity = '0.3';
            gallery.nextBtn.style.pointerEvents = 'none';
        } else {
            gallery.nextBtn.style.opacity = '1';
            gallery.nextBtn.style.pointerEvents = 'auto';
        }
    }
    
    // Прокрутка галереи
    function scrollGallery(galleryId, direction) {
        const gallery = galleries[galleryId];
        if (!gallery) return;
        
        let newPosition = gallery.scrollPosition;
        
        if (direction === 'prev') {
            if (gallery.scrollPosition < 0) {
                newPosition = Math.min(gallery.scrollPosition + gallery.itemWidth, 0);
            }
        } else if (direction === 'next') {
            if (gallery.scrollPosition > gallery.maxScroll) {
                newPosition = Math.max(gallery.scrollPosition - gallery.itemWidth, gallery.maxScroll);
            }
        }
        
        if (newPosition !== gallery.scrollPosition) {
            gallery.scrollPosition = newPosition;
            gallery.element.style.transform = `translateX(${gallery.scrollPosition}px)`;
            updateGalleryButtons(galleryId);
        }
    }
    
    // Инициализируем все галереи
    initGallery('workGallery');
    initGallery('tasteGallery');
    initGallery('comfortGallery');
    
    // Обработчик изменения размера окна
    window.addEventListener('resize', function() {
        Object.keys(galleries).forEach(galleryId => {
            updateGalleryDimensions(galleryId);
        });
    });
});
</script>
	

	
    <!-- Вдохновляющее окружение -->
    <section class="new-hotel-section">
        <div class="container">
            <h2 class="new-hotel-title">Вдохновляющее окружение</h2>
            <p style="font-size: 1.2rem; margin-bottom: 40px; color: #555;">Отели Station — это часть архитектурной истории Петербурга: от элегантных особняков до доходных домов XIX века, которые подчеркивают статус и вкус вашей компании. Внутреннее устройство наших отелей отвечает современным потребностям бизнеса: комфортные номера, удобные рабочие зоны, конференц залы, стабильный Wi‑Fi, уютные  пространства для завтрака, круглосуточный  консъерж сервис  - создадут атмосферу уверенности и заботы о вашей команде.<br><br>
            Размещение в отелях Station — это не просто организация поездки, а стратегическая инвестиция в лояльность сотрудников и безупречная деловая репутация вашей компании в Петербурге.
            </p>
            
            <div class="location-grid">
                <div class="location-item">
                    <div class="location-time">10мин</div>
                    <div class="location-desc">
                        <strong>пешком или на автомобиле от</strong>
                        Московского вокзала
                    </div>
                </div>
                
                <div class="location-item">
                    <div class="location-time">30мин</div>
                    <div class="location-desc">
                        <strong>на автомобиле от</strong>
                        аэропорта
                    </div>
                </div>
                
                <div class="location-item">
                    <div class="location-time">30мин</div>
                    <div class="location-desc">
                        <strong>на автомобиле до</strong>
                        Экспофорума и Сибур Арены
                    </div>
                </div>
                <div class="location-item">
                    <div class="location-time">10мин</div>
                    <div class="location-desc">
                        <strong>пешком до</strong>
                        Невского проспекта
                    </div>
                </div>
                <div class="location-item">
                    <div class="location-time">5мин</div>
                    <div class="location-desc">
                        <strong>на автомобиле до</strong>
                        Дворцовой площади и Эрмитажа
                    </div>
                </div>
                <div class="location-item">
                    <div class="location-time">10мин</div>
                    <div class="location-desc">
                        <strong>пешком до</strong>
                        Исаакиевского собора и Медного всадника
                    </div>
                </div>
            </div>
            
            <div style="background: #f8f8f8; border-radius: 12px; padding: 20px 30px; margin-top: 25px;">
                <div style="display: flex; align-items: baseline; justify-content: center; flex-wrap: wrap; gap: 30px; row-gap: 15px;">
                                     <span style="display: flex; align-items: baseline; gap: 8px;">
                        <strong style="font-size: 1.2rem; color: #333;">в пределах</strong>
                        <div class="location-time" style="font-size: 2.5rem; font-weight: 800; line-height: 1;">15мин</div>
                    </span>
					
					<span style="font-size: 1.1rem; color: #555;">100 кафе и ресторанов</span>
           			<span style="font-size: 1.1rem; color: #555;">45 дворцов и музеев</span>
                    <span style="font-size: 1.1rem; color: #555;">28 театров</span>

                </div>
            </div>
            
        </div>

		
				        <!-- Кнопка "Оставить заявку" -->
        <div style="display: flex; justify-content: center; margin-top: 50px;">
        <a href="/oteli-dlja-delovyh-poezdok/#get_offer" class="consult-button" style="background: none; color: #9CB33C; border: 2px solid #9CB33C; padding: 15px 50px; font-size: 1.1rem; font-weight: 500; border-radius: 5px; text-decoration: none; display: inline-block; transition: all 0.3s ease;"
           onmouseover="this.style.background='#9CB33C'; this.style.color='white'; this.style.borderColor='#9CB33C'; this.style.transform='translateY(-2px)'; this.style.boxShadow='0 6px 15px rgba(196, 160, 121, 0.4)';"
           onmouseout="this.style.background='none'; this.style.color='#9CB33C'; this.style.borderColor='2px solid #9CB33C'; this.style.transform='translateY(0)'; this.style.boxShadow='0 4px 10px rgba(196, 160, 121, 0.3)';">
                Как начать сотрудничество
            </a>
        </div>
	</div>
	
    </div>
    </section>



<!-- скрипт со стилями -->
<script>
function changeRoomImage(imgId, src, lightboxGroup, index) {
    // Меняем главное фото
    document.getElementById(imgId).src = src;
    
    // Обновляем href в ссылке Lightbox
    const link = document.querySelector(`a[data-lightbox="${lightboxGroup}"]`);
    if (link) {
        link.href = src;
    }
    
    // Подсвечиваем активную миниатюру
    const container = document.getElementById(imgId).closest('.room-image').querySelector('div[style*="bottom: 20px"]');
    if (container) {
        container.querySelectorAll('img').forEach((img, i) => {
            if (i === index) {
                img.style.border = '2px solid white';
            } else {
                img.style.border = '2px solid transparent';
            }
        });
    }
}

// Добавляем обработчики для синхронизации Lightbox при открытии
document.addEventListener('DOMContentLoaded', function() {
    // Если используется Lightbox, можно добавить синхронизацию
    if (window.lightbox) {
        // Ваш код для Lightbox, если нужно
    }
});
</script>

    <!-- Карта -->
<?php get_template_part( 'inc/room/block', 'map' ); ?>

<!-- блок форма обратной связи -->
<section style="margin-top:50px; padding: 20px" name="get_offer" id="get_offer">
			<div class="content">
				<div class="container font-light">	
					<h2 style="margin-top:100px;">Запросите свои условия</h2>
					<script src='https://www.google.com/recaptcha/api.js'></script>

					<form id="reg_form" role="form" action="/custom-scripts/send-b2b.php" method="post" onsubmit="return checkForm(); yaCounter22298845.hit('/b2b-send');  return true;">
					<!-- <form id="reg_form" role="form" action="/custom-scripts/send-b2b.php" method="post" onsubmit="return checkForm(); ga('send', 'pageview', '/b2b-send'); yaCounter22298845.hit('/b2b-send');  return true;"> -->


						<input name="ip" type="hidden" value="" />
						<input name="UTM" type="hidden" value="" />
						<input name="page" type="hidden" value="station-hotels.ru/corporate-guests" />

						<div>
							<div class="input">
								<label style="width:500px; max-width:100%;">Организация</label>
								<input name="org" type="text" />
							</div>
							
							<div class="input">
								<label style="width:500px; max-width:100%;">Имя представителя</label>
								<input name="name" type="text" />
							</div>
							
							<div class="input" style="width:500px; max-width:100%;;">
								<label style="width:500px; max-width:100%;">Укажите ориентировочную дату заезда и количество гостей</label>
									<input name="info" type="text" />
							</div>
							

							<div class="input" style="width:500px; max-width:100%;;">
								<label style="width:500px; max-width:100%;">Телефон*</label>
								<input name="phone" type="tel" placeholder="+79450000000" required />
							</div>

							<div class="input" style="width:500px; max-width:100%;;">
								<label style="width:500px; max-width:100%;">Email</label>
								<input name="email" type="email" placeholder="email@email.com" />
							</div>
							
														
						</div>

						<div class="input">
							<input id="personaldata" name="personaldata" required type="checkbox" /> <label class="checkbox-label"><b>Я принимаю условия</b> <a href="/privacy" target=_blank>Соглашения на обработку и хранение моих персональных данных</a>.</label>
						</div>
						
						<div class="g-recaptcha" data-sitekey="6LcGcEcUAAAAABfy0fKjBFQtzwlCeZdjYhcec8qc"></div>

						<div>
							<button class="button button--orange" name="submit" type="submit">Отправить запрос</button>
						</div>

					</form>
					
				</div>
			</div>
		</section>
<!-- /блок форма обратной связи -->

<!-- Галерея для спецпредложений  -->
<section class="new-hotel-section" id="gallery-life" style="margin-bottom:100px;">
    <div class="content">
        <div class="container font-light">
            <h2 style="margin:0;">Спецпредложения для деловых путешествеников</h2>
        </div>
    </div>
    
    <div class="container" style="margin-top: 30px;">
        <!-- Контейнер с фотографиями -->
        <div style="position: relative;">
            <div id="simpleGallery" style="display: flex; gap: 20px; justify-content: center;">
                <!-- Фото 1 -->
                <div style="flex: 1; min-width: 0;">
                    <div style="text-align: center;">
                        <img src="/wp-content/webpc-passthru.php?src=https://station-hotels.ru/wp-content/uploads/Depositphotos_168708884_xl-2015-1-1.jpg" alt="Центр для жизни" style="width: 100%; height: auto; aspect-ratio: 4/3; object-fit: cover; border-radius: 10px; cursor: default;">
                        <h3 style="margin: 15px 0 5px; color: #333; font-size: 1rem;">Кэшбэк рублями 8%</h3>
                    </div>
					
					        <div style="display: flex; justify-content: center; margin-top: 20px;">
            <a href="/blog/cashback-8/" class="consult-button" style="background: #9CB33C; color: white; padding: 10px 50px; font-size: 1.1rem; font-weight: 100; border-radius: 5px; text-decoration: none;"
               onmouseover="this.style.background='#fcaf17'; this.style.borderColor='#fcaf17';"
               onmouseout="this.style.background='#9CB33C'; this.style.borderColor='#9CB33C';">
                Подробнее
            </a>
        </div>
					
                </div>
                
                <!-- Фото 2 -->
                <div style="flex: 1; min-width: 0;">
                    <div style="text-align: center;">
                        <img src="/wp-content/uploads/cuisine-2248567_1280.jpg" alt="Апартаменты" style="width: 100%; height: auto; aspect-ratio: 4/3; object-fit: cover; border-radius: 10px; cursor: default;">
                        <h3 style="margin: 15px 0 5px; color: #333; font-size: 1rem;">Ужин в ресторане</h3>
                    </div>
										        <div style="display: flex; justify-content: center; margin-top: 20px;">
            <a href="/booking/?hotel_id=34810&be-offer=610614" class="consult-button" style="background: #9CB33C; color: white; padding: 10px 50px; font-size: 1.1rem; font-weight: 100; border-radius: 5px; text-decoration: none;"
               onmouseover="this.style.background='#fcaf17'; this.style.borderColor='#fcaf17';"
               onmouseout="this.style.background='#9CB33C'; this.style.borderColor='#9CB33C';">
                Забронировать
            </a>
					</div>
                </div>
                
                <!-- Фото 3 
                <div style="flex: 1; min-width: 0;">
                    <div style="text-align: center;">
                        <img src="/wp-content/uploads/Depositphotos_125640740_xl-2015-1-1.jpg" alt="Лаунж-зоны" style="width: 100%; height: auto; aspect-ratio: 4/3; object-fit: cover; border-radius: 10px; cursor: default;">
                        <h3 style="margin: 15px 0 5px; color: #333; font-size: 1rem;">Выходные с семьей - бесплатно</h3>
                    </div>
										        <div style="display: flex; justify-content: center; margin-top: 20px;">
            <a href="/business-rest/" class="consult-button" style="background: #9CB33C; color: white; padding: 10px 50px; font-size: 1.1rem; font-weight: 100; border-radius: 5px; text-decoration: none;"
               onmouseover="this.style.background='#fcaf17'; this.style.borderColor='#fcaf17';"
               onmouseout="this.style.background='#9CB33C'; this.style.borderColor='#9CB33C';">
                Подробнее
            </a>
                </div>
				</div> -->
                
  
            </div>
        </div>
    </div>
	</section>

 <!-- Модальное окно для галереи -->
    <div id="imageModal" class="modal">
        <span class="modal-close" onclick="closeModal()">&times;</span>
        <button class="modal-prev" onclick="changeImage(-1)">&#10094;</button>
        <button class="modal-next" onclick="changeImage(1)">&#10095;</button>
        <div class="modal-content">
            <img id="modalImage" src="" alt="Галерея">
        </div>
    </div>
    
    <?php endwhile; ?>
    
</main>

<script>
// Массив с изображениями для галерей
const galleryImages = [
    '/wp-content/themes/stationhotels/img/axis/life/005.webp',
    '/wp-content/themes/stationhotels/img/axis/life/002.webp',
    '/wp-content/themes/stationhotels/img/axis/life/004.webp',
    '/wp-content/themes/stationhotels/img/axis/life/001.webp',
    '/wp-content/themes/stationhotels/img/axis/life/003.webp',
    '/wp-content/themes/stationhotels/img/axis/relax/003.webp',
    '/wp-content/themes/stationhotels/img/axis/relax/007.webp',
    '/wp-content/themes/stationhotels/img/axis/relax/006.webp',
    '/wp-content/themes/stationhotels/img/axis/relax/004.webp',
    '/wp-content/themes/stationhotels/img/axis/relax/005.webp',
    '/wp-content/themes/stationhotels/img/axis/relax/002.webp',
    '/wp-content/themes/stationhotels/img/axis/relax/001.webp'
];

let currentImageIndex = 0;
const modal = document.getElementById('imageModal');
const modalImage = document.getElementById('modalImage');

function openModal(index) {
    currentImageIndex = index;
    modalImage.src = galleryImages[currentImageIndex];
    modal.classList.add('show');
    document.body.style.overflow = 'hidden';
}

function closeModal() {
    modal.classList.remove('show');
    document.body.style.overflow = 'auto';
}

function changeImage(direction) {
    currentImageIndex += direction;
    if (currentImageIndex < 0) {
        currentImageIndex = galleryImages.length - 1;
    } else if (currentImageIndex >= galleryImages.length) {
        currentImageIndex = 0;
    }
    modalImage.src = galleryImages[currentImageIndex];
}

// Закрытие по клику вне изображения
if (modal) {
    modal.addEventListener('click', function(e) {
        if (e.target === modal) {
            closeModal();
        }
    });
}

// Обработка клавиш
document.addEventListener('keydown', function(e) {
    if (modal?.classList.contains('show')) {
        if (e.key === 'Escape') {
            closeModal();
        } else if (e.key === 'ArrowLeft') {
            changeImage(-1);
        } else if (e.key === 'ArrowRight') {
            changeImage(1);
        }
    }
});
</script>

<?php 
get_footer();
?>