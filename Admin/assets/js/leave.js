$('#startDay').datepicker({
        uiLibrary: 'materialdesign', iconsLibrary: 'fontawesome', value: '12/12/2018'
    });
    $('#dueDay').datepicker({
        uiLibrary: 'materialdesign', iconsLibrary: 'fontawesome', value: '12/12/2018'
    });
	$(window, document, undefined).ready(function() {

		$('input, textarea').blur(function() {
		    var $this = $(this);
		    if ($this.val())
		      $this.addClass('used');
		    else
		      $this.removeClass('used');
		});
	});

	$(".select-single").select2({
	    minimumResultsForSearch: -1
	});	
	$(".select-multiple").select2({
	    minimumResultsForSearch: -1
	});	