var pngquant = require('imagemin-pngquant');
var mozjpeg = require('imagemin-mozjpeg');

module.exports = function(grunt) {

  // Load the plugins.
  grunt.loadNpmTasks('grunt-contrib-uglify');
  grunt.loadNpmTasks('grunt-contrib-less');
  grunt.loadNpmTasks('grunt-contrib-imagemin');
  grunt.loadNpmTasks('grunt-ftpush');
  grunt.loadNpmTasks('grunt-banner');
  grunt.loadNpmTasks('grunt-contrib-clean');

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
    },

    imagemin:{
      target: {
        options: {
          optimizationLevel: 3,
          progressive: true,
          use: [pngquant(), mozjpeg()]
        }, // options
        files: [{
          expand: true,
          cwd: 'assets/src_imgs/',
          src: ['**/*.{png,jpg,jpeg,gif,svg}'],
          dest: 'assets/imgs/'
        }] // files
      } // target
    }, // imagemin

    clean: ["assets/imgs/", "assets/css/"],

    ftpush: {
      build: {
        auth: {
          host: 'ftp.rodrigoalves.me',
          port: 21,
          authKey: 'key1'
        },
        src: './',
        dest: 'monitoria',
        exclusions: [
          '**/.DS_Store',
          '**/Thumbs.db',
          'assets/less',
          'assets/src_imgs',
          '.git',
          'monitoria.sql',
          'README.md',
          'node_modules',
          'grunt',
          'vendor',
          'package.json',
          'Gruntfile.js',
          '.ftppass',
          '.gitattributes',
          '.gitignore',
          'application/cache/*',
          'application/logs/*',
          '.grunt'
        ],
        keep: [
          'application/cache/*',
          'application/logs/*',
        ]
      }
    }

  });

  // Default task(s).
  grunt.registerTask('default', ['uglify', 'less']);
  grunt.registerTask('img', 'imagemin');
  grunt.registerTask('cls', 'clean');
  grunt.registerTask('ftp', ['default','img','ftpush']);

};