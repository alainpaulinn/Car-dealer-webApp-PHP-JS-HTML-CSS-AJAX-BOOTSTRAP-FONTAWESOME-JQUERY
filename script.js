
let main = document.querySelector(".main-content");


var categoryId = "";
function sectionClick(clickedbtn){
    categoryId = clickedbtn.id;
    console.log(categoryId);
    requesrData(categoryId);
    selectPage(clickedbtn);
    //main.innerHTML = '<div class="loader"><div class="loaderBar"></div></div>';
    main.innerHTML = '<div class="loader-gif"><img src="load.gif" alt="loading..."></div>';
}

function selectPage(clickedbtn){
    var sections = document.querySelectorAll('.select-section')
    for (var i = 0; i < sections.length; i++) {
        sections[i].classList.remove('select-section')
      }
    clickedbtn.classList.add('select-section');
}


////////////////////////////////////////////////
function requesrData(categoryId) {
  var dataString = 'category='+categoryId;
  $.ajax({
    type: "POST",
    url: "advanced/getcategory.php",
    data: dataString,
    cache: true,
    success: function(html){
        main.innerHTML = html;
    }  
  });

};
 