var gulp = require('gulp');
var phpspec = require('gulp-phpspec');
var notify = require('gulp-notify');
var run = require('gulp-run');


var vars = {
    spec: {
        config: 'phpspec.yml',
        bin: '',
        options: {
            notify: true,
            debug: true,
            clear: true
        }
    },
    notify: {
            phpspec: {
                onerror: {
                    title: 'PHPSpec Fail!',
                    message: 'Your test is failed!'
                },
                onsuccess: {
                    title: 'PHPSpec Success',
                    message: "Your test is all green !"
                }
            }
    },
    watch: {
        php: [
            'app/spec/**/*.php'
        ]
    }

};


gulp.task('test', function(){
    gulp.src(vars.spec.config)
        .pipe(phpspec(vars.spec.bin, vars.spec.options))
        .on('error', notify.onError(vars.notify.phpspec.onerror))
        .pipe(notify(vars.notify.phpspec.onsuccess))
});

gulp.task('watch', function(){
    gulp.watch(vars.watch.php, ['test'])
});

gulp.task('default', ['test', 'watch']);