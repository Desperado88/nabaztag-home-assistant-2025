Follow the instructions on this page to set up a new Nabaztag/tag serverless firmware:

GitHub source :
  https://github.com/andreax79/ServerlessNabaztag/tree/main

A firmware allowing controlling the Nabaztag/tag directly via web, without an external server - andreax79/ServerlessNabaztag
Just remember that you can use your Raspberry Pi as host for this firmware files (just create a folder named "www" in the config folder and put the "vl" directory right there). For English tts, you can use "bc.jsp" in the "TTS En" folder.
After installing this new firmware, it will be possible to control the rabbit using the Home Assistant user interface:
![FireShot Capture 4 - Home Assistant - https___maxhassio duckdns org_states_group tab_nabaztag](https://github.com/user-attachments/assets/76396d13-a4cb-4041-aa77-7e3cd82eb915)

If you don't know how to use a package have a look here: https://home-assistant.io/docs/configuration/packages/ or just create a directory named "packages" inside the "config" folder, put the file there and add this line to the configuration.yaml file:

homeassistant:
  packages: !include_dir_named packages

Change the violet platform in the Nabaztag parameters with:
[your-hassio-ip]:8123/local/vl/
ex:
192.168.0.100:8123/local/vl/

The guide for using WPA2 wifi (in french):
  https://nabaztag.forumactif.fr/t15437-guide-ressusciter-son-nabaztagtag-v2-avec-upgrade-en-wpa-2-et-openjabnab

source: https://community.home-assistant.io/t/nabaztag-tag-the-smart-rabbit-is-back/41696
        https://github.com/vladger/NabaztagGPT

---

# Traduction en Français

Suivez les instructions sur cette page pour configurer un nouveau firmware serverless pour Nabaztag/tag :

GitHub source :
  https://github.com/andreax79/ServerlessNabaztag/tree/main

Un firmware permettant de contrôler le Nabaztag/tag directement via le web, sans serveur externe - andreax79/ServerlessNabaztag
N'oubliez pas que vous pouvez utiliser votre Raspberry Pi comme hôte pour ces fichiers de firmware (créez simplement un dossier nommé "www" dans le dossier config et placez-y le répertoire "vl").
Après l'installation de ce nouveau firmware, il sera possible de contrôler le lapin via l'interface utilisateur de Home Assistant :
![FireShot Capture 4 - Home Assistant - https___maxhassio duckdns org_states_group tab_nabaztag](https://github.com/user-attachments/assets/76396d13-a4cb-4041-aa77-7e3cd82eb915)

Si vous ne savez pas comment utiliser un package, consultez ici : https://home-assistant.io/docs/configuration/packages/ ou créez simplement un répertoire nommé "packages" à l'intérieur du dossier "config", placez-y le fichier et ajoutez cette ligne au fichier configuration.yaml :

homeassistant:
  packages: !include_dir_named packages

Changer la plateforme violette dans les paramètres de Nabaztag avec :
[votre-hassio-ip]:8123/local/vl/
ex:
192.168.0.100:8123/local/vl/

Le guide pour mettre à jour votre Nabaztag:tag pour utiliser le WPA2 :
  https://nabaztag.forumactif.fr/t15437-guide-ressusciter-son-nabaztagtag-v2-avec-upgrade-en-wpa-2-et-openjabnab

source : https://community.home-assistant.io/t/nabaztag-tag-the-smart-rabbit-is-back/41696
         https://github.com/vladger/NabaztagGPT
