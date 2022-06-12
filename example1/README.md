# Docker command
Run the following command in the `example1` folder

```
docker run -it --rm --name hnews-fetcher -v "$PWD/src":/usr/src/fetcher -w /usr/src/fetcher php:7.4-cli php fetch.php
```

## Command break down
Let's break down what this command does

### docker
The executable name for `Docker`

### run
Run an image

### -it
In an interactive mode and spit out output to the terminal

### --rm
After shutting down, delete all the image you download/built

### --name
Call the image you created/downloaded `hnews-fetcher`

### -v
Mount the folder `src` as a volumn at location `usr/src/fetcher`

### -w
Change the image user working directory to `/usr/src/getcher`

### php:7.4-cli
The name of the image to download. We didn't create this image

### php fetch.php
When everything is up and running, run the command `php` passing it the file `fetch.php`