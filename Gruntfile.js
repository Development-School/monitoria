/*Instalar
imagemin-gifsicle
imagemin-mozjpeg
imagemin-pngquant
Separadamente
https://www.webfoobar.com/node/11*/

module.exports = function(grunt) {

  // Load the plugins.
  grunt.loadNpmTasks('grunt-contrib-uglify');
  grunt.loadNpmTasks('grunt-contrib-less');
  grunt.loadNpmTasks('grunt-banner');
  // grunt.loadNpmTasks('grunt-ftpush');

  // Project configuration.
  grunt.initConfig({
    pkg: grunt.file.readJSON('package.json'),

    uglify: {
      main: {
        src: [
              'assets/js/jquery-2.1.4.min.js',
              'assets/js/bootstrap.min.js',
              'assets/js/jquery.mask.min.js',
              'assets/js/main.js'
              ],
        dest: 'assets/js/main.min.js'
      }
    },

    less: {
      expanded: {
        options: {
          paths: ["css"]
        },
        files: {
          "assets/css/estilo.css": "assets/less/estilo.less"
        }
      },
      minified: {
        options: {
          paths: ["css"],
          cleancss: true
        },
        files: {
          "assets/css/estilo.min.css": "assets/less/estilo.less"
        }
      }
    },

    banner: '/*\n' +
    ' * <%= pkg.title %> versao <%= pkg.version %> (<%= pkg.homepage %>)\n' +
    ' * <%= pkg.description %>\n' +
    ' * Copyright <%= grunt.template.today("yyyy") %> <%= pkg.author.name %> <%= pkg.author.url %>\n' +
    ' */\n',
    usebanner: {
      dist: {
        options: {
          position: 'top',
          banner: '<%= banner %>'
        },
        files: {
          src: [
            'assets/css/estilo.css',
            'assets/css/estilo.min.css',
            'assets/js/main.min.js'
          ]
        }
      }
    }

  });

  // Default task(s).
  grunt.registerTask('default', ['uglify', 'less']);

};