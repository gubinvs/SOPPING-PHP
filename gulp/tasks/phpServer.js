import php from "gulp-connect-php";  

export const phpServer = () => {
    php.server(
        {
            base: `${app.path.build.page}`, 
            port: 3001, 
            keepalive: true
        } 
    ); 
} 