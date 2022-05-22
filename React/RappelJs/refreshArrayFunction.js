
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
 *    Find function 
 */


const arra1 = [5,12,8,130,44]

const found = arra1.find(element  => element > 10)

console.log(found)


//   Find an object in an array by one of its properties

const inventory = [
    {name: 'apples', quantity: 2},
    {name: 'bananas', quantity: 0},
    {name: 'cherries', quantity: 5}
  ];

console.log(inventory.find(( fruit )=>{ return fruit.name === 'cherries'}))






/**
 *  Filter Function 
 */


 const words = ['spray', 'limit', 'elite', 'exuberant', 'destruction', 'present'];

 const result = words.filter(word => word.length > 6);
 
 console.log(result);



 /**
  *   Reduce Function  : est un accumlateur 
  * 
  * La méthode reduce() applique une fonction qui est un « accumulateur » 
  * et qui traite chaque valeur d'une liste (de la gauche vers la droite) 
  * afin de la réduire à une seule valeur.
  */

  const array1 = [1, 2, 3, 4];

  // 0 + 1 + 2 + 3 + 4
  const initialValue = 0;
  const sumWithInitial = array1.reduce(
    (previousValue, currentValue) => previousValue + currentValue,
    initialValue
  );
  
  console.log(sumWithInitial);




  /**
   *    Concat function 
   */



   const concatarray1 = ['a', 'b', 'c'];
   const concatarray2 = ['d', 'e', 'f'];
   const concatarray3 = concatarray1.concat(concatarray2);
   
   console.log(concatarray3);


   /**
    *  Slice function 
    */


    const animals = ['ant', 'bison', 'camel', 'duck', 'elephant'];

    console.log(animals.slice(2));

    console.log(animals.slice(2, 4));


/**
 * splice function 
 */


 const months = ['Jan', 'March', 'April', 'June'];
 months.splice(1, 0, 'Feb');
 // inserts at index 1
 console.log(months);
 // expected output: Array ["Jan", "Feb", "March", "April", "June"]
 
 months.splice(4, 1, 'May');
 // replaces 1 element at index 4
 console.log(months);
 // expected output: Array ["Jan", "Feb", "March", "April", "May"]
 
