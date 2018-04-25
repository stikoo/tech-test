# Jet2holidays Responsive Project - Tech Test

##  You will need

* `Terminal`
* `NPM installed https://www.npmjs.com/`
* `Node installed: https://nodejs.org/en/`

## Getting started

* `git clone https://github.com/Jet2UX/tech-test.git`
* `brew install yarn` (Use `npm i` if preferred)
* `yarn`
* `npm run build` (In a separate terminal tab)
* `npm run watch` (In a separate terminal tab)


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
- Device testing should be done using BrowserStack

