Install nginx on C:
e.g. C:\nginx-1.5.4
Make a folder called php
Extract new php pacakge to php under nginx folder i.e. C:\nginx-1.5.4\php
Config the nginx.conf as below (Copy Paste exactly)


#user  nobody;
worker_processes  1;

events {
    worker_connections  1024;
}


http {
    include       mime.types;
    default_type  application/octet-stream;


    sendfile        on;
    #tcp_nopush     on;

    #keepalive_timeout  0;
    keepalive_timeout  65;

    #gzip  on;

    server {
        listen       80;
        server_name  localhost;

        #charset koi8-r;

        #access_log  logs/host.access.log  main;

        location / {
            root   html;
            index  index.html index.htm;
        }
        root           html;
        #error_page  404              /404.html;

        # redirect server error pages to the static page /50x.html
        #
        error_page   500 502 503 504  /50x.html;
        location = /50x.html {
            root   html;
        }

      location ~ \.php$ {
            fastcgi_pass    127.0.0.1:9123;
            fastcgi_index   index.php;
            fastcgi_param   SCRIPT_FILENAME  $document_root$fastcgi_script_name;
            include         fastcgi.conf;
        }

        
    }



}
