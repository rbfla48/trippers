<?php include_once("layout/header.php");?>
<link rel="stylesheet" href="/assets/css/main.css">
<style>
  /*
  .article-truncate {
    display: -webkit-box;
    -webkit-box-orient: vertical;
    -webkit-line-clamp: 3;
    overflow: hidden;
    text-overflow: ellipsis;
  }
  */

  .custom-btn {
    background-color: #000; /* Black background */
    color: #fff; /* White text */
    border-radius: 0; /* Remove rounded corners to make the button rectangular */
    border: none; /* Remove any default border */
    padding: 10px; /* Add padding for a better look */
    text-transform: uppercase; /* Uppercase text for consistency */
    font-weight: bold; /* Bold text */
  }

  .custom-btn:hover {
    /* background-color: #333; Slightly lighter black on hover */
    background-color: #F36523;
  }

  a {
    color: black; /* 링크 색깔을 검은색으로 설정 */
    text-decoration: underline;
  }
  a:hover {
    color: darkgray; /*마우스를 올렸을 때 색깔을 어두운 회색으로 변경 (선택 사항) */
  }

  .mt-8 { 
    margin-top: 8rem !important;
  }

  .mt-6 {
    margin-top: 5rem !important;
  }

  .logo-container {
    display: inline-block;
    text-align: center;
  }

  .logo-underline {
    height: 5px;
    width: 70px; /* Adjust the width as needed */
    background-color: #000; /* Black color for the underline */
    margin: 0 auto;
    margin-top: 8px; /* Adjust spacing between the image and the underline */
  }

  .logo-img {
    width: 70px; /* Adjust the width as needed */
    height: auto; /* Maintain aspect ratio */
    display: block;
    margin: 0 auto;
  }

  .fixed-size {
    width: 100%;
    height: auto;
    max-height: 1200px; /* 최대 높이 설정 */
    object-fit: cover;
  }

  .badge-container {
    display: flex;
    gap: 5px; /* 배지 간의 간격 조절 */
  }
  
  .badge-container h6 {
    margin: 0;
  }

  .badge {
    display: inline-block;
    padding: 5px 10px;
    margin: 2px;
    background-color: #f0f0f0; /* Light grey background */
    border: 1px solid #ccc; /* Light grey border */
    border-radius: 4px; /* Slightly rounded corners, adjust as needed */
    font-size: 14px;
    color: #000; /* Black text color */
  }

  .centered-text-container {
    display: flex;
    justify-content: center; /* 가로 방향 중앙 정렬 */
    align-items: center; /* 세로 방향 중앙 정렬 */
    width: 100%;
    height: 100px; /* 높이 조정 */
    margin-top: 20px; /* 상단 여백 */
    position: relative; /* 부모 컨테이너에서 상대 위치 설정 */
  }

  .centered-text {
    text-align: center; /* 텍스트를 화면 중앙에 위치 */
    position: relative; /* 밑줄을 위한 상대 위치 지정 */
    display: inline-block; /* 텍스트 길이에 맞게 밑줄 적용 */
    margin: 0 auto; /* 중앙 정렬 */
    padding-bottom: 5px; /* 밑줄과 텍스트 간격 조정 */
    font-weight: 800;
    font-size: 24px;
  }
  
  .centered-text::after {
    content: ""; /* 가상 요소 생성 */
    display: block;
    width: 100%; /* 밑줄의 길이 */
    height: 4px; /* 밑줄의 두께 */
    background-color: black; /* 밑줄 색상 */
    position: absolute;
    bottom: 0;
    left: 0;
  }

  /* 카드 스타일 */
  .card {
    width: 100%;
    max-width: 23rem; /* 카드 최대 너비 */
    transition: transform 0.2s ease-in-out;
    border: none; /* 테두리 제거 */
    box-shadow: none; /* 그림자 제거 */
    text-align: center; /* 텍스트 중앙 정렬 */
  }

  /* 카드 이미지 */
  .card-img-top {
    width: 100%;
    height: auto;
  }

  /* 카드 내용 */
  .card-body {
    display: flex;
    flex-direction: column;
    align-items: center; /* 내용 중앙 정렬 */
    padding: 1rem;
  }
  
  .card img {
    margin: 0 auto; /* 이미지 중앙 정렬 */
  }

  .creator-swiper, .dongnae-swiper, .find-swiper {
    position: relative; /* 자식 요소의 위치를 기준으로 삼을 수 있게 설정 */
    padding-bottom: 40px; /* 슬라이드 아래 여백을 추가하여 페이지네이션을 위한 공간 확보 */
  }

  .creator-pagination, .dongnae-pagination, .find-pagination {
    position: absolute;
    bottom: 50px; /* 부모 요소의 하단에서 조금 위로 위치 */
    left: 0;
    right: 0;
    text-align: center;
  }
  

  @media (max-width: 768px) {
    .creator-swiper, .dongnae-swiper, .find-swiper {
      /* height: 170vw; */
      min-height: 400px;
      position: relative; /* 자식 요소의 위치를 기준으로 삼을 수 있게 설정 */
      padding-bottom: 40px; /* 슬라이드 아래 여백을 추가하여 페이지네이션을 위한 공간 확보 */
    }

    .creator-pagination, .dongnae-pagination, .find-pagination {
      position: absolute;
      bottom: 50px; /* 부모 요소의 하단에서 조금 위로 위치 */
      left: 0;
      right: 0;
      text-align: center;
    }

    .creator-swiper .card, .dongnae-swiper .card, .find-swiper .card {
      width: 24rem !important;
    }

    .fixed-size {
      width: 100%; /* 부모 요소의 가로 크기에 맞게 */
      height: auto; /* 원하는 고정 높이 */
      object-fit: cover; /* 이미지가 고정된 영역을 덮도록 비율 조정 */
      object-position: center; /* 이미지의 중앙 부분을 표시 */
    }
  }


  .responsive-image {
    display: block;
    max-width: 100%;
  }

  @media (max-width: 600px) {
    .responsive-image {
      content: url('assets/img/moTripletter.svg');
    }
  }

  @media (min-width: 601px) {
    .responsive-image {
      content: url('assets/img/tripletter.png');
    }
  }

  .card-title {
    font-family: "Pretendard Variable-SemiBold";
  }

  @font-face {
    font-family: "Pretendard Variable-SemiBold";
    src: url('assets/fonts/Pretendard-SemiBold.woff') format('woff-variations');
  }

  .card img {
    width: 100%;
    height: 400px;
    object-fit: cover;
  }
</style>

<body>
  <div class="container-fluid">
    <?php include_once("layout/navbar.php")?>

    <!-- Slider main container -->
    <div class="mt-2 swiper swiper-main">
      <!-- Additional required wrapper -->
      <div class="swiper-wrapper">
        <!-- Slides -->
        <?php foreach($mt_banners as $list): ?>
          <div class="swiper-slide">
            <a href="<?=  $list['link'] ?>" class="cursor:pointer;">
              <img class="w-100 d-block fixed-size" src="<?= get_banner_upload_path() . ($this->agent->is_mobile() ? $list['filename_mobile'] : $list['filename_pc']); ?>" alt="Slide Image" />
            </a>
            </div>
        <?php endforeach; ?>
      </div>

      <!-- If we need pagination -->
      <div class="swiper-pagination swiper-main-pagination"></div>
    </div>

    <div class="centered-text-container">
      <div class="centered-text">CREATOR STORY</div>
    </div>
    <!-- Slider main container -->
    <div class="w-95 swiper creator-swiper">
      <!-- Additional required wrapper -->
      <div class="swiper-wrapper">
        <!-- Slides -->
        <?php foreach($article_creator as $list): ?>
        <div class="swiper-slide">
          <div class="card" onclick="articleDetail('<?= $list['id'] ?>')">
            <img src="<?= get_article_upload_path() . $list['thumbnail']; ?>" class="card-img-top" alt="Card Image">
            <div class="card-body">
              <h6 class="card-title"><strong><?= $list['c_name']; ?></strong></h6>
              <h5 class="card-title"><strong><?= $list['title']; ?></strong></h5>
              <p class="card-text article-truncate"><?= $list['content_sub'] ?></p>
              <div class="badge-container">
                <?php 
                  $tags = explode("#", $list['tag']);
                  for($i = 1; $i < count($tags); $i++): 
                ?>
                  <h6><span class="badge"><?= $tags[$i]; ?></span></h6>
                <?php endfor; ?>
              </div>
            </div>
          </div>
        </div>
        <?php endforeach; ?>
      </div>
      <!-- If we need pagination -->
      <div class="swiper-pagination creator-pagination"></div>
    </div>
    
    <?php if($mb_banners):?>
    <!-- Slider main container -->
    <div class="mt-8 swiper swiper-main2">
      <!-- Additional required wrapper -->
      <div class="swiper-wrapper">
        <!-- Slides -->
        <?php foreach($mb_banners as $list): ?>
        <div class="swiper-slide">
          <img class="w-100 d-block fixed-size" src="<?= get_banner_upload_path() . ($this->agent->is_mobile() ? $list['filename_mobile'] : $list['filename_pc']); ?>" alt="Slide Image" />
        </div>
        <?php endforeach; ?>
      </div>

      <!-- If we need pagination -->
      <div class="swiper-pagination swiper-main-pagination2"></div>
    </div>
    <?php endif; ?>

    <div class="centered-text-container">
      <div class="centered-text">WEEKLY SPACE</div>
    </div>
    
    <!-- Slider main container -->
    <div class="swiper dongnae-swiper">
      <!-- Additional required wrapper -->
      <div class="swiper-wrapper">
        <!-- Slides -->
        <?php foreach($article_dongnae as $list): ?>
        <div class="swiper-slide">
          <div class="card" onclick="articleDetail('<?= $list['id'] ?>')">
            <img src="<?= get_article_upload_path() . $list['thumbnail']; ?>" class="card-img-top" alt="Card Image">
            <div class="card-body">
              <h6 class="card-title"><?= $list['c_name']; ?></h6>
              <h5 class="card-title"><?= $list['title']; ?></h5>
              <p class="card-text article-truncate"><?= $list['content_sub'] ?></p>
              <div class="badge-container">
                <?php 
                  $tags = explode("#", $list['tag']);
                  for($i = 1; $i < count($tags); $i++): 
                ?>
                  <h6><span class="badge"><?= $tags[$i]; ?></span></h6>
                <?php endfor; ?>
              </div>
            </div>
          </div>
        </div>
        <?php endforeach; ?>
      </div>
      <!-- If we need pagination -->
      <div class="swiper-pagination dongnae-pagination"></div>
    </div>
    
<?php /* FIND 영역 잠시 숨김20250320
    <div class="centered-text-container">
      <div class="centered-text">FIND ITEM</div>
    </div>

    <!-- FINDITEM 슬라이드 -->
    <!-- Slider main container -->

    <div class="swiper find-swiper">
      <!-- Additional required wrapper -->
      <div class="swiper-wrapper">
        <!-- Slides -->
        <?php foreach($find_item as $list): ?>
        <div class="swiper-slide swiper-find-item-detail-slide">
          <div class="card" onclick="showEventModal('<?= $list['id'] ?>')">
            <img src="<?= get_find_item_upload_path() . $list['thumbnail']; ?>" class="card-img-top" alt="Card Image">
            <div class="card-body">
              <h6 class="card-title"><strong><?= $list['name']; ?></strong></h6>
              <a href="#" class="btn finditem-btn" onclick="showEventModal('<?= $list['id'] ?>')">응모하기</a>
            </div>
          </div>
        </div>
        <?php endforeach; ?>
      </div>
      <!-- If we need pagination -->
      <div class="swiper-pagination find-pagination"></div>
    </div>
*/ ?>
<?php /*
*FIND ITEM 논의후에 작업후 적용예정
    <div class="find-item-area">
      <?php if($this->agent->is_mobile()){ ?>
        <div class="find-item-title"><strong>FIND 아이템</strong></div>
      <?php } ?>
      <div class="swiper swiper-find-item">
        <div class="swiper-wrapper">
          <!-- FIND ITEM 리스트 -->
          <?php foreach($find_item as $list): ?>
            <div class="swiper-slide">

                <div class="find-item-content-area w-100">
                  <div class="find-item-img-area">
                    <img src="<?= get_find_item_upload_path() .$list['thumbnail']?>" alt="" class="rounded img-fluid w-100 fit-cover">
                  </div>
                  <div class="find-item-text-area d-md-flex align-items-md-center">
                    <div style="max-width: 900px;">
                      <?php if(!$this->agent->is_mobile()){ ?>
                        <div class="find-item-title">FIND 아이템</div>
                      <?php } ?>
                      <h2 class="fw-bold"><?= $list['name']?></h2>
                      <p class="my-3 lh-lg">
                        <?= $list['content_sub']?>
                      </p>
                      <a href="#" class="btn finditem-btn" onclick="showEventModal('<?= $list['id'] ?>')">자세히보기</a>
                    </div>
                  </div>
                </div>

            </div>
          <?php endforeach; ?>
          <!-- //FIND ITEM 리스트 -->
        </div>
        <!-- 모바일일떈 하단 버튼, PC일땐 사이드 화살표노출  -->
        <?php if($this->agent->is_mobile()){ ?>
          <div class="swiper-pagination swiper-find-item-pagination"></div>
        <?php }else{ ?>
          <div class="swiper-button-prev swiper-find-item-prev"></div>
          <div class="swiper-button-next swiper-find-item-next"></div>
        <?php } ?>
      </div>
    </div>
 */ ?>   

    <!-- 응모하기 모달 step1 -->
    <div class="modal fade w-100" id="mainFindItemModal" tabindex="-1" aria-labelledby="mainFindItemModalLabel" aria-hidden="true">
      <div class="modal-dialog d-flex justify-content-center align-items-center" style="max-width: 100%;">
        <div class="modal-content">
          <!-- 닫기 버튼 추가 -->
          <button type="button" class="close-btn" aria-label="Close" data-bs-dismiss="modal" style="position: absolute; top: 10px; right: 15px; border: none; background: none;" onclick="modalClose('mainFindItemModal')">
            &times;
          </button>
          <div class="modal-body d-flex align-items-center mb-2">
            <div class="row gy-4 gy-md-0 mx-auto" style="width: 100%;">
              <div class="col-md-6">
                <div class="swiper swiper-find-item-detail" style="overflow: hidden;">
                  <div class="swiper-wrapper">
                    <!-- TODO: FINDITEM 썸네일 이미지 현재는 하나만 가능, 이후에 여러개로 슬라이드 노출하기 -->
                    <div class="swiper-slide swiper-find-item-detail-slide">
                      <img src="assets/img/mainFindItem.svg" alt="" class="rounded img-fluid w-100 h-100">
                    </div>
                  </div>

                  <div class="swiper-pagination swiper-find-item-detail-pagination"></div>
                </div>
              </div>
              <div class="find-item-text-area md-10 d-md-flex align-items-md-center">
                <div style="col-12">
                  <div class="centered-text-find-item-container mb-4">
                    <div class="find-item-title">FIND 아이템</div>
                  </div>
                  <div id="find_item_content">
                  </div>
                  <button type="button" class="btn custom-btn w-50 mt-3" onclick="showEventModalStep2()">
                    응모하기
                  </button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- //응모하기 모달 step1 -->

    <!-- 응모하기 모달 step2 -->
    <input type="hidden" id="findItemId" value="">
    <div class="modal fade modal w-100" id="mainFindItemModal2" tabindex="-1" aria-labelledby="mainFindItemModalLabel2" aria-hidden="true">
      <div class="modal-dialog modal-lg d-flex justify-content-center align-items-center">
        <div class="modal-content">
          <div class="modal-body d-flex align-items-center justify-content-center">
            <div class="row gy-4 mx-auto text-center" style="width: 100%;">
              <div class="d-md-flex justify-content-center align-items-md-center">
                <div class="modal-inner-content" style="margin: 0 auto;">
                  <div class="centered-text-find-item-container">
                    <div class="centered-text-find-item">FIND 아이템 응모전에 꼭 확인해 주세요</div>
                  </div>
                  <div class="find_item_text">
                    <h5 class="mt-2">당첨자는 <a href="">해당페이지</a>에서 확인하세요</h5>
                    <ul class="mt-4">
                      <li>응모하기 완료 후 취소 또는 포인트 환불은 불가합니다</li>
                      <li>아이디 1개 기준 1회만 응모할 수 있습니다</li>
                      <li>중복 연락처, 주소 사용의 경우 당첨자에서 제외됩니다</li>
                      <li>배송정보는 별도 개인정보 수집이 진행됩니다</li>
                      <li>응모하기와 동시에 <a href="">개인정보수집 이용 동의</a>가 진행됩니다</li>
                    </ul>
                  </div>
                  <div class="mt-4">
                    <button type="button" class="btn custom-btn w-100 mt-4" onclick="applyFindItem()">
                      응모하기
                    </button>
                    <button type="button" class="btn custom-btn w-100 mt-4 mb-4" onclick="location.reload()">
                      취소하기
                    </button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- //응모하기 모달 step2 -->

    <!-- 응모하기 모달 step3 -->
    <div class="modal fade modal w-100" id="mainFindItemModal3" tabindex="-1" aria-labelledby="mainFindItemModalLabel2" aria-hidden="true">
      <div class="modal-dialog modal-lg d-flex justify-content-center align-items-center">
        <div class="modal-content">
          <div class="modal-body d-flex align-items-center justify-content-center">
            <div class="row gy-4 mx-auto text-center" style="width: 100%;">
              <div class="d-md-flex justify-content-center align-items-md-center">
                <div class="modal-inner-content" style="margin: 0 auto;">
                  <div class="centered-text-find-item-container">
                    <div class="centered-text-find-item">FIND 아이템 응모를 완료했습니다</div>
                  </div>
                  <div class="find_item_text">
                    <h5 class="mt-2">여러분의 FIND POINT를 사용해주셔서 감사합니다<BR>앞으로도 트리퍼에 많은 활동 부탁드립니다</h5>
                  </div>
                  <div class="mt-4">
                    <button type="button" class="btn custom-btn w-100 mt-4" onclick="location.reload()">
                      확인
                    </button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- //응모하기 모달 step3 -->

    <div class="container mt-8">
      <a href="https://page.stibee.com/subscriptions/240273">
        <img src="assets/img/tripletter.png" class="responsive-image img-fluid d-block mx-auto" style="cursor:pointer;"/>
      </a>
    </div>

    <?php include_once("layout/footer_company_info.php")?>

    <script src="assets/js/swiper.js"></script>
    <script>
      //글 상세 페이지 이동
      function articleDetail(id) {
        location.href = "/main/articleDetail?id="+id;
      }

      let swiperMain = new Swiper('.swiper-main', {
        direction: 'horizontal',
        loop: true,
        pagination: {
          el: '.swiper-main-pagination',
        },
      });

      let creatorSwiper = new Swiper('.creator-swiper', {
        slidesPerView: 1,
        spaceBetween: 20,
        loop: true,
        pagination: {
          el: '.creator-pagination',
          clickable: true,
        },
        breakpoints: {
          768: {
            slidesPerView: 4,
            spaceBetween: 10,
            slidesPerGroup: 4, // 한 번 슬라이드할 때 4개의 슬라이드 이동
          },
          576: {
            slidesPerView: 1,
            spaceBetween: 5,
          }
        },
      });

      let swiperMain2 = new Swiper('.swiper-main2', {
        direction: 'horizontal',
        loop: true,
        pagination: {
          el: '.swiper-main-pagination2',
        },
      });

      let dongnaeSwiper = new Swiper('.dongnae-swiper', {
        slidesPerView: 1,
        spaceBetween: 20,
        loop: true,
        pagination: {
          el: '.dongnae-pagination',
          clickable: true,
        },
        breakpoints: {
          768: {
            slidesPerView: 4,
            spaceBetween: 10,
            slidesPerGroup: 4, // 한 번 슬라이드할 때 4개의 슬라이드 이동
          },
          576: {
            slidesPerView: 1,
            spaceBetween: 5,
          }
        }
      });

      let findSwiper = new Swiper('.find-swiper', {
        slidesPerView: 1,
        spaceBetween: 20,
        loop: true,
        pagination: {
          el: '.find-pagination',
          clickable: true,
        },
        breakpoints: {
          768: {
            slidesPerView: 4,
            spaceBetween: 10,
          },
          576: {
            slidesPerView: 1,
            spaceBetween: 5,
          }
        }
      });

      // let swiperFindItem = new Swiper('.swiper-find-item', {
      //   slidesPerView: 1, // 한 번에 보여줄 슬라이드 수
      //   spaceBetween: 30, // 슬라이드 간의 간격
      //   loop: true, // 무한 루프
      //   direction: 'horizontal',
      //   pagination: {
      //     el: '.swiper-find-item-pagination',
      //   },
      //   navigation: {
      //     nextEl: '.swiper-find-item-next',
      //     prevEl: '.swiper-find-item-prev',
      //   },
      // });

      // let swiperFindItemDetail = new Swiper('.swiper-find-item-detail', {
      //   slidesPerView: 1, // 한 번에 보여줄 슬라이드 수
      //   spaceBetween: 30, // 슬라이드 간의 간격
      //   loop: true, // 무한 루프
      //   direction: 'horizontal',
      //   pagination: {
      //     el: '.swiper-find-item-detail-pagination',
      //     clickable: true,
      //   },
      // });

      //FIND ITEM 자세히보기 클릭시 팝업노출 
      // function showEventModal() {
      //   var modal = new bootstrap.Modal(document.getElementById('mainFindItemModal'));
      //   modal.show();
      // }

      //모달에 노출할 FINDITEM 정보 가져오기
      function showEventModal(itemId) {
        $.ajax({
            url: '/main/get_find_item_info',
            type: 'POST',
            dataType: 'json',
            data: { id: itemId },
            success: function(response) {
              var data = response.item;

              if(response.code == '0000'){
                // 이미지 src 업데이트
                $('#mainFindItemModal .swiper-slide img').attr('src', "<?= get_find_item_upload_path();?>"+data.thumbnail);

                // 텍스트 업데이트
                $('#mainFindItemModal .find-item-title').text(data.name);
                $('#find_item_content').html(data.content);

                //finditme아이디 세팅(응모하기시 아이디 넘김)
                $("#findItemId").val(data.id);

                $('#mainFindItemModal').modal('show'); // 두 번째 모달 열기
              }else{
                alert(response.msg);
                location.reload();
              }
            },
            error: function() {
                alert('데이터를 불러오는 데 실패했습니다.');
            }
        });
      }

      //FIND아이템 응모하기 모달 노출
      function showEventModalStep2() {
        $('#mainFindItemModal').modal('hide');  // 첫 번째 모달 닫기
        $('#mainFindItemModal2').modal('show'); // 두 번째 모달 열기
      }

      //FINDITEM 응모하기
      function applyFindItem(){
        let findItemId = $("#findItemId").val();
        var user_id = "<?= $this->session->userdata("user_id")?>";
        
        if(user_id == ''){
          alert("로그인 후 응모 가능합니다.");
          location.href = "/login";
          return;
        }

        $.ajax({
            url: '/main/apply_find_item',
            type: 'POST',
            dataType: 'json',
            data: { id: findItemId },
            success: function(response) {
              if(response.code == '0000'){

                $('#mainFindItemModal2').modal('hide');  // 첫 번째 모달 닫기
                $('#mainFindItemModal3').modal('show'); // 두 번째 모달 열기
              }else{
                alert(response.msg);
              }
            },
            error: function() {
                alert('데이터를 불러오는 데 실패했습니다.');
            }
        });
      }

    $('.modal').on('hidden.bs.modal', function () {
      if ($('.modal.show').length === 0) {
          $('body').removeClass('modal-open'); // 모든 모달이 닫혔을 경우 modal-open 클래스 제거
          $('body').css('overflow', 'auto'); // 스크롤 다시 활성화
          $('.modal-backdrop').remove(); // 오버레이(회색 배경) 제거
      }
    });

    function modalClose(mn){
      $(`#${mn}`).modal('hide');
    }

    </script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
  </body>

</html>