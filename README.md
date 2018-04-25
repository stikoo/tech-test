# Jet2holidays Responsive Project

___
Re-design of the jet2holidays website
___

## Getting started

* `git clone git@bitbucket.org:ux-jet2/jet2holidays-sitecore.git`
* `brew install yarn` (Use `npm i` if preferred)
* `yarn`
* `npm run build` (In a separate terminal tab)
* `npm run watch`


## Development  

### Folder structure

- `/Build` is where our webpack config sits
- `/component-gallery` is a shared resource for existing components. Use this to check for components before building new ones.
- `/Components` houses all of our components that we use across the site. This is the main entry point for development.
- `/Core` contains our assets and site-wide JS and CSS
- `/include` has shared HTML inside, such as the header and footer
- `/Pages` contains the main pages of the site, made up of components
- `/Themes` includes our theming settings for the different jet2 brands

### Theming

To utilise theming in CSS, use variables such as `$color-primary` and `$color-secondary` instead of their accompanying values.
These can be found in the `/Themes/mappings` folder under their respective file name.

### Commands

`npm run build` will run webpack and then initiate the gulp file. Once it is completed the server will start and CSS will be watched for changes.
`npm run watch` will run webpack and then watch for JS files and hot reload on changes.

### Linting

We lint all of our SASS and JS using [Stylelint](https://github.com/stylelint/stylelint) and [ESLint](https://github.com/eslint/eslint), respectively.
These will need to be installed on your preferred editor, but support is widely adopted and plugins are readily available for all major editors.

#### Stylelint

Follow the instructions [here](https://github.com/stylelint/stylelint/blob/master/docs/user-guide/complementary-tools.md#editor-plugins)

#### ESLint
- [Atom](https://atom.io/packages/linter-eslint)
- [Sublime](http://www.sublimelinter.com/en/latest/installation.html#installing-via-pc)
- [VSCode](https://marketplace.visualstudio.com/items?itemName=dbaeumer.vscode-eslint)

Once setup your editor should notify you when your JS or SASS violates the ruleset in place.


### Conventions
- [SASS](http://sass-lang.com/guide)
- [BEM](https://csswizardry.com/2013/01/mindbemding-getting-your-head-round-bem-syntax/)


## Testing

- Browser Support: IE9+
- Mobile/Tablet Support: All
- Device testing should be done using BrowserStack (ask someone for a login)


## Deployment

Any branch can be deployed (almost) instantly to a staging link for preview and sign-off of new features. This repo contains a shell script which can be invoked from a terminal window using the following command, and from the root of the project:

`./deploy.sh <branch_name>`
`e.g. ./deploy.sh Sprints/Sprint-4-checkavail-feature`

Where <branch_name> should be replaced with the name of your branch you wish to deploy. If unspecified, the master branch will be deployed. This command might take a while to install the npm modules and to compile webpack, but once finished your terminal will return you a URL, something like:

`****** Site deployed successfully ******`
`http://zpb64r1lt39lqzp3.jet2.team.tools`

Each preview link has a lifetime of 7 days, so if you find it stops working one day, it's probably expired, so you'll need to create another instance by following the steps above again.

To get setup and ready to go, there's just one thing you need to do, and that is to ensure you're able to connect to the testing server where code is deployed to. To do this, run the following terminal command

`ssh-copy-id devops@178.62.21.30`

(If you get an error saying there is no such file or directory with a key in it, run the command `ssh-keygen`, and hit enter for all the prompts.)

Once this is done you will be prompted to enter a password, this can be found by typing 'preview server details' in Slack (just type it to yourself).
*(NOTE: this needs only to be done once, once you're able to connect to the server you can deploy at your hearts content)*

## Contributing

Fill in the [PR Template](https://bitbucket.org/ux-jet2/jet2holidays-sitecore/src/master/PR_TEMPLATE.md). Provide as much detail as possible.
Once your PR is submitted, wait for 2 approved reviews before merging.
# tech-test
# tech-test
# tech-test
