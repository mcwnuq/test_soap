To install vendor type:
```
docker run --rm --interactive --tty \
  --volume $PWD:/app \
  composer install --ignore-platform-req=ext-bcmath --ignore-platform-req=ext-intl --ignore-platform-req=ext-xsl
```

To run command type
```
docker run -it --rm --name my-running-script \
  -v "$PWD":/usr/src/myapp -w /usr/src/myapp --user www-data \
  php:8.2-cli php bin/console app:test-soap
```
