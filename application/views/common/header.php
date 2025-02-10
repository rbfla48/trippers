
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
	<button type="button" id="tab01" class="btn btn-link rounded-0 active">
		<img src="assets/img/header_tab01.svg" class="svg-icon w-100">
	</button>
	<button type="button" id="tab02" class="btn btn-link rounded-0">
		<img src="assets/img/header_tab02.svg" class="svg-icon w-100">
	</button>
</header>

<script>
// $(document).ready(function() {
// 	// tab01 클릭 시 배경색 변경
// 	$("#tab01").on("click", function() {
// 		$("#tab01").addClass("active"); // tab01 활성화
// 		$("#tab02").removeClass("active"); // tab02 비활성화
// 		$("#namhae").addClass("d-block");
// 		$("#namhae").removeClass("d-none");

// 		$("#mygoodplace").removeClass("d-block");
// 		$("#mygoodplace").addClass("d-none");
// 	});
	
// 	// tab02 클릭 시 배경색 변경
// 	$("#tab02").on("click", function() {
// 		$("#tab02").addClass("active"); // tab02 활성화
// 		$("#tab01").removeClass("active"); // tab01 비활성화
// 		$("#mygoodplace").addClass("d-block"); // tab01 활성화
// 		$("#mygoodplace").removeClass("d-none"); // tab01 활성화

// 		$("#namhae").removeClass("d-block"); // tab01 활성화
// 		$("#namhae").addClass("d-none"); // tab01 활성화
// 	});
// });
$("#tab02").click(function() {
	alert("준비중 입니다. 😀");
});
</script>