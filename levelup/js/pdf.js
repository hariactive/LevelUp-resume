window.onload = function(){
    document.getElementById("download").addEventListener("click",()=>{
        const resume = this.document.getElementById("downloadtempresume");
        var opt = {
            filename:     'myResume.pdf',
            html2canvas:  { scale: 2 },
            jsPDF:        { unit: 'in', format: 'letter', orientation: 'portrait' }
          };
        html2pdf().from(resume).set(opt).save();
    })
}