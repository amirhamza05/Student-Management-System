var allInternalLinks = document.querySelectorAll('[href^="#"]');

for(var m = 0; m < allInternalLinks.length;m++){
	allInternalLinks[m].addEventListener('click',function(e){
		e.preventDefault();
		SmoothScroll(this.getAttribute('href'));
	});
}

function SmoothScroll(target){
	target = (typeof target === 'object')?target:document.querySelector(target);
	if(!target)return;
	var requestAnimationFrame = window.requestAnimationFrame || 
                        	window.mozRequestAnimationFrame || 
                        	window.webkitRequestAnimationFrame ||
                        	window.msRequestAnimationFrame;
	var _iteration = 0;
	var _scrollPosition = window.pageYOffset;
	var _finalPosition = target.getBoundingClientRect().top - 95;
	var _maxIterations = 50;

	ScrollAnimationLoop();

	
	function ScrollAnimationLoop(){
		window.scrollTo(0,easeOutCubic(_iteration,_scrollPosition,_finalPosition,_maxIterations));

		_iteration++;

		if(_iteration <= _maxIterations){
			requestAnimationFrame(function(){
				ScrollAnimationLoop();
			});
		}
	}

	function easeOutCubic(currentIteration, startValue, changeInValue, totalIterations) {
		return changeInValue * (Math.pow(currentIteration / totalIterations - 1, 3) + 1) + startValue;
	}	
}