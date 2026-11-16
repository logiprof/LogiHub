=== LogiHub ===
Contributors: logiprof
Tags: shortcode, accordion, students, navigation
Requires at least: 5.8
Requires PHP: 7.4
Stable tag: 0.11.0
License: GPLv2 or later

Les ressources des élèves : menus de rubriques, liens vers vos pages et outils intégrés, gérés par l’administration. Présentation LogiOne by LogiProf.

== Description ==

LogiHub ajoute une entrée d'administration permettant de créer un ou plusieurs menus de navigation composés de rubriques déroulantes, de sous-catégories et de liens.

Le menu s'insère dans WordPress ou Divi avec le shortcode :

[logihub]

Chaque menu créé dans l'administration dispose aussi de son propre shortcode :

[logihub menu="identifiant_du_menu"]

Un élément précis peut être affiché avec :

[logihub menu="identifiant_du_menu" item="identifiant_de_l_element"]

L'ancien shortcode `[logiprof_espace_enseignants]` reste accepté pour ne pas casser les pages déjà publiées.

La structure initiale est créée uniquement lors de la première installation. Les réactivations et mises à jour ne remplacent pas les réglages ou le contenu modifiés.

== Fonctionnalités ==

* Rubriques déroulantes imbriquées et liens au premier niveau ou dans une rubrique.
* Création de plusieurs menus indépendants, chacun utilisable à un emplacement différent.
* Administration en arborescence avec glisser-déposer, boutons de déplacement, parent modifiable et aperçu.
* Destinations vers une page WordPress enregistrée par identifiant ou vers une URL manuelle.
* Destination spéciale vers le backoffice WordPress.
* Destination spéciale vers un shortcode intégré, par exemple `[logiprof_sensei_group_progress show_filters="yes"]`.
* Restriction optionnelle par élément selon les rôles WordPress, sans propagation aux autres éléments.
* Shortcode direct par élément, visible dans l'administration.
* Liens ouverts systématiquement dans un nouvel onglet avec rel="noopener noreferrer".
* Restriction globale optionnelle du menu complet selon les rôles WordPress.
* Apparence personnalisable : titre, couleurs, largeur, arrondis et densité.
* Rendu responsive et navigation clavier.

== Installation ==

1. Copier le dossier `logiprof-espace-enseignants` dans `wp-content/plugins/`.
2. Activer le plugin depuis l'administration WordPress.
3. Configurer le menu dans `LogiHub`.
4. Ajouter le shortcode `[logihub]` dans la page ou dans un module Texte Divi.

== Notes ==

Par défaut, les utilisateurs connectés voient le menu. Un visiteur non connecté ou non autorisé ne reçoit pas les liens dans le contenu de la page.

== Mises à jour ==

LogiHub se met à jour comme une extension WordPress ordinaire depuis GitHub (dépôt public logiprof/LogiHub) : quand une version est publiée, WordPress affiche « Une nouvelle version est disponible » dans Extensions, et le lien « Activer les mises à jour auto » fonctionne. Seuls les fichiers de l'extension sont remplacés : menus, tuiles et réglages ne sont pas touchés. Écran LogiHub › Mises à jour : version installée, dernière version publiée, bouton « Vérifier maintenant ».

== Changelog ==

= 0.11.0 =
* Même largeur que LogiOne : nouveau réglage « Largeur de la page » (Apparence › Présentation en tuiles). « Toute la largeur de l'écran (comme LogiOne) » est le choix par défaut ; « Standard (centrée) » garde l'ancienne présentation.
* Le bandeau et les tuiles s'alignent sur la même largeur que l'accueil LogiOne, le texte d'accueil s'étale sur moins de lignes, et les tuiles remplissent toute la rangée.
* Comprend toutes les nouveautés de la 0.10.2.

= 0.10.2 =
* Mises à jour automatiques depuis GitHub (dépôt logiprof/LogiHub), avec l'écran LogiHub › Mises à jour. Aucune clé n'est nécessaire (dépôt public).
* Le contenu ouvert sous une tuile occupe toute la largeur de l'écran, comme dans LogiOne. À côté d'une grande tuile, il se place sous la rangée, et la page défile pour montrer le début du contenu.
* Les outils pleine page placés dans une tuile (LogiPlanning, LogiEval, LogiLive, LogiExam…) restent dans le cadre du contenu ouvert : plus de partie coupée à gauche ni à droite.
* Éditeur dans une page : texte blanc lisible sur les boutons principaux.
* Supprimer l'extension ne supprime plus les menus, tuiles et réglages : ils sont conservés pour une réinstallation.


= 0.10.1 =
* Le contenu d'une tuile s'ouvre juste sous la tuile choisie (et non plus sous toute la rangée), et la page se place pour montrer la tuile et le début de son contenu. Les grandes tuiles voisines gardent leur hauteur. Le placement suit la largeur de l'écran.

= 0.10.0 =
* Couleur de l'en-tête au choix (palette ou toutes les teintes) ; textes, salutation et logo passent automatiquement en clair ou en foncé.

= 0.9.0 =
* Nouvel élément « Bloc de texte » : un texte mis en forme (paragraphes, titres, gras, italique, souligné, surligné, liens, listes), comme tuile à part entière ou à l'intérieur d'une rubrique.

= 0.8.1 =
* Texte d'accueil : choix du type de texte (Paragraphe, Titre 1, Titre 2, Titre 3, Titre 4) dans l'éditeur visuel.

= 0.8.0 =
* Texte d'accueil mis en forme avec un éditeur visuel : gras, italique, souligné, surligné, liens, listes, paragraphes.
* Menus réutilisables : une rubrique peut reprendre le contenu d'un autre menu (dans la rubrique, ou directement à sa place). Les éléments communs se gèrent une seule fois.
* Nouvel affichage compact d'un menu dans une autre page : attribut vue="panneau" (sans bandeau).

= 0.7.1 =
* Les rubriques et panneaux masqués restent fermés même si le thème du site impose un affichage.
* Éditeur : le « shortcode direct » d’un élément est replié dans « Avancé » et n’apparaît plus dans l’arborescence (il ne sert qu’à afficher un élément seul ailleurs).

= 0.7.0 =
* Couleur des tuiles : palette complète de pastilles (couleurs LogiProf et gamme étendue) et « Autre couleur » pour toutes les teintes.
* « Ouverture du lien » réglable pour chaque lien, quelle que soit la présentation (tuiles ou liste) : même onglet ou nouvel onglet.

= 0.6.0 =
* Moins de pages ouvertes : plus rien ne s'ouvre dans un nouvel onglet par défaut.
* Une page du site s'affiche directement dans LogiHub (même onglet), avec un bouton « Retour » qui rouvre la rubrique telle que l'élève l'avait laissée, et le chemin parcouru.
* Réglage par lien (« Ouverture du lien ») : automatique, même onglet, ou nouvel onglet.

= 0.5.1 =
* Bandeau : Noki, la mascotte LogiProf, sur sa palette, à la place des cubes (comme dans LogiOne).

= 0.5.0 =
* Icônes importées : pour chaque élément, une image de la médiathèque (PNG, JPG, WebP ou SVG) remplace le pictogramme sur la tuile, dans les onglets et les listes.
* Fichiers SVG acceptés pour les personnes qui gèrent LogiHub, nettoyés à l'envoi (aucun script, événement ni lien externe).
* Couleur libre pour chaque tuile (sélecteur de couleur) ; texte et accents ajustés automatiquement pour rester lisibles.
* Couleurs automatiques des tuiles modifiables (Apparence), avec retour aux couleurs LogiProf en un clic.

= 0.4.0 =
* Navigation en tuiles repensée pour moins de clics : une tuile de rubrique déplie son contenu juste en dessous, dans la même page, sans rechargement.
* Sous-rubriques en onglets (ex. CFC / AFP) ; liens en lignes compactes ; un outil intégré se déplie sur place.
* L'onglet choisi est mémorisé (l'élève d'AFP retrouve AFP) ; l'adresse garde l'état ouvert (rechargement, favori).
* Recherche dans le bandeau : résultats immédiats, un résultat ouvre directement la bonne rubrique.
* Personnalisation : couleur et taille (normale ou large) de chaque tuile ; recherche, salutation et illustration activables.
* Clavier : Échap referme, flèches pour passer d'un onglet à l'autre.

= 0.3.0 =
* Nouvelle présentation en tuiles, comme LogiOne : bandeau anthracite avec « Bonjour » et le titre, puis une tuile par rubrique, lien ou outil, aux couleurs LogiProf.
* Une rubrique ou un outil intégré s'ouvre dans la même page, avec un bouton Retour et le fil d'Ariane ; les liens ouvrent leur destination.
* Réglage « Texte d'accueil » (onglet Apparence) et aperçu en tuiles dans l'éditeur.
* La présentation en liste et les couleurs personnalisées restent disponibles (Apparence → Présentation).
* Mise à jour sans perte : contenus, rôles et réglages conservés ; la présentation passe aux tuiles, sauf si des couleurs personnalisées avaient été choisies.

= 0.2.1 =
* LogiHub est entièrement indépendant de LogiOne : il reste actif à côté, avec ses propres menus pour les élèves.
* Refus d'enregistrement : réponse « accès interdit » (403).

= 0.2.0 =
* LogiHub s'adresse aux élèves : nouvelle présentation LogiOne (couleurs LogiProf, logo « LogiHub by LogiProf », police Poppins intégrée).
* Réglage « Présentation » : LogiOne (par défaut) ou couleurs personnalisées.
* Éditeur restylé et utilisable dans une page avec `[logihub_editeur]` (réservé à l'administration).
* Le droit d'édition est filtrable (`logihub_capability`) ; par défaut, l'administrateur.
* Mise à jour sans perte : menus, contenus, rôles et réglages existants sont conservés ; seule la présentation LogiOne est activée.
