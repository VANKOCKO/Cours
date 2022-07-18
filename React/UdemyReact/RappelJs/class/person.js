import {Human} from './Humain.js'
class person extends Human { 
          name = "van";
          gender = "femelle";
     printMyName = () => {
          console.log(this.name)
     }
}
export default person