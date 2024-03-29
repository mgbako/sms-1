(function($){
'use strict';

	function countChecked(){
		var percentage = $('#percentage').val();
		var progress = $('.progressStatus');
		var remarks = $('.remarks');
		var totalQ = $('#totalQ');

		if(percentage == 0 ){
			$('.progress-bar').addClass('progress-bar-danger');
			progress.addClass('label-danger');
			progress.text("No Question Added");
			remarks.text("Not Done");
		}
		else if(percentage < totalQ ){
			$('.progress-bar').removeClass('progress-bar-danger');
			$('.progress-bar').addClass('progress-bar-warning');

			progress.removeClass('label-danger');
			progress.addClass('label-warning');
			progress.text("Processing");
			remarks.text("Processing");
		}
		else if(percentage == totalQ){
			$('.progress-bar').removeClass('progress-bar-warning');
			$('.progress-bar').addClass('progress-bar-primary');

			progress.removeClass('label-warning');
			progress.addClass('label-primary');
			progress.text("Finished Adding");
			remarks.text("Finished");
			
		}
		else{
			$('.progress-bar').removeClass('progress-bar-warning');
			$('.progress-bar').addClass('progress-bar-success');

			progress.removeClass('label-warning');
			progress.addClass('label-success');
			progress.text("Approved");
			remarks.text("Done");
		}
	}

	//countChecked();
	/**
	 * GUI i for Multiple Select
	 */

	 $('#selected, #seleteId, #selected3').select2();

}(jQuery));