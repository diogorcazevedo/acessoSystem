var elixir = require('laravel-elixir'),
    liveReload = require('gulp-livereload'),
    clean = require('rimraf'),
    gulp = require('gulp');


/*
 |--------------------------------------------------------------------------
 | configurando os caminhos
 |--------------------------------------------------------------------------
 |
 */

var config = {
    assets_path: './resources/assets',
    build_path: './public/build'
}

config.bower_path = config.assets_path + '/../bower_components';


/*
 |--------------------------------------------------------------------------
 | configurando os caminhos
 |--------------------------------------------------------------------------
 |
 */

config.build_path_js = config.build_path + '/js';

config.build_vendor_path_js = config.build_path_js + '/vendor';
config.vendor_path_js = [
    config.bower_path + '/jquery/dist/jquery.min.js',
    config.bower_path + '/bootstrap/dist/js/bootstrap.min.js',
    config.bower_path + '/angular/angular.min.js',
    config.bower_path + '/angular-route/angular-route.min.js',
    config.bower_path + '/angular-resource/angular-resource.min.js',
    config.bower_path + '/angular-animate/angular-animate.min.js',
    config.bower_path + '/angular-messages/angular-messages.min.js',
    config.bower_path + '/angular-bootstrap/ui-bootstrap.min.js',
    config.bower_path + '/angular-strap/dist/modules/navbar.min.js',


    //assets
    config.bower_path + '/js/jquery.scrollUp.min.js',
    config.bower_path + '/js/price-range.js',
    config.bower_path + '/js/jquery.prettyPhoto.js',
    config.bower_path + '/js/main.js',
    config.bower_path + '/js/html5shiv.min.js',
    config.bower_path + '/js/jquery.mask.min.js',
    config.bower_path + '/js/cep.js',
];


config.build_path_css = config.build_path + '/css';

config.build_vendor_path_css = config.build_path_css + '/vendor';
config.vendor_path_css = [
    config.bower_path + '/bootstrap/dist/css/bootstrap.min.css',
    config.bower_path + '/bootstrap/dist/css/bootstrap-theme.min.css',

    //assets
    config.bower_path + '/css/prettyPhoto.css',
    config.bower_path + '/css/animate.css',
    config.bower_path + '/css/main.css',
    config.bower_path + '/css/responsive.css',
    config.bower_path + '/css/style.css',
];

/*
 |--------------------------------------------------------------------------
 | copiando para as pastas
 |--------------------------------------------------------------------------
 |
 */

gulp.task('copy-styles',function(){
    gulp.src([
        config.assets_path + '/css/**/*.css'
    ])
        .pipe(gulp.dest(config.build_path_css))
        .pipe(liveReload());

    gulp.src(config.vendor_path_css)
        .pipe(gulp.dest(config.build_vendor_path_css))
        .pipe(liveReload());

});

gulp.task('copy-scripts',function(){
    gulp.src([
        config.assets_path + '/js/**/*.js'
    ])
        .pipe(gulp.dest(config.build_path_js))
        .pipe(liveReload());

    gulp.src(config.vendor_path_js)
        .pipe(gulp.dest(config.build_vendor_path_js))
        .pipe(liveReload());
});


/*
 |--------------------------------------------------------------------------
 | limpando gulp clean
 |--------------------------------------------------------------------------
 |
 */

gulp.task('clear-buid-folder',function(){
    clean.sync(config.build_path);
})




/*
 |--------------------------------------------------------------------------
 | criando os arquivos all
 |--------------------------------------------------------------------------
 |
 */

gulp.task('default',['clear-buid-folder'],function(){

    elixir(function(mix){
        mix.styles(config.vendor_path_css.concat([config.assets_path + '/css/**/*.css']),
        'public/css/all.css',config.assets_path);
        mix.scripts(config.vendor_path_js.concat([config.assets_path + '/js/**/*.js']),
            'public/js/all.js',config.assets_path);
        mix.version(['js/all.js','css/all.css']);
    });
});


/*
 |--------------------------------------------------------------------------
 |executando tarefas
 |--------------------------------------------------------------------------
 |
 */


gulp.task('watch-dev',['clear-buid-folder'],function(){
    liveReload.listen();
    gulp.start('copy-styles','copy-scripts');
    gulp.watch(config.assets_path + '/**',['copy-styles','copy-scripts']);
});
