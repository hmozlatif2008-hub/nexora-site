<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;

class InformationController extends Controller
{
    public const SLUGS = [
        'institut', 'pedagogie', 'admissions', 'financement',
        'alternance', 'vie-etudiante', 'debouches', 'ressources',
    ];

    public function show(string $slug): View
    {
        $pages = $this->pages();
        abort_unless(isset($pages[$slug]), 404);
        $page = $pages[$slug];

        return view('information.show', compact('page', 'slug'));
    }

    private function pages(): array
    {
        return [
            'institut' => [
                'title' => 'Un institut pour les idées qui font avancer le numérique.',
                'eyebrow' => 'L’esprit NEXORA', 'symbol' => 'N/', 'tone' => 'violet',
                'lead' => 'NEXORA est une école fictive imaginée pour explorer les métiers du digital, apprendre par la pratique et construire des projets qui ont du sens.',
                'highlight_title' => 'Notre boussole',
                'highlight' => 'Rendre la technologie plus compréhensible, plus créative et plus utile au quotidien.',
                'layout' => 'bento',
                'section_heading' => 'Les idées qui guident', 'section_focus' => 'NEXORA.',
                'cards' => [
                    ['number' => '01', 'title' => 'Rester curieux', 'text' => 'Les bonnes questions ouvrent souvent la voie aux meilleures idées.'],
                    ['number' => '02', 'title' => 'Apprendre en faisant', 'text' => 'Expérimenter permet de relier les concepts aux usages concrets.'],
                    ['number' => '03', 'title' => 'Créer ensemble', 'text' => 'Les projets progressent quand les regards et les compétences se complètent.'],
                    ['number' => '04', 'title' => 'Penser aux personnes', 'text' => 'Un outil numérique vaut surtout par l’expérience et le service qu’il apporte.'],
                ],
                'sections' => [
                    ['title' => 'Un terrain d’exploration', 'text' => 'Du code au design, de la donnée à la sécurité, le numérique rassemble des métiers variés. Le site présente ces univers comme des pistes à découvrir, sans prétendre décrire une offre de formation réelle.'],
                    ['title' => 'Une école en mouvement', 'text' => 'Les pages de NEXORA forment une maquette de mini-site MVC : elles illustrent une identité, une organisation de contenus et un parcours de découverte.'],
                ],
                'cta' => 'Parcourir les 12 filières', 'cta_route' => 'filieres',
            ],
            'pedagogie' => [
                'title' => 'Comprendre. Essayer. Recommencer.',
                'eyebrow' => 'Notre pédagogie', 'symbol' => '↗', 'tone' => 'cyan',
                'lead' => 'Une idée devient plus claire quand on la met à l’épreuve. Ici, chaque notion s’inscrit dans un cycle d’exploration, de réalisation et de réflexion.',
                'highlight_title' => 'Le fil rouge',
                'highlight' => 'Apprendre un outil, c’est bien. Savoir quand et pourquoi l’utiliser, c’est mieux.',
                'layout' => 'steps',
                'section_heading' => 'Une méthode vivante,', 'section_focus' => 'étape par étape.',
                'cards' => [
                    ['number' => '01', 'title' => 'Découvrir', 'text' => 'Observer un besoin, explorer un sujet et clarifier la question à résoudre.'],
                    ['number' => '02', 'title' => 'Prototyper', 'text' => 'Transformer une hypothèse en essai simple pour apprendre rapidement.'],
                    ['number' => '03', 'title' => 'Améliorer', 'text' => 'Recueillir des retours, corriger ce qui bloque et expliquer ses choix.'],
                ],
                'sections' => [
                    ['title' => 'Le projet comme terrain d’essai', 'text' => 'Un projet pédagogique n’a pas besoin d’être gigantesque : il doit rendre visible le chemin parcouru, les décisions prises et les prochaines questions.'],
                    ['title' => 'Faire une place au recul', 'text' => 'Accessibilité, sécurité, éthique et impact font partie des sujets à examiner dès la conception, pas seulement à la fin.'],
                ],
                'cta' => 'Découvrir les filières', 'cta_route' => 'filieres',
            ],
            'admissions' => [
                'title' => 'Commencez par trouver le domaine qui vous ressemble.',
                'eyebrow' => 'Admissions · parcours découverte', 'symbol' => '01—04', 'tone' => 'violet',
                'lead' => 'Cette page présente un parcours d’orientation fictif pour la maquette NEXORA. Elle ne constitue pas une procédure réelle de candidature.',
                'highlight_title' => 'Aucun prérequis annoncé',
                'highlight' => 'Explorez librement les disciplines, notez vos questions et échangez autour de votre projet.',
                'layout' => 'timeline',
                'section_heading' => 'Le premier pas', 'section_focus' => 'se construit.',
                'cards' => [
                    ['number' => '01', 'title' => 'Explorer', 'text' => 'Parcourez les domaines du numérique et repérez les sujets qui éveillent votre curiosité.'],
                    ['number' => '02', 'title' => 'Se situer', 'text' => 'Faites le point sur vos envies, vos expériences et les compétences que vous voulez découvrir.'],
                    ['number' => '03', 'title' => 'Poser ses questions', 'text' => 'Préparez quelques questions concrètes sur les contenus, les rythmes et les possibilités.'],
                    ['number' => '04', 'title' => 'Construire sa suite', 'text' => 'Comparez vos pistes et choisissez une prochaine étape adaptée à votre situation.'],
                ],
                'sections' => [
                    ['title' => 'Avant de vous décider', 'text' => 'Dans une vraie démarche, vérifiez toujours les conditions, les dates et les documents directement auprès de l’établissement concerné. Cette maquette n’annonce aucune campagne d’admission réelle.'],
                ],
                'cta' => 'Nous poser une question', 'cta_route' => 'contact',
            ],
            'financement' => [
                'title' => 'Préparer son projet, c’est aussi regarder son budget.',
                'eyebrow' => 'Financement · repères', 'symbol' => '€?', 'tone' => 'cyan',
                'lead' => 'Les possibilités de financement dépendent du pays, du statut et de l’organisme. Voici une grille de réflexion générale, sans tarifs ni aides attribués à NEXORA.',
                'highlight_title' => 'À retenir',
                'highlight' => 'Demandez des informations datées et vérifiez chaque dispositif auprès de l’organisme officiel qui le gère.',
                'layout' => 'cards',
                'section_heading' => 'Décider en connaissance', 'section_focus' => 'de cause.',
                'cards' => [
                    ['number' => 'A', 'title' => 'Lister les coûts', 'text' => 'Pensez aux frais de formation, au matériel, aux transports et au temps disponible.'],
                    ['number' => 'B', 'title' => 'Explorer les options', 'text' => 'Selon le contexte, renseignez-vous sur les aides publiques, les bourses ou le financement employeur.'],
                    ['number' => 'C', 'title' => 'Comparer les conditions', 'text' => 'Vérifiez les critères d’éligibilité, les échéances et les conséquences avant tout engagement.'],
                ],
                'sections' => [
                    ['title' => 'Des questions utiles à poser', 'text' => 'Quel est le coût total ? Que couvre-t-il ? Quels frais restent à prévoir ? Quelles règles s’appliquent à ma situation ? Où trouver l’information officielle à jour ?'],
                    ['title' => 'Pas de chiffres fictifs', 'text' => 'NEXORA est un institut fictif de projet scolaire. Aucun tarif, partenariat financier ou dispositif d’aide n’est annoncé sur ce site.'],
                ],
                'cta' => 'Explorer les parcours', 'cta_route' => 'filieres',
            ],
            'alternance' => [
                'title' => 'Relier les apprentissages aux situations de travail.',
                'eyebrow' => 'Alternance · mode d’emploi', 'symbol' => '↔', 'tone' => 'violet',
                'lead' => 'L’alternance articule des temps d’apprentissage et des expériences en organisation. Son fonctionnement précis varie selon le pays, le contrat et le programme.',
                'highlight_title' => 'Un bon équilibre',
                'highlight' => 'Clarifier le rythme, les objectifs et l’accompagnement aide à faire de chaque expérience un vrai moment d’apprentissage.',
                'layout' => 'split',
                'section_heading' => 'Apprendre en situation,', 'section_focus' => 'progresser ensemble.',
                'cards' => [
                    ['number' => '01', 'title' => 'Relier la pratique aux notions', 'text' => 'Prendre le temps de comprendre les méthodes et les décisions derrière une tâche.'],
                    ['number' => '02', 'title' => 'Garder un suivi régulier', 'text' => 'Prévoir des points de contact pour partager les réussites, les difficultés et les besoins.'],
                    ['number' => '03', 'title' => 'Vérifier les conditions', 'text' => 'Confirmer le rythme, le statut et le cadre légal auprès des organismes compétents.'],
                ],
                'sections' => [
                    ['title' => 'Un parcours partagé', 'text' => 'L’apprenant, l’équipe pédagogique et l’organisation d’accueil ont chacun un rôle dans le suivi des compétences et l’atteinte des objectifs.'],
                    ['title' => 'Avant de choisir', 'text' => 'Demandez quel accompagnement est prévu, comment les périodes s’articulent et quelles sont les modalités réelles du programme visé.'],
                ],
                'cta' => 'Consulter les repères admissions', 'cta_route' => 'information.admissions',
            ],
            'vie-etudiante' => [
                'title' => 'Une vie de campus faite de rencontres et de projets.',
                'eyebrow' => 'La vie NEXORA', 'symbol' => '✳', 'tone' => 'cyan',
                'lead' => 'La vie étudiante ne se résume pas aux cours. Cette vision fictive imagine un campus où l’on partage ses idées, ses cultures et ses découvertes.',
                'highlight_title' => 'Ensemble, on va plus loin',
                'highlight' => 'Un atelier partagé peut devenir le point de départ d’une amitié, d’un projet ou d’une nouvelle passion.',
                'layout' => 'bento',
                'section_heading' => 'Plus qu’un campus,', 'section_focus' => 'un collectif.',
                'cards' => [
                    ['number' => '01', 'title' => 'Clubs & communautés', 'text' => 'Imaginer des groupes autour du jeu, du design, de la robotique ou du logiciel libre.'],
                    ['number' => '02', 'title' => 'Ateliers ouverts', 'text' => 'Partager des outils et apprendre les uns des autres dans un cadre accueillant.'],
                    ['number' => '03', 'title' => 'Rencontres créatives', 'text' => 'Présenter un projet, découvrir un autre métier et échanger des retours.'],
                    ['number' => '04', 'title' => 'Bien-être & entraide', 'text' => 'Prendre soin du collectif et rendre la participation accessible à chacun.'],
                ],
                'sections' => [
                    ['title' => 'Un campus imaginé pour créer', 'text' => 'Studios de projet, zones de calme et espaces collaboratifs composent ici un univers de marque fictif, et non une description d’un site réel.'],
                ],
                'cta' => 'Découvrir l’institut', 'cta_route' => 'information.institut',
            ],
            'debouches' => [
                'title' => 'Le numérique ouvre des chemins très différents.',
                'eyebrow' => 'Métiers & perspectives', 'symbol' => '∞', 'tone' => 'violet',
                'lead' => 'Concevoir, sécuriser, raconter, analyser ou faire fonctionner : les métiers du digital se croisent et se complètent.',
                'highlight_title' => 'Des pistes, pas des promesses',
                'highlight' => 'Les métiers listés sont des exemples d’orientation. Ils ne garantissent ni emploi, ni salaire, ni débouché institutionnel.',
                'layout' => 'cards',
                'section_heading' => 'Des talents,', 'section_focus' => 'plusieurs horizons.',
                'cards' => [
                    ['number' => '01', 'title' => 'Concevoir & développer', 'text' => 'Développement web, ingénierie logicielle, prototypage et intégration.'],
                    ['number' => '02', 'title' => 'Analyser & automatiser', 'text' => 'Analyse de données, intelligence artificielle et outils d’aide à la décision.'],
                    ['number' => '03', 'title' => 'Protéger & opérer', 'text' => 'Cybersécurité, infrastructure, cloud et fiabilité des services.'],
                    ['number' => '04', 'title' => 'Créer & faire grandir', 'text' => 'Design produit, contenu, marketing, commerce et expérience numérique.'],
                ],
                'sections' => [
                    ['title' => 'Des compétences qui voyagent', 'text' => 'La communication, la documentation, la collaboration et la capacité à apprendre restent précieuses à travers de nombreux rôles.'],
                    ['title' => 'Construire son propre itinéraire', 'text' => 'Les pages de filière détaillent des sujets à explorer et des idées de projets pour aider à comparer les domaines.'],
                ],
                'cta' => 'Voir les 12 filières', 'cta_route' => 'filieres',
            ],
            'ressources' => [
                'title' => 'Des ressources pour apprendre à son rythme.',
                'eyebrow' => 'Le studio des idées', 'symbol' => '↗', 'tone' => 'cyan',
                'lead' => 'Petites méthodes, questions à garder en tête et pistes de découverte : un point de départ pour explorer les métiers du numérique.',
                'highlight_title' => 'La méthode NEXORA',
                'highlight' => 'Avancer par petites expériences, garder des traces et partager ce qu’on a appris.',
                'layout' => 'resources',
                'section_heading' => 'Des repères', 'section_focus' => 'pour démarrer.',
                'cards' => [
                    ['number' => 'GUIDE 01', 'title' => 'Démarrer un projet web', 'text' => 'Définir une personne, un besoin et une première fonctionnalité avant de choisir la technologie.', 'href' => 'filieres.developpement-web-mobile'],
                    ['number' => 'GUIDE 02', 'title' => 'Apprendre avec un mini-projet', 'text' => 'Choisir un résultat réaliste, noter les questions et montrer souvent une version imparfaite.', 'href' => 'information.pedagogie'],
                    ['number' => 'GUIDE 03', 'title' => 'Se protéger en ligne', 'text' => 'Utiliser des mots de passe uniques, activer l’authentification renforcée et vérifier les liens.', 'href' => 'filieres.cybersecurite'],
                    ['number' => 'GUIDE 04', 'title' => 'Explorer la donnée', 'text' => 'Commencer par comprendre d’où viennent les données et ce qui pourrait manquer.', 'href' => 'filieres.data-science-analytics'],
                    ['number' => 'GUIDE 05', 'title' => 'Concevoir pour tout le monde', 'text' => 'Vérifier le contraste, le clavier, les libellés et la clarté du langage.', 'href' => 'filieres.ux-ui-product-design'],
                    ['number' => 'GUIDE 06', 'title' => 'Préparer son orientation', 'text' => 'Comparer les sujets, les activités quotidiennes et les questions qu’on a envie de résoudre.', 'href' => 'information.admissions'],
                ],
                'sections' => [
                    ['title' => 'Apprendre est un parcours', 'text' => 'Revenez à une idée, testez-la sous un autre angle, demandez un retour et mettez à jour votre carnet de bord.'],
                ],
                'cta' => 'Trouver un domaine', 'cta_route' => 'filieres',
            ],
        ];
    }
}
