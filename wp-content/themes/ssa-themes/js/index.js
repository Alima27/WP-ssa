// swiper indicator
$(document).ready(function(){
	var swiper = new Swiper(".indication-swiper", {
		pagination: {
			el: ".swiper-pagination",
		},
		navigation: {
			nextEl: ".swiper-button-next",
			prevEl: ".swiper-button-prev",
		},
		scrollbar: {
			el: ".swiper-scrollbar",
			hide: true,
		},
	});;
});

$(document).ready(function(){
	$('#steps-tab a').on('click', function (event) {
		event.preventDefault()
		$(this).tab('show')
	})
});

$(document).ready(function(){
	$('#pills-tab a').on('click', function (event) {
		event.preventDefault()
		$(this).tab('show')
	})
});

$(document).ready(function(){
	$('#StepsTab a').on('click', function (event) {
		event.preventDefault()
		$(this).tab('show')
	})
});

$(document).ready(function(){
	var swiper = new Swiper(".StepsTab", {
		direction: "vertical",
		mousewheel: true,
		pagination: {
			el: ".swiper-pagination",
			clickable: true,
		},
		navigation: {
			nextEl: ".swiper-button-next",
			prevEl: ".swiper-button-prev",
		},
	});
});

$(document).ready(function(){
	$('#v-pills-tab a').on('click', function (event) {
		event.preventDefault()
		$(this).tab('show')
	})
});
