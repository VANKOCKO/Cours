
/**\
 *   Map function
 */

const numbers = [1,2,3]

const doubleNumArray = numbers.map( (num) => {
       return  num * 2 
});

console.log(doubleNumArray)

const racines = numbers.map(Math.sqrt)

console.log(racines)

// utiliser map pour modifier la structure des elements dans un tableau 

// nous voulons [ {1:10}, {2:10}]
var tableauOrig = [
          {cle:1, valeur:10}, 
          {cle:2, valeur:20}, 
          {cle:3, valeur:30}, 
          {cle:4, valeur:40}, 
]

var tableauFormater =  tableauOrig.map( (el)=> {
        var format = {}
        format[el.cle] = el.valeur
        return format
})

console.log(tableauOrig )
console.log(tableauFormater)


// Map avec un querySelector 

var elems = document.querySelectorAll('select option:checked');

var values = Array.prototype.map.call(elems, (obj) => {
      return obj.value;
})

console.log(values)


// convertir avec map 
console.log(['1','2','3'].map(Number))

/**
 * 
 */




