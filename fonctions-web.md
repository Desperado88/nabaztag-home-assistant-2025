# Liste des fonctions disponibles dans le serveur HTTP MTL

## Fonctions du serveur HTTP

### Gestion des en-têtes HTTP
- `http_header` - Génère les en-têtes HTTP avec statut et type de contenu
- `httpgetheader` - Extrait l'en-tête d'une réponse HTTP
- `findsize` - Trouve la taille du contenu à partir de l'en-tête Content-Length

### Gestion des connexions TCP
- `tcpwrite` - Écrit des données sur une connexion TCP
- `tcpsend` - Envoie une chaîne sur une connexion TCP
- `tcpcloseafter` - Marque une connexion pour fermeture après écriture
- `tcpread` - Lit les données d'une connexion TCP
- `tcpevent` - Gestionnaire d'événements TCP (écriture, fermeture, lecture)
- `cbsrv` - Callback du serveur pour accepter les connexions
- `starthttpsrv` - Démarre le serveur HTTP sur un port donné

## Fonctions de génération JSON

### Utilitaires JSON
- `doublequote` - Encadre une chaîne de guillemets doubles
- `jsonvalue` - Crée une paire clé-valeur JSON
- `jsonnext` - Ajoute une virgule et nouvelle ligne pour JSON
- `jsonlast` - Ajoute juste une nouvelle ligne (dernier élément JSON)

### Générateurs de contenu JSON
- `jsonstatus` - Génère le statut système complet en JSON
- `job_format_json` - Formate un job en JSON
- `json_jobs` - Génère la liste des jobs en JSON

## Fonctions de contenu web

- `httpindex` - Génère la page d'accueil HTML
- `milligram_css` - Sert le fichier CSS Milligram

## Fonctions de traitement des URLs

### Décodage et parsing
- `filterplus` - Remplace les caractères '+' par des espaces
- `filterpercent` - Décode les caractères encodés en pourcentage (%XX)
- `extractargs` - Extrait les arguments d'une URL (après ?)
- `extractpage` - Extrait le chemin de la page d'une URL
- `uriextract` - Analyse complète d'une URI (page + arguments)

### Récupération des paramètres
- `Sgetargvalue` - Récupère une valeur string des arguments par clé
- `Igetargvalue` - Récupère une valeur entière des arguments par clé

## Fonction principale

### Gestionnaire de requêtes HTTP
- `cbhttp` - Callback principal qui traite toutes les requêtes HTTP et route vers les bonnes actions

### Démarrage du serveur
- `startwebserver` - Fonction d'initialisation du serveur web

## Endpoints HTTP disponibles

Le fichier définit de nombreux endpoints accessibles via HTTP :

### Contrôle système
- `/update-time` - Met à jour l'heure depuis le serveur
- `/update-weather` - Met à jour les informations météo
- `/stop` - Arrête tout et remet en mode idle
- `/reboot` - Redémarre le système
- `/surprise` - Déclenche une surprise
- `/sleep` - Met en mode sommeil
- `/wakeup` - Réveil du mode sommeil

### Statut et informations
- `/status` - Retourne le statut système en JSON
- `/jobs` - Retourne la liste des jobs en JSON

### Audio et sons
- `/communication` - Joue le son de communication
- `/ack` - Joue le son d'acquittement  
- `/abort` - Joue le son d'annulation
- `/ministop` - Joue le son ministop
- `/play` - Joue un fichier audio depuis une URL
- `/say` - Synthèse vocale via Google Translate TTS
- `/mp3` - Joue un fichier MP3

### Contrôles physiques
- `/left` - Contrôle l'oreille gauche (position, direction)
- `/right` - Contrôle l'oreille droite (position, direction)
- `/taichi` - Contrôle Tai Chi
- `/nose` - Contrôle du nez (messages visuels)

### Sources d'information
- `/weather` - Informations météo (0-5)
- `/stock` - Marché boursier (0-6) 
- `/traffic` - Informations trafic (0-6)
- `/mail` - Informations mail (0-4)
- `/pollution` - Informations pollution (0-10)
- `/clear` - Efface toutes les sources d'info

### Configuration
- `/setup` - Configuration système (langue, ville, coordonnées, horaires, etc.)

### Fichiers statiques
- `/milligram.css` - Fichier CSS
- `/` - Page d'accueil HTML