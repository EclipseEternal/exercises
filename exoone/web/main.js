
var getFormData = function(){
  var rows = $('#coords').val().split("\n");
  $.each(rows, function(ind, val){
    if(val !== ""){
      rows[ind] = val.split(" ");
    }
  });
  return rows;
}

var displayHTML = function(){
  var fdata = getFormData();
  $.post(
    "ws.php",
    {
      'coords':fdata,
      'a':'html'
    },
    function(data){
      $('#dHTML').html(data);
    }
  );
};

var displayCSV = function(){
  var fdata = getFormData();
  $.post(
    "ws.php",
    {
      'coords':fdata,
      'a':'csv'
    },
    function(data){
      console.log(data);
      $('#dCSV').html(data);
    }
  );
};

var ddlCSV = function(){
  var fdata = getFormData();
  $.post(
    "ws.php",
    {
      'coords':fdata,
      'a':'file'
    },
    function(data){
         var blob=new Blob([data]);
          var link=document.createElement('a');
          link.href=window.URL.createObjectURL(blob);
          link.download="coords.csv";
          link.click();
    }
  );
};

var generateCoords = function(){
  var rows = Math.random()*100/10+1;
  var chain = "";
  
  for(var i=0;i<rows;i++){
    for(var j=0;j<3;j++){
      chain += Math.floor(Math.random()*100)+" ";
    }
    chain = chain.substr(0, chain.length - 1);
    chain += "\n";
  }
  chain = chain.substr(0, chain.length - 1);
  $('#coords').val(chain);
};