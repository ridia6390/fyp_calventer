<div class="modal" id="modalUpdateEvent"  tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Update my Event</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
  <form name="formEventUpdate" id="formEventUpdate" action="updateEvent.php" class="form-horizontal" method="POST">
    <input type="hidden" class="form-control" name="idEvent" id="idEvent">
    <div class="form-group">
      <label for="event" class="col-sm-12 control-label">Name of the Event </label>
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

    <div class="col-md-12 activated">
 
      <input type="radio" name="color_event" id="orangeUpd" value="#FF5722" checked>
      <label for="orangeUpd" class="circu" style="background-color: #FF5722;"> </label>

      <input type="radio" name="color_event" id="amberUpd" value="#FFC107">  
      <label for="amberUpd" class="circu" style="background-color: #FFC107;"> </label>

      <input type="radio" name="color_event" id="limeUpd" value="#8BC34A">  
      <label for="limeUpd" class="circu" style="background-color: #8BC34A;"> </label>

      <input type="radio" name="color_event" id="tealUpd" value="#009688">  
      <label for="tealUpd" class="circu" style="background-color: #009688;"> </label>

      <input type="radio" name="color_event" id="blueUpd" value="#2196F3">  
      <label for="blueUpd" class="circu" style="background-color: #2196F3;"> </label>

      <input type="radio" name="color_event" id="indigoUpd" value="#9c27b0">  
      <label for="indigoUpd" class="circu" style="background-color: #9c27b0;"> </label>

    </div>

    
     <div class="modal-footer">
        <button type="submit" class="btn btn-success">Save Changes</button>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
      </div>
  </form>
      
    </div>
  </div>
</div>