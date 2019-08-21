<?php

use \yii\web\View;
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use frontend\assets\CompanyProfileAsset;
CompanyProfileAsset::register($this);

?>

<!---Section Begin--->
<section>
    <div class="row sectionMainBar">
        <div class="col-md-2">
            <div class="leftSidbar">
                <div class="row">
                    <div class="col-md-6">
                        <div class="profilInfoImage">
                            <img src="img/profileDefaultSmall.png">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="profilInfoName">
                            <span class="frstName">Comany</span>
                            <span class="lastName">Name</span>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <nav class="nav flex-column leftBarProfileNavi">
                            <a class="nav-link active" href="#"><i class="fas fa-home"></i>Home</a>
                            <a class="nav-link" href="#"><i class="fas fa-address-book"></i>Contacts</a>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-10">
<!--Top Profile Block begin-->
            <div class="row">
                <div class="col-md-12">
                    <div class="profileHeadBlock">
                        <div class="profileTimelineBackground">
                        </div>
                        <div class="topProfileInfoMain">
                            <div class="row">
                                <div class="col-md-11">
                                    <div class="profileImage">
                                        <img src="img/defaultManPictureBig.png">
                                    </div>
                                    <div class="userInfoTexts">
                                        <span class="userNameTextSpan userMainInfoTextSpan">Company name</span>
                                        <span class="userPositionTextSpan userMainInfoTextSpan userProfileAditionalInfo">Industry</span>
                                        <span class="userLocationTextSpan userMainInfoTextSpan userProfileAditionalInfo">Location</span>
                                        <span class="userBirthdayTextSpan userMainInfoTextSpan userProfileAditionalInfo">Website</span>
                                        
                                    </div>
                                </div>
                                <div class="col-md-1">
                                    <button class="btn btn-info settingsToolButtonProfileRight"><i class="fas fa-ellipsis-h"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
<!--Top Profile Block end-->
<!--Tab Menu Block Begin-->
            <div class="row">
                <div class="col-md-12">
                    <div class="tabMenuBlock">
                        <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                            <li class="nav-item active">
                                <a class="nav-link talentsProfileTabNavigation" 
                                   id="pills-profileDetails-tab" 
                                   data-toggle="pill" 
                                   data-controller="default"
                                   href="#pills-profileDetails" 
                                   role="tab" 
                                   aria-controls="pills-profileDetails" 
                                   aria-selected="true"><?=Yii::t('talents_tab_menu','Profile details')?></a>
                            </li>
                            <li class="nav-item">
                              <a class="nav-link talentsProfileTabNavigation" 
                                 id="pills-talents-requests-tab" 
                                 data-toggle="pill" 
                                 data-controller="talents-talents-requests"
                                 href="#pills-talents-requests" 
                                 role="tab" 
                                 aria-controls="pills-talents-requests" 
                                 aria-selected="false"><?=Yii::t('talents_tab_menu','Talents requests')?></a>
                            </li>
                            <li class="nav-item">
                              <a class="nav-link talentsProfileTabNavigation" 
                                 id="pills-activity-tab" 
                                 data-toggle="pill" 
                                 href="#pills-activity" 
                                 data-controller="activity"
                                 role="tab" 
                                 aria-controls="pills-activity" 
                                 aria-selected="false">Activity</a>
                            </li>
                            
                        </ul>
                        <div class="tab-content profileOptionLists" id="pills-tabContent">

                            <div class="tab-pane fade active in" 
                                 id="pills-profileDetails" 
                                 role="tabpanel" 
                                 aria-labelledby="pills-profileDetails-tab"
                                 >

                                <div id="company-details" class="dragableArea">
                                    <form action="/" method="post" class="row">
                                        <div class="col-md-4">
                                            <div class="form-group required">
                                                <label>Company name</label>
                                                <input type="text" class="form-control" name="companyData[name]" aria-required="true">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group required">
                                                <label>Company legal form</label>
                                                <input type="text" class="form-control" name="companyData[legal_form]" aria-required="true">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group required">
                                                <label>Founded in</label>
                                                <input type="text" class="form-control" id="companyFoundeYear" name="companyData[founded_year]" aria-required="true">
                                            </div>
                                        </div>

                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>About the company</label>
                                                <textarea name="companyData[about]" class="form-control" cols="30" rows="10" placeholder="Write about your company ..."></textarea>
                                            </div>
                                        </div>



                                        <div class="col-md-4">
                                            <div class="form-group required">
                                                <label>Taxpayers Identification Number (TIN)</label>
                                                <input type="text" class="form-control" name="companyData[tin]" aria-required="true">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group required">
                                                <label>Industry</label>
                                                <select class="form-control"name="companyData[industry]" aria-required="true">
                                                    <option value="" selected="">Industry 1</option>
                                                    <option value="">Industry 2</option>
                                                    <option value="">Industry 3</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group required">
                                                <label>Segment</label>
                                                <select class="form-control"name="companyData[segment]" aria-required="true">
                                                    <option value="" selected="">Segment 1</option>
                                                    <option value="">Segment 2</option>
                                                    <option value="">Segment 3</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group required">
                                                <label>Employees</label>
                                                <select class="form-control"name="companyData[employees]" aria-required="true">
                                                    <option value="" selected="">Employeer 1</option>
                                                    <option value="">Employeer 2</option>
                                                    <option value="">Employeer 3</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="clearfix"></div>


                                        <div class="col-md-6">
                                            <div class="form-group required">
                                                <label>Company's website</label>
                                                <input type="text" class="form-control" name="companyData[website]" aria-required="true">
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group required">
                                                <label>Email</label>
                                                <input type="email" class="form-control" name="companyData[email]" aria-required="true">
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group required">
                                                <label>Country</label>
                                                <select class="form-control"name="companyData[country]" aria-required="true">
                                                    <option value="" selected="">Country 1</option>
                                                    <option value="">Country 2</option>
                                                    <option value="">Country 3</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group required">
                                                <label>Address</label>
                                                <input type="text" class="form-control" name="companyData[zddress]" aria-required="true">
                                            </div>
                                        </div>


                                        <div class="col-md-4">
                                            <div class="form-group required">
                                                <label>Phone number</label>
                                                <input type="text" class="form-control" name="companyData[phune_number]" aria-required="true">
                                            </div>
                                        </div>
                                        <div class="clearfix"></div>

                                        <div class="col-md-4">
                                            <div class="form-group required">
                                                <label>Contact person name</label>
                                                <input type="text" class="form-control" name="companyData[contatc_person_name]" aria-required="true">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group required">
                                                <label>Contact person position</label>
                                                <input type="text" class="form-control" name="companyData[contatc_person_postion]" aria-required="true">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group required">
                                                <label>Contact person mobile</label>
                                                <input type="text" class="form-control" name="companyData[contatc_person_mobile]" aria-required="true">
                                            </div>
                                        </div>

                                        <div id="contact-update-section">
                                            <input type="reset" value="Cancel"/>
                                            <input type="submit" value="Update"/>
                                        </div>

                                    </form>
                                </div>

                            </div>
                            <div class="tab-pane fade" 
                                 id="pills-talents-requests" 
                                 role="tabpanel" 
                                 aria-labelledby="pills-talents-requests-tab"
                                 >
                                talents-requests
                            </div>
                            <div class="tab-pane fade" 
                                 id="pills-activity" 
                                 role="tabpanel" 
                                 aria-labelledby="pills-activity-tab"
                                 >
                                Activity
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
<!--Tab Menu Block End-->
        </div>
    </div>
</section>

<!---Section End--->