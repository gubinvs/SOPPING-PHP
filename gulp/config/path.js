//-- Импортируем модуль определения текущей папки проекта
import * as nodePath from 'path';
const rootFolder = nodePath.basename(nodePath.resolve()); 

const buildFolder = `./Compiled`;
const srcFolder = `./src`;


//-- Массив с данными о путях
export const path = {
    build: {   // путь куда следует переносить:
        php: `${buildFolder}/`,              // файлы php
        modules: `${buildFolder}/modules/`,  // классы и структуры, обработчики
        css: `${buildFolder}/css/`,          // файл стилей style.css
        js: `${buildFolder}/js/`,            // файлы js
        images: `${buildFolder}/img/`,       // файлы img
        files: `${buildFolder}/files/`,      // остальные файлы
        fonts: `${buildFolder}/fonts/`     // файлы шрифтов
        
    },
    src: {   // какие файлы следует переносить при сборке проекта и куда
        php: `${srcFolder}/*.php`,             // для работы без препроцессора pug
        modules: `${srcFolder}/modules/**/*.php`,
        scss: `${srcFolder}/scss/*.css`,
        js: `${srcFolder}/js/**/*.js`,
        images: `${srcFolder}/img/**/*.{jpg,jpeg,png,gif,webp}`,
        svg: `${srcFolder}/img/**/*.svg`,
        files: `${srcFolder}/files/**/*.*`,
        fonts: `${srcFolder}/fonts/**/*.*`
    },
    watch: {  // изменение каких файлов следует отслеживать
        php: `${srcFolder}/**/*.php`,
        modules: `${srcFolder}/modules/**/*.php`, 
        scss: `${srcFolder}/scss/*.scss`,
        js: `${srcFolder}/js/**/*.js`,
        images: `${srcFolder}/img/**/*.{jpg,jpeg,png,gif,webp,svg,ico}`,
        files: `${srcFolder}/files/**/*.*`
    },
    clean: buildFolder,                             // какую папку следует удалять
    buildFolder: buildFolder,                       // переменная с путем к папке для переноса файлов
    srcFolder: srcFolder,                           // переменная с путем для отслеживания изменяемых файлов
    rootFolder: rootFolder,                         // переменная с путем основной папки проекта
}