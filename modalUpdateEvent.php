<div class="modal" id="modalUpdateEvent" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Update Event and View Details</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form name="formEventUpdate" id="formEventUpdate" action="updateEvent.php" class="form-horizontal" method="POST">
        <input type="hidden" class="form-control" name="idEvent" id="idEvent">
        <div class="form-group">
          <label for="club" class="col-sm-12 control-label">Club Name</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" name="club_name" id="club_name" required />
          </div>
        </div>
        <div class="form-group">
          <label for="event" class="col-sm-12 control-label"> Event Title</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" name="event_title" id="event_title" required />
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

        <div class="col-md-12 activated">

          <input type="radio" name="color_event" id="dark-blueUpd" value="#0A2472" checked>
          <label for="dark-blueUpd" class="circu" style="background-color: #0A2472;"> </label>

          <input type="radio" name="color_event" id="blueUpd" value="#2196F3">
          <label for="blueUpd" class="circu" style="background-color: #2196F3;"> </label>

          <input type="radio" name="color_event" id="orange" value="#FFAC1C">
          <label for="orangeUpd" class="circu" style="background-color: #FFAC1C;"> </label>


        </div>


        <div class="modal-footer">
          <button type="submit" class="btn btn-success" style="background-color:#56ab91; border: 2px solid #56ab91;">Save Changes</button>
          <button type="submit" class="btn btn-success" style="background-color:#ffc869; border: 2px solid #ffc869;" >Add Details</button>
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
        </div>
      </form>

    </div>
  </div>
</div>

<!-- Add this script at the end of your HTML file or in the head section -->
<script>
  document.addEventListener("DOMContentLoaded", function () {
    // Assuming your events page URL is adminEvents.php
    const eventsPageUrl = "adminEvents.php";

    // Get the "Add Details" button
    const addDetailsButton = document.querySelector("#formEventUpdate .btn-success:last-of-type");

    // Add a click event listener to the button
    addDetailsButton.addEventListener("click", function () {
      // Get the value of the event ID from the modal
      const eventId = document.querySelector("#idEvent").value;

      // Construct the URL for the events page with the event ID as a parameter
      const redirectUrl = `${eventsPageUrl}?eventId=${eventId}`;

      // Redirect to the events page with the specific event ID
      window.location.href = redirectUrl;
    });
  });
  <!-- Add this script at the end of your HTML file or in the head section of adminEvents.php -->
<script>
  document.addEventListener("DOMContentLoaded", function () {
    // Get the event ID from the URL parameter
    const urlParams = new URLSearchParams(window.location.search);
    const eventId = urlParams.get("eventId");

    // Check if eventId is not null and highlight the corresponding event row
    if (eventId) {
      const eventRow = document.getElementById(eventId);
      if (eventRow) {
        // Add a class or apply a style to highlight the event row
        eventRow.classList.add("highlighted-row");
      }
    }
  });
</script>

</script>
