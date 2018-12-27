import { GET_PRODUCTS, GET_PAYMENT_METHODS, POST_ORDERS } from "./";

export function getProducts() {
  return fetch(GET_PRODUCTS);
}

export function getPaymentMethods() {
  return fetch(GET_PAYMENT_METHODS);
}

export function postOrders(payload) {
  return fetch(POST_ORDERS,
      {
        method: "POST",
        body: JSON.stringify(payload),
        headers: {
          "Content-Type": "application/json"
        },
      })
}