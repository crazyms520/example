// var farm = {
//     'farmMaster': 'hank',
//     'farmfiled':  'corn',
//     'corn1': 8,
//     'corn2': 9,
//     'farmAnimal1': 'dog',
//     'farmAnimal2': 'cat',
//     'callAnimal': function(who){
//         if( who == 'dog')
//             console.log('wow');
//         else if ( who == 'cat' )
//             console.log('m~');
//         else
//             console.log('who you call');
//     },
//     'sumCorn': function(){
//         console.log( this.corn1 + this.corn2);
//     }
// };

// console.log(farm.farmAnimal1);
// farm.callAnimal();
// farm.sumCorn()

function farm(){
    var farmMaster = 'hank';
    var farmfiled = 'corn';
    var corn1 = 8;
    var corn2 = 9;
    var farmAnimal1 = 'dog';
    var farmAnimal2 = 'cat';
    this.callAnimal = function(who){
        if( who == 'dog')
            console.log('wow');
        else if ( who == 'cat' )
            console.log('m~');
        else
            console.log('who you call');
    };
    this.sumCorn = function(){
        console.log( this.corn1 + this.corn2);
    };
}

var happyFarm = new farm();
happyFarm.callAnimal('dog');
