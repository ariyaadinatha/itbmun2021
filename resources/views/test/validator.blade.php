<form action="#" method="post">
  <fieldset>

    <legend><strong>Add your comment</strong></legend>

    <p>
      <label for="author">Name <abbr title="Required">*</abbr></label>
      <input 
        aria-required="true"
        id="author"
        name="author"
        pattern="^([- \w\d\u00c0-\u024f]+)$"
        required="required"
        size="20"
        spellcheck="false"
        title="Your name (no special characters, diacritics are okay)"
        type="text"
        value="">
    </p>

    <p>
      <label for="email">Email <abbr title="Required">*</abbr></label>
      <input 
        aria-required="true"
        id="email"
        name="email"
        pattern="^(([-\w\d]+)(\.[-\w\d]+)*@([-\w\d]+)(\.[-\w\d]+)*(\.([a-zA-Z]{2,5}|[\d]{1,3})){1,2})$" 
        required="required"
        size="30"
        spellcheck="false"
        title="Your email address"
        type="email"
        value="">
    </p>

    <p>
      <label for="website">Website</label>
      <input
        id="website"
        name="website"
        pattern="^(http[s]?:\/\/)?([-\w\d]+)(\.[-\w\d]+)*(\.([a-zA-Z]{2,5}|[\d]{1,3})){1,2}(\/([-~%\.\(\)\w\d]*\/*)*(#[-\w\d]+)?)?$"
        size="30"
        spellcheck="false"
        title="Your website address"
        type="url"
        value="">
    </p>

    <p>
      <label for="text">Comment <abbr title="Required">*</abbr></label> 
      <textarea
        aria-required="true"
        cols="40"
        id="text"
        name="text"
        required="required"
        rows="10"
        spellcheck="true"
        title="Your comment"></textarea>
    </p>

  </fieldset>
  <fieldset>

    <button name="preview" type="submit">Preview</button>
    <button name="save" type="submit">Submit Comment</button>

  </fieldset>
</form>

<style>
input[aria-invalid="true"], textarea[aria-invalid="true"] {
  border: 1px solid #f00;
  box-shadow: 0 0 4px 0 #f00;
}
</style>

<script>
function addEvent(node, type, callback) {
  if (node.addEventListener) {
    node.addEventListener(type, function(e) {
      callback(e, e.target);
    }, false);
  } else if (node.attachEvent) {
    node.attachEvent('on' + type, function(e) {
      callback(e, e.srcElement);
    });
  }
}

function shouldBeValidated(field) {
  return (
    !(field.getAttribute("readonly") || field.readonly) &&
    !(field.getAttribute("disabled") || field.disabled) &&
    (field.getAttribute("pattern") || field.getAttribute("required"))
  );
}

function instantValidation(field) {
  if (shouldBeValidated(field)) {
    var invalid =
      (field.getAttribute("required") && !field.value) ||
      (field.getAttribute("pattern") &&
        field.value &&
        !new RegExp(field.getAttribute("pattern")).test(field.value));
    if (!invalid && field.getAttribute("aria-invalid")) {
      field.removeAttribute("aria-invalid");
    } else if (invalid && !field.getAttribute("aria-invalid")) {
      field.setAttribute("aria-invalid", "true");
    }
  }
}

addEvent(document, "change", function(e, target) {
  instantValidation(target);
});

var fields = [
  document.getElementsByTagName("input"),
  document.getElementsByTagName("textarea")
];
for (var a = fields.length, i = 0; i < a; i++) {
  for (var b = fields[i].length, j = 0; j < b; j++) {
    addEvent(fields[i][j], "change", function(e, target) {
      instantValidation(target);
    });
  }
}

</script>


<form name="fruitForm" method="post" action="other-post.php">
<label><input type="radio" name="fruit" value="apple" onClick="regularFruit()">apple</input></label>
<label><input type="radio" name="fruit" value="orange" onClick="regularFruit()">orange</input></label>
<label><input type="radio" name="fruit" value="lemon" onClick="regularFruit()">lemon</input></label>
<label onClick="otherFruit()">
    <input type="radio" name="fruit" id="other_fruit" value="other" >or other fruit:</input>
    <input type ="text" name="other" id="other_text"/></label>
    <input type="submit" value="Submit">
</form>

<script>
function otherFruit(){
a = document.getElementById('other_fruit');
a.checked=true;
}
function regularFruit(){
a = document.getElementById('other_text');
a.value="";
}
</script>