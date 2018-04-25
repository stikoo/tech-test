import logger from 'logger';
import componentLocator from './componentLocator';
import { camelCase } from './utils/stringUtils';
import { convertStringToValue } from './utils/converters';

const log = logger.create('componentLoader');

const removeDataDash = name => name.replace('data-', '');
const attributeName = name => camelCase(removeDataDash(name));

const isFunction = obj => typeof obj === 'function';

class ComponentLoader {
    
    getProps(element) {
        const allAttributes = Array.from(element.attributes);
        const dataAttributes = allAttributes.filter(attr => /^data-(?!component)/.test(attr.name));
        const props = dataAttributes.reduce((obj, attr) => { obj[attributeName(attr.name)] = convertStringToValue(attr.value); return obj; }, {});

        return props;
    }

    initComponent(component, element){
        const { View, ViewModel } = component;
        
        const props = this.getProps(element);

        const view = View ? new View(element, props) : null;
        let vm = null;

        if(ViewModel){                
            const mergedProps = isFunction(ViewModel.defaults) ? Object.assign({}, ViewModel.defaults(), props) : props;

            //log.debug('props', Array.from(element.attributes), props);
            //log.debug('props+defaults', mergedProps);

            vm = new ViewModel(view, mergedProps);
        }

        return {
            view,
            viewModel: vm,            
        };
    }

    initChildComponent(rootElement, name, module) {
        const childElement = componentLocator.findChildComponent(rootElement, name);
        const { viewModel } = this.initComponent(module, childElement);

        return viewModel;
    }

    load() {
        log.info('searching for components...');         
        const components = componentLocator.findAll();

        log.info(`initialising components... ${components.length} in total`);

        components.forEach(([element, component]) => {
            this.initComponent(component, element);
        });
    }
}

export default new ComponentLoader();
