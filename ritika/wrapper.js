const carousel = document.querySelector(".carousel");
firstImg = carousel.querySelectorAll("img")[0];
arrowIcons = document.querySelectorAll(".wrapper i");

let isDragStart = false,prePageX, prevScrollleft,positonDiff;


let firstImgWidth = firstImg.clientWidth + 14; // getting first img width & adding 14 mat=rgin value
let scrollWidth = carousel.scrollWidth - carousel.clientWidth;//getting max scrolable width 


const showHideIcons = () =>{
    arrowIcons[0].style.display = carousel.scrollLeft == 0?"none":"block";
    arrowIcons[1].style.display = carousel.scrollLeft == scrollWidth?"none":"block";
}


arrowIcons.forEach( icon => {
    icon.addEventListener("click", () =>{
        let firstImgWidth = firstImg.clientWidth + 14;// getting first img width & adding 14 margin
        //it id for the left right slides buttonfor image....
     carousel.scrollLeft += icon.id == "left"? -firstImgWidth : firstImgWidth
     setTimeout(() => showHideIcons(),60);
    })
});

