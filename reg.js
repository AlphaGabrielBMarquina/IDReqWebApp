const stimageup = document.querySelector("#stimageup");
stimageup.addEventListener("change", function () {
  const reader = new FileReader();
  reader.addEventListener("load", () => {
    const uploaded_image = reader.result;
    document.querySelector(
      "#display_image1"
    ).style.backgroundImage = `url(${uploaded_image})`;
  });
  reader.readAsDataURL(this.files[0]);
});
const fimageup = document.querySelector("#fimageup");
fimageup.addEventListener("change", function () {
  const reader = new FileReader();
  reader.addEventListener("load", () => {
    const uploaded_image = reader.result;
    document.querySelector(
      "#display_image2"
    ).style.backgroundImage = `url(${uploaded_image})`;
  });
  reader.readAsDataURL(this.files[0]);
});
function opt(x) {
  if (x == 0) {
    document.getElementById("stcard").style.display = "block";
    document.getElementById("fcard").style.display = "none";
    $("#fname").removeAttr("disabled");
    $("#fname").focus();
    $("#mname").removeAttr("disabled");

    $("#sname").removeAttr("disabled");

    $("#course").removeAttr("disabled");

    $("#deytrq").removeAttr("disabled");

    $("#stimageup").removeAttr("disabled");

    $("#contactper").removeAttr("disabled");

    $("#contactno").removeAttr("disabled");

    $("#address").removeAttr("disabled");

    $("#studentno").removeAttr("disabled");

    $("#signature").removeAttr("disabled");
    $("#subbut").removeAttr("disabled");
  } else {
    document.getElementById("fcard").style.display = "block";
    document.getElementById("stcard").style.display = "none";
    $("#ffname").removeAttr("disabled");
    $("#ffname").focus();
    $("#faculfmname").removeAttr("disabled");

    $("#fsname").removeAttr("disabled");

    $("#femployeeno").removeAttr("disabled");

    $("#fdrequest").removeAttr("disabled");

    $("#fimageup").removeAttr("disabled");

    $("#fgsis").removeAttr("disabled");

    $("#fgsispol").removeAttr("disabled");

    $("#ftin").removeAttr("disabled");

    $("#flovelife").removeAttr("disabled");

    $("#fphealth").removeAttr("disabled");

    $("#fothers").removeAttr("disabled");

    $("#fcontactper").removeAttr("disabled");

    $("#fcontactno").removeAttr("disabled");

    $("#faddress").removeAttr("disabled");

    $("#fsignature").removeAttr("disabled");
    $("#subbut1").removeAttr("disabled");
    return;
  }
}
function sub() {
  var val = document.getElementsById("titser");
  if (val[1].checked == true) {
    var ffname = document.getElementById("ffname");
    var fsname = document.getElementById("fsname");
    var femployeeno = document.getElementById("femployeeno");
    var fdrequest = document.getElementById("fdrequest");
    var fgsis = document.getElementById("fgsis");
    var fgsispol = document.getElementById("fgsispol");
    var ftin = document.getElementById("ftin");
    var flovelife = document.getElementById("flovelife");
    var fphealth = document.getElementById("fphealth");
    var fcontactper = document.getElementById("fcontactper");
    var fcontactno = document.getElementById("fcontactno");
    var faddress = document.getElementById("faddress");
    var fsignature = document.getElementById("fsignature");
    var fimageup = document.getElementById("fimageup");
    if (
      ffname.value == "" ||
      fsname.value == "" ||
      femployeeno.value == "" ||
      fdrequest.value == "" ||
      fgsis.value == "" ||
      fgsispol.value == "" ||
      ftin.value == "" ||
      flovelife.value == "" ||
      fphealth.value == "" ||
      fcontactper.value == "" ||
      fcontactno.value == "" ||
      faddress.value == "" ||
      fsignature.value == "" ||
      fimageup.value == ""
    ) {
      alert("Missing Required Field");
    } else if (confirm("Are you sure?") == true) {
      $("#ffname").attr("disabled", "disabled");
      $("#faculfmname").attr("disabled", "disabled");
      $("#fsname").attr("disabled", "disabled");
      $("#femployeeno").attr("disabled", "disabled");
      $("#fdrequest").attr("disabled", "disabled");
      $("#fimageup").attr("disabled", "disabled");
      $("#fgsis").attr("disabled", "disabled");
      $("#fgsispol").attr("disabled", "disabled");
      $("#ftin").attr("disabled", "disabled");
      $("#flovelife").attr("disabled", "disabled");
      $("#fphealth").attr("disabled", "disabled");
      $("#fothers").attr("disabled", "disabled");
      $("#fcontactper").attr("disabled", "disabled");
      $("#fcontactno").attr("disabled", "disabled");
      $("#faddress").attr("disabled", "disabled");
      $("#fsignature").attr("disabled", "disabled");
      $("#stodent").attr("disabled", "disabled");
      $("#titser").attr("disabled", "disabled");
      $("#subbut").attr("disabled", "disabled");
      alert("Request Done!");
      return true;
    } else {
      return false;
    }
  } else {
    var fname = document.getElementById("fname");
    var sname = document.getElementById("sname");
    var course = document.getElementById("course");
    var deytrq = document.getElementById("deytrq");
    var studentno = document.getElementById("studentno");
    var contactper = document.getElementById("contactper");
    var contactno = document.getElementById("contactno");
    var address = document.getElementById("address");
    var signature = document.getElementById("signature");
    var stimageup = document.getElementById("stimageup");
    if (
      fname.value == "" ||
      sname.value == "" ||
      course.value == "" ||
      deytrq.value == "" ||
      (studentno.value == "") | (contactper.value == "") ||
      contactno.value == "" ||
      address.value == "" ||
      signature.value == "" ||
      stimageup.value == ""
    ) {
      alert("Missing Required Field");
    } else if (confirm("Are you sure?") == true) {
      $("#fname").attr("disabled", "disabled");
      $("#mname").attr("disabled", "disabled");
      $("#sname").attr("disabled", "disabled");
      $("#course").attr("disabled", "disabled");
      $("#deytrq").attr("disabled", "disabled");
      $("#stimageup").attr("disabled", "disabled");
      $("#contactper").attr("disabled", "disabled");
      $("#contactno").attr("disabled", "disabled");
      $("#address").attr("disabled", "disabled");
      $("#studentno").attr("disabled", "disabled");
      $("#signature").attr("disabled", "disabled");
      $("#stodent").attr("disabled", "disabled");
      $("#titser").attr("disabled", "disabled");
      $("#subbut").attr("disabled", "disabled");
      alert("Request Done!");
      return true;
    } else {
      return false;
    }
  }
}
