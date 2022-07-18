
let n = 0 

function numberFormat(n){
  return n.toString().padStart(2,'0')
}
// CREATION DE L'ELENEMT  HTML
function render(){
    // UTILISATION SANS JSX
/* const title  = React.createElement('h1',{},
     'Bonjour tout le monde ',
      React.createElement('span',{}, n)
) */
// UTILISATION AVEC JSX
const items = [

       'Tache 1',
       'Tache 2',
       'Tache 3 '
]
const lis = items.map((item,k) =><li key={k}>{item}</li>)
const title  =  <React.Fragment>
    
                       <h1 className="title" id={"title"+n}>
                            Bonjour tout le monde
                            <span> {n % 2 ? numberFormat(n) : null } </span>  
                       </h1>
                       <ul>
                           {lis}
                       </ul>
                </React.Fragment>
// INSERTION DE L'ELEMENT DANS LE DOM 
ReactDOM.render(title,document.querySelector("#app"))

}

render()

window.setInterval(() => {
    n++
    render()
}, 1000)



