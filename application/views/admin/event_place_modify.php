<div class="col-md-9 ms-sm-auto col-lg-10 p-md-4">
    <h5>마이굿플레이스 행사일정 관리 > 행사수정</h5>
    <hr/>
    <br/>
    <form method="post" id="eventForm">
        <input type="hidden" name="id" id="id" value="<?= $info['id']?>">
        <div>
            <h4>제목</h4>
                <input type="text" name="title" id="title" class="form-control" value="<?= $info['title'];?>">
            <hr>

            <h4>대표 이미지(PC)</h4>
                <input type="file" name="banner_image_pc" id="banner_image_pc" class="form-control w-25">

            <hr>

            <div class="container mt-5">
                <h5>현재 대표 이미지(PC)</h5>
                <p><?= $info['banner_image_pc'];?></p>
                <img src="<?= base_url(get_event_upload_path().$info['banner_image_pc']);?>" class="img-fluid" style="max-width: 30%;">
            </div>

            <hr>

            <h4>대표 이미지(모바일)</h4>
                <input type="file" name="banner_image_mobile" id="banner_image_mobile" class="form-control w-25">

            <hr>

            <div class="container mt-5">
                <h5>현재 대표 이미지(모바일)</h5>
                <p><?= $info['banner_image_mobile'];?></p>
                <img src="<?= base_url(get_event_upload_path().$info['banner_image_mobile']);?>" class="img-fluid" style="max-width: 30%;">
            </div>

            <hr>

            <h4>주소</h4>
                <div class="input-group h-100 w-50">
                    <h5 calss="ps-1">주소</h5>    
                    <input type="text" class="h-100 w-100 form-control" id="address" name="address" value="<?=$info['address']?>" readonly>
                </div>
                <br>
                <div class="input-group h-100 w-50">
                    <h5 calss="ps-1">상세주소</h5>
                    <input type="text" class="h-100 w-100 form-control" id="address_detail" name="address_detail" value="<?=$info['address_detail']?>">
                </div>
                <br>
                <div class="input-group h-100 w-25">
                    <h5 calss="ps-1">위치</h5>
                    <input type="text" class="h-100 w-100 form-control" id="location" name="location" value="<?=$info['location']?>" readonly>
                </div>
            <hr>

            <h4>노출용 본문</h4>
                <textarea  name="content_sub" id="content_sub" class="form-control"><?= $info['content_sub'];?></textarea>
            <hr>

            <h4>태그 ( '#' 으로 구분)</h4>
                <input type="text" name="tag" id="tag" class="form-control w-25" value="<?= $info['tag'];?>">
            <hr>

            <h4>썸네일</h4>
                <input type="file" name="thumbnail" id="thumbnail" class="form-control w-25">

            <hr>

            <div class="container mt-5">
                <h5>현재 썸네일</h5>
                <p><?= $info['thumbnail'];?></p>
                <img src="<?= base_url(get_event_upload_path().$info['thumbnail']);?>" class="img-fluid" style="max-width: 30%;">
            </div>

            <hr>

            <h4>본문</h4>
            <!-- 에디터 -->
                <textarea class="summernote" id="content" name="content"><?= $info['content'];?></textarea>
            <hr>
        </div>
        <br/>
        <div class="d-grid gap-2 col-6 mx-auto">
            <button type="button" id="submitBtn" class="btn btn-primary btn-lg">수정</button>
        </div>
    </form>
</div>
<link href="https://cdn.jsdelivr.net/gh/orioncactus/pretendard/dist/web/static/pretendard.css" rel="stylesheet">
<script>

    $(document).ready(function() {

        // Datepicker 행사일정
        $("#start_date, #end_date").datepicker({
            dateFormat: 'yy-mm-dd',
            changeMonth: true,
            changeYear: true,
            showButtonPanel: true,
            showAnim: "slideDown",
            // 한글 설정
            monthNames: ['1월', '2월', '3월', '4월', '5월', '6월', '7월', '8월', '9월', '10월', '11월', '12월'],
            monthNamesShort: ['1월', '2월', '3월', '4월', '5월', '6월', '7월', '8월', '9월', '10월', '11월', '12월'],
            dayNames: ['일요일', '월요일', '화요일', '수요일', '목요일', '금요일', '토요일'],
            dayNamesShort: ['일', '월', '화', '수', '목', '금', '토'],
            dayNamesMin: ['일', '월', '화', '수', '목', '금', '토'],
            isRTL: false,
            yearSuffix: '년',
            showMonthAfterYear: true
        });

        //본문 에디터
        $('#content').summernote({
            tabsize: 2,
            height: 500,
            lang: "ko-KR",

            toolbar: [
                ['style', ['style']], // 글자 스타일 설정 옵션
                ['fontsize', ['fontsize']], // 글꼴 크기 설정 옵션
                ['font', ['bold', 'underline', 'clear']], // 글자 굵게, 밑줄, 포맷 제거 옵션
                ['color', ['color']], // 글자 색상 설정 옵션
                ['table', ['table']], // 테이블 삽입 옵션
                ['para', ['ul', 'ol', 'paragraph']], // 문단 스타일, 순서 없는 목록, 순서 있는 목록 옵션
                ['height', ['height']], // 에디터 높이 조절 옵션
                ['insert', ['picture', 'link', 'video']], // 이미지 삽입, 링크 삽입, 동영상 삽입 옵션
                ['view', ['codeview', 'fullscreen', 'help']], // 코드 보기, 전체 화면, 도움말 옵션
            ],
            callbacks: {
                onImageUpload: function(files) {
                    for (var i = 0; i < files.length; i++) {
                        uploadContentImage(files[i]);
                    }
                }
            },
            fontSizes: [
                '8', '9', '10', '11', '12', '14', '16', '18',
                '20', '22', '24', '28', '30', '36', '50', '72',
            ], // 글꼴 크기 옵션

            styleTags: [
                'p',  // 일반 문단 스타일 옵션
                {
                    title: 'Blockquote',
                    tag: 'blockquote',
                    className: 'blockquote',
                    value: 'blockquote',
                },  // 인용구 스타일 옵션
                'pre',  // 코드 단락 스타일 옵션
                {
                    title: 'code_light',
                    tag: 'pre',
                    className: 'code_light',
                    value: 'pre',
                },  // 밝은 코드 스타일 옵션
                {
                    title: 'code_dark',
                    tag: 'pre',
                    className: 'code_dark',
                    value: 'pre',
                },  // 어두운 코드 스타일 옵션
                'h1', 'h2', 'h3', 'h4', 'h5', 'h6',  // 제목 스타일 옵션
            ],
            fontNames: ['Pretendard', 'Arial', 'Courier New', 'Times New Roman'], // 폰트 목록에 Pretendard 추가
            fontNamesIgnoreCheck: ['Pretendard'], // Summernote에서 기본 제공하지 않는 폰트를 사용할 때 필요
        });
    });

    //본문이미지 업로드
    function uploadContentImage(file) {
        var data = new FormData();
        data.append("file", file);
        $.ajax({
            url: '/admin/event/upload_image',
            cache: false,
            contentType: false,
            processData: false,
            data: data,
            type: "POST",
            success: function(url) {
                var image = $('<img>').attr('src', url);
                $('#content').summernote("insertNode", image[0]);
            },
            error: function(data) {
                console.error(data.responseText);
            }
        });
    }

    //행사일정 수정
    $('#submitBtn').click(function() {
        var formData = new FormData();
        formData.append('id', $('#id').val());
        formData.append('type', 'P');
        if($('#thumbnail').val()){
            formData.append('thumbnail', $('#thumbnail')[0].files[0]);
        }
        formData.append('title', $('#title').val());
        if($('#banner_image_mobile').val()){
            formData.append('banner_image_mobile', $('#banner_image_mobile')[0].files[0]);
        }
        if($('#banner_image_pc').val()){
            formData.append('banner_image_pc', $('#banner_image_pc')[0].files[0]);
        }
        formData.append('start_date', $('#start_date').val());
        formData.append('end_date', $('#end_date').val());
        formData.append('address', $('#address').val());
        formData.append('address_detail', $('#address_detail').val());
        formData.append('location', $('#location').val());
        formData.append('content', $('#content').val());
        formData.append('content_sub', $('#content_sub').val());
        formData.append('tag', $('#tag').val());

        $.ajax({
            url: '/admin/event/regi_event',
            type: 'POST',
            data: formData,
            contentType: false,
            processData: false,
            success: function(response) {
                var result = JSON.parse(response)
                alert(result.msg);
                window.location.href = '/admin/event';
            },
            error: function(xhr, status, error) {
                console.error(xhr.responseText);
                alert('An error occurred: ' + xhr.responseText);
            }
        });
    });

    //주소항목 클릭시 카카오주소검색 팝업
    $("#address").click(function() {
        openKakaoPostcode(function(data) {
            $("#address").val(data.addr);
            $("#location").val(data.location);
            //$("#zip_code").val(data.zonecode);       
        });
    });

    function openKakaoPostcode(callback) {
        new daum.Postcode({
            oncomplete: function(data) {
                
                if (data.userSelectedType === 'R') { // 사용자가 도로명 주소를 선택했을 경우
                    addr = data.roadAddress;
                } else { // 사용자가 지번 주소를 선택했을 경우(J)
                    addr = data.jibunAddress;
                }

                const addressData = {
                    zonecode: data.zonecode,    // 우편번호
                    addr: addr,     // 주소
                    location: data.bname1, //읍/면 이름름
                };

                // 결과를 콜백 함수로 전달
                if (typeof callback === 'function') {
                    callback(addressData);
                }
            },
            width: '100%',
            height: '100%'
        }).open();
    }
</script>