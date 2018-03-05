// $("input").val(5);

$.each($("input"), function(index, value){
  console.log(value);
});

$("input").each(function(index){
  console.log($(this).val());
})

$(".box").text("<b>Linkėjimai iš JS</b>");

//$(".box").html("<b>Linkėjimai iš JS</b>");

$(".box").append("Dar vienas linkėjimas");

$(".box").prepend("Aš pirmas");

$("#trec").after("<li>Ketvirtadienis</li>");
