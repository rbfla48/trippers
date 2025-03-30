<!DOCTYPE html>
<html lang="ko" data-bs-theme="light">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
  <title>구석구석 남해</title>

  <link rel="stylesheet" href="/assets/bootstrap/bootstrap-5.3.3-dist/css/bootstrap.css">
  <link rel="stylesheet" href="/assets/bootstrap/bootstrap-5.3.3-dist/js/bootstrap.bundle.js">
  <link rel="stylesheet" href="/assets/fonts/fontawesome-all.min.css">
  <link rel="stylesheet" href="/assets/css/Navbar-Centered-Brand-icons.css">

  <link rel="stylesheet" href="/assets/css/globals.css" />
  <link rel="stylesheet" href="/assets/css/styles.css">
  <link rel="stylesheet" href="/assets/css/article_detail.css">
  <link rel="stylesheet" href="/assets/css/swiper.css" />
  <script src="/assets/js/swiper.js"></script>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

</head>
<style>
#tab01.active {
	background-color: #F4BC1B; /* tab01 클릭 시 배경색 */
	/* max-width: 512px; */
}

#tab02.active {
	background-color: #5ED1FF; /* tab02 클릭 시 배경색 */
	/* max-width: 512px; */
}
</style>
<!-- 상단탭 -->
<header class="header d-flex justify-content-center">
	<button type="button" id="tab01" class="btn btn-link rounded-0 active" onclick="location.href='/event'">
		<img src="/assets/img/header_tab01.svg" class="svg-icon w-100">
	</button>
	<button type="button" id="tab02" class="btn btn-link rounded-0" onclick="location.href='/event'">
		<img src="/assets/img/header_tab02.svg" class="svg-icon w-100">
	</button>
</header>
<body>
  <div class="main-container mt-5"> 
    <!-- 상단 배너 -->
    <div class="article-banner" style="background-image: url('<?= get_event_upload_path(). ($this->agent->is_mobile() ? $info['banner_image_mobile'] : $info['banner_image_pc'])?>'); background-position: center; background-size: cover;">
      <div class="row h-100 align-items-center justify-content-center">
        <div class="col-md-12 text-center">
          <div class="article-banner-text fw-bold"><strong><?= $info['title']?></strong></div>
        </div>
      </div>
    </div>
    <!-- //상단 배너 -->
    <!-- 글 본문 영역 -->
    <div class="content-area">
      <?= $info['content']; ?>
    </div>
    <!-- //글 본문 영역 -->
  </div>
  <?php include_once("common/footer.php")?>
</div>
  <script>
  $(document).ready(function() {
    // tab01 클릭 시 배경색 변경
    $("#tab01").on("click", function() {
      $("#tab01").addClass("active"); // tab01 활성화
      $("#tab02").removeClass("active"); // tab02 비활성화
    });

    // tab02 클릭 시 배경색 변경
    $("#tab02").on("click", function() {
      $("#tab02").addClass("active"); // tab02 활성화
      $("#tab01").removeClass("active"); // tab01 비활성화
    });
  });
  </script>
  <script src="/assets/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>