const elements={
    top:document.querySelector('#hover_top'),
    bottom:document.querySelector('#hover-bottom'),
    background:document.querySelector('.inner-block'),
    location:document.querySelector('#location'),
    upButton:document.querySelector('#up'),
    downButton:document.querySelector('#down'),
}
let position={
    center:'left 0 center ',top:'top left 0px',bottom:'bottom right 0'

};
let activeElements =
'center';
const setBackgroundPosition=(pos)=>elements.background.style.backgroundPosition=pos;
const setLocationClass=(className)=>elements.location.className=className;
const updateActiveElements=(newElements)=>{
    activeElements=newElements;
    setBackgroundPosition(position[newElements]);
    setLocationClass(newElements);
}
const setActiveElementReset=()=>updateActiveElements('center');
const setActiveElementUp=()=>activeElements!=='top'&& updateActiveElements('top');
const setActiveElementDown=()=>activeElements!=='bottom'&& updateActiveElements('bottom');

elements.top.addEventListener("mouseover",()=>updateActiveElements('top'));
elements.top.addEventListener("mouseout",setActiveElementReset);
elements.bottom.addEventListener("mouseover",()=>updateActiveElements('bottom'));
elements.bottom.addEventListener("mouseout",setActiveElementReset);
elements.upButton.addEventListener("click",setActiveElementUp);  
elements.downButton.addEventListener("click",setActiveElementDown);  