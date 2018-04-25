import logger from 'logger';
import { camelCase } from './utils/stringUtils';

const log = logger.create('componentLocator');

const getFileName = path => path.split('/').reverse()[0];

class ComponentLocator {
    findAll() {
        return Array.from(document.querySelectorAll('[data-component]')).map(element => {
            const componentFolderPath = element.getAttribute('data-component');
            const componentName = camelCase(getFileName(componentFolderPath));

            log.info('Component found: ' + componentFolderPath);

            const component = require('../../Components/' + componentFolderPath + '/js/' + componentName + '.js');

            return [element, component];
        });
    }

    findChildComponent(rootElement, childComponentName) {
        return rootElement.querySelector(`[data-childcomponent="${childComponentName}"]`);
    }
}

export default new ComponentLocator();
