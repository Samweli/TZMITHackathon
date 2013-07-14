		
				
				$(document).ready(function() {
				// Animating Our Work Box on the Homepage
				$('#daily_updates').cycle({
					fx:	'scrollRight',
					delay: 1000,
					speedIn:	1000,
					timeout:	15000
				});
				
				$('#featured').cycle({
					fx:	'scrollLeft',
					delay: 1000,
					speedIn:	1000,
					timeout:	15000
				});
				
				$('#products').cycle({
					fx:	'scrollLeft',
					delay: 1000,
					speedIn:	1000,
					timeout:	15000
				});
				
				$('#shirts').cycle({
					fx:	'scrollDown',
					delay: 1000,
					speedIn:	1000,
					timeout:	15000
				});
				
				$('#other_contents').cycle({
					fx:	'scrollRight',
					delay: 1000,
					speedIn:	1000,
					timeout:	15000
				});
				
				
				$(function() {
					$('#featured a').lightBox();
					
					});
					
				
				});
				
			
				
					function togglediv(element, speed) {
						$('.act_content').hide('shake', 1000);
						//$('.act_content').hide('fold', 3000);
						$(element).show('clip', speed);
						//$(element).animate({ width: 'toggle'}, 2000);
					}
				
					