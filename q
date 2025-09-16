warning: CRLF will be replaced by LF in resources/views/layouts/app.blade.php.
The file will have its original line endings in your working directory
[1mdiff --git a/resources/css/app.css b/resources/css/app.css[m
[1mindex 81e075d..daba681 100644[m
[1m--- a/resources/css/app.css[m
[1m+++ b/resources/css/app.css[m
[36m@@ -1,4 +1,16 @@[m
[32m+[m[32m@import url('https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&display=swap');[m
[32m+[m
 @import 'tailwindcss';[m
 [m
[32m+[m[32m@theme {[m
[32m+[m[32m    --font-lato: "Lato", sans-serif;[m
[32m+[m[32m}[m
[32m+[m
[32m+[m[32m@layer base {[m
[32m+[m[32m    html {[m
[32m+[m[32m        font-family: var(--font-lato);[m
[32m+[m[32m    }[m
[32m+[m[32m}[m
[32m+[m
 @source '../**/*.blade.php';[m
 @source '../**/*.js';[m
