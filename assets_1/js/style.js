var $total_all=0;
function candlesPrice()
{
    var candlePrice=0;
    //Get a reference to the form id="cakeform"
    var theForm = document.forms["cakeform"];
    //Get a reference to the checkbox id="includecandles"
    var includeCandles = theForm.elements["includecandles"];

    //If they checked the box set candlePrice to 5
    if(includeCandles.checked==true)
    {
        candlePrice=5;
    }
    //finally we return the candlePrice
    return candlePrice;
}


function firewallsPrice()
{
    var firewallPrice=0;
    //Get a reference to the form id="cakeform"
    var theForm = document.forms["firewallform"];
    //Get a reference to the checkbox id="includecandles"
    var includeFirewalls = theForm.elements["includeFirewalls"];

    //If they checked the box set firewallPrice to 5
    if(includeFirewalls.checked==true)
    {
        firewallPrice=550000;
        $('#firewall').val('1');
    }else{
        $('#firewall').val('0');
    }
    //finally we return the firewallPrice
    return firewallPrice;
}


function vpnsPrice()
{
    var vpnPrice=0;
    //Get a reference to the form id="cakeform"
    var theForm = document.forms["vpnform"];
    //Get a reference to the checkbox id="includecandles"
    var includeVpns = theForm.elements["includeVpns"];

    //If they checked the box set VpnPrice to 5
    if(includeVpns.checked==true)
    {
        vpnPrice=550000;
        $('#vpn').val('1');
    }else{
        $('#vpn').val('0');
    }
    //finally we return the firewallPrice
    return vpnPrice;
}


function loadsPrice()
{
    var loadPrice=0;
    //Get a reference to the form id="cakeform"
    var theForm = document.forms["loadform"];
    //Get a reference to the checkbox id="includecandles"
    var includeLoads = theForm.elements["includeLoads"];

    //If they checked the box set VpnPrice to 5
    if(includeLoads.checked==true)
    {
        loadPrice=550000;
        $('#load_balancer').val('1');
    }else{
        $('#load_balancer').val('0');
    }
    //finally we return the firewallPrice
    return loadPrice;
}

function vlansPrice()
{
    var vlanPrice=0;
    //Get a reference to the form id="cakeform"
    var theForm = document.forms["vlanform"];
    //Get a reference to the checkbox id="includecandles"
    var includeVlans = theForm.elements["includeVlans"];

    //If they checked the box set VpnPrice to 5
    if(includeVlans.checked==true)
    {
        vlanPrice=140000;
        $('#vlan').val('1');
    }else{
        $('#vlan').val('0');
    }
    //finally we return the firewallPrice
    return vlanPrice;
}
        
// function calculateTotal()
// {
//     //Here we get the total price by calling our function
//     //Each function returns a number so by calling them we add the values they return together
//     var cakePrice = candlesPrice();
    
//     //display the result
//     var divobj = document.getElementById('totalPrice');
//     divobj.style.display='block';
//     divobj.innerHTML = "Rp. "+cakePrice;

// }

function firewallTotal()
{
    //Here we get the total price by calling our function
    //Each function returns a number so by calling them we add the values they return together
    var cakePrice = firewallsPrice();
    
    //display the result
    var divobj = document.getElementById('totalPriceFirewall');
    divobj.style.display='block';
    divobj.innerHTML = "Rp. "+cakePrice;

}

function vpnTotal()
{
    //Here we get the total price by calling our function
    //Each function returns a number so by calling them we add the values they return together
    var cakePrice = vpnsPrice();
    
    //display the result
    var divobj = document.getElementById('totalPriceVpn');
    divobj.style.display='block';
    divobj.innerHTML = "Rp. "+cakePrice;

}

function loadTotal()
{
    //Here we get the total price by calling our function
    //Each function returns a number so by calling them we add the values they return together
    var cakePrice = loadsPrice();
    
    //display the result
    var divobj = document.getElementById('totalPriceLoad');
    divobj.style.display='block';
    divobj.innerHTML = "Rp. "+cakePrice;

}

function vlanTotal()
{
    //Here we get the total price by calling our function
    //Each function returns a number so by calling them we add the values they return together
    var cakePrice = vlansPrice();
    
    //display the result
    var divobj = document.getElementById('totalPriceVlan');
    divobj.style.display='block';
    divobj.innerHTML = "Rp. "+cakePrice;

}

var filling_prices= new Array();
filling_prices["None"]=0;
filling_prices["windows2008"]=450000;
filling_prices["windows2012"]=450000;
filling_prices["windows2012r2"]=450000;
filling_prices["remote"]=100000;
filling_prices["linux"]=14550000;

var database_prices= new Array();
database_prices["None"]=0;
database_prices["web"]=200000;
database_prices["standart"]=2850000;
database_prices["enterprice"]=10900000;

function getFillingPrice()
{
    var cakeFillingPrice=0;
    //Get a reference to the form id="cakeform"
    var theForm = document.forms["cakeform"];
    //Get a reference to the select id="filling"
    var selectedFilling = theForm.elements["filling"];
     
    //set cakeFilling Price equal to value user chose
    //For example filling_prices["Lemon".value] would be equal to 5
    cakeFillingPrice = filling_prices[selectedFilling.value];

    //finally we return cakeFillingPrice
    return cakeFillingPrice;
}

function getDatabasePrice()
{
    var cakeDatabasePrice=0;
    //Get a reference to the form id="cakeform"
    var theForm = document.forms["cakeform2"];
    //Get a reference to the select id="filling"
    var selectedDatabase = theForm.elements["databaseselect"];
     
    //set cakeFilling Price equal to value user chose
    //For example filling_prices["Lemon".value] would be equal to 5
    cakeDatabasePrice = database_prices[selectedDatabase.value];

    //finally we return cakeFillingPrice
    return parseInt(cakeDatabasePrice);
}



function calculateTotal()
{
    //Here we get the total price by calling our function
    //Each function returns a number so by calling them we add the values they return together
    var cakePrice = getFillingPrice();
    
    //display the result
    var divobj = document.getElementById('totalPriceos');
    divobj.style.display='block';
    divobj.innerHTML = "Rp. "+cakePrice;

}

function databaseTotal()
{
    //Here we get the total price by calling our function
    //Each function returns a number so by calling them we add the values they return together
    var cakePrice = getDatabasePrice();
    
    //display the result
    var divobj = document.getElementById('totalPricedb');
    divobj.style.display='block';
    divobj.innerHTML = "Rp. "+cakePrice;

}

function formatNumber (num) {
    return num.toString().replace(/(\d)(?=(\d{3})+(?!\d))/g, "$1,")
}

function TotalSemua()
{
    //Here we get the total price by calling our function
    //Each function returns a number so by calling them we add the values they return together
    
    var cakePrice = getDatabasePrice() + getFillingPrice() + vlansPrice() + vpnsPrice() + loadsPrice() + firewallsPrice() +$total_all;
    console.log(cakePrice);
    //display the result
    var divobj = document.getElementById('totalPricesemua');
    divobj.style.display='block';
    divobj.innerHTML = "Rp "+ formatNumber(cakePrice);
    $('#totalall').val(cakePrice);
    $('#os').val($('#filling').val());
    $('#db').val($('#databaseselect').val());
}
$(document).ready(function() {
  
  $("#slider").slider({
      range: "min",
      animate: true,
      value:1,
      min: 0,
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
      min: 0,
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
      min: 0,
      max: 5000,
      step: 1,
      slide: function(event, ui) {
        update(3,ui.value); //changed
      }
  });

  $("#slider4").slider({
    range: "min",
    animate: true,
    value:1,
    min: 0,
    max: 5000,
    step: 1,
    slide: function(event, ui) {
      update(4,ui.value); //changed
    }
});

$("#slider5").slider({
  range: "min",
  animate: true,
  value:1,
  min: 0,
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
  $totalvcputext = formatNumber.new($totalvcpu,"Rp. ");
  $( "#amount" ).val($amount);
  $( "#amount-label" ).text($amount);
  $( "#total" ).val($totalvcpu);
  $( "#total-label1" ).text($totalvcputext);


  $totalram = ($duration * 260000);
  $totalramtext = formatNumber.new($totalram,"Rp. ");
  $( "#duration" ).val($duration);
  $( "#duration-label" ).text($duration);
  $( "#total" ).val($totalram);
  $( "#total-label2" ).text($totalramtext);

  $totalsata = ($sata * 2000);
  $totalsatatext = formatNumber.new($totalsata,"Rp. ");
  $( "#sata" ).val($sata);
  $( "#sata-label" ).text($sata);
  $( "#total" ).val($totalsata);
  $( "#total-label3" ).text($totalsatatext);

  $totalsas = ($sas * 4000);
  $totalsastext = formatNumber.new($totalsas,"Rp. ");
  $( "#sas" ).val($sas);
  $( "#sas-label" ).text($sas);
  $( "#total" ).val($totalsas);
  $( "#total-label4" ).text($totalsastext);


  $totalip = ($ip * 58000);
  $totaliptext = formatNumber.new($totalip,"Rp. ");
  $( "#ip" ).val($ip);
  $( "#ip-label" ).text($ip);
  $( "#total" ).val($totalip);
  $( "#total-label5" ).text($totaliptext);


  //console.log($totalvcpu+"|"+$totalram+"|"+$totalsata+"|"+$totalsas+"|"+$totalip);
  $total = parseInt($totalvcpu)+parseInt($totalram)+parseInt($totalsata)+parseInt($totalsas)+parseInt($totalip);
  $("#total-slider").val($total);
  $total_all=$total;
  TotalSemua();

 

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
  console.log('total'+$total);
}