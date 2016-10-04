var vhost = "bilgisayaci-twocolumntheme.localhost";

var proxySnippet = require("grunt-connect-proxy/lib/utils").proxyRequest;

var server = {
	options: {
		hostname: "localhost",
		port: 3000,
		base: "dev",
		livereload: true,
		open: true
	}
}

if (vhost) {
	server.options.middleware = function (connect, options) {
		return [proxySnippet];
	}

	server.proxies = [{
		context: "/",
		host: vhost,
		port: 80,
		headers: {
			"host": vhost
		}
	}];
}

module.exports = function(grunt) {
	grunt.initConfig({
		pkg: grunt.file.readJSON("package.json"),
		connect: {
			server: server
		},
		sass: {
			dev: {
				files: {
					"dev/assets/stylesheets/css/main.css": "dev/assets/stylesheets/scss/core.scss",
					"dev/assets/plugin/plugin.css": "dev/assets/plugin/plugin.scss"
				},
				options: {
					dumpLineNumbers: "all"
				}
			},
			prod: {
				files: {
					"dev/assets/stylesheets/css/main.css": "dev/assets/stylesheets/scss/core.scss",
					"dev/assets/plugin/plugin.css": "dev/assets/plugin/plugin.scss"
				},
				options: {
					compress: true
				}
			}
		},
		uglify: {
			dev: {
				files: {
					"dev/assets/js/custom/main.min.js": ["dev/assets/js/custom/core.js"],
					"dev/assets/js/engine/engine.min.js": ["dev/assets/js/engine/jquery-1.11.0.min.js","dev/assets/js/engine/jquery-ui.min.js","dev/assets/js/engine/modernizr.2.8.3.js","dev/assets/js/engine/mobile-detect.min.js","dev/assets/js/engine/mobile-detect-modernizr.js"],
					"dev/assets/plugin/plugin.min.js": ["dev/assets/plugin/mCustomScrollbar/jquery.mCustomScrollbar.concat.min.js"]
				},
				options: {
					beautify: true
				}
			},
			prod: {
				files: {
					"dev/assets/js/custom/main.min.js": ["dev/assets/js/custom/core.js"],
					"dev/assets/js/engine/engine.min.js": ["dev/assets/js/engine/jquery-1.11.0.min.js","dev/assets/js/engine/jquery-ui.min.js","dev/assets/js/engine/modernizr.2.8.3.js","dev/assets/js/engine/mobile-detect.min.js","dev/assets/js/engine/mobile-detect-modernizr.js"],
					"dev/assets/plugin/plugin.min.js": ["dev/assets/plugin/mCustomScrollbar/jquery.mCustomScrollbar.concat.min.js"]
				},
				options: {
					banner: "/*! <%= pkg.name %> - v<%= pkg.version %> - <%= grunt.template.today('yyyy-mm-dd') %> */\n"
				}
			}
		},
		watch: {
			files: {
				files: "dev/**/*.{html,php,css,js}",
				options: {
					livereload: true
				}
			},
			scss: {
				files: "dev/**/*.scss",
					tasks: ["sass:dev"]
			},
			js: {
				files: ["dev/**/*.js"],
				tasks: ["newer:uglify:dev"]
			}
		}
	});

	grunt.loadNpmTasks("grunt-contrib-connect");
	grunt.loadNpmTasks("grunt-connect-proxy");
	grunt.loadNpmTasks("grunt-sass");
	grunt.loadNpmTasks("grunt-contrib-uglify");
	grunt.loadNpmTasks("grunt-contrib-watch");
	grunt.loadNpmTasks("grunt-newer");

	grunt.registerTask("default", ["configureProxies:server", "connect", "watch"]);
	grunt.registerTask("prod", ["sass:prod", "uglify:prod"]);
};