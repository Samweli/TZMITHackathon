
        <!-- Web Developing and Designing -->
        <div id="contents" class="act_content" style="display: none;">
			
            <div id="welcome">
            <article>
            <h4>My Uploaded Contents | <a href="javascript:;" onclick="load_data();">Load Contents</a></h4>
            
            
            
            <p id="content_fetched">Results will be shown here</p>
            </article>
            
            </div>
        
        	
        </div>
        
        <script>
		function load_data() {
		$('#content_fetched').text('Loading Contents......');
		alert('Contens Laoded: Press OK to View Them');
		$.ajax({
					url:	'./php/fetch_my_data.php',
					success: function (data) {
					
					$('#content_fetched').html(data).hide().show('clip', 1000);
					}
					});	
					
		}
		</script>
        