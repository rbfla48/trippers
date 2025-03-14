<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1, minimum-scale=1">
    <!-- 검색엔진 사이트정보수집 방지 -->
    <meta name="robots" content="noindex, nofollow">
    <title>TRIPPERS ADMIN</title>
    
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    
    <!-- Summernote CSS -->
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.css" rel="stylesheet">
    
    <!-- jQuery (최신 버전 사용 권장) -->
    <!--    <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>-->
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/smoothness/jquery-ui.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    
    <!-- Bootstrap 5 JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    
    <!-- Summernote JS -->
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.js"></script>

    <!-- 카카오 우편번호검색 -->
    <script src="//t1.daumcdn.net/mapjsapi/bundle/postcode/prod/postcode.v2.js"></script>

    <!-- 차트 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/chart.js@4.3.2/dist/chart.umd.js"></script>
</head>
<script>
$(document).ready(function () {
    // 현재 URL의 경로를 가져옴
    var path = window.location.pathname;

    // 모든 nav-link에서 active 클래스를 제거
    $('.nav-link').removeClass('active');

    // 현재 경로와 일치하는 href 속성을 가진 nav-link에 active 클래스 추가
    $('.nav-link').each(function () {
        if ($(this).attr('href') === path) {
            $(this).addClass('active');
        }
    });
});
</script>
<body>
<main class="d-flex flex-nowrap">
    <div class="d-flex flex-column flex-shrink-0 p-3 text-bg-dark" style="width: 280px;">
        <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-white text-decoration-none">
            <svg class="bi pe-none me-2" width="40" height="32">
                <use xlink:href="#bootstrap" /></svg>
            <span class="fs-4">TRIPPER2.0 ADMIN</span>
        </a>
        <hr>
        <ul class="nav nav-pills flex-column mb-auto">
            <li class="nav-item">
                <a href="/admin/home" class="nav-link text-white" aria-current="page">
                    <svg class="bi pe-none me-2" width="16" height="16">
                        <use xlink:href="home" /></svg>
                    Home
                </a>
            </li>
            <li>
                <a href="/admin/article" class="nav-link text-white">
                    <svg class="bi pe-none me-2" width="16" height="16">
                        <use xlink:href="article" /></svg>
                    작성글 관리
                </a>
            </li>
            <li>
                <a href="/admin/creator" class="nav-link text-white">
                    <svg class="bi pe-none me-2" width="16" height="16">
                        <use xlink:href="creator" /></svg>
                    크리에이터 관리
                </a>
            </li>
            <li>
                <a href="/admin/place" class="nav-link text-white">
                    <svg class="bi pe-none me-2" width="16" height="16">
                        <use xlink:href="place" /></svg>
                    매장 관리
                </a>
            </li>
            <li>
                <a href="/admin/banner" class="nav-link text-white">
                    <svg class="bi pe-none me-2" width="16" height="16">
                        <use xlink:href="banner" /></svg>
                    베너관리
                </a>
            </li>
            <li>
                <a href="/admin/find_item" class="nav-link text-white">
                    <svg class="bi pe-none me-2" width="16" height="16">
                        <use xlink:href="find_item" /></svg>
                    FIND아이템 관리
                </a>
            </li>
            <li>
                <a href="/admin/goods" class="nav-link text-white">
                    <svg class="bi pe-none me-2" width="16" height="16">
                        <use xlink:href="goods" /></svg>
                    상품 관리
                </a>
            </li>
            <li>
                <a href="/admin/member" class="nav-link text-white">
                    <svg class="bi pe-none me-2" width="16" height="16">
                        <use xlink:href="member" /></svg>
                    회원 관리
                </a>
            </li>
            <li>
                <a href="/admin/member/point_log" class="nav-link text-white">
                    <svg class="bi pe-none me-2" width="16" height="16">
                        <use xlink:href="member/point_log" /></svg>
                    포인트 내역 조회
                </a>
            </li>
            <li>
                <a class="nav-link text-white" data-bs-toggle="collapse" href="#eventMenu" role="button" aria-expanded="false" aria-controls="eventMenu">
                    <svg class="bi pe-none me-2" width="16" height="16">
                    <use xlink:href="event" />
                    </svg>
                    행사관리
                </a>
                <div class="collapse" id="eventMenu">
                    <ul class="nav flex-column ms-3">
                    <li class="nav-item">
                        <a href="/admin/event" class="nav-link text-white">구석구석 남해</a>
                    </li>
                    <li class="nav-item">
                        <a href="/admin/event/place_list" class="nav-link text-white">마이굿플레이스</a>
                    </li>
                    </ul>
                </div>
            </li>
        </ul>
        <hr>
        <div class="dropdown">
            <a href="#" class="d-flex align-items-center text-white text-decoration-none dropdown-toggle"
                data-bs-toggle="dropdown" aria-expanded="false">
                <img src="https://github.com/mdo.png" alt="" width="32" height="32" class="rounded-circle me-2">
                <strong>ADMIN</strong>
            </a>
            <ul class="dropdown-menu dropdown-menu-dark text-small shadow">
                <li><a class="dropdown-item" href="#">New project...</a></li>
                <li><a class="dropdown-item" href="#">Settings</a></li>
                <li><a class="dropdown-item" href="#">Profile</a></li>
                <li>
                    <hr class="dropdown-divider">
                </li>
                <li><a class="dropdown-item" href="#">Sign out</a></li>
            </ul>
        </div>
    </div>
