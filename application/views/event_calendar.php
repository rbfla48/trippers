<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="고향사랑방문의해 남해군 행사 및 마이굿플레이스, 구석구석남해 소식을 소개합니다">
	<meta property="og:type" content="website"> 
	<meta property="og:title" content="구석구석남해, 마이굿플레이스">
	<meta property="og:description" content="2025 고향사랑 방문의 해, 국민고향 남해로 오시다">
	<meta property="og:image" content="https://visitnamhae.co.kr/assets/img/logo.svg">
	<meta property="og:url" content="https://visitnamhae.co.kr">
  	<title>Visitnamhae</title>
</head>
<script src="https://cdn.jsdelivr.net/npm/fullcalendar@6.1.14/index.global.min.js"></script>
<!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" ></script> -->
<!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"> -->
<link rel="stylesheet" href="assets/bootstrap/bootstrap-5.3.3-dist/css/bootstrap.css">
<link rel="stylesheet" href="assets/bootstrap/bootstrap-5.3.3-dist/js/bootstrap.bundle.js">
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<!-- swiper -->
<link rel="stylesheet" href="assets/js/swiper/package/swiper-bundle.min.css">
<script src="assets/js/swiper/package/swiper-bundle.min.js"></script>
<style>
	.pointer{
		cursor: pointer;
	}
	.logo-size{
    width: 100%;
		max-width: 630px;
    padding: 0 30px;
	}
	.title-size{
		max-width: 726px;
    width: 100%;
    padding: 0 20px;
	}
	.event-size{
		max-width: 1064px;
    width: 100%;
    padding: 0 20px;
	}
/* 하단 슬라이드 스타일 */
	.swiper {
		width: 100%;
		height: 100%;
	}

	.swiper-slide {
		text-align: center;
		font-size: 18px;
		background: #fff;
		display: flex;
		justify-content: center;
		align-items: center;
	}

	.swiper-slide img {
		display: block;
		width: 100%;
		height: 100%;
		object-fit: cover;
	}
	/* 슬라이드 페이지네이션 위치 */
	.swiper-horizontal>.swiper-pagination-bullets, .swiper-pagination-bullets.swiper-pagination-horizontal, .swiper-pagination-custom, .swiper-pagination-fraction{
		top: 0 !important;
    right: 0 !important;
    width: 100px;
    text-align: end !important;
    left: auto;
	}
	/* 슬라이드 페이지네이션 커스텀 */
	.swiper-pagination-bullet{
		width: var(--swiper-pagination-bullet-width, var(--swiper-pagination-bullet-size, 15px));
    height: var(--swiper-pagination-bullet-height, var(--swiper-pagination-bullet-size, 15px));
    display: inline-block;
    border-radius: var(--swiper-pagination-bullet-border-radius, 50%);
    background: #ffffff;
    opacity: var(--swiper-pagination-bullet-inactive-opacity, 1);
    border: 3px solid #F4BC1B;
	}
	.swiper-pagination-bullet-active{
		background: #F4BC1B;
	}

	/* 달력 커스텀 */
	.fc-toolbar-chunk:nth-child(3),
	.fc-toolbar-chunk:nth-child(2),
	.fc-today-button{
		display: none !important;
	}
	.fc-header-toolbar{
		flex-direction: row-reverse !important;
	}
	.fc-daygrid-day-top{
		justify-content: center;
	}
	td div div a,
	th div a{
		color: unset;
		text-decoration: none;
		/* font-size: 30px; */
		font-size: calc(1.3rem + 0.6vw) !important;
	}
	td div div a{
		font-weight: bold;
	}
	th div a{
		padding: 28px 0 !important;
	}
	.fc-theme-standard .fc-scrollgrid {
    border: 0px solid var(--fc-border-color);
	}
	.fc-theme-standard th {
    border: 0px solid var(--fc-border-color);
	}
	table thead tr{
		border-bottom: 3px solid black !important;
	}
	.fc-day-sun,
	.fc-day-sat{
		color: #32BAD4;
	}
	.fc-daygrid-day{
		border: 1px solid #E2E2E2 !important;
	}
	.fc-scrollgrid-sync-table{
		border-left: 1px !important;
	}
	.fc-dayGridMonth-view{
		max-width: 946px;
    margin: 0 auto;
	}
	.fc-next-button{
		/* background-image: url('assets/img/month-right.svg'); */
	}
	.month-text{
		/* position: absolute;
		width: 100%;
		top: -370px;
		left: 0px; */
		display: flex;
    width: 100%;
	}
	.fc .fc-toolbar.fc-header-toolbar{
		margin-bottom: -57px !important;
		position: relative;
    right: 0;
    top: -57px;
	}
	.fc-daygrid-day-events{
		text-align: center;
	}
	.fc-prev-button{
		background-image: url(assets/img/month-left.svg);
    position: absolute;
    right: 40px;
    top: -16px;
    height: 57px;
    width: 50px;
    background-repeat: no-repeat;
    border: 0;
    background-color: transparent !important;
		border-color: transparent !important;
	}
	.fc-next-button{
		background-image: url(assets/img/month-right.svg);
    position: absolute;
    right: 0px;
    top: -16px;
    height: 57px;
    width: 50px;
    background-repeat: no-repeat;
    border: 0;
    background-color: transparent !important;
		border-color: transparent !important;
	}
	.media-gap{
		gap: 100px;
	}
	.popup-container{
		right: 5%;
    margin-top: 7%;
	}
	@media (max-width: 768px) {
		.container{
			right: auto;
			margin-top: auto;
		}
		.fc-prev-button{
			background-image: url(assets/img/month-left-m.svg);
			top: 0px;
			right: 0px;
		}
		.fc-next-button{
			background-image: url(assets/img/month-right-m.svg);
			top: 0px;
			right: 0px;
			background-position-x: right;
		}
		td div div a,
		th div a{
			font-size: 1.25rem !important;
		}
		.custom-check-icon{
			width: 26px !important;
		}
		#pc-event-banner,
		.pc-a-link{
			display: none !important;
		}
		#mo-event-banner,
		.mo-a-link{
			display: block !important;
		}
		.swiper-horizontal>.swiper-pagination-bullets, .swiper-pagination-bullets.swiper-pagination-horizontal, .swiper-pagination-custom, .swiper-pagination-fraction{
			top: auto !important;
			/* right: auto !important; */
			width: 100%;
			text-align: center !important;
			left: auto;
		}
		.media-gap{
			gap: 80px;
		}
	}
	@media (max-width: 742px) {
		.fc .fc-view-harness {
			height: 550px !important;
		}
		#calender-box{
			display: none;
		}
		.left-box-m,
		.right-box-m,
		.top-box{
			display: block !important;
		}
		.left-box-m,
		.right-box-m{
			height: 565px;
		}
		#calendar{
			width: 94%;
    	margin: 0 auto;
		}
	}
	@media (max-width: 425px) {
		.fc-prev-button{
			background-image: url(assets/img/month-left-s.svg);
			top: 20px;
			right: 0px;
			background-position-x: right;
		}
		.fc-next-button{
			background-image: url(assets/img/month-right-s.svg);
			top: 20px;
			right: 0px;
		}
		td div div a,
		th div a{
			font-size: 12px !important;
		}
		th div a{
			padding: 14px 0 !important;
		}
		.custom-check-icon{
			width: 18px !important;
		}
		.media-gap{
			gap: 60px;
		}
		.media-mt-0{
			margin-top: 0px !important;
		}
		.fc .fc-view-harness {
			height: 409px !important;
		}
		#calender-box{
			display: none;
		}
		.left-box-m,
		.right-box-m{
			display: none !important;
		}
		.left-box,
		.right-box,
		.top-box{
			display: block !important;
		}
		.left-box,
		.right-box{
			height: 421px;
		}
	}
	.left-box,
	.right-box,
	.left-box-m,
	.right-box-m,
	.top-box{
		display: none;
	}
	.fc-icon.fc-icon-chevron-right,
	.fc-icon.fc-icon-chevron-left{
		display: none;
	}
  .fc-next-button:focus,
	.fc-prev-button:focus {
		box-shadow: none !important; /* 그림자 제거 */
  }
	.custom-check-icon{
		width: 31px;
	}


	
	.text-bg-tag{
		color: #000 !important;
    /* background-color: RGBA(var(--bs-light-rgb), var(--bs-bg-opacity, 1)) !important; */
    background-color: #F0F0F0;
    border: 1px solid #c7c7c7;
	}
	#pc-event-banner,
	.pc-a-link{
		display: block;
	}
	#mo-event-banner,
	.mo-a-link{
		display: none;
	}

	.minilogo{
		width: 20%;
		min-width: 115px;
		max-width: 175px;
	}
</style>
<body>
	<div class="" style="position: sticky;z-index: 10;top: 0;">
		<div class="card p-0 popup-container" style="position: absolute; width: 450px; max-width: 100%;">
			<div class="bg-black" data-bs-theme="dark" style="position: absolute; border-radius: 50%; padding: 10px; right: 16px; top: 32px;">
				<button type="button" class="btn-close" aria-label="Close" onclick="closePopup()"></button>
			</div>
			<a href="https://www.nhokto.com/">
				<img src="assets/img/namhae_popup.png" class="card-img-top popup-img" alt="">
			</a>
			<div class="d-flex justify-content-between align-items-center">
				<div type="button" class="btn btn-dark popup-today w-50" onclick="window.open('https://www.nhokto.com/', '_blank')" style="border-radius: 0; line-height: 46px;">자세히 보기</div>
				<div type="button" class="btn btn-dark close-button popup-close w-50" style="border-radius: 0; line-height: 46px;" onclick="hidePopupFor24Hours()">다시보지 않기</div>
			</div>
		</div>
	</div>
	<!-- 공통헤더 -->
	<!-- <section id="header"></section> -->
	<?php include("common/header.php")?>
	<!-- 구석구석 남해 tab -->
	<div id="namhae" class="d-block">
		<!-- 로고 -->
		<section class="text-center" style="padding-top: 70px;">
			<img src="assets/img/logo.svg" class="logo-size">
		</section>

		<!-- 타이틀 -->
		<section class="text-center" style="padding: 70px 0 100px 0;">
			<img src="assets/img/title.svg" class="title-size">
		</section>

		<!-- 달력 -->
		<section class="content" style="padding: 0 0 70px 0;">
			<div class="container-fluid">
				<div class="row">
					<div class="col">
						<div class="card card-primary border-0 mx-auto" style="max-width: 1028px;">
							<!-- <img src="assets/img/1month-img.svg" class="" style=""> -->
							<div class="card-body p-0">
								<img src="assets/img/calender-box.svg" id="calender-box" class="w-100 position-absolute">
								<img src="assets/img/top-box.svg" class="position-absolute top-box w-100">
								<img src="assets/img/left-box.svg" class="position-absolute start-0 left-box">
								<img src="assets/img/right-box.svg" class="position-absolute end-0 right-box">
								<img src="assets/img/left-box-m.svg" class="position-absolute start-0 left-box-m">
								<img src="assets/img/right-box-m.svg" class="position-absolute end-0 right-box-m">
								<div id="calendar"></div>
								<img src="assets/img/2025-namhae-calendar.svg" class="w-100" style="margin-top: 7%;">
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		
		<div style="background-color: #FBFBFB; padding: 70px 0;">
			<!-- 이달의 행사 -->
			<section id="month-event" class="text-center">
				<img src="assets/img/month-event.svg" class="event-size">
			</section>

			<!-- 이달의 행사 카드 -->
			<section class="px-3" style="margin-top: 70px;">
				<div class="mx-auto d-flex justify-content-center flex-wrap media-gap" style="max-width: 1024px;">
					<?php foreach($events as $list): ?>
					<div class="card border-0 pointer event-card" style="width: 28rem;" onclick="location.href='<?="https://visitnamhae.co.kr/event/event_info?id=".$list['id']?>'">		
						<img src="<?= get_event_upload_path() . $list['thumbnail']; ?>" class="card-img-top p-2" alt="...">
						<!-- <img src="assets/img/eximg.png" class="card-img-top p-2" alt="..."> -->
						<div class="card-body text-center px-5 pt-2">
							<!-- <img src="assets/img/off.svg" style="padding-bottom: 16px;"> -->
							<img src="assets/img/off.svg" style="padding-bottom: 16px;" class="event-status" data-start="<?= $list['start_date'] ?>" data-end="<?= $list['end_date'] ?>">
							<h4 class="card-title fw-bold"><?= $list['title'] ?></h5>
							<p class="card-text"><?= $list['content_sub'] ?></p>
							<div class="d-flex flex-wrap justify-content-center" style="gap: 6px;">
							<?php 
								$tags = explode("#", $list['tag']);
								for($i = 1; $i < count($tags); $i++): 
							?>
							<span class="badge text-bg-tag fs-6"><?= $tags[$i] ?></span>
							<?php endfor; ?>
							</div>
						</div>
					</div>
					<?php endforeach ?>
				</div>
			</section>
		</div>

		<div style="padding: 70px 0;">
			<!-- 이벤트 안내 -->
			<section class="text-center">
				<img src="assets/img/popup-event.svg" class="event-size">
			</section>

			<!-- 하단 이벤트 안내 배너 -->
			<section id="pc-event-banner" class="swiper mySwiper" style="max-width: 1420px; padding: 40px 0; margin-top: 5%;">
				<div class="swiper-pagination"></div>
				<div class="swiper-wrapper">
					<!-- <div class="swiper-slide pointer">
						<img src="assets/img/namhae01.svg" class="loading">
					</div>
					<div class="swiper-slide pointer">
						<img src="assets/img/namhae02.svg" class="loading">
					</div>
					<div class="swiper-slide pointer">
						<img src="assets/img/namhae03.svg" class="loading">
					</div> -->
					<div class="swiper-slide pointer">
						<img src="assets/img/namhae04.svg" onclick="window.location.href='https://walla.my/survey/y94fnZEQgIZuabehogjq';">
					</div>
				</div>
			</section>
			<section id="mo-event-banner" class="swiper mySwiper media-mt-0 px-4" style="max-width: 1420px; padding: 40px 0; margin-top: 5%;">
				<div class="swiper-pagination"></div>
				<div class="swiper-wrapper">
					<!-- <div class="swiper-slide pointer">
						<img src="assets/img/namhae-mo01.svg" class="loading">
					</div>
					<div class="swiper-slide pointer">
						<img src="assets/img/namhae-mo02.svg" class="loading">
					</div>
					<div class="swiper-slide pointer">
						<img src="assets/img/namhae-mo03.svg" class="loading">
					</div> -->
					<div class="swiper-slide pointer">
						<img src="assets/img/namhae-mo04.svg" onclick="window.location.href='https://walla.my/survey/y94fnZEQgIZuabehogjq';">
					</div>
				</div>
			</section>
			<!-- 바로가기 -->
			<section class="text-center" style="margin-top: 3%;">
				<img src="assets/img/shortcut.svg" class="event-size" onclick="window.open('https://walla.my/survey/y94fnZEQgIZuabehogjq')">
			</section>
		</div>
		<h2 class="card-title fw-bold text-center pc-a-link">
			<a href="https://www.namhae.go.kr/tour/01015/01036.web" target="_blank" class="text-dark text-decoration-none">국민고향 남해</a> |
			<a href="https://www.namhae.go.kr/tour/main.web" target="_blank" class="text-dark text-decoration-none">남해문화관광</a> |
			<a href="https://www.namhaetour.org/main.web" target="_blank" class="text-dark text-decoration-none">남해관광문화재단</a> |
			<a href="https://namhaeon.com/namhaeroOn/main" target="_blank" class="text-dark text-decoration-none">남해로ON</a>
		</h2>
		<h6 class="card-title fw-bold text-center mo-a-link" style="padding:0 0 70px 0;">
			<div class="my-3">
				<a href="https://www.namhae.go.kr/tour/01015/01036.web" target="_blank" class="text-dark text-decoration-none">국민고향 남해</a>
			</div>
			<div class="my-3">
				<a href="https://www.namhae.go.kr/tour/main.web" target="_blank" class="text-dark text-decoration-none">남해문화관광</a>
			</div>
			<div class="my-3">
				<a href="https://www.namhaetour.org/main.web" target="_blank" class="text-dark text-decoration-none">남해관광문화재단</a>
			</div>
			<div class="my-3">
				<a href="https://namhaeon.com/namhaeroOn/main" target="_blank" class="text-dark text-decoration-none">남해로ON</a>
			</div>
		</h6>
	</div>







	<!-- my good place tab -->
	<div id="mygoodplace" class="d-none">
		<!-- 로고 -->
		<section class="text-center" style="margin-top: 70px;">
			<img src="assets/img/mygoodplace_logo.svg" class="logo-size" style="max-width: 746px;">
		</section>

		<!-- 타이틀 -->
		<section class="text-center" style="padding: 70px 0 0 0;">
			<img src="assets/img/mygoodplace_title.svg" class="title-size" style="max-width: 352px; width: 60%;">
		</section>

		<!-- 지도 -->
		<section class="text-center mx-auto" style="padding: 0 0 70px; max-width: 1028px;">
			<!-- <img src="assets/img/namhae-map.svg" class="w-100"> -->
			<div class="my-5">
				<img src="assets/img/map_samdong.svg" class="w-100">
				<img src="assets/img/map_sangju.svg" class="w-100 d-none">
				<img src="assets/img/map_mijo.svg" class="w-100 d-none">
				<img src="assets/img/map_idong.svg" class="w-100 d-none">
				<img src="assets/img/map_nam.svg" class="w-100 d-none">
				<img src="assets/img/map_seo.svg" class="w-100 d-none">
				<img src="assets/img/map_changseon.svg" class="w-100 d-none">
				<img src="assets/img/map_seolcheon.svg" class="w-100 d-none">
				<img src="assets/img/map_namhae.svg" class="w-100 d-none">
				<img src="assets/img/map_gohyeon.svg" class="w-100 d-none">
			</div>
			
			<img src="assets/img/2025-namhae-map.svg" class="w-100" style="margin: 4% 0; max-width: 540px;">
			<select class="form-select mx-auto" id="place-select" style="max-width: 450px; width: 80%;">
				<!-- <option value="all" selected>전체</option> -->
				<option value="Samdong" selected>삼동면</option>
				<option value="Sangju">상주면</option>
				<option value="Mijo">미조면</option>
				<option value="Idong">이동면</option>
				<option value="Nam">남면</option>
				<option value="Seo">서면</option>
				<option value="Changseon">창선면</option>
				<option value="Seolcheon">설천면</option>
				<option value="Namhae">남해읍</option>
				<option value="Gohyeon">고현면</option>
			</select>
		</section>

		<div style="background-color: #FBFBFB; padding: 70px 0;">
			<!-- 이달의 행사 -->
			<section id="month-event" class="text-center">
				<img src="assets/img/map-event.svg" class="event-size">
			</section>

			<!-- 이달의 행사 카드 -->
			<section class="px-3" style="margin-top: 70px;">
				<div id="place-events-container" class="mx-auto d-flex justify-content-center flex-wrap media-gap" style="max-width: 1024px;">
					<?php foreach($place_events as $list): ?>
					<div class="card border-0 pointer" style="width: 28rem;" onclick="location.href='<?="https://visitnamhae.co.kr/event/event_info?id=".$list['id']?>'">
						<img src="<?= get_event_upload_path() . $list['thumbnail']; ?>" class="card-img-top p-2" alt="...">
						<!-- <img src="assets/img/eximg.png" class="card-img-top p-2" alt="..."> -->
						<div class="card-body text-center px-5 pt-2">
							<!-- <img src="assets/img/off.svg" style="padding-bottom: 16px;"> -->
							<h4 class="card-title fw-bold"><?= $list['title'] ?></h5>
							<p class="card-text"><?= $list['content_sub'] ?></p>
							<div class="d-flex flex-wrap justify-content-center" style="gap: 6px;">
							<?php 
								$tags = explode("#", $list['tag']);
								for($i = 1; $i < count($tags); $i++): 
							?>
							<span class="badge text-bg-tag fs-6"><?= $tags[$i] ?></span>
							<?php endfor; ?>
							</div>
						</div>
					</div>
					<?php endforeach ?>
				</div>
			</section>
		</div>

		<!-- 영상 안내 로고 -->
		<section class="text-center">
			<img src="assets/img/mygoodplace_minilogo.svg" class="my-4 minilogo">
		</section>
		
		<!-- 영상 안내 -->
		<section class="text-center">
			<iframe 
				src="https://www.youtube.com/embed/ZNXknbY4TFM?autoplay=1&mute=1&loop=1&playlist=ZNXknbY4TFM"
				title="YouTube video player" 
				frameborder="0" 
				allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
				allowfullscreen
				style="max-width: 1024px; width: 100%; aspect-ratio: 16 / 9;">
			</iframe>
		</section>

		<div style="padding: 70px 0;">
			<!-- 이벤트 안내 -->
			<section class="text-center">
				<img src="assets/img/popup-event-mygood.svg" class="event-size">
			</section>

			<!-- 하단 이벤트 안내 배너 -->
			<section id="pc-event-banner" class="swiper mySwiper" style="max-width: 1420px; padding: 40px 0; margin-top: 5%;">
				<div class="swiper-pagination"></div>
				<div class="swiper-wrapper">
					<!-- <div class="swiper-slide pointer">
						<img src="assets/img/namhae01.svg" class="loading">
					</div>
					<div class="swiper-slide pointer">
						<img src="assets/img/namhae02.svg" class="loading">
					</div>
					<div class="swiper-slide pointer">
						<img src="assets/img/namhae03.svg" class="loading">
					</div> -->
					<div class="swiper-slide pointer">
						<img src="assets/img/namhae04.svg" onclick="window.open('https://walla.my/survey/y94fnZEQgIZuabehogjq')">
					</div>
				</div>
			</section>
			<section id="mo-event-banner" class="swiper mySwiper media-mt-0 px-4" style="max-width: 1420px; padding: 40px 0; margin-top: 5%;">
				<div class="swiper-pagination"></div>
				<div class="swiper-wrapper">
					<!-- <div class="swiper-slide pointer">
						<img src="assets/img/namhae-mo01.svg" class="loading">
					</div>
					<div class="swiper-slide pointer">
						<img src="assets/img/namhae-mo02.svg" class="loading">
					</div>
					<div class="swiper-slide pointer">
						<img src="assets/img/namhae-mo03.svg" class="loading">
					</div> -->
					<div class="swiper-slide pointer">
						<img src="assets/img/namhae-mo04.svg" onclick="window.open('https://walla.my/survey/y94fnZEQgIZuabehogjq')">
					</div>
				</div>
			</section>

			<!-- 바로가기 -->
			<section class="text-center" style="margin-top: 3%;">
				<img src="assets/img/shortcut-mygood.svg" class="event-size" onclick="window.open('https://walla.my/survey/y94fnZEQgIZuabehogjq')">
			</section>
		</div>
		<h2 class="card-title fw-bold text-center pc-a-link">
			<a href="https://www.namhae.go.kr/tour/01015/01036.web" target="_blank" class="text-dark text-decoration-none">국민고향 남해</a> |
			<a href="https://www.namhae.go.kr/tour/main.web" target="_blank" class="text-dark text-decoration-none">남해문화관광</a> |
			<a href="https://www.namhaetour.org/main.web" target="_blank" class="text-dark text-decoration-none">남해관광문화재단</a> |
			<a href="https://namhaeon.com/namhaeroOn/main" target="_blank" class="text-dark text-decoration-none">남해로ON</a>
		</h2>
		<h6 class="card-title fw-bold text-center mo-a-link" style="padding:0 0 70px 0;">
			<div class="my-3">
				<a href="https://www.namhae.go.kr/tour/01015/01036.web" target="_blank" class="text-dark text-decoration-none">국민고향 남해</a>
			</div>
			<div class="my-3">
				<a href="https://www.namhae.go.kr/tour/main.web" target="_blank" class="text-dark text-decoration-none">남해문화관광</a>
			</div>
			<div class="my-3">
				<a href="https://www.namhaetour.org/main.web" target="_blank" class="text-dark text-decoration-none">남해관광문화재단</a>
			</div>
			<div class="my-3">
				<a href="https://namhaeon.com/namhaeroOn/main" target="_blank" class="text-dark text-decoration-none">남해로ON</a>
			</div>
		</h6>
		<!-- <div class="text-center" style="margin-bottom: 50px;">
			<p class="fs-1" style="font-weight: 100;"><b class="fw-bold" style="color:#5ed1ff">서비스 준비중</b>입니다.</p>
			<p class="mb-0">이용에 불편을 드려 죄송합니다.</p>
			<p class="mb-0">보다 나은 서비스 제공을 위하여 페이지 준비중에 있습니다.</p>
			<p class="mb-0">빠른시일내에 준비하여 찾아뵙겠습니다.</p>
		</div> -->
	</div>
	<!-- 공통푸터 -->
	<!-- <section id="footer"></section> -->
	<?php include("common/footer.php")?>
</body>

<script>
// 24시간 팝업 숨김 함수
function hidePopupFor24Hours() {
	var now = new Date().getTime();
	localStorage.setItem('hidePopupUntil', now + 24 * 60 * 60 * 1000);
	document.querySelector('.popup-container').style.display = 'none';
}

// 즉시 팝업 닫기 함수
function closePopup() {
	var popup = document.querySelector('.popup-container');
	if (popup) popup.style.display = 'none';
}

// 페이지 로드 시 팝업 노출 여부 체크
document.addEventListener('DOMContentLoaded', function () {
	var hideUntil = localStorage.getItem('hidePopupUntil');
	var now = new Date().getTime();
	if (hideUntil && now < hideUntil) {
		var popup = document.querySelector('.popup-container');
		if (popup) popup.style.display = 'none';
	}
});



	//달력 아이콘노출날짜 리스트
	var eventDays = JSON.parse('<?= $event_dates ?>');

	document.addEventListener('DOMContentLoaded', function () {
    var calendarEl = document.getElementById('calendar');

    // 동적으로 이미지를 추가할 img 태그 생성
    var calendarImage = document.createElement('img');
    calendarImage.className = 'month-text'; // CSS 클래스 적용
    var cardBody = document.querySelector('.card-body');
    cardBody.prepend(calendarImage); // 달력 위에 추가

    // FullCalendar 초기화
    var calendar = new FullCalendar.Calendar(calendarEl, {
			initialView: 'dayGridMonth',
			headerToolbar: {
				start: 'prev,next today',
				center: 'title',
				end: 'dayGridMonth,dayGridWeek,dayGridDay'
			},
			titleFormat: function (date) {
				return date.date.year + '년 ' + (date.date.month + 1) + '월';
			},
			dayHeaderContent: function (args) {
				return args.text.toUpperCase(); // 요일 텍스트를 대문자로 변환
			},
			dayCellDidMount: function (info) {
				// 특정 날짜에만 아이콘 추가하기
				const targetDates = eventDays; // 체크 표시를 추가할 날짜
				const formattedDate = info.date.toLocaleDateString('en-CA'); // 로컬 타임존 기준으로 날짜를 'YYYY-MM-DD' 형식으로 변환

				if (targetDates.includes(formattedDate)) {
					const dayNumber = info.el.querySelector('.fc-daygrid-day-bottom');
					if (dayNumber) {
						const checkIcon = document.createElement('img');
						checkIcon.src = 'assets/img/event-circle.svg'; // 체크 아이콘 경로
						checkIcon.alt = 'check icon';
						// checkIcon.style.width = '31px';
						// checkIcon.style.height = '20px';
						checkIcon.style.marginBottom = '8px';
						checkIcon.className = 'custom-check-icon'; // 클래스 추가 (추적용)

						// 숫자 아래에 아이콘 추가
						dayNumber.parentNode.appendChild(checkIcon);
					}
				}
			},
			dateClick: function (info) {
				// 클릭한 날짜를 'YYYY-MM-DD' 형식으로 변환
				const clickedDate = info.date.toLocaleDateString('en-CA'); 
				
				// 기존 캘린더 아이콘 처리 (예시)
				const allIcons = document.querySelectorAll('.custom-check-icon');
				let isIconChanged = false;
				allIcons.forEach((icon) => {
					const parentDateText = icon.closest('.fc-daygrid-day').dataset.date;
					if (parentDateText === clickedDate) {
						if (icon.src.includes('event-circle.svg')) {
							icon.src = 'assets/img/event-circle-on.svg';
							isIconChanged = true;
						}
					} else {
						icon.src = 'assets/img/event-circle.svg';
					}
				});
				if (isIconChanged) {
					const targetSection = document.querySelector('#month-event');
					if (targetSection) {
						targetSection.scrollIntoView({ behavior: 'smooth', block: 'start' });
					}
				}
				
				// 각 행사 카드의 on/off이미지 변경 처리 추가
				updateEventStasus(clickedDate);
				reorderEventCards();
			},
			selectable: true, // 드래그로 날짜 선택 가능
			droppable: true,  // 드래그 가능
			editable: true,   // 이벤트 수정 가능
			nowIndicator: true, // 현재 시간 마크
			// locale: 'ko', // 한국어 설정
			validRange: {
				start: '2025-01-01', // 달력 시작 날짜
				end: '2026-01-01'    // 달력 끝 날짜 (26년 1월 1일은 포함되지 않음)
			},
			datesSet: function () {
				updateCalendarImage(); // 날짜가 변경될 때마다 월 이미지 업데이트
				updateEventStasus();
			}
    });

    calendar.render(); // 달력을 렌더링

    // 초기 화면에서 현재 월 이미지를 설정
    updateCalendarImage(); // 초기 이미지 업데이트 함수 호출

    // 월별 이미지 업데이트 함수
    function updateCalendarImage() {
			// fc-toolbar-title에서 월 숫자를 추출
			var titleElement = document.querySelector('.fc-toolbar-title');
			if (titleElement) {
				var titleText = titleElement.textContent; // 예: "2024년 10월"
				var monthMatch = titleText.match(/(\d+)월/); // "10월"에서 숫자 추출
				if (monthMatch) {
					var currentMonth = monthMatch[1]; // 추출된 월 (문자열)
					var imagePath = `assets/img/${currentMonth}month.svg`; // 이미지 경로 설정
					calendarImage.src = imagePath; // 이미지 업데이트
							
					// 이벤트 카드 노출목록 필터링
					var eventCards = document.querySelectorAll('.event-card');
					eventCards.forEach(function(card) {
						// 각 카드 내의 행사 상태 이미지에서 시작일과 종료일 가져오기
						var statusImg = card.querySelector('.event-status');
						if (statusImg) {
							var startDate = statusImg.getAttribute('data-start'); // 예: "2025-03-10"
							var endDate = statusImg.getAttribute('data-end');       // 예: "2025-03-15"
							
							// 날짜 형식이 "YYYY-MM-DD"라고 가정하고, 월 정보를 추출
							var startMonth = parseInt(startDate.split('-')[1], 10);
							var endMonth = parseInt(endDate.split('-')[1], 10);

							//현재 월이 컨텐츠의 기간에 포함되는지 확인
							var currentMonthNum = parseInt(currentMonth, 10); // 현재 월 숫자 (1~12)
							if (currentMonthNum >= startMonth && currentMonthNum <= endMonth) {
								card.style.display = "inline";
							} else {
								card.style.display = "none";
							}
						}
					});
					// 상태 업데이트 후 재정렬 호출
  					reorderEventCards();			
				}

			}
    }

	//행사타일의 on/off 아이콘변경
	function updateEventStasus(clickedDate){
		if(clickedDate == null || clickedDate == ''){
			clickedDate = "<?= date("Y-m-d")?>";
		}
		const eventStatusImages = document.querySelectorAll('.event-status');
		eventStatusImages.forEach((img) => {
			const startDate = img.getAttribute('data-start'); // ex: "2025-03-01"
			const endDate = img.getAttribute('data-end');       // ex: "2025-03-10"
			// 날짜 형식이 "YYYY-MM-DD"이어야 비교가능
			if (clickedDate >= startDate && clickedDate <= endDate) {
				img.src = "assets/img/on.svg";
			} else {
				img.src = "assets/img/off.svg";
			}
		});
	}

    // 하단 스와이퍼 초기화
    var swiper = new Swiper(".mySwiper", {
			slidesPerView: 1,
			spaceBetween: 30,
			loop: true,
			autoplay: {
				delay: 8000,
				disableOnInteraction: false,
			},
			pagination: {
				el: ".swiper-pagination",
				clickable: true,
			}
    });
	});
	
	// 하단배너 클릭시 알러트
	$(".loading").click(function() {
		alert("준비중 입니다. 😀");
	});

	// 마이굿 지도
  document.addEventListener("DOMContentLoaded", function () {
    const selectBox = document.querySelector(".form-select");
    const images = document.querySelectorAll("section img.w-100:not([src*='2025-namhae-map.svg'])");

    selectBox.addEventListener("change", function () {
      // 모든 지도 이미지 숨기기 (2025-namhae-map.svg 제외)
      images.forEach(img => img.classList.add("d-none"));

      // 선택한 값에 맞는 이미지 찾기
      const selectedValue = selectBox.value.toLowerCase();
      const selectedImg = document.querySelector(`img[src*="map_${selectedValue}.svg"]`);

      if (selectedImg) {
        selectedImg.classList.remove("d-none"); // 선택한 이미지 보이기
      }
    });
  });

  $(document).ready(function() {
  $('#place-select').on('change', function(){
    var selectedPlace = $(this).val();

    console.log("location:"+selectedPlace);

    $.ajax({
      url: '/event/find_my_palce',
      type: 'POST',
      data: { location: selectedPlace },
      dataType: 'json',
      success: function(data) {

		console.log("data:"+data);

        var html = '';
        if (data.length > 0) {
          $.each(data, function(index, event) {
            html += '<div class="card border-0 pointer" style="width: 28rem;" onclick="location.href=\'https://visitnamhae.co.kr/event/event_info?id=' + event.id + '\'">';
            html += '<img src="<?= get_event_upload_path() . $list['thumbnail']; ?>" class="card-img-top p-2" alt="...">';
            html += '<div class="card-body text-center px-5 pt-2">';
            html += '<h4 class="card-title fw-bold">' + event.title + '</h4>';
            html += '<p class="card-text">' + event.content_sub + '</p>';
            
            // 태그 처리
            if (event.tag) {
              var tags = event.tag.split("#");
              html += '<div class="d-flex flex-wrap justify-content-center" style="gap: 6px;">';
              for (var i = 1; i < tags.length; i++) {
                html += '<span class="badge text-bg-tag fs-6">' + tags[i] + '</span>';
              }
              html += '</div>';
            }
            
            html += '</div></div>';
          });
        } else {
          html = '<p>해당 지역에 등록된 이벤트가 없습니다.</p>';
        }
        
        // 기존 카드 영역 업데이트
        $('#place-events-container').html(html);

		console.log("html:"+html);

      },
      error: function(xhr, status, error) {
        console.error('AJAX Error:', error);
      }
    });
  });
});

//on이미지가 노출되는 카드부터 노출되도록 재정렬
function reorderEventCards() {
  // 이벤트 카드들이 들어있는 컨테이너 선택
  const container = document.querySelector('.media-gap');
  // 컨테이너 내의 모든 이벤트 카드 요소를 배열로 변환
  const cards = Array.from(container.querySelectorAll('.event-card'));

  // 선택된 날짜
  const selectedDate = new Date("<?= date("Y-m-d") ?>");

  // 카드들을 정렬
  cards.sort((a, b) => {
    const imgA = a.querySelector('.event-status');
    const imgB = b.querySelector('.event-status');

    // 카드 A와 B의 시작일 및 종료일을 가져오기
    const startDateA = new Date(imgA.getAttribute('data-start'));
    const endDateA = new Date(imgA.getAttribute('data-end'));
    const startDateB = new Date(imgB.getAttribute('data-start'));
    const endDateB = new Date(imgB.getAttribute('data-end'));

    // 'on' 이미지를 우선순위로 설정
    const isOnA = imgA.src.includes('on.svg');
    const isOnB = imgB.src.includes('on.svg');

    // 'on' 이미지를 가진 카드들이 먼저 나오도록 우선 순위 지정
    if (isOnA && !isOnB) return -1; // A가 'on'이면 A가 먼저
    if (!isOnA && isOnB) return 1;  // B가 'on'이면 B가 먼저

    // 'on' 이미지를 가진 카드들 중에서 가장 가까운 날짜를 우선순위로 처리
    if (isOnA && isOnB) {
      const diffA = Math.abs(selectedDate - startDateA);
      const diffB = Math.abs(selectedDate - startDateB);
      return diffA - diffB; // 가장 가까운 날짜가 먼저
    }

    // 'off' 이미지를 가진 카드들 중에서 가장 가까운 날짜를 우선순위로 처리
    if (!isOnA && !isOnB) {
      const diffA = Math.abs(selectedDate - startDateA);
      const diffB = Math.abs(selectedDate - startDateB);
      return diffA - diffB; // 가장 가까운 날짜가 먼저
    }

    return 0; // 기본적으로 변경하지 않음
  });

  // 기존의 카드들을 모두 제거하고 정렬된 순서대로 다시 추가
  container.innerHTML = '';
  cards.forEach(card => container.appendChild(card));
}
</script>
</html>