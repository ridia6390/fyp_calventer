<div class="modal" id="exampleModal"  tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Register New Event</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
  <form name="formEvent" id="formEvent" action="newEvent.php" class="form-horizontal" method="POST">
		<div class="form-group">
			<label for="event" class="col-sm-12 control-label">Name of the Event</label>
			<div class="col-sm-10">
				<input type="text" class="form-control" name="event" id="event" placeholder="Name of the Event" required/>
			</div>
		</div>
    <div class="form-group">
      <label for="start_date" class="col-sm-12 control-label">Start Date</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" name="start_date" id="start_date" placeholder="Start Date">
      </div>
    </div>
    <div class="form-group">
      <label for="end_date" class="col-sm-12 control-label">End Date</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" name="end_date" id="end_date" placeholder="End Date">
      </div>
    </div>

  <div class="col-md-12" id="radioGroup">
  
  <!-- <input type="radio" name="color_event" id="orange" value="#FF5722" >
  <label for="orange" class="circu" style="background-color: #FF5722;"> </label> -->

  <input type="radio" name="color_event" id="amber" value="#FFC107"checked>  
  <label for="amber" class="circu" style="background-color: #FFC107;"> </label>

  <!-- <input type="radio" name="color_event" id="lime" value="#8BC34A">  
  <label for="lime" class="circu" style="background-color: #8BC34A;"> </label> -->

  <input type="radio" name="color_event" id="teal" value="#009688">  
  <label for="teal" class="circu" style="background-color: #009688;"> </label>

  <input type="radio" name="color_event" id="blue" value="#2196F3">  
  <label for="blue" class="circu" style="background-color: #2196F3;"> </label>

  <!-- <input type="radio" name="color_event" id="indigo" value="#9c27b0">  
  <label for="indigo" class="circu" style="background-color: #9c27b0;"> </label> -->

</div>
		
	   <div class="modal-footer">
      	<button type="submit" class="btn btn-success">Save Event</button>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
    	</div>
	</form>
      
    </div>
  </div>
</div>