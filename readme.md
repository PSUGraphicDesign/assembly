# Assembly

## Getting Started

You'll need to add two environment-specific files to your project. Please request them from a project administrator.

To launch the app, navigate to its root folder in the terminal…

```sh
cd /path/to/the/project
```

Then, use PHP's Simple Server to launch the app:

```sh
php -S localhost:8000
```

PHP will let you know the server has started normally. Point your browser to `http://localhost:8000` and check it out!

Requests for `assembly.css` will fail until the Sass stylesheets are compiled.

Switch to the `assets` folder, then use Sass's `watch` command:

```sh
cd assets
sass --watch sass/assembly.sass:css/assembly.css
```
