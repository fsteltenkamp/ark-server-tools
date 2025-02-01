# ARK:SE Server Webtools
I found out that there are some very interesting features in the ARK:SE Dedicated Server Parameters.  
I want to develop a simple Webapp that allows configuring these in an easy to undestand fashion.  
  
Please respect the License of this Project!

## Features
Finished:

Planned:
- [] (General) - Simple Docker Setup
- [] (ARK:SE Specific) - Dynamic Config
- [] (ARK:SE Specific) - Live Tuning
- [] (ARK:SE Specific) - Web Notifications

### Explanation of the Features
Dynamic Config:
- A way to tell ARK:SE Servers what settings to use LIVE!  Meaning the Server doesnt have to restart to apply these settings.  
  AFAIK, this is the Way the Official ARK Servers are running. Seeing as how the Official Config is linked in the Wiki.
Live Tuning:
- This is another Config file that allows Admins to set some Parameters for the ARK Server live.
  This is a little different in that it doesnt configure the server itself, rather Configuring Items.
Web Notifications:
- This is an ingame Feature that allows the ARK Server to send notifications to an external Service (This App for example) when certain events happen ingame.
  These are focussed on Tribe Logs. I'll have to play around with this feature to see what exactly the server sends.

## Links to Ressources i found regarding these Features
[Forum Thread about Dynamic Config](https://survivetheark.com/index.php?/forums/topic/553016-added-additional-settings-to-the-dynamic-config/)
[Official Dynamic Config](http://arkdedicated.com/dynamicconfig.ini)
[Server Commandline Arguments](https://ark.fandom.com/wiki/Server_configuration#Command_line_arguments)
[Explanation of Web Notifications](https://ark.fandom.com/wiki/Web_Notifications)