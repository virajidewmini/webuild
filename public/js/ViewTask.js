window.onload=function(){

    const progressBar = document.querySelectorAll(".progress-done")
    progressBar.forEach((progress)=>{
        let value= progress.getAttribute('data-value')
        progress.style.width=`${value}%`
    })
}