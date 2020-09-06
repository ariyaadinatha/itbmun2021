<!-- Extends registrationLanding.blade.php -->

<div class="form-page" id="form-individual-page-3">
    <div class="registration-form-wrapper">
            
        <div class='registration-form-header individual-delegate'>
            <h1>INDIVIDUAL DELEGATE</h1>
        </div>
        
        <h2 class='mb-5'>Council Preferences<br>&mdash;</h2>
        
        <div class="registration-row">
            <div class="registration-col r-col-12">
                <input type="text" class="form-input" name="munExperiences" id="munExperiences" placeholder=' '/>
                <label class="text-label" for="munExperiences">MUN Experiences</label>
                <p class="registration-info">
                        <span class='info'>(MUN_Council_Year_Awards if any)</span>
                        <span class='required'></span>
                </p>
                
            </div>
        </div>

        <div class="registration-row mb-5">
            <div class="registration-col r-col-12">
                <div class="registration-radio-wrapper">
                    <p class='radio-header'>First Council Preference</p>
                    <label>
                        <span class='radio-description'>WHA</span>
                        <input type="radio" class="individual-radio" name="firstCouncilPreference" value="WHA" checked>
                        <span class='radio-button'></span>
                    </label>
                    <label>
                        <span class='radio-description'>UNEP</span>
                        <input type="radio" class="individual-radio" name="firstCouncilPreference" value="UNEP">
                        <span class='radio-button'></span>
                    </label>
                    <label>
                        <span class='radio-description'>DISEC</span>
                        <input type="radio" class="individual-radio" name="firstCouncilPreference" value="DISEC">
                        <span class='radio-button'></span>
                    </label>
                    <label>
                        <span class='radio-description'>UNESCO</span>
                        <input type="radio" class="individual-radio" name="firstCouncilPreference" value="UNESCO">
                        <span class='radio-button'></span>
                    </label>
                    <label>
                        <span class='radio-description'>Historical Crisis Council</span>
                        <input type="radio" class="individual-radio" name="firstCouncilPreference" value="CRISIS">
                        <span class='radio-button'></span>
                    </label>
                    <label>
                        <span class='radio-description'>Futuristic UNSC</span>
                        <input type="radio" class="individual-radio" name="firstCouncilPreference" value="UNSC">
                        <span class='radio-button'></span>
                    </label>
                    <label>
                        <span class='radio-description'>UNCA PRESS</span>
                        <input type="radio" class="individual-radio" name="firstCouncilPreference" value="UNCA PRESS">
                        <span class='radio-button'></span>
                    </label>
                </div>
            </div>
        </div>

        <div class="registration-row">
            <div class="registration-col r-col-12">
                <input type="text" class="form-input" name="firstCouncilCountryPreference" id="firstCouncilCountryPreference" placeholder=' ' required/>
                <label class="text-label" for="firstCouncilCountryPreference">Country preference for 1st council (Max. 3 countries)</label>
                <p class="registration-info">
                    <span class='info'>please choose 3 countries and separate your answer by comma (i.e. Australia, United Kingdom, Croatia). If you chose Crisis council for your first preference, please write "-".</span>
                    <span class='required'>*Required</span>
                </p>
                
            </div>
        </div>

        <div class="registration-row">
            <div class="registration-col r-col-12">
                <input type="text" class="form-input" name="firstCouncilReason" id="firstCouncilReason" placeholder=' ' required/>
                <label class="text-label" for="firstCouncilReason">What makes you choose your 1st council preference ?</label>
                <p class="registration-info">
                        <span class='info'></span>
                        <span class='required'>*Required</span>
                </p>
                
            </div>
        </div>

        <div class="registration-row mb-5">
            <div class="registration-col r-col-12">
                <div class="registration-radio-wrapper">
                    <p class='radio-header'>Second Council Preference</p>
                    <label>
                        <span class='radio-description'>WHA</span>
                        <input type="radio" class="individual-radio" name="secondCouncilPreference" value="WHA">
                        <span class='radio-button'></span>
                    </label>
                    <label>
                        <span class='radio-description'>UNEP</span>
                        <input type="radio" class="individual-radio" name="secondCouncilPreference" value="UNEP" checked>
                        <span class='radio-button'></span>
                    </label>
                    <label>
                        <span class='radio-description'>DISEC</span>
                        <input type="radio" class="individual-radio" name="secondCouncilPreference" value="DISEC">
                        <span class='radio-button'></span>
                    </label>
                    <label>
                        <span class='radio-description'>UNESCO</span>
                        <input type="radio" class="individual-radio" name="secondCouncilPreference" value="UNESCO">
                        <span class='radio-button'></span>
                    </label>
                    <label>
                        <span class='radio-description'>Historical Crisis Council</span>
                        <input type="radio" class="individual-radio" name="secondCouncilPreference" value="CRISIS">
                        <span class='radio-button'></span>
                    </label>
                    <label>
                        <span class='radio-description'>Futuristic UNSC</span>
                        <input type="radio" class="individual-radio" name="secondCouncilPreference" value="UNSC">
                        <span class='radio-button'></span>
                    </label>
                    <label>
                        <span class='radio-description'>UNCA PRESS</span>
                        <input type="radio" class="individual-radio" name="secondCouncilPreference" value="UNCA PRESS">
                        <span class='radio-button'></span>
                    </label>
                </div>
            </div>
        </div>

        <div class="registration-row">
            <div class="registration-col r-col-12">
                <input type="text" class="form-input" name="secondCouncilCountryPreference" id="secondCouncilCountryPreference" placeholder=' ' required/>
                <label class="text-label" for="secondCouncilCountryPreference">Country preference for 2nd council (Max. 3 countries)</label>
                <p class="registration-info">
                        <span class='info'></span>
                        <span class='required'>*Required</span>
                </p>
                
            </div>
        </div>

        <div class="registration-row">
            <div class="registration-col r-col-12">
                <input type="text" class="form-input" name="secondCouncilReason" id="secondCouncilReason" placeholder=' ' required/>
                <label class="text-label" for="secondCouncilReason">What makes you choose your 2nd council preference ?</label>
                <p class="registration-info">
                        <span class='info'></span>
                        <span class='required'>*Required</span>
                </p>
                
            </div>
        </div>

        <div class="registration-row mb-5">
            <div class="registration-col r-col-12">
                <div class="registration-radio-wrapper">
                    <p class='radio-header'>Third Council Preference</p>
                    <label>
                        <span class='radio-description'>WHA</span>
                        <input type="radio" class="individual-radio" name="thirdCouncilPreference" value="WHA">
                        <span class='radio-button'></span>
                    </label>
                    <label>
                        <span class='radio-description'>UNEP</span>
                        <input type="radio" class="individual-radio" name="thirdCouncilPreference" value="UNEP">
                        <span class='radio-button'></span>
                    </label>
                    <label>
                        <span class='radio-description'>DISEC</span>
                        <input type="radio" class="individual-radio" name="thirdCouncilPreference" value="DISEC" checked>
                        <span class='radio-button'></span>
                    </label>
                    <label>
                        <span class='radio-description'>UNESCO</span>
                        <input type="radio" class="individual-radio" name="thirdCouncilPreference" value="UNESCO">
                        <span class='radio-button'></span>
                    </label>
                    <label>
                        <span class='radio-description'>Historical Crisis Council</span>
                        <input type="radio" class="individual-radio" name="thirdCouncilPreference" value="CRISIS">
                        <span class='radio-button'></span>
                    </label>
                    <label>
                        <span class='radio-description'>Futuristic UNSC</span>
                        <input type="radio" class="individual-radio" name="thirdCouncilPreference" value="UNSC">
                        <span class='radio-button'></span>
                    </label>
                    <label>
                        <span class='radio-description'>UNCA PRESS</span>
                        <input type="radio" class="individual-radio" name="thirdCouncilPreference" value="UNCA PRESS">
                        <span class='radio-button'></span>
                    </label>
                </div>
            </div>
        </div>

        <div class="registration-row">
            <div class="registration-col r-col-12">
                <input type="text" class="form-input" name="thirdCouncilCountryPreference" id="thirdCouncilCountryPreference" placeholder=' ' required/>
                <label class="text-label" for="thirdCouncilCountryPreference">Country preference for 3rd council (Max. 3 countries)</label>
                <p class="registration-info">
                        <span class='info'></span>
                        <span class='required'>*Required</span>
                </p>
                
            </div>
        </div>

        <div class="registration-row">
            <div class="registration-col r-col-12">
                <input type="text" class="form-input" name="thirdCouncilReason" id="thirdCouncilReason" placeholder=' ' required/>
                <label class="text-label" for="thirdCouncilReason">What makes you choose your 3rd council preference ?</label>
                <p class="registration-info">
                        <span class='info'></span>
                        <span class='required'>*Required</span>
                </p>
                
            </div>
        </div>

        <h2 class='my-5'>Double Delegate Option<br>&mdash;</h2>

        <div class="registration-row">
            <div class="registration-col r-col-12">
                <input type="text" class="form-input" name="doubleDelegateName" id="doubleDelegateName" placeholder=' '/>
                <label class="text-label" for="doubleDelegateName">Double Delegate's name</label>
                <p class="registration-info">
                        <span class='info'>(Fill if you choose WHA and/or UNSC)<br>Make sure that your double delegate also fill the registration form separately.</span>
                        <span class='required'></span>
                </p>
                
            </div>
        </div>

        <div class="registration-row">
            <div class="registration-col r-col-12">
                <input type="text" class="form-input" name="doubleDelegateInstitution" id="doubleDelegateInstitution" placeholder=' '/>
                <label class="text-label" for="doubleDelegateInstitution">Double Delegate's institution</label>
                <p class="registration-info">
                        <span class='info'></span>
                        <span class='required'></span>
                </p>
                
            </div>
        </div>

        <div class="registration-row mt-5">
            <div class="registration-col r-col-12 nav-button-wrapper">
                <a onclick="back()" class="button-white-transparent" href="#hero">Previous</a>
                <a onclick="summary('#form-individual-page-4')" class="button-white-transparent" href="#hero">Next</a>
            </div>
        </div>

    </div>
</div>