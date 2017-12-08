'use strict';
$(window).load(function(){
  var defHolder = '#nameDef';
  function getNameDef(id, fetchId) {
    document.getElementById(id).onclick = function loadNameDef() {
      if (document.getElementById('nameDef').childNodes.length === 0) {
        $(defHolder).load('http://localhost/my_ministry/app/includes/page_elements/names_of_god.html #' + fetchId);
      } else {
        document.getElementById('nameDef').innerHTML = '';
        $(defHolder).load('http://localhost/my_ministry/app/includes/page_elements/names_of_god.html #' + fetchId);
      }
    };
  }
  getNameDef('father','abba');
  getNameDef('ourFather','abbaFather');
  getNameDef('sufficient','sufficientGod');
  getNameDef('fire','fire');
  getNameDef('creator','creator');
  getNameDef('elohim','elohim');
  getNameDef('everlasting','everlastingFather');
  getNameDef('ofAll','fatherAll');
  getNameDef('fatherGlory','fatherGlory');
  getNameDef('fatherLights','fatherLights');
  getNameDef('fatherMercies','fatherMercies');
  getNameDef('fatherJesus','fatherJesus');
  getNameDef('fatherSpirits','fatherSpirits');
  getNameDef('godAbraham','godAbraham');
  getNameDef('godComfort','godComfort');
  getNameDef('godFathers','godFathers');
  getNameDef('godGlory','godGlory');
  getNameDef('godIsrael','godIsrael');
  getNameDef('godIsaac','godIssac');
  getNameDef('godJacob','godJacob');
  getNameDef('godPeace','godPeace');
  getNameDef('godTheFather','godFather');
  getNameDef('heavenFather','heavenFather');
  getNameDef('kingKings','kingKings');
  getNameDef('kingNations','kingNations');
  getNameDef('living','livingGod');
  getNameDef('lordGod','lordGod');
  getNameDef('lordHosts','lordHosts');
  getNameDef('lordLords','');
  getNameDef('highGod','mostHigh');
  getNameDef('exellentOne','excellentOne');
  getNameDef('judge','judge');
  getNameDef('majesty','majestyHigh');
  getNameDef('onlyWise','onlyWise');
  getNameDef('power','power');
  getNameDef('sovereign','sovereignOne');
  getNameDef('angelLord','angel');
  getNameDef('branch','branchLord');
  getNameDef('creatorIsrael','creatorIsrael');
  getNameDef('fortress','fortress');
  getNameDef('just','justOne');
  getNameDef('lightIsrael','lightIsrael');
  getNameDef('lightNations','lightNations');
  getNameDef('mightOne','mightOneJacob');
  getNameDef('princePeace','princePeace');
  getNameDef('redeem','redeemAngel');
  getNameDef('refuge','refuge');
  getNameDef('rock','rock');
  getNameDef('rockIsrael','rockIsrael');
  getNameDef('rockSalvation','rockSalvation');
  getNameDef('sheperd','shepherd');
  getNameDef('shiloh','shiloh');
  getNameDef('starJacob','starJacob');
  getNameDef('stoneIsrael','stone');
  getNameDef('counsellor','counsellor');
});