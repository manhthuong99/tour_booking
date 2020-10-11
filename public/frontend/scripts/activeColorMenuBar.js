document.addEventListener('DOMContentLoaded',function(){

	var nut = document.querySelectorAll('.ndheaderduoi a');
	for(var i = 0; i < nut.length; i++){
		nut[i].onclick = function(){
            for(var k = 0; k < nut.length; k++){
                nut[k].classList.remove('mauvang');
            }

            this.classList.toggle('mauvang');
            var ndActive = this.getAttribute('data-active');

            // ndActive
		}
    };
    

}, false)