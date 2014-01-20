'use strict';
module.exports = function(grunt) {

  grunt.initConfig({
    recess: {
      dist: {
        options: {
          compile: true,
          compress: true,
          includePath: [
            '../swdc-base/assets/less',
            '../swdc-base/bower_components/bootstrap/less',
            '../swdc-base/bower_components/base16-less'
          ]
        },
        files: {
          'assets/css/main.min.css': [
            'assets/less/app.less'
          ]
        }
      }
    },
    watch: {
      less: {
        files: [
          '../swdc-base/assets/less/*.less',
          '../swdc-base/bower_components/bootstrap/less',
          '../swdc-base/bower_components/base16-less',
          'assets/less/*.less',
          'assets/less/**/*.less'
        ],
        tasks: ['recess']
      },
    },
    clean: {
      dist: [
        'assets/css/main.min.css'
      ]
    }
  });

  // Load tasks
  grunt.loadNpmTasks('grunt-contrib-clean');
  grunt.loadNpmTasks('grunt-contrib-watch');
  grunt.loadNpmTasks('grunt-recess');
  grunt.loadNpmTasks('grunt-wp-version');

  // Register tasks
  grunt.registerTask('default', [
    'clean',
    'recess'
  ]);
  grunt.registerTask('dev', [
    'watch'
  ]);

};
