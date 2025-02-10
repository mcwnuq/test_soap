To build image:
```
docker build -t test-soap .
```
To run image:
```
docker run -it --rm test-soap
```
To install local dependencies:
```
docker run --rm --interactive --tty \
  --volume $PWD:/app \
  composer install --ignore-platform-reqs
```