/**
 * 
 */
class BoilingVerdict extends React.Component {
    constructor(props){
        super(props)
    }
    render(){
        return <div>
            {this.props.celsius}
        </div>
    }
}

// INSERTION DE L'ELEMENT DANS LE DOM 
ReactDOM.render(
    <BoilingVerdict celsius={50}/>
    ,document.querySelector("#app"))





