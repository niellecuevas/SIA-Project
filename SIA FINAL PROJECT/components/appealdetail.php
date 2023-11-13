
      <!--appeal request-->
      <section class="containerAppealRequest">
        <div class="review-appeal">
            <h1>Appeal Request</h1>
        </div>
        <button class="close-button" onclick="closeAppealRequest()">&times;</button>
        <form action="#" class="form">
        <div class="input-box">
            <label>SR Code</label>
            <input type="text" placeholder="Enter SR Code" required />
          </div>
          <div class="input-box">
            <label>Name</label>
            <div class="auto-input">
              <p name="studentName">Student Name</p>
            </div>
          </div>
          <div class="input-box">
            <label>Date</label>
            <input type="date" id="generateId" placeholder="Enter date" required />
          </div>
          <div class="column">
          <div class="input-box">
            <label>Department</label>
            <div class="auto-input">
              <p name="studentDept">Student Department</p>
            </div>
          </div>
          <div class="input-box">
            <label>Program</label>
            <div class="auto-input">
              <p name="studentProgram">Student Program</p>
            </div>
          </div>
          </div>
          <div class="input-box">
              <label>Request</label>
              <textarea style="width:100%; height:100px; resize:none;" placeholder="Message here" required ></textarea>
            </div>
          <div class="column">
            <button>Accept</button>
            <button>Deny</button>
          </div>
        </form>
      </section>