var cek = {
    "accom" : new RegExp("^accommodation", "i"),
    "email" : new RegExp("^email", "i"),
    "food"  : new RegExp("^foodRestrictions", "i"),
    "name"  : new RegExp("^fullName", "i"),
    "gend"  : new RegExp("^gender", "i"),
    "idNb"  : new RegExp("^idNumber", "i"),
    "med"   : new RegExp("^medicalConditions", "i"),
    "exp"   : new RegExp("^munExperiences", "i"),
    "nat"   : new RegExp("^nationality", "i"),

    "fccp"  : new RegExp("^firstCouncilCountryPreference", "i"),
    "fcp"   : new RegExp("^firstCouncilPreference", "i"),
    "fcr"   : new RegExp("^firstCouncilReason", "i"),
    "sccp"  : new RegExp("^secondCouncilCountryPreference", "i"),
    "scp"   : new RegExp("^secondCouncilPreference", "i"),
    "scr"   : new RegExp("^secondCouncilReason", "i"),
    "tccp"  : new RegExp("^thirdCouncilCountryPreference", "i"),
    "tcp"   : new RegExp("^thirdCouncilPreference", "i"),
    "tcr"   : new RegExp("^thirdCouncilReason", "i"),

    "ddn"   : new RegExp("^doubleDelegateName", "i"),
    "ddi"   : new RegExp("^doubleDelegateInstitution", "i")
}


function dictionary(x){
    var e = "";
    
    if (cek.name.test(x)){
        e = "Full Name";
    }
    else if (x == "headDelegate"){
        e = "Head Delegate Name";
    }
    else if(x == "institution"){
        e = "Institution";
    }
    else if(cek.nat.test(x)){
        e = "Nationality";
    }
    else if(cek.idNb.test(x)){
        e = "ID Number";
    }
    else if(cek.gend.test(x)){
        e = "Gender";
    }
    else if(cek.med.test(x)){
        e = "Medical Conditions";
    }
    else if(cek.food.test(x)){
        e = "Food Restrictions";
    }
    else if(cek.accom.test(x)){
        e = "Accommodation";
    }
    else if(x == "contactNumber"){
        e = "Contact Number";
    }
    else if(x == "lineId"){
        e = "Line ID";
    }
    else if(cek.email.test(x)){
        e = "Email";
    }
    else if(cek.exp.test(x)){
        e = "MUN Experiences";
    }
    else if(cek.fcp.test(x) || cek.scp.test(x) || cek.tcp.test(x)){
        e = "Council Preference";
    }
    else if(cek.fccp.test(x) || cek.sccp.test(x) || cek.tccp.test(x)){
        e = "Country Preference";
    }
    else if(cek.fcr.test(x) || cek.scr.test(x) || cek.tcr.test(x)){
        e = "Reason";
    }
    else if(cek.ddn.test(x)){
        e = "Double Delegate Name";
    }
    else if(cek.ddi.test(x)){
        e = "Double Delegate Nationality";
    }  
    else {
        e = x;
    }

    return e;
}