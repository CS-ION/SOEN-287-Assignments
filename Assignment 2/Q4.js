function calculate(){
    event.preventDefault();

    price = [24,25,26]
    total = 0;

    for (let i = 0; i < 3; i++){
        let book_quantity = document.getElementById("book"+(i+1)).value;

        if (!book_quantity.match(/^\d+$/)){
            alert("Enter a valid Integer value!");
            return;
        }

        book_quantity = Number.parseInt(book_quantity);

        document.getElementById("result").innerHTML += "<strong>" + 
        document.getElementById("l"+(i+1)).textContent + " (Quantity = " + 
        book_quantity + "):</strong> $" + (book_quantity*price[i]) + "<br>" ;

        total+=book_quantity*price[i];
    }

    document.getElementById("result").innerHTML += "<br><strong>Final Total: </strong>$" + total;



}