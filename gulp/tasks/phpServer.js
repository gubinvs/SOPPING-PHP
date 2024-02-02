import php from "gulp-connect-php";  

export const phpServer = () => {
    php.server(
        {
            base: `${app.path.build.page}`, 
            port: 5000, 
            keepalive: true
        } 
    ); 
} 