<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" >
<div class="modal-dialog">
<div class="modal-content">
</div>
</div>
</div>

      <div class="col-md-6 col-sm-offset-3 col-md-10 col-md-offset-2 main">
          <h1 class="page-header">Your Progress</h1>
          
        <a href="http://cs.newpaltz.edu/~n02511295/2014Fall/Views/Progress/edit.php"> <button class="btn btn-primary">Click here to submit your progress! </button></a>

          <div class="row placeholders">
            <div class="col-xs-6 col-sm-3 placeholder">
              <img data-src="holder.js/200x200/auto/sky" class="img-responsive" alt="Generic placeholder thumbnail">
              <h4>Weight Loss</h4>
              <span class="text-muted">How much you've lost per entry.</span>
            </div>
            <div class="col-xs-6 col-sm-3 placeholder">
              <img data-src="holder.js/200x200/auto/vine" class="img-responsive" alt="Generic placeholder thumbnail">
              <h4>Caloric Intake</h4>
              <span class="text-muted">Something else</span>
            </div>
            <div class="col-xs-6 col-sm-3 placeholder">
              <img data-src="holder.js/200x200/auto/sky" class="img-responsive" alt="Generic placeholder thumbnail">
              <h4>Excercise</h4>
              <span class="text-muted">Hours worked out per week.</span>
            </div>
            <div class="col-xs-6 col-sm-3 placeholder">
              <img data-src="holder.js/200x200/auto/vine" class="img-responsive" alt="Generic placeholder thumbnail">
              <h4>Towards your goal</h4>
              <span class="text-muted">Where you should be towards your goal.</span>
            </div>
          </div>

				
				<!-- Alert -->
				<div class="alert alert-success initialy-hidden" id="myAlert">
					<button type="button" class="close" data-dismiss="alert">
						<span aria-hidden="true">&times;</span><span class="sr-only">Close</span>
					</button>
					Excelent Job. Your progress has been recorded. 
				</div>
				
          <div class="table-responsive">
            <table class="table table-striped">
              <thead>
                <tr>
                  <th>Weight</th>
                  <th>Caloric Intake</th>
                  <th>Excercise (min)</th>
                  <th>Date</th>
                </tr>
              </thead>
              <tbody>
              	<? foreach ($model as $rs): ?>
                <tr>
                  <td><?=$rs['Weight']?></td>
                  <td><?=$rs['Calories']?></td>
                  <td><?=$rs['Excercise']?></td>
                  <td><?=$rs['Date']?></td>
                </tr>
                <? endforeach; ?>
              </tbody>
            </table>
          </div>

			</div>

		<script type="text/javascript">
			$(function(){
								
				$('#myModal').on('hidden.bs.modal', function (e) {
				  $("#myAlert").show();
				})
			});
		</script>