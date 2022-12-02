let amountElement = document.getElementById("amount");
let amount = amountElement.value;
let render = (amount) => {};
let handlePlus = () => {
  amount--;
  render(amount);
};
