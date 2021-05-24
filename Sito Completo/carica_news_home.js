function fetchNews(json)
{
    console.log(json);
    const news= document.querySelector(".news");
    for (let i=json.length-1; i>json.length-3;i--)
    {
        
        const div=document.createElement("div");
        const titolo=document.createElement("h1");
        titolo.textContent=json[i].titolo;
        const img=document.createElement("img");
        img.src=json[i].url;
        img.id="myBtn";
        img.dataset.idImg=json[i].id;
        const descrizione=document.createElement("p");
        descrizione.textContent=json[i].descrizione;
        news.appendChild(div);
        div.appendChild(titolo);
        div.appendChild(img);
        div.appendChild(descrizione);
    }
}
function fetchResponse(response){
    if (!response.ok) {return null};
    return response.json();
}

fetch("fetch_news.php").then(fetchResponse).then(fetchNews);
