function moveScroll(position) {
	$('html, body').animate({
		scrollTop: parseInt($(position).offset().top)
	}, 500);
}

$(document).ready(function(){

      $('ul.tabs li').click(function(){
        var tab_id = $(this).attr('data-tab');

        $('ul.tabs li').removeClass('current');
        $('.tab-content').removeClass('current');

        $(this).addClass('current');
        $("#"+tab_id).addClass('current');
      });

      $("#step1").click(function(e){
        e.preventDefault();
        var visible = $(".article1").is(':visible');

        $('.article1').slideToggle();
        $('.article2').hide();
        $('.article3').hide();
        $('.article4').hide();
        $('.article5').hide();
        $('.article6').hide();
        $('.article7').hide();
        $('.article8').hide();
        $('.article9').hide();
        $('.article10').hide();
        $('.article11').hide();
        $('.article12').hide();

        if (!visible){
            moveScroll(".article1");
        }
      });

      $("#step2").click(function(e){
        e.preventDefault();
        var visible = $(".article2").is(':visible');

        $('.article1').hide();
        $('.article2').slideToggle();
        $('.article3').hide();
        $('.article4').hide();
        $('.article5').hide();
        $('.article6').hide();
        $('.article7').hide();
        $('.article8').hide();
        $('.article9').hide();
        $('.article10').hide();
        $('.article11').hide();
        $('.article12').hide();

        if (!visible){
            moveScroll(".article2");
        }
      });

      $("#step3").click(function(e){
        e.preventDefault();
        var visible = $(".article3").is(':visible');

        $('.article1').hide();
        $('.article2').hide();
        $('.article3').slideToggle();
        $('.article4').hide();
        $('.article5').hide();
        $('.article6').hide();
        $('.article7').hide();
        $('.article8').hide();
        $('.article9').hide();
        $('.article10').hide();
        $('.article11').hide();
        $('.article12').hide();

        if (!visible){
            moveScroll(".article3");
        }
      });

      $("#step4").click(function(e){
        e.preventDefault();
        var visible = $(".article4").is(':visible');

        $('.article1').hide();
        $('.article2').hide();
        $('.article3').hide();
        $('.article4').slideToggle();
        $('.article5').hide();
        $('.article6').hide();
        $('.article7').hide();
        $('.article8').hide();
        $('.article9').hide();
        $('.article10').hide();
        $('.article11').hide();
        $('.article12').hide();

        if (!visible){
            moveScroll(".article4");
        }
      });

      $("#step5").click(function(e){
        e.preventDefault();
        var visible = $(".article5").is(':visible');

        $('.article1').hide();
        $('.article2').hide();
        $('.article3').hide();
        $('.article4').hide();
        $('.article5').slideToggle();
        $('.article6').hide();
        $('.article7').hide();
        $('.article8').hide();
        $('.article9').hide();
        $('.article10').hide();
        $('.article11').hide();
        $('.article12').hide();

        if (!visible){
            moveScroll(".article5");
        }
      });

      $("#step6").click(function(e){
        e.preventDefault();
        var visible = $(".article6").is(':visible');

        $('.article1').hide();
        $('.article2').hide();
        $('.article3').hide();
        $('.article4').hide();
        $('.article5').hide();
        $('.article6').slideToggle();
        $('.article7').hide();
        $('.article8').hide();
        $('.article9').hide();
        $('.article10').hide();
        $('.article11').hide();
        $('.article12').hide();

        if (!visible){
            moveScroll(".article6");
        }
      });

      $("#step7").click(function(e){
        e.preventDefault();
        var visible = $(".article7").is(':visible');

        $('.article1').hide();
        $('.article2').hide();
        $('.article3').hide();
        $('.article4').hide();
        $('.article5').hide();
        $('.article6').hide();
        $('.article7').slideToggle();
        $('.article8').hide();
        $('.article9').hide();
        $('.article10').hide();
        $('.article11').hide();
        $('.article12').hide();

        if (!visible){
            moveScroll(".article7");
        }
      });

      $("#step8").click(function(e){
        e.preventDefault();
        var visible = $(".article8").is(':visible');

        $('.article1').hide();
        $('.article2').hide();
        $('.article3').hide();
        $('.article4').hide();
        $('.article5').hide();
        $('.article6').hide();
        $('.article7').hide();
        $('.article8').slideToggle();
        $('.article9').hide();
        $('.article10').hide();
        $('.article11').hide();
        $('.article12').hide();

        if (!visible){
            moveScroll(".article8");
        }
      });

      $("#step9").click(function(e){
        e.preventDefault();
        var visible = $(".article9").is(':visible');

        $('.article1').hide();
        $('.article2').hide();
        $('.article3').hide();
        $('.article4').hide();
        $('.article5').hide();
        $('.article6').hide();
        $('.article7').hide();
        $('.article8').hide();
        $('.article9').slideToggle();
        $('.article10').hide();
        $('.article11').hide();
        $('.article12').hide();

        if (!visible){
            moveScroll(".article9");
        }
      });

      $("#step10").click(function(e){
        e.preventDefault();
        var visible = $(".article10").is(':visible');

        $('.article1').hide();
        $('.article2').hide();
        $('.article3').hide();
        $('.article4').hide();
        $('.article5').hide();
        $('.article6').hide();
        $('.article7').hide();
        $('.article8').hide();
        $('.article9').hide();
        $('.article10').slideToggle();
        $('.article11').hide();
        $('.article12').hide();
        if (!visible){
            moveScroll(".article10");
        }
      });

      $("#step11").click(function(e){
        e.preventDefault();
        var visible = $(".article11").is(':visible');

        $('.article1').hide();
        $('.article2').hide();
        $('.article3').hide();
        $('.article4').hide();
        $('.article5').hide();
        $('.article6').hide();
        $('.article7').hide();
        $('.article8').hide();
        $('.article9').hide();
        $('.article10').hide();
        $('.article11').slideToggle();
        $('.article12').hide();

        if (!visible){
            moveScroll(".article11");
        }
      });

      $("#step12").click(function(e){
        e.preventDefault();
        var visible = $(".article12").is(':visible');

        $('.article1').hide();
        $('.article2').hide();
        $('.article3').hide();
        $('.article4').hide();
        $('.article5').hide();
        $('.article6').hide();
        $('.article7').hide();
        $('.article8').hide();
        $('.article9').hide();
        $('.article10').hide();
        $('.article11').hide();
        $('.article12').slideToggle();

        if (!visible){
            moveScroll(".article12");
        }
      });

});
