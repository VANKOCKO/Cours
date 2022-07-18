
function Field ({name, value,onChange, children} ) {
           return <div className="form-group">
                  <label htmlFor={ name }>{children}</label>
                  <input type="text" value={value} id={name} onChange={onChange} name={name} className="form-control"/>
           </div>
}
function Checkbox ({name, value,onChange, children} ) {
    return <div className="form-check">
                <input type="checkbox" checked={value} id={name} onChange={onChange} name={name} className="form-check-input"/>
                <label htmlFor={name} className="form-check-label">{children}</label>
    </div>
}
/**
 *  Home
 */
class Form extends React.Component  {
    /**
     * 
     * @param {*} props 
     */
    constructor(props){
         super(props)
         this.state = {
            nomSelect : ['demo1', 'demo2'],
            nom: '',
            prenom: '',
            newsletter: false
         }
         this.handleChange = this.handleChange.bind(this)
         this.handleSubmit = this.handleSubmit.bind(this)
    }/**
     * 
     * @param {*} e 
     */
    handleChange(e){
        const name = e.target.name 
        const type = e.target.type
        const value = type === 'checkbox' ? e.target.checked : e.target.value 
        this.setState({
             [name] : value,
        })
    }
    handleSubmit(e){
        e.preventDefault()
        const data = JSON.stringify(this.state)
        this.setState({
            nomSelect : ['demo1', 'demo2'],
            nom: '',
            prenom: '',
            newsletter: false
       })
    }
    /**
     * 
     * @returns 
     */
    render(){
         console.log("Render")
         return <div>
                    <p>Voici la valeur selectionner : {this.state.nom}</p>
                    <h2> Select tag </h2>
                    <select value={this.state.nomSelect} onChange={this.handleChange} multiple>
                           <option value="demo1"> Demo 1 </option>
                           <option value="demo2"> Demo 2 </option>
                           <option value="demo3"> Demo 3 </option>
                    </select>
                    <input type="checkbox" checked={this.state.checked} onChange={this.handleChange}/>
                    {this.state.checked ? <div>Un message affiche si on coche </div> : null}
                    <h2>Formulaire</h2>
                    <div>
                            <label htmlFor="nom">Nom</label>
                            <input type="texte" id="nom" name="nom" value={this.state.nom} onChange={this.handleChange}/>
                    </div>
                    <div>
                            <label htmlFor="prenom">Prenom</label>
                            <input type="texte" id="prenom" name="prenom" value={this.state.prenom} onChange={this.handleChange}/>
                    </div>
                    <div>
                            <label htmlFor="newsletter">S'abonner a la newsletter ? </label>
                            <input type="checkbox" id="newsletter" name="newsletter" value={this.state.newsletter} onChange={this.handleChange}/>
                    </div>
                    <h2>Field avec bootstrap</h2>
                    <form className="container" onSubmit={this.handleSubmit}>
                            <Field name="nom" value={this.state.nom} onChange={this.handleChange}>Nom</Field>
                            <Field name="prenom" value={this.state.prenom} onChange={this.handleChange}>Prenom</Field>
                            <Checkbox name="newsletter" id="newsletter" value={this.state.newsletter} onChange={this.handleChange}>S'abonner a la newsletter</Checkbox>
                            <div className="form-group">
                                  <button className="btn btn-primary">Envoyer</button>
                            </div>
                            {JSON.stringify(this.state)}
                    </form>
                    
         </div>
     }
}

/**
 * render 
 */
ReactDOM.render(
    <Form/>,
    document.querySelector('#app')
)