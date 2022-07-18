import java.awt.Rectangle

fun tuto(){

    /**
     *   Variables
     */
    var myVariable = 5
    myVariable = 1
    println("The value of our variable is : $myVariable ")

    var booleanVariable: Boolean = true
    booleanVariable = false
    println("The value of our variable is : $booleanVariable ")


    /**
     *  Arithmetic operateur
     */

    var x = 5
    var y = 7
    var result = x + y
    x += 10
    println("The value of our result is : ${  x + y }")


    /**
     *  Decimal Number
     *
     */
    var xdec: Float = 20.10F
    var ydec: Float = 30F
    println("The value of our resultDecimal  is : ${  xdec / ydec }")


    /**
     *  String Variable
     */

    val info = "This is an example text"
    println("The value of text  is : ${info.toUpperCase()}")


    /**
     *  Logical an comparaison
     */

    val xlogi =  4
    val ylogi = 5
    print( xlogi == ylogi)


    /**
     *   If condition
     */


    if(xlogi > ylogi) {
          println("Tres bien")
    }
    else
    {
         println("Pas bien")
    }

    /**
     *  Null Values an user input
     */


    /**
    val userInput = readLine()?.toInt()
    println("You entered ${userInput.toString()}")
    if( userInput != null)
         println("Addition Resultat ${userInput.toInt() - 5 }")
    else
        println("ok")

    **/
    /**
     *   Array
     */
    val myArrayInt = arrayOf(3,2,6,4)
    var myArraString = arrayOf("Hello", "Bye Bye", "Whats up ? ")
    println("The value of array number is : ${ myArrayInt[3]} ")
    println("The value of array string is : ${ myArraString[2]} ")


    /**
     *  For
     */

    var list = listOf("a","b","c")
    for(x in list) {
          println(x)
     }

    var number = listOf(1,2,3,4,5,6,7,8,9)
    for (x in number) {
         println(x)
    }

    val items = listOf("apple", "banana", "kiwifruit")
    for(item in items){
         println(item)
    }




}

/**
 *  Nullable values and null checks
 */
/**
 *  @param str String
 *  @return str
 */
fun parseInt(str:String): Int?{
    return str.toIntOrNull()
}
/**
 *
 */
fun printProduct(arg1: String, arg2: String){
    val x = parseInt(arg1)
    val y = parseInt(arg2)

    if (x != null && y != null) {
        //x and y are automatically cast to non-nullable after null check
        println(x * y)
    }
    else {
        println("'$arg1' or '$arg2' is not a number")
    }

}

fun getStringLength(obj: Any): Int?{
    if (obj !is String) return null
    return null
}

/**
 * Create DTOS provide you gettter and setter of class
 */
data class Customer(val name: String,val email:String)

/**
 *  Default Value for function parameters
 */
fun foo(a: Int? = null,b: String = "parametre de fonction" ) {
       println("La valeur de a est : ${a}")
}

/**
 *  Create a class with construct plus defiinition
 */
class  Personne(   val name: String = "kocko",
                   val prenom: String  = "van",
                   val age: Int = 30,
                   val addresse:String = "$ rue de Credon 55600 Marville")


/**
 *  Raccourci de fcontions
 */
fun Answer() = 42
 // equivaent
fun AnswerEquiv ():Int {
     return 42
 }

/**
 *    Shortcode
 */
fun transform(color: String): Int = when(color) {
    "Red" -> 0
    "Green" -> 1
    "Blue" -> 2
   else -> throw  java.lang.IllegalArgumentException("Invalid color parameter")
}

/**
 *  Configure a property of object
 */
val myRectangle = Rectangle().apply {


}
fun main(){
      printProduct("6","7")
      printProduct("a", "7")
      println(getStringLength("hello"))
      println(Customer("kocko", "van.kocko@gmail.com").email)
      println(foo())
      println(" Voic vos informations,  nom : ${Personne().name},prenom : ${Personne().prenom},age : ${Personne().age},adresse : ${Personne().addresse}, ")
      println(Answer())
      println(AnswerEquiv())
      println(transform("Blue"))
      InitOrderDemo("Hellor")
        /**
         *  Creation instance de class
         */
      Personne("van")
     // Lunch draw
    Circle().draw();
}


/**
 *  Class
 */
class InitOrderDemo(name: String){

    val firstProperty = "First property: $name".also(
          ::println
    )
    init {
         println("First initializer block that prints $name")
    }
    val secondProperty = "Second Property: ${name.length}".also(::println)
}


class Person(val name: String){

}

/**
 *
 */
class Category(val products: MutableList<Products> = mutableListOf())

class Products {
     constructor(cat: Category) {
               cat.products.add(this)
     }
}

/**
 *  Abstract class
 */

abstract class Polygon {
     abstract fun draw()
}

class Rectangle : Polygon() {
    override fun draw() {
        TODO("Not yet implemented")

    }
}

/**
 * Overriding methods
 */

open class Shape {
     open fun draw(){
          println("Draw function")
     }
     open fun fill(){
         println("Fill function")
     }
}

class Circle() : Shape(){
    override fun draw() {
        super.draw()
    }
}

open class Carre(): Shape() {
    override fun draw() {
        super.draw()
    }
    override fun fill() {
        super.fill()
    }

}








