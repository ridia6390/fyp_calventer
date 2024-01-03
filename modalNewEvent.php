<div class="modal" id="exampleModal" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Register Event</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form name="formEvent" id="formEvent" action="newEvent.php" class="form-horizontal" method="POST">
        <div class="form-group">
          <label for="club" class="col-sm-12 control-label">Club Name</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" name="club_name" id="club_name" placeholder="e.g.- Wamy/Alsalam/Nibras" required />
          </div>
        </div>
        <div class="form-group">
          <label for="event" class="col-sm-12 control-label"> Event Title</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" name="event_title" id="event_title" placeholder="Enter event title" required />
          </div>
        </div>
        <div class="form-group">
          <label for="event_date" class="col-sm-12 control-label">Event Date</label>
          <div class="col-sm-10">
            <input type="date" class="form-control" name="event_date" id="event_date" required />
          </div>
        </div>
        <div class="form-group">
          <label for="start_time" class="col-sm-12 control-label">Start Time</label>
          <div class="col-sm-10">
            <input type="time" class="form-control" name="start_time" id="start_time" required />
          </div>
        </div>
        <div class="form-group">
          <label for="end_time" class="col-sm-12 control-label">End Time</label>
          <div class="col-sm-10">
            <input type="time" class="form-control" name="end_time" id="end_time" required />
          </div>
        </div>

        <div class="col-md-12" id="radioGroup">

          <input type="radio" name="color_event" id="dark-blue" value="#0A2472" checked>
          <label for="dark-blue" class="circu" style="background-color: #0A2472;"> </label>

          <input type="radio" name="color_event" id="blue" value="#2196F3">
          <label for="blue" class="circu" style="background-color: #2196F3;"> </label>

          <input type="radio" name="color_event" id="orange" value="#FFAC1C" >
          <label for="orange" class="circu" style="background-color: #FFAC1C;"> </label>

        </div>

        <div class="modal-footer">
          <button type="submit" class="btn btn-success">Save Event</button>
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
        </div>
      </form>

    </div>
  </div>
</div>