
      <!--appeal request-->
      <section class="containerAppealRequest">
        <div class="review-appeal">
            <h1>Appeal Request</h1>
        </div>
        <button class="close-button" onclick="closeAppealRequest()">&times;</button>
        <form action="#" class="form">

        <div class="input-box">
          <label hidden>ViolationID</label>
          <p id="apviolationid" hidden>ViolationID</p>
        </div>

        <div class="input-box">
          <label hidden>AppealID</label>
          <p id="apappealid" hidden>AppealID</p>
        </div>

        <div class="input-box">
          <label>SR Code</label>
          <input type="text" placeholder="Enter SR Code" id="apsrcode" required />
        </div>

        <div class="input-box">
          <label>Name</label>
          <div class="auto-input">
            <p name="studentName" id="apstudentname">Student Name</p>
          </div>
        </div>

        <div class="column">
        <div class="input-box">
          <label>Department</label>
          <div class="auto-input">
            <p name="studentDept" id="apstudentdepartment">Student Department</p>
          </div>
        </div>
        <div class="input-box">
          <label>Program</label>
          <div class="auto-input">
            <p name="studentProgram" id="apstudentprogram">Student Program</p>
          </div>
        </div>
        </div>

        <div class="input-box">
          <label>Date</label>
          <input type="date" id="apappealdate" class="appealdate" placeholder="Enter date" required />
        </div>

        <div class="review-appeal">
          <h1><br>Violation Details</h1>
        </div>

        <div class="column">
          <div class="input-box">
            <label>Violation</label>
            <div class="auto-input">
              <p name="violationDetail" id="apviolationname">Violation</p>
            </div>
          </div>
          <div class="input-box">
            <label>Date</label>
            <div class="auto-input">
              <p name="violationDate" id="apviolationdate">MM/DD/YYYY</p>
            </div>
          </div>
          <div class="input-box">
            <label>Time</label>
            <div class="auto-input">
              <p name="violationTime" id="apviolationtime">0:00</p>
            </div>
          </div>
        </div>

        <div class="input-box">
          <label>Handler</label>
          <div class="auto-input">
            <p name="violationHandlerName" id="apstaffname">Handler Name</p>
          </div>
        </div>

        <div class="input-box">
          <label>Remarks</label>
          <div class="auto-input">
            <p name="violation" id="apremarks">Remarks</p>
          </div>
        </div>

        <div class="input-box">
          <label>Request</label>
          <textarea style="width:100%; height:100px; resize:none;" placeholder="Message here" id="apappeal" required ></textarea>
        </div>

        <div class="column">
          <button id="acceptbutton">Accept</button>
          <button id="denybutton">Deny</button>
        </div>
        </form>

      </section>

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

<script>
  $(document).ready(function () {
    // Get the Accept button
    var acceptButton = $("#acceptbutton");
    var denyButton = $("#denybutton")

    // Add click event listener
    acceptButton.on("click", function () {
      // Get the values from the hidden p elements
      var appealID = $("#apappealid").text();
      var violationID = $("#apviolationid").text();
      closeAppealRequest();
      // Run the SQL deletion
      acceptDeleteAppeal(appealID, violationID);
    });

    // Add click event listener
    denyButton.on("click", function () {
      // Get the values from the hidden p elements
      var appealID = $("#apappealid").text();
      var violationID = $("#apviolationid").text();
      closeAppealRequest();
      // Run the SQL deletion
      denyDeleteAppeal(appealID);
    });

    function denyDeleteAppeal(appealID) {
      $.ajax({
        type: "POST",
        url: "./php/deleteappeal.php",
        data: { appealID: appealID },
        success: function (response) {
          // Show SweetAlert2 notification based on the response
          if (response.success) {

            id = `ap${appealID}`;
            document.getElementById(id).style.display = "none";

            Swal.fire({
              icon: 'success',
              title: 'Appeal Denied',
              text: `Appeal ${appealID} has been denied`,
            });
          } else {
            Swal.fire({
              icon: 'error',
              title: 'Error',
              text: 'Encountered an error while denying appeal. Please try again later!',
            });
          }
        },
        error: function () {
          Swal.fire({
            icon: 'error',
            title: 'Error',
            text: 'Failed to communicate with the server',
          });
        },
      });
    }

    function acceptDeleteAppeal(appealID, violationID) {
      $.ajax({
        type: "POST",
        url: "./php/deleteappealandviolation.php",
        data: { appealID: appealID, violationID: violationID },
        success: function (response) {
          // Show SweetAlert2 notification based on the response
          if (response.success) {

            id = `ap${appealID}`;
            document.getElementById(id).style.display = "none";

            Swal.fire({
              icon: 'success',
              title: 'Appeal Accepted',
              text: `Violation ${violationID} has now been deleted`,
            });
          } else {
            Swal.fire({
              icon: 'error',
              title: 'Error Encountered',
              text: 'Encountered an error while accepting appeal. Please try again later!',
            });
          }
        },
        error: function () {
          Swal.fire({
            icon: 'error',
            title: 'Error',
            text: 'Failed to communicate with the server',
          });
        },
      });
    }

  // Function to close the container
  function closeAppealRequest() {
    document.querySelector('.containerAppealRequest').style.display = 'none';
  }
});
</script>


