<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
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
    width: 80px;
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
	@media (max-width: 768px) {
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
		#pc-event-banner{
			display: none !important;
		}
		#mo-event-banner{
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
	#pc-event-banner{
		display: block;
	}
	#mo-event-banner{
		display: none;
	}
</style>
<body>
	<!-- 공통헤더 -->
	<!-- <section id="header"></section> -->
	<?php include("common/header.php")?>
	<div id="namhae" class="d-none">
		<!-- 로고 -->
		<section class="text-center" style="padding-top: 70px;">
			<img src="assets/img/logo.svg" class="logo-size">
		</section>

		<!-- 타이틀 -->
		<section class="text-center" style="padding: 70px; 0 100px 0">
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
								<img src="assets/img/calender-box.svg" class="w-100 position-absolute">
								<div id="calendar"></div>
								<img src="assets/img/2025-namhae-calendar.svg" class="w-100 mt-5">
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
					<div class="card border-0 pointer" style="width: 28rem;" onclick="location.href='<?="http://visitnamhae.co.kr/event/event_info?id=".$list['id']?>'">
						<img src="<?= get_event_upload_path() . $list['thumbnail']; ?>" class="card-img-top p-2" alt="...">
						<div class="card-body text-center px-5 pt-2">
							<img src="assets/img/on.svg" style="padding-bottom: 16px;">
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
					<!-- <div class="card border-0 pointer" style="width: 454px;" onclick="window.location.href='#';">
						<img src="assets/img/eximg.png" class="card-img-top p-2" alt="...">
						<div class="card-body text-center px-5 pt-2">
							<img src="assets/img/off.svg" style="padding-bottom: 16px;">
							<h4 class="card-title fw-bold">낭만과 미식의 공간</h4>
							<p class="card-text">레스쁘아 뒤 이브(L'Espoir du Hibou)는 서울 청담동에 위치한 정통 프렌치 레스토랑이야. 프랑스 현지의 비스트로 느낌을 완벽히 재현한</p>
							<span class="badge text-bg-secondary fs-6">청담</span>
							<span class="badge text-bg-secondary fs-6">레스쁘아</span>
							<span class="badge text-bg-secondary fs-6">레스토랑</span>
						</div>
					</div> -->
				</div>
			</section>
		</div>

		<div style="padding: 70px 0;">
			<!-- 이벤트 안내 -->
			<section class="text-center">
				<img src="assets/img/popup-event.svg" class="event-size">
			</section>

			<!-- 하단 이벤트 안내 배너 -->
			<section id="pc-event-banner" class="swiper mySwiper" style="max-width: 1420px; padding: 40px 0; margin-top: 70px;">
				<div class="swiper-pagination"></div>
				<div class="swiper-wrapper">
					<div class="swiper-slide pointer">
						<img src="assets/img/namhae01.svg" onclick="window.location.href='#';">
					</div>
					<div class="swiper-slide pointer">
						<img src="assets/img/namhae02.svg" onclick="window.location.href='#';">
					</div>
					<div class="swiper-slide pointer">
						<img src="assets/img/namhae03.svg" onclick="window.location.href='#';">
					</div>
				</div>
			</section>
			<section id="mo-event-banner" class="swiper mySwiper media-mt-0 px-4" style="max-width: 1420px; padding: 40px 0; margin-top: 70px;">
				<div class="swiper-pagination"></div>
				<div class="swiper-wrapper">
					<div class="swiper-slide pointer">
						<img src="assets/img/namhae-mo01.svg" onclick="window.location.href='#';">
					</div>
					<div class="swiper-slide pointer">
						<img src="assets/img/namhae-mo02.svg" onclick="window.location.href='#';">
					</div>
					<div class="swiper-slide pointer">
						<img src="assets/img/namhae-mo03.svg" onclick="window.location.href='#';">
					</div>
				</div>
			</section>
		</div>
	</div>
	<div id="mygoodplace" class="d-block">
		<div class="text-center" style="margin-top: 50px;">
			<img src="assets/img/preparing.svg" class="logo-size" style="max-width: 250px;">
		</div>
		<div class="text-center" style="margin-bottom: 50px;">
			<p class="fs-1" style="font-weight: 100;"><b class="fw-bold" style="color:#5ed1ff">서비스 준비중</b>입니다.</p>
			<p class="mb-0">이용에 불편을 드려 죄송합니다.</p>
			<p class="mb-0">보다 나은 서비스 제공을 위하여 페이지 준비중에 있습니다.</p>
			<p class="mb-0">빠른시일내에 준비하여 찾아뵙겠습니다.</p>
		</div>
	</div>
	<!-- 공통푸터 -->
	<!-- <section id="footer"></section> -->
	<?php include("common/footer.php")?>
</body>

<script>
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
						// checkIcon.style.marginTop = '5px';
						checkIcon.className = 'custom-check-icon'; // 클래스 추가 (추적용)

						// 숫자 아래에 아이콘 추가
						dayNumber.parentNode.appendChild(checkIcon);
					}
				}
			},
			dateClick: function (info) {
				// 클릭된 날짜의 셀을 가져오기
				const clickedDate = info.date.toLocaleDateString('en-CA'); // 로컬 타임존 기준 날짜 'YYYY-MM-DD' 형식으로 변환
				const allIcons = document.querySelectorAll('.custom-check-icon');

				let isIconChanged = false; // 특정 날짜에서 아이콘이 변경되었는지 확인하기 위한 플래그

				allIcons.forEach((icon) => {
					// 부모 요소의 날짜 텍스트 가져오기
					const parentDateText = icon.closest('.fc-daygrid-day').dataset.date;

					if (parentDateText === clickedDate) {
						if (icon.src.includes('event-circle.svg')) {
							// 클릭된 날짜의 아이콘이 'event-circle.svg'일 경우만 변경
							icon.src = 'assets/img/event-circle-on.svg';
							isIconChanged = true; // 아이콘이 변경됨을 플래그로 표시
						}
					} else {
						// 다른 날짜는 항상 기본 아이콘으로 설정
						icon.src = 'assets/img/event-circle.svg';
					}
				});

				// 아이콘이 변경되었을 경우만 특정 섹션으로 스크롤
				if (isIconChanged) {
					const targetSection = document.querySelector('#month-event');
					if (targetSection) {
						targetSection.scrollIntoView({ behavior: 'smooth', block: 'start' });
					}
				}
			},
			selectable: true, // 드래그로 날짜 선택 가능
			droppable: true,  // 드래그 가능
			editable: true,   // 이벤트 수정 가능
			nowIndicator: true, // 현재 시간 마크
			// locale: 'ko', // 한국어 설정
			validRange: {
				start: '2025-01-01', // 달력 시작 날짜
				end: '2025-07-01'    // 달력 끝 날짜 (7월 1일은 포함되지 않음)
			},
			datesSet: function () {
				updateCalendarImage(); // 날짜가 변경될 때마다 월 이미지 업데이트
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
				}
			}
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
	
</script>
</html>