require('./bootstrap');

if(document.querySelector('#add_variations')){
    document.querySelector('#add_variations').addEventListener('click', ()=>{
        axios.post(createPizzaVariation, {})
        .then(response => {
            console.log('click');
            const variations = document.querySelector('#variations');
            if(!document.querySelector('#variations_title')){
                variations.classList.add('border-t-2');
                variations.classList.add('border-gray-800');
                variations.classList.add('my-4');
                variations.innerHTML = '<h1 id="variations_title" class="text-2xl">Variations</h1>';
            }
            const e = document.createElement('section');
            e.classList.add('my-4');
            e.classList.add('border-b-2');
            e.classList.add('border-gray-800');
            e.innerHTML = response.data.html;
            variations.appendChild(e);
            e.querySelector('.delete-variation').addEventListener('click', deleteVariation);
        })
        .catch(error => console.log(error))   
    });
    
}


/*  Here event listener for form is created, to check if prices at
    inputs are written correctly, because input type is text, Not
    number, because decimal numbers are used in database.
    In case they are input wrongly, the value will be nullified,
    and should not pass required input check
*/
if(document.querySelector('#product_form')){
    const form = document.querySelector('#product_form');
    form.addEventListener('submit', e => {
        // e.preventDefault();
        // console.log(e.target.querySelector('input[name="photo"]').value);
        // const pictures = e.target.querySelectorAll('input[name="v_photo[]"]');
        // pictures.forEach(pic => console.log(pic.value));
        const inputs = e.target.querySelectorAll('input.price');
        inputs.forEach(input => {
            if(!priceCheck(input.value)){
                input.value = null;
            }
        });
    });
    
}

function deleteVariation(e)  {
    console.log('remove');
    e.target.closest('section').remove();
    if(!document.querySelector('section')){
        const variations = document.querySelector('#variations');
        variations.classList.remove('border-t-2');
        variations.classList.remove('border-gray-800');
        variations.classList.remove('my-4');
        variations.innerHTML = '';
    }
}

/*
    This function checks all prices inputs are
    correctly input.
*/
function priceCheck(value){
    if(typeof value !== 'string') return false; 
    if(value.match(/[^0-9.,]/g)) return false; //check if there are only numbers and dots or commas
    const split = value.replace(',','.').split('.');
    if(split.length > 2) return false; //checks if there are only one separating symbol
    if(typeof split[1] !== 'undefined'){
        if(split[1].length > 2) return false;
    }
    return true;
}

if(document.querySelector('.pizza-button')){
    document.querySelectorAll('.pizza-button').forEach(button => button.addEventListener('click', expandPizza));
    document.querySelectorAll('.product-image').forEach(image => image.addEventListener('click', expandPizza));
}

function expandPizza(e){
    console.log(e.target.getAttribute('data-id'));
    const index = parseInt(e.target.getAttribute('data-id'));
    console.log(typeof index);
    console.log(index);
    console.log(allProducts[index-1]);
}