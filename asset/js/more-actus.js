const plus = document.querySelector('#actus .actus-more');
const container = document.querySelector('#actus .actus-container');
const more = document.querySelector('#actus .actus-more .more-text');

plus.addEventListener('click', function(){
    // const more_height = container.getBoundingClientRect().height;
    // console.log(more_height);

//     fetch('http://localhost/stage/md_com&sport/wp-json/wp/v2/actu')
//   .then(function(response)){
//     await response.json();
//   }
//   .then(data => {
//     // Faites quelque chose avec les données récupérées
//     console.log(data);
//   })
//   .catch(error => {
//     // Gérez les erreurs en cas d'échec de la requête
//     console.error(error);
//     return '';
//   });


    // let more_height = 973;
    // if(more_height !== container.clientHeight * 2){
    //     container.style.height = container.clientHeight * 2 + 'px';
    //     // more.innerHTML = 'Voir plus';
    //     console.log('plus grand');
    // } else {
    //     container.style.height = container.clientHeight / 2 + 'px';
    //     // more.innerHTML = 'Voir moins';
    //     console.log('plus petit');
    // }    
});