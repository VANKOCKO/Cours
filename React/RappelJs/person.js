import {Human} from './Humain.js'
class person extends Human { 
     constructor(){
         super()
         this.name = "van"
         this.gender = "femelle"
     }
     printMyName = () => {
          console.log(this.name)
     }
}
export default person