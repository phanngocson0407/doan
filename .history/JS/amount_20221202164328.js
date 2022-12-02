let amountElement = document.getElementById("amount");

let amount = amountElement.value;

let render = (amount) => {
  amountElement.value = amount;
};
let handlePlus = () => {
  amount++;
  render(amount);
};
let handleMinus = () => {
  if (amount > 1) amount--;
  render(amount);
};
amountElement.addEventListener("input", () => {
  amount = parseInt(amount);
  amount = isNaN(amount) ? 1 : amount;
  render(amount);
});
