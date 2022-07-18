const computerChoiceDisplay =  document.getElementById('computer-choice')
const userChoiceDisplay = document.getElementById('user-choice')
const resultDisplay = document.getElementById('result')
const possibleChoices = document.querySelectorAll('button');
let userChoice
let computerChoice
possibleChoices.forEach(possibleChoice => possibleChoice.addEventListener('click',(e)=>{
       userChoice = e.target.id
       userChoiceDisplay.innerHTML = userChoice
       generateComputerChooice()
}))

function generateComputerChooice(){
    // generation de nombre aleatoire
    const ramdomNumber = Math.floor( Math.random() * 3 )  
    if(ramdomNumber === 1 ) {
             
    }
}