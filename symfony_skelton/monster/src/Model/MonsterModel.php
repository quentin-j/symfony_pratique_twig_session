<?php

namespace App\Model;

class MonsterModel
{
    private $monster = [
        [
            'name' => 'Dragon vert',
            'description' => 'Le plus rusé et perfide des vrais dragons, les dragons verts utilisent la désinformation et la tricherie pour obtenir un avantage contre leurs ennemis. On reconnaît un dragon vert à la crête qui débute près de ses yeux et descend le long de sa colonne vertébrale, atteignant sa pleine hauteur juste derrière le crâne.',
            'image' => 'dragon_vert.jpg',
            'intro' => 'monstre faisant parti du folklore de donjon & dragon'
        ],
        [
            'name' => 'Flagelleur mental',
            'description' => 'Les illithids, ou flagelleurs mentaux, sont des créatures malfaisantes que craignent tous les habitants des Tréfonds Obscurs. Leurs pouvoirs sont immenses et ils se nourrissent du cerveau de toutes les créatures qu\'ils croisent. Leurs pouvoirs magiques leur permettent de détruire tous leurs adversaires ou de les réduire en esclavage. Parmi leurs pires ennemis, on dénombre les drows et les kuo-toas. Les flagelleurs mentaux font environ 1,80 m de haut. Ils ont une hideuse peau mauve, luisante de bave. Leur tête ressemble à une pieuvre : elle est dotée de deux yeux blancs sans pupille, d\'une bouche ronde, munie de nombreuses dents (qui fait penser à la bouche d\'une lamproie) et, surtout, de quatre tentacules frétillants qui entourent cette dernière. Ce monstre a trois doigts rouges et un pouce par main. Les illithids sont dotés d\'infravision et de télépathie, ce qui leur permet de communiquer avec toutes les créatures intelligentes. Ils ne possèdent aucun langage parlé, encore qu\'ils accompagnent fréquemment leurs pensées de sifflements et de gestes des tentacules. Ils revêtent souvent une robe ample au col dur et relevé, qu\'ils ornent de symboles de mort et de désespoir.',
            'image' => 'flageleur.jpg',
            'intro' => 'monstre faisant parti du folklore de donjon & dragon'
        ],
        [
            'name' => 'Gobelours',
            'description' => 'Les gobelours sont des gobelinoïdes velus nés pour la bataille et la destruction. Ils survivent en pillant et en chassant, mais sont friands des attaques en embuscades d\'où ils peuvent rapidement s\'enfuir en cas de problème.',
            'image' => 'gobelours.jpg',
            'intro' => 'monstre faisant parti du folklore de donjon & dragon'
        ],
        [
            'name' => 'Gobelin',
            'description' => 'Les gobelins sont de petits humanoïdes malveillants qui vivent dans des donjons abandonnés ou dans des taudis lugubres. Individuellement faibles, ils se rassemblent en grand nombre pour tourmenter les autres créatures.',
            'image' => 'goblin.jpg',
            'intro' => 'monstre faisant parti du folklore de donjon & dragon'
        ],
        [
            'name' => 'Hibours',
            'description' => 'Croisement monstrueux entre un ours et un hibou géant, l\'ours-hibou est réputé pour sa férocité et son agressivité, qui en font l\'un des prédateurs les plus redoutés de la nature.',
            'image' => 'hibours.jpg',
            'intro' => 'monstre faisant parti du folklore de donjon & dragon'
        ],
        [
            'name' => 'Merrow',
            'description' => 'On trouve parfois de gentiile tribus de siréniens jouant dans les vagues, en petit groupes, aimant la baignade et les jeux. Les merrows n\'ont rien à voir. Les légendes racontent qu\'une telle tribu a un jour été mauditte par une ancienne relique qui les a liés à Démogorgon, l\'être diabolique parfois appelé Prince des démons. Guidé par sa folie meurtrière le roi des siréniens a alors ouvert un portail vers les Abysses, la dimension de Démogorgon. Les siréniens ont alors été métamorphosé par la folie et la rage meurtrière, leurs crocs et leurs ongles se sont allongés pour devenir des griffes térrifiantes. ils sont ressortis des Abysses comme une nouvelle race, une race de prédateur vicieux, prêt à attaquer les navires, noyer et dévorer les marins et accumuler les richesses. Ils sèment la peur et le chaos, sous les ordres de leurs seigneur démon.',
            'image' => 'merfolk.jpg',
            'intro' => 'monstre faisant parti du folklore de donjon & dragon'
        ],
        [
            'name' => 'Myconide',
            'description' => 'Les myconides, ou hommes-champignons, sont des champignons intelligents qui vivent dans les régions les plus isolées des Tréfonds Obscurs. Particulièrement prudents, ils déplorent la violence sous toutes ses formes. Ils n\'ont aucun désir de conquête et demandent seulement qu\'on les laisse vivre en paix. Ces créatures ressemblent à de gros champignons vaguement humanoïdes. Leur chair, gonflée et spongieuse, va du violet au gris. Leurs pieds larges sont dotés d\'orteils insuffisamment développés et leurs mains n\'ont que deux petits doigts ainsi que deux pouces, un de chaque côté. Leur épiderme (mains exceptées) laisse en permanence suinter une substance toxique pour toutes les autres créatures vivantes. Le simple fait de les toucher inflige 1d4 points de dégâts à qui le fait. C\'est le nombre de dés de vie des myconides qui détermine leur statut social et les pouvoirs qui sont les leurs. Ils ne possèdent pas de langage parlé.',
            'image' => 'myconid.jpg',
            'intro' => 'monstre faisant parti du folklore de donjon & dragon'
        ],
        [
            'name' => 'Ogre',
            'description' => 'Les ogres ressemblent à des géants et sont connus pour leur caractère irritable. Lorsque sa rage est titillée, un ogre se déchaîne dans un accès de colère frustrée jusqu\'à ne plus avoir d\'objets ou de créatures à écraser.',
            'image' => 'ogre.jpg',
            'intro' => 'monstre faisant parti du folklore de donjon & dragon'
        ],
        [
            'name' => 'spectateur',
            'description' => 'Un spectateur est une forme inférieure du tyrannoeil, une aberration infâme et mortelle. Il ressemble à une sphère flottante à la mâchoire béante, et possède un grand œil unique au centre de quatre pédoncules oculaires qui lancent des rayons mortels.',
            'image' => 'spectateur.jpg',
            'intro' => 'monstre faisant parti du folklore de donjon & dragon'
        ],
        [
            'name' => 'Sylvanien',
            'description' => 'Les sylvaniens sont des créatures étranges combinant les traits des humains et des arbres. De nature paisible, ils peuvent délivrer de prodigieux dégâts lorsqu\'on les met en colère. Ils détestent les êtres maléfiques et ceux qui utilisent le feu sans savoir le contrôler. Il est quasiment impossible de les différencier des arbres normaux. Leur peau épaisse ressemble à s\'y méprendre à de l\'écorce brune. Leurs bras sont noueux comme des branches et leurs jambes sont semblables aux racines externes d\'un arbre. De petites branches poussent juste au-dessus de leurs yeux, et les larges feuilles qui en pendent leur permettent de masquer leurs traits. Leurs feuilles changent de couleur en hiver, mais il est rare qu\'elles tombent. Ces monstres très intelligents parlent souvent un grand nombre de dialectes en plus de leur langue maternelle : l\'elfe, le nain, le commun et ont quelques notions de la plupart des autres langues humanoïdes (au moins assez pour dire « Fichez le camp de mes arbres ! »).',
            'image' => 'sylvanien.jpg',
            'intro' => 'monstre faisant parti du folklore de donjon & dragon'
        ],
    ];

    public function getAll() :array
    {
        return $this->monster;
    }

    public function getById($id) : ?array   // <= le "?" permet de prévenir PHP que la valeur peut renvoyer une valuer nulle
    {
        if( ! array_key_exists($id, $this->monster)) // OU : if(isset($this->monster[$id]));
        {
            return null;
        }        
        return $this->monster[$id];
    }
}