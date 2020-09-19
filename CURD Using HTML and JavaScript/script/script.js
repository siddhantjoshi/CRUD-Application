// JavaScript Document
var selectTd = null;

function onSumitForm(){
	var formData = readData();
	if(selectTd == null){
		insertData(formData);
	}else{
		updateData(formData);
	}
	clearForm();
}
function readData(){
	var formData = {};
	formData["name"] = document.getElementById("name").value;
	formData["email"] = document.getElementById("email").value;
	return formData;
}
function insertData(data){
	var table = document.getElementById("table").getElementsByTagName('tbody')[0];
	var newrow = table.insertRow(table.length);
	cell1 = newrow.insertCell(0);
	cell1.innerHTML = data.name ;
	cell2 = newrow.insertCell(1);
	cell2.innerHTML = data.email ;
	cell3 =newrow.insertCell(2);
	cell3.innerHTML = "<a onClick='editData(this)'>Edit</a>";
	cell4 =newrow.insertCell(3);
	cell4.innerHTML = "<a onClick='deleteData(this)'>Delete</a>";
}
function clearForm(){
	document.getElementById("name").value="";
	document.getElementById("email").value="";
	var selectTd = null;
}
function editData(td){
	selectTd = td.parentElement.parentElement;
	document.getElementById("name").value = selectTd.cells[0].innerHTML;
	document.getElementById("email").value = selectTd.cells[1].innerHTML;
	
}
function updateData(formData){
	selectTd.cells[0].innerHTML = formData.name;
	selectTd.cells[1].innerHTML = formData.email;
	
}
function deleteData(td){
	if(confirm('Do you want to delte User ?')){
		row = td.parentElement.parentElement;
		document.getElementById("table").deleteRow(row.rowIndex);
		clearForm();
	}
}
//function validate(){
//	isValid = true;
//	if(document.getElementById("email").value == ""){
//		isValid = false ;
//		document.getElementById("error").classList.remove("hide");
//	}else{
//		isValid = true ;
//		if(!document.getElementById("email").classList.contains("hide")){
//			document.getElementById("error").classList.add("hide");
//		}
//	}
//}