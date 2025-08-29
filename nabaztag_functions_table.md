# Fonctions Nabaztag - Tableau récapitulatif

## Contrôle physique

| Catégorie | Fonction | Endpoint | Paramètres | Description |
|-----------|----------|----------|------------|-------------|
| **Taichi** | Faire taichi maintenant | `/taichi?v=1000` | v=1000 | Déclenche immédiatement la séquence taichi |
| | Arrêter taichi | `/taichi?v=0` | v=0 | Désactive le taichi |
| | Taichi minimum | `/taichi?v=40` | v=40 | Intensité taichi faible |
| | Taichi moyen | `/taichi?v=80` | v=80 | Intensité taichi moyenne |
| | Taichi maximum | `/taichi?v=255` | v=255 | Intensité taichi maximale |

## Indicateurs visuels

| Catégorie | Fonction | Endpoint | Paramètres | Description |
|-----------|----------|----------|------------|-------------|
| **Nez** | Éteint | `/nose?v=0` | v=0 | Nez éteint |
| | Allumé | `/nose?v=1` | v=1 | Nez allumé |
| | Todo | `/nose?v=2` | v=2 | Indicateur "à faire" |
| | Urgent | `/nose?v=3` | v=3 | Indicateur urgent |
| | Panique | `/nose?v=4` | v=4 | Indicateur de panique |

## Contrôle des oreilles

| Catégorie | Fonction | Endpoint | Paramètres | Description |
|-----------|----------|----------|------------|-------------|
| **Oreille gauche** | Position 0-16 | `/left?p=X&d=0` | p=0-16, d=0 | Positionne l'oreille gauche |
| **Oreille droite** | Position 0-16 | `/right?p=X&d=0` | p=0-16, d=0 | Positionne l'oreille droite |

## Informations contextuelles

| Catégorie | Fonction | Endpoint | Paramètres | Description |
|-----------|----------|----------|------------|-------------|
| **Météo** | Soleil | `/weather?v=0` | v=0 | Affichage météo ensoleillée |
| | Nuages | `/weather?v=1` | v=1 | Affichage météo nuageuse |
| | Brouillard | `/weather?v=2` | v=2 | Affichage météo brouillard |
| | Pluie | `/weather?v=3` | v=3 | Affichage météo pluvieuse |
| | Neige | `/weather?v=4` | v=4 | Affichage météo neige |
| | Orage | `/weather?v=5` | v=5 | Affichage météo orageuse |
| **Bourse** | Très baisse (---) | `/stock?v=0` | v=0 | Indicateur bourse très négatif |
| | Baisse (--) | `/stock?v=1` | v=1 | Indicateur bourse négatif |
| | Légère baisse (-) | `/stock?v=2` | v=2 | Indicateur bourse légèrement négatif |
| | Stable (0) | `/stock?v=3` | v=3 | Indicateur bourse stable |
| | Légère hausse (+) | `/stock?v=4` | v=4 | Indicateur bourse légèrement positif |
| | Hausse (++) | `/stock?v=5` | v=5 | Indicateur bourse positif |
| | Forte hausse (+++) | `/stock?v=6` | v=6 | Indicateur bourse très positif |
| **Trafic** | Libre | `/traffic?v=0` | v=0 | Trafic fluide |
| | Correct | `/traffic?v=1` | v=1 | Trafic correct |
| | Modéré | `/traffic?v=2` | v=2 | Trafic modéré |
| | Normal | `/traffic?v=3` | v=3 | Trafic normal |
| | Dense | `/traffic?v=4` | v=4 | Trafic dense |
| | Congestionné | `/traffic?v=5` | v=5 | Trafic congestionné |
| | Extrême | `/traffic?v=6` | v=6 | Trafic extrême |
| **Pollution** | Niveau 0-10 | `/pollution?v=X` | v=0-10 | Indicateur de pollution (0=faible, 10=élevé) |

## Audio et communication

| Catégorie | Fonction | Endpoint | Paramètres | Description |
|-----------|----------|----------|------------|-------------|
| **Sons prédéfinis** | Communication | `/communication` | - | Son de communication |
| | Acquittement | `/ack` | - | Son d'acquittement |
| | Annulation | `/abort` | - | Son d'annulation |
| | Mini-stop | `/ministop` | - | Son mini-stop |
| **Audio personnalisé** | Lire MP3 | `/play?u=URL` | u=URL_MP3 | Joue un fichier MP3 (HTTP uniquement) |
| | Synthèse vocale | `/say?t=TEXTE` | t=texte | Fait parler le Nabaztag |

## Gestion de l'état

| Catégorie | Fonction | Endpoint | Paramètres | Description |
|-----------|----------|----------|------------|-------------|
| **Contrôle général** | Surprise | `/surprise` | - | Action surprise aléatoire |
| | Tout arrêter | `/stop` | - | Arrête toutes les actions |
| | Effacer infos | `/clear` | - | Efface les informations affichées |
| **Sommeil** | Dormir | `/sleep` | - | Met le Nabaztag en veille |
| | Réveil | `/wakeup` | - | Réveille le Nabaztag |

## Système et configuration

| Catégorie | Fonction | Endpoint | Paramètres | Description |
|-----------|----------|----------|------------|-------------|
| **Système** | Statut JSON | `/status` | - | Récupère l'état complet en JSON |
| | Mise à jour heure | `/update-time` | - | Synchronise l'heure |
| | Mise à jour météo | `/update-weather` | - | Met à jour les infos météo |
| | Redémarrer | `/reboot` | - | Redémarre le Nabaztag |
| **Configuration** | Paramétrage | `/setup` | j,k,l,c,d,w,b | Configuration complète |

### Paramètres de configuration (/setup)
- `j` : Latitude
- `k` : Longitude  
- `l` : Langue (uk/it/fr/es)
- `c` : Code ville (fuseau horaire)
- `d` : Heure d'été (0/1)
- `w` : Heure de réveil (0-23)
- `b` : Heure de coucher (0-23)