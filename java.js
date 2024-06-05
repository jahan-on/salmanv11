console.log('My first super here is Superman'); 
console.log('I like Batman'); 
setTimeout(()=>{console.log("But, I don't know Robin!"); //ASYNCHONAS Programming....

}, 100);
console.log('I love IRON MAN'); 


//first GET request--
//1. Deciding url or API endpoit
//2. paste teh url between ()- can use the sigle quote 
//3. can say after .then log the resposne to the console. 
//4. The JSON response is a string - not a Javasrcipt object. can user json() method to parse the JSON respone into a JS object. 

/*
fetch('https://catfact.ninja/fact').then((response =>{
    console.log(response);
}))
*/
// now parsing using json() method. 
/*
fetch('https://catfact.ninja/fact').then( (response=>{
    response.json().then((data=>{
        console.log(data); 
    }))
})
)
*/
// async and await keyword. 
/*
const getData=async()=>{
    const response =await fetch('https://catfact.ninja/fact'); 
    //console.log(response); 
    const data=await response.json(); 
    //console.log(data); 
    return data;

}
getData().then(data=>{
   // console.log(data)
   
}); 
*/


const catF = document.getElementById('cat-para');

const getData = async () => {
    try {
        const response = await fetch('https://catfact.ninja/fact');
        const data = await response.json();
        catF.innerText = data.fact; // Assuming the cat fact is stored in a property called 'fact'
        console.log(data); 
    } catch (error) {
        console.error('Error fetching cat fact:', error);
    }
    
}

getData();
