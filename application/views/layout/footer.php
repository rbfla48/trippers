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
      spaceBetween: 100, // 슬라이드 간 간격
      direction: 'horizontal', // 일반적으로 가로 방향 사용
      loop: true, // 무한 반복
    });
  </script>