const tabWrapper = document.querySelector(".form-tab-wrapper");
var tabs = "";
var viewTab = 1;

function headerDeterminer(i){
    return i == 1 ? "Head Delegate" : "Delegate " + i;
}

// Tab Maker
function setDelegates(x){
    var headDelegate = document.querySelector('input[name=headDelegate]').value;
    showPage("#form-delegation-page-3");

    for(i = 1; i <= x; i++){
        tabWrapper.innerHTML += "" + 
            "<div class='form-tab' id='form-delegation-tab-" + i + "'>" +
                "<h2 class='mb-5'>"+headerDeterminer(i)+" Form<br>&mdash;</h2>" + 

                "<div class='registration-row'>" +
                    "<div class='registration-col r-col-12'>" +
                        "<input type='text' class='form-input-delegation' name='fullName" + i + "' id='fullName" + i + "' placeholder=' ' "+ (i == 1 ? "value='"+ headDelegate +"'" : "") + " required/>" +
                        "<label class='text-label' for='fullName" + i + "'>Full Name</label>" +
                        "<p class='registration-info'>" +
                            "<span class='info'>This will be the name printed on your certificate as well.</span>" +
                            "<span class='required'>*Required</span>" +
                        "</p>" +
                        
                    "</div>" +
                "</div>" +

                "<div class='registration-row'>" +
                    "<div class='registration-col r-col-12'>" +
                        "<input type='email' class='form-input-delegation' name='email" + i + "' id='email" + i + "' placeholder=' ' required/>" +
                        "<label class='text-label' for='email" + i + "'>Email</label>" +
                        "<p class='registration-info'>" +
                            "<span class='info'></span>" +
                            "<span class='required'>*Required</span>" +
                        "</p>" +
                        
                    "</div>" +
                "</div>" +

                "<div class='registration-row'>" +
                    "<div class='registration-col r-col-6'>" +
                        "<input type='text' class='form-input-delegation' name='nationality" + i + "' id='nationality" + i + "' placeholder=' ' required/>" +
                        "<label class='text-label' for='nationality" + i + "'>Nationality</label>" +
                        "<p class='registration-info'>" +
                            "<span class='info'></span>" +
                            "<span class='required'>*Required</span>" +
                        "</p>" +
                        
                    "</div>" +
                    "<div class='registration-col r-col-6'>" +
                        "<input type='text' class='form-input-delegation' name='idNumber" + i + "' id='idNumber" + i + "' placeholder=' ' required/>" +
                        "<label class='text-label' for='idNumber" + i + "'>ID Number</label>" +
                        "<p class='registration-info'>" +
                            "<span class='info'>(National ID/ Passport Number)</span>" +
                            "<span class='required'>*Required</span>" +
                        "</p>" +
                        
                    "</div>" +
                "</div>" +

                "<div class='registration-row mb-5'>" +
                    "<div class='registration-col r-col-6'>" +
                        "<div class='registration-radio-wrapper'>" +
                            "<p class='radio-header'>Gender</p>" +
                            "<label>" +
                                "<span class='radio-description'>Male</span>" +
                                "<input type='radio' class='delegation-radio' name='gender" + i + "' value='Male' checked>" +
                                "<span class='radio-button'></span>" +
                            "</label>" +
                            "<label>" +
                                "<span class='radio-description'>Female</span>" +
                                "<input type='radio' class='delegation-radio' name='gender" + i + "' value='Female'>" +
                                "<span class='radio-button'></span>" +
                            "</label>" +
                            "<label>" +
                                "<span class='radio-description'>Others</span>" +
                                "<input type='radio' class='delegation-radio' name='gender" + i + "' value='Others'>" +
                                "<span class='radio-button'></span>" +
                            "</label>" +
                        "</div>" +
                    "</div>" +
                "</div>" +

                "<h2 class='my-5'>" + "Hospitality" + "<br>&mdash;</h2>" + 

                 "<div class='registration-row'>" +
                    "<div class='registration-col r-col-12'>" +
                        "<input type='text' class='form-input-delegation' name='medicalConditions" + i + "' id='medicalConditions" + i + "' placeholder=' '/>" +
                        "<label class='text-label' for='medicalConditions" + i + "'>Medical Conditions</label>" +
                        "<p class='registration-info'>" +
                            "<span class='info'></span>" +
                            "<span class='required'></span>" +
                        "</p>" +
                        
                    "</div>" +
                "</div>" +

                "<div class='registration-row'>" +
                    "<div class='registration-col r-col-12'>" +
                        "<input type='text' class='form-input-delegation' name='foodRestrictions" + i + "' id='foodRestrictions" + i + "' placeholder=' '/>" +
                        "<label class='text-label' for='foodRestrictions" + i + "'>Food Restrictions</label>" +
                        "<p class='registration-info'>" +
                            "<span class='info'>(i.e. halal, vegetarian, etc.)</span>" +
                            "<span class='required'></span>" +
                        "</p>" +
                        
                    "</div>" +
                "</div>" +

                "<div class='registration-row'>" +
                    "<div class='registration-col r-col-12'>" +
                        "<div class='registration-radio-wrapper'>" +
                            "<p class='radio-header'>Accommodation</p>" +
                            "<label>" +
                                "<span class='radio-description'>Full Accommodation</span>" +
                                "<input type='radio' class='delegation-radio' name='accommodation" + i + "' value='Full Accommodation' checked>" +
                                "<span class='radio-button'></span>" +
                            "</label>" +
                            "<label>" +
                                "<span class='radio-description'>No Accommodation</span>" +
                                "<input type='radio' class='delegation-radio' name='accommodation" + i + "' value='No Accommodation'>" +
                                "<span class='radio-button'></span>" +
                            "</label>" +
                        "</div>" +
                    "</div>" +
                "</div>" +

                "<h2 class='my-5'>" + "Council Preferences" + "<br>&mdash;</h2>" + 

                "<div class='registration-row'>" +
                    "<div class='registration-col r-col-12'>" +
                        "<input type='text' class='form-input-delegation' name='munExperiences" + i + "' id='munExperiences" + i + "' placeholder=' '/>" +
                        "<label class='text-label' for='munExperiences" + i + "'>MUN Experiences</label>" +
                        "<p class='registration-info'>" +
                            "<span class='info'>(MUN_Council_Year_Awards if any)</span>" +
                            "<span class='required'></span>" +
                        "</p>" +
                        
                    "</div>" +
                "</div>" +

                "<div class='registration-row mb-5'>" +
                    "<div class='registration-col r-col-12'>" +
                        "<div class='registration-radio-wrapper'>" +
                            "<p class='radio-header'>First Council Preference</p>" +
                            "<label>" +
                                "<span class='radio-description'>WHA</span>" +
                                "<input type='radio' class='delegation-radio' name='firstCouncilPreference" + i + "' value='WHA' checked>" +
                                "<span class='radio-button'></span>" +
                            "</label>" +
                            "<label>" +
                                "<span class='radio-description'>UNEP</span>" +
                                "<input type='radio' class='delegation-radio' name='firstCouncilPreference" + i + "' value='UNEP'>" +
                                "<span class='radio-button'></span>" +
                            "</label>" +
                            "<label>" +
                                "<span class='radio-description'>DISEC</span>" +
                                "<input type='radio' class='delegation-radio' name='firstCouncilPreference" + i + "' value='DISEC'>" +
                                "<span class='radio-button'></span>" +
                            "</label>" +
                            "<label>" +
                                "<span class='radio-description'>UNESCO</span>" +
                                "<input type='radio' class='delegation-radio' name='firstCouncilPreference" + i + "' value='UNESCO'>" +
                                "<span class='radio-button'></span>" +
                            "</label>" +
                            "<label>" +
                                "<span class='radio-description'>Historical Crisis Council</span>" +
                                "<input type='radio' class='delegation-radio' name='firstCouncilPreference" + i + "' value='CRISIS'>" +
                                "<span class='radio-button'></span>" +
                            "</label>" +
                            "<label>" +
                                "<span class='radio-description'>Futuristic UNSC</span>" +
                                "<input type='radio' class='delegation-radio' name='firstCouncilPreference" + i + "' value='UNSC'>" +
                                "<span class='radio-button'></span>" +
                            "</label>" +
                            "<label>" +
                                "<span class='radio-description'>UNCA PRESS</span>" +
                                "<input type='radio' class='delegation-radio' name='firstCouncilPreference" + i + "' value='UNCA PRESS'>" +
                                "<span class='radio-button'></span>" +
                            "</label>" +
                        "</div>" +
                    "</div>" +
                "</div>" +

                "<div class='registration-row'>" +
                    "<div class='registration-col r-col-12'>" +
                        "<input type='text' class='form-input-delegation' name='firstCouncilCountryPreference" + i + "' id='firstCouncilCountryPreference" + i + "' placeholder=' ' required/>" +
                        "<label class='text-label' for='firstCouncilCountryPreference" + i + "'>Country preference for 1st council (Max. 3 countries)</label>" +
                        "<p class='registration-info'>" +
                            "<span class='info'>please choose 3 countries and separate your answer by comma (i.e. Australia, United Kingdom, Croatia). If you chose Crisis council for your first preference, please write \"\-\".</span>" +
                            "<span class='required'>*Required</span>" +
                        "</p>" +
                    "</div>" +
                "</div>" +

                "<div class='registration-row'>" +
                    "<div class='registration-col r-col-12'>" +
                        "<input type='text' class='form-input-delegation' name='firstCouncilReason" + i + "' id='firstCouncilReason" + i + "' placeholder=' ' required/>" +
                        "<label class='text-label' for='firstCouncilReason" + i + "'>What makes you choose your 1st council preference ?</label>" +
                        "<p class='registration-info'>" +
                            "<span class='info'></span>" +
                            "<span class='required'>*Required</span>" +
                        "</p>" +
                        
                    "</div>" +
                "</div>" +

                "<div class='registration-row mb-5'>" +
                    "<div class='registration-col r-col-12'>" +
                        "<div class='registration-radio-wrapper'>" +
                            "<p class='radio-header'>Second Council Preference</p>" +
                            "<label>" +
                                "<span class='radio-description'>WHA</span>" +
                                "<input type='radio' class='delegation-radio' name='secondCouncilPreference" + i + "' value='WHA'>" +
                                "<span class='radio-button'></span>" +
                            "</label>" +
                            "<label>" +
                                "<span class='radio-description'>UNEP</span>" +
                                "<input type='radio' class='delegation-radio' name='secondCouncilPreference" + i + "' value='UNEP' checked>" +
                                "<span class='radio-button'></span>" +
                            "</label>" +
                            "<label>" +
                                "<span class='radio-description'>DISEC</span>" +
                                "<input type='radio' class='delegation-radio' name='secondCouncilPreference" + i + "' value='DISEC'>" +
                                "<span class='radio-button'></span>" +
                            "</label>" +
                            "<label>" +
                                "<span class='radio-description'>UNESCO</span>" +
                                "<input type='radio' class='delegation-radio' name='secondCouncilPreference" + i + "' value='UNESCO'>" +
                                "<span class='radio-button'></span>" +
                            "</label>" +
                            "<label>" +
                                "<span class='radio-description'>Historical Crisis Council</span>" +
                                "<input type='radio' class='delegation-radio' name='secondCouncilPreference" + i + "' value='CRISIS'>" +
                                "<span class='radio-button'></span>" +
                            "</label>" +
                            "<label>" +
                                "<span class='radio-description'>Futuristic UNSC</span>" +
                                "<input type='radio' class='delegation-radio' name='secondCouncilPreference" + i + "' value='UNSC'>" +
                                "<span class='radio-button'></span>" +
                            "</label>" +
                            "<label>" +
                                "<span class='radio-description'>UNCA PRESS</span>" +
                                "<input type='radio' class='delegation-radio' name='secondCouncilPreference" + i + "' value='UNCA PRESS'>" +
                                "<span class='radio-button'></span>" +
                            "</label>" +
                        "</div>" +
                    "</div>" +
                "</div>" +

                "<div class='registration-row'>" +
                    "<div class='registration-col r-col-12'>" +
                        "<input type='text' class='form-input-delegation' name='secondCouncilCountryPreference" + i + "' id='secondCouncilCountryPreference" + i + "' placeholder=' ' required/>" +
                        "<label class='text-label' for='secondCouncilCountryPreference" + i + "'>Country preference for 2nd council (Max. 3 countries)</label>" +
                        "<p class='registration-info'>" +
                            "<span class='info'></span>" +
                            "<span class='required'>*Required</span>" +
                        "</p>" +
                        
                    "</div>" +
                "</div>" +

                "<div class='registration-row'>" +
                    "<div class='registration-col r-col-12'>" +
                        "<input type='text' class='form-input-delegation' name='secondCouncilReason" + i + "' id='secondCouncilReason" + i + "' placeholder=' ' required/>" +
                        "<label class='text-label' for='secondCouncilReason" + i + "'>What makes you choose your 2nd council preference ?</label>" +
                        "<p class='registration-info'>" +
                            "<span class='info'></span>" +
                            "<span class='required'>*Required</span>" +
                        "</p>" +
                        
                    "</div>" +
                "</div>" +

                "<div class='registration-row mb-5'>" +
                    "<div class='registration-col r-col-12'>" +
                        "<div class='registration-radio-wrapper'>" +
                            "<p class='radio-header'>Third Council Preference</p>" +
                            "<label>" +
                                "<span class='radio-description'>WHA</span>" +
                                "<input type='radio' class='delegation-radio' name='thirdCouncilPreference" + i + "' value='WHA'>" +
                                "<span class='radio-button'></span>" +
                            "</label>" +
                            "<label>" +
                                "<span class='radio-description'>UNEP</span>" +
                                "<input type='radio' class='delegation-radio' name='thirdCouncilPreference" + i + "' value='UNEP'>" +
                                "<span class='radio-button'></span>" +
                            "</label>" +
                            "<label>" +
                                "<span class='radio-description'>DISEC</span>" +
                                "<input type='radio' class='delegation-radio' name='thirdCouncilPreference" + i + "' value='DISEC' checked>" +
                                "<span class='radio-button'></span>" +
                            "</label>" +
                            "<label>" +
                                "<span class='radio-description'>UNESCO</span>" +
                                "<input type='radio' class='delegation-radio' name='thirdCouncilPreference" + i + "' value='UNESCO'>" +
                                "<span class='radio-button'></span>" +
                            "</label>" +
                            "<label>" +
                                "<span class='radio-description'>Historical Crisis Council</span>" +
                                "<input type='radio' class='delegation-radio' name='thirdCouncilPreference" + i + "' value='CRISIS'>" +
                                "<span class='radio-button'></span>" +
                            "</label>" +
                            "<label>" +
                                "<span class='radio-description'>Futuristic UNSC</span>" +
                                "<input type='radio' class='delegation-radio' name='thirdCouncilPreference" + i + "' value='UNSC'>" +
                                "<span class='radio-button'></span>" +
                            "</label>" +
                            "<label>" +
                                "<span class='radio-description'>UNCA PRESS</span>" +
                                "<input type='radio' class='delegation-radio' name='thirdCouncilPreference" + i + "' value='UNCA PRESS'>" +
                                "<span class='radio-button'></span>" +
                            "</label>" +
                        "</div>" +
                    "</div>" +
                "</div>" +

                "<div class='registration-row'>" +
                    "<div class='registration-col r-col-12'>" +
                        "<input type='text' class='form-input-delegation' name='thirdCouncilCountryPreference" + i + "' id='thirdCouncilCountryPreference" + i + "' placeholder=' ' required/>" +
                        "<label class='text-label' for='thirdCouncilCountryPreference" + i + "'>Country preference for 3rd council (Max. 3 countries)</label>" +
                        "<p class='registration-info'>" +
                            "<span class='info'></span>" +
                            "<span class='required'>*Required</span>" +
                        "</p>" +
                        
                    "</div>" +
                "</div>" +

                "<div class='registration-row'>" +
                    "<div class='registration-col r-col-12'>" +
                        "<input type='text' class='form-input-delegation' name='thirdCouncilReason" + i + "' id='thirdCouncilReason" + i + "' placeholder=' ' required/>" +
                        "<label class='text-label' for='thirdCouncilReason" + i + "'>What makes you choose your 3rd council preference ?</label>" +
                        "<p class='registration-info'>" +
                            "<span class='info'></span>" +
                            "<span class='required'>*Required</span>" +
                        "</p>" +
                        
                    "</div>" +
                "</div>" +

                "<div class='registration-row'>" +
                    "<div class='registration-col r-col-12'>" +
                        "<input type='text' class='form-input-delegation' name='doubleDelegateName" + i + "' id='doubleDelegateName" + i + "' placeholder=' '/>" +
                        "<label class='text-label' for='doubleDelegateName" + i + "'>Double Delegate's name</label>" +
                        "<p class='registration-info'>" +
                            "<span class='info'>(Fill if you choose WHA and/or UNSC)<br>Make sure that your double delegate also fill the registration form separately.</span>" +
                            "<span class='required'></span>" +
                        "</p>" +
                        
                    "</div>" +
                "</div>" +

                "<div class='registration-row'>" +
                    "<div class='registration-col r-col-12'>" +
                        "<input type='text' class='form-input-delegation' name='doubleDelegateInstitution" + i + "' id='doubleDelegateInstitution" + i + "' placeholder=' '/>" +
                        "<label class='text-label' for='doubleDelegateInstitution" + i + "'>Double Delegate's institution</label>" +
                        "<p class='registration-info'>" +
                            "<span class='info'></span>" +
                            "<span class='required'></span>" +
                        "</p>" +
                        
                    "</div>" +
                "</div>" +

                "<div class='form-tabs-navigator'>" +
                    tabsController(i, x) +
                "</div>" +

                "<div class='divider-main'></div>" +
            "</div>" +


        "</div>";

        radioButtonsSelector();
    }
    tabs = document.querySelectorAll(".form-tab");
    inputsDelegation = document.querySelectorAll("input.form-input-delegation");

    revealActiveTab(viewTab);

    tabWrapper.innerHTML += "<input type='hidden' name='delegatesCount' id='delegatesCount' value=" + x + ">";
}


// Tab Viewer
function tabsController(i, x){
    if (i == 1){
        return  "<span></span>" + "<a class='form-tabs-button' onclick='nextTab()' href='#hero'>"+headerDeterminer(i+1)+"&ensp;<i class='fas fa-arrow-circle-right'></i></a>";
    } else if (i == x){
        return  "<a class='form-tabs-button' onclick='previousTab()' href='#hero'><i class='fas fa-arrow-circle-left'></i>&ensp;"+headerDeterminer(i-1)+"</a>" + "<span></span>";
    } else {
        return  "<a class='form-tabs-button' onclick='previousTab()' href='#hero'><i class='fas fa-arrow-circle-left'></i>&ensp;"+headerDeterminer(i-1)+"</a>" +
                "<a class='form-tabs-button' onclick='nextTab()' href='#hero'>"+headerDeterminer(i+1)+"&ensp;<i class='fas fa-arrow-circle-right'></i></a>";
    }
}

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