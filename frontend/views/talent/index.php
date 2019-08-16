<?php

use \yii\web\View;
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use frontend\assets\TalentProfileAsset;

TalentProfileAsset::register($this);


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
                                    <span class="frstName">David</span>
                                    <span class="lastName">Yan</span>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <nav class="nav flex-column leftBarProfileNavi">
                                    <a class="nav-link active" href="#"><i class="fas fa-home"></i>    Home</a>
                                    <a class="nav-link" href="#"><i class="fas fa-address-book"></i>    Contacts</a>
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
                                                <span class="userNameTextSpan userMainInfoTextSpan">David Yan</span>
                                                <span class="userPositionTextSpan userMainInfoTextSpan userProfileAditionalInfo">Position</span>
                                                <span class="userBirthdayTextSpan userMainInfoTextSpan userProfileAditionalInfo">Birthday</span>
                                                <span class="userLocationTextSpan userMainInfoTextSpan userProfileAditionalInfo">Location</span>
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
                                         id="pills-projects-tab" 
                                         data-toggle="pill" 
                                         data-controller="talents-projects"
                                         href="#pills-projects" 
                                         role="tab" 
                                         aria-controls="pills-projects" 
                                         aria-selected="false"><?=Yii::t('talents_tab_menu','Projects')?></a>
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
                                    <li class="nav-item">
                                      <a class="nav-link talentsProfileTabNavigation" 
                                         id="pills-createCV-tab" 
                                         data-toggle="pill" 
                                         data-controller="create-cv"
                                         href="#pills-createCV" 
                                         role="tab" 
                                         aria-controls="pills-createCV" 
                                         aria-selected="false">Create CV</a>
                                    </li>
                                </ul>
                                <div class="tab-content profileOptionLists" id="pills-tabContent">

                                    <div class="tab-pane fade active in" 
                                         id="pills-profileDetails" 
                                         role="tabpanel" 
                                         aria-labelledby="pills-profileDetails-tab"
                                         >
        <!--Profile details begin---->
                                        <div id="profile-details" class="row dragableArea">
                                            <div class="col-md-6">
                                                <div class="profile-details-left row"></div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="profile-details-right row"></div>
                                            </div>
                                        </div>
                                        <div class="tabFooterButtonLayer">
                                            <button class="visiblitySettings">Visibility Settings</button>
                                        </div>
        <!--Profile details end---->
                                    </div>
                                    <div class="tab-pane fade" 
                                         id="pills-projects" 
                                         role="tabpanel" 
                                         aria-labelledby="pills-projects-tab"
                                         >
                                        
                                    </div>
                                    <div class="tab-pane fade" 
                                         id="pills-activity" 
                                         role="tabpanel" 
                                         aria-labelledby="pills-activity-tab"
                                         >
                                        Activity
                                    </div>
                                    <div class="tab-pane fade" 
                                         id="pills-createCV" 
                                         role="tabpanel" 
                                         aria-labelledby="pills-createCV-tab"
                                         >
                                        Create CV
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