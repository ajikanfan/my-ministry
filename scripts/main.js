"use strict";

// Organize names
var god = document.getElementById("god");
var jesus = document.getElementById("jesus");
var spirit = document.getElementById("spirit");
var reset = document.getElementById("reset");
var godNames = document.getElementsByClassName("god");
var jesusNames = document.getElementsByClassName("jesus");
var spiritNames = document.getElementsByClassName("spirit");
var resetNames = document.getElementsByClassName("reset_names");

god.onclick = function() {
  for (var i=0; i<jesusNames.length; i++) {
    jesusNames[i].style.display = "none";
    console.log('hid class with' + jesusNames[i]);
  }
  for (var j=0; j<spiritNames.length; j++) {
    spiritNames[j].style.display = "none";
    console.log('hid class with' + spiritNames[j]);
  }
};

jesus.onclick = function() {
  for (var i=0; i<godNames.length; i++) {
    godNames[i].style.display = "none";
    console.log('hid class with' + godNames[i]);
  }
  for (var j=0; j<spiritNames.length; j++) {
    spiritNames[j].style.display = "none";
    console.log('hid class with' + spiritNames[j]);
  }
};

spirit.onclick = function() {
  for (var i=0; i<godNames.length; i++) {
    godNames[i].style.display = "none";
    console.log('hid class with' + godNames[i]);
  }
  for (var j=0; j<jesusNames.length; j++) {
    jesusNames[j].style.display = "none";
    console.log('hid class with' + jesusNames[j]);
  }
};

reset.onclick = function() {
  for (var a=0; a<jesusNames.length; a++) {
    jesusNames[a].style.display = "inline-block";
    console.log('reset class with' + jesusNames[a]);
  }
  for (var b=0; b<godNames.length; b++) {
    godNames[b].style.display = "inline-block";
    console.log('reset class with' + godNames[b]);
  }
  for (var c=0; c<spiritNames.length; c++) {
    spiritNames[c].style.display = "inline-block";
    console.log('reset class with' + spiritNames[c]);
  }
};

// Open Pop Up
var popBehind = document.getElementById("popUpBehind");
var closePupUp = document.getElementById("closePupUp");

var cursesPrayer = document.getElementsByClassName("curses_prayer");
var familiarSpiritsPrayer = document.getElementsByClassName("familiar_spirits_prayer");
var jezebelPrayer = document.getElementsByClassName("jezebel_prayer");
var occultPrayer = document.getElementsByClassName("occult_prayer");
var popUpBtns = document.getElementsByClassName("self_deliverance_open");
var popUpHolder = document.getElementsByClassName("my_popup");
var salvationPrayer = document.getElementsByClassName("salvation_prayer");
var satanismPrayer = document.getElementsByClassName("satanism_prayer");
var sexualBondagePrayer = document.getElementsByClassName("sexual_bondage_prayer");
var soulTiesPrayer = document.getElementsByClassName("soul_ties_prayer");

closePupUp.onclick = function() {
  console.log("this function is running");
  popUpHolder[0].style.display = "none";
  popBehind.style.display = "none";
};

for (var i = 0; i<popUpBtns.length; i++) {
  popUpBtns[i].onclick = function(event) {
    popUpHolder[0].style.display = "block";
    popBehind.style.display = "block";
    var elementId = event.target.id;
    console.log(elementId);
    if (elementId == "curses") {
      cursesPrayer[0].style.display = "block";
      console.log("Displaying curses prayer");
    } else if (elementId == "familiarSpirits") {
      familiarSpiritsPrayer[0].style.display = "block";
      console.log("Displaying familiar spirits prayer");
    } else if (elementId == "jezebel") {
      jezebelPrayer[0].style.display = "block";
      console.log("Displaying jezebel prayer");
    } else if (elementId == "occult") {
      occultPrayer[0].style.display = "block";
      console.log("Displaying occult prayer");
    } else if (elementId == "salvation") {
      salvationPrayer[0].style.display = "block";
      console.log("Displaying salvation prayer");
    } else if (elementId == "satanism") {
      satanismPrayer[0].style.display = "block";
      console.log("Displaying satanism prayer");
    } else if (elementId == "sexualBondage") {
      sexualBondagePrayer[0].style.display = "block";
      console.log("Displaying sexual bondage prayer");
    } else if (elementId == "soulTie") {
      soulTiesPrayer[0].style.display = "block";
      console.log("Displaying soul ties prayer");
    } else {
      console.log("Couldn't find prayer");
    } 
  }
}

// Tickertape
var scrollChars = 1;
var namesOfGod = "Adonai | Breath of God | Despotes | Elohim | El Shaddai | El Elyon | El Olam | Father | Fire of God | Holy Ghost | Holy Spirit  | Jesus | Kurios | Living Water| Theos | Yahweh | Yahweh Jireh | Yahweh Shalom | Yeshua | ";
document.getElementById("inputMarquee").value = namesOfGod;
function scrollMarquee() {
  window.setTimeout("scrollMarquee()",100);
  var msg = document.marquee1.text.value;
  document.marquee1.text.value = msg.substring(scrollChars) + msg.substring(0,scrollChars);
}
scrollMarquee();

var soulTies = document.getElementById("soulTies");
var familiarSpirits = document.getElementById("familiarSpirits");
var jezebel = document.getElementById("jezebel");
var curses = document.getElementById("curses");
var salvation = document.getElementById("salvation");
var sexualBondage = document.getElementById("sexualBondage");
var occult = document.getElementById("occult");
var satanism = document.getElementById("satanism");

function printFromPhpFile() {
  $.get("includes/php_scripts/functions.php");
  return false;
}

// soulTies.onclick = function() {printFromPhpFile()};

// check for hidden buttons
function checkHiddenBtns() {
  for(var key in btnNames) {
    // get values of current key for object btnNames returns as array
    if(btnNames.hasOwnProperty(key)) {
      var value = btnNames[key];
      // parse array
      for (var h=0; h<value.length; h++) {
        // assign value to id to find button
        var assignId = value[h];
        var tempId = document.getElementById(assignId);
        if (tempId.style.display = "none") {
          console.log("found hidden elements:\n" + assignId);
          tempId.style.display = "initial";
        } else {
          console.log("found no hidden elements");
        }
      }
    }
  }
}

// hide other buttons
function hideBtns(value) {
  // reset all buttons first
  checkHiddenBtns();
  // get values of assigned key
  var btnIds = btnNames[value];
  console.log(value + ":" + "\nhide btns with Id of " +  btnIds);
  // hide those key value pairs
  for (var i=0; i<btnIds.length; i++) {
    document.getElementById(btnIds[i]).style.display = "none";
  }
}