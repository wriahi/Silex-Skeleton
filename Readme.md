
## Install

- Run
```
    composer install
```

- Set log and cache permissions:

```
sudo chmod +a "_www allow delete,write,append,file_inherit,directory_inherit" var/cache
sudo chmod +a "_www allow delete,write,append,file_inherit,directory_inherit" var/logs

```