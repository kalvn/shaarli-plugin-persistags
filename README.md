# Shaarli Persistags plugin

**Persistags** is a plugin that displays a short list of tags on the homepage, when you are logged in. It allows quick access to your preferred tags.

Example with Shaarli Material theme:

![Shaarli Persistags plugin preview](https://raw.githubusercontent.com/kalvn/shaarli-plugin-persistags/master/preview.png)

## Installation
### Via Git

Run the following command from the plugins folder of your Shaarli installation:

```sh
git clone https://github.com/kalvn/shaarli-plugin-persistags persistags
```

It'll create the `persistags` folder.

### Manually

Create the folder plugins/persistags in your Shaarli installation. Download the ZIP file of this repository and copy all files in the newly created folder.

## Activation
If your Shaarli installation is recent enough to have the plugin administration page, you just need to go to the plugin administration page, check `persistags` and save.

## Configure
Then you'll be offered the possibility to specify your preferred tags (**FAVORITE_TAGS** parameters). You must separate them with a comma (no space).

## Update
I you installed it through Git, run the following command from within this plugin's folder `plugins/persistags`:

```shell
git pull
```

Otherwise, download the ZIP file again from Github and override existing files with new ones.