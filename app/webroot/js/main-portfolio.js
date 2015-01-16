$( document ).ready(function(){
	  $('.modal-trigger').leanModal();
	  $('.button-collapse').sideNav();
	  $('.collapsible').collapsible();
	  $('.tooltipped').tooltip({"delay": 10})
	  $('.my-modal').click(function(e){
		  if(e.target.className == 'my-modal') {
			  $('.my-modal').closeModal();
		  }
	  });
});