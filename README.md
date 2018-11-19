# npm_scripts
npm scripts to build and develop website in any language you want.

## How to use

Depending on what you are doing it is advised to copy, add or modify the script in the node_scripts folder.

Run either of those command in the terminal at the root of your project.

To start codding
```
npm start
```
Pack your web project for production
```
npm run build
```

## Structure

	app
	node_scripts
		start.js
		build.js
	package.json

**app :** This is where your happy app lives and grow. If you are searching for a developper you have 99% chance to find him here. These are the uncompiled source of the application.

**node_scripts :** Just like the node modules but for npm_scripts. This Folder contains all script that can be called by the package.json file. They can be in any langage you like. These script are written in nodejs.

**start.js :** The purpose of this file is to start all the necesary action in order to start coding your web project. It usally lunch some kind of live reload server and your favorite browser that auto refresh when you press ctrl+s on your file editor. At the moment this file also handle SASS file compilation and watch for .js and .html change. You can call this script by running **npm start** or **npm run start** at the root of your app in your terminal.

**build.js :** Prepare a folder for server ready deployement. It Minifies the css and js files through node-minify. **npm run build** in your terminal to build your source files. By the end you will have a build or dist folder placed at the root of your app.

**package.json :** Adding a "scripts" section in this file alwoys you to setup actions to take when instaling or building an application. To know what you can do with it and see the reserved action like prebuild or preinstall are [follow the documentation](https://docs.npmjs.com/misc/scripts).

## Motivation behind this project

Got sick of random error I did not understand popping in my terminal each time I used Grunt or Gulp. So I started researching how to do my own tooling scripts. They are not has good has the other tooling solution for sure but I prefer to have a solution that I can understand and refined with ease.
