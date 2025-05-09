// script.js
const letItem = [
  { name: "sofa-green-1", price: 400000, image: "/asset/traced-green-1.png" },
  { name: "sofa-black", price: 650000, image: "/asset/traced-black-1.png" },
  { name: "sofa-blue", price: 750000, image: "/asset/blue.png" },
  { name: "chair", price: 150000, image: "/asset/kursi.png" },
];

let elementChart = [];
let cartList = [];

document.addEventListener("DOMContentLoaded", () => {
  renderCart();
});

let totalPirce = 0;
let openAlert = false;

function renderCart() {
  const containerCart = document.getElementById("container-cart");
  const cart = letItem.map((val, index) => {
    return `
      <div class="bg-gray-100 w-[260px] h-[330px]">
  
        <div class=" h-[186px] overflow-hidden flex justify-center items-center">
          <img src="${val.image}" alt="" class="w-[260px] h-auto">
        </div>
        <p class="px-3 py-2">${val.name}</p>
        <p class="px-3 text-xl font-bold">Rp ${val.price.toLocaleString()}</p>
            
        <div class="px-3">
          <button id="add-cart" 
            onclick="addToCart(${index})" 
            ${
              elementChart.includes(index)
                ? `class="px-3 py-2 rounded-md mt-5 bg-gray-800 text-white cursor-pointer w-full opacity-50"`
                : `class="px-3 py-2 rounded-md mt-5 bg-gray-800 text-white cursor-pointer w-full "`
            }
            ${elementChart.includes(index) ? `disabled` : ``}

          >add to chart</button>
        </div>
      </div>
    `;
  });

  containerCart.innerHTML = cart.join("");
}

function renderCartList() {
  const listCart = document.getElementById("cart-list");
  const list = cartList.map((val, index) => {
    return `
      <div class="mb-8">
        <div class="flex justify-between items-center">
          <div class=" w-[100px] h-[60px] mb-2">
            <img src="${val.image}" alt="" class="w-[100px] h-auto">
          </div>
          
        </div>
        
        <div class="flex justify-between items-center">
          <p>${val.name}</p>
          <p>Rp ${val.price.toLocaleString()}</p>
        </div>
      </div>
    `;
  });
  const elementTotal = `
    <div class="border-t-1 border-gray-300 flex justify-between items-center pt-2">
      <p>total</p>
      <p>Rp ${totalPirce.toLocaleString()}</p>
    </div>
    <button onclick="openDialog()" class="px-3 py-2 rounded-md mt-5 bg-gray-800 text-white cursor-pointer w-full ">payment</button>
  `;

  listCart.innerHTML = list.join("") + elementTotal;
}

function openDialog() {
  const elementDialog = document.getElementById("alert-dialog");

  const alert = `
    <div class="fixed inset-0 bg-black opacity-60 z-40 pointer-events-auto"></div>
  
    <div class="fixed z-50 inset-0 flex items-center justify-center">
      <div class="bg-white p-6 rounded-lg shadow-lg w-[800px]">
        <h2 class="text-lg font-semibold mb-2">Are you absolutely sure?</h2>
        <h3 class="text-lg font-semibold mb-2">Total : Rp ${totalPirce.toLocaleString()}</h3>
        <p class="text-sm text-gray-600 mb-4">
          This action cannot be undone.
        </p>
        <div class="flex justify-end gap-2">
          <button onclick="cancelDialog()" class="px-4 py-2 bg-white border rounded-md cursor-pointer">Cancel</button>
          <a href="index.html" class="px-4 py-2 bg-black text-white rounded-md cursor-pointer">Continue</a>
        </div>
      </div>
    </div>
  `;
  elementDialog.innerHTML = alert;
}

function cancelDialog() {
  const elementDialog = document.getElementById("alert-dialog");
  elementDialog.innerHTML = "";
}

function addToCart(index) {
  elementChart.push(index);
  cartList.push(letItem[index]);
  totalPirce += letItem[index].price;
  renderCart();
  renderCartList();
  console.log(totalPirce);
}
