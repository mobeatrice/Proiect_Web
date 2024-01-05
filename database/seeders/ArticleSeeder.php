<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Article;

class ArticleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $articles = [
            [
                'titlu' => 'Efectele artistice ale lui Degas',
                'data_creare' => '2023-11-12',
                'data_modificare' => '2023-11-20',
                'continut_articol' => 'Pictura lui Edgar Degas are o virtute incontestabila: aceea de a surprinde viata reala in scene populate de oameni in miscare, cum ar fi dansatorii pe o scena, cursele de cai sau scene ale societatii pariziene care se bucura de un moment placut in numeroasele cafenele care inunda capitala Frantei. Una dintre cele mai remarcabile lucrari ale lui Degas este Tatal lui Degas ascultandu-l pe Lorenzo Pagans, 1869, un tablou care recreeaza una dintre serile muzicale organizate de tatal artistului.',
                'autor' => 12,
                'editor' => 5,
                'status' => 'aprobat',
                'id_categorie' => 101
            ],
            [
                'titlu' => 'Senzatiile tari, sub control perfect',
                'data_creare' => '2023-10-23',
                'data_modificare' => NULL,
                'continut_articol' => 'Fritt Fall a fost una dintre atractiile majore ale parcului tematic Grona Lund din Stockholm de peste 20 de ani. Pentru a se asigura ca nu se intampla nimic in timpul unei caderi libere de la o inaltime de 80 de metri, intregul sistem de control a fost inlocuit recent, folosind cabluri LAPP.',
                'autor' => 8,
                'editor' => 5,
                'status' => 'refuzat',
                'id_categorie' => 102
            ],
            [
                'titlu' => 'Glamour Women of the Year 2023',
                'data_creare' => '2023-11-10',
                'data_modificare' => '2023-11-29',
                'continut_articol' => 'Premiile Glamour Women of The Year s-au desfasurat pe 7 noiembrie in Manhattan. O seara plina de emotii, moda si lacrimi de bucurie. Inainte de a-si primi trofeele, vedetele au pasit pe covorul rosu unde s-au bucurat de toata atentia fotografilor. Selma Blair, Millie Bobby Brown, America Ferrera si Kat Graham sunt doar o parte din femeile celebre care au impresionat cu tinutele lor la gala Glamour.',
                'autor' => 3,
                'editor' => 10,
                'status' => 'aprobat',
                'id_categorie' => 104
            ],
            [
                'titlu' => 'Transmiterea datelor in sisteme de lanturi port cablu',
                'data_creare' => '2023-11-22',
                'data_modificare' => NULL,
                'continut_articol' => 'Utilajele de mare productivitate, au devenit prezente comune in peisajul industrial. Prelucrarile in doua sau mai multe coordonate au impus utilizarea pe scara larga a sistemelor de lanturi port cablu care ghideaza si protejeaza cablurile super flexibile destinate alimentarii cu energie electrica si transmiterii datelor. Automatizarea tot mai ridicata a masinariilor industriale conduce la necesitatea transmiterii unor volume mai mari de date in conditii de zgomot electromagnetic crescut.',
                'autor' => 8,
                'editor' => 5,
                'status' => 'aprobat',
                'id_categorie' => 102
            ],
            [
                'titlu' => 'Gustav Klimt, artistul care picta cu aur',
                'data_creare' => '2023-10-14',
                'data_modificare' => NULL,
                'continut_articol' => 'Artistul austriac Gustav Klimt nu a fost doar unul dintre reprezentantii de frunte ai artei vieneze de la sfarsitul secolului al XIX-lea, ci si unul dintre fondatorii miscarii artistice cunoscute drept Secesiunea vieneza. Mereu surprinzatoare, picturile lui Klimt, maestru al aurului, vor deveni in cele din urma unele dintre cele mai cautate lucrari in casele de licitatii din intreaga lume.',
                'autor' => 7,
                'editor' => 4,
                'status' => 'draft',
                'id_categorie' => 101
            ],
            [
                'titlu' => 'Tricotajele sunt cele mai inspirate alegeri vestimentare pentru perioada in care ne aflam',
                'data_creare' => '2023-11-28',
                'data_modificare' => NULL,
                'continut_articol' => 'Cine a spus ca iarna nu este un sezon placut pentru iubitoarele de moda? Fie ca adori rochiile care iti urmeaza linia corpului, fie ca preferi un pulover cozy sau un cardigan feminin, poti opta oricand pentru tricotaje chic. Acestea te ajuta sa te simti seducatoare, fara sa renunti la caldura si la confort.',
                'autor' => 3,
                'editor' => 5,
                'status' => 'aprobat',
                'id_categorie' => 104
            ],
            [
                'titlu' => 'Ce ramane dupa explozia unei stele masive',
                'data_creare' => '2023-11-22',
                'data_modificare' => NULL,
                'continut_articol' => 'Urmarile mortii explozive a unei stele masive au fost surprinse intr-o imagine publicata de European Southern Observatory. Imaginea tulburatoare infatiseaza nori de gaz care, prin filtrele folosite de astronomi, arata asemenea unor tentacule roz si portocalii care se intind pe o suprafata de circa 600 de ori mai mare decat sistemul nostru solar.',
                'autor' => 9,
                'editor' => 10,
                'status' => 'aprobat',
                'id_categorie' => 103
            ],
            [
                'titlu' => 'Cum suna o gaura neagra',
                'data_creare' => '2023-10-18',
                'data_modificare' => '2023-11-22',
                'continut_articol' => 'Gaura neagra din centrul roiului de galaxii Perseus a fost asociata cu un sunet inca din 2003. Astronomii au descoperit ca valurile de presiune emise de gaura neagra provocau unde in gazul fierbinte al roiului care puteau fi traduse intr-o nota muzicala pe care oamenii nu o pot auzi intrucat este cu 57 de octave sub nota do. Sunetul este editat astfel incat sa poata fi receptat de simtul nostru auditiv.',
                'autor' => 9,
                'editor' => 4,
                'status' => 'aprobat',
                'id_categorie' => 103
            ],
            [
                'titlu' => 'Automatizarea industriala cu roboti SCARA',
                'data_creare' => '2023-10-20',
                'data_modificare' => NULL,
                'continut_articol' => 'Mitsubishi Electric este un brand bine cunoscut care ofera de multi ani solutii de automatizare pentru diverse industrii. Printre cele mai populare produse s-a mentinut in ultimii ani robotul SCARA. SCARA este acronimul de la Selective Compliance Assembly Robot Arm (brat robotic de asamblare cu complianta selectiva). Acest tip de robot permite miscari precise si repetabile in plan orizontal.',
                'autor' => 11,
                'editor' => 10,
                'status' => 'refuzat',
                'id_categorie' => 102
            ],
            [
                'titlu' => 'Thomas Schweicker, caligraful fara maini care scria cu picioarele',
                'data_creare' => '2023-10-29',
                'data_modificare' => NULL,
                'continut_articol' => 'Schweicker avea un talent deosebit pentru pictura si caligrafie si a devenit in scurt timp expert in redactarea de documente elaborate. La scoala latina avea propria lui masa cu sertar cu cheie, unde isi pastra uneltele de scris. Si-a dezvoltat abilitatile de caligraf intr-o asemenea masura, incat nu numai ca si-a putut castiga existenta de pe urma lor, dar a devenit si o celebritate. Vestea talentului si a tehnicii sale neobisnuite s-a raspandit rapid in intreaga tara.',
                'autor' => 7,
                'editor' => 4,
                'status' => 'aprobat',
                'id_categorie' => 101
            ]
        ];

        foreach ($articles as $key => $value) {
            Article::create($value);
        }
    }
}
