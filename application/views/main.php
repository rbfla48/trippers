<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>trippers</title>
  <!--슬라이드-->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
  <!--슬라이드/-->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <link rel="stylesheet" href="assets/css/globals.css" />
  <link rel="stylesheet" href="assets/css/style.css" />
</head>

<body>
  <div class="PC">
    <div class="div">
      <img class="image" src="https://c.animaapp.com/IWpl16yO/img/--@3x.png" />
      <img class="img" src="https://c.animaapp.com/IWpl16yO/img/------@3x.png" />
      <div class="overlap">
        <div class="view">
          <!--하단 이번주 우리동네 글목록 슬라이드-->
          <div class="view-wrapper-bottom">
            <div class="article-slide">
              <div class="element swiper-wrapper">
                <?php foreach($article_dongnae as $list):?>
                <div class="element-2 swiper-slide">
                  <img src="<?php echo get_article_upload_path().$list['thumbnail'];?>" />
                  <p class="text-wrapper"><?php echo $list['title']?></p>
                  <div class="text-wrapper-2"><?php echo $list['name']?></div>
                  <div class="overlap-group">
                    <p class="p"><?php echo strip_tags($list['content'])?></p>
                    <div class="group">
                      <?php 
                            $tags = explode("#",$list['tag']);
                            for($i=1 ;$i<count($tags) ; $i++):?>
                      <span class="badge text-bg-secondary"><?php echo $tags[$i]?></span>
                      <?php endfor;?>
                    </div>
                  </div>
                </div>
                <?php endforeach;?>
              </div>
            </div>
          </div>
          <!--하단 이번주 우리동네 글목록 슬라이드/-->
          <div class="rectangle-3"></div>
          <div class="text-wrapper-12">이번 주 우리동네</div>
        </div>
        <!--하단 배너 슬라이드-->
        <div class="div-wrapper">
          <div class="overlap-wrapper banner-swiper">
            <div class="overlap-5 swiper-wrapper">
              <?php foreach($mb_banners as $list):?>
                <img class="swiper-slide" src="<?php echo get_banner_upload_path().$list['filename'];?>" />
              <?php endforeach;?>
            </div>
            <div class="swiper-pagination"></div>
            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>
          </div>
        </div>
        <!--하단 배너 슬라이드/-->
        <div class="div-4">
          <div class="view-3">
            <div class="view-2">
              <!--상단 이번주 우리동네 글목록 슬라이드-->
              <div class="view-wrapper-top">
                <div class="article-slide">
                  <div class="element swiper-wrapper">
                    <?php foreach($article_creator as $list):?>
                    <div class="element-2 swiper-slide">
                      <img src="<?php echo get_article_upload_path().$list['thumbnail'];?>" />
                      <p class="text-wrapper"><?php echo $list['title']?></p>
                      <div class="text-wrapper-2"><?php echo $list['name']?></div>
                      <div class="overlap-group">
                        <p class="p"><?php echo strip_tags($list['content'])?></p>
                        <div class="group">
                          <?php 
                                $tags = explode("#",$list['tag']);
                                for($i=1 ;$i<count($tags) ; $i++):?>
                          <span class="badge text-bg-secondary"><?php echo $tags[$i]?></span>
                          <?php endfor;?>
                        </div>
                      </div>
                    </div>
                    <?php endforeach;?>
                  </div>
                </div>
              </div>
              <!--하단 이번주 우리동네 글목록 슬라이드/-->
            </div>
          </div>
          <div class="overlap-6">
            <div class="rectangle-4"></div>
            <div class="text-wrapper-13">크리에이터 추천 공간</div>
          </div>
        </div>
        <!--상단슬라이드-->
        <div class="img-2 banner-swiper">
          <div class="swiper-wrapper">
            <?php foreach($mt_banners as $list):?>
            <img class="swiper-slide" src="<?php echo get_banner_upload_path().$list['filename'];?>" />
            <?php endforeach;?>
          </div>
          <div class="swiper-pagination"></div>
          <div class="swiper-button-prev"></div>
          <div class="swiper-button-next"></div>
        </div>
        <!--상단슬라이드/-->
      </div>
      <div class="view-4">
        <div class="view-5">
          <img class="element-10" src="https://c.animaapp.com/IWpl16yO/img/-----1@2x.png" />
          <div class="text-wrapper-14">Menu</div>
        </div>
      </div>
      <div class="view-6">
        <img class="b" src="https://c.animaapp.com/IWpl16yO/img/-----b-1@2x.png" />
        <p class="element-11">
          <span class="span">트리퍼<br /></span>
          <span class="text-wrapper-15">대표&nbsp;&nbsp;이진우 | 사업자 등록번호 732-17-02122 | 통신판매업 신고번호 2023-경남 남해-105호<br />경남
            남해군 삼동면 동부대로 1876번길 15<br /></span>
        </p>
        <div class="ABOUT-NEWSLETTER">
          ABOUT&nbsp;&nbsp;|&nbsp;&nbsp; NEWSLETTER&nbsp;&nbsp;|&nbsp;&nbsp; INSTAGRAM&nbsp;&nbsp;|&nbsp;&nbsp;YOUTUBE
        </div>
        <div class="rectangle-5"></div>
      </div>
      <img class="user" src="https://c.animaapp.com/IWpl16yO/img/user.svg" />
      <img class="search" src="https://c.animaapp.com/IWpl16yO/img/search.svg" />
    </div>
  </div>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
  <script>
    const bannerSwiper = new Swiper('.banner-swiper', {
      // 슬라이더 방향
      direction: 'horizontal', // 일반적으로 가로 방향 사용
      loop: true,

      // 페이지 네비게이션
      pagination: {
        el: '.swiper-pagination',
        clickable: true,
        bulletClass: 'swiper-pagination-bullet',
        bulletActiveClass: 'swiper-pagination-bullet-active',
      },

      // 네비게이션 버튼
      navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
      },

      // 스크롤바 (선택 사항)
      scrollbar: {
        el: '.swiper-scrollbar',
      },
    });

    const articleSwiper = new Swiper('.article-slide', {
      slidesPerView: 4, // 한 슬라이드에 4개의 타일 표시
      spaceBetween: 40, // 슬라이드 간 간격
      direction: 'horizontal', // 일반적으로 가로 방향 사용
      loop: true, // 무한 반복
    });
  </script>
</body>

</html>