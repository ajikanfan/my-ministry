<!-- Designed & Developer by Aaron Matthews for Jesus Christ the King of kings -->
<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title></title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
    <link rel="stylesheet" href="styles/stylesheet.css">
    <!-- build:js scripts/vendor/modernizr.js -->
    <script src="bower_components/modernizr/modernizr.js"></script>
    <script src="includes/php_scripts/functions.php"></script>
    <!-- endbuild -->
  </head>
  <body>
    <div class="background_shade"></div>
    <header>
      <?php
        include("includes/page_elements/navigation.php");
        include('includes/php_scripts/simple_html_dom.php');
      ?>
    </header>
    <main>
      <section>
        <article class="names_of_god">
          <div class="container-fluid">
            <div class="row">
              <div class="col-md-12">
                <h1>The Names of God</h1>
                <p>Sort by the names of: </p>
                <button id="jesus" type="button" ng-click="showarray('jesus')" onclick="hideBtns('god','spirit');">Jesus</button>
                <!--  <button id="alphabetical" type="button">Alphabetical</button>
                <button id="chronological" type="button">Chronological</button> -->
                <button id="god" type="button" onclick="hideBtns('jesus','spirit')">God</button>
                <button id="spirit" type="button" onclick="hideBtns('jesus','god')">Holy Spirit</button>
                <button id="spirit" type="button" onclick="checkHiddenBtns()">Click here to reset</button>
                <div class="col-md-12 names_side_note">
                  <p><em>Hovering over a name will give it's translation in Hebrew</em></p>
                </div> <!-- /.names_side_note -->
                <hr>
                <ul class="names_pool">
                  <li id="father" class="call_tooltip" title="Abba">Father</li>
                  <li id="ourFather" class="call_tooltip" title="Abba Avinu">Abba our Father</li>
                  <li id="sufficient" class="call_tooltip" title="El Shaddai">All Sufficient God</li>
                  <li id="fire" class="call_tooltip" title="Esh Okhlah">Consuming Fire</li>
                  <li id="creator" class="call_tooltip" title="Hayotzer">Creator</li>
                  <li id="elohim" class="call_tooltip" title="Elohim">God</li>
                  <li id="everlasting" class="call_tooltip" title="Avi'ad">Everlasting Father</li>
                  <li id="ofAll" class="call_tooltip" title="Avi-khol">Father of All</li>
                  <li id="fatherGlory" class="call_tooltip" title="Avi HaKavod">Father of Glory.</li>
                  <li id="fatherLights" class="call_tooltip" title="Avi HaMe'orot">Father of Lights</li>
                  <li id="fatherMercies" class="call_tooltip" title="Avi HaRachamim">Father of Mercies</li>
                  <li id="fatherJesus" class="call_tooltip" title="Avi Yeshua Hamashiach Adoneinu">Father of our Lord Jesus the Messiah</li>
                  <li id="fatherSpirits" class="call_tooltip" title="Avi HaRuchot">Father of Spirits</li>
                  <li id="godAbraham" class="call_tooltip" title="Elohei Avraham">God of Abraham</li>
                  <li id="godComfort" class="call_tooltip" title="Elohei khol-Nechamah">God of all Comfort</li>
                  <li id="godFathers" class="call_tooltip" title="Elohei Avoteinu">God of our Fathers</li>
                  <li id="godGlory" class="call_tooltip" title="Elohei HaKavod">God of Glory</li>
                  <li id="godIsrael" class="call_tooltip" title="El Yisrael">God of Israel</li>
                  <li id="godIsaac" class="call_tooltip" title="Elohei Ya'akov">God of Issac</li>
                  <li id="godJacob" class="call_tooltip" title="Elohei Ya'akov">God of Jacob</li>
                  <li id="godPeace" class="call_tooltip" title="Elohei HaShalom">God of Peace</li>
                  <li id="godTheFather" class="call_tooltip" title="Elohim Avinu">God the Father</li>
                  <li id="heavenFather" class="call_tooltip" title="Avinu Shebashamayim">Heavenly Father</li>
                  <li id="kingKings" class="call_tooltip" title="Melekh HaMelakhim">King of Kings</li>
                  <li id="kingNations" class="call_tooltip" title="Melekh HaGoyim">King of the Nations</li>
                  <li id="living" class="call_tooltip" title="Elohim Chayim">Living God</li>
                  <li id="lordGod" class="call_tooltip" title="Adonai Elohim">Lord God</li>
                  <li id="lordHosts" class="call_tooltip" title="Adonai Tseva'ot">Lord of Hosts</li>
                  <li id="lordLords" class="call_tooltip" title="Adonei Ha-Adonim">Lord of Lords</li>
                  <li id="highGod" class="call_tooltip" title="El Elyon">Most High God</li>
                  <li id="exellentOne" class="call_tooltip" title="Hagaon">The Excellent One</li>
                  <li id="judge" class="call_tooltip" title="HaShofet">The Judge</li>
                  <li id="majesty" class="call_tooltip" title="HaGedullah Bamaron">The Majesty on High</li>
                  <li id="onlyWise" class="call_tooltip" title="Elohim Echad V'hechakham">The Only Wise God</li>
                  <li id="power" class="call_tooltip" title="Hagevurah">The Power</li>
                  <li id="sovereign" class="call_tooltip" title="Hamvorakh">The Sovereign One</li>
                  <li id="angelLord" class="call_tooltip" title="Malakh Adonai">Angel of the Lord</li>
                  <li id="branch" class="call_tooltip" title="Tsemach Adonai">Branch of the Lord</li>
                  <li id="creatorIsrael" class="call_tooltip" title="Borei Yisrael">Creator of Israel</li>
                  <li id="fortress" class="call_tooltip" title="Machseh">Fortress / Shelter</li>
                  <li id="just" class="call_tooltip" title="Yashar">Just One</li>
                  <li id="lightIsrael" class="call_tooltip" title="Or Yisrael">Light of Israel</li>
                  <li id="lightNations" class="call_tooltip" title="Or Goyim">Light of the Nations</li>
                  <li id="mightOne" class="call_tooltip" title="Avir Ya’akov">Mighty One of Jacob</li>
                  <li id="princePeace" class="call_tooltip" title="Sar Shalom">Prince of Peace</li>
                  <li id="redeem" class="call_tooltip" title="Hamelekh Hagoel">Redeeming Angel</li>
                  <li id="refuge" class="call_tooltip" title="Ma’on">Refuge / Dwelling Place</li>
                  <li id="rock" class="call_tooltip" title="Tsur">Rock</li>
                  <li id="rockIsrael" class="call_tooltip" title="Tsur Yisrael">Rock of Israel</li>
                  <li id="rockSalvation" class="call_tooltip" title="Tsur Yeshuato<">Rock of His Salvation</li>
                  <li id="sheperd" class="call_tooltip" title="Roeh">Shepherd</li>
                  <li id="shiloh" class="call_tooltip" title="Shiloh">Shiloh</li>
                  <li id="starJacob" class="call_tooltip" title="Kokhav Miya’akov">Star from Jacob</li>
                  <li id="stoneIsrael" class="call_tooltip" title="Even Yisrael">Stone (or Rock) of Israel</li>
                  <li id="counsellor" class="call_tooltip" title="Peleh Yo’etz">Wonderful Counsellor</li>
                </ul> <!-- /.names_pool -->
                <div class="cstm_divider">. . .</div>
              </div><!-- /.col-md-12 -->
              <div class="names_def col-xs-12 col-md-6 col-md-offset-3">
                <div id="nameDef"><p>Click one of the names to learn it's meaning and origin.</p></div>
                <hr>
                <p class="ref">For more go to <a href="http://www.hebrew4christians.com/" target=_blank>hebrew4christians.com</a> | © John J. Parsons</p>
              </div> <!-- /#nameDef.names_def.col-xs-12.col-md-4.col-md-offset-1 -->
            </div> <!-- /.row -->
          </div> <!-- /.container-fluid -->
        </article> <!-- /.names_of_god -->
        <article class="self_deliverance">
          <div class="container-fluid">
            <div class="row">
              <div class="col-xs-12 col-md-10 col-md-offset-1">
                <h2>Self-Deliverance</h2>
                <p>These prayers come from a very powerful ministry called <a href="http://www.warriorsforchrist.co.za"><strong>Warriors for Christ</strong></a>. <em>Riaan Lombaard</em> and his team are some of the most humble and dedicated workers of the Lord that I have ever had the privalege of meeting. With his express permission I have included his ministry's prayers for self-deliverance here.</p>
                <blockquote>The Warriors for Christ ministry run by Riaan Lombard is a ministry dedicated to the spreading of the Gospel of Jesus Christ, and the ministry of the Holy Spirit to bring to salvation, heal and set people free from Satan's’ bondage. To read more <a href="http://www.warriorsforchrist.co.za">click here</a>.</blockquote>
                <p>If you are intersted in attending a warriors for Christ Meeting then please visit <a href="http://www.warriorsforchrist.co.za">here</a> for more information or you can visit the <strong><a href="http://www.warriorsforchrist.co.za">Warriors for Christ</a></strong> YouTube page <a href="https://goo.gl/EOennh" target=_blank>here</a>.</p>
                <hr>
                <p class=verse>"Like a sparrow in its flitting, like a swallow in its flying, a curse that is causeless does not alight"<a href="http://biblehub.com/proverbs/26-2.htm" target=_blank>Proverbs 26:2 (ESV)</a></p>
                <p>Any born again, <span title="Anytime the Word of God says Spirit it refers to the Holy Spirit, if it says spirit with a lowercase 's' it refers to the spirit of man.">Spirit</span> filled Christian should not accept: <em>bad health</em>, <em>lack</em> of any form, <em>poverty</em>, <em>divorce</em>, <em>depression</em>, <em>oppression</em>, being on <em>chronic</em> medication etc.</p>
                <p>I am not saying your life should be a bed of roses, because a true walk with <span class=jesus>God</span> and a life of service to him is not for the faint of heart. However anything that is contrary to <span class=jesus>God's</span> word is an attack on your life.</p>
                <p>It is the job of believers to put the devil on notice and put him underneath your feet (<a href="http://biblehub.com/genesis/3-15.htm" target=_blank>Gensis 3:15</a>). It is a rather inconvenient truth (and one that is not taught I might add), but anyone that becomes a Christian is automatically added into <span class=jesus>God's</span> army and becomes public enemy number one in Satan's eyes. Why is this? Because he knows once you have an encounter with <span class=jesus>Jesus</span> your life can never remain the same and he will turn you into an unstoppable force for <span class=jesus>Jesus Christ</span>.</p>
                <p class=verse>“Cursed is he who does the work of the LORD with slackness, and cursed is he who keeps back his sword from bloodshed." <a href="http://biblehub.com/jeremiah/48-10.htm" target=_blank>Jeremiah 48:10</a></p>
              </div> <!-- /#nameDef.names_def.col-xs-12.col-md-4.col-md-offset-1 -->
              <div class=prayer_list>
                <div class="col-xs-6 col-md-3 col-md-offset-1">
                  <ul>
                    <li id=soulTies onclick="printFromPhpFile()">Breaking <strong>Soul Ties</strong></li>
                    <li id=familiarSpirits>Familiar Spirits</li>
                    <li id=jezebel>Dealing With <strong>Jezebel</strong></li>
                    <li id=curses>Release from <strong>Curses</strong></li>
                    <li id=salvation>Prayer for <strong>Salvation</strong></li>
                    <li id=sexualBondage>Release from <strong>Sexual Bondage</strong></li>
                    <li id=occult>Release from the <strong>Occult</strong></li>
                    <li id=satanism>Release from <strong>Witchcraft</strong>, the <strong>Occult</strong> or <strong>Satanism</strong></li>
                  </ul>
                </div> <!-- /.col-xs-6.col-md-4.col-md-offset-1 -->
                <div class="col-xs-6 col-md-7">
                  <div class=prayer_result id=prayerRequest>
                  </div> <!-- /.prayer_result#prayerRequest -->
                </div> <!-- /.col-xs-6.col-md-7 -->
              </div> <!-- /.prayer_list -->
            </div> <!-- /.row -->
          </div> <!-- /.container-fluid -->
        </article> <!-- /.self_deliverance -->
        <article class="contact get_prayer">
          <div class="container-fluid">
            <div class="row">
              <div class="col-md-12">
                <h1>Get in touch</h1>
              </div> <!-- /.col-md-12 -->
              <div class="col-xs-6 col-md-6">
                <div class="contact_description">
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras eu dictum leo, id fermentum diam. Morbi rutrum pretium vehicula. Aenean ac sapien id risus cursus posuere sed sit amet tellus. Morbi sed odio quis ligula vestibulum fringilla. Cras eros lorem, vestibulum id rhoncus vel, commodo ac ipsum. Morbi ullamcorper molestie est vitae egestas. Mauris sollicitudin orci nec dictum iaculis. Vestibulum non malesuada felis, in molestie nibh. Mauris aliquam risus in mauris pharetra, nec tincidunt nisi placerat. Suspendisse porta turpis et fermentum eleifend. </p>
                </div> <!-- /.contact_description -->
              </div> <!-- /.col-md-6 -->
              <div class="contact_form" id="contact_form">
              <div class="col-xs-12 col-md-4 col-md-offset-1">
                <form>
                  <input placeholder="enter your name" type="text">
                  <input placeholder="enter your email address" type="email">
                  <textarea draggable="false" placeholder="what would you like prayer for?"></textarea>
                </form>
              </div> <!-- /.col-xs-12.col-md-4.col-md-offset-1 -->
              </div> <!--/#contact_form-->
            </div> <!-- /.row -->
          </div> <!-- /.container-fluid -->
        </article> <!-- /.contact.get_prayer -->
      </section>
    </main>
    <aside>
        <?php include("includes/page_elements/aside.php"); ?>
    </aside>
    <?php include("includes/page_elements/footer.php"); ?>
  </body>
</html>