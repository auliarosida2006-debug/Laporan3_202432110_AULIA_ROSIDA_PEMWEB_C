// Aulia Rosida - 202432110

window.onload = function(){

document.getElementById("welcome").innerHTML =
"Selamat datang! Silakan masukkan nilai Tugas, UTS, dan UAS untuk menghitung nilai akhir semester.";


};

function hitungNilaiAkhir(tugas, uts, uas){

return (
    (tugas * 0.30) +
    (uts * 0.30) +
    (uas * 0.40)
);


}

function tentukanGrade(nilai){

if(nilai >= 80){
    return "A";
}
else if(nilai >= 70){
    return "B";
}
else if(nilai >= 60){
    return "C";
}
else if(nilai >= 50){
    return "D";
}
else{
    return "E";
}

}

function validasiInput(nilai, nama){

if(nilai === ""){
    return nama + " wajib diisi";
}

if(isNaN(nilai)){
    return nama + " harus berupa angka";
}

if(nilai < 0 || nilai > 100){
    return nama + " harus berada pada rentang 0 - 100";
}

return null;

}

document
.getElementById("btnHitung")
.addEventListener("click", function(){

let tugas =
document.getElementById("tugas").value;

let uts =
document.getElementById("uts").value;

let uas =
document.getElementById("uas").value;

console.log("Nilai Tugas :", tugas);
console.log("Nilai UTS :", uts);
console.log("Nilai UAS :", uas);

let error =

    validasiInput(tugas, "Nilai Tugas") ||
    validasiInput(uts, "Nilai UTS") ||
    validasiInput(uas, "Nilai UAS");

if(error){

    document.getElementById("error").style.display =
    "block";

    document.getElementById("error").innerHTML =
    error;

    document.getElementById("hasil").style.display =
    "none";

    return;

}

document.getElementById("error").style.display =
"none";

tugas = Number(tugas);
uts = Number(uts);
uas = Number(uas);

let nilaiAkhir =
hitungNilaiAkhir(tugas, uts, uas);

let grade =
tentukanGrade(nilaiAkhir);

console.log("Nilai Akhir :", nilaiAkhir);
console.log("Grade :", grade);

document.getElementById("hasil").style.display =
"block";

document.getElementById("nilaiAkhir").innerHTML =
nilaiAkhir.toFixed(2);

let gradeElement =
document.getElementById("grade");

gradeElement.innerHTML = grade;

gradeElement.className =
"grade-" + grade;

});
