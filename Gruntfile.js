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
                  'plugins'
                ],
                recursive: true,
                syncDestIgnoreExcl: false,
                ssh: true
            },
            staging: {
                 options: {
                    include: ['stage-config.php', 'plugins/sbcg-*'],
                    dest: '~/domains/stage.southbrooklynchildrensgarden.org/html',
                    host: 'sbcg'
                }
            },
            production: {
                options: {
                    include: ['plugins/sbcg-*'],
                    dest: '~/domains/southbrooklynchildrensgarden.org/html',
                    host: 'sbcg'
                }
            }
        }

    });

    // rename tasks
    grunt.renameTask('rsync', 'deploy');

};