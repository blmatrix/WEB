var jsonArray = [
  {"name":"Jonas", "surname":"Jonaitis", "age":"25"},
  {"name":"Petras", "surname":"Petraitis", "age":"25"},
  {"name":"Antanas", "surname":"Antanaitis", "age":"25"},
  {"name":"Vardenis", "surname":"Pavardenis", "age":"25"},
];

// var table = $("<table></table>");
// var tr = $("<tr></tr>");
//
// var col1 = $("<th>");
// col1.text("VARDAS");
// tr.append(col1);
//
// var col2 = $("<th>");
// col2.text("PAVARDĖ");
// tr.append(col2);
//
// var col3 = $("<th>");
// col3.text("AMŽIUS");
// tr.append(col3);
//
// table.append(tr);
var table = $("table");
table.hide();
$.each(jsonArray, function(index, item){
  console.log(index, item.name);
  var tr = $("<tr>");
  var col1 = $("<td>");
  col1.text(item.name);
  tr.append(col1);

  var col2 = $("<td>");
  col2.text(item.surname);
  tr.append(col2);

  var col3 = $("<td>");
  col3.prop("class", "age");
  col3.addClass("age1");
  col3.text(item.age);
  tr.append(col3);

  table.append(tr);

})

$("body").append(table);
$(".lenta").fadeIn();
