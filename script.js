//hyyyy!!
const btn = document.querySelector(".nav-toggle");
const links = document.querySelector(".toogle__items");

if (links.classList.contains("active")) {
  links.classList.remove("active");
}

btn.addEventListener("click", () => {
  links.classList.toggle("active");
  if (btn.classList.contains("active")) {
    btn.classList.remove("active");
  } else {
    btn.classList.toggle("active");
  }
});

function register_user() {
    var name = document.getElementById("name").value;
    var acc_type = document.getElementById("acc_type").value;
    var email = document.getElementById("email").value;
    var password = document.getElementById("Password").value;
    var cnfrmpassword = document.getElementById("cnfrmPassword").value;
    var usrname = document.getElementById("username").value;
  

  if (email==="" | password === "" || cnfrmpassword === "" || acc_type ==="" ||name==="" ||usrname==="" ) {
    alert("field cant be empty);"
  }
   else 
   {
      var userid = userId;
      var pass = password;
      var cpass = cnfrmpassword;
      var email = email;
      var username = usrname;
      var 
  }

  
   else (checkname(Firstname) === false) {
    document.getElementById("fnameValid").innerHTML = "Alphabets only!";
  } 
  else if {
    var fName = Firstname;
  }
  if (Lastname === "") {
    document.getElementById("lnameValid").innerHTML = "*required!";
  } else if (checkname(Lastname) === false) {
    document.getElementById("lnameValid").innerHTML = "Alphabets only!";
  } else {
    var lName = Lastname;
  }
   else if (ValidateEmail(email) === false) {
    document.getElementById("mailValid").innerHTML = "*Invalid email!";
  } else {
    var mail = email;
  }

  if (
    userid !== "" &&
    userid !== undefined &&
    pass !== "" &&
    pass !== undefined &&
    cpass !== "" &&
    cpass !== undefined &&
    fName !== "" &&
    fName !== undefined &&
    lName !== "" &&
    (lName !== undefined) & (mail !== "") &&
    mail !== undefined
  ) {
    if (pass === cpass) {
      document.getElementById("data").style.color = "whitesmoke";
      document.getElementById("data").innerHTML =
        "<h2>" +
        "User id - " +
        `${userid}` +
        "</h2>" +
        "<h2>" +
        "First Name - " +
        `${fName}` +
        "</h2>" +
        "<h2>" +
        "Last Name - " +
        `${lName}` +
        "</h2>" +
        "<h2>" +
        "Email - " +
        `${mail}` +
        "</h2>" +
        "<h2>" +
        "Password - " +
        `${pass}` +
        "</h2>" +
        "<h2>" +
        "Confirm Password - " +
        `${cpass}` +
        "</h2>" +
        "<h2>";
    } else {
      document.getElementById("data").innerHTML =
        "<h1>Password does not matches</h1>";
      document.getElementById("data").style.color = "red";
    }
  } else {
    document.getElementById("data").innerHTML = "<h1>ERROR</h1>";
    document.getElementById("data").style.color = "red";
  }
  document.getElementById("display__card").style.display = "flex";
}

function checkname(inputtxt) {
  var letters = /^[A-Za-z]+$/;
  if (inputtxt.match(letters)) {
    return true;
  } else {
    return false;
  }
}

function ValidateEmail(mail) {
  var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
  if (mail.match(mailformat)) {
    return true;
  }
  return false;
}

function numberValidate(number) {
  if (isNaN(number)) {
    return false;
  } else {
    return true;
  }
}
