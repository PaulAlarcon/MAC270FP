/* 
***
--> Funding Section Checkbox Event 
***
*/

/* Boro President */
function activateBoro() {
	$('#boro_Amount').prop('readonly', function(i, v) { return !v; });
	$('#boro_Fy').prop('readonly', function(i, v) { return !v; });
	$('#boro_Contact').prop('readonly', function(i, v) { return !v; });
}

/* City Council */
function activateCity() {
	$('#city_Amount').prop('readonly', function(i, v) { return !v; });
	$('#city_Fy').prop('readonly', function(i, v) { return !v; });
	$('#city_Contact').prop('readonly', function(i, v) { return !v; });
}

/* Mayor */
function activateMayor() {
	$('#mayor_Amount').prop('readonly', function(i, v) { return !v; });
	$('#mayor_Fy').prop('readonly', function(i, v) { return !v; });
	$('#mayor_Contact').prop('readonly', function(i, v) { return !v; });
}

/* In House	*/
function activateHouse() {
	$('#house_Amount').prop('readonly', function(i, v) { return !v; });
	$('#house_Fy').prop('readonly', function(i, v) { return !v; });
	$('#house_Contact').prop('readonly', function(i, v) { return !v; });
}

/* Capital Project */
function activateCapital() {
	$('#capital_Amount').prop('readonly', function(i, v) { return !v; });
	$('#capital_Fy').prop('readonly', function(i, v) { return !v; });
	$('#capital_Contact').prop('readonly', function(i, v) { return !v; });
}

/* CUNY 2020 */
function activateCuny() {
	$('#cuny_Amount').prop('readonly', function(i, v) { return !v; });
	$('#cuny_Fy').prop('readonly', function(i, v) { return !v; });
	$('#cuny_Contact').prop('readonly', function(i, v) { return !v; });
}

/* SAM CCAP */
function activateSam() {
	$('#sam_Amount').prop('readonly', function(i, v) { return !v; });
	$('#sam_Fy').prop('readonly', function(i, v) { return !v; });
	$('#sam_Contact').prop('readonly', function(i, v) { return !v; });
}

/* Private Grant */
function activateGrant() {
	$('#grant_Amount').prop('readonly', function(i, v) { return !v; });
	$('#grant_Fy').prop('readonly', function(i, v) { return !v; });
	$('#grant_Contact').prop('readonly', function(i, v) { return !v; });
}

/* Federal State */
function activateFederal() {
	$('#federal_Amount').prop('readonly', function(i, v) { return !v; });
	$('#federal_Fy').prop('readonly', function(i, v) { return !v; });
	$('#federal_Contact').prop('readonly', function(i, v) { return !v; });
}

/* DCAS/Operating */
function activateOperating() {
	$('#operating_Amount').prop('readonly', function(i, v) { return !v; });
	$('#operating_Fy').prop('readonly', function(i, v) { return !v; });
	$('#operating_Contact').prop('readonly', function(i, v) { return !v; });
}

/* DCAS?CAP */
function activateCap() {
	$('#cap_Amount').prop('readonly', function(i, v) { return !v; });
	$('#cap_Fy').prop('readonly', function(i, v) { return !v; });
	$('#cap_Contact').prop('readonly', function(i, v) { return !v; });
}

/* Energy Conservation */
function activateEnergy() {
	$('#energy_Amount').prop('readonly', function(i, v) { return !v; });
	$('#energy_Fy').prop('readonly', function(i, v) { return !v; });
	$('#energy_Contact').prop('readonly', function(i, v) { return !v; });
}

/* 
***
--> Upload Section Tab Event 
***
*/
function openCity(evt, cityName) {
	var i, tabcontent, tablinks;
	tabcontent = document.getElementsByClassName("tabcontent");
	for (i = 0; i < tabcontent.length; i++) {
		tabcontent[i].style.display = "none";
	}
	tablinks = document.getElementsByClassName("tablinks");
	for (i = 0; i < tablinks.length; i++) {
		tablinks[i].className = tablinks[i].className.replace(" active", "");
	}
	document.getElementById(cityName).style.display = "block";
	evt.currentTarget.className += " active";
}

//Retriving Data of respective Proj_ID when changed
function showData(str) {
	var Proj_ID = str;
	getLeftFormData(Proj_ID);
	getFundingData(Proj_ID);
	$('#viewMinutes').attr("href",'sections/viewFiles.php?tab=Minutes&id='+Proj_ID);
	$('#viewDesign').attr("href",'sections/viewFiles.php?tab=Design&id='+Proj_ID);
	$('#viewScope').attr("href",'sections/viewFiles.php?tab=Scope&id='+Proj_ID);
	$('#viewCost').attr("href",'sections/viewFiles.php?tab=Cost&id='+Proj_ID);
	$('#viewBuilding').attr("href",'sections/viewFiles.php?tab=Building&id='+Proj_ID);
	$('#viewBid').attr("href",'sections/viewFiles.php?tab=Bid&id='+Proj_ID);
	$('#viewReport').attr("href",'sections/viewFiles.php?tab=Report&id='+Proj_ID);
	$('#viewFE').attr("href",'sections/viewFiles.php?tab=FE&id='+Proj_ID);
	$('#viewCloseOut').attr("href",'sections/viewFiles.php?tab=CloseOut&id='+Proj_ID);
}

function getLeftFormData(str) {
	if(str == 'n') {
		//reload if the selected reference is empty
		location.reload();
	} else {

		$.ajax({
			url  :"./sections/retrive.php", //php page URL where we post this data to view from database
			type :'POST',
			data: ({key: str, tablename: 'tbl_project'}),// key = search term || tablename 
			success: function(data){
				var obj = JSON.parse(data);//converting data from database into JSON data to fetch into HTML

				//assigning data from database to respective elements id
				$('#Proj_ID').val(obj.Proj_ID); 
				$('#Proj_Number').val(obj.Proj_Number);
				$('#Proj_Name').val(obj.Proj_Name); 
				$('#Proj_Type').val(obj.Proj_Type);
				$('#Proj_St_Date').val(obj.Proj_St_Date);
				$('#Proj_Comp_Date').val(obj.Proj_Comp_Date);
				$('#Proj_Building').val(obj.Proj_Building);      
				$('#Priority_lvl').val(obj.Priority_lvl); 
				$('#services').val(obj.services);
				$('#Proj_Design_Team').val(obj.Proj_Design_Team);
				$('#Proj_Design_Cost').val(obj.Proj_Design_Cost);
				$('#Proj_Const_Cost').val(obj.Proj_Const_Cost);
				$('#Proj_FE_Cost').val(obj.Proj_FE_Cost);
				$('#Proj_Mgmt_Cost').val(obj.Proj_Mgmt_Cost);
				$('#Proj_Total_Cost').val(obj.Proj_Total_Cost);
				$('#Proj_Overview').val(obj.Proj_Overview); 
				$('#location').val(obj.location); 
				$('#status').val(obj.status); 
			}
		});
	}
}

function getFundingData(str) {
	$.ajax({
		url  :"./sections/retrive.php", //php page URL where we post this data to view from database
		type :'POST',
		data: ({key: str, tablename: 'tbl_funding'}),// key = search term || tablename
		success: function(data){
			var obj = JSON.parse(data);//converting data from database into JSON data to fetch into HTML

			//assigning data from database to respective elements id
			$('#boro_Amount').val(obj.boro_Amount); 
			$('#boro_Fy').val(obj.boro_Fy);
			$('#boro_Contact').val(obj.boro_Contact); 
			$('#city_Amount').val(obj.city_Amount);
			$('#city_Fy').val(obj.city_Fy);
			$('#city_Contact').val(obj.city_Contact);
			$('#mayor_Amount').val(obj.mayor_Amount);      
			$('#mayor_Fy').val(obj.mayor_Fy); 
			$('#mayor_Contact').val(obj.mayor_Contact);
			$('#house_Amount').val(obj.house_Amount);
			$('#house_Fy').val(obj.house_Fy);
			$('#house_Contact').val(obj.house_Contact);
			$('#capital_Amount').val(obj.capital_Amount);
			$('#capital_Fy').val(obj.capital_Fy);
			$('#capital_Contact').val(obj.capital_Contact);
			$('#cuny_Amount').val(obj.cuny_Amount); 
			$('#cuny_Fy').val(obj.cuny_Fy); 
			$('#cuny_Contact').val(obj.cuny_Contact); 
			$('#sam_Amount').val(obj.sam_Amount); 
			$('#sam_Fy').val(obj.sam_Fy); 
			$('#sam_Contact').val(obj.sam_Contact); 
			$('#grant_Amount').val(obj.grant_Amount); 
			$('#grant_Fy').val(obj.grant_Fy); 
			$('#grant_Contact').val(obj.grant_Contact); 
			$('#federal_Amount').val(obj.federal_Amount); 
			$('#federal_Fy').val(obj.federal_Fy); 
			$('#federal_Contact').val(obj.federal_Contact); 
			$('#operating_Amount').val(obj.operating_Amount); 
			$('#operating_Fy').val(obj.operating_Fy); 
			$('#operating_Contact').val(obj.operating_Contact); 
			$('#cap_Amount').val(obj.cap_Amount); 
			$('#cap_Fy').val(obj.cap_Fy); 
			$('#cap_Contact').val(obj.cap_Contact); 
			$('#energy_Amount').val(obj.energy_Amount); 
			$('#energy_Fy').val(obj.energy_Fy); 
			$('#energy_Contact').val(obj.energy_Contact); 
		}
	});
}