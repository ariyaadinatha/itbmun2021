// Assignments
var rollbackPage = ["#form-landing"];
const pages = document.querySelectorAll(".form-page");
var data = {};
var inputs = document.querySelectorAll("input.form-input");
var inputsDelegation = document.querySelectorAll("input.form-input-delegation");
var radioButtons = document.querySelectorAll("input[type=radio] + .radio-button");

// A. Function corresponding to type of registration
// =================================================
// 1. Individual Delegate 
        function individualDelegate(){
            showPage('#form-individual-page-1');
        }

// 2. Delegation 
        function delegation(){
            showPage('#form-delegation-page-1');
        }
// *************************************************

function backToSetDelegates(){
    tabWrapper.innerHTML = "";
    tabs = tabs = document.querySelectorAll(".form-tab");
    viewTab = 1;
    back();
}

function backtoMain(){
    var r = confirm("We will remove all data from the input fields if you proceed");
    if (r){
        // Remove all assignments
        back();
        data = {};
        removeAllData();
        
        // Show registration landing
        document.querySelector(".summary").innerHTML = "";
        document.querySelector(".summary-delegation").innerHTML = "";
        
    }
}

function backFromSummary(){
    back();
    data = {};
    document.querySelector(".summary").innerHTML = "";
    document.querySelector(".summary-delegation").innerHTML = "";
}

function printAllData(data){
    // 1. Assign Object keys and values to array
    var a = Object.keys(data);
    var b = Object.values(data);

    // 2. Grouping data
    var personalIdentity = [];
    var hospitalityContact = [];
    var delegateMUN = [];
    
    for (var i = 0; i < a.length; i++){
        // Personal Identity Group keys and values
        if(
            a[i] == "fullName" || 
            a[i] == "institution" || 
            a[i] == "nationality" ||
            a[i] == "idNumber" ||
            a[i] == "gender"
        ){
            personalIdentity.push([a[i], b[i]]);
        }

        // Hospitality and Contact Group keys and values
        else if(
            a[i] == "medicalConditions" || 
            a[i] == "foodRestrictions" || 
            a[i] == "email" ||
            a[i] == "contactNumber" ||
            a[i] == "lineId" ||
            a[i] == "accommodation"
        ){
            hospitalityContact.push([a[i], b[i]]);
        }

        // Council Group keys and values
        else if(
            a[i] == "munExperiences" ||
            a[i] == "firstCouncilPreference" ||
            a[i] == "firstCouncilCountryPreference" ||
            a[i] == "firstCouncilReason" ||
            a[i] == "secondCouncilPreference" ||
            a[i] == "secondCouncilCountryPreference" ||
            a[i] == "secondCouncilReason" ||
            a[i] == "thirdCouncilPreference" ||
            a[i] == "thirdCouncilCountryPreference" ||
            a[i] == "thirdCouncilReason" ||
            a[i] == "doubleDelegateName" ||
            a[i] == "doubleDelegateInstitution"
        ){
            delegateMUN.push([a[i], b[i]]);
        }
    }

    // 3. Append all html into div.summary
    // 3a. Personal Identity
    document.querySelector(".summary").innerHTML += (
        "<div class='py-4' id='personalIdentity'>" +
        "<div style='width: 100%; border-bottom: 1px solid white;'>" +
            "<h2 class='mb-4'>Personal Identity</h2>" + 
        "</div>"
    );

    for (var i = 0; i < personalIdentity.length; i++){
        document.querySelector("#personalIdentity").innerHTML += (
            "<div class='my-3 px-3'>" +
                "<b>" + dictionary(personalIdentity[i][0]) + "</b><br>" +
                personalIdentity[i][1] +
            "</div>"
        );
    }

    // 3b. Hospitality & Contact
    document.querySelector(".summary").innerHTML += (
        "<div class='py-4' id='hospitalityContact'>" +
        "<div style='width: 100%; border-bottom: 1px solid white;'>" +
            "<h2 class='mb-4'>Hospitality and Contact</h2>" + 
        "</div>"
    );

    for (var i = 0; i < hospitalityContact.length; i++){
        document.querySelector("#hospitalityContact").innerHTML += (
            "<div class='my-3 px-3'>" +
                "<b>" + dictionary(hospitalityContact[i][0]) + "</b><br>" +
                hospitalityContact[i][1] +
            "</div>"
        );
    }

    // 3c. Council Preference
    document.querySelector(".summary").innerHTML += (
        "<div class='py-4' id='delegateMUN'>" +
        "<div style='width: 100%; border-bottom: 1px solid white;'>" +
            "<h2 class='mb-4'>Council Preference</h2>" + 
        "</div>"
    );

    for (var i = 0; i < delegateMUN.length; i++){
        if(
            delegateMUN[i][0] == "firstCouncilPreference" ||
            delegateMUN[i][0] == "firstCouncilCountryPreference" ||
            delegateMUN[i][0] == "firstCouncilReason" ||
            delegateMUN[i][0] == "secondCouncilPreference" ||
            delegateMUN[i][0] == "secondCouncilCountryPreference" ||
            delegateMUN[i][0] == "secondCouncilReason" ||
            delegateMUN[i][0] == "thirdCouncilPreference" ||
            delegateMUN[i][0] == "thirdCouncilCountryPreference" ||
            delegateMUN[i][0] == "thirdCouncilReason"
        ){
            if(delegateMUN[i][0] == "firstCouncilPreference"){
                document.querySelector("#delegateMUN").innerHTML += (
                    "<div class='pt-3 px-3' id='delegateMUN'>" +
                    "<b>First Council Preference</b><br>"
                );

            } else if(delegateMUN[i][0] == "secondCouncilPreference"){
                document.querySelector("#delegateMUN").innerHTML += (
                    "<div class='pt-3 px-3' id='delegateMUN'>" +
                    "<b>Second Council Preference</b><br>"
                );

            } else if(delegateMUN[i][0] == "thirdCouncilPreference"){
                document.querySelector("#delegateMUN").innerHTML += (
                    "<div class='pt-3 px-3' id='delegateMUN'>" +
                    "<b>Third Council Preference</b><br>"
                );
            }
            document.querySelector("#delegateMUN").innerHTML += (
                "<div class='my-3 px-5'>" +
                    "<i>" + dictionary(delegateMUN[i][0]) + "</i><br>" +
                    delegateMUN[i][1] +
                "</div>"
            );
        } else if(
            a[i] == "doubleDelegateName" ||
            a[i] == "doubleDelegateInstitution"
        ) {
            document.querySelector("#delegateMUN").innerHTML += (
                "<div class='my-3 px-3'>" +
                    "<i>" + dictionary(delegateMUN[i][0]) + "</i><br>" +
                    delegateMUN[i][1] +
                "</div>"
            );
        } else {
            document.querySelector("#delegateMUN").innerHTML += (
                "<div class='my-3 px-3'>" +
                    "<b>" + dictionary(delegateMUN[i][0]) + "</b><br>" +
                    delegateMUN[i][1] +
                "</div>"
            );
        }
    }
}

function headerDeterminer(i){
    return i == 1 ? "Head Delegate" : "Delegate " + i;
}

function printAllDataDelegations(data){
    var count = document.querySelector("#delegatesCount").value;
    var c = Object.entries(data);
    var patts = [new RegExp("[a-zA-z]+$")];
    var cPatt = new RegExp("Council");

    document.querySelector(".summary-delegation").innerHTML += (
        "<div class='py-4' id='delegationInfo'>" +
            "<div style='width: 100%; border-bottom: 1px solid white;'>" +
                "<h2 class='mb-4'>Delegation Info</h2>" + 
            "</div>" +
        "</div>"
    );

    for (var i = 1; i <= count; i++){
        // Assign more RegExp pattern
        patts[i] = new RegExp(`[${i}]`);

        // Create New Delegation info based on delegates count
        document.querySelector(".summary-delegation").innerHTML += (
            "<div class='py-4' id='delegateInfo" + i + "'>" +
                "<div style='width: 100%; border-bottom: 1px solid white;'>" +
                    "<h2 class='mb-4'>" + headerDeterminer(i) + "</h2>" + 
                "</div>" +
            "</div>"
        );
    }

    for (var i = 0; i < c.length; i++){
        for(var j = 0; j < patts.length; j++){
            if (patts[j].test(c[i][0])){
                if (j == 0){
                    document.querySelector(`#delegationInfo`).innerHTML += (
                        "<div class='my-3 px-3'>" +
                            "<b>" + dictionary(c[i][0]) + "</b><br>" + c[i][1] +
                        "</div>"
                    );
                } else {
                    if(cPatt.test(c[i][0])){
                        document.querySelector(`#delegateInfo${j}`).innerHTML += (
                            "<div class='my-3 px-3'>" +
                                "<i>" + dictionary(c[i][0]) + "</i><br>" + c[i][1] +
                            "</div>"
                        );
                    } else {
                        document.querySelector(`#delegateInfo${j}`).innerHTML += (
                            "<div class='my-3 px-3'>" +
                                "<b>" + dictionary(c[i][0]) + "</b><br>" + c[i][1] +
                            "</div>"
                        );
                    }
                }
            }
        }
        // document.querySelector(".summary-delegation").innerHTML += ("<p>" + dictionary(c[i][0]) + ": " + c[i][1] + "</p>");
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
    radioButtonsSelector();
    removeActivePages();
    revealActivePage(page);
    rollbackPage.push(page);
}

function radioButtonsSelector(){
    radioButtons = document.querySelectorAll("input[type=radio] + .radio-button");

    radioButtons.forEach(button => {
        button.innerHTML = "<span></span>";
    });
}

// Assign All Data
    // Set all data on the input field to object "data"
    // 1. Individual delegate assign all data

    function assignAllData(){
        var radioInputs = document.querySelectorAll('input[type=radio].individual-radio');

        radioInputs.forEach(input => {
            if(input.checked){
                input.classList.add("form-input")
            } else {
                input.classList.remove("form-input")
            }
        });

        inputs = document.querySelectorAll("input.form-input");

        inputs.forEach(input => {
            data[input.getAttribute("name")] = input.value;
        });
    }

    //2. Delegations assign all data

    function assignAllDataDelegations(){
        var radioInputs = document.querySelectorAll('input[type=radio].delegation-radio');
        
        radioInputs.forEach(input => {
            if(input.checked){
                input.classList.add("form-input-delegation")
            } else {
                input.classList.remove("form-input-delegation")
            }
        });

        inputsDelegation = document.querySelectorAll("input.form-input-delegation");

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

function summaryDelegation(page){
    assignAllDataDelegations();
    printAllDataDelegations(data);
    showPage(page);
}