function setCookie(cname, cvalue, exdays) {            // set cookies if click on the button "I understand" at opening
  var cname="localUser";
  var cvalue="Dear User";
  var d = new Date();
  d.setTime(d.getTime() + (exdays * 24 * 60 * 60 * 1000));      
  var expires = "expires="+d.toUTCString();           //expire date cookies 
  document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";         //save cookies
  const cookieBox = document.querySelector(".cookiesWrapper"),               //hide window cookies
  acceptBtn = cookieBox.querySelector(".cookiesButtons button");
  cookieBox.classList.remove("show");
  cookieBox.classList.add("hide");
}

function getCookie(cname) {                             //get full cookies 
  var name = cname + "=";
  var ca = document.cookie.split(';');
  for(var i = 0; i < ca.length; i++) {
    var c = ca[i];    
    while (c.charAt(0) == ' ') {
      c = c.substring(1);
    }
    if (c.indexOf(name) == 0) {
      return c.substring(name.length, c.length);
    }
  }
  return "";
}

function checkCookie() {                    //check if the client has the cookies set already at opening
  var user = getCookie("localUser");
  if (user != "") {
    console.log(document.cookie+"cookies already set");
    } else {
      const cookieBox = document.querySelector(".cookiesWrapper"),        //if cookies are not set already, display cookies window
      acceptBtn = cookieBox.querySelector(".cookiesButtons button");
      cookieBox.classList.remove("hide");
      cookieBox.classList.add("show");
    }
}
  
var indexis = {               //object for slideshow, 3 slideshows
  "slide1": 1,
  "slide2": 1,
  "slide3": 1
}

// Next/previous controls slide
function plusSlides(slideRef, n) {                
  showSlides(slideRef, indexis["slide"+slideRef] += n);
}

// Thumbnail image controls bottom slides
function currentSlide(slideRef, n) {
  showSlides(slideRef, indexis["slide"+slideRef] = n);
}
// Current slides shown
function showSlides(slideRef, n) {
  console.log(slideRef, n);
  var i = 0;
  var slides = document.getElementsByClassName("mySlides" + slideRef);  //example mySlides1
  var dots = document.getElementsByClassName("demo" + slideRef);        //example demo1
  if (n > slides.length) {indexis["slide"+slideRef] = 1}              //if the current slide is the last, restart from the first one
  if (n < 1) {indexis["slide"+slideRef] = slides.length}               //if the current slide is the firs, restart from the last one
  for (i = 0; i < slides.length; i++) {
  slides[i].classList.remove("show");                               //these lines will swap the slides top by the use of classes"show" and "hide"
  }                                                                 //"show" the current, hide the previous
  for (i = 0; i < dots.length; i++) { 
  dots[i].classList.remove("active");                               //same procedure for the bottom pictures by the use of the class"active" (add, remove)
  }
  slides[indexis["slide"+slideRef]-1].classList.add("show");
  dots[indexis["slide"+slideRef]-1].classList.add("active");
}

 var modal ;      //variables used for display elements on pages
 var span;

// When the user clicks the button, open the modal window         windowRef is the reference number of the window
function checkClick(windowRef) {          
  modal = document.getElementById("myModal"+ windowRef);
  modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal window
function xClick(windowRef) {                                 // windowRef is the reference number of the window
  span = document.getElementsByClassName("close")[0];
  modal = document.getElementById("myModal"+windowRef);
  modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal window, close it
window.onclick = function outsideClick(event) {
  if (event.target == modal) {
    modal.style.display = "none";
   }
}

var inputText = 0;           //variable that will count if all fields are filled
                                                               //check if email in correct format(word@word.word)
function ValidateEmail(inputText1)
{
var mailformat = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/;
   console.log(inputText1)
if(inputText1.value.match(mailformat))
  {
  inputText++;
  return true;
  }
  else
  {
  inputText= 0;
  alert("Invalid email address!");
  return false;
  }
}
                                           //check if name in correct format(2 words with space in the middle: Giorgio Basile)
function ValidateName(inputText2)
{
var nameformat = /^[a-zA-Z]+[ ]+[a-zA-Z]*$/;
if(inputText2.value.match(nameformat) && inputText2.value.length > 5 )
  {
  inputText++;
  return true;
  }
  else
  {
  inputText = 0;
  alert("Invalid name!");

  return false;
  }
}
                                       //check if number in correct format(minimum 7, maxiumum 14 numbers)
function ValidateNumber(inputText3)
{
  var numberFormat = /^[0-9]*$/;
  if(inputText3.value.match(numberFormat) && inputText3.value != "" && inputText3.value.length > 7 && inputText3.value.length < 14 )
    {
  inputText++;
  return true;
  }
  else
  {
  inputText= 0;
  alert("Invalid number!");
  return false;
  }
}
                                   //check if address in correct format (cannot be empty, better description while loading page)
function ValidateAddress(inputText4)
{
if(inputText4.value != "")
  {
   inputText++;
  return true;
  }
  else
  {
  inputText= 0;
  alert("Invalid address!");
  return false;
  }
}                            //check if text inside contact form is empty
function ValidateForm(inputText5)
{
if(inputText5.value != "")
  {
   inputText++;
  return true;
  }
  else
  {
  inputText= 0;
  alert("Text Empty");
  return false;
  }
}
                           //check if shopping form is fully filled (4 fields)
function ConfirmShop(windowRef){
  if(inputText === 4){
    inputText -= 4;
    checkClick(windowRef);
  }
}                            //check if support form is fully filled (5 fields)
function ConfirmForm(windowRef){
  if(inputText === 5){
 
    inputText -= 5;
    checkClick(windowRef);
  }
}
                          //will count quantities at the shopping page. 
function dataSecondPage(){
  var r = document.getElementById("rows").value;
  var e = 0;                      //this variable will store items with value > 0 that should be displayed
  for (var i = 0; i < r; i++) {
  var qnt = document.getElementById("qnt"+i).value;
    if(qnt < 0){
       qnt=0;
      }
    document.getElementById("upd"+i).innerHTML = qnt;
    if(qnt == 0){
      var tr = document.getElementById("tr"+i);
      tr.classList.add("hide");
         //  tr.parentNode.removeChild(tr);
    }
    if(qnt > 0){
      var tr = document.getElementById("tr"+i);
      tr.classList.remove("hide");
      e++;
      }
  }
  if(e === 0){                                  //if quantities = 0 stay in the current page
      var modal1 = document.getElementById("myModal1");
      modal1.style.display = "none";
      window.alert("all values equal to 0, please insert a correct quantity");
    }
}

var items = {               //object for shopping, 5 items with relative prices
  "item0": 7.5,
  "item1": 3,
  "item2": 3.5,
  "item3": 3,
  "item4": 6.5,
  "item5": 3
}
                    // total for shopping cart
function totalShopping(){
  var r = document.getElementById("rows").value;
  var tot = 0;      //this variable will store the total value
  for (var i = 0; i < r; i++) {
  	var qnt = document.getElementById("qnt"+i).value;
  	var mult = qnt*items["item"+i];
  	tot+=mult;
  }                                             //£ + total price
  document.getElementById("total").innerHTML = "&#163;" + tot;
}




