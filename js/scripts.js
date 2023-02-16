$(document).ready(function($) {
  $(".scroll").click(function(event) { // 클래스가 scroll_move인 a 태그를 눌렀을때 발생되게 하는 이벤트 
    event.preventDefault();
    $('html,body').animate({
      scrollTop: $(this.hash).offset().top
    }, 10); // $(this.hash) a태그에 있는 해쉬 값으로 스크롤링 되며 이동, 1000은 이동 속도
  });
});

new Swiper('.swiper-container', {

  slidesPerView: 5, // 동시에 보여줄 슬라이드 갯수
  spaceBetween: 30, // 슬라이드간 간격
  slidesPerGroup: 1, // 그룹으로 묶을 수, slidesPerView 와 같은 값을 지정하는게 좋음

  // 그룹수가 맞지 않을 경우 빈칸으로 메우기
  // 3개가 나와야 되는데 1개만 있다면 2개는 빈칸으로 채워서 3개를 만듬
  loopFillGroupWithBlank: true,

  loop: true, // 무한 반복

  navigation: { // 네비게이션
    nextEl: '.swiper-button-next', // 다음 버튼 클래스명
    prevEl: '.swiper-button-prev', // 이번 버튼 클래스명
  },
	breakpoints: {
    500: {
      slidesPerView: 1, // 동시에 보여줄 슬라이드 갯수
      spaceBetween: 30, // 슬라이드간 간격
      slidesPerGroup: 1, // 그룹으로 묶을 수, slidesPerView 와 같은 값을 지정하는게 좋음

			// 그룹수가 맞지 않을 경우 빈칸으로 메우기
		  // 3개가 나와야 되는데 1개만 있다면 2개는 빈칸으로 채워서 3개를 만듬
		  loopFillGroupWithBlank: true,

		  loop: true, // 무한 반복

		  navigation: { // 네비게이션
		    nextEl: '.swiper-button-next', // 다음 버튼 클래스명
		    prevEl: '.swiper-button-prev', // 이번 버튼 클래스명
		  },
    }
  }
});
