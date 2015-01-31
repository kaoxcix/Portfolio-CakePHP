$( document ).ready(function(){
	
	  $('.button-collapse').sideNav({menuWidth: 240, activationWidth: 150});
	  $('.collapsible').collapsible();
	  $('.tooltipped').tooltip({"delay": 10});
	  $('.slider').slider({full_width: true});
	  $('.materialboxed').materialbox();
	  $('.my-modal').click(function(e){
		  if(e.target.className == 'my-modal') {
			  $('.my-modal').closeModal();
		  }
	  });
	  $('.modal-trigger').leanModal();
	  $('.port-gallery').each(function() {
		    $(this).magnificPopup({
		        delegate: 'a',
		        type: 'image',
		        gallery: {enabled:true}
		    });
	  });
});
