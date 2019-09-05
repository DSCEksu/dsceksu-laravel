<p align="center">
<img alt="Developer Student Clubs" src="https://dsceksu.herokuapp.com/images/dsc-logo.png">
</p>

# DSC Laravel Template 🔥

This awesome Laravel Progressive Web App was created for Developer Student Clubs in Sub Saharan Africa as a profile and a platform to showcase what they're upto in events, outreach to local businesses and showcases, maintain their community and most importantly their success stories to the world

[![Heroku Deploy](https://www.herokucdn.com/deploy/button.svg)](https://heroku.com/deploy?template=https://github.com/DSCEksu/dsceksu-laravel)

[![Laravel 5.8](https://img.shields.io/badge/Laravel-5.8-green.svg)](http://laravel.com)
![Fork](https://img.shields.io/github/forks/DSCEksu/dsceksu-laravel.svg?style=social)
![Pull Request](https://img.shields.io/github/issues-pr/DSCEksu/dsceksu-laravel.svg)
![Issue](https://img.shields.io/github/issues/DSCEksu/dsceksu-laravel.svg)
![Maintenance](https://img.shields.io/maintenance/yes/2019.svg)
![Codacy Badge](https://api.codacy.com/project/badge/Grade/b07fd6723d9742d4b6990bbbd688ef85)
![FOSSA Status](https://app.fossa.com/api/projects/git%2Bgithub.com%2FDSCEksu%2Fdsceksu-laravel.svg?type=small)

[Live Demo](https://dsceksu.herokuapp.com)

## Creators 👨‍💻

**[DSC Sub Saharan Africa Leads 2019/2020](https://github.com/orgs/DSCEksu/teams/dsc-laravel-template)**

## Usage 🛠

### Without Fork

Note you won't be able to change the images and run the project locally till you fork the epository and clone it locally

- Click the ``Deploy With Heroku`` button above
- Fill all that is required of you. E.g APP_NAME, APP_NICK, APP_LOCATION e.t.c
- Add All details in the .env.example to your ``Heroku`` Config Vars at the Settings tab
- Run ``php artisan migrate --seed`` using the **Run Console** button
- Start your app buy clicking the **Open App** but and login with **lead@dsc.com** as the email and **password** as the password for the lead. Check [Issues](https://github.com/DSCEksu/dsceksu-laravel/issues) for more login option

### With Fork

- Fork repository and clone it locally
- Go to [Heroku](https://heroku.com) to create an app
- Connect the app to your forked repo at the Deploy tab
- Add ``Heroku Postgres`` addon to your project at the Resources tab
- Add All details in the .env.example to your ``Heroku`` Config Vars at the Settings tab
- Run ``php artisan migrate --seed`` using the **Run Console** button
- Start your app buy clicking the **Open App** but and login with **lead@dsc.com** as the email and **password** as the password for the lead. Check [Issues](https://github.com/DSCEksu/dsceksu-laravel/issues) for more login option

### How To

- change Images
  - Icons: Visit [https://realfavicongenerator.net](https://realfavicongenerator.net) to generate your PWA icons
  - Splash: Visit [https://appsco.pe/developer/splash-screens](https://appsco.pe/developer/splash-screens) to generate your PWA splashscreen
  - Rename icons and splash to fit the names at ``public/images/icons`` directory
  - Change the ``logo.png`` image to your image while keeping the name as **logo.png**

- get database information
  - After you have the ``Heroku Postgres`` addon installed, open the addon at the Resources tab
  - Click on the **View Credential** button at the Settings Tab
  - Add all Database required info from the .env.example with the values you got from the view credential button

## Improvement

Click [here](https://github.com/orgs/DSCEksu/projects/1) to see improvements and update we are working on

## Updating

Here is a git workflow for updating your fork (or downloaded copy) to the latest version:

```git
git remote add upstream https://github.com/DSCEksu/dsceksu-laravel.git
git fetch upstream
git merge upstream/dsceksu-laravel
# resolve the merge conflicts in your editor
git add . -u
git commit -m 'Updated to the latest version'
```

## Contributing

DSC Laravel Template is an open source software project and we encourage developers to contribute patches and code for us to include in the main package of the project.

## Using GitHub Issues

- Feel free to use GitHub issues for questions, bug reports, and feature requests
- Use the search feature to check for an existing issue
- Include as much information as possible and provide any relevant resources (Eg. screenshots)
- For bug reports ensure you have a reproducible test case
- A pull request with a breaking test would be super preferable here but isn't required

## Websites using Template

| Community Name | Location | Web App Link |
| --- | --- | --- |
| DSC Ekiti State University | Nigeria | [Live Here](https://dsceksu.herokuapp.com) |

## License

```bash
Copyright (c) 2018 DSC Laravel Template 🔥

Permission is hereby granted, free of charge, to any person obtaining a copy
of this software and associated documentation files (the "Software"), to deal
in the Software without restriction, including without limitation the rights
to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
copies of the Software, and to permit persons to whom the Software is
furnished to do so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in all
copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE
SOFTWARE.
```

[![FOSSA Status](https://app.fossa.com/api/projects/git%2Bgithub.com%2FDSCEksu%2Fdsceksu-laravel.svg?type=large)](https://app.fossa.com/projects/git%2Bgithub.com%2FDSCEksu%2Fdsceksu-laravel?ref=badge_large)
