const plus = document.querySelector('#actus .actus-more');
const more = document.querySelector('#actus .actus-more .more-text');

const actus_show = document.querySelector('#actus .actu-show');


function ucFirst(str){
    if(typeof str !== 'string' || str.length === 0){
        return str
    }
    return str.charAt(0).toUpperCase() + str.slice(1);
}


function actus_query() {
    let count = 0;
    let recount = 0;
    let nb_actus = 0;
    // let firstdata = null;

    fetch('http://localhost/stage/md_com&sport/wp-json/wp/v2/actu')
  .then(response => response.json())
  .then(data => {
    // Faites quelque chose avec les données récupérées
        data.forEach(d => {
            count++;
            nb_actus++;

            if(nb_actus === 0){
                
                const empty = document.createElement('p');
                empty.innerHTML = "Pas d'acualités pour le moment";
                actus_show.append(empty);

            } else if(nb_actus >= 1 && nb_actus <= 3){

                const actu_box = document.createElement('div');
                const actu_infos = document.createElement('div');
                const link_img = document.createElement('a');
                const link_txt = document.createElement('a');
                const actu_img = document.createElement('img');
                const actu_title = document.createElement('h2');
                const desc_actu = document.createElement('p');

                actu_box.classList.add('actu-box');
                if (count % 2 === 0) {
                    actu_box.classList.add('reverse');
                }
                actu_infos.classList.add('actu-infos');
                actu_title.classList.add('actu-title');
                desc_actu.classList.add('desc-actu');
                
                fetch('http://localhost/stage/md_com&sport/wp-json/wp/v2/media/' + d.featured_media)
                    .then(response => response.json())
                    .then(img_d => {
                        const img_url = img_d.media_details.sizes.actu_cover.source_url;

                        actu_img.src = img_url;
                        actu_img.alt.innerHTML = d.title.rendered;
                    })
                    .catch(error => {
                        return error;
                    });

                actu_title.innerText = ucFirst(d.title.rendered);
                desc_actu.innerText = ucFirst(d.acf.résumé_actu);

                link_img.appendChild(actu_img);

                link_txt.append(actu_title);
                link_txt.append(desc_actu);

                link_img.href = '';
                link_txt.href = '';
                

                actu_infos.appendChild(link_txt);
            
                actu_box.append(link_img);
                actu_box.append(actu_infos);

                actus_show.append(actu_box);

            } else {
                plus.addEventListener('click', function(){
                    
                    recount++;

                    const actu_box = document.createElement('div');
                    const actu_infos = document.createElement('div');
                    const link_img = document.createElement('a');
                    const link_txt = document.createElement('a');
                    const actu_img = document.createElement('img');
                    const actu_title = document.createElement('h2');
                    const desc_actu = document.createElement('p');

                    actu_box.classList.add('actu-box');
                    if (recount % 2 !== 0) {
                        actu_box.classList.add('reverse');
                    }
                
                    actu_infos.classList.add('actu-infos');
                    actu_title.classList.add('actu-title');
                    desc_actu.classList.add('desc-actu');
                    
                    fetch('http://localhost/stage/md_com&sport/wp-json/wp/v2/media/' + d.featured_media)
                        .then(response => response.json())
                        .then(img_d => {
                            const img_url = img_d.media_details.sizes.actu_cover.source_url;

                            actu_img.src = img_url;
                            actu_img.alt.innerHTML = d.title.rendered;
                        })
                        .catch(error => {
                            return error;
                        });

                    actu_title.innerText = d.title.rendered;
                    desc_actu.innerText = d.acf.résumé_actu;

                    link_img.appendChild(actu_img);

                    link_txt.append(actu_title);
                    link_txt.append(desc_actu);

                    link_img.href = '';
                    link_txt.href = '';
                    
                    actu_infos.appendChild(link_txt);
                
                    actu_box.append(link_img);
                    actu_box.append(actu_infos);

                    actus_show.append(actu_box);

                    plus.style.display = 'none';

                    console.log(recount);
                });

            }
        });
    })
  .catch(error => {
    // Gérez les erreurs en cas d'échec de la requête
    return error;
  });
}



actus_query();