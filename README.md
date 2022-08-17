# laravel-chat
This is simple Larave chat app based on Chatify, Jetstream and self hosted Pusher service. You heard it, your own Pusher service.
Pusher service is provided through laravel websockets server which runs through Laraver and NPM on your server


# Setup
This is ready-to-go application which requires minor changes and configuration for your environment. Configuration is done through  ` .env `.

Pay special attention on .env configuration lines:

``` 
PUSHER_APP_ID=12345
PUSHER_APP_KEY=ABCDEFGH
PUSHER_APP_SECRET=IJLKMNO
PUSHER_APP_CLUSTER=eu

PUSHER_BIND_PROD_IP=10.0.0.225
PUSHER_BIND_DEV_IP=172.21.211.228
```

Static local interface IP addresses are used to bind Pusher service on to and they have to be set properly. Feel free to define PUSHER_APP_ID, KEY, SECRET as you wish. Cluster would not make any difference as it's self hosted application but it needs to be defined - so leave it as ` eu ` 

` PUSHER_BIND_PROD_IP ` is local address of your public server hosted on AWS, DigitalOcean, Linode etc. 
` PUSHER_BIND_DEV_IP ` is local address of your Docker container or local server

# HTTPS / SSL support

For live server in production you have to configure SSL certs. For Demo I've placed them in wwwroot folder for access from Laravel and socket server.

```
LARAVEL_WEBSOCKETS_SSL_LOCAL_CERT=/www/wwwroot/MY_DOMAIN/fullchain.pem
LARAVEL_WEBSOCKETS_SSL_LOCAL_PK=/www/wwwroot/MY_DOMAIN/privkey.pem
```

# Run websockets (Pusher)

Navigate to project folder and execute:

` php artisan websockets:serve `


# !!NOTE!! 
This app does not require any external service. Laravel provides Pusher-like service called AND configured same as you would do for real Pusher paid service. Difference is, this totally free.

