$(document).ready(function() {
  $("#slider").slider({
      range: "min",
      animate: true,
      value:1,
      min: 1,
      max: 32,
      step: 1,
      slide: function(event, ui) {
        update(1,ui.value); //changed
      }
  });

  $("#slider2").slider({
      range: "min",
      animate: true,
      value:1,
      min: 1,
      max: 128,
      step: 1,
      slide: function(event, ui) {
        update(2,ui.value); //changed
      }
  });

  $("#slider3").slider({
      range: "min",
      animate: true,
      value:1,
      min: 500,
      max: 20000,
      step: 500,
      slide: function(event, ui) {
        update(3,ui.value); //changed
      }
  });

  $("#slider4").slider({
    range: "min",
    animate: true,
    value:1,
    min: 500,
    max: 20000,
    step: 500,
    slide: function(event, ui) {
      update(4,ui.value); //changed
    }
});

$("#slider5").slider({
  range: "min",
  animate: true,
  value:1,
  min: 1,
  max: 10,
  step: 1,
  slide: function(event, ui) {
    update(5,ui.value); //changed
  }
});

  //Added, set initial value.
  $("#amount").val(0);
  $("#duration").val(0);
  $("#sata").val(0);
  $("#sas").val(0);
  $("#ip").val(0);
  $("#amount-label").text(0);
  $("#duration-label").text(0);
  $("#sata-label").text(0);
  $("#sas-label").text(0);
  $("#ip-label").text(0);
  
  update();
});


function update(slider,val) {
  var formatNumber = {
    separador: ",",
    sepDecimal: '.',
    formatear:function (num){
    num +='';
    var splitStr = num.split('.');
    var splitLeft = splitStr[0];
    var splitRight = splitStr.length > 1 ? this.sepDecimal + splitStr[1] : '';
    var regx = /(\d+)(\d{3})/;
    while (regx.test(splitLeft)) {
    splitLeft = splitLeft.replace(regx, '$1' + this.separador + '$2');
    }
    return this.simbol + splitLeft  +splitRight;
    },
    new:function(num, simbol){
    this.simbol = simbol ||'';
    return this.formatear(num);
    }
  }
  //changed. Now, directly take value from ui.value. if not set (initial, will use current value.)
  var $amount = slider == 1?val:$("#amount").val();
  var $duration = slider == 2?val:$("#duration").val();
  var $sata = slider == 3?val:$("#sata").val();
  var $sas = slider == 4?val:$("#sas").val();
  var $ip = slider == 5?val:$("#ip").val();
  
  $totalvcpu = ($amount * 55000);
  $totalvcpu = formatNumber.new($totalvcpu,"Rp. ");
  $( "#amount" ).val($amount);
  $( "#amount-label" ).text($amount);
  $( "#total" ).val($totalvcpu);
  $( "#total-label1" ).text($totalvcpu);


  $totalram = ($duration * 260000);
  $totalram = formatNumber.new($totalram,"Rp. ");
  $( "#duration" ).val($duration);
  $( "#duration-label" ).text($duration);
  $( "#total" ).val($totalram);
  $( "#total-label2" ).text($totalram);

  $totalsata = ($sata * 2000);
  $totalsata = formatNumber.new($totalsata,"Rp. ");
  $( "#sata" ).val($sata);
  $( "#sata-label" ).text($sata);
  $( "#total" ).val($totalsata);
  $( "#total-label3" ).text($totalsata);

  $totalsas = ($sas * 4000);
  $totalsas = formatNumber.new($totalsas,"Rp. ");
  $( "#sas" ).val($sas);
  $( "#sas-label" ).text($sas);
  $( "#total" ).val($totalsas);
  $( "#total-label4" ).text($totalsas);


  $totalip = ($ip * 58000);
  $totalip = formatNumber.new($totalip,"Rp. ");
  $( "#ip" ).val($ip);
  $( "#ip-label" ).text($ip);
  $( "#total" ).val($totalip);
  $( "#total-label5" ).text($totalip);




 

  $('#slider span').html('<label><span class="glyphicon glyphicon-chevron-left"></span> '+$amount+' <span class="glyphicon glyphicon-chevron-right"></span></label>');
  $('#slider2 span').html('<label><span class="glyphicon glyphicon-chevron-left"></span> '+$duration+' <span class="glyphicon glyphicon-chevron-right"></span></label>');
  $('#slider3 span').html('<label><span class="glyphicon glyphicon-chevron-left"></span> '+$sata+' <span class="glyphicon glyphicon-chevron-right"></span></label>');
  $('#slider4 span').html('<label><span class="glyphicon glyphicon-chevron-left"></span> '+$sas+' <span class="glyphicon glyphicon-chevron-right"></span></label>');
  $('#slider5 span').html('<label><span class="glyphicon glyphicon-chevron-left"></span> '+$ip+' <span class="glyphicon glyphicon-chevron-right"></span></label>');

  console.log('amount: '+$amount);
  console.log('duration: '+$duration);
  console.log('duration: '+$sata);
  console.log('duration: '+$sas);
  console.log('duration: '+$ip);
  
}


