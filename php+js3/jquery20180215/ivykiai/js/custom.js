$("input[type='button']").on("click", function(){
  if($(this).val() == "="){
    var reiskinys = $("#result").val();
    var rezultatas = eval(reiskinys);
    $("#result").val(rezultatas)
  }
  else{
    var mygtukoReiksme = $(this).val();
    var galutinis = $("#result").val() + mygtukoReiksme
    $("#result").val(galutinis);
  }
})
