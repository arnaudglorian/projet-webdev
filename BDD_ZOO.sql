-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : ven. 22 nov. 2024 à 08:43
-- Version du serveur : 8.0.31
-- Version de PHP : 8.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `zoo`
--
CREATE DATABASE IF NOT EXISTS `zoo` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci;
USE `zoo`;

-- --------------------------------------------------------

--
-- Structure de la table `animals`
--

DROP TABLE IF EXISTS `animals`;
CREATE TABLE IF NOT EXISTS `animals` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` text NOT NULL,
  'bio'  text NOT NULL
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=70 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `animals`
--

INSERT INTO `animals` (`id`, `name`,'bio') VALUES
(1, 'Python','Le python est un serpent non venimeux appartenant à la famille des Pythonidés, connu pour sa capacité à tuer ses proies en les constrictant. Il vit principalement dans les régions tropicales et subtropicales, et certaines espèces peuvent atteindre une taille impressionnante, comme le python réticulé, qui est le plus long serpent du monde.'),
(2, 'Tortue','La tortue est un reptile avec une carapace dure qui protège son corps.Elle peut vivre dans des habitats variés, allant des océans aux terres arides, et certaines espèces, comme la tortue des Galápagos, sont connues pour leur longévité exceptionnelle.'),
(3, 'Iguane','L'iguane est un grand lézard herbivore doté d'une longue queue, souvent utilisée pour se défendre. Il vit principalement dans les régions tropicales et subtropicales, notamment en Amérique centrale et du Sud.'),
(4, 'Ara','Les aras sont des psittacidés.Ils font partie de la même famille que les perroquets. Ils s’en différencient essentiellement par leur grande taille : le ara chloroptère fait 90 cm de long ! Il doit son nom à la couleur verte sur ses ailes.'),
(5, 'Grand Hocco','Le grand hocco est un grand oiseau forestier vivant en Amérique centrale et du Sud , appartenant à la famille des Cracidés. Il se distingue par son plumage sombre, sa crête bouclée, et son cri sonore utilisé pour communiquer dans la forêt dense'),
(6, 'Panthère','La panthère est un grand félin agile et puissant, souvent reconnaissable à son pelage tacheté ou entièrement noir. Elle vit dans divers habitats, allant des forêts tropicales aux savanes, et est connue pour sa discrétion et ses talents de chasseuse.'),
(7, 'Perroquet','Le perroquet est un oiseau coloré et intelligent, connu pour sa capacité à imiter les sons et les paroles humaines. Il vit principalement dans les régions tropicales et subtropicales, où il se nourrit de fruits, de graines et de noix.'),
(8, 'Tamarin','Le tamarin est un petit singe arboricole vivant en Amérique du Sud, facilement reconnaissable à sa taille réduite et souvent à une crinière ou des moustaches distinctives selon les espèces. Il vit en groupes dans les forêts tropicales, se nourrissant de fruits, d'insectes et de nectar.'),
(9, 'Capucin','Le capucin est un petit singe vivant en Amérique centrale et du Sud, connu pour son intelligence et son visage expressif. Vif et sociable, il vit en groupes dans les forêts tropicales, se nourrissant de fruits, insectes et autres petites proies.'),
(10, 'Ouistiti','Le ouistiti est un petit singe vivant dans les forêts tropicales en Amérique du Sud, caractérisé par sa taille minuscule et son pelage souvent soyeux. Il est très social, formant de petits groupes familiaux, et se nourrit principalement de fruits, d'insectes et de sève d'arbres.'),
(11, 'Gibbon','Le gibbon est un singe gracieux aux bras allongés, capable de se déplacer rapidement dans les cimes des arbres grâce à son mode de locomotion appelé "brachiation". Il vit en couple ou en petites familles, principalement dans les forêts d'Asie du Sud-Est, et est reconnu pour ses vocalisations mélodieuses.'),
(12, 'Varan de Komodo','Le varan de Komodo est le plus grand lézard vivant, pouvant atteindre plus de trois mètres de long. Il vit dans les îles de Komodo et Rinca et est un prédateur redoutable, doté d'une salive contenant des bactéries et des toxines qui facilitent la capture de ses proies.'),
(13, 'Eléphant','Avec un poids atteignant 5 tonnes chez les éléphants en Asie et 7 tonnes chez les éléphants en Afrique, l'éléphant est l’animal terrestre le plus lourd.Notre parc accueille un seul individu, Dora, une femelle ayant la particularité d’être malvoyante. C’est probablement ce qui explique que pour elle, la présence d’un autre éléphant était source de stress.'),
(14, 'Girafe','Les girafes peuvent atteindre une hauteur record de 5.5 mètres.Au parc animalier de La Barben vit un groupe de girafes, dans lequel il y a régulièrement des naissances. Il est actuellement composé d’un mâle, de 2 femelles, deux jeunes et un girafon, né en juin 2021 !'),
(15, 'Grivet','Le grivet est un petit singe appartenant à la famille des cercopithèques, originaire des régions d'Afrique de l'Est. Il se distingue par son pelage vert-gris, ses joues blanches et son visage marqué de traits noirs. Ce primate, très social, vit en groupes et se nourrit principalement de fruits, de feuilles et d'insectes. On le trouve dans des habitats variés, des savanes aux forêts, et il est connu pour sa grande agilité et sa capacité à communiquer à travers des vocalisations et des gestes.'),
(16, 'Cercorpithèque','Le cercopithèque est un singe d'Afrique, agile et social, qui vit en groupes. Il se nourrit principalement de fruits, de feuilles et d'insectes, et possède un pelage souvent coloré.'),
(17, 'Hyène','Les hyènes sont des animaux puissants aisément reconnaissables avec leur allure de chien, leur dos incliné vers l’arrière et leur mâchoire très développée capable de casser des os. Elles souffrent en outre de la diminution du nombre de charognes et de leurs espaces de vie. Elles sont ainsi en voie de disparition ; pourtant elles jouent un rôle sanitaire primordial, en éliminant charognes et ordures, sources de maladies !'),
(18, 'Loup à crinière','C’est un animal omnivore, se nourrissant de petits mammifères, d’oiseaux, de reptiles, mais aussi de fruits et autres végétaux !Contrairement à son nom, le loup à crinière ressemble davantage à un renard sur échasses. Ses longues pattes sont certainement une adaptation aux hautes herbes parmi lesquelles il se déplace'),
(19, 'Lion','Le lion est l’unique félin à vivre en groupe, appelé troupe, composé d’un mâle, de 2 à 6 femelles et de leurs petits.Au parc animalier de La Barben, vivent un mâle et une femelle. Ils ont relativement gardé le rythme de la vie africaine et sont plutôt actifs et début et en fin de journée, évitant de se fatiguer aux heures les plus chaudes!'),
(20, 'Hippopotame','L’hippopotame mène une vie amphibie : la journée il est dans l’eau, pour se protéger du soleil, et va à terre la nuit pour s’alimenter.Bien qu’herbivore, l’hippopotame est néanmoins un animal dangereux, n’hésitant pas à charger lorsqu’il est dérangé.Un couple d’hippopotames est présent au parc de La Barben, mais pour les voir, peut-être devrez-vous faire preuve de patience : ils peuvent rester aisément 5 minutes en apnée!'),
(21, 'Zèbre','Selon l’épaisseur, la couleur et l’orientation des rayures, on peut différencier plusieurs espèces de zèbres. Et à l’intérieur d’une même espèce, chaque zèbre a des rayures uniques permettant de le reconnaitre!Un groupe de zèbre vit au parc animalier de La Barben… Saurez-vous identifier nos différents individus ?'),
(22, 'Panda roux','Ils vivent essentiellement dans les arbres, où ils se déplacent avec aisance grâce à leur longue queue servant de balancier, et à leurs pattes tournées vers l’intérieur. Cette espèce est malheureusement menacée dans son habitat naturel, à cause de la déforestation et du trafic animal.'),
(23, 'Lémurien','Le lémurien est un petit primate endémique de Madagascar, caractérisé par ses grands yeux et son long museau. Il vit principalement dans les forêts, où il se nourrit de fruits, de feuilles et d'insectes, et est souvent vu en groupe.'),
(24, 'Chèvre naine','Domestiquées il y a 8 à 11 000 ans, les chèvres sont aujourd’hui élevées sur toute la planète : elles survivent là où l’herbe est trop rare pour que d’autres herbivores tels que moutons et vaches puissent s’établir.Celles que vous rencontrez au parc animalier de La Barben sont les chèvres naines, considérées comme animaux de compagnie en raison de leur petite taille.'),
(25, 'Mouflon','Le mouflon est un animal sauvage, un type de mouton originaire d'Asie, caractérisé par ses grandes cornes en spirale chez les mâles. Il vit dans les montagnes et se nourrit principalement d'herbes, de buissons et de végétation alpine'),
(26, 'Binturong','Le binturong, surnommé "chat-ours" en raison de son apparence particulière, est un mammifère de taille moyenne originaire des forêts tropicales asiatiques.Au Parc animalier de la Barben, les binturongs ont récemment rejoint les loutres d’Asie dans un nouvel espace créé par l'équipe technique du parc.'),
(27, 'Loutre','La loutre d’Asie, aussi appelée loutre cendrée, est la plus petite des loutres. Elle est parfaitement adaptée à la vie semi-aquatique. A la Barben, deux jeunes loutres cendrées sont arrivées en 2023. Elles habitent un espace avec cascades et bassin à vision subaquatique, qu’elles partagent avec deux binturongs!'),
(28, 'Macaque crabier','Ces macaques sont rencontrés dans des habitats variés, mais de préférence à côté de l’eau : mangroves, marais, marécages, rives des rivières et des mers… Ils sont très bons nageurs, et s’ils se nourrissent essentiellement de fruits, ils mangent aussi d’autres végétaux et de petits animaux, dont des crabes, d’où leur nom !'),
(29, 'Cerf','Les cerfs sont présents dans les forêts européennes, mais aussi nord-américaines, chinoises, russes… ainsi qu’en Algérie et en Tunisie ! Les mâles sont plus imposants que les femelles, et sont les seuls à porter des bois. Les jeunes faons, eux, ont un pelage tacheté pour se camoufler dans la végétation. Ces tâches disparaissent avant l’âge adulte.'),
(30, 'Vautour','Au Parc animalier de la Barben, les vautours, notamment le vautour africain, jouent un rôle essentiel dans l'écosystème en nettoyant les carcasses. Ces oiseaux charognards, souvent vus en grands groupes, sont fascinants pour leur capacité à dévorer rapidement des proies mortes. Le parc offre des animations pédagogiques pour mieux comprendre ces animaux.'),
(31, 'Daim','Fait particulier chez les cervidés, les mâles daims ont des bois palmés ! Les femelles et les jeunes vivent en groupes appelés hardes, tandis que les mâles sont souvent solitaires.Au parc, les daims sont présents dans la plaine asiatique, en compagnie des nilgauts et des antilopes cervicapres.'),
(32, 'Antilope','Ces élégantes antilopes sont parmi les seules à présenter une variation de couleur entre les femelles et les jeunes, de couleur claire, et les mâles, dont les parties supérieures foncent progressivement jusqu’au marron foncé voire au noir. Ces derniers présentent de plus de longues cornes annelées et spiralées.A La Barben, elles évoluent dans une vaste plaine asiatique, en compagnie des nilgauts et des daims.'),
(33, 'Nilgaut','Le Nilgaut, ou taureau bleu, est la plus grande antilope d'Asie, originaire de l'Inde et du Népal. Les mâles ont un pelage gris ou bleu-gris, tandis que les femelles sont rousses. Herbivores, ils vivent en petits groupes ou seuls, et sont actifs principalement au crépuscule.' ),
(34, 'Loup d'Europe','Ancêtre du loup domestique, le loup d'Europe est un animal social, vivant en meute. Au parc de La Barben, la meute évolue dans un nouvel espace boisé de 3800 m2 !'),
(35, 'Rhinocéros','Avec un poids dépassant les 3 tonnes, le rhinocéros blanc est le mammifère terrestre le plus lourd, après l’éléphant, et à égalité avec l’hippopotame.Trois rhinocéros blancs (un mâle et deux femelles) vivent à La Barben, dans une vaste plaine où ils cohabitent avec les gnous bleus et les oryx beisa '),
(36, 'Suricate','Toutes petites mangoustes, les suricates sont connus pour leur comportement de sentinelle. En effet, il y a en permanence un des membres du groupe qui fait le guet, pendant que les autres vaquent à leurs occupations.C’est un groupe de 4 suricates que vous pourrez observer à La Barben. Vous les verrez sans doute en train de creuser le sable, à la recherche d’une proie potentielle ou construisant un nouveau tunnel !'),
(37, 'Fennec','Plus petits de la famille des renards (moins de 1,5 kg), le fennec est adapté aux déserts de sable dans lesquels il vit. Sa fourrure épaisse et claire réfléchit la chaleur du soleil et le protège durant les nuits froides.A La Barben, vit un couple, que vous pourrez les observer dans leur bâtiment ou dans leur parc.'),
(38, 'Coati','Cousin du raton laveur, le coati évolue au sol comme dans les arbres, où il se déplace facilement grâce à ses griffes puissantes et à sa longue queue, utilisée comme balancier. Omnivore, il fouille le sol à l’aide de son long museau, à la recherche de nourriture : fruits, petits animaux, œufs… A la Barben, vous découvrirez dans une grande volière végétalisée un groupe familial, composé d’une fratrie de 3 individus nés en 2013.'),
(39, 'Saïmiri','Particulièrement actifs, ces petits singes d’Amérique du Sud vivent en grands groupes sociaux. Ils communiquent par des cris, des postures, mais aussi d’une étrange manière : ils s’urinent sur les mains, puis se frottent la queue et les pattes… C’est tout un groupe de saïmiris qui vit à La Barben !'),
(40, 'Tapir','Avec sa courte trompe et sa crête, le tapir est un animal surprenant, souvent confondu avec le fourmilier. Il ne s’alimente pourtant que de végétaux.Il vit dans la forêt amazonienne, où il est menacé par la chasse pour la viande et la peau et par la déforestation.Un groupe de femelles (une mère et ses filles) vivent à La Barben.'),
(41, 'Casoar','Le casoar doit son nom à son curieux casque composé de kératine. Sa tête et son cou sont déplumés, présentant une surprenante peau bleue et deux caroncules rouges.C’est un couple de casoars que vous pourrez observer à La Barben.'),
(42, 'Crocodile nain','Vivant dans les eaux douces ou à proximité, cette espèce n’a été découverte que récemment, et les observations sont difficiles car elle est solitaire, très discrète et craintive. Chasseur nocturne, ce reptile se nourrit de petits animaux tels que grenouilles, escargots, crabes, oiseaux, reptiles ou petits mammifères.'),
(43, 'Guépard','Pouvant atteindre une vitesse de 110 km/h, le guépard est l’animal terrestre le plus rapide au monde !C’est une fratrie de 4 guépards que vous pourrez observer dans un vaste espace spécialement aménagé selon leurs besoins. '),
(44, 'Gazelle','La gazelle est un petit antelope gracieux, vivant principalement en Afrique et en Asie. Elle est connue pour sa grande agilité et sa vitesse, pouvant atteindre des pointes de 80 km/h pour échapper à ses prédateurs.'),
(45, 'Autruche','Vous reconnaitrez le mâle autruche à son plumage noir et blanc, tandis que les femelles sont marrons. Comme les autres ratites (émeus, casoars, nandous et kiwis), l’autruche est incapable de voler ; en revanche elle peut courir à 70 km/h : c’est l’oiseau le plus rapide en course !Pour ne pas être repérée, elle s’allonge parfois au sol, le cou étendu : c’est probablement l’origine de la légende selon laquelle elle enterrerait sa tête dans le sable !' ),
(46, 'Gnou','Les gnous sont adaptés à la course : endurants et rapides ils peuvent atteindre 80 km/h. Si les femelles et leurs petits vivent en troupeaux, les mâles sont solitaires.A La Barben, ils évoluent dans la plaine africaine, en compagnie des rhinocéros blancs, des oryx beisa.'),
(47, 'Oryx beisa','Ces oryx présentent d’élégantes marques sur la tête, et de fines cornes pouvant atteindre 1.20 mètre de long ! Ils vivent dans les steppes et zones semi-désertiques de la corne de l’Afrique et de certaines parties de la Tanzanie.C’est pourquoi ils présentent certaines adaptations leur permettant de minimiser les pertes en eau.'),
(48, 'Marabout','Bien qu’il fasse partie de la famille des cigognes, le marabout a un comportement plus proche des vautours. En effet, comme ces derniers il est charognard, et vole en altitude à la recherche de carcasses…  Il peut aussi chasser de petits animaux tels que des grenouilles, serpents ou petits mammifères.C’est un couple de marabouts que vous pourrez découvrir dans leur volière ou pendant la présentation d’oiseaux en vol.'),
(49, 'Cigogne','Cette cigogne est reconnaissable à son plumage blanc, le bout des ailes noir, et son long bec orange. Elle n’a pas peur de cohabiter avec les Hommes, et se rencontre dans les zones humides, les cultures et pâturages, voire en milieu urbain!C’est un groupe de 4 cigognes que vous pourrez découvrir, dans leur volière.'),
(50, 'Oryx algazelle','Ces élégants oryx ont différentes adaptations leur permettant de vivre dans les zones désertiques du nord de l’Afrique. Leur pelage clair reflète la lumière du soleil, leurs sabots élargis permettent de marcher dans le sable, et leur température corporelle peut s’élever à 46°, limitant les pertes d’eau liées à la transpiration.A La Barben, le groupe d’oryx algazelles évolue dans une plaine africaine de plus de 7000 m2, en compagnie des watusis et des ânes de Somalie !'),
(51, 'Watusi','Cette race de bœufs est adaptée aux conditions difficiles des plaines africaines : une alimentation rare et de mauvaise qualité, de l’eau en quantité limitée et des températures extrêmes.Ils évoluent dans notre toute nouvelle plaine africaine (plus de 7000 m2 !), en compagnie des ânes de Somalie et des oryx algazelles. Vous serez impressionnés par la couleur de leur pelage, et la taille de leurs cornes !'),
(52, 'Ane de Somalie','Robuste mais élégant, cet âne sauvage n’est rencontré que dans la corne de l’Afrique, où il habite des déserts vallonnés et rocheux et des savanes arides.Au parc, 4 ânesses cohabitent avec les oryx algazelles, eux aussi adaptés aux milieux désertiques, et les watusis. Ils évoluent dans une nouvelle plaine ! '),
(53, 'Yack','Le yack est adapté aux montagnes tibétaines : jusqu’à 6000 mètres d’altitude, des températures atteignant -40°C… Différentes adaptations lui permettent d’y vivre, notamment en supportant le manque d’oxygène, le froid et les rayons solaires puissants.Les yacks sauvages, eux, ne sont plus rencontrés que dans quelques zones non perturbées par les Hommes, et sont considérés comme menacés de disparition.'),
(54, 'Mouton noir','Le mouton noir est une variété de mouton dont la laine est de couleur noire, contrairement aux moutons à laine blanche. Cette caractéristique rare est souvent associée à des symboles de singularité ou de différence. Les moutons noirs sont élevés pour leur laine, parfois plus difficile à traiter en raison de la couleur, et on les retrouve dans diverses races à travers le monde. Le mouton noir est une variété de mouton caractérisée par sa laine noire, contrairement aux moutons traditionnels à laine blanche. Cette couleur distincte peut être due à une mutation génétique, et ces moutons sont souvent associés à des symboles de rareté ou de différence dans de nombreuses cultures.'),
(55, 'Ibis','L'ibis sacré, vénéré dans l'Égypte ancienne, est un oiseau au plumage principalement blanc, avec des plumes noires sur les ailes et un bec long et courbé. Il vit dans les zones humides, se nourrissant de petits poissons et d'insectes. L'ibis rouge, quant à lui, se distingue par son plumage rouge vif, et se trouve principalement en Amérique du Sud, où il chasse des invertébrés et des poissons dans les marais et les rivières.'),
(56, 'Pécari','Les pécaris vivent en groupes de 5 à 15 individus, fortement soudés. La hiérarchie y est précise, et fait étonnant il y a autant de mâles que de femelles, car les mâles subordonnés ne cherchent pas à se reproduire et sont ainsi acceptés par le mâle dominant.'),
(57, 'Tamanoir','Le tamanoir se nourrit essentiellement de fourmis et de termites, parfois de larves et autres insectes.Il a une allure caractéristique : une fourrure épaisse, un museau tubulaire, une langue de 60 cm (la plus longue langue de tous les mammifères !), de longues griffes aux pattes antérieures permettant d’ouvrir les termitières et les fourmilières…'),
(58, 'Flamant rose','Les 6 espèces de flamants sont reconnaissables à leur cou allongé, leurs longues pattes fines, et leur plumage plus ou moins rose, couleur due à un pigment caroténoïde extrait du plancton : cette couleur est variable selon l’espèce mais donc aussi selon la quantité de pigment contenue dans l’alimentation !A La Barben, vous pourrez découvrir le groupe de flamants du Chili évoluer avec les tamanoirs !'),
(59, 'Nandou','Appartenant à la famille de l’autruche, le nandou est, comme elle, incapable de voler. En revanche, ses longues pattes lui permettent de courir jusqu’à 60 km/h ! Au parc animalier de La Barben, les nandous cohabitent avec les tamanoirs et les flamants roses et en 2019 ils ont élevé avec succès 3 petits !'),
(60, 'Emeu','Deuxième plus grand oiseau au monde derrière l’autruche, comme tous les ratites l’émeu est incapable de voler. C’est le seul oiseau à être pourvu de muscles aux mollets, lui permettant courses de longue durée et sprints à 50 km/h ! Son cou de pied puissant est une arme redoutable.'),
(61, 'Wallaby','Ces marsupiaux, aux formes proches des kangourous, se déplacent principalement par bonds, grâce à leurs longues pattes et à leur queue musclée, pouvant ainsi atteindre une vitesse de 65 km/h !Au zoo, ils évoluent dans un vaste parc, qu’ils partagent avec les émeus.'),
(62, 'Porc-épic','Le corps du porc-épic est couvert de poils drus et foncés. Seuls son dos, ses flancs et sa croupe présentent de longs piques noirs et blancs, certains pouvant atteindre 45 cm de long ! S’il est dérangé, il hérisse ces piques, afin de paraître plus volumineux.Vous pourrez observer les porcs-épics dans une volière.Ils sont plutôt nocturnes, et vos meilleures chances de les observer seront de venir en fin de matinée, à l’heure du repas !'),
(63, 'Lynx','Caractérisé par ses pinceaux de poils au bout des oreilles, le lynx est un félin adapté à la vie dans la neige : épaisse fourrure, longues pattes, larges pieds… S’il a une bonne vision nocturne, c’est surtout grâce à son excellente ouïe qu’il repère ses proies.Au parc vit un couple de lynx et un de leur petit, une femelle maintenant adulte : elle est née en 2014 !'),
(64, 'Serval','Le serval est caractérisé par ses grandes oreilles arrondies et rapprochées, et ses longues pattes. Il est connu pour ses bonds (2 à 3 mètres de haut, jusqu’à 4 mètres en longueur), qui lui permettent de plaquer ses proies, généralement des rongeurs, au sol.Au zoo vit un groupe de 3 frères !'),
(65, 'Chien des buissons','Ce canidé a ce surnom, en raison de son odeur ! Afin de se déplacer plus facilement dans la végétation dense, il a les pattes courtes, lui conférant une allure plutôt lente.A La Barben, vit un couple, qui est arrivé en 2021 dans l’espoir d’avoir des naissances ! Ils évoluent dans un parc boisé.'),
(66, 'Tigre','Pouvant atteindre 3m de long et un poids de 300 kg, le tigre est le plus grand des félins. Puissant et majestueux, il est capable de faire des sauts de 10 mètres!En 2020, les tigres font leur grand retour au parc. Ils évoluent dans un nouvel espace de 4000 m2, aménagé selon leurs besoins.  Peut-être même pourrez-vous les admirer pendant leur bain grâce à un bassin à vision subaquatique !'),
(67, 'Bison','Le bison est un grand mammifère herbivore, connu pour sa taille imposante, sa fourrure épaisse et sa tête massive. Il vit principalement dans les prairies et forêts d'Amérique du Nord et d'Europe, où il se nourrit d'herbes, de plantes et de feuillage. Bien qu'il ait failli disparaître en raison de la chasse excessive, des efforts de conservation ont permis de stabiliser ses populations.'),
(68, 'Ane de provence','L'âne de Provence est une race d'âne originaire du sud de la France, particulièrement de la région de la Provence. Il est caractérisé par sa taille moyenne, sa robe généralement grise, parfois tachetée de blanc, et ses oreilles longues. Utilisé traditionnellement pour les travaux agricoles et le transport, cet âne est également apprécié pour sa robustesse et son tempérament calme.'),
(69, 'Dromadaire','Le dromadaire, également appelé "chameau arabe", est un grand mammifère désertique caractérisé par une seule bosse sur son dos. Il est parfaitement adapté aux conditions de chaleur extrême et de sécheresse, capable de survivre plusieurs jours sans eau grâce à sa capacité à stocker les graisses dans sa bosse. Le dromadaire est utilisé comme bête de somme dans les régions arides, transportant des marchandises et des personnes à travers les déserts.');

-- --------------------------------------------------------

--
-- Structure de la table `biomes`
--

DROP TABLE IF EXISTS `biomes`;
CREATE TABLE IF NOT EXISTS `biomes` (
  `id` int NOT NULL AUTO_INCREMENT,
  `color` text NOT NULL,
  `name` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `biomes`
--

INSERT INTO `biomes` (`id`, `color`, `name`) VALUES
(1, '#70D5C2', 'La Bergerie des reptiles'),
(2, '#A4BDCC', 'Le Vallon des cascades'),
(3, '#B5A589', 'Le Belvédère'),
(4, '#E2A59D', 'Le Plateau'),
(5, '#E2CA9D', 'Les Clairières'),
(6, '#C5E29D', 'Le Bois des pins');

-- --------------------------------------------------------

--
-- Structure de la table `enclosures`
--

DROP TABLE IF EXISTS `enclosures`;
CREATE TABLE IF NOT EXISTS `enclosures` (
  `id` int NOT NULL AUTO_INCREMENT,
  `id_biomes` int NOT NULL,
  `meal` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=52 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `enclosures`
--

INSERT INTO `enclosures` (`id`, `id_biomes`, `meal`) VALUES
(1, 2, ''),
(2, 2, ''),
(3, 2, ''),
(4, 2, ''),
(5, 2, ''),
(6, 2, ''),
(7, 2, ''),
(8, 2, ''),
(9, 2, ''),
(10, 1, ''),
(11, 3, ''),
(12, 3, ''),
(13, 3, ''),
(14, 3, ''),
(15, 3, ''),
(16, 3, ''),
(17, 3, ''),
(18, 3, ''),
(19, 3, ''),
(20, 4, ''),
(21, 4, ''),
(22, 4, ''),
(23, 4, ''),
(24, 4, ''),
(25, 4, ''),
(26, 4, ''),
(27, 4, ''),
(28, 4, ''),
(29, 4, ''),
(30, 4, ''),
(31, 4, ''),
(32, 6, ''),
(33, 6, ''),
(34, 6, ''),
(35, 6, ''),
(36, 6, ''),
(37, 5, ''),
(38, 5, ''),
(39, 5, ''),
(40, 5, ''),
(41, 5, ''),
(42, 5, ''),
(43, 5, ''),
(44, 5, ''),
(45, 5, ''),
(46, 5, ''),
(47, 5, ''),
(48, 5, ''),
(49, 5, ''),
(50, 5, ''),
(51, 5, '');

-- --------------------------------------------------------

--
-- Structure de la table `relation_enclos_animals`
--

DROP TABLE IF EXISTS `relation_enclos_animals`;
CREATE TABLE IF NOT EXISTS `relation_enclos_animals` (
  `id` int NOT NULL AUTO_INCREMENT,
  `id_enclos` int NOT NULL,
  `id_animal` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=77 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `relation_enclos_animals`
--

INSERT INTO `relation_enclos_animals` (`id`, `id_enclos`, `id_animal`) VALUES
(1, 1, 4),
(2, 1, 7),
(3, 2, 5),
(4, 3, 6),
(5, 4, 22),
(6, 5, 24),
(7, 6, 23),
(8, 7, 24),
(9, 7, 2),
(10, 8, 25),
(11, 9, 26),
(12, 9, 27),
(13, 10, 1),
(14, 10, 2),
(15, 10, 3),
(16, 11, 35),
(17, 11, 47),
(18, 11, 46),
(19, 12, 36),
(20, 13, 37),
(21, 14, 38),
(22, 14, 39),
(23, 15, 40),
(24, 16, 41),
(25, 17, 42),
(26, 18, 43),
(27, 19, 44),
(28, 19, 45),
(29, 20, 8),
(30, 21, 9),
(31, 18, 43),
(32, 19, 44),
(33, 19, 45),
(34, 20, 8),
(35, 21, 9),
(36, 22, 10),
(37, 23, 11),
(38, 24, 15),
(39, 24, 16),
(40, 25, 12),
(41, 26, 14),
(42, 27, 13),
(43, 28, 17),
(44, 29, 18),
(45, 30, 21),
(46, 31, 19),
(47, 32, 28),
(48, 33, 29),
(49, 35, 31),
(50, 35, 32),
(51, 35, 33),
(52, 36, 34),
(53, 34, 30),
(54, 37, 49),
(55, 38, 20),
(56, 39, 50),
(57, 39, 51),
(58, 39, 52),
(59, 40, 53),
(60, 40, 54),
(61, 41, 55),
(62, 41, 2),
(63, 42, 56),
(64, 43, 57),
(65, 43, 58),
(66, 43, 59),
(67, 44, 60),
(68, 44, 61),
(69, 45, 62),
(70, 46, 63),
(71, 47, 64),
(72, 48, 65),
(73, 49, 66),
(74, 50, 67),
(75, 51, 68),
(76, 51, 69);

-- --------------------------------------------------------

--
-- Structure de la table `services`
--

DROP TABLE IF EXISTS `services`;
CREATE TABLE IF NOT EXISTS `services` (
  `id` int NOT NULL AUTO_INCREMENT,
  `id_biome` int NOT NULL,
  `name` text,
  `type` enum('wc','water','shop','station','lodge','tent','paillote','nomad_cofee','little_cofee','play_area','picnic_area','view') NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int NOT NULL AUTO_INCREMENT,
  `mail` text NOT NULL,
  `username` text NOT NULL,
  `password` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
