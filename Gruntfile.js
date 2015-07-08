/*jshint camelcase: false */
'use strict';
module.exports = function(grunt) {

    // load all grunt tasks matching the `grunt-*` pattern
    require('load-grunt-tasks')(grunt);

    grunt.initConfig({

        // deploy via rsync
        deploy: {
            options: {
                src: "./",
                args: ["--verbose"],
                exclude: [
                  '.git*', 
                  'node_modules', 
                  '.sass-cache', 
                  'Gruntfile.js', 
                  'package.json', 
                  '.DS_Store', 
                  'README.md', 
                  'config.rb', 
                  '.jshintrc', 
                  '.bowerrc', 
                  '.idea', 
                  '.vagrant', 
                  '.yeopress', 
                  '*.sql', 
                  'stage-config.php',
                  'local-config.php', 
                  'puphpet', 
                  'Vagrantfile',
                  'html',
                  'themes/yeopress',
                  'themes/twenty*',
                  'plugins',
                  'mu-plugins',
                  'w3tc-config',
                  'uploads',
                  'advanced-cache.php',
                  'cache',
                  'upgrade'
                ],
                recursive: true,
                syncDestIgnoreExcl: false,
                ssh: true
            },
            staging: {
                 options: {
                    include: ['stage-config.php', 'plugins/sbcg-*', 'mu-plugins/sbcg-*'],
                    dest: '~/domains/stage.southbrooklynchildrensgarden.org/html',
                    host: 'sbcg'
                }
            },
            production: {
                options: {
                    include: ['plugins/sbcg-*', 'mu-plugins/sbcg-*'],
                    dest: '~/domains/southbrooklynchildrensgarden.org/html',
                    host: 'sbcg'
                }
            }
        },
        imagemin: {
          dist: {
            options: {
              progressive: true
            },
            files: [{
              expand: true,
              cwd: 'content/uploads',
              src: '**/*.{jpg,jpeg,png}',
              dest: 'content/uploads'
            }]
          }
        }
    });

    // rename tasks
    grunt.renameTask('rsync', 'deploy');

};