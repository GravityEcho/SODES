# SODES
Simple Open Dance Evaluation Server - そうです

The goal of this project is to offer a browser-based dance game with qualities similar to games like Dance Dance Revolution, and its PC counterpart Stepmania.
All files can and should be hosted by a web server. I currently recommend dockerized nginx (https://docs.linuxserver.io/images/docker-nginx/).


phases of development:

phase 1 - current

Create a working basic game experience using stepmania and DDR as references.
Keep the code as simple and modular as possible while keeping the end user experience as top priority.
Once menu navigation and gameplay are satisfactory a sqlite database will be implemented for data and user accounts.

phase 2 - 

Enhance the code with features, optimize and polish the code

phase 3 - 

maintain the code


What works:

keyboard navigation of menus
index.html presents song collection directories and allows the user to select a collection.
upon collection selection (hehe) the song directories are displayed with images and details, the user can navigate the songs with arrow keys and the songs play automatically.



What doesn't work:

anything else.
