$(document).ready(function(){
    $(window).scroll(function(){
        // sticky navbar on scroll script
        if(this.scrollY > 20){
            $('.navbar').addClass("sticky");
        }else{
            $('.navbar').removeClass("sticky");
        }
    });
    // toggle menu/navbar script
    $('.menu-btn').click(function(){
        $('.navbar .menu').toggleClass("active");
        $('.menu-btn i').toggleClass("active");
    });
    var typed = new Typed(".typing", {
        strings: ["in acad studies", "in finding jobs", "in posting jobs"],
        typeSpeed: 100,
        backSpeed: 60,
        loop: true
    });
    // var typed = new Typed(".typing-2", {
    //     strings: ["Student", "Sophomore", "Developer", "Movie-junkie"],
    //     typeSpeed: 100,
    //     backSpeed: 60,
    //     loop: true
    // });
});

function search_company(){
    var company = document.getElementById('company').value.toLowerCase();
    var url = "https://www.geeksforgeeks.org/tag/"+ company;
    console.log(url);
    window.location = url;
    window.open(url);
}
function search_company_questions(){
    var company_q = document.getElementById('company_que').value;
    var url2 = "https://practice.geeksforgeeks.org/explore?page=1&company[]="+ company_q[0].toUpperCase()+company_q.substring(1).toLowerCase()+"&sortBy=submissions";
    console.log(url2);
    window.location = url2;
    window.open(url2);
}