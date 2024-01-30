export const server  = (done) => {
    app.plugins.browsersync.init({
        server: {
            baseDir: `${app.path.build.php}`
        },
        notyfi: false,
        port: 3000,
    })
}
