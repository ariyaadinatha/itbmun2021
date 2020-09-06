<!-- Extends registrationLanding.blade.php -->

<div class="form-page" id="form-individual-page-2">
    <div class="registration-form-wrapper">
            
        <div class='registration-form-header individual-delegate'>
            <h1>INDIVIDUAL DELEGATE</h1>
        </div>
        
        <h2 class='mb-5'>Hospitality & Contact<br>&mdash;</h2>
        
        <div class="registration-row">
            <div class="registration-col r-col-12">
                <input type="text" class="form-input" name="medicalConditions" id="medicalConditions" placeholder=' '/>
                <label class="text-label" for="medicalConditions">Medical Conditions</label>
                <p class="registration-info">
                        <span class='info'></span>
                        <span class='required'></span>
                </p>
                
            </div>
        </div>

        <div class="registration-row">
            <div class="registration-col r-col-12">
                <input type="text" class="form-input" name="foodRestrictions" id="foodRestrictions" placeholder=' '/>
                <label class="text-label" for="foodRestrictions">Food Restrictions</label>
                <p class="registration-info">
                        <span class='info'>(i.e. halal, vegetarian, etc.)</span>
                        <span class='required'></span>
                </p>
                
            </div>
        </div>

        <div class="registration-row">
            <div class="registration-col r-col-12">
                <input type="email" class="form-input" name="email" id="email" placeholder=' ' required/>
                <label class="text-label" for="email">Email</label>
                <p class="registration-info">
                        <span class='info'></span>
                        <span class='required'>*Required</span>
                </p>
                
            </div>
        </div>

        <div class="registration-row">
            <div class="registration-col r-col-6">
                <input type="text" class="form-input" name="contactNumber" id="contactNumber" placeholder=' ' required/>
                <label class="text-label" for="contactNumber">Contact Number</label>
                <p class="registration-info">
                        <span class='info'>Please write with area code (i.e. +62 812 xxxx xxx) We highly encourage you to install Whatsapp for the number you provided us with to ease future communication with the Committee.</span>
                        <span class='required'>*Required</span>
                </p>
                
            </div>
            <div class="registration-col r-col-6">
                <input type="text" class="form-input" name="lineId" id="lineId" placeholder=' '/>
                <label class="text-label" for="lineId">Line ID</label>
                <p class="registration-info">
                        <span class='info'></span>
                        <span class='required'></span>
                </p>
                
            </div>
        </div>

        <div class="registration-row">
            <div class="registration-col r-col-12">
                <div class="registration-radio-wrapper">
                    <p class='radio-header'>Accommodation</p>
                    <label>
                        <span class='radio-description'>Full Accommodation</span>
                        <input type="radio" class="individual-radio" name="accommodation" value="Full Accommodation" checked>
                        <span class='radio-button'></span>
                    </label>
                    <label>
                        <span class='radio-description'>No Accommodation</span>
                        <input type="radio" class="individual-radio" name="accommodation" value="No Accommodation">
                        <span class='radio-button'></span>
                    </label>
                </div>
            </div>
        </div>

        <div class="registration-row mt-5">
            <div class="registration-col r-col-12 nav-button-wrapper">
                <a onclick="back()" class="button-white-transparent" href="#hero">Previous</a>
                <a onclick="showPage('#form-individual-page-3')" class="button-white-transparent" href="#hero">Next</a>
            </div>
        </div>

    </div>
</div>