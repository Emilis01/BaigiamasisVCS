function GetEmployeesList(searchword){
   $.ajax({
     url: "/api/employees/searchlist.php",
     type: "POST",
     dataType: "json",
     data: {searchword: searchword},
     success:function(result){
       $("#employees").html("");
       $.each(result, function(index,value){
          $("#employees").append("<tr id='"+value.eid+"'><td>"+value.first_name+"</td><td>"+value.last_name+"</td><td>"+value.position+"</td></tr>")
       });
     },
     error: function( req, status, err ) {
       console.log( 'Search error: ', status, err );
     }
   });
}

function GetEmployeeInfo(eid){
   $.ajax({
     url: "/api/employees/getinfo.php",
     type: "POST",
     dataType: "json",
     data: {eid: eid},
     success:function(result){
       $("#card").html("");
       $.each(result, function(index,value){
         $("#card").append('<div class="card-image" id="card-image"></div>')
         CheckImage(value.image)
         $("#card").append('<span class="card-title card-text"><p class="bold">'+value.first_name+' '+value.last_name+'</p></span></div>')
         $("#card").append('<div class="card-content"><p><i class="material-icons tiny">email</i> '+value.email+'</p><p><i class="material-icons tiny">work</i> '+value.position+'</p></div>')
         $("#card").append('<div class="card-action"><a href="map.php">Žemėlapis</a></div>')
         document.getElementById("card").focus();
       });
     },
     error: function( req, status, err ) {
       console.log( 'Employee info error: ', status, err );
     }
   });
}


function GetEmployeeInfoMap(eid){
   $.ajax({
     url: "/api/employees/getinfo.php",
     type: "POST",
     dataType: "json",
     data: {eid: eid},
     success:function(result){
       $("#card").html("");
       $.each(result, function(index,value){
         $("#card").append('<div class="card-image" id="card-image"></div>')
         CheckImage(value.image)
         $("#card").append('<div class="card-stacked"><div class="card-content"><p class="bold">'+value.first_name+' '+value.last_name+'</p><p><i class="material-icons tiny">email</i> '+value.email+'</p><p><i class="material-icons tiny">work</i> '+value.position+'</p></div></div>')
         document.getElementById("card").focus();
       });
     },
     error: function( req, status, err ) {
       console.log( 'Employee info error: ', status, err );
     }
   });
}


function CheckImage(image){
$.ajax({
   type: 'HEAD',
   url: "images/employees/"+image,

   success: function(){
     if(image.trim()!=""){
       $("#card-image").append('<img src="images/employees/'+image+'">')}
     else {
       $("#card-image").append('<img src="images/employees/empty.jpg">')}
   },
   error: function() {
     $("#card-image").append('<img src="images/employees/empty.jpg">')
   }
 });
}


function GetEmployeesListMap(room){
   $.ajax({
     url: "/api/employees/searchbyroom.php",
     type: "POST",
     dataType: "json",
     data: {room: room},
     success:function(result){
       $("#list-holder").html("");
       $("#list-holder").append("<table class='bordered highlight'><thead><tr><th>Vardas</th><th>Pavardė</th><th>Pareigos</th></tr></thead><tbody id='inhabitants'></tbody></table>")
       $.each(result, function(index,value){
          $("#inhabitants").append("<tr id='"+value.eid+"'><td>"+value.first_name+"</td><td>"+value.last_name+"</td><td>"+value.position+"</td></tr>")
       });
     },
     error: function( req, status, err ) {
       console.log( 'Search error: ', status, err );
     }
   });
}
