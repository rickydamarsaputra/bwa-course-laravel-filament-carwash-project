const fileInput = document.getElementById("Proof");
const fileBtn = document.getElementById("Upload-btn");

fileInput.addEventListener("change", function () {
    const file = this.files[0];

    if(file){
    fileBtn.innerText = file.name;
    fileBtn.classList.add("font-semibold");
    fileBtn.classList.remove("text-[#909DBF]");
    }else{
    fileBtn.innerText = "Add an attachments";
    fileBtn.classList.remove("font-semibold");
    fileBtn.classList.add("text-[#909DBF]");
    }
});