<div class="modal-header">
    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
    <h4 class="modal-title" id="myModalLabel">Submit your progress</h4>
  </div>
  <div class="modal-body">

		<form class="form-horizontal" >
		  <div class="form-group">
		    <label for="txtWeight" class="col-sm-2 control-label">Weight</label>
		    <div class="col-sm-10">
		      <input type="text" class="form-control" id="txtWeight" placeholder="" value="<?=$model['Weight']?>">
		    </div>
		  </div>
		  <div class="form-group">
		    <label for="txtCalories" class="col-sm-2 control-label">Calories</label>
		    <div class="col-sm-10">
		      <input type="number" class="form-control" id="txtCalories" placeholder="Calories" value="<?=$model['Calories']?>">
		    </div>
		  </div>
		  <div class="form-group">
		    <label for="txtExcercise" class="col-sm-2 control-label">Excercise (mins)</label>
		    <div class="col-sm-10">
		      <input type="number" class="form-control" id="txtExcercise" placeholder="Excercise" value="<?=$model['Excercise']?>">
		    </div>
		  </div>
		  <div class="form-group">
		    <label for="txtDate" class="col-sm-2 control-label">date</label>
		    <div class="col-sm-10">
		      <input type="number" class="form-control" id="txtDate" placeholder="Date" value="<?=$model['Date']?>">
		    </div>
		  </div>
		  </form>
  </div>
  <div class="modal-footer">
    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
    <button type="button" class="btn btn-primary">Save changes</button>
  </div>