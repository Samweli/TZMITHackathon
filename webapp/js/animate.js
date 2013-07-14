
					
				
				
				$(document).ready(function() {
				// Animating Our Work Box on the Homepage
				$('#new_hits').cycle({
					fx:	'scrollRight',
					delay: 1000,
					speedIn:	1000,
					timeout:	15000
				});
				
				});
				
				
				$(document).ready(function() {
				// Animating Bannner on the Homepage
				$('.con_banner').cycle({
					fx:	'scrollRight',
					delay: -1000,
					speedIn:	1500,
					timeout:	8000,
					speedOut: 1000
				});
				
				
				$('#daily_updates').cycle({
					fx:	'scrollRight',
					delay: -1000,
					speedIn:	1500,
					timeout:	15000,
					speedOut: 1000
				});
				
				$('#services').cycle({
					fx:	'scrollLeft',
					delay: -1000,
					speedIn:	1500,
					timeout:	15000,
					speedOut: 1000
				});
				
				$('#our_designs').cycle({
					fx:	'scrollLeft',
					delay: -1000,
					speedIn:	1500,
					timeout:	15000,
					speedOut: 1000
				});
				
				// Hiding About TangroTech Content
				$('#intro_about').hide();
				$('#about_code4 p').hide();
				
				// Animating Abotu TangroTech when Clicked
				$('#about_head').click( function() {
					
					$('#intro_about').slideToggle(1000);
				});
				});
				
				
				
				
				$(document).ready(function() {
				// Script to Animate Banner on the Homepage
				
					$('#banner').hide().fadeIn(800);
					
					// Activating Lightbox on the Pictures.
					$(function() {
					$('#daily_updates a').lightBox();
					$('#clients a').lightBox();
					$('#events a').lightBox();
					$('#our_designs a').lightBox();
					});
					
					//Activating Tabs
				$('#mission_vision').tabs({ axis: 'x'});
				$('#services ul li p').hide();
				
				
				});
				
			
				
					
				
					