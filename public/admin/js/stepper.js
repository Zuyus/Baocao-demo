 //horizontal stepper
 //step 1
 $("#step1-next").on("click", function(){
    document.getElementById("first").style.display = "none";
    document.getElementById("second").style.display = "block";
    document.getElementById("third").style.display = "none";
    document.getElementById("four").style.display = "none";
    document.getElementById("active1").classList.add("active");
    document.getElementById("active1").classList.add("active-bar");
    document.getElementById("active2").classList.add("active");
});

// step 2
$("#step2-prev").on("click", function(){
    document.getElementById("first").style.display = "block";
    document.getElementById("second").style.display = "none";
    document.getElementById("third").style.display = "none";
    document.getElementById("four").style.display = "none";
    document.getElementById("active1").classList.add("active");
    document.getElementById("active1").classList.remove("active-bar");
    document.getElementById("active2").classList.remove("active");
});
$("#step2-next").on("click", function(){
    document.getElementById("first").style.display = "none";
    document.getElementById("second").style.display = "none";
    document.getElementById("third").style.display = "block";
    document.getElementById("four").style.display = "none";
    document.getElementById("active1").classList.add("active");
    document.getElementById("active1").classList.add("active-bar");
    document.getElementById("active2").classList.add("active");
    document.getElementById("active2").classList.add("active-bar");
    document.getElementById("active3").classList.add("active");
});

// step 3
$("#step3-prev").on("click", function(){
    document.getElementById("first").style.display = "none";
    document.getElementById("second").style.display = "block";
    document.getElementById("third").style.display = "none";
    document.getElementById("four").style.display = "none";
    document.getElementById("active1").classList.add("active");
    document.getElementById("active1").classList.add("active-bar");
    document.getElementById("active2").classList.add("active");
    document.getElementById("active2").classList.remove("active-bar");
    document.getElementById("active3").classList.remove("active");
});
$("#step3-next").on("click", function(){
    document.getElementById("first").style.display = "none";
    document.getElementById("second").style.display = "none";
    document.getElementById("third").style.display = "none";
    document.getElementById("four").style.display = "block";
    document.getElementById("active1").classList.add("active");
    document.getElementById("active1").classList.add("active-bar");
    document.getElementById("active2").classList.add("active");
    document.getElementById("active2").classList.add("active-bar");
    document.getElementById("active3").classList.add("active");
    document.getElementById("active3").classList.add("active-bar");
    document.getElementById("active4").classList.add("active");
});

// step 4
$("#step4-prev").on("click", function(){
    document.getElementById("first").style.display = "none";
    document.getElementById("second").style.display = "none";
    document.getElementById("third").style.display = "block";
    document.getElementById("four").style.display = "none";
    document.getElementById("active1").classList.add("active");
    document.getElementById("active1").classList.add("active-bar");
    document.getElementById("active2").classList.add("active");
    document.getElementById("active2").classList.add("active-bar");
    document.getElementById("active3").classList.add("active");
    document.getElementById("active3").classList.remove("active-bar");
    document.getElementById("active4").classList.remove("active");
});

//vertical stepper
//step 1
$("#step1v-next").on("click", function(){
    document.getElementById("firstv").style.display = "none";
    document.getElementById("secondv").style.display = "block";
    document.getElementById("thirdv").style.display = "none";
    document.getElementById("fourv").style.display = "none";
    document.getElementById("active1v").classList.add("active");
    document.getElementById("active1v").classList.add("active-bar");
    document.getElementById("active2v").classList.add("active");
});

// step 2
$("#step2v-prev").on("click", function(){
    document.getElementById("firstv").style.display = "block";
    document.getElementById("secondv").style.display = "none";
    document.getElementById("thirdv").style.display = "none";
    document.getElementById("fourv").style.display = "none";
    document.getElementById("active1v").classList.add("active");
    document.getElementById("active1v").classList.remove("active-bar");
    document.getElementById("active2v").classList.remove("active");
});
$("#step2v-next").on("click", function(){
    document.getElementById("firstv").style.display = "none";
    document.getElementById("secondv").style.display = "none";
    document.getElementById("thirdv").style.display = "block";
    document.getElementById("fourv").style.display = "none";
    document.getElementById("active1v").classList.add("active");
    document.getElementById("active1v").classList.add("active-bar");
    document.getElementById("active2v").classList.add("active");
    document.getElementById("active2v").classList.add("active-bar");
    document.getElementById("active3v").classList.add("active");
});

// step 3
$("#step3v-prev").on("click", function(){
    document.getElementById("firstv").style.display = "none";
    document.getElementById("secondv").style.display = "block";
    document.getElementById("thirdv").style.display = "none";
    document.getElementById("fourv").style.display = "none";
    document.getElementById("active1v").classList.add("active");
    document.getElementById("active1v").classList.add("active-bar");
    document.getElementById("active2v").classList.add("active");
    document.getElementById("active2v").classList.remove("active-bar");
    document.getElementById("active3v").classList.remove("active");
});
$("#step3v-next").on("click", function(){
    document.getElementById("firstv").style.display = "none";
    document.getElementById("secondv").style.display = "none";
    document.getElementById("thirdv").style.display = "none";
    document.getElementById("fourv").style.display = "block";
    document.getElementById("active1v").classList.add("active");
    document.getElementById("active1v").classList.add("active-bar");
    document.getElementById("active2v").classList.add("active");
    document.getElementById("active2v").classList.add("active-bar");
    document.getElementById("active3v").classList.add("active");
    document.getElementById("active3v").classList.add("active-bar");
    document.getElementById("active4v").classList.add("active");
});

// step 4
$("#step4v-prev").on("click", function(){
    document.getElementById("firstv").style.display = "none";
    document.getElementById("secondv").style.display = "none";
    document.getElementById("thirdv").style.display = "block";
    document.getElementById("fourv").style.display = "none";
    document.getElementById("active1v").classList.add("active");
    document.getElementById("active1v").classList.add("active-bar");
    document.getElementById("active2v").classList.add("active");
    document.getElementById("active2v").classList.add("active-bar");
    document.getElementById("active3v").classList.add("active");
    document.getElementById("active3v").classList.remove("active-bar");
    document.getElementById("active4v").classList.remove("active");
});