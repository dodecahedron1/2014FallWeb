<form class="form-horizontal" action="?action=save" method="post" >
	<input type="hidden" name="id" value="<?=$model2['id']?>" /><div class="modal-header">
    <a href="http://cs.newpaltz.edu/~n02511295/2014Fall/Controllers/progress.php"><button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button></a>
    <h4 class="modal-title" id="myModalLabel">Submit your progress</h4>
  </div>
  <div class="modal-body">
  	
  			<? if(!empty($errors)): ?>
			<div class="alert alert-danger">
  				<ul>
  				<? foreach ($errors as $key => $value): ?>
					  <li><?=$key?> <?= $value ?></li>
				<? endforeach; ?>
				</ul>
  			</div>
  			<? endif; ?>

		  <div class="form-group <?=!empty($errors['Name']) ? 'has-error has-feedback' : '' ?>">
		    <label for="txtArms" class="col-sm-2 control-label">Arms</label>
		    <div class="col-sm-10">
		      <input type="number" class="form-control" id="txtArms" name="Arms" placeholder="Arms (mins)" value="<?=$model2['Arms']?>">
		    </div>
		  </div>
		    <div class="form-group">
		    <label for="txtLegs" class="col-sm-2 control-label">Legs</label>
		    <div class="col-sm-10">
		      <input type="number" class="form-control" id="txtLegs" name="Legs" placeholder="Legs (mins)" value="<?=$model2['Legs']?>">
		    </div>
		  </div>
		    <div class="form-group">
		    <label for="txtCardio" class="col-sm-2 control-label">Cardio</label>
		    <div class="col-sm-10">
		      <input type="number" class="form-control" id="txtCardio" name="Cardio" placeholder="Cardio (mins)" value="<?=$model2['Cardio']?>">
		    </div>
		  </div>
		    <div class="form-group">
		    <label for="txtStretching" class="col-sm-2 control-label">Stretching</label>
		    <div class="col-sm-10">
		      <input type="number" class="form-control" id="txtStretching" name="Stretching" placeholder="Stretching (mins)" value="<?=$model2['Stretching']?>">
		    </div>
		  </div>
		    <div class="form-group">
		    <label for="txtWeight" class="col-sm-2 control-label">Weight</label>
		    <div class="col-sm-10">
		      <input type="number" class="form-control" id="txtWeight" name="Weight" placeholder="Weight (lbs)" value="<?=$model2['Weight']?>">
		    </div>
		  </div>
		    <div class="form-group">
		    <label for="txtDate" class="col-sm-2 control-label">Date</label>
		    <div class="col-sm-10">
	      <input type="datetime-local" class="form-control" id="txtTime" name="Time" placeholder="Time" value="<?=date('m/d/Y H:i:s', strtotime( $model2['Date'])) ?>">
		    </div>
		  </div>
		  <div class="form-group">
		    <label for='formFriends[]'>Select the friends that you were with:</label><br>
			<div class="col-sm-10">
			<select multiple="multiple" name="formFriends[]">
   						 <option value="Bill">Bill</option>
  						 <option value="Alice">Alice</option>
  						 <option value="Emily">Emily</option>
  						 <option value="Shyah">Shyah</option>
			</select>		    
			</div>
		  </div>
		  </div>
		  </form>
  </div>
  <div class="modal-footer">
  <a href="http://cs.newpaltz.edu/~n02511295/2014Fall/Controllers/progress.php"> <input type="button" class="btn btn-default" data-dismiss="modal"  value="Cancel" /></a>
   <a class="btn btn-primary" href="?action=save_POST"/>Save Changes</a>
   	</div>
  </form>