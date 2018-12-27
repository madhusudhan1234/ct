import React, { Component } from 'react';
import Product from './components/Product';

class CodingTaskApp extends Component {

  constructor(props) {
    super(props);

    this.state = {
      products: [],
      payment_methods: [],
      productPurchaseMessage: '',
    };

    this.orderProduct = this.orderProduct.bind(this);
  }

  fetchProducts() {
    fetch('/api/products')
      .then(response => response.json())
      .then(product => this.setState({ products: product.data }))
      .catch(e => console.error(e));

  }

  fetchPaymentMethods() {
    fetch('/api/payment-methods')
      .then(response => response.json())
      .then(payment_method => this.setState({ payment_methods: payment_method.data }))
      .catch(e => console.error(e));
  }

  orderProduct(e, paymentMethod, quantity, price, productName) {
    const payload = {
      quantity: quantity,
      name: productName,
      price: price,
      payment_method: paymentMethod,
    };
    e.preventDefault();
    fetch("/api/orders",
      {
        method: "POST",
        body: JSON.stringify(payload),
        headers: {
          "Content-Type": "application/json"
        },
      })
      .then(response => response.json())
      .then(data => this.setState({ productPurchaseMessage: data.message }));
  }

  render() {
    return (
      <div className="container">
        <h1>Available Products!</h1>
        {this.state.productPurchaseMessage &&
          <div className="alert alert-primary" role="alert">
            {this.state.productPurchaseMessage}
          </div>
        }
        { this.state.products.map(product =>
          <Product
            key={product.id}
            product={product}
            paymentMethods={this.state.payment_methods}
            order={this.orderProduct}
          />
        )}
      </div>
    );
  }

  componentDidMount() {
    this.fetchProducts();
    this.fetchPaymentMethods();
  }
}

export default CodingTaskApp;