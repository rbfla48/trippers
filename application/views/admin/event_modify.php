<div class="col-md-9 ms-sm-auto col-lg-10 p-md-4">
    <h5>행사일정 관리 > 행사수정</h5>
    <hr/>
    <br/>
    <form method="post" id="articleForm">
        <input type="hidden" name="id" id="id" value="<?= $info['id']?>">
        <div>
            <h4>제목</h4>
                <input type="text" name="title" id="title" class="form-control" value="<?= $info['title'];?>">
            <hr>

            <h4>일정</h4>
                <input type="text" name="start_date" id="start_date" class="form-control w-25" value="<?= $info['start_date'];?>">~
                <input type="text" name="end_date" id="end_date" class="form-control w-25" value="<?= $info['end_date'];?>">
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
                <img src="<?= base_url(get_article_upload_path().$info['thumbnail']);?>" class="img-fluid" style="max-width: 30%;">
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
    //본문 에디터
    $(document).ready(function() {
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
            url: '/admin/article/upload_image',
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

    $('#submitBtn').click(function() {
        var formData = new FormData();
        formData.append('id', $('#id').val());
        if($('#p_id').val()){
            formData.append('p_id', $('#p_id').val());
        }
        if($('#c_id').val()){
            formData.append('c_id', $('#c_id').val());
        }
        formData.append('category1', $('#category1').val());
        if($('#category2').val()){  
            formData.append('category2', $('#category2').val());
        }
        if($('#banner_image_pc').val()){
            formData.append('banner_image_pc', $('#banner_image_pc')[0].files[0]);
        }
        if($('#banner_image_mobile').val()){
            formData.append('banner_image_mobile', $('#banner_image_mobile')[0].files[0]);
        }
        if($('#thumbnail').val()){
            formData.append('thumbnail', $('#thumbnail')[0].files[0]);
        }
        formData.append('title', $('#title').val());
        formData.append('content', $('#content').val());
        formData.append('content_sub', $('#content_sub').val());
        formData.append('article_by', $('#article_by').val());
        formData.append('picture_by', $('#picture_by').val());
        formData.append('place_by', $('#place_by').val());
        formData.append('tag', $('#tag').val());
        if($('#event_banner_img').val()){
            formData.append('event_banner_img', $('#event_banner_img')[0].files[0]);
        }
        formData.append('event_banner_link', $('#event_banner_link').val());
        formData.append('event_banner_text', $('#event_banner_text').val());

        $.ajax({
            url: '/admin/article/regi_article',
            type: 'POST',
            data: formData,
            contentType: false,
            processData: false,
            success: function(response) {
                var result = JSON.parse(response)
                alert(result.msg);
                window.location.href = '/admin/article';
            },
            error: function(xhr, status, error) {
                console.error(xhr.responseText);
                alert('An error occurred: ' + xhr.responseText);
            }
        });
    });
</script>