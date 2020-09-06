<body>
    <div class="form-page is-active" id='form-landing'>
        <h2>Landing Form</h2>
        <button onclick="showPage('#form-individual-page-1')">Individual Delegate</button>
        <button onclick="showPage('#form-delegation-page-1')">Delegations</button>
    </div>

    <form action="/test/individual-delegate" method="post">
        @csrf

        <div class="form-page" id='form-individual-page-1'>
            <h2>Personal Identity</h2>  
        
                <label for="fullName">Full Name</label>
                <input type="text" class='form-input' name="fullName" id="fullName" /><br>

                <label for="institution">Institution</label>
                <input type="text" class='form-input' name="institution" id="institution" /><br>

                <label for="nationality">Nationality</label>
                <input type="text" class='form-input' name="nationality" id="nationality" /><br>

                <label for="idNumber">ID Number</label>
                <input type="text" class='form-input' name="idNumber" id="idNumber" /><br>

                <label for="gender">Gender</label>
                <input type="text" class='form-input' name="gender" id="gender" /><br>

                <label for="medicalConditions">Medical Conditions</label>
                <input type="text" class='form-input' name="medicalConditions" id="medicalConditions" /><br>

                <label for="foodRestrictions">Food Restrictions</label>
                <input type="text" class='form-input' name="foodRestrictions" id="foodRestrictions" /><br>

                <label for="accommodation">accommodation</label>
                <input type="text" class='form-input' name="accommodation" id="accommodation" /><br>

            <a class="button" onclick='backtoMain()'>Back</a>
            <a class="button" onclick="showPage('#form-individual-page-2')">next</a>
        </div>

        <div class="form-page" id='form-individual-page-2'>
            <h2>Contact</h2>

                <label for="contactNumber">Contact Number</label>
                <input type="text" class='form-input' name="contactNumber" id="contactNumber" /><br>

                <label for="lineId">Line ID</label>
                <input type="text" class='form-input' name="lineId" id="lineId" /><br>

                <label for="email">Email</label>
                <input type="email" class='form-input' name="email" id="email" /><br>

            <a class="button" onclick='back()'>Back</a>
            <a class="button" onclick="showPage('#form-individual-page-3')">next</a>
        </div>

        <div class="form-page" id='form-individual-page-3'>
            <h2>Individual Delegate Page 3</h2>
                <label for="munExperiences">MUN Experiences</label>
                <input type="text" class='form-input' name="munExperiences" id="munExperiences" /><br>

                <label for="firstCouncilPreference">First Council Preference</label>
                <input type="text" class='form-input' name="firstCouncilPreference" id="firstCouncilPreference" /><br>

                <label for="firstCouncilCountryPreference">First Council Country Preferences</label>
                <input type="text" class='form-input' name="firstCouncilCountryPreference" id="firstCouncilCountryPreference" /><br>

                <label for="firstCouncilReason">Reason</label>
                <input type="text" class='form-input' name="firstCouncilReason" id="firstCouncilReason" /><br>

                <label for="secondCouncilPreference">Second Council Preference</label>
                <input type="text" class='form-input' name="secondCouncilPreference" id="secondCouncilPreference" /><br>

                <label for="secondCouncilCountryPreference">Second Council Country Preferences</label>
                <input type="text" class='form-input' name="secondCouncilCountryPreference" id="secondCouncilCountryPreference" /><br>

                <label for="secondCouncilReason">Reason</label>
                <input type="text" class='form-input' name="secondCouncilReason" id="secondCouncilReason" /><br>
                
                <label for="thirdCouncilPreference">Third Council Preference</label>
                <input type="text" class='form-input' name="thirdCouncilPreference" id="thirdCouncilPreference" /><br>

                <label for="thirdCouncilCountryPreference">Third Council Country Preferences</label>
                <input type="text" class='form-input' name="thirdCouncilCountryPreference" id="thirdCouncilCountryPreference" /><br>

                <label for="thirdCouncilReason">Reason</label>
                <input type="text" class='form-input' name="thirdCouncilReason" id="thirdCouncilReason" /><br>
                
            <a class="button" onclick='back()'>Back</a>
            <a class="button" onclick='summary("#form-individual-page-4")'>next</a>
        </div>

        <div class="form-page" id='form-individual-page-4'>
            <h2>Summary Data</h2>
                <div class="summary">
                <!-- This empty field shall be added by individual delegate data tuple -->
                </div>
            <a class="button" onclick='back()'>Back</a>
            <input type="submit" value="Send Data" />
        </div>

    </form>

    <form action="/test/delegations" method="post">
        @csrf
        <div class="form-page" id='form-delegation-page-1'>
            <h2>Delegation Form</h2>

            <label for="headDelegate">Head Delegate Name</label>
            <input type="text" class='form-input-delegation' name="headDelegate" id="headDelegate" /><br>

            <label for="institution">Institution</label>
            <input type="text" class='form-input-delegation' name="institution" id="institution" /><br>

            <label for="contactNumber">Contact Number</label>
            <input type="text" class='form-input-delegation' name="contactNumber" id="contactNumber" /><br>

            <label for="lineId">Head Delegate Line ID</label>
            <input type="text" class='form-input-delegation' name="lineId" id="lineId" /><br>

            <a class="button" onclick='backtoMain()'>Back</a>
            <a class="button" onclick="showPage('#form-delegation-page-2')">next</a>
        </div>
        <div class="form-page" id='form-delegation-page-2'>
            <h2>Delegations info</h2>
            <a class="button" onclick='setDelegates(5)'>Five Delegates</a>
            <a class="button" onclick='setDelegates(8)'>Eight Delegates</a><br>

            <a class="button" onclick='back()'>Back</a>
        </div>
        <div class="form-page" id='form-delegation-page-3'>
            <!-- <h2>Delegate <span id='delegation-delegate-counter'></span> Form</h2> -->
            <div class="form-tab-wrapper"></div>
            <a class="button" onclick="backToSetDelegates()">Back</a>
            <a class="button" onclick="showPage('#form-delegation-page-4')">Next</a>
        </div>

        <div class="form-page" id="form-delegation-page-4">
            <div class="form-summary-wrapper"></div>
            <a class="button" onclick='back()'>Back</a>
            <input type="submit" value="Send Data" />
        </div>
    </form>
</body>

<style>
    .form-page, .form-tab{
        display: none;
    }

    .form-page.is-active, .form-tab.is-active{
        display: block;
    }

    a.button {
        cursor: pointer;
        color: red;
    }

    a.button:hover{
        color: coral;
    }
</style>

<script>
var rollbackPage = ["#form-landing"];
var data = {};
const inputs = document.querySelectorAll("input.form-input");
var inputsDelegation = document.querySelectorAll("input.form-input-delegation");
const pages = document.querySelectorAll(".form-page");

const tabWrapper = document.querySelector(".form-tab-wrapper");
function setDelegates(x){
    showPage("#form-delegation-page-3");
    for(i = 1; i <= x; i++){
        tabWrapper.innerHTML += "" + 
            "<div class='form-tab' id='form-delegation-tab-" + i + "'>" +

                "<label for='fullName" + i + "'>Full Name</label>" +
                "<input type='text' class='form-input-delegation' name='fullName" + i + "' id='fullName" + i + "' /><br>" +

                "<label for='email" + i + "'>Email</label>" +
                "<input type='text' class='form-input-delegation' name='email" + i + "' id='email" + i + "' /><br>" +

                "<label for='nationality" + i + "'>Nationality</label>" +
                "<input type='text' class='form-input-delegation' name='nationality" + i + "' id='nationality" + i + "' /><br>" +

                "<label for='idNumber" + i + "'>ID Number</label>" +
                "<input type='text' class='form-input-delegation' name='idNumber" + i + "' id='idNumber" + i + "' /><br>" +

                "<label for='gender" + i + "'>Gender</label>" +
                "<input type='text' class='form-input-delegation' name='gender" + i + "' id='gender" + i + "' /><br>" +

                "<label for='medicalConditions" + i + "'>Medical Conditions</label>" +
                "<input type='text' class='form-input-delegation' name='medicalConditions" + i + "' id='medicalConditions" + i + "' /><br>" +

                "<label for='munExperiences" + i + "'>MUN Experiences</label>" +
                "<input type='text' class='form-input-delegation' name='munExperiences" + i + "' id='munExperiences" + i + "' /><br>" +

                "<label for='firstCouncilPreference" + i + "'>First Council Preference</label>" +
                "<input type='text' class='form-input-delegation' name='firstCouncilPreference" + i + "' id='firstCouncilPreference" + i + "' /><br>" +

                "<label for='firstCouncilCountryPreference" + i + "'>First Council Country Preferences</label>" +
                "<input type='text' class='form-input-delegation' name='firstCouncilCountryPreference" + i + "' id='firstCouncilCountryPreference" + i + "' /><br>" +

                "<label for='firstCouncilReason" + i + "'>Reason</label>" +
                "<input type='text' class='form-input-delegation' name='firstCouncilReason" + i + "' id='firstCouncilReason" + i + "' /><br>" +

                "<label for='secondCouncilPreference" + i + "'>Second Council Preference</label>" +
                "<input type='text' class='form-input-delegation' name='secondCouncilPreference" + i + "' id='secondCouncilPreference" + i + "' /><br>" +

                "<label for='secondCouncilCountryPreference" + i + "'>Second Council Country Preferences</label>" +
                "<input type='text' class='form-input-delegation' name='secondCouncilCountryPreference" + i + "' id='secondCouncilCountryPreference" + i + "' /><br>" +

                "<label for='secondCouncilReason" + i + "'>Reason</label>" +
                "<input type='text' class='form-input-delegation' name='secondCouncilReason" + i + "' id='secondCouncilReason" + i + "' /><br>" +

                "<label for='thirdCouncilPreference" + i + "'>Third Council Preference</label>" +
                "<input type='text' class='form-input-delegation' name='thirdCouncilPreference" + i + "' id='thirdCouncilPreference" + i + "' /><br>" +

                "<label for='thirdCouncilCountryPreference" + i + "'>Third Council Country Preferences</label>" +
                "<input type='text' class='form-input-delegation' name='thirdCouncilCountryPreference" + i + "' id='thirdCouncilCountryPreference" + i + "' /><br>" +

                "<label for='thirdCouncilReason" + i + "'>Reason</label>" +
                "<input type='text' class='form-input-delegation' name='thirdCouncilReason" + i + "' id='thirdCouncilReason" + i + "' /><br>" +

                "<label for='foodRestrictions" + i + "'>Food Restrictions</label>" +
                "<input type='text' class='form-input-delegation' name='foodRestrictions" + i + "' id='foodRestrictions" + i + "' /><br>" +

                "<label for='accommodation" + i + "'>accommodation</label>" +
                "<input type='text' class='form-input-delegation' name='accommodation" + i + "' id='accommodation" + i + "' /><br>" +

                tabsController(i, x)+
            "</div>";
    }
    tabs = document.querySelectorAll(".form-tab");
    inputsDelegation = document.querySelectorAll("input.form-input-delegation");

    revealActiveTab(viewTab);

    tabWrapper.innerHTML += "<input type='hidden' name='delegatesCount' id='delegatesCount' value=" + x + ">";
}

function tabsController(i, x){
    if (i == 1){
        return  "<a class='button' onclick='nextTab()'>Next Delegate</a>";
    } else if (i == x){
        return  "<a class='button' onclick='previousTab()'>Previous Delegate</a>";
    } else {
        return  "<a class='button' onclick='previousTab()'>Previous Delegate</a>" +
                "<a class='button' onclick='nextTab()'>Next Delegate</a>";
    }
}

var tabs = "";
var viewTab = 1;

function previousTab(){
    removeActiveTabs(viewTab);
    viewTab = viewTab - 1;
    revealActiveTab(viewTab);
}

function nextTab(){
    removeActiveTabs(viewTab);
    viewTab = viewTab + 1;
    revealActiveTab(viewTab);
}

function removeActiveTabs(tab){
    var tabRevealed = "#form-delegation-tab-" + tab;
    document.querySelector(tabRevealed).classList.remove("is-active");
}

function revealActiveTab(tab){
    var tabRevealed = "#form-delegation-tab-" + tab;
    document.querySelector(tabRevealed).classList.add("is-active");
}

function backToSetDelegates(){
    tabWrapper.innerHTML = "";
    tabs = tabs = document.querySelectorAll(".form-tab");
    viewTab = 1;
    back();
}

function dictionary(x){
    var e = "";
    switch(x){
        case "fullName":
            e = "Full Name";
            break;
        case "institution":
            e = "Institution";
            break;
        case "nationality":
            e = "Nationality";
            break;
        case "idNumber":
            e = "ID Number";
            break;
        case "gender":
            e = "Gender";
            break;
        case "medicalConditions":
            e = "Medical Conditions";
            break;
        case "foodRestrictions":
            e = "Food Restrictions";
            break;
        case "accommodation":
            e = "accommodation";
            break;
        case "contactNumber":
            e = "Contact Number";
            break;
        case "lineId":
            e = "Line ID";
            break;
        case "email":
            e = "Email";
            break;
        case "munExperiences":
            e = "MUN Experiences";
            break;
        case "firstCouncilPreference":
            e = "Council Preference";
            break;
        case "firstCouncilCountryPreference":
            e = "Country";
            break;
        case "firstCouncilReason":
            e = "Reason";
            break;
        case "secondCouncilPreference":
            e = "Council Preference";
            break;
        case "secondCouncilCountryPreference":
            e = "Country";
            break;
        case "secondCouncilReason":
            e = "Reason";
            break;
        case "thirdCouncilPreference":
            e = "Council Preference";
            break;
        case "thirdCouncilCountryPreference":
            e = "Country";
            break;
        case "thirdCouncilReason":
            e = "Reason";
            break;  
        default:
            e = x;
            break;
    }

    return e;
}

function backtoMain(){
    var r = confirm("We will remove all data from the input fields if you proceed");
    if (r){
        data = {};
        removeAllData();
        back();
    }
}

function printAllData(data){
    var a = Object.keys(data);
    var b = Object.values(data);
    var c = [];
    for (var i = 0; i < a.length; i++){ //Zipping array
        c.push([a[i], b[i]]);
    }

    for (var i = 0; i < c.length; i++){
        document.querySelector(".summary").innerHTML += ("<p>" + dictionary(c[i][0]) + ": " + c[i][1] + "</p>");
    }
}

function removeActivePages() {
    pages.forEach( page => {
        page.classList.remove("is-active");
    })
}

function revealActivePage(page) {
    document.querySelector(page).classList.add("is-active");
}

function back(){
    rollbackPage.pop();
    removeActivePages();
    revealActivePage(rollbackPage.slice(-1)[0]);
}

function showPage(page){
    removeActivePages();
    revealActivePage(page);
    rollbackPage.push(page);
}

// Assign All Data
    // Set all data on the input field to object "data"
    // 1. Individual delegate assign all data

    function assignAllData(){
        inputs.forEach(input => {
            data[input.getAttribute("name")] = input.value;
        });
    }

    //2. Delegations assign all data

    function assignAllDataDelegations(){
        inputsDelegation.forEach(input => {
            data[input.getAttribute("name")] = input.value;
        });
    }

function removeAllData(){
    inputs.forEach(input => {
        input.value = "";
    });
}

function summary(page){
    assignAllData();
    printAllData(data);
    showPage(page);
}

// Empty an Object
</script>