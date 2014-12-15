<header> 			
		<div class="container">
 					<h1>Food Tracker</h1>
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
                   <th>Name</th>
                   <th>Calories</th>
                   <th>Fat (g)</th>
                   <th>Carbs (g)</th>
                   <th>Fiber (g)</th>
                   <th>Protein (g)</th>
                   <th>Time</th>
                 </tr>
               </thead>
               <tbody>
    			<? foreach ($model1 as $rs): ?>
                <tr>
                  <td><?=$rs['Name']?></td>
                  <td><?=$rs['Calories']?></td>
                  <td><?=$rs['Fat']?></td>
                  <td><?=$rs['Carbs']?></td>
                  <td><?=$rs['Fiber']?></td>
                  <td><?=$rs['Protein']?></td>
                  <td><?=$rs['Time']?></td>
                  <td>
                  	
					<a title="Edit" class="btn btn-default btn-sm toggle-modal" data-target="#myModal" href="?action=edit&id=<?=$rs['id']?>">
						<i class="glyphicon glyphicon-pencil"></i>
						
					<a title="Delete" class="btn btn-default btn-sm toggle-modal" data-target="#myModal" href="?action=delete&id=<?=$rs['id']?>">
						<i class="glyphicon glyphicon-trash"></i>
					</a>
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
 				
 				$(function(){
				
				$(".toggle-modal").on('click', function(event){
					event.preventDefault();
					$("#myModal .modal-content").load(this.href + "&format=plain");
					$("#myModal").modal("show");
				})
								
				$('#myModal').on('hidden.bs.modal', function (e) {
				  $("#myAlert").show();
				})
				
			});
 		</script>
 		
 			});
 		</script>