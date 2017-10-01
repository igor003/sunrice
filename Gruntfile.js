module.exports = function (grunt) {
    grunt.initConfig({
        less: {
            development: {
                //options: {
                // paths: ['assets/css']
                // },
                files: {
                    'css/style.css': 'less/style.less'
                }
            }

      
                     },
        watch: {
          css: {
            files: 'less/style.less',
            tasks: ['less'],
            options: {
              livereload: true,
            },
          },
        },
    })
    grunt.loadNpmTasks('grunt-contrib-less');
    grunt.loadNpmTasks('grunt-contrib-watch');

    grunt.registerTask('default', ['less','watch']);
}
