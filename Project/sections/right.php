<div class="col-sm-6">
    
      <!-- input field for Priority Level with id 'Priority_lvl' -->
  <div class="row">
    <div class="col-sm-3">
      <label>Priority Level: </label>
    </div>
    <div class="col-sm-8">
      <select name="Priority_lvl" id="Priority_lvl">
        <option value="n">Select Priority Level</option>
        <option value="General">General</option>
        <option value="Urgent">Urgent</option>
        <option value="Extreamly Urgent">Extreamly Urgent</option>
      </select>
    </div>
  </div>
    
 <!-- input field for Building with id 'Proj_Building' -->
  <div class="row">
    <div class="col-sm-3">
      <label>Building: </label>
    </div>
    <div class="col-sm-8">
      <select name="Proj_Building" id="Proj_Building">
        <option value="n">Select Building</option>
        <option value="E">E</option>
        <option value="B">B</option>
        <option value="C">C</option>
      </select>
    </div>
  </div>

  <!-- input field for Location with id 'location' -->
  <div class="row">
    <div class="col-sm-3">
      <label>Location: </label>
    </div>
    <div class="col-sm-8">
      <input type="text" name="location" id="location">
    </div>
  </div>

      <!-- input field for Services Provided with id 'services' -->
  <div class="row">
    <div class="col-sm-3">
      <label>Service Provided: </label>
    </div>
    <div class="col-sm-8">
      <select name="services" id="services">
        <option value="n">Select Services Provided</option>
        <option value="Window">Window</option>
        <option value="Roof">Roof</option>
        <option value="Paint">Paint</option>
        <option value="Maintainance">Maintainance</option>
      </select>
    </div>
  </div>
    
  <!-- input field for Status with id 'status' -->
  <div class="row">
    <div class="col-sm-3">
      <label>Status: </label>
    </div>
    <div class="col-sm-8">
      <select name="status" id="status">
        <option value="n">Select Status</option>
        <option value="Under Process">Under Process</option>
        <option value="Completed">Completed</option>
      </select>
    </div>
  </div>

  <!-- Funding Section Started. Checkboxes used for activating the input fields -->
  <div class="card">
    <div class="card-body">

      <!-- Row for Headings -->
      <div class="row">
        <div class="col-sm-3"></div>
        <div class="col-sm-3">
          <label><center>Amount</center></label>
        </div>
        <div class="col-sm-3">
          <label><center>FY Received</center></label>
        </div>
        <div class="col-sm-3">
          <label><center>Contact Info</center></label>
        </div>
      </div>

      <!-- Row for Boro President with input fields 'boro_Amount', 'boro_Fy', 'boro_Contact' -->
      <div class="row">
        <div class="col-sm-3 reset-right">
          <label>Boro President: </label>
          <input type="checkbox" name="boro" id="boro" onclick="activateBoro()">
        </div>
        <div class="col-sm-3">
          <input type="text" name="boro_Amount" id="boro_Amount" readonly>
        </div>
        <div class="col-sm-3">
          <input type="text" name="boro_Fy" id="boro_Fy" readonly>
        </div>
        <div class="col-sm-3">
          <input type="text" name="boro_Contact" id="boro_Contact" readonly>
        </div>
      </div>

      <!-- Row for City Council with input fields 'city_Amount', 'city_Fy', 'city_Contact' -->
      <div class="row">
        <div class="col-sm-3 reset-right">
          <label>City Council: </label>
          <input type="checkbox" name="city" id="city" onclick="activateCity()">
        </div>
        <div class="col-sm-3">
          <input type="text" name="city_Amount" id="city_Amount" readonly>
        </div>
        <div class="col-sm-3">
          <input type="text" name="city_Fy" id="city_Fy" readonly>
        </div>
        <div class="col-sm-3">
          <input type="text" name="city_Contact" id="city_Contact" readonly>
        </div>
      </div>

      <!-- Row for Mayor with input fields 'mayor_Amount', 'mayor_Fy', 'mayor_Contact' -->
      <div class="row">
        <div class="col-sm-3 reset-right">
          <label>Mayor: </label>
          <input type="checkbox" name="mayor" id="mayor" onclick="activateMayor()">
        </div>
        <div class="col-sm-3">
          <input type="text" name="mayor_Amount" id="mayor_Amount" readonly>
        </div>
        <div class="col-sm-3">
          <input type="text" name="mayor_Fy" id="mayor_Fy" readonly>
        </div>
        <div class="col-sm-3">
          <input type="text" name="mayor_Contact" id="mayor_Contact" readonly>
        </div>
      </div>

      <!-- Row for In House with input fields 'house_Amount', 'house_Fy', 'house_Contact' -->
      <div class="row">
        <div class="col-sm-3 reset-right">
          <label>In House: </label>
          <input type="checkbox" name="house" id="house" onclick="activateHouse()">
        </div>
        <div class="col-sm-3">
          <input type="text" name="house_Amount" id="house_Amount" readonly>
        </div>
        <div class="col-sm-3">
          <input type="text" name="house_Fy" id="house_Fy" readonly>
        </div>
        <div class="col-sm-3">
          <input type="text" name="house_Contact" id="house_Contact" readonly>
        </div>
      </div>

      <!-- Row for Capital Project with input fields 'capital_Amount', 'capital_Fy', 'capital_Contact' -->
      <div class="row">
        <div class="col-sm-3 reset-right">
          <label>Capital Project: </label>
          <input type="checkbox" name="capital" id="capital" onclick="activateCapital()">
        </div>
        <div class="col-sm-3">
          <input type="text" name="capital_Amount" id="capital_Amount" readonly>
        </div>
        <div class="col-sm-3">
          <input type="text" name="capital_Fy" id="capital_Fy" readonly>
        </div>
        <div class="col-sm-3">
          <input type="text" name="capital_Contact" id="capital_Contact" readonly>
        </div>
      </div>

      <!-- Row for CUNY 2020 with input fields 'cuny_Amount', 'cuny_Fy', 'cuny_Contact' -->
      <div class="row">
        <div class="col-sm-3 reset-right">
          <label>CUNY 2020: </label>
          <input type="checkbox" name="cuny" id="cuny" onclick="activateCuny()">
        </div>
        <div class="col-sm-3">
          <input type="text" name="cuny_Amount" id="cuny_Amount" readonly>
        </div>
        <div class="col-sm-3">
          <input type="text" name="cuny_Fy" id="cuny_Fy" readonly>
        </div>
        <div class="col-sm-3">
          <input type="text" name="cuny_Contact" id="cuny_Contact" readonly>
        </div>
      </div>

      <!-- Row for SAM CCAP with input fields 'sam_Amount', 'sam_Fy', 'sam_Contact' -->
      <div class="row">
        <div class="col-sm-3 reset-right">
          <label>SAM CCAP: </label>
          <input type="checkbox" name="sam" id="sam" onclick="activateSam()">
        </div>
        <div class="col-sm-3">
          <input type="text" name="sam_Amount" id="sam_Amount" readonly>
        </div>
        <div class="col-sm-3">
          <input type="text" name="sam_Fy" id="sam_Fy" readonly>
        </div>
        <div class="col-sm-3">
          <input type="text" name="sam_Contact" id="sam_Contact" readonly>
        </div>
      </div>

      <!-- Row for Private Grant with input fields 'grant_Amount', 'grant_Fy', 'grant_Contact' -->
      <div class="row">
        <div class="col-sm-3 reset-right">
          <label>Private Grant: </label>
          <input type="checkbox" name="grant" id="grant" onclick="activateGrant()">
        </div>
        <div class="col-sm-3">
          <input type="text" name="grant_Amount" id="grant_Amount" readonly>
        </div>
        <div class="col-sm-3">
          <input type="text" name="grant_Fy" id="grant_Fy" readonly>
        </div>
        <div class="col-sm-3">
          <input type="text" name="grant_Contact" id="grant_Contact" readonly>
        </div>
      </div>

      <!-- Row for Federal State with input fields 'federal_Amount', 'federal_Fy', 'federal_Contact' -->
      <div class="row">
        <div class="col-sm-3 reset-right">
          <label>Federal State: </label>
          <input type="checkbox" name="federal" id="federal" onclick="activateFederal()">
        </div>
        <div class="col-sm-3">
          <input type="text" name="federal_Amount" id="federal_Amount" readonly>
        </div>
        <div class="col-sm-3">
          <input type="text" name="federal_Fy" id="federal_Fy" readonly>
        </div>
        <div class="col-sm-3">
          <input type="text" name="federal_Contact" id="federal_Contact" readonly>
        </div>
      </div>

      <!-- Row for DCAS/Operating with input fields 'operating_Amount', 'operating_Fy', 'operating_Contact' -->
      <div class="row">
        <div class="col-sm-3 reset-right">
          <label>DCAS/Operating: </label>
          <input type="checkbox" name="operating" id="operating" onclick="activateOperating()">
        </div>
        <div class="col-sm-3">
          <input type="text" name="operating_Amount" id="operating_Amount" readonly>
        </div>
        <div class="col-sm-3">
          <input type="text" name="operating_Fy" id="operating_Fy" readonly>
        </div>
        <div class="col-sm-3">
          <input type="text" name="operating_Contact" id="operating_Contact" readonly>
        </div>
      </div>

      <!-- Row for DCAS/CAP with input fields 'cap_Amount', 'cap_Fy', 'cap_Contact' -->
      <div class="row">
        <div class="col-sm-3 reset-right">
          <label>DCAS/CAP: </label>
          <input type="checkbox" name="cap" id="cap" onclick="activateCap()">
        </div>
        <div class="col-sm-3">
          <input type="text" name="cap_Amount" id="cap_Amount" readonly>
        </div>
        <div class="col-sm-3">
          <input type="text" name="cap_Fy" id="cap_Fy" readonly>
        </div>
        <div class="col-sm-3">
          <input type="text" name="cap_Contact" id="cap_Contact" readonly>
        </div>
      </div>

      <!-- Row for Energy Conservation with input fields 'energy_Amount', 'energy_Fy', 'energy_Contact' -->
      <div class="row">
        <div class="col-sm-3 reset-right">
          <label>Energy Conservation: </label>
          <input type="checkbox" name="energy" id="energy" onclick="activateEnergy()">
        </div>
        <div class="col-sm-3">
          <input type="text" name="energy_Amount" id="energy_Amount" readonly>
        </div>
        <div class="col-sm-3">
          <input type="text" name="energy_Fy" id="energy_Fy" readonly>
        </div>
        <div class="col-sm-3">
          <input type="text" name="energy_Contact" id="energy_Contact" readonly>
        </div>
      </div>

    </div>
  </div>
  <!-- Funding Section Ended -->

</div>