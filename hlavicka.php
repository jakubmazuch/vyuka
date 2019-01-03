<div id="hlavicka">
  <div id="logo">
     <a href="index.php" />
        <img src="obrazky/logo.png" /></a>      
  </div>
  <div id="nadpisy">
     <big><b><span style="color: white">mazuch@itstep.org</span></b></big>
     <font color="white">
     <DIV>
        <script>
           var now = new Date();
           var yr = now.getFullYear();
           var mName = now.getMonth() + 1;
           var dName = now.getDay() + 1.;
           var dayNr = ((now.getDate()<10) ? "" : "")+ now.getDate();
               if(dName==1) Day = "neděle";
               if(dName==2) Day = "pondělí";
               if(dName==3) Day = "úterý";
               if(dName==4) Day = "středa";
               if(dName==5) Day = "čtvrtek";
               if(dName==6) Day = "pátek";
               if(dName==7) Day = "sobota";
               
               if(mName==1) Month="ledna";
               if(mName==2) Month="února";
               if(mName==3) Month="března";
               if(mName==4) Month="dubna";
               if(mName==5) Month="května";
               if(mName==6) Month="června";
               if(mName==7) Month="července";
               if(mName==8) Month="srpna";
               if(mName==9) Month="září";
               if(mName==10) Month="října";
               if(mName==11) Month="listopadu";
               if(mName==12) Month="prosince";

           var todaysDate =(" "
           + Day
           + ", "
           + dayNr
           + ". "
           + Month
           + " "
           + yr);

           document.open();
           document.write("Dnes je "+todaysDate+" a svátek má ");
          
           today = new Date();
           den=today.getDate();
           mesic=(today.getMonth()+1);
             if (mesic==1) {
               if (den==01) document.write("Nový rok");
               if (den==02) document.write("Karina");
               if (den==03) document.write("Radmila");
               if (den==04) document.write("Diana");
               if (den==05) document.write("Dalimil");
               if (den==06) document.write("Tři králové");
               if (den==07) document.write("Vilma");
               if (den==08) document.write("Čestmír");
               if (den==09) document.write("Vladan");
               if (den==10) document.write("Břetislav");
               if (den==11) document.write("Bohdana");
               if (den==12) document.write("Pravoslav");
               if (den==13) document.write("Edita");
               if (den==14) document.write("Radovan");
               if (den==15) document.write("Alice");
               if (den==16) document.write("Ctirad");
               if (den==17) document.write("Drahoslav");
               if (den==18) document.write("Vladislav");
               if (den==19) document.write("Doubravka");
               if (den==20) document.write("Ilona");
               if (den==21) document.write("Běla");
               if (den==22) document.write("Slavomír");
               if (den==23) document.write("Zdeněk");
               if (den==24) document.write("Milena");
               if (den==25) document.write("Miloš");
               if (den==26) document.write("Zora");
               if (den==27) document.write("Ingrid");
               if (den==28) document.write("Otýlie");
               if (den==29) document.write("Zdislava");
               if (den==30) document.write("Robin");
               if (den==31) document.write("Marika");
             }
             if (mesic==2) {
               if (den==01) document.write("Hynek");
               if (den==02) document.write("Nela");
               if (den==03) document.write("Blažej");
               if (den==04) document.write("Jarmila");
               if (den==05) document.write("Dobromila");
               if (den==06) document.write("Vanda");
               if (den==07) document.write("Veronika");
               if (den==08) document.write("Milada");
               if (den==09) document.write("Apolena");
               if (den==10) document.write("Mojmír");
               if (den==11) document.write("Božena");
               if (den==12) document.write("Slavěna");
               if (den==13) document.write("Věnceslav");
               if (den==14) document.write("Valentýn");
               if (den==15) document.write("Jiřina");
               if (den==16) document.write("Ljuba");
               if (den==17) document.write("Miloslava");
               if (den==18) document.write("Gizela");
               if (den==19) document.write("Patrik");
               if (den==20) document.write("Oldřich");
               if (den==21) document.write("Lenka");
               if (den==22) document.write("Petr");
               if (den==23) document.write("Svatopluk");
               if (den==24) document.write("Matěj");
               if (den==25) document.write("Liliana");
               if (den==26) document.write("Dorota");
               if (den==27) document.write("Alexandr");
               if (den==28) document.write("Lumír");
               if (den==29) document.write("Horymír");
             }
               if (mesic==3) {
               if (den==01) document.write("Bedřich");
               if (den==02) document.write("Anežka");
               if (den==03) document.write("Kamil");
               if (den==04) document.write("Stela");
               if (den==05) document.write("Kazimir");
               if (den==06) document.write("Miroslav");
               if (den==07) document.write("Tomáš");
               if (den==08) document.write("Gabriela");
               if (den==09) document.write("Františka");
               if (den==10) document.write("Viktorie");
               if (den==11) document.write("Anděla");
               if (den==12) document.write("Řehoř");
               if (den==13) document.write("Růžena");
               if (den==14) document.write("Rút a Matylda");
               if (den==15) document.write("Ida");
               if (den==16) document.write("Elena a Herbert");
               if (den==17) document.write("Vlastimil");
               if (den==18) document.write("Eduard");
               if (den==19) document.write("Josef");
               if (den==20) document.write("Světlana");
               if (den==21) document.write("Radek");
               if (den==22) document.write("Leona");
               if (den==23) document.write("Ivona");
               if (den==24) document.write("Gabriel");
               if (den==25) document.write("Marian");
               if (den==26) document.write("Emanuel");
               if (den==27) document.write("Dita");
               if (den==28) document.write("Soňa");
               if (den==29) document.write("Taťána");
               if (den==30) document.write("Arnošt");
               if (den==31) document.write("Kvido");
             }
             if (mesic==4) {
               if (den==01) document.write("Hugo");
               if (den==02) document.write("Erika");
               if (den==03) document.write("Richard");
               if (den==04) document.write("Ivana");
               if (den==05) document.write("Miroslava");
               if (den==06) document.write("Vendula");
               if (den==07) document.write("Heřman a Hermína");
               if (den==08) document.write("Ema");
               if (den==09) document.write("Dušan");
               if (den==10) document.write("Darja");
               if (den==11) document.write("Izabela");
               if (den==12) document.write("Julius");
               if (den==13) document.write("Aleš");
               if (den==14) document.write("Vincenc");
               if (den==15) document.write("Anastázie");
               if (den==16) document.write("Irena");
               if (den==17) document.write("Rudolf");
               if (den==18) document.write("Valérie");
               if (den==19) document.write("Rostislav");
               if (den==20) document.write("Marcela");
               if (den==21) document.write("Alexandra");
               if (den==22) document.write("Evženie");
               if (den==23) document.write("Vojtěch");
               if (den==24) document.write("Jiří");
               if (den==25) document.write("Marek");
               if (den==26) document.write("Oto");
               if (den==27) document.write("Jaroslav");
               if (den==28) document.write("Vlastislav");
               if (den==29) document.write("Robert");
               if (den==30) document.write("Blahoslav");
             }
             if (mesic==5) {
               if (den==01) document.write("Svátek práce");
               if (den==02) document.write("Zikmund");
               if (den==03) document.write("Alexej");
               if (den==04) document.write("Květoslav");
               if (den==05) document.write("Klaudie");
               if (den==06) document.write("Radoslav");
               if (den==07) document.write("Stanislav");
               if (den==08) document.write("Den vítezství");
               if (den==09) document.write("Ctibor");
               if (den==10) document.write("Blažena");
               if (den==11) document.write("Svatava");
               if (den==12) document.write("Pankrác");
               if (den==13) document.write("Servác");
               if (den==14) document.write("Bonifác");
               if (den==15) document.write("Žofie");
               if (den==16) document.write("Přemysl");
               if (den==17) document.write("Aneta");
               if (den==18) document.write("Nataša");
               if (den==19) document.write("Ivo");
               if (den==20) document.write("Zbyšek");
               if (den==21) document.write("Monika");
               if (den==22) document.write("Emil");
               if (den==23) document.write("Vladimír");
               if (den==24) document.write("Jana");
               if (den==25) document.write("Viola");
               if (den==26) document.write("Filip");
               if (den==27) document.write("Valdemar");
               if (den==28) document.write("Vilém");
               if (den==29) document.write("Maxmilián");
               if (den==30) document.write("Ferdinand");
               if (den==31) document.write("Kamila");
             }
             if (mesic==6) {
               if (den==01) document.write("Laura");
               if (den==02) document.write("Jarmil");
               if (den==03) document.write("Tamara");
               if (den==04) document.write("Dalibor");
               if (den==05) document.write("Dobroslav");
               if (den==06) document.write("Norbert");
               if (den==07) document.write("Iveta a Slavoj");
               if (den==08) document.write("Medard");
               if (den==09) document.write("Stanislava");
               if (den==10) document.write("Gita");
               if (den==11) document.write("Bruno");
               if (den==12) document.write("Antonie");
               if (den==13) document.write("Antonín");
               if (den==14) document.write("Roland");
               if (den==15) document.write("Vít");
               if (den==16) document.write("Zbyněk");
               if (den==17) document.write("Adolf");
               if (den==18) document.write("Milan");
               if (den==19) document.write("Leoš");
               if (den==20) document.write("Květa");
               if (den==21) document.write("Alois");
               if (den==22) document.write("Pavla");
               if (den==23) document.write("Zdeňka");
               if (den==24) document.write("Jan");
               if (den==25) document.write("Ivan");
               if (den==26) document.write("Adriana");
               if (den==27) document.write("Ladislav");
               if (den==28) document.write("Lubomír");
               if (den==29) document.write("Petr a Pavel");
               if (den==30) document.write("Šárka");
             }
             if (mesic==7) {
               if (den==01) document.write("Jaroslava");
               if (den==02) document.write("Patricie");
               if (den==03) document.write("Radomír");
               if (den==04) document.write("Prokop");
               if (den==05) document.write("Den příchodu věrozvěstů Cyrila a Metoděje");
               if (den==06) document.write("Den upálení mistra Jana Husa");
               if (den==07) document.write("Bohuslava");
               if (den==08) document.write("Nora");
               if (den==09) document.write("Drahoslava");
               if (den==10) document.write("Libuše a Amálie");
               if (den==11) document.write("Olga");
               if (den==12) document.write("Bořek");
               if (den==13) document.write("Markéta");
               if (den==14) document.write("Karolína");
               if (den==15) document.write("Jindřich");
               if (den==16) document.write("Luboš");
               if (den==17) document.write("Martina");
               if (den==18) document.write("Drahomíra");
               if (den==19) document.write("Čeněk");
               if (den==20) document.write("Ilja");
               if (den==21) document.write("Vítězslav");
               if (den==22) document.write("Magdaléna");
               if (den==23) document.write("Libor");
               if (den==24) document.write("Kristýna");
               if (den==25) document.write("Jakub");
               if (den==26) document.write("Anna");
               if (den==27) document.write("Věroslav");
               if (den==28) document.write("Viktor");
               if (den==29) document.write("Marta");
               if (den==30) document.write("Bořivoj");
               if (den==31) document.write("Ignác");
             }
             if (mesic==8) {
               if (den==01) document.write("Oskar");
               if (den==02) document.write("Gustav");
               if (den==03) document.write("Miluše");
               if (den==04) document.write("Dominik");
               if (den==05) document.write("Kristian");
               if (den==06) document.write("Oldřiška");
               if (den==07) document.write("Lada");
               if (den==08) document.write("Soběslav");
               if (den==09) document.write("Roman");
               if (den==10) document.write("Vavřinec");
               if (den==11) document.write("Zuzana");
               if (den==12) document.write("Klára");
               if (den==13) document.write("Alena");
               if (den==14) document.write("Alan");
               if (den==15) document.write("Hana");
               if (den==16) document.write("Jáchym");
               if (den==17) document.write("Petra");
               if (den==18) document.write("Helena");
               if (den==19) document.write("Ludvík");
               if (den==20) document.write("Bernard");
               if (den==21) document.write("Johana");
               if (den==22) document.write("Bohuslav");
               if (den==23) document.write("Sandra");
               if (den==24) document.write("Bartoloměj");
               if (den==25) document.write("Radim");
               if (den==26) document.write("Luděk");
               if (den==27) document.write("Otakar");
               if (den==28) document.write("Augustýn");
               if (den==29) document.write("Evelína");
               if (den==30) document.write("Vladěna");
               if (den==31) document.write("Pavlína");
             }
             if (mesic==9) {
               if (den==01) document.write("Linda a Samuel");
               if (den==02) document.write("Adéla");
               if (den==03) document.write("Bronislav");
               if (den==04) document.write("Jindřiška");
               if (den==05) document.write("Boris");
               if (den==06) document.write("Boleslav");
               if (den==07) document.write("Regína");
               if (den==08) document.write("Mariana");
               if (den==09) document.write("Daniela");
               if (den==10) document.write("Irma");
               if (den==11) document.write("Denisa");
               if (den==12) document.write("Marie");
               if (den==13) document.write("Lubor");
               if (den==14) document.write("Radka");
               if (den==15) document.write("Jolana");
               if (den==16) document.write("Ludmila");
               if (den==17) document.write("Naděžda");
               if (den==18) document.write("Kryštof");
               if (den==19) document.write("Zita");
               if (den==20) document.write("Oleg");
               if (den==21) document.write("Matouš");
               if (den==22) document.write("Darina");
               if (den==23) document.write("Berta");
               if (den==24) document.write("Jaromír");
               if (den==25) document.write("Zlata");
               if (den==26) document.write("Andrea");
               if (den==27) document.write("Jonáš");
               if (den==28) document.write("Václav");
               if (den==29) document.write("Michal");
               if (den==30) document.write("Jeroným");
              }
             if (mesic==10) {
               if (den==01) document.write("Igor");
               if (den==02) document.write("Olivie a Oliver");
               if (den==03) document.write("Bohumil");
               if (den==04) document.write("František");
               if (den==05) document.write("Eliška");
               if (den==06) document.write("Hanuš");
               if (den==07) document.write("Justýna");
               if (den==08) document.write("Věra");
               if (den==09) document.write("Štefan a Sára");
               if (den==10) document.write("Marina");
               if (den==11) document.write("Andrej");
               if (den==12) document.write("Marcel");
               if (den==13) document.write("Renáta");
               if (den==14) document.write("Agáta");
               if (den==15) document.write("Tereza");
               if (den==16) document.write("Havel");
               if (den==17) document.write("Hedvika");
               if (den==18) document.write("Lukáš");
               if (den==19) document.write("Michaela");
               if (den==20) document.write("Vendelín");
               if (den==21) document.write("Brigita");
               if (den==22) document.write("Sabina");
               if (den==23) document.write("Teodor");
               if (den==24) document.write("Nina");
               if (den==25) document.write("Beáta");
               if (den==26) document.write("Erik");
               if (den==27) document.write("Šarlota a Zoe");
               if (den==28) document.write("Den vzniku samostatné ČSR");
               if (den==29) document.write("Silvie");
               if (den==30) document.write("Tadeáš");
               if (den==31) document.write("Štěpánka");
             }
             if (mesic==11) {
               if (den==01) document.write("Felix");
               if (den==02) document.write1("Památka zesnulých");
               if (den==03) document.write("Hubert");
               if (den==04) document.write("Karel");
               if (den==05) document.write("Miriam");
               if (den==06) document.write("Liběna");
               if (den==07) document.write("Saskie");
               if (den==08) document.write("Bohumír");
               if (den==09) document.write("Bohdan");
               if (den==10) document.write("Evžen");
               if (den==11) document.write("Martin");
               if (den==12) document.write("Benedikt");
               if (den==13) document.write("Tibor");
               if (den==14) document.write("Sáva");
               if (den==15) document.write("Leopold");
               if (den==16) document.write("Otmar");
               if (den==17) document.write("Mahulena; Den osvobození");
               if (den==18) document.write("Romana");
               if (den==19) document.write("Alžběta");
               if (den==20) document.write("Nikola");
               if (den==21) document.write("Albert");
               if (den==22) document.write("Cecílie");
               if (den==23) document.write("Klement");
               if (den==24) document.write("Emílie");
               if (den==25) document.write("Kateřina");
               if (den==26) document.write("Artur");
               if (den==27) document.write("Xenie");
               if (den==28) document.write("René");
               if (den==29) document.write("Zina");
               if (den==30) document.write("Ondřej");
             }
             if (mesic==12) {
               if (den==01) document.write("Iva");
               if (den==02) document.write("Blanka");
               if (den==03) document.write("Svatoslav");
               if (den==04) document.write("Barbora");
               if (den==05) document.write("Jitka");
               if (den==06) document.write("Mikuláš");
               if (den==07) document.write("Ambrož a Benjamín");
               if (den==08) document.write("Květoslava");
               if (den==09) document.write("Vratislav");
               if (den==10) document.write("Julie");
               if (den==11) document.write("Dana");
               if (den==12) document.write("Simona");
               if (den==13) document.write("Lucie");
               if (den==14) document.write("Lýdie");
               if (den==15) document.write("Radana a Radan");
               if (den==16) document.write("Albína");
               if (den==17) document.write("Daniel");
               if (den==18) document.write("Miloslav");
               if (den==19) document.write("Ester");
               if (den==20) document.write("Dagmar");
               if (den==21) document.write("Natálie");
               if (den==22) document.write("Šimon");
               if (den==23) document.write("Vlasta");
               if (den==24) document.write("Adam a Eva; Štědrý den");
               if (den==25) document.write("1. svátek vánoční, Boží hod vánoční");
               if (den==26) document.write("Štěpán; 2. svátek vánoční");
               if (den==27) document.write("Žaneta");
               if (den==28) document.write("Bohumila");
               if (den==29) document.write("Judita");
               if (den==30) document.write("David");
               if (den==31) document.write("Silvestr");
             }
 </script>
      </DIV>

      </font>
  </div>
</div>