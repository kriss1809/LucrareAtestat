<?php
    session_start();
    $pagina = "personaje";

    $limba = "ro";
    if(isset($_SESSION['limba']))
        $limba = $_SESSION['limba'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="shortcut icon" href="imagini/a.png">
    <title>Agatha Christie</title>
    <style>

    .header{
        position: relative;
    }
    .text {
        position: absolute;
        top: 75px;
        right: 100px;
        color: white;
    }
    body {
        background-color: MistyRose; 
    }

    body{
        min-height:1000px;
    }

    .footer {
        padding: 8px;
        left: 0;
        bottom: 0;
        width: 100%;
        background-image: linear-gradient(to right, mistyrose , black,  mistyrose);
        color: white;
        text-align: center;
    }

    h3{
        text-align: center;
        font-family: cambria;
    }


    </style>
</head>
<body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <div>
        <?php
            include "module/navigare.php";
        ?>
    </div>

    <?php
        if(isset($limba) && $limba==="ro")
        {
            $a1="Prima carte publicată de Christie, The Mysterious Affair at Styles, a fost lansată în 1920 și l-a introdus publicului pe detectivul <strong>Hercule Poirot</strong>, care a apărut în 33 dintre romanele sale și în peste 50 de nuvele. <strong> Miss Jane Marple</strong> a fost introdusă într-o serie de povestiri scurte care au început să fie publicate în decembrie 1927 şi au fost ulterior adunate sub titlul Cele treisprezece probleme. Marple era o femeie bătrână, rafinată, care rezolva crimele folosind analogii cu viaţa satului englez." ;
            $a2="Christie nu a scris niciodată un roman sau o nuvelă care să-i prezinte atât pe Poirot, cât și pe Miss Marple.  Într-o înregistrare descoperită și lansată în 2008, Christie a dezvăluit motivul pentru aceasta: „Hercule Poirot, un egoist complet, nu și-ar dori să fie învățat afaceri sau să primească sugestii de la o doamnă în vârstă necăsătorită. Hercule Poirot – un detectiv profesionist – nu ar fi deloc acasă în lumea Miss Marple.\"";
            $a3="Pe lângă Poirot și Marple, Christie a creat și detectivii amatori <strong>Thomas Beresford</strong> și soția sa, <strong>Prudence \"Tuppence\"</strong> născută Cowley, care apar în patru romane și o colecție de povestiri publicate între 1922 și 1974. Spre deosebire de ceilalți detectivi ai ei, soții Beresford aveau doar douăzeci de ani când au fost introduși în „The Secret Adversary” și li s-a permis să îmbătrânească alături de creatoarea lor. Ultima lor aventură, „Postern of Fate”, a fost ultimul roman al lui Christie.";
            $a4="<strong>Harley Quin</strong> a fost „cel mai neortodox” dintre detectivii Agathei Christie. Inspirat de afecțiunea lui Christie pentru figurile din Harlequinade, semi-supranaturalul Quin lucrează întotdeauna cu o persoană în vârstă, convențională, un bărbat pe nume Satterthwaite. Perechea apare în 14 povestiri, dintre care 12 au fost adunate în 1930 sub numele de Misteriosul domn Quin.  Mallowan a descris aceste povești ca „detecție într-un mod fantezist, atingând povestea cu zâne, un produs natural al Agathei”.  Satterthwaite apare, de asemenea, într-un roman, „Tragedie în trei acte” și într-o nuvelă, „Misterul Crimelor Înlănțuite”, ambele avându-l pe Poirot.";
            $a5="Un alt dintre personajele ei mai puțin cunoscute este <strong>Parker Pyne</strong>, un funcționar public pensionar care ajută oamenii nefericiți într-o manieră neconvențională. Cele 12 nuvele care l-au prezentat, Parker Pyne Investigates (1934), sunt amintite cel mai bine pentru „Cazul soldatului nemulțumit”, care o prezintă pe Ariadne Oliver, „un autoportret amuzant și satiric al Agathei Christie”. În deceniile care au urmat, Oliver a reapărut în șapte romane. În cele mai multe dintre ele ea îl ajută pe Poirot.";
            $p1="Hercule Poirot: detectivul privat belgian cu mustață, de renume mondial, neîntrecut în inteligența și înțelegerea minții criminale, respectat și admirat de forțele de poliție și de șefii de stat de pe tot globul. De la apariția sa, acum peste 100 de ani, Poirot a furat inimile și mințile publicului din Azerbaidjan până în Vietnam, iar cazurile sale celebre au fost înregistrate în 33 de romane și peste 50 de povestiri.";
            $p2="Prietenul lui Poirot, Hastings, ne creează o imagine despre Poirot în prima carte, „Misterioasa Afacere de la Styles”, unde suntem informați că „flerul lui Poirot a fost extraordinar”. Căutând indicii, Poirot folosește psihologia și cunoștințele sale extinse despre natura umană pentru a găsi criminalii. Bineînțeles, va ține cont de dovezile fizice, dar de cele mai multe ori combinația lui de ordine, metodă și micile sale celule cenușii face toată treaba. Cazurile lui Poirot sunt invariabil încheiate cu un deznodământ tipic, dramatic, satisfacându-și propriul ego și confirmând tuturor că el este cu adevărat „cea mai mare minte din Europa.”";
            $m1="Miss Jane Marple nu seamănă cu un detectiv obișnuit. De fapt, nu arată deloc ca un detectiv. Dar aspectul poate fi înșelător... Pentru o femeie care și-a petrecut viața în micul sat St Mary Mead, Miss Marple este surprinzător de lumească. Dar, așa cum subliniază adesea, ea a avut toate oportunitățile de a observa natura umană.";
            $m2="Miss Marple a apărut pentru prima dată în 1927 în „The Tuesday Night Club”, o nuvelă regrupată în colecția „13 Probleme”. A fost publicată pentru prima dată în numărul din decembrie 1927 al revistei Royal Magazine. Christie nu se aștepta niciodată ca Miss Marple să rivalizeze cu Poirot în afecțiunea publicului, dar de la publicarea romanului „Crimă la Vicariat” în 1930, primul roman de lungă durată al lui Marple, cititorii au fost cuceriți. În timp ce Agatha Christie a recunoscut că bunica ei a avut o influență imensă asupra personajului, ea scrie că Miss Marple a fost „mult mai mofturoasă decât a fost vreodată bunica mea. Dar un lucru pe care îl avea în comun cu ea – deși era o persoană veselă, se aștepta întotdeauna la ce e mai rău de la toată lumea și de la toate și, cu o acuratețe aproape înspăimântătoare, se dovedea că de obicei avea dreptate.\" Miss Marple a onorat douăsprezece romane și douăzeci de nuvele de-a lungul carierei sale de detectiv amator, niciodată plătită și nu întotdeauna mulțumită.";
            $t1="Spioni internaționali, două războaie mondiale, crime, furturi și ca să nu mai vorbim de căsătorie, Tommy și Tuppence caută entuziasm oriunde s-ar afla. Tuppence este în frunte cu natura ei carismatică, în timp ce maniera lentă și considerată a lui Tommy oferă suportul perfect. Împreună formează „Young Adventurers Ltd” și aventurile încep.";
            $t2="Poveștile lor au fost cele pe care Agatha Christie i-a plăcut cel mai mult să le scrie; îi făcea o adevărată plăcere să scrie despre tinerii ei strălucitori și sunt singurii detectivi din cărțile Agathei Christie care îmbătrânesc cu fiecare poveste, ținând pasul aproximativ cu Christie însăși. Aventurile lor îi poartă prin patru romane și o colecție de nuvele, căsătorindu-se la sfârșitul primei cărți, „Adversarul secret”, și urmând să aibă trei copii: gemenii Derek și Deborah și o fiică adoptată pe nume Betty.";
        }
        if(isset($limba) && $limba==="eng")
        {
            $a1="Christie's first published book, The Mysterious Affair at Styles, was released in 1920 and introduced the detective <strong>Hercule Poirot</strong>, who appeared in 33 of her novels and more than 50 short stories. <strong>Miss Jane Marple</strong> was introduced in a series of short stories that began publication in December 1927 and were subsequently collected under the title The Thirteen Problems. Marple was a genteel, elderly spinster who solved crimes using analogies to English village life.";
            $a2="Christie never wrote a novel or short story featuring both Poirot and Miss Marple.  In a recording discovered and released in 2008, Christie revealed the reason for this: \"Hercule Poirot, a complete egoist, would not like being taught his business or having suggestions made to him by an elderly spinster lady. Hercule Poirot – a professional sleuth – would not be at home at all in Miss Marple's world.\"";
            $a3="In addition to Poirot and Marple, Christie also created amateur detectives <strong>Thomas Beresford</strong> and his wife, <strong>Prudence \"Tuppence\"</strong> née Cowley, who appear in four novels and one collection of short stories published between 1922 and 1974. Unlike her other sleuths, the Beresfords were only in their early twenties when introduced in The Secret Adversary, and were allowed to age alongside their creator. She treated their stories with a lighter touch, giving them a \"dash and verve\" which was not universally admired by critics. Their last adventure, Postern of Fate, was Christie's last novel.";
            $a4="<strong>Harley Quin</strong> was \"easily the most unorthodox\" of Christie's fictional detectives. Inspired by Christie's affection for the figures from the Harlequinade, the semi-supernatural Quin always works with an elderly, conventional man called Satterthwaite. The pair appear in 14 short stories, 12 of which were collected in 1930 as The Mysterious Mr. Quin.  Mallowan described these tales as \"detection in a fanciful vein, touching on the fairy story, a natural product of Agatha's peculiar imagination\".  Satterthwaite also appears in a novel, Three Act Tragedy, and a short story, \"Dead Man's Mirror\", both of which feature Poirot.";
            $a5="Another of her lesser-known characters is <strong>Parker Pyne</strong>, a retired civil servant who assists unhappy people in an unconventional manner. The 12 short stories which introduced him, Parker Pyne Investigates (1934), are best remembered for \"The Case of the Discontented Soldier\", which features Ariadne Oliver, \"an amusing and satirical self-portrait of Agatha Christie\". Over the ensuing decades, Oliver reappeared in seven novels. In most of them she assists Poirot.";
            $p1="Hercule Poirot: the world-renowned, moustachioed Belgian private detective, unsurpassed in his intelligence and understanding of the criminal mind, respected and admired by police forces and heads of state across the globe. Since his inception over 100 years ago, Poirot has stolen the hearts and minds of audiences from Azerbaijan to Vietnam, and his celebrated cases have been recorded across 33 original novels and over 50 short stories.";
            $p2="Poirot’s friend Hastings puts us straight in the picture in their first book, The Mysterious Affair at Styles, where we’re informed that “as a detective, Poirot’s flair had been extraordinary”. While some detectives scrabble around on the floor searching for clues, Poirot uses psychology and his extensive knowledge of human nature to weed out the criminals. He will of course take physical evidence into account, but more often than not his combination of order, method and his little grey cells does the trick. Poirot’s cases are invariably finished with a typical, dramatic denouement, satisfying his own ego and confirming to all that he is truly `the greatest mind in Europe.`";
            $m1="Miss Jane Marple doesn’t look like your average detective. Quite frankly, she doesn’t look like a detective at all. But looks can be deceiving... For a woman who has spent her life in the small village of St Mary Mead, Miss Marple is surprisingly worldly. But as she often points out she has had every opportunity to observe human nature.";
            $m2="Miss Marple first came into being in 1927 in The Tuesday Night Club, a short story pulled together into the collection The Thirteen Problems. It was first published in the December 1927 issue of Royal Magazine. Christie never expected Miss Marple to rival Poirot in the public’s affections but since the publication of The Murder at the Vicarage in 1930, Marple's first full length novel, readers were hooked. While Agatha Christie acknowledged that her grandmother had been a huge influence on the character, she writes that Miss Marple was \"far more fussy and spinsterish than my grandmother ever was. But one thing she did have in common with her – though a cheerful person, she always expected the worst of everyone and everything, and was, with almost frightening accuracy, usually proved right.\" Mellowing with appearances (if not with age) Miss Marple graced twelve novels and twenty short stories during her career as an amateur detective, never paid and not always thanked. ";
            $t1="International spies, two world wars, murders, thefts and not to mention marriage, Tommy and Tuppence seek out excitement wherever it may lie. Tuppence leads the way with her charismatic nature, while Tommy’s slow, considered manner provides the perfect foil. Together they form the 'Young Adventurers Ltd' and the adventures begin.";
            $t2="Their stories were the ones Agatha Christie enjoyed writing the most; she took real pleasure from her bright young things, and they are the only detectives in Agatha Christie’s arsenal to age with each story, keeping approximate pace with Christie herself. Their adventures take them through four novels and a short story collection, marrying at the end of the first book, The Secret Adversary, and going on to have three children: twins Derek and Deborah, and an adopted daughter called Betty.";
        }
        if(isset($limba) && $limba==="fr")
        {
            $a1 = "Le premier livre publié de Christie, The Mysterious Affair at Styles, est sorti en 1920 et a présenté le détective Hercule Poirot au public, apparaissant dans 33 de ses romans et plus de 50 nouvelles. <strong> Miss Jane Marple </strong> a été présentée à une série de nouvelles qui a commencé à être publiée en décembre 1927 et plus tard rassemblée sous le titre The Thirteen Issues. Marple était une vieille femme raffinée qui résout les crimes en utilisant des analogies avec la vie du village anglais. " ;
            $a2 = "Christie n'a jamais écrit de roman ou de nouvelle sur Poirot et Miss Marple. Dans un enregistrement découvert et publié en 2008, Christie en a révélé la raison :\"Hercule Poirot, un homme complètement égoïste, il ne voudrait pas être enseigné les affaires ou recevoir des suggestions d'une femme célibataire. Hercule Poirot - un détective professionnel - ne serait pas du tout à l'aise dans le monde de Miss Marple. ";
            $a3 = "En plus de Poirot et Marple, Christie a également créé des détectives amateurs <strong> Thomas Beresford </strong> et sa femme, <strong> Prudence \" Tuppence \"</strong> née Cowley, qui apparaissent dans quatre romans et un recueil de nouvelles publiées entre 1922 et 1974. Contrairement à ses autres détectives, les Beresford n'avaient que vingt ans lorsqu'ils ont été présentés à The Secret Adversary, et ils ont été autorisés à vieillir avec leur créateur. Leur dernière aventure, \"Postern of Fate\", était le dernier roman de Christie.";
            $a4 = "<strong> Harley Quin </strong> était\" le moins orthodoxe \"des détectives d'Agatha Christie. Inspiré par le penchant de Christie pour les personnages d'Arlequinade, le Quin semi-surnaturel travaille toujours avec un plus ancien, conventionnel, La paire apparaît dans 14 histoires, dont 12 ont été recueillies en 1930 sous le nom de Mysterious Mr. Quin, et Mallowan a décrit l'histoire comme \"une détection fantastique, touchant le conte de fées, un produit naturel d'Agatha. Satterthwaite apparaît également dans un roman, Tragedy in Three Acts, et dans une nouvelle, The Mystery of Chained Crimes, qui présentent tous deux Poirot.";
            $a5 = "Un autre de ses personnages moins connus est <strong> Parker Pyne </strong>, un fonctionnaire à la retraite qui aide les malheureux de manière non conventionnelle. Les 12 nouvelles qui l'ont présenté, Parker Pyne Investigates ( 1934), sont surtout connus pour \"Le cas du soldat mécontent\", qui dépeint Ariadne Oliver, \"un autoportrait drôle et satirique d'Agatha Christie.\" Dans les décennies qui ont suivi, Oliver est réapparu dans sept romans. Parmi eux, elle aide Poirot." ;
            $p1 = "Hercule Poirot : détective privé belge à moustache de renommée mondiale, inégalé dans l'intelligence et la compréhension de l'esprit criminel, respecté et admiré par les forces de police et les chefs d'État du monde entier. Depuis son apparition, maintenant plus de 100 ans, Poirot a volé le cœur et l'esprit du public de l'Azerbaïdjan au Vietnam, et ses cas célèbres ont été enregistrés dans 33 romans et plus de 50 histoires. ";
            $p2 = "L'ami de Poirot, Hastings, crée une image de Poirot dans son premier livre, The Mysterious Affair of Styles, où l'on nous dit que „le flair de Poirot était extraordinaire”. À la recherche d'indices, Poirot utilise sa psychologie et ses connaissances. Bien sûr, il tiendra compte des preuves physiques, mais la plupart du temps, sa combinaison d'ordre, de méthode et de ses petites cellules grises fait tout le travail. Les cas de Poirot se terminent invariablement par un résultat typique. qu'il est vraiment „le plus grand esprit d'Europe”.";
            $m1 = "Miss Jane Marple ne ressemble pas à une détective ordinaire. En fait, elle ne ressemble pas du tout à une détective. Mais cela peut être trompeur... c'est étonnamment banal. Mais, comme elle le fait souvent remarquer, elle a eu toutes les occasions d'observer la nature humaine.";
            $m2 = "Miss Marple est apparue pour la première fois en 1927 dans „The Tuesday Night Club”, une nouvelle de la collection „13 Problems”. Elle a été publiée pour la première fois dans le numéro de décembre 1927 du Royal Magazine. Agatha ne s'attendait jamais que Miss Marple rivalise avec Poirot dans le l'attention du public, mais depuis la publication du roman „L'Affaire Protheroe” en 1930, le premier roman de Marple, les lecteurs ont été captivés. Sa grand-mère a eu une énorme influence sur le personnage, Agatha écrit que Miss Marple était „beaucoup plus capricieuse que ma grand-mère”. Était le pire de tous, et avec une précision presque effrayante, il s'est avéré qu'elle avait généralement raison. Miss Marple a honoré douze romans et vingt nouvelles tout au long de sa carrière de détective amateur, jamais payée et pas toujours satisfaite.";
            $t1 = "Espions internationaux, deux guerres mondiales, meurtres, vols et sans oublier le mariage, Tommy et Tuppence recherchent l'enthousiasme où qu'ils soient. Tuppence est à l'avant-garde de sa nature charismatique, tandis que Tommy, lent et prévenant, lui apporte un soutien parfait. Ensemble, ils forment „Young Adventurers Ltd” et les aventures commencent.";
            $t2 = "Leurs histoires étaient celles qu'Agatha Christie aimait le plus écrire; elle aimait vraiment écrire sur ses brillants jeunes gens et ce sont les seuls détectives dans les livres d'Agatha Christie qui vieillissent à chaque histoire, se suivant les uns les autres. Leurs aventures les emmènent à travers quatre romans et un recueil de nouvelles, se mariant à la fin du premier livre, „L'Adversaire secret”, et ayant trois enfants: les jumeaux Derek et Deborah et une fille adoptive nommée Betty." ;
        }
        if(isset($limba) && $limba==="es")
        {
            $a1 = "El primer libro publicado de Christie, The Mysterious Affair at Styles, fue lanzado en 1920 y presentó al detective <strong> Hercule Poirot</strong> al público, apareciendo en 33 novelas y más de 50 cuentos. <strong> Miss Jane Marple </strong> se presentó en una serie de cuentos que comenzaron a publicarse en diciembre de 1927 y luego se compilaron bajo el título The Thirteen Problems. Marple era una anciana refinada que resuelve crímenes utilizando analogías de la vida en el pueblo inglés.";
            $a2 = "Christie nunca escribió una novela o un cuento en el cual aparezca tanto Poirot como Miss Marple. En una grabación descubierta y lanzada en 2008, Christie reveló la razón de esto: \"Hércules Poirot, un hombre completamente egoísta, no querría aprender de negocios o recibir sugerencias de una dama soltera. Hércules Poirot, un detective profesional, no se sentiria en casa en el mundo de Miss Marple en absoluto.";
            $a3 = "Además de Poirot y Marple, Christie también creó a los detectives aficionados <strong> Thomas Beresford </strong> y su esposa, <strong> Prudence \"Tuppence\"</strong> nacida Cowley, que aparecen en cuatro novelas y una colección de cuentos publicados entre 1922 y 1974. A diferencia de sus otros detectives, los Beresford tenían solo veinte años cuando les presentaron en \"The Secret Adversary\", y se les permitió envejecer junto a su creadora. Su ultima aventura \"Postern of Fate\", fue la última novela de Christie.";
            $a4 = "<strong> Harley Quin </strong> fue \"el menos ortodoxo\"de los detectives de Agatha Christie. Inspirado en la afición de Christie por las figuras de Harlequinade, el semi-sobrenatural Quin siempre trabaja con una persona mayor convencional, un señor de nombre Satterthwaite. La pareja aparece en 14 cuentos, 12 de las cuales fueron recopiladas en 1930 bajo el nombre de \"Mysterious Mr. Quin\. Mallowan describió estos cuentos como \"una detección fantástica, tocando el cuento de hadas, un producto natural de Agatha\". Satterthwaite también aparece en una novela, \"Tragedy in Three Acts\", y en un cuento, \"The Mystery of Chained Crimes\", ambos teniendo a Poirot.";
            $a5 = "Otro de sus personajes menos conocidos es <strong> Parker Pyne </strong>, un funcionario jubilado que ayuda a personas infelices de una manera poco convencional. Los 12 cuentos en los cuales aparece, Parker Pyne Investigates (1934), son recordados por \"El caso del soldado descontento\", en el cual es presentada  Ariadne Oliver, \"un autorretrato divertido y satírico de Agatha Christie\". En las décadas siguientes, Oliver reapareció en siete novelas, donde en la mayoria ayuda a Poirot.";
            $p1 = "Hércule Poirot: el detective privado belga de renombre mundial con bigote, insuperable en inteligencia y comprensión de la mente criminal, respetado y admirado por las fuerzas policiales y los jefes de estado de todo el mundo. Desde su creación, ahora más de 100 durante años, Poirot se ha robado los corazones y las mentes del público desde Azerbaiyán hasta Vietnam, y sus famosos casos se han registrado en 33 novelas originales y más de 50 cuentos.”";
            $p2 = "El amigo de Poirot, Hastings, nos pone directamente en escena en su primer libro, The Mysterious Affair at Styles, donde se nos dice que „como detective, el talento de Poirot era extraordinario”. Por supuesto, tendrá en cuenta el físico evidencia, pero la mayoría de las veces su combinación de orden, método y sus pequeñas células grises hacen el truco, satisfaciendo dramáticamente su propio ego y confirmando a todos que él es verdaderamente „la mente más grande de Europa”.";
            $m1 = "Miss Jane Marple no parece una detective normal. De hecho, no parece una detective en absoluto. Pero puede ser engañoso... es sorprendentemente mundano. Pero, como suele señalar , ha tenido todas las oportunidades de observar la naturaleza humana.";
            $m2 = "Miss Marple apareció por primera vez en 1927 en The Tuesday Night Club, un relato breve de la colección „13 Issues”. Se publicó por primera vez en el número de diciembre de 1927 de Royal Magazine. Agatha nunca esperó que Miss Marple rivalizara con Poirot a la vista del público, pero desde la publicación de la novela de Marple Vicario Crimen en 1930, la primera novela de larga duración de Marple, los lectores han quedado cautivados. La abuela de Agatha tuvo una gran influencia en el personaje. Agatha escribe que Miss Marple era „mucho más caprichosa que mi abuela”. era lo peor de todo, y con una precisión casi aterradora, demostró que por lo general tenía razón. Miss Marple ha honrado doce novelas y veinte cuentos a lo largo de su carrera como detective aficionada, nunca pagada y nunca satisfecha”.";
            $t1 = "Espías internacionales, dos guerras mundiales, asesinatos, robos y sin mencionar el matrimonio, Tommy y Tuppence buscan entusiasmo dondequiera que estén. Tuppence está a la vanguardia de su naturaleza carismática, mientras que Tommy, lento y considerado, brinda el apoyo perfecto. Juntos forman “Young Adventurers Ltd” y comienzan las aventuras.";
            $t2 = "Sus historias eran las que más le gustaba escribir a Agatha Christie; disfrutaba mucho escribir sobre sus brillantes jóvenes y son los únicos detectives en los libros de Agatha Christie que envejecen con cada historia, manteniéndose al día unos con otros. Sus aventuras los llevan a través de cuatro novelas y una colección de cuentos, casándose al final del primer libro, El adversario secreto, y teniendo tres hijos: los gemelos Derek y Deborah y una hija adoptiva llamada Betty.";
        }
    ?>

    <div class="container pt-5 pb-3">

        <div style="text-align: justify">
            <p> &emsp;&emsp;<?=$a1?></p>
            <p> &emsp;&emsp; <?=$a2?></p>
            <p>&emsp;&emsp; <?=$a3?></p>
        </div>

        <div class="row pt-3 pb-3">
            <div class="col-4">
                <div class="accordion" id="accordion_poirot">
                    <div class="accordion-item" >
                        <button class="accordion-button" style="background-color: seashell" type="button" data-bs-toggle="collapse" data-bs-target="#collapse_poirot" aria-expanded="true">
                            <img src="imagini/herculepoirot.jpg" width="100%">
                        </button>
                        </h2>
                        <div id="collapse_poirot" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordion_poirot">
                            <div class="accordion-body" style="text-align:justify; background-color: SeaShell">
                                <h3>Hercule Poirot</h3> 
                                <p>&emsp;&emsp;<?=$p1?></p>
                                <p>&emsp;&emsp;<?=$p2?></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-4">
                <div class="accordion" id="accordion_marple">
                    <div class="accordion-item">
                        <button class="accordion-button" style="background-color: seashell" type="button" data-bs-toggle="collapse" data-bs-target="#collapse_marple" aria-expanded="true">
                            <img src="imagini/missmarple.jpg" width="100%">
                        </button>
                        </h2>
                        <div id="collapse_marple" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordion_marple">
                            <div class="accordion-body" style="text-align:justify; background-color: SeaShell">
                                <h3>Miss Marple</h3> 
                                <p>&emsp;&emsp;<?=$m1?> </p>
                                <p>&emsp;&emsp; <?=$m2?></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-4">
                <div class="accordion" id="accordion_tommy">
                    <div class="accordion-item">
                        <button class="accordion-button" style="background-color: seashell" type="button" data-bs-toggle="collapse" data-bs-target="#collapse_tommy" aria-expanded="true">
                            <img src="imagini/tommyandtuppence.jpg" width="100%">
                        </button>
                        </h2>
                        <div id="collapse_tommy" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordion_tommy">
                            <div class="accordion-body" style="text-align:justify; background-color: SeaShell">
                                <h3>Tommy & Tuppence</h3> 
                                <p>&emsp;&emsp; <?=$t1?></p>
                                <p>&emsp;&emsp; <?=$t2?></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div style="text-align: justify">
            <p>&emsp;&emsp;<?=$a4?></p>
            <p>&emsp;&emsp;<?=$a5?></p>
        </div>

    </div>
   
    <?php
        include "module/footer.php";
    ?>
    
</body>
</html>