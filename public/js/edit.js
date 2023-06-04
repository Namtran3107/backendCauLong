



function minus(){
    const quality = document.querySelector(".number-of").value;
    if(quality == 1){
        alert("Không thể ít hơn nữa.")
    }else{
        document.querySelector(".number-of").value = quality - 1;
    }
}
function plus(){
    const quality = parseInt(document.querySelector(".number-of").value);
    if(quality == 5){
        alert("Không thể đặt nhiều hơn 5 sản phẩm.")
    }else{
        document.querySelector(".number-of").value = quality + 1;
    }
}


function totalMoney(){
    let totalProduct = 0;
    const arrayMoney = [];
    const getMoney = document.querySelectorAll(".get-money");
    getMoney.forEach(element => {
        const moneyItem = element.textContent;
        arrayMoney.push(parseInt(moneyItem.replace(/\./g, '')));
    });
    let total = 0;
    arrayMoney.forEach(item => {
        total += item;
        totalProduct++;
    });
    // in ra giá tiền
    document.querySelector(".cart-total-prices").innerHTML = total.toLocaleString('vi-VN');
    // in ra số lượng tông sản phẩm
    document.querySelector(".total-product").innerHTML = totalProduct;
}
totalMoney();