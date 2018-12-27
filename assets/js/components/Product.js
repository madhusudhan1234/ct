import React, { Component } from 'react';

export default  class Product extends Component {
  constructor(props) {
    super(props);

    this.state = {
      isShowForm: false,
      selectedQuantity: 1,
      selectedPayMethod: 'cash',
      totalPrice: null,
    }

    this.handlePayMethodChange = this.handlePayMethodChange.bind(this);
    this.showForm = this.showForm.bind(this);
    this.handleQuantityChange = this.handleQuantityChange.bind(this);
    this.calculatePrice = this.calculatePrice.bind(this);
  }

  handlePayMethodChange(e) {
    this.setState({ selectedPayMethod: e.target.value });
  }

  showForm() {
    this.setState({ isShowForm: true });
  };

  handleQuantityChange(e) {
    this.setState({ selectedQuantity: e.target.value }, () => this.calculatePrice());
  }

  calculatePrice() {
    this.setState({ totalPrice: this.props.product.price * this.state.selectedQuantity });
  }

  render(){
    return (
      <div className="card" key={this.props.product.id}>
        <div className="card-body">
          <h5 className="card-title">{this.props.product.name}</h5>
          <p className="card-text">{this.props.product.currency} {this.props.product.price}</p>
          {!this.state.isShowForm && <button className="btn btn-primary" onClick={this.showForm}>Process to Buy</button>}
          {this.state.isShowForm &&
            <form>
              <div className="form-group">
                <label htmlFor="payment">How do you pay?</label>
                <select className="form-control" id="payment" onChange={this.handlePayMethodChange}>
                  {this.props.paymentMethods.map(paymentMethod =>
                    <option key={paymentMethod.id} value={paymentMethod.type}>{paymentMethod.name}</option>
                  )}
                </select>
              </div>
              <div className="form-group">
                <label htmlFor="quantity">Quantity</label>
                <input className="form-control" type="number" name="quantity" defaultValue="1" min="1" max="100" onChange={this.handleQuantityChange} />
              </div>
              <button
                className="btn btn-primary"
                onClick={(e) => this.props.order(e, this.state.selectedPayMethod, this.state.selectedQuantity, this.props.product.price, this.props.product.name)}>
                Buy
              </button>
            </form>
          }
          {this.state.totalPrice && <span>Price: <strong>{this.props.product.currency} {this.state.totalPrice}</strong></span>}
        </div>
      </div>
    );
  }

  componentDidMount() {
    this.calculatePrice();
  }
}