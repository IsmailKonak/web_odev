async function getNews(){
    await fetch('https://api.nytimes.com/svc/search/v2/articlesearch.json?q=artificial+intelligence&api-key=kvfAsh2JB6FIq3ZugnVuAknNCJcbdu0W')
    .then(d => d.json())
    .then(response => {
        const output = document.getElementById('news');
        const haberler = response.response.docs;
        // console.log(haberler);
        for(var i = 0; i < 6; i++){
            const baslik = haberler[i].headline.main;
            const ozet = haberler[i].abstract;
            const resim = haberler[i].multimedia.find(media => media.type === 'image');
            const resim_url = resim ? 'https://www.nytimes.com/' + resim.url : '';
            const link = haberler[i].web_url;            
            const tarih = haberler[i].pub_date;
            console.log(baslik);
            console.log(ozet);
            console.log(resim_url);
            console.log(tarih);
            try{
                output.innerHTML += `
                <div class="card mb-3 rounded card_hobilerim">
                    <a href="${link}" class="card_hobilerim" target="_blank" >
                    <div class="row g-0">
              <div class="col-md-4">
                <img src="${resim_url}" class="img-fluid news_image_border rounded">
              </div>
              <div class="col-md-8">
                <div class="card-body">
                  <h5 class="card-title"><b>${baslik}</b></h5>
                  <p class="card-text">${ozet}</p>
                  <p class="card-text"><small class="text-body-secondary">${tarih}</small></p>
                </div>
              </div>
            </div>
            </a>
                </div>              `
            }
            catch(err){
                console.log(err);
            }

        }
    })
}

getNews();