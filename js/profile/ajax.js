var block_show = false;
 
function scrollMore(){
	var $target = $('#showmore-triger');
	
	if (block_show) {
		return false;
	}
 
	var wt = $(window).scrollTop();
	var wh = $(window).height();
	var et = $target.offset().top;
	var eh = $target.outerHeight();
	var dh = $(document).height();   
 
	if (wt + wh >= et || wh + wt == dh || eh + et < wh){
		var page = $target.attr('data-page');	
		page++;
		block_show = true;
        console.log(page);
 
		$.ajax({ 
			url: 'http://localhost:3000/src/add/ajax.php?page=' + page,  
			dataType: 'html',
			success: function(data){
				$('.contetn').append(data);
				block_show = false;
			}
		});
 
		$target.attr('data-page', page);
		if (page ==  $target.attr('data-max')) {
			$target.remove();
		}
	}
}
 
$(window).scroll(function(){
	scrollMore();
});
	
$(document).ready(function(){ 
	scrollMore();
});

