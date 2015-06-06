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
                  'local-config.php', 
                  'puphpet', 
                  'Vagrantfile',
                  'html',
                  'themes/yeopress',
                  'themes/twenty*'
                ],
                recursive: true,
                syncDestIgnoreExcl: true,
                ssh: true
            },
            staging: {
                 options: {
                    dest: "~/domains/stage.southbrooklynchildrensgarden.org/html",
                    host: "sbcg"
                }
            },
            production: {
                options: {
                    dest: "~/path/to/theme",
                    host: "user@host.com"
                }
            }
        }

    });

    // rename tasks
    grunt.renameTask('rsync', 'deploy');

};