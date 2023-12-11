-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Dec 11, 2023 at 12:37 PM
-- Server version: 5.7.39
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `jurnalisti`
--

-- --------------------------------------------------------

--
-- Table structure for table `articol`
--

CREATE TABLE `articol` (
  `id_articol` int(11) NOT NULL,
  `titlu` varchar(100) NOT NULL,
  `data_creare` datetime NOT NULL,
  `data_modificare` datetime DEFAULT NULL,
  `continut_articol` varchar(10000) NOT NULL,
  `autor` int(6) NOT NULL,
  `editor` int(6) NOT NULL,
  `status` varchar(30) NOT NULL,
  `id_categorie` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `articol`
--

INSERT INTO `articol` (`id_articol`, `titlu`, `data_creare`, `data_modificare`, `continut_articol`, `autor`, `editor`, `status`, `id_categorie`) VALUES
(2001, 'Efectele artistice ale lui Degas', '2023-11-12 00:00:00', '2023-11-20 00:00:00', 'Pictura lui Edgar Degas are o virtute incontestabila: aceea de a surprinde viata reala in scene populate de oameni in miscare, cum ar fi dansatorii pe o scena, cursele de cai sau scene ale societatii pariziene care se bucura de un moment placut in numeroasele cafenele care inunda capitala Frantei. Una dintre cele mai remarcabile lucrari ale lui Degas este Tatal lui Degas ascultandu-l pe Lorenzo Pagans, 1869, un tablou care recreeaza una dintre serile muzicale organizate de tatal artistului', 12, 5, 'aprobat', 101),
(2002, 'Senzatiile tari, sub control perfect', '2023-10-23 00:00:00', NULL, 'Fritt Fall a fost una dintre atractiile majore ale parcului tematic Grona Lund din Stockholm de peste 20 de ani. Pentru a se asigura ca nu se intampla nimic in timpul unei caderi libere de la o inaltime de 80 de metri, intregul sistem de control a fost inlocuit recent, folosind cabluri LAPP', 8, 5, 'refuzat', 102),
(2003, 'Glamour Women of the Year 2023', '2023-11-10 00:00:00', '2023-11-29 00:00:00', 'Premiile Glamour Women of The Year s-au desfasurat pe 7 noiembrie in Manhattan. O seara plina de emotii, moda si lacrimi de bucurie. Inainte de a-si primi trofeele, vedetele au pasit pe covorul rosu unde s-au bucurat de toata atentia fotografilor. Selma Blair, Millie Bobby Brown, America Ferrera si Kat Graham sunt doar o parte din femeile celebre care au impresionat cu tinutele lor la gala Glamour', 3, 10, 'aprobat', 104),
(2004, 'Transmiterea datelor in sisteme de lanturi port cablu', '2023-11-22 00:00:00', NULL, 'Utilajele de mare productivitate, au devenit prezente comune in peisajul industrial. Prelucrarile in doua sau mai multe coordonate au impus utilizarea pe scara larga a sistemelor de lanturi port cablu care ghideaza si protejeaza cablurile super flexibile destinate alimentarii cu energie electrica si transmiterii datelor. Automatizarea tot mai ridicata a masinariilor industriale conduce la necesitatea transmiterii unor volume mai mari de date in conditii de zgomot electromagnetic crescut.', 8, 5, 'aprobat', 102),
(2005, 'Gustav Klimt, artistul care picta cu aur', '2023-10-14 00:00:00', NULL, '                                        La ora 02:30 am stricat baza de date. of of of Exemplu in asteptareExemplu in asteptareExemplu in asteptareExemplu in asteptareExemplu in asteptareExemplu in asteptareExemplu in asteptareExemplu in asteptare .Exemplu in asteptareExemplu in asteptareExemplu in asteptareExemplu in asteptareExemplu in asteptareExemplu in asteptareExemplu in asteptareExemplu in asteptare .Exemplu in asteptareExemplu in asteptareExemplu in asteptareExemplu in asteptareExemplu in asteptareExemplu in asteptareExemplu in asteptareExemplu in asteptare .                                             ', 7, 4, 'asteptare', 101),
(2006, 'Tricotajele sunt cele mai inspirate alegeri vestimentare pentru perioada in care ne aflam', '2023-11-28 00:00:00', NULL, 'Cine a spus ca iarna nu este un sezon placut pentru iubitoarele de moda? Fie ca adori rochiile care iti urmeaza linia corpului, fie ca preferi un pulover cozy sau un cardigan feminin, poti opta oricand pentru tricotaje chic. Acestea te ajuta sa te simti seducatoare, fara sa renunti la caldura si la confort.', 3, 5, 'aprobat', 104),
(2007, 'Ce ramane dupa explozia unei stele masive', '2023-11-22 00:00:00', NULL, 'Urmarile mortii explozive a unei stele masive au fost surprinse intr-o imagine publicata de European Southern Observatory. Imaginea tulburatoare infatiseaza nori de gaz care, prin filtrele folosite de astronomi, arata asemenea unor tentacule roz si portocalii care se intind pe o suprafata de circa 600 de ori mai mare decat sistemul nostru solar.', 9, 10, 'aprobat', 103),
(2008, 'Cum suna o gaura neagra', '2023-10-18 00:00:00', '2023-11-22 00:00:00', 'Gaura neagra din centrul roiului de galaxii Perseus a fost asociata cu un sunet inca din 2003. Astronomii au descoperit ca valurile de presiune emise de gaura neagra provocau unde in gazul fierbinte al roiului care puteau fi traduse intr-o nota muzicala pe care oamenii nu o pot auzi intrucat este cu 57 de octave sub nota do. Sunetul este editat astfel incat sa poata fi receptat de simtul nostru auditiv', 9, 4, 'aprobat', 103),
(2009, 'Automatizarea industriala cu roboti SCARA', '2023-10-20 00:00:00', NULL, 'Mitsubishi Electric este un brand bine cunoscut care ofera de multi ani solutii de automatizare pentru diverse industrii. Printre cele mai populare produse s-a mentinut in ultimii ani robotul SCARA. SCARA este acronimul de la Selective Compliance Assembly Robot Arm (brat robotic de asamblare cu complianta selectiva). Acest tip de robot permite miscari precise si repetabile in plan orizontal                ', 7, 10, 'asteptare', 101),
(2010, 'Thomas Schweicker, caligraful fara maini care scria cu picioarele', '2023-10-29 00:00:00', NULL, 'Schweicker avea un talent deosebit pentru pictura si caligrafie si a devenit in scurt timp expert in redactarea de documente elaborate. La scoala latina avea propria lui masa cu sertar cu cheie, unde isi pastra uneltele de scris. Si-a dezvoltat abilitatile de caligraf intr-o asemenea masura, incat nu numai ca si-a putut castiga existenta de pe urma lor, dar a devenit si o celebritate. Vestea talentului si a tehnicii sale neobisnuite s-a raspandit rapid in intreaga tara', 7, 4, 'aprobat', 101),
(2012, 'Articol modificat - Automatizarea industriala cu roboti SCARA', '2023-12-07 00:54:24', '2023-12-07 00:54:24', '                                                                                                                                                            Continut articol modificat -----------Exemplu in asteptareExemplu in asteptareExemplu in asteptareExemplu in asteptareExemplu in asteptareExemplu in asteptareExemplu in asteptareExemplu in asteptareExemplu in asteptareExemplu in asteptareExemplu in asteptareExemplu in asteptare                                                                                                                ', 7, 4, 'draft', 101),
(2015, '111', '2023-12-07 14:35:42', '2023-12-07 14:35:42', '                                                                                                                                        Exemplu in asteptareExemplu in asteptareExemplu in asteptareExemplu in asteptareExemplu in asteptareExemplu in asteptareExemplu in asteptareExemplu in asteptareExemplu in asteptareExemplu in asteptareExemplu in asteptareExemplu in asteptare                                                                                                ', 7, 4, 'asteptare', 101),
(2017, 'ana are mere', '2023-12-08 00:20:15', '2023-12-08 00:20:15', '                                                                                                                                        Exemplu in asteptareExemplu in asteptareExemplu in asteptareExemplu in asteptareExemplu in asteptareExemplu in asteptareExemplu in asteptareExemplu in asteptareExemplu in asteptareExemplu in asteptareExemplu in asteptareExemplu in asteptare                                                                                                ', 7, 4, 'refuzat', 101),
(2019, 'Editat - Operațiunea Dulapul cu Andrei Ursu (WRS)', '2023-12-08 23:39:50', '2023-12-08 23:39:50', 'Editat. --- Artistul mi-a mărturisit &icirc;nt&acirc;i și &icirc;nt&acirc;i că are două alter ego-uri &icirc;n ceea ce privește stilul său vestimentar: &bdquo;cel de pe scenă, &icirc;n care am elemente mult mai bold și androgine, și cel de zi cu zi, &icirc;n care &icirc;mi place să mă simt relaxat și comod, să adopt o estetică simplă și calitativă.&rdquo;\r\n\r\nL-am &icirc;ntrebat apoi dacă și-a schimbat vreodată stilul și mi-a spus că &bdquo;&icirc;ntotdeauna am avut o afinitate pentru ceea ce &icirc;nseamnă fashion, dar cred că momentul &icirc;n care mi-am schimbat stilul a fost atunci c&acirc;nd am &icirc;nceput să dansez, să interacționez cu din ce &icirc;n ce mai mulți oameni și să văd stiluri diverse. Desigur, purtam ce era la modă pe vremea aceea, &icirc;ntotdeauna am fost la curent cu tot ce era &icirc;n trend.&rdquo;                ', 7, 4, 'draft', 101),
(2022, 'Vreau sa aprob', '2023-12-09 23:09:50', '2023-12-09 23:09:50', '                Schweicker avea un talent deosebit pentru pictura si caligrafie si a devenit in scurt timp expert in redactarea de documente elaborate. La scoala latina avea propria lui masa cu sertar cu cheie, unde isi pastra uneltele de scris. Si-a dezvoltat abilitatile de caligraf intr-o asemenea masura, incat nu numai ca si-a putut castiga existenta de pe urma lor, dar a devenit si o celebritate. Vestea talentului si a tehnicii sale neobisnuite s-a raspandit rapid in intreaga tar', 7, 5, 'aprobat', 101),
(2023, 'Resping articol', '2023-12-09 23:21:39', '2023-12-09 23:21:39', 'Schweicker avea un talent deosebit pentru pictura si caligrafie si a devenit in scurt timp expert in redactarea de documente elaborate. La scoala latina avea propria lui masa cu sertar cu cheie, unde isi pastra uneltele de scris. Si-a dezvoltat abilitatile de caligraf intr-o asemenea masura, incat nu numai ca si-a putut castiga existenta de pe urma lor, dar a devenit si o celebritate. Vestea talentului si a tehnicii sale neobisnuite s-a raspandit rapid in intreaga tara', 7, 5, 'refuzat', 101),
(2024, 'Oscilații &ndash; Festivalul SIMULTAN 2023', '2023-12-11 13:44:32', '2023-12-11 13:44:32', '                                                    Tehnologia promite o lume a confortului, &amp;icirc;n care sarcinile sunt automatizate, informațiile sunt extrem de accesibile, iar limitele timpului și spațiului par să se estompeze. Fără &amp;icirc;ndoială, aceasta ne-a facilitat viața &amp;icirc;n numeroase moduri, făc&amp;acirc;nd comunicarea, munca, timpul liber și, desigur, producția artistică mai eficientă și mai accesibilă. Dar această ubicuitate tehnologică are și o latură mai &amp;icirc;ntunecată. Pe măsură ce devenim din ce &amp;icirc;n ce mai legați de dispozitivele noastre, riscăm să pierdem contactul cu subtilitățile și experiențele senzoriale care ne definesc umanitatea. Mai mult, merită să ne &amp;icirc;ntrebăm cum influențează domeniul digital amintirile și narațiunile noastre personale. Comoditatea externalizării amintirilor prin intermediul stocării digitale poate duce, fără să ne dăm seama, la o depreciere a capacității noastre de a ne aminti și de a ne retrăi experiențele &amp;icirc;n mod organic, la fel cum tehnologia &amp;icirc;nsăși este, &amp;icirc;n timp, supusă fenomenului de generation loss.\r\n\r\n&amp;Icirc;n această eră profund influențată tehnologic, este imperativ să fim prudenți &amp;icirc;n relația complicată cu tehnologia și să &amp;icirc;ncercăm să găsim un echilibru. Pe măsură ce &amp;icirc;mbrățișăm facilitățile sale, trebuie să nu pierdem din vedere păstrarea calităților intrinseci care ne definesc umanitatea și profunzimea memoriei noastre colective.\r\n\r\nDezvolt&amp;acirc;nd tema de anul trecut, &amp;bdquo;The Changing and The Indeterminate&amp;rdquo;, ediția 2023 a festivalului SIMULTAN propune o reflecție asupra oscilațiilor, fără &amp;icirc;ndoială un leitmotiv al existenței contemporane. De la pandemii, la războaie, la schimbări climatice și neliniște socială generală, ne-am obișnuit să oscilăm &amp;icirc;ntre ororile lumii reale și ecranele luminoase ale dispozitivelor noastre, care ne amorțesc și ne hipnotizează. Dar cum sună aceste oscilații, care este ritmul lor și cum se armonizează ele cu propriile noastre pulsații interioare? Și, mai ales, ce răm&amp;acirc;ne &amp;icirc;ntre oscilații? Ce putem aduna de acolo?\r\n\r\n&amp;bdquo;Oscilația servește ca principiu fundamental &amp;icirc;n &amp;icirc;nțelegerea și interacțiunea cu lumea noastră. De la cele mai mici vibrații atomice la cele mai mari mișcări cosmice, oscilația modelează experiențele noastre, comunicarea și progresele tehnologice. Recunoașterea importanței oscilației &amp;icirc;n viața noastră poate aprofunda aprecierea noastră pentru complexitatea și frumusețea fenomenelor naturale și tehnologice care ne &amp;icirc;nconjoară. Simțurile noastre, cum ar fi vederea, auzul și atingerea, se bazează pe modele oscilatorii pentru a interpreta lumea din jurul nostru,&amp;rdquo; detaliază Levente Kozma, co-fondator, SIMULTAN, &amp;icirc;n textul curatorial.\r\n\r\nAcestea sunt c&amp;acirc;teva dintre conceptele abordate de artiștii vizuali și de sunet din ediția 2023 a festivalului SIMULTAN, care a avut loc la &amp;icirc;nceputul lunii octombrie. Sub titlul &amp;bdquo;Oscilații. Lucruri de reținut&amp;rdquo;, evenimentul a sărbătorit 18 ani de existență și activitate și s-a desfășurat la Muzeul &amp;bdquo;Corneliu Miklosi&amp;rdquo; și la fostele ateliere ale Societății de Transport Public Timișoara &amp;ndash; reunite conceptual &amp;icirc;n cadrul aceluiași eveniment pentru prima dată de la reconversia lor &amp;icirc;n viitorul Centru de Artă, Tehnologie și Experimentare MultipleXity (MX).      \r\nSpațiul joacă un rol important &amp;icirc;n experiența de vizionare/ascultare. &amp;Icirc;n acest an, suprafața deschisă al muzeului a fost g&amp;acirc;ndită pentru a fi un spațiu expozițional pentru video-uri, instalații artistice și workshop-uri pe timp de zi, și o sală de concerte pe timp de noapte. Această abordare modulară a avut ca scop, cel mai probabil, intersectarea celor două categorii de public ale festivalului, cei care vin pentru secțiunea de artă vizuală și pasionații de muzică. Organizatorii SIMULTAN au fost &amp;icirc;ntotdeauna conștienți de această ruptură și capabili să se adapteze pe măsură, &amp;icirc;n trecut ocup&amp;acirc;nd spații separate pentru artă și sunet, precum și atelierele și conferințele care vin să formeze o punte &amp;icirc;ntre cele două. Cu toate acestea, configurația din 2023, cu toate evenimentele programate &amp;icirc;ntr-un singur loc, face mai convenabil pentru vizitatori să experimenteze pe deplin vastul meniu artistic al SIMULTAN.                              ', 7, 5, 'aprobat', 101),
(2025, 'Dialog despre fragilitate: Materia ca pretext al pulsului creativ', '2023-12-11 13:49:19', '2023-12-11 13:49:19', '                Arhitectura memoriei este o valoare metaforică subiectivă. În creația vizuală, dialogul și proximitatea nasc uneori spații de înțelegere, zone de explorare, de contaminare, de schimbare, caractere ce aparțin inovației și excelenței. \r\n\r\nRitzi și Peter Jacobi, artiști formați la Institutul de Arte Plastice „Nicolae Grigorescu” din București în anii ’60, au alcătuit un cuplu până în prima jumătate a anilor ’80. Recunoașterea internațională a acestora a venit odată cu mutarea în Germania în anii ’70, cu participări la numeroase expoziții internaționale, dintre care amintim momentul 1969 la Bienala Internațională de Tapiserie de la Lausanne, la Bienala de Artă Contemporană de la Veneția, în 1970, succedate de alte evenimente expoziționale marcante și lucrări publice în Europa și Statele Unite ale Americii. \r\n\r\nCuratorul Thomas Hirsch alcătuiește un context cu valoare retrospectivă în cadrul expoziției „Texturi ale memoriei. Cinci decenii de creație”. El aduce în spațiul expozițional lucrări comune și individuale create de cei doi artiști până în anii ’70, alături de lucrări aparte din anii ’80 – ’90, punctate de opere recente ale amândurora. Ceea ce transpare în urma unei analizări a specificității direcțiilor dezvoltate de Ritzi și Peter Jacobi este importanța perioadei de formare și definire identitară prin experiment, ce coincide etapei lor de început. Lucrările de dimensiuni monumentale, create cronologic în perioada neo-avangardei: Exotica Rosa, 1976, haute lisse, păr de capră, lână, bumbac rar, mătase; Fără titlu, 1975, păr de capră și cal, semnate în comun, Ritzi și Peter Jacobi; Fall of the Folds – Antropomorphic, 1974- 1978, marmură de Carrara, Petre Jacobi;  Osuariu, 1973-1976, marmură de Carrrara, Peter Jacobi; sau Desen moale, 1982- 1984, hârtie de orez cu hârtie sintetică, creion și creion colorat realizat de Ritzi Jacobi, alcătuiesc, de altfel, compozițional, nucleul expoziției de la Galeria Jecza. Ele aparțin unui univers în care fragilitatea fibrelor se topește până la contopire în posibilitățile deținute de fermitatea materialelor tari, specifice tridimensionalului. Autonomia monumentală atinsă în lucrările textile grație pulsiunilor volumetrice forte derivate din sculptură este completată, în contrapondere, de o abordare în care sensibilitatea, rafinamentul și fragilitatea materiei sunt explorate în esența materialelor dure, precum marmura sau metalul. Principiile structurale și contrariile feminității și masculinității, rotunjimea și fermitatea, echilibrul și dezechilibrul, tradiția și inovația, transparența și opacitatea se unesc ritualic, revelând calități nebănuite în creație. Ritzi și Peter Jacobi au contribuit, astfel, la renașterea și mutarea la un nivel superior a tradiției tapiseriei, prin abordarea experimentală a unor tehnici și materiale străvechi, a unor modalități de exprimare ancestrale care, prin scena oferită de Bienala de la Lausanne (1962-1995), avea să atingă statutul de „fiber art”. \r\n\r\nÎn progresie cronologică, spațiul galeriei îmbrățișează succesiuni de structuri verticale, coloane de metal modulare, organice sau stratificate create de sculptor în anii mai târzii, conectate într-un context spațial inspirat cu lucrări realizate în tehnică mixtă de Ritzi Jacobi în perioada picturii abstracte influențată de arta americană, în care austeritatea geometriei transformă materiale simple în suprafețe impunătoare, precum în Articulație roșie, 1995, fontă, oțel vopsit, lemn vopsit, sau în ciclul Non Folder, 1995, oțel și carton vopsit. \r\n\r\nEste de notat integrarea în expoziție a progresiei tematice prin care sculptorul folosește fotografia atât obiectual și simbolic, precum și în scopul cercetării și documentării, etapă ilustrată în expunerea ciclului foto Seria zidului de Vest/ Linia Siegfried, 1982- 1983, fotografii argentice pe hârtie Baryta. \r\n\r\nPrezența celei mai recente lucrări textile monumentale realizată de Ritzi Jacobi, Zona stelară, 2007, bumbac și fibre de nucă de cocos, în care structurile naturale împletite în volume intime, dinamice, construiesc un ansamblu impunător, subliniază un teritoriu al negocierii între sălbăticia reinventării ciclice a naturii și amploarea dimensiunii adoptată de artistă ca mod de raportare la timp și spațiu.\r\n\r\nExpoziția „Texturi ale memoriei. Cinci decenii de creație” exprimă esența definirii creației artiștilor Peter Jacobi și Ritzi Jacobi printr-un dialog văzut și nevăzut, punctat de momente ale întrepătrunderii, ale separării, ale experimentării și ale reunirii.  \r\n\r\n \r\n\r\nExpoziția a avut loc la galeria Jecza din Timișoara în perioada 15.02 – 05.05.2023.', 7, 5, 'aprobat', 101),
(2026, 'Curiosul caz al lui Mihai Barabancea', '2023-12-11 13:53:11', '2023-12-11 13:53:11', '                Fascinația față de sărăcie și suferință și frecventa exploatare ce o urmează a acestora în artă, o preocupare și năzuință (încă) a clasei de mijloc și a celei superioare, este bine documentată și cu siguranță nu ceva nou. Nesurprinzător, aceasta se manifestă cel mai clar și predominant în mediile care, cel puțin din punct de vedere istoric, au atașată în mod inerent valoarea de document, cum ar fi cele ale fotografiei sau video-ului, unde pretenția de a „capta realitatea” persistă până în prezent, adesea funcționând ca pretext. Artiștii români nu sunt străini acestui fenomen, mai ales având în vedere contextul fostului Bloc Sovietic, unde un mediu post-comunist și o tranziție ce se poate spune cu lejeritate că a eșuat au creat condiții socio-economice dezastruoase pentru o parte considerabilă a populației.\r\n\r\nÎn ultimii ani ai scenei locale, un caz insolit de astfel de exploatare artistică e dat de fotograful Mihai Barabancea, implicat de altfel în variate niveluri de scandal încă de la începutul carierei sale. Această curiozitate provine în primul rând din numărul de ocazii în care i s-a oferit o platformă, ducând în timp la repetate ofense, derapaje deontologice, comportamente exploatatoare și de-a dreptul deplorabile uneori, atât față de subiecții săi cât și față de colaboratorii săi. Este o situație particulară care necesită o privire ceva mai aprofundată, analizând practica sa fotografică în sine, abordarea utilizată în crearea acesteia și reclamațiile ce o înconjoară (atât ale artistului, cât și ale altora). Personajul său edgy a început să prindă contur, cel puțin în scena artistică, în jurul anului 2013, când auzeam din ce în ce mai des de el ca fiind un tânăr artist promițător, dar problematic, existând chiar și relatări cum că s-ar fi urcat pe acoperiș la deschiderea uneia dintre expozițiile sale, amenințând (sau glumind?) că se aruncă. Acesta e genul de povești de care va ajunge de fapt să beneficieze de-a lungul întregii sale cariere, învățând să le folosească în avantajul său și fiind probabil pe deplin conștient de cât de eficient este să instrumentalizezi transgresiunea ori de câte ori este posibil în cumplita economie a atenției de astăzi.\r\n\r\nAdevăratele sale probleme au început ulterior lansării din 2015 a cărții foto Overriding Sequence însă. O carte obiect superbă dispunând de o atenție remarcabilă la detalii, design, selecție fotografică și (după cum sugerează chiar titlul) secvențiere, nu a durat mult ca aceasta să facă furori în comunitatea fotografică. A cimentat de asemenea stilul lui Barabancea, fotografiind persoane aflate la marginea societății, asemănător cu seria Case History a lui Boris Mikhailov, dar aplicat cu grijă formatului de carte și la contextul românesc. Cu toate acestea, la puțin mai mult de un an de la lansare, a apărut o postare surprinzătoare pe blogul personal al fotografului Mugur Vărzariu – un personaj ce, în mod ironic, el însuși a creat o carieră din exploatarea frecventă a suferinței, dar în modul mai tradițional și acceptat social al fotojurnalismului simplu și fad (filmul Enjoy Poverty al lui Renzo Martens în 2008 este probabil cea mai bună explicație de până acum a modului în care funcționează fenomenul). A avut titlul incendiar de „Pornografie infantilă finanțată de stat” și și-a atins rapid obiectivul de a dobândi notorietate și de a face înconjurul internetului. Acuzațiile din titlu sunt oarecum ridicole pentru oricine are un strop de pregătire artistică, intenția pornografică în mod clar nefiind prezentă, Vărzariu alegând mai degrabă să obtureze întregul scop al cărții prin folosirea unei singure imagini din ea. Ceea ce a generat însă cu adevărat sentimente de dezamăgire în întreaga comunitate artistică a fost dezvăluirea că majoritatea fotografiilor au fost într-un fel sau altul puse în scenă, în ciuda prefaței semnate Bogdan Ghiu ce afirma contrariul, confirmând de fapt suspiciunile multora la vremea respectivă. Dezgustul s-a făcut și el simțit, devenind clar că înscenarea era adesea realizată cu un dispreț aproape total față de subiecții săi, Barabancea oferind de asemenea droguri sau bani în schimbul pozării. Inutil să mai spunem că aceste fapte au ridicat grave probleme etice și deontologice pentru proiect și artist.\r\n\r\nTrecuse ceva timp, problema părea a fi uitată și i s-a oferit o altă șansă și platformă în 2017, odată cu producția și lansarea albumului foto Sărutul – o altă carte obiect impresionantă ce se adresează și persoanelor nevăzătoare prin utilizarea lacului și a scrisului Braille. Încercând să întâmpine acuzații similare cu cele cu care s-a confruntat în 2016, Barabancea a venit cu concepte ingenioase precum „hyper-reality-hacking” și „guerilla-style photography”, asumându-și elementul de înscenare din practica sa. Acest proiect s-ar dovedi însă la rândul său problematic atunci când, încercând să-l promoveze, a lansat clipuri de making of în care era clar că procesul implica mai mult „gherilă” decât „stil”, nefiind pur și simplu înscenate fotografii, ci în fapt forțând adesea în mod agresiv situații și subiecți (la un moment dând și lovituri cu piciorul pentru a începe o luptă) până obținea cadrul pe care și-l dorea. A demonstrat așadar încă o dată un comportament deplorabil față de oamenii marginalizati pe care pretinde cu atâta vehemență că îi susține. Contrastul a fost mult prea puternic de data aceasta pentru a fi iertat prea devreme de comunitate. Următorul „scandal”, deși extrem de minor, se va dovedi o lovitură decisivă pentru o bună parte a receptării artei lui Barabancea – un pictorial publicitar creat pentru un magazin de încălțăminte deloc ieftină din București pe nume Sneaker Industry. În acesta, Barabancea a considerat de cuviință să folosească drept model un lăutar excentric, înscenând fotografii în ghetourile din jurul Bucureștiului pentru a vinde mai bine adidași originali Nike. Cu alte cuvinte, a exotizat precaritatea și o minoritate rasială frecvent discriminată (cultura lăutară este strâns legată de cea a romilor în România) pentru a face mai bine apel la obiceiurile de consum ale clasei mijlocii și superioare.\r\n\r\nCred că, pentru a înțelege mai bine repetatele ocazii ce i se oferă lui Barabancea pentru a-și expune lucrările, este important să examinăm atracția fotografiei sale și contextul artistic în care aceasta funcționează. Pentru o bună parte din comunitatea fotografică consensul e destul de clar – o operă fotografică extrem de bună, un mare păcat datorită persoanei și procesului „creativ” din spatele ei. Ce aș argumenta însă e că respectiva operă n-ar fi posibilă fără abordarea problematică a lui Barabancea în crearea ei, pierzându-și altfel alura. În peisajul artistic românesc nu mai există o astfel de perspectivă asupra marginilor societății umane, asupra oamenilor și comunităților uitate de „lumea civilizată”. Virginia Lupu realizeaza imagini impresionante, lucrând cu aceste comunități prin intermediul fotografiei într-o manieră aparent similară. Însă la o privire mai atentă este clar că în timp ce proiectele ei denotă căldură, comuniune și sprijin pentru persoanele implicate în ele, cele ale lui Barabancea denotă agitație, murdărie, violență, abuz atât de substanțe, cât și de oameni (ocazional este prezentă și o tandrețe stranie, predominant în Sărutul). Cu alte cuvinte, în timp ce unul reprezintă o grijă autentică față de subiecții fotografiați, celălalt este dedicat creării de tensiuni și scoaterii la suprafață a durerii resimțite zi de zi de către cei excluși în mod tradițional de către societate. Dezvăluie mizeria ce știm că înflorește lângă noi, dar pe care evităm în mod activ să o percepem, cu excepția unor forme controlate / sigure ca albumele foto sau expozițiile.\r\n\r\nDin păcate, Barabancea reușește atât de eficient acest lucru prin utilizarea specifică a forțelor agresive și prin crearea de situații problematice în acest proces. Acesta este ingredientul secret al impactului imaginilor sale, generând atât de multe emoții neliniștitoare. Elemente precum violența, suferința și abuzul sunt întotdeauna gata să iasă din cadru, tocmai pentru că sunt inerente practicii sale. Ne dezvăluie în mod ingenios o lume ascunsă, dar poate face acest lucru doar cu prețul extrem de ridicat al manifestării unui comportament ignorant și uneori condamnabil față de subiecții săi, înfrângând astfel ceea ce ar trebui să fie chiar scopul operei sale. Nu pot înțelege de ce, după repetetate eșuări în a folosi o abordare atentă adecvată, refuză în continuare să înțeleagă dimensiunile etice ale fotografiei sale, alegând în schimb să fie insensibil la necesara responsabilitate asumată de un artist ce lucrează cu ființe umane vulnerabile. Este greu să se scape de sentimentul că oamenii marginalizați și condițiile lor sunt mai degrabă o resursă pentru el, extragând misery-porn oriunde vede un potențial pentru acesta.\r\n\r\nLa începutul anului 2022 a lansat un video de o oră pentru a-și promova cea mai recentă carte, Falling on Blades. În acesta amestecă la un moment dat scuze pentru comportamentul său din trecut. Nu formulează totuși vreo recunoaștere clară a vinei și nici nu dă semne că ar înțelege cu adevărat ce a greșit, recurgând în schimb la whataboutism și la opacizarea faptelor, tipice de altfel pentru epoca post-adevărului. Nu-i nevoie să menționăm că s-a dovedit a fi neconvingător, cel puțin pentru comunitatea artistică românească, încă rămânând neclar dacă publicul său internațional este cu adevărat inconștient de problemele ce îl înconjoară sau doar e convenabil fie ignorate. Nu se știe ce pregătește în continuare, pe cine va reuși să convingă să expună fotografiile sale, dacă va reuși vreodată să-și ispășească în mod semnificativ păcatele sau, chiar mai mult, să le înțeleagă. Rămâne de văzut, dar suspectez că lucrurile vor lua mai degrabă o întorsătură în rău decât în bine.\r\n\r\n \r\n\r\nArticol publicat în Revista Arta #58-59 în 2022, în cadrul dosarului tematic Scadalogie, coordonat de Valentina Iancu.', 7, 5, 'asteptare', 101);

-- --------------------------------------------------------

--
-- Table structure for table `categorie`
--

CREATE TABLE `categorie` (
  `id_categorie` int(4) NOT NULL,
  `nume_categorie` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `categorie`
--

INSERT INTO `categorie` (`id_categorie`, `nume_categorie`) VALUES
(101, 'arta'),
(102, 'tehnica'),
(103, 'stiinta'),
(104, 'moda');

-- --------------------------------------------------------

--
-- Table structure for table `comentariu`
--

CREATE TABLE `comentariu` (
  `id_comentariu` varchar(5) NOT NULL,
  `titlu` varchar(100) NOT NULL,
  `continut_comentariu` varchar(300) NOT NULL,
  `data_adaugarii` datetime NOT NULL,
  `id_articol` int(5) NOT NULL,
  `id_user` int(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `comentariu`
--

INSERT INTO `comentariu` (`id_comentariu`, `titlu`, `continut_comentariu`, `data_adaugarii`, `id_articol`, `id_user`) VALUES
('CMT1', 'Felicitari', 'Informatiile oferite sunt de un interes deosebit.', '2023-11-22 00:00:00', 2008, 4),
('CMT2', 'Informatie limitata', 'Din pacate, articolul prezinta un numar mic de informatii. Reveniti asupra lui.', '2023-10-23 00:00:00', 2002, 5),
('CMT3', 'Unul dintre cele mai bune articole', 'Am ramas impresionat de modul in care a fost redactat anuntul cat si de continutul sau.', '2023-11-22 00:00:00', 2007, 10),
('CMT4', 'Modificare', 'Mi-a facut placere sa revizuiesc acest articol, modificarile facute fiind doar in scop estetic.', '2023-11-20 00:00:00', 2001, 5);

-- --------------------------------------------------------

--
-- Table structure for table `rol`
--

CREATE TABLE `rol` (
  `id_rol` varchar(5) NOT NULL,
  `denumire_rol` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `rol`
--

INSERT INTO `rol` (`id_rol`, `denumire_rol`) VALUES
('A01', 'admin'),
('C01', 'cititor'),
('E01', 'editor'),
('J01', 'jurnalist');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(6) NOT NULL,
  `nume` varchar(30) NOT NULL,
  `prenume` varchar(30) NOT NULL,
  `username` varchar(40) NOT NULL,
  `parola` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `id_rol` varchar(5) NOT NULL,
  `id_categorie` int(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `nume`, `prenume`, `username`, `parola`, `email`, `id_rol`, `id_categorie`) VALUES
(1, 'Popescu', 'Ana', 'PopescuA', 'Ana1234@!', 'ana@gmail.com', 'A01', NULL),
(2, 'Dumitrescu', 'Ion', 'Ionica', 'Parola33', 'ion@yahoo.com', 'C01', NULL),
(3, 'Avram', 'Amelia', 'AmyyA', 'LaptopA2', 'amy@gmail.com', 'J01', 104),
(4, 'Mateias', 'Radu', 'RaduMateias', 'MatRadu3', 'radu@gmail.com', 'E01', NULL),
(5, 'Bondor', 'Laura', 'BLaura', 'cand5', 'laura@yahoo.com', 'E01', NULL),
(6, 'Mihalescu', 'Maria', 'Maria1', 'MouseM8', 'maria@yahoo.com', 'C01', NULL),
(7, 'Irimovici', 'Mihai', 'Imihai', 'Mihai89@', 'mihai@gmail.com', 'J01', 101),
(8, 'Juravle', 'Alex', 'AAlex', 'Tel021?', 'alex@gmail.com', 'J01', 102),
(9, 'Popescu', 'Ilie', 'IlieP', 'cand', 'ilie@yahoo.com', 'J01', 103),
(10, 'Badelita', 'Viorel', 'Viorel', 'ghTy009', 'viorel@gmail.com', 'E01', NULL),
(11, 'Avram', 'Ioana', 'IoanaA', 'Scara92?', 'ioana@gmail.com', 'J01', 102),
(12, 'Pop', 'Iulian', 'IuliPop', 'Gdmo1232', 'iulian@yahoo.com', 'J01', 101),
(13, 'Alina', 'Vasilw', 'aavas', 'cand', 'aaa@gmail.com', '', NULL),
(14, 'Alina', 'Vasilw', 'alins', 'cand', 'aakj@gmail.com', 'C01', NULL),
(15, 'Beatrice', 'Movila', 'be.mov', 'Maria', 'bea@yahoo.com', 'J01', NULL),
(16, 'Maria', 'Gen', 'mariag', 'cand', 'mariag@yahoo.com', 'C01', NULL),
(17, 'Alina', 'Gen', 'Alina', 'cand', 'alina@gmail.com', 'C01', NULL),
(18, 'Anemona', 'Mero', 'anem', 'cand', 'anem@gmail.com', 'C01', NULL),
(19, 'Movila', 'Gen', 'mo.gen', 'cand', 'mogen@yahoo.com', 'J01', 102),
(20, 'Movila', 'Gen', 'mo.gen2', 'cand', 'mogen2@yahoo.com', 'J01', 103),
(21, 'Alina', 'Motoc', 'almo', 'cand', 'moco@gmail.com', 'J01', 104),
(22, 'Maria', 'Motoc', 'almoma', 'cand', 'mamoco@gmail.com', 'C01', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `articol`
--
ALTER TABLE `articol`
  ADD PRIMARY KEY (`id_articol`);

--
-- Indexes for table `categorie`
--
ALTER TABLE `categorie`
  ADD PRIMARY KEY (`id_categorie`);

--
-- Indexes for table `comentariu`
--
ALTER TABLE `comentariu`
  ADD PRIMARY KEY (`id_comentariu`);

--
-- Indexes for table `rol`
--
ALTER TABLE `rol`
  ADD PRIMARY KEY (`id_rol`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `articol`
--
ALTER TABLE `articol`
  MODIFY `id_articol` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2027;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
