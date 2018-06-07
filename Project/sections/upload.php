<div class="row">
  <div class="col-sm-12">
    <div class="tab">
      <a class="tablinks" onclick="openCity(event, 'tabMinutes')">Meeting Minutes</a>
      <a class="tablinks" onclick="openCity(event, 'tabDesign')">Request and Design Basis</a>
      <a class="tablinks" onclick="openCity(event, 'tabScope')">Request for Scope Change</a>
      <a class="tablinks" onclick="openCity(event, 'tabCost')">Cost Estimastes</a>
      <a class="tablinks" onclick="openCity(event, 'tabBuilding')">Building Deparment</a>
      <a class="tablinks" onclick="openCity(event, 'tabBid')">Bid Documents</a>
      <a class="tablinks" onclick="openCity(event, 'tabReport')">Inspection Report</a>
      <a class="tablinks" onclick="openCity(event, 'tabFE')">F and E</a>
      <a class="tablinks" onclick="openCity(event, 'tabCloseout')">Closeout</a>
    </div>

    <div id="tabMinutes" class="tabcontent">
      <h5>Meeting Minutes <a href="" target="_blank" id="viewMinutes">View Files</a></h5>
      
      <label><b>Desription:</b></label>
      <textarea rows="3" name="minutes" id="minutes"></textarea>
      <input type="file" name="mfile[]" multiple>
    </div>
    
    <div id="tabDesign" class="tabcontent">
      <h5>Request and Design Basis <a href="" target="_blank" id="viewDesign">View Files</a></h5>
      <div id="design-table"></div>
      <label><b>Desription:</b></label>
      <textarea rows="3" name="design" id="design"></textarea>
      <input type="file" name="dfile[]" multiple>
    </div>

    <div id="tabScope" class="tabcontent">
      <h5>Request for Scope Change <a href="" target="_blank" id="viewScope">View Files</a></h5>
      <div id="scope-table"></div>
      <label><b>Desription:</b></label>
      <textarea rows="3" name="scope" id="scope"></textarea>
      <input type="file" name="sfile[]" multiple>
    </div>

    <div id="tabCost" class="tabcontent">
      <h5>Cost Estimates <a href="" target="_blank" id="viewCost">View Files</a></h5>
      <div id="cost-table"></div>
      <label><b>Desription:</b></label>
      <textarea rows="3" name="cost" id="cost"></textarea>
      <input type="file" name="cfile[]" multiple>
    </div>

    <div id="tabBuilding" class="tabcontent">
      <h5>Building Deparment <a href="" target="_blank" id="viewBuilding">View Files</a></h5>
      <div id="building-table"></div>
      <label><b>Desription:</b></label>
      <textarea rows="3" name="building" id="building"></textarea>
      <input type="file" name="bdfile[]" multiple>
    </div>

    <div id="tabBid" class="tabcontent">
      <h5>Bid Documents <a href="" target="_blank" id="viewBid">View Files</a></h5>
      <div id="bid-table"></div>
      <label><b>Desription:</b></label>
      <textarea rows="3" name="bid" id="bid"></textarea>
      <input type="file" name="bfile[]" multiple>
    </div>

    <div id="tabReport" class="tabcontent">
      <h5>Inspection Report <a href="" target="_blank" id="viewReport">View Files</a></h5>
      <div id="report-table"></div>
      <label><b>Desription:</b></label>
      <textarea rows="3" name="report" id="report"></textarea>
      <input type="file" name="rfile[]" multiple>
    </div>

    <div id="tabFE" class="tabcontent">
      <h5>F and E <a href="" target="_blank" id="viewFE">View Files</a></h5>
      <div id="fe-table"></div>
      <label><b>Desription:</b></label>
      <textarea rows="3" name="fe" id="fe"></textarea>
      <input type="file" name="ffile[]" multiple>
    </div>

    <div id="tabCloseout" class="tabcontent">
      <h5>Closeout <a href="" target="_blank" id="viewCloseOut">View Files</a></h5>
      <div id="closeout-table"></div>
      <label><b>Desription:</b></label>
      <textarea rows="3" name="closeout" id="closeout"></textarea>
      <input type="file" name="cofile[]" multiple>
    </div>
  </div>

</div>