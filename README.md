# ARK Server Tools
I found out that there are some very interesting features in the ARK:SE Dedicated Server Parameters.  
I want to develop a simple Webapp that allows configuring these in an easy to undestand fashion.  
  
If you have any Ideas about features you would like to see, feel free to open an Issue about it.  
Pull Requests Welcome!

Please respect the License of this Project!

## Features
- [ ] (General) - Simple Docker Setup
- [x] (ARK:SE Specific) - Dynamic Config
- [ ] (ARK:SE Specific) - Live Tuning
- [ ] (ARK:SE Specific) - Web Notifications
- [ ] (ARK:SE Specific) - Config Generation: `GameUserSettings.ini`, `Game.ini`, `Startup Command Parameters`
- [ ] (ARK:SE Specific) - RCON Console

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
## Links to Resources i found regarding these Features
[Forum Thread about Dynamic Config](https://survivetheark.com/index.php?/forums/topic/553016-added-additional-settings-to-the-dynamic-config/)  
[Official Dynamic Config](http://arkdedicated.com/dynamicconfig.ini)  
[Server Commandline Arguments](https://ark.fandom.com/wiki/Server_configuration#Command_line_arguments)  
[Explanation of Web Notifications](https://ark.fandom.com/wiki/Web_Notifications)

## Components of this project
- [App (Frontend)](app/README.md)

## Setup
> [!Warning]
> It is out of the Scope of this Project to help you to set up everything.  
> I am Providing you with a simple Docker setup. i wont go into detail on how you set up the rest of your Server, use a reverseproxy or anything else.  
> There are enough Resources out there to learn how to set up something along those lines.

To setup this project on your own Server you have to do the following:  

0. Make Sure the [Prerequisites](#setup-prerequisites) are fulfilled.
1. Clone the Git Project to a dedicated folder on your machine
2. `docker compose up -d`

While discouraged, its possible to run the webapp without docker. See the [Manual Setup Guide](app/README.md#manual-setup) for more info.

### Setup Prerequisites
- Packages: Docker, Docker Compose Plugin, Git