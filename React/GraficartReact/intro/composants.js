
/**
 *  Composant en function
 * 
 * @param {*} param0 
 * @returns 
 */
function WelcomeFunc({name,children}){
    return   <div>
                 <h1>Bonjour{name}</h1>
                 <p>{children}</p>
             </div>
}
/**
 *  Composant en class
 *   Doit toujours heriter de la class React Components  
 */
class Welcome extends React.Component {
      /**
       *  constructeur
       */
      constructor(propos){
           super(propos)
           console.log(propos)
      }
       /**
        * 
        * @returns 
        */
      render(){
                return  <div>
                            <h1>Bonjour {this.props.name} </h1>
                            <div>
                                {this.props.children}
                            </div>
                        </div>
      }
}
/**
 * 
 */
class Clock extends React.Component {


    constructor (props) {
        super(props)
        this.state = {date: new Date()}
        this.timer = null
    }

    componentDidMount () {
        this.timer = window.setInterval(this.tick.bind(this), 1000)
    }

    componentwillUnmount () {
        window.clearInterval(this.timer)
    }

    tick () {
        this.setState({date: new Date()})
    }

    render () {
        return <div>
            Il est {this.state.date.toLocaleDateString()} {this.state.date.toLocaleTimeString()}
        </div>
    }

}
let chiffre   = 0 
/**
 * 
 */
class Incrementer extends React.Component {

    constructor(props){
         super(props)
         // declare  la variable d'etat 
         this.state = {n: props.start,timer:null}
    }
    /**
     *  Application monte
     */
    componentDidMount(){
        this.play()
    }
    componentwillUnmount(){
        window.clearInterval(this.state.timer)
    }
    increment(){
        // set la variable d'etat 
        this.setState((state, props) => ( { n: state.n + props.step} ))
    }
    
    pause(){
        window.clearInterval(this.state.timer)
        this.setState({
            timer:null 
        })
    }
    play(){
        window.clearInterval(this.state.timer)
        this.setState({
            timer : window.setInterval(this.increment.bind(this),1000)  
        })
    }
    toggle(){
        return this.state.timer ? this.pause() : this.play()
    }
    label(){
        return this.state.timer ? 'Pause':'Lecture'
    }
    reset(){
          this.pause()
          this.play()
          this.setState((state, props) => ({n: props.start}))
    }
    render(){
              return <div>
                       valeur : {this.state.n} 
                          <button onClick={this.toggle.bind(this)}>{this.label()}</button> 
                          <button onClick={this.reset.bind(this)}>Reinitialiser</button> 
              </div>
    }
}
Incrementer.defaultProps = {
    start : 0,
    step: 0 
}
/**
 * 
 */
 function tick() {
    const element = (
      <div>
        <h1>Bonjour, monde !</h1>
        <h2>Il est {new Date().toLocaleTimeString()}.</h2>
      </div>
    );
    ReactDOM.render(element, document.getElementById('root'));
  }
  
  setInterval(tick, 1000);
  
  class ManualIncrementer extends React.Component {
      constructor(props){
          super(props)
          this.state = {n : 0}
      }
      increment(e){
          e.preventDefault()
        // set la variable d'etat 
        this.setState((state, props) => ( { n: state.n + 1} ))
      }
      render(){
          return <div>
                     Valeur : {this.state.n} <button onClick={this.increment.bind(this)}>Incrementer</button>
          </div>
      }

  }
/**
 * 
 * @returns 
 */
function Home (){
           return <div>
                        <Welcome name="Dorothee"/>
                        <Welcome name="Jean"/>
                        <Clock/>
                        <Incrementer start={10} step={1} />
                        <Incrementer start={100} step={10} />
                        <Incrementer start={1000} step={100} />
                        <ManualIncrementer />
                  </div>
}
ReactDOM.render(
                    <Home/>,
                    document.querySelector('#app')
)