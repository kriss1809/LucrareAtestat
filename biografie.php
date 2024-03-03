<?php
    session_start();
    $pagina = "biografie";

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
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css">
    <title>Agatha Christie</title>
    <style>

      .header{
        position: relative;
      }
      .text {
            position: absolute;
            top: 65px;
            right: 50px;
            color: white;
        }

        .container .box {
            position: relative;
            width: 250px;
            height: 250px;
            transform-style: preserve-3d;
            perspective: 1000px;
            cursor: pointer
        }

        .container .box .body {
            position: absolute;
            width: 100%;
            height: 100%;
            transform-style: preserve-3d;
            transition: 0.9s ease
        }

        .container .box .body .imgContainer {
            position: absolute;
            width: 100%;
            height: 100%;
            transform-style: preserve-3d;
        }

        .container .box .body .imgContainer img {
            position: absolute;
            width: 100%;
            height: 100%;
            object-fit: cover
        }

        .container .box .body .content {
            position: absolute;
            width: 100%;
            height: 100%;
            background: #333;
            backface-visibility: hidden;
            transform-style: preserve-3d;
            transform: rotateY(180deg)
        }

        .container .box:hover .body {
            transform: rotateY(180deg)
        }

        .container .box .body .content div {
            transform-style: preserve-3d;
            padding: 20px;
            background: linear-gradient(45deg, #FE0061, #FFEB3B);
            transform: translateZ(100px)
        }

        h3, h2{
            text-align: center;
            padding-bottom: 10px;
            padding-top: 25px;
            font-family: Cambria;
        }

        body {
        background-color: MistyRose; 
        }


        .upper, .lower {
            display: flex;
            width: 1200px;
            justify-content: space-between;
        }
        .lower {
            margin-left: 65px;
            position: relative;
            top: 0px;
        }

        .upper img, .lower img {
            width: 50px;
            opacity: 0;
            animation: fadeIn, fadeOut;
            animation-duration: 9s, 9s;
            animation-fill-mode: forwards;
            animation-iteration-count: infinite;
        }
        @keyframes fadeIn {
            10% {opacity: 1};
            100% {opacity: 1};
        }
        @keyframes fadeOut {
            25% {opacity: 0};
            100% {opacity: 0};
        }

        .upper img:first-child {
            animation-delay: 0.5s, 3.5s;
        }
        .lower img:first-child {
            animation-delay: 1s, 4s;  
        }
        .upper img:nth-child(2) {
            animation-delay: 1.5s, 4.5s;
        }
        .lower img:nth-child(2) {
            animation-delay: 2s, 5s;
        }
        .upper img:nth-child(3) {
            animation-delay: 2.5s, 5.5s;
        }
        .lower img:nth-child(3) {
            animation-delay: 3s, 6s;  
        }
        .upper img:nth-child(4) {
            animation-delay: 3.5s, 6.5s;
        }
        .lower img:nth-child(4) {
            animation-delay: 4s, 7s;
        }
        .upper img:nth-child(5) {
            animation-delay: 4.5s, 7.5s;
        }
        .lower img:nth-child(5) {
        animation-delay: 5s, 8s;  
        }
        .upper img:nth-child(6) {
            animation-delay: 5.5s, 8.5s;
        }
        .lower img:nth-child(6) {
            animation-delay: 6s, 9s;
        }
        .upper img:nth-child(7) {
            animation-delay: 6.5s, 9.5s;
        }
        .lower img:nth-child(7) {
            animation-delay: 7s, 10s;  
        }
        .upper img:nth-child(8) {
            animation-delay: 7.5s, 10.5s;
        }
        .lower img:nth-child(8) {
            animation-delay: 8s, 11s;
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
        if(isset($limba) && $limba==="eng")
         {
            $t1 = "The early years";
            $t2 = "The first detective novel";
            $t3 = "A difficult start ";
            $t4 = "A new start";
            $t5 = "The war years";
            $t6 = "The later years";

            $d1 = "Agatha Christie as a child";
            $d2 = "Ashfield, the childhood home of Agatha Christie";
            $d3 = "Agatha and Colonel Archie Christie";
            $d4 = "Agatha and Max Mallowan";
            $d5 = "Agatha Christie in front of the verandah at the back of Ashfield";
            $d6 = "Agatha Christie’s Grave, Cholsey, UK";

            $p1 ="Agatha Mary Clarissa Miller was born on 15 September 1890 in Torquay, Devon, South West England into a comfortably well off middle class family. She was home schooled largely by her father, an American. Her mother, Clara, who was an excellent storyteller, did not want her to learn to read until she was eight but Agatha taught herself to read by the age of five.";
            $p2="When she was five, the family spent some time in France having rented out the family home of Ashfield to economise, and it was here with her “governess” Marie, that Agatha learnt her idiomatic but erratically spelt French. At the age of eleven there was a shock. Her father, not well since the advent of financial difficulties, died after a series of heart attacks. Clara was distraught and Agatha became her mother’s closest companion. There were more money worries and talk of selling Ashfield. But Clara and Agatha found a way forward and from the age of 15 Agatha boarded at a succession of pensions and took piano and singing lessons. She could have been a professional pianist but for her excruciating shyness in front of those she did not know.";

            $p3="It was during the First World War that Agatha turned to writing detective stories. Her debut novel The Mysterious Affair at Styles took some time to finish and even longer to find a publisher. She started writing partly in response to a bet from her sister Madge that she couldn’t write a good detective story and partly to relieve the monotony of the dispensing work which she was now doing.";
            $p4="She first worked out her plot and then “found” her characters on a tram in Torquay. She finished the manuscript during her two week holiday which she spent at the Moorland Hotel at Haytor on Dartmoor. Her new found expertise in poisons was also put to good use. The murderer’s use of poison was so well described that when the book was eventually published Agatha received an unprecedented honour for a writer of fiction - a review in the Pharmaceutical Journal.";

            $p5="Once returned from the Grand Tour, the family were reunited and settled in a house they named Styles in the suburbs outside London. It was a difficult time for Agatha – her mother had died and she was often alone clearing out the family home in Torquay and struggling to write the next novel for Collins. Archie and Agatha’s relationship broke down when Archie fell in love with a fellow golfer and friend of the family, Nancy Neale.";
            $p6="Agatha and Archie remained apart; Agatha living with Rosalind and Carlo in London and following a course of psychiatric treatment in Harley Street. Needing an income and unable to write new material, her brother-in-law Campbell Christie suggested she combine Poirot short stories composed for The Sketch magazine thus creating The Big Four. Finally accepting that her marriage was over, divorce from Archie was granted in 1928. Agatha and Rosalind immediately escaped England to the Canary Islands where Agatha painfully finished The Mystery of The Blue Train, the book she had struggled with as she mourned her mother.";

            $p7="In 1929 she met the twenty-five year old archaeologist-in-training Max Mallowan who was to become her second husband.  Max proposed on the last evening of his visit to Agatha's family home of Ashfield, they were married on September 11th 1930 at St Cuthbert's Church in Edinburgh, and Agatha only slightly reduced her age in her new passport acquired for the honeymoon.";
            $p8="Max returned to the Woolley’s dig – for the last time alone – and Agatha to London and writing. Thus began a productive and recurring annual writing and travelling routine for Agatha and Max: summers at Ashfield with Rosalind, Christmas with her sister’s family at Abney Hall, late autumn and spring on digs and the rest of the year in London and their country house in Winterbrook, on the edge of Wallingford, Oxfordshire.";
            $p9="As a rule Agatha wrote two or three books a year and when with Max often wrote a chapter or two during quiet mornings and helped out on site in the afternoons.";

            $p10="World War II saw Max get a wartime job in Cairo - using his languages to assist the war effort while Agatha remained in England, writing and also volunteering at the Dispensary at University College Hospital in London. N or M? was her own patriotic gesture to the war effort and she was disconcerted to see its publication delayed in the US until after the Americans had joined the Allies. ";
            $p11="Rosalind, having married Hubert Prichard, gave birth to Mathew on 21st September 1943. Max was in Cairo but Agatha was a doting grandmother and often went to help look after the baby.";
            $p12="Agatha was focused and prolific during this period. Missing Max and with external entertainment more limited in wartime, she wrote and/or published such classics as And Then There Were None, Evil Under the Sun, The Body in the Library, Five Little Pigs and The Moving Finger.";
                    
            $p13="By 1945 and the return of Max with the end of the war, Agatha had realised the tax implications of writing so much. She became less prolific and now in her mid 50s enjoyed a slower pace of life; like the rest of the country the last years of the 40s were full of shortages – a long, chilly, depressing haul. Food rationing did not end until 1954.";
            $p14="The 1940s and 50s saw much time-consuming work with theatrical productions which also limited the time Agatha could devote to writing. Agatha's last public appearance was at the opening night of the 1974 film version of Murder on the Orient Express. Her verdict: a good adaptation with the minor point that Poirot's moustaches weren't luxurious enough.";
            $p15="After a hugely successful career and a very happy life Agatha died peacefully on 12 January 1976. She is buried in the churchyard of St Mary's, Cholsey, near Wallingford.";
         }
            
        if(isset($limba) && $limba==="ro")
        {
            $t1 = "Primii ani";
            $t2 = "Primul roman polițist";
            $t3 = "Un început dificil";
            $t4 = "Un nou început";
            $t5 = "Anii de război";
            $t6 = "Ultimii ani";

            $d1 = "Agatha Christie în copilărie";
            $d2 = "Ashfield, casa din copilărie a Agathei Christie";
            $d3 = "Agatha și colonelul Archie Christie";
            $d4 = "Agatha și Max Mallowan";
            $d5 = "Agatha Christie în fața verandei din spatele casei Ashfield";
            $d6 = "Mormântul Agathei Christie, Cholsey, Marea Britanie";

            $p1 ="Agatha Mary Clarissa Miller s-a născut la 15 septembrie 1890 în Torquay, Devon, sud-vestul Angliei, într-o familie din clasa mijlocie. A fost educată acasă în mare parte de tatăl ei, un american. Mama ei, Clara, care era o povestitoare excelentă, nu a vrut ca ea să învețe să citească până la vârsta de opt ani, dar Agatha a învățat singură să citească până la vârsta de cinci ani.";
            $p2 ="Când avea cinci ani, familia a petrecut ceva timp în Franța, după ce a închiriat casa Ashfield pentru a economisi, și aici, împreună cu guvernanta ei, Marie, Agatha a învățat limba franceză idiomatică, dar scrisă neregulat. La vârsta de unsprezece ani a avut parte de un șoc. Tatăl ei, care nu era bine de la apariția dificultăților financiare, a murit după o serie de atacuri de cord. Clara a fost supărată, iar Agatha a devenit cea mai apropiată însoțitoare a mamei ei. Au existat mai multe griji legate de bani și s-a vorbit despre vânzarea casei Ashfield. Dar Clara și Agatha au găsit o cale de urmat și de la vârsta de 15 ani Agatha s-a îmbarcat la o succesiune de pensiuni și a luat lecții de pian și canto. Ar fi putut fi o pianistă profesionistă, dacă nu ar fi fost timidă în fața celor pe care nu-i cunoștea.";
        
            $p3 ="În timpul Primului Război Mondial, Agatha a început să scrie povești polițiste. Romanul ei de debut este The Mysterious Affair at Styles. A durat ceva timp pentru a-l termina și chiar mai mult pentru a găsi un editor. Ea a început să scrie parțial ca răspuns la un pariu al surorii ei Madge că nu poate scrie o poveste bună despre polițiști și parțial pentru a ușura monotonia muncii de distribuire pe care o făcea atunci.";
            $p4 ="Mai întâi și-a pregătit intriga și apoi și-a „găsit” personajele într-un tramvai în Torquay. Ea a terminat manuscrisul în timpul vacanței sale de două săptămâni pe care a petrecut-o la hotelul Moorland din Haytor în Dartmoor. Noua ei expertiză în otrăvuri a fost, de asemenea, dusă la bun sfârșit. Folosirea otravei de către criminal a fost atât de bine descrisă, încât atunci când cartea a fost publicată în cele din urmă, Agatha a primit o onoare fără precedent pentru un scriitor de ficțiune - o recenzie în Pharmaceutical Journal.";

            $p5 ="Odată întoarsă de la Grand Tour, familia s-a reunit și s-a stabilit într-o casă pe care a numit-o Styles, în suburbiile din Londrei. A fost o perioadă dificilă pentru Agatha – mama ei murise și ea era adesea singură, curățând casa familiei din Torquay și se străduindu-se să scrie următorul roman pentru Collins. Relația dintre Archie și Agatha s-a rupt atunci când Archie s-a îndrăgostit de o colegă de golf și prietenă de familie, Nancy Neale.";
            $p6 ="Agatha și Archie au rămas despărțiți; Agatha locuia cu Rosalind și Carlo în Londra și urma un curs de tratament psihiatric în Harley Street. Având nevoie de un venit și incapabilă să scrie materiale noi, cumnatul ei Campbell Christie i-a sugerat să combine povestirile lui Poirot pentru revista The Sketch creând astfel The Big Four. Acceptând în cele din urmă că căsătoria ei s-a încheiat, divorțul de Archie a fost acordat în 1928. Agatha și Rosalind au evadat imediat din Anglia în Insulele Canare, unde Agatha a terminat The Mystery of The Blue Train, cartea cu care se luptase în timp ce își plângea mama.";

            $p7 ="În 1929, ea l-a cunoscut pe arheologul de douăzeci și cinci de ani, Max Mallowan, care avea să devină al doilea soț al ei. Max a cerut-o în căsătorie în ultima seară a vizitei sale la casa familiei Agathei, Ashfield. S-au căsătorit pe 11 septembrie 1930 la Biserica St Cuthbert din Edinburgh, iar Agatha și-a redus puțin vârsta în noul ei pașaport dobândit pentru luna de miere.";
            $p8 ="Max s-a întors la săpatul Woolley – pentru ultima oară singur – iar Agatha la Londra pentru a scrie. Astfel a început o rutină anuală productivă și recurentă de scris și de călătorie pentru Agatha și Max: veri la Ashfield cu Rosalind, Crăciun cu familia surorii ei la Abney Hall, toamna târzie și primăvara la săpături și restul anului la Londra și casa lor de la țară din Winterbrook, la marginea Wallingford, Oxfordshire.";
            $p9 ="De regulă, Agatha scria două sau trei cărți pe an și când era cu Max scria adesea un capitol sau două în diminețile liniștite.";

            $p10 ="În al Doilea Război Mondial, Max a obținut o slujbă în timpul războiului în Cairo - folosindu-și limbile pentru a sprijini efortul de război, în timp ce Agatha a rămas în Anglia, scriind și făcând, de asemenea, voluntariat la dispensarul de la University College Hospital din Londra. N or M? a fost propriul gest patriotic față de efortul de război și a fost deconcertată să vadă publicarea lui amânată în SUA până după ce americanii s-au alăturat Aliaților.";
            $p11 ="Rosalind, căsătorită cu Hubert Prichard, l-a născut pe Mathew la 21 septembrie 1943. Max era la Cairo, dar Agatha era o bunică drăgostoasă și mergea adesea să ajute să aibă grijă de copil.";
            $p12 ="Agatha a fost concentrată și prolifică în această perioadă. Datorită lipsei lui Max și divertismentului extern mai limitat în timp de război, ea a scris și/sau a publicat clasice precum And Then There Were None, Evil Under the Sun, The Body in the Library, Five Little Pigs și The Moving Finger.";

            $p13 ="Până în 1945 și până la revenirea lui Max odată cu sfârșitul războiului, Agatha și-a dat seama de implicațiile fiscale atât de mari ale scrisului. Ea a devenit mai puțin prolifică și la jumătatea anilor 50 de ani s-a bucurat de un ritm de viață mai lent; ca și restul țării, ultima perioadă a anilor 40 a fost plină de lipsuri – un drum lung, rece și deprimant. Porționarea alimentelor nu s-a încheiat până în 1954.";
            $p14 ="Anii 1940 și 1950 au văzut multă muncă consumatoare de timp cu producții teatrale, ceea ce a limitat, de asemenea, timpul pe care Agatha l-ar fi putut dedica scrierii. Ultima apariție publică a Agathei a fost în seara de premieră a filmului Murder on the Orient Express. Verdictul ei: o adaptare bună cu punctul minor că mustața lui Poirot nu era suficient de luxoasă.";
            $p15 ="După o carieră de succes și o viață foarte fericită, Agatha a murit în pace pe 12 ianuarie 1976. Este înmormântată în curtea bisericii St Mary's, Cholsey, lângă Wallingford.";
        }

        if(isset($limba) && $limba==="fr")
        {
            $t1 = "Les premières années";
            $t2 = "Le premier roman policier";
            $t3 = "Un début difficile";
            $t4 = "Un nouveau départ";
            $t5 = "Les années de guerre";
            $t6 = "Les dernières années";

            $d1 = "Agatha Christie comme enfant" ;
            $d2 = "Ashfield, la maison d'enfance d'Agatha Christie" ;
            $d3 = "Agatha et le colonel Archie Christie" ;
            $d4 = "Agatha et Max Mallowan" ;
            $d5 = "Agatha Christie devant la véranda à l'arrière d'Ashfield" ;
            $d6 = "Tombe d'Agatha Christie, Cholsey, Royaume-Uni" ;

            $p1 ="Agatha Mary Clarissa Miller est née le 15 septembre 1890 à Torquay, Devon, dans le sud-ouest de l'Angleterre, dans une famille de classe moyenne. Elle a été scolarisée à domicile en grande partie par son père, un Américain. Sa mère, Clara, qui était une excellente conteuse, ne voulait pas qu'elle apprenne à lire avant l'âge de huit ans, mais Agatha a appris à lire par elle-même à l'âge de cinq ans.";
            $p2 ="Quand elle avait cinq ans, la famille a passé quelque temps en France après avoir loué la maison familiale d'Ashfield pour économiser, et c'est ici avec sa « gouvernante » Marie, qu'Agatha a appris son français idiomatique mais erratiquement orthographié. À l'âge de onze ans, il y a eu un choc. Son père, mal en point depuis l'avènement des difficultés financières, décède après une série de crises cardiaques. Clara était désemparée et Agatha est devenue la compagne la plus proche de sa mère. Il y avait plus de soucis d'argent et on parlait de vendre Ashfield. Mais Clara et Agatha ont trouvé le moyen d'avancer et dès l'âge de 15 ans Agatha a embarqué dans une succession de pensions et pris des cours de piano et de chant. Elle aurait pu être pianiste professionnelle si elle n'avait pas été  timide devant ceux qu'elle ne connaissait pas.";
        
            $p3 ="C'est pendant la Première Guerre mondiale qu'Agatha se tourne vers l'écriture de romans policiers. Son premier roman The Mysterious Affair at Styles a mis du temps à se terminer et encore plus de temps à trouver un éditeur. Elle a commencé à écrire en partie en réponse à un pari de sa sœur Madge qu'elle ne pouvait pas écrire une bonne histoire policière et en partie pour soulager la monotonie du travail de distribution qu'elle faisait maintenant.";
            $p4 ="Elle a d'abord élaboré son intrigue puis a trouvé ses personnages dans un tram à Torquay. Elle a terminé le manuscrit pendant ses deux semaines de vacances qu'elle a passées au Moorland Hotel à Haytor sur Dartmoor. Sa nouvelle expertise dans les poisons a également été mise à profit. L'utilisation du poison par le meurtrier a été si bien décrite que lorsque le livre a finalement été publié, Agatha a reçu un honneur sans précédent pour un écrivain de fiction - une critique dans le Pharmaceutical Journal.";

            $p5 ="Une fois revenue du Grand Tour, la famille a été réunie et s'est installée dans une maison qu'ils ont nommée Styles dans la banlieue de Londres. C'était une période difficile pour Agatha - sa mère était décédée et elle était souvent seule à nettoyer la maison familiale à Torquay et luttait pour écrire le prochain roman pour Collins. La relation entre Archie et Agatha s'est rompue lorsqu'Archie est tombé amoureux d'une golfeuse et amie de la famille, Nancy Neale.";
            $p6 ="Agatha et Archie sont restés séparés; Agatha vit avec Rosalind et Carlo à Londres et suit un traitement psychiatrique à Harley Street. Ayant besoin d'un revenu et incapable d'écrire de nouveaux romans, son beau-frère Campbell Christie lui a suggéré de combiner des nouvelles de Poirot composées pour le magazine The Sketch, créant ainsi The Big Four. Acceptant finalement que son mariage était terminé, le divorce d'Archie a été accordé en 1928. Agatha et Rosalind s'échappèrent immédiatement de l'Angleterre vers les îles Canaries où Agatha a fini The Mystery of the Blue Train, le livre avec lequel elle avait lutté alors qu'elle pleurait sa mère.";

            $p7 ="En 1929, elle rencontre l'archéologue en formation Max Mallowan, âgé de vingt-cinq ans, qui deviendra son deuxième mari. Max a proposé le dernier soir de sa visite à la maison familiale d'Agatha. Ils se sont mariés le 11 septembre 1930 à l'église St Cuthbert à Édimbourg, et Agatha n'a que légèrement réduit son âge dans son nouveau passeport acquis pour la lune de miel.";
            $p8 ="Max est retourné à la fouille de Woolley - pour la dernière fois seul - et Agatha à Londres et à l'écriture. Ainsi commença une routine annuelle d'écriture et de voyage productive et récurrente pour Agatha et Max : les étés à Ashfield avec Rosalind, Noël avec la famille de sa sœur à Abney Hall, la fin de l'automne et le printemps lors de fouilles et le reste de l'année à Londres et leur maison de campagne à Winterbrook, en bordure de Wallingford, Oxfordshire.";
            $p9 ="En règle générale, Agatha écrivait deux ou trois livres par an et, lorsqu'elle était avec Max, écrivait souvent un chapitre ou deux pendant les matinées tranquilles.";

            $p10 ="La Seconde Guerre mondiale a vu Max obtenir un emploi en temps de guerre au Caire - utilisant ses langues pour aider l'effort de guerre tandis qu'Agatha restait en Angleterre, écrivant et faisant également du bénévolat au dispensaire de l'University College Hospital de Londres. N ou M ? était son propre geste patriotique envers l'effort de guerre et elle a été déconcertée de voir sa publication retardée aux États-Unis jusqu'à ce que les Américains aient rejoint les Alliés.";
            $p11 ="Rosalind, après avoir épousé Hubert Prichard, a donné naissance à Mathew le 21 septembre 1943. Max était au Caire mais Agatha était une grand-mère passionnée et allait souvent aider à s'occuper du bébé.";
            $p12 ="Agatha était concentrée et prolifique pendant cette période. Manquant Max et avec des divertissements externes plus limités en temps de guerre, elle a écrit et/ou publié des classiques tels que And Then There Were None, Evil Under the Sun, The Body in the Library, Five Little Pigs et The Moving Finger.";

            $p13 ="En 1945, avec le retour de Max avec la fin de la guerre, Agatha avait réalisé les implications fiscales d'écrire autant. Elle est devenue moins prolifique et maintenant, au milieu de la cinquantaine, elle a connu un rythme de vie plus lent; comme le reste du pays, les dernières années des années 40 ont été pleines de pénuries - un parcours long, froid et déprimant. Le rationnement alimentaire n'a pris fin qu'en 1954.";
            $p14 ="Les années 1940 et 1950 ont vu beaucoup de travail chronophage avec des productions théâtrales qui ont également limité le temps qu'Agatha pouvait consacrer à l'écriture. La dernière apparition publique d'Agatha a eu lieu lors de la soirée d'ouverture de la version cinématographique de 1974 de Murder on the Orient Express. Son verdict: une bonne adaptation avec le petit point que la moustache de Poirot n'été pas assez luxueuse.";
            $p15 ="Après une carrière extrêmement réussie et une vie très heureuse, Agatha est décédée paisiblement le 12 janvier 1976. Elle est enterrée dans le cimetière de St Mary's, Cholsey, près de Wallingford.";
        }

        if(isset($limba) && $limba==="es")
        {
            $t1 = "Los primeros años";
            $t2 = "La primera novela policiaca";
            $t3 = "Un comienzo difícil";
            $t4 = "Un nuevo comienzo";
            $t5 = "Los años de guerra";
            $t6 = "Los últimos años";

            $d1 = "Agatha Christie de niña";
            $d2 = "Ashfield, el hogar de la infancia de Agatha Christie";
            $d3 = "Agatha y el coronel Archie Christie";
            $d4 = "Agatha y Max Mallowan";
            $d5 = "Agatha Christie frente a la veranda en la parte trasera de Ashfield";
            $d6 = "Tumba de Agatha Christie, Cholsey, Reino Unido";

            $p1 ="Agatha Mary Clarissa Miller nació el 15 de septiembre de 1890 en Torquay, Devon, suroeste de Inglaterra, en una familia de clase media. Fue educada en casa en gran parte por su padre, un estadounidense. Su madre, Clara, que era una excelente narradora, no quería que aprendiera a leer hasta los ocho años, pero Agatha aprendió a leer sola a los cinco.";
            $p2 ="Cuando tenía cinco años, la familia pasó un tiempo en Francia después de haber alquilado la casa familiar de Ashfield para economizar, y fue aquí con su institutriz Marie, donde Agatha aprendió su francés idiomático pero con una ortografía errática. A los once años hubo un shock. Su padre, que no se encontraba bien desde la llegada de las dificultades económicas, murió tras una serie de ataques al corazón. Clara estaba angustiada y Agatha se convirtió en la compañera más cercana de su madre. Hubo más preocupaciones por el dinero y se habló de vender Ashfield. Pero Clara y Agatha encontraron un camino a seguir y desde los 15 años Agatha se alojó en una sucesión de pensiones y tomó clases de piano y canto. Podría haber sido una pianista profesional de no haber sido por su insoportable timidez frente a los que no conocía.";

            $p3 ="Fue durante la Primera Guerra Mundial cuando Agatha se dedicó a escribir historias de detectives. Su novela debut The Mysterious Affair at Styles tomó algún tiempo para terminar y aún más para encontrar un editor. Comenzó a escribir en parte como respuesta a una apuesta de su hermana Madge de que no podía escribir una buena historia de detectives y en parte para aliviar la monotonía del trabajo de dispensación que ahora estaba haciendo.";
            $p4 ="Primero elaboró ​​su trama y luego encontró a sus personajes en un tranvía en Torquay. Terminó el manuscrito durante sus vacaciones de dos semanas que pasó en el Hotel Moorland en Haytor en Dartmoor. Su nueva experiencia adquirida en venenos también se aprovechó. El uso del veneno por parte del asesino se describió tan bien que cuando finalmente se publicó el libro, Agatha recibió un honor sin precedentes para un escritor de ficción: una reseña en el Pharmaceutical Journal.";

            $p5 ="Una vez que regresaron del Grand Tour, la familia se reunió y se instaló en una casa a la que llamaron Styles en los suburbios de Londres. Fue un momento difícil para Agatha: su madre había muerto y, a menudo, estaba sola limpiando la casa familiar en Torquay y luchando por escribir la próxima novela para Collins. La relación de Archie y Agatha se rompió cuando Archie se enamoró de una compañera golfista y amiga de la familia, Nancy Neale.";
            $p6 ="Agatha y Archie permanecieron separados; Agatha viviendo con Rosalind y Carlo en Londres y siguiendo un curso de tratamiento psiquiátrico en Harley Street. Al necesitar ingresos y no poder escribir material nuevo, su cuñado Campbell Christie le sugirió que combinara cuentos de Poirot compuestos para la revista The Sketch creando así The Big Four. Al aceptar finalmente que su matrimonio había terminado, se concedió el divorcio de Archie en 1928. Agatha y Rosalind escaparon inmediatamente de Inglaterra a las Islas Canarias, donde Agatha terminó dolorosamente The Mistery of the Blue Train, el libro con el que había luchado mientras lloraba a su madre.";

            $p7 ="En 1929 conoció a Max Mallowan, un arqueólogo en formación de veinticinco años, que se convertiría en su segundo marido. Max le propuso matrimonio la última noche de su visita a la casa de la familia de Agatha. Se casaron el 11 de septiembre de 1930 en la iglesia de St Cuthbert en Edimburgo, y Agatha solo redujo ligeramente su edad en su nuevo pasaporte adquirido para la luna de miel.";
            $p8 ="Max regresó a la excavación de Woolley, por última vez solo, y Agatha a Londres a escribir. Así comenzó una productiva y recurrente rutina anual de escritura y viajes para Agatha y Max: veranos en Ashfield con Rosalind, Navidad con la familia de su hermana en Abney Hall, finales de otoño y primavera en excavaciones y el resto del año en Londres y su casa de campo en Winterbrook, en las afueras de Wallingford, Oxfordshire.";
            $p9 ="Por regla general, Agatha escribía dos o tres libros al año y, cuando estaba con Max, a menudo escribía uno o dos capítulos durante las mañanas tranquilas.";
    
            $p10 ="En La Segunda Guerra Mundial Max conseguí un trabajo en El Cairo, usando sus idiomas para ayudar en el esfuerzo de guerra mientras Agatha permanecía en Inglaterra, escribiendo y también como voluntaria en el Dispensario del University College Hospital en Londres. N or M? fue su propio gesto patriótico al esfuerzo bélico y se desconcertó al ver que su publicación se retrasaba en los EE. UU. hasta después de que los estadounidenses se unieran a los aliados.";
            $p11 ="Rosalind, habiéndose casado con Hubert Prichard, dio a luz a Mathew el 21 de septiembre de 1943. Max estaba en El Cairo, pero Agatha era una abuela cariñosa y a menudo iba a ayudar a cuidar al bebé.";
            $p12 ="Agatha estuvo enfocada y prolífica durante este período. Extrañando a Max y con el entretenimiento externo más limitado en tiempos de guerra, escribió y/o publicó clásicos como And Then There Were None, Evil Under the Sun, The Body in the Library, Five Little Pigs y The Moving Finger.";

            $p13 ="Para 1945 y el regreso de Max con el final de la guerra, Agatha se había dado cuenta de las implicaciones fiscales de escribir tanto. Se volvió menos prolífica y ahora a mediados de los 50 disfrutaba de un ritmo de vida más lento; Al igual que el resto del país, los últimos años de la década de 1940 estuvieron llenos de escasez, un recorrido largo, frío y deprimente. El racionamiento de alimentos no terminó hasta 1954.";
            $p14 ="Las décadas de 1940 y 1950 vieron un trabajo que consumía mucho tiempo con producciones teatrales que también limitaban el tiempo que Agatha podía dedicar a escribir. La última aparición pública de Agatha fue en la noche de estreno de la versión cinematográfica de 1974 de Murder on the Orient Express. Su veredicto: una buena adaptación con el punto menor de que el bigote de Poirot no era lo suficientemente lujoso.";
            $p15 ="Después de una carrera enormemente exitosa y una vida muy feliz, Agatha murió en paz el 12 de enero de 1976. Está enterrada en el cementerio de St Mary's, Cholsey, cerca de Wallingford.";
        }
   ?>
   
 
    <div class="container p-3">  

        <div class="row pb-3">
            <h2><strong><em> <?=$t1?> (1890-1916)</em> </strong></h2>
            <div class="col-3 m-3 box">
                <div class="body">
                    <div class="imgContainer" style="width:100%"> 
                        <img src="imagini\Agatha_Christie_as_a_child.jpg" alt=""> 
                    </div>
                    <div class="content d-flex flex-column align-items-center justify-content-center">
                        <div>
                            <h3 class="text-white fs-5"><?=$d1?></h3>
                            <p class="fs-6 text-white" style="text-align:justify"></p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-9 m-3" style="text-align:justify">
                <p>&emsp;<?=$p1?></p>
                <p> &emsp;<?=$p2?></p>
            </div>
        </div>

        <div class="upper">
            <img src="imagini/left.png">
            <img src="imagini/left.png">
            <img src="imagini/left.png">
            <img src="imagini/left.png">
            <img src="imagini/left.png">
            <img src="imagini/left.png">
            <img src="imagini/left.png">
            <img src="imagini/left.png">
        </div>
        <div class="lower">
            <img src="imagini/right.png">
            <img src="imagini/right.png">
            <img src="imagini/right.png">
            <img src="imagini/right.png">
            <img src="imagini/right.png">
            <img src="imagini/right.png">
            <img src="imagini/right.png">
            <img src="imagini/right.png">
        </div>

        <div class="row pb-3">
            <h2><strong><em> <?=$t2?> (1917-1924)</em> </strong></h2>
            <div class="col-9 m-3" style="text-align:justify">
                <p>&emsp;<?=$p3?></p>
                <p> &emsp;<?=$p4?></p>
            </div>
            <div class="col-3 box m-3">
                <div class="body">
                    <div class="imgContainer" style="width:100%"> 
                        <img src="imagini/home.jpg" alt=""> 
                    </div>
                    <div class="content d-flex flex-column align-items-center justify-content-center">
                        <div>
                            <h3 class="text-white fs-5"><?=$d2?></h3>
                            <p class="fs-6 text-white" style="text-align:justify"> </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="upper">
            <img src="imagini/left.png">
            <img src="imagini/left.png">
            <img src="imagini/left.png">
            <img src="imagini/left.png">
            <img src="imagini/left.png">
            <img src="imagini/left.png">
            <img src="imagini/left.png">
            <img src="imagini/left.png">
        </div>
        <div class="lower">
            <img src="imagini/right.png">
            <img src="imagini/right.png">
            <img src="imagini/right.png">
            <img src="imagini/right.png">
            <img src="imagini/right.png">
            <img src="imagini/right.png">
            <img src="imagini/right.png">
            <img src="imagini/right.png">
        </div>

        <div class="row pb-3">
            <h2><strong><em> <?=$t3?> (1925-1928)</em> </strong></h2>
            <div class="col-3 box m-3">
                <div class="body">
                    <div class="imgContainer" style="width:100%"> 
                        <img src="imagini\agatha-christie-archibald.jpg" alt=""> 
                    </div>
                    <div class="content d-flex flex-column align-items-center justify-content-center">
                        <div>
                            <h3 class="text-white fs-5"><?=$d3?></h3>
                            <p class="fs-6 text-white" style="text-align:justify"></p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-9 m-3" style="text-align:justify">
                <p>&emsp;<?=$p5?></p>
                <p> &emsp;<?=$p6?></p>
            </div>
        </div>

        <div class="upper">
            <img src="imagini/left.png">
            <img src="imagini/left.png">
            <img src="imagini/left.png">
            <img src="imagini/left.png">
            <img src="imagini/left.png">
            <img src="imagini/left.png">
            <img src="imagini/left.png">
            <img src="imagini/left.png">
        </div>
        <div class="lower">
            <img src="imagini/right.png">
            <img src="imagini/right.png">
            <img src="imagini/right.png">
            <img src="imagini/right.png">
            <img src="imagini/right.png">
            <img src="imagini/right.png">
            <img src="imagini/right.png">
            <img src="imagini/right.png">
        </div>

       
        <div class="row pb-3">
            <h2><strong><em> <?=$t4?> (1929-1938)</em> </strong></h2>
            <div class="col-9 m-3" style="text-align:justify">
                <p>&emsp;<?=$p7?></p>
                <p> &emsp;<?=$p8?></p>
                <p> &emsp;<?=$p9?></p>
            </div>
            <div class="col-3 box m-3">
                <div class="body">
                    <div class="imgContainer" style="width:100%"> 
                        <img src="imagini\max-mallowan-agatha-christie.jpg" alt=""> 
                    </div>
                    <div class="content d-flex flex-column align-items-center justify-content-center">
                        <div>
                            <h3 class="text-white fs-5"><?=$d4?></h3>
                            <p class="fs-6 text-white"style="text-align:justify"></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="upper">
            <img src="imagini/left.png">
            <img src="imagini/left.png">
            <img src="imagini/left.png">
            <img src="imagini/left.png">
            <img src="imagini/left.png">
            <img src="imagini/left.png">
            <img src="imagini/left.png">
            <img src="imagini/left.png">
        </div>
        <div class="lower">
            <img src="imagini/right.png">
            <img src="imagini/right.png">
            <img src="imagini/right.png">
            <img src="imagini/right.png">
            <img src="imagini/right.png">
            <img src="imagini/right.png">
            <img src="imagini/right.png">
            <img src="imagini/right.png">
        </div>

        <div class="row pb-3">
            <h2><strong><em> <?=$t5?> (1939-1945)</em> </strong></h2>
            <div class="col-3 box m-3">
                <div class="body">
                    <div class="imgContainer" style="width:100%"> 
                        <img src="imagini\nurse.webp" alt=""> 
                    </div>
                    <div class="content d-flex flex-column align-items-center justify-content-center">
                        <div>
                            <h3 class="text-white fs-5"><?=$d5?></h3>
                            <p class="fs-6 text-white"style="text-align:justify"></p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-9 m-3" style="text-align:justify">
                <p> &emsp;<?=$p10?></p>
                <p> &emsp;<?=$p11?></p>
                <p> &emsp;<?=$p12?></p>
            </div>
        </div>

        <div class="upper">
            <img src="imagini/left.png">
            <img src="imagini/left.png">
            <img src="imagini/left.png">
            <img src="imagini/left.png">
            <img src="imagini/left.png">
            <img src="imagini/left.png">
            <img src="imagini/left.png">
            <img src="imagini/left.png">
        </div>
        <div class="lower">
            <img src="imagini/right.png">
            <img src="imagini/right.png">
            <img src="imagini/right.png">
            <img src="imagini/right.png">
            <img src="imagini/right.png">
            <img src="imagini/right.png">
            <img src="imagini/right.png">
            <img src="imagini/right.png">
        </div>

        <div class="row pb-3">
            <h2><strong><em> <?=$t6?> (1946-1976)</em> </strong></h2>
            <div class="col-9 m-3" style="text-align:justify">
                <p> &emsp;<?=$p13?></p>
                <p> &emsp;<?=$p14?></p>
                <p> &emsp;<?=$p15?></p>
            </div>
            <div class="col-3 box  m-3">
                <div class="body">
                    <div class="imgContainer" style="width:100%"> 
                        <img src="imagini\burial_place.jpg" alt=""> 
                    </div>
                    <div class="content d-flex flex-column align-items-center justify-content-center">
                        <div>
                            <h3 class="text-white fs-5"><?=$d6?></h3>
                            <p class="fs-6 text-white"style="text-align:justify"></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <?php
        include "module/footer.php";
    ?>
    
</body>
</html>