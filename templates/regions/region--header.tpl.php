<?php
$menu = menu_navigation_links('main-menu');
?>
<header class="l-header" role="banner">
    <div class="grid-container top-bar">
        <div class="top-bar-left">
            <div class="large-logo logo-wrapper">
                <a class="site-logo" href="https://www.stfx.ca" rel="home" title="<?php print t('Home'); ?>">



<!-- large logo -->
<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 653.92 204.71"><defs><style>.a{fill:#bc9408;}.b{fill:#fff;}.c{fill:#002b5c;}.d{fill:#4c5b77;}</style></defs><title>stfx-logo</title><path class="a" d="M370,138.14a219.89,219.89,0,0,1,63.41-21.93Q412.89,118.68,389,127.1,354.17,139.36,332.7,157t-17,30.4c1.53,4.31,5,7.55,10.58,9.72q8,3.17,21.68,3.32,19.66,0.22,42.88-5.85l0.9,2.53,4.79,13.61,2.72-1,37.84-13.32-5.73-16.27q20.89-9.57,35.52-21.62,21.48-17.66,17-30.38a14.77,14.77,0,0,0-6.59-7.78,24.56,24.56,0,0,0-3.93-1.92,9.86,9.86,0,0,1,4,4.89q3.29,9.41-14.72,23.25Q449,157.11,429.28,165.48c-0.9.36-1.8,0.73-2.7,1.11l-5.27-15-1-2.78-40.58,14.28,5.6,15.89a133,133,0,0,1-21,2.26q-11.6.25-18.15-2.07c-4.16-1.48-6.8-3.76-7.86-6.84Q335,162.92,353,149.09a128.94,128.94,0,0,1,17-11h0Zm49.88,19.59c-1.36,5.75-2.07,8.64-2.11,8.64l-2.59,10.77,9.18,7s1.4,1,4.1,3.07l3.43,2.59-13.19,4.64-2.24-2c-0.06-.08-0.56-0.56-1.53-1.42l-3-2.7-1.59,9-13.09,4.5,4.93-20.26-15.58-12.17,12.75-4.6,6.21,5.58,1.44-8.28,12.84-4.41h0Z" transform="translate(-85.45 -116.2)"/><path class="b" d="M419.91,157.73l-12.84,4.41-1.44,8.28-6.21-5.58-12.75,4.6,15.58,12.17-4.93,20.26,13.09-4.5,1.59-9,3,2.7c1,0.86,1.46,1.34,1.53,1.42l2.24,2,13.19-4.64-3.43-2.59c-2.7-2.07-4.08-3.09-4.1-3.07l-9.18-7,2.59-10.77s0.75-2.89,2.11-8.64h0Z" transform="translate(-85.45 -116.2)"/><path class="c" d="M392.73,128.89q-12.17,4.3-22.71,9.24a128.94,128.94,0,0,0-17,11q-18,13.83-14.68,23.27c1.07,3.07,3.7,5.35,7.86,6.84a9.89,9.89,0,0,1-4.14-5q-3.32-9.44,14.68-23.27t46.81-24A197.91,197.91,0,0,1,437.16,118q-20.54,2.48-44.43,10.89h0Z" transform="translate(-85.45 -116.2)"/><path class="c" d="M424,150.66l-2.74,1,5.27,15c0.9-.38,1.8-0.75,2.7-1.11L424,150.66h0Z" transform="translate(-85.45 -116.2)"/><path class="d" d="M477.11,120.32l0.21,0.13,0,0-0.23-.08h0Z" transform="translate(-85.45 -116.2)"/><path class="c" d="M477.34,120.41l0,0a14.77,14.77,0,0,1,6.59,7.78q4.48,12.7-17,30.38-14.65,12.07-35.52,21.62l5.73,16.27-37.84,13.32,1,2.76,40.56-14.28L435.09,182q20.92-9.57,35.56-21.62,21.45-17.66,17-30.38-2.23-6.37-10.29-9.62h0Z" transform="translate(-85.45 -116.2)"/><path class="c" d="M391.77,197.16l-0.9-2.53q-23.21,6.08-42.88,5.85-13.64-.15-21.68-3.32,8.25,4.92,25.4,5.12a159.9,159.9,0,0,0,40.06-5.12h0Z" transform="translate(-85.45 -116.2)"/><polygon class="c" points="332.79 43.15 322.62 46.75 321.01 56.7 313.53 49.95 303.56 53.46 318.09 64.98 313.55 83.57 323.94 79.91 325.68 69.83 333.31 76.61 343.47 73.03 328.39 61.45 332.79 43.15 332.79 43.15"/><path class="a" d="M382.33,195.52" transform="translate(-85.45 -116.2)"/><path class="a" d="M382.33,195.52" transform="translate(-85.45 -116.2)"/><path class="b" d="M104.17,270.19c-10.4,0-14.72-3.6-15.28-3.6-0.32,0-1.6,1.6-2.48,2.8H85.69l-0.24-15.92h0.8c1.92,5.68,6.24,11.36,9.92,13.28a19.21,19.21,0,0,0,7.92,2.16c7.84,0,13.28-4.72,13.28-12,0-6-4.08-8.64-9.2-10.56s-7-2.32-11.76-4.16c-5.52-2.16-10.56-7.6-10.56-14.48,0-11.44,9-16.72,19.2-16.72,9.6,0,13.44,3.84,13.76,3.84s1.6-1.6,2.4-2.88h0.88v14.8h-0.88c-2.64-7.12-7.92-14.48-16.24-14.48-6.72,0-12,4-12,11.28,0,5.6,3.84,8.88,9.2,10.88,4.32,1.68,7.28,2.48,11.44,4,7.2,2.64,11.44,7.76,11.44,15.28C125.05,264,116.33,270.19,104.17,270.19Z" transform="translate(-85.45 -116.2)"/><path class="b" d="M166.25,241.15a38.78,38.78,0,0,0-5.44-8.16c-1.6-1.44-3.36-1.84-6.24-1.92s-2.08-.08-5.44-0.08c-0.08,3.84-.16,11.92-0.16,16.48v13.76c0,2.08.08,4.32,0.64,5.12,1.12,1.6,4.08,2.08,5.76,2.32v0.8H135.29v-0.8c2-.24,3.84-0.48,5.6-2.4,0.72-.8.72-3.52,0.8-5.92,0.08-2.08.08-8.56,0.08-12.64,0-4.48-.08-12.24-0.08-16.72-3.28,0-2.48,0-5.44.08s-4.56.64-6.16,2.08a34.45,34.45,0,0,0-5.44,8L124,241l2.08-12.8c1.6,0.56,3,1.52,5.76,1.52h27.28c2.88,0,4-.88,5.68-1.52l2.08,12.8Z" transform="translate(-85.45 -116.2)"/><path class="b" d="M167.45,269.71a4.56,4.56,0,0,1-4.8-4.72,4.69,4.69,0,0,1,4.8-4.88c2.8,0,4.64,2.24,4.64,5A4.3,4.3,0,0,1,167.45,269.71Z" transform="translate(-85.45 -116.2)"/><path class="b" d="M246.89,225.71c-4.32-5.36-8.32-9.36-12-11.2-1.84-.88-7-1.52-13.2-1.52-2.24,0-5.76.16-6.88,0.24a24.91,24.91,0,0,0-.72,6.16c-0.24,7.44-.16,19-0.16,20a70,70,0,0,0,10.32-.64c7.68-1.6,8.48-5.76,9.28-11h1v25.76h-1c-0.88-3.36-2.48-7.76-4.72-9.76a11.51,11.51,0,0,0-7.28-2.88c-3.2-.24-4.24-0.16-7.6-0.16,0,6.88,0,13.76.08,17.28s0.24,6.8,1.2,8.24,3.12,2.32,7.44,2.48v0.8h-25.6v-0.8c2.64-.4,5.12-1.36,6.56-3,1-1.28,1.36-5.2,1.44-8.64,0.08-3,.16-10.72.16-16.56v-15.6c0-3.76-.08-8.48-1.36-9.84-1.6-1.68-3.2-1.92-6.08-2.32v-0.8h44.48l5.44,13.44Z" transform="translate(-85.45 -116.2)"/><path class="b" d="M274.09,269.47a24.89,24.89,0,0,1-3.12-4.24,105.2,105.2,0,0,0-7.36-10.56,11.65,11.65,0,0,0-5-3.68,8.57,8.57,0,0,0-2.4-.4v10.64c0,2.4.08,3.92,0.8,5.12,0.56,1,2.56,2.24,5.44,2.32v0.8H242.73v-0.8c1.84-.24,4.24-0.8,5.2-2,0.88-1,1-3.68,1-6.08,0-2.08.08-7.36,0.08-11.44v-10.8c0-2.56-.08-5.68-1-6.64-1.2-1.2-2.8-1.44-5-1.76v-0.8c1,0,12.24-.08,16.48-0.08,5.12,0,9,.08,12.4,1.76a9.52,9.52,0,0,1,5.68,9c0,5.52-4.48,8.8-9.6,10.32v0.16a15.84,15.84,0,0,1,3.84,3.6c2,2.8,4.48,6.48,6.4,9,2.8,3.92,5.12,5.28,8.8,5.76v0.8h-13Zm-9.28-38.08a11.43,11.43,0,0,0-5.52-1.2,13.81,13.81,0,0,0-2.56.16,31.21,31.21,0,0,0-.32,4.24c-0.16,5.2-.16,12.56-0.16,15a22.88,22.88,0,0,0,7.52-.8c4.56-1.6,6.16-5.2,6.16-9.28A8.65,8.65,0,0,0,264.81,231.39Z" transform="translate(-85.45 -116.2)"/><path class="b" d="M306.89,269.47v-0.8c1.6-.24,4.48-0.64,4.48-2.56,0-1.44-1.68-6-3.84-11.84H292.81c-1,2.72-1.92,5-2.88,7.52a12.32,12.32,0,0,0-1,4.16c0,2.08,3,2.48,5,2.72v0.8h-13.2v-0.88a8,8,0,0,0,4.16-1.6c0.48-.48,1.76-1.92,3.6-6.08,3.12-7.2,7.6-18.08,11.12-26.48l-0.64-1.52a10,10,0,0,0,5.76-4.72h0.8c5.76,15.52,10.56,28.32,12.8,34.32,1.2,3.28,3,5.76,7,6.08v0.88h-18.4ZM300.25,236c-1.12,2.8-3.2,7.84-6.72,16.64h13.36C304.33,246,301.69,239.39,300.25,236Z" transform="translate(-85.45 -116.2)"/><path class="b" d="M365.53,233.39c-0.48,1.12-.56,4.48-0.72,7.92-0.08,3.2-.24,7.52-0.24,12.56v15.44a1.05,1.05,0,0,1-.88.72,2.07,2.07,0,0,1-1.36-.8c-12.64-14.72-19.2-22.4-29.28-33.84v21.92c0,3.76.08,7,.88,8.48,0.8,1.68,3,2.48,6,2.88v0.8H324.65v-0.8c1.76-.24,4.24-0.8,5.36-2.48s1.28-4.64,1.36-8.88c0.08-3.2.24-7.2,0.24-12.24,0-4.24,0-6.64-.08-8.8-0.48-4.48-4.64-6.08-7-6.32v-0.8h12.8l25.76,29.6V241.31c0-3,0-5.84-.56-7.44-0.72-2.08-3-3.44-6.56-3.92v-0.8h15.28V230C368.57,230.35,366.41,231.31,365.53,233.39Z" transform="translate(-85.45 -116.2)"/><path class="b" d="M412.33,269.39h-0.56a14.54,14.54,0,0,0-2.4-3A24.21,24.21,0,0,1,396.89,270c-14.4,0-22.32-8.72-22.32-20.72a20.4,20.4,0,0,1,3.2-11.2c3.36-5.28,9.2-9.76,19-9.76a23.63,23.63,0,0,1,12.56,3.52,9.31,9.31,0,0,0,2.64-2.72h0.56v14.16h-0.88a21.92,21.92,0,0,0-2.4-6.08c-2.32-4.08-6.64-7.68-12.16-7.68-9.6,0-14.4,10.24-14.4,20,0,10.32,5.28,19.28,14.48,19.28,8,0,13.2-7.28,14.48-13.76h0.88Z" transform="translate(-85.45 -116.2)"/><path class="b" d="M418,269.47v-0.8c1.92-.24,4.08-0.88,5.28-2.16,0.72-.88.72-3.52,0.8-5.92,0.08-2.08.08-7.36,0.08-11.44v-10.8c0-2.56,0-5.44-.8-6.4-1.12-1.28-3.2-1.76-5.2-2v-0.8h19.12V230c-1.68.24-4.24,0.64-5.2,2.4-0.72,1.28-.64,3.44-0.64,5.12-0.08,3.76-.08,6.88-0.08,11.44v12.48c0,2.16,0,4.4.56,5.2,1,1.28,3.76,2,5.36,2.08v0.8H418Z" transform="translate(-85.45 -116.2)"/><path class="b" d="M458.33,270.11c-8.48,0-11.92-2.72-12.4-2.72a7.56,7.56,0,0,0-1.68,2.08h-0.48l-0.32-13h0.64c1.36,4.08,5,9,7.68,10.48a12.37,12.37,0,0,0,6.4,2c5.68,0,9-3.52,9-8.24,0-5-4.48-6.48-8.4-7.52-2.8-.72-4.32-1.2-6.72-1.92A11.87,11.87,0,0,1,444,240.35c0-7.6,6.64-12.08,14.64-12.08a17.61,17.61,0,0,1,10.32,3,10.59,10.59,0,0,0,1.84-2.24h0.56v12.32h-0.64c-2.08-5.36-6.08-11.92-12.08-11.92-5.28,0-8.56,3.2-8.56,7.84,0,3.92,2.48,6.32,5.84,7.52,2.16,0.8,4.56,1.2,8.88,2.48,5.52,1.6,8.88,5.68,8.88,11.12C473.69,265.31,467.21,270.11,458.33,270.11Z" transform="translate(-85.45 -116.2)"/><path class="b" d="M537.85,223c-3.6,4.32-9.12,11-12.24,14.8,1.36,1.92,11.84,17,14.24,20.32,4.32,6.24,6.64,9.84,11.2,10.56v0.8H525.13v-0.8c3-.32,7.36-0.88,7.36-3.92,0-1.52-1.6-4.16-3.44-7-2.4-3.84-5.6-8.32-9.6-13.92C516,248,511,254.11,508.33,257.71c-1.52,2.16-2.88,4.32-2.88,6.24,0,3,4.4,4.4,7.36,4.72v0.8H491.45v-0.8c4.4-1.12,9-4.8,13.84-10.16,3.2-3.6,10.08-12.08,13.28-15.92l-13.76-19.36c-4.48-6.24-6.56-9.12-11.44-10.56v-0.8h26.08v0.8c-2.88.32-7.6,1-7.6,3.92,0,1.44,1.84,4.24,3.68,6.88,3,4.32,5.12,7.44,9.12,13.12,3.52-4,7.52-9.36,10.24-12.88,1.28-1.68,3.2-4.72,3.2-6.4,0-3-4.48-4.16-7.28-4.64v-0.8h20.88v0.8C546.25,213.79,542.49,217.39,537.85,223Z" transform="translate(-85.45 -116.2)"/><path class="b" d="M572.49,269.47v-0.8c1.6-.24,4.48-0.64,4.48-2.56,0-1.44-1.68-6-3.84-11.84H558.41c-1,2.72-1.92,5-2.88,7.52a12.32,12.32,0,0,0-1,4.16c0,2.08,3,2.48,5,2.72v0.8h-13.2v-0.88a8,8,0,0,0,4.16-1.6c0.48-.48,1.76-1.92,3.6-6.08,3.12-7.2,7.6-18.08,11.12-26.48l-0.64-1.52a10,10,0,0,0,5.76-4.72H571c5.76,15.52,10.56,28.32,12.8,34.32,1.2,3.28,3,5.76,7,6.08v0.88h-18.4ZM565.85,236c-1.12,2.8-3.2,7.84-6.72,16.64h13.36C569.93,246,567.29,239.39,565.85,236Z" transform="translate(-85.45 -116.2)"/><path class="b" d="M625.53,231.55c-0.56.56-1.6,1.68-3.44,5.76-3.28,7.36-7.84,18.56-11.2,26.88l-3,5.76h-1.12c-5.28-12.4-9-21.92-13-31.28A54,54,0,0,0,591,233a6.06,6.06,0,0,0-5.6-3v-0.8h18.88V230c-0.64.08-4.88,0.24-4.88,2.4,0,1.92,6.4,16.4,11.44,28.24,1.12-2.64,5.2-12.56,8.48-21.36,1.44-3.92,1.84-5.76,1.84-6.64,0-2-3.68-2.4-5.92-2.64v-0.8h14.88V230A12.89,12.89,0,0,0,625.53,231.55Z" transform="translate(-85.45 -116.2)"/><path class="b" d="M630.09,269.47v-0.8c1.92-.24,4.08-0.88,5.28-2.16,0.72-.88.72-3.52,0.8-5.92,0.08-2.08.08-7.36,0.08-11.44v-10.8c0-2.56,0-5.44-.8-6.4-1.12-1.28-3.2-1.76-5.2-2v-0.8h19.12V230c-1.68.24-4.24,0.64-5.2,2.4-0.72,1.28-.64,3.44-0.64,5.12-0.08,3.76-.08,6.88-0.08,11.44v12.48c0,2.16,0,4.4.56,5.2,1,1.28,3.76,2,5.36,2.08v0.8H630.09Z" transform="translate(-85.45 -116.2)"/><path class="b" d="M690,269.47H654.33v-0.8c1.84-.24,4.16-1,5.12-2.16,0.72-.88,1-3.52,1-5.92,0.08-2.08.08-7.36,0.08-11.44v-10.8c0-2.56,0-5.84-1-6.8-1.12-1.12-2.72-1.28-4.8-1.6v-0.8h32.32l3.6,10.4-0.72.32c-3-3.76-6.48-7.36-9-8.56-1.12-.56-4.16-1.12-9-1.12a19.26,19.26,0,0,0-3.6.24,16.1,16.1,0,0,0-.48,4c-0.16,5.2-.16,12-0.16,13.84a37.35,37.35,0,0,0,5.92-.48c4.64-1,6.08-3.76,6.88-7.84h0.8v18.16h-0.8a14.71,14.71,0,0,0-3.68-6.72,8.14,8.14,0,0,0-5.12-1.92c-1.12-.08-2.16-0.08-4-0.08,0,6.08.08,9.6,0.16,11.84,0.08,2.4.08,4.72,0.88,5.68s3,1.52,6,1.52a29.07,29.07,0,0,0,4.8-.32c4.72-.72,8.4-4.4,12.08-10.72l0.72,0.16Z" transform="translate(-85.45 -116.2)"/><path class="b" d="M726.41,269.47a24.85,24.85,0,0,1-3.12-4.24,105.15,105.15,0,0,0-7.36-10.56,11.65,11.65,0,0,0-5-3.68,8.57,8.57,0,0,0-2.4-.4v10.64c0,2.4.08,3.92,0.8,5.12,0.56,1,2.56,2.24,5.44,2.32v0.8H695v-0.8c1.84-.24,4.24-0.8,5.2-2,0.88-1,1-3.68,1-6.08,0-2.08.08-7.36,0.08-11.44v-10.8c0-2.56-.08-5.68-1-6.64-1.2-1.2-2.8-1.44-5-1.76v-0.8c1,0,12.24-.08,16.48-0.08,5.12,0,9,.08,12.4,1.76a9.53,9.53,0,0,1,5.68,9c0,5.52-4.48,8.8-9.6,10.32v0.16a15.84,15.84,0,0,1,3.84,3.6c2,2.8,4.48,6.48,6.4,9,2.8,3.92,5.12,5.28,8.8,5.76v0.8h-13Zm-9.28-38.08a11.44,11.44,0,0,0-5.52-1.2,13.78,13.78,0,0,0-2.56.16,31.2,31.2,0,0,0-.32,4.24c-0.16,5.2-.16,12.56-0.16,15a22.88,22.88,0,0,0,7.52-.8c4.56-1.6,6.16-5.2,6.16-9.28A8.65,8.65,0,0,0,717.13,231.39Z" transform="translate(-85.45 -116.2)"/><path class="b" d="M272.49,295.67a25.37,25.37,0,0,0-.55,5.77c-0.06,2.2-.16,5.39-0.22,7.87-0.05,2.75.11,11.61-11.11,11.61-10.67,0-11.11-8.2-11.11-10.12V299.08c0-1.76,0-3.74-.55-4.4a5.37,5.37,0,0,0-3.46-1.37v-0.55h13v0.55c-1.6.22-3.74,0.71-3.85,3.08-0.06,2.09-.06,4.4-0.06,6.1,0,3.58,0,5,.06,7.48,0.11,5.39,3,9,7.59,9,8.09,0,8.53-6.27,8.58-11.33v-6.21a28.82,28.82,0,0,0-.38-5.45c-0.55-1.43-2.09-2.36-4.51-2.69v-0.55h10.62v0.55C274.58,293.58,273.1,294.24,272.49,295.67Z" transform="translate(-85.45 -116.2)"/><path class="b" d="M310.22,295.67a26.22,26.22,0,0,0-.5,5.44c-0.05,2.2-.16,5.17-0.16,8.64v10.61a0.73,0.73,0,0,1-.61.5,1.42,1.42,0,0,1-.93-0.55c-8.69-10.12-13.2-15.4-20.13-23.26v15.07c0,2.58.06,4.84,0.61,5.83,0.55,1.16,2,1.71,4.12,2v0.55h-10.5v-0.55c1.21-.16,2.92-0.55,3.69-1.71s0.88-3.19.94-6.11c0.05-2.2.17-5,.17-8.42,0-2.91,0-4.56-.06-6-0.33-3.08-3.19-4.18-4.79-4.34v-0.55h8.8l17.71,20.35v-12a19.08,19.08,0,0,0-.38-5.12c-0.5-1.43-2-2.36-4.51-2.69v-0.55h10.5v0.55C312.31,293.58,310.82,294.24,310.22,295.67Z" transform="translate(-85.45 -116.2)"/><path class="b" d="M320.83,320.47v-0.55a6.19,6.19,0,0,0,3.63-1.49c0.5-.6.5-2.42,0.55-4.07,0.06-1.43.06-5.06,0.06-7.86v-7.43c0-1.76,0-3.74-.55-4.4a5.68,5.68,0,0,0-3.57-1.37v-0.55h13.14v0.55c-1.16.16-2.91,0.44-3.58,1.65a8.07,8.07,0,0,0-.44,3.52c-0.06,2.58-.06,4.73-0.06,7.87v8.58c0,1.48,0,3,.39,3.57,0.66,0.88,2.58,1.38,3.68,1.43v0.55H320.83Z" transform="translate(-85.45 -116.2)"/><path class="b" d="M366.48,294.4c-0.39.38-1.1,1.16-2.37,4-2.25,5.06-5.39,12.76-7.7,18.48l-2.09,4h-0.77c-3.63-8.53-6.21-15.07-9-21.5a37,37,0,0,0-1.87-3.91,4.16,4.16,0,0,0-3.85-2.09v-0.55h13v0.55c-0.44.05-3.35,0.16-3.35,1.65,0,1.32,4.4,11.28,7.87,19.41,0.77-1.81,3.58-8.63,5.83-14.68a16.54,16.54,0,0,0,1.27-4.57c0-1.37-2.53-1.65-4.07-1.81v-0.55h10.23v0.55A8.86,8.86,0,0,0,366.48,294.4Z" transform="translate(-85.45 -116.2)"/><path class="b" d="M398,320.47H373.47v-0.55a5.91,5.91,0,0,0,3.52-1.49c0.5-.6.66-2.42,0.72-4.07,0.05-1.43.05-5.06,0.05-7.86v-7.43c0-1.76,0-4-.66-4.67s-1.87-.88-3.3-1.1v-0.55H396l2.47,7.15-0.49.22c-2.09-2.58-4.46-5.06-6.16-5.88-0.77-.38-2.86-0.77-6.21-0.77a13.22,13.22,0,0,0-2.48.17,11.09,11.09,0,0,0-.33,2.75c-0.11,3.58-.11,8.25-0.11,9.51a25.67,25.67,0,0,0,4.07-.33c3.19-.71,4.18-2.58,4.73-5.39h0.55v12.49h-0.55A10.11,10.11,0,0,0,389,308a5.6,5.6,0,0,0-3.52-1.32c-0.77-.05-1.48-0.05-2.75-0.05,0,4.18.06,6.6,0.11,8.14s0.06,3.25.61,3.91,2,1,4.12,1a20,20,0,0,0,3.3-.22c3.25-.5,5.77-3,8.3-7.37l0.5,0.11Z" transform="translate(-85.45 -116.2)"/><path class="b" d="M427.15,320.47a17.12,17.12,0,0,1-2.15-2.91,72.15,72.15,0,0,0-5.06-7.26,8,8,0,0,0-3.41-2.53,5.9,5.9,0,0,0-1.65-.28v7.32a6.83,6.83,0,0,0,.55,3.52,4.67,4.67,0,0,0,3.74,1.6v0.55H405.59v-0.55c1.26-.16,2.91-0.55,3.57-1.37,0.61-.66.66-2.53,0.71-4.18,0-1.43.05-5.06,0.05-7.86v-7.43c0-1.76-.05-3.9-0.71-4.56-0.82-.83-1.92-1-3.41-1.21v-0.55c0.66,0,8.42-.06,11.33-0.06,3.52,0,6.22.06,8.53,1.21a6.55,6.55,0,0,1,3.91,6.21c0,3.8-3.08,6.05-6.6,7.1v0.11a10.88,10.88,0,0,1,2.64,2.48c1.38,1.92,3.08,4.46,4.4,6.16,1.92,2.69,3.52,3.63,6,4v0.55h-8.91Zm-6.38-26.18a7.85,7.85,0,0,0-3.79-.83,9.54,9.54,0,0,0-1.76.11,21.19,21.19,0,0,0-.22,2.91c-0.11,3.58-.11,8.64-0.11,10.34a15.72,15.72,0,0,0,5.17-.55c3.13-1.1,4.23-3.57,4.23-6.38A5.94,5.94,0,0,0,420.77,294.29Z" transform="translate(-85.45 -116.2)"/><path class="b" d="M450.85,320.91a17.29,17.29,0,0,1-8.52-1.87,5.2,5.2,0,0,0-1.16,1.43h-0.33l-0.22-9h0.44c0.93,2.8,3.41,6.16,5.28,7.2a8.51,8.51,0,0,0,4.4,1.37c3.9,0,6.21-2.42,6.21-5.66,0-3.46-3.08-4.46-5.78-5.17-1.92-.5-3-0.83-4.62-1.32a8.16,8.16,0,0,1-5.56-7.48c0-5.22,4.57-8.3,10.07-8.3a12.11,12.11,0,0,1,7.09,2,7.3,7.3,0,0,0,1.26-1.54h0.38v8.47h-0.44c-1.43-3.68-4.18-8.19-8.3-8.19-3.63,0-5.88,2.2-5.88,5.39,0,2.7,1.71,4.34,4,5.17,1.49,0.55,3.13.83,6.1,1.71,3.79,1.1,6.11,3.91,6.11,7.64C461.41,317.61,457,320.91,450.85,320.91Z" transform="translate(-85.45 -116.2)"/><path class="b" d="M469,320.47v-0.55a6.19,6.19,0,0,0,3.63-1.49c0.5-.6.5-2.42,0.55-4.07,0.05-1.43.05-5.06,0.05-7.86v-7.43c0-1.76,0-3.74-.55-4.4a5.67,5.67,0,0,0-3.57-1.37v-0.55h13.14v0.55c-1.15.16-2.91,0.44-3.57,1.65a8.06,8.06,0,0,0-.44,3.52c-0.06,2.58-.06,4.73-0.06,7.87v8.58c0,1.48,0,3,.39,3.57,0.66,0.88,2.58,1.38,3.68,1.43v0.55H469Z" transform="translate(-85.45 -116.2)"/><path class="b" d="M517,301a26.56,26.56,0,0,0-3.74-5.61c-1.1-1-2.31-1.26-4.29-1.32s-1.43-.05-3.74-0.05c-0.05,2.64-.11,8.2-0.11,11.33v9.46c0,1.43.06,3,.44,3.52,0.77,1.1,2.8,1.43,4,1.6v0.55H495.68v-0.55a5.39,5.39,0,0,0,3.85-1.65c0.5-.55.5-2.42,0.55-4.07,0.05-1.43.05-5.88,0.05-8.69,0-3.08-.05-8.41-0.05-11.5-2.25,0-1.71,0-3.74.05a5.88,5.88,0,0,0-4.23,1.43,23.66,23.66,0,0,0-3.74,5.5l-0.44-.11,1.43-8.8a9.8,9.8,0,0,0,4,1h18.76a8.52,8.52,0,0,0,3.9-1l1.43,8.8Z" transform="translate(-85.45 -116.2)"/><path class="b" d="M542.76,298.09c-0.83,1.21-3.69,5.72-6,9.46v7.26c0,1.43.05,3,.44,3.52,0.83,1.1,2.59,1.43,3.74,1.6v0.55H527.47v-0.55a4.89,4.89,0,0,0,3.69-1.6c0.55-.49.55-2.47,0.61-4.12,0-1.43.05-3,.05-5.77-0.94-1.59-4.68-7.87-6.21-10.07-2.31-3.35-3.52-5-5.83-5.06v-0.55h13.14v0.55c-1.54.16-3.41,0.33-3.41,1.54,0,0.66.94,2.09,1.76,3.52,1.1,1.82,3.25,5.33,5.06,8.14,0.61-.94,2.64-4.35,4.73-8a9.21,9.21,0,0,0,1.32-3.25c0-1.65-1.87-1.71-3.3-1.92v-0.55h9.68v0.55C545.84,293.74,544.68,295.28,542.76,298.09Z" transform="translate(-85.45 -116.2)"/><rect class="b" x="161.15" y="165.13" width="299.98" height="2"/></svg>
<!-- small logo -->
                </a>
            </div>

        <h1><a href="/"><span class="logo-color-one">StFX </span>
<span class="logo-color-two">Scholar</span>
</a></h1>

            <?php print theme('links__main-menu', array('links' => $menu, 'attributes' => array('class'=> 'main-menu button-group menu'))); ?>
        </div>
        <div class="top-bar-right">
            <?php if ($content): ?>
            <div>
                <?php print $content; ?>
            </div>
            <?php endif; ?>
        <!-- <button class="mobile-menu__button button" data-toggle="offCanvas" type="button">Open Menu</button> -->
<span class="hamburger mobile-menu__button" data-toggle="offCanvas"></span>
        </div>
    </div>
</header>

