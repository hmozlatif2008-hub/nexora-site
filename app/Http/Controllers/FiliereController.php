<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;

class FiliereController extends Controller
{
    public const SLUGS = [
        'developpement-web-mobile', 'cloud-devops', 'intelligence-artificielle', 'cybersecurite',
        'data-science-analytics', 'ux-ui-product-design', 'marketing-digital-growth',
        'ecommerce-business-digital', 'design-graphique-motion', 'game-design-developpement',
        'iot-systemes-embarques', 'blockchain-fintech',
    ];

    public function index(): View
    {
        $filieres = $this->catalogue();

        return view('filieres', compact('filieres'));
    }

    public function show(string $slug): View
    {
        $catalogue = collect($this->catalogue());
        $filiere = $catalogue->firstWhere('slug', $slug);
        abort_unless($filiere, 404);
        $suggestions = $catalogue->where('slug', '!=', $slug)->take(3);

        return view('filieres.show', compact('filiere', 'suggestions'));
    }

    private function catalogue(): array
    {
        return [
            [
                'slug' => 'developpement-web-mobile', 'title' => 'Développement Web & Mobile',
                'category' => 'CODE · PRODUIT', 'symbol' => '</>',
                'description' => 'Concevez des sites et applications utiles, de la première maquette au prototype interactif.',
                'intro' => 'Donnez vie à des idées avec le code. Explorez la création d’interfaces, la logique applicative et les bases des services web.',
                'modules' => ['HTML, CSS & accessibilité', 'JavaScript & interfaces', 'Bases de données & API', 'Tests, versioning & déploiement'],
                'project' => 'Créer un service web responsive qui aide une communauté à partager une ressource locale.',
                'careers' => ['Développeur front-end', 'Développeur back-end', 'Développeur mobile', 'Intégrateur web'],
            ],
            [
                'slug' => 'cloud-devops', 'title' => 'Cloud & DevOps',
                'category' => 'CLOUD · AUTOMATISATION', 'symbol' => '☁',
                'description' => 'Comprenez comment les applications sont hébergées, surveillées et livrées de façon fiable.',
                'intro' => 'Découvrez les coulisses des services numériques : environnements cloud, automatisation et collaboration entre développement et opérations.',
                'modules' => ['Linux & ligne de commande', 'Réseaux et services cloud', 'Conteneurs & intégration continue', 'Supervision & fiabilité'],
                'project' => 'Préparer un déploiement reproductible pour une application de démonstration et documenter son fonctionnement.',
                'careers' => ['Ingénieur cloud junior', 'Assistant DevOps', 'Administrateur systèmes', 'Technicien de plateforme'],
            ],
            [
                'slug' => 'intelligence-artificielle', 'title' => 'Intelligence Artificielle',
                'category' => 'IA · APPRENTISSAGE', 'symbol' => '✳',
                'description' => 'Explorez les données et les modèles qui permettent aux logiciels de repérer des tendances.',
                'intro' => 'Apprenez à poser une question, préparer des données et évaluer un modèle tout en gardant un regard critique sur ses limites.',
                'modules' => ['Python pour l’analyse', 'Préparation et visualisation des données', 'Notions de machine learning', 'Éthique, biais & évaluation'],
                'project' => 'Réaliser une petite expérience de classification et expliquer clairement ce que ses résultats permettent — ou non — de conclure.',
                'careers' => ['Assistant data analyst', 'Développeur IA junior', 'Technicien en données', 'Concepteur d’automatisations'],
            ],
            [
                'slug' => 'cybersecurite', 'title' => 'Cybersécurité',
                'category' => 'SÉCURITÉ · CONFIANCE', 'symbol' => '⌘',
                'description' => 'Adoptez les bons réflexes pour comprendre les risques et protéger des services numériques.',
                'intro' => 'Découvrez les principes de défense numérique, la gestion des accès et l’analyse de risques dans un cadre pédagogique et légal.',
                'modules' => ['Hygiène numérique & identité', 'Réseaux et systèmes sécurisés', 'Gestion des vulnérabilités', 'Réponse aux incidents & conformité'],
                'project' => 'Élaborer un guide de sécurité pour une petite organisation fictive et prioriser des mesures de prévention.',
                'careers' => ['Analyste SOC junior', 'Technicien sécurité', 'Assistant GRC', 'Consultant sensibilisation'],
            ],
            [
                'slug' => 'data-science-analytics', 'title' => 'Data Science & Analytics',
                'category' => 'DATA · DÉCISION', 'symbol' => '◫',
                'description' => 'Transformez des données brutes en observations compréhensibles et en visualisations utiles.',
                'intro' => 'Explorez les étapes d’un projet data : collecte, nettoyage, analyse et communication des résultats sans perdre le contexte.',
                'modules' => ['Python & SQL fondamentaux', 'Nettoyage et qualité des données', 'Statistiques descriptives', 'Datavisualisation & récit'],
                'project' => 'Créer un tableau de bord à partir d’un jeu de données public ou fictif, avec une note sur ses limites.',
                'careers' => ['Data analyst junior', 'Assistant BI', 'Chargé d’études', 'Technicien data'],
            ],
            [
                'slug' => 'ux-ui-product-design', 'title' => 'UX/UI & Product Design',
                'category' => 'DESIGN · EXPÉRIENCE', 'symbol' => '◉',
                'description' => 'Imaginez des produits numériques simples à comprendre, agréables et accessibles.',
                'intro' => 'Partez des besoins des personnes, structurez les parcours puis transformez vos idées en prototypes testables.',
                'modules' => ['Recherche utilisateur', 'Architecture de l’information', 'Prototypage d’interfaces', 'Accessibilité & tests utilisateurs'],
                'project' => 'Repenser le parcours d’un service du quotidien et valider le prototype grâce à des retours d’utilisateurs.',
                'careers' => ['UX designer junior', 'UI designer', 'Product designer junior', 'Assistant recherche utilisateur'],
            ],
            [
                'slug' => 'marketing-digital-growth', 'title' => 'Marketing Digital & Growth',
                'category' => 'STRATÉGIE · AUDIENCE', 'symbol' => '↗',
                'description' => 'Faites connaître une idée grâce au contenu, aux canaux numériques et à une mesure responsable.',
                'intro' => 'Apprenez à définir un public, choisir des canaux pertinents et évaluer l’impact d’une campagne avec des indicateurs utiles.',
                'modules' => ['Stratégie éditoriale', 'Référencement naturel', 'Campagnes & réseaux sociaux', 'Mesure, expérimentation & vie privée'],
                'project' => 'Construire un plan de lancement pour un projet fictif, avec messages, calendrier et critères de réussite.',
                'careers' => ['Chargé de marketing digital', 'Assistant SEO', 'Community manager', 'Analyste acquisition junior'],
            ],
            [
                'slug' => 'ecommerce-business-digital', 'title' => 'E-commerce & Business Digital',
                'category' => 'COMMERCE · SERVICE', 'symbol' => '▣',
                'description' => 'Découvrez comment un service marchand en ligne relie catalogue, expérience client et opérations.',
                'intro' => 'Explorez les choix qui rendent une boutique numérique cohérente : offre, parcours d’achat, confiance et suivi des opérations.',
                'modules' => ['Fondamentaux du commerce en ligne', 'Parcours client & conversion', 'Catalogue, paiement & logistique', 'Service client & indicateurs'],
                'project' => 'Maquetter une boutique responsable pour une marque fictive, du catalogue au suivi de commande.',
                'careers' => ['Assistant e-commerce', 'Coordinateur catalogue', 'Chargé de relation client digitale', 'Assistant marketplace'],
            ],
            [
                'slug' => 'design-graphique-motion', 'title' => 'Design Graphique & Motion',
                'category' => 'IMAGE · MOUVEMENT', 'symbol' => '✹',
                'description' => 'Composez des identités visuelles et des animations qui transmettent une idée avec clarté.',
                'intro' => 'Découvrez les bases de la composition, de la typographie et du mouvement pour créer des supports numériques cohérents.',
                'modules' => ['Couleur, typographie & composition', 'Identité visuelle', 'Illustration numérique', 'Motion design & narration'],
                'project' => 'Créer une mini-campagne animée pour un événement fictif, avec déclinaisons pour plusieurs formats.',
                'careers' => ['Graphiste junior', 'Motion designer junior', 'Assistant direction artistique', 'Créateur de contenus visuels'],
            ],
            [
                'slug' => 'game-design-developpement', 'title' => 'Game Design & Développement',
                'category' => 'JEU · INTERACTIVITÉ', 'symbol' => '△',
                'description' => 'Imaginez des mécaniques de jeu, construisez des prototypes et racontez par l’interaction.',
                'intro' => 'Explorez le design de niveaux, les règles et les boucles de jeu, puis découvrez comment un prototype permet de tester une idée.',
                'modules' => ['Mécaniques & expérience de jeu', 'Narration interactive', 'Prototypage de gameplay', 'Tests, équilibrage & accessibilité'],
                'project' => 'Réaliser un prototype de jeu court autour d’une mécanique originale et documenter les retours de test.',
                'careers' => ['Game designer junior', 'Testeur QA', 'Assistant level design', 'Développeur gameplay junior'],
            ],
            [
                'slug' => 'iot-systemes-embarques', 'title' => 'IoT & Systèmes Embarqués',
                'category' => 'OBJETS · SYSTÈMES', 'symbol' => '⌁',
                'description' => 'Reliez capteurs, logiciels et services pour comprendre les objets connectés.',
                'intro' => 'Découvrez le dialogue entre le monde physique et numérique à travers des prototypes sûrs, documentés et de petite échelle.',
                'modules' => ['Électronique & capteurs de base', 'Programmation embarquée', 'Protocoles de communication', 'Sécurité & consommation énergétique'],
                'project' => 'Imaginer un capteur pédagogique et représenter le chemin de ses données jusqu’à une interface de suivi.',
                'careers' => ['Technicien IoT junior', 'Assistant systèmes embarqués', 'Intégrateur de prototypes', 'Technicien test matériel'],
            ],
            [
                'slug' => 'blockchain-fintech', 'title' => 'Blockchain & Fintech',
                'category' => 'SYSTÈMES · FINANCE', 'symbol' => '◈',
                'description' => 'Comprenez les registres distribués et les nouveaux services financiers numériques avec recul.',
                'intro' => 'Étudiez les concepts derrière les registres distribués, les contrats programmables et les enjeux de confiance, de sécurité et de régulation.',
                'modules' => ['Cryptographie & registres distribués', 'Contrats programmables', 'Paiements numériques & API', 'Risques, conformité & usages responsables'],
                'project' => 'Dessiner le fonctionnement d’un service de traçabilité fictif et analyser ses avantages comme ses limites.',
                'careers' => ['Assistant produit fintech', 'Analyste fonctionnel junior', 'Développeur blockchain junior', 'Assistant conformité numérique'],
            ],
        ];
    }
}
