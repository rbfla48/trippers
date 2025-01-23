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

</head>

<body>
  <div class="main-container">
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

  <!-- 스크립트 위치를 body 태그 안으로 이동 -->
  <script src="/assets/js/swiper.js"></script>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script>

  </script>
  <script src="/assets/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>