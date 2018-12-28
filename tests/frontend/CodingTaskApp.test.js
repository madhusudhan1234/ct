import React from 'react';
import ReactDOM from 'react-dom';
import renderer from 'react-test-renderer';
import Enzyme, { shallow } from 'enzyme';
import Adapter from 'enzyme-adapter-react-16';
import App from '../../assets/js/CodingTaskApp';
import Product from '../../assets/js/components/Product';

global.fetch = require('jest-fetch-mock');
Enzyme.configure({ adapter: new Adapter() });

describe('CodingTaskApp', () => {
  it('renders without crashing', () => {
    const div = document.createElement('div');
    ReactDOM.render(<App />, div);
  });

  test('has a valid snapshot', () => {
    const component = renderer.create(
      <App />
    );
    let tree = component.toJSON();
    expect(tree).toMatchSnapshot();
  });
});

describe('Product Component', () => {
  const props = {
    product: {
      "id": "1",
      "name": "Tshirt",
      "price": "50",
      "currency": "USD"
    },
    paymentMethods: [
      {
        "id": "1",
        "type": "cash",
        "name": "Cash on Delivery"
      },
      {
        "id": "2",
        "type": "stripe",
        "name": "Stripe Payment Gateway"
      }
    ],
    order: jest.fn(),
  }

  it('renders without crashing', () => {
    const div = document.createElement('div');
    ReactDOM.render(<Product { ...props } />, div);
  });

  test('Product has a valid snapshot', () => {
    const component = renderer.create(
        <Product { ...props } />
    );
    let tree = component.toJSON();
    expect(tree).toMatchSnapshot();
  });
});