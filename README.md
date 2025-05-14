Follow the istructions on this page to set up a new Nabaztag/tag serverless firmware:

GitHub

andreax79/ServerlessNabaztag

A firmware allowing controling the Nabaztag/tag directly via web, without an external server - andreax79/ServerlessNabaztag
Just remember that you can use your Raspberry Pi as host for this firmware files (just create a folder named “www” in the config folder and put the “vl” directory right there).
After installing this new firmware, it will be possible to control the rabbit using the Home Assistant user interface:
![FireShot Capture 4 - Home Assistant - https___maxhassio duckdns org_states_group tab_nabaztag](https://github.com/user-attachments/assets/76396d13-a4cb-4041-aa77-7e3cd82eb915)

If you don’t know how to use a package have a look here: https://home-assistant.io/docs/configuration/packages/ or just create a directory named “packages” inside the “config” folder, put the file there and add this line to the configuration.yaml file:

homeassistant:
  packages: !include_dir_named packages


source : https://community.home-assistant.io/t/nabaztag-tag-the-smart-rabbit-is-back/41696
