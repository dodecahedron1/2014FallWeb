 	<header>
 		<div class="container">
				<h1>Excercise Tracker</h1>
			</div>
 	</header>
 
 			<div class="container content">
			<a class="btn btn-success toggle-modal" data-target="#myModal" href="?action=create">
 					<i class="glyphicon glyphicon-plus"></i>
 					Add
 				</a>
 				
 				<!-- Modal -->
 				<div class="modal fade" id="myModal" tabindex="-1" >
 				  <div class="modal-dialog">
 				    <div class="modal-content">
 				    </div>
 				  </div>
 				</div>
 				
 			
           <div class="table-responsive">
             <table class="table table-striped">
               <thead>
                 <tr>
                   <th>Arms (mins)</th>
                   <th>Legs (mins)</th>
                   <th>Cardio (mins)</th>
                   <th>Stretching (mins)</th>
                   <th>Weight</th>
                   <th>Date</th>
                   <th>Social</th>
                
                 </tr>
               </thead>
               <tbody>
                <? foreach ($model2 as $rs): ?>
                <tr>
                  <td><?=$rs['Arms']?></td>
                  <td><?=$rs['Legs']?></td>
                  <td><?=$rs['Cardio']?></td>
                  <td><?=$rs['Stretching']?></td>
                  <td><?=$rs['Weight']?></td>
                  <td><?=$rs['Date']?></td>
                  <td>
                  	<label for='formFriends[]'>Select the friends that you were with:</label><br>
						<select multiple="multiple" name="formFriends[]">
   							 <option value="Bill">Bill</option>
  						 	<option value="Alice">Alice</option>
  						 	<option value="Emily">Emily</option>
  						 	<option value="Shyah">Shyah</option>
						</select>		    
				</td>


                  <td>
                  	
                  		<a title="Edit" class="btn btn-default btn-sm toggle-modal" data-target="#myModal" href="?action=edit&id=<?=$rs['id']?>">
						<i class="glyphicon glyphicon-pencil"></i>
						</a>
						<a title="Delete" class="btn btn-default btn-sm toggle-modal" data-target="#myModal" href="?action=delete&id=<?=$rs['id']?>">
						<i class="glyphicon glyphicon-trash"></i>
						</a>
                  </td>
                  
                 </tr>
                <? endforeach; ?>
               </tbody>
             </table>
           </div>
 
 			</div>
 
 		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
 		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
 		<script src="https://cdnjs.cloudflare.com/ajax/libs/holder/2.4.0/holder.js"></script>
 		<script type="text/javascript">
 			$(function(){
 				var $mContent = $("#myModal .modal-content");
				var defaultContent = $mContent.html();				
				var tmpl = Handlebars.compile($("#tmpl").html());
 				
 				$(".toggle-modal").on('click', function(event){
					event.preventDefault();
				$("#myModal").modal("show");
				})

				$.get(this.href + "&format=plain", function(data){
						$mContent.html(data);
						$mContent.find('form')
 						.on('submit', function(e){
							e.preventDefault();
							$("#myModal").modal("hide");
						
							$.post(this.action + '&format=json', $(this).serialize(), function(data){
								$("#myAlert").show().find('div').html(JSON.stringify(data));
							
								
								$('tbody').append(tmpl(data));
								
							}, 'json');
							
							
						});
					});
 				
 				$('#myModal').on('hidden.bs.modal', function (e) {
 				  $mContent.html(defaultContent);
				    
 				})
 				
				$('.alert .close').on('click',function(e){
					$(this).closest('.alert').slideUp();
				});
 			});
 		</script>
 		
 		<script type="text/anything" id="tmpl">
                <tr>
                  <td>{{Arms}}</td>
                  <td>{{Legs}}</td>
                  <td>{{Cardio}}</td>
                  <td>{{Stretching}}</td>
                  <td>{{Weight}}</td>
                  <td>{{Date}}</td>
                  <td>
					<a title="Edit" class="btn btn-default btn-sm toggle-modal" data-target="#myModal" href="?action=edit&id={{id}}">
						<i class="glyphicon glyphicon-pencil"></i>
					</a>
					<a title="Delete" class="btn btn-default btn-sm toggle-modal" data-target="#myModal" href="?action=delete&id={{id}}">
						<i class="glyphicon glyphicon-trash"></i>
					</a>
                 	
                  </td>
                </tr>			
		</script>