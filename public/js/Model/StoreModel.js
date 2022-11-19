

class StoreModel{
    #products = [];
    #token;
    constructor(token){
        this.#token = token;
        console.log("StoreModel - OK");
    }

    getData(endpoint, callBack) {
        console.log("Get data with fetch")
        fetch(endpoint, {
            method: 'GET',
            headers: {
                'Content-Type': 'application/json',
                "X-CSRF-TOKEN": this.token
            }
        })
            .then((response) => response.json())
            .then((data) => {
                this.#products = data;
                callBack(this.#products);
            })
            .catch((error) => {
                console.error('Error:', error);
            });
    }

    getProducts(){
        return this.#products;
    }

    buy(product){
        for (const element of this.#products) {
            if(element.id == product){
                if (element.inStock <1) {
                    console.log("Out of stock!");
                }else{
                    console.log("Amount decreased!")
                    element.inStock = element.inStock-1;
                }
            }
        }
    }
}

export default StoreModel;