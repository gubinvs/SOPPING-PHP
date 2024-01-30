import php from "gulp-connect-php";  

export const phpServer = () => {
    php.server(
        {
            base: `${app.path.build.php}`, 
            port: 3000, 
            keepalive: true
        } 
    ); 
} 