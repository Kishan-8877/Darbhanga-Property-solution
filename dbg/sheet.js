function doPost(e) {
  var ss = SpreadsheetApp.getActiveSpreadsheet();
  // Yahan "Sheet1" likha hai, agar aapka tab name kuch aur hai toh woh yahan likhein
  var sheet = ss.getSheetByName("Sheet1"); 
  var data = e.parameter;
  
  sheet.appendRow([
    data.FirstName, 
    data.LastName, 
    data.Mobile, 
    data.Email, 
    data.Message
  ]);
  
  return ContentService.createTextOutput(JSON.stringify({"result": "success"}))
    .setMimeType(ContentService.MimeType.JSON);
}